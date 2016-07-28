<?
$subject_val = "[OMPI devel] 1.3 test failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 19:01:45 2008" -->
<!-- isoreceived="20081030230145" -->
<!-- sent="Thu, 30 Oct 2008 17:01:29 -0600" -->
<!-- isosent="20081030230129" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.3 test failures" -->
<!-- id="24C0D570-F56E-4457-89B1-A925408F3837_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.3 test failures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 19:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4833.php">Patrick Geoffray: "[OMPI devel] mallopt and registration cache"</a>
<li><strong>Previous message:</strong> <a href="4831.php">Leonardo Fialho: "Re: [OMPI devel] OOB-TCP Retries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4835.php">Jeff Squyres: "Re: [OMPI devel] 1.3 test failures"</a>
<li><strong>Reply:</strong> <a href="4835.php">Jeff Squyres: "Re: [OMPI devel] 1.3 test failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>We aren't running a full MTT here (which is why I'm reporting these  
<br>
results to the list instead of into the MTT database), but we are  
<br>
running a subset of tests on the 1.3 beta and hitting a consistent set  
<br>
of errors involving five tests. For reference, we see all of these  
<br>
tests pass on 1.2.6, but fail in the identical way on 1.2.8 - so it  
<br>
appears that something systematic may have entered the system and  
<br>
gotten into the 1.2 series as well.
<br>
<p>The tests are:
<br>
MPI_Pack_user_type
<br>
MPI_Type_hindexed_blklen
<br>
MPI_Type_vector_stride
<br>
MPI_Cart_get_c
<br>
MPI_Graph_neighbors_c
<br>
<p>The tests are running under slurm on RHEL5 with 16-cores of Opteron  
<br>
processors on each node plus IB. The below results are with 40 nodes  
<br>
at 16ppn.
<br>
<p>Any thoughts would be appreciated. Meantime, we are trying different  
<br>
ppn to see if that has an impact.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>Here is what we see:
<br>
<p><span class="quotelev2">&gt;&gt; MPITEST error (585): 1 errors in buffer (17, 5) len 1024 commsize 214
</span><br>
<span class="quotelev2">&gt;&gt; commtype -14 extent 64 root 194 MPITEST error (591): Received buffer
</span><br>
<span class="quotelev2">&gt;&gt; overflow, Expected buffer[65536]: -197, Actual buffer[65536]: 59
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST
</span><br>
<span class="quotelev2">&gt;&gt; error (591): 1 errors in buffer (17, 5) len 1024 commsize 214
</span><br>
<span class="quotelev2">&gt;&gt; commtype -14
</span><br>
<span class="quotelev2">&gt;&gt; extent 64 root 196
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST_results: MPI_Pack_user_type 60480 tests FAILED (of 21076704)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST error (597): Received buffer overflow, Expected
</span><br>
<span class="quotelev2">&gt;&gt; buffer[16384]: -199,
</span><br>
<span class="quotelev2">&gt;&gt; Actual buffer[16384]: 57 MPITEST error (597): 1 errors in buffer
</span><br>
<span class="quotelev2">&gt;&gt; (17, 5) len
</span><br>
<span class="quotelev2">&gt;&gt; 16 commsize 214 commtype
</span><br>
<span class="quotelev2">&gt;&gt; -14 extent 64 root 198
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST error (585): Received buffer overflow, Expected
</span><br>
<span class="quotelev2">&gt;&gt; buffer[16384]: -195,
</span><br>
<span class="quotelev2">&gt;&gt; Actual buffer[16384]: 61 MPITEST error (585): 1 errors in buffer
</span><br>
<span class="quotelev2">&gt;&gt; (17, 5) len
</span><br>
<span class="quotelev2">&gt;&gt; 16 commsize 214 commtype
</span><br>
<span class="quotelev2">&gt;&gt; -14 extent 64 root 194
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST_results: MPI_Type_hindexed_blklen 60480 tests FAILED (of
</span><br>
<span class="quotelev2">&gt;&gt; 21076704)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST error (597): Received buffer overflow, Expected
</span><br>
<span class="quotelev2">&gt;&gt; buffer[65536]: -199,
</span><br>
<span class="quotelev2">&gt;&gt; Actual buffer[65536]: 57 MPITEST error (597): 1 errors in buffer
</span><br>
<span class="quotelev2">&gt;&gt; (17, 5) len
</span><br>
<span class="quotelev2">&gt;&gt; 512 commsize 214 commtype -14 extent 64 root 198 MPITEST error (615):
</span><br>
<span class="quotelev2">&gt;&gt; Received buffer overflow, Expected buffer[65536]: -205, Actual
</span><br>
<span class="quotelev2">&gt;&gt; buffer[65536]: 51 MPITEST error (615): 1 errors in buffer (17, 5)
</span><br>
<span class="quotelev2">&gt;&gt; len 512
</span><br>
<span class="quotelev2">&gt;&gt; commsize 214 commtype -14 extent 64 root 204
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST_results: MPI_Type_vector_stride 60480 tests FAILED (of
</span><br>
<span class="quotelev2">&gt;&gt; 21076704)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [lob097:32556] *** Process received signal *** mpirun noticed that
</span><br>
<span class="quotelev2">&gt;&gt; job rank
</span><br>
<span class="quotelev2">&gt;&gt; 0 with PID 32556 on node lob097 exited on signal 11 (Segmentation
</span><br>
<span class="quotelev2">&gt;&gt; fault).
</span><br>
<span class="quotelev2">&gt;&gt; 639 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [MPI_Cart_get_c] Error 139
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST fatal error (568): MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST fatal
</span><br>
<span class="quotelev2">&gt;&gt; error (572): MPI_ERR_COMM: invalid communicator MPITEST fatal error
</span><br>
<span class="quotelev2">&gt;&gt; (574):
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ERR_COMM: invalid communicator mpirun noticed that job rank 37
</span><br>
<span class="quotelev2">&gt;&gt; with PID
</span><br>
<span class="quotelev2">&gt;&gt; 32074 on node lob099 exited on signal 1 (Hangup).
</span><br>
<span class="quotelev2">&gt;&gt; 18 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [MPI_Graph_neighbors_c] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p>Here is how the different versions are built:
<br>
<p>1.2.6 and 1.2.8
<br>
<span class="quotelev2">&gt;&gt; oob_tcp_connect_timeout=600
</span><br>
<span class="quotelev2">&gt;&gt; pml_ob1_use_early_completion=0
</span><br>
<span class="quotelev2">&gt;&gt; mca_component_show_load_errors=0
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_ib_retry_count=7
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_ib_timeout=31
</span><br>
<span class="quotelev2">&gt;&gt; mpi_keep_peer_hostnames=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; RPMBUILD parameters
</span><br>
<span class="quotelev2">&gt;&gt; setenv CPPFLAGS -I/opt/panfs/include
</span><br>
<span class="quotelev2">&gt;&gt; setenv CFLAGS -I/opt/panfs/include
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rpmbuild -bb ./SPECS/loboopenmpi128.spec \
</span><br>
<span class="quotelev2">&gt;&gt; --with gcc \
</span><br>
<span class="quotelev2">&gt;&gt; --with root=/opt/OpenMPI \
</span><br>
<span class="quotelev2">&gt;&gt; --with shared \
</span><br>
<span class="quotelev2">&gt;&gt; --with openib \
</span><br>
<span class="quotelev2">&gt;&gt; --with slurm \
</span><br>
<span class="quotelev2">&gt;&gt; --without pty_support \
</span><br>
<span class="quotelev2">&gt;&gt; --without dlopen \
</span><br>
<span class="quotelev2">&gt;&gt; --with io_romio_flags=--with-file-system=ufs+nfs+panfs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><p>1.3beta
<br>
<p><span class="quotelev2">&gt;&gt; # Basic behavior to smooth startup
</span><br>
<span class="quotelev2">&gt;&gt; mca_component_show_load_errors = 0
</span><br>
<span class="quotelev2">&gt;&gt; orte_abort_timeout = 10
</span><br>
<span class="quotelev2">&gt;&gt; opal_set_max_sys_limits = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## Protect the shared file systems
</span><br>
<span class="quotelev2">&gt;&gt; orte_no_session_dirs = /panfs,/scratch,/users,/usr/projects
</span><br>
<span class="quotelev2">&gt;&gt; orte_tmpdir_base = /tmp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## Require an allocation to run - protects the frontend
</span><br>
<span class="quotelev2">&gt;&gt; ## from inadvertent job executions
</span><br>
<span class="quotelev2">&gt;&gt; orte_allocation_required = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## Add the interface for out-of-band communication
</span><br>
<span class="quotelev2">&gt;&gt; ## and set it up
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_if_include=ib0
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_peer_retries = 10
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_disable_family = IPv6
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_listen_mode = listen_thread
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_sndbuf = 32768
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_rcvbuf = 32768
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## Define the MPI interconnects
</span><br>
<span class="quotelev2">&gt;&gt; btl = sm,openib,self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## Setup OpenIB
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_want_fork_support = 0
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_cpc_include = oob
</span><br>
<span class="quotelev2">&gt;&gt; #btl_openib_receive_queues = P,128,256,64,32,32:S, 
</span><br>
<span class="quotelev2">&gt;&gt; 2048,1024,128,32:S,12288,1024,128,32:S,65536,1024,128,32
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## Enable cpu affinity
</span><br>
<span class="quotelev2">&gt;&gt; mpi_paffinity_alone = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## Setup MPI options
</span><br>
<span class="quotelev2">&gt;&gt; mpi_show_handle_leaks = 0
</span><br>
<span class="quotelev2">&gt;&gt; mpi_warn_on_fork = 1
</span><br>
<p><span class="quotelev2">&gt;&gt; enable_dlopen=no
</span><br>
<span class="quotelev2">&gt;&gt; with_openib=/opt/ofed
</span><br>
<span class="quotelev2">&gt;&gt; with_openib_libdir=/opt/ofed/lib64
</span><br>
<span class="quotelev2">&gt;&gt; enable_mem_debug=no
</span><br>
<span class="quotelev2">&gt;&gt; enable_mem_profile=no
</span><br>
<span class="quotelev2">&gt;&gt; enable_debug_symbols=no
</span><br>
<span class="quotelev2">&gt;&gt; enable_binaries=yes
</span><br>
<span class="quotelev2">&gt;&gt; with_devel_headers=yes
</span><br>
<span class="quotelev2">&gt;&gt; enable_heterogeneous=yes
</span><br>
<span class="quotelev2">&gt;&gt; enable_debug=no
</span><br>
<span class="quotelev2">&gt;&gt; enable_shared=yes
</span><br>
<span class="quotelev2">&gt;&gt; enable_static=yes
</span><br>
<span class="quotelev2">&gt;&gt; with_slurm=yes
</span><br>
<span class="quotelev2">&gt;&gt; enable_memchecker=no
</span><br>
<span class="quotelev2">&gt;&gt; enable_ipv6=no
</span><br>
<span class="quotelev2">&gt;&gt; enable_mpi_f77=yes
</span><br>
<span class="quotelev2">&gt;&gt; enable_mpi_f90=yes
</span><br>
<span class="quotelev2">&gt;&gt; enable_mpi_cxx=yes
</span><br>
<span class="quotelev2">&gt;&gt; enable_mpi_cxx_seek=yes
</span><br>
<span class="quotelev2">&gt;&gt; enable_cxx_exceptions=yes
</span><br>
<span class="quotelev2">&gt;&gt; enable_mca_no_build=pml-dr,pml-crcp2,crcp,filem
</span><br>
<span class="quotelev2">&gt;&gt; with_io_romio_flags=--with-file-system=ufs+nfs+panfs
</span><br>
<span class="quotelev2">&gt;&gt; with_threads=posix
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4832/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4833.php">Patrick Geoffray: "[OMPI devel] mallopt and registration cache"</a>
<li><strong>Previous message:</strong> <a href="4831.php">Leonardo Fialho: "Re: [OMPI devel] OOB-TCP Retries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4835.php">Jeff Squyres: "Re: [OMPI devel] 1.3 test failures"</a>
<li><strong>Reply:</strong> <a href="4835.php">Jeff Squyres: "Re: [OMPI devel] 1.3 test failures"</a>
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
