<?
$subject_val = "Re: [OMPI devel] Reviewing MPI_Dims_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 00:24:17 2014" -->
<!-- isoreceived="20140211052417" -->
<!-- sent="Tue, 11 Feb 2014 06:24:56 +0100" -->
<!-- isosent="20140211052456" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Reviewing MPI_Dims_create" -->
<!-- id="20140211052455.GC14867_at_neuromancer.fritz.box" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1892380018.230811.1392082187890.JavaMail.root_at_hlrs.de" -->
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
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 00:24:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14095.php">Paul Kapinos: "[OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Previous message:</strong> <a href="14093.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14088.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14096.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14096.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, so we were thinking the same thing :-) The optimization you
<br>
mention below is the same I've used in my updated patch.
<br>
<p><p>On 02:29 Tue 11 Feb     , Christoph Niethammer wrote:
<br>
<span class="quotelev1">&gt; As mentioned in my former mail I did not touch the factorization
</span><br>
<span class="quotelev1">&gt; code.
</span><br>
<span class="quotelev1">&gt; But to figure out if a number n is *not* a prime number it is sufficient to check up to \sqrt(n).
</span><br>
<span class="quotelev1">&gt; Proof:
</span><br>
<span class="quotelev1">&gt; let n = p*q with q &gt; \sqrt{n}
</span><br>
<span class="quotelev1">&gt; --&gt; p &lt; \sqrt(n)
</span><br>
<span class="quotelev1">&gt; So we have already found factor p before reaching \sqrt(n) and by this n is no prime any more and no need for further checks. ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mentioned factorization may indeed include one factor which is larger than \sqrt(n). :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Proof that at least one prime factor can be larger than \sqrt(n) example:
</span><br>
<span class="quotelev1">&gt; 6 = 2*3
</span><br>
<span class="quotelev1">&gt; \sqrt(6) = 2.4494897427832... &lt; 3   Q.E.D.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Proof that no more than one factor can be larger than \sqrt(n):
</span><br>
<span class="quotelev1">&gt; let n = \prod_{i=0}^K p_i with p_i \in N  and K &gt; 2
</span><br>
<span class="quotelev1">&gt; and assume w.l.o.g.  p_0 &gt; \sqrt(n)  and  p_1 &gt; \sqrt(n)
</span><br>
<span class="quotelev1">&gt; --&gt; 1 &gt; \prod_{i=2}^K p_i
</span><br>
<span class="quotelev1">&gt; which is a contradiction as all p_i \in N.  Q.E.D.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So your idea is still applicable with not much effort and we only need prime factors up to sqrt(n) in the factorizer code for an additional optimization. :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First search all K' factors p_i &lt; \sqrt(n). If then n \ne \prod_{i=0}^{K'} p_i we should be sure that p_{K'+1} = n / \prod_{i=0}^{K'} p_i is a prime. No complication with counts IMHO. I leave this without patch as it is already 2:30 in the morning. :P
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Christoph
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
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Urspr&#252;ngliche Mail -----
</span><br>
<span class="quotelev1">&gt; Von: &quot;Andreas Sch&#228;fer&quot; &lt;gentryx_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; An: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Gesendet: Montag, 10. Februar 2014 23:24:24
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI devel] Reviewing MPI_Dims_create
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christoph-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; your patch has the same problem as my original patch: indeed there may
</span><br>
<span class="quotelev1">&gt; be a prime factor p of n with p &gt; sqrt(n). What's important is that
</span><br>
<span class="quotelev1">&gt; there may only be at most one. I've submitted an updated patch (see my
</span><br>
<span class="quotelev1">&gt; previous mail) which catches this special case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 19:30 Mon 10 Feb     , Christoph Niethammer wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I noticed some effort in improving the scalability of
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Dims_create(int nnodes, int ndims, int dims[])
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately there were some issues with the first attempt (r30539 and r30540) which were reverted.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So I decided to give it a short review based on r30606
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1.) freeprocs is initialized to be nnodes and the subsequent divisions of freeprocs have all positive integers as divisor.
</span><br>
<span class="quotelev2">&gt; &gt; So IMHO it would make more sense to check if nnodes &gt; 0 in the MPI_PARAM_CHECK section at the begin instead of the following (see patch 0001):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 99	    if (freeprocs &lt; 1) {
</span><br>
<span class="quotelev2">&gt; &gt; 100	       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_DIMS,
</span><br>
<span class="quotelev2">&gt; &gt; 101	                                     FUNC_NAME);
</span><br>
<span class="quotelev2">&gt; &gt; 102	    }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2.) I rewrote the algorithm stopping at sqrt(n) in getprimes(int num, int *nprimes, int **pprimes)
</span><br>
<span class="quotelev2">&gt; &gt; which makes mathematically more sens (as the largest prime factor of any number n cannot exceed \sqrt{n}) - and should produce the right result. ;)
</span><br>
<span class="quotelev2">&gt; &gt; (see patch 0002)
</span><br>
<span class="quotelev2">&gt; &gt; Here the improvements:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; module load mpi/openmpi/trunk-gnu.4.7.3
</span><br>
<span class="quotelev2">&gt; &gt; $ ./mpi-dims-old 1000000
</span><br>
<span class="quotelev2">&gt; &gt; time used for MPI_Dims_create(1000000, 3, {}): 8.104007
</span><br>
<span class="quotelev2">&gt; &gt; module swap mpi/openmpi/trunk-gnu.4.7.3 mpi/openmpi/trunk-gnu.4.7.3-testing
</span><br>
<span class="quotelev2">&gt; &gt; $ ./mpi-dims-new 1000000
</span><br>
<span class="quotelev2">&gt; &gt; time used for MPI_Dims_create(1000000, 3, {}): 0.060400
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 3.) Memory allocation for the list of prime numbers may be reduced up to a factor of ~6 for 1mio nodes using the result from Dusart 1999 [1]:
</span><br>
<span class="quotelev2">&gt; &gt; \pi(x)  &lt; x/ln(x)(1+1.2762/ln(x))  for x &gt; 1
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately this saves us only 1.6 MB per process for 1mio nodes as reported by tcmalloc/pprof on a test program - but it may sum up with fatter nodes. :P
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ pprof --base=$PWD/primes-old.0001.heap a.out primes-new.0002.heap
</span><br>
<span class="quotelev2">&gt; &gt; (pprof) top
</span><br>
<span class="quotelev2">&gt; &gt; Total: -1.6 MB
</span><br>
<span class="quotelev2">&gt; &gt;      0.3 -18.8% -18.8%      0.3 -18.8% getprimes2
</span><br>
<span class="quotelev2">&gt; &gt;      0.0  -0.0% -18.8%     -1.6 100.0% __libc_start_main
</span><br>
<span class="quotelev2">&gt; &gt;      0.0  -0.0% -18.8%     -1.6 100.0% main
</span><br>
<span class="quotelev2">&gt; &gt;     -1.9 118.8% 100.0%     -1.9 118.8% getprimes
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Find attached patch for it in 0003.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If there are no issues I would like to commit this to trunk for further testing (+cmr for 1.7.5?) end of this week.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Best regards
</span><br>
<span class="quotelev2">&gt; &gt; Christoph
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [1] <a href="http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html">http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Christoph Niethammer
</span><br>
<span class="quotelev2">&gt; &gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt; &gt; Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt; &gt; 70569 Stuttgart
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev2">&gt; &gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From e3292b90cac42fad80ed27a555419002ed61ab66 Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev2">&gt; &gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 10 Feb 2014 16:44:03 +0100
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [PATCH 1/3] Move parameter check into appropriate code section at the
</span><br>
<span class="quotelev2">&gt; &gt;  begin.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt;  ompi/mpi/c/dims_create.c | 11 ++++++-----
</span><br>
<span class="quotelev2">&gt; &gt;  1 file changed, 6 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev2">&gt; &gt; index d2c3858..3d0792f 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -71,6 +71,11 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
</span><br>
<span class="quotelev2">&gt; &gt;              return OMPI_ERRHANDLER_INVOKE (MPI_COMM_WORLD, 
</span><br>
<span class="quotelev2">&gt; &gt;                                             MPI_ERR_DIMS, FUNC_NAME);
</span><br>
<span class="quotelev2">&gt; &gt;          }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        if (1 &gt; nnodes) {
</span><br>
<span class="quotelev2">&gt; &gt; +            return OMPI_ERRHANDLER_INVOKE (MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt; &gt; +                                           MPI_ERR_DIMS, FUNC_NAME);
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;      /* Get # of free-to-be-assigned processes and # of free dimensions */
</span><br>
<span class="quotelev2">&gt; &gt; @@ -95,11 +100,7 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
</span><br>
<span class="quotelev2">&gt; &gt;                                       FUNC_NAME);
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; -    if (freeprocs &lt; 1) {
</span><br>
<span class="quotelev2">&gt; &gt; -       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_DIMS,
</span><br>
<span class="quotelev2">&gt; &gt; -                                     FUNC_NAME);
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -    else if (freeprocs == 1) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (freeprocs == 1) {
</span><br>
<span class="quotelev2">&gt; &gt;          for (i = 0; i &lt; ndims; ++i, ++dims) {
</span><br>
<span class="quotelev2">&gt; &gt;              if (*dims == 0) {
</span><br>
<span class="quotelev2">&gt; &gt;                 *dims = 1;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; 1.8.3.2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From bc862c47ef8d581a8f6735c51983d6c9eeb95dfd Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev2">&gt; &gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 10 Feb 2014 18:50:51 +0100
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [PATCH 2/3] Speeding up detection of prime numbers using the fact
</span><br>
<span class="quotelev2">&gt; &gt;  that the largest prime factor of any number n cannot exceed \sqrt{n}.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt;  ompi/mpi/c/dims_create.c | 9 ++++++---
</span><br>
<span class="quotelev2">&gt; &gt;  1 file changed, 6 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev2">&gt; &gt; index 3d0792f..1c1c381 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5,7 +5,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;   * Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev2">&gt; &gt;   *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev2">&gt; &gt;   *                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; - * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2014 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev2">&gt; &gt;   *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt; &gt;   *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; @@ -20,6 +20,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;  #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;math.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;  #include &quot;ompi/mpi/c/bindings.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  #include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -293,13 +295,14 @@ getprimes(int num, int *pnprime, int **pprimes) {
</span><br>
<span class="quotelev2">&gt; &gt;     primes[i++] = 2;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;     for (n = 3; n &lt;= num; n += 2) {
</span><br>
<span class="quotelev2">&gt; &gt; -      for (j = 1; j &lt; i; ++j) {
</span><br>
<span class="quotelev2">&gt; &gt; +      double nsqrt = sqrt((double) n);
</span><br>
<span class="quotelev2">&gt; &gt; +      for(j = 0; (double) primes[j] &lt;= nsqrt; j++) {
</span><br>
<span class="quotelev2">&gt; &gt;           if ((n % primes[j]) == 0) {
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;            }
</span><br>
<span class="quotelev2">&gt; &gt;        }
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; -      if (j == i) {
</span><br>
<span class="quotelev2">&gt; &gt; +      if (primes[j] &gt; nsqrt) {
</span><br>
<span class="quotelev2">&gt; &gt;          if (i &gt;= size) {
</span><br>
<span class="quotelev2">&gt; &gt;             return MPI_ERR_DIMS;
</span><br>
<span class="quotelev2">&gt; &gt;           }
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; 1.8.3.2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From a012206cfbf7b8b22cef4cc5b811384e5e3ac32c Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev2">&gt; &gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 10 Feb 2014 19:02:03 +0100
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [PATCH 3/3] Reduce memory usage by a better approximation for the
</span><br>
<span class="quotelev2">&gt; &gt;  upper limit of the number of primes.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt;  ompi/mpi/c/dims_create.c | 12 ++++++++++--
</span><br>
<span class="quotelev2">&gt; &gt;  1 file changed, 10 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev2">&gt; &gt; index 1c1c381..8dd3144 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -281,9 +281,17 @@ getprimes(int num, int *pnprime, int **pprimes) {
</span><br>
<span class="quotelev2">&gt; &gt;     int n;
</span><br>
<span class="quotelev2">&gt; &gt;     int size;
</span><br>
<span class="quotelev2">&gt; &gt;     int *primes;
</span><br>
<span class="quotelev2">&gt; &gt; +   double lognum;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; -   /* Allocate the array of primes */
</span><br>
<span class="quotelev2">&gt; &gt; -   size = (num / 2) + 1;
</span><br>
<span class="quotelev2">&gt; &gt; +   /* Allocate the array of primes
</span><br>
<span class="quotelev2">&gt; &gt; +    * see Pierre Dusart, Math. Comp. 68 (1999), no. 225, 411???415.*/
</span><br>
<span class="quotelev2">&gt; &gt; +   lognum = log(num);
</span><br>
<span class="quotelev2">&gt; &gt; +   if(num &gt; 1) {
</span><br>
<span class="quotelev2">&gt; &gt; +       size = ceil(num/lognum * (1+1.2762/lognum));
</span><br>
<span class="quotelev2">&gt; &gt; +   }
</span><br>
<span class="quotelev2">&gt; &gt; +   else {
</span><br>
<span class="quotelev2">&gt; &gt; +       size = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +   }
</span><br>
<span class="quotelev2">&gt; &gt;     primes = (int *) malloc((unsigned) size * sizeof(int));
</span><br>
<span class="quotelev2">&gt; &gt;     if (NULL == primes) {
</span><br>
<span class="quotelev2">&gt; &gt;         return MPI_ERR_NO_MEM;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; 1.8.3.2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ==========================================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt; HPC and Grid Computing
</span><br>
<span class="quotelev1">&gt; Chair of Computer Science 3
</span><br>
<span class="quotelev1">&gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
</span><br>
<span class="quotelev1">&gt; +49 9131 85-27910
</span><br>
<span class="quotelev1">&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
</span><br>
<span class="quotelev1">&gt; ==========================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (\___/)
</span><br>
<span class="quotelev1">&gt; (+'.'+)
</span><br>
<span class="quotelev1">&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev1">&gt; signature to help him gain world domination!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14094/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14095.php">Paul Kapinos: "[OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Previous message:</strong> <a href="14093.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14088.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14096.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14096.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
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
