<?
$subject_val = "Re: [OMPI devel] Thread safety levels";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 05:26:20 2010" -->
<!-- isoreceived="20100510092620" -->
<!-- sent="10 May 2010 10:26:15 +0100" -->
<!-- isosent="20100510092615" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Thread safety levels" -->
<!-- id="Prayer.1.3.2.1005101026150.32530_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="874oigmc85.wl%t-kawashima_at_jp.fujitsu.com" -->
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
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 05:26:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7902.php">Sylvain Jeaugey: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7900.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7900.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7902.php">Sylvain Jeaugey: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7902.php">Sylvain Jeaugey: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7903.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7907.php">Eugene Loh: "Re: [OMPI devel] Thread safety levels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;On May 10 2010, Kawashima wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Though Sylvain's original mail (*1) was sent 4 months ago and nobody
</span><br>
<span class="quotelev1">&gt;replied to it, I'm interested in this issue and strongly agree with
</span><br>
<span class="quotelev1">&gt;Sylvain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *1 <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7275.php">http://www.open-mpi.org/community/lists/devel/2010/01/7275.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As explained by Sylvain, current Open MPI implementation always returns
</span><br>
<span class="quotelev1">&gt;MPI_THREAD_SINGLE as provided thread level if neither --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;nor --enable-progress-threads was specified at configure (v1.4).
</span><br>
<p>I can explain that, from an outside viewpoint.  I can't tell you why
<br>
OpenMPI took that decision, but I can guess.
<br>
<p>That is definitely the correct action.  Unless an application or library
<br>
has been built with thread support, or can guaranteed to be called only
<br>
from a single thread, using threads is catastrophic.  And, regrettably,
<br>
given modern approaches to building software and the **** configure
<br>
design, configure is where the test has to go.
<br>
<p>On some systems, there are certain actions that require thread affinity
<br>
(sometimes including I/O, and often undocumented).  zOS is one, but I
<br>
have seen it under a few Unices, too.
<br>
<p>On others, they use a completely different (and seriously incompatible,
<br>
at both the syntactic and semantic levels) set of libraries.  E.g. AIX.
<br>
<p><span class="quotelev1">&gt;If we use OpenMP with MPI, we need at least MPI_THREAD_FUNNELED even
</span><br>
<span class="quotelev1">&gt;if MPI functions are called only outside of omp parallel region,
</span><br>
<span class="quotelev1">&gt;like below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #pragma omp parallel for
</span><br>
<span class="quotelev1">&gt;    for (...) {
</span><br>
<span class="quotelev1">&gt;        /* computation */
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI_Allreduce(...);
</span><br>
<span class="quotelev1">&gt;    #pragma omp parallel for
</span><br>
<span class="quotelev1">&gt;    for (...) {
</span><br>
<span class="quotelev1">&gt;        /* computation */
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<p>I don't think that's correct.  That would call MPI_Allreduce once for
<br>
each thread, in parallel, on the same process - which wouldn't work.
<br>
I think that what you need is a primitive that OpenMP doesn't have (in
<br>
general), which is a GLOBAL_MASTER construct.  What you have to do is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Each process finds its initial (system) thread id on entry.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;You test the system thread and call MPI only if on that one.
<br>
<p><span class="quotelev1">&gt;This means Open MPI users must specify --enable-mpi-threads or
</span><br>
<span class="quotelev1">&gt;--enable-progress-threads to use OpenMP. Is it true?
</span><br>
<span class="quotelev1">&gt;But this two configure options, i.e. OMPI_HAVE_THREAD_SUPPORT macro,
</span><br>
<span class="quotelev1">&gt;lead to performance penalty by mutex lock/unlock.
</span><br>
<p>That's unavoidable, in general, with one niggle.  If the programmer
<br>
guarantees BOTH to call MPI on the global master thread AND to ensure
<br>
that all memory is synchronised before it does so, there is no need
<br>
for mutexes.  The MPI specification lacks some of the necessary
<br>
paranoia in this respect.
<br>
<p><span class="quotelev1">&gt;I believe OMPI_HAVE_THREADS (not OMPI_HAVE_THREAD_SUPPORT !) is sufficient
</span><br>
<span class="quotelev1">&gt;to support MPI_THREAD_FUNNELED and MPI_THREAD_SERIALIZED, and therefore
</span><br>
<span class="quotelev1">&gt;OMPI_HAVE_THREAD_SUPPORT should be OMPI_HAVE_THREADS at following
</span><br>
<span class="quotelev1">&gt;part in ompi_mpi_init function, as suggested by Sylvain.
</span><br>
<p>I can't comment on that, though I doubt it's quite that simple.  There's
<br>
a big difference between MPI_THREAD_FUNNELED and MPI_THREAD_SERIALIZED
<br>
in implementation impact.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7902.php">Sylvain Jeaugey: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7900.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7900.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7902.php">Sylvain Jeaugey: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7902.php">Sylvain Jeaugey: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7903.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7907.php">Eugene Loh: "Re: [OMPI devel] Thread safety levels"</a>
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
