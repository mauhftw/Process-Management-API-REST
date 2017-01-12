
## REST API for managing Linux processes 

REST API capable of managing Linux processes (list, execute, renice, kill). API was developed with Laravel 4.2 and was served with Apache2 (Basic HTTP AUTH)

## Setup

Run the following command. This command will create the database and the user's credentials

- `php artisan migrate --seed`

## Credentials

- `user: admin`
- `password supersecret`

## Routes

API is conformed by 4 routes:

- `localhost/api/processes        -> Shows all the processes`
- `localhost/api/processes        -> Run a process`
- `localhost/api/processes/{id}   -> Repriorize a process by`
- `localhost/api/processes/{id}   -> Deletes a certain process by id`


## Example

1. show all processes

- `https://locahost/index.php/api/processes?user=admin&password=supersecret`

2. Run a process

-`https://locahost/index.php/api/processes?user=admin&password=supersecret`

formdata:
- `name = cmd` 
- `value = vi`

3. Repriorize a process

- `https://locahost/index.php/api/processes/4?user=admin&password=supersecret`

formdata:
- `name = prio` 
- `value = 5`

4. kill a process

- `https://locahost/index.php/api/processes/22?user=admin&password=supersecret`


