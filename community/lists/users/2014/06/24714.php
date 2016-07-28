<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 09:02:08 2014" -->
<!-- isoreceived="20140627130208" -->
<!-- sent="Fri, 27 Jun 2014 22:01:37 +0900" -->
<!-- isosent="20140627130137" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core" -->
<!-- id="OF17E61959.7C4F1149-ON49257D04.00467C74-49257D04.0047A3D7_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OpenMPI%201.8.1%20runs%20more%20OpenMP%20Threads%20on%20the%20same%20core"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-06-27 09:01:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24715.php">Luigi Santangelo: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Previous message:</strong> <a href="24713.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>In reply to:</strong> <a href="24712.php">Luigi Santangelo: "[OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24715.php">Luigi Santangelo: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Reply:</strong> <a href="24715.php">Luigi Santangelo: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Luigi,
<br>
<p>Please try:
<br>
<p>--map-by slot:pe=4
<br>
<p>Probably Ralph is very busy, so something sliped his memory...
<br>
<p>Regards,
<br>
Tetsuya
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; My system is a 64 core, with Debian 3.2.57 64 bit, GNU gcc 4.7, kernel
</span><br>
Linux 3.2.0 and OpenMPI 1.8.1.
<br>
<span class="quotelev1">&gt; I developed an application to matching proteins files using OpenMP
</span><br>
+OpenMPI. I compiled souce code with -fopenmp flag, I set OMP_NUM_THREADS=4
<br>
then I ran binary with mpiexec -np 16.
<br>
<span class="quotelev1">&gt; When the program runs, the top command show me that only 16 core are
</span><br>
used. If I use the previous of OpenMPI (1.6.5) it works fine. Must I set
<br>
anything in the new version? Where I wrong?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Luigi_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/usersLink">http://www.open-mpi.org/mailman/listinfo.cgi/usersLink</a> to
</span><br>
this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24712.php">http://www.open-mpi.org/community/lists/users/2014/06/24712.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24715.php">Luigi Santangelo: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Previous message:</strong> <a href="24713.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>In reply to:</strong> <a href="24712.php">Luigi Santangelo: "[OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24715.php">Luigi Santangelo: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Reply:</strong> <a href="24715.php">Luigi Santangelo: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
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
