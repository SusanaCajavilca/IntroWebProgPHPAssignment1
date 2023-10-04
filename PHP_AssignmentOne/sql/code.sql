-- This the code used in MySQL to create the Table Order, which will store the orders(data)

CREATE TABLE Orders (
    id int not null auto_increment,
    fullname varchar(255) NOT NULL,
    fulladdress varchar(255) NOT NULL,
    phonenumber varchar(12) NOT NULL,
    email varchar(255) NOT NULL,
    size varchar(255) NOT NULL,
    dough varchar(255) NOT NULL,
    base_cheese varchar(255) NOT NULL,
    base_sauce varchar(255) NOT NULL,
    veggieTopping varchar(255) NOT NULL,
    meatTopping varchar(255) NOT NULL,
    cheeseTopping varchar(255) NOT NULL,
    quantity int NOT NULL,
    sides varchar(255) NOT NULL,
    drink varchar(255) NOT NULL,
    dippingSauce varchar(255) NOT NULL,
    primary key (id)
);

