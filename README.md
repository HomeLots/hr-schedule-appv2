# This app runs Local Only  

 1. make sure you have composer, node.js, etc etc
 2. `composer install`
 3. `composer update`
 4. `npm install`
 5. `npm update`
 6. `php artisan migrate`
 7. start mysql
 8. In IDE terminal run `npm run dev` 
 9. In seperated terminal CD'd to application root `php artisan serve`

## Clear cache if `php artisan migrate` is giving you issues

`php artisan cache:clear`
`php artisan route:clear`
`php artisan config:clear`
`php artisan view:clear`
`php artisan event:clear`
or to do them all at once.
`php artisan optimize:clear`
