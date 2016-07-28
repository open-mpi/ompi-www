<?
$subject_val = "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 15:55:01 2010" -->
<!-- isoreceived="20100111205501" -->
<!-- sent="Mon, 11 Jan 2010 15:54:55 -0500" -->
<!-- isosent="20100111205455" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes" -->
<!-- id="861BCEB1-37BA-47A5-9CB4-27A1579E60E6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100111202735.GC5620_at_const.u-bordeaux.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 15:54:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0593.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>Previous message:</strong> <a href="0591.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>In reply to:</strong> <a href="0590.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0593.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>Reply:</strong> <a href="0593.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 11, 2010, at 3:27 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; The concatenation would be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
</span><br>
<span class="quotelev1">&gt; &lt;!DOCTYPE root SYSTEM &quot;hwloc.dtd&quot;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;root&gt;
</span><br>
<span class="quotelev1">&gt;  &lt;object type=&quot;Misc&quot;&gt;
</span><br>
<span class="quotelev1">&gt;   &lt;object type=&quot;System&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; dmi_board_vendor=&quot;&quot; dmi_board_name=&quot;&quot; memory_kB=&quot;0&quot; huge_page_free=&quot;0&quot; huge_page_size_kB=&quot;0&quot;&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;object type=&quot;Proc&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;   &lt;/object&gt;
</span><br>
<span class="quotelev1">&gt;   &lt;object type=&quot;System&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; dmi_board_vendor=&quot;&quot; dmi_board_name=&quot;&quot; memory_kB=&quot;0&quot; huge_page_free=&quot;0&quot; huge_page_size_kB=&quot;0&quot;&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;object type=&quot;Proc&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;   &lt;/object&gt;
</span><br>
<span class="quotelev1">&gt;  &lt;/object&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/root&gt;
</span><br>
<p>Ah -- this is the source of my confusion.  I thought you meant:
<br>
<p>cat a.xml b.xml &gt; c.xml
<br>
<p>and then using c.xml directly (which I didn't see how that would work).  Instead, you're talking about manually stitching multiple XML files together under a single &lt;root&gt;, further enclosed under a single &quot;Misc&quot; object.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0593.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>Previous message:</strong> <a href="0591.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>In reply to:</strong> <a href="0590.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0593.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>Reply:</strong> <a href="0593.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
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
