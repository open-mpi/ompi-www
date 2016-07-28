<?
$subject_val = "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 15:27:40 2010" -->
<!-- isoreceived="20100111202740" -->
<!-- sent="Mon, 11 Jan 2010 21:27:35 +0100" -->
<!-- isosent="20100111202735" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes" -->
<!-- id="20100111202735.GC5620_at_const.u-bordeaux.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D0323C06-26FC-447F-BAD2-E2F494507283_at_cisco.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 15:27:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0591.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>Previous message:</strong> <a href="0589.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>In reply to:</strong> <a href="0589.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0591.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>Reply:</strong> <a href="0591.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>Reply:</strong> <a href="0592.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 11 Jan 2010 15:20:45 -0500, a &#233;crit :
<br>
<span class="quotelev3">&gt; &gt; &gt; I'm curious -- what's the definition of cat'ing 2 XML files together?  Does the 2nd become a subtree of the first?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No, I mean putting both under a &quot;misc&quot; object for instance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you explain more; maybe provide an example or two?
</span><br>
<p>lstopo --synthetic 1 test.xml gives
<br>
<p>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE root SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;root&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;System&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; dmi_board_vendor=&quot;&quot; dmi_board_name=&quot;&quot; memory_kB=&quot;0&quot; huge_page_free=&quot;0&quot; huge_page_size_kB=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Proc&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&lt;/root&gt;
<br>
<p>The concatenation would be
<br>
<p>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE root SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;root&gt;
<br>
&nbsp;&lt;object type=&quot;Misc&quot;&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;System&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; dmi_board_vendor=&quot;&quot; dmi_board_name=&quot;&quot; memory_kB=&quot;0&quot; huge_page_free=&quot;0&quot; huge_page_size_kB=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Proc&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;System&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; dmi_board_vendor=&quot;&quot; dmi_board_name=&quot;&quot; memory_kB=&quot;0&quot; huge_page_free=&quot;0&quot; huge_page_size_kB=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Proc&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&lt;/object&gt;
<br>
&lt;/root&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0591.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>Previous message:</strong> <a href="0589.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>In reply to:</strong> <a href="0589.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0591.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>Reply:</strong> <a href="0591.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>Reply:</strong> <a href="0592.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
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
