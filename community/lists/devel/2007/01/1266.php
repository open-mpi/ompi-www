<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 22 13:03:23 2007" -->
<!-- isoreceived="20070122180323" -->
<!-- sent="Mon, 22 Jan 2007 11:03:15 -0700" -->
<!-- isosent="20070122180315" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.2b3 fails on bluesteel" -->
<!-- id="533F7413-6683-495D-A501-F4BEE8CADE93_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5F90E99E-1949-4547-84C9-CAAFECC8F6DA_at_lanl.gov" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-22 13:03:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1267.php">Brian W. Barrett: "[OMPI devel] Libtool update for v1.2"</a>
<li><strong>Previous message:</strong> <a href="1265.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>In reply to:</strong> <a href="1265.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 22, 2007, at 10:39 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 22, 2007, at 9:48 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 1/22/07 9:39 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried adding '-mca btl ^sm -mca mpi_preconnect_all 1' to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command line but it still fails with identical error messages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't understand the issue with allocating nodes under bproc.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Older
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions of OMPI have always just queried bproc for the nodes that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have permissions set so I can execute on them. I've never had to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocate any nodes using a hostfile or any other mechanism. Are you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saying that this no longer works?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Turned out that mode of operation was a &quot;bug&quot; that caused all  
</span><br>
<span class="quotelev2">&gt;&gt; kinds of
</span><br>
<span class="quotelev2">&gt;&gt; problems in production environments - that's been fixed for quite
</span><br>
<span class="quotelev2">&gt;&gt; some time.
</span><br>
<span class="quotelev2">&gt;&gt; So, yes - you do have to get an official &quot;allocation&quot; of some kind.
</span><br>
<span class="quotelev2">&gt;&gt; Even the
</span><br>
<span class="quotelev2">&gt;&gt; changes I mentioned wouldn't remove that requirement in the way you
</span><br>
<span class="quotelev2">&gt;&gt; describe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, there's no requirement for a bproc system to employ a job
</span><br>
<span class="quotelev1">&gt; scheduler. So in my view OMPI is &quot;broken&quot; for bproc systems if it
</span><br>
<span class="quotelev1">&gt; imposes such a requirement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I agree that the present assumption that BProc requires LSF be in use  
<br>
is broken and we have a fix for that shortly.  However, we still will  
<br>
require a resource allocator of some sort (even a hostfile should  
<br>
work) to tell us which nodes to run on.  It should be possible to  
<br>
write a resource allocator that just grabs nodes out of the available  
<br>
pool returned by the bproc status functions should be possible, but I  
<br>
don't believe that's on the to-do list in the near future...
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1267.php">Brian W. Barrett: "[OMPI devel] Libtool update for v1.2"</a>
<li><strong>Previous message:</strong> <a href="1265.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>In reply to:</strong> <a href="1265.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
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
