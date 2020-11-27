create table tblcasoestudio(
	cacodigoidgf uuid NOT NULL DEFAULT uuid_generate_v1mc(),
	cadominiogf character varying(150) DEFAULT 'N/D',
	careinogf character varying(150) DEFAULT 'N/D',
	caphylumgf character varying(150) DEFAULT 'N/D',
	caclasegf character varying(150) DEFAULT 'N/D',
	casubclasegf character varying(150) DEFAULT 'N/D',
	caordengf character varying(150) DEFAULT 'N/D',
	cafamiliagf character varying(150) DEFAULT 'N/D',
	cagenerogf character varying(150) DEFAULT 'N/D',
	caespeciegf character varying(150) DEFAULT 'N/D',
	cafechareggf date DEFAULT CURRENT_DATE,
	cahorareggf time WITHOUT TIME ZONE DEFAULT CURRENT_TIME,
	caestadogf integer DEFAULT 1,
	CONSTRAINT
		"PK_tblcasoestudio" PRIMARY KEY (cacodigoidgf)
);

create table tbllocalizacion(
	loccodigoidgf uuid NOT NULL DEFAULT uuid_generate_v1mc(),
	loccasoestudiogf uuid NOT NULL,
	locprovinciagf character varying(150) DEFAULT 'N/D',
	locciudadgf character varying(150) DEFAULT 'N/D',
	locsectorgf character varying(150) DEFAULT 'N/D',
	locfincagf character varying(150) DEFAULT 'N/D',
	locreferenciagf character varying(150) DEFAULT 'N/D',
	locdescripciongf character varying(150) DEFAULT 'N/D',
	locfechareggf date DEFAULT CURRENT_DATE,
	lochorareggf time WITHOUT TIME ZONE DEFAULT CURRENT_TIME,
	locestadogf integer DEFAULT 1,
	CONSTRAINT
		"PK_tbllocalizacion" PRIMARY KEY (loccodigoidgf),
	CONSTRAINT "FK_tbllocalizacion" FOREIGN KEY (loccasoestudiogf)
      REFERENCES tblcasoestudio (cacodigoidgf) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
);

