CREATE TABLE novedades() 
    -> CREATE TABLE novedad(
        
    id              int(100) auto_increment not null,
    tipo_novedad    varchar(100) not null,
    fecha_visita    date,
    obsevacion      varchar(100)not null
    CONSTRAINT pk_novedad PRIMARY KEY (id)     
     )ENGINE=InnoDB; 


     CREATE TABLE auditor(
     id             int(100) auto_increment not null,
     novedad_id     int(100) not null, 
     nombre         varchar(50) not null,
     apellido       varchar (50) not null,
     documento      int (20) not null,   
     codigo_etb     varchar(15) not null,
     tel_contacto   int (10)  not null,
     CONSTRAINT pk_auditor PRIMARY KEY (id)  
     )ENGINE=InnoDB;

     CREATE  TABLE cambio(
     id             int (100) auto_increment not null,
     auditor_asigando int (100) not null,
     cliente        varchar(100)not null,
     direccion      varchar(100)not null,
     contratista    varchar(100)not null,
     actividad      varchar(100)not null,
     tarea          varchar(100)not null,
     hora           time not null,
     tecnico        varchar(100)not null,
     cambio         varchar(100)not null,
     CONSTRAINT pk_cambio PRIMARY KEY (cambio) 
     CONSTRAINT fk_cambio_auditor FOREIGN KEY (auditor_asigando) REFERENCES auditor ()
     )ENGINE=InnoDB;