<?
$subject_val = "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 12:57:27 2014" -->
<!-- isoreceived="20141222175727" -->
<!-- sent="Mon, 22 Dec 2014 09:57:22 -0800" -->
<!-- isosent="20141222175722" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released" -->
<!-- id="4A789092-9428-4A3C-B50B-4E954B941850_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj6issGQMQ4FB66HV+n4iDescAhU_Q-A2+kL-RYmVaoHWw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-22 12:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16717.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<li><strong>Previous message:</strong> <a href="16715.php">Howard Pritchard: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>In reply to:</strong> <a href="16715.php">Howard Pritchard: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It would have to be for 1.8.5 as there is no way to change that configure.m4 without re-releasing.
<br>
<p>We still apparently have a thread-related performance issue as reported by Intel. It appears that we didn&#226;&#128;&#153;t completely manage to fix the blasted thread locks, leaving some still on by default, thereby causing a roughly 10-15% loss of performance relative to earlier in the 1.8 series. So a 1.8.5 is going to be required fairly soon anyway.
<br>
<p>Sigh
<br>
<p><p><span class="quotelev1">&gt; On Dec 22, 2014, at 9:46 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I opened an issue 322 &lt;<a href="https://github.com/open-mpi/ompi/issues/322">https://github.com/open-mpi/ompi/issues/322</a>&gt; about this and gave put it on 1.8.5 milestone.
</span><br>
<span class="quotelev1">&gt; I'll submit a PR to remove the sn/xpmem.h usage in the vader
</span><br>
<span class="quotelev1">&gt; config file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think to do justice to SGI UV, someone would have to put in time
</span><br>
<span class="quotelev1">&gt; to figure out how to use their GRU api.  I'm pretty sure that's the way the
</span><br>
<span class="quotelev1">&gt; sgi mpi delivers small messages efficiently.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-12-22 8:43 GMT-07:00 Nathan Hjelm &lt;hjelmn_at_[hidden] &lt;mailto:hjelmn_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, I figured out why XPMEM is failing on SGI UV but have not figured
</span><br>
<span class="quotelev1">&gt; out a fix. If possible can we remove the check for sn/xpmem.h in the
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/vader/configure.m4. I hopefully will have a better fix for
</span><br>
<span class="quotelev1">&gt; 1.8.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 19, 2014 at 11:59:29PM -0800, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Sorry to rain on the parade, but SGI UV is still broken by default.
</span><br>
<span class="quotelev2">&gt; &gt;    I reported this as present in 1.8.4rc5 and Nathan had claimed to be
</span><br>
<span class="quotelev2">&gt; &gt;    working on it.
</span><br>
<span class="quotelev2">&gt; &gt;    A reminder that all it takes is a 1-line change in
</span><br>
<span class="quotelev2">&gt; &gt;    ompi/mca/btl/vader/configure.m4 to not search for sn/xpmem.h
</span><br>
<span class="quotelev2">&gt; &gt;    -Paul
</span><br>
<span class="quotelev2">&gt; &gt;    On Fri, Dec 19, 2014 at 7:26 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      The Open MPI Team, representing a consortium of research, academic, and
</span><br>
<span class="quotelev2">&gt; &gt;      industry partners, is pleased to announce the release of Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;      version 1.8.4.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      v1.8.4 is a bug fix release.  All users are encouraged to upgrade to
</span><br>
<span class="quotelev2">&gt; &gt;      v1.8.4 when possible.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Version 1.8.4 can be downloaded from the main Open MPI web site or any
</span><br>
<span class="quotelev2">&gt; &gt;      of its mirrors  (mirrors will be updating shortly).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Here is a list of changes in v1.8.4 as compared to v1.8.3:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      - Fix MPI_SIZEOF; now available in mpif.h for modern Fortran compilers
</span><br>
<span class="quotelev2">&gt; &gt;        (see README for more details).  Also fixed various compiler/linker
</span><br>
<span class="quotelev2">&gt; &gt;        errors.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fixed inadvertant Fortran ABI break between v1.8.1 and v1.8.2 in the
</span><br>
<span class="quotelev2">&gt; &gt;        mpi interface module when compiled with gfortran &gt;= v4.9.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fix various MPI_THREAD_MULTIPLE issues in the TCP BTL.
</span><br>
<span class="quotelev2">&gt; &gt;      - mpirun no longer requires the --hetero-nodes switch; it will
</span><br>
<span class="quotelev2">&gt; &gt;        automatically detect when running in heterogeneous scenarios.
</span><br>
<span class="quotelev2">&gt; &gt;      - Update LSF support, to include revamped affinity functionality.
</span><br>
<span class="quotelev2">&gt; &gt;      - Update embedded hwloc to v1.9.1.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fixed max registerable memory computation in the openib BTL.
</span><br>
<span class="quotelev2">&gt; &gt;      - Updated error message when debuggers are unable to find various
</span><br>
<span class="quotelev2">&gt; &gt;        symbols/types to be more clear.  Thanks to Dave Love for raising the
</span><br>
<span class="quotelev2">&gt; &gt;        issue.
</span><br>
<span class="quotelev2">&gt; &gt;      - Added proper support for LSF and PBS/Torque libraries in static
</span><br>
<span class="quotelev2">&gt; &gt;      builds.
</span><br>
<span class="quotelev2">&gt; &gt;      - Rankfiles now support physical processor IDs.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fixed potential hang in MPI_ABORT.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fixed problems with the PSM MTL and &quot;re-connect&quot; scenarios, such as
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_INTERCOMM_CREATE.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fix MPI_IREDUCE_SCATTER with a single process.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fix (rare) race condition in stdout/stderr funneling to mpirun where
</span><br>
<span class="quotelev2">&gt; &gt;        some trailing output could get lost when a process terminated.
</span><br>
<span class="quotelev2">&gt; &gt;      - Removed inadvertent change that set --enable-mpi-thread-multiple &quot;on&quot;
</span><br>
<span class="quotelev2">&gt; &gt;        by default, thus impacting performance for non-threaded apps.
</span><br>
<span class="quotelev2">&gt; &gt;      - Significantly reduced startup time by optimizing internal hash table
</span><br>
<span class="quotelev2">&gt; &gt;        implementation.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fixed OS X linking with the Fortran mpi module when used with
</span><br>
<span class="quotelev2">&gt; &gt;        gfortran &gt;= 4.9.  Thanks to Github user yafshar for raising the
</span><br>
<span class="quotelev2">&gt; &gt;        issue.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fixed memory leak on Cygwin platforms.  Thanks for Marco Atzeri for
</span><br>
<span class="quotelev2">&gt; &gt;        reporting the issue.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fixed seg fault in neighborhood collectives when the degree of the
</span><br>
<span class="quotelev2">&gt; &gt;        topology is higher than the communicator size.  Thanks to Lisandro
</span><br>
<span class="quotelev2">&gt; &gt;        Dalcin for reporting the issue.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fixed segfault in neighborhood collectives under certain use-cases.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fixed various issues regarding Solaris support.  Thanks to Siegmar
</span><br>
<span class="quotelev2">&gt; &gt;        Gross for patiently identifying all the issues.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fixed PMI configure tests for certain Slurm installation patterns.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fixed param registration issue in Java bindings.  Thanks to Takahiro
</span><br>
<span class="quotelev2">&gt; &gt;        Kawashima and Siegmar Gross for identifying the issue.
</span><br>
<span class="quotelev2">&gt; &gt;      - Several man page fixes.
</span><br>
<span class="quotelev2">&gt; &gt;      - Silence several warnings and close some memory leaks (more remain,
</span><br>
<span class="quotelev2">&gt; &gt;        but it's better than it was).
</span><br>
<span class="quotelev2">&gt; &gt;      - Re-enabled the use of CMA and knem in the shared memory BTL.
</span><br>
<span class="quotelev2">&gt; &gt;      - Updated mpirun manpage to correctly explain new map/rank/binding
</span><br>
<span class="quotelev2">&gt; &gt;      options.
</span><br>
<span class="quotelev2">&gt; &gt;      - Fixed MPI_IALLGATHER problem with intercommunicators.  Thanks for
</span><br>
<span class="quotelev2">&gt; &gt;        Takahiro Kawashima for the patch.
</span><br>
<span class="quotelev2">&gt; &gt;      - Numerous updates and performance improvements to OpenSHMEM.
</span><br>
<span class="quotelev2">&gt; &gt;      - Turned off message coalescing in the openib BTL until a proper fix
</span><br>
<span class="quotelev2">&gt; &gt;        for that capability can be provided (tentatively expected for 1.8.5)
</span><br>
<span class="quotelev2">&gt; &gt;      - Fix a bug in iof output that dates back to the dinosaurs which would
</span><br>
<span class="quotelev2">&gt; &gt;        output extra bytes if the system was very heavily loaded
</span><br>
<span class="quotelev2">&gt; &gt;      - Fix a bug where specifying mca_component_show_load_errors=0 could
</span><br>
<span class="quotelev2">&gt; &gt;        cause ompi_info to segfault
</span><br>
<span class="quotelev2">&gt; &gt;      - Updated valgrind suppression file
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;      announce mailing list
</span><br>
<span class="quotelev2">&gt; &gt;      announce_at_[hidden] &lt;mailto:announce_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/announce">http://www.open-mpi.org/mailman/listinfo.cgi/announce</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/announce">http://www.open-mpi.org/mailman/listinfo.cgi/announce</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Searchable archives:
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/announce/2014/12/index.php">http://www.open-mpi.org/community/lists/announce/2014/12/index.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/announce/2014/12/index.php">http://www.open-mpi.org/community/lists/announce/2014/12/index.php</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    --
</span><br>
<span class="quotelev2">&gt; &gt;    Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt;    Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16704.php">http://www.open-mpi.org/community/lists/devel/2014/12/16704.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16704.php">http://www.open-mpi.org/community/lists/devel/2014/12/16704.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16710.php">http://www.open-mpi.org/community/lists/devel/2014/12/16710.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16710.php">http://www.open-mpi.org/community/lists/devel/2014/12/16710.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16715.php">http://www.open-mpi.org/community/lists/devel/2014/12/16715.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16716/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16717.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<li><strong>Previous message:</strong> <a href="16715.php">Howard Pritchard: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>In reply to:</strong> <a href="16715.php">Howard Pritchard: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
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
