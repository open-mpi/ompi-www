<?
$subject_val = "Re: [OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 15 09:32:13 2012" -->
<!-- isoreceived="20121015133213" -->
<!-- sent="Mon, 15 Oct 2012 06:32:06 -0700" -->
<!-- isosent="20121015133206" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0" -->
<!-- id="A074E2D3-7C07-4FA4-AEC0-B0EEDE5A5EE7_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOXJ2J8kV8-uUvUdm77fV1nocCVhyHTmxxAjqTFMuKm9QviG+Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-15 09:32:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20487.php">Ralph Castain: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20485.php">Ralph Castain: "Re: [OMPI users] -cpus-per-proc in openmpi-1.7rc1"</a>
<li><strong>In reply to:</strong> <a href="20461.php">USA Linux UAE: "[OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....I've never seen that error. The only way to get it is if that module is failing to properly setup the cmd line for launching the ORTE daemons.
<br>
<p>Any particular reason to use something as old as 1.4.3? Could you upgrade to the 1.6 series?
<br>
<p>On Oct 10, 2012, at 10:44 AM, USA Linux UAE &lt;usasoftwareengineer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using openmpi (1.4.3) with slurm (2.4.2) on Centos 6.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can execute my jobs  with mpirun  to my nodelist in partition using  &quot;-H&quot; option with mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when i use slurm and use 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; salloc -n 3 sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then submit mpi jobs using mpirun &lt;mpibinary&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 289
</span><br>
<span class="quotelev1">&gt; sh-4.1$ mpirun mpihello
</span><br>
<span class="quotelev1">&gt; [v2:29784] [[57331,0],0] ORTE_ERROR_LOG: Not found in file plm_slurm_module.c at line 350
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any debugging procedure  with openmpi and slurm?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
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
<li><strong>Next message:</strong> <a href="20487.php">Ralph Castain: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20485.php">Ralph Castain: "Re: [OMPI users] -cpus-per-proc in openmpi-1.7rc1"</a>
<li><strong>In reply to:</strong> <a href="20461.php">USA Linux UAE: "[OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0"</a>
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
