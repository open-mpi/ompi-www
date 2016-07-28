program vector
USE mpi
IMPLICIT NONE
integer SIZE_
parameter(SIZE_=5) 
integer numtasks, rank, source, dest, tag, i,  ierr 
real*4 AA(4,5,3), BB(4,5,3) 
integer stat(MPI_STATUS_SIZE), rowtype,coltype

!Fortran stores this array in column major order 
AA=0.
AA(1,:,1)= [1.0,2.0,3.0,4.0,5.0]
AA(2,:,1)= [1.0,2.0,3.0,4.0,5.0]*2.0
AA(3,:,1)= [1.0,2.0,3.0,4.0,5.0]*4.0
AA(4,:,1)= [1.0,2.0,3.0,4.0,5.0]*5.0

AA(1,:,2)= [1.0,2.0,3.0,4.0,5.0]*10.
AA(2,:,2)= [1.0,2.0,3.0,4.0,5.0]*20.0
AA(3,:,2)= [1.0,2.0,3.0,4.0,5.0]*40.0
AA(4,:,2)= [1.0,2.0,3.0,4.0,5.0]*50.0

AA(1,:,3)= [1.0,2.0,3.0,4.0,5.0]*100.
AA(2,:,3)= [1.0,2.0,3.0,4.0,5.0]*200.0
AA(3,:,3)= [1.0,2.0,3.0,4.0,5.0]*400.0
AA(4,:,3)= [1.0,2.0,3.0,4.0,5.0]*500.0


   CALL MPI_INIT(ierr) 
   CALL MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr) 
   CALL MPI_COMM_SIZE(MPI_COMM_WORLD, numtasks, ierr) 

   CALL  MPI_TYPE_VECTOR(1, 4, 4, MPI_REAL, coltype, ierr) 
   CALL  MPI_TYPE_COMMIT(coltype, ierr)
   
   CALL  MPI_TYPE_VECTOR(1, 5, 5, coltype, rowtype, ierr) 
   CALL  MPI_TYPE_COMMIT(rowtype, ierr) 
   
   CALL MPI_BARRIER(MPI_COMM_WORLD, ierr)

      IF(rank==0)THEN
         i=1
         call MPI_SEND(AA(1,1,1), 2, rowtype, 1, 300, MPI_COMM_WORLD, ierr)
      ENDIF
      
      IF(rank==1)THEN
         source = 0 
         call MPI_RECV(BB(1,1,1), 2, rowtype, 0, 300, MPI_COMM_WORLD, stat, ierr) 
         !
         WRITE(*,*) BB(1,:,2)
         WRITE(*,*) BB(1,:,3)
         !
      ENDIF
 
   CALL MPI_FINALIZE(ierr) 
ENDPROGRAM

