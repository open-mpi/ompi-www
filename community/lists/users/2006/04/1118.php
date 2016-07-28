<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 21 03:26:38 2006" -->
<!-- isoreceived="20060421072638" -->
<!-- sent="Fri, 21 Apr 2006 09:26:32 +0200" -->
<!-- isosent="20060421072632" -->
<!-- name="Alexander Spiegel" -->
<!-- email="spiegel_at_[hidden]" -->
<!-- subject="[OMPI users] SIGBUS on sparc / 64bit" -->
<!-- id="44488928.2000600_at_rz.rwth-aachen.de" -->
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
<strong>From:</strong> Alexander Spiegel (<em>spiegel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-21 03:26:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1119.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] users Digest, Vol 261, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="1117.php">Brian Barrett: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1129.php">Brian Barrett: "Re: [OMPI users] SIGBUS on sparc / 64bit"</a>
<li><strong>Reply:</strong> <a href="1129.php">Brian Barrett: "Re: [OMPI users] SIGBUS on sparc / 64bit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to compile OpenMPI 1.0.2 on a Sparc/Solaris machine
<br>
with Sun Studio 11 compilers in 64 bit addressing mode.
<br>
<p>The options I've used to configure OpenMPI are:
<br>
<p>CC           = cc
<br>
CXX          = CC
<br>
F77          = f90
<br>
FC           = f90
<br>
CFLAGS       = -g  -xarch=v9b
<br>
CXXFLAGS     = -g  -xarch=v9b
<br>
FFLAGS       = -I. -dalign -xarch=v9b
<br>
FCFLAGS      = -I. -dalign -xarch=v9b
<br>
<p><p>Configuring and compiling OpenMPI works fine.
<br>
<p>But then a simple MPI program crashes with SIGBUS somewhere
<br>
in MPI_Init with a message:
<br>
<p><p>Signal:10 info.si_errno:0(Error 0) si_code:1(BUS_ADRALN)
<br>
Failing at addr:ffffffff56400aac
<br>
*** End of error message ***
<br>
<p><p>Here is the output of a debugging session with dbx:
<br>
<p>$ dbx a.out
<br>
=&gt; run
<br>
Reading mca_paffinity_solaris.so
<br>
Reading mca_ns_proxy.so
<br>
Reading mca_ns_replica.so
<br>
Reading mca_rml_oob.so
<br>
Reading mca_oob_tcp.so
<br>
Reading mca_gpr_null.so
<br>
Reading mca_gpr_proxy.so
<br>
Reading mca_gpr_replica.so
<br>
Reading mca_sds_env.so
<br>
Reading mca_sds_pipe.so
<br>
Reading mca_sds_seed.so
<br>
Reading mca_sds_singleton.so
<br>
Reading mca_sds_slurm.so
<br>
Reading mca_rmgr_proxy.so
<br>
Reading mca_rmgr_urm.so
<br>
Reading mca_rds_hostfile.so
<br>
Reading mca_rds_resfile.so
<br>
Reading mca_ras_dash_host.so
<br>
Reading mca_ras_hostfile.so
<br>
Reading mca_ras_localhost.so
<br>
Reading mca_ras_slurm.so
<br>
Reading mca_rmaps_round_robin.so
<br>
Reading mca_pls_daemon.so
<br>
Reading mca_pls_fork.so
<br>
Reading mca_pls_proxy.so
<br>
Reading mca_pls_rsh.so
<br>
Reading mca_pls_slurm.so
<br>
Reading mca_iof_proxy.so
<br>
Reading mca_iof_svc.so
<br>
Reading mca_allocator_basic.so
<br>
Reading mca_allocator_bucket.so
<br>
Reading mca_rcache_rb.so
<br>
Reading mca_mpool_sm.so
<br>
Reading libmca_common_sm.so.0.0.0
<br>
Reading mca_pml_ob1.so
<br>
Reading mca_pml_teg.so
<br>
Reading mca_bml_r2.so
<br>
Reading mca_btl_self.so
<br>
Reading mca_btl_sm.so
<br>
Reading mca_btl_tcp.so
<br>
Reading mca_ptl_self.so
<br>
Reading mca_ptl_sm.so
<br>
Reading mca_ptl_tcp.so
<br>
Reading mca_coll_basic.so
<br>
Reading mca_coll_self.so
<br>
Reading mca_coll_sm.so
<br>
<p>t_at_1 (l_at_1) signal BUS (invalid address alignment) in 
<br>
mca_allocator_bucket_alloc_align at line 206 in file 
<br>
&quot;allocator_bucket_alloc.c&quot;
<br>
&nbsp;&nbsp;&nbsp;206       chunk = segment_header-&gt;first_chunk = first_chunk;
<br>
<p>=&gt; where
<br>
current thread: t_at_1
<br>
=&gt;[1] mca_allocator_bucket_alloc_align(mem = 0x10014e6b0, size = 96U, 
<br>
alignment = 128U, registration = (nil)), line 206 in 
<br>
&quot;allocator_bucket_alloc.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[2] mca_allocator_bucket_alloc_wrapper(allocator = 0x10014e6b0, size 
<br>
= 96U, align = 128U, registration = (nil)), line 102 in &quot;allocator_bucket.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[3] mca_mpool_sm_alloc(mpool = 0x10017deb0, size = 96U, align = 128U, 
<br>
flags = 0, registration = (nil)), line 62 in &quot;mpool_sm_module.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[4] mca_btl_sm_add_procs_same_base_addr(btl = 0xffffffff77815548, 
<br>
nprocs = 1U, procs = 0x100170df0, peers = 0x100170dd0, reachability = 
<br>
0xffffffff7fffd768), line 472 in &quot;btl_sm.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[5] mca_bml_r2_add_procs(nprocs = 1U, procs = 0x100170df0, 
<br>
bml_endpoints = 0x100170e10, reachable = 0xffffffff7fffd768), line 218 
<br>
in &quot;bml_r2.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[6] mca_pml_ob1_add_procs(procs = 0x100170d90, nprocs = 1U), line 130 
<br>
in &quot;pml_ob1.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[7] ompi_mpi_init(argc = 1, argv = 0xffffffff7fffdc78, requested = 0, 
<br>
provided = 0xffffffff7fffd994), line 445 in &quot;ompi_mpi_init.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[8] PMPI_Init(argc = 0xffffffff7fffdbbc, argv = 0xffffffff7fffdbb0), 
<br>
line 71 in &quot;pinit.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[9] main(argc = 1, argv = 0xffffffff7fffdc78), line 25 in &quot;mpi_rank.c&quot;
<br>
<p>=&gt; print segment_header
<br>
segment_header = 0xffffffff56000aac
<br>
=&gt; print sizeof( segment_header-&gt;first_chunk)
<br>
sizeof(segment_header-&gt;first_chunk) = 8
<br>
=&gt;  print &amp;segment_header-&gt;first_chunk
<br>
&amp;segment_header-&gt;first_chunk = 0xffffffff56000aac
<br>
=&gt; print  mem_options-&gt;get_mem_fn
<br>
mem_options-&gt;get_mem_fn = 0xffffffff78303428 = 
<br>
&amp;mca_common_sm_mmap_seg_alloc()
<br>
<p><p>BTW: there is no any problems with 32-bit installation
<br>
of OpenMPI on Sparc.
<br>
<p><p>Regards
<br>
Alex Spiegel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1119.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] users Digest, Vol 261, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="1117.php">Brian Barrett: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1129.php">Brian Barrett: "Re: [OMPI users] SIGBUS on sparc / 64bit"</a>
<li><strong>Reply:</strong> <a href="1129.php">Brian Barrett: "Re: [OMPI users] SIGBUS on sparc / 64bit"</a>
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
