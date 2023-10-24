

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


/usr/obs/git/obs-web/root/bin/blog
Added blog creating script

/usr/obs/git/obs-web/root/bin/blog_service.sh
Added bash script to monitor blog directory

