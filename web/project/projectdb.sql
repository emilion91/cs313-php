CREATE TABLE employees (employeeid SERIAL PRIMARY KEY, firstn TEXT, lastn TEXT, email TEXT, clearence INTEGER, password TEXT, whid INTEGER );

CREATE TABLE warehousename (numproducts SERIAL PRIMARY KEY, productid INTEGER REFERENCES products(productid), productn TEXT, instock INTEGER);

CREATE TABLE warehouses ( warehouseid SERIAL PRIMARY KEY, managerid INTEGER REFERENCES employees(employeeid), whname TEXT, whaddress TEXT);

CREATE TABLE products (productid SERIAL PRIMARY KEY, productname TEXT UNIQUE);
