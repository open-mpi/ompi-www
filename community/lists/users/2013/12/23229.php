<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 16:25:25 2013" -->
<!-- isoreceived="20131218212525" -->
<!-- sent="Wed, 18 Dec 2013 22:25:22 +0100" -->
<!-- isosent="20131218212522" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="1387401922.23652.10.camel_at_skalman.ydc.se" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="48574BAB-545A-421E-AAB2-1C708AB3C2C3_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] slowdown with infiniband and latest CentOS kernel<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 16:25:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23230.php">Martin Siegert: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23228.php">Yeni Lora: "[OMPI users] Problem with memory in mpi program"</a>
<li><strong>In reply to:</strong> <a href="23227.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23250.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2013-12-18 at 11:47 -0500, Noam Bernstein wrote: 
<br>
<span class="quotelev1">&gt; Yes - I never characterized it fully, but we attached with gdb to every
</span><br>
<span class="quotelev1">&gt; single vasp running process, and all were stuck in the same
</span><br>
<span class="quotelev1">&gt; call to MPI_allreduce() every time. It's only happening on a rather large 
</span><br>
<span class="quotelev1">&gt; jobs, so it's not the easiest setup to debug.  
</span><br>
<p>That sounds like one of the bugs i found i VASP.
<br>
Could you send me the input data that triggers this (with info on how it
<br>
was run, i.e. #mpi-tasks etc) and i can check if our heavily fixed
<br>
version hits it.
<br>
<p>/&#195;&#133;ke S.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23230.php">Martin Siegert: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23228.php">Yeni Lora: "[OMPI users] Problem with memory in mpi program"</a>
<li><strong>In reply to:</strong> <a href="23227.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23250.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
