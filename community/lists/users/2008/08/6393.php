<?
$subject_val = "Re: [OMPI users] Checkpoint problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 04:11:36 2008" -->
<!-- isoreceived="20080820081136" -->
<!-- sent="Wed, 20 Aug 2008 10:11:29 +0200" -->
<!-- isosent="20080820081129" -->
<!-- name="Matthias Hovestadt" -->
<!-- email="maho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint problem" -->
<!-- id="48ABD1B1.20008_at_cs.tu-berlin.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3a37617f0808200016w1d422a28ne4477e34fdef8030_at_mail.gmail.com" -->
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
<strong>From:</strong> Matthias Hovestadt (<em>maho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-20 04:11:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6394.php">Ralph Castain: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="6392.php">Gabriele Fatigati: "[OMPI users] Checkpoint problem"</a>
<li><strong>In reply to:</strong> <a href="6392.php">Gabriele Fatigati: "[OMPI users] Checkpoint problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6394.php">Ralph Castain: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Reply:</strong> <a href="6394.php">Ralph Castain: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Reply:</strong> <a href="6395.php">Tim Mattox: "Re: [OMPI users] Checkpoint problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gabriele!
<br>
<p><span class="quotelev1">&gt; In this case, mpirun works well, but the checkpoint procedure fails:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint 20109
</span><br>
<span class="quotelev1">&gt; [node0316:20134] Error: Unable to get the current working directory
</span><br>
<span class="quotelev1">&gt; [node0316:20134] [[42404,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; orte-checkpoint.c at line 395
</span><br>
<span class="quotelev1">&gt; [node0316:20134] HNP with PID 20109 Not found!
</span><br>
<p>I had exactly the same problem on my machine. Neither modifying
<br>
the configure parameters nor the way of invoking the ompi-checkpoint
<br>
command did help. Since I am using the source from subversion checkout,
<br>
I also updated the source several times, following the day to day
<br>
progress. However, this problem remained.
<br>
<p>Luckily, updating the source to SVN revision 19265 finally solved
<br>
this checkpointing issue. Maybe the problem shows up again in later
<br>
versions...
<br>
<p><p>Best,
<br>
Matthias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6394.php">Ralph Castain: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="6392.php">Gabriele Fatigati: "[OMPI users] Checkpoint problem"</a>
<li><strong>In reply to:</strong> <a href="6392.php">Gabriele Fatigati: "[OMPI users] Checkpoint problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6394.php">Ralph Castain: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Reply:</strong> <a href="6394.php">Ralph Castain: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Reply:</strong> <a href="6395.php">Tim Mattox: "Re: [OMPI users] Checkpoint problem"</a>
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
