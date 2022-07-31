DEMO : http://pacific-castle-21150.herokuapp.com
!!! HTTP not HTTPS

TUTORIAL 
 
    git clone git@github.com:msv1207/test.git

    composer install
    
    npm run build
    
    cp .env.exanple .env

    php artisan key:generate

    configurate .env

    cd ./docker

    docker-compose up -d
    
    docker exec -it php2 /bin/bash
    
    php artisan migrate (in docker)
    
    php artisan db:seed --class=UserSeeder (in docker)
    
    see result

    
