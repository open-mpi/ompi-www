<?
$subject_val = "[OMPI users] Announcing the release of Open MPI version 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 19 16:28:23 2009" -->
<!-- isoreceived="20090119212823" -->
<!-- sent="Mon, 19 Jan 2009 16:28:18 -0500" -->
<!-- isosent="20090119212818" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[OMPI users] Announcing the release of Open MPI version 1.3" -->
<!-- id="ea86ce220901191328k4d701c0br9b0dcd219686015c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Announcing the release of Open MPI version 1.3<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-19 16:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7733.php">Gregor Dschung: "[OMPI users] Restarting from a checkpoint (OMPI 1.3)"</a>
<li><strong>Previous message:</strong> <a href="7731.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic,
<br>
and industry partners, is pleased to announce the release of Open MPI
<br>
version 1.3. This release contains many bug fixes, feature
<br>
enhancements, and performance improvements over the v1.2 series,
<br>
including (but not limited to):
<br>
<p>&nbsp;&nbsp;&nbsp;* MPI2.1 compliant
<br>
&nbsp;&nbsp;&nbsp;* New Notifier framework
<br>
&nbsp;&nbsp;&nbsp;* Additional architectures, OS's and batch schedulers
<br>
&nbsp;&nbsp;&nbsp;* Improved thread safety
<br>
&nbsp;&nbsp;&nbsp;* MPI_REAL16 and MPI_COMPLEX32
<br>
&nbsp;&nbsp;&nbsp;* Improved MPI C++ bindings
<br>
&nbsp;&nbsp;&nbsp;* Valgrind support
<br>
&nbsp;&nbsp;&nbsp;* Updated ROMIO to the version from MPICH2-1.0.7
<br>
&nbsp;&nbsp;&nbsp;* Improved Scalability
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Process launch times reduced by an order of magnitude
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- sparse groups
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- On-demand connection setup
<br>
&nbsp;&nbsp;&nbsp;* Improved point-to-point latencies
<br>
&nbsp;&nbsp;&nbsp;* Better adaptive algorithms for multi-rail support
<br>
&nbsp;&nbsp;&nbsp;* Additional collective algorithms; improved collective performance
<br>
&nbsp;&nbsp;&nbsp;* Numerous enhancements for OpenFabrics
<br>
&nbsp;&nbsp;&nbsp;* iWARP support
<br>
&nbsp;&nbsp;&nbsp;* Fault Tolerance
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- coordinated checkpoint/restart
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- support for BLCR and self
<br>
&nbsp;&nbsp;&nbsp;* Finer grained resource control and mapping (cores, HCAs, etc)
<br>
&nbsp;&nbsp;&nbsp;* Many other new runtime features
<br>
&nbsp;&nbsp;&nbsp;* Numerous bug fixes
<br>
<p>Version 1.3 can be downloaded from the main Open MPI web site or any
<br>
of its mirrors (mirrors will be updating shortly).
<br>
<p>We strongly recommend that all users upgrade to version 1.3 if possible.
<br>
<p>Here are a list of some of the changes in v1.3 as compared the 1.2 series:
<br>
<p>- Fixed deadlock issues under heavy messaging scenarios
<br>
- Extended the OS X 10.5.x (Leopard) workaround for a problem when
<br>
&nbsp;&nbsp;assembly code is compiled with -g[0-9].  Thanks to Barry Smith for
<br>
&nbsp;&nbsp;reporting the problem.  See ticket #1701.
<br>
- Disabled MPI_REAL16 and MPI_COMPLEX32 support on platforms where the
<br>
&nbsp;&nbsp;bit representation of REAL*16 is different than that of the C type
<br>
&nbsp;&nbsp;of the same size (usually long double).  Thanks to Julien Devriendt
<br>
&nbsp;&nbsp;for reporting the issue.  See ticket #1603.
<br>
- Increased the size of MPI_MAX_PORT_NAME to 1024 from 36. See ticket #1533.
<br>
- Added &quot;notify debugger on abort&quot; feature. See tickets #1509 and #1510.
<br>
&nbsp;&nbsp;Thanks to Seppo Sahrakropi for the bug report.
<br>
- Upgraded Open MPI tarballs to use Autoconf 2.63, Automake 1.10.1,
<br>
&nbsp;&nbsp;Libtool 2.2.6a.
<br>
- Added missing MPI::Comm::Call_errhandler() function.  Thanks to Dave
<br>
&nbsp;&nbsp;Goodell for bringing this to our attention.
<br>
- Increased MPI_SUBVERSION value in mpi.h to 1 (i.e., MPI 2.1).
<br>
- Changed behavior of MPI_GRAPH_CREATE, MPI_TOPO_CREATE, and several
<br>
&nbsp;&nbsp;other topology functions per MPI-2.1.
<br>
- Fix the type of the C++ constant MPI::IN_PLACE.
<br>
- Various enhancements to the openib BTL:
<br>
&nbsp;&nbsp;- Added btl_openib_if_[in|ex]clude MCA parameters for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;including/excluding comma-delimited lists of HCAs and ports.
<br>
&nbsp;&nbsp;- Added RDMA CM support, including btl_openib_cpc_[in|ex]clude MCA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;parameters
<br>
&nbsp;&nbsp;- Added NUMA support to only use &quot;near&quot; network adapters
<br>
&nbsp;&nbsp;- Added &quot;Bucket SRQ&quot; (BSRQ) support to better utilize registered
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memory, including btl_openib_receive_queues MCA parameter
<br>
&nbsp;&nbsp;- Added ConnectX XRC support (and integrated with BSRQ)
<br>
&nbsp;&nbsp;- Added btl_openib_ib_max_inline_data MCA parameter
<br>
&nbsp;&nbsp;- Added iWARP support
<br>
&nbsp;&nbsp;- Revamped flow control mechanisms to be more efficient
<br>
&nbsp;&nbsp;- &quot;mpi_leave_pinned=1&quot; is now the default when possible,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;automatically improving performance for large messages when
<br>
&nbsp;&nbsp;&nbsp;&nbsp;application buffers are re-used
<br>
- Eliminated duplicated error messages when multiple MPI processes fail
<br>
&nbsp;&nbsp;with the same error.
<br>
- Added NUMA support to the shared memory BTL.
<br>
- Add Valgrind-based memory checking for MPI-semantic checks.
<br>
- Add support for some optional Fortran datatypes (MPI_LOGICAL1,
<br>
&nbsp;&nbsp;MPI_LOGICAL2, MPI_LOGICAL4 and MPI_LOGICAL8).
<br>
- Remove the use of the STL from the C++ bindings.
<br>
- Added support for Platform/LSF job launchers.  Must be Platform LSF
<br>
&nbsp;&nbsp;v7.0.2 or later.
<br>
- Updated ROMIO with the version from MPICH2 1.0.7.
<br>
- Added RDMA capable one-sided component (called rdma), which
<br>
&nbsp;&nbsp;can be used with BTL components that expose a full one-sided
<br>
&nbsp;&nbsp;interface.
<br>
- Added the optional datatype MPI_REAL2. As this is added to the &quot;end of&quot;
<br>
&nbsp;&nbsp;predefined datatypes in the fortran header files, there will not be
<br>
&nbsp;&nbsp;any compatibility issues.
<br>
- Added Portable Linux Processor Affinity (PLPA) for Linux.
<br>
- Addition of a finer symbols export control via the visibility feature
<br>
&nbsp;&nbsp;offered by some compilers.
<br>
- Added checkpoint/restart process fault tolerance support. Initially
<br>
&nbsp;&nbsp;support a LAM/MPI-like protocol.
<br>
- Removed &quot;mvapi&quot; BTL; all InfiniBand support now uses the OpenFabrics
<br>
&nbsp;&nbsp;driver stacks (&quot;openib&quot; BTL).
<br>
- Added more stringent MPI API parameter checking to help user-level
<br>
&nbsp;&nbsp;debugging.
<br>
- The ptmalloc2 memory manager component is now by default built as
<br>
&nbsp;&nbsp;a standalone library named libopenmpi-malloc.  Users wanting to
<br>
&nbsp;&nbsp;use leave_pinned with ptmalloc2 will now need to link the library
<br>
&nbsp;&nbsp;into their application explicitly.  All other users will use the
<br>
&nbsp;&nbsp;libc-provided allocator instead of Open MPI's ptmalloc2.  This change
<br>
&nbsp;&nbsp;may be overridden with the configure option enable-ptmalloc2-internal
<br>
- The leave_pinned options will now default to using mallopt on
<br>
&nbsp;&nbsp;Linux in the cases where ptmalloc2 was not linked in.  mallopt
<br>
&nbsp;&nbsp;will also only be available if munmap can be intercepted (the
<br>
&nbsp;&nbsp;default whenever Open MPI is not compiled with --without-memory-
<br>
&nbsp;&nbsp;manager.
<br>
- Open MPI will now complain and refuse to use leave_pinned if
<br>
&nbsp;&nbsp;no memory intercept / mallopt option is available.
<br>
- Add option of using Perl-based wrapper compilers instead of the
<br>
&nbsp;&nbsp;C-based wrapper compilers.  The Perl-based version does not
<br>
&nbsp;&nbsp;have the features of the C-based version, but does work better
<br>
&nbsp;&nbsp;in cross-compile environments.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7733.php">Gregor Dschung: "[OMPI users] Restarting from a checkpoint (OMPI 1.3)"</a>
<li><strong>Previous message:</strong> <a href="7731.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
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
