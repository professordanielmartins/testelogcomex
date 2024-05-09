INSERT INTO Notas (Codigo_Materia, Codigo_Aluno, Materia, Nome_Aluno, Primeiro_Bimestre, Segundo_Bimestre, Terceiro_Bimestre, Quarto_Bimestre, Media) 
SELECT 
    CONCAT('MAT', LPAD(FLOOR(RAND() * 1000), 3, '0')), 
    CONCAT('AL', LPAD(FLOOR(RAND() * 10000), 4, '0')), 
    CONCAT('Materia', FLOOR(RAND() * 10)), 
    CONCAT('Aluno', FLOOR(RAND() * 1000)), 
    FLOOR(RAND() * 100), 
    FLOOR(RAND() * 100), 
    FLOOR(RAND() * 100), 
    FLOOR(RAND() * 100), 
    ROUND(RAND() * 100, 2)
FROM 
    information_schema.tables 
LIMIT 2000;

