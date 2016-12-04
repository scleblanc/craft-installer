# Craft Install Script

This repo contains a script to install Craft CMS programmatically 
rather than having to go through the web installer. 

In the original use case, this script was used to install Craft 
as part of an ansible provisioning role, like so:

```
- name: installing craft
  shell: "curl -G 'http://my-project.dev/install.php' --data-urlencode 'username={{ craft_user }}' --data-urlencode 'email={{ craft_email }}' --data-urlencode 'password={{ craft_password }}' --data-urlencode 'site_name={{ craft_title }}' --data-urlencode 'project_name={{ app }}'"
```

Some notes to keep in mind:

* Craft must already have been downloaded
 * This script should be placed in the `public/` directory adjacent to craft's installation (`craft/`)
* Craft's database config file (`craft/config/db.php`) must be configured to point the app's database
