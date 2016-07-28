<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  MPI_Ireduce_scatter_block hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 12 12:39:23 2012" -->
<!-- isoreceived="20120712163923" -->
<!-- sent="Thu, 12 Jul 2012 16:38:58 +0000" -->
<!-- isosent="20120712163858" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  MPI_Ireduce_scatter_block hangs" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD23926640_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FFE64A9.8090808_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  MPI_Ireduce_scatter_block hangs<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-12 12:38:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11284.php">Nathan Hjelm: "[OMPI devel] Summary of the problem with r26626"</a>
<li><strong>Previous message:</strong> <a href="11282.php">Paul Kapinos: "[OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>In reply to:</strong> <a href="11281.php">Mikhail Kurnosov: "[OMPI devel] MPI_Ireduce_scatter_block hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello -
<br>
<p>Thank you for the bug report.  This has been fixed in the trunk.
<br>
<p>Brian
<br>
<p>On 7/12/12 1:46 AM, &quot;Mikhail Kurnosov&quot; &lt;mkurnosov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In the case of single process the MPI_Ireduce_scatter_block is
</span><br>
<span class="quotelev1">&gt;segfaulting with v1.9a1r26786.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But in other cases (commsize &gt;= 2) processes hang in
</span><br>
<span class="quotelev1">&gt;MPI_Ireduce_scatter_block. The NBC_Progress hangs during rounds
</span><br>
<span class="quotelev1">&gt;processing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The following example illustrates this problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ cat ireduce_scatter_block_test.c
</span><br>
<span class="quotelev1">&gt;#include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;{
</span><br>
<span class="quotelev1">&gt;     MPI_Request req;
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt;     double *sbuf, *rbuf;
</span><br>
<span class="quotelev1">&gt;     int commsize, i, j, count = 10;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;commsize);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     sbuf = malloc(sizeof(*sbuf) * count * commsize);
</span><br>
<span class="quotelev1">&gt;     rbuf = malloc(sizeof(*rbuf) * count);
</span><br>
<span class="quotelev1">&gt;     for (i = 0; i &lt; commsize; i++) {
</span><br>
<span class="quotelev1">&gt;         for (j = 0; j &lt; count; j++) {
</span><br>
<span class="quotelev1">&gt;             sbuf[i] = 1.0;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Ireduce_scatter_block(sbuf, rbuf, count, MPI_DOUBLE,
</span><br>
<span class="quotelev1">&gt;                               MPI_SUM, MPI_COMM_WORLD, &amp;req);
</span><br>
<span class="quotelev1">&gt;     MPI_Wait(&amp;req, &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     free(rbuf);
</span><br>
<span class="quotelev1">&gt;     free(sbuf);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Mikhail Kurnosov
</span><br>
<span class="quotelev1">&gt;Computer Systems Department
</span><br>
<span class="quotelev1">&gt;Siberian State University of Telecommunications and Information Sciences
</span><br>
<span class="quotelev1">&gt;Address: 630102, 86 Kirova str., Novosibirsk, Russia
</span><br>
<span class="quotelev1">&gt;Email: mkurnosov_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://cpct.sibsutis.ru/~mkurnosov">http://cpct.sibsutis.ru/~mkurnosov</a>
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11284.php">Nathan Hjelm: "[OMPI devel] Summary of the problem with r26626"</a>
<li><strong>Previous message:</strong> <a href="11282.php">Paul Kapinos: "[OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>In reply to:</strong> <a href="11281.php">Mikhail Kurnosov: "[OMPI devel] MPI_Ireduce_scatter_block hangs"</a>
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
