<?
$subject_val = "Re: [OMPI devel] Thread safety levels";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 08:01:29 2010" -->
<!-- isoreceived="20100510120129" -->
<!-- sent="Mon, 10 May 2010 21:01:20 +0900" -->
<!-- isosent="20100510120120" -->
<!-- name="Kawashima" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Thread safety levels" -->
<!-- id="87y6fskltb.wl%t-kawashima_at_jp.fujitsu.com" -->
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
<strong>From:</strong> Kawashima (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 08:01:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7904.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7902.php">Sylvain Jeaugey: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7905.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7905.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Nick,
<br>
<p><span class="quotelev2">&gt; &gt;Though Sylvain's original mail (*1) was sent 4 months ago and nobody
</span><br>
<span class="quotelev2">&gt; &gt;replied to it, I'm interested in this issue and strongly agree with
</span><br>
<span class="quotelev2">&gt; &gt;Sylvain.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *1 <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7275.php">http://www.open-mpi.org/community/lists/devel/2010/01/7275.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;As explained by Sylvain, current Open MPI implementation always returns
</span><br>
<span class="quotelev2">&gt; &gt;MPI_THREAD_SINGLE as provided thread level if neither --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt; &gt;nor --enable-progress-threads was specified at configure (v1.4).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can explain that, from an outside viewpoint.  I can't tell you why
</span><br>
<span class="quotelev1">&gt; OpenMPI took that decision, but I can guess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is definitely the correct action.  Unless an application or library
</span><br>
<span class="quotelev1">&gt; has been built with thread support, or can guaranteed to be called only
</span><br>
<span class="quotelev1">&gt; from a single thread, using threads is catastrophic.  And, regrettably,
</span><br>
<span class="quotelev1">&gt; given modern approaches to building software and the **** configure
</span><br>
<span class="quotelev1">&gt; design, configure is where the test has to go.
</span><br>
<p>What &quot;with thread support&quot; means?
<br>
It means configure --enable-mpi-threads ?
<br>
<p>As long as MPI library returns MPI_THREAD_FUNNELED for MPI_Init_thread
<br>
and MPI application follows it, MPI functions are guaranteed to be called
<br>
only from a single thread. I think it's enough for MPI_THREAD_FUNNELED.
<br>
Of course, it's not enough for MPI_THREAD_MULTIPLE.
<br>
<p>Ah, &quot;library&quot; in your mail means libc or something other than MPI library?
<br>
If so, it makes sense.
<br>
Because MPI_THREAD_FUNNELED/SERIALIZED doesn't restrict other threads to
<br>
call functions other than those of MPI library, code bellow are not
<br>
thread safe if malloc is not thread safe and MPI_Allreduce calls malloc.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;#pragma omp parallel for private(is_master)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Is_thread_main(&amp;is_master);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (is_master == 0) {   /* master thread */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Allreduce(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {                /* other threads */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* work that calls malloc */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
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
<p>Sorry, I don't know these issue well.
<br>
Do you mean the case I wrote above about malloc?
<br>
<p><span class="quotelev2">&gt; &gt;If we use OpenMP with MPI, we need at least MPI_THREAD_FUNNELED even
</span><br>
<span class="quotelev2">&gt; &gt;if MPI functions are called only outside of omp parallel region,
</span><br>
<span class="quotelev2">&gt; &gt;like below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    #pragma omp parallel for
</span><br>
<span class="quotelev2">&gt; &gt;    for (...) {
</span><br>
<span class="quotelev2">&gt; &gt;        /* computation */
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Allreduce(...);
</span><br>
<span class="quotelev2">&gt; &gt;    #pragma omp parallel for
</span><br>
<span class="quotelev2">&gt; &gt;    for (...) {
</span><br>
<span class="quotelev2">&gt; &gt;        /* computation */
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think that's correct.  That would call MPI_Allreduce once for
</span><br>
<span class="quotelev1">&gt; each thread, in parallel, on the same process - which wouldn't work.
</span><br>
<span class="quotelev1">&gt; I think that what you need is a primitive that OpenMP doesn't have (in
</span><br>
<span class="quotelev1">&gt; general), which is a GLOBAL_MASTER construct.  What you have to do is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Each process finds its initial (system) thread id on entry.
</span><br>
<span class="quotelev1">&gt;     You test the system thread and call MPI only if on that one.
</span><br>
<p>In C, omp parallel region ends with for-block.
<br>
So I think that would call MPI_Allreduce once per process.
<br>
# In Fortran, it may require omp end parallel directive to end parallel
<br>
# region. But I don't know Fortran well, sorry.
<br>
<p><span class="quotelev2">&gt; &gt;This means Open MPI users must specify --enable-mpi-threads or
</span><br>
<span class="quotelev2">&gt; &gt;--enable-progress-threads to use OpenMP. Is it true?
</span><br>
<span class="quotelev2">&gt; &gt;But this two configure options, i.e. OMPI_HAVE_THREAD_SUPPORT macro,
</span><br>
<span class="quotelev2">&gt; &gt;lead to performance penalty by mutex lock/unlock.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's unavoidable, in general, with one niggle.  If the programmer
</span><br>
<span class="quotelev1">&gt; guarantees BOTH to call MPI on the global master thread AND to ensure
</span><br>
<span class="quotelev1">&gt; that all memory is synchronised before it does so, there is no need
</span><br>
<span class="quotelev1">&gt; for mutexes.  The MPI specification lacks some of the necessary
</span><br>
<span class="quotelev1">&gt; paranoia in this respect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;I believe OMPI_HAVE_THREADS (not OMPI_HAVE_THREAD_SUPPORT !) is sufficient
</span><br>
<span class="quotelev2">&gt; &gt;to support MPI_THREAD_FUNNELED and MPI_THREAD_SERIALIZED, and therefore
</span><br>
<span class="quotelev2">&gt; &gt;OMPI_HAVE_THREAD_SUPPORT should be OMPI_HAVE_THREADS at following
</span><br>
<span class="quotelev2">&gt; &gt;part in ompi_mpi_init function, as suggested by Sylvain.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't comment on that, though I doubt it's quite that simple.  There's
</span><br>
<span class="quotelev1">&gt; a big difference between MPI_THREAD_FUNNELED and MPI_THREAD_SERIALIZED
</span><br>
<span class="quotelev1">&gt; in implementation impact.
</span><br>
<p>I can't imagine difference between those two, unless MPI library uses
<br>
something thread local. Ah, there may be something on OSes that I don't
<br>
know....
<br>
<p>Anyway, thanks for your comment!
<br>
<p>Regards,
<br>
Kawashima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7904.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7902.php">Sylvain Jeaugey: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7905.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7905.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
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
