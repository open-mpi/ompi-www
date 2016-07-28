<?
$subject_val = "Re: [OMPI users] Valgrind Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 06:37:56 2008" -->
<!-- isoreceived="20081215113756" -->
<!-- sent="Mon, 15 Dec 2008 12:37:50 +0100" -->
<!-- isosent="20081215113750" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind Warning" -->
<!-- id="3a37617f0812150337o141e6ed9y2e6593746ae5fe9e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6E57BA0D-D0D8-4531-AB16-FC3EE4102D1B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind Warning<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-15 06:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7539.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Previous message:</strong> <a href="7537.php">Harald Anlauf: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>In reply to:</strong> <a href="7534.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7540.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Reply:</strong> <a href="7540.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
i recompiled libmthca with --with-valgrind flag, and modified
<br>
enviroment variables, but warnings doesnt' disappears..
<br>
<p>2008/12/14 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On Dec 14, 2008, at 8:21 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i have a strage problems with OpenMPI 1.2.5 Intel Compiled when i
</span><br>
<span class="quotelev2">&gt;&gt; debug my code under Valgrind 3.3. In a very simple ping-pong MPI
</span><br>
<span class="quotelev2">&gt;&gt; application, i retrieve strange warnings about MPI Communications,
</span><br>
<span class="quotelev2">&gt;&gt; like MPI_Send,MPI_Recv. Valgrind tells me that there are uninitialized
</span><br>
<span class="quotelev2">&gt;&gt; values in send/recv buffers, but there are initialized, i'm absolutely
</span><br>
<span class="quotelev2">&gt;&gt; sure!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There warnings are detected when my application runs over Infiniband
</span><br>
<span class="quotelev2">&gt;&gt; net,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is because IB uses memory that does not come from the memory allocator
</span><br>
<span class="quotelev1">&gt; that Valgrind is aware of (e.g., it may be memory that was allocated by the
</span><br>
<span class="quotelev1">&gt; kernel itself).  Hence, since Valgrind is unaware of the memory, it thinks
</span><br>
<span class="quotelev1">&gt; that its contents are undefined.  As such, it's quite likely that you're
</span><br>
<span class="quotelev1">&gt; seeing false positives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The memchecker support in the upcoming v1.3 series made quite a few
</span><br>
<span class="quotelev1">&gt; advancements in the area of valgrind memory checking, and recent versions of
</span><br>
<span class="quotelev1">&gt; libibverbs allow you to compile in valgrind extensions that tell valgrind
</span><br>
<span class="quotelev1">&gt; &quot;this memory is ok&quot; (which prevents these false positives).  I'm pretty sure
</span><br>
<span class="quotelev1">&gt; that the OFED install does not enable these libibverbs valgrind extensions;
</span><br>
<span class="quotelev1">&gt; you will likely need your own installation of libibverbs and your verbs
</span><br>
<span class="quotelev1">&gt; plugin (libmthca for you, I think...?) that explicitly has the valgrind
</span><br>
<span class="quotelev1">&gt; extensions enabled.
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
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7539.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Previous message:</strong> <a href="7537.php">Harald Anlauf: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>In reply to:</strong> <a href="7534.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7540.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Reply:</strong> <a href="7540.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
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
