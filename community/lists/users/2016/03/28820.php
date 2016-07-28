<?
$subject_val = "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 10:30:56 2016" -->
<!-- isoreceived="20160324143056" -->
<!-- sent="Thu, 24 Mar 2016 15:30:51 +0100" -->
<!-- isosent="20160324143051" -->
<!-- name="Sebastian Rettenberger" -->
<!-- email="rettenbs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE" -->
<!-- id="56F3FA1B.8040900_at_in.tum.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5uYggNe3qN3z4cbtP22TtsBJ0SkAN05MGroZeKj8A8Ngw_at_mail.gmail.com" -->
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
<strong>From:</strong> Sebastian Rettenberger (<em>rettenbs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-24 10:30:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28821.php">Gus Correa: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Previous message:</strong> <a href="28819.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="28819.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28825.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28825.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tested this on my desktop machine. Thus, one node, two tasks.
<br>
It deadlock appears on the local file system and on the nfs mount.
<br>
<p>The MPICH version I tested was 3.2.
<br>
<p>However, as far as I know, locking is part of the MPI library and not ROMIO.
<br>
<p>Best regards,
<br>
Sebastian
<br>
<p>On 03/24/2016 03:19 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Sebastian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in openmpi 1.10, the default io component is romio from mpich 3.0.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how many tasks, how many nodes and which file system are you running on ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, March 24, 2016, Sebastian Rettenberger &lt;rettenbs_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to run the attached program with OpenMPI. It works well with MPICH
</span><br>
<span class="quotelev2">&gt;&gt; and Intel MPI but I get a deadlock when using OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt; I am using OpenMPI 1.10.0 with support for MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems like ROMIO uses global locks in OpenMPI which is a problem if
</span><br>
<span class="quotelev2">&gt;&gt; multiple threads want to do collective I/O.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea how one can get around this issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Sebastian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Sebastian Rettenberger, M.Sc.
</span><br>
<span class="quotelev2">&gt;&gt; Technische Universit&#195;&#164;t M&#195;&#188;nchen
</span><br>
<span class="quotelev2">&gt;&gt; Department of Informatics
</span><br>
<span class="quotelev2">&gt;&gt; Chair of Scientific Computing
</span><br>
<span class="quotelev2">&gt;&gt; Boltzmannstrasse 3, 85748 Garching, Germany
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www5.in.tum.de/">http://www5.in.tum.de/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28819.php">http://www.open-mpi.org/community/lists/users/2016/03/28819.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Sebastian Rettenberger, M.Sc.
Technische Universit&#195;&#164;t M&#195;&#188;nchen
Department of Informatics
Chair of Scientific Computing
Boltzmannstrasse 3, 85748 Garching, Germany
<a href="http://www5.in.tum.de/">http://www5.in.tum.de/</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28820/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28821.php">Gus Correa: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Previous message:</strong> <a href="28819.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="28819.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28825.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28825.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
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
