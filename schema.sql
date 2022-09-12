CREATE TABLE search(
    id int NOT NULL AUTO_INCREMENT,
    q varchar(255) NOT NULL,
    session_id varchar(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE sitios(
    id int NOT NULL AUTO_INCREMENT,
    Lugares varchar(255) NOT NULL,
    Categories varchar(255) NOT NULL,
    PRIMARY KEY (id)
);
INSERT INTO sitios(Lugares, Categories) VALUES ('Parque Nacional Morrocoy','playa,manglares,cayos,arena'),('Médanos de Coro','desierto,dunas,Falcon,falcon'),('Parque Nacional Mochima','Sucre,Anzoátegui,costas,caribe'),('Isla Margarita','vacaciones,playa,turismo principal,soleado'),('Monte Roraima','aventura,montaña,naturaleza,mundo perdido'),('Teleférico de Mérida','trekking ,senderismo,montañas,colonias,nevado,frio'),,('Salto Ángel','salto, cascada,sabana,rio,canaima,tios,lagunas'),('Cayo Sombrero','mar caribe,paradisiaco,playa,morrocoi,cayo'),('El Amazonas','selva,humedo,animales,salvaje,plantas,tribus'),('Los Roques','paradisiaco,playas,referencia,turismo'),('Parque Nacional Canaima','rocoso,tepuyes,salto,selva'),('Parque Nacional Delta del Orinoco','tropical,selva,rio,orinoco,caños,navegacion'),('Colonia Tovar','colonias,frio,nublado,aleman,tradiconal,artesanos,ceramica,dulces');