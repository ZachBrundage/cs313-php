CREATE TABLE users
(
    userId SERIAL NOT NULL PRIMARY KEY,
    userName varchar(80) NOT NULL UNIQUE,
    userPass varchar(255) NOT NULL
);

CREATE TABLE entries
(
	entryId SERIAL NOT NULL PRIMARY KEY,
    userId int NOT NULL REFERENCES users(userId),
    entryDate date NOT NULL,
    weight float(2) NOT NULL,
    workoutType varchar(80) NOT NULL,
    caloricIntake float(2) NOT NULL,
    caloriesBurned float(2) NOT NULL
);

-- Insert Sample DATA Commands --

INSERT INTO users (userName, userPass) VALUES ('SAMPLE1', 'SAMPLE');

INSERT INTO entries (userid, entrydate, weight, workouttype, caloricintake, caloriesburned)
    VALUES (3, '2019-01-01', 185, 'LEGS', 2300, 1400),
    (3, '2019-01-02', 183, 'ARMS', 2350, 1570),
    (3, '2019-01-03', 187, 'CHEST', 2200, 1800),
    (3, '2019-01-04', 186, 'BACK', 1978, 1300),
    (3, '2019-01-05', 190, 'LEGS', 4500, 1400),
    (3, '2019-01-06', 191, 'ARMS', 3678, 1570),
    (3, '2019-01-07', 190, 'CHEST', 7890, 1800),
    (3, '2019-01-08', 188, 'BACK', 2464, 1300),
    (3, '2019-01-09', 185, 'LEGS', 8547, 1400),
    (3, '2019-01-10', 183, 'ARMS', 5564, 1570),
    (3, '2019-01-11', 182, 'CHEST', 3457, 1800),
    (3, '2019-01-12', 181, 'BACK', 3476, 1300),
    (3, '2019-01-13', 179, 'LEGS', 3362, 1400),
    (3, '2019-01-14', 175, 'ARMS', 8612, 1570),
    (3, '2019-01-15', 177, 'CHEST', 1456, 1800),
    (3, '2019-01-16', 178, 'BACK', 3476, 1300),
    (3, '2019-01-17', 180, 'LEGS', 10987, 1400),
    (3, '2019-01-18', 182, 'ARMS', 4762, 1570),
    (3, '2019-01-19', 184, 'CHEST', 9987, 1800);