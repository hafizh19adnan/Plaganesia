INSERT INTO ACCOUNT (username, password, role) VALUES ('admin', 'admin', 1);
INSERT INTO ACCOUNT (username, password, role) VALUES ('pemerintah', 'pemerintah', 1);
INSERT INTO ACCOUNT (username, password, role) VALUES ('surveyor.jaksel', 'surveyor', 2);
INSERT INTO ACCOUNT (username, password, role) VALUES ('surveyor.jaktim', 'surveyor', 2);
INSERT INTO ACCOUNT (username, password, role) VALUES ('surveyor.jakbar', 'surveyor', 2);
INSERT INTO ACCOUNT (username, password, role) VALUES ('surveyor.jakut', 'surveyor', 2);
INSERT INTO ACCOUNT (username, password, role) VALUES ('surveyor.jakpus', 'surveyor', 2);

INSERT INTO USER_GOV (nama, id_account, tingkat) VALUES ('Pemerintah Jakarta Selatan', 2, 'kabupaten');
INSERT INTO USER_SURVEYOR (nama, id_account) VALUES ('Topan Rezeki', 3);
INSERT INTO USER_SURVEYOR (nama, id_account) VALUES ('Mehmet Cavabi', 3);
INSERT INTO USER_SURVEYOR (nama, id_account) VALUES ('Mahmud Eskisehir', 3);
INSERT INTO USER_SURVEYOR (nama, id_account) VALUES ('Thomas Muentzer', 3);
INSERT INTO USER_SURVEYOR (nama, id_account) VALUES ('Sarwoto Mangkuharjo', 3);

INSERT INTO PROVINSI (nama) VALUES ('Banten');
INSERT INTO PROVINSI (nama) VALUES ('DKI Jakarta');
INSERT INTO PROVINSI (nama) VALUES ('Jawa Barat');
INSERT INTO PROVINSI (nama) VALUES ('Jawa Tengah');
INSERT INTO PROVINSI (nama) VALUES ('Yogyakarta');
INSERT INTO PROVINSI (nama) VALUES ('Jawa Timur');
INSERT INTO PROVINSI (nama) VALUES ('Bali');

INSERT INTO KABUPATEN (nama, id_provinsi) VALUES ('Jakarta Selatan', 2);
INSERT INTO KABUPATEN (nama, id_provinsi) VALUES ('Jakarta Timur', 2);
INSERT INTO KABUPATEN (nama, id_provinsi) VALUES ('Jakarta Barat', 2);
INSERT INTO KABUPATEN (nama, id_provinsi) VALUES ('Jakarta Utara', 2);
INSERT INTO KABUPATEN (nama, id_provinsi) VALUES ('Jakarta Pusat', 2);

INSERT INTO KECAMATAN (nama, id_kabupaten) VALUES ('Kebayoran Baru', 1);
INSERT INTO KECAMATAN (nama, id_kabupaten) VALUES ('Kebayoran Lama', 1);
INSERT INTO KECAMATAN (nama, id_kabupaten) VALUES ('Pesanggrahan', 1);
INSERT INTO KECAMATAN (nama, id_kabupaten) VALUES ('Cilandak', 1);
INSERT INTO KECAMATAN (nama, id_kabupaten) VALUES ('Pasar Minggu', 1);
INSERT INTO KECAMATAN (nama, id_kabupaten) VALUES ('Jagakarsa', 1);
INSERT INTO KECAMATAN (nama, id_kabupaten) VALUES ('Mampang Prapatan', 1);
INSERT INTO KECAMATAN (nama, id_kabupaten) VALUES ('Pancoran', 1);
INSERT INTO KECAMATAN (nama, id_kabupaten) VALUES ('Tebet', 1);
INSERT INTO KECAMATAN (nama, id_kabupaten) VALUES ('Setiabudi', 1);

