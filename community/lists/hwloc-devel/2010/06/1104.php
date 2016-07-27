<?
$subject_val = "Re: [hwloc-devel] new version of docs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 25 12:58:13 2010" -->
<!-- isoreceived="20100625165813" -->
<!-- sent="Fri, 25 Jun 2010 12:58:08 -0400" -->
<!-- isosent="20100625165808" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] new version of docs" -->
<!-- id="EA7216D7-8338-4130-A65B-4075E038BF50_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="FE3939B7-54E5-4711-B94A-720C754AE5DB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] new version of docs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-25 12:58:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1105.php">Samuel Thibault: "Re: [hwloc-devel] new version of docs"</a>
<li><strong>Previous message:</strong> <a href="1103.php">Jeff Squyres: "Re: [hwloc-devel] new version of docs"</a>
<li><strong>In reply to:</strong> <a href="1103.php">Jeff Squyres: "Re: [hwloc-devel] new version of docs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1105.php">Samuel Thibault: "Re: [hwloc-devel] new version of docs"</a>
<li><strong>Reply:</strong> <a href="1105.php">Samuel Thibault: "Re: [hwloc-devel] new version of docs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 25, 2010, at 12:53 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I'm uneasy with &#147;PU#15, for example, changes location from NUMA node
</span><br>
<span class="quotelev2">&gt; &gt; #0 to #1.&#148; The location doesn't have really changed, PUs have just
</span><br>
<span class="quotelev2">&gt; &gt; been renumbered.
</span><br>
<p>How's this:
<br>
<p>Notice that hwloc only sees half the PUs when SMT is disabled.  PU#15,
<br>
for example, seems to change location from NUMA node #0 to #1.  In
<br>
reality, no PU's &quot;moved&quot; -- they were simply re-numbered when hwloc
<br>
only saw half as many.  Hence, PU#15 in the SMT-disabled picture
<br>
probably corresponds to PU#30 in the SMT-enabled picture.  
<br>
<p>This same &quot;PUs have disappeared&quot; effect can be seen on other platforms
<br>
-- even platforms / OSs that provide much more information than the
<br>
above PPC64 system.  This is an unfortunate side-effect of how
<br>
operating systems report information to hwloc.
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
<li><strong>Next message:</strong> <a href="1105.php">Samuel Thibault: "Re: [hwloc-devel] new version of docs"</a>
<li><strong>Previous message:</strong> <a href="1103.php">Jeff Squyres: "Re: [hwloc-devel] new version of docs"</a>
<li><strong>In reply to:</strong> <a href="1103.php">Jeff Squyres: "Re: [hwloc-devel] new version of docs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1105.php">Samuel Thibault: "Re: [hwloc-devel] new version of docs"</a>
<li><strong>Reply:</strong> <a href="1105.php">Samuel Thibault: "Re: [hwloc-devel] new version of docs"</a>
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
