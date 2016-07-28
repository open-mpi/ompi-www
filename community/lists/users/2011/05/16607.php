<?
$subject_val = "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 04:44:44 2011" -->
<!-- isoreceived="20110524084444" -->
<!-- sent="Tue, 24 May 2011 10:42:48 +0200" -->
<!-- isosent="20110524084248" -->
<!-- name="francoise.roch_at_[hidden]" -->
<!-- email="francoise.roch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1" -->
<!-- id="4DDB6F88.5060004_at_obs.ujf-grenoble.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0DCF20B8-CA5C-4746-8187-A2DFF39B15DD_at_cisco.com" -->
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
<strong>Date:</strong> 2011-05-24 04:42:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16608.php">Salvatore Podda: "Re: [OMPI users] users Digest, Vol 1911, Issue 3"</a>
<li><strong>Previous message:</strong> <a href="16606.php">Jeff Squyres: "Re: [OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>In reply to:</strong> <a href="16584.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16632.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16632.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 13, 2011, at 8:31 AM, francoise.roch_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Here is the MUMPS portion of code (in zmumps_part1.F file) where the slaves call MPI_COMM_DUP , id%PAR and MASTER are initialized to 0 before :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CALL MPI_COMM_SIZE(id%COMM, id%NPROCS, IERR )
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I re-indented so that I could read it better:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       CALL MPI_COMM_SIZE(id%COMM, id%NPROCS, IERR )
</span><br>
<span class="quotelev1">&gt;       IF ( id%PAR .eq. 0 ) THEN
</span><br>
<span class="quotelev1">&gt;          IF ( id%MYID .eq. MASTER ) THEN
</span><br>
<span class="quotelev1">&gt;             color = MPI_UNDEFINED
</span><br>
<span class="quotelev1">&gt;          ELSE
</span><br>
<span class="quotelev1">&gt;             color = 0
</span><br>
<span class="quotelev1">&gt;          END IF
</span><br>
<span class="quotelev1">&gt;          CALL MPI_COMM_SPLIT( id%COMM, color, 0,
</span><br>
<span class="quotelev1">&gt;          &amp; id%COMM_NODES, IERR )
</span><br>
<span class="quotelev1">&gt;          id%NSLAVES = id%NPROCS - 1
</span><br>
<span class="quotelev1">&gt;       ELSE
</span><br>
<span class="quotelev1">&gt;          CALL MPI_COMM_DUP( id%COMM, id%COMM_NODES, IERR )
</span><br>
<span class="quotelev1">&gt;          id%NSLAVES = id%NPROCS
</span><br>
<span class="quotelev1">&gt;       END IF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       IF (id%PAR .ne. 0 .or. id%MYID .NE. MASTER) THEN
</span><br>
<span class="quotelev1">&gt;          CALL MPI_COMM_DUP( id%COMM_NODES, id%COMM_LOAD, IERR
</span><br>
<span class="quotelev1">&gt;       ENDIF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That doesn't look right -- both MPI_COMM_SPLIT and MPI_COMM_DUP are collective, meaning that all processes in the communicator must call them. In the first case, only some processes are calling MPI_COMM_SPLIT.  Is there some other logic that forces the rest of the processes to call MPI_COMM_SPLIT, too?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Actually, we look at the first case, that is id%par = 0. But the 
<br>
MPI_COMM_SPLIT routine is called by all the processes and creates a new 
<br>
communicator named &quot;id%COMM_NODES&quot;. This communicator contains all the 
<br>
slaves, but not the master. The first MPI_COMM_DUP is not executed, the 
<br>
second one is executed on all the slaves nodes (id%MYID .NE. MASTER ), 
<br>
because the communicator is &quot;id%COMM_NODES&quot; and so implies all the 
<br>
processes of this communicator.
<br>
So it seems correct to me but perhaps I make a mistake because the 
<br>
MPI_COMM_DUP freezes.
<br>
<p>Franc,oise
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16608.php">Salvatore Podda: "Re: [OMPI users] users Digest, Vol 1911, Issue 3"</a>
<li><strong>Previous message:</strong> <a href="16606.php">Jeff Squyres: "Re: [OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>In reply to:</strong> <a href="16584.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16632.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16632.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
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
