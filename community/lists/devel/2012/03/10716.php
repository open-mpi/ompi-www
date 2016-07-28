<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 12:10:38 2012" -->
<!-- isoreceived="20120315161038" -->
<!-- sent="Thu, 15 Mar 2012 09:10:33 -0700" -->
<!-- isosent="20120315161033" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="60285FE7-630C-4CFB-951A-FC1533405E7F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201203151606.32636.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 12:10:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10717.php">Nathan Hjelm: "[OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Previous message:</strong> <a href="10715.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10715.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10721.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10721.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 15, 2012, at 8:06 AM, Matthias Jurenz wrote:
<br>
<p><span class="quotelev1">&gt; We made a big step forward today!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The used Kernel has a bug regarding to the shared L1 instruction cache in AMD 
</span><br>
<span class="quotelev1">&gt; Bulldozer processors:
</span><br>
<span class="quotelev1">&gt; See 
</span><br>
<span class="quotelev1">&gt; <a href="http://git.kernel.org/?p=linux/kernel/git/torvalds/linux-2.6.git;a=commitdiff;h=dfb09f9b7ab03fd367740e541a5caf830ed56726">http://git.kernel.org/?p=linux/kernel/git/torvalds/linux-2.6.git;a=commitdiff;h=dfb09f9b7ab03fd367740e541a5caf830ed56726</a> 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; <a href="http://developer.amd.com/Assets/SharedL1InstructionCacheonAMD15hCPU.pdf">http://developer.amd.com/Assets/SharedL1InstructionCacheonAMD15hCPU.pdf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Until the Kernel is patched we disable the address-space layout randomization 
</span><br>
<span class="quotelev1">&gt; (ASLR) as described in the above PDF:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ sudo /sbin/sysctl -w kernel.randomize_va_space=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Therewith, NetPIPE results in ~0.5us latency when binding the processes for 
</span><br>
<span class="quotelev1">&gt; L2/L1I cache sharing (i.e. -bind-to-core).
</span><br>
<p>This is good!  I love it when the bug is not our fault.  :-)
<br>
<p><span class="quotelev1">&gt; However, when binding the processes for exclusive L2/L1I caches (i.e. -cpus-
</span><br>
<span class="quotelev1">&gt; per-proc 2) we still get ~1.1us latency. I don't think that the upcoming 
</span><br>
<span class="quotelev1">&gt; kernel patch will help for this kind of process binding...
</span><br>
<p>Does this kind of thing happen with Platform MPI, too?  I.e., is this another kernel issue, or an OMPI-specific issue?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10717.php">Nathan Hjelm: "[OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Previous message:</strong> <a href="10715.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10715.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10721.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10721.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
