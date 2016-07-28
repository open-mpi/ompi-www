<?
$subject_val = "Re: [hwloc-devel] hwloc-bind syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 08:37:11 2009" -->
<!-- isoreceived="20091204133711" -->
<!-- sent="Fri, 4 Dec 2009 08:37:06 -0500" -->
<!-- isosent="20091204133706" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-bind syntax" -->
<!-- id="7054D367-82A3-4812-9882-5D45165CD8E0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1259922758.6409.4.camel_at_alpha" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 08:37:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0474.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0472.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind again"</a>
<li><strong>In reply to:</strong> <a href="0465.php">Ashley Pittman: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0466.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 4, 2009, at 5:32 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev2">&gt; &gt; It might be good to safely ignore 0x if it's present, but that's a small feature enhancement that can be done at any time (I filed a future ticket).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe not relevant but it bit me so I'll say it here, using &quot;%x&quot; with
</span><br>
<span class="quotelev1">&gt; sscanf on a string of &quot;0x1&quot; will match the whole thing and give a value
</span><br>
<span class="quotelev1">&gt; of 1 on Linux but on Solaris it'll match the &quot;0&quot; as a hex value of 0 and
</span><br>
<span class="quotelev1">&gt; not match the &quot;x1&quot; at all leading to further errors in subsequent
</span><br>
<span class="quotelev1">&gt; matches as well.  The most annoying thing is that sscanf() thinks it's
</span><br>
<span class="quotelev1">&gt; matched and it's return code will be set accordingly.
</span><br>
<p>Yuck!
<br>
<p>Thankfully, we don't appear to be using sscanf() to convert the cpuset strings.
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
<li><strong>Next message:</strong> <a href="0474.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0472.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind again"</a>
<li><strong>In reply to:</strong> <a href="0465.php">Ashley Pittman: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0466.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
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
