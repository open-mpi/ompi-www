<?
$subject_val = "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 21 12:24:19 2009" -->
<!-- isoreceived="20090821162419" -->
<!-- sent="Fri, 21 Aug 2009 18:24:12 +0200" -->
<!-- isosent="20090821162412" -->
<!-- name="tomek" -->
<!-- email="t.koziara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?" -->
<!-- id="DC824AF1-8942-4C9E-AE71-35ECCCDB334C_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="66F38F57-7538-4909-9F9A-A83F9E1669CF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?<br>
<strong>From:</strong> tomek (<em>t.koziara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-21 12:24:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10454.php">Prentice Bisbal: "[OMPI users] RETRY EXCEEDED ERROR status number 12"</a>
<li><strong>Previous message:</strong> <a href="10452.php">tomek: "Re: [OMPI users] OpenMPI extremely slow with progress threads"</a>
<li><strong>In reply to:</strong> <a href="10446.php">Jeff Squyres: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is doing blocking communication in a separate thread better then
</span><br>
<span class="quotelev2">&gt;&gt; asynchronous progress?
</span><br>
<span class="quotelev2">&gt;&gt; (At least as a workaround until the proper implementation gets  
</span><br>
<span class="quotelev2">&gt;&gt; improved)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the moment, yes.  OMPI's asynchronous progress is &quot;loosely  
</span><br>
<span class="quotelev1">&gt; tested&quot; (at best).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI's threading support is somewhat stable for some devices (e.g.,  
</span><br>
<span class="quotelev1">&gt; not OpenFabrics-based networks), but it's still somewhat new, so  
</span><br>
<span class="quotelev1">&gt; feedback would be welcome here.
</span><br>
<p>I quickly modified my asynchronous code (Isend - Recv) to have a  
<br>
pthread doing Irecv - Rsend for point to point collective  
<br>
communication (which normally works fine for me). But still - on my  
<br>
wee laptop - the thread / blocking comm. combination is quite slow. I  
<br>
will play around with it to see whether it can be improved. Of course,  
<br>
laptop is not a good device for a very conclusive testing, but if  
<br>
things are too slow here, I wouldn't expect them to work great  
<br>
elsewhere.
<br>
<p>I wonder whether the OMPI 1.3 on OS X Leopard will have MPI threads  
<br>
enabled (the 1.2.8 version on Darwin doesn't)...
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10453/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10454.php">Prentice Bisbal: "[OMPI users] RETRY EXCEEDED ERROR status number 12"</a>
<li><strong>Previous message:</strong> <a href="10452.php">tomek: "Re: [OMPI users] OpenMPI extremely slow with progress threads"</a>
<li><strong>In reply to:</strong> <a href="10446.php">Jeff Squyres: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
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
