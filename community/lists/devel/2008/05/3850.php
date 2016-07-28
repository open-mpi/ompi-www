<?
$subject_val = "[OMPI devel] Outstanding 1.3 RTE features";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 10:24:26 2008" -->
<!-- isoreceived="20080507142426" -->
<!-- sent="Wed, 07 May 2008 08:24:11 -0600" -->
<!-- isosent="20080507142411" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Outstanding 1.3 RTE features" -->
<!-- id="C44717AB.5133%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Outstanding 1.3 RTE features<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 10:24:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3851.php">George Bosilca: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>Previous message:</strong> <a href="3849.php">Ralph Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3851.php">George Bosilca: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>Reply:</strong> <a href="3851.php">George Bosilca: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At the weekly telecon this week, we talked about when to branch the 1.3
<br>
release. I was asked if I could provide a list of where we stand relative to
<br>
promised functionality, at least as far as the RTE is concerned.
<br>
<p>Here is what I have compiled, in rough grouping by priority as expressed to
<br>
me:
<br>
<p><p>Promised, and needed
<br>
* topo mapper - automated mapping that puts ranks on network-nearest
<br>
&nbsp;&nbsp;neighbors. Required by several of LANL's more ambitious science
<br>
&nbsp;&nbsp;projects. I'll hopefully have a prototype in the system before
<br>
&nbsp;&nbsp;leaving on vacation.
<br>
<p>* xml output - required for Eclipse PTP support, desired by several
<br>
&nbsp;&nbsp;other tools. As per the telecon, there is no way we can get
<br>
&nbsp;&nbsp;something meaningful in the system before the proposed code
<br>
&nbsp;&nbsp;branch. However, this is needed by Oct for PTP - more lenient
<br>
&nbsp;&nbsp;timeframe from the other tools. What we -can- do is get the
<br>
&nbsp;&nbsp;output framework created before the branch, and then add the
<br>
&nbsp;&nbsp;xml component during the summer - but that requires a change
<br>
&nbsp;&nbsp;from our usual policy of no new components in sub-releases.
<br>
&nbsp;&nbsp;Requires new mpirun cmd line flag: -xml proposed.
<br>
<p>* upgrades to the sequential mapper - add ability to provide
<br>
&nbsp;&nbsp;relative sequencing for automated node allocations, claim
<br>
&nbsp;&nbsp;multiple slots for a rank. All fits within existing component.
<br>
<p>* local orted spawn - ability for remote orted to locally spawn
<br>
&nbsp;&nbsp;a coprocessor process. Required for hybrid RR where MPI procs
<br>
&nbsp;&nbsp;are needed on the coprocessor. Basic elements are in system,
<br>
&nbsp;&nbsp;but need to be completed now that launch system is stabilizing.
<br>
<p><p><p>Promised, could be delayed
<br>
* minimizing HNP sockets - everything we need is in the system.
<br>
&nbsp;&nbsp;What we need is just to pass to the orteds the nodemap in a
<br>
&nbsp;&nbsp;manner that they can decode and use during their startup so
<br>
&nbsp;&nbsp;they don't have to callback to the HNP. The scheme has been
<br>
&nbsp;&nbsp;designed - just needs to be implemented.
<br>
<p>* carto routed - uses the provided network topology to define
<br>
&nbsp;&nbsp;RML message routing, thus minimizing message hops during
<br>
&nbsp;&nbsp;startup.
<br>
<p>* direct/standalone launch - I believe the basic infrastructure
<br>
&nbsp;&nbsp;is now present, and indeed at least a couple of systems use
<br>
&nbsp;&nbsp;standalone launch methods now. Expanding that to additional
<br>
&nbsp;&nbsp;environments will take new PLM/ESS components, perhaps with
<br>
&nbsp;&nbsp;supporting utilities. Likely not appropriate for a sub-release.
<br>
<p>* static ports - basic infrastructure for procs and orteds to use
<br>
&nbsp;&nbsp;static OOB/TCP ports, but we don't currently take advantage of it.
<br>
&nbsp;&nbsp;This shouldn't require any API changes or major restructuring of
<br>
&nbsp;&nbsp;code as everything required is already there.
<br>
<p>* add-hostfile, add-host - these were included in the hostfile
<br>
&nbsp;&nbsp;wiki page description as they had been requested by several users.
<br>
&nbsp;&nbsp;If not included in 1.3, we need to update the wiki page and include
<br>
&nbsp;&nbsp;that fact in the FAQ section, at the least, since users were
<br>
&nbsp;&nbsp;told this would be supported.
<br>
<p><p><p>Wanted/Requested by various users or developers
<br>
* orted sm file - some of our improved behavior depends upon
<br>
&nbsp;&nbsp;exclusive use of nodes. We can remove that constraint by
<br>
&nbsp;&nbsp;letting jobs from different users that are colocated on a node
<br>
&nbsp;&nbsp;have knowledge of each other's existence. It has been
<br>
&nbsp;&nbsp;proposed that this be accomplished by creating a shared memory
<br>
&nbsp;&nbsp;area that the procs/orteds can access to find out who else
<br>
&nbsp;&nbsp;is on a node, what static ports they are using, etc. Design
<br>
&nbsp;&nbsp;still to be worked out.
<br>
<p>* usage reporting - add appropriate mpirun cmd line option to
<br>
&nbsp;&nbsp;request the orteds to report proc resource usage upon proc
<br>
&nbsp;&nbsp;termination. Pretty trivial to do. Requested by a few users
<br>
&nbsp;&nbsp;and a couple of tool developers.
<br>
<p>* tool query support - ability for a tool to interactively
<br>
&nbsp;&nbsp;query process/job status, usage stats, etc. The tool comm
<br>
&nbsp;&nbsp;library is partially implemented today, but doesn't support
<br>
&nbsp;&nbsp;the full range of requested functionality.
<br>
<p>* support for recursive mpirun calls - this has come up a few
<br>
&nbsp;&nbsp;times on the user list. Basically, it requires adding a new
<br>
&nbsp;&nbsp;mpirun cmd line option (--recursive) so mpirun can purge the
<br>
&nbsp;&nbsp;environment of mca params set during spawn before calling
<br>
&nbsp;&nbsp;orte_init.
<br>
<p><p><p>Future improvements
<br>
* reduced launch messaging - put launch information in orted's environment
<br>
&nbsp;&nbsp;(for systems that support it) so that orted can determine and launch
<br>
&nbsp;&nbsp;its local procs without communicating back to the HNP. We have a design
<br>
&nbsp;&nbsp;for this capability, but have purposely held off implementation until
<br>
&nbsp;&nbsp;after the 1.3 branch.
<br>
<p>* minimized mpirun memory footprint - we currently store a bunch of info
<br>
&nbsp;&nbsp;to support various debuggers, c/r, etc. This info isn't actually required
<br>
&nbsp;&nbsp;to be stored for operation of the MPI job and/or ORTE, so it could
<br>
&nbsp;&nbsp;either be released or simply not created. This plan calls for yet
<br>
&nbsp;&nbsp;another option(!) that would tell mpirun to minimize its memory
<br>
&nbsp;&nbsp;footprint. Design has been done - implementation has not started.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3851.php">George Bosilca: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>Previous message:</strong> <a href="3849.php">Ralph Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3851.php">George Bosilca: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>Reply:</strong> <a href="3851.php">George Bosilca: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
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
