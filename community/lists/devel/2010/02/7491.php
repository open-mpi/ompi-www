<?
$subject_val = "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 11:32:10 2010" -->
<!-- isoreceived="20100225163210" -->
<!-- sent="Thu, 25 Feb 2010 11:32:00 -0500" -->
<!-- isosent="20100225163200" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk" -->
<!-- id="5BBFED60-4D3D-44DE-9BEF-C2AB65F8B44F_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="80DE0605-9BAA-463E-A1D9-A9F5CBC42B48_at_caos.uab.es" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 11:32:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7492.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7490.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7490.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7492.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7492.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7494.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2010, at 11:16 , Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Hum... I'm really afraid about this. I understand your choice since it is really a good solution for fail/stop/restart behaviour, but looking from the fail/recovery side, can you envision some alternative for the orted's reconfiguration on the fly?
</span><br>
<p>Leonardo,
<br>
<p>I don't see why the current code prohibit such behavior. However, I don't see right now in this branch how the remaining daemons (and MPI processes) reconstruct the communication topology, but this is just a technicality.
<br>
<p>Anyway, this is the code that UT will bring in. All our work focus on maintaining the exiting environment up and running instead of restarting everything. The orted will auto-heal (i.e reshape the underlying topology, recreate the connections, and so on), and the fault is propagated to the MPI layer who will take the decision on what to do next.
<br>
<p>&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7492.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7490.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7490.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7492.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7492.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7494.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
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
