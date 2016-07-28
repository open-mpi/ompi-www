<?
$subject_val = "Re: [hwloc-devel] compiler warnings in 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 12:21:08 2011" -->
<!-- isoreceived="20110427162108" -->
<!-- sent="Wed, 27 Apr 2011 18:21:02 +0200" -->
<!-- isosent="20110427162102" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] compiler warnings in 1.2" -->
<!-- id="20110427162102.GR8424_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="744166570.753086.1303919377757.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-27 12:21:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2166.php">Jeff Squyres: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Previous message:</strong> <a href="2164.php">Jeff Squyres: "[hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="2164.php">Jeff Squyres: "[hwloc-devel] compiler warnings in 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2166.php">Jeff Squyres: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Reply:</strong> <a href="2166.php">Jeff Squyres: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 27 Apr 2011 17:49:37 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; topology-x86.c: In function ?\200\230summarize?\200\231:
</span><br>
<span class="quotelev1">&gt; topology-x86.c:273:21: warning: ?\200\230one?\200\231 may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; topology-x86.c: In function ?\200\230look_proc?\200\231:
</span><br>
<span class="quotelev1">&gt; topology-x86.c:222:61: warning: ?\200\230apic_id?\200\231 may be used uninitialized in this function
</span><br>
<p>It's odd that I haven't seen those in my tests.  I guess we don't
<br>
automatically add -O2?
<br>
<p><span class="quotelev1">&gt; It's not immediately obvious to me what you want to do if these values are not initialized.
</span><br>
<p>Actually it's &quot;can't happen&quot; cases: there should be no processor at all
<br>
for the first one, and the processor cpuid information has to suddenly
<br>
stop providing cache information for the second one.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2166.php">Jeff Squyres: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Previous message:</strong> <a href="2164.php">Jeff Squyres: "[hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="2164.php">Jeff Squyres: "[hwloc-devel] compiler warnings in 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2166.php">Jeff Squyres: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Reply:</strong> <a href="2166.php">Jeff Squyres: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
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
