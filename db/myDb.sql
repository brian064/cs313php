-- Commands for Progress Daily Relational Database

-- OVERALL PROGRESSION TABLE
CREATE TABLE overall (
  id SERIAL PRIMARY KEY,
  usrname varchar(100),
  prgtot real, -- total progression across all categories
  transprog real, -- Transition Category Overall Progression
  freeprog real, -- Freestyle Category Overall Progression
  funprog real -- Fundamentals Category Overall Progression
);

-- USER TABLE
CREATE TABLE userInfo (
  id SERIAL PRIMARY KEY,
  name varchar(100),
  bio varchar(200), -- User Biography
  age int -- User age
);

-- TRANSITION TRICKS CATEGORY TABLE
CREATE TABLE transition (
  id SERIAL PRIMARY KEY,
  info varchar(200),
  trk1 real -- specific trick progression
);

-- FUNDAMENTAL TRICKS CATEGORY TABLE
CREATE TABLE fundamental (
  id SERIAL PRIMARY KEY,
  info varchar(200),
  trk1 real -- specific trick progression
);

-- FREESTYLE TRICKS CATEGORY TABLE
CREATE TABLE freestyle (
  id SERIAL PRIMARY KEY,
  info varchar(200),
  trk1 real -- specific trick progression
);

-- KICKFLIP TABLE (Example of a specific trick table)
CREATE TABLE kickflip (
  id SERIAL PRIMARY KEY,
  info varchar(200),
  prg real -- trick progress
);
