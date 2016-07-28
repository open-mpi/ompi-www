<?
$subject_val = "Re: [OMPI devel] Reviewing MPI_Dims_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 09:20:59 2014" -->
<!-- isoreceived="20140211142059" -->
<!-- sent="Tue, 11 Feb 2014 15:20:52 +0100 (CET)" -->
<!-- isosent="20140211142052" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Reviewing MPI_Dims_create" -->
<!-- id="642234706.241331.1392128451973.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20140211111652.GA8183_at_neuromancer.informatik.uni-erlangen.de" -->
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
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 09:20:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14099.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14097.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14097.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14099.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14099.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Minor update as a little bug and an unused variable were left over in the patch.
<br>
I'll commit this + the parameter check change later.
<br>
<p>Anybody volunteering for review of a cmr for 1.7.5. :)
<br>
<p>Ah and some restults for MPI_Dims_create(1000000, 3, {})
<br>
<p>original: 8.110628 sec
<br>
optimized-primes: 0.048702 sec
<br>
optimized-factorization: 0.000013 sec
<br>
<p>Regards
<br>
Christoph
<br>
<p><pre>
--
Christoph Niethammer
High Performance Computing Center Stuttgart (HLRS)
Nobelstrasse 19
70569 Stuttgart
Tel: ++49(0)711-685-87203
email: niethammer_at_[hidden]
<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
----- Urspr&#195;&#188;ngliche Mail -----
Von: &quot;Andreas Sch&#195;&#164;fer&quot; &lt;gentryx_at_[hidden]&gt;
An: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
Gesendet: Dienstag, 11. Februar 2014 12:16:53
Betreff: Re: [OMPI devel] Reviewing MPI_Dims_create
Hi,
ah, that's clever indeed!
Best
-Andreas
On 12:02 Tue 11 Feb     , Christoph Niethammer wrote:
&gt; Hello,
&gt; 
&gt; After rethinking Jeff's comments about caching prime numbers I came to the conclusion that we can omit the prime numbers at all and go directly for the factorization. :D
&gt; We then only need at most   log_2(INT_MAX) * sizeof(int) = 32 * 4 byte = 128 byte   of memory for the factors.
&gt; 
&gt; Computational costs reduce as well as the factorization itself is done by a loop with at most \sqrt(num) / 2 iterations - which is the same as in the original prime number detection loop.
&gt; I think this is the cleanest way which reduces also source code size. ;)
&gt; 
&gt; Find attache patch against the trunk.
&gt; 
&gt; Best regards
&gt; Christoph
&gt; 
&gt; --
&gt; 
&gt; Christoph Niethammer
&gt; High Performance Computing Center Stuttgart (HLRS)
&gt; Nobelstrasse 19
&gt; 70569 Stuttgart
&gt; 
&gt; Tel: ++49(0)711-685-87203
&gt; email: niethammer_at_[hidden]
&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
&gt; 
&gt; 
&gt; 
&gt; ----- Urspr&#195;&#188;ngliche Mail -----
&gt; Von: &quot;Andreas Sch&#195;&#164;fer&quot; &lt;gentryx_at_[hidden]&gt;
&gt; An: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
&gt; Gesendet: Dienstag, 11. Februar 2014 06:24:56
&gt; Betreff: Re: [OMPI devel] Reviewing MPI_Dims_create
&gt; 
&gt; OK, so we were thinking the same thing :-) The optimization you
&gt; mention below is the same I've used in my updated patch.
&gt; 
&gt; 
&gt; On 02:29 Tue 11 Feb     , Christoph Niethammer wrote:
&gt; &gt; As mentioned in my former mail I did not touch the factorization
&gt; &gt; code.
&gt; &gt; But to figure out if a number n is *not* a prime number it is sufficient to check up to \sqrt(n).
&gt; &gt; Proof:
&gt; &gt; let n = p*q with q &gt; \sqrt{n}
&gt; &gt; --&gt; p &lt; \sqrt(n)
&gt; &gt; So we have already found factor p before reaching \sqrt(n) and by this n is no prime any more and no need for further checks. ;)
&gt; &gt; 
&gt; &gt; 
&gt; &gt; The mentioned factorization may indeed include one factor which is larger than \sqrt(n). :)
&gt; &gt; 
&gt; &gt; Proof that at least one prime factor can be larger than \sqrt(n) example:
&gt; &gt; 6 = 2*3
&gt; &gt; \sqrt(6) = 2.4494897427832... &lt; 3   Q.E.D.
&gt; &gt; 
&gt; &gt; 
&gt; &gt; Proof that no more than one factor can be larger than \sqrt(n):
&gt; &gt; let n = \prod_{i=0}^K p_i with p_i \in N  and K &gt; 2
&gt; &gt; and assume w.l.o.g.  p_0 &gt; \sqrt(n)  and  p_1 &gt; \sqrt(n)
&gt; &gt; --&gt; 1 &gt; \prod_{i=2}^K p_i
&gt; &gt; which is a contradiction as all p_i \in N.  Q.E.D.
&gt; &gt; 
&gt; &gt; 
&gt; &gt; So your idea is still applicable with not much effort and we only need prime factors up to sqrt(n) in the factorizer code for an additional optimization. :)
&gt; &gt; 
&gt; &gt; First search all K' factors p_i &lt; \sqrt(n). If then n \ne \prod_{i=0}^{K'} p_i we should be sure that p_{K'+1} = n / \prod_{i=0}^{K'} p_i is a prime. No complication with counts IMHO. I leave this without patch as it is already 2:30 in the morning. :P
&gt; &gt; 
&gt; &gt; Regards
&gt; &gt; Christoph
&gt; &gt; 
&gt; &gt; --
&gt; &gt; 
&gt; &gt; Christoph Niethammer
&gt; &gt; High Performance Computing Center Stuttgart (HLRS)
&gt; &gt; Nobelstrasse 19
&gt; &gt; 70569 Stuttgart
&gt; &gt; 
&gt; &gt; Tel: ++49(0)711-685-87203
&gt; &gt; email: niethammer_at_[hidden]
&gt; &gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
&gt; &gt; 
&gt; &gt; ----- Urspr&#195;&#188;ngliche Mail -----
&gt; &gt; Von: &quot;Andreas Sch&#195;&#164;fer&quot; &lt;gentryx_at_[hidden]&gt;
&gt; &gt; An: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
&gt; &gt; Gesendet: Montag, 10. Februar 2014 23:24:24
&gt; &gt; Betreff: Re: [OMPI devel] Reviewing MPI_Dims_create
&gt; &gt; 
&gt; &gt; Christoph-
&gt; &gt; 
&gt; &gt; your patch has the same problem as my original patch: indeed there may
&gt; &gt; be a prime factor p of n with p &gt; sqrt(n). What's important is that
&gt; &gt; there may only be at most one. I've submitted an updated patch (see my
&gt; &gt; previous mail) which catches this special case.
&gt; &gt; 
&gt; &gt; Best
&gt; &gt; -Andreas
&gt; &gt; 
&gt; &gt; 
&gt; &gt; On 19:30 Mon 10 Feb     , Christoph Niethammer wrote:
&gt; &gt; &gt; Hello,
&gt; &gt; &gt; 
&gt; &gt; &gt; I noticed some effort in improving the scalability of
&gt; &gt; &gt; MPI_Dims_create(int nnodes, int ndims, int dims[])
&gt; &gt; &gt; Unfortunately there were some issues with the first attempt (r30539 and r30540) which were reverted.
&gt; &gt; &gt; 
&gt; &gt; &gt; So I decided to give it a short review based on r30606
&gt; &gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606</a>
&gt; &gt; &gt; 
&gt; &gt; &gt; 
&gt; &gt; &gt; 1.) freeprocs is initialized to be nnodes and the subsequent divisions of freeprocs have all positive integers as divisor.
&gt; &gt; &gt; So IMHO it would make more sense to check if nnodes &gt; 0 in the MPI_PARAM_CHECK section at the begin instead of the following (see patch 0001):
&gt; &gt; &gt; 
&gt; &gt; &gt; 99	    if (freeprocs &lt; 1) {
&gt; &gt; &gt; 100	       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_DIMS,
&gt; &gt; &gt; 101	                                     FUNC_NAME);
&gt; &gt; &gt; 102	    }
&gt; &gt; &gt; 
&gt; &gt; &gt; 
&gt; &gt; &gt; 2.) I rewrote the algorithm stopping at sqrt(n) in getprimes(int num, int *nprimes, int **pprimes)
&gt; &gt; &gt; which makes mathematically more sens (as the largest prime factor of any number n cannot exceed \sqrt{n}) - and should produce the right result. ;)
&gt; &gt; &gt; (see patch 0002)
&gt; &gt; &gt; Here the improvements:
&gt; &gt; &gt; 
&gt; &gt; &gt; module load mpi/openmpi/trunk-gnu.4.7.3
&gt; &gt; &gt; $ ./mpi-dims-old 1000000
&gt; &gt; &gt; time used for MPI_Dims_create(1000000, 3, {}): 8.104007
&gt; &gt; &gt; module swap mpi/openmpi/trunk-gnu.4.7.3 mpi/openmpi/trunk-gnu.4.7.3-testing
&gt; &gt; &gt; $ ./mpi-dims-new 1000000
&gt; &gt; &gt; time used for MPI_Dims_create(1000000, 3, {}): 0.060400
&gt; &gt; &gt; 
&gt; &gt; &gt; 
&gt; &gt; &gt; 3.) Memory allocation for the list of prime numbers may be reduced up to a factor of ~6 for 1mio nodes using the result from Dusart 1999 [1]:
&gt; &gt; &gt; \pi(x)  &lt; x/ln(x)(1+1.2762/ln(x))  for x &gt; 1
&gt; &gt; &gt; Unfortunately this saves us only 1.6 MB per process for 1mio nodes as reported by tcmalloc/pprof on a test program - but it may sum up with fatter nodes. :P
&gt; &gt; &gt; 
&gt; &gt; &gt; $ pprof --base=$PWD/primes-old.0001.heap a.out primes-new.0002.heap
&gt; &gt; &gt; (pprof) top
&gt; &gt; &gt; Total: -1.6 MB
&gt; &gt; &gt;      0.3 -18.8% -18.8%      0.3 -18.8% getprimes2
&gt; &gt; &gt;      0.0  -0.0% -18.8%     -1.6 100.0% __libc_start_main
&gt; &gt; &gt;      0.0  -0.0% -18.8%     -1.6 100.0% main
&gt; &gt; &gt;     -1.9 118.8% 100.0%     -1.9 118.8% getprimes
&gt; &gt; &gt; 
&gt; &gt; &gt; Find attached patch for it in 0003.
&gt; &gt; &gt; 
&gt; &gt; &gt; 
&gt; &gt; &gt; If there are no issues I would like to commit this to trunk for further testing (+cmr for 1.7.5?) end of this week.
&gt; &gt; &gt; 
&gt; &gt; &gt; Best regards
&gt; &gt; &gt; Christoph
&gt; &gt; &gt; 
&gt; &gt; &gt; [1] <a href="http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html">http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html</a>
&gt; &gt; &gt; 
&gt; &gt; &gt; 
&gt; &gt; &gt; 
&gt; &gt; &gt; --
&gt; &gt; &gt; 
&gt; &gt; &gt; Christoph Niethammer
&gt; &gt; &gt; High Performance Computing Center Stuttgart (HLRS)
&gt; &gt; &gt; Nobelstrasse 19
&gt; &gt; &gt; 70569 Stuttgart
&gt; &gt; &gt; 
&gt; &gt; &gt; Tel: ++49(0)711-685-87203
&gt; &gt; &gt; email: niethammer_at_[hidden]
&gt; &gt; &gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
&gt; &gt; 
&gt; &gt; &gt; From e3292b90cac42fad80ed27a555419002ed61ab66 Mon Sep 17 00:00:00 2001
&gt; &gt; &gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
&gt; &gt; &gt; Date: Mon, 10 Feb 2014 16:44:03 +0100
&gt; &gt; &gt; Subject: [PATCH 1/3] Move parameter check into appropriate code section at the
&gt; &gt; &gt;  begin.
&gt; &gt; &gt; 
&gt; &gt; &gt; ---
&gt; &gt; &gt;  ompi/mpi/c/dims_create.c | 11 ++++++-----
&gt; &gt; &gt;  1 file changed, 6 insertions(+), 5 deletions(-)
&gt; &gt; &gt; 
&gt; &gt; &gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
&gt; &gt; &gt; index d2c3858..3d0792f 100644
&gt; &gt; &gt; --- a/ompi/mpi/c/dims_create.c
&gt; &gt; &gt; +++ b/ompi/mpi/c/dims_create.c
&gt; &gt; &gt; @@ -71,6 +71,11 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
&gt; &gt; &gt;              return OMPI_ERRHANDLER_INVOKE (MPI_COMM_WORLD, 
&gt; &gt; &gt;                                             MPI_ERR_DIMS, FUNC_NAME);
&gt; &gt; &gt;          }
&gt; &gt; &gt; +
&gt; &gt; &gt; +        if (1 &gt; nnodes) {
&gt; &gt; &gt; +            return OMPI_ERRHANDLER_INVOKE (MPI_COMM_WORLD,
&gt; &gt; &gt; +                                           MPI_ERR_DIMS, FUNC_NAME);
&gt; &gt; &gt; +        }
&gt; &gt; &gt;      }
&gt; &gt; &gt;  
&gt; &gt; &gt;      /* Get # of free-to-be-assigned processes and # of free dimensions */
&gt; &gt; &gt; @@ -95,11 +100,7 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
&gt; &gt; &gt;                                       FUNC_NAME);
&gt; &gt; &gt;      }
&gt; &gt; &gt;  
&gt; &gt; &gt; -    if (freeprocs &lt; 1) {
&gt; &gt; &gt; -       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_DIMS,
&gt; &gt; &gt; -                                     FUNC_NAME);
&gt; &gt; &gt; -    }
&gt; &gt; &gt; -    else if (freeprocs == 1) {
&gt; &gt; &gt; +    if (freeprocs == 1) {
&gt; &gt; &gt;          for (i = 0; i &lt; ndims; ++i, ++dims) {
&gt; &gt; &gt;              if (*dims == 0) {
&gt; &gt; &gt;                 *dims = 1;
&gt; &gt; &gt; -- 
&gt; &gt; &gt; 1.8.3.2
&gt; &gt; &gt; 
&gt; &gt; 
&gt; &gt; &gt; From bc862c47ef8d581a8f6735c51983d6c9eeb95dfd Mon Sep 17 00:00:00 2001
&gt; &gt; &gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
&gt; &gt; &gt; Date: Mon, 10 Feb 2014 18:50:51 +0100
&gt; &gt; &gt; Subject: [PATCH 2/3] Speeding up detection of prime numbers using the fact
&gt; &gt; &gt;  that the largest prime factor of any number n cannot exceed \sqrt{n}.
&gt; &gt; &gt; 
&gt; &gt; &gt; ---
&gt; &gt; &gt;  ompi/mpi/c/dims_create.c | 9 ++++++---
&gt; &gt; &gt;  1 file changed, 6 insertions(+), 3 deletions(-)
&gt; &gt; &gt; 
&gt; &gt; &gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
&gt; &gt; &gt; index 3d0792f..1c1c381 100644
&gt; &gt; &gt; --- a/ompi/mpi/c/dims_create.c
&gt; &gt; &gt; +++ b/ompi/mpi/c/dims_create.c
&gt; &gt; &gt; @@ -5,7 +5,7 @@
&gt; &gt; &gt;   * Copyright (c) 2004-2005 The University of Tennessee and The University
&gt; &gt; &gt;   *                         of Tennessee Research Foundation.  All rights
&gt; &gt; &gt;   *                         reserved.
&gt; &gt; &gt; - * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
&gt; &gt; &gt; + * Copyright (c) 2004-2014 High Performance Computing Center Stuttgart, 
&gt; &gt; &gt;   *                         University of Stuttgart.  All rights reserved.
&gt; &gt; &gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
&gt; &gt; &gt;   *                         All rights reserved.
&gt; &gt; &gt; @@ -20,6 +20,8 @@
&gt; &gt; &gt;  
&gt; &gt; &gt;  #include &quot;ompi_config.h&quot;
&gt; &gt; &gt;  
&gt; &gt; &gt; +#include &lt;math.h&gt;
&gt; &gt; &gt; +
&gt; &gt; &gt;  #include &quot;ompi/mpi/c/bindings.h&quot;
&gt; &gt; &gt;  #include &quot;ompi/runtime/params.h&quot;
&gt; &gt; &gt;  #include &quot;ompi/communicator/communicator.h&quot;
&gt; &gt; &gt; @@ -293,13 +295,14 @@ getprimes(int num, int *pnprime, int **pprimes) {
&gt; &gt; &gt;     primes[i++] = 2;
&gt; &gt; &gt;  
&gt; &gt; &gt;     for (n = 3; n &lt;= num; n += 2) {
&gt; &gt; &gt; -      for (j = 1; j &lt; i; ++j) {
&gt; &gt; &gt; +      double nsqrt = sqrt((double) n);
&gt; &gt; &gt; +      for(j = 0; (double) primes[j] &lt;= nsqrt; j++) {
&gt; &gt; &gt;           if ((n % primes[j]) == 0) {
&gt; &gt; &gt;               break;
&gt; &gt; &gt;            }
&gt; &gt; &gt;        }
&gt; &gt; &gt;  
&gt; &gt; &gt; -      if (j == i) {
&gt; &gt; &gt; +      if (primes[j] &gt; nsqrt) {
&gt; &gt; &gt;          if (i &gt;= size) {
&gt; &gt; &gt;             return MPI_ERR_DIMS;
&gt; &gt; &gt;           }
&gt; &gt; &gt; -- 
&gt; &gt; &gt; 1.8.3.2
&gt; &gt; &gt; 
&gt; &gt; 
&gt; &gt; &gt; From a012206cfbf7b8b22cef4cc5b811384e5e3ac32c Mon Sep 17 00:00:00 2001
&gt; &gt; &gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
&gt; &gt; &gt; Date: Mon, 10 Feb 2014 19:02:03 +0100
&gt; &gt; &gt; Subject: [PATCH 3/3] Reduce memory usage by a better approximation for the
&gt; &gt; &gt;  upper limit of the number of primes.
&gt; &gt; &gt; 
&gt; &gt; &gt; ---
&gt; &gt; &gt;  ompi/mpi/c/dims_create.c | 12 ++++++++++--
&gt; &gt; &gt;  1 file changed, 10 insertions(+), 2 deletions(-)
&gt; &gt; &gt; 
&gt; &gt; &gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
&gt; &gt; &gt; index 1c1c381..8dd3144 100644
&gt; &gt; &gt; --- a/ompi/mpi/c/dims_create.c
&gt; &gt; &gt; +++ b/ompi/mpi/c/dims_create.c
&gt; &gt; &gt; @@ -281,9 +281,17 @@ getprimes(int num, int *pnprime, int **pprimes) {
&gt; &gt; &gt;     int n;
&gt; &gt; &gt;     int size;
&gt; &gt; &gt;     int *primes;
&gt; &gt; &gt; +   double lognum;
&gt; &gt; &gt;  
&gt; &gt; &gt; -   /* Allocate the array of primes */
&gt; &gt; &gt; -   size = (num / 2) + 1;
&gt; &gt; &gt; +   /* Allocate the array of primes
&gt; &gt; &gt; +    * see Pierre Dusart, Math. Comp. 68 (1999), no. 225, 411???415.*/
&gt; &gt; &gt; +   lognum = log(num);
&gt; &gt; &gt; +   if(num &gt; 1) {
&gt; &gt; &gt; +       size = ceil(num/lognum * (1+1.2762/lognum));
&gt; &gt; &gt; +   }
&gt; &gt; &gt; +   else {
&gt; &gt; &gt; +       size = 1;
&gt; &gt; &gt; +   }
&gt; &gt; &gt;     primes = (int *) malloc((unsigned) size * sizeof(int));
&gt; &gt; &gt;     if (NULL == primes) {
&gt; &gt; &gt;         return MPI_ERR_NO_MEM;
&gt; &gt; &gt; -- 
&gt; &gt; &gt; 1.8.3.2
&gt; &gt; &gt; 
&gt; &gt; 
&gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; devel mailing list
&gt; &gt; &gt; devel_at_[hidden]
&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; &gt; 
&gt; &gt; 
&gt; &gt; -- 
&gt; &gt; ==========================================================
&gt; &gt; Andreas Sch&#195;&#164;fer
&gt; &gt; HPC and Grid Computing
&gt; &gt; Chair of Computer Science 3
&gt; &gt; Friedrich-Alexander-Universit&#195;&#164;t Erlangen-N&#195;&#188;rnberg, Germany
&gt; &gt; +49 9131 85-27910
&gt; &gt; PGP/GPG key via keyserver
&gt; &gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
&gt; &gt; ==========================================================
&gt; &gt; 
&gt; &gt; (\___/)
&gt; &gt; (+'.'+)
&gt; &gt; (&quot;)_(&quot;)
&gt; &gt; This is Bunny. Copy and paste Bunny into your
&gt; &gt; signature to help him gain world domination!
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; devel mailing list
&gt; &gt; devel_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; &gt; _______________________________________________
&gt; &gt; devel mailing list
&gt; &gt; devel_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; 
&gt; -- 
&gt; ==========================================================
&gt; Andreas Sch&#195;&#164;fer
&gt; HPC and Grid Computing
&gt; Chair of Computer Science 3
&gt; Friedrich-Alexander-Universit&#195;&#164;t Erlangen-N&#195;&#188;rnberg, Germany
&gt; +49 9131 85-27910
&gt; PGP/GPG key via keyserver
&gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
&gt; ==========================================================
&gt; 
&gt; (\___/)
&gt; (+'.'+)
&gt; (&quot;)_(&quot;)
&gt; This is Bunny. Copy and paste Bunny into your
&gt; signature to help him gain world domination!
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; From 19af07aac40d9e2b9c827ab043643b1e6e28fe0c Mon Sep 17 00:00:00 2001
&gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
&gt; Date: Tue, 11 Feb 2014 11:58:30 +0100
&gt; Subject: [PATCH] Omit usage of pre calculated prime numbers and factorize
&gt;  directly.
&gt; 
&gt; ---
&gt;  ompi/mpi/c/dims_create.c | 159 +++++++++++++++--------------------------------
&gt;  1 file changed, 50 insertions(+), 109 deletions(-)
&gt; 
&gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
&gt; index 3d0792f..02a3413 100644
&gt; --- a/ompi/mpi/c/dims_create.c
&gt; +++ b/ompi/mpi/c/dims_create.c
&gt; @@ -5,7 +5,7 @@
&gt;   * Copyright (c) 2004-2005 The University of Tennessee and The University
&gt;   *                         of Tennessee Research Foundation.  All rights
&gt;   *                         reserved.
&gt; - * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
&gt; + * Copyright (c) 2004-2014 High Performance Computing Center Stuttgart, 
&gt;   *                         University of Stuttgart.  All rights reserved.
&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
&gt;   *                         All rights reserved.
&gt; @@ -20,6 +20,8 @@
&gt;  
&gt;  #include &quot;ompi_config.h&quot;
&gt;  
&gt; +#include &lt;math.h&gt;
&gt; +
&gt;  #include &quot;ompi/mpi/c/bindings.h&quot;
&gt;  #include &quot;ompi/runtime/params.h&quot;
&gt;  #include &quot;ompi/communicator/communicator.h&quot;
&gt; @@ -36,9 +38,8 @@
&gt;  static const char FUNC_NAME[] = &quot;MPI_Dims_create&quot;;
&gt;  
&gt;  /* static functions */
&gt; -static int assignnodes(int ndim, int nfactor, int *pfacts, int *counts, int **pdims);
&gt; -static int getfactors(int num, int nprime, int *primes, int **pcounts);
&gt; -static int getprimes(int num, int *pnprime, int **pprimes);
&gt; +static int assignnodes(int ndim, int nfactor, int *pfacts,int **pdims);
&gt; +static int getfactors(int num, int *nfators, int **factors);
&gt;  
&gt;  
&gt;  /*
&gt; @@ -50,8 +51,7 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
&gt;      int i;
&gt;      int freeprocs;
&gt;      int freedims;
&gt; -    int nprimes;
&gt; -    int *primes;
&gt; +    int nfactors;
&gt;      int *factors;
&gt;      int *procs;
&gt;      int *p;
&gt; @@ -109,20 +109,14 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
&gt;          return MPI_SUCCESS;
&gt;      }
&gt;  
&gt; -    /* Compute the relevant prime numbers for factoring */
&gt; -    if (MPI_SUCCESS != (err = getprimes(freeprocs, &amp;nprimes, &amp;primes))) {
&gt; -       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, err,
&gt; -                                     FUNC_NAME);
&gt; -    }
&gt; -
&gt;      /* Factor the number of free processes */
&gt; -    if (MPI_SUCCESS != (err = getfactors(freeprocs, nprimes, primes, &amp;factors))) {
&gt; +    if (MPI_SUCCESS != (err = getfactors(freeprocs, &amp;nfactors, &amp;factors))) {
&gt;         return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, err,
&gt;                                       FUNC_NAME);
&gt;      }
&gt;  
&gt;      /* Assign free processes to free dimensions */
&gt; -    if (MPI_SUCCESS != (err = assignnodes(freedims, nprimes, primes, factors, &amp;procs))) {
&gt; +    if (MPI_SUCCESS != (err = assignnodes(freedims, nfactors, factors, &amp;procs))) {
&gt;         return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, err,
&gt;                                       FUNC_NAME);
&gt;      }
&gt; @@ -135,7 +129,6 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
&gt;          }
&gt;      }
&gt;  
&gt; -    free((char *) primes);
&gt;      free((char *) factors);
&gt;      free((char *) procs);
&gt;  
&gt; @@ -154,12 +147,11 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
&gt;   *  Accepts:    - # of dimensions
&gt;   *          - # of prime factors
&gt;   *          - array of prime factors
&gt; - *          - array of factor counts
&gt;   *          - ptr to array of dimensions (returned value)
&gt;   *  Returns:    - 0 or ERROR
&gt;   */
&gt;  static int
&gt; -assignnodes(int ndim, int nfactor, int *pfacts, int *counts, int **pdims)
&gt; +assignnodes(int ndim, int nfactor, int *pfacts, int **pdims)
&gt;  {
&gt;      int *bins;
&gt;      int i, j;
&gt; @@ -185,17 +177,15 @@ assignnodes(int ndim, int nfactor, int *pfacts, int *counts, int **pdims)
&gt;      
&gt;      /* Loop assigning factors from the highest to the lowest */
&gt;      for (j = nfactor - 1; j &gt;= 0; --j) {
&gt; -       f = pfacts[j];
&gt; -       for (n = counts[j]; n &gt; 0; --n) {
&gt; -            /* Assign a factor to the smallest bin */
&gt; -            pmin = bins;
&gt; -            for (i = 1, p = pmin + 1; i &lt; ndim; ++i, ++p) {
&gt; -                if (*p &lt; *pmin) {
&gt; -                    pmin = p;
&gt; -                }
&gt; +        f = pfacts[j];
&gt; +        /* Assign a factor to the smallest bin */
&gt; +        pmin = bins;
&gt; +        for (i = 1, p = pmin + 1; i &lt; ndim; ++i, ++p) {
&gt; +            if (*p &lt; *pmin) {
&gt; +                pmin = p;
&gt;              }
&gt; -            *pmin *= f;
&gt;          }
&gt; +        *pmin *= f;
&gt;       }
&gt;      
&gt;       /* Sort dimensions in decreasing order (O(n^2) for now) */
&gt; @@ -217,96 +207,47 @@ assignnodes(int ndim, int nfactor, int *pfacts, int *counts, int **pdims)
&gt;   *
&gt;   *  Function:   - factorize a number
&gt;   *  Accepts:    - number
&gt; - *          - # of primes
&gt; - *          - array of primes
&gt; - *          - ptr to array of counts (returned value)
&gt; - *  Returns:    - 0 or ERROR
&gt; + *          - # prime factors
&gt; + *          - array of prime factors
&gt; + *  Returns:    - MPI_SUCCESS or ERROR
&gt;   */
&gt;  static int
&gt; -getfactors(int num, int nprime, int *primes, int **pcounts)
&gt; -{
&gt; -    int *counts;
&gt; +getfactors(int num, int *nfactors, int **factors) {
&gt; +    int size;
&gt; +    int n;
&gt; +    int d;
&gt;      int i;
&gt; -    int *p;
&gt; -    int *c;
&gt; -    
&gt; -    if (0 &gt;= nprime) {
&gt; -        return MPI_ERR_INTERN;
&gt; -    }
&gt; +    double lognum;
&gt;  
&gt; -    /* Allocate the factor counts array */
&gt; -    counts = (int *) malloc((unsigned) nprime * sizeof(int));
&gt; -    if (NULL == counts) {
&gt; -       return MPI_ERR_NO_MEM;
&gt; +    if(num  &lt; 2) {
&gt; +        (*nfactors) = 0;
&gt; +        (*factors) = NULL;
&gt; +        return MPI_SUCCESS;
&gt;      }
&gt; -
&gt; -    *pcounts = counts;
&gt; -
&gt; -    /* Loop over the prime numbers */
&gt; -    i = nprime - 1;
&gt; -    p = primes + i;
&gt; -    c = counts + i;
&gt; -
&gt; -    for (; i &gt;= 0; --i, --p, --c) {
&gt; -        *c = 0;
&gt; -        while ((num % *p) == 0) {
&gt; -            ++(*c);
&gt; -            num /= *p;
&gt; +    /* Allocate the array of prime factors which cannot exceed log_2(num) entries */
&gt; +    n = num;
&gt; +    size = ceil(log(num) / log(2));
&gt; +    *factors = (int *) malloc((unsigned) size * sizeof(int));
&gt; +
&gt; +    i = 0;
&gt; +    /* determine all occurences of factor 2 */
&gt; +    while((num % 2) == 0) {
&gt; +        num /= 2;
&gt; +        (*factors)[i++] = 2;
&gt; +    }
&gt; +    /* determine all occurences of uneven prime numbers up to sqrt(num) */
&gt; +    d = 3;
&gt; +    int sqrtnum = ceil(sqrt(num));
&gt; +    for(d = 3; (num &gt; 1) &amp;&amp; (d &lt; sqrtnum); d += 2) {
&gt; +        while((num % d) == 0) {
&gt; +            num /= d;
&gt; +            (*factors)[i++] = d;
&gt;          }
&gt;      }
&gt; -
&gt; -    if (1 != num) {
&gt; -        return MPI_ERR_INTERN;
&gt; +    /* as we looped only up to sqrt(num) one factor &gt; sqrt(num) may be left over */
&gt; +    if(num != 1) {
&gt; +        (*factors)[i++] = num;
&gt;      }
&gt; -
&gt; +    (*nfactors) = i;
&gt;      return MPI_SUCCESS;
&gt;  }
&gt; -
&gt; -/*
&gt; - *  getprimes
&gt; - *
&gt; - *  Function:   - get primes smaller than number
&gt; - *          - array of primes dynamically allocated
&gt; - *  Accepts:    - number
&gt; - *          - ptr # of primes (returned value)
&gt; - *          - ptr array of primes (returned values)
&gt; - *  Returns:    - 0 or ERROR
&gt; - */
&gt; -static int
&gt; -getprimes(int num, int *pnprime, int **pprimes) {
&gt; -
&gt; -   int i, j;
&gt; -   int n;
&gt; -   int size;
&gt; -   int *primes;
&gt; -
&gt; -   /* Allocate the array of primes */
&gt; -   size = (num / 2) + 1;
&gt; -   primes = (int *) malloc((unsigned) size * sizeof(int));
&gt; -   if (NULL == primes) {
&gt; -       return MPI_ERR_NO_MEM;
&gt; -   }
&gt; -   *pprimes = primes;
&gt; -
&gt; -   /* Find the prime numbers */
&gt; -   i = 0;
&gt; -   primes[i++] = 2;
&gt; -
&gt; -   for (n = 3; n &lt;= num; n += 2) {
&gt; -      for (j = 1; j &lt; i; ++j) {
&gt; -         if ((n % primes[j]) == 0) {
&gt; -             break;
&gt; -          }
&gt; -      }
&gt; -
&gt; -      if (j == i) {
&gt; -        if (i &gt;= size) {
&gt; -           return MPI_ERR_DIMS;
&gt; -         }
&gt; -         primes[i++] = n;
&gt; -      }
&gt; -   }
&gt; -
&gt; -   *pnprime = i;
&gt; -   return MPI_SUCCESS;
&gt; -}
&gt; -- 
&gt; 1.8.3.2
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
-- 
==========================================================
Andreas Sch&#195;&#164;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#195;&#164;t Erlangen-N&#195;&#188;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your
signature to help him gain world domination!
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14098/0001-Omit-usage-of-pre-calculated-prime-numbers-and-facto.patch">0001-Omit-usage-of-pre-calculated-prime-numbers-and-facto.patch</a>
</ul>
<!-- attachment="0001-Omit-usage-of-pre-calculated-prime-numbers-and-facto.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14099.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14097.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14097.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14099.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14099.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
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
