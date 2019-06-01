-- Commands for Progress Daily Relational Database

-- USER Table
CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  usrname varchar(80),
  firstn varchar(100),
  lastn varchar(100),
  bio varchar(500),
  age int,
  tprog int,
  frprog int,
  fnprog int
);

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
  info varchar(2000),
  trk1 real -- specific trick progression
);

-- FUNDAMENTAL TRICKS CATEGORY TABLE
CREATE TABLE fundamental (
  id SERIAL PRIMARY KEY,
  info varchar(2000),
  trk1 real -- specific trick progression
);

-- FREESTYLE TRICKS CATEGORY TABLE
CREATE TABLE freestyle (
  id SERIAL PRIMARY KEY,
  info varchar(2000),
  trk1 real -- specific trick progression
);

-- KICKFLIP TABLE (Example of a specific trick table)
CREATE TABLE kickflip (
  id SERIAL PRIMARY KEY,
  info varchar(2000),
  prg real -- trick progress
);

-- Inserting Dummy Info into tables

--for Overall Table
INSERT INTO overall (usrname, prgtot, transprog, freeprog, funprog)
VALUES ('Brian_064', 45, 40, 70, 60);

--for Transition Table
INSERT INTO transition (info)
VALUES ('Also referred to as "vert" skating. Transition skating involves skateboard riders moving from the horizontal (on the ground) to the vertical (on a ramp or other incline) to perform tricks - thus "vert".');

--for Freestyle Table
INSERT INTO freestyle (info)
VALUES ('Probably the oldest style of skateboarding, freestyle skateboarding developed from the use of skateboards as a mode of transport in the 1960s. Professional freestyle competitions often involved music and choreography and focused on fluidity and technical skill. The style changed significantly with the introduction of ollies and other tricks in the 1980s and the introduction of various obstacle elements.');

--for Fundamentals Table
INSERT INTO fundamental (info)
VALUES ('The basics of skateboarding. This style is the foundation for getting the most out of your skateboarding experience.');
