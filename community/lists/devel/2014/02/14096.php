<?
$subject_val = "Re: [OMPI devel] Reviewing MPI_Dims_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 06:02:48 2014" -->
<!-- isoreceived="20140211110248" -->
<!-- sent="Tue, 11 Feb 2014 12:02:42 +0100 (CET)" -->
<!-- isosent="20140211110242" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Reviewing MPI_Dims_create" -->
<!-- id="1767929865.237783.1392116562038.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20140211052455.GC14867_at_neuromancer.fritz.box" -->
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
<strong>Date:</strong> 2014-02-11 06:02:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14097.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14095.php">Paul Kapinos: "[OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>In reply to:</strong> <a href="14094.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14097.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14097.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>After rethinking Jeff's comments about caching prime numbers I came to the conclusion that we can omit the prime numbers at all and go directly for the factorization. :D
<br>
We then only need at most   log_2(INT_MAX) * sizeof(int) = 32 * 4 byte = 128 byte   of memory for the factors.
<br>
<p>Computational costs reduce as well as the factorization itself is done by a loop with at most \sqrt(num) / 2 iterations - which is the same as in the original prime number detection loop.
<br>
I think this is the cleanest way which reduces also source code size. ;)
<br>
<p>Find attache patch against the trunk.
<br>
<p>Best regards
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
Gesendet: Dienstag, 11. Februar 2014 06:24:56
Betreff: Re: [OMPI devel] Reviewing MPI_Dims_create
OK, so we were thinking the same thing :-) The optimization you
mention below is the same I've used in my updated patch.
On 02:29 Tue 11 Feb     , Christoph Niethammer wrote:
&gt; As mentioned in my former mail I did not touch the factorization
&gt; code.
&gt; But to figure out if a number n is *not* a prime number it is sufficient to check up to \sqrt(n).
&gt; Proof:
&gt; let n = p*q with q &gt; \sqrt{n}
&gt; --&gt; p &lt; \sqrt(n)
&gt; So we have already found factor p before reaching \sqrt(n) and by this n is no prime any more and no need for further checks. ;)
&gt; 
&gt; 
&gt; The mentioned factorization may indeed include one factor which is larger than \sqrt(n). :)
&gt; 
&gt; Proof that at least one prime factor can be larger than \sqrt(n) example:
&gt; 6 = 2*3
&gt; \sqrt(6) = 2.4494897427832... &lt; 3   Q.E.D.
&gt; 
&gt; 
&gt; Proof that no more than one factor can be larger than \sqrt(n):
&gt; let n = \prod_{i=0}^K p_i with p_i \in N  and K &gt; 2
&gt; and assume w.l.o.g.  p_0 &gt; \sqrt(n)  and  p_1 &gt; \sqrt(n)
&gt; --&gt; 1 &gt; \prod_{i=2}^K p_i
&gt; which is a contradiction as all p_i \in N.  Q.E.D.
&gt; 
&gt; 
&gt; So your idea is still applicable with not much effort and we only need prime factors up to sqrt(n) in the factorizer code for an additional optimization. :)
&gt; 
&gt; First search all K' factors p_i &lt; \sqrt(n). If then n \ne \prod_{i=0}^{K'} p_i we should be sure that p_{K'+1} = n / \prod_{i=0}^{K'} p_i is a prime. No complication with counts IMHO. I leave this without patch as it is already 2:30 in the morning. :P
&gt; 
&gt; Regards
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
&gt; ----- Urspr&#195;&#188;ngliche Mail -----
&gt; Von: &quot;Andreas Sch&#195;&#164;fer&quot; &lt;gentryx_at_[hidden]&gt;
&gt; An: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
&gt; Gesendet: Montag, 10. Februar 2014 23:24:24
&gt; Betreff: Re: [OMPI devel] Reviewing MPI_Dims_create
&gt; 
&gt; Christoph-
&gt; 
&gt; your patch has the same problem as my original patch: indeed there may
&gt; be a prime factor p of n with p &gt; sqrt(n). What's important is that
&gt; there may only be at most one. I've submitted an updated patch (see my
&gt; previous mail) which catches this special case.
&gt; 
&gt; Best
&gt; -Andreas
&gt; 
&gt; 
&gt; On 19:30 Mon 10 Feb     , Christoph Niethammer wrote:
&gt; &gt; Hello,
&gt; &gt; 
&gt; &gt; I noticed some effort in improving the scalability of
&gt; &gt; MPI_Dims_create(int nnodes, int ndims, int dims[])
&gt; &gt; Unfortunately there were some issues with the first attempt (r30539 and r30540) which were reverted.
&gt; &gt; 
&gt; &gt; So I decided to give it a short review based on r30606
&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606</a>
&gt; &gt; 
&gt; &gt; 
&gt; &gt; 1.) freeprocs is initialized to be nnodes and the subsequent divisions of freeprocs have all positive integers as divisor.
&gt; &gt; So IMHO it would make more sense to check if nnodes &gt; 0 in the MPI_PARAM_CHECK section at the begin instead of the following (see patch 0001):
&gt; &gt; 
&gt; &gt; 99	    if (freeprocs &lt; 1) {
&gt; &gt; 100	       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_DIMS,
&gt; &gt; 101	                                     FUNC_NAME);
&gt; &gt; 102	    }
&gt; &gt; 
&gt; &gt; 
&gt; &gt; 2.) I rewrote the algorithm stopping at sqrt(n) in getprimes(int num, int *nprimes, int **pprimes)
&gt; &gt; which makes mathematically more sens (as the largest prime factor of any number n cannot exceed \sqrt{n}) - and should produce the right result. ;)
&gt; &gt; (see patch 0002)
&gt; &gt; Here the improvements:
&gt; &gt; 
&gt; &gt; module load mpi/openmpi/trunk-gnu.4.7.3
&gt; &gt; $ ./mpi-dims-old 1000000
&gt; &gt; time used for MPI_Dims_create(1000000, 3, {}): 8.104007
&gt; &gt; module swap mpi/openmpi/trunk-gnu.4.7.3 mpi/openmpi/trunk-gnu.4.7.3-testing
&gt; &gt; $ ./mpi-dims-new 1000000
&gt; &gt; time used for MPI_Dims_create(1000000, 3, {}): 0.060400
&gt; &gt; 
&gt; &gt; 
&gt; &gt; 3.) Memory allocation for the list of prime numbers may be reduced up to a factor of ~6 for 1mio nodes using the result from Dusart 1999 [1]:
&gt; &gt; \pi(x)  &lt; x/ln(x)(1+1.2762/ln(x))  for x &gt; 1
&gt; &gt; Unfortunately this saves us only 1.6 MB per process for 1mio nodes as reported by tcmalloc/pprof on a test program - but it may sum up with fatter nodes. :P
&gt; &gt; 
&gt; &gt; $ pprof --base=$PWD/primes-old.0001.heap a.out primes-new.0002.heap
&gt; &gt; (pprof) top
&gt; &gt; Total: -1.6 MB
&gt; &gt;      0.3 -18.8% -18.8%      0.3 -18.8% getprimes2
&gt; &gt;      0.0  -0.0% -18.8%     -1.6 100.0% __libc_start_main
&gt; &gt;      0.0  -0.0% -18.8%     -1.6 100.0% main
&gt; &gt;     -1.9 118.8% 100.0%     -1.9 118.8% getprimes
&gt; &gt; 
&gt; &gt; Find attached patch for it in 0003.
&gt; &gt; 
&gt; &gt; 
&gt; &gt; If there are no issues I would like to commit this to trunk for further testing (+cmr for 1.7.5?) end of this week.
&gt; &gt; 
&gt; &gt; Best regards
&gt; &gt; Christoph
&gt; &gt; 
&gt; &gt; [1] <a href="http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html">http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html</a>
&gt; &gt; 
&gt; &gt; 
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
&gt; 
&gt; &gt; From e3292b90cac42fad80ed27a555419002ed61ab66 Mon Sep 17 00:00:00 2001
&gt; &gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
&gt; &gt; Date: Mon, 10 Feb 2014 16:44:03 +0100
&gt; &gt; Subject: [PATCH 1/3] Move parameter check into appropriate code section at the
&gt; &gt;  begin.
&gt; &gt; 
&gt; &gt; ---
&gt; &gt;  ompi/mpi/c/dims_create.c | 11 ++++++-----
&gt; &gt;  1 file changed, 6 insertions(+), 5 deletions(-)
&gt; &gt; 
&gt; &gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
&gt; &gt; index d2c3858..3d0792f 100644
&gt; &gt; --- a/ompi/mpi/c/dims_create.c
&gt; &gt; +++ b/ompi/mpi/c/dims_create.c
&gt; &gt; @@ -71,6 +71,11 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
&gt; &gt;              return OMPI_ERRHANDLER_INVOKE (MPI_COMM_WORLD, 
&gt; &gt;                                             MPI_ERR_DIMS, FUNC_NAME);
&gt; &gt;          }
&gt; &gt; +
&gt; &gt; +        if (1 &gt; nnodes) {
&gt; &gt; +            return OMPI_ERRHANDLER_INVOKE (MPI_COMM_WORLD,
&gt; &gt; +                                           MPI_ERR_DIMS, FUNC_NAME);
&gt; &gt; +        }
&gt; &gt;      }
&gt; &gt;  
&gt; &gt;      /* Get # of free-to-be-assigned processes and # of free dimensions */
&gt; &gt; @@ -95,11 +100,7 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
&gt; &gt;                                       FUNC_NAME);
&gt; &gt;      }
&gt; &gt;  
&gt; &gt; -    if (freeprocs &lt; 1) {
&gt; &gt; -       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_DIMS,
&gt; &gt; -                                     FUNC_NAME);
&gt; &gt; -    }
&gt; &gt; -    else if (freeprocs == 1) {
&gt; &gt; +    if (freeprocs == 1) {
&gt; &gt;          for (i = 0; i &lt; ndims; ++i, ++dims) {
&gt; &gt;              if (*dims == 0) {
&gt; &gt;                 *dims = 1;
&gt; &gt; -- 
&gt; &gt; 1.8.3.2
&gt; &gt; 
&gt; 
&gt; &gt; From bc862c47ef8d581a8f6735c51983d6c9eeb95dfd Mon Sep 17 00:00:00 2001
&gt; &gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
&gt; &gt; Date: Mon, 10 Feb 2014 18:50:51 +0100
&gt; &gt; Subject: [PATCH 2/3] Speeding up detection of prime numbers using the fact
&gt; &gt;  that the largest prime factor of any number n cannot exceed \sqrt{n}.
&gt; &gt; 
&gt; &gt; ---
&gt; &gt;  ompi/mpi/c/dims_create.c | 9 ++++++---
&gt; &gt;  1 file changed, 6 insertions(+), 3 deletions(-)
&gt; &gt; 
&gt; &gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
&gt; &gt; index 3d0792f..1c1c381 100644
&gt; &gt; --- a/ompi/mpi/c/dims_create.c
&gt; &gt; +++ b/ompi/mpi/c/dims_create.c
&gt; &gt; @@ -5,7 +5,7 @@
&gt; &gt;   * Copyright (c) 2004-2005 The University of Tennessee and The University
&gt; &gt;   *                         of Tennessee Research Foundation.  All rights
&gt; &gt;   *                         reserved.
&gt; &gt; - * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
&gt; &gt; + * Copyright (c) 2004-2014 High Performance Computing Center Stuttgart, 
&gt; &gt;   *                         University of Stuttgart.  All rights reserved.
&gt; &gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
&gt; &gt;   *                         All rights reserved.
&gt; &gt; @@ -20,6 +20,8 @@
&gt; &gt;  
&gt; &gt;  #include &quot;ompi_config.h&quot;
&gt; &gt;  
&gt; &gt; +#include &lt;math.h&gt;
&gt; &gt; +
&gt; &gt;  #include &quot;ompi/mpi/c/bindings.h&quot;
&gt; &gt;  #include &quot;ompi/runtime/params.h&quot;
&gt; &gt;  #include &quot;ompi/communicator/communicator.h&quot;
&gt; &gt; @@ -293,13 +295,14 @@ getprimes(int num, int *pnprime, int **pprimes) {
&gt; &gt;     primes[i++] = 2;
&gt; &gt;  
&gt; &gt;     for (n = 3; n &lt;= num; n += 2) {
&gt; &gt; -      for (j = 1; j &lt; i; ++j) {
&gt; &gt; +      double nsqrt = sqrt((double) n);
&gt; &gt; +      for(j = 0; (double) primes[j] &lt;= nsqrt; j++) {
&gt; &gt;           if ((n % primes[j]) == 0) {
&gt; &gt;               break;
&gt; &gt;            }
&gt; &gt;        }
&gt; &gt;  
&gt; &gt; -      if (j == i) {
&gt; &gt; +      if (primes[j] &gt; nsqrt) {
&gt; &gt;          if (i &gt;= size) {
&gt; &gt;             return MPI_ERR_DIMS;
&gt; &gt;           }
&gt; &gt; -- 
&gt; &gt; 1.8.3.2
&gt; &gt; 
&gt; 
&gt; &gt; From a012206cfbf7b8b22cef4cc5b811384e5e3ac32c Mon Sep 17 00:00:00 2001
&gt; &gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
&gt; &gt; Date: Mon, 10 Feb 2014 19:02:03 +0100
&gt; &gt; Subject: [PATCH 3/3] Reduce memory usage by a better approximation for the
&gt; &gt;  upper limit of the number of primes.
&gt; &gt; 
&gt; &gt; ---
&gt; &gt;  ompi/mpi/c/dims_create.c | 12 ++++++++++--
&gt; &gt;  1 file changed, 10 insertions(+), 2 deletions(-)
&gt; &gt; 
&gt; &gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
&gt; &gt; index 1c1c381..8dd3144 100644
&gt; &gt; --- a/ompi/mpi/c/dims_create.c
&gt; &gt; +++ b/ompi/mpi/c/dims_create.c
&gt; &gt; @@ -281,9 +281,17 @@ getprimes(int num, int *pnprime, int **pprimes) {
&gt; &gt;     int n;
&gt; &gt;     int size;
&gt; &gt;     int *primes;
&gt; &gt; +   double lognum;
&gt; &gt;  
&gt; &gt; -   /* Allocate the array of primes */
&gt; &gt; -   size = (num / 2) + 1;
&gt; &gt; +   /* Allocate the array of primes
&gt; &gt; +    * see Pierre Dusart, Math. Comp. 68 (1999), no. 225, 411???415.*/
&gt; &gt; +   lognum = log(num);
&gt; &gt; +   if(num &gt; 1) {
&gt; &gt; +       size = ceil(num/lognum * (1+1.2762/lognum));
&gt; &gt; +   }
&gt; &gt; +   else {
&gt; &gt; +       size = 1;
&gt; &gt; +   }
&gt; &gt;     primes = (int *) malloc((unsigned) size * sizeof(int));
&gt; &gt;     if (NULL == primes) {
&gt; &gt;         return MPI_ERR_NO_MEM;
&gt; &gt; -- 
&gt; &gt; 1.8.3.2
&gt; &gt; 
&gt; 
&gt; &gt; _______________________________________________
&gt; &gt; devel mailing list
&gt; &gt; devel_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; 
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
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14096/0001-Omit-usage-of-pre-calculated-prime-numbers-and-facto.patch">0001-Omit-usage-of-pre-calculated-prime-numbers-and-facto.patch</a>
</ul>
<!-- attachment="0001-Omit-usage-of-pre-calculated-prime-numbers-and-facto.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14097.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14095.php">Paul Kapinos: "[OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>In reply to:</strong> <a href="14094.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14097.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14097.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
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
