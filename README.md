## About the project

This project has been developed based on the requirement in an assesment. Developed with Laravel 8, Application is a simple API with protected routes which are authenticated by auth tokens. 

•	Author: [Asela Dewanarayana](https://github.com/Aseladss) <br>


## Database Setup

DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=clinic<br>
DB_USERNAME=root<br>
DB_PASSWORD=<br>

Next up, we need to create the database which will be grabbed from the ```DB_DATABASE``` environment variable.
```
mysql;
create database clinic;
exit;
```

Finally, make sure that you migrate your migrations.
```
php artisan migrate

## Features

- **Login API:**
  - Provide a access token in the login.
  - No registration is required.

- **Get Patient Details API:**
  - Retrieve individual patient details by providing the external patient ID.


## Technologies Used

- Backend: Laravel 8
- Database: MySQL
- Authentication: Sanctum

## Usage

- Start the application and access the provided API endpoints.
- Use the Login API to authenticate staff users and obtain access tokens.
- Utilize the Get Patient Details API to retrieve specific patient information.

## API Endpoints

- **Login API:**
  - Endpoint: `/login`
  - Method: `POST`
  - Parameters: `email`, `password`
  - Returns: `access_token`

- **Get Patient Details API:**
  - Endpoint: `/patient/{external_patient_id}`
  - Method: `GET`
  - Returns: 
{
    "patient_id": 69270,
    "first_appointment_id": null,
    "invoice": [
        168009,
        170745,
        170748
    ],
    "total_receipts": 1,
    "receipts": [
        110338
    ],
    "first_receipt_date": "2018-02-02",
    "first_invoice_date": "2018-02-02",
    "first_appointment_date": null,
    "patient_created_date": "2023-06-08"
}


## Contact

For questions or feedback, please contact Asela Dewanarayana at asela.positive@gmail.com

