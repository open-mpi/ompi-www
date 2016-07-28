<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 17:13:31 2012" -->
<!-- isoreceived="20121210221331" -->
<!-- sent="Mon, 10 Dec 2012 22:13:00 +0000" -->
<!-- isosent="20121210221300" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD316B5D9E_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EFC136EE-AA75-4C36-85F0-BD3DB82A779D_at_open-mpi.org" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-10 17:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11846.php">Jeff Squyres: "[OMPI devel] SVN tags/branch question"</a>
<li><strong>Previous message:</strong> <a href="11844.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<li><strong>In reply to:</strong> <a href="11844.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry about the reply on top; outlook sucks.
<br>
<p>Anyway, you're right that we should enable MULTI_THREADS by default.  I was saying that while we discussed flipping other switches that would result in those locks actually being used, I don't think we should do that at this time.  Long term, the more I think about it, the more we're going to have to move locks out of OPAL to get any real performance (ie, upper layer users are going to have to provide the right protection around their free lists).  But not today.
<br>
<p>Brain
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
________________________________________
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
Sent: Monday, December 10, 2012 11:49 AM
To: Open MPI Developers
Subject: Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default
On Dec 10, 2012, at 10:35 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
&gt; On 12/10/12 11:25 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
&gt;
&gt;&gt;
&gt;&gt; On Dec 10, 2012, at 10:15 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt;
&gt;&gt; wrote:
&gt;&gt;
&gt;&gt;&gt; On 12/8/12 7:59 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; WHAT:    Enable both OPAL and libevent thread support by default
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; WHY:      We need to support threaded operations for MPI-3, and for
&gt;&gt;&gt;&gt; MPI_THREAD_MULTIPLE.
&gt;&gt;&gt;&gt;               Enabling thread support by default is the only way to
&gt;&gt;&gt;&gt; ensure we fix all the problems.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; WHEN:   COB, Thurs Dec 13
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; This was a decision reached at the OMPI Developers meeting, so the RFC
&gt;&gt;&gt;&gt; is
&gt;&gt;&gt;&gt; mostly just a &quot;heads up&quot; to everyone that this will happen. We spent
&gt;&gt;&gt;&gt; some
&gt;&gt;&gt;&gt; time recently profiling the impact on performance and found it to be
&gt;&gt;&gt;&gt; significant: 100ns in shared memory latency, and a similar number to
&gt;&gt;&gt;&gt; TCP
&gt;&gt;&gt;&gt; message latency. However, without setting the support &quot;on&quot; by default,
&gt;&gt;&gt;&gt; we
&gt;&gt;&gt;&gt; will never address those problems. Thus, the group decided that we
&gt;&gt;&gt;&gt; would
&gt;&gt;&gt;&gt; enable support by default and being a concerted effort to reduce and/or
&gt;&gt;&gt;&gt; remove the performance impact.
&gt;&gt;&gt;
&gt;&gt;&gt; Thinking about this on the way home Friday, I'm not sure we need to go
&gt;&gt;&gt; quite that far.  I think we do want to enable MPI_THREAD_MULTIPLE by
&gt;&gt;&gt; default to cause all the locks to be &quot;on&quot; by default.  I'm not sure we
&gt;&gt;&gt; need to enable progress threads at this point; the question is do we
&gt;&gt;&gt; want
&gt;&gt;&gt; to take a top-down approach, where we turn on the locks all the time for
&gt;&gt;&gt; everything (expensive) and pare down what actually needs locking for
&gt;&gt;&gt; async
&gt;&gt;&gt; btl callbacks or do we leave off all the locking by default (when thread
&gt;&gt;&gt; count == 1) and only turn on always-lock locks for the code paths that
&gt;&gt;&gt; will deal with async callbacks from the BTLs.  I'm split on the issue.
&gt;&gt;
&gt;&gt; I viewed this in a different light. The question of thread_multiple is a
&gt;&gt; separate one. From my perspective, if we say we are going to support
&gt;&gt; MPI-3's async progress, then I don't see how we avoid the OPAL thread
&gt;&gt; support being &quot;on&quot; all the time.
&gt;&gt;
&gt;&gt; Likewise, if the ORTE wireup methods have to support async behavior, then
&gt;&gt; we have to build the event lib with thread support.
&gt;&gt;
&gt;&gt; So it seems to me that the best path forward is to turn both &quot;on&quot; by
&gt;&gt; default, then learn how to live with that situation.
&gt;
&gt; It depends on what you mean by &quot;on&quot;.  Thread support is always &quot;on&quot; these
&gt; days, meaning that opal_mutex_lock does, in fact, have a mutex that
&gt; locks/unlocks.  The question is what the value of opal_using_threads() is
&gt; (i.e., is OPAL_THREAD_LOCK a lock or not?).  In some ways, it doesn't need
&gt; to be (i.e., attributes still don't require the big attribute lock in
&gt; MPI_THREAD_SINGLE).  The problem is that because we protect many of the
&gt; base data structures internally (like free lists) instead of externally,
&gt; it's hard to be thread safe for the small portions of the PML, OSC, and
&gt; runtime components that need thread safety for progress without enabling
&gt; thread safety in a whole lot of other places.
Ummm.... I'm afraid that OPAL_THREAD_LOCK defines to no-op unless you configure --enable-opal-multi-threads. And since a lot of the code uses the macro instead of the direct function call, that means thread support isn't &quot;on&quot; these days in most places.
I'd suggest turning it all on by default, and then let's define and cleanup the thread support overall.
&gt;
&gt; Brian
&gt;
&gt; --
&gt;  Brian W. Barrett
&gt;  Scalable System Software Group
&gt;  Sandia National Laboratories
&gt;
&gt;
&gt;
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11846.php">Jeff Squyres: "[OMPI devel] SVN tags/branch question"</a>
<li><strong>Previous message:</strong> <a href="11844.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<li><strong>In reply to:</strong> <a href="11844.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
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
