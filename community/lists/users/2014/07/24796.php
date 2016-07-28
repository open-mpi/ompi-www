<?
$subject_val = "Re: [OMPI users] latest stable and win7/msvc2013";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 13:31:12 2014" -->
<!-- isoreceived="20140717173112" -->
<!-- sent="Thu, 17 Jul 2014 12:31:13 -0500" -->
<!-- isosent="20140717173113" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] latest stable and win7/msvc2013" -->
<!-- id="53C80861.7070900_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9574FD0C-F4D7-4607-A570-0C2F05F0BE44_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] latest stable and win7/msvc2013<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-17 13:31:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24797.php">Jed Brown: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24795.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="24794.php">Ralph Castain: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24797.php">Jed Brown: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Reply:</strong> <a href="24797.php">Jed Brown: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/17/2014 05:48 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; FWIW: now that I have access to the Intel compiler suite, including for
</span><br>
<span class="quotelev1">&gt; Windows, I've been toying with creating a more stable support solution
</span><br>
<span class="quotelev1">&gt; for OMPI on Windows. It's a low-priority task for me because it isn't
</span><br>
<span class="quotelev1">&gt; clear that we have very many Windows users in HPC land, and the cygwin
</span><br>
<span class="quotelev1">&gt; port already exists anyway. However, I probably will do it for sometime
</span><br>
<span class="quotelev1">&gt; in the 1.9 series.
</span><br>
<p>Well, I (and dgoodell and jsquyers and probably a few others of you) can 
<br>
say from observing discuss_at_[hidden] traffic that we get one message 
<br>
about Windows support every month -- probably more often.  There's 
<br>
clearly a community of Windows users out there looking for a free MPI 
<br>
implementation.
<br>
<p>Sorry to hear that MS-MPI is not yet MPI-3 compliant. There is also 
<br>
Intel-MPI and Platform-MPI but I think you have to license those?
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 17, 2014, at 1:14 AM, Michael.Rachner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Michael.Rachner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear people,
</span><br>
<span class="quotelev2">&gt;&gt; As a continuation of the hint of   Damien   , who suggested using
</span><br>
<span class="quotelev2">&gt;&gt; MPICH on WIN7 :
</span><br>
<span class="quotelev2">&gt;&gt; MPICH has already stopped supporting WINDOWS in the past. MPICH
</span><br>
<span class="quotelev2">&gt;&gt; recommends using  MS-MPI for WINDOWS, which is a derivative from MPICH2.
</span><br>
<span class="quotelev2">&gt;&gt; You may download the binary (for free) from the landing page for
</span><br>
<span class="quotelev2">&gt;&gt; MS-MPI: <a href="http://msdn.microsoft.com/en-us/library/bb524831(v=vs.85">http://msdn.microsoft.com/en-us/library/bb524831(v=vs.85</a>).aspx
</span><br>
<span class="quotelev2">&gt;&gt; Most recent version is:        version: 4.2.4400.0   Date published:
</span><br>
<span class="quotelev2">&gt;&gt; 1/14/2014
</span><br>
<span class="quotelev2">&gt;&gt; However note, that MS-MPI does conform to MPI-2, not yet to MPI-3.
</span><br>
<span class="quotelev2">&gt;&gt; The installation is easy and it works well with my CFD-code under WIN7
</span><br>
<span class="quotelev2">&gt;&gt; (64-bit).
</span><br>
<span class="quotelev2">&gt;&gt; Greetings
</span><br>
<span class="quotelev2">&gt;&gt; Michael Rachner
</span><br>
<span class="quotelev2">&gt;&gt; *Von:*users [mailto:users-bounces_at_[hidden]]*Im Auftrag von*Damien
</span><br>
<span class="quotelev2">&gt;&gt; *Gesendet:*Mittwoch, 16. Juli 2014 18:15
</span><br>
<span class="quotelev2">&gt;&gt; *An:*users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Betreff:*Re: [OMPI users] latest stable and win7/msvc2013
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Guys,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Don't do it.  It doesn't work at all.  I couldn't pick up maintenance
</span><br>
<span class="quotelev2">&gt;&gt; of it either, and the majority of the Windows support is removed as
</span><br>
<span class="quotelev2">&gt;&gt; Ralph said.  Just use MPICH for Windows work and save yourself the pain.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014-07-16 9:57 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     It likely won't build because last I check the Microsoft toolchain does
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     not fit the minimum requirements (C99 or higher). You will have better
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     luck with either gcc or intel's compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Wed, Jul 16, 2014 at 04:52:53PM +0100, MM wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I'm about to try to build 1.8.1 with win msvc2013 toolkit in 64bit mode.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I know the win binaries were dropped after failure to find someone to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         pick them up (following shiqin departure), and i'm afraid I wouldn't
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         volunteer due to lack of time, but is there any general advice before
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I start?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         rds,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         MM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/07/24787.php">http://www.open-mpi.org/community/lists/users/2014/07/24787.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/07/24789.php">http://www.open-mpi.org/community/lists/users/2014/07/24789.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2014/07/24793.php">http://www.open-mpi.org/community/lists/users/2014/07/24793.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24794.php">http://www.open-mpi.org/community/lists/users/2014/07/24794.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24797.php">Jed Brown: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24795.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="24794.php">Ralph Castain: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24797.php">Jed Brown: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Reply:</strong> <a href="24797.php">Jed Brown: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
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
