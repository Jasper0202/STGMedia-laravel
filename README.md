## Installation of the project
1. copy the .env.example to .env: ````cp .env.example .env````
2. Fill in your database credentials (the database must be empty!)
3. Install dependencies: ````composer install````
4. Generate app key: ````php artisan key:generate````
5. Run migrations: ````php artisan migrate````
6. Compile assets: ````npm run dev````