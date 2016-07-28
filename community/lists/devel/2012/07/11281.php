<?
$subject_val = "[OMPI devel] MPI_Ireduce_scatter_block hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 12 01:46:26 2012" -->
<!-- isoreceived="20120712054626" -->
<!-- sent="Thu, 12 Jul 2012 12:46:17 +0700" -->
<!-- isosent="20120712054617" -->
<!-- name="Mikhail Kurnosov" -->
<!-- email="mkurnosov_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Ireduce_scatter_block hangs" -->
<!-- id="4FFE64A9.8090808_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Ireduce_scatter_block hangs<br>
<strong>From:</strong> Mikhail Kurnosov (<em>mkurnosov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-12 01:46:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11282.php">Paul Kapinos: "[OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>Previous message:</strong> <a href="11280.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11283.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ireduce_scatter_block hangs"</a>
<li><strong>Reply:</strong> <a href="11283.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ireduce_scatter_block hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>In the case of single process the MPI_Ireduce_scatter_block is 
<br>
segfaulting with v1.9a1r26786.
<br>
<p>But in other cases (commsize &gt;= 2) processes hang in 
<br>
MPI_Ireduce_scatter_block. The NBC_Progress hangs during rounds processing.
<br>
<p>The following example illustrates this problem:
<br>
<p>$ cat ireduce_scatter_block_test.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double *sbuf, *rbuf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int commsize, i, j, count = 10;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;commsize);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sbuf = malloc(sizeof(*sbuf) * count * commsize);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rbuf = malloc(sizeof(*rbuf) * count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; commsize; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j = 0; j &lt; count; j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sbuf[i] = 1.0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Ireduce_scatter_block(sbuf, rbuf, count, MPI_DOUBLE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM, MPI_COMM_WORLD, &amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req, &amp;status);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(rbuf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(sbuf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><pre>
--
Mikhail Kurnosov
Computer Systems Department
Siberian State University of Telecommunications and Information Sciences
Address: 630102, 86 Kirova str., Novosibirsk, Russia
Email: mkurnosov_at_[hidden]
<a href="http://cpct.sibsutis.ru/~mkurnosov">http://cpct.sibsutis.ru/~mkurnosov</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11282.php">Paul Kapinos: "[OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>Previous message:</strong> <a href="11280.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11283.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ireduce_scatter_block hangs"</a>
<li><strong>Reply:</strong> <a href="11283.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ireduce_scatter_block hangs"</a>
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
