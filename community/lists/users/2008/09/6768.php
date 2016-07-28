<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 13:37:27 2008" -->
<!-- isoreceived="20080929173727" -->
<!-- sent="Mon, 29 Sep 2008 19:37:15 +0200" -->
<!-- isosent="20080929173715" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="7B53C0FE-9368-4509-990F-0B05B82FF93B_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200809291706.m8TH66I0032720_at_despam-11.iastate.edu" -->
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
<strong>Date:</strong> 2008-09-29 13:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6769.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Previous message:</strong> <a href="6767.php">Aleksej Saushev: "[OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>In reply to:</strong> <a href="6766.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6774.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 29.09.2008 um 19:06 schrieb Zhiliang Hu:
<br>
<p><span class="quotelev1">&gt; At 06:55 PM 9/29/2008 +0200, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 29.09.2008 um 18:27 schrieb Zhiliang Hu:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How you run that command line from *inside a Torque* job?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- I am only a poor biologist, reading through the manuals/  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tutorials but still don't have good clues... (thanks in advance ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the content of your jobscript? Did you request more than one
</span><br>
<span class="quotelev2">&gt;&gt; node for your job?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;-l nodes=6:ppn=2&quot; is all I have to specify the node requests:
</span><br>
<p>this might help: <a href="http://www.open-mpi.org/faq/?category=tm">http://www.open-mpi.org/faq/?category=tm</a>
<br>
<p><span class="quotelev1">&gt; UNIX_PROMPT&gt; qsub -l nodes=6:ppn=2 /path/to/mpi_program
</span><br>
<span class="quotelev1">&gt; where &quot;mpi_program&quot; is a file with one line:
</span><br>
<span class="quotelev1">&gt;   /path/to/mpirun -np 12 /path/to/my_program
</span><br>
<p>Can you please try this jobscript instead:
<br>
<p>#!/bin/sh
<br>
set | grep PBS
<br>
/path/to/mpirun /path/to/my_program
<br>
<p>All should be handled by Open MPI automatically. With the &quot;set&quot; bash  
<br>
command you will get a list with all defined variables for further  
<br>
analysis; and where you can check for the variables set by Torque.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zhiliang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ps: &quot;my_program&quot; is a parallel program.
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
<li><strong>Next message:</strong> <a href="6769.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Previous message:</strong> <a href="6767.php">Aleksej Saushev: "[OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>In reply to:</strong> <a href="6766.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6774.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
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
