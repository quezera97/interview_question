--------------------
U-REG Exchange Rate
--------------------

This app consists of 2 part which are backend and frontend folder

Backend Setup (Laravel)
---------------------------------------------------
```sh
1. cd backend
2. composer i
3. cp .env.example .env
4. php artisan key:generate
5. php artisan migrate --seed
6. php artisan serv
```


Frontend Setup (Vue.js)
---------------------------------------------------
```sh
1. cd frontend
2. npm i
3. npm run dev
```

Docker (optional)
---------------------------------------------------
```sh
# use .env file from Backend folder
docker-compose --env-file backend/.env up 
```

.env for database 
1. DB_USERNAME must be other than root
2. DB_PASSWORD cannot be empty

.env database setup example
----------------------
```sh
DB_CONNECTION=mysql
DB_HOST=database # Docker database service
DB_PORT=3306
DB_DATABASE=ureg
DB_USERNAME=ureguser
DB_PASSWORD=uregpassword
```

if database have no data, seed it
```sh
docker exec -it ureg-backend php artisan migrate:fresh --seed
```

