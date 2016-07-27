<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 01:55:13 2010" -->
<!-- isoreceived="20101124065513" -->
<!-- sent="Wed, 24 Nov 2010 07:55:06 +0100" -->
<!-- isosent="20101124065506" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CECB6CA.3060902_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CECB50F.7080403_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 01:55:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1589.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1587.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1586.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1590.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1590.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/11/2010 07:47, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; On 22/11/10 07:48, Christopher Samuel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** glibc detected *** /tmp/hwloc/hwloc-1.1rc2/tests/.libs/hwloc_bind:
</span><br>
<span class="quotelev2">&gt; &gt; free(): invalid next size (fast): 0x1001c240 ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Went and had a look at the code that was failing.  This is
</span><br>
<span class="quotelev1">&gt; the fragement that fails:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef HWLOC_HAVE_MIGRATE_PAGES
</span><br>
<span class="quotelev1">&gt;     unsigned long *fullmask = malloc(max_os_index/HWLOC_BITS_PER_LONG *
</span><br>
<span class="quotelev1">&gt; sizeof(long));
</span><br>
<span class="quotelev1">&gt;     if (fullmask) {
</span><br>
<span class="quotelev1">&gt;       memset(fullmask, max_os_index/HWLOC_BITS_PER_LONG * sizeof(long),
</span><br>
<span class="quotelev1">&gt; 0xf);
</span><br>
<span class="quotelev1">&gt;       err = migrate_pages(0, max_os_index+1, fullmask, linuxmask);
</span><br>
<span class="quotelev1">&gt;       free(fullmask);
</span><br>
<span class="quotelev1">&gt;     } else
</span><br>
<span class="quotelev1">&gt;       err = -1;
</span><br>
<span class="quotelev1">&gt;     if (err &lt; 0 &amp;&amp; (flags &amp; HWLOC_MEMBIND_STRICT))
</span><br>
<span class="quotelev1">&gt;       goto out_with_mask;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can get the free(fullmask); to not fail if I comment out
</span><br>
<span class="quotelev1">&gt; the memset() and migrate_pages() calls.  If I just comment
</span><br>
<span class="quotelev1">&gt; out the migrate_pages() then it still fails so there's
</span><br>
<span class="quotelev1">&gt; something wrong in that calculation from the look of it.
</span><br>
<p>Can you add this?
<br>
&nbsp;&nbsp;printf(&quot;max_os_index=%u memsize=%u\n&quot;, max_os_index,
<br>
max_os_index/HWLOC_BITS_PER_LONG * sizeof(long));
<br>
If there are few numa nodes on your machine, it's supposed to print
<br>
something like 32 4 on 32bits machine and 64 8 on 64bits.
<br>
<p>If max_os_index is wrong, the problem lies in
<br>
hwloc_linux_membind_mask_from_nodeset(). Adding a
<br>
printf(&quot;max_os_index=%d\n&quot;, max_os_index); right before /* round up ...
<br>
BITS_PER_LONG */ may help too.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1589.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1587.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1586.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1590.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1590.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
