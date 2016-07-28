<?
$subject_val = "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 19:58:44 2016" -->
<!-- isoreceived="20160324235844" -->
<!-- sent="Thu, 24 Mar 2016 16:58:40 -0700" -->
<!-- isosent="20160324235840" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE" -->
<!-- id="ADC13765-FDA9-40A4-BDE5-A6500443D41B_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56F47D8F.8070307_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-24 19:58:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28825.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28823.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="28823.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Mar 24, 2016, at 4:51 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from mpi 3.1 page 217
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Finally, in multithreaded implementations, one can have more than one, concurrently
</span><br>
<span class="quotelev2">&gt;&gt; executing, collective communication call at a process. In these situations, it is the user's responsibility
</span><br>
<span class="quotelev2">&gt;&gt; to ensure that the same communicator is not used concurrently by two dierent
</span><br>
<span class="quotelev2">&gt;&gt; collective communication calls at the same process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is this what you were thinking of ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes. Thanks. 
<br>
<p><span class="quotelev1">&gt; in the program that was posted, each thread uses its own communicator, so it complies with the above lines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I didn't see the attachment. Sorry. Reading email at the beach appears to be a bad idea on multiple levels :-)
<br>
<p>You are right that duping the comm for the second file makes this a correct program.
<br>
<p>Jeff 
<br>
<p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/25/2016 4:25 AM, Jeff Hammond wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thursday, March 24, 2016, Sebastian Rettenberger &lt;rettenbs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to run the attached program with OpenMPI. It works well with MPICH and Intel MPI but I get a deadlock when using OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using OpenMPI 1.10.0 with support for MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems like ROMIO uses global locks in OpenMPI which is a problem if multiple threads want to do collective I/O.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This isn't valid MPI, if I understand you correctly. I'm not near a copy of the standard to be more specific, but you should look at restrictions on collective calls like barrier wrt threads in the same proc. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea how one can get around this issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sebastian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sebastian Rettenberger, M.Sc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Technische Universit&#195;&#164;t M&#195;&#188;nchen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Informatics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chair of Scientific Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Boltzmannstrasse 3, 85748 Garching, Germany
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www5.in.tum.de/">http://www5.in.tum.de/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev2">&gt;&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28822.php">http://www.open-mpi.org/community/lists/users/2016/03/28822.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28823.php">http://www.open-mpi.org/community/lists/users/2016/03/28823.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28824/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28825.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28823.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="28823.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
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
