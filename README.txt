DISPATCH WEBSITE - UPLOAD GUIDE (InfinityFree)

PART 1 - Create the database (needed for login / sign up)
1. InfinityFree > Control Panel > MySQL Databases. Create a database (e.g. "dispatch").
2. Write down: MySQL hostname (like sql123.infinityfree.com), database name (if0_xxxx_dispatch),
   username (if0_xxxx) and your password (your hosting account password).
3. Click "Admin" (phpMyAdmin) next to the database > open the SQL tab > paste everything from schema.sql > Go.

PART 2 - Edit config.php
4. In config.php change the 4 lines at the top (DB_HOST, DB_NAME, DB_USER, DB_PASS) to your details.

PART 3 - Upload
5. Online File Manager > open 'htdocs' > delete the default index2.html.
6. Upload ALL files from this folder (including config.php, .htaccess and the .php files) straight into htdocs.
7. Visit your domain. index.php is the home page.

See who signed up: phpMyAdmin > your database > table 'users'.

LOCKED PAGES (need login): loads-local.php, loads-outside.php, truck-30t.php, truck-superlink.php, truck-reefer.php,
truck-notrailer.php, truck-below30.php, truck-work.php. Open to everyone: home, truck-sourcing.html, load-dispatch.html,
truck-sale.html (Trucks for Sale), login and sign up.
