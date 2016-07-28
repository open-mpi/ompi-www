<?
$subject_val = "[OMPI users] Trying to map to socket #0 on each node";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  6 12:07:28 2015" -->
<!-- isoreceived="20151206170728" -->
<!-- sent="Sun, 6 Dec 2015 11:07:13 -0600" -->
<!-- isosent="20151206170713" -->
<!-- name="Carl Ponder" -->
<!-- email="cponder_at_[hidden]" -->
<!-- subject="[OMPI users] Trying to map to socket #0 on each node" -->
<!-- id="56646B41.3010308_at_nvidia.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Trying to map to socket #0 on each node<br>
<strong>From:</strong> Carl Ponder (<em>cponder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-06 12:07:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28136.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Previous message:</strong> <a href="28134.php">Gilles Gouaillardet: "Re: [OMPI users] Problem with the 1.8.8 version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28136.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Reply:</strong> <a href="28136.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to run a multi-node job but I want to map all of the 
<br>
processes to cores on socket #0 only.
<br>
I'm having a hard time figuring out how to do this, the obvious combinations
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -n  8 -npernode 4 -report-bindings ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -n  8 -npernode 4 --map-by core -report-bindings ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -n  8 -npernode 4 -cpu-set S0 -report-bindings ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -n  8 --map-by ppr:4:node,ppr:4:socket -report-bindings ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -n  8 -npernode 4 -bind-to slot=0:0,2,4,6 -report-bindings ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -n  8 -npernode 4 -bind-to slot=0:0,0:2,0:4,0:6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-report-bindings ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -n  8 -npernode 4 --map-by core:PE=2 -bind-to core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-report-bindings ...
<br>
<p>all are reported as having conflicting resource requirements.
<br>
Is there a way to specify this on the command-line?
<br>
<p>I've looked at the docs on hostfiles &amp; rankfiles, and it looks like they 
<br>
require me to hard-code the names of all the nodes I'm using.
<br>
To me, this doesn't make sense on modern clusters, why don't they just 
<br>
associate an index with each assigned node?
<br>
That way the mapping files would be agnostic of the actual node names.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28135/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28136.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Previous message:</strong> <a href="28134.php">Gilles Gouaillardet: "Re: [OMPI users] Problem with the 1.8.8 version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28136.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Reply:</strong> <a href="28136.php">Ralph Castain: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
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
