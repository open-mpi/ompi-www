<?
$subject_val = "[OMPI users] Lower performance on a Gigabit node compared to infiniband node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 10:30:07 2009" -->
<!-- isoreceived="20090309143007" -->
<!-- sent="Mon, 9 Mar 2009 10:30:02 -0400" -->
<!-- isosent="20090309143002" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] Lower performance on a Gigabit node compared to infiniband node" -->
<!-- id="cb60cbc40903090730v168686a4g7c968af790c75acc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Lower performance on a Gigabit node compared to infiniband node<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 10:30:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8364.php">Ralph Castain: "Re: [OMPI users] Lower performance on a Gigabit node compared to infiniband node"</a>
<li><strong>Previous message:</strong> <a href="8362.php">Marcia Cristina Cera: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8364.php">Ralph Castain: "Re: [OMPI users] Lower performance on a Gigabit node compared to infiniband node"</a>
<li><strong>Reply:</strong> <a href="8364.php">Ralph Castain: "Re: [OMPI users] Lower performance on a Gigabit node compared to infiniband node"</a>
<li><strong>Reply:</strong> <a href="8365.php">Jeff Squyres: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI team,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With Open MPI-1.3, the fortran application CPMD is installed on
<br>
Rocks-4.3 cluster - Dual Processor Quad core Xeon @ 3 GHz. (8 cores
<br>
per node)
<br>
<p>Two jobs (4 processes job) are run on two nodes, separately - one node
<br>
has a ib connection ( 4 GB RAM)  and the other node has gigabit
<br>
connection (8 GB RAM).
<br>
<p>Note that, the network-connectivity may not be or not required to be
<br>
used as the two jobs are running in stand alone mode.
<br>
<p>Since the jobs are running on single node - no intercommunication
<br>
between nodes - so the performance of both the jobs should be same
<br>
irrespective of network connectivity. But here this is not the case.
<br>
The gigabit job is taking double the time of infiniband job.
<br>
<p>Following are the details of two jobs:
<br>
<p>Infiniband Job:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    0 HOURS 10 MINUTES 21.71 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    0 HOURS 10 MINUTES 23.08 SECONDS
<br>
&nbsp;***      CPMD| SIZE OF THE PROGRAM IS  301192/ 571044 kBYTES ***
<br>
<p>Gigabit Job:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    0 HOURS 12 MINUTES  7.93 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    0 HOURS 21 MINUTES  0.07 SECONDS
<br>
&nbsp;***      CPMD| SIZE OF THE PROGRAM IS  123420/ 384344 kBYTES ***
<br>
<p>More details are attached here in a file.
<br>
<p>Why there is a long difference between CPU TIME and ELAPSED TIME for
<br>
Gigabit job?
<br>
<p>This could be an issue with Open MPI itself. What could be the reason?
<br>
<p>Is there any flags need to be set?
<br>
<p>Thanks in advance,
<br>
Sangamesh
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8363/cpmd_gb_ib_1node">cpmd_gb_ib_1node</a>
</ul>
<!-- attachment="cpmd_gb_ib_1node" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8364.php">Ralph Castain: "Re: [OMPI users] Lower performance on a Gigabit node compared to infiniband node"</a>
<li><strong>Previous message:</strong> <a href="8362.php">Marcia Cristina Cera: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8364.php">Ralph Castain: "Re: [OMPI users] Lower performance on a Gigabit node compared to infiniband node"</a>
<li><strong>Reply:</strong> <a href="8364.php">Ralph Castain: "Re: [OMPI users] Lower performance on a Gigabit node compared to infiniband node"</a>
<li><strong>Reply:</strong> <a href="8365.php">Jeff Squyres: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
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
