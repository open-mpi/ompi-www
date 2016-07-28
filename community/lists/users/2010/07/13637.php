<?
$subject_val = "Re: [OMPI users] perhaps an openmpi bug, how best to identify?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 14 15:20:46 2010" -->
<!-- isoreceived="20100714192046" -->
<!-- sent="Wed, 14 Jul 2010 15:21:07 -0400" -->
<!-- isosent="20100714192107" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] perhaps an openmpi bug, how best to identify?" -->
<!-- id="0BC7E8C1-DAA4-4563-A03D-B684BF7F2B1C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C3B3166.4010705_at_ec-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] perhaps an openmpi bug, how best to identify?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-14 15:21:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13638.php">Jeff Squyres: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Previous message:</strong> <a href="13636.php">Eugene Loh: "[OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]"</a>
<li><strong>In reply to:</strong> <a href="13591.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2010, at 11:14 AM, Olivier Marsden wrote:
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; after testing as suggested, it is indeed a massive slowdown rather than
</span><br>
<span class="quotelev1">&gt; a full-blown machine hang.
</span><br>
<p>Ok.
<br>
<p><span class="quotelev1">&gt; Would the next test be to run with debug flags for openmpi ?
</span><br>
<p>You might want to run with 
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca mpi_yield_when_idle 1 ...
<br>
<p>This will tell the OMPI processing core to call sched_yield() when it's polling for progress (rather than spinning hard, polling for new messages, etc.).
<br>
<p>You also mentioned that you're running 7 MPI processes.  How many processors does your workstation have?  If you have less than 7, then that could explain what you're seeing.  If all the MPI processes are aggressively polling for progress, it could bring the machine to a crawl.
<br>
<p>That being said, Open MPI *should* auto-detect that it is oversubscribing the machine (i.e., that it's running more processes than available processors) and automatically set mpi_yield_when_idle to 1 by itself.  Perhaps the auto-detection is broken somehow...?
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
<li><strong>Next message:</strong> <a href="13638.php">Jeff Squyres: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Previous message:</strong> <a href="13636.php">Eugene Loh: "[OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]"</a>
<li><strong>In reply to:</strong> <a href="13591.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- nextthread="start" -->
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
