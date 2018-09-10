CREATE DATABASE dummyDMS

CREATE TABLE form_gender --According to ISO/IEC 5218
(
	form_genderID TINYINT NOT NULL CONSTRAINT PK_formGenderID PRIMARY KEY,
	form_genderdesc VARCHAR(15) NOT NULL
)

CREATE TABLE form_civilStatus --for Applicants and Members
(
	form_civilID TINYINT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formCivilID PRIMARY KEY,
	form_civildesc VARCHAR(10) NOT NULL
)

CREATE TABLE form_religion --for Applicants and Members
(
	form_religionID TINYINT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formReligionID PRIMARY KEY,
	form_religionDesc VARCHAR(65) NOT NULL
)

CREATE TABLE form_clientAssigned --for Applicants
(
	form_clientAssignedID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formClientAssignedID PRIMARY KEY,
	form_clientAssigneddesc VARCHAR(20) NOT NULL
	--with etc
)

CREATE TABLE form_examStatus --for Applicants
(
	form_examStatusID TINYINT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formExamStatusID PRIMARY KEY,
	form_examStatusdesc VARCHAR(10) NOT NULL
)

CREATE TABLE form_educationAttain --for Applicants and Members
(
	form_educationAttainID TINYINT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formEducationAttainID PRIMARY KEY,
	form_educationAttaindesc VARCHAR(20) NOT NULL
)

CREATE TABLE form_sourcedBy --for Applicants
(
	form_sourcedByID TINYINT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formSourcedByID PRIMARY KEY,
	form_sourcedBydesc VARCHAR(10) NOT NULL
)

CREATE TABLE form_applicantStatus --for Applicants
(
	form_applicantStatusID TINYINT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formApplicantStatusID PRIMARY KEY,
	form_applicantStatusdesc VARCHAR(15) NOT NULL
)

CREATE TABLE form_membershipType --for Members
(
	form_membershipTypeID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formMembershipTypeID PRIMARY KEY,
	form_membershipTypedesc VARCHAR(20) NOT NULL
)

CREATE TABLE form_violation -- for Disciplinary
(
	form_violationID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formViolationID PRIMARY KEY,
	form_violationdesc VARCHAR(50) NOT NULL
	--with etc
)

CREATE TABLE form_offense -- for Disciplinary
(
	form_offenseID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formOffenseID PRIMARY KEY,
	form_offensedesc VARCHAR(10) NOT NULL
)

CREATE TABLE form_claimType --for Benefits
(
	form_claimTypeID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formClaimTypeID PRIMARY KEY,
	form_claimTypedesc VARCHAR(20) NOT NULL
)

CREATE TABLE form_deathClaim --for Benefits
(
	form_deathClaimID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formDeathClaimID PRIMARY KEY,
	form_deathClaimdesc VARCHAR(10) NOT NULL
)

CREATE TABLE form_loanType --for Loans
(
	form_loanTypeID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formLoanTypeID PRIMARY KEY,
	form_loanTypedesc VARCHAR(30) NOT NULL
)

CREATE TABLE form_laboratory -- for Annual Physical Exam
(
	form_laboratoryID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_formLaboratoryID PRIMARY KEY,
	form_laboratorydesc VARCHAR(40) NOT NULL
)

CREATE TABLE form_addressState -- for Applicant and Member's Address
(
	form_addStateID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_addStateID PRIMARY KEY,
	form_addStatedesc VARCHAR(50) NOT NULL
)

CREATE TABLE tbl_role
(
	role_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_roleID PRIMARY KEY,
	role_name VARCHAR(11) NOT NULL
)

CREATE TABLE tbl_access
(
	accs_ID TINYINT IDENTITY(1,1) NOT NULL CONSTRAINT PK_accessID PRIMARY KEY,
	accs_addUser BIT NOT NULL, --ability to add user 
	accs_actUser BIT NOT NULL, --ability to activate user
	accs_addDocu BIT NOT NULL, 
	accs_edtDocu BIT NOT NULL, 
	accs_delDocu BIT NOT NULL, 
	accs_opnDocu BIT NOT NULL--,
--	accs_allForm BIT NOT NULL,
--  accs_srcForm BIT NOT NULL,
--	accs_mbsForm BIT NOT NULL,
--	accs_finForm BIT NOT NULL
)

