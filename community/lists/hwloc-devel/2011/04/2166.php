<?
$subject_val = "Re: [hwloc-devel] compiler warnings in 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 13:18:48 2011" -->
<!-- isoreceived="20110427171848" -->
<!-- sent="Wed, 27 Apr 2011 13:18:43 -0400" -->
<!-- isosent="20110427171843" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] compiler warnings in 1.2" -->
<!-- id="921167CF-97A1-4558-BBEC-606FD01EDD6D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110427162102.GR8424_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] compiler warnings in 1.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-27 13:18:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2167.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Previous message:</strong> <a href="2165.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>In reply to:</strong> <a href="2165.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2167.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2011, at 12:21 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; topology-x86.c: In function ?\200\230summarize?\200\231:
</span><br>
<span class="quotelev2">&gt;&gt; topology-x86.c:273:21: warning: ?\200\230one?\200\231 may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; topology-x86.c: In function ?\200\230look_proc?\200\231:
</span><br>
<span class="quotelev2">&gt;&gt; topology-x86.c:222:61: warning: ?\200\230apic_id?\200\231 may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's odd that I haven't seen those in my tests.  I guess we don't
</span><br>
<span class="quotelev1">&gt; automatically add -O2?
</span><br>
<p>OMPI automatically adds annoying flags like -pedantic to developer builds.
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
<li><strong>Next message:</strong> <a href="2167.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Previous message:</strong> <a href="2165.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>In reply to:</strong> <a href="2165.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2167.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
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
