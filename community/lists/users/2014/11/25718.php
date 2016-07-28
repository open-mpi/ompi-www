<?
$subject_val = "[OMPI users] oversubscription of slots with GridEngine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  9 12:21:06 2014" -->
<!-- isoreceived="20141109172106" -->
<!-- sent="Sun, 9 Nov 2014 17:20:41 +0000" -->
<!-- isosent="20141109172041" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="[OMPI users] oversubscription of slots with GridEngine" -->
<!-- id="814E6D361B66804FBF146E8AB57FE1CC2E31C902_at_CISAMRMBS02.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] oversubscription of slots with GridEngine<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-09 12:20:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25719.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25717.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25719.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25719.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25746.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We switched on hyper threading on our cluster with two eight core sockets per node (32 threads per node).
<br>
<p>We configured  gridengine with 16 slots per node to allow the 16 extra threads for kernel process use but this apparently does not work. Printout of the gridengine hostfile shows that for a 32 slots job, 16 slots are placed on each of two nodes as expected. Including the openmpi --display-map option shows that all 32 processes are incorrectly  placed on the head node. Here is part of the output
<br>
<p>master=cn6083
<br>
PE=orte
<br>
JOB_ID=2481793
<br>
Got 32 slots.
<br>
slots:
<br>
cn6083 16 par6.q_at_cn6083 &lt;NULL&gt;
<br>
cn6085 16 par6.q_at_cn6085 &lt;NULL&gt;
<br>
Sun Nov  9 16:50:59 GMT 2014
<br>
&nbsp;Data for JOB [44767,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: cn6083  Num slots: 16   Max slots: 0    Num procs: 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [44767,1] App: 0 Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [44767,1] App: 0 Process rank: 1
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [44767,1] App: 0 Process rank: 31
<br>
<p>&nbsp;=============================================================
<br>
<p>I found some related mailings about a new warning in 1.8.2 about oversubscription and  I tried a few options to avoid the use of the extra threads for MPI tasks by openmpi without success, e.g. variants of
<br>
<p>--cpus-per-proc 1 
<br>
--bind-to-core 
<br>
<p>and some others. Gridengine treats hw threads as cores==slots (?) but the content of $PE_HOSTFILE suggests it distributes the slots sensibly  so it seems there is an option for openmpi required to get 16 cores per node?
<br>
I tried both 1.8.2, 1.8.3 and also 1.6.5.
<br>
<p>Thanks for some clarification that anyone can give.
<br>
<p>Henk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25719.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25717.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25719.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25719.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25746.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
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
