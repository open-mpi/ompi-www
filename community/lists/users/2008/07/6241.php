<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4 nightly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 11:48:53 2008" -->
<!-- isoreceived="20080731154853" -->
<!-- sent="Thu, 31 Jul 2008 11:48:43 -0400" -->
<!-- isosent="20080731154843" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4 nightly" -->
<!-- id="38AC28C2-0179-451E-9A12-7B101AA3A2A4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0807310838la435cc0he8a953d9fc39cdb5_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 11:48:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6242.php">Scott Beardsley: "[OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="6240.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>In reply to:</strong> <a href="6240.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh yes, definitely -- there was a problem interacting with openib and  
<br>
self until a day or two ago (much angst on the devel list and ticket  
<br>
1378 until it was fixed ;-) ).
<br>
<p><p>On Jul 31, 2008, at 11:38 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; I'm using 9005. I'll try last version. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/7/31 Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; try to use only openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make sure you use nightly after r19092
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/31/08, Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Mm, i've tried to disable shared memory but the problem remains. Is  
</span><br>
<span class="quotelev1">&gt; it normal?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/7/31 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; There is very definitely a shared memory bug on the trunk at the  
</span><br>
<span class="quotelev1">&gt; moment that can cause hangs like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/1378">https://svn.open-mpi.org/trac/ompi/ticket/1378</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, the v1.4 nightly is our normal development head, so  
</span><br>
<span class="quotelev1">&gt; all the normal rules and disclaimers apply (it's *generally* stable,  
</span><br>
<span class="quotelev1">&gt; but sometimes things break).
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
<span class="quotelev1">&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev1">&gt; i have installed OpenMPI 1.4 nigthly over IBM BLADE system with  
</span><br>
<span class="quotelev1">&gt; Infiniband. I have some problem with MPI applications. A simple MPI  
</span><br>
<span class="quotelev1">&gt; Hello world, doesn't function. After dispatch, every cpu works over  
</span><br>
<span class="quotelev1">&gt; 100% but doing nothing. The jobs appears locked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;  --enable-ft-thread
</span><br>
<span class="quotelev1">&gt;  --with-ft=cr
</span><br>
<span class="quotelev1">&gt; -with-blcr=/prod/tools/blcr/0.7.1/gnu--4.1.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (and other, but less important).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where is the problem? This version is very instable?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6242.php">Scott Beardsley: "[OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="6240.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>In reply to:</strong> <a href="6240.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
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
