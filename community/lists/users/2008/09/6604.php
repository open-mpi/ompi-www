<?
$subject_val = "[OMPI users] Linpack Benchmark and File Descriptor Limits";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 13:30:27 2008" -->
<!-- isoreceived="20080918173027" -->
<!-- sent="Thu, 18 Sep 2008 10:30:13 -0700" -->
<!-- isosent="20080918173013" -->
<!-- name="Alex Wolfe" -->
<!-- email="awolfe_at_[hidden]" -->
<!-- subject="[OMPI users] Linpack Benchmark and File Descriptor Limits" -->
<!-- id="c336c2830809181030r78e68d22n6fe3ec8a4dafdafe_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Linpack Benchmark and File Descriptor Limits<br>
<strong>From:</strong> Alex Wolfe (<em>awolfe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-18 13:30:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6605.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6603.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6606.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Reply:</strong> <a href="6606.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Maybe reply:</strong> <a href="6607.php">Alex Wolfe: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to run the HPL benchmarking software on a new 1024 core cluster
<br>
that we have set up. Unfortunately I'm hitting the &quot;mca_oob_tcp_accept:
<br>
accept() failed: Too many open files (24)&quot; error known in verson 1.2 of
<br>
openmpi. No matter what I set the file-descriptor limit for my account to, I
<br>
am still limited to only 808 or so processes. Does anyone have any
<br>
suggestions?
<br>
<p>-Alex
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6604/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6605.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6603.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6606.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Reply:</strong> <a href="6606.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Maybe reply:</strong> <a href="6607.php">Alex Wolfe: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
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
