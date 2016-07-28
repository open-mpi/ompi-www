<?
$subject_val = "Re: [OMPI devel] Thread safety levels";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 07:01:02 2010" -->
<!-- isoreceived="20100510110102" -->
<!-- sent="Mon, 10 May 2010 13:04:27 +0200 (CEST)" -->
<!-- isosent="20100510110427" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Thread safety levels" -->
<!-- id="alpine.DEB.2.00.1005101137300.3698_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Prayer.1.3.2.1005101026150.32530_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Thread safety levels<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 07:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7903.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7904.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7904.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 10 May 2010, N.M. Maclaren wrote:
<br>
<p><span class="quotelev2">&gt;&gt; As explained by Sylvain, current Open MPI implementation always returns
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_SINGLE as provided thread level if neither --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt; nor --enable-progress-threads was specified at configure (v1.4).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is definitely the correct action.  Unless an application or library 
</span><br>
<span class="quotelev1">&gt; has been built with thread support, or can guaranteed to be called only 
</span><br>
<span class="quotelev1">&gt; from a single thread, using threads is catastrophic.
</span><br>
I personnaly see that as a bug, but I certainly lack some knowledge on 
<br>
non-linux OSes. From my point of view, any normal library should be 
<br>
THREAD_SERIALIZED, and thread-safe library should be THREAD_MULTIPLE. I 
<br>
don't see other libraries which claims to be &quot;totally incompatible with 
<br>
the use of threads&quot;. They may not be thread-safe, in which case the 
<br>
programmer must ensure locking and memory coherency to use them in 
<br>
conjunction with threads, but that's about what THREAD_SERIALIZED is about 
<br>
IMO.
<br>
<p><span class="quotelev1">&gt; And, regrettably,
</span><br>
<span class="quotelev1">&gt; given modern approaches to building software and the **** configure
</span><br>
<span class="quotelev1">&gt; design, configure is where the test has to go.
</span><br>
configure is where the tests is. And configure indeed returns &quot;We have 
<br>
threads&quot; (OMPI_HAVE_THREADS = 1). And given this, I don't see why we 
<br>
wouldn't be MPI_THREAD_SERIALIZED. At least MPI_THREAD_FUNELLED.
<br>
<p><span class="quotelev1">&gt; On some systems, there are certain actions that require thread affinity
</span><br>
<span class="quotelev1">&gt; (sometimes including I/O, and often undocumented).  zOS is one, but I
</span><br>
<span class="quotelev1">&gt; have seen it under a few Unices, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On others, they use a completely different (and seriously incompatible,
</span><br>
<span class="quotelev1">&gt; at both the syntactic and semantic levels) set of libraries.  E.g. AIX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If we use OpenMP with MPI, we need at least MPI_THREAD_FUNNELED even
</span><br>
<span class="quotelev2">&gt;&gt; if MPI functions are called only outside of omp parallel region,
</span><br>
<span class="quotelev2">&gt;&gt; like below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    #pragma omp parallel for
</span><br>
<span class="quotelev2">&gt;&gt;    for (...) {
</span><br>
<span class="quotelev2">&gt;&gt;        /* computation */
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Allreduce(...);
</span><br>
<span class="quotelev2">&gt;&gt;    #pragma omp parallel for
</span><br>
<span class="quotelev2">&gt;&gt;    for (...) {
</span><br>
<span class="quotelev2">&gt;&gt;        /* computation */
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think that's correct.  That would call MPI_Allreduce once for
</span><br>
<span class="quotelev1">&gt; each thread, in parallel, on the same process - which wouldn't work.
</span><br>
I think the idea is precisely _not_ to call MPI_Allreduce within parallel 
<br>
sections, i.e. only have the master thread call MPI.
<br>
<p><span class="quotelev2">&gt;&gt; This means Open MPI users must specify --enable-mpi-threads or
</span><br>
<span class="quotelev2">&gt;&gt; --enable-progress-threads to use OpenMP. Is it true?
</span><br>
<span class="quotelev2">&gt;&gt; But this two configure options, i.e. OMPI_HAVE_THREAD_SUPPORT macro,
</span><br>
<span class="quotelev2">&gt;&gt; lead to performance penalty by mutex lock/unlock.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's unavoidable, in general, with one niggle.  If the programmer
</span><br>
<span class="quotelev1">&gt; guarantees BOTH to call MPI on the global master thread AND to ensure
</span><br>
<span class="quotelev1">&gt; that all memory is synchronised before it does so, there is no need
</span><br>
<span class="quotelev1">&gt; for mutexes. The MPI specification lacks some of the necessary
</span><br>
<span class="quotelev1">&gt; paranoia in this respect.
</span><br>
In my understanding of MPI_THREAD_SERIALIZED, the memory coherency was 
<br>
guaranteed. If not, the programmer has to ensure it.
<br>
<p><span class="quotelev2">&gt;&gt; I believe OMPI_HAVE_THREADS (not OMPI_HAVE_THREAD_SUPPORT !) is sufficient
</span><br>
<span class="quotelev2">&gt;&gt; to support MPI_THREAD_FUNNELED and MPI_THREAD_SERIALIZED, and therefore
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_HAVE_THREAD_SUPPORT should be OMPI_HAVE_THREADS at following
</span><br>
<span class="quotelev2">&gt;&gt; part in ompi_mpi_init function, as suggested by Sylvain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't comment on that, though I doubt it's quite that simple.  There's
</span><br>
<span class="quotelev1">&gt; a big difference between MPI_THREAD_FUNNELED and MPI_THREAD_SERIALIZED
</span><br>
<span class="quotelev1">&gt; in implementation impact.
</span><br>
I don't see the relationship between THREAD_SERIALIZED/FUNNELED and 
<br>
OMPI_HAVE_THREAD_SUPPORT. Actually, OMPI_HAVE_THREAD_SUPPORT seems to have 
<br>
no relationship with how the OS supports threads (that's why I think it is 
<br>
misleading).
<br>
<p>But I don't see a big difference between THREAD_SERIALIZED and 
<br>
THREAD_FUNNELED anyway. Do you have more information on systems where the 
<br>
caller thread id makes a difference in MPI ?
<br>
<p>Just for the record, we (at Bull) patched our MPI library and had no 
<br>
problem so far with applications using MPI + Threads or MPI + OpenMP, 
<br>
given that they don't call MPI within parallel sections. But of course, we 
<br>
only use linux, so your mileage may vary.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7903.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7904.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7904.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
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
