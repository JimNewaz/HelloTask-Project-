
<h1 align="center">
  <br>  
  HelloTask's Project
  <br>
</h1>





<p align="center">
  <a href="#key-features">Project Requirements</a> •
  <a href="#installation">How To Use</a> •
  <a href="#download">Download</a> •
  <a href="#user-guideline">User Guideline</a> •
  
</p>

![Screenshot_20230114_020617](https://user-images.githubusercontent.com/63665452/212410379-3793d41e-5989-4433-8ac2-5bf8c6a8ca14.png)

## Project-Requirements

** Basic Laravel Auth: ability to log in as an administrator 
** Use database seeds to create the first user with email admin@admin.com and password “password” 
** Use a theme like AdminLTE (whatever you prefer). 
** Companies DB table consists of these fields: Name (required), email, logo, website. 
** Use database migrations to create those schemas above. 
** Store companies’ logos in storage/app/public folder and make them accessible from public. 
** Use basic Laravel resource controllers with default methods – index, create, store etc. 
** Use Laravel’s validation function, using Request classes. 
** Employees DB table consists of these fields: First name (required), last name (required), Company (foreign key to Companies), 
email, phone. 
** CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and Employees.
** Use Laravel make: auth as the default Bootstrap-based design theme.

** Use the Datatables.net library to show tables – and make the rows editable and save via AJAX calls.
** Use Laravel’s pagination for showing the Companies/Employees list, 10 entries per page.
** Add an Export Button to download the data.
** Use events to notify the user when changing email/password.

** Email notification: send an email whenever a new user is registered (use Mailgun or Mailtrap), including an instant email and 
a follow-up email after 3 days of registration.

## Installation

To clone and run this application, you'll need [Git](https://git-scm.com) and Composer installed on your computer. From your command line:

```bash
# Clone this repository
$ git clone https://github.com/JimNewaz/HelloTask-Project-.git

```

Open the composer and run 

```bash
# Go to hellotask directory
  cd hellotask

# run application
  php artisan serve

```


## Download

You can [download](https://github.com/JimNewaz/HelloTask-Project-) the latest installable version of this project for Windows, macOS and Linux.

## User Guideline

1) Homepage 
![Screenshot_20230114_020617](https://user-images.githubusercontent.com/63665452/212410443-4bf71242-37db-4bdd-a5e2-04128ad534fa.png)

Admin Login Credentials: 
-> Email: ximnewaz@gmail.com
-> Password: 1234

User Login Credentials: 
-> Email: admin@admin.com
-> Password: password

<hr>

2) Admin Panel
![image](https://user-images.githubusercontent.com/63665452/212410710-c1d71f10-b043-4491-869b-26f74c078306.png)


-> Company Table
![image](https://user-images.githubusercontent.com/63665452/212411039-9db96e6b-7d0c-4a8e-b5f6-3987fa82df07.png)

-> Employee Table
![image](https://user-images.githubusercontent.com/63665452/212411109-c9392f5d-e6d7-4be2-bee8-c21174a522f1.png)


3) User Panel 
![image](https://user-images.githubusercontent.com/63665452/212410858-8ec1b84b-978c-49dd-b8f8-b5a8ac0b2721.png)


Company And Employee Details

![image](https://user-images.githubusercontent.com/63665452/212411217-3f1e3265-28ee-4a56-afeb-d102e472ad38.png)
![image](https://user-images.githubusercontent.com/63665452/212411267-85fd6d68-ecdf-4e74-ae9a-37ca078d9303.png)



---


