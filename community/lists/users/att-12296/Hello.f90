PROGRAM Hello

USE omp_lib
USE DataM

IMPLICIT NONE

INTEGER :: nthreads

!$OMP PARALLEL PRIVATE(tid,nthreads) NUM_THREADS(2)
 !$OMP SECTIONS
  !$OMP SECTION 
   CALL PrThread()
   
  !$OMP SECTION
   CALL PrThread()

 !$OMP END SECTIONS  
   
   IF ( tid == 0 ) THEN
      nthreads = omp_get_num_threads()
      PRINT *, "Number of Threads = ", nthreads
   END IF

!$OMP END PARALLEL

END PROGRAM Hello