-- (first)Query the names of all the Japanese cities in the CITY table. The COUNTRYCODE for Japan is JPN.
select name from city where COUNTRYCODE  = 'JPN';



--(third) Query the list of CITY names from STATION that do not start with vowels. Your result cannot contain duplicates.
select distinct city from station where left(city , 1) NoT IN ('A','E','I','O','U');

--(fourth) Query the list of CITY names from STATION that do not end with vowels. Your result cannot contain duplicates.
select distinct city from station where right(city , 1)NoT IN ('a','e','i','o','u');

--(fifth)  Query the list of CITY names from STATION that do not start with vowels and do not end with vowels.
-- Your result cannot contain duplicates.
select distinct city from station  
where right(city , 1)NoT IN ('a','e','i','o','u') 
and left(city , 1) NoT IN ('A','E','I','O','U');

-- (sixth) Query the average population for all cities in CITY, rounded down to the nearest integer.
select floor(avg(population)) from city;

-- (seventh) Write a query to identify the top 2 Power Users who sent the highest number of messages on Microsoft Teams in August 2022. 
--Display the IDs of these 2 users along with the total number of messages they sent.
-- Output the results in descending order based on the count of the messages.
SELECT sender_id, COUNT(message_id) AS 	message_count FROM messages WHERE sent_date BETWEEN '2022-08-01' AND '2022-08-31' 
GROUP BY sender_id ORDER BY 	message_count DESC LIMIT 2;

