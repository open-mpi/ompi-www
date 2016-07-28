   case (5_ST)

    do I=1_ST,MXIPZ			!Initiate receives on all procs
     NC = ICELL(2,NCFACE(1,I))
     call MPI_IRECV(DWALL(NC),int(NCFACES(I)),MPI_FP,NZINT(I)-1, &
                    int(GLOBINT(I)),AVUS_COMM_WORLD,REQUEST(I),IERR)
    end do

    do I=1_ST,MXIPZ			!Send zonal data
     allocate(VTMP(NCFACES(I)))

     do NR=1_ST,NCFACES(I)
      NC = ICELL(1,NCFACE(NR,I))
      VTMP(NR) = DWALL(NC)
     end do
      
     call MPI_ISEND(VTMP,int(NCFACES(I)),MPI_FP,NZINT(I)-1, &
                    int(GLOBINT(I)),AVUS_COMM_WORLD,REQUEST(MXIPZ+I),IERR)

     deallocate(VTMP)
    end do

    call MPI_WAITALL(int(MXIPZ*2),REQUEST,STAT,IERR)	!Wait til receives complete
