READ ME:

Warning: This is a brief overview on how to set-up a mySQL database,  most web Hosting providers provide in-depth explications on how to do this. 

(if you know how to set up a mySQL database go to set 4)

Step 1) Upload the contents of the portfolio folder onto your server.

Step 2) Log onto either your phpmyadmin through your hosting provider or download a program such as: 
		
		 MAC  : Sequel Pro
		
		HeidiSQL : PC
		
		(your going to have to connect it to your server, your server will also have to support SQL)
		
Step 3) On your server go into the portfolio/php/ and edit the dbconnect.php File 

		3a) leave Hostname and BDname alone
		3b) change the values of $username and $password to the appropriate ones for your server. (you will have to set this up)

Step 4) Once the dbconnect is in order your are going to go back into your SQL interface and Import a database. once you do that
				it will prompt you with a file upload. Go into the resources folder that was provided with this and select the setupDatabase.txt file.
				
Step 5) your database should now be set up. 

Step 6) now open up a web broswer and go to your new portfolio site. once there add /admin.php to the url, you will be redirected to a login screen, the default password is admin.

Step 7)Chnage the default password, Homepage, Footer and start added Projects.