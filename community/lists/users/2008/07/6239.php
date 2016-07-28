<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4 nightly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 11:13:20 2008" -->
<!-- isoreceived="20080731151320" -->
<!-- sent="Thu, 31 Jul 2008 18:13:15 +0300" -->
<!-- isosent="20080731151315" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4 nightly" -->
<!-- id="453d39990807310813w8bc4e9etbd45630bf8419cf5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3a37617f0807310748w3342cf97n53690038e8a63101_at_mail.gmail.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 11:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6240.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>Previous message:</strong> <a href="6238.php">David Robson: "Re: [OMPI users] MPI_BCast problem on multiple networks."</a>
<li><strong>In reply to:</strong> <a href="6237.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6240.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>Reply:</strong> <a href="6240.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
try to use only openib
<br>
<p>make sure you use nightly after r19092
<br>
<p>On 7/31/08, Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mm, i've tried to disable shared memory but the problem remains. Is it
</span><br>
<span class="quotelev1">&gt; normal?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/7/31 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is very definitely a shared memory bug on the trunk at the moment
</span><br>
<span class="quotelev2">&gt;&gt; that can cause hangs like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/1378">https://svn.open-mpi.org/trac/ompi/ticket/1378</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That being said, the v1.4 nightly is our normal development head, so all
</span><br>
<span class="quotelev2">&gt;&gt; the normal rules and disclaimers apply (it's *generally* stable, but
</span><br>
<span class="quotelev2">&gt;&gt; sometimes things break).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 31, 2008, at 10:27 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i have installed OpenMPI 1.4 nigthly over IBM BLADE system with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Infiniband. I have some problem with MPI applications. A simple MPI Hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; world, doesn't function. After dispatch, every cpu works over 100% but doing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nothing. The jobs appears locked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I compiled with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-mpi-threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-ft-thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-ft=cr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -with-blcr=/prod/tools/blcr/0.7.1/gnu--4.1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and other, but less important).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where is the problem? This version is very instable?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden]
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6239/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6240.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>Previous message:</strong> <a href="6238.php">David Robson: "Re: [OMPI users] MPI_BCast problem on multiple networks."</a>
<li><strong>In reply to:</strong> <a href="6237.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6240.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>Reply:</strong> <a href="6240.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
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
