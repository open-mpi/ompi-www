<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 23 08:32:49 2005" -->
<!-- isoreceived="20050923133249" -->
<!-- sent="Fri, 23 Sep 2005 09:32:42 -0400" -->
<!-- isosent="20050923133242" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="using MPI_Alloc_mem" -->
<!-- id="3eeea3b01354f97ae51411c2eef95ae3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2005-09-23 08:32:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0400.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<li><strong>Previous message:</strong> <a href="0398.php">Jeff Squyres: "Re:  --with-mvapi/--with-btl-mvapi???"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim --
<br>
<p>Doesn't this violate the &quot;nothing should call MPI functions&quot; rule?
<br>
<p>I also ask because there's a bunch of places where we alloc temporary 
<br>
buffers in the collectives -- should we be using whatever the back-end 
<br>
to MPI_Alloc_mem is instead of malloc()?
<br>
<p>(this would apply to both the basic and tuned collective components)
<br>
<p><p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: twoodall_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: September 22, 2005 12:43:19 PM EDT
</span><br>
<span class="quotelev1">&gt; To: svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [O-MPI svn-full] svn:open-mpi r7487 - trunk/ompi/mpi/c
</span><br>
<span class="quotelev1">&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Author: twoodall
</span><br>
<span class="quotelev1">&gt; Date: 2005-09-22 11:43:17 -0500 (Thu, 22 Sep 2005)
</span><br>
<span class="quotelev1">&gt; New Revision: 7487
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/c/sendrecv_replace.c
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; use MPI_Alloc_mem/MPI_Free_mem for internally allocated buffers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpi/c/sendrecv_replace.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mpi/c/sendrecv_replace.c	2005-09-22 16:41:34 UTC (rev 
</span><br>
<span class="quotelev1">&gt; 7486)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpi/c/sendrecv_replace.c	2005-09-22 16:43:17 UTC (rev 
</span><br>
<span class="quotelev1">&gt; 7487)
</span><br>
<span class="quotelev1">&gt; @@ -86,8 +86,8 @@
</span><br>
<span class="quotelev1">&gt;          /* setup a buffer for recv */
</span><br>
<span class="quotelev1">&gt;          ompi_convertor_get_packed_size( &amp;convertor, &amp;packed_size );
</span><br>
<span class="quotelev1">&gt;          if( packed_size &gt; sizeof(recv_data) ) {
</span><br>
<span class="quotelev1">&gt; -            iov.iov_base = (caddr_t)malloc(packed_size);
</span><br>
<span class="quotelev1">&gt; -            if(iov.iov_base == NULL) {
</span><br>
<span class="quotelev1">&gt; +            rc = MPI_Alloc_mem(packed_size, MPI_INFO_NULL, 
</span><br>
<span class="quotelev1">&gt; &amp;iov.iov_base);
</span><br>
<span class="quotelev1">&gt; +            if(OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt;                  OMPI_ERRHANDLER_RETURN(OMPI_ERR_OUT_OF_RESOURCE, 
</span><br>
<span class="quotelev1">&gt; comm, MPI_ERR_BUFFER, FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt; @@ -117,7 +117,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* release resources */
</span><br>
<span class="quotelev1">&gt;          if(packed_size &gt; sizeof(recv_data)) {
</span><br>
<span class="quotelev1">&gt; -            free(iov.iov_base);
</span><br>
<span class="quotelev1">&gt; +            MPI_Free_mem(iov.iov_base);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          OBJ_DESTRUCT(&amp;convertor);
</span><br>
<span class="quotelev1">&gt;          return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0400.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<li><strong>Previous message:</strong> <a href="0398.php">Jeff Squyres: "Re:  --with-mvapi/--with-btl-mvapi???"</a>
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
