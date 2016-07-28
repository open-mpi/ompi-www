<?
$subject_val = "[Open MPI Announce]  Open MPI 1.7.4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  5 17:07:23 2014" -->
<!-- isoreceived="20140205220723" -->
<!-- sent="Wed, 5 Feb 2014 14:06:17 -0800" -->
<!-- isosent="20140205220617" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce]  Open MPI 1.7.4 released" -->
<!-- id="D87E1248-AE59-4BDE-84A4-3AFFB7173CEC_at_open-mpi.org" -->
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
<strong>Subject:</strong> [Open MPI Announce]  Open MPI 1.7.4 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-05 17:06:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/03/0060.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.7.5 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/11/0058.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI @SC next week"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.7.4, the next feature release in the 1.7 series. This release includes several major new features plus numerous bug fixes:
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
<br>
<p><p>1.7.4
<br>
-----
<br>
&nbsp;**********************************************************************
<br>
&nbsp;*      CRITICAL CHANGE
<br>
&nbsp;*
<br>
&nbsp;* As of release 1.7.4, OpenMPI's default mapping, ranking, and binding
<br>
&nbsp;* settings have changed:
<br>
&nbsp;*
<br>
&nbsp;* Mapping:
<br>
&nbsp;*   if #procs &lt;= 2, default to map-by core
<br>
&nbsp;*   if #procs &gt; 2, default to map-by socket
<br>
&nbsp;* Ranking:
<br>
&nbsp;*   if default mapping is used, then default to rank-by slot
<br>
&nbsp;*   if map-by &lt;obj&gt; is given, then default to rank-by &lt;obj&gt;,
<br>
&nbsp;*      where &lt;obj&gt; is whatever object we mapped against
<br>
&nbsp;* Binding:
<br>
&nbsp;*   default to bind-to core
<br>
&nbsp;*
<br>
&nbsp;* Users can override any of these settings individually using the
<br>
&nbsp;* corresponding MCA parameter. Note that multi-threaded applications
<br>
&nbsp;* in particular may want to override at least the binding default
<br>
&nbsp;* to allow threads to use multiple cores.
<br>
&nbsp;**********************************************************************
<br>
- Restore version number output in &quot;ompi_info --all&quot;.
<br>
- Various bug fixes for the mpi_f08 Fortran bindings.
<br>
- Fix ROMIO compile error with Lustre 2.4.  Thanks to Adam Moody for
<br>
&nbsp;&nbsp;reporting the issue. 
<br>
- Various fixes for 32 bit platforms.
<br>
- Add ability to selectively disable building the mpi or mpi_f08
<br>
&nbsp;&nbsp;module.  See the README file for details.
<br>
- Fix MX MTL finalization issue.
<br>
- Fix ROMIO issue when opening a file with MPI_MODE_EXCL.
<br>
- Fix PowerPC and MIPS assembly issues.
<br>
- Various fixes to the hcoll and FCA collective offload modules.
<br>
- Prevent integer overflow when creating datatypes.  Thanks to
<br>
&nbsp;&nbsp;original patch from Gilles Gouaillardet.
<br>
- Port some upstream hwloc fixes to Open MPI's embedded copy for
<br>
&nbsp;&nbsp;working around buggy NUMA node cpusets and including mising header
<br>
&nbsp;&nbsp;files.  Thanks to Jeff Becker and Paul Hargrove for reporting the
<br>
&nbsp;&nbsp;issues.
<br>
- Fix recursive invocation issues in the MXM MTL.
<br>
- Various bug fixes to the new MCA parameter back-end system.
<br>
- Have the posix fbtl module link against -laio on NetBSD platforms.
<br>
&nbsp;&nbsp;Thanks to Paul Hargrove for noticing the issue.
<br>
- Various updates and fixes to network filesystem detection to support
<br>
&nbsp;&nbsp;more operating systems.
<br>
- Add gfortran v4.9 &quot;ignore TKR&quot; syntax to the mpi Fortran module.
<br>
- Various compiler fixes for several BSD-based platforms.  Thanks to
<br>
&nbsp;&nbsp;Paul Hargrove for reporting the issues.
<br>
- Fix when MPI_COMM_SPAWN[_MULTIPLE] is used on oversubscribed
<br>
&nbsp;&nbsp;systems.
<br>
- Change the output from --report bindings to simply state that a
<br>
&nbsp;&nbsp;process is not bound, instead of reporting that it is bound to all
<br>
&nbsp;&nbsp;processors.
<br>
- Per MPI-3.0 guidance, remove support for all MPI subroutines with
<br>
&nbsp;&nbsp;choice buffers from the TKR-based mpi Fortran module.  Thanks to Jed
<br>
&nbsp;&nbsp;Brown for raising the issue.
<br>
- Only allow the usnic BTL to build on 64 bit platforms.
<br>
- Various bug fixes to SLURM support, to include ensuring proper
<br>
&nbsp;&nbsp;exiting on abnormal termination.
<br>
- Ensure that MPI_COMM_SPAWN[_MULTIPLE] jobs get the same mapping
<br>
&nbsp;&nbsp;directives that were used with mpirun.
<br>
- Fixed the application of TCP_NODELAY.
<br>
- Change the TCP BTL to not warn if a non-existent interface is
<br>
&nbsp;&nbsp;ignored.
<br>
- Restored the &quot;--bycore&quot; mpirun option for backwards compatibility.
<br>
- Fixed debugger attach functionality.  Thanks to Ashley Pittman for
<br>
&nbsp;&nbsp;reporting the issue and suggesting the fix.
<br>
- Fixed faulty MPI_IBCAST when invoked on a communicator with only
<br>
&nbsp;&nbsp;one process.
<br>
- Add new Mellanox device IDs to the openib BTL.
<br>
- Progress towards cleaning up various internal memory leaks as
<br>
&nbsp;&nbsp;reported by Valgrind.
<br>
- Fixed some annoying flex-generated warnings that have been there for
<br>
&nbsp;&nbsp;years.  Thanks to Tom Fogal for the initial patch.
<br>
- Support user-provided environment variables via the &quot;env&quot; info key
<br>
&nbsp;&nbsp;to MPI_COMM_SPAWN[_MULTIPLE].  Thanks to Tom Fogal for the feature
<br>
&nbsp;&nbsp;request.
<br>
- Fix uninitialized variable in MPI_DIST_GRAPH_CREATE.
<br>
- Fix a variety of memory errors on SPARC platforms.  Thanks to
<br>
&nbsp;&nbsp;Siegmar Gross for reporting and testing all the issues.
<br>
- Remove Solaris threads support.  When building on Solaris, pthreads
<br>
&nbsp;&nbsp;will be used.
<br>
- Correctly handle the convertor internal stack for persistent
<br>
&nbsp;&nbsp;receives.  Thanks to Guillaume Gouaillardet for identifying the
<br>
&nbsp;&nbsp;problem.
<br>
- Add support for using an external libevent via --with-libevent.  See
<br>
&nbsp;&nbsp;the README for more details.
<br>
- Various OMPIO updates and fixes.
<br>
- Add support for the MPIEXEC_TIMEOUT environment variable.  If set,
<br>
&nbsp;&nbsp;mpirun will terminate the job after this many seconds.
<br>
- Update the internal copy of ROMIO to that which shipped in MPICH
<br>
&nbsp;&nbsp;3.0.4.
<br>
- Various performance tweaks and improvements in the usnic BTL,
<br>
&nbsp;&nbsp;including now reporting MPI_T performance variables for each usnic
<br>
&nbsp;&nbsp;device.
<br>
- Fix to not access send datatypes for non-root processes with
<br>
&nbsp;&nbsp;MPI_ISCATTER[V] and MPI_IGATHER[V].  Thanks to Pierre Jolivet for
<br>
&nbsp;&nbsp;supplying the initial patch.
<br>
- Update VampirTrace to 5.14.4.9.
<br>
- Fix ptmalloc2 hook disable when used with ummunotify.
<br>
- Change the default connection manager for the openib BTL to be based
<br>
&nbsp;&nbsp;on UD verbs data exchanges instead of ORTE OOB data exchanges.
<br>
- Fix Fortran compile error when compiling with 8-byte INTEGERs and
<br>
&nbsp;&nbsp;4-byte ints.
<br>
- Fix C++11 issue identified by Jeremiah Willcock.
<br>
- Many changes, updates, and bug fixes to the ORTE run-time layer.
<br>
- Correctly handle MPI_REDUCE_SCATTER with recvcounts of 0.
<br>
- Update man pages for MPI-3, and add some missing man pages for
<br>
&nbsp;&nbsp;MPI-2.x functions.
<br>
- Updated mpi_f08 module in accordance with post-MPI-3.0 errata which
<br>
&nbsp;&nbsp;basically removed BIND(C) from all interfaces.
<br>
- Fixed MPI_IN_PLACE detection for MPI_SCATTER[V] in Fortran
<br>
&nbsp;&nbsp;routines.  Thanks to Charles Gerlach for identifying the issue.
<br>
- Added support for routable RoCE to the openib BTL.
<br>
- Update embedded hwloc to v1.7.2.
<br>
- ErrMgr framework redesigned to better support fault tolerance development
<br>
&nbsp;&nbsp;activities. See the following RFC for details:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2010/03/7589.php">http://www.open-mpi.org/community/lists/devel/2010/03/7589.php</a>
<br>
- Added database framework to OPAL and changed all modex operations
<br>
&nbsp;&nbsp;to flow thru it, also included additional system info in the
<br>
&nbsp;&nbsp;available data
<br>
- Added staged state machine to support sequential work flows
<br>
- Added distributed file system support for accessing files across
<br>
&nbsp;&nbsp;nodes that do not have networked file systems
<br>
- Extended filem framework to support scalable pre-positioning of
<br>
&nbsp;&nbsp;files for use by applications, adding new &quot;raw&quot; component that
<br>
&nbsp;&nbsp;transmits files across the daemon network
<br>
- Native Windows support has been removed. A cygwin package is
<br>
&nbsp;&nbsp;available from that group for Windows-based use.
<br>
- Added new MPI Java bindings.  See the Javadocs for more details on
<br>
&nbsp;&nbsp;the API.
<br>
- Wrapper compilers now add rpath support by default to generated
<br>
&nbsp;&nbsp;executables on systems that support it.  This behavior can be
<br>
&nbsp;&nbsp;disabled via --disable-wrapper-rpath.  See note in README about ABI
<br>
&nbsp;&nbsp;issues when using rpath in MPI applications.
<br>
- Added a new parallel I/O component and multiple new frameworks to 
<br>
&nbsp;&nbsp;support parallel I/O operations.
<br>
- Fixed MPI_STATUS_SIZE Fortran issue when used with 8-byte Fortran
<br>
&nbsp;&nbsp;INTEGERs and 4-byte C ints.  Since this issue affects ABI, it is
<br>
&nbsp;&nbsp;only enabled if Open MPI is configured with
<br>
&nbsp;&nbsp;--enable-abi-breaking-fortran-status-i8-fix.  Thanks to Jim Parker
<br>
&nbsp;&nbsp;for supplying the initial patch.
<br>
- Add support for Intel Phi SCIF transport.
<br>
- For CUDA-aware MPI configured with CUDA 6.0, use new pointer
<br>
&nbsp;&nbsp;attribute to avoid extra synchronization in stream 0 when using
<br>
&nbsp;&nbsp;CUDA IPC between GPUs on the same node.
<br>
- For CUDA-aware MPI configured with CUDA 6.0, compile in support
<br>
&nbsp;&nbsp;of GPU Direct RDMA in openib BTL to improve small message latency.
<br>
- Updated ROMIO from MPICH v3.0.4.
<br>
- MPI-3: Added support for remaining non-blocking collectives.
<br>
- MPI-3: Added support for neighborhood collectives.
<br>
- MPI-3: Updated C bindings with consistent use of [].
<br>
- MPI-3: Added the const keyword to read-only buffers.
<br>
- MPI-3: Added support for non-blocking communicator duplication.
<br>
- MPI-3: Added support for non-collective communicator creation.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/03/0060.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.7.5 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/11/0058.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI @SC next week"</a>
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
