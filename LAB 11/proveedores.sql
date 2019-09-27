
BULK INSERT a1702242.a1702242.[Proovedores]
   FROM 'e:\wwwroot\rcortese\proveedores.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )