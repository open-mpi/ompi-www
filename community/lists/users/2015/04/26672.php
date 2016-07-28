<?
$subject_val = "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 16:34:10 2015" -->
<!-- isoreceived="20150410203410" -->
<!-- sent="Fri, 10 Apr 2015 15:33:30 -0500" -->
<!-- isosent="20150410203330" -->
<!-- name="namu patel" -->
<!-- email="namu.patel7_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%" -->
<!-- id="CACV7Auy=sGd9=4RHw9otvUomCNYHUOCxC1FQzF_PwL9ttKRVwQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CACV7Auw3XE86wjJkXAySPNr1erXH034dqgARV9t9yrcyTPn0eQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%<br>
<strong>From:</strong> namu patel (<em>namu.patel7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-10 16:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26673.php">Damien: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Previous message:</strong> <a href="26671.php">namu patel: "[OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>In reply to:</strong> <a href="26671.php">namu patel: "[OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26673.php">Damien: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Someone pointed out to me that it is a problem in how the mapping with
<br>
newer versions is done and that using -bind-to none resolves the issue.
<br>
<p>On Fri, Apr 10, 2015 at 3:22 PM, namu patel &lt;namu.patel7_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.8.4 on my workstation with 2 CPUs, each with 12
</span><br>
<span class="quotelev1">&gt; processors (6 with hyper-threading). When I run simulations using mpiexec,
</span><br>
<span class="quotelev1">&gt; I'm noticing a strange performance issue. If I run two simulations, each
</span><br>
<span class="quotelev1">&gt; with 6 processors, then everything is fine and 12 processors are under 100%
</span><br>
<span class="quotelev1">&gt; load. When I start a 3rd simulation with 6 processors, I notice throttling
</span><br>
<span class="quotelev1">&gt; in all 3 simulations and only 12 processors are at 100%, the rest are below
</span><br>
<span class="quotelev1">&gt; 10%. My guess is that somehow the processes from the 3rd simulations are
</span><br>
<span class="quotelev1">&gt; doubling onto the already busy processors. How can I be certain that this
</span><br>
<span class="quotelev1">&gt; is the case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; namu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26672/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26673.php">Damien: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Previous message:</strong> <a href="26671.php">namu patel: "[OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>In reply to:</strong> <a href="26671.php">namu patel: "[OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26673.php">Damien: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
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
