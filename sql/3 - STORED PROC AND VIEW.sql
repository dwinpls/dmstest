CREATE VIEW view_gender AS SELECT * FROM form_gender;
CREATE VIEW view_civilStatus AS SELECT * FROM form_civilStatus;
CREATE VIEW view_religion AS SELECT * FROM form_religion;
CREATE VIEW view_clientAssigned AS SELECT * FROM form_clientAssigned;
CREATE VIEW view_examStatus AS SELECT * FROM form_examStatus;
CREATE VIEW view_educAttain AS SELECT * FROM form_educationAttain;
CREATE VIEW view_sourcedBy AS SELECT * FROM form_sourcedBy;
CREATE VIEW view_applicantStatus AS SELECT * FROM form_applicantStatus;
CREATE VIEW view_membershipType AS SELECT * FROM form_membershipType;
CREATE VIEW view_violation AS SELECT * FROM form_violation;
CREATE VIEW view_offense AS SELECT * FROM form_offense;
CREATE VIEW view_claimType AS SELECT * FROM form_claimType;
CREATE VIEW view_deathClaim AS SELECT * FROM form_deathClaim;
CREATE VIEW view_loanType AS SELECT * FROM form_loanType;
CREATE VIEW view_laboratory AS SELECT * FROM form_laboratory;
CREATE VIEW view_addressState AS SELECT * FROM form_addressState;

CREATE PROCEDURE employee_insert
    (@EmployeeID int, @Name Varchar(30), @Age int, @Mobile int)
AS
BEGIN
    Insert Into Employee
    Values (@EmployeeID, @Name, @Age, @Mobile)
End
To run the parametrized procedure on SQL Server:

Execute employee_insert 003,’xyz’,27,1234567890

  --(Parameter size must be same as declared column size)
Example: @Name Varchar(30)

In the Employee table the Name column's size must be varchar(30)

