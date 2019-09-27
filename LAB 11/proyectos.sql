BULK INSERT a1702242.a1702242.[Proyectos]
   FROM 'e:\wwwroot\rcortese\proyectos.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )