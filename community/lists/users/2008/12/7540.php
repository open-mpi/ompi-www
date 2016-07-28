<?
$subject_val = "Re: [OMPI users] Valgrind Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 08:53:17 2008" -->
<!-- isoreceived="20081215135317" -->
<!-- sent="Mon, 15 Dec 2008 08:52:35 -0500" -->
<!-- isosent="20081215135235" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind Warning" -->
<!-- id="7917C276-57BB-4482-9563-6304AD77B16A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0812150337o141e6ed9y2e6593746ae5fe9e_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-15 08:52:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7541.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Previous message:</strong> <a href="7539.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>In reply to:</strong> <a href="7538.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7541.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Reply:</strong> <a href="7541.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm; it actually is on the list (you can see community/mirrors/ 
<br>
mirrors.txt).
<br>
<p>But I think I made an error in the file when adding your host -- could  
<br>
you try an update now?
<br>
<p><p>On Dec 15, 2008, at 6:37 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; i recompiled libmthca with --with-valgrind flag, and modified
</span><br>
<span class="quotelev1">&gt; enviroment variables, but warnings doesnt' disappears..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/12/14 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 14, 2008, at 8:21 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i have a strage problems with OpenMPI 1.2.5 Intel Compiled when i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debug my code under Valgrind 3.3. In a very simple ping-pong MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application, i retrieve strange warnings about MPI Communications,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like MPI_Send,MPI_Recv. Valgrind tells me that there are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uninitialized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; values in send/recv buffers, but there are initialized, i'm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; absolutely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sure!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There warnings are detected when my application runs over Infiniband
</span><br>
<span class="quotelev3">&gt;&gt;&gt; net,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is because IB uses memory that does not come from the memory  
</span><br>
<span class="quotelev2">&gt;&gt; allocator
</span><br>
<span class="quotelev2">&gt;&gt; that Valgrind is aware of (e.g., it may be memory that was  
</span><br>
<span class="quotelev2">&gt;&gt; allocated by the
</span><br>
<span class="quotelev2">&gt;&gt; kernel itself).  Hence, since Valgrind is unaware of the memory, it  
</span><br>
<span class="quotelev2">&gt;&gt; thinks
</span><br>
<span class="quotelev2">&gt;&gt; that its contents are undefined.  As such, it's quite likely that  
</span><br>
<span class="quotelev2">&gt;&gt; you're
</span><br>
<span class="quotelev2">&gt;&gt; seeing false positives.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The memchecker support in the upcoming v1.3 series made quite a few
</span><br>
<span class="quotelev2">&gt;&gt; advancements in the area of valgrind memory checking, and recent  
</span><br>
<span class="quotelev2">&gt;&gt; versions of
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs allow you to compile in valgrind extensions that tell  
</span><br>
<span class="quotelev2">&gt;&gt; valgrind
</span><br>
<span class="quotelev2">&gt;&gt; &quot;this memory is ok&quot; (which prevents these false positives).  I'm  
</span><br>
<span class="quotelev2">&gt;&gt; pretty sure
</span><br>
<span class="quotelev2">&gt;&gt; that the OFED install does not enable these libibverbs valgrind  
</span><br>
<span class="quotelev2">&gt;&gt; extensions;
</span><br>
<span class="quotelev2">&gt;&gt; you will likely need your own installation of libibverbs and your  
</span><br>
<span class="quotelev2">&gt;&gt; verbs
</span><br>
<span class="quotelev2">&gt;&gt; plugin (libmthca for you, I think...?) that explicitly has the  
</span><br>
<span class="quotelev2">&gt;&gt; valgrind
</span><br>
<span class="quotelev2">&gt;&gt; extensions enabled.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel programmer
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
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
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
<li><strong>Next message:</strong> <a href="7541.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Previous message:</strong> <a href="7539.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>In reply to:</strong> <a href="7538.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7541.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Reply:</strong> <a href="7541.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
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
