--
-- PostgreSQL database dump
--

-- Dumped from database version 9.3.3
-- Dumped by pg_dump version 9.3.3
-- Started on 2024-02-09 11:49:29

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

--
-- TOC entry 1956 (class 0 OID 66929)
-- Dependencies: 177
-- Data for Name: ratings; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (29, 15, 'Meesho', 3.5, 500.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (67, 37, 'Amazon', 4.4, 139.00, 19980, 'https://www.amazon.in/Secret-Garden-Frances-Hodgson-Burnett/dp/9386538997/ref=sr_1_1_sspa?crid=3GKCY4SJAYD1K&keywords=the+secret+garden&qid=1704381053&sprefix=the+secret+garde%2Caps%2C400&sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (71, 40, 'Amazon', 4.4, 139.00, 19980, 'https://www.amazon.in/Secret-Garden-Frances-Hodgson-Burnett/dp/9386538997/');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (72, 40, 'Flipkart', 4.4, 191.00, 1877, 'https://www.flipkart.com/the-secret-garden/p/itmfbtgnqyu97mtz?');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (73, 41, 'amazon', 3.3, 200.00, 100, 'www.amazon.in');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (74, 41, 'flipkart', 2.8, 150.00, 200, 'www.fliipkart.in');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (78, 46, 'amazon', 3.3, 200.00, 560, 'www.amazon.in');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (81, 49, 'amazon', 3.3, 200.00, 560, 'www.amazon.in');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (12, 6, 'Amazon', 3.2, 14400.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (26, 13, 'Myntra', 2.3, 2400.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (32, 16, 'Flipkart', 4.0, 42576.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (36, 18, 'Flipkart', 3.8, 35000.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (25, 13, 'Meesho', 3.5, 1800.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (11, 6, 'Croma', 4.5, 12600.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (22, 11, 'Myntra', 4.8, 1200.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (16, 8, 'Amazon', 3.5, 12800.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (23, 12, 'Meesho', 4.0, 1100.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (14, 7, 'Amazon', 4.8, 11250.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (35, 18, 'Croma', 3.2, 36500.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (24, 12, 'Myntra', 3.5, 2000.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (34, 17, 'Flipkart', 3.8, 27740.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (13, 7, 'Croma', 4.9, 11260.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (15, 8, 'Croma', 4.0, 13430.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (17, 9, 'Croma', 3.0, 13460.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (18, 9, 'Amazon', 4.0, 12540.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (19, 10, 'Croma', 4.2, 12280.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (68, 38, 'Amazon', 4.4, 139.00, 19980, 'https://www.amazon.in/Secret-Garden-Frances-Hodgson-Burnett/dp/9386538997/ref=sr_1_1_sspa?crid=3GKCY4SJAYD1K&keywords=the+secret+garden&qid=1704381053&sprefix=the+secret+garde%2Caps%2C400&sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (75, 44, 'amazon', 3.5, 500.00, 560, 'www.amazon.in');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (76, 44, 'flipkart', 2.8, 150.00, 200, 'www.fliipkart.in');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (79, 47, 'amazon', 3.3, 200.00, 560, 'www.amazon.in');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (82, 50, 'amazon', 3.3, 200.00, 560, 'www.amazon.in');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (20, 10, 'Amazon', 4.7, 18300.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (21, 11, 'Meesho', 4.3, 540.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (27, 14, 'Meesho', 3.2, 600.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (28, 14, 'Myntra', 3.0, 700.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (30, 15, 'Myntra', 3.8, 450.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (31, 16, 'Croma', 4.2, 35450.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (33, 17, 'Croma', 3.5, 28800.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (37, 19, 'Croma', 4.3, 37500.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (47, 24, 'Flipkart', 4.3, 15000.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (42, 21, 'Amazon', 5.0, 21999.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (41, 21, 'Flipkart', 4.8, 23000.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (45, 23, 'Flipkart', 4.0, 28450.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (46, 23, 'Amazon', 4.5, 24999.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (38, 19, 'Flipkart', 3.7, 46000.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (39, 20, 'Croma', 5.0, 28500.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (40, 20, 'Flipkart', 3.6, 35000.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (43, 22, 'Flipkart', 4.3, 16500.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (44, 22, 'Amazon', 3.6, 18499.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (48, 24, 'Amazon', 3.4, 11999.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (2, 1, 'Amazon', 4.0, 400.00, 5, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (69, 39, 'Amazon', 4.4, 139.00, 19980, 'https://www.amazon.in/Secret-Garden-Frances-Hodgson-Burnett/dp/9386538997/');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (70, 39, 'Flipkart', 4.4, 191.00, 1877, 'https://www.flipkart.com/the-secret-garden/p/itmfbtgnqyu97mtz?');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (6, 3, 'Amazon', 3.5, 800.00, 12, 'https://www.amazon.in/1984-Signet-Classics-George-Orwell/dp/0451524934');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (5, 3, 'Flipkart', 4.0, 430.00, 10, 'https://www.flipkart.com/1984/p/itmfbsy8zb7twxpg');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (77, 44, 'amazon', 3.3, 200.00, 560, 'www.amazon.in');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (80, 48, 'amazon', 3.3, 200.00, 560, 'www.amazon.in');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (57, 29, 'Nykaa', 3.8, 1400.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (49, 25, 'Flipkart', 4.0, 43000.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (50, 25, 'Amazon', 2.8, 49000.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (53, 27, 'Nykaa', 3.7, 3400.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (54, 27, 'Myntra', 4.0, 3200.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (55, 28, 'Nykaa', 3.4, 1800.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (63, 32, 'amazon', 3.8, 25000.00, 120, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (64, 32, 'flipkart', 4.2, 32000.00, 340, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (66, 33, 'flipkart', 3.0, 2800.00, 180, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (3, 2, 'Flipkart', 2.9, 260.00, 20, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (7, 4, 'Flipkart', 3.0, 460.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (9, 5, 'Flipkart', 3.7, 280.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (10, 5, 'Amazon', 4.2, 300.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (61, 31, 'fg', 2.5, 2500.00, 200, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (62, 31, 'hj', 3.0, 3200.00, 120, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (4, 2, 'Amazon', 3.8, 250.00, 60, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (1, 1, 'Flipkart', 3.5, 600.00, 2, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (8, 4, 'Amazon', 4.5, 540.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (51, 26, 'Nykaa', 3.8, 1500.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (56, 28, 'Myntra', 4.6, 2300.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (52, 26, 'Myntra', 4.2, 1250.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (60, 30, 'Myntra', 4.7, 4300.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (59, 30, 'Nykaa', 4.5, 3500.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (65, 33, 'myntra', 3.5, 3400.00, 200, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (58, 29, 'Myntra', 4.5, 1630.00, 1, NULL);
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (83, 51, 'Flipkart', 4.3, 18000.00, 3000, 'https://www.flipkart.com/motorola-g72-meteorite-grey-128-gb/');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (84, 51, 'Amazon', 4.5, 17500.00, 2500, 'https://www.amazon.in/Motorola-G72-128GB-Meteorite-Grey/');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (85, 52, 'Reliance', 4.2, 25000.00, 5000, 'https://rel.com/onida');
INSERT INTO ratings (rating_id, item_id, site_name, rating_value, price, sales, url) VALUES (86, 52, 'Naaptol', 4.6, 22000.00, 4700, 'https://naaptol.com/onida');


--
-- TOC entry 1963 (class 0 OID 0)
-- Dependencies: 178
-- Name: ratings_rating_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('ratings_rating_id_seq', 86, true);


-- Completed on 2024-02-09 11:49:29

--
-- PostgreSQL database dump complete
--

