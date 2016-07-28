<?
$subject_val = "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 00:28:35 2013" -->
<!-- isoreceived="20130322042835" -->
<!-- sent="Thu, 21 Mar 2013 21:28:28 -0700" -->
<!-- isosent="20130322042828" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment" -->
<!-- id="CBCDEB6E-E95E-4706-A29D-CECF73827515_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="77AEBEBA-C915-4EAD-97BB-616C204D1599_at_grs-sim.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-22 00:28:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12210.php">Sebastian Rinke: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Previous message:</strong> <a href="12208.php">Sebastian Rinke: "[OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>In reply to:</strong> <a href="12208.php">Sebastian Rinke: "[OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12210.php">Sebastian Rinke: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Reply:</strong> <a href="12210.php">Sebastian Rinke: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 21, 2013, at 1:35 PM, Sebastian Rinke &lt;s.rinke_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using OMPI 1.6.4 in a Torque-like environment.
</span><br>
<span class="quotelev1">&gt; However, since there are modifications in Torque that prevent OMPI from spawning processes the way it does with MPI_COMM_SPAWN, 
</span><br>
<p>That hasn't been true in the past - did you folks locally modify Torque to prevent it?
<br>
<p><span class="quotelev1">&gt; I want to circumvent Torque and use plain ssh only.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I configured --without-tm and can successfully run mpiexec with -hostfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I want to MPI_COMM_SPAWN using the hostfile info argument.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I start with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpiexec -np 1 -hostfile hostfile_all ./spawn_parent
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where hostfile_all is a superset of hostfile_spawn which is provided in the info argument to MPI_COMM_SPAWN.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The message I get is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p>I'll take a look in the morning when my cluster comes back up - sounds like we have a bug. However, note that there are no current plans for a 1.6.5 release, so I don't know how long it will be before any fix shows up.
<br>
<p>Meantime, I'll check the 1.7 series to ensure it works correctly there as well.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help on this is highly appreciated.
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sebastian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12210.php">Sebastian Rinke: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Previous message:</strong> <a href="12208.php">Sebastian Rinke: "[OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>In reply to:</strong> <a href="12208.php">Sebastian Rinke: "[OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12210.php">Sebastian Rinke: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Reply:</strong> <a href="12210.php">Sebastian Rinke: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
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
