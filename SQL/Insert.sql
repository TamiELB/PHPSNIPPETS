-- Insert data into the Studenten table
INSERT INTO Studenten (Naam, Adres, TelefoonNr, Email, Wachtwoord, IsAdmin, IsActief)
VALUES
    ('John Doe', '123 Main St', '555-123-4567', 'john.doe@email.com', 'password123', 1, 1),
    ('Jane Smith', '456 Elm St', '555-987-6543', 'jane.smith@email.com', 'pass456', 0, 1),
    ('Bob Johnson', '789 Oak St', '555-555-5555', 'bob.johnson@email.com', 'test123', 0, 1),
    ('Alice Johnson', '321 Pine St', '555-111-2222', 'alice.johnson@email.com', 'pass789', 0, 1),
    ('Charlie Brown', '654 Cedar St', '555-444-3333', 'charlie.brown@email.com', 'brown123', 0, 1),
    ('Eva Martinez', '987 Birch St', '555-666-7777', 'eva.martinez@email.com', 'eva456', 0, 1);

-- Insert data into the Vakken table
INSERT INTO Vakken (Naam)
VALUES
    ('Mathematics'),
    ('Science'),
    ('History'),
    ('Physics'),
    ('Computer Science'),
    ('Literature');

-- Insert data into the Lessen table
INSERT INTO Lessen (Naam, Beschrijving, VakID, BeginDatum, EindDatum)
VALUES
    ('Math 101', 'Introduction to Mathematics', 1, '2023-01-15', '2023-05-15'),
    ('Biology 101', 'Introduction to Biology', 2, '2023-01-20', '2023-05-20'),
    ('History 101', 'Introduction to History', 3, '2023-01-10', '2023-05-10'),
    ('Physics 101', 'Introduction to Physics', 4, '2023-01-25', '2023-05-25'),
    ('Programming 101', 'Introduction to Programming', 5, '2023-02-01', '2023-06-01'),
    ('English 101', 'Introduction to English Literature', 6, '2023-02-10', '2023-06-10');

-- Insert data into the Cijfers table
-- Insert more data into the Cijfers table
INSERT INTO Cijfers (Cijfer, StudentID, VakID)
VALUES
    (91.0, 1, 2),
    (83.5, 2, 2),
    (79.0, 3, 2),
    (87.5, 4, 3),
    (94.0, 5, 3),
    (80.5, 6, 3),
    (89.5, 1, 4),
    (82.0, 2, 4),
    (76.5, 3, 4),
    (90.0, 4, 5),
    (85.0, 5, 5),
    (78.5, 6, 5),
    (88.5, 1, 6),
    (81.0, 2, 6),
    (77.5, 3, 6);

-- Insert data into the LessenStudenten table
INSERT INTO LessenStudenten (StudentID, LesID)
VALUES
    (1, 1),
    (2, 2),
    (3, 3),
    (4, 4),
    (5, 5),
    (6, 6);
