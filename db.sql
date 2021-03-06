CREATE TABLE ACCOUNT (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(50) NOT NULL,
role INT(1) NOT NULL
)

CREATE TABLE USER_SURVEYOR (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
id_account INT(6) NOT NULL,
FOREIGN KEY (id_account) REFERENCES ACCOUNT(id)
)

CREATE TABLE USER_GOV (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
id_account INT(6) NOT NULL,
tingkat INT(1) NOT NULL,
FOREIGN KEY id_account REFERENCES ACCOUNT(id)
)

CREATE TABLE PROVINSI (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL
)

CREATE TABLE KABUPATEN (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
id_provinsi INT(6) NOT NULL,
FOREIGN KEY id_provinsi REFERENCES PROVINSI(id)
)

CREATE TABLE KECAMATAN (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
id_kabupaten INT(6) NOT NULL,
FOREIGN KEY id_kabupaten REFERENCES KABUPATEN(id)
)

CREATE TABLE PENYAKIT (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL
)

CREATE TABLE REKOMENDASI (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
judul VARCHAR(30) NOT NULL,
deskripsi TEXT NOT NULL,
id_penyakit INT(6) NOT NULL,
FOREIGN KEY id_penyakit REFERENCES PENYAKIT(id)
)

CREATE TABLE SURVEY (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
id_penyakit INT(6) NOT NULL,
id_kabupaten INT(6) NOT NULL,
FOREIGN KEY id_penyakit REFERENCES PENYAKIT(id),
FOREIGN KEY id_kabupaten REFERENCES KABUPATEN(id)
)

CREATE TABLE SAMPLE (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
is_sakit BOOLEAN NOT NULL,
id_survey INT(6) NOT NULL,
FOREIGN KEY id_survey REFERENCES SURVEY(id)
)

