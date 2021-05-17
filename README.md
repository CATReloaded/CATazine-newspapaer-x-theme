# catazine blog website


create `.env` file with this structure
```
MYSQL_ROOT_PASSWORD=pass
MYSQL_USER=cat
MYSQL_PASSWORD=pass
```

move the theme and uploads to the docker volume that contain wordpress files
```
cp -r <source_path> /var/lib/docker/volumes/catazine_wordpress_catazine/_data/wp-content/themes
cp -r <source_path>/uploads/* /var/lib/docker/volumes/catazine_wordpress_catazine/_data/wp-content/uploads/
chown -R 82:82 /var/lib/docker/volumes/catazine_wordpress_catazine/_data/wp-content/uploads/
```

edit the exml file expoted by search and replace each of <old_domain> to `http://webserver/` which is the name of nginx server in the docker compose file
if you did this add the next line in the end of `functions.php` file
```
add_filter( 'http_request_host_is_external', '__return_true' );
```

get logs by running

```
docker-compose logs -f
```

access database by:
```
docker exec -it db bash
mysql -u cat -p
```


# Resources
- Enable debugging mode for WordPress Importer: [here](https://devowl.io/2020/wordpress-fix-failed-to-import-media-error/#:~:text=In%20rare%20cases%20the%20error,you%20want%20to%20import%20them.)
- Increase PHP file upload limit im docker: [here](https://github.com/docker-library/wordpress/issues/10)
- this answer may have something new: [here](https://wordpress.stackexchange.com/a/372304/77167)