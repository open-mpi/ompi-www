<?
$subject_val = "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 19:51:48 2016" -->
<!-- isoreceived="20160324235148" -->
<!-- sent="Fri, 25 Mar 2016 08:51:43 +0900" -->
<!-- isosent="20160324235143" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE" -->
<!-- id="56F47D8F.8070307_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAGKz=uK_fFVN4571GhSSoojMz+fs1sKokBjDFB1eFBzr=4L9fQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-24 19:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28824.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28822.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="28822.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28824.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28824.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>from mpi 3.1 page 217
<br>
<p><span class="quotelev1">&gt; Finally, in multithreaded implementations, one can have more than one, 
</span><br>
<span class="quotelev1">&gt; concurrently
</span><br>
<span class="quotelev1">&gt; executing, collective communication call at a process. In these 
</span><br>
<span class="quotelev1">&gt; situations, it is the user's responsibility
</span><br>
<span class="quotelev1">&gt; to ensure that the same communicator is not used concurrently by two 
</span><br>
<span class="quotelev1">&gt; dierent
</span><br>
<span class="quotelev1">&gt; collective communication calls at the same process.
</span><br>
<p>is this what you were thinking of ?
<br>
<p>in the program that was posted, each thread uses its own communicator, 
<br>
so it complies with the above lines.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 3/25/2016 4:25 AM, Jeff Hammond wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, March 24, 2016, Sebastian Rettenberger 
</span><br>
<span class="quotelev1">&gt; &lt;rettenbs_at_[hidden] &lt;mailto:rettenbs_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I tried to run the attached program with OpenMPI. It works well
</span><br>
<span class="quotelev1">&gt;     with MPICH and Intel MPI but I get a deadlock when using OpenMPI.
</span><br>
<span class="quotelev1">&gt;     I am using OpenMPI 1.10.0 with support for MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It seems like ROMIO uses global locks in OpenMPI which is a
</span><br>
<span class="quotelev1">&gt;     problem if multiple threads want to do collective I/O.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This isn't valid MPI, if I understand you correctly. I'm not near a 
</span><br>
<span class="quotelev1">&gt; copy of the standard to be more specific, but you should look at 
</span><br>
<span class="quotelev1">&gt; restrictions on collective calls like barrier wrt threads in the same 
</span><br>
<span class="quotelev1">&gt; proc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Any idea how one can get around this issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best regards,
</span><br>
<span class="quotelev1">&gt;     Sebastian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Sebastian Rettenberger, M.Sc.
</span><br>
<span class="quotelev1">&gt;     Technische Universit&#228;t M&#252;nchen
</span><br>
<span class="quotelev1">&gt;     Department of Informatics
</span><br>
<span class="quotelev1">&gt;     Chair of Scientific Computing
</span><br>
<span class="quotelev1">&gt;     Boltzmannstrasse 3, 85748 Garching, Germany
</span><br>
<span class="quotelev1">&gt;     <a href="http://www5.in.tum.de/">http://www5.in.tum.de/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28822.php">http://www.open-mpi.org/community/lists/users/2016/03/28822.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28823/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28824.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28822.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="28822.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28824.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28824.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
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
