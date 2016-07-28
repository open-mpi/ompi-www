<?
$subject_val = "Re: [OMPI users] openMPI (multiple CPUs)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 07:20:13 2010" -->
<!-- isoreceived="20100227122013" -->
<!-- sent="Sat, 27 Feb 2010 14:20:00 +0200" -->
<!-- isosent="20100227122000" -->
<!-- name="Micha Feigin" -->
<!-- email="michf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI (multiple CPUs)" -->
<!-- id="20100227142000.024d9e37_at_vivalunalitshi.luna.local" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="150288.48791.qm_at_web46204.mail.sp1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI (multiple CPUs)<br>
<strong>From:</strong> Micha Feigin (<em>michf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-27 07:20:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12176.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="12174.php">Oliver Ford: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<li><strong>In reply to:</strong> <a href="12170.php">Rodolfo Chua: "[OMPI users] openMPI (multiple CPUs)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 26 Feb 2010 18:14:07 -0800 (PST)
<br>
Rodolfo Chua &lt;rodolfo.chua_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running a code using openMPI in a quad-core cpu. Though it is working, a quad-core is still not enough. 
</span><br>
<span class="quotelev1">&gt; Is there another way, aside from a server, of connecting 2 or 3 CPUs and running them on parallel with MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Rodolfo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
You have three options:
<br>
<p>1. Buy a multi socket motherboard and matching CPUs (expensive)
<br>
2. Connect several machines into a cluster (via gigabit ethernet or infiniband - i.e cheap or expensive) - what openMPI is actually about ...
<br>
3. Wait for CPUs with more cores to come out
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12176.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="12174.php">Oliver Ford: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<li><strong>In reply to:</strong> <a href="12170.php">Rodolfo Chua: "[OMPI users] openMPI (multiple CPUs)"</a>
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
