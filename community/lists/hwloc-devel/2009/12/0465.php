<?
$subject_val = "Re: [hwloc-devel] hwloc-bind syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 05:32:46 2009" -->
<!-- isoreceived="20091204103246" -->
<!-- sent="Fri, 04 Dec 2009 10:32:38 +0000" -->
<!-- isosent="20091204103238" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-bind syntax" -->
<!-- id="1259922758.6409.4.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B7E468A5-3E09-4BE3-8D17-265A9460B768_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-bind syntax<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 05:32:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0466.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0464.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind again"</a>
<li><strong>In reply to:</strong> <a href="0460.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0473.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0473.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-12-03 at 20:32 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev3">&gt; &gt; &gt; Ah, ok.  To be clear, is it accurate to say that it is one of the following forms:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - a hex number (without leading &quot;0x&quot; -- would &quot;0x&quot; be ignored if it is supplied?)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We never used 0x there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It might be good to safely ignore 0x if it's present, but that's a small feature enhancement that can be done at any time (I filed a future ticket).
</span><br>
<p>Maybe not relevant but it bit me so I'll say it here, using &quot;%x&quot; with
<br>
sscanf on a string of &quot;0x1&quot; will match the whole thing and give a value
<br>
of 1 on Linux but on Solaris it'll match the &quot;0&quot; as a hex value of 0 and
<br>
not match the &quot;x1&quot; at all leading to further errors in subsequent
<br>
matches as well.  The most annoying thing is that sscanf() thinks it's
<br>
matched and it's return code will be set accordingly.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0466.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0464.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind again"</a>
<li><strong>In reply to:</strong> <a href="0460.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0473.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0473.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
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
