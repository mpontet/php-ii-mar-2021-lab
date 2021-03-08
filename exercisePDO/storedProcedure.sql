DROP PROCEDURE IF EXISTS phpcourse.updateCustomer;
DELIMITER $
CREATE PROCEDURE phpcourse.updateCustomer(
    old_firstname varchar(50),
    old_lastname varchar(50),
    new_firstname varchar(50),
    new_lastname varchar (50)
)
BEGIN
     UPDATE customers SET firstname=new_firstname, lastname=new_lastname WHERE firstname = old_firstname AND lastname = old_lastname;
END
$
DELIMITER;