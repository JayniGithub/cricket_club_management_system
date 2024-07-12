# Cricket Club Management System
***
This is web based project which I developed as individual project for my HND in IT. This is cricket club management system which providing few registration and booking facilities.
***

## General Info
***
This cricket club management system provide few facilities mainly member registration and ground booking. Apart from that there's a facility to upload payment reciepts for all the kind of payments seperately. As an example, after paying membership fee, there's a seperate form to submit data. Same for the ground booking payments.
***
### Member Registration
***
If anyone wish to join with the cricket club they can fill the form and register to the club, after submit the form then it redirect to select specific batch type by entering nic number. Once it completed registration will complete and will recieve an email mentioning membership fee and other relevant data(email is not working here as gmail removed their localhost gmail sending facility).
***
### Ground Booking
***
When you go to make booking for ground first you will see the calendar which display upcoming events and you can check whether your date is available or booked. If it is vacant, then you can continue by filling the booking form. Until your booking approved by admin calendar will not mark them as booked.
***
Once you submit the form, your booking request pending for approval. Pending bookings displays in admin dashboard and admin can approve them or decline the request. With that response, booked person will get an email mentioning their approval status and booking payments to their emails. (email is not working here as gmail removed their localhost gmail sending facility).
***
### Admin Panal
By entering username and password admin can log into the admin panel. Admin can check all the details about ground booking, member details, add coaches, check payments etc.
***
## Tools & Technologies
* Front-end Development - HTML / CSS / Javascript
* Backend Development - PHP
* Database - mysql
* Web Server - Apache
***
## Installation
***
Mainly, you have to install xampp server to the machine. As we use xampp server you have to clone the folder into c:\xampp\htdocs folder.
***
* git clone https://github.com/JayniGithub/cricket_club_management_system.git
* cd ../path/to/the/file
* start apache and mysql in xampp server
* open the browser and type localhost/cricket_club_managemt_system in address bar
***
## Collaboration
***
Here I have attched my database file as well. Import it into your database.
***
* DB name - myproject (please use this name)
***
![myprojectsql_file](./Database/myproject.sql)
***
#### Congratulation...!, You've successfully ran the project in your local server.