CREATE TABLE tbl_user
(
	userID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_userID  PRIMARY KEY,
	role_ID INT NOT NULL CONSTRAINT FK_roleID FOREIGN KEY REFERENCES tbl_role(role_ID),
	accs_ID TINYINT NOT NULL CONSTRAINT FK_accessID FOREIGN KEY REFERENCES tbl_access(accs_ID),
	username VARCHAR(20) NOT NULL UNIQUE,
	user_pword VARCHAR(20) NOT NULL, 
	user_firstName NVARCHAR(20) NOT NULL,
	user_lastName NVARCHAR(20) NOT NULL,
	user_email VARCHAR(35) NOT NULL,
	user_contactNo NUMERIC(15) NOT NULL,
	user_createdDate DATETIME NOT NULL,
	user_activate BIT NOT NULL
)

CREATE TABLE tbl_documentType
(
	docuType_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_docuTypeID PRIMARY KEY,
	docuType_abbv CHAR(3) NOT NULL,
	docuType_desc VARCHAR(50) NOT NULL
)

CREATE TABLE tbl_document
(
	docu_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_docuID PRIMARY KEY,
	docuType_ID INT NOT NULL CONSTRAINT FK_docuType FOREIGN KEY REFERENCES tbl_documentType(docutype_ID),
	docu_uploader INT NOT NULL CONSTRAINT FK_docuUploader FOREIGN KEY REFERENCES tbl_user(userID), 
	docu_name VARCHAR(20) NOT NULL,
	docu_filepath VARCHAR(20) NOT NULL,
	docu_fileUploaded DATETIME NOT NULL
)

CREATE TABLE tbl_docuLog
(
	docuLog_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_docuLog PRIMARY KEY,
	docu_ID INT NOT NULL CONSTRAINT FK_docuLogID FOREIGN KEY REFERENCES tbl_document(docu_ID),
	userID INT NOT NULL CONSTRAINT FK_docuLogUser FOREIGN KEY REFERENCES tbl_user(userID),
	docuLog_date DATETIME NOT NULL,
	docuLog_desc VARCHAR(100) NOT NULL
)

CREATE TABLE tbl_applicantForm
(
	APP_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_APPID PRIMARY KEY,
	APP_docuID INT NOT NULL CONSTRAINT FK_docuAPPID FOREIGN KEY REFERENCES tbl_document(docu_id),
	APP_firstName VARCHAR(20) NOT NULL,
	APP_middleName VARCHAR(20),
	APP_lastName VARCHAR(20) NOT NULL,
	APP_birthdate DATE NOT NULL, --don't store age
	APP_gender TINYINT NOT NULL CONSTRAINT FK_APPgenderID FOREIGN KEY REFERENCES form_gender(form_genderID),
	APP_civilStatus_ID TINYINT NOT NULL CONSTRAINT FK_APPcivilStatusID FOREIGN KEY REFERENCES form_civilStatus(form_civilID),
	APP_religion_ID TINYINT NOT NULL CONSTRAINT FK_APPreligionID FOREIGN KEY REFERENCES form_religion(form_religionID),
	APP_height TINYINT NOT NULL, --in centimeters
	APP_pleasPers BIT NOT NULL, 
	APP_course VARCHAR(255), --inactivate when highschool is selected
	APP_address INT NOT NULL,
	APP_skills VARCHAR NOT NULL,
	APP_contactNo VARCHAR(15) NOT NULL,
	APP_clientAssigned_ID INT NOT NULL CONSTRAINT FK_APPclientAssignedID FOREIGN KEY REFERENCES form_clientAssigned(form_clientAssignedID),
	APP_examStatus_ID TINYINT NOT NULL CONSTRAINT FK_APPexamStatusID FOREIGN KEY REFERENCES form_examStatus(form_examStatusID),
	APP_workExp VARCHAR(500) NOT NULL,
	APP_educationAttain_ID TINYINT NOT NULL CONSTRAINT FK_APPeducationAttainID FOREIGN KEY REFERENCES form_educationAttain(form_educationAttainID),
	APP_referredBy VARCHAR(50) NOT NULL, 
	APP_sourcedBy_ID TINYINT NOT NULL CONSTRAINT FK_APPsourcedByID FOREIGN KEY REFERENCES form_sourcedBy(form_sourcedByID),
	APP_dateApplied DATE NOT NULL,
	APP_applicantStatus_ID TINYINT NOT NULL CONSTRAINT FK_APPapplicantStatusID FOREIGN KEY REFERENCES form_applicantStatus(form_applicantStatusID),
	APP_interviewRemarks VARCHAR(250) NOT NULL
)

