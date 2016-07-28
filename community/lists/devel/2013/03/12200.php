<?
$subject_val = "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  8 10:53:47 2013" -->
<!-- isoreceived="20130308155347" -->
<!-- sent="Fri, 8 Mar 2013 16:53:37 +0100" -->
<!-- isosent="20130308155337" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed" -->
<!-- id="3D03CB1E-4D1F-4661-8AAA-50A13D651941_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F98284_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-03-08 10:53:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12199.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12199.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It depends. The usage of MPI is valid. Totally weird and absolutely grotesque, but valid. What is invalid is the access of the array value. There is no completion call for the irecv and no guarantee for completion on MPI_Finalize, so making a decision on the content of buf[i] is incorrect.
<br>
<p>I think the rationale for allowing MPI_Request_free was to take advantage of the FIFO ordering for the match to allow the user to implement it's own consistency protocols.
<br>
<p>&nbsp;&nbsp;&nbsp;if (0 == rank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(buf, SIZE, MPI_CHAR, 1, 123, MPI_COMM_WORLD, &amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free(&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buf, SIZE, MPI_CHAR, 1, 123, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;} else if (1 == rank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(buf, SIZE, MPI_CHAR, 0, 123, MPI_COMM_WORLD, &amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free(&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buf, SIZE, MPI_CHAR, 0, 123, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>Is a valid usage.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Mar 8, 2013, at 16:38 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 8, 2013, at 10:20 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the app REQUEST_FREE'd a nonblocking send/receive, don't we block in ompi_mpi_finalize() before the call to pml_base_close(), such that the PMLs will be drained before we get to destroying the PMLs?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We don't, as we have no way of knowing there are pending requests in the pipeline. There is a separation between who create the requests and who release them. They are created by the selected PML, and are destroyed by the base, after the selected PML has been turned off.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's an interesting case -- do you think that this is a valid MPI application?  And if it is, what is the expected behavior?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define SIZE 33554432
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int i, rank;
</span><br>
<span class="quotelev1">&gt;    char *buf;
</span><br>
<span class="quotelev1">&gt;    MPI_Request req;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    buf = malloc(SIZE);
</span><br>
<span class="quotelev1">&gt;    assert(buf);
</span><br>
<span class="quotelev1">&gt;    memset(buf, rank, SIZE);
</span><br>
<span class="quotelev1">&gt;    if (0 == rank) {
</span><br>
<span class="quotelev1">&gt;        MPI_Isend(buf, SIZE, MPI_CHAR, 1, 123, MPI_COMM_WORLD, &amp;req);
</span><br>
<span class="quotelev1">&gt;        MPI_Request_free(&amp;req);
</span><br>
<span class="quotelev1">&gt;    } else if (1 == rank) {
</span><br>
<span class="quotelev1">&gt;        MPI_Irecv(buf, SIZE, MPI_CHAR, 0, 123, MPI_COMM_WORLD, &amp;req);
</span><br>
<span class="quotelev1">&gt;        MPI_Request_free(&amp;req);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (1 == rank) {
</span><br>
<span class="quotelev1">&gt;        for (i = 0; i &lt; SIZE; ++i) {
</span><br>
<span class="quotelev1">&gt;            assert(1 == buf[i]);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the SVN trunk, this application will fail the assert(1 == buf[i]).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI-3 p360 shows a *similar* case, but it's not exactly the same (example 8.7 shows Request_free one *one* side, not *both* sides).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12199.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12199.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
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
