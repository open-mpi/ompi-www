<?
$subject_val = "Re: [OMPI devel] RFC: remove --disable-smp-locks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 02:15:39 2016" -->
<!-- isoreceived="20160712061539" -->
<!-- sent="Tue, 12 Jul 2016 00:15:26 -0600" -->
<!-- isosent="20160712061526" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove --disable-smp-locks" -->
<!-- id="4928128C-FE19-4FEE-9D6C-409CFACB7043_at_me.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3527b4c492bf9fcd18ff2f69f6bfa546_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: remove --disable-smp-locks<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 02:15:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19180.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="19178.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>In reply to:</strong> <a href="19178.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19180.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jul 12, 2016, at 12:01 AM, Sreenidhi Bharathkar Ramesh &lt;sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ query regarding an old thread ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like &quot;--disable-smp-locks&quot; is still available as an option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Will this be continued or deprecated ?
</span><br>
<p>It was completely discontinued. The problem with the option is it made the opal_atomic_* functions non-atomic (on x86 at least). That is fine if there is only a single core in use on a node but caused problems with shared memory communication. The shared memory transports absolutely need the atomics to be atomic to work correctly. This RFC came up because users were trying to use the option and were running into issues. Made sense to just kill it.
<br>
<p><span class="quotelev1">&gt; 2. Under what circumstances would &quot;--disable-smp-locks&quot; be useful ?
</span><br>
<span class="quotelev1">&gt; In our experiments on ARM64 platform, it was seen that OSU Micro collective
</span><br>
<span class="quotelev1">&gt; benchmarks actually degraded when &quot;--disable-smp-locks&quot; was used.  Hence,
</span><br>
<span class="quotelev1">&gt; asking.
</span><br>
<p>The optimization was likely meant for MPI_THREAD_SINGLE. The problem is we already optimize that case with the OPAL_THREAD_* macros which use atomics only if threads are in use. Others may be able to explain the intent.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19180.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="19178.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>In reply to:</strong> <a href="19178.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19180.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
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
