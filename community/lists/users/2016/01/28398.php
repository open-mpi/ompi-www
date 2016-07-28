<?
$subject_val = "Re: [OMPI users] Any changes to rmaps in 1.10.2?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 18:19:17 2016" -->
<!-- isoreceived="20160128231917" -->
<!-- sent="Fri, 29 Jan 2016 08:19:02 +0900" -->
<!-- isosent="20160128231902" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any changes to rmaps in 1.10.2?" -->
<!-- id="OFD055654E.1CE1C0B9-ON49257F48.007F77D7-49257F48.00802843_at_jcity.maeda.co.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="003201d15a0e$7f82de20$7e889a60$_at_nci.org.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any changes to rmaps in 1.10.2?<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Any%20changes%20to%20rmaps%20in%201.10.2?"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2016-01-28 18:19:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28399.php">Ralph Castain: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Previous message:</strong> <a href="28397.php">Ben Menadue: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>In reply to:</strong> <a href="28397.php">Ben Menadue: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28399.php">Ralph Castain: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Reply:</strong> <a href="28399.php">Ralph Castain: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ben and Ralph, just a very short comment.
<br>

<br>
The error message shows the hardware detection doesn't work well,
<br>
because it says the number of cpus is zero.
<br>

<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; #cpus-per-proc:&#194;&#160; 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; number of cpus:&#194;&#160; 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; map-by:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; BYSOCKET:NOOVERSUBSCRIBE
</span><br>

<br>
Regards,
<br>
Tetsuya
<br>

