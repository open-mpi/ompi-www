<?
$subject_val = "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 20:26:53 2016" -->
<!-- isoreceived="20160325002653" -->
<!-- sent="Fri, 25 Mar 2016 09:26:49 +0900" -->
<!-- isosent="20160325002649" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE" -->
<!-- id="56F485C9.1060009_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56F3FA1B.8040900_at_in.tum.de" -->
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
<strong>Date:</strong> 2016-03-24 20:26:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28826.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28824.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="28820.php">Sebastian Rettenberger: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28826.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28826.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sebastian,
<br>
<p>thanks for the info.
<br>
<p>bottom line, the global lock is in the OpenMPI glue for ROMIO.
<br>
<p>i will check what kind of locking (if any) is done in mpich
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/24/2016 11:30 PM, Sebastian Rettenberger wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested this on my desktop machine. Thus, one node, two tasks.
</span><br>
<span class="quotelev1">&gt; It deadlock appears on the local file system and on the nfs mount.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPICH version I tested was 3.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, as far as I know, locking is part of the MPI library and not 
</span><br>
<span class="quotelev1">&gt; ROMIO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Sebastian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03/24/2016 03:19 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sebastian,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in openmpi 1.10, the default io component is romio from mpich 3.0.4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; how many tasks, how many nodes and which file system are you running 
</span><br>
<span class="quotelev2">&gt;&gt; on ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thursday, March 24, 2016, Sebastian Rettenberger &lt;rettenbs_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to run the attached program with OpenMPI. It works well with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and Intel MPI but I get a deadlock when using OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using OpenMPI 1.10.0 with support for MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems like ROMIO uses global locks in OpenMPI which is a problem if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiple threads want to do collective I/O.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; Technische Universit&#228;t M&#252;nchen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Informatics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chair of Scientific Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Boltzmannstrasse 3, 85748 Garching, Germany
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www5.in.tum.de/">http://www5.in.tum.de/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28819.php">http://www.open-mpi.org/community/lists/users/2016/03/28819.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28820.php">http://www.open-mpi.org/community/lists/users/2016/03/28820.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28825/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28826.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28824.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="28820.php">Sebastian Rettenberger: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28826.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28826.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
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
