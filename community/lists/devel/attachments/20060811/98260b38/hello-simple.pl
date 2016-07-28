c123456
       
       PROGRAM hellof77
       include 'mpif.h'
       
       INTEGER my_rank,source,dest,tag,ierr,my_size
       CHARACTER message*21
       INTEGER stat
       
       CALL MPI_INIT(ierr)
       CALL MPI_COMM_SIZE(MPI_COMM_WORLD, my_size, ierr)
       CALL MPI_COMM_RANK(MPI_COMM_WORLD, my_rank, ierr)
       
       message="HelloFromMexxxxxxxxx!" 
       
       PRINT *,"My rank is ",my_rank,"!"
       
       tag=0
       
       IF (my_rank.ne.0) THEN
         PRINT *,"Greetings from process ",my_rank,"!"
         PRINT *,"Sending message from ",my_rank,"!"
         dest=0
         CALL MPI_Send(message,21,MPI_CHARACTER,dest,tag,MPI_COMM_WORLD
     c,ierr)
       ELSE
         message="Hello from my process"
         DO source=1,(my_size-1)
           PRINT *,"waiting for message from ",source
        CALL MPI_Recv(message,21,MPI_CHARACTER,source,tag,MPI_COMM_WORLD
     c,stat,ierr)
           PRINT *,"Message recieved: ",message
         END DO
       END IF
       
       CALL MPI_Finalize(ierr)
       PRINT *,"All done...",my_rank
       END
