<?
$subject_val = "Re: [OMPI users] OpenMP explicit thread affinity with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 28 23:47:26 2016" -->
<!-- isoreceived="20160629034726" -->
<!-- sent="Tue, 28 Jun 2016 20:47:23 -0700" -->
<!-- isosent="20160629034723" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP explicit thread affinity with MPI" -->
<!-- id="C1F0652E-E3DB-4A04-B360-0C37ABC93ED3_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA+ssbKWq_w-O97MgCbNC=CKJvXgESLdGiXW=58dV5gVsyuURFQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMP explicit thread affinity with MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-28 23:47:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29558.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Previous message:</strong> <a href="29556.php">Saliya Ekanayake: "[OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>In reply to:</strong> <a href="29556.php">Saliya Ekanayake: "[OMPI users] OpenMP explicit thread affinity with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29558.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Reply:</strong> <a href="29558.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why don&#226;&#128;&#153;t you have your application look at the OMPI_COMM_WORLD_LOCAL_RANK envar, and then use that to calculate the offset location for your threads (i.e., local rank 0 is on socket 0, local rank 1 is on socket 1, etc.). You can then putenv the correct value of the GOMP envar
<br>
<p><p><span class="quotelev1">&gt; On Jun 28, 2016, at 8:40 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to do something like below with OpenMPI and OpenMP (threads).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;image.png&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was trying to use the explicit thread affinity with GOMP_CPU_AFFINITY environment variable as described here (<a href="https://gcc.gnu.org/onlinedocs/libgomp/GOMP_005fCPU_005fAFFINITY.html">https://gcc.gnu.org/onlinedocs/libgomp/GOMP_005fCPU_005fAFFINITY.html</a> &lt;<a href="https://gcc.gnu.org/onlinedocs/libgomp/GOMP_005fCPU_005fAFFINITY.html">https://gcc.gnu.org/onlinedocs/libgomp/GOMP_005fCPU_005fAFFINITY.html</a>&gt;). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, both P0 and P1 processes will read the same GOMP_CPU_AFFINITY and will place threads on the same set of cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to overcome this and pass process specific affinity scheme to OpenMP when running with OpenMPI? For example, can I say T0 of P0 should be in Core 0, but T0 of P1 should be Core 4?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. I can manually achieve this within the program using sched_setaffinity(), but that's not portable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29556.php">http://www.open-mpi.org/community/lists/users/2016/06/29556.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29557/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29558.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Previous message:</strong> <a href="29556.php">Saliya Ekanayake: "[OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>In reply to:</strong> <a href="29556.php">Saliya Ekanayake: "[OMPI users] OpenMP explicit thread affinity with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29558.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Reply:</strong> <a href="29558.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
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
