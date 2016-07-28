<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 11:05:33 2007" -->
<!-- isoreceived="20070828150533" -->
<!-- sent="Tue, 28 Aug 2007 09:05:20 -0600" -->
<!-- isosent="20070828150520" -->
<!-- name="Li-Ta Lo" -->
<!-- email="ollie_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?" -->
<!-- id="1188313520.7923.55.camel_at_exponential.lanl.gov" -->
<!-- inreplyto="46D321AF.7010400_at_sun.com" -->
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
<strong>Date:</strong> 2007-08-28 11:05:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2244.php">Brian Barrett: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2242.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2233.php">Rolf vandeVaart: "[OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2244.php">Brian Barrett: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2244.php">Brian Barrett: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2007-08-27 at 15:10 -0400, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; We are running into a problem when running on one of our larger SMPs
</span><br>
<span class="quotelev1">&gt; using the latest Open MPI v1.2 branch.  We are trying to run a job
</span><br>
<span class="quotelev1">&gt; with np=128 within a single node.  We are seeing the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;SM failed to send message due to shortage of shared memory.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We then increased the allowable maximum size of the shared segment to
</span><br>
<span class="quotelev1">&gt; 2Gigabytes-1 which is the maximum allowed on 32-bit application.  We
</span><br>
<span class="quotelev1">&gt; used the mca parameter to increase it as shown here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca mpool_sm_max_size 2147483647
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This allowed the program to run to completion.  Therefore, we would
</span><br>
<span class="quotelev1">&gt; like to increase the default maximum from 512Mbytes to 2G-1 Gigabytes.
</span><br>
<span class="quotelev1">&gt; Does anyone have an objection to this change?  Soon we are going to
</span><br>
<span class="quotelev1">&gt; have larger CPU counts and would like to increase the odds that things
</span><br>
<span class="quotelev1">&gt; work &quot;out of the box&quot; on these large SMPs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>There is a serious problem with the 1.2 branch, it does not allocate
<br>
any SM area for each process at the beginning. SM areas are allocated
<br>
on demand and if some of the processes are more aggressive than the
<br>
others, it will cause starvation. This problem is fixed in the trunk
<br>
by assign at least one SM area for each process. I think this is what
<br>
you saw (starvation) and an increase of max size may not be necessary.
<br>
<p>Ollie
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2244.php">Brian Barrett: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2242.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2233.php">Rolf vandeVaart: "[OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2244.php">Brian Barrett: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2244.php">Brian Barrett: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
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
