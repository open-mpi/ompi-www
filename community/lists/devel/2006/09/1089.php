<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 27 13:40:05 2006" -->
<!-- isoreceived="20060927174005" -->
<!-- sent="Wed, 27 Sep 2006 13:39:57 -0400" -->
<!-- isosent="20060927173957" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: MPI_INPLACE problem" -->
<!-- id="C1402FAD.28941%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40609270724m5eb21e5kfa4ab4fc3fa8c0fe_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-09-27 13:39:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1090.php">Ralph Castain: "[OMPI devel] ORTE Tutorial: Final slides"</a>
<li><strong>Previous message:</strong> <a href="1088.php">Lisandro Dalcin: "[OMPI devel] Fwd: MPI_INPLACE problem"</a>
<li><strong>In reply to:</strong> <a href="1088.php">Lisandro Dalcin: "[OMPI devel] Fwd: MPI_INPLACE problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see the problem now.
<br>
<p>I am working on a fix; many thanks for the report!  (Further updates will be
<br>
on <a href="http://svn.open-mpi.org/trac/ompi/ticket/430">http://svn.open-mpi.org/trac/ompi/ticket/430</a>)
<br>
<p><p>On 9/27/06 10:24 AM, &quot;Lisandro Dalcin&quot; &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Here an example of the problems I have with MPI_INPLACE in OMPI.
</span><br>
<span class="quotelev1">&gt; Hoping this can be useful. Perhaps the problem is not in OMPI sources,
</span><br>
<span class="quotelev1">&gt; but in my particular build. I've configured with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ head -n 7 config.log | tail -n 1
</span><br>
<span class="quotelev1">&gt;   $ ./configure --disable-dlopen --prefix /usr/local/openmpi/1.1.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First I present a very simple program that gives right results with
</span><br>
<span class="quotelev1">&gt; OMPI, next a small modification changing the sendcount argument, wich
</span><br>
<span class="quotelev1">&gt; gives now wrong results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using MPICH2, both versions give the same, right result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My environment:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ echo $PATH
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.1.1/bin:/usr/kerberos/bin:/usr/lib/ccache/bin:/usr/local/
</span><br>
<span class="quotelev1">&gt; bin:/bin:/usr/bin:/usr/X11R6/bin:.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.1.1/lib:/usr/local/openmpi/1.1.1/lib/openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First test program
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This stupid program gathers the values of comm.rank at a root process
</span><br>
<span class="quotelev1">&gt; with rank = com.size/2 and prints the gathered values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat gather.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main() {
</span><br>
<span class="quotelev1">&gt;   int size, rank, root;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   root = size/2;
</span><br>
<span class="quotelev1">&gt;   if (rank == root) {
</span><br>
<span class="quotelev1">&gt;     int i;
</span><br>
<span class="quotelev1">&gt;     int *buf = (int *) malloc(size * sizeof(int));
</span><br>
<span class="quotelev1">&gt;     for (i=0; i&lt;size; i++) buf[i] = -1;
</span><br>
<span class="quotelev1">&gt;     buf[rank] = rank;
</span><br>
<span class="quotelev1">&gt;     MPI_Gather(MPI_IN_PLACE, 1, MPI_DATATYPE_NULL,
</span><br>
<span class="quotelev1">&gt;                buf,          1, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                root, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     for (i=0; i&lt;size; i++) printf(&quot;%d,&quot;, buf[i]);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;     free(buf);
</span><br>
<span class="quotelev1">&gt;   } else {
</span><br>
<span class="quotelev1">&gt;     MPI_Gather(&amp;rank, 1, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                NULL,  0, MPI_DATATYPE_NULL,
</span><br>
<span class="quotelev1">&gt;                root, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Run results:
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt; $ mpicc gather.c
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 5 a.out
</span><br>
<span class="quotelev1">&gt; 0,1,2,3,4,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second test program
</span><br>
<span class="quotelev1">&gt; -------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I only modify the sendcount argument at root process, which is the one
</span><br>
<span class="quotelev1">&gt; passing sendbuf=MPI_INPLACE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat gather.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main() {
</span><br>
<span class="quotelev1">&gt;   int size, rank, root;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   root = size/2;
</span><br>
<span class="quotelev1">&gt;   if (rank == root) {
</span><br>
<span class="quotelev1">&gt;     int i;
</span><br>
<span class="quotelev1">&gt;     int *buf = (int *) malloc(size * sizeof(int));
</span><br>
<span class="quotelev1">&gt;     for (i=0; i&lt;size; i++) buf[i] = -1;
</span><br>
<span class="quotelev1">&gt;     buf[rank] = rank;
</span><br>
<span class="quotelev1">&gt;     MPI_Gather(MPI_IN_PLACE, 0, MPI_DATATYPE_NULL,
</span><br>
<span class="quotelev1">&gt;                buf,          1, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                root, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     for (i=0; i&lt;size; i++) printf(&quot;%d,&quot;, buf[i]);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;     free(buf);
</span><br>
<span class="quotelev1">&gt;   } else {
</span><br>
<span class="quotelev1">&gt;     MPI_Gather(&amp;rank, 1, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                NULL,  0, MPI_DATATYPE_NULL,
</span><br>
<span class="quotelev1">&gt;                root, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Run results:
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt; $ mpicc gather.c
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 5 a.out
</span><br>
<span class="quotelev1">&gt; -1,-1,2,-1,-1,
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1090.php">Ralph Castain: "[OMPI devel] ORTE Tutorial: Final slides"</a>
<li><strong>Previous message:</strong> <a href="1088.php">Lisandro Dalcin: "[OMPI devel] Fwd: MPI_INPLACE problem"</a>
<li><strong>In reply to:</strong> <a href="1088.php">Lisandro Dalcin: "[OMPI devel] Fwd: MPI_INPLACE problem"</a>
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
