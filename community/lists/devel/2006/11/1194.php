<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 27 18:54:45 2006" -->
<!-- isoreceived="20061127235445" -->
<!-- sent="Mon, 27 Nov 2006 15:54:10 -0800" -->
<!-- isosent="20061127235410" -->
<!-- name="Matt Leininger" -->
<!-- email="mlleinin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] OpenMPI and OOM handler" -->
<!-- id="1164671650.6626.74.camel_at_localhost" -->
<!-- inreplyto="BF78776E-B369-4FA6-AB6F-015FB808F568_at_lanl.gov" -->
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
<strong>From:</strong> Matt Leininger (<em>mlleinin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-27 18:54:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1195.php">Matt Leininger: "Re: [OMPI devel] [devel-core] OpenMPI and OOM handler"</a>
<li><strong>Previous message:</strong> <a href="1193.php">Adrian Knoth: "[OMPI devel] IPv6 up and working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1195.php">Matt Leininger: "Re: [OMPI devel] [devel-core] OpenMPI and OOM handler"</a>
<li><strong>Maybe reply:</strong> <a href="1195.php">Matt Leininger: "Re: [OMPI devel] [devel-core] OpenMPI and OOM handler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2006-11-27 at 16:29 -0700, Brian W Barrett wrote:
<br>
<span class="quotelev1">&gt; On Nov 27, 2006, at 4:19 PM, Matt Leininger wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  I've been running more tests of OpenMPI v1.2b.  I've run into several
</span><br>
<span class="quotelev2">&gt; &gt; cases where the app+MPI use too much memory and the OOM handler kills
</span><br>
<span class="quotelev2">&gt; &gt; off tasks.  Sometimes the ompi mpirun shuts down gracefully, but other
</span><br>
<span class="quotelev2">&gt; &gt; times the OOM handler may kill off 1 to 4 MPI tasks per node (when I'm
</span><br>
<span class="quotelev2">&gt; &gt; using 8 MPI tasks per node).  The remaining MPI tasks keep
</span><br>
<span class="quotelev2">&gt; &gt; running/polling and have to be killed off by hand.  Has anyone seen  
</span><br>
<span class="quotelev2">&gt; &gt; this
</span><br>
<span class="quotelev2">&gt; &gt; behavior before?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are the orteds also getting killed? 
</span><br>
<p>&nbsp;&nbsp;Not sure.  I'll check the next time I see this.
<br>
<p><span class="quotelev1">&gt;  It's a known problem that if the  
</span><br>
<span class="quotelev1">&gt; orted is killed by outside forces, everything kind of hangs.  We're  
</span><br>
<span class="quotelev1">&gt; working on this one, and hope to have it fixed by the time 1.2 ships.
</span><br>
<p>&nbsp;&nbsp;That could be the problem.  
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not really familiar with the OOM killer -- does it cause the  
</span><br>
<span class="quotelev1">&gt; parent of the killed process to get a SIGCHLD?  If not, that could be  
</span><br>
<span class="quotelev1">&gt; a fairly serious problem for us, as we rely on SIGCHLDs being  
</span><br>
<span class="quotelev1">&gt; received by the orteds when things die...
</span><br>
<p>&nbsp;&nbsp;Mark Grondona could answer this.  His reply to devel-core bounced so
<br>
I'm including devel_at_[hidden] on this thread.
<br>
<p>&nbsp;&nbsp;- Matt
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1195.php">Matt Leininger: "Re: [OMPI devel] [devel-core] OpenMPI and OOM handler"</a>
<li><strong>Previous message:</strong> <a href="1193.php">Adrian Knoth: "[OMPI devel] IPv6 up and working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1195.php">Matt Leininger: "Re: [OMPI devel] [devel-core] OpenMPI and OOM handler"</a>
<li><strong>Maybe reply:</strong> <a href="1195.php">Matt Leininger: "Re: [OMPI devel] [devel-core] OpenMPI and OOM handler"</a>
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
