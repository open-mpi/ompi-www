<?
$subject_val = "Re: [OMPI users] Any changes to rmaps in 1.10.2?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 18:32:24 2016" -->
<!-- isoreceived="20160128233224" -->
<!-- sent="Thu, 28 Jan 2016 15:32:20 -0800" -->
<!-- isosent="20160128233220" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any changes to rmaps in 1.10.2?" -->
<!-- id="CAMD57oeNEbX0nft7CFxF6+L+pMg-bfLJeaKmA4w-FZxshY884A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="OFD055654E.1CE1C0B9-ON49257F48.007F77D7-49257F48.00802843_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-28 18:32:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28400.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Previous message:</strong> <a href="28398.php">tmishima_at_[hidden]: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>In reply to:</strong> <a href="28398.php">tmishima_at_[hidden]: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28400.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, looking at the output, it appears that we are correctly detecting
<br>
the cpus. It looks instead like there is some other setting that is
<br>
overriding the discovery.
<br>
<p>Is your allocation setting a specific cpuset? Or are you allocating the
<br>
entire node?
<br>
<p><p>On Thu, Jan 28, 2016 at 3:19 PM, &lt;tmishima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ben and Ralph, just a very short comment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error message shows the hardware detection doesn't work well,
</span><br>
<span class="quotelev1">&gt; because it says the number of cpus is zero.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   #cpus-per-proc:  1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   number of cpus:  0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   map-by:          BYSOCKET:NOOVERSUBSCRIBE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There&#226;&#128;&#153;s no MCA parameters in my environment at all. Here&#226;&#128;&#153;s the contents
</span><br>
<span class="quotelev1">&gt; of openmpi-mca-params.conf:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpi_leave_pinned = 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_base_binding_policy = core
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; rmaps_base_mapping_policy = core
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_base_mem_alloc_policy = local_only
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; shmem_mmap_enable_nfs_warning = 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; pml = ^yalla
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mtl = ^mxm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mtl_mxm_np = 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; coll = ^fca
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; coll_fca_enable = 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; coll_fca_np = 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There are the same as for 1.10.0 (it&#226;&#128;&#153;s a symlink to the same file).
</span><br>
<span class="quotelev1">&gt; There&#226;&#128;&#153;s nothing there that I can see that would cause it to think that I
</span><br>
<span class="quotelev1">&gt; was asking for multiple CPUs per proc. Getting rid of all
</span><br>
<span class="quotelev2">&gt; &gt; of the &#226;&#128;&#152;policy&#226;&#128;&#153; options doesn&#226;&#128;&#153;t change the behaviour, except it then says
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18193] mca:rmaps:rr: mapping no-span by Socket for job [25745,1]
</span><br>
<span class="quotelev1">&gt; slots 32 num_procs 32
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18193] mca:rmaps:rr: found 2 Socket objects on node r51
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18193] mca:rmaps:rr: assigning proc to object 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; requested ones:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   #cpus-per-proc:  1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   number of cpus:  0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   map-by:          BYSOCKET:NOOVERSUBSCRIBE
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please specify a mapping level that has more cpus, or else let us
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; define a default mapping that will allow multiple cpus-per-proc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Forcing it to use ppr instead of rr with ppr:1:core:PE=1 using the MCA
</span><br>
<span class="quotelev1">&gt; parameters above gives this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320]     node: r51 daemon: 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320]     node: r58 daemon: 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320] mca:rmaps:base: computing vpids by slot for job [25616,1]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320] mca:rmaps:base: assigning rank 0 to node r51
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320] mca:rmaps:base: assigning rank 1 to node r51
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320] mca:rmaps:base: assigning rank 2 to node r58
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320] mca:rmaps:base: assigning rank 3 to node r58
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320] mca:rmaps: compute bindings for job [25616,1] with policy
</span><br>
<span class="quotelev1">&gt; CORE[4008]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320] [[25616,0],0] reset_usage: node r51 has 2 procs on it
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320] [[25616,0],0] reset_usage: ignoring proc [[25616,1],0]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320] [[25616,0],0] reset_usage: ignoring proc [[25616,1],1]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320] [[25616,0],0] bind_depth: 6 map_depth 2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r51:18320] mca:rmaps: bind downward for job [25616,1] with bindings CORE
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; While computing bindings, we found no available cpus on
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the following node:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Node:  r51
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please check your allocation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (actually, it&#226;&#128;&#153;s the regardless of if it&#226;&#128;&#153;s socket, core, or node). If I
</span><br>
<span class="quotelev1">&gt; get rid of the policy options as above, I get the original error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, if I do it outside of a PBS job (so no cgroup), it works as I
</span><br>
<span class="quotelev1">&gt; would expect. So have there been any changes in the handling of cpusets?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ben
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From:users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev1">&gt; Castain
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Friday, 29 January 2016 3:46 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Any changes to rmaps in 1.10.2?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm unaware of any change that would impact you here. For some reason,
</span><br>
<span class="quotelev1">&gt; mpirun believes you are requesting multiple cpus-per-proc, and that seems
</span><br>
<span class="quotelev1">&gt; to be the heart of the problem. Is there an MCA
</span><br>
<span class="quotelev2">&gt; &gt; parameter in your environment or default param file, perhaps?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jan 27, 2016 at 2:57 PM, Ben Menadue &lt;ben.menadue_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Were there any changes to rmaps in going to 1.10.2? An
</span><br>
<span class="quotelev1">&gt; otherwise-identical
</span><br>
<span class="quotelev2">&gt; &gt; setup that worked in 1.10.0 fails to launch in 1.10.2, complaining that
</span><br>
<span class="quotelev2">&gt; &gt; there's no CPUs available in a socket...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With 1.10.0:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ /apps/openmpi/1.10.0/bin/mpirun -np 2 -mca rmaps_base_verbose 1000
</span><br>
<span class="quotelev2">&gt; &gt; hostname
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: registering rmaps components
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt; resilient
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: component resilient register
</span><br>
<span class="quotelev2">&gt; &gt; function successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt; rank_file
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: component rank_file register
</span><br>
<span class="quotelev2">&gt; &gt; function successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: found loaded component staged
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: component staged has no
</span><br>
<span class="quotelev1">&gt; register
</span><br>
<span class="quotelev2">&gt; &gt; or open function
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: found loaded component ppr
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: component ppr register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: found loaded component seq
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: component seq register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev2">&gt; &gt; round_robin
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: component round_robin
</span><br>
<span class="quotelev1">&gt; register
</span><br>
<span class="quotelev2">&gt; &gt; function successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt; mindist
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_register: component mindist register
</span><br>
<span class="quotelev2">&gt; &gt; function successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] [[63529,0],0] rmaps:base set policy with core
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: opening rmaps components
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: found loaded component resilient
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: component resilient open function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: found loaded component rank_file
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: component rank_file open function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: found loaded component staged
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: component staged open function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: found loaded component ppr
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: component ppr open function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: found loaded component seq
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: component seq open function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; round_robin
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: component round_robin open
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: found loaded component mindist
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: components_open: component mindist open function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: checking available component resilient
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: Querying component [resilient]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: checking available component rank_file
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: Querying component [rank_file]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: checking available component staged
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: Querying component [staged]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: checking available component ppr
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: Querying component [ppr]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: checking available component seq
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: Querying component [seq]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: checking available component round_robin
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: Querying component [round_robin]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: checking available component mindist
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:select: Querying component [mindist]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] [[63529,0],0]: Final mapper priorities
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709]     Mapper: ppr Priority: 90
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709]     Mapper: seq Priority: 60
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709]     Mapper: resilient Priority: 40
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709]     Mapper: mindist Priority: 20
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709]     Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709]     Mapper: staged Priority: 5
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709]     Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps: mapping job [63529,1]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps: creating new map for job [63529,1]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps: nprocs 2
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps mapping given - using default
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:ppr: job [63529,1] not using ppr mapper
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:seq: job [63529,1] not using seq mapper
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:resilient: cannot perform initial map of job
</span><br>
<span class="quotelev1">&gt; [63529,1]
</span><br>
<span class="quotelev2">&gt; &gt; - no fault groups
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:mindist: job [63529,1] not using mindist mapper
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:rr: mapping job [63529,1]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709]     node: r47 daemon: 0
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709]     node: r57 daemon: 1
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709]     node: r58 daemon: 2
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709]     node: r59 daemon: 3
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:rr: mapping no-span by Core for job [63529,1] slots
</span><br>
<span class="quotelev1">&gt; 64
</span><br>
<span class="quotelev2">&gt; &gt; num_procs 2
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:rr: found 16 Core objects on node r47
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:rr: assigning proc to object 0
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:rr: assigning proc to object 1
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps: computing ranks by core for job [63529,1]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:rank_by: found 16 objects on node r47 with 2 procs
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:rank_by: assigned rank 0
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:rank_by: assigned rank 1
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:rank_by: found 16 objects on node r57 with 0 procs
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:rank_by: found 16 objects on node r58 with 0 procs
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps:rank_by: found 16 objects on node r59 with 0 procs
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps: compute bindings for job [63529,1] with policy
</span><br>
<span class="quotelev2">&gt; &gt; CORE[4008]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps: bindings for job [63529,1] - bind in place
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca:rmaps: bind in place for job [63529,1] with bindings CORE
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] [[63529,0],0] reset_usage: node r47 has 2 procs on it
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] [[63529,0],0] reset_usage: ignoring proc [[63529,1],0]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] [[63529,0],0] reset_usage: ignoring proc [[63529,1],1]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] BINDING PROC [[63529,1],0] TO Core NUMBER 0
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] [[63529,0],0] BOUND PROC [[63529,1],0] TO 0[Core:0] on node
</span><br>
<span class="quotelev1">&gt; r47
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] BINDING PROC [[63529,1],1] TO Core NUMBER 1
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] [[63529,0],0] BOUND PROC [[63529,1],1] TO 1[Core:1] on node
</span><br>
<span class="quotelev1">&gt; r47
</span><br>
<span class="quotelev2">&gt; &gt; r47
</span><br>
<span class="quotelev2">&gt; &gt; r47
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: component resilient closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: unloading component resilient
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: component rank_file closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: unloading component rank_file
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: component staged closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: unloading component staged
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: component ppr closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: unloading component ppr
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: component seq closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: unloading component seq
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: component round_robin closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: unloading component round_robin
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: component mindist closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18709] mca: base: close: unloading component mindist
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With 1.10.2:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ /apps/openmpi/1.10.2/bin/mpirun -np 2 -mca rmaps_base_verbose 1000
</span><br>
<span class="quotelev2">&gt; &gt; hostname
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: registering rmaps components
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt; resilient
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: component resilient register
</span><br>
<span class="quotelev2">&gt; &gt; function successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt; rank_file
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: component rank_file register
</span><br>
<span class="quotelev2">&gt; &gt; function successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: found loaded component staged
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: component staged has no
</span><br>
<span class="quotelev1">&gt; register
</span><br>
<span class="quotelev2">&gt; &gt; or open function
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: found loaded component ppr
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: component ppr register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: found loaded component seq
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: component seq register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev2">&gt; &gt; round_robin
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: component round_robin
</span><br>
<span class="quotelev1">&gt; register
</span><br>
<span class="quotelev2">&gt; &gt; function successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt; mindist
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_register: component mindist register
</span><br>
<span class="quotelev2">&gt; &gt; function successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] [[63505,0],0] rmaps:base set policy with core
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: opening rmaps components
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: found loaded component resilient
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: component resilient open function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: found loaded component rank_file
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: component rank_file open function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: found loaded component staged
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: component staged open function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: found loaded component ppr
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: component ppr open function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: found loaded component seq
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: component seq open function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; round_robin
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: component round_robin open
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: found loaded component mindist
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: components_open: component mindist open function
</span><br>
<span class="quotelev2">&gt; &gt; successful
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: checking available component resilient
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: Querying component [resilient]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: checking available component rank_file
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: Querying component [rank_file]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: checking available component staged
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: Querying component [staged]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: checking available component ppr
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: Querying component [ppr]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: checking available component seq
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: Querying component [seq]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: checking available component round_robin
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: Querying component [round_robin]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: checking available component mindist
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:select: Querying component [mindist]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] [[63505,0],0]: Final mapper priorities
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733]     Mapper: ppr Priority: 90
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733]     Mapper: seq Priority: 60
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733]     Mapper: resilient Priority: 40
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733]     Mapper: mindist Priority: 20
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733]     Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733]     Mapper: staged Priority: 5
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733]     Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps: mapping job [63505,1]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps: creating new map for job [63505,1]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps: nprocs 2
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps mapping given - using default
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:ppr: job [63505,1] not using ppr mapper
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:seq: job [63505,1] not using seq mapper
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:resilient: cannot perform initial map of job
</span><br>
<span class="quotelev1">&gt; [63505,1]
</span><br>
<span class="quotelev2">&gt; &gt; - no fault groups
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:mindist: job [63505,1] not using mindist mapper
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:rr: mapping job [63505,1]
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733]     node: r47 daemon: 0
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733]     node: r57 daemon: 1
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733]     node: r58 daemon: 2
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733]     node: r59 daemon: 3
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:rr: mapping no-span by Core for job [63505,1] slots
</span><br>
<span class="quotelev1">&gt; 64
</span><br>
<span class="quotelev2">&gt; &gt; num_procs 2
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:rr: found 16 Core objects on node r47
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca:rmaps:rr: assigning proc to object 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev2">&gt; &gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev2">&gt; &gt; requested ones:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   #cpus-per-proc:  1
</span><br>
<span class="quotelev2">&gt; &gt;   number of cpus:  0
</span><br>
<span class="quotelev2">&gt; &gt;   map-by:          BYCORE:NOOVERSUBSCRIBE
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please specify a mapping level that has more cpus, or else let us
</span><br>
<span class="quotelev2">&gt; &gt; define a default mapping that will allow multiple cpus-per-proc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: component resilient closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: unloading component resilient
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: component rank_file closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: unloading component rank_file
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: component staged closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: unloading component staged
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: component ppr closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: unloading component ppr
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: component seq closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: unloading component seq
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: component round_robin closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: unloading component round_robin
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: component mindist closed
</span><br>
<span class="quotelev2">&gt; &gt; [r47:18733] mca: base: close: unloading component mindist
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There are both in the same PBS Pro job. And the cpuset definitely has all
</span><br>
<span class="quotelev2">&gt; &gt; cores available:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ cat /cgroup/cpuset/pbspro/4347646.r-man2/cpuset.cpus
</span><br>
<span class="quotelev2">&gt; &gt; 0-15
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there something here I'm missing?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; Ben
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28393.php">http://www.open-mpi.org/community/lists/users/2016/01/28393.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/usersLink">http://www.open-mpi.org/mailman/listinfo.cgi/usersLink</a> to
</span><br>
<span class="quotelev1">&gt; this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28397.php">http://www.open-mpi.org/community/lists/users/2016/01/28397.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28398.php">http://www.open-mpi.org/community/lists/users/2016/01/28398.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28399/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28400.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Previous message:</strong> <a href="28398.php">tmishima_at_[hidden]: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>In reply to:</strong> <a href="28398.php">tmishima_at_[hidden]: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28400.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
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
