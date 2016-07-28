<?
$subject_val = "[OMPI users] Problem runing MPI on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 19:38:03 2012" -->
<!-- isoreceived="20120924233803" -->
<!-- sent="Mon, 24 Sep 2012 19:37:58 -0400" -->
<!-- isosent="20120924233758" -->
<!-- name="mariana Vargas" -->
<!-- email="mmarianav_at_[hidden]" -->
<!-- subject="[OMPI users] Problem runing MPI on cluster" -->
<!-- id="4DD4E8B2-DC3A-4DCA-98E4-6A622C52C480_at_yahoo.com.mx" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="97C9A47B-D29B-4B20-8DE9-C7FBC91ACC7F_at_apc.univ-paris7.fr" -->
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
<strong>Subject:</strong> [OMPI users] Problem runing MPI on cluster<br>
<strong>From:</strong> mariana Vargas (<em>mmarianav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-24 19:37:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20284.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20282.php">Ralph Castain: "Re: [OMPI users] openmpi failed the hello world test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20284.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Reply:</strong> <a href="20284.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>I get this error when I run a paralelized python code in a cluster,  
<br>
could anyone give me an idea of what is happening? I'am new in this  
<br>
Thanks...
<br>
<p>mpirun has exited due to process rank 2 with PID 10259 on
<br>
node f01 exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p>Thanks!!
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dr. Mariana Vargas Magana
</span><br>
<span class="quotelev1">&gt; Astroparticule et Cosmologie - Bureau 409B
</span><br>
<span class="quotelev1">&gt; PHD student- Universit&#233; Denis Diderot-Paris 7
</span><br>
<span class="quotelev1">&gt; 10, rue Alice Domon et L&#233;onie Duquet
</span><br>
<span class="quotelev1">&gt; 75205 Paris Cedex - France
</span><br>
<span class="quotelev1">&gt; Tel. +33 (0)1 57 27 70 32
</span><br>
<span class="quotelev1">&gt; Fax. +33 (0)1 57 27 60 71
</span><br>
<span class="quotelev1">&gt; mariana_at_[hidden]
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20283/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20284.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20282.php">Ralph Castain: "Re: [OMPI users] openmpi failed the hello world test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20284.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Reply:</strong> <a href="20284.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
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
