<?
$subject_val = "[OMPI users] mpirun error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 18:02:08 2014" -->
<!-- isoreceived="20141104230208" -->
<!-- sent="Tue, 04 Nov 2014 17:56:35 -0500" -->
<!-- isosent="20141104225635" -->
<!-- name="jfsanchez" -->
<!-- email="jfsanchez_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun error" -->
<!-- id="4582413.HAr0cQaKh5_at_jfsanchez-inspiron-1525" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] mpirun error<br>
<strong>From:</strong> jfsanchez (<em>jfsanchez_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 17:56:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25674.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun error"</a>
<li><strong>Previous message:</strong> <a href="25672.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25674.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun error"</a>
<li><strong>Reply:</strong> <a href="25674.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, I'm very new using OpenMPI, so I was testing it and wrote this program:
<br>
//main.c
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char hostname[256];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gethostname(hostname,255);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello world!  I am process number: %d on host %s\n&quot;, rank, 
<br>
hostname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
} 
<br>
<p>and compiled using:
<br>
mpicc -o test main.c
<br>
but, when a run:
<br>
mpirun -np 4 test
<br>
it give me this error:
<br>
&quot;mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.&quot;
<br>
<p>I'm using Ubuntu 14.04 and OpenMPI was installed from its repository.
<br>
<p>Any suggestion.
<br>
<p><p><p>III Escuela Internacional de Invierno en la UCI del 17 al 28 de febrero del 2014. Ver www.uci.cu
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25674.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun error"</a>
<li><strong>Previous message:</strong> <a href="25672.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25674.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun error"</a>
<li><strong>Reply:</strong> <a href="25674.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun error"</a>
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
