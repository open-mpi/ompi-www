PROGRAM main 
    USE mpi 
    IMPLICIT NONE
    INTEGER :: i, field(10), mpi_file_handle, mpi_err, mpi_status(MPI_STATUS_SIZE), mpi_resultlen
    CHARACTER(MPI_MAX_ERROR_STRING) :: mpi_iomsg

    CALL MPI_INIT( mpi_err )
    CALL MPI_FILE_SET_ERRHANDLER( MPI_FILE_NULL, &
                                  MPI_ERRORS_ARE_FATAL, &
                                  mpi_err )

    CALL EXECUTE_COMMAND_LINE( 'touch test.dat' )

    CALL MPI_FILE_OPEN( MPI_COMM_WORLD, &
                        'test.dat', &
                        MPI_MODE_RDONLY, &
                        MPI_INFO_NULL, &
                        mpi_file_handle, &
                        mpi_err )

    CALL MPI_FILE_READ( mpi_file_handle, &
                        field(:), &
                        SIZE(field), &
                        MPI_REAL, &
                        mpi_status, &
                        mpi_err ) 

    CALL MPI_ERROR_STRING( mpi_err, mpi_iomsg, mpi_resultlen, i )
    WRITE(*,*) mpi_iomsg(1:mpi_resultlen)

    CALL MPI_FILE_CLOSE( mpi_file_handle, mpi_err )

    CALL MPI_FINALIZE( mpi_err )
        
END PROGRAM main

