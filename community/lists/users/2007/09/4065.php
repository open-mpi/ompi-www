<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 26 16:37:27 2007" -->
<!-- isoreceived="20070926203727" -->
<!-- sent="Wed, 26 Sep 2007 13:37:16 -0700 (PDT)" -->
<!-- isosent="20070926203716" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI v1.2.4 released" -->
<!-- id="586654.4137.qm_at_web57605.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="ea86ce220709260730u1487c16egaf8a1bb1d448d0b0_at_mail.gmail.com" -->
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
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-26 16:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4066.php">Tim Prins: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>Previous message:</strong> <a href="4064.php">Damien Hocking: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.2.4 released"</a>
<li><strong>In reply to:</strong> <a href="4063.php">Tim Mattox: "[OMPI users] Open MPI v1.2.4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4066.php">Tim Prins: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>Reply:</strong> <a href="4066.php">Tim Prins: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>Reply:</strong> <a href="4087.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are any detailed directions for upgrading (for common guys, not experts, I
<br>
mean)? My 1.2.3 version on Debian Linux amd64 runs perfectly.
<br>
Thanks
<br>
francesco pietra
<br>
<p>--- Tim Mattox &lt;timattox_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The Open MPI Team, representing a consortium of research, academic,
</span><br>
<span class="quotelev1">&gt; and industry partners, is pleased to announce the release of Open MPI
</span><br>
<span class="quotelev1">&gt; version 1.2.4. This release is mainly a bug fix release over the v1.2.3
</span><br>
<span class="quotelev1">&gt; release, but there are few new features.  We strongly recommend
</span><br>
<span class="quotelev1">&gt; that all users upgrade to version 1.2.4 if possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Version 1.2.4 can be downloaded from the main Open MPI web site or
</span><br>
<span class="quotelev1">&gt; any of its mirrors (mirrors will be updating shortly).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are a list of changes in v1.2.4 as compared to v1.2.3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Really added support for TotalView/DDT parallel debugger message queue
</span><br>
<span class="quotelev1">&gt;   debugging (it was mistakenly listed as &quot;added&quot; in the 1.2 release).
</span><br>
<span class="quotelev1">&gt; - Fixed a build issue with GNU/kFreeBSD. Thanks to Petr Salinger for
</span><br>
<span class="quotelev1">&gt;   the patch.
</span><br>
<span class="quotelev1">&gt; - Added missing MPI_FILE_NULL constant in Fortran.  Thanks to
</span><br>
<span class="quotelev1">&gt;   Bernd Schubert for bringing this to our attention.
</span><br>
<span class="quotelev1">&gt; - Change such that the UDAPL BTL is now only built in Linux when
</span><br>
<span class="quotelev1">&gt;   explicitly specified via the --with-udapl configure command line
</span><br>
<span class="quotelev1">&gt;   switch.
</span><br>
<span class="quotelev1">&gt; - Fixed an issue with umask not being propagated when using the TM
</span><br>
<span class="quotelev1">&gt;   launcher.
</span><br>
<span class="quotelev1">&gt; - Fixed behavior if number of slots is not the same on all bproc nodes.
</span><br>
<span class="quotelev1">&gt; - Fixed a hang on systems without GPR support (ex. Cray XT3/4).
</span><br>
<span class="quotelev1">&gt; - Prevent users of 32-bit MPI apps from requesting &gt;= 2GB of shared
</span><br>
<span class="quotelev1">&gt;   memory.
</span><br>
<span class="quotelev1">&gt; - Added a Portals MTL.
</span><br>
<span class="quotelev1">&gt; - Fix 0 sized MPI_ALLOC_MEM requests.  Thanks to Lisandro Dalcin for
</span><br>
<span class="quotelev1">&gt;   pointing out the problem.
</span><br>
<span class="quotelev1">&gt; - Fixed a segfault crash on large SMPs when doing collectives.
</span><br>
<span class="quotelev1">&gt; - A variety of fixes for Cray XT3/4 class of machines.
</span><br>
<span class="quotelev1">&gt; - Fixed which error handler is used when MPI_COMM_SELF is passed
</span><br>
<span class="quotelev1">&gt;   to MPI_COMM_FREE.  Thanks to Lisandro Dalcini for the bug report.
</span><br>
<span class="quotelev1">&gt; - Fixed compilation on platforms that don't have hton/ntoh.
</span><br>
<span class="quotelev1">&gt; - Fixed a logic problem in the fortran binding for MPI_TYPE_MATCH_SIZE.
</span><br>
<span class="quotelev1">&gt;   Thanks to Jeff Dusenberry for pointing out the problem and supplying
</span><br>
<span class="quotelev1">&gt;   the fix.
</span><br>
<span class="quotelev1">&gt; - Fixed a problem with MPI_BOTTOM in various places of the f77-interface.
</span><br>
<span class="quotelev1">&gt;   Thanks to Daniel Spangberg for bringing this up.
</span><br>
<span class="quotelev1">&gt; - Fixed problem where MPI-optional Fortran datatypes were not
</span><br>
<span class="quotelev1">&gt;   correctly initialized.
</span><br>
<span class="quotelev1">&gt; - Fixed several problems with stdin/stdout forwarding.
</span><br>
<span class="quotelev1">&gt; - Fixed overflow problems with the sm mpool MCA parameters on large SMPs.
</span><br>
<span class="quotelev1">&gt; - Added support for the DDT parallel debugger via orterun's --debug
</span><br>
<span class="quotelev1">&gt;   command line option.
</span><br>
<span class="quotelev1">&gt; - Added some sanity/error checks to the openib MCA parameter parsing
</span><br>
<span class="quotelev1">&gt;   code.
</span><br>
<span class="quotelev1">&gt; - Updated the udapl BTL to use RDMA capabilities.
</span><br>
<span class="quotelev1">&gt; - Allow use of the BProc head node if it was allocated to the user.
</span><br>
<span class="quotelev1">&gt;   Thanks to Sean Kelly for reporting the problem and helping debug it.
</span><br>
<span class="quotelev1">&gt; - Fixed a ROMIO problem where non-blocking I/O errors were not properly
</span><br>
<span class="quotelev1">&gt;   reported to the user.
</span><br>
<span class="quotelev1">&gt; - Made remote process launch check the $SHELL environment variable if
</span><br>
<span class="quotelev1">&gt;   a valid shell was not otherwise found for the user.
</span><br>
<span class="quotelev1">&gt;   Thanks to Alf Wachsmann for the bugreport and suggested fix.
</span><br>
<span class="quotelev1">&gt; - Added/updated some vendor IDs for a few openib HCAs.
</span><br>
<span class="quotelev1">&gt; - Fixed a couple of failures that could occur when specifying devices
</span><br>
<span class="quotelev1">&gt;   for use by the OOB.
</span><br>
<span class="quotelev1">&gt; - Removed dependency on sysfsutils from the openib BTL for
</span><br>
<span class="quotelev1">&gt;   libibverbs &gt;=v1.1 (i.e., OFED 1.2 and beyond).
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
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
____________________________________________________________________________________
<br>
Be a better Globetrotter. Get better travel answers from someone who knows. Yahoo! Answers - Check it out.
<br>
<a href="http://answers.yahoo.com/dir/?link=list&amp;sid=396545469">http://answers.yahoo.com/dir/?link=list&amp;sid=396545469</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4066.php">Tim Prins: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>Previous message:</strong> <a href="4064.php">Damien Hocking: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.2.4 released"</a>
<li><strong>In reply to:</strong> <a href="4063.php">Tim Mattox: "[OMPI users] Open MPI v1.2.4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4066.php">Tim Prins: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>Reply:</strong> <a href="4066.php">Tim Prins: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>Reply:</strong> <a href="4087.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
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
