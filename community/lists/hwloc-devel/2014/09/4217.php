<?
$subject_val = "Re: [hwloc-devel] Interesting warning";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 11:15:56 2014" -->
<!-- isoreceived="20140912151556" -->
<!-- sent="Fri, 12 Sep 2014 08:13:13 -0700" -->
<!-- isosent="20140912151313" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Interesting warning" -->
<!-- id="0507060C-149E-4333-A3C1-16AE3552AEDB_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20140912083023.GE3110_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Interesting warning<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-12 11:13:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4218.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-213-gb15d76c)"</a>
<li><strong>Previous message:</strong> <a href="4216.php">Jeff Squyres (jsquyres): "[hwloc-devel] hwloc now 100% at Github"</a>
<li><strong>In reply to:</strong> <a href="4212.php">Samuel Thibault: "Re: [hwloc-devel] Interesting warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep, that worked!
<br>
<p>On Sep 12, 2014, at 1:30 AM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain, le Wed 10 Sep 2014 17:41:17 -0700, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Just got this from Clang 3.4.2 on Linux x86-64:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In file included from topology-x86.c:23:
</span><br>
<span class="quotelev2">&gt;&gt; /home/common/openmpi/svn-trunk/opal/mca/hwloc/hwloc191/hwloc/include/private/
</span><br>
<span class="quotelev2">&gt;&gt; cpuid-x86.h:67:3: warning: extension used [-Wlanguage-extension-token]
</span><br>
<span class="quotelev2">&gt;&gt;  asm(
</span><br>
<span class="quotelev2">&gt;&gt;  ^
</span><br>
<span class="quotelev2">&gt;&gt; 1 warning generated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Guess it doesn't like that assembler in there
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you try the attached patch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; &lt;patch.txt&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4218.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-213-gb15d76c)"</a>
<li><strong>Previous message:</strong> <a href="4216.php">Jeff Squyres (jsquyres): "[hwloc-devel] hwloc now 100% at Github"</a>
<li><strong>In reply to:</strong> <a href="4212.php">Samuel Thibault: "Re: [hwloc-devel] Interesting warning"</a>
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
