      SUBROUTINE RED(COMM,RK)

      IMPLICIT NONE
      INCLUDE 'mpif.h'
      INTEGER COMM,IER,RANK,RK

      CALL MPI_COMM_RANK(COMM,RANK,IER)
      CALL MPI_ALLREDUCE(RANK,RK,1,MPI_INT,MPI_MAX,COMM)

      END
