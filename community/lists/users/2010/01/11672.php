<?
$subject_val = "[OMPI users] Fw: Problem with checkpointing multihosts, multiprocesses MPI application";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  2 07:09:46 2010" -->
<!-- isoreceived="20100102120946" -->
<!-- sent="Sat, 2 Jan 2010 04:09:41 -0800 (PST)" -->
<!-- isosent="20100102120941" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="[OMPI users] Fw: Problem with checkpointing multihosts, multiprocesses MPI application" -->
<!-- id="831181.75867.qm_at_web31003.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Fw: Problem with checkpointing multihosts, multiprocesses MPI application<br>
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-02 07:09:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11673.php">chih lee: "[OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11671.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Averyone,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Happy new year 2010. A few weeks ago I posted a query (please see email below) regarding checkpointing applications running on multiple hosts. I am still struggling to find a solution. I would really appreciate if someone could help me.
<br>
<p>Thank you.
<br>
<p>Raj
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p>--- On Sat, 12/12/09, Kritiraj Sajadah &lt;ksajadah_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Kritiraj Sajadah &lt;ksajadah_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Problem with checkpointing multihosts, multiprocesses MPI application
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Saturday, December 12, 2009, 3:03 PM
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;&#160;&#160;I am trying to
</span><br>
<span class="quotelev1">&gt; checkpoint am MPI application which has two processes each
</span><br>
<span class="quotelev1">&gt; running on two seperate hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run the application as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; raj_at_sun32:~$ mpirun -am ft-enable-cr -np 2 --hostfile
</span><br>
<span class="quotelev1">&gt; sunhost -mca btl ^openib -mca snapc_base_global_snapshot_dir
</span><br>
<span class="quotelev1">&gt; /tmp m.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I trigger the checkpoint as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; raj_at_sun32:~$ ompi-checkpoint -v 30010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following happens displaying two errors which
</span><br>
<span class="quotelev1">&gt; checkpointng the application:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##############################################
</span><br>
<span class="quotelev1">&gt; I am processor no 0 of a total of 2 procs on host sun32
</span><br>
<span class="quotelev1">&gt; I am processor no 1 of a total of 2 procs on host sun06
</span><br>
<span class="quotelev1">&gt; I am processorrrrrrrr no 0 of a total of 2 procs on host
</span><br>
<span class="quotelev1">&gt; sun32 
</span><br>
<span class="quotelev1">&gt; I am processorrrrrrrr no 1 of a total of 2 procs on host
</span><br>
<span class="quotelev1">&gt; sun06 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [sun32:30010] Error: expected_component: PID information
</span><br>
<span class="quotelev1">&gt; unavailable!
</span><br>
<span class="quotelev1">&gt; [sun32:30010] Error: expected_component: Component Name
</span><br>
<span class="quotelev1">&gt; information unavailable!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am processssssssssssor no 1 of a total of 2 procs on host
</span><br>
<span class="quotelev1">&gt; sun06
</span><br>
<span class="quotelev1">&gt; I am processssssssssssor no 0 of a total of 2 procs on host
</span><br>
<span class="quotelev1">&gt; sun32
</span><br>
<span class="quotelev1">&gt; bye 
</span><br>
<span class="quotelev1">&gt; bye 
</span><br>
<span class="quotelev1">&gt; ############################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when I try to restart the application from the checkpointed
</span><br>
<span class="quotelev1">&gt; file, I get the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; raj_at_sun32:~$ ompi-restart ompi_global_snapshot_30010.ckpt
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The filename (opal_snapshot_1.ckpt) is invalid
</span><br>
<span class="quotelev1">&gt; because either you have not provided a filename
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;&#160;&#160;or provided an invalid
</span><br>
<span class="quotelev1">&gt; filename.
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;&#160;&#160;Please see --help for
</span><br>
<span class="quotelev1">&gt; usage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; I am processssssssssssor no 0 of a total of 2 procs on host
</span><br>
<span class="quotelev1">&gt; sun32
</span><br>
<span class="quotelev1">&gt; bye 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would very appreciate if you could give me some ideas on
</span><br>
<span class="quotelev1">&gt; how to checkpoint and restart MPI application running on
</span><br>
<span class="quotelev1">&gt; multiple hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Raj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11673.php">chih lee: "[OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11671.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
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
