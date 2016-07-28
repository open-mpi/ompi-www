<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 06:30:11 2014" -->
<!-- isoreceived="20140627103011" -->
<!-- sent="Fri, 27 Jun 2014 05:30:09 -0500" -->
<!-- isosent="20140627103009" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core" -->
<!-- id="9FA94FCF-4954-483D-820B-786863E82507_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFF+N+Y1jDw9mkARGbrmH=GJvRrsO_mosun6AbV3eyxadfF0gA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-27 06:30:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24714.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Previous message:</strong> <a href="24712.php">Luigi Santangelo: "[OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>In reply to:</strong> <a href="24712.php">Luigi Santangelo: "[OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24714.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should add this to your cmd line:
<br>
<p>--map-by core:pe=4
<br>
<p>This will bind each process to 4 cores
<br>
<p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Jun 27, 2014, at 5:22 AM, Luigi Santangelo &lt;luigi.santangelo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; My system is a 64 core, with Debian 3.2.57 64 bit, GNU gcc 4.7, kernel Linux 3.2.0 and OpenMPI 1.8.1.
</span><br>
<span class="quotelev1">&gt; I developed an application to matching proteins files using OpenMP+OpenMPI. I compiled souce code with -fopenmp flag, I set OMP_NUM_THREADS=4 then I ran binary with mpiexec -np 16.
</span><br>
<span class="quotelev1">&gt; When the program runs, the top command show me that only 16 core are used. If I use the previous of OpenMPI (1.6.5) it works fine. Must I set anything in the new version? Where I wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Luigi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24712.php">http://www.open-mpi.org/community/lists/users/2014/06/24712.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24714.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Previous message:</strong> <a href="24712.php">Luigi Santangelo: "[OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>In reply to:</strong> <a href="24712.php">Luigi Santangelo: "[OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24714.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
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
