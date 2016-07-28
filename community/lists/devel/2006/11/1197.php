<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 27 20:22:22 2006" -->
<!-- isoreceived="20061128012222" -->
<!-- sent="Mon, 27 Nov 2006 17:21:59 -0800" -->
<!-- isosent="20061128012159" -->
<!-- name="Matt Leininger" -->
<!-- email="mlleinin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI alltoall memory footprint" -->
<!-- id="1164676919.6626.90.camel_at_localhost" -->
<!-- inreplyto="1164674741.6626.84.camel_at_localhost" -->
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
<strong>Date:</strong> 2006-11-27 20:21:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1198.php">George Bosilca: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Previous message:</strong> <a href="1196.php">Matt Leininger: "[OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>In reply to:</strong> <a href="1196.php">Matt Leininger: "[OMPI devel] OMPI alltoall memory footprint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1198.php">George Bosilca: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1198.php">George Bosilca: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1204.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1207.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2006-11-27 at 16:45 -0800, Matt Leininger wrote:
<br>
<span class="quotelev1">&gt; Has anyone testing OMPI's alltoall at &gt; 2000 MPI tasks?  I'm seeing each
</span><br>
<span class="quotelev1">&gt; MPI task eat up &gt; 1GB of memory (just for OMPI - not the app).  
</span><br>
<p>&nbsp;&nbsp;I gathered some more data using the alltoall benchmark in mpiBench.
<br>
mpiBench is pretty smart about how large its buffers are.  I set it to
<br>
use &lt;= 100MB.
<br>
<p>&nbsp;num nodes        num MPI tasks   system mem      mpibench buffer mem
<br>
&nbsp;&nbsp;&nbsp;128               1024          1   GB              65 MB
<br>
&nbsp;&nbsp;&nbsp;160               1280          1.2 GB              82 MB
<br>
&nbsp;&nbsp;&nbsp;192               1536          1.4 GB              98 MB
<br>
&nbsp;&nbsp;&nbsp;224               1792          1.6 GB              57 MB
<br>
&nbsp;&nbsp;&nbsp;256               2048          1.6-1.8 GB           &lt; 100 MB 
<br>
<p>The 256 node run was killed by the OOM for using too much memory.  For
<br>
all these tests the OMPI alltoall is using 1 GB or more of system
<br>
memory.  I know LANL is looking into optimized alltoall, but is anyone
<br>
looking into the scalability of the memory footprint?
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
<p>&nbsp;&nbsp;- Matt
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	- Matt
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="1198.php">George Bosilca: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Previous message:</strong> <a href="1196.php">Matt Leininger: "[OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>In reply to:</strong> <a href="1196.php">Matt Leininger: "[OMPI devel] OMPI alltoall memory footprint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1198.php">George Bosilca: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1198.php">George Bosilca: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1204.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1207.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
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
