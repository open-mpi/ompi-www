<?
$subject_val = "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 16:14:33 2015" -->
<!-- isoreceived="20150325201433" -->
<!-- sent="Wed, 25 Mar 2015 21:14:31 +0100" -->
<!-- isosent="20150325201431" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Lhwloc1 duplicate symbol issue" -->
<!-- id="55131727.5060606_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="173CB330-B2BF-4BAE-AF1F-CF54D8733920_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Lhwloc1 duplicate symbol issue<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 16:14:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4412.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<li><strong>Previous message:</strong> <a href="4410.php">Jeff Squyres (jsquyres): "[hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<li><strong>In reply to:</strong> <a href="4410.php">Jeff Squyres (jsquyres): "[hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4412.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<li><strong>Reply:</strong> <a href="4412.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/03/2015 21:00, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; This has come up in multiple scenarios recently: when compiling OMPI (which contains hwloc 1.9.1), you get a linker error complaining about a duplicate symbol &quot;Lhwloc1&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter (CC'ed) was looking into this, but it came up again today with Nathan (also CC'ed).  He did some experiments with hwloc itself (outside of OMPI) before Peter was able to, and determined the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - gcc 5.0 on OS X Yosemitie, compiling with -m32
</span><br>
<span class="quotelev1">&gt; - hwloc-1.9.1 tag in git: compile fails with Lhwloc1 dup symbol
</span><br>
<span class="quotelev1">&gt; - hwloc-1.10 tag in git: works fine
</span><br>
<span class="quotelev1">&gt; - master tag in git: works fine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is: have you see this Lhwloc1 dup symbol issue before?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask because on OMPI master, we can just upgrade to hwloc 1.10.  But in OMPI v1.8.x, it's less attractive to upgrade -- it would be cool if there was a simple fix that we could backport/patch the hwloc 1.9.1 in OMPI 1.8.x with the fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Looks like I missed something in the OMPI discussion:
<br>
When you say symbol, do you mean asm label?
<br>
include/private/cpuid-x86.h: Assembler messages:
<br>
include/private/cpuid-x86.h:40: Error: symbol `Lhwloc1' is already defined
<br>
Like in the mail included at the end of
<br>
<a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1119.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1119.php</a>
<br>
<p>This is fixed by
<br>
<a href="https://github.com/open-mpi/hwloc/commit/790aa2e1e62be6b4f37622959de9ce3766ebc57e">https://github.com/open-mpi/hwloc/commit/790aa2e1e62be6b4f37622959de9ce3766ebc57e</a>
<br>
(applied to all stable branches 4 month ago)
<br>
<p>This is actually one of the reason why OMPI upgraded to hwloc v1.9. But
<br>
I thought they were going to upgrade to hwloc v1.9 git HEAD, while they
<br>
only went to v1.9.1, which does not contain this fix.
<br>
<p>There's a stable release/branch issue here. hwloc updates stable
<br>
*branches* up to what OMPI uses (hwloc v1.8), but usually we only
<br>
publish stable *releases* on the last stable branch (v1.10). We need to
<br>
clarify if OMPI wants official hwloc releases only, or if applying
<br>
(possibly many) hwloc patches is OK.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4412.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<li><strong>Previous message:</strong> <a href="4410.php">Jeff Squyres (jsquyres): "[hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<li><strong>In reply to:</strong> <a href="4410.php">Jeff Squyres (jsquyres): "[hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4412.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<li><strong>Reply:</strong> <a href="4412.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
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
