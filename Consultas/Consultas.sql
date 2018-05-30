CONSULTA PARA ACUDIENTE
1.	select e.identificacion,nombre_1, nombre_2,apellido_1,apellido_2,curso,i.materia,nota,grado,identificacion_es from estudiante e inner join estudiante_estado_academico es on es.id_estudiante=e.id inner join estado_academico i on i.id=es.id_estado
// MUESTRA LOS DATOS DEL ESTUDIANTE Y SU ESTADO ACADÉMICO POR MATERIA//
2.	select * from actividades
// MUESTRA LAS ACTIVIDADES CURRICULARES Y EXTRACURRICULARES DE LA INSTITUCIÓN EDUCATIVA//
3.	
SELECT e.id, e.nombre, e.fecha, e.descripcion	,e.tipo, e.id_estudiante, p.nombre_est, p.apellido_est,p.curso  FROM actividades e inner join estudiante p on e.id_estudiante=p.id_estudiante
//MUESTRA LAS ACTIVIDADES CURRICULARES Y EXTRACURRICULARES POR ESTUDIANTE, VISTA DEL ACUDIENTE//

4.	
SELECT e.id, e.falta, e.fecha, e.grado, e.id_estudiante, p.nombre_est, p.apellido_est,p.curso  FROM llamados_atencion e inner join estudiante p on e.id_estudiante=p.id_estudiante
//MUESTRA LOS LLAMADOS DE ATENCIÓN IDENTIFICANDO EL ESTUDIANTE//

5.	
SELECT e.id_estado,e.materias,e.nota,e.grado, e.id_estudiante, p.nombre_est, p.apellido_est,p.curso  FROM estado_academico e
     inner join estudiante p on e.id_estudiante=p.id_estudiante
//MUESTRA EL ESTADO ACÁDEMICO DEL ESTUDIANTE POR MATERIA//

6.	
SELECT  identificacion, nombre_est, nombre2_est, apellido_est, apellido2_est, curso FROM estudiante WHERE apellido_est="Perez"

//MUESTRA AL ESTUDIANTE SEGÚN SU PRIMER APELLIDO//

7.	
select e.identificacion,nombre_1, nombre_2,apellido_1,apellido_2,curso,i.falta,fecha,grado,identificacion_es from estudiante e inner join estudiante_informacion es on es.id_estudiante=e.id inner join llamados_atencion i on i.id=es.id_informacion

//MUESTRA LOS DATOS DEL ESTUDIANTE Y LOS LLAMADOS DE ATENCIÓN QUE TIENE//


CONSULTA PARA PROFESORES
1.	Select * from estudiante 
//MUESTRA TODOS LOS ESTUDIANTES DE LA TABLA//
2.	
SELECT m.id_materia, m.nombre_mate, m.id_estudiante, e.nombre_est, e.apellido_est,e.curso  FROM materia m inner join estudiante e on m.id_estudiante=e.id_estudiante  
//ESTUDIANTES POR MATERIA//


3.	

SELECT e.id_estudiante, e.identificacion, e.nombre_est, e.nombre2_est, e.apellido_est, e.apellido2_est, e.curso,e.id_padresflia, p.nombre_1, p.apellido_1  FROM estudiante e inner join padresflia p on e.id_padresflia=p.id_padres
//MUESTRA LOS DATOS DEL ESTUDIANTE CON SU RESPECTIVO ACUDIENTE//
4.	
SELECT identificacion, nombre_pro, nombre2_pro, apellido_pro ,apellido2_pro, cargo_aca FROM profesores WHERE id_profesores=1 
//ARROJA LOS DATOS DEL PROFESOR Y SU CARGO ACADÉMICO SEGÚN SU ID//


CONSULTA PARA ADMINISTRATIVOS
1.	
SELECT e.id, e.falta, e.fecha, e.grado, e.id_estudiante, p.nombre_est, p.apellido_est,p.curso  FROM llamados_atencion e
 inner join estudiante p on e.id_estudiante=p.id_estudiante

//MUESTRA LOS DATOS DEL ESTUDIANTE Y LOS LLAMADOS DE ATENCIÓN QUE TIENE//

2.	
SELECT nombre_pro, nombre2_pro, apellido_pro, apellido2_pro, cargo_aca FROM profesores

//MUESTRA LOS DATOS DEL DOCENTE Y SU CARGO ACADÉMICO// 

3.	

SELECT m.id_materia, m.nombre_mate, m.id_estudiante,m.id_profesores, e.nombre_est, e.apellido_est,e.curso,p.nombre_pro,p.apellido_pro  FROM materia m inner join estudiante e inner join profesores p on m.id_estudiante=e.id_estudiante on m.id_estudiante=p.id_profesores 

//DOCENTES Y SUS ESTUDIANTES POR MATERIA//


4.	
SELECT identificacion, nombre_pro, nombre2_pro, apellido_pro, apellido2_pro, cargo_aca FROM profesores WHERE id_profesores=1 
//ARROJA LOS DATOS DEL PROFESOR Y SU CARGO ACADÉMICO SEGÚN SU ID//


5.	
SELECT e.id_estudiante, e.identificacion, e.nombre_est, e.nombre2_est, e.apellido_est, e.apellido2_est, e.curso,e.id_padresflia, p.nombre_1, p.apellido_1  FROM estudiante e inner join padresflia p on e.id_padresflia=p.id_padres
//MUESTRA LOS DATOS DEL ESTUDIANTE CON SU RESPECTIVO ACUDIENTE//

6.	
SELECT e.id_estudiante, e.identificacion, e.nombre_est, e.nombre2_est, e.apellido_est, e.apellido2_est, e.curso, p.nombre_1, p.apellido_1  FROM estudiante e inner join padresflia p on e.id_padresflia=p.id

//MUESTRA LOS DATOS DEL ESTUDIANTE Y SU RESPECTIVO ACUDIENTE//


