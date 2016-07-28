<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 13:39:52 2008" -->
<!-- isoreceived="20080204183952" -->
<!-- sent="Mon, 4 Feb 2008 13:39:28 -0500" -->
<!-- isosent="20080204183928" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366" -->
<!-- id="7B6B8593-CD27-4CDC-96DA-D22592B55223_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47A759A0.6080400_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 13:39:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3125.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3123.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>In reply to:</strong> <a href="3123.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I remember the discussion. However, the outcome is not that clear to  
<br>
me anymore :). Moreover, I know that tuned collective do not rely on  
<br>
the user supplied buffer on the intermediary nodes, which pinpoint to  
<br>
the fact that we ignore it.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 4, 2008, at 1:29 PM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; well, but the point is, that the requirement I listed is explicitly
</span><br>
<span class="quotelev1">&gt; mentioned in the chapter about MPI_Reduce. So I would claim, that it
</span><br>
<span class="quotelev1">&gt; trumps (at least) the second citation. (BTW: I am pretty sure that I
</span><br>
<span class="quotelev1">&gt; remember having this discussion early in Open MPI days already :-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But maybe that's something for 2.1?
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Well, well, well ... There is really no way to make everybody  
</span><br>
<span class="quotelev2">&gt;&gt; happy ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I did the previous commit (where I added the check), Tim Prins
</span><br>
<span class="quotelev2">&gt;&gt; pointed out the following 2 paragraphs from the MPI standard.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI-1.1 s4.9.1 (p113, line 28) says the recvbuf is &quot;significant  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at root&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI-1.1 s2.2 (p7, line 7-9) and MPI-2 s2.3 (p7 line 1-3) have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; identical text:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;Another frequent situation arises when an argument value is needed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only by a subset of the processes. When an argument is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; significant at a process then an arbitrary value can be passed as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; argument.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As you can see on the second paragraph, the standard claims that an
</span><br>
<span class="quotelev2">&gt;&gt; arbitrary value can be passed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 4, 2008, at 8:17 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hate to say this, but I don't think that this is correct. Page  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 114 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1 says (in the section about MPI_Reduce)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Thus, all processes provide input buffers and output buffers of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same length, with elements of the same time&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The content is only significant at the root, but all processes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provide the buffer according to my understanding...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2008-02-03 20:44:41 EST (Sun, 03 Feb 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 17366
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17366">https://svn.open-mpi.org/trac/ompi/changeset/17366</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As the receive buffer is only significant at root, limit the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; check only where it makes sense.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mpi/c/reduce.c |     4 +---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  1 files changed, 1 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/mpi/c/reduce.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/mpi/c/reduce.c    (original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mpi/c/reduce.c    2008-02-03 20:44:41 EST (Sun, 03  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Feb
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -59,9 +59,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            free(msg);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            return ret;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        } else if ((ompi_comm_rank(comm) != root &amp;&amp; MPI_IN_PLACE ==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sendbuf) ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                   (ompi_comm_rank(comm) == root &amp;&amp; MPI_IN_PLACE  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recvbuf)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            err = MPI_ERR_ARG;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        } else if( sendbuf == recvbuf ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                   (ompi_comm_rank(comm) == root &amp;&amp; ((MPI_IN_PLACE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == recvbuf) || (sendbuf == recvbuf)))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            err = MPI_ERR_ARG;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            OMPI_CHECK_DATATYPE_FOR_SEND(err, datatype, count);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3124/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3125.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3123.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>In reply to:</strong> <a href="3123.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
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
