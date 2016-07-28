<?
$subject_val = "Re: [OMPI users] run openMPI jobs with SGE,";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  9 05:59:28 2010" -->
<!-- isoreceived="20100409095928" -->
<!-- sent="Fri, 9 Apr 2010 11:59:14 +0200" -->
<!-- isosent="20100409095914" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] run openMPI jobs with SGE," -->
<!-- id="042D9461-E097-4DAA-B0C0-8BA12782C683_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="j2qb66245471004082102o3460897auf3f26031b700708b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] run openMPI jobs with SGE,<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-09 05:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12596.php">Huynh Thuc Cuoc: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12594.php">Cristobal Navarro: "[OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>In reply to:</strong> <a href="12594.php">Cristobal Navarro: "[OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12596.php">Huynh Thuc Cuoc: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 09.04.2010 um 06:02 schrieb Cristobal Navarro:
<br>
<p><span class="quotelev1">&gt; after some days of work and testing, i managed to install SGE on two machines, also installed openMPI 1.4.1 for each one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SGE is working, i can submit jobs and it schedules the jobs to the available cores total of 6,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my problem is that im trying to run an openMPI job and i cant.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is an example of what i am trying.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $qrsh -verbose -pe pempi mpirun -np 6 hostname
</span><br>
<p>you missed the number of slots here as argument to the -pe request?
<br>
<p><p><span class="quotelev1">&gt; Your job 105 (&quot;mpirun&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your &quot;qrsh&quot; request could not be scheduled, try again later.
</span><br>
<p>The PE is a attached to a queue with INTERACTIVE set as qtype? What startup method do you use - -builtin-, ssh (tight or loose) or classic rsh?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; im not sure what this can be, 
</span><br>
<span class="quotelev1">&gt; in the ompi_info i have gridengine support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where do you recommend to look ??
</span><br>
<span class="quotelev1">&gt; thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12596.php">Huynh Thuc Cuoc: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12594.php">Cristobal Navarro: "[OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>In reply to:</strong> <a href="12594.php">Cristobal Navarro: "[OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12596.php">Huynh Thuc Cuoc: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
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
