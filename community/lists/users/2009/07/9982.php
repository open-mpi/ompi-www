<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 16:19:17 2009" -->
<!-- isoreceived="20090715201917" -->
<!-- sent="Wed, 15 Jul 2009 16:18:42 -0400" -->
<!-- isosent="20090715201842" -->
<!-- name="Jim Kress" -->
<!-- email="jimkress_58_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released" -->
<!-- id="8521EF140EC44885A349A2119470721B_at_inspiron9100" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D58FFE7D98FF4110AED0C21C06F381DA_at_libraryPC" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released<br>
<strong>From:</strong> Jim Kress (<em>jimkress_58_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 16:18:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9983.php">Ralph Castain: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="9981.php">Jeff Squyres: "Re: [OMPI users] questions about tracing OpenMPI program"</a>
<li><strong>In reply to:</strong> <a href="9957.php">jimkress_58: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9983.php">Ralph Castain: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Reply:</strong> <a href="9983.php">Ralph Castain: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt; Does use of 1.3.3 require recompilation of applications that 
</span><br>
<span class="quotelev1">&gt; were compiled using 1.3.2?
</span><br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of jimkress_58
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, July 14, 2009 3:05 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does use of 1.3.3 require recompilation of applications that 
</span><br>
<span class="quotelev1">&gt; were compiled using 1.3.2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: announce-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:announce-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, July 14, 2009 2:11 PM
</span><br>
<span class="quotelev1">&gt; To: OpenMPI Announce
</span><br>
<span class="quotelev1">&gt; Subject: [Open MPI Announce] Open MPI v1.3.3 released
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Open MPI Team, representing a consortium of research, 
</span><br>
<span class="quotelev1">&gt; academic, and industry partners, is pleased to announce the 
</span><br>
<span class="quotelev1">&gt; release of Open MPI version 1.3.3. This release is mainly a 
</span><br>
<span class="quotelev1">&gt; bug fix release over the v1.3.3 release, but there are few 
</span><br>
<span class="quotelev1">&gt; new features, including support for Microsoft Windows.  We 
</span><br>
<span class="quotelev1">&gt; strongly recommend that all users upgrade to version 1.3.3 if 
</span><br>
<span class="quotelev1">&gt; possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Version 1.3.3 can be downloaded from the main Open MPI web 
</span><br>
<span class="quotelev1">&gt; site or any of its mirrors (mirrors will be updating shortly).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a list of changes in v1.3.3 as compared to v1.3.2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Fix a number of issues with the openib BTL (OpenFabrics) RDMA CM,
</span><br>
<span class="quotelev1">&gt;    including a memory corruption bug, a shutdown deadlock, and a route
</span><br>
<span class="quotelev1">&gt;    timeout.  Thanks to David McMillen and Hal Rosenstock for help in
</span><br>
<span class="quotelev1">&gt;    tracking down the issues.
</span><br>
<span class="quotelev1">&gt; - Change the behavior of the EXTRA_STATE parameter that is passed to
</span><br>
<span class="quotelev1">&gt;    Fortran attribute callback functions: this value is now stored
</span><br>
<span class="quotelev1">&gt;    internally in MPI -- it no longer references the original value
</span><br>
<span class="quotelev1">&gt;    passed by MPI_*_CREATE_KEYVAL.
</span><br>
<span class="quotelev1">&gt; - Allow the overriding RFC1918 and RFC3330 for the specification of
</span><br>
<span class="quotelev1">&gt;    &quot;private&quot; networks, thereby influencing Open MPI's TCP
</span><br>
<span class="quotelev1">&gt;    &quot;reachability&quot; computations.
</span><br>
<span class="quotelev1">&gt; - Improve flow control issues in the sm btl, by both tweaking the
</span><br>
<span class="quotelev1">&gt;    shared memory progression rules and by enabling the &quot;sync&quot; 
</span><br>
<span class="quotelev1">&gt; collective
</span><br>
<span class="quotelev1">&gt;    to barrier every 1,000th collective.
</span><br>
<span class="quotelev1">&gt; - Various fixes for the IBM XL C/C++ v10.1 compiler.
</span><br>
<span class="quotelev1">&gt; - Allow explicit disabling of ptmalloc2 hooks at runtime (e.g., enable
</span><br>
<span class="quotelev1">&gt;    support for Debain's builtroot system).  Thanks to Manuel Prinz and
</span><br>
<span class="quotelev1">&gt;    the rest of the Debian crew for helping identify and fix 
</span><br>
<span class="quotelev1">&gt; this issue.
</span><br>
<span class="quotelev1">&gt; - Various minor fixes for the I/O forwarding subsystem.
</span><br>
<span class="quotelev1">&gt; - Big endian iWARP fixes in the Open Fabrics RDMA CM support.
</span><br>
<span class="quotelev1">&gt; - Update support for various OpenFabrics devices in the openib BTL's
</span><br>
<span class="quotelev1">&gt;    .ini file.
</span><br>
<span class="quotelev1">&gt; - Fixed undefined symbol issue with Open MPI's parallel debugger
</span><br>
<span class="quotelev1">&gt;    message queue support so it can be compiled by Sun Studio 
</span><br>
<span class="quotelev1">&gt; compilers.
</span><br>
<span class="quotelev1">&gt; - Update MPI_SUBVERSION to 1 in the Fortran bindings.
</span><br>
<span class="quotelev1">&gt; - Fix MPI_GRAPH_CREATE Fortran 90 binding.
</span><br>
<span class="quotelev1">&gt; - Fix MPI_GROUP_COMPARE behavior with regards to MPI_IDENT.  Thanks to
</span><br>
<span class="quotelev1">&gt;    Geoffrey Irving for identifying the problem and supplying the fix.
</span><br>
<span class="quotelev1">&gt; - Silence gcc 4.1 compiler warnings about type punning.  Thanks to
</span><br>
<span class="quotelev1">&gt;    Number Cruncher for the fix.
</span><br>
<span class="quotelev1">&gt; - Added more Valgrind and other memory-cleanup fixes.  Thanks to
</span><br>
<span class="quotelev1">&gt;    various Open MPI users for help with these issues.
</span><br>
<span class="quotelev1">&gt; - Miscellaneous VampirTrace fixes.
</span><br>
<span class="quotelev1">&gt; - More fixes for openib credits in heavy-congestion scenarios.
</span><br>
<span class="quotelev1">&gt; - Slightly decrease the latency in the openib BTL in some conditions
</span><br>
<span class="quotelev1">&gt;    (add &quot;send immediate&quot; support to the openib BTL).
</span><br>
<span class="quotelev1">&gt; - Ensure to allow MPI_REQUEST_GET_STATUS to accept an
</span><br>
<span class="quotelev1">&gt;    MPI_STATUS_IGNORE parameter.  Thanks to Shaun Jackman for the bug
</span><br>
<span class="quotelev1">&gt;    report.
</span><br>
<span class="quotelev1">&gt; - Added Microsoft Windows support.  See README.WINDOWS file for
</span><br>
<span class="quotelev1">&gt;    details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; announce mailing list
</span><br>
<span class="quotelev1">&gt; announce_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/announce">http://www.open-mpi.org/mailman/listinfo.cgi/announce</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9983.php">Ralph Castain: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="9981.php">Jeff Squyres: "Re: [OMPI users] questions about tracing OpenMPI program"</a>
<li><strong>In reply to:</strong> <a href="9957.php">jimkress_58: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9983.php">Ralph Castain: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Reply:</strong> <a href="9983.php">Ralph Castain: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
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
