<?
$subject_val = "Re: [OMPI users] Any changes to rmaps in 1.10.2?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 15:57:33 2016" -->
<!-- isoreceived="20160128205733" -->
<!-- sent="Fri, 29 Jan 2016 07:57:27 +1100" -->
<!-- isosent="20160128205727" -->
<!-- name="Ben Menadue" -->
<!-- email="ben.menadue_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any changes to rmaps in 1.10.2?" -->
<!-- id="003201d15a0e$7f82de20$7e889a60$_at_nci.org.au" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57ofJmBBtdiPah0KbLsUdpKaREGbeXdo8ZH+5rPsfJbNJgg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ben Menadue (<em>ben.menadue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-28 15:57:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28398.php">tmishima_at_[hidden]: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Previous message:</strong> <a href="28396.php">Ralph Castain: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>In reply to:</strong> <a href="28396.php">Ralph Castain: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28398.php">tmishima_at_[hidden]: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Reply:</strong> <a href="28398.php">tmishima_at_[hidden]: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph,
<br>
<p>&nbsp;
<br>
<p>There&#226;&#128;&#153;s no MCA parameters in my environment at all. Here&#226;&#128;&#153;s the contents of openmpi-mca-params.conf:
<br>
<p>&nbsp;
<br>
<p>mpi_leave_pinned = 0
<br>
<p>hwloc_base_binding_policy = core
<br>
<p>rmaps_base_mapping_policy = core
<br>
<p>hwloc_base_mem_alloc_policy = local_only
<br>
<p>shmem_mmap_enable_nfs_warning = 0
<br>
<p>pml = ^yalla
<br>
<p>mtl = ^mxm
<br>
<p>mtl_mxm_np = 0
<br>
<p>coll = ^fca
<br>
<p>coll_fca_enable = 1
<br>
<p>coll_fca_np = 0
<br>
<p>&nbsp;
<br>
<p>There are the same as for 1.10.0 (it&#226;&#128;&#153;s a symlink to the same file). There&#226;&#128;&#153;s nothing there that I can see that would cause it to think that I was asking for multiple CPUs per proc. Getting rid of all of the &#226;&#128;&#152;policy&#226;&#128;&#153; options doesn&#226;&#128;&#153;t change the behaviour, except it then says
<br>
<p>&nbsp;
<br>
<p>[r51:18193] mca:rmaps:rr: mapping no-span by Socket for job [25745,1] slots 32 num_procs 32
<br>
<p>[r51:18193] mca:rmaps:rr: found 2 Socket objects on node r51
<br>
<p>[r51:18193] mca:rmaps:rr: assigning proc to object 0
<br>
<p>--------------------------------------------------------------------------
<br>
<p>A request for multiple cpus-per-proc was given, but a directive
<br>
<p>was also give to map to an object level that has less cpus than
<br>
<p>requested ones:
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;#cpus-per-proc:  1
<br>
<p>&nbsp;&nbsp;number of cpus:  0
<br>
<p>&nbsp;&nbsp;map-by:          BYSOCKET:NOOVERSUBSCRIBE
<br>
<p>&nbsp;
<br>
<p>Please specify a mapping level that has more cpus, or else let us
<br>
<p>define a default mapping that will allow multiple cpus-per-proc.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>&nbsp;
<br>
<p>Forcing it to use ppr instead of rr with ppr:1:core:PE=1 using the MCA parameters above gives this:
<br>
<p>&nbsp;
<br>
<p>[r51:18320] AVAILABLE NODES FOR MAPPING:
<br>
<p>[r51:18320]     node: r51 daemon: 0
<br>
<p>[r51:18320]     node: r58 daemon: 1
<br>
<p>[r51:18320] mca:rmaps:base: computing vpids by slot for job [25616,1]
<br>
<p>[r51:18320] mca:rmaps:base: assigning rank 0 to node r51
<br>
<p>[r51:18320] mca:rmaps:base: assigning rank 1 to node r51
<br>
<p>[r51:18320] mca:rmaps:base: assigning rank 2 to node r58
<br>
<p>[r51:18320] mca:rmaps:base: assigning rank 3 to node r58
<br>
<p>[r51:18320] mca:rmaps: compute bindings for job [25616,1] with policy CORE[4008]
<br>
<p>[r51:18320] [[25616,0],0] reset_usage: node r51 has 2 procs on it
<br>
<p>[r51:18320] [[25616,0],0] reset_usage: ignoring proc [[25616,1],0]
<br>
<p>[r51:18320] [[25616,0],0] reset_usage: ignoring proc [[25616,1],1]
<br>
<p>[r51:18320] [[25616,0],0] bind_depth: 6 map_depth 2
<br>
<p>[r51:18320] mca:rmaps: bind downward for job [25616,1] with bindings CORE
<br>
<p>--------------------------------------------------------------------------
<br>
<p>While computing bindings, we found no available cpus on
<br>
<p>the following node:
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;Node:  r51
<br>
<p>&nbsp;
<br>
<p>Please check your allocation.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>&nbsp;
<br>
<p>(actually, it&#226;&#128;&#153;s the regardless of if it&#226;&#128;&#153;s socket, core, or node). If I get rid of the policy options as above, I get the original error.
<br>
<p>&nbsp;
<br>
<p>However, if I do it outside of a PBS job (so no cgroup), it works as I would expect. So have there been any changes in the handling of cpusets?
<br>
<p>&nbsp;
<br>
<p>Cheers,
<br>
<p>Ben
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Friday, 29 January 2016 3:46 AM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Any changes to rmaps in 1.10.2?
<br>
<p>&nbsp;
<br>
<p>I'm unaware of any change that would impact you here. For some reason, mpirun believes you are requesting multiple cpus-per-proc, and that seems to be the heart of the problem. Is there an MCA parameter in your environment or default param file, perhaps?
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>On Wed, Jan 27, 2016 at 2:57 PM, Ben Menadue &lt;ben.menadue_at_[hidden] &lt;mailto:ben.menadue_at_[hidden]&gt; &gt; wrote:
<br>
<p>Hi,
<br>
<p>Were there any changes to rmaps in going to 1.10.2? An otherwise-identical
<br>
setup that worked in 1.10.0 fails to launch in 1.10.2, complaining that
<br>
there's no CPUs available in a socket...
<br>
<p>With 1.10.0:
<br>
<p>$ /apps/openmpi/1.10.0/bin/mpirun -np 2 -mca rmaps_base_verbose 1000
<br>
hostname
<br>
[r47:18709] mca: base: components_register: registering rmaps components
<br>
[r47:18709] mca: base: components_register: found loaded component resilient
<br>
[r47:18709] mca: base: components_register: component resilient register
<br>
function successful
<br>
[r47:18709] mca: base: components_register: found loaded component rank_file
<br>
[r47:18709] mca: base: components_register: component rank_file register
<br>
function successful
<br>
[r47:18709] mca: base: components_register: found loaded component staged
<br>
[r47:18709] mca: base: components_register: component staged has no register
<br>
or open function
<br>
[r47:18709] mca: base: components_register: found loaded component ppr
<br>
[r47:18709] mca: base: components_register: component ppr register function
<br>
successful
<br>
[r47:18709] mca: base: components_register: found loaded component seq
<br>
[r47:18709] mca: base: components_register: component seq register function
<br>
successful
<br>
[r47:18709] mca: base: components_register: found loaded component
<br>
round_robin
<br>
[r47:18709] mca: base: components_register: component round_robin register
<br>
function successful
<br>
[r47:18709] mca: base: components_register: found loaded component mindist
<br>
[r47:18709] mca: base: components_register: component mindist register
<br>
function successful
<br>
[r47:18709] [[63529,0],0] rmaps:base set policy with core
<br>
[r47:18709] mca: base: components_open: opening rmaps components
<br>
[r47:18709] mca: base: components_open: found loaded component resilient
<br>
[r47:18709] mca: base: components_open: component resilient open function
<br>
successful
<br>
[r47:18709] mca: base: components_open: found loaded component rank_file
<br>
[r47:18709] mca: base: components_open: component rank_file open function
<br>
successful
<br>
[r47:18709] mca: base: components_open: found loaded component staged
<br>
[r47:18709] mca: base: components_open: component staged open function
<br>
successful
<br>
[r47:18709] mca: base: components_open: found loaded component ppr
<br>
[r47:18709] mca: base: components_open: component ppr open function
<br>
successful
<br>
[r47:18709] mca: base: components_open: found loaded component seq
<br>
[r47:18709] mca: base: components_open: component seq open function
<br>
successful
<br>
[r47:18709] mca: base: components_open: found loaded component round_robin
<br>
[r47:18709] mca: base: components_open: component round_robin open function
<br>
successful
<br>
[r47:18709] mca: base: components_open: found loaded component mindist
<br>
[r47:18709] mca: base: components_open: component mindist open function
<br>
successful
<br>
[r47:18709] mca:rmaps:select: checking available component resilient
<br>
[r47:18709] mca:rmaps:select: Querying component [resilient]
<br>
[r47:18709] mca:rmaps:select: checking available component rank_file
<br>
[r47:18709] mca:rmaps:select: Querying component [rank_file]
<br>
[r47:18709] mca:rmaps:select: checking available component staged
<br>
[r47:18709] mca:rmaps:select: Querying component [staged]
<br>
[r47:18709] mca:rmaps:select: checking available component ppr
<br>
[r47:18709] mca:rmaps:select: Querying component [ppr]
<br>
[r47:18709] mca:rmaps:select: checking available component seq
<br>
[r47:18709] mca:rmaps:select: Querying component [seq]
<br>
[r47:18709] mca:rmaps:select: checking available component round_robin
<br>
[r47:18709] mca:rmaps:select: Querying component [round_robin]
<br>
[r47:18709] mca:rmaps:select: checking available component mindist
<br>
[r47:18709] mca:rmaps:select: Querying component [mindist]
<br>
[r47:18709] [[63529,0],0]: Final mapper priorities
<br>
[r47:18709]     Mapper: ppr Priority: 90
<br>
[r47:18709]     Mapper: seq Priority: 60
<br>
[r47:18709]     Mapper: resilient Priority: 40
<br>
[r47:18709]     Mapper: mindist Priority: 20
<br>
[r47:18709]     Mapper: round_robin Priority: 10
<br>
[r47:18709]     Mapper: staged Priority: 5
<br>
[r47:18709]     Mapper: rank_file Priority: 0
<br>
[r47:18709] mca:rmaps: mapping job [63529,1]
<br>
[r47:18709] mca:rmaps: creating new map for job [63529,1]
<br>
[r47:18709] mca:rmaps: nprocs 2
<br>
[r47:18709] mca:rmaps mapping given - using default
<br>
[r47:18709] mca:rmaps:ppr: job [63529,1] not using ppr mapper
<br>
[r47:18709] mca:rmaps:seq: job [63529,1] not using seq mapper
<br>
[r47:18709] mca:rmaps:resilient: cannot perform initial map of job [63529,1]
<br>
- no fault groups
<br>
[r47:18709] mca:rmaps:mindist: job [63529,1] not using mindist mapper
<br>
[r47:18709] mca:rmaps:rr: mapping job [63529,1]
<br>
[r47:18709] AVAILABLE NODES FOR MAPPING:
<br>
[r47:18709]     node: r47 daemon: 0
<br>
[r47:18709]     node: r57 daemon: 1
<br>
[r47:18709]     node: r58 daemon: 2
<br>
[r47:18709]     node: r59 daemon: 3
<br>
[r47:18709] mca:rmaps:rr: mapping no-span by Core for job [63529,1] slots 64
<br>
num_procs 2
<br>
[r47:18709] mca:rmaps:rr: found 16 Core objects on node r47
<br>
[r47:18709] mca:rmaps:rr: assigning proc to object 0
<br>
[r47:18709] mca:rmaps:rr: assigning proc to object 1
<br>
[r47:18709] mca:rmaps: computing ranks by core for job [63529,1]
<br>
[r47:18709] mca:rmaps:rank_by: found 16 objects on node r47 with 2 procs
<br>
[r47:18709] mca:rmaps:rank_by: assigned rank 0
<br>
[r47:18709] mca:rmaps:rank_by: assigned rank 1
<br>
[r47:18709] mca:rmaps:rank_by: found 16 objects on node r57 with 0 procs
<br>
[r47:18709] mca:rmaps:rank_by: found 16 objects on node r58 with 0 procs
<br>
[r47:18709] mca:rmaps:rank_by: found 16 objects on node r59 with 0 procs
<br>
[r47:18709] mca:rmaps: compute bindings for job [63529,1] with policy
<br>
CORE[4008]
<br>
[r47:18709] mca:rmaps: bindings for job [63529,1] - bind in place
<br>
[r47:18709] mca:rmaps: bind in place for job [63529,1] with bindings CORE
<br>
[r47:18709] [[63529,0],0] reset_usage: node r47 has 2 procs on it
<br>
[r47:18709] [[63529,0],0] reset_usage: ignoring proc [[63529,1],0]
<br>
[r47:18709] [[63529,0],0] reset_usage: ignoring proc [[63529,1],1]
<br>
[r47:18709] BINDING PROC [[63529,1],0] TO Core NUMBER 0
<br>
[r47:18709] [[63529,0],0] BOUND PROC [[63529,1],0] TO 0[Core:0] on node r47
<br>
[r47:18709] BINDING PROC [[63529,1],1] TO Core NUMBER 1
<br>
[r47:18709] [[63529,0],0] BOUND PROC [[63529,1],1] TO 1[Core:1] on node r47
<br>
r47
<br>
r47
<br>
[r47:18709] mca: base: close: component resilient closed
<br>
[r47:18709] mca: base: close: unloading component resilient
<br>
[r47:18709] mca: base: close: component rank_file closed
<br>
[r47:18709] mca: base: close: unloading component rank_file
<br>
[r47:18709] mca: base: close: component staged closed
<br>
[r47:18709] mca: base: close: unloading component staged
<br>
[r47:18709] mca: base: close: component ppr closed
<br>
[r47:18709] mca: base: close: unloading component ppr
<br>
[r47:18709] mca: base: close: component seq closed
<br>
[r47:18709] mca: base: close: unloading component seq
<br>
[r47:18709] mca: base: close: component round_robin closed
<br>
[r47:18709] mca: base: close: unloading component round_robin
<br>
[r47:18709] mca: base: close: component mindist closed
<br>
[r47:18709] mca: base: close: unloading component mindist
<br>
<p>With 1.10.2:
<br>
<p>$ /apps/openmpi/1.10.2/bin/mpirun -np 2 -mca rmaps_base_verbose 1000
<br>
hostname
<br>
[r47:18733] mca: base: components_register: registering rmaps components
<br>
[r47:18733] mca: base: components_register: found loaded component resilient
<br>
[r47:18733] mca: base: components_register: component resilient register
<br>
function successful
<br>
[r47:18733] mca: base: components_register: found loaded component rank_file
<br>
[r47:18733] mca: base: components_register: component rank_file register
<br>
function successful
<br>
[r47:18733] mca: base: components_register: found loaded component staged
<br>
[r47:18733] mca: base: components_register: component staged has no register
<br>
or open function
<br>
[r47:18733] mca: base: components_register: found loaded component ppr
<br>
[r47:18733] mca: base: components_register: component ppr register function
<br>
successful
<br>
[r47:18733] mca: base: components_register: found loaded component seq
<br>
[r47:18733] mca: base: components_register: component seq register function
<br>
successful
<br>
[r47:18733] mca: base: components_register: found loaded component
<br>
round_robin
<br>
[r47:18733] mca: base: components_register: component round_robin register
<br>
function successful
<br>
[r47:18733] mca: base: components_register: found loaded component mindist
<br>
[r47:18733] mca: base: components_register: component mindist register
<br>
function successful
<br>
[r47:18733] [[63505,0],0] rmaps:base set policy with core
<br>
[r47:18733] mca: base: components_open: opening rmaps components
<br>
[r47:18733] mca: base: components_open: found loaded component resilient
<br>
[r47:18733] mca: base: components_open: component resilient open function
<br>
successful
<br>
[r47:18733] mca: base: components_open: found loaded component rank_file
<br>
[r47:18733] mca: base: components_open: component rank_file open function
<br>
successful
<br>
[r47:18733] mca: base: components_open: found loaded component staged
<br>
[r47:18733] mca: base: components_open: component staged open function
<br>
successful
<br>
[r47:18733] mca: base: components_open: found loaded component ppr
<br>
[r47:18733] mca: base: components_open: component ppr open function
<br>
successful
<br>
[r47:18733] mca: base: components_open: found loaded component seq
<br>
[r47:18733] mca: base: components_open: component seq open function
<br>
successful
<br>
[r47:18733] mca: base: components_open: found loaded component round_robin
<br>
[r47:18733] mca: base: components_open: component round_robin open function
<br>
successful
<br>
[r47:18733] mca: base: components_open: found loaded component mindist
<br>
[r47:18733] mca: base: components_open: component mindist open function
<br>
successful
<br>
[r47:18733] mca:rmaps:select: checking available component resilient
<br>
[r47:18733] mca:rmaps:select: Querying component [resilient]
<br>
[r47:18733] mca:rmaps:select: checking available component rank_file
<br>
[r47:18733] mca:rmaps:select: Querying component [rank_file]
<br>
[r47:18733] mca:rmaps:select: checking available component staged
<br>
[r47:18733] mca:rmaps:select: Querying component [staged]
<br>
[r47:18733] mca:rmaps:select: checking available component ppr
<br>
[r47:18733] mca:rmaps:select: Querying component [ppr]
<br>
[r47:18733] mca:rmaps:select: checking available component seq
<br>
[r47:18733] mca:rmaps:select: Querying component [seq]
<br>
[r47:18733] mca:rmaps:select: checking available component round_robin
<br>
[r47:18733] mca:rmaps:select: Querying component [round_robin]
<br>
[r47:18733] mca:rmaps:select: checking available component mindist
<br>
[r47:18733] mca:rmaps:select: Querying component [mindist]
<br>
[r47:18733] [[63505,0],0]: Final mapper priorities
<br>
[r47:18733]     Mapper: ppr Priority: 90
<br>
[r47:18733]     Mapper: seq Priority: 60
<br>
[r47:18733]     Mapper: resilient Priority: 40
<br>
[r47:18733]     Mapper: mindist Priority: 20
<br>
[r47:18733]     Mapper: round_robin Priority: 10
<br>
[r47:18733]     Mapper: staged Priority: 5
<br>
[r47:18733]     Mapper: rank_file Priority: 0
<br>
[r47:18733] mca:rmaps: mapping job [63505,1]
<br>
[r47:18733] mca:rmaps: creating new map for job [63505,1]
<br>
[r47:18733] mca:rmaps: nprocs 2
<br>
[r47:18733] mca:rmaps mapping given - using default
<br>
[r47:18733] mca:rmaps:ppr: job [63505,1] not using ppr mapper
<br>
[r47:18733] mca:rmaps:seq: job [63505,1] not using seq mapper
<br>
[r47:18733] mca:rmaps:resilient: cannot perform initial map of job [63505,1]
<br>
- no fault groups
<br>
[r47:18733] mca:rmaps:mindist: job [63505,1] not using mindist mapper
<br>
[r47:18733] mca:rmaps:rr: mapping job [63505,1]
<br>
[r47:18733] AVAILABLE NODES FOR MAPPING:
<br>
[r47:18733]     node: r47 daemon: 0
<br>
[r47:18733]     node: r57 daemon: 1
<br>
[r47:18733]     node: r58 daemon: 2
<br>
[r47:18733]     node: r59 daemon: 3
<br>
[r47:18733] mca:rmaps:rr: mapping no-span by Core for job [63505,1] slots 64
<br>
num_procs 2
<br>
[r47:18733] mca:rmaps:rr: found 16 Core objects on node r47
<br>
[r47:18733] mca:rmaps:rr: assigning proc to object 0
<br>
--------------------------------------------------------------------------
<br>
A request for multiple cpus-per-proc was given, but a directive
<br>
was also give to map to an object level that has less cpus than
<br>
requested ones:
<br>
<p>&nbsp;&nbsp;#cpus-per-proc:  1
<br>
&nbsp;&nbsp;number of cpus:  0
<br>
&nbsp;&nbsp;map-by:          BYCORE:NOOVERSUBSCRIBE
<br>
<p>Please specify a mapping level that has more cpus, or else let us
<br>
define a default mapping that will allow multiple cpus-per-proc.
<br>
--------------------------------------------------------------------------
<br>
[r47:18733] mca: base: close: component resilient closed
<br>
[r47:18733] mca: base: close: unloading component resilient
<br>
[r47:18733] mca: base: close: component rank_file closed
<br>
[r47:18733] mca: base: close: unloading component rank_file
<br>
[r47:18733] mca: base: close: component staged closed
<br>
[r47:18733] mca: base: close: unloading component staged
<br>
[r47:18733] mca: base: close: component ppr closed
<br>
[r47:18733] mca: base: close: unloading component ppr
<br>
[r47:18733] mca: base: close: component seq closed
<br>
[r47:18733] mca: base: close: unloading component seq
<br>
[r47:18733] mca: base: close: component round_robin closed
<br>
[r47:18733] mca: base: close: unloading component round_robin
<br>
[r47:18733] mca: base: close: component mindist closed
<br>
[r47:18733] mca: base: close: unloading component mindist
<br>
<p>There are both in the same PBS Pro job. And the cpuset definitely has all
<br>
cores available:
<br>
<p>$ cat /cgroup/cpuset/pbspro/4347646.r-man2/cpuset.cpus
<br>
0-15
<br>
<p>Is there something here I'm missing?
<br>
<p>Cheers,
<br>
Ben
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28393.php">http://www.open-mpi.org/community/lists/users/2016/01/28393.php</a>
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28397/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28398.php">tmishima_at_[hidden]: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Previous message:</strong> <a href="28396.php">Ralph Castain: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>In reply to:</strong> <a href="28396.php">Ralph Castain: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28398.php">tmishima_at_[hidden]: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Reply:</strong> <a href="28398.php">tmishima_at_[hidden]: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
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
