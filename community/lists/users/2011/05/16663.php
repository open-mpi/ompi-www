<?
$subject_val = "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 31 10:57:27 2011" -->
<!-- isoreceived="20110531145727" -->
<!-- sent="Tue, 31 May 2011 16:55:38 +0200" -->
<!-- isosent="20110531145538" -->
<!-- name="francoise.roch_at_[hidden]" -->
<!-- email="francoise.roch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1" -->
<!-- id="4DE5016A.10900_at_obs.ujf-grenoble.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2FE15CB-5706-4CF9-BD52-8210239D56E3_at_cisco.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1<br>
<strong>From:</strong> <a href="mailto:francoise.roch_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_COMM_DUP%20freeze%20with%20OpenMPI%201.4.1"><em>francoise.roch_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-05-31 10:55:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16664.php">Frédéric Feyel: "[OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16662.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16639.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16671.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16671.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I reproduced the problem with the following code :
<br>
<p><p>PROGRAM testDUP
<br>
INCLUDE &quot;mpif.h&quot;
<br>
<p>PARAMETER( MASTER = 0 )
<br>
INTEGER color
<br>
INTEGER COMM, COMM_NODES, COMM_LOAD, MYID, IERR
<br>
<p>COMM=MPI_COMM_WORLD
<br>
<p>CALL MPI_INIT(IERR)
<br>
CALL MPI_COMM_RANK(COMM, MYID, IERR)
<br>
IF ( MYID .eq. MASTER ) THEN
<br>
color = MPI_UNDEFINED
<br>
ELSE
<br>
color = 0
<br>
END IF
<br>
<p>CALL MPI_COMM_SPLIT( COMM, color, 0,COMM_NODES, IERR )
<br>
<p>IF (MYID .NE. MASTER) THEN
<br>
CALL MPI_COMM_DUP( COMM_NODES, COMM_LOAD, IERR )
<br>
ENDIF
<br>
<p>CALL MPI_FINALIZE(IERR)
<br>
END PROGRAM
<br>
<p><p>I execute the program on 2 nodes of 12 cores each (a total of 24 
<br>
processes), it doesn't stop.
<br>
Adding the 2 lines above in the code, just before the MPI_COMM_DUP call, 
<br>
I remark that several process have the same rank for COMM_NODES 
<br>
communicator .
<br>
CALL MPI_COMM_RANK(COMM_NODES, MYID2, IERR)
<br>
WRITE(*,*) 'before DUP call myid is ', MYID, 'myid2 is ', MYID2
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 26, 2011, at 4:43 AM, francoise.roch_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     CALL MPI_COMM_SIZE(id%COMM, id%NPROCS, IERR )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     IF ( id%PAR .eq. 0 ) THEN
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        IF ( id%MYID .eq. MASTER ) THEN
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           color = MPI_UNDEFINED
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        ELSE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           color = 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        END IF
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        CALL MPI_COMM_SPLIT( id%COMM, color, 0, id%COMM_NODES, IERR )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        id%NSLAVES = id%NPROCS - 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     ELSE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        CALL MPI_COMM_DUP( id%COMM, id%COMM_NODES, IERR )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        id%NSLAVES = id%NPROCS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     END IF
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     IF (id%PAR .ne. 0 .or. id%MYID .NE. MASTER) THEN
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        CALL MPI_COMM_DUP( id%COMM_NODES, id%COMM_LOAD, IERR
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     ENDIF
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt; Yes, id%myid is relative to id%comm. It is assigned, just before in the code, by all the processes, by the following call :
</span><br>
<span class="quotelev2">&gt;&gt; CALL MPI_COMM_RANK(id%COMM, id%MYID, IERR)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm out of ideas.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you create a short reproducer code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16664.php">Frédéric Feyel: "[OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16662.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16639.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16671.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16671.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
