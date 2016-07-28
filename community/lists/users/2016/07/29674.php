<?
$subject_val = "[OMPI users] Affinity settings for hyperthreading";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 18 02:25:43 2016" -->
<!-- isoreceived="20160718062543" -->
<!-- sent="Mon, 18 Jul 2016 07:25:12 +0100" -->
<!-- isosent="20160718062512" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="[OMPI users] Affinity settings for hyperthreading" -->
<!-- id="CAPqNE2Vut-3WrsPS_zq-yMFgcTcbSAEQaAvHFUrQk7tUKcEKBg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Affinity settings for hyperthreading<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-18 02:25:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29675.php">Thomas Jahns: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29673.php">M. D.: "[OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29676.php">Ralph Castain: "Re: [OMPI users] Affinity settings for hyperthreading"</a>
<li><strong>Reply:</strong> <a href="29676.php">Ralph Castain: "Re: [OMPI users] Affinity settings for hyperthreading"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please can someone point me towards the affinity settings for:
<br>
OpenMPI 1.10   used with Slurm version 15
<br>
<p>I have some nodes with 2630-v4 processors.
<br>
So 10 cores per socket / 20 hyperthreads
<br>
Hyperthreading is enabled.
<br>
I would like to set affinity for 20 processes per node,
<br>
so that the processes are pinned to every second HT core - ie one process
<br>
per physical thread.
<br>
<p>I'm sure this is quite easy...
<br>
<p>Thankyou
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29674/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29675.php">Thomas Jahns: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29673.php">M. D.: "[OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29676.php">Ralph Castain: "Re: [OMPI users] Affinity settings for hyperthreading"</a>
<li><strong>Reply:</strong> <a href="29676.php">Ralph Castain: "Re: [OMPI users] Affinity settings for hyperthreading"</a>
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
