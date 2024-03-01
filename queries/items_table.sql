--
-- PostgreSQL database dump
--

-- Dumped from database version 9.3.3
-- Dumped by pg_dump version 9.3.3
-- Started on 2024-02-09 11:48:35

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

--
-- TOC entry 1953 (class 0 OID 66916)
-- Dependencies: 174
-- Data for Name: items; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (1, 'The Great Gatsby', 'Classic novel by F. Scott Fitzgerald', 1, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (2, 'To Kill a Mockingbird', 'Harper Lees timeless exploration of racial injustice', 1, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (4, 'The Catcher in the Rye', 'J.D. Salingers influential coming-of-age novel', 1, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (5, 'Pride and Prejudice', 'Jane Austens classic romantic novel', 1, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (6, 'Samsung Galaxy S21', 'Flagship smartphone with advanced features', 2, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (7, 'iPhone 13', 'Latest iPhone model with powerful performance', 2, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (8, 'Xiaomi Mi 11', 'Affordable flagship with impressive specifications', 2, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (9, 'Google Pixel 6', 'High-quality camera and pure Android experience', 2, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (10, 'OnePlus 9 Pro', 'Premium Android device with fast charging', 2, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (11, 'Cotton Shirt', 'Comfortable cotton shirt for daily wear', 3, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (12, 'Denim Jeans', 'Classic denim jeans for a casual look', 3, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (13, 'Silk Dress', 'Elegant silk dress for special occasions', 3, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (14, 'Wool Sweater', 'Warm wool sweater for chilly days', 3, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (15, 'Athletic Shorts', 'Breathable athletic shorts for sports and exercise', 3, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (16, 'LG AC', 'Highly efficient air conditioner with advanced cooling technology', 4, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (17, 'Samsung AC', 'Energy-efficient AC with smart features', 4, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (18, 'Daikin AC', 'Japanese brand known for reliable and durable air conditioners', 4, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (19, 'Carrier AC', 'Trusted brand with a focus on performance and innovation', 4, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (20, 'Hitachi AC', 'Innovative air conditioning solutions for home and business', 4, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (21, 'Sony TV', 'High-quality televisions with cutting-edge display technology', 5, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (22, 'Samsung TV', 'Smart TVs with vibrant colors and immersive viewing experience', 5, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (23, 'LG TV', 'Innovative TVs known for sleek design and superior picture quality', 5, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (24, 'TCL TV', 'Affordable smart TVs with Roku integration for streaming', 5, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (25, 'Panasonic TV', 'Japanese brand offering a range of televisions with great features', 5, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (26, 'Louis Vuitton', 'Luxury bags with iconic monogram and elegant design', 6, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (27, 'Gucci', 'Fashion-forward bags known for their quality and style', 6, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (28, 'Michael Kors', 'Designer bags with a blend of fashion and functionality', 6, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (29, 'Herschel', 'Casual and trendy bags suitable for everyday use', 6, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (30, 'Samsonite', 'Durable and reliable bags, especially for travel', 6, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (31, 'abcd', '  efg                  ', 1, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (32, 'oneplus', '       new phone             ', 2, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (33, 'baggit', '             nice bag       ', 6, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (34, 'the secret garden', '            Enter the enchanting world of Frances Hodgson Burnett''s timeless classic, The Secret Garden. Follow young Mary Lennox as she discovers a hidden paradise, filled with wonders and secrets waiting to be unlocked. This edition captures the magic and beauty of the garden''s transformative power.        ', 1, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (35, 'the secret garden', '            Enter the enchanting world of Frances Hodgson Burnett''s timeless classic, The Secret Garden. Follow young Mary Lennox as she discovers a hidden paradise, filled with wonders and secrets waiting to be unlocked. This edition captures the magic and beauty of the garden''s transformative power.        ', 1, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (36, 'the secret garden', '        Enter the enchanting world of Frances Hodgson Burnett''s timeless classic, The Secret Garden. Follow young Mary Lennox as she discovers a hidden paradise, filled with wonders and secrets waiting to be unlocked. This edition captures the magic and beauty of the garden''s transformative power.            ', 1, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (37, 'the secret garden', '        Enter the enchanting world of Frances Hodgson Burnett''s timeless classic, The Secret Garden. Follow young Mary Lennox as she discovers a hidden paradise, filled with wonders and secrets waiting to be unlocked. This edition captures the magic and beauty of the garden''s transformative power.            ', 1, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (38, 'the secret garden', '        Enter the enchanting world of Frances Hodgson Burnett''s timeless classic, The Secret Garden. Follow young Mary Lennox as she discovers a hidden paradise, filled with wonders and secrets waiting to be unlocked. This edition captures the magic and beauty of the garden''s transformative power.            ', 1, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (39, 'the secret garden', '        Enter the enchanting world of Frances Hodgson Burnett''s timeless classic, The Secret Garden. Follow young Mary Lennox as she discovers a hidden paradise, filled with wonders and secrets waiting to be unlocked. This edition captures the magic and beauty of the garden''s transformative power.            ', 1, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (40, 'the secret garden', '                    abcfd', 1, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (41, 'as you like it', 'book by william shakespeare           ', 1, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (42, 'gucci dress', 'very expensive', 3, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (43, 'gucci dress', 'very expensive', 3, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (44, 'gucci dress', 'very expensive', 3, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (45, 'samsung a22', 'good phone', 2, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (46, 'samsung a22', 'good phone', 2, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (47, 'samsung a22', 'good phone', 2, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (48, 'abc', 'def', 2, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (49, 'abc', 'def', 2, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (50, 'abc', 'def', 2, NULL, 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (3, 'you', 'Dystopian novel by George Orwell', 1, '', 0.0);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (51, 'Moto G72', 'With Android 13', 2, NULL, 4.7);
INSERT INTO items (item_id, item_name, item_desc, item_cat, item_img, avg_rating) VALUES (52, 'Onida', 'good tv', 5, NULL, 4.4);


-- Completed on 2024-02-09 11:48:35

--
-- PostgreSQL database dump complete
--

