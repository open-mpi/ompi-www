<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 24 12:14:48 2007" -->
<!-- isoreceived="20070724161448" -->
<!-- sent="Tue, 24 Jul 2007 12:14:27 -0400" -->
<!-- isosent="20070724161427" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid" -->
<!-- id="26CC8795-D7E8-437E-BC77-2EAB49CA92B9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40707240902k1841c8c3v2dc9581d0f90261d_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-24 12:14:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1989.php">Ralph Castain: "[OMPI devel] Hostfile - oh yes, again!"</a>
<li><strong>Previous message:</strong> <a href="1987.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>In reply to:</strong> <a href="1987.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 24, 2007, at 12:02 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Per Lisandro's comments: I think that if you need a random/valid
</span><br>
<span class="quotelev2">&gt;&gt; value for an STL map (or similar), malloc(0) is not a good idea to
</span><br>
<span class="quotelev2">&gt;&gt; use as a key.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, regarding comments in this thread, you are completelly right. I am
</span><br>
<span class="quotelev1">&gt; fine with returning NULL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, should'nt this issue be commented in the standard? Perhaps in the
</span><br>
<span class="quotelev1">&gt; errata document? I think there is no a strong need to make it
</span><br>
<span class="quotelev1">&gt; implementation dependent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI-2 could mandate/suggest that if size=0, the returned pointer is
</span><br>
<span class="quotelev1">&gt; NULL, but then MPI_Free_mem with a NULL pointer should succeed.
</span><br>
<p>Good point.  Do you want to bring it up on the mpi-21 list?
<br>
<p><span class="quotelev1">&gt; Now a question: What about Fortran ?
</span><br>
<p>Hmm.  Good question.  I am not a Fortran expert, but my $0.02 would  
<br>
be that if we can return NULL in C, and since there is no equivalent  
<br>
to NULL in Fortran, then the result should be disallowed -- if you do  
<br>
it, the results are undefined.
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
<li><strong>Next message:</strong> <a href="1989.php">Ralph Castain: "[OMPI devel] Hostfile - oh yes, again!"</a>
<li><strong>Previous message:</strong> <a href="1987.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>In reply to:</strong> <a href="1987.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
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
