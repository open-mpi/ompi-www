<?
$subject_val = "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 04:49:42 2011" -->
<!-- isoreceived="20110415084942" -->
<!-- sent="Fri, 15 Apr 2011 10:49:23 +0200" -->
<!-- isosent="20110415084923" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp;amp; orte_ess_set_name failed)" -->
<!-- id="9971B212-D515-47DA-89F8-B7B72643ECC5_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BANLkTikjtfJMwmppumcweh5tbAnTs+NA0A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-15 04:49:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16255.php">Reuti: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>Previous message:</strong> <a href="16253.php">Asad Ali: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>In reply to:</strong> <a href="16252.php">Derrick LIN: "[OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 15.04.2011 um 06:53 schrieb Derrick LIN:
<br>
<p><span class="quotelev1">&gt; I am trying to setup a small SGE cluster with OpenMPI integrated but I am totally stuck when trying to run a openmpi job to the SGE's PE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I mainly followed the guide sge-snow.pdf from Revolutions Computing and <a href="http://idolinux.blogspot.com/2010/04/quick-install-of-open-mpi-with-grid.html">http://idolinux.blogspot.com/2010/04/quick-install-of-open-mpi-with-grid.html</a>
</span><br>
<p>- what is your SGE configuration `qconf -sconf`?
<br>
<p><p><span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; For troubleshooting I have done several things below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) passwordless SSH has been configurated properly for the execution hosts and the queue master.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pwbcad_at_sgeqmast01:~$ ssh sgeqexec01 uptime
</span><br>
<span class="quotelev1">&gt;  14:35:54 up  2:47,  1 user,  load average: 0.10, 0.08, 0.02
</span><br>
<p>a) you are testing from master to a node, but jobs are running between nodes.
<br>
<p>b) unless you need X11 forwarding, using SGE&#146;s -builtin- communication works fine, this way you can have a cluster without `rsh` or `ssh` (or limited to admin staff) and can still run parallel jobs.
<br>
<p><p><span class="quotelev1">&gt; 2) I could run a openmpi job outside the SGE successfully. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -host n1, n2 -np 8 ./ompi_job
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) I submitted job to a queue directly instead of a PE, the job could run and completed successfully
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; qsub -q dev.q ./ompi_job.sh
</span><br>
<p>Then you are bypassing SGE&#146;s slot allocation and will have wrong accounting and no job control of the slave tasks.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 4) Although I don't think PATH and LD_LIBRARY_PATH would cause issues in ubuntu, I still add OpenMPI binaries and libraries to both. But it didn't help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It will be very appreciated if anyone can share their experience!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Derrick
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
<li><strong>Next message:</strong> <a href="16255.php">Reuti: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>Previous message:</strong> <a href="16253.php">Asad Ali: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>In reply to:</strong> <a href="16252.php">Derrick LIN: "[OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)"</a>
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