INSERT INTO PENYAKIT (nama) VALUES ('Demam Berdarah');
INSERT INTO PENYAKIT (nama) VALUES ('HIV/AIDS');
INSERT INTO PENYAKIT (nama) VALUES ('Malaria');
INSERT INTO PENYAKIT (nama) VALUES ('Tuberkulosis');

-- DBD --
INSERT INTO REKOMENDASI (judul, deskripsi, id_penyakit) VALUES ('Fogging', 'Yukz difogging difogging tapi jangan pake vape', 1);
INSERT INTO REKOMENDASI (judul, deskripsi, id_penyakit) VALUES ('Sosialisasi 3M', 'Menutup Penampungan Air, Menguras Penampungan Air, Mengubur Barang Bekas', 1);
INSERT INTO REKOMENDASI (judul, deskripsi, id_penyakit) VALUES ('Pembagian Abate', 'Abate bubuk ajaib dari kantong Doraemon bisa bikin nyamuk semaput',1 );
-- HIV --
INSERT INTO REKOMENDASI (judul, deskripsi, id_penyakit) VALUES ('Sosialisasi HIV', 'Jauhi narkoba', 2);
-- Malaria --
INSERT INTO REKOMENDASI (judul, deskripsi, id_penyakit) VALUES ('Pembagian Pil Kina', 'Kina wa omae no mirai desu you', 3);
-- TB --
INSERT INTO REKOMENDASI (judul, deskripsi, id_penyakit) VALUES ('Tim Cepat Tanggap', 'uhuk uhuk uhuk tau tau sembuh yeay', 4);
INSERT INTO REKOMENDASI (judul, deskripsi, id_penyakit) VALUES ('Sanatorium', 'uhuk uhuk uhuk tidur minum obat tau tau sembuh yeay', 4);

INSERT INTO SURVEY (nama, id_penyakit, id_kabupaten, token, tgl_mulai, tgl_selesai) VALUES ('Survey Demam Berdarah Jakarta Selatan Oktober 2017', 1, 1, 'jkt-s-10-17', '2017-10-10', '2017-10-25');
INSERT INTO SURVEY (nama, id_penyakit, id_kabupaten, token, tgl_mulai, tgl_selesai) VALUES ('Survey Demam Berdarah Jakarta Timur Oktober 2017', 1, 2, 'jkt-t-10-17', '2017-10-10', '2017-10-25');
INSERT INTO SURVEY (nama, id_penyakit, id_kabupaten, token, tgl_mulai, tgl_selesai) VALUES ('Survey Demam Berdarah Jakarta Barat Oktober 2017', 1, 3, 'jkt-b-10-17', '2017-10-10', '2017-10-25');
INSERT INTO SURVEY (nama, id_penyakit, id_kabupaten, token, tgl_mulai, tgl_selesai) VALUES ('Survey Demam Berdarah Jakarta Utara Oktober 2017', 1, 4, 'jkt-u-10-17', '2017-10-10', '2017-10-25');
INSERT INTO SURVEY (nama, id_penyakit, id_kabupaten, token, tgl_mulai, tgl_selesai) VALUES ('Survey Demam Berdarah Jakarta Pusat Oktober 2017', 1, 5, 'jkt-p-10-17', '2017-10-10', '2017-10-25');

-- SAMPLE JAKARTA SELATAN --
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Mamad Sukirman', 1, 1, '2017-10-10', '2017-10-10', 1, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Mamad Sakirman', 1, 1, '2017-10-10', '2017-10-10', 1, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Budi Sukirman', 1, 1, '2017-10-10', '2017-10-10', 1, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Balai Sukirman', 1, 1, '2017-10-10', '2017-10-10', 1, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Ucup Sukirman', 0, 1, '2017-10-10', '2017-10-10', 1, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Baba Rafi', 0, 1, '2017-10-10', '2017-10-10', 1, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Sosro Seger', 1, 1, '2017-10-10', '2017-10-10', 1, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Macan Biskuat', 1, 1, '2017-10-10', '2017-10-10', 1, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Harimau Superindo', 0, 1, '2017-10-10', '2017-10-10', 1, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Tentara Hero', 0, 1, '2017-10-10', '2017-10-10', 1, 19);