CREATE TABLE tbl_APPformAddress
(
	APPadd_id INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_APPaddID PRIMARY KEY,
	APP_FormID INT NOT NULL CONSTRAINT FK_ADDappFormID FOREIGN KEY REFERENCES tbl_applicantForm(APP_ID),
	APP_street VARCHAR(100), -- Unit / House No. Street, Barangay, District
	APP_state INT NOT NULL CONSTRAINT FK_APPaddressFORM FOREIGN KEY REFERENCES form_addressState(form_addStateID) -- Province/State
)

CREATE TABLE tbl_memberForm
(
	MEM_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_MEMID PRIMARY KEY,
	MEM_docuID INT NOT NULL CONSTRAINT FK_docuMEMID FOREIGN KEY REFERENCES tbl_document(docu_id),
	MEM_IDnum INT NOT NULL,
	MEM_firstName VARCHAR(20) NOT NULL,
	MEM_middleName VARCHAR(20) NOT NULL,
	MEM_lastName VARCHAR(20) NOT NULL,
	MEM_maidenName VARCHAR(20) NOT NULL,
	MEM_address INT NOT NULL,
	MEM_contactNo VARCHAR(15) NOT NULL,
	MEM_gender TINYINT NOT NULL CONSTRAINT FK_MEMgenderID FOREIGN KEY REFERENCES form_gender(form_genderID), 
	MEM_civilStatus_ID TINYINT NOT NULL CONSTRAINT FK_MEMcivilStatusID FOREIGN KEY REFERENCES form_civilStatus(form_civilID),
	MEM_birhdate DATE NOT NULL, --don't store age
	MEM_skills VARCHAR(250) NOT NULL,
	MEM_religion_ID TINYINT NOT NULL CONSTRAINT FK_MEMreligionID FOREIGN KEY REFERENCES form_religion(form_religionID),
	MEM_educationAttain_ID TINYINT NOT NULL CONSTRAINT FK_MEMeducationAttainID FOREIGN KEY REFERENCES form_educationAttain(form_educationAttainID),
	MEM_dateStarted DATE NOT NULL,
	MEM_dateTerminated DATE NOT NULL,
	MEM_clientAssigned_ID INT NOT NULL CONSTRAINT FK_MEMclientAssignedID FOREIGN KEY REFERENCES form_clientAssigned(form_clientAssignedID),
	MEM_fieldAssignment VARCHAR(30) NOT NULL,
	MEM_bankAccnt CHAR(15) NOT NULL, 
	MEM_membershipType_ID INT NOT NULL CONSTRAINT FK_MEMmembershipTypeID FOREIGN KEY REFERENCES form_membershipType(form_membershipTypeID),
	MEM_memAgreeStat BIT NOT NULL, -- 1 = Authorized, 0 = not authorized
	MEM_affirmStat BIT NOT NULL,
	MEM_informSheet BIT NOT NULL
)

CREATE TABLE tbl_MEMformAddress
(
	MEMadd_id INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_MEMaddID PRIMARY KEY,
	MEM_FormID INT NOT NULL CONSTRAINT FK_MEMappFormID FOREIGN KEY REFERENCES tbl_memberForm(MEM_ID),
	MEM_street VARCHAR(100), -- Unit / House No. Street, Barangay, District
	MEM_state INT NOT NULL CONSTRAINT FK_MEMaddressFORM FOREIGN KEY REFERENCES form_addressState(form_addStateID) -- Province/State
)

CREATE TABLE tbl_disciplinaryForm
(
	DIR_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_DIRID PRIMARY KEY,
	DIR_docuID INT NOT NULL CONSTRAINT FK_docuDIRID FOREIGN KEY REFERENCES tbl_document(docu_id),
	DIR_IDnum TINYINT NOT NULL,
	DIR_firstName VARCHAR(20) NOT NULL,
	DIR_middleName VARCHAR(20),
	DIR_lastName VARCHAR(20) NOT NULL,
	DIR_clientAssigned_ID INT NOT NULL CONSTRAINT FK_DIRclientAssignedID FOREIGN KEY REFERENCES form_clientAssigned(form_clientAssignedID),
	DIR_violation_ID INT NOT NULL CONSTRAINT FK_DIRviolationID FOREIGN KEY REFERENCES form_violation(form_violationID),
	DIR_offense_ID INT NOT NULL CONSTRAINT FK_DIRoffenseID FOREIGN KEY REFERENCES form_offense(form_offenseID)
)

