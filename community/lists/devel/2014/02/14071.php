<?
$subject_val = "[OMPI devel] Reviewing MPI_Dims_create";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 13:30:22 2014" -->
<!-- isoreceived="20140210183022" -->
<!-- sent="Mon, 10 Feb 2014 19:30:17 +0100 (CET)" -->
<!-- isosent="20140210183017" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="[OMPI devel] Reviewing MPI_Dims_create" -->
<!-- id="1102071229.228408.1392057017758.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="921182017.213704.1392042342039.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI devel] Reviewing MPI_Dims_create<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 13:30:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14072.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14070.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14072.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14072.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14079.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I noticed some effort in improving the scalability of
<br>
MPI_Dims_create(int nnodes, int ndims, int dims[])
<br>
Unfortunately there were some issues with the first attempt (r30539 and r30540) which were reverted.
<br>
<p>So I decided to give it a short review based on r30606
<br>
<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606</a>
<br>
<p><p>1.) freeprocs is initialized to be nnodes and the subsequent divisions of freeprocs have all positive integers as divisor.
<br>
So IMHO it would make more sense to check if nnodes &gt; 0 in the MPI_PARAM_CHECK section at the begin instead of the following (see patch 0001):
<br>
<p>99	    if (freeprocs &lt; 1) {
<br>
100	       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_DIMS,
<br>
101	                                     FUNC_NAME);
<br>
102	    }
<br>
<p><p>2.) I rewrote the algorithm stopping at sqrt(n) in getprimes(int num, int *nprimes, int **pprimes)
<br>
which makes mathematically more sens (as the largest prime factor of any number n cannot exceed \sqrt{n}) - and should produce the right result. ;)
<br>
(see patch 0002)
<br>
Here the improvements:
<br>
<p>module load mpi/openmpi/trunk-gnu.4.7.3
<br>
$ ./mpi-dims-old 1000000
<br>
time used for MPI_Dims_create(1000000, 3, {}): 8.104007
<br>
module swap mpi/openmpi/trunk-gnu.4.7.3 mpi/openmpi/trunk-gnu.4.7.3-testing
<br>
$ ./mpi-dims-new 1000000
<br>
time used for MPI_Dims_create(1000000, 3, {}): 0.060400
<br>
<p><p>3.) Memory allocation for the list of prime numbers may be reduced up to a factor of ~6 for 1mio nodes using the result from Dusart 1999 [1]:
<br>
\pi(x)  &lt; x/ln(x)(1+1.2762/ln(x))  for x &gt; 1
<br>
Unfortunately this saves us only 1.6 MB per process for 1mio nodes as reported by tcmalloc/pprof on a test program - but it may sum up with fatter nodes. :P
<br>
<p>$ pprof --base=$PWD/primes-old.0001.heap a.out primes-new.0002.heap
<br>
(pprof) top
<br>
Total: -1.6 MB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.3 -18.8% -18.8%      0.3 -18.8% getprimes2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0  -0.0% -18.8%     -1.6 100.0% __libc_start_main
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0  -0.0% -18.8%     -1.6 100.0% main
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-1.9 118.8% 100.0%     -1.9 118.8% getprimes
<br>
<p>Find attached patch for it in 0003.
<br>
<p><p>If there are no issues I would like to commit this to trunk for further testing (+cmr for 1.7.5?) end of this week.
<br>
<p>Best regards
<br>
Christoph
<br>
<p>[1] <a href="http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html">http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html</a>
<br>
<p><p><p><pre>
--
Christoph Niethammer
High Performance Computing Center Stuttgart (HLRS)
Nobelstrasse 19
70569 Stuttgart
Tel: ++49(0)711-685-87203
email: niethammer_at_[hidden]
<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>



</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14071/0001-Move-parameter-check-into-appropriate-code-section-a.patch">0001-Move-parameter-check-into-appropriate-code-section-a.patch</a>
</ul>
<!-- attachment="0001-Move-parameter-check-into-appropriate-code-section-a.patch" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14071/0002-Speeding-up-detection-of-prime-numbers-using-the-fac.patch">0002-Speeding-up-detection-of-prime-numbers-using-the-fac.patch</a>
</ul>
<!-- attachment="0002-Speeding-up-detection-of-prime-numbers-using-the-fac.patch" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14071/0003-Reduce-memory-usage-by-a-better-approximation-for-th.patch">0003-Reduce-memory-usage-by-a-better-approximation-for-th.patch</a>
</ul>
<!-- attachment="0003-Reduce-memory-usage-by-a-better-approximation-for-th.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14072.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14070.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14072.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14072.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14079.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
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
