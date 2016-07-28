<?
$subject_val = "[OMPI devel] Fwd: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 29 07:50:50 2016" -->
<!-- isoreceived="20160329115050" -->
<!-- sent="Tue, 29 Mar 2016 20:50:48 +0900" -->
<!-- isosent="20160329115048" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE" -->
<!-- id="CAAkFZ5vGw=xs7CWfo0ZvxFGnkusPTYG3D_sK6_-ZbESP9KHMRg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56FA6407.4090006_at_in.tum.de" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-29 07:50:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18732.php">Sreenidhi Bharathkar Ramesh: "[OMPI devel] query on atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18730.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>currently, there is a global lock in the OpenMPI glue for ROMIO
<br>
<p>that can causes some hangs with MPI_THREAD_MULTIPLE
<br>
<p>I could not find such global locks in MPICH, nor a good rationale for
<br>
having then in OpenMPI.
<br>
At this stage, I can only consider this is legacy stuff that should simply
<br>
be removed.
<br>
<p>Does anyone remember why we used global locks in the first place ?
<br>
Is there any rationale for using global locks (or even a finer grain
<br>
locking) in the ROMIO glue ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>---------- Forwarded message ----------
<br>
From: *Sebastian Rettenberger* &lt;rettenbs_at_[hidden]&gt;
<br>
Date: Tuesday, March 29, 2016
<br>
Subject: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>Hi,
<br>
<p>thanks, the patch works for me. I will do some further tests and report
<br>
back if I find another problem.
<br>
<p>Best regards,
<br>
Sebastian
<br>
<p>On 03/25/2016 01:58 AM, Gilles Gouaillardet wrote:
<br>
<p><span class="quotelev1">&gt; Sebastian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at first glance, the global lock in romio glue is not necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; feel free to give the attached patch a try
</span><br>
<span class="quotelev1">&gt; (it works with your example, and i made no further testing)
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/25/2016 9:26 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sebastian,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for the info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bottom line, the global lock is in the OpenMPI glue for ROMIO.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i will check what kind of locking (if any) is done in mpich
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
<span class="quotelev2">&gt;&gt; On 3/24/2016 11:30 PM, Sebastian Rettenberger wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tested this on my desktop machine. Thus, one node, two tasks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It deadlock appears on the local file system and on the nfs mount.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The MPICH version I tested was 3.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, as far as I know, locking is part of the MPI library and not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ROMIO.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sebastian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 03/24/2016 03:19 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sebastian,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in openmpi 1.10, the default io component is romio from mpich 3.0.4.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; how many tasks, how many nodes and which file system are you running
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thursday, March 24, 2016, Sebastian Rettenberger
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;rettenbs_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried to run the attached program with OpenMPI. It works well
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with MPICH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and Intel MPI but I get a deadlock when using OpenMPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am using OpenMPI 1.10.0 with support for MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It seems like ROMIO uses global locks in OpenMPI which is a problem if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; multiple threads want to do collective I/O.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any idea how one can get around this issue?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sebastian
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sebastian Rettenberger, M.Sc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Technische Universit&#195;&#164;t M&#195;&#188;nchen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Department of Informatics
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Chair of Scientific Computing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Boltzmannstrasse 3, 85748 Garching, Germany
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www5.in.tum.de/">http://www5.in.tum.de/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28819.php">http://www.open-mpi.org/community/lists/users/2016/03/28819.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28820.php">http://www.open-mpi.org/community/lists/users/2016/03/28820.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28825.php">http://www.open-mpi.org/community/lists/users/2016/03/28825.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28826.php">http://www.open-mpi.org/community/lists/users/2016/03/28826.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18731/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18731/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18732.php">Sreenidhi Bharathkar Ramesh: "[OMPI devel] query on atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18730.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0"</a>
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
