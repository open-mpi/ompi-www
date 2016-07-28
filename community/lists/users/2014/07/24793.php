<?
$subject_val = "Re: [OMPI users] latest stable and win7/msvc2013";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 04:14:15 2014" -->
<!-- isoreceived="20140717081415" -->
<!-- sent="Thu, 17 Jul 2014 08:14:12 +0000" -->
<!-- isosent="20140717081412" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] latest stable and win7/msvc2013" -->
<!-- id="8337B490252F0944BF1D38541059627E1734856E_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53C6A4F4.7090007_at_khubla.com" -->
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
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20latest%20stable%20and%20win7/msvc2013"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-07-17 04:14:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24794.php">Ralph Castain: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24792.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>In reply to:</strong> <a href="24790.php">Damien: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24794.php">Ralph Castain: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Reply:</strong> <a href="24794.php">Ralph Castain: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear people,
<br>
<p>As a continuation of the hint of   Damien   , who suggested using MPICH on WIN7 :
<br>
<p>MPICH has already stopped supporting WINDOWS in the past. MPICH recommends using  MS-MPI for WINDOWS, which is a derivative from MPICH2.
<br>
You may download the binary (for free) from the landing page for MS-MPI:      <a href="http://msdn.microsoft.com/en-us/library/bb524831(v=vs.85">http://msdn.microsoft.com/en-us/library/bb524831(v=vs.85</a>).aspx
<br>
Most recent version is:        version: 4.2.4400.0   Date published: 1/14/2014
<br>
However note, that MS-MPI does conform to MPI-2, not yet to MPI-3.
<br>
The installation is easy and it works well with my CFD-code under WIN7 (64-bit).
<br>
<p>Greetings
<br>
Michael Rachner
<br>
<p><p><p>Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Damien
<br>
Gesendet: Mittwoch, 16. Juli 2014 18:15
<br>
An: users_at_[hidden]
<br>
Betreff: Re: [OMPI users] latest stable and win7/msvc2013
<br>
<p>Guys,
<br>
<p>Don't do it.  It doesn't work at all.  I couldn't pick up maintenance of it either, and the majority of the Windows support is removed as Ralph said.  Just use MPICH for Windows work and save yourself the pain.
<br>
<p>Cheers,
<br>
<p>Damien
<br>
On 2014-07-16 9:57 AM, Nathan Hjelm wrote:
<br>
<p>It likely won't build because last I check the Microsoft toolchain does
<br>
<p>not fit the minimum requirements (C99 or higher). You will have better
<br>
<p>luck with either gcc or intel's compiler.
<br>
<p><p><p>-Nathan
<br>
<p><p><p>On Wed, Jul 16, 2014 at 04:52:53PM +0100, MM wrote:
<br>
<p>hello,
<br>
<p>I'm about to try to build 1.8.1 with win msvc2013 toolkit in 64bit mode.
<br>
<p>I know the win binaries were dropped after failure to find someone to
<br>
<p>pick them up (following shiqin departure), and i'm afraid I wouldn't
<br>
<p>volunteer due to lack of time, but is there any general advice before
<br>
<p>I start?
<br>
<p><p><p>rds,
<br>
<p>MM
<br>
<p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p>Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24787.php">http://www.open-mpi.org/community/lists/users/2014/07/24787.php</a>
<br>
<p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p>Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24789.php">http://www.open-mpi.org/community/lists/users/2014/07/24789.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24793/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24794.php">Ralph Castain: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24792.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>In reply to:</strong> <a href="24790.php">Damien: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24794.php">Ralph Castain: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Reply:</strong> <a href="24794.php">Ralph Castain: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
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
