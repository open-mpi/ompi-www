<?
$subject_val = "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 19:35:52 2011" -->
<!-- isoreceived="20110525233552" -->
<!-- sent="Wed, 25 May 2011 19:35:46 -0400" -->
<!-- isosent="20110525233546" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1" -->
<!-- id="81BB28EC-D180-4884-BD3C-7FC78A2E5C8A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DDB6F88.5060004_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-25 19:35:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16633.php">Jeff Squyres: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>Previous message:</strong> <a href="16631.php">Jeff Squyres: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>In reply to:</strong> <a href="16607.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16638.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16638.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2011, at 4:42 AM, francoise.roch_at_[hidden] wrote:
<br>
<p><span class="quotelev2">&gt;&gt;      CALL MPI_COMM_SIZE(id%COMM, id%NPROCS, IERR )
</span><br>
<span class="quotelev2">&gt;&gt;      IF ( id%PAR .eq. 0 ) THEN
</span><br>
<span class="quotelev2">&gt;&gt;         IF ( id%MYID .eq. MASTER ) THEN
</span><br>
<span class="quotelev2">&gt;&gt;            color = MPI_UNDEFINED
</span><br>
<span class="quotelev2">&gt;&gt;         ELSE
</span><br>
<span class="quotelev2">&gt;&gt;            color = 0
</span><br>
<span class="quotelev2">&gt;&gt;         END IF
</span><br>
<span class="quotelev2">&gt;&gt;         CALL MPI_COMM_SPLIT( id%COMM, color, 0, id%COMM_NODES, IERR )
</span><br>
<span class="quotelev2">&gt;&gt;         id%NSLAVES = id%NPROCS - 1
</span><br>
<span class="quotelev2">&gt;&gt;      ELSE
</span><br>
<span class="quotelev2">&gt;&gt;         CALL MPI_COMM_DUP( id%COMM, id%COMM_NODES, IERR )
</span><br>
<span class="quotelev2">&gt;&gt;         id%NSLAVES = id%NPROCS
</span><br>
<span class="quotelev2">&gt;&gt;      END IF
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      IF (id%PAR .ne. 0 .or. id%MYID .NE. MASTER) THEN
</span><br>
<span class="quotelev2">&gt;&gt;         CALL MPI_COMM_DUP( id%COMM_NODES, id%COMM_LOAD, IERR
</span><br>
<span class="quotelev2">&gt;&gt;      ENDIF
</span><br>
<span class="quotelev1">&gt; Actually, we look at the first case, that is id%par = 0. But the MPI_COMM_SPLIT routine is called by all the processes and creates a new communicator named &quot;id%COMM_NODES&quot;. This communicator contains all the slaves, but not the master. The first MPI_COMM_DUP is not executed, the second one is executed on all the slaves nodes (id%MYID .NE. MASTER ), because the communicator is &quot;id%COMM_NODES&quot; and so implies all the processes of this communicator.
</span><br>
<p>Hmm.
<br>
<p>Are you sure that id%myid is relative to id%comm?  I don't see its assignment in your code snipit.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16633.php">Jeff Squyres: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>Previous message:</strong> <a href="16631.php">Jeff Squyres: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>In reply to:</strong> <a href="16607.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16638.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16638.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
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
