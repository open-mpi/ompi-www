<?
$subject_val = "Re: [OMPI users] Checkpoint problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 08:39:54 2008" -->
<!-- isoreceived="20080820123954" -->
<!-- sent="Wed, 20 Aug 2008 06:39:48 -0600" -->
<!-- isosent="20080820123948" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint problem" -->
<!-- id="34D44A4B-A071-4982-94B5-C50B092564AB_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48ABD1B1.20008_at_cs.tu-berlin.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-20 08:39:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6395.php">Tim Mattox: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="6393.php">Matthias Hovestadt: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>In reply to:</strong> <a href="6393.php">Matthias Hovestadt: "Re: [OMPI users] Checkpoint problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6395.php">Tim Mattox: "Re: [OMPI users] Checkpoint problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was a bug that caused ompi-checkpoint not to find the correct  
<br>
place in the session directory for mpirun's contact file. This was  
<br>
fixed in r19265, so you should no longer have a problem.
<br>
<p><p>On Aug 20, 2008, at 2:11 AM, Matthias Hovestadt wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gabriele!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this case, mpirun works well, but the checkpoint procedure fails:
</span><br>
<span class="quotelev2">&gt;&gt; ompi-checkpoint 20109
</span><br>
<span class="quotelev2">&gt;&gt; [node0316:20134] Error: Unable to get the current working directory
</span><br>
<span class="quotelev2">&gt;&gt; [node0316:20134] [[42404,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; orte-checkpoint.c at line 395
</span><br>
<span class="quotelev2">&gt;&gt; [node0316:20134] HNP with PID 20109 Not found!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had exactly the same problem on my machine. Neither modifying
</span><br>
<span class="quotelev1">&gt; the configure parameters nor the way of invoking the ompi-checkpoint
</span><br>
<span class="quotelev1">&gt; command did help. Since I am using the source from subversion  
</span><br>
<span class="quotelev1">&gt; checkout,
</span><br>
<span class="quotelev1">&gt; I also updated the source several times, following the day to day
</span><br>
<span class="quotelev1">&gt; progress. However, this problem remained.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Luckily, updating the source to SVN revision 19265 finally solved
</span><br>
<span class="quotelev1">&gt; this checkpointing issue. Maybe the problem shows up again in later
</span><br>
<span class="quotelev1">&gt; versions...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6395.php">Tim Mattox: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="6393.php">Matthias Hovestadt: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>In reply to:</strong> <a href="6393.php">Matthias Hovestadt: "Re: [OMPI users] Checkpoint problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6395.php">Tim Mattox: "Re: [OMPI users] Checkpoint problem"</a>
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
