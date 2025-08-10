--------------------
U-REG Exchange Rate
--------------------

Backend
---------------------------------------------------
1. composer i
2. cp .env.example .env
3. php artisan key:generate
4. php artisan migrate --seed
5. php artisan serv


Frontend
---------------------------------------------------
1. npm i
2. npm run dev

Docker
---------------------------------------------------
docker-compose --env-file backend/.env up

.env for backend 
DB_USERNAME must be other than root
DB_PASSWORD cannot be empty