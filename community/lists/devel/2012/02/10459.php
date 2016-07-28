<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 10:58:02 2012" -->
<!-- isoreceived="20120216155802" -->
<!-- sent="Thu, 16 Feb 2012 16:57:56 +0100" -->
<!-- isosent="20120216155756" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201202161657.57097.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7C40621B-FB35-412C-85C0-68B98DC10576_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] poor btl sm latency<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 10:57:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10460.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10458.php">Edgar Gabriel: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10457.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10458.php">Edgar Gabriel: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 16 February 2012 16:50:55 Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 16, 2012, at 10:30 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 2 --bind-to-core --cpus-per-proc 2 hwloc-bind --get
</span><br>
<span class="quotelev2">&gt; &gt; 0x00000003
</span><br>
<span class="quotelev2">&gt; &gt; 0x0000000c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That seems right.  From your prior email, 3 maps to 11 binary, which maps
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Socket L#0 (16GB)
</span><br>
<span class="quotelev1">&gt;    NUMANode L#0 (P#0 8190MB) + L3 L#0 (6144KB)
</span><br>
<span class="quotelev1">&gt;      L2 L#0 (2048KB) + L1 L#0 (16KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;      L2 L#1 (2048KB) + L1 L#1 (16KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And c maps to 1100 binary, which maps to PU's P#2 and P#3 on the same
</span><br>
<span class="quotelev1">&gt; socket:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Socket L#0 (16GB)
</span><br>
<span class="quotelev1">&gt;    NUMANode L#0 (P#0 8190MB) + L3 L#0 (6144KB)
</span><br>
<span class="quotelev1">&gt;      L2 L#2 (2048KB) + L1 L#2 (16KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;      L2 L#3 (2048KB) + L1 L#3 (16KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me ask two more dumb questions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Run &quot;ompi_info | grep debug&quot;.  All the debugging is set to &quot;no&quot;, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes: 
<br>
$ ompi_info | grep debug
<br>
Internal debug support: no
<br>
Memory debugging support: no
<br>
<p><span class="quotelev1">&gt; 2. Your /tmp is not a network filesystem, is it?  (i.e., is OMPI putting
</span><br>
<span class="quotelev1">&gt; the shared memory backing files on NFS?)  I *think* you said in a prior
</span><br>
<span class="quotelev1">&gt; mail that you tried all the shared memory methods and got the same results
</span><br>
<span class="quotelev1">&gt; (i.e., not just mmap), right?
</span><br>
<p>Yes, in addition to mmap on /tmp and /dev/shm I tried sysv and posix and I got 
<br>
the same results.
<br>
<p>Matthias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10460.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10458.php">Edgar Gabriel: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10457.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10458.php">Edgar Gabriel: "Re: [OMPI devel] poor btl sm latency"</a>
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
