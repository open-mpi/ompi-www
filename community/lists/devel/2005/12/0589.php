<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 10:33:36 2005" -->
<!-- isoreceived="20051206153336" -->
<!-- sent="Tue, 06 Dec 2005 08:33:32 -0700" -->
<!-- isosent="20051206153332" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  [PATH] ompi_info doesn't show use_mem_hooks flag" -->
<!-- id="4395AF4C.9090209_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20051206152004.GC19290_at_minantech.com" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-06 10:33:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0590.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0588.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="0588.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0590.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0590.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gleb,
<br>
<p>Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Mon, Dec 05, 2005 at 10:23:14AM -0700, Galen M. Shipman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Also there is a code commented out that enables memory hooks if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;leave_pinned is set. Why this code is disabled? Infiniband will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;not work correctly in such setup.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;There is still some debate about what will be the default behavior with 
</span><br>
<span class="quotelev2">&gt;&gt;the leave_pinned option but we should have something in the trunk soon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you explain to me what is the concern? Infiniband will not function
</span><br>
<span class="quotelev1">&gt; properly otherwise (can be easely demonstrated). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Agred - we will make this the default on the release branch.
<br>
<p><span class="quotelev1">&gt; Also memfree hooks decrease cache efficiency, the better solution would
</span><br>
<span class="quotelev1">&gt; be to catch brk() system calls and remove memory from cache only then,
</span><br>
<span class="quotelev1">&gt; but there is no way to do it for now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>We are look at other options, including catching brk/munmap system calls, and
<br>
will be experimenting w/ these on the trunk.
<br>
<p>Thanks,
<br>
Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0590.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0588.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="0588.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0590.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0590.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
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
