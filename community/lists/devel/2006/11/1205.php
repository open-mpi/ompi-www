<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 28 12:29:11 2006" -->
<!-- isoreceived="20061128172911" -->
<!-- sent="Tue, 28 Nov 2006 09:28:38 -0800" -->
<!-- isosent="20061128172838" -->
<!-- name="Matt Leininger" -->
<!-- email="mlleinin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI alltoall memory footprint" -->
<!-- id="1164734918.24378.6.camel_at_localhost" -->
<!-- inreplyto="1164733257.2407.83.camel_at_exponential.lanl.gov" -->
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
<strong>Date:</strong> 2006-11-28 12:28:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1206.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Previous message:</strong> <a href="1204.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>In reply to:</strong> <a href="1204.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1206.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1206.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2006-11-28 at 10:00 -0700, Li-Ta Lo wrote:
<br>
<span class="quotelev1">&gt; On Mon, 2006-11-27 at 17:21 -0800, Matt Leininger wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 2006-11-27 at 16:45 -0800, Matt Leininger wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Has anyone testing OMPI's alltoall at &gt; 2000 MPI tasks?  I'm seeing each
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI task eat up &gt; 1GB of memory (just for OMPI - not the app).  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   I gathered some more data using the alltoall benchmark in mpiBench.
</span><br>
<span class="quotelev2">&gt; &gt; mpiBench is pretty smart about how large its buffers are.  I set it to
</span><br>
<span class="quotelev2">&gt; &gt; use &lt;= 100MB.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  num nodes        num MPI tasks   system mem      mpibench buffer mem
</span><br>
<span class="quotelev2">&gt; &gt;    128               1024          1   GB              65 MB
</span><br>
<span class="quotelev2">&gt; &gt;    160               1280          1.2 GB              82 MB
</span><br>
<span class="quotelev2">&gt; &gt;    192               1536          1.4 GB              98 MB
</span><br>
<span class="quotelev2">&gt; &gt;    224               1792          1.6 GB              57 MB
</span><br>
<span class="quotelev2">&gt; &gt;    256               2048          1.6-1.8 GB           &lt; 100 MB 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The 256 node run was killed by the OOM for using too much memory.  For
</span><br>
<span class="quotelev2">&gt; &gt; all these tests the OMPI alltoall is using 1 GB or more of system
</span><br>
<span class="quotelev2">&gt; &gt; memory.  I know LANL is looking into optimized alltoall, but is anyone
</span><br>
<span class="quotelev2">&gt; &gt; looking into the scalability of the memory footprint?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am the one who is looking into those collective communications. Which
</span><br>
<span class="quotelev1">&gt; mca/coll are you using for alltoall? 
</span><br>
<p>&nbsp;&nbsp;&nbsp;The ompi_info output had some mca/coll information in it.   I'm not
<br>
sure which mca/coll parameter you are interested in.
<br>
<p><span class="quotelev1">&gt; Does the OOM killer kick in when
</span><br>
<span class="quotelev1">&gt; calling other collective routines? 
</span><br>
<p>&nbsp;&nbsp;I've tested Bcast, Barrier, Allreduce, Gather, Scatter, Reduce,
<br>
Allgather, and Alltoall.  So far only the Alltoall has this problem.
<br>
<p>&nbsp;&nbsp;- Matt
<br>
<p><span class="quotelev1">&gt; If it is a problem caused by SM 
</span><br>
<span class="quotelev1">&gt; files, all collectives should be affected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ollie
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1206.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Previous message:</strong> <a href="1204.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>In reply to:</strong> <a href="1204.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1206.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1206.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
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
