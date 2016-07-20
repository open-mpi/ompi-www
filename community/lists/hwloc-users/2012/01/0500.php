<?
$subject_val = "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  9 20:32:28 2012" -->
<!-- isoreceived="20120110013228" -->
<!-- sent="Mon, 9 Jan 2012 17:32:14 -0800" -->
<!-- isosent="20120110013214" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux" -->
<!-- id="AED5A7E3-7CBA-439B-8B63-7DAB0D5EAD1C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120110012557.GK4266_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-09 20:32:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0501.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows	and Linux"</a>
<li><strong>Previous message:</strong> <a href="0499.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0499.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0501.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows	and Linux"</a>
<li><strong>Reply:</strong> <a href="0501.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows	and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 9, 2012, at 5:25 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; However, when I specify the --enable-embedded-mode flag in configure in Linux,
</span><br>
<span class="quotelev2">&gt;&gt; no libraries are built at all - the specified prefix directory contains only
</span><br>
<span class="quotelev2">&gt;&gt; empty directories.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the library is built, it's just not installed because projects often
</span><br>
<span class="quotelev1">&gt; prefer to link the library in, or something similar. If you want to
</span><br>
<span class="quotelev1">&gt; install libhwloc.a, simply fetch it from src/.libs/
</span><br>
<p>To be clear: I think you're misunderstanding what --enable-embedded-mode is for.  Per Samuel's comment, I think you want --enable-static (and possibly --disable-shared).
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
<li><strong>Next message:</strong> <a href="0501.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows	and Linux"</a>
<li><strong>Previous message:</strong> <a href="0499.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0499.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0501.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows	and Linux"</a>
<li><strong>Reply:</strong> <a href="0501.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows	and Linux"</a>
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
