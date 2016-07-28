<?
$subject_val = "Re: [OMPI devel] malloc 0 warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 10:50:44 2014" -->
<!-- isoreceived="20140827145044" -->
<!-- sent="Wed, 27 Aug 2014 17:50:23 +0300" -->
<!-- isosent="20140827145023" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] malloc 0 warnings" -->
<!-- id="CAEcYPwDzPmyW+Ga4esRM9dmUWv+Di33nBD3iX-TTB1SOvfyyNA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8B9BFD2D-F877-4336-A173-A732D799A931_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] malloc 0 warnings<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 10:50:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15741.php">Jed Brown: "Re: [OMPI devel] TKR"</a>
<li><strong>Previous message:</strong> <a href="15739.php">Orion Poplawski: "Re: [OMPI devel] TKR"</a>
<li><strong>In reply to:</strong> <a href="15725.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] malloc 0 warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15742.php">Lisandro Dalcin: "Re: [OMPI devel] malloc 0 warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 27 August 2014 02:38, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; If you have reproducers, yes, that would be most helpful -- thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, here you have something to start. To be fair, this is a reduction
<br>
with zero count. I have many other tests for reductions with zero
<br>
count that are failing.
<br>
<p>Does Open MPI ban zero-count reduction calls, or any failure is actually a bug?
<br>
<p>$ cat ireduce_scatter_block.c
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Request request;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Ireduce_scatter_block(NULL, NULL, 0, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM, MPI_COMM_SELF, &amp;request);
<br>
&nbsp;&nbsp;MPI_Wait(&amp;request, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>$ mpicc ireduce_scatter_block.c
<br>
$ ./a.out
<br>
malloc debug: Request for 0 bytes (coll_libnbc_ireduce_scatter_block.c, 67)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15741.php">Jed Brown: "Re: [OMPI devel] TKR"</a>
<li><strong>Previous message:</strong> <a href="15739.php">Orion Poplawski: "Re: [OMPI devel] TKR"</a>
<li><strong>In reply to:</strong> <a href="15725.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] malloc 0 warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15742.php">Lisandro Dalcin: "Re: [OMPI devel] malloc 0 warnings"</a>
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
