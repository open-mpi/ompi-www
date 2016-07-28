<?
$subject_val = "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 15:10:20 2008" -->
<!-- isoreceived="20080707191020" -->
<!-- sent="Mon, 7 Jul 2008 15:10:12 -0400" -->
<!-- isosent="20080707191012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default" -->
<!-- id="05DB12A3-C9A0-451D-945F-9186E258CEFA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="487100C0.9070900_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-07 15:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4288.php">Brian W. Barrett: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<li><strong>Previous message:</strong> <a href="4286.php">Terry Dontje: "Re: [OMPI devel] latency and increasing number of processes"</a>
<li><strong>In reply to:</strong> <a href="4279.php">Patrick Geoffray: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2008, at 1:28 PM, Patrick Geoffray wrote:
<br>
<p><span class="quotelev2">&gt;&gt; WHAT: make mpi_leave_pinned=1 by default when a BTL is used that  
</span><br>
<span class="quotelev2">&gt;&gt; would benefit from it (when possible; 0 when not, obviously)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The probable reason registration cache (aka leave_pinned) is  
</span><br>
<span class="quotelev1">&gt; disabled by default is that it may be unsafe. Even if you use  
</span><br>
<span class="quotelev1">&gt; mallocopt to never return memory to the OS, how do you guarantee that:
</span><br>
<span class="quotelev1">&gt; * malloc always enforce the mallocopt *hints*.
</span><br>
<span class="quotelev1">&gt; * pinned memory can safely be fork()ed (system() for example).
</span><br>
<span class="quotelev1">&gt; * pinned memory can safely be unmmap()ed (Direct I/O or file mapping  
</span><br>
<span class="quotelev1">&gt; for example).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can't, one solution may be to write a simple MPI code that  
</span><br>
<span class="quotelev1">&gt; corrupts MVAPICH and make some noise about it.
</span><br>
<p><p>I can appreciate that, but it still remains that we are the *only*  
<br>
OpenFabrics MPI that doesn't do this by default.  So an app would  
<br>
break *all* of them.  To date, there hasn't been an app that caused  
<br>
anyone to change their defaults with regard to this issue (AFAIK).
<br>
<p>- I agree that we don't know that the mallopt hint will be obeyed; I  
<br>
don't know how to test for that.
<br>
- pinned memory is already unsafe in OpenFabrics when forking.
<br>
- we can catch munmap (it's in the code base already) in most cases,  
<br>
so I'm not too worried about that.
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
<li><strong>Next message:</strong> <a href="4288.php">Brian W. Barrett: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<li><strong>Previous message:</strong> <a href="4286.php">Terry Dontje: "Re: [OMPI devel] latency and increasing number of processes"</a>
<li><strong>In reply to:</strong> <a href="4279.php">Patrick Geoffray: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
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
