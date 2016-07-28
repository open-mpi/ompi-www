<?
$subject_val = "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 06:12:41 2011" -->
<!-- isoreceived="20110526101241" -->
<!-- sent="Thu, 26 May 2011 06:12:34 -0400" -->
<!-- isosent="20110526101234" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1" -->
<!-- id="C2FE15CB-5706-4CF9-BD52-8210239D56E3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DDE12C2.7000200_at_obs.ujf-grenoble.fr" -->
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
<strong>Date:</strong> 2011-05-26 06:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16640.php">Jeff Squyres: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16638.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="16638.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16663.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16663.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 26, 2011, at 4:43 AM, francoise.roch_at_[hidden] wrote:
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt;     CALL MPI_COMM_SIZE(id%COMM, id%NPROCS, IERR )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     IF ( id%PAR .eq. 0 ) THEN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        IF ( id%MYID .eq. MASTER ) THEN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           color = MPI_UNDEFINED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        ELSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           color = 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        END IF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        CALL MPI_COMM_SPLIT( id%COMM, color, 0, id%COMM_NODES, IERR )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        id%NSLAVES = id%NPROCS - 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ELSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        CALL MPI_COMM_DUP( id%COMM, id%COMM_NODES, IERR )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        id%NSLAVES = id%NPROCS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     END IF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     IF (id%PAR .ne. 0 .or. id%MYID .NE. MASTER) THEN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        CALL MPI_COMM_DUP( id%COMM_NODES, id%COMM_LOAD, IERR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ENDIF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, id%myid is relative to id%comm. It is assigned, just before in the code, by all the processes, by the following call :
</span><br>
<span class="quotelev1">&gt; CALL MPI_COMM_RANK(id%COMM, id%MYID, IERR)
</span><br>
<p>I'm out of ideas.  :-(
<br>
<p>Can you create a short reproducer code?
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
<li><strong>Next message:</strong> <a href="16640.php">Jeff Squyres: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16638.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="16638.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16663.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16663.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
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