CREATE TABLE tbl_benefitsForms
(
	BNF_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_BNFID PRIMARY KEY,
	BNF_docuID INT NOT NULL CONSTRAINT FK_docuBNFID FOREIGN KEY REFERENCES tbl_document(docu_id),
	BNF_IDnum INT NOT NULL,
	BNF_firstName VARCHAR(20) NOT NULL,
	BNF_middleName VARCHAR(20) NOT NULL,
	BNF_lastName VARCHAR(20) NOT NULL,
	BNF_sssNo NUMERIC(10) NOT NULL,
	BNF_philhNo NUMERIC(12) NOT NULL,
	BNF_pagibigNo NUMERIC(12) NOT NULL,
	BNF_dateRecieved DATE NOT NULL,
	BNF_claimType_ID INT NOT NULL CONSTRAINT FK_BNFclaimTypeID FOREIGN KEY REFERENCES form_claimType(form_claimTypeID),
	BNF_deathClaim_ID INT NOT NULL CONSTRAINT FK_BNFdeathClaimID FOREIGN KEY REFERENCES form_deathClaim(form_deathClaimID)
)

CREATE TABLE tbl_loanForm
(
	LOA_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_LOAID PRIMARY KEY,
	LOA_docuID INT NOT NULL CONSTRAINT FK_docuLOAID FOREIGN KEY REFERENCES tbl_document(docu_id),
	LOA_IDnum INT NOT NULL,
	LOA_firstName VARCHAR(20) NOT NULL,
	LOA_middleName VARCHAR(20) NOT NULL,
	LOA_lastName VARCHAR(20) NOT NULL,
	LOA_dateRecieved DATE NOT NULL,
	LOA_client VARCHAR(60) NOT NULL,
	LOA_loanType_ID INT NOT NULL CONSTRAINT FK_LOAloanTypeID FOREIGN KEY REFERENCES form_loanType(form_loanTypeID)
)

CREATE TABLE tbl_invoiceForm
(
	INV_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_INVID PRIMARY KEY,
	INV_docuID INT NOT NULL CONSTRAINT FK_docuINVID FOREIGN KEY REFERENCES tbl_document(docu_id),
	INV_invNo INT NOT NULL,
	INV_soaNo INT NOT NULL,
	INV_client VARCHAR(60) NOT NULL,
	INV_billingAmnt MONEY NOT NULL,
	INV_invDate DATE NOT NULL,
	INV_payoutDate DATE NOT NULL,
	INV_periodCoverFrom DATE NOT NULL,
	INV_periodCoverTo DATE NOT NULL,
	INV_dateRecievedbyCoordi DATE NOT NULL,
	INV_dateRecievedbyClient DATE NOT NULL,
	INV_dateRecievedbyAsiapro DATE NOT NULL,
	INV_draweeBank VARCHAR(60) NOT NULL,
	INV_checkDate DATE NOT NULL,
	INV_checkNum INT NOT NULL,
	INV_checkAmount MONEY NOT NULL,
	INV_ORnum INT NOT NULL,
	INV_ORdate DATE NOT NULL,
	INV_adjustType BIT NOT NULL, -- 1 = Credit, 0 = Debit
	INV_bankDeposited VARCHAR(75) NOT NULL
)

CREATE TABLE tbl_dtrForm
(
	DTR_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_DTRID PRIMARY KEY,
	DTR_docuID INT NOT NULL CONSTRAINT FK_docuDTRID FOREIGN KEY REFERENCES tbl_document(docu_id),
	DTR_IDnum INT NOT NULL,
	DTR_firstName VARCHAR(20) NOT NULL,
	DTR_middleName VARCHAR(20),
	DTR_lastName VARCHAR(20) NOT NULL,
	DTR_client VARCHAR(20) NOT NULL,
	DTR_coorAssigned VARCHAR(20) NOT NULL,
	DTR_prdDateDaily DATE NOT NULL,
	DTR_prdDateMonth  DATE NOT NULL,
	DTR_prdCoveredFrom VARCHAR(75) NOT NULL,
	DTR_prdCoveredTo VARCHAR(75) NOT NULL,
	DTR_payoutDate DATE NOT NULL,
	DTR_farmORdept VARCHAR(60) NOT NULL
)

