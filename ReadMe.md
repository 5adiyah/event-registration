#NOTES ON LEARNING LARAVEL

**What I've Done So Far:**
  - Install LARAVEL
  - `php artisan serve` to create local dev server
  - Create Application key
  - Learn Directory Structure
  - *FAIL* Attempted to use Homestead
    - Missing a program that computer wont let me download
    - Vagrant Box
  - *FAIL* Attempted to use Valet
    - No idea about this one
  - Learn Basic Routing and Views
  - Set up Database and Tables
  - Pass data to my Views
  - Use Query Builder to access and query Database
  - Use Eloquent 101 instead of Query Builder for **Active Record Implementation**
  - Create a Controller
  - Move application logic out of the route and into the Controller
  - Use Route Model Binding to access instances of an Event
  - Create a layouts file and connect to other layouts plus css file
  - When creating forms, you have to add `{{ csrf_field() }}` to protect your data



**BUGS**

  - Valet returns unknown host
    - *FIX* - None so Far

  - `php artisan migrate` --> Cannot declare class CreateEventsTable, because the name is already in use
    - *FIX* - ^C and run `php artisan migrate:refresh`

  - `php artisan migrate` --> SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) (SQL: select * from information_schema.tables where table_schema = registrationapp and table_name = migrations)
    - *FIX* - Delete migration file and run `php artisan migrate`

  - Css not showing up --> `<link href="{{URL::asset('css/styles.css')}}" rel="stylesheet">`

**Debugging**

  - `dd(request()->all());` kind of like console.log
