<?
$subject_val = "Re: [OMPI users] Valgrind Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 11:02:18 2008" -->
<!-- isoreceived="20081215160218" -->
<!-- sent="Mon, 15 Dec 2008 08:02:09 -0800" -->
<!-- isosent="20081215160209" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind Warning" -->
<!-- id="BEFFDE08-D972-4AE7-8C5A-82D23AD386E5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0812150759h3cac66d4ldf11f2cd3e5e17ff_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-12-15 11:02:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7548.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Previous message:</strong> <a href="7546.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>In reply to:</strong> <a href="7546.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7548.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Reply:</strong> <a href="7548.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2008, at 7:59 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Ok,
</span><br>
<span class="quotelev1">&gt; thanks a lot,
</span><br>
<span class="quotelev1">&gt; as soon as possibile, i''install 1.3 version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But i don't understand why MPI_Recv warnings are detected. Which is
</span><br>
<span class="quotelev1">&gt; the difference with MPI_Send warnings? Modules involved in OpenMPI are
</span><br>
<span class="quotelev1">&gt; differents?
</span><br>
<p>Yes and no.  They are different code paths, so I can see how different  
<br>
verbs are used, and different control buffers are passed during the  
<br>
sequence.  It's probably either a missed valgrind annotation in  
<br>
libibverbs or something that OMPI is doing (where we *hopefully* have  
<br>
valgrind annotations in v1.3...).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7548.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Previous message:</strong> <a href="7546.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>In reply to:</strong> <a href="7546.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7548.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Reply:</strong> <a href="7548.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
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
