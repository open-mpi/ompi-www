<?
$subject_val = "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 22:04:52 2011" -->
<!-- isoreceived="20110520020452" -->
<!-- sent="Thu, 19 May 2011 22:04:46 -0400" -->
<!-- isosent="20110520020446" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1" -->
<!-- id="0DCF20B8-CA5C-4746-8187-A2DFF39B15DD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DCD248F.8050605_at_obs.ujf-grenoble.fr" -->
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
<strong>Date:</strong> 2011-05-19 22:04:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16585.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="16583.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>In reply to:</strong> <a href="16536.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16607.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16607.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 13, 2011, at 8:31 AM, francoise.roch_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Here is the MUMPS portion of code (in zmumps_part1.F file) where the slaves call MPI_COMM_DUP , id%PAR and MASTER are initialized to 0 before :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL MPI_COMM_SIZE(id%COMM, id%NPROCS, IERR )
</span><br>
<p>I re-indented so that I could read it better:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_SIZE(id%COMM, id%NPROCS, IERR )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF ( id%PAR .eq. 0 ) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF ( id%MYID .eq. MASTER ) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color = MPI_UNDEFINED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ELSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_SPLIT( id%COMM, color, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp; id%COMM_NODES, IERR )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;id%NSLAVES = id%NPROCS - 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ELSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_DUP( id%COMM, id%COMM_NODES, IERR )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;id%NSLAVES = id%NPROCS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (id%PAR .ne. 0 .or. id%MYID .NE. MASTER) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_DUP( id%COMM_NODES, id%COMM_LOAD, IERR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENDIF
<br>
<p>That doesn't look right -- both MPI_COMM_SPLIT and MPI_COMM_DUP are collective, meaning that all processes in the communicator must call them. In the first case, only some processes are calling MPI_COMM_SPLIT.  Is there some other logic that forces the rest of the processes to call MPI_COMM_SPLIT, too?
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
<li><strong>Next message:</strong> <a href="16585.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="16583.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>In reply to:</strong> <a href="16536.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16607.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16607.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
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
