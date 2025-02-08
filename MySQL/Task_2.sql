-- Query all columns for all American cities in the CITY table with populations larger than 100000. 
-- The CountryCode for America is USA.
select * from city where population > 100000 and countrycode = 'USA';

-- Query the NAME field for all American cities in the CITY table with populations larger than 120000.
-- The CountryCode for America is USA.
select name from city where population > 120000 and countrycode = 'USA';

-- Query all attributes of every Japanese city in the CITY table. 
-- The COUNTRYCODE for Japan is JPN.
select * from city where countrycode = 'JPN';

-- Write a query that prints a list of employee names (i.e.: the name attribute) from the Employee table in alphabetical order.
select name from Employee order by name;

-- Write a query that prints a list of employee names (i.e.: the name attribute)
-- for employees in Employee having a salary greater than 2000 per month who have been employees for less than 10 months. 
-- Sort your result by ascending employee_id.
select name from Employee  where salary > 2000 and months  < 10 order by employee_id;

-- Query the Name of any student in STUDENTS who scored higher than 75 Marks.
-- Order your output by the last three characters of each name.
-- If two or more students both have names ending in the same last three characters (i.e.: Bobby, Robby, etc.),
-- secondary sort them by ascending ID.
select name from STUDENTS where marks > 75 order by Right(name , 3) , ID ASC;

-- Tesla is investigating production bottlenecks and they need your help to extract the relevant data.
-- Write a query to determine which parts have begun the assembly process but are not yet finished.
SELECT part,assembly_step FROM parts_assembly where finish_date isNULL;