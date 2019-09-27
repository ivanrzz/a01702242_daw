BULK INSERT a1702242.a1702242.[Materiales]
   FROM 'e:\wwwroot\rcortese\materiales.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
