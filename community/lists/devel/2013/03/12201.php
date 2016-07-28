<?
$subject_val = "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  8 11:37:21 2013" -->
<!-- isoreceived="20130308163721" -->
<!-- sent="Fri, 8 Mar 2013 16:37:15 +0000" -->
<!-- isosent="20130308163715" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F99553_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="3D03CB1E-4D1F-4661-8AAA-50A13D651941_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-08 11:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12202.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12200.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12200.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12202.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12202.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 8, 2013, at 10:53 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It depends. The usage of MPI is valid. Totally weird and absolutely grotesque, but valid. What is invalid is the access of the array value. There is no completion call for the irecv and no guarantee for completion on MPI_Finalize, so making a decision on the content of buf[i] is incorrect.
</span><br>
<p>After thinking about this more, I don't think it's incorrect -- I think it's undefined.
<br>
<p>The description of MPI_FINALIZE doesn't say what happens for this case (and probably *shouldn't*).  So it's undefined.  The buf array *may* be filled and it may not.
<br>
<p><span class="quotelev1">&gt; I think the rationale for allowing MPI_Request_free was to take advantage of the FIFO ordering for the match to allow the user to implement it's own consistency protocols.
</span><br>
<p>Remember that Erez removed some bad AtoU about MPI_REQUEST_FREE in MPI-2; it's now MPI-3 p55:22-28:
<br>
<p>Advice to users. Once a request is freed by a call to MPI_REQUEST_FREE, it is not possible to check for the successful completion of the associated communication with calls to MPI_WAIT or MPI_TEST. Also, if an error occurs subsequently during the communication, an error code cannot be returned to the user &#151; such an error must be treated as fatal. An active receive request should never be freed as the receiver will have no way to verify that the receive has completed and the receive buffer can be reused. (End of advice to users.)
<br>
<p>He removed a bunch of text in the middle (see <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/143">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/143</a>).  In short: there is NO way for a user to know when a REQUEST_FREEd request has completed, because *matching* happens in order.  In your example below, it's possible for the Send to overtake the Isend, as long as the matching happened in order:
<br>
<p><span class="quotelev1">&gt;   if (0 == rank) {
</span><br>
<span class="quotelev1">&gt;       MPI_Isend(buf, SIZE, MPI_CHAR, 1, 123, MPI_COMM_WORLD, &amp;req);
</span><br>
<span class="quotelev1">&gt;       MPI_Request_free(&amp;req);
</span><br>
<span class="quotelev1">&gt;       MPI_Send(buf, SIZE, MPI_CHAR, 1, 123, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;   } else if (1 == rank) {
</span><br>
<span class="quotelev1">&gt;       MPI_Irecv(buf, SIZE, MPI_CHAR, 0, 123, MPI_COMM_WORLD, &amp;req);
</span><br>
<span class="quotelev1">&gt;       MPI_Request_free(&amp;req);
</span><br>
<span class="quotelev1">&gt;       MPI_Recv(buf, SIZE, MPI_CHAR, 0, 123, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<p><p>Regardless, this therefore probably makes a case for destroying something when the refcount is 1.  I had to stop working on that for the moment and will likely get back to it next week -- I'll check and see what happens; it may still be possible that those lists are empty when we close the PML, anyway.  
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12202.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12200.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12200.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12202.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12202.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
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
