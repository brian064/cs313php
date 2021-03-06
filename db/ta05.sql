-- TA Week 05

-- Creating Scriptures Table
CREATE TABLE scriptures (
  id SERIAL PRIMARY KEY,
  book varchar(100),
  chapter int,
  verse int,
  content varchar(300)
);

-- Creating Topic Table
CREATE TABLE topic (
  id SERIAL PRIMARY KEY,
  name varchar(200)
);

-- Inserting into table template

-- John 1:5
INSERT INTO scriptures (book, chapter, verse, content)
VALUES ('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehended it not.');

-- D&C 88:49
INSERT INTO scriptures (book, chapter, verse, content)
VALUES ('D&C', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.');

-- D&C 93:28
INSERT INTO scriptures (book, chapter, verse, content)
VALUES ('D&C', 93, 28, 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.');

-- Mosiah 16:9
INSERT INTO scriptures (book, chapter, verse, content)
VALUES ('Mosiah', 16, 9, 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');

-- Inserting into Topic table (Faith, Sacrifice, Charity)
INSERT INTO topic (name)
VALUES ('Faith');
