<?
$subject_val = "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  6 13:29:09 2008" -->
<!-- isoreceived="20080706172909" -->
<!-- sent="Sun, 06 Jul 2008 10:28:32 -0700" -->
<!-- isosent="20080706172832" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default" -->
<!-- id="487100C0.9070900_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DAE6CC43-E302-4320-B4CB-16360ECE6A37_at_cisco.com" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-06 13:28:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4280.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4278.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4265.php">Jeff Squyres: "[OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4287.php">Jeff Squyres: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>Reply:</strong> <a href="4287.php">Jeff Squyres: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; WHAT: make mpi_leave_pinned=1 by default when a BTL is used that would 
</span><br>
<span class="quotelev1">&gt; benefit from it (when possible; 0 when not, obviously)
</span><br>
<p><span class="quotelev1">&gt; Comments?
</span><br>
<p>The probable reason registration cache (aka leave_pinned) is disabled by 
<br>
default is that it may be unsafe. Even if you use mallocopt to never 
<br>
return memory to the OS, how do you guarantee that:
<br>
* malloc always enforce the mallocopt *hints*.
<br>
* pinned memory can safely be fork()ed (system() for example).
<br>
* pinned memory can safely be unmmap()ed (Direct I/O or file mapping for 
<br>
example).
<br>
<p>If you can't, one solution may be to write a simple MPI code that 
<br>
corrupts MVAPICH and make some noise about it.
<br>
<p>My 2 cents.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4280.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4278.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4265.php">Jeff Squyres: "[OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4287.php">Jeff Squyres: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>Reply:</strong> <a href="4287.php">Jeff Squyres: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
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
