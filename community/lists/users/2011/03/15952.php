<?
$subject_val = "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 23:27:53 2011" -->
<!-- isoreceived="20110322032753" -->
<!-- sent="Mon, 21 Mar 2011 19:27:45 -0800" -->
<!-- isosent="20110322032745" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?" -->
<!-- id="4D881731.4060802_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5A0F749B-950E-4866-886A-91EB64BDCAC2_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 23:27:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15953.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="15951.php">Gustavo Correa: "[OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<li><strong>In reply to:</strong> <a href="15951.php">Gustavo Correa: "[OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15959.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15959.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gustavo Correa wrote:
<br>
<p><span class="quotelev1">&gt;Dear OpenMPI Pros
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is there an MCA parameter that would do the same as the mpiexec switch '-bind-to-core'?
</span><br>
<span class="quotelev1">&gt;I.e., something that I could set up not in the mpiexec command line,
</span><br>
<span class="quotelev1">&gt;but for the whole cluster, or for an user, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In the past I used '-mca mpi mpi_paffinity_alone=1'.
</span><br>
<span class="quotelev1">&gt;But that was before '-bind-to-core' came along.
</span><br>
<span class="quotelev1">&gt;However, my recollection of some recent discussions here in the list
</span><br>
<span class="quotelev1">&gt;is that the latter would not do the same as '-bind-to-core',
</span><br>
<span class="quotelev1">&gt;and that the recommendation was to use '-bind-to-core' in the mpiexec command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
A little awkward, but how about
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bycore                rmaps_base_schedule_policy  core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bysocket              rmaps_base_schedule_policy  socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bind-to-core          orte_process_binding        core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bind-to-socket        orte_process_binding        socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bind-to-none          orte_process_binding        none
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15953.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="15951.php">Gustavo Correa: "[OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<li><strong>In reply to:</strong> <a href="15951.php">Gustavo Correa: "[OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15959.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15959.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
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
