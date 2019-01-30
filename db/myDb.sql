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