<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 13:50:09 2012" -->
<!-- isoreceived="20121210185009" -->
<!-- sent="Mon, 10 Dec 2012 10:49:57 -0800" -->
<!-- isosent="20121210184957" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default" -->
<!-- id="EFC136EE-AA75-4C36-85F0-BD3DB82A779D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD316B2F69_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-10 13:49:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11845.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<li><strong>Previous message:</strong> <a href="11843.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<li><strong>In reply to:</strong> <a href="11843.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11845.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<li><strong>Reply:</strong> <a href="11845.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2012, at 10:35 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 12/10/12 11:25 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 10, 2012, at 10:15 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/8/12 7:59 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT:    Enable both OPAL and libevent thread support by default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY:      We need to support threaded operations for MPI-3, and for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Enabling thread support by default is the only way to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ensure we fix all the problems.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHEN:   COB, Thurs Dec 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This was a decision reached at the OMPI Developers meeting, so the RFC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mostly just a &quot;heads up&quot; to everyone that this will happen. We spent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time recently profiling the impact on performance and found it to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; significant: 100ns in shared memory latency, and a similar number to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TCP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message latency. However, without setting the support &quot;on&quot; by default,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will never address those problems. Thus, the group decided that we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enable support by default and being a concerted effort to reduce and/or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; remove the performance impact.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thinking about this on the way home Friday, I'm not sure we need to go
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quite that far.  I think we do want to enable MPI_THREAD_MULTIPLE by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default to cause all the locks to be &quot;on&quot; by default.  I'm not sure we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to enable progress threads at this point; the question is do we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to take a top-down approach, where we turn on the locks all the time for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everything (expensive) and pare down what actually needs locking for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; async
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl callbacks or do we leave off all the locking by default (when thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; count == 1) and only turn on always-lock locks for the code paths that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will deal with async callbacks from the BTLs.  I'm split on the issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I viewed this in a different light. The question of thread_multiple is a
</span><br>
<span class="quotelev2">&gt;&gt; separate one. From my perspective, if we say we are going to support
</span><br>
<span class="quotelev2">&gt;&gt; MPI-3's async progress, then I don't see how we avoid the OPAL thread
</span><br>
<span class="quotelev2">&gt;&gt; support being &quot;on&quot; all the time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Likewise, if the ORTE wireup methods have to support async behavior, then
</span><br>
<span class="quotelev2">&gt;&gt; we have to build the event lib with thread support.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So it seems to me that the best path forward is to turn both &quot;on&quot; by
</span><br>
<span class="quotelev2">&gt;&gt; default, then learn how to live with that situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends on what you mean by &quot;on&quot;.  Thread support is always &quot;on&quot; these
</span><br>
<span class="quotelev1">&gt; days, meaning that opal_mutex_lock does, in fact, have a mutex that
</span><br>
<span class="quotelev1">&gt; locks/unlocks.  The question is what the value of opal_using_threads() is
</span><br>
<span class="quotelev1">&gt; (i.e., is OPAL_THREAD_LOCK a lock or not?).  In some ways, it doesn't need
</span><br>
<span class="quotelev1">&gt; to be (i.e., attributes still don't require the big attribute lock in
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SINGLE).  The problem is that because we protect many of the
</span><br>
<span class="quotelev1">&gt; base data structures internally (like free lists) instead of externally,
</span><br>
<span class="quotelev1">&gt; it's hard to be thread safe for the small portions of the PML, OSC, and
</span><br>
<span class="quotelev1">&gt; runtime components that need thread safety for progress without enabling
</span><br>
<span class="quotelev1">&gt; thread safety in a whole lot of other places.
</span><br>
<p><p>Ummm.... I'm afraid that OPAL_THREAD_LOCK defines to no-op unless you configure --enable-opal-multi-threads. And since a lot of the code uses the macro instead of the direct function call, that means thread support isn't &quot;on&quot; these days in most places.
<br>
<p>I'd suggest turning it all on by default, and then let's define and cleanup the thread support overall.
<br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="11845.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<li><strong>Previous message:</strong> <a href="11843.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<li><strong>In reply to:</strong> <a href="11843.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11845.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<li><strong>Reply:</strong> <a href="11845.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
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
