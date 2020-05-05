# M133-Project - everone

# Introduction

We have created a group of 4 members in class BI17b. Among them are the following team members: 
Francesco De Nuccio, Drilon Krasniqi, Alessio Benintende and Alexander Schwerzmann. 
With this grouping we can divide the tasks very well and are making good progress. 
As we have already proven our cooperation in various projects and this has always been positive.

Our goal is that we create a website where you can log in and
then use our tool. We would like to create an online note platform, where
every user can take notes.

Our preparation consists of creating a GitHub repository, all
team members and then upload the documents for our
Deposit website.

The tasks were split like this:
Create a design: All of us
Pick out the hoster: Krasniqi Drilon
Execute the design and create the web pages: Benintende Alessio, Schwerzmann Alexander
PHP,functionality, database connection: De Nuccio Francesco Krasniqi Drilon

# Documentation
## Archtecture
Our web page is simply built and consists of three layers:
Presentation layer that includes HTML and CSS.
Backend layer that includes PHP.
Data layer where we used a MySQL database.

## Technology
As previously mentioned we are using PHP which is easy to use and learn.
There have been many web pages that have used PHP.. However, it is slowly dying out and being replaced by C#, Javascript, Python etc.
One of the other reasons why we used PHP is that the teacher is familiar with the technology and could help us, if there was any need of it.

## Application design
### Flow
As you type in http://everone.me you will be redirected to our main page, index.php.
From there on you can choose between "Register" or "Login".
#### Registration
On the "Register" page you can create an account with information such as your username, e-mail and password. This will send your data to our database.
We want that the username and e-mail to be unique, therefor if you enter an already existing user, it will warn you and not let you create a user. This check is done in our database.

![alt text](https://github.com/fdenuccio/M133-everone/blob/master/images/username_already_in_use.png "Username is already in use")

![alt text](https://github.com/fdenuccio/M133-everone/blob/master/images/email_already_in_use.png "E-Mail is already in use")

If your repeated password doesn't match you first password, it will also give you a warning. 

![alt text](https://github.com/fdenuccio/M133-everone/blob/master/images/password_dont_match.png "Passwords do not match")

However, if everything is fine, the e-mail and username are unique and the passwords match, it will create an entry in our database. For additional security the chosen password by the user is  getting hashed and then being added.

#### Login
If you already have a user, you can log in with your e-mail and your chosen password.
The hash value of the password gets created before getting sent to the database. There the two hash values get compared, if they match you will be granted access to your account.
If the e-mail and the password don't match, it will tell you, that the credentials are invalid.

![alt text](https://github.com/fdenuccio/M133-everone/blob/master/images/invalid_credentials.png "Invalid credentials")

## Application Structure
Our application structure was very easily built. 

**css** All our design layouts are here saved in this folder.
**html** The very few HTML sites that we had, are in this folder.
**images** All the images used for our page are located here.
**js** If we had needed any javascript files, they would've gone in here. However for now it was just a placeholder.
**php** This is the most important folder with all our PHP pages.
**First layer** On here is our index page.

![alt text](https://github.com/fdenuccio/M133-everone/blob/master/images/application_structure.png "Application Structre")

# GUI

First we created a mockup for our webpage to have some kind of idea how it should look.
![alt text](https://github.com/fdenuccio/M133-everone/blob/master/images/mockup.png "Mockup Everone")

With this mockup it was easy for us to get the final design of our webpage. 

**Login Page**
![alt text](https://github.com/fdenuccio/M133-everone/blob/master/images/login.png "Login Page")

**Register Page**
![alt text](https://github.com/fdenuccio/M133-everone/blob/master/images/register.png "Register Page")

# Test Cases

| Test Case    | C01 False data input in register and login form.                                                                              |
|--------------|-------------------------------------------------------------------------------------------------------------------------------|
| Goal         | The input is being tested of existing data or wrong passwords.                                                                |
| Input        | Username: M133 (already in database) <br/> E-Mail: m133@everone.me (already in the database) <br/> Password: M133.TBZ Repated: M122.TBZ | 
| Shall-Value  | E-Mail is already in use. Username is already in use. Passwords do not match.                                                 |
| Is-Value     | ![alt text](https://github.com/fdenuccio/M133-everone/blob/master/images/username_already_in_use.png "Username is already in use") <br/> ![alt text](https://github.com/fdenuccio/M133-everone/blob/master/images/email_already_in_use.png "E-Mail is already in use") <br/> ![alt text](https://github.com/fdenuccio/M133-everone/blob/master/images/password_dont_match.png "Passwords do not match") |

| Test Case    | C02 Wrong password when logging in.                                                                              |
|--------------|-------------------------------------------------------------------------------------------------------------------------------|
| Goal         | The user won't be able to log in.                                                                 |
| Input        | Username: M133 <br/> E-Mail: m133@everone.me (already in the database) <br/> Password: M133.TBZ Repated: M122.TBZ | 
| Shall-Value  | E-Mail is already in use. Username is already in use. Passwords do not match.                                                 |
| Is-Value     | |


## Reflexion-Alessio:
Dieses Modul war eine gute Gelegenheit, um HTML und PHP wiederaufzufrischen.
Es war eine neue und spannende Erfahrung das Modul über Homeschooling durchzuführen.
Im grossem ganzen war es ganz gemütlich zuhause zu arbeiten, doch das Problem dabei ist, dass man mehr Ablenkung als sonst hat und sich nicht immer gut konzentrieren kann.
Schlussendlich fand ich das Modul ganz in Ordnung und die Team Arbeit machte mir Spass.

## Reflexion-Drilon:
Das Modul war im Grossen ganzem relativ in Ordnung. Doch die Anfangsaufgaben fand ich persönlich unnötig. Wir haben damit sehr viel Zeit investiert und hatten somit weniger Zeit für das Projekt selber. Am Schluss bekamen wir relativ grossen Stress das Projekt noch fertig zu stellen. Das allerbeste fand ich von zuhause aus zu arbeiten. Denn ich kann viel länger schlafen als sonst und auch früher Feierabend haben als sonst, so ist es das beste was passiert ist. Die Team Arbeit machte mir Spass und durch das Modul konnte ich alles nochmals neu auffrischen.

