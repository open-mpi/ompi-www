<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 12:13:13 2007" -->
<!-- isoreceived="20070828161313" -->
<!-- sent="Tue, 28 Aug 2007 10:12:08 -0600" -->
<!-- isosent="20070828161208" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?" -->
<!-- id="E45DB24E-E742-4DB1-96A3-3D4B589F7A99_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1188313520.7923.55.camel_at_exponential.lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-28 12:12:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2245.php">Greg Watson: "Re: [OMPI devel] thread model"</a>
<li><strong>Previous message:</strong> <a href="2243.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2243.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2246.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2246.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 28, 2007, at 9:05 AM, Li-Ta Lo wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 2007-08-27 at 15:10 -0400, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We are running into a problem when running on one of our larger SMPs
</span><br>
<span class="quotelev2">&gt;&gt; using the latest Open MPI v1.2 branch.  We are trying to run a job
</span><br>
<span class="quotelev2">&gt;&gt; with np=128 within a single node.  We are seeing the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;SM failed to send message due to shortage of shared memory.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We then increased the allowable maximum size of the shared segment to
</span><br>
<span class="quotelev2">&gt;&gt; 2Gigabytes-1 which is the maximum allowed on 32-bit application.  We
</span><br>
<span class="quotelev2">&gt;&gt; used the mca parameter to increase it as shown here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca mpool_sm_max_size 2147483647
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This allowed the program to run to completion.  Therefore, we would
</span><br>
<span class="quotelev2">&gt;&gt; like to increase the default maximum from 512Mbytes to 2G-1  
</span><br>
<span class="quotelev2">&gt;&gt; Gigabytes.
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have an objection to this change?  Soon we are going to
</span><br>
<span class="quotelev2">&gt;&gt; have larger CPU counts and would like to increase the odds that  
</span><br>
<span class="quotelev2">&gt;&gt; things
</span><br>
<span class="quotelev2">&gt;&gt; work &quot;out of the box&quot; on these large SMPs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a serious problem with the 1.2 branch, it does not allocate
</span><br>
<span class="quotelev1">&gt; any SM area for each process at the beginning. SM areas are allocated
</span><br>
<span class="quotelev1">&gt; on demand and if some of the processes are more aggressive than the
</span><br>
<span class="quotelev1">&gt; others, it will cause starvation. This problem is fixed in the trunk
</span><br>
<span class="quotelev1">&gt; by assign at least one SM area for each process. I think this is what
</span><br>
<span class="quotelev1">&gt; you saw (starvation) and an increase of max size may not be necessary.
</span><br>
<p>Although I'm pretty sure this is fixed in the v1.2 branch already.
<br>
<p>I don't think we should raise that ceiling at this point.  We create  
<br>
the file in /tmp, and if someone does -np 32 on a single, small node  
<br>
(not unheard of), it'll do really evil things.
<br>
<p>Personally, I don't think we need nearly as much shared memory as  
<br>
we're using.  It's a bad design in terms of its unbounded memory  
<br>
usage.  We should fix that, rather than making the file bigger.  But  
<br>
I'm not going to fix it, so take my opinion with a grain of salt.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2245.php">Greg Watson: "Re: [OMPI devel] thread model"</a>
<li><strong>Previous message:</strong> <a href="2243.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2243.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2246.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2246.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
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
