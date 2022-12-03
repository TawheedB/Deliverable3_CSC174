# CSC 174 Project
---
## Overview 

- In this project we created a static website that connects to a database in the cloud using Heroku and within that website one is able to insert data into the database and display the database.

---

## Team Members


- [@Tawheed Bayaz](https://github.com/TawheedB)
  - **Email:** Tawheedbayaz@csus.edu
- [@Javier Garcia](https://github.com/JavierGarciaJr)
  - **Email:** javiergarcia@csus.edu

---

## Link To The Website
>This website prompts you to enter a Name and a Patient ID number so it can be added into a dentist clinic Patient table in our database.
>> [Heroku Website](https://deliverable31.herokuapp.com)

---
## Path To The Php File
> This is our file which contains the code to prompt the user with text boxes that they can enter the data for the database
>> [Path to Index.php](https://github.com/TawheedB/Deliverable3_CSC174/blob/e6686b78cebe6bb5a11f4f0f2f902bffa54e07d8/index.php)

## Code


Indented SQL code to create our patient table

    create table PATIENT(
    PID	INT     NOT NULL,
    Pname      VARCHAR(15),
    primary key (PID));
