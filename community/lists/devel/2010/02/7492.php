<?
$subject_val = "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 11:55:09 2010" -->
<!-- isoreceived="20100225165509" -->
<!-- sent="Thu, 25 Feb 2010 17:54:59 +0100" -->
<!-- isosent="20100225165459" -->
<!-- name="Leonardo Fialho" -->
<!-- email="leonardofialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk" -->
<!-- id="E7B17362-F3E2-442D-80FB-3E53F2F2DB45_at_caos.uab.es" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5BBFED60-4D3D-44DE-9BEF-C2AB65F8B44F_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk<br>
<strong>From:</strong> Leonardo Fialho (<em>leonardofialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 11:54:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7493.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7491.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7491.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7498.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7498.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p><span class="quotelev2">&gt;&gt; Hum... I'm really afraid about this. I understand your choice since it is really a good solution for fail/stop/restart behaviour, but looking from the fail/recovery side, can you envision some alternative for the orted's reconfiguration on the fly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see why the current code prohibit such behavior. However, I don't see right now in this branch how the remaining daemons (and MPI processes) reconstruct the communication topology, but this is just a technicality.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, this is the code that UT will bring in. All our work focus on maintaining the exiting environment up and running instead of restarting everything. The orted will auto-heal (i.e reshape the underlying topology, recreate the connections, and so on), and the fault is propagated to the MPI layer who will take the decision on what to do next.
</span><br>
<p><p>When you say MPI layer, what exactly it means? The MPI interface or the network stack which supports the MPI communication (BTL, PML, etc.)?
<br>
<p>In my mind I see an orted failure (and all procs running under this deamon) as an environment failure which leads to job failures. Thus, to use a fail/recovery strategy, this daemons should be recovered (possibly relaunching and updating its procs/jobs structures) and after that all failed procs which are originally running under this daemon should be recovered also (maybe from a checkpoint, log optionally). Of course, in available, an spare orted could be used.
<br>
<p>Regarding to the MPI application, probably this 'environment reconfiguration' requires updates/reconfiguration/whatever on the communication stack which supports the MPI communication (BTL, PML, etc.).
<br>
<p>Are we thinking in the same direction or I have missed something in the way?
<br>
<p>Best regards,
<br>
Leonardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7493.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7491.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7491.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7498.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7498.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
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
