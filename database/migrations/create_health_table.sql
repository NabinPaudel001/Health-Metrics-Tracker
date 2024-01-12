CREATE TABLE HealthRecord (
    RecordID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    Height DECIMAL(5,2),
    Weight DECIMAL(5,2),
    Age INT,
    SystolicPressure INT,
    DiastolicPressure INT,
    BMI DECIMAL(5,2),
    BMR DECIMAL(8,2),
    MeanBloodPressure DECIMAL(5,2),
    DateCreated DATETIME,
    FOREIGN KEY (UserID) REFERENCES user(UserID)
);