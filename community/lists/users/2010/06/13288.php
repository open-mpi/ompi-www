<?
$subject_val = "Re: [OMPI users] Running openMPI job with torque";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 16:19:01 2010" -->
<!-- isoreceived="20100609201901" -->
<!-- sent="Wed, 9 Jun 2010 21:18:33 +0100" -->
<!-- isosent="20100609201833" -->
<!-- name="Govind Songara" -->
<!-- email="govind.songara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running openMPI job with torque" -->
<!-- id="AANLkTikMGB1ayIQYxAI7XvS8hbrIs97XlHnJmE-8j-m3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9F2C853F-3A76-43A6-8EF2-FC08734F31A5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running openMPI job with torque<br>
<strong>From:</strong> Govind Songara (<em>govind.songara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 16:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13289.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13287.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>In reply to:</strong> <a href="13281.php">Ralph Castain: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>The allocation looks fine,  but why it show number of slots as 1. The
<br>
executions host has 4 processor, in nodes file also defined np=4.
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: Name: node56.beowulf.cluster    Num slots: 1    Max slots: 0
<br>
<p>=================================================================
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Name: node56.beowulf.cluster    Num procs: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17538,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17538,1] Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17538,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17538,1] Process rank: 3
<br>
<p>&nbsp;=============================================================
<br>
Hello World! from process 0 out of 4 on node56.beowulf.cluster
<br>
Hello World! from process 2 out of 4 on node56.beowulf.cluster
<br>
Hello World! from process 1 out of 4 on node56.beowulf.cluster
<br>
Hello World! from process 3 out of 4 on node56.beowulf.cluster
<br>
<p><p><p>On 9 June 2010 17:31, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; mpirun --display-allocation --display-map -np 4
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13288/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13289.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13287.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>In reply to:</strong> <a href="13281.php">Ralph Castain: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- nextthread="start" -->
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
