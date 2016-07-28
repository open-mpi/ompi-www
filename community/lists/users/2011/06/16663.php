<?
$subject_val = "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 07:32:19 2011" -->
<!-- isoreceived="20110602113219" -->
<!-- sent="Thu, 2 Jun 2011 07:32:04 -0400" -->
<!-- isosent="20110602113204" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1" -->
<!-- id="C4A3E021-C21B-4B0E-B4B4-6FC4D8FB1701_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DE5016A.10900_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-02 07:32:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16664.php">Timothy Stitt: "[OMPI users] MPI_ALLREDUCE: Segmentation Fault"</a>
<li><strong>Previous message:</strong> <a href="16662.php">Jeff Squyres: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="../../2011/05/16655.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16689.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16689.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 31, 2011, at 10:55 AM, francoise.roch_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I reproduced the problem with the following code :
</span><br>
<p>I'm not sure I can reconcile this statement with your later statements...?
<br>
<p><span class="quotelev1">&gt; I execute the program on 2 nodes of 12 cores each (a total of 24 processes), it doesn't stop.
</span><br>
<p>Your first statement seems to imply that you got the sample program to hang, but this statement says that it worked fine.  
<br>
<p>I am able to run this sample program fine, too.  :-\
<br>
<p><span class="quotelev1">&gt; Adding the 2 lines above in the code, just before the MPI_COMM_DUP call, I remark that several process have the same rank for COMM_NODES communicator .
</span><br>
<span class="quotelev1">&gt; CALL MPI_COMM_RANK(COMM_NODES, MYID2, IERR)
</span><br>
<span class="quotelev1">&gt; WRITE(*,*) 'before DUP call myid is ', MYID, 'myid2 is ', MYID2
</span><br>
<p>That definitely should not be.  Can you show the output for this?
<br>
<p>I put those lines in an I see unique rank values for all processes.
<br>
<p>Are you using the wrong mpif.h, perchance?
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
<li><strong>Next message:</strong> <a href="16664.php">Timothy Stitt: "[OMPI users] MPI_ALLREDUCE: Segmentation Fault"</a>
<li><strong>Previous message:</strong> <a href="16662.php">Jeff Squyres: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="../../2011/05/16655.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16689.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16689.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
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
