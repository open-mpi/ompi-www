<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 28 12:01:02 2006" -->
<!-- isoreceived="20061128170102" -->
<!-- sent="Tue, 28 Nov 2006 10:00:57 -0700" -->
<!-- isosent="20061128170057" -->
<!-- name="Li-Ta Lo" -->
<!-- email="ollie_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI alltoall memory footprint" -->
<!-- id="1164733257.2407.83.camel_at_exponential.lanl.gov" -->
<!-- inreplyto="1164676919.6626.90.camel_at_localhost" -->
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
<strong>From:</strong> Li-Ta Lo (<em>ollie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-28 12:00:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1205.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Previous message:</strong> <a href="1203.php">Anglade Pierre-Matthieu: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>In reply to:</strong> <a href="1197.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1205.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1205.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2006-11-27 at 17:21 -0800, Matt Leininger wrote:
<br>
<span class="quotelev1">&gt; On Mon, 2006-11-27 at 16:45 -0800, Matt Leininger wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Has anyone testing OMPI's alltoall at &gt; 2000 MPI tasks?  I'm seeing each
</span><br>
<span class="quotelev2">&gt; &gt; MPI task eat up &gt; 1GB of memory (just for OMPI - not the app).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I gathered some more data using the alltoall benchmark in mpiBench.
</span><br>
<span class="quotelev1">&gt; mpiBench is pretty smart about how large its buffers are.  I set it to
</span><br>
<span class="quotelev1">&gt; use &lt;= 100MB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  num nodes        num MPI tasks   system mem      mpibench buffer mem
</span><br>
<span class="quotelev1">&gt;    128               1024          1   GB              65 MB
</span><br>
<span class="quotelev1">&gt;    160               1280          1.2 GB              82 MB
</span><br>
<span class="quotelev1">&gt;    192               1536          1.4 GB              98 MB
</span><br>
<span class="quotelev1">&gt;    224               1792          1.6 GB              57 MB
</span><br>
<span class="quotelev1">&gt;    256               2048          1.6-1.8 GB           &lt; 100 MB 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 256 node run was killed by the OOM for using too much memory.  For
</span><br>
<span class="quotelev1">&gt; all these tests the OMPI alltoall is using 1 GB or more of system
</span><br>
<span class="quotelev1">&gt; memory.  I know LANL is looking into optimized alltoall, but is anyone
</span><br>
<span class="quotelev1">&gt; looking into the scalability of the memory footprint?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I am the one who is looking into those collective communications. Which
<br>
mca/coll are you using for alltoall? Does the OOM killer kick in when
<br>
calling other collective routines? If it is a problem caused by SM 
<br>
files, all collectives should be affected.
<br>
<p>Ollie
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1205.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Previous message:</strong> <a href="1203.php">Anglade Pierre-Matthieu: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>In reply to:</strong> <a href="1197.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1205.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1205.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
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