<br>
<span class="quotelev1">&gt; Thanks Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There&#226;&#128;&#153;s no MCA parameters in my environment at all. Here&#226;&#128;&#153;s the contents
</span><br>
of openmpi-mca-params.conf:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_base_binding_policy = core
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rmaps_base_mapping_policy = core
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_base_mem_alloc_policy = local_only
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shmem_mmap_enable_nfs_warning = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pml = ^yalla
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl = ^mxm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_np = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; coll = ^fca
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; coll_fca_enable = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; coll_fca_np = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are the same as for 1.10.0 (it&#226;&#128;&#153;s a symlink to the same file).
</span><br>
There&#226;&#128;&#153;s nothing there that I can see that would cause it to think that I
<br>
was asking for multiple CPUs per proc. Getting rid of all
<br>
<span class="quotelev1">&gt; of the &#226;&#128;&#152;policy&#226;&#128;&#153; options doesn&#226;&#128;&#153;t change the behaviour, except it then says
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18193] mca:rmaps:rr: mapping no-span by Socket for job [25745,1]
</span><br>
slots 32 num_procs 32
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18193] mca:rmaps:rr: found 2 Socket objects on node r51
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18193] mca:rmaps:rr: assigning proc to object 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; requested ones:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; #cpus-per-proc:&#194;&#160; 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; number of cpus:&#194;&#160; 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; map-by:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; BYSOCKET:NOOVERSUBSCRIBE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please specify a mapping level that has more cpus, or else let us
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; define a default mapping that will allow multiple cpus-per-proc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Forcing it to use ppr instead of rr with ppr:1:core:PE=1 using the MCA
</span><br>
parameters above gives this:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320]&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; node: r51 daemon: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320]&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; node: r58 daemon: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320] mca:rmaps:base: computing vpids by slot for job [25616,1]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320] mca:rmaps:base: assigning rank 0 to node r51
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320] mca:rmaps:base: assigning rank 1 to node r51
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320] mca:rmaps:base: assigning rank 2 to node r58
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320] mca:rmaps:base: assigning rank 3 to node r58
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320] mca:rmaps: compute bindings for job [25616,1] with policy
</span><br>
CORE[4008]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320] [[25616,0],0] reset_usage: node r51 has 2 procs on it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320] [[25616,0],0] reset_usage: ignoring proc [[25616,1],0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320] [[25616,0],0] reset_usage: ignoring proc [[25616,1],1]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320] [[25616,0],0] bind_depth: 6 map_depth 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r51:18320] mca:rmaps: bind downward for job [25616,1] with bindings CORE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While computing bindings, we found no available cpus on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the following node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; Node:&#194;&#160; r51
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please check your allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (actually, it&#226;&#128;&#153;s the regardless of if it&#226;&#128;&#153;s socket, core, or node). If I
</span><br>
get rid of the policy options as above, I get the original error.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if I do it outside of a PBS job (so no cgroup), it works as I
</span><br>
would expect. So have there been any changes in the handling of cpusets?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From:users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Friday, 29 January 2016 3:46 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Any changes to rmaps in 1.10.2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm unaware of any change that would impact you here. For some reason,
</span><br>
mpirun believes you are requesting multiple cpus-per-proc, and that seems
<br>
to be the heart of the problem. Is there an MCA
<br>
<span class="quotelev1">&gt; parameter in your environment or default param file, perhaps?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 27, 2016 at 2:57 PM, Ben Menadue &lt;ben.menadue_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Were there any changes to rmaps in going to 1.10.2? An
</span><br>
otherwise-identical
<br>
<span class="quotelev1">&gt; setup that worked in 1.10.0 fails to launch in 1.10.2, complaining that
</span><br>
<span class="quotelev1">&gt; there's no CPUs available in a socket...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With 1.10.0:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /apps/openmpi/1.10.0/bin/mpirun -np 2 -mca rmaps_base_verbose 1000
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: registering rmaps components
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component
</span><br>
resilient
<br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component resilient register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component
</span><br>
rank_file
<br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component rank_file register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component staged
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component staged has no
</span><br>
register
<br>
<span class="quotelev1">&gt; or open function
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component ppr register
</span><br>
function
<br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component seq
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component seq register
</span><br>
function
<br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt; round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component round_robin
</span><br>
register
<br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component
</span><br>
mindist
<br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component mindist register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0] rmaps:base set policy with core
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: opening rmaps components
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component resilient open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component rank_file open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component staged
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component staged open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component ppr open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component seq
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component seq open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component
</span><br>
round_robin
<br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component round_robin open
</span><br>
function
<br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component mindist
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component mindist open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [resilient]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [rank_file]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component staged
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [staged]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [ppr]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component seq
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [seq]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [round_robin]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component mindist
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [mindist]
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0]: Final mapper priorities
</span><br>
<span class="quotelev1">&gt; [r47:18709]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: ppr Priority: 90
</span><br>
<span class="quotelev1">&gt; [r47:18709]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: seq Priority: 60
</span><br>
<span class="quotelev1">&gt; [r47:18709]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: resilient Priority: 40
</span><br>
<span class="quotelev1">&gt; [r47:18709]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: mindist Priority: 20
</span><br>
<span class="quotelev1">&gt; [r47:18709]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev1">&gt; [r47:18709]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: staged Priority: 5
</span><br>
<span class="quotelev1">&gt; [r47:18709]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: mapping job [63529,1]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: creating new map for job [63529,1]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: nprocs 2
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps mapping given - using default
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:ppr: job [63529,1] not using ppr mapper
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:seq: job [63529,1] not using seq mapper
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:resilient: cannot perform initial map of job
</span><br>
[63529,1]
<br>
<span class="quotelev1">&gt; - no fault groups
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:mindist: job [63529,1] not using mindist mapper
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rr: mapping job [63529,1]
</span><br>
<span class="quotelev1">&gt; [r47:18709] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev1">&gt; [r47:18709]&#194;&#160; &#194;&#160; &#194;&#160;node: r47 daemon: 0
</span><br>
<span class="quotelev1">&gt; [r47:18709]&#194;&#160; &#194;&#160; &#194;&#160;node: r57 daemon: 1
</span><br>
<span class="quotelev1">&gt; [r47:18709]&#194;&#160; &#194;&#160; &#194;&#160;node: r58 daemon: 2
</span><br>
<span class="quotelev1">&gt; [r47:18709]&#194;&#160; &#194;&#160; &#194;&#160;node: r59 daemon: 3
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rr: mapping no-span by Core for job [63529,1] slots
</span><br>
64
<br>
<span class="quotelev1">&gt; num_procs 2
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rr: found 16 Core objects on node r47
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rr: assigning proc to object 0
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rr: assigning proc to object 1
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: computing ranks by core for job [63529,1]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rank_by: found 16 objects on node r47 with 2 procs
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rank_by: assigned rank 0
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rank_by: assigned rank 1
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rank_by: found 16 objects on node r57 with 0 procs
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rank_by: found 16 objects on node r58 with 0 procs
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rank_by: found 16 objects on node r59 with 0 procs
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: compute bindings for job [63529,1] with policy
</span><br>
<span class="quotelev1">&gt; CORE[4008]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: bindings for job [63529,1] - bind in place
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: bind in place for job [63529,1] with bindings CORE
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0] reset_usage: node r47 has 2 procs on it
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0] reset_usage: ignoring proc [[63529,1],0]
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0] reset_usage: ignoring proc [[63529,1],1]
</span><br>
<span class="quotelev1">&gt; [r47:18709] BINDING PROC [[63529,1],0] TO Core NUMBER 0
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0] BOUND PROC [[63529,1],0] TO 0[Core:0] on node
</span><br>
r47
<br>
<span class="quotelev1">&gt; [r47:18709] BINDING PROC [[63529,1],1] TO Core NUMBER 1
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0] BOUND PROC [[63529,1],1] TO 1[Core:1] on node
</span><br>
r47
<br>
<span class="quotelev1">&gt; r47
</span><br>
<span class="quotelev1">&gt; r47
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component resilient closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component rank_file closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component staged closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component staged
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component ppr closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component seq closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component seq
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component round_robin closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component mindist closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component mindist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With 1.10.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /apps/openmpi/1.10.2/bin/mpirun -np 2 -mca rmaps_base_verbose 1000
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: registering rmaps components
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component
</span><br>
resilient
<br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component resilient register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component
</span><br>
rank_file
<br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component rank_file register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component staged
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component staged has no
</span><br>
register
<br>
<span class="quotelev1">&gt; or open function
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component ppr register
</span><br>
function
<br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component seq
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component seq register
</span><br>
function
<br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt; round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component round_robin
</span><br>
register
<br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component
</span><br>
mindist
<br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component mindist register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] [[63505,0],0] rmaps:base set policy with core
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: opening rmaps components
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component resilient open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component rank_file open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component staged
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component staged open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component ppr open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component seq
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component seq open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component
</span><br>
round_robin
<br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component round_robin open
</span><br>
function
<br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component mindist
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component mindist open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [resilient]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [rank_file]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component staged
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [staged]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [ppr]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component seq
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [seq]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [round_robin]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component mindist
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [mindist]
</span><br>
<span class="quotelev1">&gt; [r47:18733] [[63505,0],0]: Final mapper priorities
</span><br>
<span class="quotelev1">&gt; [r47:18733]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: ppr Priority: 90
</span><br>
<span class="quotelev1">&gt; [r47:18733]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: seq Priority: 60
</span><br>
<span class="quotelev1">&gt; [r47:18733]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: resilient Priority: 40
</span><br>
<span class="quotelev1">&gt; [r47:18733]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: mindist Priority: 20
</span><br>
<span class="quotelev1">&gt; [r47:18733]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev1">&gt; [r47:18733]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: staged Priority: 5
</span><br>
<span class="quotelev1">&gt; [r47:18733]&#194;&#160; &#194;&#160; &#194;&#160;Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps: mapping job [63505,1]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps: creating new map for job [63505,1]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps: nprocs 2
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps mapping given - using default
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:ppr: job [63505,1] not using ppr mapper
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:seq: job [63505,1] not using seq mapper
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:resilient: cannot perform initial map of job
</span><br>
[63505,1]
<br>
<span class="quotelev1">&gt; - no fault groups
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:mindist: job [63505,1] not using mindist mapper
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:rr: mapping job [63505,1]
</span><br>
<span class="quotelev1">&gt; [r47:18733] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev1">&gt; [r47:18733]&#194;&#160; &#194;&#160; &#194;&#160;node: r47 daemon: 0
</span><br>
<span class="quotelev1">&gt; [r47:18733]&#194;&#160; &#194;&#160; &#194;&#160;node: r57 daemon: 1
</span><br>
<span class="quotelev1">&gt; [r47:18733]&#194;&#160; &#194;&#160; &#194;&#160;node: r58 daemon: 2
</span><br>
<span class="quotelev1">&gt; [r47:18733]&#194;&#160; &#194;&#160; &#194;&#160;node: r59 daemon: 3
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:rr: mapping no-span by Core for job [63505,1] slots
</span><br>
64
<br>
<span class="quotelev1">&gt; num_procs 2
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:rr: found 16 Core objects on node r47
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:rr: assigning proc to object 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev1">&gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev1">&gt; requested ones:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; #cpus-per-proc:&#194;&#160; 1
</span><br>
<span class="quotelev1">&gt; &#194;&#160; number of cpus:&#194;&#160; 0
</span><br>
<span class="quotelev1">&gt; &#194;&#160; map-by:&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; BYCORE:NOOVERSUBSCRIBE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please specify a mapping level that has more cpus, or else let us
</span><br>
<span class="quotelev1">&gt; define a default mapping that will allow multiple cpus-per-proc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component resilient closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component rank_file closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component staged closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component staged
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component ppr closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component seq closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component seq
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component round_robin closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component mindist closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component mindist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are both in the same PBS Pro job. And the cpuset definitely has all
</span><br>
<span class="quotelev1">&gt; cores available:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat /cgroup/cpuset/pbspro/4347646.r-man2/cpuset.cpus
</span><br>
<span class="quotelev1">&gt; 0-15
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there something here I'm missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2016/01/28393.php">http://www.open-mpi.org/community/lists/users/2016/01/28393.php</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/usersLink">http://www.open-mpi.org/mailman/listinfo.cgi/usersLink</a> to
</span><br>
this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28397.php">http://www.open-mpi.org/community/lists/users/2016/01/28397.php</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28399.php">Ralph Castain: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Previous message:</strong> <a href="28397.php">Ben Menadue: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>In reply to:</strong> <a href="28397.php">Ben Menadue: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28399.php">Ralph Castain: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Reply:</strong> <a href="28399.php">Ralph Castain: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
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
