<?
$subject_val = "[hwloc-devel] signed / unsigned";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 16:29:08 2009" -->
<!-- isoreceived="20091216212908" -->
<!-- sent="Wed, 16 Dec 2009 16:29:02 -0500" -->
<!-- isosent="20091216212902" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] signed / unsigned" -->
<!-- id="5897F8AA-B120-4709-9600-581CA0E27F6D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8104644F-7B8F-4A21-85AE-C7D930515167_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] signed / unsigned<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 16:29:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0535.php">Brice Goglin: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0533.php">Jeff Squyres: "[hwloc-devel] embedding committed"</a>
<li><strong>In reply to:</strong> <a href="0533.php">Jeff Squyres: "[hwloc-devel] embedding committed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0535.php">Brice Goglin: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0535.php">Brice Goglin: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Maybe reply:</strong> <a href="0540.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] signed / unsigned"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 16, 2009, at 3:35 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; While preparing to SVN commit, I made the default for HG checkouts to compile with debug and picky modes.  I now see a TRUCKLOAD of signed/unsigned comparison warnings.  I'll look into these right now...
</span><br>
<p>A bunch of them were fairly straightforward &quot;using int and unsigned together&quot; cases that were easy to fix.  But some of them are less clear -- comparing what should be unsigned values with -1.  This makes me believe that -1 is being used as a sentinel value in some places -- e.g., in hwloc_obj_t-&gt;os_index.  It's a &quot;signed&quot; field, but many of the comparisons that are made to it are from &quot;unsigned&quot; variables.  And at least in one or two places, it is compared against -1.
<br>
<p>Which should be fixed -- make the .os_index field be unsigned (and either have another boolean indicating whether the .os_index value is valid or not, or having a sentinel value for invalid (perhaps ((unsigned) -1)?), or make all the comparison variables be unsigned?
<br>
<p>I've attached a patch of what I've done (on my OS X laptop).  There's two main sets of changes:
<br>
<p>- change easy/obvious int's to unsigned's
<br>
- changed .os_index (and 1 or 2 others) to unsigned
<br>
<p>But I don't want to commit anything because of the above issue; clearly, I've broken something because comparing .os_index to -1 won't work.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0534/unsigned-signed.patch">unsigned-signed.patch</a>
</ul>
<!-- attachment="unsigned-signed.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0535.php">Brice Goglin: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0533.php">Jeff Squyres: "[hwloc-devel] embedding committed"</a>
<li><strong>In reply to:</strong> <a href="0533.php">Jeff Squyres: "[hwloc-devel] embedding committed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0535.php">Brice Goglin: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0535.php">Brice Goglin: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Maybe reply:</strong> <a href="0540.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] signed / unsigned"</a>
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
