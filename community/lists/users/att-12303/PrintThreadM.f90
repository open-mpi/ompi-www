SUBROUTINE PrThread()
         
   USE DataM
   USE omp_lib
   IMPLICIT NONE
 
         
      tid = omp_get_thread_num()
   
      PRINT*, "Hello from thread ", tid
 
END SUBROUTINE PrThread