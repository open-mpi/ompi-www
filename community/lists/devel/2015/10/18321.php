<?
$subject_val = "Re: [OMPI devel] Please test: v1.10.1rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 01:21:15 2015" -->
<!-- isoreceived="20151030052115" -->
<!-- sent="Fri, 30 Oct 2015 05:21:04 +0000" -->
<!-- isosent="20151030052104" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Please test: v1.10.1rc3" -->
<!-- id="20151030142104.e0837eed0d252391af825a6f_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="CAAvDA14sJSKkw+Cmp1tsa=3NWUfJFfjY03213GMbSWnjYN4odQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Please test: v1.10.1rc3<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 01:21:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18322.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18320.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18319.php">Paul Hargrove: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18316.php">Orion Poplawski: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
`configure &amp;&amp; make &amp;&amp; make install &amp;&amp; make check` and
<br>
running some sample MPI programs succeeded with 1.10.1rc3
<br>
on my SPARC-V9/Linux/GCC machine (Fujitsu PRIMEHPC FX10).
<br>
<p>No @SET_MAKE@ appears in any Makefiles, of course.
<br>
<p><span class="quotelev2">&gt; &gt; For the first time I was also able to (attempt to) test SPARC64 via QEMU.
</span><br>
<span class="quotelev2">&gt; &gt; I have a &quot;very odd&quot; failure on this system in which &quot;@SET_MAKE@&quot; appears
</span><br>
<span class="quotelev2">&gt; &gt; un-expanded in several generated Makefiles.
</span><br>
<span class="quotelev2">&gt; &gt; For that reason the testing on this platform did not finish.
</span><br>
<span class="quotelev2">&gt; &gt; I am still investigating, but currently am assuming this is some issue
</span><br>
<span class="quotelev2">&gt; &gt; like sed crashing (due to bad emulation?) rather than anything in Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each time I run config.status in the build directory, a *different* set of
</span><br>
<span class="quotelev1">&gt; random Makefiles end up with unexpanded instances of &quot;@SET_MAKE@&quot;.
</span><br>
<span class="quotelev1">&gt; I don't know what other configure substitutions might be passing through
</span><br>
<span class="quotelev1">&gt; unexpanded.
</span><br>
<span class="quotelev1">&gt; Anyway, I cannot conceive of any way in which this behavior could be Open
</span><br>
<span class="quotelev1">&gt; MPI's fault.
</span><br>
<span class="quotelev1">&gt; So I am going to discard the emulated SPARC64 system as grossly unreliable.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18322.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18320.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18319.php">Paul Hargrove: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18316.php">Orion Poplawski: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
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
