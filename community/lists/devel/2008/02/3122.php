<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 13:20:06 2008" -->
<!-- isoreceived="20080204182006" -->
<!-- sent="Mon, 4 Feb 2008 13:20:00 -0500" -->
<!-- isosent="20080204182000" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366" -->
<!-- id="CCE165CD-EF27-459C-A027-EE1A79D52DCD_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47A71068.2060805_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2008-02-04 13:20:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3123.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>Previous message:</strong> <a href="3121.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>In reply to:</strong> <a href="3121.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3123.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>Reply:</strong> <a href="3123.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, well, well ... There is really no way to make everybody happy ...
<br>
<p>When I did the previous commit (where I added the check), Tim Prins  
<br>
pointed out the following 2 paragraphs from the MPI standard.
<br>
<p><span class="quotelev2">&gt;&gt; MPI-1.1 s4.9.1 (p113, line 28) says the recvbuf is &quot;significant  
</span><br>
<span class="quotelev2">&gt;&gt; only at root&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI-1.1 s2.2 (p7, line 7-9) and MPI-2 s2.3 (p7 line 1-3) have the  
</span><br>
<span class="quotelev2">&gt;&gt; identical text:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Another frequent situation arises when an argument value is needed  
</span><br>
<span class="quotelev2">&gt;&gt; only by a subset of the processes. When an argument is not  
</span><br>
<span class="quotelev2">&gt;&gt; significant at a process then an arbitrary value can be passed as  
</span><br>
<span class="quotelev2">&gt;&gt; argument.&quot;
</span><br>
<p>As you can see on the second paragraph, the standard claims that an  
<br>
arbitrary value can be passed.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 4, 2008, at 8:17 AM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hate to say this, but I don't think that this is correct. Page 114  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; MPI 1 says (in the section about MPI_Reduce)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Thus, all processes provide input buffers and output buffers of the
</span><br>
<span class="quotelev1">&gt; same length, with elements of the same time&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The content is only significant at the root, but all processes have to
</span><br>
<span class="quotelev1">&gt; provide the buffer according to my understanding...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-02-03 20:44:41 EST (Sun, 03 Feb 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 17366
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17366">https://svn.open-mpi.org/trac/ompi/changeset/17366</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; As the receive buffer is only significant at root, limit the
</span><br>
<span class="quotelev2">&gt;&gt; check only where it makes sense.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mpi/c/reduce.c |     4 +---
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 1 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mpi/c/reduce.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mpi/c/reduce.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mpi/c/reduce.c	2008-02-03 20:44:41 EST (Sun, 03 Feb  
</span><br>
<span class="quotelev2">&gt;&gt; 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -59,9 +59,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;             free(msg);
</span><br>
<span class="quotelev2">&gt;&gt;             return ret;
</span><br>
<span class="quotelev2">&gt;&gt;         } else if ((ompi_comm_rank(comm) != root &amp;&amp; MPI_IN_PLACE ==  
</span><br>
<span class="quotelev2">&gt;&gt; sendbuf) ||
</span><br>
<span class="quotelev2">&gt;&gt; -                   (ompi_comm_rank(comm) == root &amp;&amp; MPI_IN_PLACE  
</span><br>
<span class="quotelev2">&gt;&gt; == recvbuf)) {
</span><br>
<span class="quotelev2">&gt;&gt; -            err = MPI_ERR_ARG;
</span><br>
<span class="quotelev2">&gt;&gt; -        } else if( sendbuf == recvbuf ) {
</span><br>
<span class="quotelev2">&gt;&gt; +                   (ompi_comm_rank(comm) == root &amp;&amp; ((MPI_IN_PLACE  
</span><br>
<span class="quotelev2">&gt;&gt; == recvbuf) || (sendbuf == recvbuf)))) {
</span><br>
<span class="quotelev2">&gt;&gt;             err = MPI_ERR_ARG;
</span><br>
<span class="quotelev2">&gt;&gt;         } else {
</span><br>
<span class="quotelev2">&gt;&gt;             OMPI_CHECK_DATATYPE_FOR_SEND(err, datatype, count);
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3122/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3123.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>Previous message:</strong> <a href="3121.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>In reply to:</strong> <a href="3121.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3123.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>Reply:</strong> <a href="3123.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
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
