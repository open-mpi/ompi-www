<?
$subject_val = "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  8 10:38:47 2013" -->
<!-- isoreceived="20130308153847" -->
<!-- sent="Fri, 8 Mar 2013 15:38:42 +0000" -->
<!-- isosent="20130308153842" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F98284_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EBD007FB-554A-40C7-8DAC-0CBB880C1D3A_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2013-03-08 10:38:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12200.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12198.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12198.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12200.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12200.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 8, 2013, at 10:20 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; If the app REQUEST_FREE'd a nonblocking send/receive, don't we block in ompi_mpi_finalize() before the call to pml_base_close(), such that the PMLs will be drained before we get to destroying the PMLs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't, as we have no way of knowing there are pending requests in the pipeline. There is a separation between who create the requests and who release them. They are created by the selected PML, and are destroyed by the base, after the selected PML has been turned off.
</span><br>
<p><p>Here's an interesting case -- do you think that this is a valid MPI application?  And if it is, what is the expected behavior?
<br>
<p>-----
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;assert.h&gt;
<br>
<p>#define SIZE 33554432
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i, rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *buf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request req;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;buf = malloc(SIZE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;assert(buf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memset(buf, rank, SIZE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (0 == rank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(buf, SIZE, MPI_CHAR, 1, 123, MPI_COMM_WORLD, &amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free(&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else if (1 == rank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(buf, SIZE, MPI_CHAR, 0, 123, MPI_COMM_WORLD, &amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free(&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (1 == rank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; SIZE; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(1 == buf[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
-----
<br>
<p>On the SVN trunk, this application will fail the assert(1 == buf[i]).
<br>
<p>MPI-3 p360 shows a *similar* case, but it's not exactly the same (example 8.7 shows Request_free one *one* side, not *both* sides).
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
<li><strong>Next message:</strong> <a href="12200.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12198.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12198.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12200.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12200.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
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
