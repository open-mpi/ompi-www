<?
$subject_val = "Re: [hwloc-devel] roadmap";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 07:36:42 2010" -->
<!-- isoreceived="20100922113642" -->
<!-- sent="Wed, 22 Sep 2010 07:36:37 -0400" -->
<!-- isosent="20100922113637" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap" -->
<!-- id="E6740458-0123-4AEA-8583-1696AB3B0742_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C99C070.5070305_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] roadmap<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 07:36:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1335.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1333.php">Brice Goglin: "[hwloc-devel] roadmap"</a>
<li><strong>In reply to:</strong> <a href="1333.php">Brice Goglin: "[hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1335.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1335.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2010, at 4:38 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; There are still some problems to solve in the membind branch:
</span><br>
<span class="quotelev1">&gt; * Some OS bind the process too when you bind memory. I see the following
</span><br>
<span class="quotelev1">&gt; solutions:
</span><br>
<span class="quotelev1">&gt;  + Add a flag such as HWLOC_MEMBIND_EVEN_IF_FAR_FROM_PROCESS so that
</span><br>
<span class="quotelev1">&gt; the user can explicitly refuse memory binding if it may break process
</span><br>
<span class="quotelev1">&gt; binding
</span><br>
<span class="quotelev1">&gt;  + Drop hwloc_set_membind on these OSes and add a
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpumembind() to bind both
</span><br>
<span class="quotelev1">&gt;  + Make both process and memory binding do nothing if the STRICT flag
</span><br>
<span class="quotelev1">&gt; is given. But I'd rather not play too much with this flag.
</span><br>
<span class="quotelev1">&gt;  + Drop support for memory binding on these OS.
</span><br>
<span class="quotelev1">&gt;  + Drop these OS.
</span><br>
<p>What OS's are you specifically referring to?
<br>
<p>I think we should support memory binding, even if it does weird things -- i.e., dropping membinding support on a given OS shouldn't be an option.  How about adding a query function that says what will happen for hwloc_set_membind() -- bind the memory, or bind the memory + the process?  And/or have an &quot;atomic&quot;-like function that sets the memory binding and returns the process memory binding? 
<br>
<p>Just curious -- on these OS's, what happens if you:
<br>
<p>- bind proc to A
<br>
- bind memory to B (which then also re-binds proc to B)
<br>
- re-bind proc to A
<br>
<p>Is the memory binding then lost?
<br>
<p><span class="quotelev1">&gt; * cpuset and nodeset structures are the same, they are both manipulated
</span><br>
<span class="quotelev1">&gt; with hwloc_cpuset_foo functions. So maybe rename into hwloc_set_t and
</span><br>
<span class="quotelev1">&gt; hwloc_set_foo functions. With #define and aliases to not break API/ABIs.
</span><br>
<p>I'm in favor of this -- it would end the overloading of the term &quot;cpuset&quot; between hwloc and cpuset.
<br>
<p>It would be good to put a sunset date or version on when hwloc_cpuset_foo will expire (e.g., 6 months from now or two major revisions form now [1.3] -- whichever comes last...?).  I'd also prefer a typedef than a #define for types (vs. a #define).
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
<li><strong>Next message:</strong> <a href="1335.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1333.php">Brice Goglin: "[hwloc-devel] roadmap"</a>
<li><strong>In reply to:</strong> <a href="1333.php">Brice Goglin: "[hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1335.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1335.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
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
