<?
$subject_val = "[OMPI devel] Request_free() and Cancel() with REQUEST_NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 10:15:21 2010" -->
<!-- isoreceived="20100211151521" -->
<!-- sent="Thu, 11 Feb 2010 12:15:17 -0300" -->
<!-- isosent="20100211151517" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Request_free() and Cancel() with REQUEST_NULL" -->
<!-- id="e7ba66e41002110715q7878cd1aw75918a378cef8e75_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Request_free() and Cancel() with REQUEST_NULL<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 10:15:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7408.php">Eugene Loh: "Re: [OMPI devel] failure	withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7411.php">George Bosilca: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>Reply:</strong> <a href="7411.php">George Bosilca: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why Request_free() and Cancel() do not fail when REQUEST_NULL is
<br>
passed? Am I missing something?
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;req = MPI_REQUEST_NULL;
<br>
&nbsp;&nbsp;MPI_Request_free(&amp;req);
<br>
&nbsp;&nbsp;req = MPI_REQUEST_NULL;
<br>
&nbsp;&nbsp;MPI_Cancel(&amp;req);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>PS: The code below was tested with 1.4.1
<br>
<p><pre>
-- 
Lisandro Dalcin
---------------
Centro Internacional de M&#195;&#169;todos Computacionales en Ingenier&#195;&#173;a (CIMEC)
Instituto de Desarrollo Tecnol&#195;&#179;gico para la Industria Qu&#195;&#173;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#195;&#173;ficas y T&#195;&#169;cnicas (CONICET)
PTLC - G&#195;&#188;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7408.php">Eugene Loh: "Re: [OMPI devel] failure	withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7411.php">George Bosilca: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>Reply:</strong> <a href="7411.php">George Bosilca: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
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
