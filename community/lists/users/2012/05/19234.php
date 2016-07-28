<?
$subject_val = "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 11:13:55 2012" -->
<!-- isoreceived="20120509151355" -->
<!-- sent="Wed, 09 May 2012 17:13:12 +0200" -->
<!-- isosent="20120509151312" -->
<!-- name="Eduardo Morras" -->
<!-- email="nec556_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust" -->
<!-- id="4FA882720008B165_at_" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFAE9jhcZ4SrMxRHMe6WVzoeJ7zPDTtE56iuOtB+k2FjmbhtQQ_at_mail.g mail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust<br>
<strong>From:</strong> Eduardo Morras (<em>nec556_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 11:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19235.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time"</a>
<li><strong>Previous message:</strong> <a href="19233.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Maybe in reply to:</strong> <a href="19216.php">Rohan Deshpande: "[OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At 15:59 08/05/2012, you wrote:
<br>
<span class="quotelev1">&gt;Yep you are correct. I did the same and it worked. When I have more 
</span><br>
<span class="quotelev1">&gt;than 3 MPI tasks there is lot of overhead on GPU.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But for CPU there is not overhead. All three machines have 4 quad 
</span><br>
<span class="quotelev1">&gt;core processors with 3.8 GB RAM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Just wondering why there is no degradation of performance on CPU ?
</span><br>
<p>Your GPU is saturated. It has more work than it can handle so its 
<br>
performance drops.
<br>
<p>If your kernel code is the one you posted some days ago you can 
<br>
divide the number of threads and multiply the work done in each one, 
<br>
so you do the same work (maybe faster) without using/wasting all the 
<br>
thread pool and sm bandwith.
<br>
<p><p>HTH
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19235.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time"</a>
<li><strong>Previous message:</strong> <a href="19233.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Maybe in reply to:</strong> <a href="19216.php">Rohan Deshpande: "[OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
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
