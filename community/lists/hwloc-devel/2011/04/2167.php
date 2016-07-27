<?
$subject_val = "Re: [hwloc-devel] compiler warnings in 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 13:25:19 2011" -->
<!-- isoreceived="20110427172519" -->
<!-- sent="Wed, 27 Apr 2011 19:25:05 +0200" -->
<!-- isosent="20110427172505" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] compiler warnings in 1.2" -->
<!-- id="20110427172505.GB4900_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1736634335.754074.1303924749024.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-04-27 13:25:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2168.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3481)"</a>
<li><strong>Previous message:</strong> <a href="2166.php">Jeff Squyres: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="2164.php">Jeff Squyres: "[hwloc-devel] compiler warnings in 1.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 27 Apr 2011 19:19:09 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Apr 27, 2011, at 12:21 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; topology-x86.c: In function ?\200\230summarize?\200\231:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; topology-x86.c:273:21: warning: ?\200\230one?\200\231 may be used uninitialized in this function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; topology-x86.c: In function ?\200\230look_proc?\200\231:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; topology-x86.c:222:61: warning: ?\200\230apic_id?\200\231 may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It's odd that I haven't seen those in my tests.  I guess we don't
</span><br>
<span class="quotelev2">&gt; &gt; automatically add -O2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI automatically adds annoying flags like -pedantic to developer builds.
</span><br>
<p>These warnings come from -Wall. But they are often not detected by the
<br>
compiler when -O2 is not given.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2168.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3481)"</a>
<li><strong>Previous message:</strong> <a href="2166.php">Jeff Squyres: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="2164.php">Jeff Squyres: "[hwloc-devel] compiler warnings in 1.2"</a>
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
