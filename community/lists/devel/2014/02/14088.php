<?
$subject_val = "Re: [OMPI devel] Reviewing MPI_Dims_create";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 20:29:50 2014" -->
<!-- isoreceived="20140211012950" -->
<!-- sent="Tue, 11 Feb 2014 02:29:47 +0100 (CET)" -->
<!-- isosent="20140211012947" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Reviewing MPI_Dims_create" -->
<!-- id="1892380018.230811.1392082187890.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20140210222421.GB16400_at_neuromancer.fritz.box" -->
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
<strong>Date:</strong> 2014-02-10 20:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14089.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem test suite"</a>
<li><strong>Previous message:</strong> <a href="14087.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14079.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14094.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14094.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Andreas,
<br>
<p>As mentioned in my former mail I did not touch the factorization code.
<br>
But to figure out if a number n is *not* a prime number it is sufficient to check up to \sqrt(n).
<br>
Proof:
<br>
let n = p*q with q &gt; \sqrt{n}
<br>
--&gt; p &lt; \sqrt(n)
<br>
So we have already found factor p before reaching \sqrt(n) and by this n is no prime any more and no need for further checks. ;)
<br>
<p><p>The mentioned factorization may indeed include one factor which is larger than \sqrt(n). :)
<br>
<p>Proof that at least one prime factor can be larger than \sqrt(n) example:
<br>
6 = 2*3
<br>
\sqrt(6) = 2.4494897427832... &lt; 3   Q.E.D.
<br>
<p><p>Proof that no more than one factor can be larger than \sqrt(n):
<br>
let n = \prod_{i=0}^K p_i with p_i \in N  and K &gt; 2
<br>
and assume w.l.o.g.  p_0 &gt; \sqrt(n)  and  p_1 &gt; \sqrt(n)
<br>
--&gt; 1 &gt; \prod_{i=2}^K p_i
<br>
which is a contradiction as all p_i \in N.  Q.E.D.
<br>
<p><p>So your idea is still applicable with not much effort and we only need prime factors up to sqrt(n) in the factorizer code for an additional optimization. :)
<br>
<p>First search all K' factors p_i &lt; \sqrt(n). If then n \ne \prod_{i=0}^{K'} p_i we should be sure that p_{K'+1} = n / \prod_{i=0}^{K'} p_i is a prime. No complication with counts IMHO. I leave this without patch as it is already 2:30 in the morning. :P
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
Gesendet: Montag, 10. Februar 2014 23:24:24
Betreff: Re: [OMPI devel] Reviewing MPI_Dims_create
Christoph-
your patch has the same problem as my original patch: indeed there may
be a prime factor p of n with p &gt; sqrt(n). What's important is that
there may only be at most one. I've submitted an updated patch (see my
previous mail) which catches this special case.
Best
-Andreas
On 19:30 Mon 10 Feb     , Christoph Niethammer wrote:
&gt; Hello,
&gt; 
&gt; I noticed some effort in improving the scalability of
&gt; MPI_Dims_create(int nnodes, int ndims, int dims[])
&gt; Unfortunately there were some issues with the first attempt (r30539 and r30540) which were reverted.
&gt; 
&gt; So I decided to give it a short review based on r30606
&gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606</a>
&gt; 
&gt; 
&gt; 1.) freeprocs is initialized to be nnodes and the subsequent divisions of freeprocs have all positive integers as divisor.
&gt; So IMHO it would make more sense to check if nnodes &gt; 0 in the MPI_PARAM_CHECK section at the begin instead of the following (see patch 0001):
&gt; 
&gt; 99	    if (freeprocs &lt; 1) {
&gt; 100	       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_DIMS,
&gt; 101	                                     FUNC_NAME);
&gt; 102	    }
&gt; 
&gt; 
&gt; 2.) I rewrote the algorithm stopping at sqrt(n) in getprimes(int num, int *nprimes, int **pprimes)
&gt; which makes mathematically more sens (as the largest prime factor of any number n cannot exceed \sqrt{n}) - and should produce the right result. ;)
&gt; (see patch 0002)
&gt; Here the improvements:
&gt; 
&gt; module load mpi/openmpi/trunk-gnu.4.7.3
&gt; $ ./mpi-dims-old 1000000
&gt; time used for MPI_Dims_create(1000000, 3, {}): 8.104007
&gt; module swap mpi/openmpi/trunk-gnu.4.7.3 mpi/openmpi/trunk-gnu.4.7.3-testing
&gt; $ ./mpi-dims-new 1000000
&gt; time used for MPI_Dims_create(1000000, 3, {}): 0.060400
&gt; 
&gt; 
&gt; 3.) Memory allocation for the list of prime numbers may be reduced up to a factor of ~6 for 1mio nodes using the result from Dusart 1999 [1]:
&gt; \pi(x)  &lt; x/ln(x)(1+1.2762/ln(x))  for x &gt; 1
&gt; Unfortunately this saves us only 1.6 MB per process for 1mio nodes as reported by tcmalloc/pprof on a test program - but it may sum up with fatter nodes. :P
&gt; 
&gt; $ pprof --base=$PWD/primes-old.0001.heap a.out primes-new.0002.heap
&gt; (pprof) top
&gt; Total: -1.6 MB
&gt;      0.3 -18.8% -18.8%      0.3 -18.8% getprimes2
&gt;      0.0  -0.0% -18.8%     -1.6 100.0% __libc_start_main
&gt;      0.0  -0.0% -18.8%     -1.6 100.0% main
&gt;     -1.9 118.8% 100.0%     -1.9 118.8% getprimes
&gt; 
&gt; Find attached patch for it in 0003.
&gt; 
&gt; 
&gt; If there are no issues I would like to commit this to trunk for further testing (+cmr for 1.7.5?) end of this week.
&gt; 
&gt; Best regards
&gt; Christoph
&gt; 
&gt; [1] <a href="http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html">http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html</a>
&gt; 
&gt; 
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
&gt; From e3292b90cac42fad80ed27a555419002ed61ab66 Mon Sep 17 00:00:00 2001
&gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
&gt; Date: Mon, 10 Feb 2014 16:44:03 +0100
&gt; Subject: [PATCH 1/3] Move parameter check into appropriate code section at the
&gt;  begin.
&gt; 
&gt; ---
&gt;  ompi/mpi/c/dims_create.c | 11 ++++++-----
&gt;  1 file changed, 6 insertions(+), 5 deletions(-)
&gt; 
&gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
&gt; index d2c3858..3d0792f 100644
&gt; --- a/ompi/mpi/c/dims_create.c
&gt; +++ b/ompi/mpi/c/dims_create.c
&gt; @@ -71,6 +71,11 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
&gt;              return OMPI_ERRHANDLER_INVOKE (MPI_COMM_WORLD, 
&gt;                                             MPI_ERR_DIMS, FUNC_NAME);
&gt;          }
&gt; +
&gt; +        if (1 &gt; nnodes) {
&gt; +            return OMPI_ERRHANDLER_INVOKE (MPI_COMM_WORLD,
&gt; +                                           MPI_ERR_DIMS, FUNC_NAME);
&gt; +        }
&gt;      }
&gt;  
&gt;      /* Get # of free-to-be-assigned processes and # of free dimensions */
&gt; @@ -95,11 +100,7 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
&gt;                                       FUNC_NAME);
&gt;      }
&gt;  
&gt; -    if (freeprocs &lt; 1) {
&gt; -       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_DIMS,
&gt; -                                     FUNC_NAME);
&gt; -    }
&gt; -    else if (freeprocs == 1) {
&gt; +    if (freeprocs == 1) {
&gt;          for (i = 0; i &lt; ndims; ++i, ++dims) {
&gt;              if (*dims == 0) {
&gt;                 *dims = 1;
&gt; -- 
&gt; 1.8.3.2
&gt; 
&gt; From bc862c47ef8d581a8f6735c51983d6c9eeb95dfd Mon Sep 17 00:00:00 2001
&gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
&gt; Date: Mon, 10 Feb 2014 18:50:51 +0100
&gt; Subject: [PATCH 2/3] Speeding up detection of prime numbers using the fact
&gt;  that the largest prime factor of any number n cannot exceed \sqrt{n}.
&gt; 
&gt; ---
&gt;  ompi/mpi/c/dims_create.c | 9 ++++++---
&gt;  1 file changed, 6 insertions(+), 3 deletions(-)
&gt; 
&gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
&gt; index 3d0792f..1c1c381 100644
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
&gt; @@ -293,13 +295,14 @@ getprimes(int num, int *pnprime, int **pprimes) {
&gt;     primes[i++] = 2;
&gt;  
&gt;     for (n = 3; n &lt;= num; n += 2) {
&gt; -      for (j = 1; j &lt; i; ++j) {
&gt; +      double nsqrt = sqrt((double) n);
&gt; +      for(j = 0; (double) primes[j] &lt;= nsqrt; j++) {
&gt;           if ((n % primes[j]) == 0) {
&gt;               break;
&gt;            }
&gt;        }
&gt;  
&gt; -      if (j == i) {
&gt; +      if (primes[j] &gt; nsqrt) {
&gt;          if (i &gt;= size) {
&gt;             return MPI_ERR_DIMS;
&gt;           }
&gt; -- 
&gt; 1.8.3.2
&gt; 
&gt; From a012206cfbf7b8b22cef4cc5b811384e5e3ac32c Mon Sep 17 00:00:00 2001
&gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
&gt; Date: Mon, 10 Feb 2014 19:02:03 +0100
&gt; Subject: [PATCH 3/3] Reduce memory usage by a better approximation for the
&gt;  upper limit of the number of primes.
&gt; 
&gt; ---
&gt;  ompi/mpi/c/dims_create.c | 12 ++++++++++--
&gt;  1 file changed, 10 insertions(+), 2 deletions(-)
&gt; 
&gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
&gt; index 1c1c381..8dd3144 100644
&gt; --- a/ompi/mpi/c/dims_create.c
&gt; +++ b/ompi/mpi/c/dims_create.c
&gt; @@ -281,9 +281,17 @@ getprimes(int num, int *pnprime, int **pprimes) {
&gt;     int n;
&gt;     int size;
&gt;     int *primes;
&gt; +   double lognum;
&gt;  
&gt; -   /* Allocate the array of primes */
&gt; -   size = (num / 2) + 1;
&gt; +   /* Allocate the array of primes
&gt; +    * see Pierre Dusart, Math. Comp. 68 (1999), no. 225, 411???415.*/
&gt; +   lognum = log(num);
&gt; +   if(num &gt; 1) {
&gt; +       size = ceil(num/lognum * (1+1.2762/lognum));
&gt; +   }
&gt; +   else {
&gt; +       size = 1;
&gt; +   }
&gt;     primes = (int *) malloc((unsigned) size * sizeof(int));
&gt;     if (NULL == primes) {
&gt;         return MPI_ERR_NO_MEM;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14089.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem test suite"</a>
<li><strong>Previous message:</strong> <a href="14087.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14079.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14094.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14094.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
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
