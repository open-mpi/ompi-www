<?
$subject_val = "Re: [OMPI users] help understand unhelpful ORTE error message";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 12:51:25 2015" -->
<!-- isoreceived="20151119175125" -->
<!-- sent="Thu, 19 Nov 2015 09:51:21 -0800" -->
<!-- isosent="20151119175121" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help understand unhelpful ORTE error message" -->
<!-- id="1852321.UKbvTmxxiX_at_stikine" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGKz=uLiABJ62d-wjAjDNj=uGV=JVv2vDAN_jXM-3qLgYN8kLA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] help understand unhelpful ORTE error message<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 12:51:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28064.php">Howard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28062.php">Jeff Hammond: "[OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28062.php">Jeff Hammond: "[OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28064.php">Howard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28064.php">Howard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28083.php">Dave Love: "[OMPI users] local directory for shmem etc. (was: help understand unhelpful ORTE error message)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>On Thu 19.11.2015 09:44:20 Jeff Hammond wrote:
<br>
<span class="quotelev1">&gt; I have no idea what this is trying to tell me.  Help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jhammond_at_nid00024:~/MPI/qoit/collectives&gt; mpirun -n 2 ./driver.x 64
</span><br>
<span class="quotelev1">&gt; [nid00024:00482] [[46168,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/plm/alps/plm_alps_module.c at line 418
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can run the same job with srun without incident:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jhammond_at_nid00024:~/MPI/qoit/collectives&gt; srun -n 2 ./driver.x 64
</span><br>
<span class="quotelev1">&gt; MPI was initialized.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is on the NERSC Cori Cray XC40 system.  I build Open-MPI git head 
</span><br>
from
<br>
<span class="quotelev1">&gt; source for OFI libfabric.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have many other issues, which I will report later.  As a spoiler, if I
</span><br>
<span class="quotelev1">&gt; cannot use your mpirun, I cannot set any of the MCA options there.  Is
</span><br>
<span class="quotelev1">&gt; there a method to set MCA options with environment variables?  I could 
</span><br>
not
<br>
<span class="quotelev1">&gt; find this documented anywhere.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In particular, is there a way to cause shm to not use the global
</span><br>
<span class="quotelev1">&gt; filesystem?  I see this issue comes up a lot and I read the list archives,
</span><br>
<span class="quotelev1">&gt; but the warning message (
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hpc/cce-mpi-openmpi-1.6.4/blob/master/ompi/mca/common/sm/">https://github.com/hpc/cce-mpi-openmpi-1.6.4/blob/master/ompi/mca/common/sm/</a>
</span><br>
<span class="quotelev1">&gt; help-mpi-common-sm.txt) suggested that I could override it by setting 
</span><br>
TMP,
<br>
<span class="quotelev1">&gt; TEMP or TEMPDIR, which I did to no avail.
</span><br>
<p><span class="quotelev1">&gt;From my experience on edison: the one environment variable that does 
</span><br>
works is TMPDIR - the one that is not listed in the error message :-)
<br>
<p>Can't help you with your mpirun problem though ...
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid/ComputeCanada Site Lead
Simon Fraser University
Burnaby, British Columbia
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28063/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28064.php">Howard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28062.php">Jeff Hammond: "[OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28062.php">Jeff Hammond: "[OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28064.php">Howard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28064.php">Howard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28083.php">Dave Love: "[OMPI users] local directory for shmem etc. (was: help understand unhelpful ORTE error message)"</a>
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
