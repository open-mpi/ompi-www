<?
$subject_val = "Re: [OMPI users] Trying to map to socket #0 on each node";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  6 12:28:06 2015" -->
<!-- isoreceived="20151206172806" -->
<!-- sent="Sun, 6 Dec 2015 09:28:00 -0800" -->
<!-- isosent="20151206172800" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trying to map to socket #0 on each node" -->
<!-- id="50E6D652-6B3D-49D8-A023-016F0F405271_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56646B41.3010308_at_nvidia.com" -->
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
<strong>Date:</strong> 2015-12-06 12:28:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28137.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Previous message:</strong> <a href="28135.php">Carl Ponder: "[OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>In reply to:</strong> <a href="28135.php">Carl Ponder: "[OMPI users] Trying to map to socket #0 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28137.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Reply:</strong> <a href="28137.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Reply:</strong> <a href="28139.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You want &quot;-bind-to socket -slot-list=0,2,4,6&quot;
<br>
<p>Or if you want each process bound to a single core on the socket, then change &#226;&#128;&#156;socket&#226;&#128;&#157; to &#226;&#128;&#156;core&#226;&#128;&#157; in the above
<br>
<p>As for host/rankfile - we do indeed support just asking for &#226;&#128;&#156;the next empty node&#226;&#128;&#157; in the syntax, though it depends on the OMPI version you are using (it&#226;&#128;&#153;s in the 1.8 series, but not 1.6, IIRC)
<br>
<p><p><span class="quotelev1">&gt; On Dec 6, 2015, at 9:07 AM, Carl Ponder &lt;cponder_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to run a multi-node job but I want to map all of the processes to cores on socket #0 only.
</span><br>
<span class="quotelev1">&gt; I'm having a hard time figuring out how to do this, the obvious combinations
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 -npernode 4 -report-bindings ...
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 -npernode 4 --map-by core -report-bindings ...
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 -npernode 4 -cpu-set S0 -report-bindings ...
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 --map-by ppr:4:node,ppr:4:socket -report-bindings ...
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 -npernode 4 -bind-to slot=0:0,2,4,6 -report-bindings ...
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 -npernode 4 -bind-to slot=0:0,0:2,0:4,0:6 -report-bindings ...
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 -npernode 4 --map-by core:PE=2 -bind-to core -report-bindings ...
</span><br>
<span class="quotelev1">&gt; all are reported as having conflicting resource requirements.
</span><br>
<span class="quotelev1">&gt; Is there a way to specify this on the command-line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've looked at the docs on hostfiles &amp; rankfiles, and it looks like they require me to hard-code the names of all the nodes I'm using.
</span><br>
<span class="quotelev1">&gt; To me, this doesn't make sense on modern clusters, why don't they just associate an index with each assigned node?
</span><br>
<span class="quotelev1">&gt; That way the mapping files would be agnostic of the actual node names.
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                     Carl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28135.php">http://www.open-mpi.org/community/lists/users/2015/12/28135.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28136/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28137.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Previous message:</strong> <a href="28135.php">Carl Ponder: "[OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>In reply to:</strong> <a href="28135.php">Carl Ponder: "[OMPI users] Trying to map to socket #0 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28137.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Reply:</strong> <a href="28137.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Reply:</strong> <a href="28139.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
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
