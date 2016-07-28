<?
$subject_val = "Re: [OMPI users] Valgrind Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 11:16:12 2008" -->
<!-- isoreceived="20081215161612" -->
<!-- sent="Mon, 15 Dec 2008 08:16:03 -0800" -->
<!-- isosent="20081215161603" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind Warning" -->
<!-- id="80D006DF-F3C4-4DE3-BFBE-4A72A2CC0B46_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0812150805g6406c0d4t94bcf5270026dcdf_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-12-15 11:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7550.php">Gabriele Fatigati: "[OMPI users] Bug in 1.3 nightly"</a>
<li><strong>Previous message:</strong> <a href="7548.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>In reply to:</strong> <a href="7548.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7545.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To followup for the list, I just filed ticket <a href="https://svn.open-mpi.org/trac/ompi/ticket/1719">https://svn.open-mpi.org/trac/ompi/ticket/1719</a> 
<br>
&nbsp;&nbsp;about this issue.
<br>
<p><p>On Dec 15, 2008, at 8:05 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Well,
</span><br>
<span class="quotelev1">&gt; thanks very much for your support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/12/15 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2008, at 7:59 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks a lot,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as soon as possibile, i''install 1.3 version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But i don't understand why MPI_Recv warnings are detected. Which is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the difference with MPI_Send warnings? Modules involved in OpenMPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; differents?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes and no.  They are different code paths, so I can see how  
</span><br>
<span class="quotelev2">&gt;&gt; different verbs
</span><br>
<span class="quotelev2">&gt;&gt; are used, and different control buffers are passed during the  
</span><br>
<span class="quotelev2">&gt;&gt; sequence.
</span><br>
<span class="quotelev2">&gt;&gt; It's probably either a missed valgrind annotation in libibverbs or
</span><br>
<span class="quotelev2">&gt;&gt; something that OMPI is doing (where we *hopefully* have valgrind  
</span><br>
<span class="quotelev2">&gt;&gt; annotations
</span><br>
<span class="quotelev2">&gt;&gt; in v1.3...).
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
<li><strong>Next message:</strong> <a href="7550.php">Gabriele Fatigati: "[OMPI users] Bug in 1.3 nightly"</a>
<li><strong>Previous message:</strong> <a href="7548.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>In reply to:</strong> <a href="7548.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7545.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
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
