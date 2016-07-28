<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 13:25:54 2012" -->
<!-- isoreceived="20121210182554" -->
<!-- sent="Mon, 10 Dec 2012 10:25:47 -0800" -->
<!-- isosent="20121210182547" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default" -->
<!-- id="ACE9F682-B059-4801-9230-A3046B4B3E4A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD316B2E9A_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-10 13:25:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11843.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<li><strong>Previous message:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<li><strong>In reply to:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11843.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<li><strong>Reply:</strong> <a href="11843.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2012, at 10:15 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 12/8/12 7:59 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:    Enable both OPAL and libevent thread support by default
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY:      We need to support threaded operations for MPI-3, and for
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev2">&gt;&gt;                Enabling thread support by default is the only way to
</span><br>
<span class="quotelev2">&gt;&gt; ensure we fix all the problems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN:   COB, Thurs Dec 13
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This was a decision reached at the OMPI Developers meeting, so the RFC is
</span><br>
<span class="quotelev2">&gt;&gt; mostly just a &quot;heads up&quot; to everyone that this will happen. We spent some
</span><br>
<span class="quotelev2">&gt;&gt; time recently profiling the impact on performance and found it to be
</span><br>
<span class="quotelev2">&gt;&gt; significant: 100ns in shared memory latency, and a similar number to TCP
</span><br>
<span class="quotelev2">&gt;&gt; message latency. However, without setting the support &quot;on&quot; by default, we
</span><br>
<span class="quotelev2">&gt;&gt; will never address those problems. Thus, the group decided that we would
</span><br>
<span class="quotelev2">&gt;&gt; enable support by default and being a concerted effort to reduce and/or
</span><br>
<span class="quotelev2">&gt;&gt; remove the performance impact.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thinking about this on the way home Friday, I'm not sure we need to go
</span><br>
<span class="quotelev1">&gt; quite that far.  I think we do want to enable MPI_THREAD_MULTIPLE by
</span><br>
<span class="quotelev1">&gt; default to cause all the locks to be &quot;on&quot; by default.  I'm not sure we
</span><br>
<span class="quotelev1">&gt; need to enable progress threads at this point; the question is do we want
</span><br>
<span class="quotelev1">&gt; to take a top-down approach, where we turn on the locks all the time for
</span><br>
<span class="quotelev1">&gt; everything (expensive) and pare down what actually needs locking for async
</span><br>
<span class="quotelev1">&gt; btl callbacks or do we leave off all the locking by default (when thread
</span><br>
<span class="quotelev1">&gt; count == 1) and only turn on always-lock locks for the code paths that
</span><br>
<span class="quotelev1">&gt; will deal with async callbacks from the BTLs.  I'm split on the issue.
</span><br>
<p>I viewed this in a different light. The question of thread_multiple is a separate one. From my perspective, if we say we are going to support MPI-3's async progress, then I don't see how we avoid the OPAL thread support being &quot;on&quot; all the time.
<br>
<p>Likewise, if the ORTE wireup methods have to support async behavior, then we have to build the event lib with thread support.
<br>
<p>So it seems to me that the best path forward is to turn both &quot;on&quot; by default, then learn how to live with that situation.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11843.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<li><strong>Previous message:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<li><strong>In reply to:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11843.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<li><strong>Reply:</strong> <a href="11843.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
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
