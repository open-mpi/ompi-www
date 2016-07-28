<?
$subject_val = "[OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  7 01:05:31 2010" -->
<!-- isoreceived="20100807050531" -->
<!-- sent="Fri, 6 Aug 2010 22:05:25 -0700 (PDT)" -->
<!-- isosent="20100807050525" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Bcast issue" -->
<!-- id="914097.96007.qm_at_web50808.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Bcast issue<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-07 01:05:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13923.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13921.php">Damien: "[OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13923.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13923.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13936.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13937.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I seem to be having a problem with MPI_Bcast.
<br>
My massive I/O intensive data movement program must broadcast from n to n nodes. My problem starts because I require 2 processes per node, a sender and a receiver and I have implemented these using MPI processes rather than tackle the complexities of threads on MPI.
<br>
<p>Consequently, broadcast and calls like alltoall are not completely helpful.&#194;&#160; The dataset is huge and each node must end up with a complete copy built by the large number of contributing broadcasts from the sending nodes.&#194;&#160; Network efficiency and run time are paramount.
<br>
<p>As I don&#226;&#128;&#153;t want to needlessly broadcast all this data to the sending nodes and I have a perfectly good MPI program that distributes globally from a single node (1 to N), I took the unusual decision to start N copies of this program by spawning the MPI system from the PVM system in an effort to get my N to N concurrent transfers.
<br>
<p>It seems that the broadcasts running on concurrent MPI environments collide and cause all but the first process to hang waiting for their broadcasts.&#194;&#160; This theory seems to be confirmed by introducing a sleep of n-1 seconds before the first MPI_Bcast&#194;&#160; call on each node, which results in the code working perfectly.&#194;&#160; (total run time 55 seconds, 3 nodes, standard TCP stack)
<br>
<p>My guess is that unlike PVM, OpenMPI implements broadcasts with broadcasts rather than multicasts.&#194;&#160; Can someone confirm this?&#194;&#160; Is this a bug?
<br>
<p>Is there any multicast or N to N broadcast where sender processes can avoid participating when they don&#226;&#128;&#153;t need to?
<br>
<p>Thanks in advance
<br>
Randolph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13922/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13923.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13921.php">Damien: "[OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13923.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13923.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13936.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13937.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
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
