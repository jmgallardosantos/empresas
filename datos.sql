DROP TABLE IF EXISTS departamentos CASCADE;
DROP TABLE IF EXISTS departamentos CASCADE;

CREATE TABLE departamentos (
    id           BIGSERIAL    PRIMARY KEY,
    codigo       VARCHAR(2)   NOT NULL UNIQUE,
    denominacion VARCHAR(255) NOT NULL,
    localidad    VARCHAR(255)
);

CREATE TABLE empleados (
    id                  BIGSERIAL    PRIMARY KEY,
    numero              VARCHAR(4)   NOT NULL UNIQUE,
    nombre              VARCHAR(255) NOT NULL,
    apellidos           VARCHAR(255) NOT NULL,
    departamento_id     BIGINT NOT NULL REFERENCES departamentos(id)
);

-----------

INSERT INTO departamentos (codigo, denominacion, localidad)
VALUES ('10', 'Informática', 'Sanlúcar'),
       ('20', 'Administrativo', NULL),
       ('30', 'Matemáticas', 'Chipiona');

INSERT INTO empleados (numero, nombre, apellidos, departamento_id)
VALUES ('100', 'Antonio', 'Gimenez', 1),
       ('200', 'Fernando', 'Garrido', 2),
       ('300', 'Matias', 'Fernandez', 3),
       ('400', 'Federido', 'Garcia', 1);
