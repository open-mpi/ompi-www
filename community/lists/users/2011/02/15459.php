<?
$subject_val = "Re: [OMPI users] Calculate time spent on non blocking communication?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  1 01:20:51 2011" -->
<!-- isoreceived="20110201062051" -->
<!-- sent="Tue, 1 Feb 2011 01:20:36 -0500" -->
<!-- isosent="20110201062036" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calculate time spent on non blocking communication?" -->
<!-- id="8F16054C-6FCA-4E65-9C83-5EFBFCB18DB7_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinewz_xYx88PgouojvogAF6Ld8NwF_nCHsY0rf6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calculate time spent on non blocking communication?<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-01 01:20:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15460.php">abc def: "[OMPI users] printing text fixes a problem?"</a>
<li><strong>Previous message:</strong> <a href="15458.php">Eugene Loh: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>In reply to:</strong> <a href="15457.php">Bibrak Qamar: "[OMPI users] Calculate time spent on non blocking communication?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15479.php">Bibrak Qamar: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 1, 2011, at 1:09 AM, Bibrak Qamar wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using non-blocking send and receive, and i want to calculate the time it took for the communication. Is there any method or a way to do this using openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Bibrak Qamar
</span><br>
<span class="quotelev1">&gt; Undergraduate Student BIT-9
</span><br>
<span class="quotelev1">&gt; Member Center for High Performance Scientific Computing
</span><br>
<span class="quotelev1">&gt; NUST-School of Electrical Engineering and Computer Science.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<p>About the same as with blocking communication, I guess.
<br>
<p>Would this do work for you?
<br>
<p>start=MPI_Wtime()
<br>
MPI_Isend(...)
<br>
...
<br>
MPI_Irecv(...)
<br>
...
<br>
MPI_Wait[all](...)
<br>
end=MPI_Wtime()
<br>
print *, 'walltime = ', end-start
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15460.php">abc def: "[OMPI users] printing text fixes a problem?"</a>
<li><strong>Previous message:</strong> <a href="15458.php">Eugene Loh: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>In reply to:</strong> <a href="15457.php">Bibrak Qamar: "[OMPI users] Calculate time spent on non blocking communication?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15479.php">Bibrak Qamar: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
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
