<?
$subject_val = "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 20 02:59:32 2014" -->
<!-- isoreceived="20141220075932" -->
<!-- sent="Fri, 19 Dec 2014 23:59:29 -0800" -->
<!-- isosent="20141220075929" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released" -->
<!-- id="CAAvDA16DFUYAYZGbN=ghFPs3rGKLW4y=d3ji-_eE7c-JCRwkbg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="990923DB-9265-4C21-B0B1-C0775140167C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-20 02:59:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16705.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16703.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16710.php">Nathan Hjelm: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>Reply:</strong> <a href="16710.php">Nathan Hjelm: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry to rain on the parade, but SGI UV is still broken by default.
<br>
I reported this as present in 1.8.4rc5 and Nathan had claimed to be working
<br>
on it.
<br>
<p>A reminder that all it takes is a 1-line change in
<br>
ompi/mca/btl/vader/configure.m4 to not search for sn/xpmem.h
<br>
<p>-Paul
<br>
<p>On Fri, Dec 19, 2014 at 7:26 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The Open MPI Team, representing a consortium of research, academic, and
</span><br>
<span class="quotelev1">&gt; industry partners, is pleased to announce the release of Open MPI version
</span><br>
<span class="quotelev1">&gt; 1.8.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.8.4 is a bug fix release.  All users are encouraged to upgrade to
</span><br>
<span class="quotelev1">&gt; v1.8.4 when possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version 1.8.4 can be downloaded from the main Open MPI web site or any of
</span><br>
<span class="quotelev1">&gt; its mirrors  (mirrors will be updating shortly).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a list of changes in v1.8.4 as compared to v1.8.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Fix MPI_SIZEOF; now available in mpif.h for modern Fortran compilers
</span><br>
<span class="quotelev1">&gt;   (see README for more details).  Also fixed various compiler/linker
</span><br>
<span class="quotelev1">&gt;   errors.
</span><br>
<span class="quotelev1">&gt; - Fixed inadvertant Fortran ABI break between v1.8.1 and v1.8.2 in the
</span><br>
<span class="quotelev1">&gt;   mpi interface module when compiled with gfortran &gt;= v4.9.
</span><br>
<span class="quotelev1">&gt; - Fix various MPI_THREAD_MULTIPLE issues in the TCP BTL.
</span><br>
<span class="quotelev1">&gt; - mpirun no longer requires the --hetero-nodes switch; it will
</span><br>
<span class="quotelev1">&gt;   automatically detect when running in heterogeneous scenarios.
</span><br>
<span class="quotelev1">&gt; - Update LSF support, to include revamped affinity functionality.
</span><br>
<span class="quotelev1">&gt; - Update embedded hwloc to v1.9.1.
</span><br>
<span class="quotelev1">&gt; - Fixed max registerable memory computation in the openib BTL.
</span><br>
<span class="quotelev1">&gt; - Updated error message when debuggers are unable to find various
</span><br>
<span class="quotelev1">&gt;   symbols/types to be more clear.  Thanks to Dave Love for raising the
</span><br>
<span class="quotelev1">&gt;   issue.
</span><br>
<span class="quotelev1">&gt; - Added proper support for LSF and PBS/Torque libraries in static builds.
</span><br>
<span class="quotelev1">&gt; - Rankfiles now support physical processor IDs.
</span><br>
<span class="quotelev1">&gt; - Fixed potential hang in MPI_ABORT.
</span><br>
<span class="quotelev1">&gt; - Fixed problems with the PSM MTL and &quot;re-connect&quot; scenarios, such as
</span><br>
<span class="quotelev1">&gt;   MPI_INTERCOMM_CREATE.
</span><br>
<span class="quotelev1">&gt; - Fix MPI_IREDUCE_SCATTER with a single process.
</span><br>
<span class="quotelev1">&gt; - Fix (rare) race condition in stdout/stderr funneling to mpirun where
</span><br>
<span class="quotelev1">&gt;   some trailing output could get lost when a process terminated.
</span><br>
<span class="quotelev1">&gt; - Removed inadvertent change that set --enable-mpi-thread-multiple &quot;on&quot;
</span><br>
<span class="quotelev1">&gt;   by default, thus impacting performance for non-threaded apps.
</span><br>
<span class="quotelev1">&gt; - Significantly reduced startup time by optimizing internal hash table
</span><br>
<span class="quotelev1">&gt;   implementation.
</span><br>
<span class="quotelev1">&gt; - Fixed OS X linking with the Fortran mpi module when used with
</span><br>
<span class="quotelev1">&gt;   gfortran &gt;= 4.9.  Thanks to Github user yafshar for raising the
</span><br>
<span class="quotelev1">&gt;   issue.
</span><br>
<span class="quotelev1">&gt; - Fixed memory leak on Cygwin platforms.  Thanks for Marco Atzeri for
</span><br>
<span class="quotelev1">&gt;   reporting the issue.
</span><br>
<span class="quotelev1">&gt; - Fixed seg fault in neighborhood collectives when the degree of the
</span><br>
<span class="quotelev1">&gt;   topology is higher than the communicator size.  Thanks to Lisandro
</span><br>
<span class="quotelev1">&gt;   Dalcin for reporting the issue.
</span><br>
<span class="quotelev1">&gt; - Fixed segfault in neighborhood collectives under certain use-cases.
</span><br>
<span class="quotelev1">&gt; - Fixed various issues regarding Solaris support.  Thanks to Siegmar
</span><br>
<span class="quotelev1">&gt;   Gross for patiently identifying all the issues.
</span><br>
<span class="quotelev1">&gt; - Fixed PMI configure tests for certain Slurm installation patterns.
</span><br>
<span class="quotelev1">&gt; - Fixed param registration issue in Java bindings.  Thanks to Takahiro
</span><br>
<span class="quotelev1">&gt;   Kawashima and Siegmar Gross for identifying the issue.
</span><br>
<span class="quotelev1">&gt; - Several man page fixes.
</span><br>
<span class="quotelev1">&gt; - Silence several warnings and close some memory leaks (more remain,
</span><br>
<span class="quotelev1">&gt;   but it's better than it was).
</span><br>
<span class="quotelev1">&gt; - Re-enabled the use of CMA and knem in the shared memory BTL.
</span><br>
<span class="quotelev1">&gt; - Updated mpirun manpage to correctly explain new map/rank/binding options.
</span><br>
<span class="quotelev1">&gt; - Fixed MPI_IALLGATHER problem with intercommunicators.  Thanks for
</span><br>
<span class="quotelev1">&gt;   Takahiro Kawashima for the patch.
</span><br>
<span class="quotelev1">&gt; - Numerous updates and performance improvements to OpenSHMEM.
</span><br>
<span class="quotelev1">&gt; - Turned off message coalescing in the openib BTL until a proper fix
</span><br>
<span class="quotelev1">&gt;   for that capability can be provided (tentatively expected for 1.8.5)
</span><br>
<span class="quotelev1">&gt; - Fix a bug in iof output that dates back to the dinosaurs which would
</span><br>
<span class="quotelev1">&gt;   output extra bytes if the system was very heavily loaded
</span><br>
<span class="quotelev1">&gt; - Fix a bug where specifying mca_component_show_load_errors=0 could
</span><br>
<span class="quotelev1">&gt;   cause ompi_info to segfault
</span><br>
<span class="quotelev1">&gt; - Updated valgrind suppression file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; announce mailing list
</span><br>
<span class="quotelev1">&gt; announce_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/announce">http://www.open-mpi.org/mailman/listinfo.cgi/announce</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/announce/2014/12/index.php">http://www.open-mpi.org/community/lists/announce/2014/12/index.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16704/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16705.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16703.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16710.php">Nathan Hjelm: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>Reply:</strong> <a href="16710.php">Nathan Hjelm: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
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