-- SAMPLE JAKARTA TIMUR --
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Sarah Sechan', 1, 2, '2017-10-10', '2017-10-10', 2, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Multatuli', 1, 2, '2017-10-10', '2017-10-10', 2, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Darwis Dekker', 1, 2, '2017-10-10', '2017-10-10', 2, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Suparno', 1, 2, '2017-10-10', '2017-10-10', 2, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Megawan Suparnoputro', 0, 2, '2017-10-10', '2017-10-10', 2, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Mangunhardjo', 0, 2, '2017-10-10', '2017-10-10', 2, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Joko Tingkir', 1, 2, '2017-10-10', '2017-10-10', 2, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Topan Mengamuk', 1, 2, '2017-10-10', '2017-10-10', 2, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Armin Artlert', 0, 2, '2017-10-10', '2017-10-10', 2, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Erwin Smith', 0, 2, '2017-10-10', '2017-10-10', 2, 19);

-- SAMPLE JAKARTA BARAT --
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Naegi Makoto', 1, 3, '2017-10-10', '2017-10-10', 3, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Gantt', 1, 3, '2017-10-10', '2017-10-10', 3, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Parkinson', 1, 3, '2017-10-10', '2017-10-10', 3, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Murphy', 1, 3, '2017-10-10', '2017-10-10', 3, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Malkist', 0, 3, '2017-10-10', '2017-10-10', 3, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Oreo', 0, 3, '2017-10-10', '2017-10-10', 3, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Ritter', 1, 3, '2017-10-10', '2017-10-10', 3, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Top', 1, 3, '2017-10-10', '2017-10-10', 3, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Slai Olay', 0, 3, '2017-10-10', '2017-10-10', 3, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Rivaille', 0, 3, '2017-10-10', '2017-10-10', 3, 19);

-- SAMPLE JAKARTA UTARA --
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Tyrone', 1, 4, '2017-10-10', '2017-10-10', 4, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Pablo', 1, 4, '2017-10-10', '2017-10-10', 4, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Uniqua', 1, 4, '2017-10-10', '2017-10-10', 4, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Tingky Wingky', 1, 4, '2017-10-10', '2017-10-10', 4, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Dipsy', 0, 4, '2017-10-10', '2017-10-10', 4, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Lala', 0, 4, '2017-10-10', '2017-10-10', 4, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Po', 1, 4, '2017-10-10', '2017-10-10', 4, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Ian', 1, 4, '2017-10-10', '2017-10-10', 4, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Strepsils', 0, 4, '2017-10-10', '2017-10-10', 4, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Panadol', 0, 4, '2017-10-10', '2017-10-10', 4, 19);

-- SAMPLE JAKARTA UTARA --
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Onigiri', 1, 5, '2017-10-10', '2017-10-10', 5, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Yaki Udon', 1, 5, '2017-10-10', '2017-10-10', 5, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Teppanyaki', 1, 5, '2017-10-10', '2017-10-10', 5, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Robatayaki', 1, 5, '2017-10-10', '2017-10-10', 5, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Ababu', 0, 5, '2017-10-10', '2017-10-10', 5, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Pepper Lunch', 0, 5, '2017-10-10', '2017-10-10', 5, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('UncleK', 1, 5, '2017-10-10', '2017-10-10', 5, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Mujigae', 1, 5, '2017-10-10', '2017-10-10', 5, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Maxx Coffee', 0, 5, '2017-10-10', '2017-10-10', 5, 19);
INSERT INTO SAMPLE (nama, is_sakit, id_survey, tgl_data, tgl_sakit, id_surveyor, umur) VALUES ('Panadol', 0, 5, '2017-10-10', '2017-10-10', 5, 19);
