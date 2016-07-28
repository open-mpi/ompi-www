<?
$subject_val = "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  8 12:07:13 2013" -->
<!-- isoreceived="20130308170713" -->
<!-- sent="Fri, 8 Mar 2013 18:07:07 +0100" -->
<!-- isosent="20130308170707" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed" -->
<!-- id="BE0561DB-DBDC-46C5-AB5E-1AECE40C6CF7_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F99553_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-08 12:07:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 8, 2013, at 17:37 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; He removed a bunch of text in the middle (see <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/143">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/143</a>).  In short: there is NO way for a user to know when a REQUEST_FREEd request has completed, because *matching* happens in order.  In your example below, it's possible for the Send to overtake the Isend, as long as the matching happened in order:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  if (0 == rank) {
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Isend(buf, SIZE, MPI_CHAR, 1, 123, MPI_COMM_WORLD, &amp;req);
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Request_free(&amp;req);
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Send(buf, SIZE, MPI_CHAR, 1, 123, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;  } else if (1 == rank) {
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Irecv(buf, SIZE, MPI_CHAR, 0, 123, MPI_COMM_WORLD, &amp;req);
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Request_free(&amp;req);
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Recv(buf, SIZE, MPI_CHAR, 0, 123, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<p>Right, because both operations are non-blocking only the matching is important. Moreover, using MPI_Send instead of the MPI_Isend is not good either, as the MPI_Send does not guarantee completion. If we go for a MPI_Recv instead of the MPI_Irecv on the rank 1 first operation, my example become correct.
<br>
<p><span class="quotelev1">&gt; Regardless, this therefore probably makes a case for destroying something when the refcount is 1.  I had to stop working on that for the moment and will likely get back to it next week -- I'll check and see what happens; it may still be possible that those lists are empty when we close the PML, anyway.
</span><br>
<p>Check pml_ob1_component.c:230. The commented out test seems to be doing what you look for, making sure that when the PML is closed no allocated requests are outside of the free list (like the matching or pending queues).
<br>
<p>&nbsp;&nbsp;George.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
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