CREATE TABLE tbl_requestpayForm
(
	RFP_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_RFPID PRIMARY KEY,
	RFP_docuID INT NOT NULL CONSTRAINT FK_docuRFPID FOREIGN KEY REFERENCES tbl_document(docu_id),
	RFP_cliORsup VARCHAR(75) NOT NULL, 
	RFP_dateReq DATE NOT NULL,
	RFP_refNum INT NOT NULL,
	RFP_checkVnum INT NOT NULL,
	RFP_dateIssued DATE NOT NULL,
	RFP_prepareBy VARCHAR(60) NOT NULL,
	RFP_reqAmount MONEY NOT NULL,
	RFP_satOffice VARCHAR(20) NOT NULL,
	RFP_particulars BIT NOT NULL -- 1 = Expense, 0 = CA
)

CREATE TABLE tbl_clearanceForm
(
	CWF_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_CWFID PRIMARY KEY,
	CWF_docuID INT NOT NULL CONSTRAINT FK_docuCWFID FOREIGN KEY REFERENCES tbl_document(docu_id),
	CWF_IDnum INT NOT NULL,
	CWF_firstName VARCHAR(20) NOT NULL,
	CWF_middleName VARCHAR(20),
	CWF_lastName VARCHAR(20) NOT NULL,
	CWF_client VARCHAR(20) NOT NULL,
	CWF_dateStart DATE NOT NULL,
	CWF_dateEnd DATE NOT NULL,
	CWF_dateApplied DATE NOT NULL,
	CWF_dateRecievedFRmem DATE NOT NULL,
	CWF_dateRecievedFRmbs DATE NOT NULL,
	CWF_dateProcessedFRfin DATE NOT NULL,
	CWF_dateTransmitToHO DATE NOT NULL,
	CWF_otherDeduct MONEY NOT NULL 
)

CREATE TABLE tbl_quitForm
(
	QUI_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_QUIID PRIMARY KEY,
	QUI_docuID INT NOT NULL CONSTRAINT FK_docuQUIID FOREIGN KEY REFERENCES tbl_document(docu_id),
	QUI_IDnum INT NOT NULL,
	QUI_firstName VARCHAR(20) NOT NULL,
	QUI_middleName VARCHAR(20),
	QUI_lastName VARCHAR(20) NOT NULL,
	QUI_client VARCHAR(60) NOT NULL,
	QUI_dateStart DATE NOT NULL,
	QUI_dateEnd DATE NOT NULL,
	QUI_dateApplied DATE NOT NULL,
	QUI_dateRecieved DATE NOT NULL,
	QUI_cvNum INT NOT NULL,
	QUI_amount MONEY NOT NULL,
	QUI_claimThruSPA BIT NOT NULL, -- 1 = with, 0 = without
	QUI_memberType BIT NOT NULL -- 1 = revenue, 0 = non-revenue
)

CREATE TABLE tbl_liquidForm
(
	LIQ_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_LIQID PRIMARY KEY,
	LIQ_docuID INT NOT NULL CONSTRAINT FK_docuLIQID FOREIGN KEY REFERENCES tbl_document(docu_id),
	LIQ_cvNum INT NOT NULL,
	LIQ_dmDate DATE NOT NULL,
	LIQ_amount MONEY NOT NULL, 
	LIQ_firstName VARCHAR(20) NOT NULL,
	LIQ_middleName VARCHAR(20) NOT NULL,
	LIQ_lastName VARCHAR(20) NOT NULL,
	LIQ_client VARCHAR(60) NOT NULL,
	LIQ_particular VARCHAR(150) NOT NULL,
	LIQ_dateProcessed DATE NOT NULL,
	
)

CREATE TABLE tbl_annualPEForm
(
	APE_ID INT IDENTITY(1,1) NOT NULL CONSTRAINT PK_APEID PRIMARY KEY,
	APE_docuID INT NOT NULL CONSTRAINT FK_docuAPEID FOREIGN KEY REFERENCES tbl_document(docu_id),
	APE_firstName VARCHAR(20) NOT NULL,
	APE_middleName VARCHAR(20),
	APE_lastName VARCHAR(20) NOT NULL,
	APE_dateOfPE DATE NOT NULL,
	APE_laboratory_ID INT NOT NULL CONSTRAINT FK_APElaboratoryID FOREIGN KEY REFERENCES form_laboratory(form_laboratoryID),
	APE_findings VARCHAR(1000)
)

ALTER TABLE tbl_applicantForm
ADD CONSTRAINT FK_APPaddressID FOREIGN KEY(APP_address) REFERENCES tbl_APPformAddress(APPadd_id);

ALTER TABLE tbl_memberForm
ADD CONSTRAINT FK_MEMaddressID FOREIGN KEY(MEM_address) REFERENCES tbl_MEMformAddress(MEMadd_id);