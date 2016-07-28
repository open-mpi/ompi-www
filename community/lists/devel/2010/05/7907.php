<?
$subject_val = "Re: [OMPI devel] Thread safety levels";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 10:34:44 2010" -->
<!-- isoreceived="20100510143444" -->
<!-- sent="Mon, 10 May 2010 07:35:23 -0700" -->
<!-- isosent="20100510143523" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Thread safety levels" -->
<!-- id="4BE819AB.80709_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 10:35:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7908.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7906.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
N.M. Maclaren wrote:
<br>
<p><span class="quotelev2">&gt;&gt; On May 10 2010, Kawashima wrote: 
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
<p>Just a minor nit:  The code above calls MPI_Allreduce outside of 
<br>
parallel regions rather than specifying that each OMP thread should make 
<br>
the call in parallel.  But, don't let that nit be a distraction from the 
<br>
rest of the e-mail conversation.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7908.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7906.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
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
