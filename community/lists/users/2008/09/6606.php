<?
$subject_val = "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 19:36:03 2008" -->
<!-- isoreceived="20080918233603" -->
<!-- sent="Fri, 19 Sep 2008 00:35:59 +0100" -->
<!-- isosent="20080918233559" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linpack Benchmark and File Descriptor Limits" -->
<!-- id="9f8092cc0809181635q48c55e59v7416780f5fe3c86a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c336c2830809181030r78e68d22n6fe3ec8a4dafdafe_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linpack Benchmark and File Descriptor Limits<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-18 19:35:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6607.php">Alex Wolfe: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Previous message:</strong> <a href="6605.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6604.php">Alex Wolfe: "[OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6607.php">Alex Wolfe: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2008/9/18 Alex Wolfe &lt;awolfe_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run the HPL benchmarking software on a new 1024 core cluster
</span><br>
<span class="quotelev1">&gt; that we have set up. Unfortunately I'm hitting the &quot;mca_oob_tcp_accept:
</span><br>
<span class="quotelev1">&gt; accept() failed: Too many open files (24)&quot; error known in verson 1.2 of
</span><br>
<span class="quotelev1">&gt; openmpi. No matter what I set the file-descriptor limit for my account to, I
</span><br>
<span class="quotelev1">&gt; am still limited to only 808 or so processes. Does anyone have any
</span><br>
<span class="quotelev1">&gt; suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Are you running the Linpack via a batch system or just using mpirun from the
<br>
command line?
<br>
<p>If via a batch system, looks for FAQs on how to set the resource limits for
<br>
that batch system.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6606/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6607.php">Alex Wolfe: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Previous message:</strong> <a href="6605.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6604.php">Alex Wolfe: "[OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6607.php">Alex Wolfe: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
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
