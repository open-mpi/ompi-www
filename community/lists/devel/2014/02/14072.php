<?
$subject_val = "Re: [OMPI devel] Reviewing MPI_Dims_create";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 14:12:10 2014" -->
<!-- isoreceived="20140210191210" -->
<!-- sent="Mon, 10 Feb 2014 19:12:08 +0000" -->
<!-- isosent="20140210191208" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Reviewing MPI_Dims_create" -->
<!-- id="5FEF66DD-3C52-42A8-BA2F-49076FEDCA9C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1102071229.228408.1392057017758.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Reviewing MPI_Dims_create<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 14:12:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14073.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Previous message:</strong> <a href="14071.php">Christoph Niethammer: "[OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14071.php">Christoph Niethammer: "[OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14084.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14084.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14092.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nice!  Can you verify that it passes the ibm test?  I didn't look closely, and to be honest, I'm not sure why the previous improvement broke the IBM test because it hypothetically did what you mentioned (stopped at sqrt(freenodes)).
<br>
<p>I think patch 1 is a no-brainer.  I'm not sure about #2 because I'm not sure how it's different than the previous one, nor did I have time to investigate why the previous one broke the IBM test.  #3 seems like a good idea, too; I did't check the paper, but I assume it's some kind of proof about the upper limit on the number of primes in a given range.
<br>
<p>Two questions:
<br>
<p>1. Should we cache generated prime numbers?  (if so, it'll have to be done in a thread-safe way)
<br>
<p>2. Should we just generate prime numbers and hard-code them into a table that is compiled into the code?  We would only need primes up to the sqrt of 2billion (i.e., signed int), right?  I don't know how many that is -- if it's small enough, perhaps this is the easiest solution.
<br>
<p><p><p>On Feb 10, 2014, at 1:30 PM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed some effort in improving the scalability of
</span><br>
<span class="quotelev1">&gt; MPI_Dims_create(int nnodes, int ndims, int dims[])
</span><br>
<span class="quotelev1">&gt; Unfortunately there were some issues with the first attempt (r30539 and r30540) which were reverted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I decided to give it a short review based on r30606
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.) freeprocs is initialized to be nnodes and the subsequent divisions of freeprocs have all positive integers as divisor.
</span><br>
<span class="quotelev1">&gt; So IMHO it would make more sense to check if nnodes &gt; 0 in the MPI_PARAM_CHECK section at the begin instead of the following (see patch 0001):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 99	    if (freeprocs &lt; 1) {
</span><br>
<span class="quotelev1">&gt; 100	       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_DIMS,
</span><br>
<span class="quotelev1">&gt; 101	                                     FUNC_NAME);
</span><br>
<span class="quotelev1">&gt; 102	    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2.) I rewrote the algorithm stopping at sqrt(n) in getprimes(int num, int *nprimes, int **pprimes)
</span><br>
<span class="quotelev1">&gt; which makes mathematically more sens (as the largest prime factor of any number n cannot exceed \sqrt{n}) - and should produce the right result. ;)
</span><br>
<span class="quotelev1">&gt; (see patch 0002)
</span><br>
<span class="quotelev1">&gt; Here the improvements:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module load mpi/openmpi/trunk-gnu.4.7.3
</span><br>
<span class="quotelev1">&gt; $ ./mpi-dims-old 1000000
</span><br>
<span class="quotelev1">&gt; time used for MPI_Dims_create(1000000, 3, {}): 8.104007
</span><br>
<span class="quotelev1">&gt; module swap mpi/openmpi/trunk-gnu.4.7.3 mpi/openmpi/trunk-gnu.4.7.3-testing
</span><br>
<span class="quotelev1">&gt; $ ./mpi-dims-new 1000000
</span><br>
<span class="quotelev1">&gt; time used for MPI_Dims_create(1000000, 3, {}): 0.060400
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3.) Memory allocation for the list of prime numbers may be reduced up to a factor of ~6 for 1mio nodes using the result from Dusart 1999 [1]:
</span><br>
<span class="quotelev1">&gt; \pi(x)  &lt; x/ln(x)(1+1.2762/ln(x))  for x &gt; 1
</span><br>
<span class="quotelev1">&gt; Unfortunately this saves us only 1.6 MB per process for 1mio nodes as reported by tcmalloc/pprof on a test program - but it may sum up with fatter nodes. :P
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ pprof --base=$PWD/primes-old.0001.heap a.out primes-new.0002.heap
</span><br>
<span class="quotelev1">&gt; (pprof) top
</span><br>
<span class="quotelev1">&gt; Total: -1.6 MB
</span><br>
<span class="quotelev1">&gt;     0.3 -18.8% -18.8%      0.3 -18.8% getprimes2
</span><br>
<span class="quotelev1">&gt;     0.0  -0.0% -18.8%     -1.6 100.0% __libc_start_main
</span><br>
<span class="quotelev1">&gt;     0.0  -0.0% -18.8%     -1.6 100.0% main
</span><br>
<span class="quotelev1">&gt;    -1.9 118.8% 100.0%     -1.9 118.8% getprimes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Find attached patch for it in 0003.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there are no issues I would like to commit this to trunk for further testing (+cmr for 1.7.5?) end of this week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Christoph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html">http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev1">&gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/people/niethammer<0001-Move-parameter-check-into-appropriate-code-section-a.patch">http://www.hlrs.de/people/niethammer<0001-Move-parameter-check-into-appropriate-code-section-a.patch</a>&gt;&lt;0002-Speeding-up-detection-of-prime-numbers-using-the-fac.patch&gt;&lt;0003-Reduce-memory-usage-by-a-better-approximation-for-th.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14073.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Previous message:</strong> <a href="14071.php">Christoph Niethammer: "[OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14071.php">Christoph Niethammer: "[OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14084.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14084.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14092.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
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
