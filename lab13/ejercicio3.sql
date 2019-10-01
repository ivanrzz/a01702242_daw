  SELECT * from Materiales;
SELECT * from Proyectos
SELECT * FROM Proveedores
SELECT * FROM Entregan 
  INSERT INTO entregan values (0, 'xxx', 0, '1-jan-02', 0) ; 
    Delete from Entregan where Clave = 0 
    
    ALTER TABLE entregan add constraint cfentreganclave 
  foreign key (clave) references materiales(clave);

    ALTER TABLE entregan add constraint cfentreganrfc 
  foreign key (rfc) references Proveedores(rfc);

    ALTER TABLE entregan add constraint cfentregannumero 
  foreign key (numero) references Proyectos(numero);

   sp_helpconstraint Materiales
   sp_helpconstraint Proyectos
  
 sp_helpconstraint Proveedores
  
  sp_helpconstraint Entregan
  
  