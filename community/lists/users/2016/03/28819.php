<?
$subject_val = "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 10:19:59 2016" -->
<!-- isoreceived="20160324141959" -->
<!-- sent="Thu, 24 Mar 2016 23:19:58 +0900" -->
<!-- isosent="20160324141958" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE" -->
<!-- id="CAAkFZ5uYggNe3qN3z4cbtP22TtsBJ0SkAN05MGroZeKj8A8Ngw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-24 10:19:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28820.php">Sebastian Rettenberger: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28818.php">Sebastian Rettenberger: "[OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="28818.php">Sebastian Rettenberger: "[OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28820.php">Sebastian Rettenberger: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28820.php">Sebastian Rettenberger: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sebastian,
<br>
<p>in openmpi 1.10, the default io component is romio from mpich 3.0.4.
<br>
<p>how many tasks, how many nodes and which file system are you running on ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, March 24, 2016, Sebastian Rettenberger &lt;rettenbs_at_[hidden]&gt;
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
<span class="quotelev1">&gt; Any idea how one can get around this issue?
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28819/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28820.php">Sebastian Rettenberger: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28818.php">Sebastian Rettenberger: "[OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="28818.php">Sebastian Rettenberger: "[OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28820.php">Sebastian Rettenberger: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28820.php">Sebastian Rettenberger: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
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
