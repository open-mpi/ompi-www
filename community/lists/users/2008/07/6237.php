<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4 nightly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 10:48:29 2008" -->
<!-- isoreceived="20080731144829" -->
<!-- sent="Thu, 31 Jul 2008 16:48:23 +0200" -->
<!-- isosent="20080731144823" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4 nightly" -->
<!-- id="3a37617f0807310748w3342cf97n53690038e8a63101_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D8F4FF19-61BE-43D2-BAEB-2D0FB3C857B6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.4 nightly<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 10:48:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6238.php">David Robson: "Re: [OMPI users] MPI_BCast problem on multiple networks."</a>
<li><strong>Previous message:</strong> <a href="6236.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>In reply to:</strong> <a href="6234.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6239.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>Reply:</strong> <a href="6239.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mm, i've tried to disable shared memory but the problem remains. Is it
<br>
normal?
<br>
<p>2008/7/31 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; There is very definitely a shared memory bug on the trunk at the moment
</span><br>
<span class="quotelev1">&gt; that can cause hangs like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/1378">https://svn.open-mpi.org/trac/ompi/ticket/1378</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, the v1.4 nightly is our normal development head, so all
</span><br>
<span class="quotelev1">&gt; the normal rules and disclaimers apply (it's *generally* stable, but
</span><br>
<span class="quotelev1">&gt; sometimes things break).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 31, 2008, at 10:27 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev2">&gt;&gt; i have installed OpenMPI 1.4 nigthly over IBM BLADE system with
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband. I have some problem with MPI applications. A simple MPI Hello
</span><br>
<span class="quotelev2">&gt;&gt; world, doesn't function. After dispatch, every cpu works over 100% but doing
</span><br>
<span class="quotelev2">&gt;&gt; nothing. The jobs appears locked.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I compiled with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-ft-thread
</span><br>
<span class="quotelev2">&gt;&gt;  --with-ft=cr
</span><br>
<span class="quotelev2">&gt;&gt; -with-blcr=/prod/tools/blcr/0.7.1/gnu--4.1.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (and other, but less important).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where is the problem? This version is very instable?
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it Tel: +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6237/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6238.php">David Robson: "Re: [OMPI users] MPI_BCast problem on multiple networks."</a>
<li><strong>Previous message:</strong> <a href="6236.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>In reply to:</strong> <a href="6234.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6239.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>Reply:</strong> <a href="6239.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
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
