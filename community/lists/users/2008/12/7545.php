<?
$subject_val = "Re: [OMPI users] Valgrind Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 10:48:02 2008" -->
<!-- isoreceived="20081215154802" -->
<!-- sent="Mon, 15 Dec 2008 07:47:56 -0800" -->
<!-- isosent="20081215154756" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind Warning" -->
<!-- id="D199B56D-BBFA-47FE-858E-77FEB81FCF1D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0812150634l2a753df2q326a22f8b345fe2a_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-12-15 10:47:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7546.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Previous message:</strong> <a href="7544.php">Tim Mattox: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>In reply to:</strong> <a href="7542.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this is a plausible scenario.  :-\
<br>
<p>I do know that the support is much better in v1.3, but we haven't  
<br>
sought [yet] to stamp out *all* the warnings...
<br>
<p>Do you guys have a transition plan for v1.3, perchance?
<br>
<p><p><p>On Dec 15, 2008, at 6:34 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; i recompiled libibverbs and libmthca with valgrind flas, but for
</span><br>
<span class="quotelev1">&gt; strage reasons, only warning over MPI_Send are disappears, but
</span><br>
<span class="quotelev1">&gt; warnings over MPI_Recv remains!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/12/15 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Whoops; that was a reply to the wrong message.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You'll need to recompile both libiverbs and libmthca with the  
</span><br>
<span class="quotelev2">&gt;&gt; valgrind flag,
</span><br>
<span class="quotelev2">&gt;&gt; and use the enhanced memchecker support in v1.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have not personally verified that all the warnings disappear in  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; configuration (I was hoping to verify this somewhere during the v1.3
</span><br>
<span class="quotelev2">&gt;&gt; series).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 15, 2008, at 6:37 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i recompiled libmthca with --with-valgrind flag, and modified
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enviroment variables, but warnings doesnt' disappears..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2008/12/14 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Dec 14, 2008, at 8:21 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; i have a strage problems with OpenMPI 1.2.5 Intel Compiled when i
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; debug my code under Valgrind 3.3. In a very simple ping-pong MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; application, i retrieve strange warnings about MPI  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Communications,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; like MPI_Send,MPI_Recv. Valgrind tells me that there are  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; uninitialized
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; values in send/recv buffers, but there are initialized, i'm  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; absolutely
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sure!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There warnings are detected when my application runs over  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Infiniband
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; net,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is because IB uses memory that does not come from the memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that Valgrind is aware of (e.g., it may be memory that was  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocated by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; kernel itself).  Hence, since Valgrind is unaware of the memory,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thinks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that its contents are undefined.  As such, it's quite likely  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that you're
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; seeing false positives.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The memchecker support in the upcoming v1.3 series made quite a  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; few
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; advancements in the area of valgrind memory checking, and recent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; versions of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs allow you to compile in valgrind extensions that tell
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; valgrind
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;this memory is ok&quot; (which prevents these false positives).  I'm  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pretty
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that the OFED install does not enable these libibverbs valgrind
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extensions;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you will likely need your own installation of libibverbs and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; your verbs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; plugin (libmthca for you, I think...?) that explicitly has the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; valgrind
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extensions enabled.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parallel programmer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7546.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Previous message:</strong> <a href="7544.php">Tim Mattox: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>In reply to:</strong> <a href="7542.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
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
