<?
$subject_val = "[OMPI users] [Question] Hybrid implementation with OpenMPI and OpenMP";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 01:46:40 2014" -->
<!-- isoreceived="20141006054640" -->
<!-- sent="Mon, 6 Oct 2014 00:46:39 -0500" -->
<!-- isosent="20141006054639" -->
<!-- name="Obed Mu&#195;&#177;oz" -->
<!-- email="obed.n.munoz_at_[hidden]" -->
<!-- subject="[OMPI users] [Question] Hybrid implementation with OpenMPI and OpenMP" -->
<!-- id="CAD-gT+ms33EGf8qJkjadSyW0rykZdgjisLL1bHP5NGTPJ3C8=A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] [Question] Hybrid implementation with OpenMPI and OpenMP<br>
<strong>From:</strong> Obed Mu&#195;&#177;oz (<em>obed.n.munoz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-06 01:46:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25466.php">Alain Miniussi: "[OMPI users] Problem with MPI_topo_test error message"</a>
<li><strong>Previous message:</strong> <a href="25464.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm starting with OpenMPI and actually I'm trying to do a simple example of
<br>
combining OpenMP and OpenMPI The thing is that when I trying to run with
<br>
&quot;mpirun&quot; it's getting hanged.
<br>
<p>I send the number of processors parameter and also I set the OMP_THREADS_NUM
<br>
<p>Above is my code:
<br>
<p>#include &quot;omp.h&quot;
<br>
#include &quot;mpi.h&quot; /* Include MPI header file */
<br>
<p>int main(int argc, char **argv){
<br>
<p>&nbsp;&nbsp;int rnk, sz, n, I, info, i, chunk;
<br>
<p>&nbsp;&nbsp;double *x, *y, *buff;
<br>
<p>&nbsp;&nbsp;n = atoi(argv[1]); /* Get input size */
<br>
<p>&nbsp;&nbsp;/* Initialize threaded MPI environment */
<br>
&nbsp;&nbsp;MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_FUNNELED, &amp;info);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;sz); /* Find out how many MPI procs */
<br>
<p>&nbsp;&nbsp;chunk = n / sz; /* Assume sz divides n exactly */
<br>
<p>&nbsp;&nbsp;MPI_Scatter(buff,chunk,MPI_DOUBLE,x,chunk,MPI_DOUBLE,0,MPI_COMM_WORLD);
<br>
<p>MPI_Scatter(&amp;buff[n],chunk,MPI_DOUBLE,y,chunk,MPI_DOUBLE,0,MPI_COMM_WORLD);
<br>
<p>#pragma omp parallel for private(i,chunk) shared(x, y)
<br>
&nbsp;&nbsp;for (i=0; i&lt;chunk; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x[i] = x[i] + y[i];
<br>
<p>&nbsp;&nbsp;MPI_Gather(x,chunk,MPI_DOUBLE,buff,chunk,MPI_DOUBLE,0,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>Thanks, I really appreciate your help.
<br>
<pre>
-- 
*Obed Nehemias Mu&#195;&#177;oz Reynoso*
*B.Sc. in Computer Sciences*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25465/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25466.php">Alain Miniussi: "[OMPI users] Problem with MPI_topo_test error message"</a>
<li><strong>Previous message:</strong> <a href="25464.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
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
