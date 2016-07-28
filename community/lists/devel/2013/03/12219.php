<?
$subject_val = "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 23 21:29:15 2013" -->
<!-- isoreceived="20130324012915" -->
<!-- sent="Sun, 24 Mar 2013 02:29:10 +0100" -->
<!-- isosent="20130324012910" -->
<!-- name="Sebastian Rinke" -->
<!-- email="s.rinke_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment" -->
<!-- id="CF10C0AC-2C4D-497F-AC11-1A25272AA6F1_at_grs-sim.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A27E4FFA-18FC-41DA-A4B5-A934FE188D33_at_grs-sim.de" -->
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
<strong>From:</strong> Sebastian Rinke (<em>s.rinke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-23 21:29:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12220.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Previous message:</strong> <a href="12218.php">Barrett, Brian W: "[OMPI devel] Linux memory hooks testing"</a>
<li><strong>In reply to:</strong> <a href="12210.php">Sebastian Rinke: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12220.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Reply:</strong> <a href="12220.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found the bug, it was me.
<br>
<p>After all I somehow missed to actually provide the MPI_Info argument to the spawn call.
<br>
Instead I provided MPI_INFO_NULL.
<br>
<p>My apologies for this mistake.
<br>
<p>Thank you for your efforts.
<br>
Sebastian 
<br>
<p>On Mar 22, 2013, at 1:10 PM, Sebastian Rinke wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the quick response.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using OMPI 1.6.4 in a Torque-like environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, since there are modifications in Torque that prevent OMPI from spawning processes the way it does with MPI_COMM_SPAWN, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That hasn't been true in the past - did you folks locally modify Torque to prevent it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Plain Torque still supports the TM-based spawning as before.
</span><br>
<span class="quotelev1">&gt; The Problem is that the RM on the system I'm using is based on Torque with modifications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to circumvent Torque and use plain ssh only.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I configured --without-tm and can successfully run mpiexec with -hostfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now I want to MPI_COMM_SPAWN using the hostfile info argument.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I start with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpiexec -np 1 -hostfile hostfile_all ./spawn_parent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where hostfile_all is a superset of hostfile_spawn which is provided in the info argument to MPI_COMM_SPAWN.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The message I get is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll take a look in the morning when my cluster comes back up - sounds like we have a bug. However, note that there are no current plans for a 1.6.5 release, so I don't know how long it will be before any fix shows up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Meantime, I'll check the 1.7 series to ensure it works correctly there as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When it works with 1.7 this would already be fine for me.
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12220.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Previous message:</strong> <a href="12218.php">Barrett, Brian W: "[OMPI devel] Linux memory hooks testing"</a>
<li><strong>In reply to:</strong> <a href="12210.php">Sebastian Rinke: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12220.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Reply:</strong> <a href="12220.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
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
