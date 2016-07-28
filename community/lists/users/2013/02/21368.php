<?
$subject_val = "Re: [OMPI users] Building 1.6.3 on OS X 10.8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 11:09:26 2013" -->
<!-- isoreceived="20130211160926" -->
<!-- sent="Mon, 11 Feb 2013 11:09:21 -0500" -->
<!-- isosent="20130211160921" -->
<!-- name="Mark Bolstad" -->
<!-- email="the.render.dude_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 1.6.3 on OS X 10.8" -->
<!-- id="CAPa_DODs0XgNEQVvBTygydEkWuDAFrEt-66pT1Dyou===mff=A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="14280F67-5051-4581-8723-C0200EB7245F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building 1.6.3 on OS X 10.8<br>
<strong>From:</strong> Mark Bolstad (<em>the.render.dude_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 11:09:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>Previous message:</strong> <a href="21367.php">Stefan Mauerberger: "[OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
<li><strong>In reply to:</strong> <a href="21365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21372.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21372.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21373.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's not just one plugin, it was about 6 of them. I just deleted the error
<br>
message from the others as I believed that opal_init was the problem.
<br>
<p>However, I have done a full build multiple times and have blown away all
<br>
the plugins and other remnants of the build and install and get the same
<br>
results every time.
<br>
<p>Here's the output from running ompi_info (same result with or w/o
<br>
OPAL_PREFIX are the same; LD_LIBRARY_PATH set; path points to both bin and
<br>
lib directory ):
<br>
<p>[bolstadm-lm3:~/papillon/build/src] bolstadm% ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI bolstadm_at_bolstadm-lm3 Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.3
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r27472
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Oct 24, 2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.6.3
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r27472
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Oct 24, 2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.6.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r27472
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Oct 24, 2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI API: 2.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.6.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix:
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3
<br>
&nbsp;Configured architecture: x86_64-apple-darwin12.2.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: bolstadm-lm3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: bolstadm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Sun Feb 10 19:09:36 EST 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: bolstadm-lm3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: bolstadm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Sun Feb 10 19:16:52 EST 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: bolstadm-lm3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: no
<br>
&nbsp;Fortran90 bindings size: na
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;C compiler family name: GNU
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler version: 4.2.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: none
<br>
&nbsp;&nbsp;Fortran90 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;MPI interface warnings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Symbol vis. support: yes
<br>
&nbsp;&nbsp;&nbsp;Host topology support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI extensions: affinity example
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VampirTrace support: yes
<br>
&nbsp;&nbsp;MPI_MAX_PROCESSOR_NAME: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_ERROR_STRING: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_OBJECT_NAME: 64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_KEY: 36
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_VAL: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_PORT_NAME: 1024
<br>
&nbsp;&nbsp;MPI_MAX_DATAREP_STRING: 128
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_paffinity_hwloc:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_carto_auto_detect:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_carto_file:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_mmap:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_posix:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_sysv:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_maffinity_first_use:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_maffinity_hwloc:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_sysinfo_darwin:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_errmgr_default:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_grpcomm_bad:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_grpcomm_basic:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_env:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_hnp:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_singleton:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_slave:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_slurm:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_slurmd:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_tool:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_notifier_command:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_notifier_syslog:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_oob_tcp:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_odls_default:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_iof_hnp:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_iof_orted:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_iof_tool:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ras_cm:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ras_slurm:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_load_balance:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_rank_file:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_resilient:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_round_robin:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_seq:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_topo:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rml_oob:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_binomial:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_cm:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_direct:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_linear:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_radix:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_slave:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_plm_rsh:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_plm_slurm:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_filem_rsh:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_allocator_basic:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_allocator_bucket:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_basic:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_hierarch:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_inter:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_self:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_sm:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_sync:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_tuned:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_io_romio:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rcache_vma:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_mpool_fake:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_mpool_rdma:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_mpool_sm:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_bfo:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_cm:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_csum:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_ob1:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_v:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_osc_pt2pt:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_osc_rdma:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_btl_self:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_btl_sm:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_btl_tcp:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_topo_unity:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pubsub_orte:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
[bolstadm-lm3:86426] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_dpm_orte:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: darwin (MCA v2.0, API v2.0, Component v1.6.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.3)
<br>
<p>And here's an example of a plugin reported as an error:
<br>
[bolstadm-lm3:~/papillon/build/src] bolstadm% l
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_paffinity_hwloc*
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_paffinity_hwloc.a
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/
<br>
mca_paffinity_hwloc.la*
<br>
<p>On Mon, Feb 11, 2013 at 8:27 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; That's very idd; I cant think of why that would happen offhand. I build
</span><br>
<span class="quotelev1">&gt; and run all the time on ML with no problems. Can you deleted that plugin
</span><br>
<span class="quotelev1">&gt; and run ok?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 10, 2013, at 10:22 PM, &quot;Mark Bolstad&quot; &lt;the.render.dude_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I having some difficulties with building/running 1.6.3 on Mountain Lion
</span><br>
<span class="quotelev1">&gt; (10.8.2). I build with no errors and install into a prefix directory. I get
</span><br>
<span class="quotelev1">&gt; the following errors:
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:38486] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_sysv:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 79
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; orterun.c at line 694
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've fiddled with LD_LIBRARY_PATH, DYLD_LIBRARY_PATH, OPAL_PREFIX, in
</span><br>
<span class="quotelev1">&gt; combination and separately, and none of these seem to have much effect.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, I decided to try a straight build. The only option was
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f77. It installed into /usr/local. There is no other mpi
</span><br>
<span class="quotelev1">&gt; version installed on the system, and I still get the same errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, I did install the version from MacPorts (also 1.6.3), and it
</span><br>
<span class="quotelev1">&gt; works correctly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would appreciate if anyone had some insight into building on OS X 10.8.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mark
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21368/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>Previous message:</strong> <a href="21367.php">Stefan Mauerberger: "[OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
<li><strong>In reply to:</strong> <a href="21365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21372.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21372.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21373.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
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
