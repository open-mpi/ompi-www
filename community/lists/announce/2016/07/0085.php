<?
$subject_val = "[Open MPI Announce] Open MPI v2.0.0 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 18:19:15 2016" -->
<!-- isoreceived="20160712221915" -->
<!-- sent="Tue, 12 Jul 2016 22:19:12 +0000" -->
<!-- isosent="20160712221912" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v2.0.0 released" -->
<!-- id="8F11CD18-B243-44E2-9733-45ECF2BDAA66_at_cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v2.0.0 released<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 18:19:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0086.php">Jeff Squyres (jsquyres): "[Open MPI Announce] This list is migrating!"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2016/06/0084.php">Ralph Castain: "[Open MPI Announce] Fwd: Open MPI v2.0.0rc3 now available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 2.0.0.
<br>
<p>v2.0.0 is a major new release series containing many new features and bug fixes.  As a community, the Open MPI Team is incredibly thankful and appreciative of all the time, effort, and downright hard work contributed by its members and all of its users.  Thank you all!  We couldn't have done this without you!
<br>
<p>Increasing the major release number to &quot;2&quot; is indicative the magnitude of the changes in this release: v2.0.0 is effectively a new generation of Open MPI compared to the v1.10 series (see <a href="https://www.open-mpi.org/software/ompi/versions/">https://www.open-mpi.org/software/ompi/versions/</a> for a description of Open MPI's versioning scheme).  Many of the changes are visible to users, but equally importantly, there are many changes &quot;under the hood&quot; that add stability and performance improvements to the inner workings of Open MPI.
<br>
<p>Note that this release also retires support for some legacy systems, and is not ABI compatible with the v1.10 series.  Users will need to recompile their MPI applications to use Open MPI v2.0.0.
<br>
<p>As with any new major series, while the Open MPI community has tested the v2.0.0 release extensively, production users are encouraged to test thoroughly when upgrading from a prior version of Open MPI.  After reading the &quot;Changes in behavior compared to prior versions&quot; and &quot;Known issues&quot; sections below, please be sure to report any issues that you find on Github (<a href="https://github.com/open-mpi/ompi/issues/new">https://github.com/open-mpi/ompi/issues/new</a>) or the Open MPI user's mailing list.
<br>
<p>Please note: although the v1.10 series is still supported -- and will be for quite some time -- the main focus of Open MPI development is on v2.0.1, v2.1.x, and beyond.  The v1.10 series is effectively &quot;frozen&quot; at this point, and will have no new features added (only bug fixes applied as necessary).
<br>
<p>Here are a list of the major new features in Open MPI v2.0.0:
<br>
<p>- Open MPI is now MPI-3.1 compliant.
<br>
- Many enhancements to MPI RMA.  Open MPI now maps MPI RMA operations
<br>
&nbsp;&nbsp;on to native RMA operations for those networks which support this
<br>
&nbsp;&nbsp;capability.
<br>
- Greatly improved support for MPI_THREAD_MULTIPLE (when configured
<br>
&nbsp;&nbsp;with --enable-mpi-thread-multiple).
<br>
- Enhancements to reduce the memory footprint for jobs at scale.  A
<br>
&nbsp;&nbsp;new MCA parameter, &quot;mpi_add_procs_cutoff&quot;, is available to set the
<br>
&nbsp;&nbsp;threshold for using this feature.
<br>
- Completely revamped support for memory registration hooks when using
<br>
&nbsp;&nbsp;OS-bypass network transports.
<br>
- Significant OMPIO performance improvements and many bug fixes.
<br>
- Add support for PMIx - Process Management Interface for Exascale.
<br>
&nbsp;&nbsp;Version 1.1.2 of PMIx is included internally in this release.
<br>
- Add support for PLFS file systems in Open MPI I/O.
<br>
- Add support for UCX transport.
<br>
- Simplify build process for Cray XC systems.  Add support for
<br>
&nbsp;&nbsp;using native SLURM.
<br>
- Add a --tune mpirun command line option to simplify setting many
<br>
&nbsp;&nbsp;environment variables and MCA parameters.
<br>
- Add a new MCA parameter &quot;orte_default_dash_host&quot; to offer an analogue
<br>
&nbsp;&nbsp;to the existing &quot;orte_default_hostfile&quot; MCA parameter.
<br>
- Add the ability to specify the number of desired slots in the mpirun
<br>
&nbsp;&nbsp;--host option.
<br>
<p>Changes in behavior compared to prior versions:
<br>
<p>- In environments where mpirun cannot automatically determine the
<br>
&nbsp;&nbsp;number of slots available (e.g., when using a hostfile that does not
<br>
&nbsp;&nbsp;specify &quot;slots&quot;, or when using --host without specifying a &quot;:N&quot;
<br>
&nbsp;&nbsp;suffix to hostnames), mpirun now requires the use of &quot;-np N&quot; to
<br>
&nbsp;&nbsp;specify how many MPI processes to launch.
<br>
- The MPI C++ bindings -- which were removed from the MPI standard in
<br>
&nbsp;&nbsp;v3.0 -- are no longer built by default and will be removed in some
<br>
&nbsp;&nbsp;future version of Open MPI.  Use the --enable-mpi-cxx-bindings
<br>
&nbsp;&nbsp;configure option to build the deprecated/removed MPI C++ bindings.
<br>
- ompi_info now shows all components, even if they do not have MCA
<br>
&nbsp;&nbsp;parameters.  The prettyprint output now separates groups with a
<br>
&nbsp;&nbsp;dashed line.
<br>
- OMPIO is now the default implementation of parallel I/O, with the
<br>
&nbsp;&nbsp;exception for Lustre parallel filesystems (where ROMIO is still the
<br>
&nbsp;&nbsp;default).  The default selection of OMPI vs. ROMIO can be controlled
<br>
&nbsp;&nbsp;via the &quot;--mca io ompi|romio&quot; command line switch to mpirun.
<br>
- Per Open MPI's versioning scheme (see the README), increasing the
<br>
&nbsp;&nbsp;major version number to 2 indicates that this version is not
<br>
&nbsp;&nbsp;ABI-compatible with prior versions of Open MPI.  You will need to
<br>
&nbsp;&nbsp;recompile MPI and OpenSHMEM applications to work with this version
<br>
&nbsp;&nbsp;of Open MPI.
<br>
- Removed checkpoint/restart code due to loss of maintainer. :-(
<br>
- Change the behavior for handling certain signals when using PSM and
<br>
&nbsp;&nbsp;PSM2 libraries.  Previously, the PSM and PSM2 libraries would trap
<br>
&nbsp;&nbsp;certain signals in order to generate tracebacks.  The mechanism was
<br>
&nbsp;&nbsp;found to cause issues with Open MPI's own error reporting mechanism.
<br>
&nbsp;&nbsp;If not already set, Open MPI now sets the IPATH_NO_BACKTRACE and
<br>
&nbsp;&nbsp;HFI_NO_BACKTRACE environment variables to disable PSM/PSM2's
<br>
&nbsp;&nbsp;handling these signals.
<br>
<p>Removed legacy support:
<br>
<p>- Removed support for OS X Leopard.
<br>
- Removed support for Cray XT systems.
<br>
- Removed VampirTrace.
<br>
- Removed support for Myrinet/MX.
<br>
- Removed legacy collective module: ML.
<br>
- Removed support for Alpha processors.
<br>
- Removed --enable-mpi-profiling configure option.
<br>
<p>Known issues (to be addressed in v2.0.1):
<br>
<p>- See the list of fixes slated for v2.0.1 here:
<br>
&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/milestone/16">https://github.com/open-mpi/ompi/milestone/16</a>, and
<br>
&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi-release/milestone/16">https://github.com/open-mpi/ompi-release/milestone/16</a>
<br>
&nbsp;&nbsp;(note that the &quot;ompi-release&quot; Github repo will be folded/absorbed
<br>
&nbsp;&nbsp;into the &quot;ompi&quot; Github repo at some point in the future)
<br>
<p>- ompi-release#986: Fix data size counter for large ops with fcoll/static
<br>
- ompi-release#987: Fix OMPIO performance on Lustre
<br>
- ompi-release#1013: Fix potential inconsistency in btl/openib default settings
<br>
- ompi-release#1014: Do not return MPI_ERR_PENDING from collectives
<br>
- ompi-release#1056: Remove dead profile code from oshmem
<br>
- ompi-release#1081: Fix MPI_IN_PLACE checking for IALLTOALL{V|W}
<br>
- ompi-release#1081: Fix memchecker in MPI_IALLTOALLW
<br>
- ompi-release#1081: Support MPI_IN_PLACE in MPI_(I)ALLTOALLW and MPI_(I)EXSCAN
<br>
- ompi-release#1107: Allow future PMIx support for RM spawn limits
<br>
- ompi-release#1108: Fix sparse group process reference counting
<br>
- ompi-release#1109: If specified to be oversubcribed, disable binding
<br>
- ompi-release#1122: Allow NULL arrays for empty datatypes
<br>
- ompi-release#1123: Fix signed vs. unsigned compiler warnings
<br>
- ompi-release#1123: Make max hostname length uniform across code base
<br>
- ompi-release#1127: Fix MPI_Compare_and_swap
<br>
- ompi-release#1127: Fix MPI_Win_lock when used with MPI_Win_fence
<br>
- ompi-release#1132: Fix typo in help message for --enable-mca-no-build
<br>
- ompi-release#1154: Ensure pairwise coll algorithms disqualify themselves properly
<br>
- ompi-release#1165: Fix typos in debugging/verbose message output
<br>
- ompi-release#1178: Fix ROMIO filesystem check on OpenBSD 5.7
<br>
- ompi-release#1197: Fix Fortran pthread configure check
<br>
- ompi-release#1205: Allow using external PMIx 1.1.4 and 2.0
<br>
- ompi-release#1215: Fix configure to support the NAG Fortran compiler
<br>
- ompi-release#1220: Fix combiner args for MPI_HINDEXED_BLOCK
<br>
- ompi-release#1225: Fix combiner args for MPI_DARRAY
<br>
- ompi-release#1226: Disable old memory hooks with recent gcc versions
<br>
- ompi-release#1231: Fix new &quot;patcher&quot; support for some XLC platforms
<br>
- ompi-release#1244: Fix Java error handling
<br>
- ompi-release#1250: Ensure TCP is not selected for RDMA operations
<br>
- ompi-release#1252: Fix verbose output in coll selection
<br>
- ompi-release#1253: Set a default name for user-defined MPI_Op
<br>
- ompi-release#1254: Add count==0 checks in some non-blocking colls
<br>
- ompi-release#1258: Fix &quot;make distclean&quot; when using external pmix/hwloc/libevent
<br>
- ompi-release#1260: Clean up/uniform mca/coll/base memory management
<br>
- ompi-release#1261: Remove &quot;patcher&quot; warning message for static builds
<br>
- ompi-release#1263: Fix IO MPI_Request for 0-size read/write
<br>
- ompi-release#1264: Add blocking fence for SLURM operations
<br>
<p>Bug fixes / minor enhancements:
<br>
<p>- Updated internal/embedded copies of third-party software:
<br>
&nbsp;&nbsp;- Update the internal copy of ROMIO to that which shipped in MPICH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;3.1.4.
<br>
&nbsp;&nbsp;- Update internal copy of libevent to v2.0.22.
<br>
&nbsp;&nbsp;- Update internal copy of hwloc to v1.11.2.
<br>
- Notable new MCA parameters:
<br>
&nbsp;&nbsp;- opal_progress_lp_call_ration: Control how often low-priority
<br>
&nbsp;&nbsp;&nbsp;&nbsp;callbacks are made during Open MPI's main progress loop.
<br>
&nbsp;&nbsp;- opal_common_verbs_want_fork_support: This replaces the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_want_fork_support parameter.
<br>
- Add --with-platform-patches-dir configure option.
<br>
- Add --with-pmi-libdir configure option for environments that install
<br>
&nbsp;&nbsp;PMI libs in a non-default location.
<br>
- Various configure-related compatibility updates for newer versions
<br>
&nbsp;&nbsp;of libibverbs and OFED.
<br>
- Numerous fixes/improvements to orte-dvm.  Special thanks to Mark
<br>
&nbsp;&nbsp;Santcroos for his help.
<br>
- Fix a problem with timer code on ia32 platforms.  Thanks to
<br>
&nbsp;&nbsp;Paul Hargrove for reporting this and providing a patch.
<br>
- Fix a problem with use of a 64 bit atomic counter.  Thanks to
<br>
&nbsp;&nbsp;Paul Hargrove for reporting.
<br>
- Fix a problem with singleton job launching.  Thanks to Lisandro
<br>
&nbsp;&nbsp;Dalcin for reporting.
<br>
- Fix a problem with use of MPI_UNDEFINED with MPI_COMM_SPLIT_TYPE.
<br>
&nbsp;&nbsp;Thanks to Lisandro Dalcin for reporting.
<br>
- Silence a compiler warning in PSM MTL.  Thanks to Adrian Reber for
<br>
&nbsp;&nbsp;reporting this.
<br>
- Properly detect Intel TrueScale and OmniPath devices in the ACTIVE
<br>
&nbsp;&nbsp;state.  Thanks to Durga Choudhury for reporting the issue.
<br>
- Fix detection and use of Solaris Studio 12.5 (beta) compilers.
<br>
&nbsp;&nbsp;Thanks to Paul Hargrove for reporting and debugging.
<br>
- Fix various small memory leaks.
<br>
- Allow NULL arrays when creating empty MPI datatypes.
<br>
- Replace use of alloca with malloc for certain datatype creation
<br>
&nbsp;&nbsp;functions.  Thanks to Bogdan Sataric for reporting this.
<br>
- Fix use of MPI_LB and MPI_UB in creation of of certain MPI datatypes.
<br>
&nbsp;&nbsp;Thanks to Gus Correa for helping to fix this.
<br>
- Implement a workaround for a GNU Libtool problem.  Thanks to Eric
<br>
&nbsp;&nbsp;Schnetter for reporting and fixing.
<br>
- Improve hcoll library detection in configure.  Thanks to David
<br>
&nbsp;&nbsp;Shrader and Ake Sandgren for reporting this.
<br>
- Miscellaneous minor bug fixes in the hcoll component.
<br>
- Miscellaneous minor bug fixes in the ugni component.
<br>
- Fix problems with XRC detection in OFED 3.12 and older releases.
<br>
&nbsp;&nbsp;Thanks to Paul Hargrove for his analysis of this problem.
<br>
- Update (non-standard/experimental) Java MPI interfaces to support
<br>
&nbsp;&nbsp;MPI-3.1 functionality.
<br>
- Fix an issue with MCA parameters for Java bindings.  Thanks to
<br>
&nbsp;&nbsp;Takahiro Kawashima and Siegmar Gross for reporting this issue.
<br>
- Fix a problem when using persistent requests in the Java bindings.
<br>
&nbsp;&nbsp;Thanks to Nate Chambers for reporting.
<br>
- Fix problem with Java bindings on OX X 10.11.  Thanks to Alexander
<br>
&nbsp;&nbsp;Daryin for reporting this issue.
<br>
- Fix a performance problem for large messages for Cray XC systems.
<br>
&nbsp;&nbsp;Thanks to Jerome Vienne for reporting this.
<br>
- Fix an issue with MPI_WIN_LOCK_ALL.  Thanks to Thomas Jahns for
<br>
&nbsp;&nbsp;reporting.
<br>
- Fix an issue with passing a parameter to configure multiple times.
<br>
&nbsp;&nbsp;Thanks to QuesarVII for reporting and supplying a fix.
<br>
- Add support for ALPS resource allocation system on Cray CLE 5.2 and
<br>
&nbsp;&nbsp;later.  Thanks to Mark Santcroos.
<br>
- Corrections to the HACKING file.  Thanks to Maximilien Levesque.
<br>
- Fix an issue with user supplied reduction operator functions.
<br>
&nbsp;&nbsp;Thanks to Rupert Nash for reporting this.
<br>
- Fix an issue with an internal list management function.  Thanks to
<br>
&nbsp;&nbsp;Adrian Reber for reporting this.
<br>
- Fix a problem with MPI-RMA PSCW epochs.  Thanks to Berk Hess for
<br>
&nbsp;&nbsp;reporting this.
<br>
- Fix a problem in neighborhood collectives.  Thanks to Lisandro
<br>
&nbsp;&nbsp;Dalcin for reporting.
<br>
- Fix MPI_IREDUCE_SCATTER_BLOCK for a one-process communicator. Thanks
<br>
&nbsp;&nbsp;to Lisandro Dalcin for reporting.
<br>
- Add (Open MPI-specific) additional flavors to MPI_COMM_SPLIT_TYPE.
<br>
&nbsp;&nbsp;See MPI_Comm_split_type(3) for details.  Thanks to Nick Andersen for
<br>
&nbsp;&nbsp;supplying this enhancement.
<br>
- Improve closing of file descriptors during the job launch phase.
<br>
&nbsp;&nbsp;Thanks to Piotr Lesnicki for reporting and providing this
<br>
&nbsp;&nbsp;enhancement.
<br>
- Fix a problem in MPI_GET_ACCUMULATE and MPI_RGET_ACCUMULATE when
<br>
&nbsp;&nbsp;using Portals4.  Thanks to Nicolas Chevalier for reporting.
<br>
- Use correct include file for lstat prototype in ROMIO. Thanks to
<br>
&nbsp;&nbsp;William Throwe for finding and providing a fix.
<br>
- Add missing Fortran bindings for MPI_WIN_ALLOCATE.  Thanks to Christoph
<br>
&nbsp;&nbsp;Niethammer for reporting and fixing.
<br>
- Fortran related fixes to handle Intel 2016 compiler.  Thanks to
<br>
&nbsp;&nbsp;Fabrice Roy for reporting this.
<br>
- Fix a Fortran linkage issue.  Thanks to Macro Atzeri for finding and
<br>
&nbsp;&nbsp;suggesting a fix.
<br>
- Fix problem with using BIND(C) for Fortran bindings with logical
<br>
&nbsp;&nbsp;parameters.  Thanks to Paul Romano for reporting.
<br>
- Fix an issue with use of DL-related macros in opal library.  Thanks to
<br>
&nbsp;&nbsp;Scott Atchley for finding this.
<br>
- Fix an issue with parsing mpirun command line options which contain
<br>
&nbsp;&nbsp;colons.  Thanks to Lev Given for reporting.
<br>
- Fix a problem with Open MPI's package configury files.  Thanks to
<br>
&nbsp;&nbsp;Christoph Junghans for reporting.
<br>
- Fix a typo in the MPI_INTERCOMM_MERGE man page.  Thanks To Harald
<br>
&nbsp;&nbsp;Servat for reporting and correcting.
<br>
- Update man pages for non-blocking sends per MPI 3.1 standard.
<br>
&nbsp;&nbsp;Thanks to Alexander Pozdneev for reporting.
<br>
- Fix problem when compiling against PVFS2.  Thanks to Dave Love for
<br>
&nbsp;&nbsp;reporting.
<br>
- Fix problems with MPI_NEIGHBOR_ALLTOALL{V,W}.  Thanks to Willem
<br>
&nbsp;&nbsp;Vermin for reporting this issue.
<br>
- Fix various compilation problems on Cygwin.  Thanks to Marco Atzeri
<br>
&nbsp;&nbsp;for supplying these fixes.
<br>
- Fix problem with resizing of subarray and darray data types.  Thanks
<br>
&nbsp;&nbsp;to Keith Bennett and Dan Garmann for reporting.
<br>
- Fix a problem with MPI_COMBINER_RESIZED.  Thanks to James Ramsey for
<br>
&nbsp;&nbsp;the report.
<br>
- Fix an hwloc binding issue.  Thanks to Ben Menadue for reporting.
<br>
- Fix a problem with the shared memory (sm) BTL.  Thanks to Peter Wind
<br>
&nbsp;&nbsp;for the report.
<br>
- Fixes for heterogeneous support. Thanks to Siegmar Gross for reporting.
<br>
- Fix a problem with memchecker.  Thanks to Clinton Simpson for reporting.
<br>
- Fix a problem with MPI_UNWEIGHTED in topology functions.  Thanks to
<br>
&nbsp;&nbsp;Jun Kudo for reporting.
<br>
- Fix problem with a MCA parameter base filesystem types.  Thanks to
<br>
&nbsp;&nbsp;Siegmar Gross for reporting.
<br>
- Fix a problem with some windows info argument types.  Thanks to
<br>
&nbsp;&nbsp;Alastair McKinstry for reporting.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0086.php">Jeff Squyres (jsquyres): "[Open MPI Announce] This list is migrating!"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2016/06/0084.php">Ralph Castain: "[Open MPI Announce] Fwd: Open MPI v2.0.0rc3 now available"</a>
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
