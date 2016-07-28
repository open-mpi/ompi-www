<?
$subject_val = "[OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 10:06:18 2014" -->
<!-- isoreceived="20140421140618" -->
<!-- sent="Mon, 21 Apr 2014 17:05:48 +0300" -->
<!-- isosent="20140421140548" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()" -->
<!-- id="CAEcYPwCT_Jc26xpGrRoSJ_3usj36iv98jM30c9qN7XwHwj5PPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-21 10:05:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14566.php">Lisandro Dalcin: "[OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>Previous message:</strong> <a href="14564.php">Lisandro Dalcin: "[OMPI devel] Issues with MPI_Add_error_class()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14569.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Reply:</strong> <a href="14569.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure this is actually a bug, but the difference may surprise
<br>
users. It seems that the implementation of
<br>
MPI_Ireduce_scatter(MPI_IN_PLACE,...) (ab?)uses the recvbuf to compute
<br>
the intermediate reduction, while MPI_Reduce_scatter(MPI_IN_PLACE,...)
<br>
does not.
<br>
<p>Look at the following code (setup to be run in up to 16 processes).
<br>
While MPI_Reduce_scatter() does not change the second and following
<br>
elements of recvbuf, the nonblocking variant do modify the second and
<br>
following entries in some ranks.
<br>
<p><p>[dalcinl_at_kw2060 openmpi]$ cat ireduce_scatter.c
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int i,size,rank;
<br>
&nbsp;&nbsp;int recvbuf[] = {1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1};
<br>
&nbsp;&nbsp;int rcounts[] = {1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1};
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;if (size &gt; 16) MPI_Abort(MPI_COMM_WORLD,1);
<br>
#ifndef NBCOLL
<br>
#define NBCOLL 1
<br>
#endif
<br>
#if NBCOLL
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request request;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Ireduce_scatter(MPI_IN_PLACE, recvbuf, rcounts, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM, MPI_COMM_WORLD, &amp;request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;request,MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;}
<br>
#else
<br>
&nbsp;&nbsp;MPI_Reduce_scatter(MPI_IN_PLACE, recvbuf, rcounts, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM, MPI_COMM_WORLD);
<br>
#endif
<br>
&nbsp;&nbsp;printf(&quot;[%d] rbuf[%d]=%2d  expected:%2d\n&quot;, rank, 0, recvbuf[i], size);
<br>
&nbsp;&nbsp;for (i=1; i&lt;size; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[%d] rbuf[%d]=%2d  expected:%2d\n&quot;, rank, i, recvbuf[i], 1);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>[dalcinl_at_kw2060 openmpi]$ mpicc -DNBCOLL=0 ireduce_scatter.c
<br>
[dalcinl_at_kw2060 openmpi]$ mpiexec -n 3 ./a.out | sort
<br>
[0] rbuf[0]= 3  expected: 3
<br>
[0] rbuf[1]= 1  expected: 1
<br>
[0] rbuf[2]= 1  expected: 1
<br>
[1] rbuf[0]= 3  expected: 3
<br>
[1] rbuf[1]= 1  expected: 1
<br>
[1] rbuf[2]= 1  expected: 1
<br>
[2] rbuf[0]= 3  expected: 3
<br>
[2] rbuf[1]= 1  expected: 1
<br>
[2] rbuf[2]= 1  expected: 1
<br>
<p>[dalcinl_at_kw2060 openmpi]$ mpicc -DNBCOLL=1 ireduce_scatter.c
<br>
[dalcinl_at_kw2060 openmpi]$ mpiexec -n 3 ./a.out | sort
<br>
[0] rbuf[0]= 3  expected: 3
<br>
[0] rbuf[1]= 2  expected: 1
<br>
[0] rbuf[2]= 2  expected: 1
<br>
[1] rbuf[0]= 3  expected: 3
<br>
[1] rbuf[1]= 1  expected: 1
<br>
[1] rbuf[2]= 1  expected: 1
<br>
[2] rbuf[0]= 3  expected: 3
<br>
[2] rbuf[1]= 1  expected: 1
<br>
[2] rbuf[2]= 1  expected: 1
<br>
<p><p><p><p><p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (UNL/CONICET)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
3000 Santa Fe, Argentina
Tel: +54-342-4511594 (ext 1016)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14566.php">Lisandro Dalcin: "[OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>Previous message:</strong> <a href="14564.php">Lisandro Dalcin: "[OMPI devel] Issues with MPI_Add_error_class()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14569.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Reply:</strong> <a href="14569.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
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
