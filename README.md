#This a basic role based authentication using middleware and different roles in laravel 

In this we have 
 - 1.SuperAdmin
 - 2.Admin
 - 3.Player
 - 4.Team 

Each user is protected by each middleware for example 
-In PlayerController they is 

``` php
public function __construct(){
    $this->middleware('player');
} 

```

This enables security as this can be accessed through the web , But as yes they is another
way by specifying the middleware at the end of route

```php
Route::get('')->middleware('admin');
```
