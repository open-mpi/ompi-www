<?
$subject_val = "[OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 21 16:35:55 2013" -->
<!-- isoreceived="20130321203555" -->
<!-- sent="Thu, 21 Mar 2013 21:35:50 +0100" -->
<!-- isosent="20130321203550" -->
<!-- name="Sebastian Rinke" -->
<!-- email="s.rinke_at_[hidden]" -->
<!-- subject="[OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment" -->
<!-- id="77AEBEBA-C915-4EAD-97BB-616C204D1599_at_grs-sim.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment<br>
<strong>From:</strong> Sebastian Rinke (<em>s.rinke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-21 16:35:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12209.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Previous message:</strong> <a href="12207.php">Nathan Hjelm: "[OMPI devel] RFC: MCA system revamp phase 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12209.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Reply:</strong> <a href="12209.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I'm using OMPI 1.6.4 in a Torque-like environment.
<br>
However, since there are modifications in Torque that prevent OMPI from spawning processes the way it does with MPI_COMM_SPAWN, 
<br>
I want to circumvent Torque and use plain ssh only.
<br>
<p>So, I configured --without-tm and can successfully run mpiexec with -hostfile.
<br>
<p>Now I want to MPI_COMM_SPAWN using the hostfile info argument.
<br>
<p>I start with
<br>
<p>$ mpiexec -np 1 -hostfile hostfile_all ./spawn_parent
<br>
<p>where hostfile_all is a superset of hostfile_spawn which is provided in the info argument to MPI_COMM_SPAWN.
<br>
<p>The message I get is:
<br>
<p>--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
<p>Any help on this is highly appreciated.
<br>
Thank you.
<br>
<p>Sebastian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12209.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Previous message:</strong> <a href="12207.php">Nathan Hjelm: "[OMPI devel] RFC: MCA system revamp phase 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12209.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Reply:</strong> <a href="12209.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
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
