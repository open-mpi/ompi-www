PROGRAM test
  USE mpi

  IMPLICIT NONE

  INTEGER :: err
  INTEGER :: status(MPI_STATUS_SIZE)

  ! Data
  INTEGER :: val1, val2
  
  ! For mpi struct creation
  INTEGER, PARAMETER :: numTypes = 1
  INTEGER, DIMENSION(numTypes) :: blockLengths
  INTEGER(KIND=MPI_ADDRESS_KIND), DIMENSION(numTypes):: displacements
  INTEGER, DIMENSION(numTypes) :: oldTypes
  INTEGER :: newType


  CALL MPI_INIT(err)

  WRITE(*,*) "Kind of address integer:", MPI_ADDRESS_KIND

  ! Initialise data
  val1 = 1
  val2 = 2

  ! Find displacements
  displacements(1) = 0

  ! Create MPI structure
  blockLengths(1) = 1
  oldTypes(1) = MPI_INTEGER
  CALL MPI_TYPE_STRUCT(numTypes, blockLengths, displacements, oldTypes &
       , newType, err)
  CALL MPI_TYPE_COMMIT(newType, err)

  ! Send
  CALL MPI_SENDRECV(val1, 1, newType, 0, 0, val2, 1, newType, 0, 0 &
       , MPI_COMM_WORLD, status, err)

  ! Output
  WRITE(*,*) val1, val2

  CALL MPI_FINALIZE(err)

END PROGRAM test
