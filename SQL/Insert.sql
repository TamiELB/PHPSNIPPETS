-- Insert data into the Studenten table
INSERT INTO Studenten (Naam, Adres, TelefoonNr, Email, Wachtwoord, IsAdmin, IsActief)
VALUES
    ('John Doe', '123 Main St', '555-123-4567', 'john.doe@email.com', 'password123', 1, 1),
    ('Jane Smith', '456 Elm St', '555-987-6543', 'jane.smith@email.com', 'pass456', 0, 1),
    ('Bob Johnson', '789 Oak St', '555-555-5555', 'bob.johnson@email.com', 'test123', 0, 1);

-- Insert data into the Vakken table
INSERT INTO Vakken (Naam)
VALUES
    ('Mathematics'),
    ('Science'),
    ('History');

-- Insert data into the Lessen table
INSERT INTO Lessen (Naam, Beschrijving, VakID, BeginDatum, EindDatum)
VALUES
    ('Math 101', 'Introduction to Mathematics', 1, '2023-01-15', '2023-05-15'),
    ('Biology 101', 'Introduction to Biology', 2, '2023-01-20', '2023-05-20'),
    ('History 101', 'Introduction to History', 3, '2023-01-10', '2023-05-10');

-- Insert data into the Cijfers table
INSERT INTO Cijfers (Cijfer, StudentID, VakID)
VALUES
    (95.5, 1, 1),
    (88.0, 2, 1),
    (75.5, 3, 1);

-- Insert data into the LessenStudenten table
INSERT INTO LessenStudenten (StudentID, LesID)
VALUES
    (1, 1),
    (2, 2),
    (3, 3);
