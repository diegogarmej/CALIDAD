    CREATE TABLE novedad(

    id              int (100) auto_increment not null,
    tipo_novedad    varchar(100) not null,
    fecha_visita    date,
    obsevacion      varchar(100)not null,
    CONSTRAINT pk_novedad PRIMARY KEY (id)
    )ENGINE=InnoDB; 


     CREATE TABLE auditor(
     id             int(100)  auto_increment not null,
     novedad_id     int(100) not null, 
     nombre         varchar(50) not null,
     apellido       varchar (50) not null,
     documento      int (20) not null,   
     codigo_etb     varchar(15) not null,
     tel_contacto   int (10)  not null,
     CONSTRAINT pk_auditor PRIMARY KEY (id)
      )ENGINE=InnoDB;

     CREATE  TABLE agenda(
     id             int(100) auto_increment not null,   
     mes            varchar(20) not null,
     contratista    varchar(20) not null,
     subzona        varchar(20),
     actividad      varchar(30) not null,
     cambio         varchar(20) not null,
     tarea          varchar (20) not null,
     cliente        varchar (100) not null,
     direccion      varchar (100) not null,
     hora           DATE  not null,
     tecnico        varchar(100),
     celular        int(12),
     vehiculo       int (5) not null,
     auditor_asignado  varchar (20) not null,
     fecha           date not null, 
     CONSTRAINT pk_agenda PRIMARY KEY (id)   
     )ENGINE=InnoDB;