# Craft Install Script

This repo contains a script to install Craft CMS programmatically 
rather than having to go through the web installer. 

In the original use case, this script was used to install Craft 
as part of an Ansible role, like so:

```
- name: installing craft
  shell: "curl -G 'http://my-project.dev/install.php' --data-urlencode 'username={{ craft_user }}' --data-urlencode 'email={{ craft_email }}' --data-urlencode 'password={{ craft_password }}' --data-urlencode 'site_name={{ craft_title }}' --data-urlencode 'project_name={{ app }}'"
```

Some notes to keep in mind:

* Craft must already have been downloaded
 * This script should be placed in the `public/` directory adjacent to craft's installation (`craft/`)
* Craft's database config file (`craft/config/db.php`) must be configured to point the app's database
* If used in an Ansible task, the task should first check for an existing installation of Craft
  * A simple example of such a check would be `when: craft_installed.rc == 1`, where 
    `craft_installed_rc` is registered as `mysql -u{{ user }} -p{{ pw }} {{ app }} -e'show tables;'| grep 'craft_'`,
    assuming that you have not altered the default table prefix in `craft/config/general.php`
