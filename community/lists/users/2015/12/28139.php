<?
$subject_val = "Re: [OMPI users] Trying to map to socket #0 on each node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  7 10:19:01 2015" -->
<!-- isoreceived="20151207151901" -->
<!-- sent="Mon, 7 Dec 2015 09:18:49 -0600" -->
<!-- isosent="20151207151849" -->
<!-- name="Carl Ponder" -->
<!-- email="cponder_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trying to map to socket #0 on each node" -->
<!-- id="5665A359.5030400_at_nvidia.com" -->
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
<strong>Date:</strong> 2015-12-07 10:18:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28140.php">Nick Papior: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Previous message:</strong> <a href="28138.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>In reply to:</strong> <a href="28136.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28140.php">Nick Papior: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Reply:</strong> <a href="28140.php">Nick Papior: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*On 12/06/2015 11:07 AM, Carl Ponder wrote:*
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'm trying to run a multi-node job but I want to map all of the
</span><br>
<span class="quotelev1">&gt;     processes to cores on socket #0 only.
</span><br>
<span class="quotelev1">&gt;     I'm having a hard time figuring out how to do this, the obvious
</span><br>
<span class="quotelev1">&gt;     combinations
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         mpirun -n  8 -npernode 4 -report-bindings ...
</span><br>
<span class="quotelev1">&gt;         mpirun -n  8 -npernode 4 --map-by core -report-bindings ...
</span><br>
<span class="quotelev1">&gt;         mpirun -n  8 -npernode 4 -cpu-set S0 -report-bindings ...
</span><br>
<span class="quotelev1">&gt;         mpirun -n  8 --map-by ppr:4:node,ppr:4:socket -report-bindings ...
</span><br>
<span class="quotelev1">&gt;         mpirun -n  8 -npernode 4 -bind-to slot=0:0,2,4,6
</span><br>
<span class="quotelev1">&gt;         -report-bindings ...
</span><br>
<span class="quotelev1">&gt;         mpirun -n  8 -npernode 4 -bind-to slot=0:0,0:2,0:4,0:6
</span><br>
<span class="quotelev1">&gt;         -report-bindings ...
</span><br>
<span class="quotelev1">&gt;         mpirun -n  8 -npernode 4 --map-by core:PE=2 -bind-to core
</span><br>
<span class="quotelev1">&gt;         -report-bindings ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     all are reported as having conflicting resource requirements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
So far I can't get this to work. Using the above form
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -n 8 *-bind-to socket --slot-list 0,2,4,6* -report-bindings ...
<br>
<p>it says that it's a mis-specification:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Conflicting directives for binding policy are causing the policy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to be redefined:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New policy:   socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prior policy:  SOCKET
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Please check that only one policy is defined.
<br>
<p>If I treat the socket-binding as redundant and just use this
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -n 8 -*-slot-list 0,2,4,6* -report-bindings ...
<br>
<p>it looks like it's ignoring slots 0,2,4,6 available on the second node:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;A rank is missing its location specification:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank:        0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank file:   (null)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;All processes must have their location specified in the rank file.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Either
<br>
&nbsp;&nbsp;&nbsp;&nbsp;add an entry to the file, or provide a default slot_list to use for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;any unspecified ranks.
<br>
<p>(One question is whether it is interacting with Torque correctly).
<br>
Trying to force it to split the processes across nodes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -n 8 *-npernode 4 --slot-list 0,2,4,6* -report-bindings ....
<br>
<p>gives
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Conflicting directives for mapping policy are causing the policy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to be redefined:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New policy:   RANK_FILE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prior policy:  UNKNOWN
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Please check that only one policy is defined.
<br>
<p>Do you know what to do here? I'm using OpenMPI 1.10.1.
<br>
Thanks,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carl
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28139/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28140.php">Nick Papior: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Previous message:</strong> <a href="28138.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>In reply to:</strong> <a href="28136.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28140.php">Nick Papior: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Reply:</strong> <a href="28140.php">Nick Papior: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
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
