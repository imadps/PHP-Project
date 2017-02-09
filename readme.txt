1. Template was implemented using bootstrap framework.
2. HTML/JS code is mainly in index.php file, however, some parts of it were distributed to other files in includes folder such as newcustomer.php where the html form of new customer can be found.
4. Creation of database called oop, and table called queue with 5 rows (id(int), name(VARCAR), type(VARCAR), service(VARCAR), time(date).
3. in includes folder, the config.php file comntains the database connection parameters and request and in database.php, it contains database class with methods i.e. open database connection using counstructor, SQL query.
4. PHP codes were written in index.php, JS codes as well to select the group buttons and assign values into the html input. 
5. The script has a couple of validation checks, i.e. if fields are empty, if they contain numric digits, and all inputs are cleaned up using mysqli_escape function
