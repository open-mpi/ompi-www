<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 16:46:10 2008" -->
<!-- isoreceived="20080929204610" -->
<!-- sent="Mon, 29 Sep 2008 22:45:54 +0200" -->
<!-- isosent="20080929204554" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="6F99B227-4218-4584-84E1-EF8CBECDB7F3_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200809292033.m8TKXr60021132_at_despam-11.iastate.edu" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 16:45:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6776.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6774.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6774.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6776.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 29.09.2008 um 22:33 schrieb Zhiliang Hu:
<br>
<p><span class="quotelev1">&gt; At 07:37 PM 9/29/2008 +0200, Reuti wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;-l nodes=6:ppn=2&quot; is all I have to specify the node requests:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this might help: <a href="http://www.open-mpi.org/faq/?category=tm">http://www.open-mpi.org/faq/?category=tm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Essentially the examples given on this web is no difference from  
</span><br>
<span class="quotelev1">&gt; what I did.
</span><br>
<span class="quotelev1">&gt; Only thing new is, I suppose &quot;qsub -I &quot; is for interactive mode.   
</span><br>
<span class="quotelev1">&gt; When I did this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   qsub -I -l nodes=7 mpiblastn.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It hangs on &quot;qsub: waiting for job 798.nagrp2.ansci.iastate.edu to  
</span><br>
<span class="quotelev1">&gt; start&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; UNIX_PROMPT&gt; qsub -l nodes=6:ppn=2 /path/to/mpi_program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where &quot;mpi_program&quot; is a file with one line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /path/to/mpirun -np 12 /path/to/my_program
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you please try this jobscript instead:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; set | grep PBS
</span><br>
<span class="quotelev2">&gt;&gt; /path/to/mpirun /path/to/my_program
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All should be handled by Open MPI automatically. With the &quot;set&quot; bash
</span><br>
<span class="quotelev2">&gt;&gt; command you will get a list with all defined variables for further
</span><br>
<span class="quotelev2">&gt;&gt; analysis; and where you can check for the variables set by Torque.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;set | grep PBS&quot; part had nothing in output.
</span><br>
<p>Strange - you checked the .o end .e files of the job? - Reuti
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zhiliang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6776.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6774.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6774.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6776.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
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
