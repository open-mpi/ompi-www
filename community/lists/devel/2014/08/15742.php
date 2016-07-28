<?
$subject_val = "Re: [OMPI devel] malloc 0 warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 11:10:47 2014" -->
<!-- isoreceived="20140827151047" -->
<!-- sent="Wed, 27 Aug 2014 18:10:25 +0300" -->
<!-- isosent="20140827151025" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] malloc 0 warnings" -->
<!-- id="CAEcYPwApf4uTn72FG-CZe=PNkX9fy5wUhzVXW+DB5WgVLYZvrA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-08-27 11:10:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15743.php">Ralph Castain: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<li><strong>Previous message:</strong> <a href="15741.php">Jed Brown: "Re: [OMPI devel] TKR"</a>
<li><strong>In reply to:</strong> <a href="15725.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] malloc 0 warnings"</a>
<!-- nextthread="start" -->
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
<p>Here you have another one...
<br>
<p>$ cat igatherv.c
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;signed char a=1,b=2;
<br>
&nbsp;&nbsp;int rcounts[1] = {0};
<br>
&nbsp;&nbsp;int rdispls[1] = {0};
<br>
&nbsp;&nbsp;MPI_Request request;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Igatherv(&amp;a, 0, MPI_SIGNED_CHAR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;b, rcounts, rdispls, MPI_SIGNED_CHAR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, MPI_COMM_SELF, &amp;request);
<br>
&nbsp;&nbsp;MPI_Wait(&amp;request, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>$ mpicc igatherv.c
<br>
$ ./a.out
<br>
malloc debug: Request for 0 bytes (nbc_internal.h, 496)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15743.php">Ralph Castain: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<li><strong>Previous message:</strong> <a href="15741.php">Jed Brown: "Re: [OMPI devel] TKR"</a>
<li><strong>In reply to:</strong> <a href="15725.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] malloc 0 warnings"</a>
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
