<?
$subject_val = "[OMPI devel] Can I have the same node specified multiple times in a host file?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 13:25:25 2009" -->
<!-- isoreceived="20090904172525" -->
<!-- sent="Fri, 4 Sep 2009 13:25:18 -0400" -->
<!-- isosent="20090904172518" -->
<!-- name="Karl, Robert (RKARL)" -->
<!-- email="RKARL_at_[hidden]" -->
<!-- subject="[OMPI devel] Can I have the same node specified multiple times in a host file?" -->
<!-- id="E040E4D9A4ACC2459C313FD46D5A4A5405A27DDF_at_ANPMB5.arinc.com" -->
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
<strong>Subject:</strong> [OMPI devel] Can I have the same node specified multiple times in a host file?<br>
<strong>From:</strong> Karl, Robert (RKARL) (<em>RKARL_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 13:25:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6781.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Previous message:</strong> <a href="6779.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6782.php">Ralph Castain: "Re: [OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
<li><strong>Reply:</strong> <a href="6782.php">Ralph Castain: "Re: [OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am attempting force certain processes to run on specific nodes due to the
<br>
I/O cards that are attached to the specific CPU motherboards (not all boards
<br>
have the same I/O cards).  I am using the -bynode and --hostname options to
<br>
specify the nodes that I want the processes to run on.  There are 4
<br>
processors (nodes) per motherboard.  I would like to be able to change the
<br>
motherboard each processor executes on simply by editing the host file to
<br>
change the ordering of the nodes in the host file.
<br>
<p>For example:
<br>
I want process 0, 1 and 4 to run on node0 and process 2 and 3 to run on
<br>
node1.
<br>
<p>shell$ cat my-hosts
<br>
node0 slots=4
<br>
node0 slots=4
<br>
node1 slots=4
<br>
node1 slots=4
<br>
node0 slots=4
<br>
<p>shell$ mpirun --hostfile my-hosts -np 5 --bynode
<br>
<p>What I end up with is process 1&amp; 3 running on node0 and process 0,2,4 running 
<br>
on
<br>
node1.  I suspect that MPI does not like having the same node multiple times
<br>
in the host file.  It appears that only the last 2 entries of the host file 
<br>
are being used and then the processes are being assigned in a round robin 
<br>
fashion by node.  Is what I'm doing legal?  Any suggestions to achieve the 
<br>
intended results (which is to be able to force an arbitary process to run on 
<br>
an arbitary node)?
<br>
<p>Thanks,
<br>
<p>Bob
<br>
<p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6780/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6781.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Previous message:</strong> <a href="6779.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6782.php">Ralph Castain: "Re: [OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
<li><strong>Reply:</strong> <a href="6782.php">Ralph Castain: "Re: [OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
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
