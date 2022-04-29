--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.1
-- Dumped by pg_dump version 12.0

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: seq_example_id; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.seq_example_id
    START WITH 1001
    INCREMENT BY 4
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.seq_example_id OWNER TO postgres;

--
-- Name: seq_student_id; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.seq_student_id
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.seq_student_id OWNER TO postgres;

SET default_tablespace = '';

--
-- Name: student; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.student (
    id integer DEFAULT nextval('public.seq_student_id'::regclass) NOT NULL,
    name character varying(50),
    email character varying(100),
    phone character varying(15),
    created_at timestamp without time zone DEFAULT now()
);


ALTER TABLE public.student OWNER TO postgres;

--
-- Data for Name: student; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.student (id, name, email, phone, created_at) FROM stdin;
1	Abdulah Dusengimana	abdu@gmail.com	250-78784343	2022-04-08 10:15:17.460519
2	Ahmed KALISA	kahmed@gmail.com	250-73222222	2022-04-08 10:35:47.28981
3	Aisha Dusabe	aisha@gmail.com	250-722222222	2022-04-08 10:45:30.578627
\.


--
-- Name: seq_example_id; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.seq_example_id', 1001, false);


--
-- Name: seq_student_id; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.seq_student_id', 3, true);


--
-- Name: student student_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.student
    ADD CONSTRAINT student_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

