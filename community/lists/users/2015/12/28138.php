<?
$subject_val = "Re: [OMPI users] Trying to map to socket #0 on each node";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  6 14:34:30 2015" -->
<!-- isoreceived="20151206193430" -->
<!-- sent="Sun, 6 Dec 2015 11:34:24 -0800" -->
<!-- isosent="20151206193424" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trying to map to socket #0 on each node" -->
<!-- id="3B3E2ED3-D990-4A52-A2F5-01B767ADC087_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="566481FA.5060208_at_nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trying to map to socket #0 on each node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-06 14:34:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28139.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Previous message:</strong> <a href="28137.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>In reply to:</strong> <a href="28137.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28139.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The core counter spans the entire node, not just one socket. So one socket will have 0,2,4,6 and the other will have 1,3,5,7
<br>
<p><p><p><span class="quotelev1">&gt; On Dec 6, 2015, at 10:44 AM, Carl Ponder &lt;cponder_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/06/2015 11:28 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You want &quot;-bind-to socket -slot-list=0,2,4,6&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Or if you want each process bound to a single core on the socket, then change &#226;&#128;&#156;socket&#226;&#128;&#157; to &#226;&#128;&#156;core&#226;&#128;&#157; in the above
</span><br>
<span class="quotelev2">&gt;&gt; As for host/rankfile - we do indeed support just asking for &#226;&#128;&#156;the next empty node&#226;&#128;&#157; in the syntax, though it depends on the OMPI version you are using (it&#226;&#128;&#153;s in the 1.8 series, but not 1.6, IIRC)
</span><br>
<span class="quotelev1">&gt; Ralph -- I have two sockets on each node, won't it bind to 0,2,4,6 on both of them?
</span><br>
<span class="quotelev1">&gt; I only want the slots on socket 0.
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.10.1. How do I specify un-named nodes in the rankfile?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Carl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28138/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28139.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Previous message:</strong> <a href="28137.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>In reply to:</strong> <a href="28137.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28139.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
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
