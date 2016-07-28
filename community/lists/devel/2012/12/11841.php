<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 13:16:09 2012" -->
<!-- isoreceived="20121210181609" -->
<!-- sent="Mon, 10 Dec 2012 18:15:45 +0000" -->
<!-- isosent="20121210181545" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD316B2E9A_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87B0E547-0D58-41BA-9C17-1403DF63A439_at_open-mpi.org" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-10 13:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11842.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<li><strong>Previous message:</strong> <a href="11840.php">Ralph Castain: "[OMPI devel] RFC: Enable thread support by default"</a>
<li><strong>In reply to:</strong> <a href="11840.php">Ralph Castain: "[OMPI devel] RFC: Enable thread support by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11842.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<li><strong>Reply:</strong> <a href="11842.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/8/12 7:59 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;WHAT:    Enable both OPAL and libevent thread support by default
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WHY:      We need to support threaded operations for MPI-3, and for
</span><br>
<span class="quotelev1">&gt;MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt;                 Enabling thread support by default is the only way to
</span><br>
<span class="quotelev1">&gt;ensure we fix all the problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WHEN:   COB, Thurs Dec 13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This was a decision reached at the OMPI Developers meeting, so the RFC is
</span><br>
<span class="quotelev1">&gt;mostly just a &quot;heads up&quot; to everyone that this will happen. We spent some
</span><br>
<span class="quotelev1">&gt;time recently profiling the impact on performance and found it to be
</span><br>
<span class="quotelev1">&gt;significant: 100ns in shared memory latency, and a similar number to TCP
</span><br>
<span class="quotelev1">&gt;message latency. However, without setting the support &quot;on&quot; by default, we
</span><br>
<span class="quotelev1">&gt;will never address those problems. Thus, the group decided that we would
</span><br>
<span class="quotelev1">&gt;enable support by default and being a concerted effort to reduce and/or
</span><br>
<span class="quotelev1">&gt;remove the performance impact.
</span><br>
<p>Thinking about this on the way home Friday, I'm not sure we need to go
<br>
quite that far.  I think we do want to enable MPI_THREAD_MULTIPLE by
<br>
default to cause all the locks to be &quot;on&quot; by default.  I'm not sure we
<br>
need to enable progress threads at this point; the question is do we want
<br>
to take a top-down approach, where we turn on the locks all the time for
<br>
everything (expensive) and pare down what actually needs locking for async
<br>
btl callbacks or do we leave off all the locking by default (when thread
<br>
count == 1) and only turn on always-lock locks for the code paths that
<br>
will deal with async callbacks from the BTLs.  I'm split on the issue.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11842.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<li><strong>Previous message:</strong> <a href="11840.php">Ralph Castain: "[OMPI devel] RFC: Enable thread support by default"</a>
<li><strong>In reply to:</strong> <a href="11840.php">Ralph Castain: "[OMPI devel] RFC: Enable thread support by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11842.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<li><strong>Reply:</strong> <a href="11842.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
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
