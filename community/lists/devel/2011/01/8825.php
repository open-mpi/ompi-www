<?
$subject_val = "[OMPI devel] RFC: VM launch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 12:45:17 2011" -->
<!-- isoreceived="20110103174517" -->
<!-- sent="Mon, 3 Jan 2011 10:45:09 -0700" -->
<!-- isosent="20110103174509" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: VM launch" -->
<!-- id="F6E213FF-853F-49F3-A763-927E41273FBF_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: VM launch<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 12:45:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8826.php">Jeff Squyres: "Re: [OMPI devel] async thread in openib BTL"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8824.php">George Bosilca: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: convert orte to start by launching a virtual machine across all allocated nodes
<br>
<p>WHY: support topologically-aware mapping methods
<br>
<p>WHEN: sometime over the next couple of months
<br>
<p>*******************************************************
<br>
Several of us (including Jeff, Terry, Josh, and Ralph) are working to create topologically-aware mapping modules. This includes modules that correctly map processes to cores/sockets, perhaps take into account NIC proximity and switch connectivity, etc.
<br>
<p>In order to make this work, the rmaps components in mpirun need to know the local topology of the nodes in the allocation. We currently obtain that info from the orted's as each orted samples the local topology via the opal sysinfo framework and then reports it back to mpirun. Unfortunately, we currently don't launch the orteds until -after- we map the job, so the topology info cannot be used in the mapping algorithm.
<br>
<p>This work will modify the launch procedure to:
<br>
<p>1. determine the final &quot;allocation&quot; using the current ras + hostfile + dash-host method.
<br>
<p>2. launch a daemon on every node in the final &quot;allocation&quot;
<br>
<p>3. each daemon discovers the local resources and reports that info back to mpirun
<br>
<p>4. mpirun maps the job against the daemons using the node resource info
<br>
<p>5. mpirun sends the launch msg to all daemons.
<br>
<p>6. the daemons launch the job -and- provide a global topology map to all procs for their subsequent use
<br>
<p>Note the significant change here: in the current procedure, we map the job on the nodes-to-be-used and then only launch daemons on nodes that have application procs on them. If the app then calls comm_spawn, we launch any additional daemons as required.
<br>
<p>Under this revised procedure, we might launch daemons on nodes that are not used by the initial job. If the app then calls comm_spawn, no additional daemons will be required as we already have daemons on all available nodes. This simplifies comm_spawn, but precludes the ability of an app to dynamically discover and add nodes to the &quot;allocation&quot;. There has been sporadic interest in such a feature, but nothing concrete.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8826.php">Jeff Squyres: "Re: [OMPI devel] async thread in openib BTL"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8824.php">George Bosilca: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
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
