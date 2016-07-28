<?
$subject_val = "[OMPI devel] Specific use case - very very new to MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 12:28:34 2014" -->
<!-- isoreceived="20140124172834" -->
<!-- sent="Fri, 24 Jan 2014 11:28:33 -0600" -->
<!-- isosent="20140124172833" -->
<!-- name="Kenneth Adam Miller" -->
<!-- email="kennethadammiller_at_[hidden]" -->
<!-- subject="[OMPI devel] Specific use case - very very new to MPI" -->
<!-- id="CAK7rcp_GvXgyTTEws69d7M6nT_PN5fFzFb41vbMmJTqw2eiauw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Specific use case - very very new to MPI<br>
<strong>From:</strong> Kenneth Adam Miller (<em>kennethadammiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 12:28:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] yet another fortran (documentation) issue"</a>
<li><strong>Previous message:</strong> <a href="13901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem	oshmem/shmem/fortran oshmem/tools/oshmem_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13908.php">Kenneth Adam Miller: "Re: [OMPI devel] Specific use case - very very new to MPI"</a>
<li><strong>Reply:</strong> <a href="13908.php">Kenneth Adam Miller: "Re: [OMPI devel] Specific use case - very very new to MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a specific use case that I want to describe, and I'm brand new to
<br>
MPI. It's rather complex, so I want to be careful that I design it so that
<br>
there are no race conditions.
<br>
<p>Pool A is a buffer (of type 1) handle manager, that feeds buffer handles
<br>
into thread set 1, and receives old handles from thread set 2. There is
<br>
only one thread running pool A.
<br>
<p>Thread set 1 is a set of N threads that fill up buffers of type 1 with
<br>
regular data. It pushes full buffers to thread set 2.
<br>
<p>Thread set 2 is a set of M threads that compress buffers of type 1 into
<br>
data buffers of type 2. Once the buffer of type 1 has be used up, it is
<br>
cleared and sent back to Pool A. It pulls fresh data buffers of type 2 from
<br>
Pool B, and sends freshly filled compressed buffers to Pool C.
<br>
<p>Pool C does something with the buffer, clears it and hands it to Pool B.
<br>
<p>Can this be done safely using an implementation like what I see here:
<br>
<a href="http://www.justsoftwaresolutions.co.uk/threading/implementing-a-thread-safe-queue-using-condition-variables.html">http://www.justsoftwaresolutions.co.uk/threading/implementing-a-thread-safe-queue-using-condition-variables.html</a>
<br>
?
<br>
<p>Note 1: -= denotes a 1-to-N connect and =- a N-to-1 connect
<br>
<p>RR = Request reply relationship
<br>
<p><a href="http://imgur.com/6tWZglJ">http://imgur.com/6tWZglJ</a>
<br>
<p>Questions: does MPI work with intel PIN tools? If so, then how can I apply
<br>
it to this? (I need specific modules and some examples, the OpenMPI manual
<br>
just appears to be a bunch of references with no textual guides...).
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13902/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] yet another fortran (documentation) issue"</a>
<li><strong>Previous message:</strong> <a href="13901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem	oshmem/shmem/fortran oshmem/tools/oshmem_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13908.php">Kenneth Adam Miller: "Re: [OMPI devel] Specific use case - very very new to MPI"</a>
<li><strong>Reply:</strong> <a href="13908.php">Kenneth Adam Miller: "Re: [OMPI devel] Specific use case - very very new to MPI"</a>
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
