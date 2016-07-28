<?
$subject_val = "Re: [OMPI users] latest stable and win7/msvc2013";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 06:49:19 2014" -->
<!-- isoreceived="20140717104919" -->
<!-- sent="Thu, 17 Jul 2014 03:48:24 -0700" -->
<!-- isosent="20140717104824" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] latest stable and win7/msvc2013" -->
<!-- id="9574FD0C-F4D7-4607-A570-0C2F05F0BE44_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8337B490252F0944BF1D38541059627E1734856E_at_DLREXMBX01.intra.dlr.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-17 06:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24795.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24793.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>In reply to:</strong> <a href="24793.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24796.php">Rob Latham: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Reply:</strong> <a href="24796.php">Rob Latham: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: now that I have access to the Intel compiler suite, including for Windows, I've been toying with creating a more stable support solution for OMPI on Windows. It's a low-priority task for me because it isn't clear that we have very many Windows users in HPC land, and the cygwin port already exists anyway. However, I probably will do it for sometime in the 1.9 series.
<br>
<p><p>On Jul 17, 2014, at 1:14 AM, Michael.Rachner_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Dear people,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; As a continuation of the hint of   Damien   , who suggested using MPICH on WIN7 :
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; MPICH has already stopped supporting WINDOWS in the past. MPICH recommends using  MS-MPI for WINDOWS, which is a derivative from MPICH2.
</span><br>
<span class="quotelev1">&gt; You may download the binary (for free) from the landing page for MS-MPI:      <a href="http://msdn.microsoft.com/en-us/library/bb524831(v=vs.85">http://msdn.microsoft.com/en-us/library/bb524831(v=vs.85</a>).aspx
</span><br>
<span class="quotelev1">&gt; Most recent version is:        version: 4.2.4400.0   Date published: 1/14/2014
</span><br>
<span class="quotelev1">&gt; However note, that MS-MPI does conform to MPI-2, not yet to MPI-3.
</span><br>
<span class="quotelev1">&gt; The installation is easy and it works well with my CFD-code under WIN7 (64-bit).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt; Michael Rachner
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Damien
</span><br>
<span class="quotelev1">&gt; Gesendet: Mittwoch, 16. Juli 2014 18:15
</span><br>
<span class="quotelev1">&gt; An: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI users] latest stable and win7/msvc2013
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Guys,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't do it.  It doesn't work at all.  I couldn't pick up maintenance of it either, and the majority of the Windows support is removed as Ralph said.  Just use MPICH for Windows work and save yourself the pain.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014-07-16 9:57 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt; It likely won't build because last I check the Microsoft toolchain does
</span><br>
<span class="quotelev1">&gt; not fit the minimum requirements (C99 or higher). You will have better
</span><br>
<span class="quotelev1">&gt; luck with either gcc or intel's compiler.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 16, 2014 at 04:52:53PM +0100, MM wrote:
</span><br>
<span class="quotelev1">&gt; hello,
</span><br>
<span class="quotelev1">&gt; I'm about to try to build 1.8.1 with win msvc2013 toolkit in 64bit mode.
</span><br>
<span class="quotelev1">&gt; I know the win binaries were dropped after failure to find someone to
</span><br>
<span class="quotelev1">&gt; pick them up (following shiqin departure), and i'm afraid I wouldn't
</span><br>
<span class="quotelev1">&gt; volunteer due to lack of time, but is there any general advice before
</span><br>
<span class="quotelev1">&gt; I start?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; rds,
</span><br>
<span class="quotelev1">&gt; MM
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24787.php">http://www.open-mpi.org/community/lists/users/2014/07/24787.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24789.php">http://www.open-mpi.org/community/lists/users/2014/07/24789.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24793.php">http://www.open-mpi.org/community/lists/users/2014/07/24793.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24794/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24795.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24793.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>In reply to:</strong> <a href="24793.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24796.php">Rob Latham: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Reply:</strong> <a href="24796.php">Rob Latham: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
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
