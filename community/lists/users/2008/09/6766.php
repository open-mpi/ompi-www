<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 13:06:13 2008" -->
<!-- isoreceived="20080929170613" -->
<!-- sent="Mon, 29 Sep 2008 12:06:04 -0500" -->
<!-- isosent="20080929170604" -->
<!-- name="Zhiliang Hu" -->
<!-- email="zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="200809291706.m8TH66I0032720_at_despam-11.iastate.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="12253_1222707367_m8TGu5XA015179_04150996-1DF4-439E-AB65-A6 DC37B9B2F0_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2008-09-29 13:06:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6767.php">Aleksej Saushev: "[OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="6765.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6768.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6768.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At 06:55 PM 9/29/2008 +0200, Reuti wrote:
<br>
<span class="quotelev1">&gt;Am 29.09.2008 um 18:27 schrieb Zhiliang Hu:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;How you run that command line from *inside a Torque* job?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- I am only a poor biologist, reading through the manuals/ tutorials but still don't have good clues... (thanks in advance ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;What is the content of your jobscript? Did you request more than one  
</span><br>
<span class="quotelev1">&gt;node for your job?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- Reuti
</span><br>
<p>&quot;-l nodes=6:ppn=2&quot; is all I have to specify the node requests:
<br>
<p>UNIX_PROMPT&gt; qsub -l nodes=6:ppn=2 /path/to/mpi_program
<br>
where &quot;mpi_program&quot; is a file with one line:
<br>
&nbsp;&nbsp;/path/to/mpirun -np 12 /path/to/my_program
<br>
<p>Zhiliang
<br>
<p>ps: &quot;my_program&quot; is a parallel program. 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6767.php">Aleksej Saushev: "[OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="6765.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6768.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6768.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
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
