<?
$subject_val = "[OMPI devel] Process mapping and affinity on the devel trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 11 00:14:42 2011" -->
<!-- isoreceived="20111211051442" -->
<!-- sent="Sat, 10 Dec 2011 22:14:30 -0700" -->
<!-- isosent="20111211051430" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Process mapping and affinity on the devel trunk" -->
<!-- id="267CEC87-F74A-441D-8337-9E6A1489FF5B_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Process mapping and affinity on the devel trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-11 00:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10061.php">Mike Dubman: "[OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Previous message:</strong> <a href="10059.php">Kenneth Lloyd: "Re: [OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>If you are using the developer's trunk or nightly tarball, or are interested in new mapping and binding options that will be included in the next feature series (1.7), then please read on. If not, then please ignore.
<br>
<p>People have raised the question of &quot;the trunk isn't binding processes any more&quot; a couple of times recently. OMPI's mapping, ranking, and binding options underwent a major change on the developer's trunk a few weeks ago. This was done to provide a greater range of options for process placement and binding. Although this was mentioned on the devel mailing list awhile ago, I thought a general message might be in order, especially for those users out there who are working with the trunk.
<br>
<p>Most importantly, under the new system, opal_paffinity_alone (and its pseudonym, mpi_paffinity_alone) was disabled - it no longer does anything. I have added a warning so that any setting of that parameter will warn you of this situation. This is more than likely the reason why you are not seeing processes bound.
<br>
<p>That option has been replaced by the --bind-to &lt;foo&gt; option, where &lt;foo&gt; can be none, hardware thread (hwthread), core, L1 cache (l1cache), L2 cache (l2cache), L3 cache (l3cache), socket, or numa region. This can also be set as an MCA parameter &quot;hwloc_base_binding_policy&quot;. There are two allowed qualifiers to the binding option:
<br>
<p>* if-supported - binding will be done if the system supports it. If the system does not support it, the application will execute unbound without issuing a warning - otherwise, an error message will be emitted and the execution aborted.
<br>
<p>* overload-allowed - if the binding results in more processes than cpus being bound to a resource (e.g., if 4 processes are bound to a socket that only has 2 cpus), then execution will be terminated with an error unless this qualifier is provided.
<br>
<p><p>Mapping was also expanded to support mapping by all the same locations via the --map-by &lt;foo&gt; option, plus two additional locations: slot (default) and node. The option is also available as MCA parameter &quot;rmaps_base_mapping_policy&quot;. The mapping option has three qualifiers:
<br>
<p>* span - treat all allocated nodes as if they were a single node - i.e., map across all specified resources before looping around and placing the next layer of processes on them. The default is to loop across all resources on each node until that node is completely filled before moving to the next node, so the &quot;span&quot; qualifier acts to balance the load across the allocation.
<br>
<p>* oversubscribe - allow more processes than allocated slots to be mapped onto a node. This is the default for user-specified allocations (i.e., by hostfile or -host).
<br>
<p>* nooversubscribe - error out if more processes than allocated slots are mapped onto a node. This is the default for resource managed allocations (e.g., specified by SLURM or MOAB).
<br>
<p>Another mapper was also added to the system. The &quot;ppr&quot; mapper takes a string argument detailing the number of processes to be placed on each resource, with the supported resources again including all those specified above. For example, a string of &quot;4:node,2:socket,1:core&quot; would tell the mapper to place one process on every core in the allocation, with a maximum of 2 on each socket and 4 on each node.
<br>
<p><p>Assigning process ranks has a corresponding --rank-by &lt;foo&gt; option, with all the same values for &lt;foo&gt; as found for mapping (including the use of &quot;slot&quot; as the default). This option is available thru the MCA parameter &quot;rmaps_base_ranking_policy&quot;. The ranking option has two qualifiers:
<br>
<p>* span - similar to the mapping qualifier, this causes the ranks to be assigned across all specified resources as if they were a single node
<br>
<p>* fill - assign ranks sequentially to all processes on the given resource before moving to the next one, filling all such resources on each node before moving to the next.
<br>
<p><p>Please note that several convenience options were retained for backward compatibility:
<br>
<p>*  --pernode, --npernode N, --npersocket N: the npersocket option now binds the processes to their mapped socket unless another binding option was specified
<br>
<p>*  --bind-to-core,  --bind-to-socket
<br>
<p>* --bynode, --byslot
<br>
<p><p>All three options (mapping, ranking, binding) can be used in any combination. Thus, you can assign a mapping pattern, pick any option for assigning ranks, and pick any option for binding. For example, you could map-by socket, rank-by core, and bind-to numa. As a result, there are a very large number of ways to arrange your application.
<br>
<p>I realize all this flexibility can be confusing and a little overwhelming. I am working to provide more documentation on the OMPI wiki site, but it isn't done yet. I will let people know when it is completed.
<br>
<p>HTH
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10061.php">Mike Dubman: "[OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Previous message:</strong> <a href="10059.php">Kenneth Lloyd: "Re: [OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers"</a>
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
