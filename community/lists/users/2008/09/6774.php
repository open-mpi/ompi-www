<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 16:34:03 2008" -->
<!-- isoreceived="20080929203403" -->
<!-- sent="Mon, 29 Sep 2008 15:33:52 -0500" -->
<!-- isosent="20080929203352" -->
<!-- name="Zhiliang Hu" -->
<!-- email="zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="200809292033.m8TKXr60021132_at_despam-11.iastate.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8951_1222709874_m8THbqlR017868_7B53C0FE-9368-4509-990F-0B0 5B82FF93B_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] qsub - mpirun problem<br>
<strong>From:</strong> Zhiliang Hu (<em>zhu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 16:33:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6775.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6773.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6775.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6775.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At 07:37 PM 9/29/2008 +0200, Reuti wrote:
<br>
<p><span class="quotelev2">&gt;&gt;&quot;-l nodes=6:ppn=2&quot; is all I have to specify the node requests:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;this might help: <a href="http://www.open-mpi.org/faq/?category=tm">http://www.open-mpi.org/faq/?category=tm</a>
</span><br>
<p>Essentially the examples given on this web is no difference from what I did.
<br>
Only thing new is, I suppose &quot;qsub -I &quot; is for interactive mode.  When I did this:
<br>
<p>&nbsp;&nbsp;qsub -I -l nodes=7 mpiblastn.sh 
<br>
<p>It hangs on &quot;qsub: waiting for job 798.nagrp2.ansci.iastate.edu to start&quot;.
<br>
<p><p><span class="quotelev2">&gt;&gt;UNIX_PROMPT&gt; qsub -l nodes=6:ppn=2 /path/to/mpi_program
</span><br>
<span class="quotelev2">&gt;&gt;where &quot;mpi_program&quot; is a file with one line:
</span><br>
<span class="quotelev2">&gt;&gt;  /path/to/mpirun -np 12 /path/to/my_program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can you please try this jobscript instead:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#!/bin/sh
</span><br>
<span class="quotelev1">&gt;set | grep PBS
</span><br>
<span class="quotelev1">&gt;/path/to/mpirun /path/to/my_program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;All should be handled by Open MPI automatically. With the &quot;set&quot; bash  
</span><br>
<span class="quotelev1">&gt;command you will get a list with all defined variables for further  
</span><br>
<span class="quotelev1">&gt;analysis; and where you can check for the variables set by Torque.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- Reuti
</span><br>
<p>&quot;set | grep PBS&quot; part had nothing in output.
<br>
<p>Zhiliang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6775.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6773.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6775.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6775.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
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
