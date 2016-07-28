<?
$subject_val = "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 12:46:24 2010" -->
<!-- isoreceived="20100225174624" -->
<!-- sent="Thu, 25 Feb 2010 09:46:19 -0800" -->
<!-- isosent="20100225174619" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk" -->
<!-- id="6CC62C23-E606-4F3D-A4DA-7818C2B3A370_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 12:46:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7495.php">Ashley Pittman: "Re: [OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7493.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<li><strong>In reply to:</strong> <a href="7491.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7499.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7499.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7501.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2010, at 8:32 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2010, at 11:16 , Leonardo Fialho wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hum... I'm really afraid about this. I understand your choice since it is really a good solution for fail/stop/restart behaviour, but looking from the fail/recovery side, can you envision some alternative for the orted's reconfiguration on the fly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Leonardo,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see why the current code prohibit such behavior. However, I don't see right now in this branch how the remaining daemons (and MPI processes) reconstruct the communication topology, but this is just a technicality.
</span><br>
<p>If you use the 'cm' routed component then the reconstruction of the ORTE level communication works for all but the loss of the HNP. Neither Ralph or I have looked at supporting other routed components at this time. I know your group at UTK has some done work in this area so we wanted to tackle additional support for more scalable routed components as a second step, hopefully with collaboration from your group.
<br>
<p>As far as the MPI layer, I can't say much at this point on how that works. This RFC only handles recovery of the ORTE layer, MPI layer recovery is a second step and involves much longer discussions. I have a solution for a certain type of MPI application, and it sounds like you have something that can be applied more generally.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, this is the code that UT will bring in. All our work focus on maintaining the exiting environment up and running instead of restarting everything. The orted will auto-heal (i.e reshape the underlying topology, recreate the connections, and so on), and the fault is propagated to the MPI layer who will take the decision on what to do next.
</span><br>
<p>Per my previous suggestion, would it be useful to chat on the phone early next week about our various strategies?
<br>
<p>-- Josh
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="7495.php">Ashley Pittman: "Re: [OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7493.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<li><strong>In reply to:</strong> <a href="7491.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7499.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7499.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7501.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
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
