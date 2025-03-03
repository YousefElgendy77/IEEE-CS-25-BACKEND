-- Type of Triangle
select 
    case 
        when a + b <= c or a + c <= b or b + c <= a then 'Not A Triangle'
        when a = b and b = c then 'Equilateral'
        when a = b or a = c or b = c then 'Isosceles'
        else 'Scalene'
    end AS type 
from triangles;


-- The PADS
select CONCAT(name, '(', LEFT(occupation, 1), ')') 
from occupations
order by name;

select CONCAT('There are a total of ', COUNT(occupation), ' ', LOWER(occupation), 's.') 
from occupations
group by occupation
order by COUNT(occupation), occupation;


-- New Companies
select 
    c.company_code, 
    c.founder, 
    COUNT(DISTINCT lm.lead_manager_code) AS total_lead_managers, 
    COUNT(DISTINCT sm.senior_manager_code) AS total_senior_managers, 
    COUNT(DISTINCT m.manager_code) AS total_managers, 
    COUNT(DISTINCT e.employee_code) AS total_employees
from Company C 
    LEFT JOIN Lead_Manager lm ON c.company_code = lm.company_code
    LEFT JOIN Senior_Manager sm ON c.company_code = sm.company_code
    LEFT JOIN Manager m ON c.company_code = m.company_code
    LEFT JOIN Employee e ON c.company_code = e.company_code
group by company_code, founder
order by c.company_code asc;


-- Average Population
select round(avg(population)) from city;


-- Symmetric Pairs
select a.X, a.Y 
from Functions a JOIN Functions b
ON a.X = b.Y and a.Y = b.X 
where a.X < a.Y
UNION 
select X, Y
from Functions 
where X = Y 
group by X, Y 
HAVING COUNT(*) > 1
order by X, Y;

-- Weather Observation Station 15
select ROUND(LONG_W, 4) 
from STATION
where LAT_N = (select MAX(LAT_N) from STATION where LAT_N < 137.2345);

-- Placements
select S1.Name
from Students S1
JOIN Friends F ON S1.ID = F.ID
JOIN Packages P1 ON S1.ID = P1.ID
JOIN Packages P2 ON F.Friend_ID = P2.ID
where P1.Salary < P2.Salary
order by P2.Salary;