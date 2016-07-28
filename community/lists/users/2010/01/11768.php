<?
$subject_val = "Re: [OMPI users] OpenMPI checkpoint/restart";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 09:33:23 2010" -->
<!-- isoreceived="20100114143323" -->
<!-- sent="Thu, 14 Jan 2010 09:33:17 -0500" -->
<!-- isosent="20100114143317" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI checkpoint/restart" -->
<!-- id="22CD452A-EB5D-4241-A7BF-694B9D4C587E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="68119efe1001132350y6f03b847ya9d2b5cd6ca742f3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI checkpoint/restart<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 09:33:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11769.php">Joshua Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11767.php">Andreea Costea: "[OMPI users] Checkpoint/Restart error"</a>
<li><strong>In reply to:</strong> <a href="11763.php">Andreea Costea: "[OMPI users] OpenMPI checkpoint/restart"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 14, 2010, at 2:50 AM, Andreea Costea wrote:
<br>
<p><span class="quotelev1">&gt; Hei there
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have some questions regarding checkpoint/restart:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Until recently I thought that ompi-restart and ompi-restart are used to checkpoint a process inside an MPI application. Now I reread this and I realized that actually what it does is to checkpoint the mpirun process. Does this mean that if I run my application with multiple processes and on multiple nodes in my network the checkpoint file will contain the states of all the processes of my MPI application?
</span><br>
<p>I think you slightly misread the entry. ompi-checkpoint checkpoints the entire MPI application, across node boundaries. It requires that the user pass the PID of mpirun to server as a reference point for the command. This way a user can run multiple mpiruns from the same machine and only checkpoint a subset of those.
<br>
<p><span class="quotelev1">&gt; 2. Can I restart the application on a different node? 
</span><br>
<p>Yes. If you have trouble doing this, then I would suggest following the directions in the BLCR FAQ entry below (it usually addressed 99% of the problems people have doing this):
<br>
&nbsp;&nbsp;<a href="https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink</a>
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11769.php">Joshua Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11767.php">Andreea Costea: "[OMPI users] Checkpoint/Restart error"</a>
<li><strong>In reply to:</strong> <a href="11763.php">Andreea Costea: "[OMPI users] OpenMPI checkpoint/restart"</a>
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
