<?
$subject_val = "Re: [hwloc-devel] signed / unsigned";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 21:03:35 2009" -->
<!-- isoreceived="20091217020335" -->
<!-- sent="Wed, 16 Dec 2009 21:03:30 -0500" -->
<!-- isosent="20091217020330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] signed / unsigned" -->
<!-- id="5DB38BA6-D83A-4146-B64E-FBB00E744B75_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B2957F5.6030501_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 21:03:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0538.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0536.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1474)"</a>
<li><strong>In reply to:</strong> <a href="0535.php">Brice Goglin: "Re: [hwloc-devel] signed / unsigned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0538.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0538.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, done.  Please review:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/changeset/1475">https://svn.open-mpi.org/trac/hwloc/changeset/1475</a>
<br>
<p>Additionally, there were a whole pile of signed/unsigned comparisons left in lstopo-draw.c that I am a bit too tired to figure out -- could you guys resolve them?
<br>
<p><p><p>On Dec 16, 2009, at 4:58 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 16, 2009, at 3:35 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; While preparing to SVN commit, I made the default for HG checkouts to compile with debug and picky modes.  I now see a TRUCKLOAD of signed/unsigned comparison warnings.  I'll look into these right now...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A bunch of them were fairly straightforward &quot;using int and unsigned together&quot; cases that were easy to fix.  But some of them are less clear -- comparing what should be unsigned values with -1.  This makes me believe that -1 is being used as a sentinel value in some places -- e.g., in hwloc_obj_t-&gt;os_index.  It's a &quot;signed&quot; field, but many of the comparisons that are made to it are from &quot;unsigned&quot; variables.  And at least in one or two places, it is compared against -1.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; os_index == -1 means that it is unknown (or does not mean anything or
</span><br>
<span class="quotelev1">&gt; whatever).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Which should be fixed -- make the .os_index field be unsigned (and either have another boolean indicating whether the .os_index value is valid or not, or having a sentinel value for invalid (perhaps ((unsigned) -1)?), or make all the comparison variables be unsigned?
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (unsigned) -1 is fine with me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0538.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0536.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1474)"</a>
<li><strong>In reply to:</strong> <a href="0535.php">Brice Goglin: "Re: [hwloc-devel] signed / unsigned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0538.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0538.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
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
