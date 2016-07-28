<?
$subject_val = "Re: [OMPI devel] Reviewing MPI_Dims_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 06:16:23 2014" -->
<!-- isoreceived="20140211111623" -->
<!-- sent="Tue, 11 Feb 2014 12:16:53 +0100" -->
<!-- isosent="20140211111653" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Reviewing MPI_Dims_create" -->
<!-- id="20140211111652.GA8183_at_neuromancer.informatik.uni-erlangen.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1767929865.237783.1392116562038.JavaMail.root_at_hlrs.de" -->
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
<strong>Date:</strong> 2014-02-11 06:16:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14098.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14096.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14096.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14098.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14098.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>ah, that's clever indeed!
<br>
<p>Best
<br>
-Andreas
<br>
<p><p>On 12:02 Tue 11 Feb     , Christoph Niethammer wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After rethinking Jeff's comments about caching prime numbers I came to the conclusion that we can omit the prime numbers at all and go directly for the factorization. :D
</span><br>
<span class="quotelev1">&gt; We then only need at most   log_2(INT_MAX) * sizeof(int) = 32 * 4 byte = 128 byte   of memory for the factors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Computational costs reduce as well as the factorization itself is done by a loop with at most \sqrt(num) / 2 iterations - which is the same as in the original prime number detection loop.
</span><br>
<span class="quotelev1">&gt; I think this is the cleanest way which reduces also source code size. ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Find attache patch against the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Urspr&#252;ngliche Mail -----
</span><br>
<span class="quotelev1">&gt; Von: &quot;Andreas Sch&#228;fer&quot; &lt;gentryx_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; An: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Gesendet: Dienstag, 11. Februar 2014 06:24:56
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI devel] Reviewing MPI_Dims_create
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, so we were thinking the same thing :-) The optimization you
</span><br>
<span class="quotelev1">&gt; mention below is the same I've used in my updated patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02:29 Tue 11 Feb     , Christoph Niethammer wrote:
</span><br>
<span class="quotelev2">&gt; &gt; As mentioned in my former mail I did not touch the factorization
</span><br>
<span class="quotelev2">&gt; &gt; code.
</span><br>
<span class="quotelev2">&gt; &gt; But to figure out if a number n is *not* a prime number it is sufficient to check up to \sqrt(n).
</span><br>
<span class="quotelev2">&gt; &gt; Proof:
</span><br>
<span class="quotelev2">&gt; &gt; let n = p*q with q &gt; \sqrt{n}
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; p &lt; \sqrt(n)
</span><br>
<span class="quotelev2">&gt; &gt; So we have already found factor p before reaching \sqrt(n) and by this n is no prime any more and no need for further checks. ;)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The mentioned factorization may indeed include one factor which is larger than \sqrt(n). :)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Proof that at least one prime factor can be larger than \sqrt(n) example:
</span><br>
<span class="quotelev2">&gt; &gt; 6 = 2*3
</span><br>
<span class="quotelev2">&gt; &gt; \sqrt(6) = 2.4494897427832... &lt; 3   Q.E.D.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Proof that no more than one factor can be larger than \sqrt(n):
</span><br>
<span class="quotelev2">&gt; &gt; let n = \prod_{i=0}^K p_i with p_i \in N  and K &gt; 2
</span><br>
<span class="quotelev2">&gt; &gt; and assume w.l.o.g.  p_0 &gt; \sqrt(n)  and  p_1 &gt; \sqrt(n)
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; 1 &gt; \prod_{i=2}^K p_i
</span><br>
<span class="quotelev2">&gt; &gt; which is a contradiction as all p_i \in N.  Q.E.D.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So your idea is still applicable with not much effort and we only need prime factors up to sqrt(n) in the factorizer code for an additional optimization. :)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; First search all K' factors p_i &lt; \sqrt(n). If then n \ne \prod_{i=0}^{K'} p_i we should be sure that p_{K'+1} = n / \prod_{i=0}^{K'} p_i is a prime. No complication with counts IMHO. I leave this without patch as it is already 2:30 in the morning. :P
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt; Christoph
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
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ----- Urspr&#252;ngliche Mail -----
</span><br>
<span class="quotelev2">&gt; &gt; Von: &quot;Andreas Sch&#228;fer&quot; &lt;gentryx_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; An: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gesendet: Montag, 10. Februar 2014 23:24:24
</span><br>
<span class="quotelev2">&gt; &gt; Betreff: Re: [OMPI devel] Reviewing MPI_Dims_create
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Christoph-
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; your patch has the same problem as my original patch: indeed there may
</span><br>
<span class="quotelev2">&gt; &gt; be a prime factor p of n with p &gt; sqrt(n). What's important is that
</span><br>
<span class="quotelev2">&gt; &gt; there may only be at most one. I've submitted an updated patch (see my
</span><br>
<span class="quotelev2">&gt; &gt; previous mail) which catches this special case.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Best
</span><br>
<span class="quotelev2">&gt; &gt; -Andreas
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 19:30 Mon 10 Feb     , Christoph Niethammer wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I noticed some effort in improving the scalability of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Dims_create(int nnodes, int ndims, int dims[])
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unfortunately there were some issues with the first attempt (r30539 and r30540) which were reverted.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So I decided to give it a short review based on r30606
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/c/dims_create.c?rev=30606</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.) freeprocs is initialized to be nnodes and the subsequent divisions of freeprocs have all positive integers as divisor.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So IMHO it would make more sense to check if nnodes &gt; 0 in the MPI_PARAM_CHECK section at the begin instead of the following (see patch 0001):
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 99	    if (freeprocs &lt; 1) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 100	       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_DIMS,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 101	                                     FUNC_NAME);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 102	    }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2.) I rewrote the algorithm stopping at sqrt(n) in getprimes(int num, int *nprimes, int **pprimes)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; which makes mathematically more sens (as the largest prime factor of any number n cannot exceed \sqrt{n}) - and should produce the right result. ;)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (see patch 0002)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here the improvements:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; module load mpi/openmpi/trunk-gnu.4.7.3
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ ./mpi-dims-old 1000000
</span><br>
<span class="quotelev3">&gt; &gt; &gt; time used for MPI_Dims_create(1000000, 3, {}): 8.104007
</span><br>
<span class="quotelev3">&gt; &gt; &gt; module swap mpi/openmpi/trunk-gnu.4.7.3 mpi/openmpi/trunk-gnu.4.7.3-testing
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ ./mpi-dims-new 1000000
</span><br>
<span class="quotelev3">&gt; &gt; &gt; time used for MPI_Dims_create(1000000, 3, {}): 0.060400
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3.) Memory allocation for the list of prime numbers may be reduced up to a factor of ~6 for 1mio nodes using the result from Dusart 1999 [1]:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; \pi(x)  &lt; x/ln(x)(1+1.2762/ln(x))  for x &gt; 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unfortunately this saves us only 1.6 MB per process for 1mio nodes as reported by tcmalloc/pprof on a test program - but it may sum up with fatter nodes. :P
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ pprof --base=$PWD/primes-old.0001.heap a.out primes-new.0002.heap
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (pprof) top
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Total: -1.6 MB
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      0.3 -18.8% -18.8%      0.3 -18.8% getprimes2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      0.0  -0.0% -18.8%     -1.6 100.0% __libc_start_main
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      0.0  -0.0% -18.8%     -1.6 100.0% main
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     -1.9 118.8% 100.0%     -1.9 118.8% getprimes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Find attached patch for it in 0003.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If there are no issues I would like to commit this to trunk for further testing (+cmr for 1.7.5?) end of this week.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Best regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Christoph
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [1] <a href="http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html">http://www.ams.org/journals/mcom/1999-68-225/S0025-5718-99-01037-6/home.html</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Christoph Niethammer
</span><br>
<span class="quotelev3">&gt; &gt; &gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Nobelstrasse 19
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 70569 Stuttgart
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev3">&gt; &gt; &gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From e3292b90cac42fad80ed27a555419002ed61ab66 Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Mon, 10 Feb 2014 16:44:03 +0100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: [PATCH 1/3] Move parameter check into appropriate code section at the
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  begin.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ompi/mpi/c/dims_create.c | 11 ++++++-----
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  1 file changed, 6 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; index d2c3858..3d0792f 100644
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- a/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +++ b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -71,6 +71,11 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              return OMPI_ERRHANDLER_INVOKE (MPI_COMM_WORLD, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                                             MPI_ERR_DIMS, FUNC_NAME);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;          }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +        if (1 &gt; nnodes) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +            return OMPI_ERRHANDLER_INVOKE (MPI_COMM_WORLD,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +                                           MPI_ERR_DIMS, FUNC_NAME);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +        }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      /* Get # of free-to-be-assigned processes and # of free dimensions */
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -95,11 +100,7 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                                       FUNC_NAME);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -    if (freeprocs &lt; 1) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_DIMS,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -                                     FUNC_NAME);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -    }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -    else if (freeprocs == 1) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +    if (freeprocs == 1) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;          for (i = 0; i &lt; ndims; ++i, ++dims) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              if (*dims == 0) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 *dims = 1;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.8.3.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From bc862c47ef8d581a8f6735c51983d6c9eeb95dfd Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Mon, 10 Feb 2014 18:50:51 +0100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: [PATCH 2/3] Speeding up detection of prime numbers using the fact
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  that the largest prime factor of any number n cannot exceed \sqrt{n}.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ompi/mpi/c/dims_create.c | 9 ++++++---
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  1 file changed, 6 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; index 3d0792f..1c1c381 100644
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- a/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +++ b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -5,7 +5,7 @@
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   * Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   *                         reserved.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; + * Copyright (c) 2004-2014 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   *                         All rights reserved.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -20,6 +20,8 @@
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +#include &lt;math.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  #include &quot;ompi/mpi/c/bindings.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  #include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -293,13 +295,14 @@ getprimes(int num, int *pnprime, int **pprimes) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     primes[i++] = 2;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     for (n = 3; n &lt;= num; n += 2) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -      for (j = 1; j &lt; i; ++j) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +      double nsqrt = sqrt((double) n);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +      for(j = 0; (double) primes[j] &lt;= nsqrt; j++) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           if ((n % primes[j]) == 0) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;               break;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;            }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -      if (j == i) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +      if (primes[j] &gt; nsqrt) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;          if (i &gt;= size) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             return MPI_ERR_DIMS;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.8.3.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From a012206cfbf7b8b22cef4cc5b811384e5e3ac32c Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Mon, 10 Feb 2014 19:02:03 +0100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: [PATCH 3/3] Reduce memory usage by a better approximation for the
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  upper limit of the number of primes.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ompi/mpi/c/dims_create.c | 12 ++++++++++--
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  1 file changed, 10 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; index 1c1c381..8dd3144 100644
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- a/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +++ b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -281,9 +281,17 @@ getprimes(int num, int *pnprime, int **pprimes) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     int n;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     int size;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     int *primes;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +   double lognum;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -   /* Allocate the array of primes */
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -   size = (num / 2) + 1;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +   /* Allocate the array of primes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +    * see Pierre Dusart, Math. Comp. 68 (1999), no. 225, 411???415.*/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +   lognum = log(num);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +   if(num &gt; 1) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +       size = ceil(num/lognum * (1+1.2762/lognum));
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +   }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +   else {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +       size = 1;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +   }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     primes = (int *) malloc((unsigned) size * sizeof(int));
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     if (NULL == primes) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         return MPI_ERR_NO_MEM;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.8.3.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; ==========================================================
</span><br>
<span class="quotelev2">&gt; &gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev2">&gt; &gt; HPC and Grid Computing
</span><br>
<span class="quotelev2">&gt; &gt; Chair of Computer Science 3
</span><br>
<span class="quotelev2">&gt; &gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
</span><br>
<span class="quotelev2">&gt; &gt; +49 9131 85-27910
</span><br>
<span class="quotelev2">&gt; &gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
</span><br>
<span class="quotelev2">&gt; &gt; ==========================================================
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (\___/)
</span><br>
<span class="quotelev2">&gt; &gt; (+'.'+)
</span><br>
<span class="quotelev2">&gt; &gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev2">&gt; &gt; signature to help him gain world domination!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><span class="quotelev1">&gt; From 19af07aac40d9e2b9c827ab043643b1e6e28fe0c Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev1">&gt; From: Christoph Niethammer &lt;christoph.niethammer_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tue, 11 Feb 2014 11:58:30 +0100
</span><br>
<span class="quotelev1">&gt; Subject: [PATCH] Omit usage of pre calculated prime numbers and factorize
</span><br>
<span class="quotelev1">&gt;  directly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;  ompi/mpi/c/dims_create.c | 159 +++++++++++++++--------------------------------
</span><br>
<span class="quotelev1">&gt;  1 file changed, 50 insertions(+), 109 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mpi/c/dims_create.c b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev1">&gt; index 3d0792f..02a3413 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mpi/c/dims_create.c
</span><br>
<span class="quotelev1">&gt; @@ -5,7 +5,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt;   *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt;   *                         reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2014 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev1">&gt;   *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; @@ -20,6 +20,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +#include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mpi/c/bindings.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -36,9 +38,8 @@
</span><br>
<span class="quotelev1">&gt;  static const char FUNC_NAME[] = &quot;MPI_Dims_create&quot;;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  /* static functions */
</span><br>
<span class="quotelev1">&gt; -static int assignnodes(int ndim, int nfactor, int *pfacts, int *counts, int **pdims);
</span><br>
<span class="quotelev1">&gt; -static int getfactors(int num, int nprime, int *primes, int **pcounts);
</span><br>
<span class="quotelev1">&gt; -static int getprimes(int num, int *pnprime, int **pprimes);
</span><br>
<span class="quotelev1">&gt; +static int assignnodes(int ndim, int nfactor, int *pfacts,int **pdims);
</span><br>
<span class="quotelev1">&gt; +static int getfactors(int num, int *nfators, int **factors);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt; @@ -50,8 +51,7 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
</span><br>
<span class="quotelev1">&gt;      int i;
</span><br>
<span class="quotelev1">&gt;      int freeprocs;
</span><br>
<span class="quotelev1">&gt;      int freedims;
</span><br>
<span class="quotelev1">&gt; -    int nprimes;
</span><br>
<span class="quotelev1">&gt; -    int *primes;
</span><br>
<span class="quotelev1">&gt; +    int nfactors;
</span><br>
<span class="quotelev1">&gt;      int *factors;
</span><br>
<span class="quotelev1">&gt;      int *procs;
</span><br>
<span class="quotelev1">&gt;      int *p;
</span><br>
<span class="quotelev1">&gt; @@ -109,20 +109,14 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
</span><br>
<span class="quotelev1">&gt;          return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    /* Compute the relevant prime numbers for factoring */
</span><br>
<span class="quotelev1">&gt; -    if (MPI_SUCCESS != (err = getprimes(freeprocs, &amp;nprimes, &amp;primes))) {
</span><br>
<span class="quotelev1">&gt; -       return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, err,
</span><br>
<span class="quotelev1">&gt; -                                     FUNC_NAME);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;      /* Factor the number of free processes */
</span><br>
<span class="quotelev1">&gt; -    if (MPI_SUCCESS != (err = getfactors(freeprocs, nprimes, primes, &amp;factors))) {
</span><br>
<span class="quotelev1">&gt; +    if (MPI_SUCCESS != (err = getfactors(freeprocs, &amp;nfactors, &amp;factors))) {
</span><br>
<span class="quotelev1">&gt;         return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, err,
</span><br>
<span class="quotelev1">&gt;                                       FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* Assign free processes to free dimensions */
</span><br>
<span class="quotelev1">&gt; -    if (MPI_SUCCESS != (err = assignnodes(freedims, nprimes, primes, factors, &amp;procs))) {
</span><br>
<span class="quotelev1">&gt; +    if (MPI_SUCCESS != (err = assignnodes(freedims, nfactors, factors, &amp;procs))) {
</span><br>
<span class="quotelev1">&gt;         return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, err,
</span><br>
<span class="quotelev1">&gt;                                       FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -135,7 +129,6 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    free((char *) primes);
</span><br>
<span class="quotelev1">&gt;      free((char *) factors);
</span><br>
<span class="quotelev1">&gt;      free((char *) procs);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -154,12 +147,11 @@ int MPI_Dims_create(int nnodes, int ndims, int dims[])
</span><br>
<span class="quotelev1">&gt;   *  Accepts:    - # of dimensions
</span><br>
<span class="quotelev1">&gt;   *          - # of prime factors
</span><br>
<span class="quotelev1">&gt;   *          - array of prime factors
</span><br>
<span class="quotelev1">&gt; - *          - array of factor counts
</span><br>
<span class="quotelev1">&gt;   *          - ptr to array of dimensions (returned value)
</span><br>
<span class="quotelev1">&gt;   *  Returns:    - 0 or ERROR
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  static int
</span><br>
<span class="quotelev1">&gt; -assignnodes(int ndim, int nfactor, int *pfacts, int *counts, int **pdims)
</span><br>
<span class="quotelev1">&gt; +assignnodes(int ndim, int nfactor, int *pfacts, int **pdims)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int *bins;
</span><br>
<span class="quotelev1">&gt;      int i, j;
</span><br>
<span class="quotelev1">&gt; @@ -185,17 +177,15 @@ assignnodes(int ndim, int nfactor, int *pfacts, int *counts, int **pdims)
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      /* Loop assigning factors from the highest to the lowest */
</span><br>
<span class="quotelev1">&gt;      for (j = nfactor - 1; j &gt;= 0; --j) {
</span><br>
<span class="quotelev1">&gt; -       f = pfacts[j];
</span><br>
<span class="quotelev1">&gt; -       for (n = counts[j]; n &gt; 0; --n) {
</span><br>
<span class="quotelev1">&gt; -            /* Assign a factor to the smallest bin */
</span><br>
<span class="quotelev1">&gt; -            pmin = bins;
</span><br>
<span class="quotelev1">&gt; -            for (i = 1, p = pmin + 1; i &lt; ndim; ++i, ++p) {
</span><br>
<span class="quotelev1">&gt; -                if (*p &lt; *pmin) {
</span><br>
<span class="quotelev1">&gt; -                    pmin = p;
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; +        f = pfacts[j];
</span><br>
<span class="quotelev1">&gt; +        /* Assign a factor to the smallest bin */
</span><br>
<span class="quotelev1">&gt; +        pmin = bins;
</span><br>
<span class="quotelev1">&gt; +        for (i = 1, p = pmin + 1; i &lt; ndim; ++i, ++p) {
</span><br>
<span class="quotelev1">&gt; +            if (*p &lt; *pmin) {
</span><br>
<span class="quotelev1">&gt; +                pmin = p;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; -            *pmin *= f;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; +        *pmin *= f;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;       /* Sort dimensions in decreasing order (O(n^2) for now) */
</span><br>
<span class="quotelev1">&gt; @@ -217,96 +207,47 @@ assignnodes(int ndim, int nfactor, int *pfacts, int *counts, int **pdims)
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   *  Function:   - factorize a number
</span><br>
<span class="quotelev1">&gt;   *  Accepts:    - number
</span><br>
<span class="quotelev1">&gt; - *          - # of primes
</span><br>
<span class="quotelev1">&gt; - *          - array of primes
</span><br>
<span class="quotelev1">&gt; - *          - ptr to array of counts (returned value)
</span><br>
<span class="quotelev1">&gt; - *  Returns:    - 0 or ERROR
</span><br>
<span class="quotelev1">&gt; + *          - # prime factors
</span><br>
<span class="quotelev1">&gt; + *          - array of prime factors
</span><br>
<span class="quotelev1">&gt; + *  Returns:    - MPI_SUCCESS or ERROR
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  static int
</span><br>
<span class="quotelev1">&gt; -getfactors(int num, int nprime, int *primes, int **pcounts)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int *counts;
</span><br>
<span class="quotelev1">&gt; +getfactors(int num, int *nfactors, int **factors) {
</span><br>
<span class="quotelev1">&gt; +    int size;
</span><br>
<span class="quotelev1">&gt; +    int n;
</span><br>
<span class="quotelev1">&gt; +    int d;
</span><br>
<span class="quotelev1">&gt;      int i;
</span><br>
<span class="quotelev1">&gt; -    int *p;
</span><br>
<span class="quotelev1">&gt; -    int *c;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; -    if (0 &gt;= nprime) {
</span><br>
<span class="quotelev1">&gt; -        return MPI_ERR_INTERN;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    double lognum;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    /* Allocate the factor counts array */
</span><br>
<span class="quotelev1">&gt; -    counts = (int *) malloc((unsigned) nprime * sizeof(int));
</span><br>
<span class="quotelev1">&gt; -    if (NULL == counts) {
</span><br>
<span class="quotelev1">&gt; -       return MPI_ERR_NO_MEM;
</span><br>
<span class="quotelev1">&gt; +    if(num  &lt; 2) {
</span><br>
<span class="quotelev1">&gt; +        (*nfactors) = 0;
</span><br>
<span class="quotelev1">&gt; +        (*factors) = NULL;
</span><br>
<span class="quotelev1">&gt; +        return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    *pcounts = counts;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Loop over the prime numbers */
</span><br>
<span class="quotelev1">&gt; -    i = nprime - 1;
</span><br>
<span class="quotelev1">&gt; -    p = primes + i;
</span><br>
<span class="quotelev1">&gt; -    c = counts + i;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    for (; i &gt;= 0; --i, --p, --c) {
</span><br>
<span class="quotelev1">&gt; -        *c = 0;
</span><br>
<span class="quotelev1">&gt; -        while ((num % *p) == 0) {
</span><br>
<span class="quotelev1">&gt; -            ++(*c);
</span><br>
<span class="quotelev1">&gt; -            num /= *p;
</span><br>
<span class="quotelev1">&gt; +    /* Allocate the array of prime factors which cannot exceed log_2(num) entries */
</span><br>
<span class="quotelev1">&gt; +    n = num;
</span><br>
<span class="quotelev1">&gt; +    size = ceil(log(num) / log(2));
</span><br>
<span class="quotelev1">&gt; +    *factors = (int *) malloc((unsigned) size * sizeof(int));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    i = 0;
</span><br>
<span class="quotelev1">&gt; +    /* determine all occurences of factor 2 */
</span><br>
<span class="quotelev1">&gt; +    while((num % 2) == 0) {
</span><br>
<span class="quotelev1">&gt; +        num /= 2;
</span><br>
<span class="quotelev1">&gt; +        (*factors)[i++] = 2;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    /* determine all occurences of uneven prime numbers up to sqrt(num) */
</span><br>
<span class="quotelev1">&gt; +    d = 3;
</span><br>
<span class="quotelev1">&gt; +    int sqrtnum = ceil(sqrt(num));
</span><br>
<span class="quotelev1">&gt; +    for(d = 3; (num &gt; 1) &amp;&amp; (d &lt; sqrtnum); d += 2) {
</span><br>
<span class="quotelev1">&gt; +        while((num % d) == 0) {
</span><br>
<span class="quotelev1">&gt; +            num /= d;
</span><br>
<span class="quotelev1">&gt; +            (*factors)[i++] = d;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (1 != num) {
</span><br>
<span class="quotelev1">&gt; -        return MPI_ERR_INTERN;
</span><br>
<span class="quotelev1">&gt; +    /* as we looped only up to sqrt(num) one factor &gt; sqrt(num) may be left over */
</span><br>
<span class="quotelev1">&gt; +    if(num != 1) {
</span><br>
<span class="quotelev1">&gt; +        (*factors)[i++] = num;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    (*nfactors) = i;
</span><br>
<span class="quotelev1">&gt;      return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - *  getprimes
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - *  Function:   - get primes smaller than number
</span><br>
<span class="quotelev1">&gt; - *          - array of primes dynamically allocated
</span><br>
<span class="quotelev1">&gt; - *  Accepts:    - number
</span><br>
<span class="quotelev1">&gt; - *          - ptr # of primes (returned value)
</span><br>
<span class="quotelev1">&gt; - *          - ptr array of primes (returned values)
</span><br>
<span class="quotelev1">&gt; - *  Returns:    - 0 or ERROR
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static int
</span><br>
<span class="quotelev1">&gt; -getprimes(int num, int *pnprime, int **pprimes) {
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -   int i, j;
</span><br>
<span class="quotelev1">&gt; -   int n;
</span><br>
<span class="quotelev1">&gt; -   int size;
</span><br>
<span class="quotelev1">&gt; -   int *primes;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -   /* Allocate the array of primes */
</span><br>
<span class="quotelev1">&gt; -   size = (num / 2) + 1;
</span><br>
<span class="quotelev1">&gt; -   primes = (int *) malloc((unsigned) size * sizeof(int));
</span><br>
<span class="quotelev1">&gt; -   if (NULL == primes) {
</span><br>
<span class="quotelev1">&gt; -       return MPI_ERR_NO_MEM;
</span><br>
<span class="quotelev1">&gt; -   }
</span><br>
<span class="quotelev1">&gt; -   *pprimes = primes;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -   /* Find the prime numbers */
</span><br>
<span class="quotelev1">&gt; -   i = 0;
</span><br>
<span class="quotelev1">&gt; -   primes[i++] = 2;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -   for (n = 3; n &lt;= num; n += 2) {
</span><br>
<span class="quotelev1">&gt; -      for (j = 1; j &lt; i; ++j) {
</span><br>
<span class="quotelev1">&gt; -         if ((n % primes[j]) == 0) {
</span><br>
<span class="quotelev1">&gt; -             break;
</span><br>
<span class="quotelev1">&gt; -          }
</span><br>
<span class="quotelev1">&gt; -      }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -      if (j == i) {
</span><br>
<span class="quotelev1">&gt; -        if (i &gt;= size) {
</span><br>
<span class="quotelev1">&gt; -           return MPI_ERR_DIMS;
</span><br>
<span class="quotelev1">&gt; -         }
</span><br>
<span class="quotelev1">&gt; -         primes[i++] = n;
</span><br>
<span class="quotelev1">&gt; -      }
</span><br>
<span class="quotelev1">&gt; -   }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -   *pnprime = i;
</span><br>
<span class="quotelev1">&gt; -   return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 1.8.3.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14097/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14098.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14096.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14096.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14098.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14098.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
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
