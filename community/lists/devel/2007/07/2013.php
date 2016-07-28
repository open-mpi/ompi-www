<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 12:54:15 2007" -->
<!-- isoreceived="20070726165415" -->
<!-- sent="Thu, 26 Jul 2007 12:53:59 -0400" -->
<!-- isosent="20070726165359" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes" -->
<!-- id="C53C1508-DA53-48D0-8E3D-B76DCCE1A464_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40707260942nb17ee11he678f2e973aae563_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-26 12:53:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2014.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2012.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>In reply to:</strong> <a href="2012.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 26, 2007, at 12:42 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Be sure to read this thread in order -- the conclusion of the thread
</span><br>
<span class="quotelev2">&gt;&gt; was that we now actually *do* return NULL, per POSIX advice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, I got confused. And now, MPI_Free_mem is going to fail with a NULL
</span><br>
<span class="quotelev1">&gt; pointer? Not sure what POSIX says, but then OMPI should also follow it
</span><br>
<span class="quotelev1">&gt; advice, right?
</span><br>
<p>It's not going to *fail* -- it's just going to return a NULL pointer  
<br>
if you ask for 0 bytes.  This is perfectly valid according to POSIX's  
<br>
definition of free().  Also, passing NULL to MPI_FREE_MEM will now  
<br>
silently succeed (it will currently raise an MPI_ERR_ARG exception).
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
<li><strong>Next message:</strong> <a href="2014.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2012.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>In reply to:</strong> <a href="2012.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
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
