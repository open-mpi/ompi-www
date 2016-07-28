<?
$subject_val = "Re: [OMPI devel] Thread safety levels";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 09:02:49 2010" -->
<!-- isoreceived="20100510130249" -->
<!-- sent="10 May 2010 14:02:32 +0100" -->
<!-- isosent="20100510130232" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Thread safety levels" -->
<!-- id="Prayer.1.3.2.1005101402320.24337_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87y6fskltb.wl%t-kawashima_at_jp.fujitsu.com" -->
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
<strong>Date:</strong> 2010-05-10 09:02:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7906.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7904.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7903.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7906.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7906.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 10 2010, Kawashima wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Because MPI_THREAD_FUNNELED/SERIALIZED doesn't restrict other threads to
</span><br>
<span class="quotelev1">&gt;call functions other than those of MPI library, code bellow are not
</span><br>
<span class="quotelev1">&gt;thread safe if malloc is not thread safe and MPI_Allreduce calls malloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #pragma omp parallel for private(is_master)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;        MPI_Is_thread_main(&amp;is_master);
</span><br>
<span class="quotelev1">&gt;        if (is_master == 0) {   /* master thread */
</span><br>
<span class="quotelev1">&gt;            MPI_Allreduce(...);
</span><br>
<span class="quotelev1">&gt;        } else {                /* other threads */
</span><br>
<span class="quotelev1">&gt;            /* work that calls malloc */
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<p>That's one case.  It also applies to ordinary memory accesses, where
<br>
they might use data that overlaps the MPI_Allreduce.  That's probably
<br>
impossible for the blocking MPI calls, but it isn't for the one-sided
<br>
communication ones, and probably not for the non-blocking ones.  Mixing
<br>
non-blocking (and, worse, one-sided communication) and threading is a
<br>
nightmare area.
<br>
<p><span class="quotelev2">&gt;&gt; On others, they use a completely different (and seriously incompatible,
</span><br>
<span class="quotelev2">&gt;&gt; at both the syntactic and semantic levels) set of libraries.  E.g. AIX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sorry, I don't know these issue well.
</span><br>
<span class="quotelev1">&gt;Do you mean the case I wrote above about malloc?
</span><br>
<p>No.  You have to compile using different paths if you want threading,
<br>
and that generated incompatible code (in a very few ways, but ones
<br>
that hit my users).
<br>
<p><span class="quotelev1">&gt;In C, omp parallel region ends with for-block.
</span><br>
<span class="quotelev1">&gt;So I think that would call MPI_Allreduce once per process.
</span><br>
<span class="quotelev1">&gt;# In Fortran, it may require omp end parallel directive to end parallel
</span><br>
<span class="quotelev1">&gt;# region. But I don't know Fortran well, sorry.
</span><br>
<p>You're right.  I had got myself confused - what I was saying is true
<br>
for Fortran coarrays but not OpenMP (in either C or fortran)!
<br>
<p><span class="quotelev2">&gt;&gt; I can't comment on that, though I doubt it's quite that simple.  There's
</span><br>
<span class="quotelev2">&gt;&gt; a big difference between MPI_THREAD_FUNNELED and MPI_THREAD_SERIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; in implementation impact.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I can't imagine difference between those two, unless MPI library uses
</span><br>
<span class="quotelev1">&gt;something thread local. Ah, there may be something on OSes that I don't
</span><br>
<span class="quotelev1">&gt;know....
</span><br>
<p>See my other message.  It's evil.  It's also rare, and I don't know how
<br>
widespread it is today.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7906.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7904.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7903.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7906.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7906.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
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
