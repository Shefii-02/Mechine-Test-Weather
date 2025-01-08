
# Mechine Test Task for Weather  and Fetch Electronics  Categories only



## Screenshots

Fetched Eletronics Items Only

![App Screenshot](https://raw.githubusercontent.com/Shefii-02/Mechine-Test-Weather/main/public/assets/screenshots/electronics-products.png)

Get Only Paris Based Weather details 

![App Screenshot](https://raw.githubusercontent.com/Shefii-02/Mechine-Test-Weather/main/public/assets/screenshots/wheather-details.png)



results from not found city based Bengaluru Based Weather details 
Url : /weather?city=Bengaluru

![App Screenshot](https://raw.githubusercontent.com/Shefii-02/Mechine-Test-Weather/main/public/assets/screenshots/city-not-found.png)


results from Api city based Paris Based Weather details 
Url : /api/get-weather?city=Paris&appid=b4441447c3d8596e27dccdfbddab5728


![App Screenshot](https://raw.githubusercontent.com/Shefii-02/Mechine-Test-Weather/main/public/assets/screenshots/where-details-from-api.png)



Error Message for Api doesn`t match


![App Screenshot](https://raw.githubusercontent.com/Shefii-02/Mechine-Test-Weather/main/public/assets/screenshots/api-error.png)




Functions 

Fetch Electronics  Categories

City Based Weather Details get using API 

## Installation
Follow these instructions to set up and run the project locally on your machine.

### Prerequisites

- [Git](https://git-scm.com/)
- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)
- [XAMP](https://www.apachefriends.org/)

### Installation

1. Clone the repository:

```bash
   git clone https://github.com/Shefii-02/Mechine-Test-Weather.git
```
 ```bash
   cd Mechine-Test-Weather
```

 ```bash
composer install
```
 ```bash
npm install
```


 ```bash
 php artisan migrate:fresh --seed
```
Terminal open

 ```bash
php artisan db:seed --class=WeatherData
php artisan db:seed --class=ProductSeeder   




 Task 1) Eletronics Items only get url

/electronics

 Task 2) Landon based Weather details 

/weather?city=Landon

