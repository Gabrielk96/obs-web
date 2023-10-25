

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

/var/www/obs-web.rs.umbc.edu/lib/tpl/bootstrap3/tpl/footer.php -> /usr/obs/git/obs-web/lib/tpl/bootstrap3/tpl/footer.php
This footer.php removes the dokuWiki logo and also adds Gabriel's secret cat thingy :)

/var/www/obs-web.rs.umbc.edu/lib/tpl/bootstrap3/tpl/navbar.php -> /usr/obs/git/obs-web/lib/tpl/bootstrap3/tpl/navbar.php
This sets the behavior of the top navigaton bar.

/var/www/obs-web.rs.umbc.edu/lib/tpl/bootstrap3/tpl -> /usr/obs/git/obs-web/lib/tpl/bootstrap3/tpl
SymLink of entire tpl directory to provide relative linking to php files


/bin/blog -> /usr/obs/git/obs-web/root/bin/blog (root = /)
Added blog creating script

/bin/blog_service.sh -> /usr/obs/git/obs-web/root/bin/blog_service.sh (root = /)
Added bash script to monitor blog directory

/var/www/obs-web.rs.umbc.edu/lib/tpl/bootstrap3/main.php -> /usr/obs/git/obs-web/lib/tpl/bootstrap3/main.php
Changed main.php to enable table of contents only for wiki posts.
