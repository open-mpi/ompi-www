<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 17 06:36:50 2010" -->
<!-- isoreceived="20100917103650" -->
<!-- sent="Fri, 17 Sep 2010 12:36:44 +0200" -->
<!-- isosent="20100917103644" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="20100917103644.GG5418_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C933C8A.7090706_at_au1.ibm.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-17 06:36:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1307.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2451"</a>
<li><strong>Previous message:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1321.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alexey Kardashevskiy, le Fri 17 Sep 2010 20:01:46 +1000, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt;- Once the read is done, values need to be swapped on little-endian
</span><br>
<span class="quotelev2">&gt; &gt;   machines.  You could use ntohl for that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The hwlow code is compiled on powerpc and reads device-tree on a powerpc 
</span><br>
<span class="quotelev1">&gt; machine. If endianess does not match in this case, we have got a big 
</span><br>
<span class="quotelev1">&gt; problem, this should not happen.
</span><br>
<p>I know. But it's better to just do the right thing already, i.e. using
<br>
ntohl(), even if it indeed is a nop on powerpc.
<br>
<p><span class="quotelev2">&gt; &gt;static inline uint32_t *
</span><br>
<span class="quotelev2">&gt; &gt;of_get_int_arr(const char *p, const char *p1, int root_fd);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Returns the array of integers.  Yes, this makes a lot of
</span><br>
<span class="quotelev2">&gt; &gt;allocation/deallocation, but that should be neglectible compared to the
</span><br>
<span class="quotelev2">&gt; &gt;system calls and will save us nasty length-bugs later.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How many integers were read by this function?
</span><br>
<p>As many as available.
<br>
<p><span class="quotelev1">&gt; What allocator was used for the returned value? Sure I can presume it
</span><br>
<span class="quotelev1">&gt; was malloc, but still it is not a good style :)
</span><br>
<p>Malloc, yes, why would that not be a good style?
<br>
<p><span class="quotelev1">&gt; Regarding the latest patch about numa nodes numbers - do I understand 
</span><br>
<span class="quotelev1">&gt; correctly that hwloc_cpuset_t is just a bit array which can be used 
</span><br>
<span class="quotelev1">&gt; everywhere where we need a bit array, not just for CPUs? :-)
</span><br>
<p>Yes, it should have been called &quot;set&quot; actually.
<br>
<p>I'll have a closer look at your patch later.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1307.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2451"</a>
<li><strong>Previous message:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1321.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
