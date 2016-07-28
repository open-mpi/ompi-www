<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 22 12:40:04 2007" -->
<!-- isoreceived="20070122174004" -->
<!-- sent="Mon, 22 Jan 2007 10:39:55 -0700" -->
<!-- isosent="20070122173955" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.2b3 fails on bluesteel" -->
<!-- id="5F90E99E-1949-4547-84C9-CAAFECC8F6DA_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1DA38F0.716D%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-22 12:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1266.php">Brian W. Barrett: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1264.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>In reply to:</strong> <a href="1263.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1266.php">Brian W. Barrett: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Reply:</strong> <a href="1266.php">Brian W. Barrett: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 22, 2007, at 9:48 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/22/07 9:39 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried adding '-mca btl ^sm -mca mpi_preconnect_all 1' to the mpirun
</span><br>
<span class="quotelev2">&gt;&gt; command line but it still fails with identical error messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand the issue with allocating nodes under bproc. Older
</span><br>
<span class="quotelev2">&gt;&gt; versions of OMPI have always just queried bproc for the nodes that
</span><br>
<span class="quotelev2">&gt;&gt; have permissions set so I can execute on them. I've never had to
</span><br>
<span class="quotelev2">&gt;&gt; allocate any nodes using a hostfile or any other mechanism. Are you
</span><br>
<span class="quotelev2">&gt;&gt; saying that this no longer works?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Turned out that mode of operation was a &quot;bug&quot; that caused all kinds of
</span><br>
<span class="quotelev1">&gt; problems in production environments - that's been fixed for quite  
</span><br>
<span class="quotelev1">&gt; some time.
</span><br>
<span class="quotelev1">&gt; So, yes - you do have to get an official &quot;allocation&quot; of some kind.  
</span><br>
<span class="quotelev1">&gt; Even the
</span><br>
<span class="quotelev1">&gt; changes I mentioned wouldn't remove that requirement in the way you
</span><br>
<span class="quotelev1">&gt; describe.
</span><br>
<p>BTW, there's no requirement for a bproc system to employ a job  
<br>
scheduler. So in my view OMPI is &quot;broken&quot; for bproc systems if it  
<br>
imposes such a requirement.
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1266.php">Brian W. Barrett: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1264.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>In reply to:</strong> <a href="1263.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1266.php">Brian W. Barrett: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Reply:</strong> <a href="1266.php">Brian W. Barrett: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
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
