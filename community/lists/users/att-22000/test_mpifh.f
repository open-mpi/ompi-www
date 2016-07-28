      program t
         
         implicit none
         include 'mpif.h'
         integer(KIND=MPI_ADDRESS_KIND) ad1, ad2, lb, extent

         integer ierror
         real r1
         real r2
         integer nproc

         lb = 1
         CALL MPI_INIT(ierror)
         CALL MPI_TYPE_GET_EXTENT(MPI_REAL,lb, extent, ierror)
         CALL MPI_GET_ADDRESS(r1, ad1, ierror)
         CALL MPI_GET_ADDRESS(r2, ad2, ierror)
         print *,MPI_ADDRESS_KIND
         print *, ad2, ad1
         print *, extent
         print *, ad2 - ad1
         CALL MPI_COMM_SIZE(MPI_COMM_WORLD, nproc,ierror)
         print *, nproc
         CALL MPI_FINALIZE(ierror)
      end program


