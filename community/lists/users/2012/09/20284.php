<?
$subject_val = "Re: [OMPI users] Problem runing MPI on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 20:00:11 2012" -->
<!-- isoreceived="20120925000011" -->
<!-- sent="Mon, 24 Sep 2012 17:00:03 -0700" -->
<!-- isosent="20120925000003" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem runing MPI on cluster" -->
<!-- id="389558B3-4F80-4C01-925E-0C70F35F061F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4DD4E8B2-DC3A-4DCA-98E4-6A622C52C480_at_yahoo.com.mx" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem runing MPI on cluster<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-24 20:00:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20285.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20283.php">mariana Vargas: "[OMPI users] Problem runing MPI on cluster"</a>
<li><strong>In reply to:</strong> <a href="20283.php">mariana Vargas: "[OMPI users] Problem runing MPI on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20285.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Reply:</strong> <a href="20285.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, as it says, your processes called MPI_Init, but at least one of them exited without calling MPI_Finalize. That violates the MPI rules and we therefore terminate the remaining processes.
<br>
<p>Check your code and see how/why you are doing that - you probably have a code path whereby a process exits without calling finalize.
<br>
<p><p>On Sep 24, 2012, at 4:37 PM, mariana Vargas &lt;mmarianav_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get this error when I run a paralelized python code in a cluster, could anyone give me an idea of what is happening? I'am new in this Thanks...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 2 with PID 10259 on
</span><br>
<span class="quotelev1">&gt; node f01 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Mariana Vargas Magana
</span><br>
<span class="quotelev2">&gt;&gt; Astroparticule et Cosmologie - Bureau 409B
</span><br>
<span class="quotelev2">&gt;&gt; PHD student- Universit&#233; Denis Diderot-Paris 7
</span><br>
<span class="quotelev2">&gt;&gt; 10, rue Alice Domon et L&#233;onie Duquet
</span><br>
<span class="quotelev2">&gt;&gt; 75205 Paris Cedex - France
</span><br>
<span class="quotelev2">&gt;&gt; Tel. +33 (0)1 57 27 70 32
</span><br>
<span class="quotelev2">&gt;&gt; Fax. +33 (0)1 57 27 60 71
</span><br>
<span class="quotelev2">&gt;&gt; mariana_at_[hidden]
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20284/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20285.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20283.php">mariana Vargas: "[OMPI users] Problem runing MPI on cluster"</a>
<li><strong>In reply to:</strong> <a href="20283.php">mariana Vargas: "[OMPI users] Problem runing MPI on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20285.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Reply:</strong> <a href="20285.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
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
