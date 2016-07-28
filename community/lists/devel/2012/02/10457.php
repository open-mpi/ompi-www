<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 10:51:00 2012" -->
<!-- isoreceived="20120216155100" -->
<!-- sent="Thu, 16 Feb 2012 10:50:55 -0500" -->
<!-- isosent="20120216155055" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="7C40621B-FB35-412C-85C0-68B98DC10576_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201202161630.40957.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 10:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10458.php">Edgar Gabriel: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10456.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10456.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10459.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10459.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 16, 2012, at 10:30 AM, Matthias Jurenz wrote:
<br>
<p><span class="quotelev1">&gt; $ mpirun -np 2 --bind-to-core --cpus-per-proc 2 hwloc-bind --get
</span><br>
<span class="quotelev1">&gt; 0x00000003
</span><br>
<span class="quotelev1">&gt; 0x0000000c
</span><br>
<p>That seems right.  From your prior email, 3 maps to 11 binary, which maps to:
<br>
<p>&nbsp;Socket L#0 (16GB)
<br>
&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0 8190MB) + L3 L#0 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (2048KB) + L1 L#0 (16KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (2048KB) + L1 L#1 (16KB) + Core L#1 + PU L#1 (P#1)
<br>
<p>And c maps to 1100 binary, which maps to PU's P#2 and P#3 on the same socket:
<br>
<p>&nbsp;Socket L#0 (16GB)
<br>
&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0 8190MB) + L3 L#0 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (2048KB) + L1 L#2 (16KB) + Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (2048KB) + L1 L#3 (16KB) + Core L#3 + PU L#3 (P#3)
<br>
<p>Let me ask two more dumb questions:
<br>
<p>1. Run &quot;ompi_info | grep debug&quot;.  All the debugging is set to &quot;no&quot;, right?
<br>
<p>2. Your /tmp is not a network filesystem, is it?  (i.e., is OMPI putting the shared memory backing files on NFS?)  I *think* you said in a prior mail that you tried all the shared memory methods and got the same results (i.e., not just mmap), right?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10458.php">Edgar Gabriel: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10456.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10456.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10459.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10459.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
