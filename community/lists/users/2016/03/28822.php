<?
$subject_val = "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 15:25:17 2016" -->
<!-- isoreceived="20160324192517" -->
<!-- sent="Thu, 24 Mar 2016 12:25:15 -0700" -->
<!-- isosent="20160324192515" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE" -->
<!-- id="CAGKz=uK_fFVN4571GhSSoojMz+fs1sKokBjDFB1eFBzr=4L9fQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56F3F571.6060404_at_in.tum.de" -->
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
<strong>Date:</strong> 2016-03-24 15:25:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28823.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28821.php">Gus Correa: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>In reply to:</strong> <a href="28818.php">Sebastian Rettenberger: "[OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28823.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28823.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday, March 24, 2016, Sebastian Rettenberger &lt;rettenbs_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to run the attached program with OpenMPI. It works well with MPICH
</span><br>
<span class="quotelev1">&gt; and Intel MPI but I get a deadlock when using OpenMPI.
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.10.0 with support for MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems like ROMIO uses global locks in OpenMPI which is a problem if
</span><br>
<span class="quotelev1">&gt; multiple threads want to do collective I/O.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
This isn't valid MPI, if I understand you correctly. I'm not near a copy of
<br>
the standard to be more specific, but you should look at restrictions on
<br>
collective calls like barrier wrt threads in the same proc.
<br>
<p>Jeff
<br>
<p><p><span class="quotelev1">&gt; Any idea how one can get around this issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Sebastian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Sebastian Rettenberger, M.Sc.
</span><br>
<span class="quotelev1">&gt; Technische Universit&#195;&#164;t M&#195;&#188;nchen
</span><br>
<span class="quotelev1">&gt; Department of Informatics
</span><br>
<span class="quotelev1">&gt; Chair of Scientific Computing
</span><br>
<span class="quotelev1">&gt; Boltzmannstrasse 3, 85748 Garching, Germany
</span><br>
<span class="quotelev1">&gt; <a href="http://www5.in.tum.de/">http://www5.in.tum.de/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28822/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28823.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28821.php">Gus Correa: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>In reply to:</strong> <a href="28818.php">Sebastian Rettenberger: "[OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28823.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28823.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
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
