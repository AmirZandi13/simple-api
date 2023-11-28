## About This Project

This task is to build a simple api with Symfony 6 and api-platform 3.

## Solution Explanation

At first, I installed the project with Symfony version 6 and API-Platform version 3,
then I added two APIs named Car and Review.
After their requirements like field type consideration and data validations, I added
and API to fetch reviews of a car.
Finally I made the project dockerize.

## Brief

1. Create the Car entity with the following fields: brand, model, and color.
2. Create the Reviews entity with the following fields: star rating (from 1 to 10) and review text.
3. Implement a simple RESTful API using Symfony 6 and API Platform 3.
4. Utilize PostgreSQL DB as the database.
5. Use PHP 8 as the programming language.
6. Create a dockerized environment for the app.

## Requirements for this project
You should have these requirements:
#### PHP > 8
#### Symfony 6
#### API-Platform 3

## How to install this project

To do that, at first you should set your env variables,
for this part you can use this command:
#### cp .env.example .env

Then, run this command to install the project
#### docker-compose up -d

Next
#### docker exec -it simple-api-php-1 php bin/console doctrine:schema:create

## The end
I hope you enjoy from this project, please tell me your points about this project.

#### Amir Zandieh
#### Amirzandieh1@gmail.com

#### Thanks