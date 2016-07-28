<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 27 21:11:49 2006" -->
<!-- isoreceived="20061128021149" -->
<!-- sent="Mon, 27 Nov 2006 21:11:41 -0500" -->
<!-- isosent="20061128021141" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI alltoall memory footprint" -->
<!-- id="CAFA27C5-B761-45DB-8E65-A212834CB2B2_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-27 21:11:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1199.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Previous message:</strong> <a href="1197.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>In reply to:</strong> <a href="1197.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1199.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1199.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1200.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which version of Open MPI are you using ? We can figure out what's  
<br>
wrong if we have the output of &quot;ompi_info&quot; and &quot;ompi_info --param all  
<br>
all&quot;.
<br>
<p>I wonder if some of the memory is not related to the size of the  
<br>
shared memory file. The default way to compute the size of the shared  
<br>
memory file is defined by the MCA parameter mpool_sm_per_peer_size.  
<br>
By default is set to 128MB for each local peer. Therefore using 2048  
<br>
procs on 256 nodes lead to using 8 procs by node i.e. at least 1GB  
<br>
only for the SM file. The problem right now with the SM file is that  
<br>
we're not reusing the buffers multiple times, instead we're using a  
<br>
new fragment each time we send a message, forcing the OS to map the  
<br>
entire file at one point.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 27, 2006, at 8:21 PM, Matt Leininger wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 2006-11-27 at 16:45 -0800, Matt Leininger wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone testing OMPI's alltoall at &gt; 2000 MPI tasks?  I'm  
</span><br>
<span class="quotelev2">&gt;&gt; seeing each
</span><br>
<span class="quotelev2">&gt;&gt; MPI task eat up &gt; 1GB of memory (just for OMPI - not the app).
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
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	- Matt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1199.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Previous message:</strong> <a href="1197.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>In reply to:</strong> <a href="1197.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1199.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1199.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Reply:</strong> <a href="1200.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
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
