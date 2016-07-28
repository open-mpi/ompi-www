<?
$subject_val = "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 04:45:35 2011" -->
<!-- isoreceived="20110526084535" -->
<!-- sent="Thu, 26 May 2011 10:43:46 +0200" -->
<!-- isosent="20110526084346" -->
<!-- name="francoise.roch_at_[hidden]" -->
<!-- email="francoise.roch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1" -->
<!-- id="4DDE12C2.7000200_at_obs.ujf-grenoble.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="81BB28EC-D180-4884-BD3C-7FC78A2E5C8A_at_cisco.com" -->
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
<strong>Date:</strong> 2011-05-26 04:43:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16639.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="16637.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16632.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16639.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16639.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 24, 2011, at 4:42 AM, francoise.roch_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      CALL MPI_COMM_SIZE(id%COMM, id%NPROCS, IERR )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      IF ( id%PAR .eq. 0 ) THEN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         IF ( id%MYID .eq. MASTER ) THEN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            color = MPI_UNDEFINED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ELSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            color = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         END IF
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         CALL MPI_COMM_SPLIT( id%COMM, color, 0, id%COMM_NODES, IERR )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         id%NSLAVES = id%NPROCS - 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ELSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         CALL MPI_COMM_DUP( id%COMM, id%COMM_NODES, IERR )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         id%NSLAVES = id%NPROCS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      END IF
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      IF (id%PAR .ne. 0 .or. id%MYID .NE. MASTER) THEN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         CALL MPI_COMM_DUP( id%COMM_NODES, id%COMM_LOAD, IERR
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ENDIF
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Actually, we look at the first case, that is id%par = 0. But the MPI_COMM_SPLIT routine is called by all the processes and creates a new communicator named &quot;id%COMM_NODES&quot;. This communicator contains all the slaves, but not the master. The first MPI_COMM_DUP is not executed, the second one is executed on all the slaves nodes (id%MYID .NE. MASTER ), because the communicator is &quot;id%COMM_NODES&quot; and so implies all the processes of this communicator.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you sure that id%myid is relative to id%comm?  I don't see its assignment in your code snipit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Yes, id%myid is relative to id%comm. It is assigned, just before in the 
<br>
code, by all the processes, by the following call :
<br>
CALL MPI_COMM_RANK(id%COMM, id%MYID, IERR)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16639.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="16637.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16632.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16639.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16639.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
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
