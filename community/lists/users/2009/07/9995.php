<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 15:25:51 2009" -->
<!-- isoreceived="20090716192551" -->
<!-- sent="Thu, 16 Jul 2009 14:25:46 -0500" -->
<!-- isosent="20090716192546" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released" -->
<!-- id="44079e5f0907161225v680d5071p217a8c2e0f33735a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C1863806-1583-49BF-B511-613385C41C49_at_open-mpi.org" -->
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
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-16 15:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9996.php">Ashika Umanga Umagiliya: "[OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Previous message:</strong> <a href="9994.php">Steven Dale: "[OMPI users] Possible openmpi bug?"</a>
<li><strong>In reply to:</strong> <a href="9986.php">Ralph Castain: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10011.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Ralph says, the intent has been to maintain binary compatibility across
<br>
minor releases.  As for testing, I have not done extensive testing for
<br>
binary compatibility, but I have tested 1.3 &amp; 1.3.2-built versions of IMB
<br>
and the NPB suite with 1.3.3 and did not have any problems.  I did this for
<br>
sm, tcp &amp; openib transports.  So, in my environment, binary compatibility
<br>
looks to have been maintained within the 1.3-series releases.
<br>
Please let us know if you run across any binary incompatibilities.
<br>
<p>--Brad
<br>
<p><p><p>On Wed, Jul 15, 2009 at 4:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...there should be messages on both the user and devel lists regarding
</span><br>
<span class="quotelev1">&gt; binary compatibility at the MPI level being promised for 1.3.2 and beyond.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, we did make that pledge. However, as I said, I am not sure people
</span><br>
<span class="quotelev1">&gt; verified that - though I hope someone did! :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 15, 2009, at 3:29 PM, Jim Kress wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Did not see any other email on the list wrt this topic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your response.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Wednesday, July 15, 2009 4:26 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe that was the intent, per other emails on that subject.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I am not personally aware of people who have tested
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it - though they may well exist.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jul 15, 2009 at 2:18 PM, Jim Kress
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;jimkress_58_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; Does use of 1.3.3 require recompilation of applications that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; were compiled using 1.3.2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of jimkress_58
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; Sent: Tuesday, July 14, 2009 3:05 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; Subject: Re: [OMPI users] [Open MPI Announce] Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI v1.3.3 released
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; Does use of 1.3.3 require recompilation of applications that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; were compiled using 1.3.2?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; Jim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; From: announce-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; [mailto:announce-bounces_at_[hidden]]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; On Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; Sent: Tuesday, July 14, 2009 2:11 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; To: OpenMPI Announce
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; Subject: [Open MPI Announce] Open MPI v1.3.3 released
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; The Open MPI Team, representing a consortium of research,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; academic, and industry partners, is pleased to announce the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; release of Open MPI version 1.3.3. This release is mainly a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; bug fix release over the v1.3.3 release, but there are few
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; new features, including support for Microsoft Windows.  We
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; strongly recommend that all users upgrade to version 1.3.3 if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; possible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; Version 1.3.3 can be downloaded from the main Open MPI web
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; site or any of its mirrors (mirrors will be updating shortly).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; Here is a list of changes in v1.3.3 as compared to v1.3.2:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Fix a number of issues with the openib BTL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (OpenFabrics) RDMA CM,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    including a memory corruption bug, a shutdown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deadlock, and a route
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    timeout.  Thanks to David McMillen and Hal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rosenstock for help in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    tracking down the issues.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Change the behavior of the EXTRA_STATE parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is passed to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    Fortran attribute callback functions: this value
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is now stored
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    internally in MPI -- it no longer references the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; original value
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    passed by MPI_*_CREATE_KEYVAL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Allow the overriding RFC1918 and RFC3330 for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specification of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    &quot;private&quot; networks, thereby influencing Open MPI's TCP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    &quot;reachability&quot; computations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Improve flow control issues in the sm btl, by both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tweaking the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    shared memory progression rules and by enabling the &quot;sync&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; collective
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    to barrier every 1,000th collective.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Various fixes for the IBM XL C/C++ v10.1 compiler.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Allow explicit disabling of ptmalloc2 hooks at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime (e.g., enable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    support for Debain's builtroot system).  Thanks to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Manuel Prinz and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    the rest of the Debian crew for helping identify and fix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; this issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Various minor fixes for the I/O forwarding subsystem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Big endian iWARP fixes in the Open Fabrics RDMA CM support.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Update support for various OpenFabrics devices in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the openib BTL's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    .ini file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Fixed undefined symbol issue with Open MPI's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parallel debugger
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    message queue support so it can be compiled by Sun Studio
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; compilers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Update MPI_SUBVERSION to 1 in the Fortran bindings.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Fix MPI_GRAPH_CREATE Fortran 90 binding.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Fix MPI_GROUP_COMPARE behavior with regards to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_IDENT.  Thanks to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    Geoffrey Irving for identifying the problem and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supplying the fix.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Silence gcc 4.1 compiler warnings about type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; punning.  Thanks to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    Number Cruncher for the fix.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Added more Valgrind and other memory-cleanup fixes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    various Open MPI users for help with these issues.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Miscellaneous VampirTrace fixes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - More fixes for openib credits in heavy-congestion scenarios.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Slightly decrease the latency in the openib BTL in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some conditions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    (add &quot;send immediate&quot; support to the openib BTL).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Ensure to allow MPI_REQUEST_GET_STATUS to accept an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    MPI_STATUS_IGNORE parameter.  Thanks to Shaun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jackman for the bug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    report.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; - Added Microsoft Windows support.  See
</span><br>
<span class="quotelev3">&gt;&gt;&gt; README.WINDOWS file for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;    details.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; announce mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; announce_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/announce">http://www.open-mpi.org/mailman/listinfo.cgi/announce</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;        &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9995/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9996.php">Ashika Umanga Umagiliya: "[OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Previous message:</strong> <a href="9994.php">Steven Dale: "[OMPI users] Possible openmpi bug?"</a>
<li><strong>In reply to:</strong> <a href="9986.php">Ralph Castain: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10011.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
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
