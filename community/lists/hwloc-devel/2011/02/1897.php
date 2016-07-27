<?
$subject_val = "Re: [hwloc-devel] Problem with hwloc/myriexpress.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 09:49:32 2011" -->
<!-- isoreceived="20110203144932" -->
<!-- sent="Thu, 03 Feb 2011 15:49:21 +0100" -->
<!-- isosent="20110203144921" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Problem with hwloc/myriexpress.h" -->
<!-- id="4D4AC071.70707_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F4E0BBFA-6742-4F41-8275-E0623E8FDAF3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Problem with hwloc/myriexpress.h<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 09:49:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1898.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Previous message:</strong> <a href="1896.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>In reply to:</strong> <a href="1895.php">Jeff Squyres: "[hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1898.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/02/2011 15:37, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; 2. Rename myriexpress.h
</span><br>
<span class="quotelev1">&gt;   PRO: avoids the problem
</span><br>
<span class="quotelev1">&gt;   CON: breaks legacy apps who include &quot;hwloc/myriexpress.h&quot;
</span><br>
<span class="quotelev1">&gt;   CON: doesn't solve the real problem
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>myriexpress.h was added in 1.1 so we probably don't have a lot of users
<br>
so far.
<br>
<p><span class="quotelev1">&gt; 3. Move hwloc's public config.h in a new directory by itself (e.g., include/hwloc/config/config.h)
</span><br>
<span class="quotelev1">&gt;   PRO: works around the AM behavior
</span><br>
<span class="quotelev1">&gt;   PRO: fixes the issue for hwloc and for embedding
</span><br>
<span class="quotelev1">&gt;   PRO: avoids any other name potential conflicts with include/hwloc/*.h
</span><br>
<span class="quotelev1">&gt;   CON: kludgey -- leaves a bitter taste in your mouth
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>What about hwloc/bits/config.h ? My understanding of
<br>
/usr/include/bits/foo.h is that it contains horrible details that real
<br>
people don't want to hear about :) Or hwloc/sys/config.h ?
<br>
<p>I wonder if we should also move rename.h there too. Then we'd have:
<br>
hwloc.h = main header
<br>
hwloc/*.h = misc helpers and other APIs
<br>
hwloc/bits/*.h = don't look there, these are low-level details
<br>
<p>Anyway, I vote for #3.
<br>
#4 doesn't look very hard, but might cause ugly maintenance problems in
<br>
the future.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1898.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Previous message:</strong> <a href="1896.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>In reply to:</strong> <a href="1895.php">Jeff Squyres: "[hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1898.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
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
