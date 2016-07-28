<?
$subject_val = "Re: [OMPI users] Trying to map to socket #0 on each node";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  6 13:44:20 2015" -->
<!-- isoreceived="20151206184420" -->
<!-- sent="Sun, 6 Dec 2015 12:44:10 -0600" -->
<!-- isosent="20151206184410" -->
<!-- name="Carl Ponder" -->
<!-- email="cponder_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trying to map to socket #0 on each node" -->
<!-- id="566481FA.5060208_at_nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="50E6D652-6B3D-49D8-A023-016F0F405271_at_open-mpi.org" -->
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
<strong>From:</strong> Carl Ponder (<em>cponder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-06 13:44:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28138.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Previous message:</strong> <a href="28136.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>In reply to:</strong> <a href="28136.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28138.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Reply:</strong> <a href="28138.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*On 12/06/2015 11:28 AM, Ralph Castain wrote:*
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You want &quot;-bind-to socket -slot-list=0,2,4,6&quot;
</span><br>
<span class="quotelev1">&gt;     Or if you want each process bound to a single core on the socket,
</span><br>
<span class="quotelev1">&gt;     then change &#226;&#128;&#156;socket&#226;&#128;&#157; to &#226;&#128;&#156;core&#226;&#128;&#157; in the above
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     As for host/rankfile - we do indeed support just asking for &#226;&#128;&#156;the
</span><br>
<span class="quotelev1">&gt;     next empty node&#226;&#128;&#157; in the syntax, though it depends on the OMPI
</span><br>
<span class="quotelev1">&gt;     version you are using (it&#226;&#128;&#153;s in the 1.8 series, but not 1.6, IIRC)
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ralph -- I have two sockets on each node, won't it bind to 0,2,4,6 on 
<br>
both of them?
<br>
I only want the slots on socket 0.
<br>
I'm using OpenMPI 1.10.1. How do I specify un-named nodes in the rankfile?
<br>
Thanks,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carl
<br>
<p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28137/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28138.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Previous message:</strong> <a href="28136.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>In reply to:</strong> <a href="28136.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28138.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Reply:</strong> <a href="28138.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
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
