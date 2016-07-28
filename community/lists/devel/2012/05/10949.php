<?
$subject_val = "[OMPI devel] RFC: Update libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 10:39:03 2012" -->
<!-- isoreceived="20120501143903" -->
<!-- sent="Tue, 1 May 2012 08:38:54 -0600" -->
<!-- isosent="20120501143854" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Update libevent" -->
<!-- id="97874B5E-07E7-40F2-B8CE-CEF5F9C0E307_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Update libevent<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 10:38:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10950.php">Hjelm, Nathan T: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Previous message:</strong> <a href="10948.php">Ralph Castain: "Re: [OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10975.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>Reply:</strong> <a href="10975.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:  Update libevent to 2.0.19 release
<br>
<p>WHEN:  As soon as it is released, expected around May 11
<br>
<p>WHY:     The 2.0.19 release contains a critical fix to a bug I recently discovered in the libevent 2.0.x series
<br>
<p><p>Details:
<br>
I discovered a bug in libevent over the last few days that causes it to unexpectedly &quot;invert&quot; event priorities. It is a slightly subtle bug, but we were able to provide a simple reproducer and so the libevent folks were able to quickly implement a fix.
<br>
<p>Stated simply, if you were in an event of a given priority and activated an event of higher priority, that new event would not get serviced if any event of the current priority were to become active prior to leaving the current event. In other words, libevent would service all active events of the current priority before even looking to see if a higher priority event was active.
<br>
<p>The patch adds the following logic to event_active:
<br>
<p><span class="quotelev1">&gt;    IF &lt;I am in an event&gt; AND
</span><br>
<span class="quotelev1">&gt;        IF &lt;ev-&gt;base&gt; EQ &lt;current-base&gt; AND
</span><br>
<span class="quotelev1">&gt;        IF &lt;pri&gt; LT &lt;current-pri&gt;  THEN
</span><br>
<span class="quotelev1">&gt;            &lt;rescan queues on next loop&gt;
</span><br>
<p><p>Thus, a rescan only occurs if a higher priority event becomes active during an event of lower priority. Unfortunately, ORTE relies on this behavior to handle errors - without the change, an error reported in a message from a daemon (for example) cannot be serviced until ALL messages that arrive during the processing of the message have been handled. In the case of a large cluster that is receiving a long list of messages, this prevents the error from being handled for quite some time.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10950.php">Hjelm, Nathan T: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Previous message:</strong> <a href="10948.php">Ralph Castain: "Re: [OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10975.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>Reply:</strong> <a href="10975.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
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
