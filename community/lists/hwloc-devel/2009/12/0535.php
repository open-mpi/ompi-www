<?
$subject_val = "Re: [hwloc-devel] signed / unsigned";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 16:58:18 2009" -->
<!-- isoreceived="20091216215818" -->
<!-- sent="Wed, 16 Dec 2009 22:58:13 +0100" -->
<!-- isosent="20091216215813" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] signed / unsigned" -->
<!-- id="4B2957F5.6030501_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5897F8AA-B120-4709-9600-581CA0E27F6D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] signed / unsigned<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 16:58:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0536.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1474)"</a>
<li><strong>Previous message:</strong> <a href="0534.php">Jeff Squyres: "[hwloc-devel] signed / unsigned"</a>
<li><strong>In reply to:</strong> <a href="0534.php">Jeff Squyres: "[hwloc-devel] signed / unsigned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0537.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0537.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 16, 2009, at 3:35 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; While preparing to SVN commit, I made the default for HG checkouts to compile with debug and picky modes.  I now see a TRUCKLOAD of signed/unsigned comparison warnings.  I'll look into these right now...
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A bunch of them were fairly straightforward &quot;using int and unsigned together&quot; cases that were easy to fix.  But some of them are less clear -- comparing what should be unsigned values with -1.  This makes me believe that -1 is being used as a sentinel value in some places -- e.g., in hwloc_obj_t-&gt;os_index.  It's a &quot;signed&quot; field, but many of the comparisons that are made to it are from &quot;unsigned&quot; variables.  And at least in one or two places, it is compared against -1.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>os_index == -1 means that it is unknown (or does not mean anything or
<br>
whatever).
<br>
<p><span class="quotelev1">&gt; Which should be fixed -- make the .os_index field be unsigned (and either have another boolean indicating whether the .os_index value is valid or not, or having a sentinel value for invalid (perhaps ((unsigned) -1)?), or make all the comparison variables be unsigned?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>(unsigned) -1 is fine with me.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0536.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1474)"</a>
<li><strong>Previous message:</strong> <a href="0534.php">Jeff Squyres: "[hwloc-devel] signed / unsigned"</a>
<li><strong>In reply to:</strong> <a href="0534.php">Jeff Squyres: "[hwloc-devel] signed / unsigned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0537.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0537.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
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
