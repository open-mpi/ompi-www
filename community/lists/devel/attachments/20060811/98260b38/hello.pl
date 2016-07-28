c123456
       INTEGER FUNCTION FUNC1 ()
         INTEGER my_int, your_int
         my_int=2
         your_int=3
         FUNC1=my_int*your_int
       END
        
       SUBROUTINE SUB1 ()
         INTEGER test,FUNC1
         test=FUNC1()
         IF (test.eq.1) THEN
           test=0
         ELSE
           test=-1
         END IF
       END
       
       PROGRAM hellof77
       include 'mpif.h'
       
       INTEGER i,my_rank,p,source,dest,tag,x,y,beingwatched,ierr,my_size
       CHARACTER message*21
       CHARACTER messagefirst
       INTEGER goat(10)
       INTEGER status(MPI_STATUS_SIZE)
       INTEGER stat
       
       CALL MPI_INIT(ierr)
       CALL MPI_COMM_SIZE(MPI_COMM_WORLD, my_size, ierr)
       CALL MPI_COMM_RANK(MPI_COMM_WORLD, my_rank, ierr)
       
       IF (my_size.eq.8) THEN
          IF (my_rank.eq.5) THEN
            CALL MPI_SEND(message,400,MPI_CHARACTER,dest,tag,MPI_COMM_W
     cORLD,ierr)
          END IF
       END IF
       message="HelloFromMexxxxxxxxx!" 
       
       PRINT *,"My rank is ",my_rank,"!"
       
       CALL SUB1()

       DO x=1,(my_rank-1)
        goat(x)=my_rank*x
       END DO
       
       beingwatched=1
       tag=0
       
       IF (my_rank.ne.0) THEN
         PRINT *,"Greetings from process ",my_rank,"!"
         PRINT *,"Sending message from ",my_rank,"!"
         dest=0
         CALL MPI_Send(message,21,MPI_CHARACTER,dest,tag,MPI_COMM_WORLD
     c,ierr)
         beingwatched=beingwatched-1
       ELSE
         message="Hello from my process"
         DO source=1,(my_size-1)
           PRINT *,"waiting for message from ",source
        CALL MPI_Recv(message,21,MPI_CHARACTER,source,tag,MPI_COMM_WORLD
     c,stat,ierr)
           PRINT *,"Message recieved: ",message
           beingwatched=beingwatched+1
         END DO
       END IF
       
       beingwatched=12
       CALL MPI_Finalize(ierr)
       beingwatched=0
       PRINT *,"All done...",my_rank
       END

