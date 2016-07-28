<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 08:17:35 2008" -->
<!-- isoreceived="20080204131735" -->
<!-- sent="Mon, 04 Feb 2008 07:17:28 -0600" -->
<!-- isosent="20080204131728" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366" -->
<!-- id="47A71068.2060805_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200802040144.m141ifoL007731_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 08:17:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3122.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>Previous message:</strong> <a href="3120.php">Matthias Jurenz: "Re: [OMPI devel] More VT warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3122.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>Reply:</strong> <a href="3122.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>I hate to say this, but I don't think that this is correct. Page 114 in 
<br>
MPI 1 says (in the section about MPI_Reduce)
<br>
<p>&quot;Thus, all processes provide input buffers and output buffers of the 
<br>
same length, with elements of the same time&quot;.
<br>
<p>The content is only significant at the root, but all processes have to 
<br>
provide the buffer according to my understanding...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>bosilca_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2008-02-03 20:44:41 EST (Sun, 03 Feb 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 17366
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17366">https://svn.open-mpi.org/trac/ompi/changeset/17366</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; As the receive buffer is only significant at root, limit the
</span><br>
<span class="quotelev1">&gt; check only where it makes sense.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/c/reduce.c |     4 +---                                    
</span><br>
<span class="quotelev1">&gt;    1 files changed, 1 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpi/c/reduce.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mpi/c/reduce.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpi/c/reduce.c	2008-02-03 20:44:41 EST (Sun, 03 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -59,9 +59,7 @@
</span><br>
<span class="quotelev1">&gt;              free(msg);
</span><br>
<span class="quotelev1">&gt;              return ret;
</span><br>
<span class="quotelev1">&gt;          } else if ((ompi_comm_rank(comm) != root &amp;&amp; MPI_IN_PLACE == sendbuf) ||
</span><br>
<span class="quotelev1">&gt; -                   (ompi_comm_rank(comm) == root &amp;&amp; MPI_IN_PLACE == recvbuf)) {
</span><br>
<span class="quotelev1">&gt; -            err = MPI_ERR_ARG;
</span><br>
<span class="quotelev1">&gt; -        } else if( sendbuf == recvbuf ) {
</span><br>
<span class="quotelev1">&gt; +                   (ompi_comm_rank(comm) == root &amp;&amp; ((MPI_IN_PLACE == recvbuf) || (sendbuf == recvbuf)))) {
</span><br>
<span class="quotelev1">&gt;              err = MPI_ERR_ARG;
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              OMPI_CHECK_DATATYPE_FOR_SEND(err, datatype, count);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3122.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>Previous message:</strong> <a href="3120.php">Matthias Jurenz: "Re: [OMPI devel] More VT warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3122.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>Reply:</strong> <a href="3122.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
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
