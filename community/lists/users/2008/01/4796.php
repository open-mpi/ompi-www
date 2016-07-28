<?
$subject_val = "Re: [OMPI users] Open MPI v1.2.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 16:18:34 2008" -->
<!-- isoreceived="20080108211834" -->
<!-- sent="Tue, 8 Jan 2008 13:18:27 -0800 (PST)" -->
<!-- isosent="20080108211827" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI v1.2.5 released" -->
<!-- id="743163.21415.qm_at_web57603.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="ea86ce220801081148n154a93f6p8ac84d0e7a6bcd2b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI v1.2.5 released<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-08 16:18:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4797.php">Andreas Schäfer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Previous message:</strong> <a href="4795.php">Jeff Squyres: "Re: [OMPI users] MPI/Pro Error"</a>
<li><strong>In reply to:</strong> <a href="4794.php">Tim Mattox: "[OMPI users] Open MPI v1.2.5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4798.php">Jeff Squyres: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>Reply:</strong> <a href="4798.php">Jeff Squyres: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Surely naive questions, though to avoid a mess and much time, having no expert
<br>
in systems here:
<br>
<p>Is there a recipe for &quot;upgrading&quot; to 1.2.5/ifort in Linux from version 1.2.3
<br>
compiled ifort? (my Linux is Debian amd64)?
<br>
<p><p>What about the parallelized programs that depend on Open MPI? (several
<br>
instances in my system)
<br>
<p>What about programs that were compiled from config configured for mpich2,
<br>
though run parallel by pointing to Open MPI 1.2 (one instance in my system).
<br>
<p>Thanks
<br>
francesco pietra
<br>
<p><p><p><p><p>--- Tim Mattox &lt;timattox_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The Open MPI Team, representing a consortium of research, academic,
</span><br>
<span class="quotelev1">&gt; and industry partners, is pleased to announce the release of Open MPI
</span><br>
<span class="quotelev1">&gt; version 1.2.5. This release is mainly a bug fix release over the v1.2.4
</span><br>
<span class="quotelev1">&gt; release, but there are few new features.  We strongly recommend
</span><br>
<span class="quotelev1">&gt; that all users upgrade to version 1.2.5 if possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Version 1.2.5 can be downloaded from the main Open MPI web site or
</span><br>
<span class="quotelev1">&gt; any of its mirrors (mirrors will be updating shortly).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are a list of changes in v1.2.5 as compared to v1.2.4:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Fixed compile issue with open() on Fedora 8 (and newer) platforms.
</span><br>
<span class="quotelev1">&gt;   Thanks to Sebastian Schmitzdorff for noticing the problem.
</span><br>
<span class="quotelev1">&gt; - Added run-time warnings during MPI_INIT when MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt;   and/or progression threads are used (the OMPI v1.2 series does not
</span><br>
<span class="quotelev1">&gt;   support these well at all).
</span><br>
<span class="quotelev1">&gt; - Better handling of ECONNABORTED from connect on Linux.  Thanks to
</span><br>
<span class="quotelev1">&gt;   Bob Soliday for noticing the problem; thanks to Brian Barrett for
</span><br>
<span class="quotelev1">&gt;   submitting a patch.
</span><br>
<span class="quotelev1">&gt; - Reduce extraneous output from OOB when TCP connections must
</span><br>
<span class="quotelev1">&gt;   be retried.  Thanks to Brian Barrett for submitting a patch.
</span><br>
<span class="quotelev1">&gt; - Fix for ConnectX devices and OFED 1.3.  See ticket #1190.
</span><br>
<span class="quotelev1">&gt; - Fixed a configure problem for Fortran 90 on Cray systems.  Ticket #1189.
</span><br>
<span class="quotelev1">&gt; - Fix an uninitialized variable in the error case in opal_init.c.
</span><br>
<span class="quotelev1">&gt;   Thanks to Ake Sandgren for pointing out the mistake.
</span><br>
<span class="quotelev1">&gt; - Fixed a hang in configure if $USER was not defined.  Thanks to
</span><br>
<span class="quotelev1">&gt;   Darrell Kresge for noticing the problem.  See ticket #900.
</span><br>
<span class="quotelev1">&gt; - Added support for parallel debuggers even when we have an optimized build.
</span><br>
<span class="quotelev1">&gt;   See ticket #1178.
</span><br>
<span class="quotelev1">&gt; - Worked around a bus error in the Mac OS X 10.5.X (Leopard) linker when
</span><br>
<span class="quotelev1">&gt;   compiling Open MPI with -g.  See ticket #1179.
</span><br>
<span class="quotelev1">&gt; - Removed some warnings about 'rm' from Mac OS X 10.5 (Leopard) builds.
</span><br>
<span class="quotelev1">&gt; - Fix the handling of mx_finalize().  See ticket #1177.
</span><br>
<span class="quotelev1">&gt;   Thanks to Ake Sandgren for bringing this issue to our attention.
</span><br>
<span class="quotelev1">&gt; - Fixed minor file descriptor leak in the Altix timer code.  Thanks to
</span><br>
<span class="quotelev1">&gt;   Paul Hargrove for noticing the problem and supplying the fix.
</span><br>
<span class="quotelev1">&gt; - Fix a problem when using a different compiler for C and Objective C.
</span><br>
<span class="quotelev1">&gt;   See ticket #1153.
</span><br>
<span class="quotelev1">&gt; - Fix segfault in MPI_COMM_SPAWN when the user specified a working
</span><br>
<span class="quotelev1">&gt;   directory.  Thanks to Murat Knecht for reporting this and suggesting
</span><br>
<span class="quotelev1">&gt;   a fix.
</span><br>
<span class="quotelev1">&gt; - A few manpage fixes from the Debian Open MPI maintainers.  Thanks to
</span><br>
<span class="quotelev1">&gt;   Tilman Koschnick, Sylvestre Ledru, and Dirk Eddelbuettel.
</span><br>
<span class="quotelev1">&gt; - Fixed issue with pthread detection when compilers are not all
</span><br>
<span class="quotelev1">&gt;   from the same vendor.  Thanks to Ake Sandgren for the bug
</span><br>
<span class="quotelev1">&gt;   report.  See ticket #1150.
</span><br>
<span class="quotelev1">&gt; - Fixed vector collectives in the self module.  See ticket #1166.
</span><br>
<span class="quotelev1">&gt; - Fixed some data-type engine bugs: an indexing bug, and an alignment bug.
</span><br>
<span class="quotelev1">&gt;   See ticket #1165.
</span><br>
<span class="quotelev1">&gt; - Only set the MPI_APPNUM attribute if it is defined.  See ticket
</span><br>
<span class="quotelev1">&gt;   #1164.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Mattox
</span><br>
<span class="quotelev1">&gt; Open Systems Lab
</span><br>
<span class="quotelev1">&gt; Indiana University
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
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Never miss a thing.  Make Yahoo your home page. 
<br>
<a href="http://www.yahoo.com/r/hs">http://www.yahoo.com/r/hs</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4797.php">Andreas Schäfer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Previous message:</strong> <a href="4795.php">Jeff Squyres: "Re: [OMPI users] MPI/Pro Error"</a>
<li><strong>In reply to:</strong> <a href="4794.php">Tim Mattox: "[OMPI users] Open MPI v1.2.5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4798.php">Jeff Squyres: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>Reply:</strong> <a href="4798.php">Jeff Squyres: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
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
