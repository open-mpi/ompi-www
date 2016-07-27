<?
$subject_val = "Re: [hwloc-devel] Strange difference";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 14:15:55 2010" -->
<!-- isoreceived="20100326181555" -->
<!-- sent="Fri, 26 Mar 2010 14:15:50 -0400" -->
<!-- isosent="20100326181550" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Strange difference" -->
<!-- id="6F915763-FAC4-4733-B1A2-647825C7AAAB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BACF687.2060701_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Strange difference<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 14:15:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0820.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853"</a>
<li><strong>Previous message:</strong> <a href="0818.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>In reply to:</strong> <a href="0817.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0823.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0823.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0840.php">Chris Samuel: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0844.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 26, 2010, at 2:01 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I like &quot;Proc&quot; instead of &quot;P&quot; even for the non-v output.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not against it, but I don't remember the reason for the initial
</span><br>
<span class="quotelev1">&gt; change. Maybe because &quot;processor&quot; is confusing for some people (logical
</span><br>
<span class="quotelev1">&gt; vs physical socket) ?
</span><br>
<p>Oh crap.  I think you're right.  And I think I even asked for that.  ;-)
<br>
<p>Hmm.  
<br>
<p>Is it a crime to use the full word &quot;Processor&quot;?  At least on my machine, the output width is still far less than 80 characters, so the full word should be no problem.  But I don't know if there are other strange topologies out there that would take up more space...?  (it certainly would in the graphic output...)
<br>
<p><span class="quotelev2">&gt; &gt; Is the Machine memory size supposed to agree between the two outputs, or does the -v output roll up some sizes together?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Machine (3945MB)
</span><br>
<span class="quotelev2">&gt; &gt; Machine (phys=0 local=4039640KB total=4039640KB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4039640/1024=3944.96093750000000000000
</span><br>
<span class="quotelev1">&gt; We divide by 1024 until we find something between 1 and 10000 iirc, and
</span><br>
<span class="quotelev1">&gt; then we round to the nearest integer.
</span><br>
<p>Ah.  Maybe in -v mode, we should print bytes, not KB or MB.  Completely un-ambiguous that way.
<br>
<p><span class="quotelev2">&gt; &gt; I'm obviously good with -v having more information.  I guess my reaction was because it wasn't just *more* information -- the *same* information was in a different format, and that struck me as weird.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't know :)
</span><br>
<p>:-)
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
<li><strong>Next message:</strong> <a href="0820.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853"</a>
<li><strong>Previous message:</strong> <a href="0818.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>In reply to:</strong> <a href="0817.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0823.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0823.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0840.php">Chris Samuel: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0844.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
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
