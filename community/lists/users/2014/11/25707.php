<?
$subject_val = "[OMPI users] Question on mapping processes to hosts file";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 11:53:49 2014" -->
<!-- isoreceived="20141107165349" -->
<!-- sent="Fri, 7 Nov 2014 16:52:58 +0000" -->
<!-- isosent="20141107165258" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Question on mapping processes to hosts file" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CC22504_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Question on mapping processes to hosts file<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-07 11:52:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25708.php">Ralph Castain: "Re: [OMPI users] Question on mapping processes to hosts file"</a>
<li><strong>Previous message:</strong> <a href="25706.php">Steven Eliuk: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25708.php">Ralph Castain: "Re: [OMPI users] Question on mapping processes to hosts file"</a>
<li><strong>Reply:</strong> <a href="25708.php">Ralph Castain: "Re: [OMPI users] Question on mapping processes to hosts file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's my command:
<br>
<p>&lt;path_to_OpenMPI_1.8.3&gt;/bin/mpirun &lt;unrelated MCA options&gt; --machinefile hosts.dat -np 4 &lt;executable&gt;
<br>
<p>Here's my hosts.dat file:
<br>
<p>% cat hosts.dat
<br>
node01
<br>
node02
<br>
node03
<br>
node04
<br>
<p>All 4 ranks are launched on node01.  I don't believe I've ever seen this before.  I had to do a sanity check, so I tried MVAPICH2-2.1a and got what I expected: 1 process runs on each of the 4 nodes.  The mpirun man page says 'round-robin', which I take to mean that one process would be launched per line in the hosts file, so this really seems like incorrect behavior.
<br>
<p>What could be the possibilities here?
<br>
<p>Thanks for the help!
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25707/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25708.php">Ralph Castain: "Re: [OMPI users] Question on mapping processes to hosts file"</a>
<li><strong>Previous message:</strong> <a href="25706.php">Steven Eliuk: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25708.php">Ralph Castain: "Re: [OMPI users] Question on mapping processes to hosts file"</a>
<li><strong>Reply:</strong> <a href="25708.php">Ralph Castain: "Re: [OMPI users] Question on mapping processes to hosts file"</a>
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
