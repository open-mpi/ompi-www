<?
$subject_val = "Re: [OMPI users] launching the mpi runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 18:23:37 2010" -->
<!-- isoreceived="20101122232337" -->
<!-- sent="Mon, 22 Nov 2010 18:23:23 -0500" -->
<!-- isosent="20101122232323" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] launching the mpi runtime" -->
<!-- id="64B80AB6-66DF-49A9-A179-8C129E76D0F1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="003501cb8a65$b4af2be0$1e0d83a0$_at_org" -->
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
<strong>Subject:</strong> Re: [OMPI users] launching the mpi runtime<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 18:23:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14870.php">Jeff Squyres: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<li><strong>Previous message:</strong> <a href="14868.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>In reply to:</strong> <a href="14866.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14875.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 22, 2010, at 11:52 AM, Hicham Mouline wrote:
<br>
<p><span class="quotelev1">&gt; i have now a application with a gui. The gui launches the calculations
</span><br>
<span class="quotelev1">&gt; in-process serially.
</span><br>
<span class="quotelev1">&gt; No MPI involved. Fine. The objective is to parallelize.
</span><br>
<p>Gotcha.
<br>
<p><span class="quotelev1">&gt; I want to keep the GUI(windows) as the control to start calcs and display
</span><br>
<span class="quotelev1">&gt; results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The GUI could be the master process of the mpi processes.
</span><br>
<span class="quotelev1">&gt; That's bad because the executable image has deps on the GUI library and
</span><br>
<span class="quotelev1">&gt; there's no need for all the mpi processes (the same executable) to have
</span><br>
<span class="quotelev1">&gt; anything to do with the display.
</span><br>
<p>Sounds reasonable.  You likely want to have (at least) 2 executables, then: the GUI and the compute worker.
<br>
<p><span class="quotelev1">&gt; besides, i have a win box and a couple of linux boxes, and openmpi cannot
</span><br>
<span class="quotelev1">&gt; mix both in the same group of mpi processes.
</span><br>
<p>Sadly true.  There has been (very) little demand for this, so we haven't spent much (any) time on making it work.
<br>
<p><span class="quotelev1">&gt; therefore, I guess I need to separate the GUI binary from the mpi-processes
</span><br>
<span class="quotelev1">&gt; binary and have the GUI process talk to the &quot;master&quot; mpi process (on linux)
</span><br>
<span class="quotelev1">&gt; for calc requests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was hoping I wouldn't have to write a custom code to do that.
</span><br>
<p>MPI doesn't necessarily mean SPMD -- you can certainly have the GUI call MPI_INIT and then call MPI_COMM_SPAWN to launch a different executable to do the compute working stuff.
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
<li><strong>Next message:</strong> <a href="14870.php">Jeff Squyres: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<li><strong>Previous message:</strong> <a href="14868.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>In reply to:</strong> <a href="14866.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14875.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
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
