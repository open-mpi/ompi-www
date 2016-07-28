program vector 
IMPLICIT NONE
include 'mpif.h' 
integer SIZE_
parameter(SIZE_=4) 
integer numtasks, rank, source, dest, tag, i,  ierr 
real*4 AA(SIZE_,3,4), BB(SIZE_,3,4) 
integer stat(MPI_STATUS_SIZE), rowtype,colrowtype

!Fortran stores this array in column major order 
AA=0.
AA(1,1,1)= 1.0
AA(1,1,2)= 4.0
AA(1,1,3)= 10.0
AA(1,1,4)= 33.0
! AA(1,:,2)=[4.0,5.0,6.0,2.0]
! 
! AA(2,:,1)=[8.0,9.0,10.0,11.0]
! AA(2,:,2)=[11.0,12.0,13.0,12.0]

   CALL MPI_INIT(ierr) 
   CALL MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr) 
   CALL MPI_COMM_SIZE(MPI_COMM_WORLD, numtasks, ierr) 

   CALL  MPI_TYPE_VECTOR(3, 3, 3, MPI_REAL, rowtype, ierr) 
   CALL  MPI_TYPE_COMMIT(rowtype, ierr)
   
   CALL  MPI_TYPE_VECTOR(4, 4, 4, rowtype, colrowtype, ierr) 
   CALL  MPI_TYPE_COMMIT(colrowtype, ierr) 
   
   CALL MPI_BARRIER(MPI_COMM_WORLD, ierr)

      IF(rank==0)THEN
         i=1
         call MPI_SEND(AA(1,1,1), 1, colrowtype, 1, 300, MPI_COMM_WORLD, ierr)
      ENDIF
      
      IF(rank==1)THEN
         source = 0 
         call MPI_RECV(BB(1,1,1), 1, colrowtype, 0, 300, MPI_COMM_WORLD, stat, ierr) 
         !
         WRITE(*,*) ' b= ', BB(1,1,:)
      ENDIF
 
   call MPI_FINALIZE(ierr) 
ENDPROGRAM

