<?
$subject_val = "Re: [hwloc-devel] Interesting warning";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 04:30:24 2014" -->
<!-- isoreceived="20140912083024" -->
<!-- sent="Fri, 12 Sep 2014 10:30:23 +0200" -->
<!-- isosent="20140912083023" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Interesting warning" -->
<!-- id="20140912083023.GE3110_at_type.bordeaux.inria.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B216DC1C-2D8B-48D3-A2CA-D1340ABB2EDA_at_open-mpi.org" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-12 04:30:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4213.php">Jeff Squyres (jsquyres): "[hwloc-devel] Migrate Trac tickets -&gt; Github issues"</a>
<li><strong>Previous message:</strong> <a href="4211.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-211-gddefb2f)"</a>
<li><strong>In reply to:</strong> <a href="4210.php">Ralph Castain: "[hwloc-devel] Interesting warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4217.php">Ralph Castain: "Re: [hwloc-devel] Interesting warning"</a>
<li><strong>Reply:</strong> <a href="4217.php">Ralph Castain: "Re: [hwloc-devel] Interesting warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Ralph Castain, le Wed 10 Sep 2014 17:41:17 -0700, a &#233;crit :
<br>
<span class="quotelev1">&gt; Just got this from Clang 3.4.2 on Linux x86-64:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In file included from topology-x86.c:23:
</span><br>
<span class="quotelev1">&gt; /home/common/openmpi/svn-trunk/opal/mca/hwloc/hwloc191/hwloc/include/private/
</span><br>
<span class="quotelev1">&gt; cpuid-x86.h:67:3: warning: extension used [-Wlanguage-extension-token]
</span><br>
<span class="quotelev1">&gt;   asm(
</span><br>
<span class="quotelev1">&gt;   ^
</span><br>
<span class="quotelev1">&gt; 1 warning generated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guess it doesn't like that assembler in there
</span><br>
<p>Could you try the attached patch?
<br>
<p>Samuel
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4212/patch">patch</a>
</ul>
<!-- attachment="patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4213.php">Jeff Squyres (jsquyres): "[hwloc-devel] Migrate Trac tickets -&gt; Github issues"</a>
<li><strong>Previous message:</strong> <a href="4211.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-211-gddefb2f)"</a>
<li><strong>In reply to:</strong> <a href="4210.php">Ralph Castain: "[hwloc-devel] Interesting warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4217.php">Ralph Castain: "Re: [hwloc-devel] Interesting warning"</a>
<li><strong>Reply:</strong> <a href="4217.php">Ralph Castain: "Re: [hwloc-devel] Interesting warning"</a>
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
