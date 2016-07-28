<?
$subject_val = "Re: [OMPI devel] Reviewing MPI_Dims_create";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 19:22:52 2014" -->
<!-- isoreceived="20140211002252" -->
<!-- sent="Tue, 11 Feb 2014 01:22:48 +0100 (CET)" -->
<!-- isosent="20140211002248" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Reviewing MPI_Dims_create" -->
<!-- id="250886226.230725.1392078168114.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5FEF66DD-3C52-42A8-BA2F-49076FEDCA9C_at_cisco.com" -->
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
<strong>Date:</strong> 2014-02-10 19:22:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14085.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14083.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>In reply to:</strong> <a href="14072.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14085.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14085.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>If you mean the current version in the ompi-tests/ibm svn repository I can confirm that it passes the topolgy/dimscreate test without errors. :)
<br>
<p>The difference in the patches is as follows: The patch from Andreas only generated a table of prime numbers of up to sqrt(freeprocs) while my patch still produces prime numbers up to freeprocs. And for factoring we really need all factors up to freeprocs. The standard sqrt optimization was just introduced in the wrong place. :)
<br>
<p>You are right with #3: It's a better approximation for the upper bound and the proof is something to be read under the Christmas tree. ;)
<br>
I just have to rethink if the ceil() is necessary in the code as I am not sure about rounding issues in floating point calculations here... :P
<br>
<p>Regarding your questions:
<br>
1.) I don't think we have to cache prime numbers as MPI_Dims create will not be used frequently for factorization. If anybody needs faster factorization he would use his own - even more optimized - code. If you find some free time beside Open MPI go out for some harder problems at <a href="http://projecteuler.net">http://projecteuler.net</a>. But please don't get frustrated from the assembler solutions. ;)
<br>
<p>2.) Interesting idea: Using the approximation from the cited paper we should only need around 400 MB to store all primes in the int32 range. Potential for applying compression techniques still present. ^^
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
Von: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
An: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
Gesendet: Montag, 10. Februar 2014 20:12:08
Betreff: Re: [OMPI devel] Reviewing MPI_Dims_create
Nice!  Can you verify that it passes the ibm test?  I didn't look closely, and to be honest, I'm not sure why the previous improvement broke the IBM test because it hypothetically did what you mentioned (stopped at sqrt(freenodes)).
I think patch 1 is a no-brainer.  I'm not sure about #2 because I'm not sure how it's different than the previous one, nor did I have time to investigate why the previous one broke the IBM test.  #3 seems like a good idea, too; I did't check the paper, but I assume it's some kind of proof about the upper limit on the number of primes in a given range.
Two questions:
1. Should we cache generated prime numbers?  (if so, it'll have to be done in a thread-safe way)
2. Should we just generate prime numbers and hard-code them into a table that is compiled into the code?  We would only need primes up to the sqrt of 2billion (i.e., signed int), right?  I don't know how many that is -- if it's small enough, perhaps this is the easiest solution.
On Feb 10, 2014, at 1:30 PM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
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
&gt;     0.3 -18.8% -18.8%      0.3 -18.8% getprimes2
&gt;     0.0  -0.0% -18.8%     -1.6 100.0% __libc_start_main
&gt;     0.0  -0.0% -18.8%     -1.6 100.0% main
&gt;    -1.9 118.8% 100.0%     -1.9 118.8% getprimes
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
&gt; <a href="http://www.hlrs.de/people/niethammer<0001-Move-parameter-check-into-appropriate-code-section-a.patch">http://www.hlrs.de/people/niethammer<0001-Move-parameter-check-into-appropriate-code-section-a.patch</a>&gt;&lt;0002-Speeding-up-detection-of-prime-numbers-using-the-fac.patch&gt;&lt;0003-Reduce-memory-usage-by-a-better-approximation-for-th.patch&gt;_______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14085.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14083.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>In reply to:</strong> <a href="14072.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14085.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14085.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
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
