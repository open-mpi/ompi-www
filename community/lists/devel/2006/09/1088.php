<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 27 10:24:23 2006" -->
<!-- isoreceived="20060927142423" -->
<!-- sent="Wed, 27 Sep 2006 11:24:18 -0300" -->
<!-- isosent="20060927142418" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: MPI_INPLACE problem" -->
<!-- id="e7ba66e40609270724m5eb21e5kfa4ab4fc3fa8c0fe_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40609270708o2aee68ecw258545f2616ea540_at_mail.gmail.com" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-27 10:24:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1089.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_INPLACE problem"</a>
<li><strong>Previous message:</strong> <a href="1087.php">Ralph H Castain: "[OMPI devel] ORTE Tutorial Materials"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1089.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_INPLACE problem"</a>
<li><strong>Reply:</strong> <a href="1089.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_INPLACE problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here an example of the problems I have with MPI_INPLACE in OMPI.
<br>
Hoping this can be useful. Perhaps the problem is not in OMPI sources,
<br>
but in my particular build. I've configured with:
<br>
<p>$ head -n 7 config.log | tail -n 1
<br>
&nbsp;&nbsp;$ ./configure --disable-dlopen --prefix /usr/local/openmpi/1.1.1
<br>
<p>First I present a very simple program that gives right results with
<br>
OMPI, next a small modification changing the sendcount argument, wich
<br>
gives now wrong results.
<br>
<p>Using MPICH2, both versions give the same, right result.
<br>
<p>My environment:
<br>
--------------
<br>
<p>$ echo $PATH
<br>
/usr/local/openmpi/1.1.1/bin:/usr/kerberos/bin:/usr/lib/ccache/bin:/usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:.
<br>
<p>$ echo $LD_LIBRARY_PATH
<br>
/usr/local/openmpi/1.1.1/lib:/usr/local/openmpi/1.1.1/lib/openmpi
<br>
<p>First test program
<br>
-----------------
<br>
<p>This stupid program gathers the values of comm.rank at a root process
<br>
with rank = com.size/2 and prints the gathered values.
<br>
<p>$ cat gather.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main() {
<br>
&nbsp;&nbsp;int size, rank, root;
<br>
&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;root = size/2;
<br>
&nbsp;&nbsp;if (rank == root) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int *buf = (int *) malloc(size * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;size; i++) buf[i] = -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf[rank] = rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Gather(MPI_IN_PLACE, 1, MPI_DATATYPE_NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf,          1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;size; i++) printf(&quot;%d,&quot;, buf[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(buf);
<br>
&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Gather(&amp;rank, 1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL,  0, MPI_DATATYPE_NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>Run results:
<br>
-----------
<br>
$ mpicc gather.c
<br>
$ mpirun -n 5 a.out
<br>
0,1,2,3,4,
<br>
<p><p>Second test program
<br>
-------------------
<br>
<p>I only modify the sendcount argument at root process, which is the one
<br>
passing sendbuf=MPI_INPLACE.
<br>
<p>$ cat gather.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main() {
<br>
&nbsp;&nbsp;int size, rank, root;
<br>
&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;root = size/2;
<br>
&nbsp;&nbsp;if (rank == root) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int *buf = (int *) malloc(size * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;size; i++) buf[i] = -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf[rank] = rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Gather(MPI_IN_PLACE, 0, MPI_DATATYPE_NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf,          1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;size; i++) printf(&quot;%d,&quot;, buf[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(buf);
<br>
&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Gather(&amp;rank, 1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL,  0, MPI_DATATYPE_NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>Run results:
<br>
-----------
<br>
$ mpicc gather.c
<br>
$ mpirun -n 5 a.out
<br>
-1,-1,2,-1,-1,
<br>
<p><p><p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1089.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_INPLACE problem"</a>
<li><strong>Previous message:</strong> <a href="1087.php">Ralph H Castain: "[OMPI devel] ORTE Tutorial Materials"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1089.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_INPLACE problem"</a>
<li><strong>Reply:</strong> <a href="1089.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_INPLACE problem"</a>
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
