<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 09:23:06 2014" -->
<!-- isoreceived="20140627132306" -->
<!-- sent="Fri, 27 Jun 2014 15:23:05 +0200" -->
<!-- isosent="20140627132305" -->
<!-- name="Luigi Santangelo" -->
<!-- email="luigi.santangelo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core" -->
<!-- id="CAFF+N+aCq7kLAp+w-FZfiLBUh7u_Kbv4gxVyAmBpwY4ZE_aJag_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="OF17E61959.7C4F1149-ON49257D04.00467C74-49257D04.0047A3D7_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Luigi Santangelo (<em>luigi.santangelo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-27 09:23:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24716.php">Brock Palen: "[OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>Previous message:</strong> <a href="24714.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>In reply to:</strong> <a href="24714.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
:) Thanks to both
<br>
I'll try you solution and I'll give you a feedback
<br>
<p>Thanks
<br>
<p><p>2014-06-27 15:01 GMT+02:00 &lt;tmishima_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Luigi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --map-by slot:pe=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Probably Ralph is very busy, so something sliped his memory...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; My system is a 64 core, with Debian 3.2.57 64 bit, GNU gcc 4.7, kernel
</span><br>
<span class="quotelev1">&gt; Linux 3.2.0 and OpenMPI 1.8.1.
</span><br>
<span class="quotelev2">&gt; &gt; I developed an application to matching proteins files using OpenMP
</span><br>
<span class="quotelev1">&gt; +OpenMPI. I compiled souce code with -fopenmp flag, I set OMP_NUM_THREADS=4
</span><br>
<span class="quotelev1">&gt; then I ran binary with mpiexec -np 16.
</span><br>
<span class="quotelev2">&gt; &gt; When the program runs, the top command show me that only 16 core are
</span><br>
<span class="quotelev1">&gt; used. If I use the previous of OpenMPI (1.6.5) it works fine. Must I set
</span><br>
<span class="quotelev1">&gt; anything in the new version? Where I wrong?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Luigi_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/usersLink">http://www.open-mpi.org/mailman/listinfo.cgi/usersLink</a> to
</span><br>
<span class="quotelev1">&gt; this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24712.php">http://www.open-mpi.org/community/lists/users/2014/06/24712.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24714.php">http://www.open-mpi.org/community/lists/users/2014/06/24714.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24715/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24716.php">Brock Palen: "[OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>Previous message:</strong> <a href="24714.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>In reply to:</strong> <a href="24714.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
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
