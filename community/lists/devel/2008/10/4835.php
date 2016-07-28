<?
$subject_val = "Re: [OMPI devel] 1.3 test failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 09:37:11 2008" -->
<!-- isoreceived="20081031133711" -->
<!-- sent="Fri, 31 Oct 2008 09:37:05 -0400" -->
<!-- isosent="20081031133705" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 test failures" -->
<!-- id="5BF61FC8-A440-4611-A542-83DC3E4F4437_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="24C0D570-F56E-4457-89B1-A925408F3837_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 test failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 09:37:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4836.php">Leonardo Fialho: "Re: [OMPI devel] Error while restarting a checkpoint"</a>
<li><strong>Previous message:</strong> <a href="4834.php">Tim Mattox: "[OMPI devel] Need 3 CMR reviewers ASAP"</a>
<li><strong>In reply to:</strong> <a href="4832.php">Ralph Castain: "[OMPI devel] 1.3 test failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralf, Rolf, and I talked about this issue this morning on the phone.   
<br>
We're pretty sure that it's an overflow because of the large number of  
<br>
procs being run.  LANL is going to try running with -DLARGE_CLUSTER  
<br>
and see what happens.  Rolf thinks he's run the Intel C tests up to 1k  
<br>
procs, so hopefully that should be sufficient.
<br>
<p><p>On Oct 30, 2008, at 7:01 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We aren't running a full MTT here (which is why I'm reporting these  
</span><br>
<span class="quotelev1">&gt; results to the list instead of into the MTT database), but we are  
</span><br>
<span class="quotelev1">&gt; running a subset of tests on the 1.3 beta and hitting a consistent  
</span><br>
<span class="quotelev1">&gt; set of errors involving five tests. For reference, we see all of  
</span><br>
<span class="quotelev1">&gt; these tests pass on 1.2.6, but fail in the identical way on 1.2.8 -  
</span><br>
<span class="quotelev1">&gt; so it appears that something systematic may have entered the system  
</span><br>
<span class="quotelev1">&gt; and gotten into the 1.2 series as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The tests are:
</span><br>
<span class="quotelev1">&gt; MPI_Pack_user_type
</span><br>
<span class="quotelev1">&gt; MPI_Type_hindexed_blklen
</span><br>
<span class="quotelev1">&gt; MPI_Type_vector_stride
</span><br>
<span class="quotelev1">&gt; MPI_Cart_get_c
</span><br>
<span class="quotelev1">&gt; MPI_Graph_neighbors_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The tests are running under slurm on RHEL5 with 16-cores of Opteron  
</span><br>
<span class="quotelev1">&gt; processors on each node plus IB. The below results are with 40 nodes  
</span><br>
<span class="quotelev1">&gt; at 16ppn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts would be appreciated. Meantime, we are trying different  
</span><br>
<span class="quotelev1">&gt; ppn to see if that has an impact.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what we see:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST error (585): 1 errors in buffer (17, 5) len 1024 commsize  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 214
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commtype -14 extent 64 root 194 MPITEST error (591): Received buffer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; overflow, Expected buffer[65536]: -197, Actual buffer[65536]: 59
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error (591): 1 errors in buffer (17, 5) len 1024 commsize 214
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commtype -14
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extent 64 root 196
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST_results: MPI_Pack_user_type 60480 tests FAILED (of 21076704)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST error (597): Received buffer overflow, Expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer[16384]: -199,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actual buffer[16384]: 57 MPITEST error (597): 1 errors in buffer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (17, 5) len
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16 commsize 214 commtype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -14 extent 64 root 198
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST error (585): Received buffer overflow, Expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer[16384]: -195,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actual buffer[16384]: 61 MPITEST error (585): 1 errors in buffer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (17, 5) len
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16 commsize 214 commtype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -14 extent 64 root 194
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST_results: MPI_Type_hindexed_blklen 60480 tests FAILED (of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 21076704)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST error (597): Received buffer overflow, Expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer[65536]: -199,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actual buffer[65536]: 57 MPITEST error (597): 1 errors in buffer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (17, 5) len
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 512 commsize 214 commtype -14 extent 64 root 198 MPITEST error  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (615):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Received buffer overflow, Expected buffer[65536]: -205, Actual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer[65536]: 51 MPITEST error (615): 1 errors in buffer (17, 5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; len 512
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commsize 214 commtype -14 extent 64 root 204
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST_results: MPI_Type_vector_stride 60480 tests FAILED (of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 21076704)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [lob097:32556] *** Process received signal *** mpirun noticed that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 with PID 32556 on node lob097 exited on signal 11 (Segmentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 639 additional processes aborted (not shown)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [MPI_Cart_get_c] Error 139
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST fatal error (568): MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST fatal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error (572): MPI_ERR_COMM: invalid communicator MPITEST fatal error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (574):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ERR_COMM: invalid communicator mpirun noticed that job rank 37
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with PID
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32074 on node lob099 exited on signal 1 (Hangup).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 18 additional processes aborted (not shown)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [MPI_Graph_neighbors_c] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is how the different versions are built:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.2.6 and 1.2.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oob_tcp_connect_timeout=600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pml_ob1_use_early_completion=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_component_show_load_errors=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_ib_retry_count=7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_ib_timeout=31
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_keep_peer_hostnames=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RPMBUILD parameters
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv CPPFLAGS -I/opt/panfs/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv CFLAGS -I/opt/panfs/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rpmbuild -bb ./SPECS/loboopenmpi128.spec \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with gcc \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with root=/opt/OpenMPI \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with shared \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with openib \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with slurm \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --without pty_support \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --without dlopen \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with io_romio_flags=--with-file-system=ufs+nfs+panfs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.3beta
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Basic behavior to smooth startup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_component_show_load_errors = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_abort_timeout = 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_set_max_sys_limits = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## Protect the shared file systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_no_session_dirs = /panfs,/scratch,/users,/usr/projects
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_tmpdir_base = /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## Require an allocation to run - protects the frontend
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## from inadvertent job executions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_allocation_required = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## Add the interface for out-of-band communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## and set it up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oob_tcp_if_include=ib0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oob_tcp_peer_retries = 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oob_tcp_disable_family = IPv6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oob_tcp_listen_mode = listen_thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oob_tcp_sndbuf = 32768
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oob_tcp_rcvbuf = 32768
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## Define the MPI interconnects
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl = sm,openib,self
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## Setup OpenIB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_want_fork_support = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_cpc_include = oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #btl_openib_receive_queues = P,128,256,64,32,32:S, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2048,1024,128,32:S,12288,1024,128,32:S,65536,1024,128,32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## Enable cpu affinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_paffinity_alone = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## Setup MPI options
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_show_handle_leaks = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_warn_on_fork = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_dlopen=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with_openib=/opt/ofed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with_openib_libdir=/opt/ofed/lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mem_debug=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mem_profile=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_debug_symbols=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_binaries=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with_devel_headers=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_heterogeneous=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_debug=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_shared=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_static=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with_slurm=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_memchecker=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_ipv6=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mpi_f77=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mpi_f90=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mpi_cxx=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mpi_cxx_seek=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_cxx_exceptions=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mca_no_build=pml-dr,pml-crcp2,crcp,filem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with_io_romio_flags=--with-file-system=ufs+nfs+panfs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with_threads=posix
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4836.php">Leonardo Fialho: "Re: [OMPI devel] Error while restarting a checkpoint"</a>
<li><strong>Previous message:</strong> <a href="4834.php">Tim Mattox: "[OMPI devel] Need 3 CMR reviewers ASAP"</a>
<li><strong>In reply to:</strong> <a href="4832.php">Ralph Castain: "[OMPI devel] 1.3 test failures"</a>
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
