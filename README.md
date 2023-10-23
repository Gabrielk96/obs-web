

==Config Files for Doku==
/var/www/obs-web.rs.umbc.edu/lib/tpl/bootstrap3/tpl/sidebar.php -> /usr/obs/git/obs-web/lib/tpl/bootstrap3/tpl/sidebar.php
This sidebar.php controls the sidebar that is visible on all obs-web.rs.umbc.edu/doku pages.
We only changed some spacing:
<style>
        .dw__sidebar{
                margin-left: -35px;
                width: 110px;
        }
</style>

/var/www/obs-web.rs.umbc.edu/conf/local.php -> /usr/obs/git/obs-web/conf/local.php
This is the local copy of the configuration of DokuWiki. This can be modified by admin users in the WebGUI.
As of 20231023, this local config was working.

NOTE: Gabriel and Roy noticed some weirdness with this migration to a symbolic link. Perhaps restart httpd?

NOTE: If a user needs local (password) login to dokuWiki, comment out the line: 
```
$conf['plugin']['oauth']['singleService'] = 1;
```

