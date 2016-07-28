<?
$subject_val = "Re: [OMPI devel] RFC: Update libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 16:10:01 2012" -->
<!-- isoreceived="20120504201001" -->
<!-- sent="Fri, 4 May 2012 14:09:52 -0600" -->
<!-- isosent="20120504200952" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Update libevent" -->
<!-- id="676A6F12-E80F-4F1B-8936-5E75F9FD4826_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="97874B5E-07E7-40F2-B8CE-CEF5F9C0E307_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Update libevent<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 16:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10976.php">roswan ismail: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10974.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10949.php">Ralph Castain: "[OMPI devel] RFC: Update libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10984.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>Reply:</strong> <a href="10984.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI: 2.0.19-stable was released yesterday. I have a Mercurial repo all set to go:
<br>
<p><a href="https://bitbucket.org/rhc/ompi-libevent2019">https://bitbucket.org/rhc/ompi-libevent2019</a>
<br>
<p>Please check it out - timeout is now set for May 11th.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On May 1, 2012, at 8:38 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; WHAT:  Update libevent to 2.0.19 release
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:  As soon as it is released, expected around May 11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY:     The 2.0.19 release contains a critical fix to a bug I recently discovered in the libevent 2.0.x series
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Details:
</span><br>
<span class="quotelev1">&gt; I discovered a bug in libevent over the last few days that causes it to unexpectedly &quot;invert&quot; event priorities. It is a slightly subtle bug, but we were able to provide a simple reproducer and so the libevent folks were able to quickly implement a fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stated simply, if you were in an event of a given priority and activated an event of higher priority, that new event would not get serviced if any event of the current priority were to become active prior to leaving the current event. In other words, libevent would service all active events of the current priority before even looking to see if a higher priority event was active.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The patch adds the following logic to event_active:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   IF &lt;I am in an event&gt; AND
</span><br>
<span class="quotelev2">&gt;&gt;       IF &lt;ev-&gt;base&gt; EQ &lt;current-base&gt; AND
</span><br>
<span class="quotelev2">&gt;&gt;       IF &lt;pri&gt; LT &lt;current-pri&gt;  THEN
</span><br>
<span class="quotelev2">&gt;&gt;           &lt;rescan queues on next loop&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thus, a rescan only occurs if a higher priority event becomes active during an event of lower priority. Unfortunately, ORTE relies on this behavior to handle errors - without the change, an error reported in a message from a daemon (for example) cannot be serviced until ALL messages that arrive during the processing of the message have been handled. In the case of a large cluster that is receiving a long list of messages, this prevents the error from being handled for quite some time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10976.php">roswan ismail: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10974.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10949.php">Ralph Castain: "[OMPI devel] RFC: Update libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10984.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>Reply:</strong> <a href="10984.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
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
