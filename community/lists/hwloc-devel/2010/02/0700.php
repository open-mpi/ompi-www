<?
$subject_val = "Re: [hwloc-devel] 1.0-rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 28 06:17:45 2010" -->
<!-- isoreceived="20100228111745" -->
<!-- sent="Sun, 28 Feb 2010 12:17:39 +0100" -->
<!-- isosent="20100228111739" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0-rc1" -->
<!-- id="4B8A50D3.9010209_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100226171754.GA7478_at_const.homenet.telecomitalia.it" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0-rc1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-28 06:17:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/03/0701.php">Jeff Squyres: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0699.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1791)"</a>
<li><strong>In reply to:</strong> <a href="0688.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/03/0701.php">Jeff Squyres: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/03/0701.php">Jeff Squyres: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/03/0705.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Brice Goglin, le Fri 26 Feb 2010 15:32:08 +0100, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; * are there actually some important warnings to fix ?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my memory there isn't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What hasn't been finished yet and to my opinion needs to be for v1.0, is
</span><br>
<span class="quotelev1">&gt; the prefix/suffix/whatever to easily distinguish between physical and
</span><br>
<span class="quotelev1">&gt; logical numbers in lstopo.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I played with this today and arrived to these conclusions:
<br>
* Having 'l' or 'p' prefix without # or any other special character is
<br>
very confusing since we already have things like L1 for cache levels and
<br>
P for proc numbers
<br>
* Having nothing before the number is a bad idea, it would be confusing
<br>
with cache/misc levels
<br>
* I like '#' as a prefix since it's widely used as a symbol meaning
<br>
&quot;number&quot; and I found no other nice character
<br>
<p>So I see two solutions:
<br>
* p#2 and l#2 (prefixed with a space)
<br>
<p>$ utils/lstopo -                    
<br>
Machine(1509MB) + Socket l#0 + L2 l#0(2048KB)
<br>
&nbsp;&nbsp;L1 l#0(32KB) + Core l#0 + P l#0
<br>
&nbsp;&nbsp;L1 l#1(32KB) + Core l#1 + P l#1
<br>
$ utils/lstopo - -p
<br>
Machine(1509MB) + Socket p#0 + L2(2048KB)
<br>
&nbsp;&nbsp;L1(32KB) + Core p#0 + P p#0
<br>
&nbsp;&nbsp;L1(32KB) + Core p#1 + P p#1
<br>
<p>* #2p and #2l
<br>
<p>$ utils/lstopo - -l
<br>
Machine(1509MB) + Socket#0l + L2#0l(2048KB)
<br>
&nbsp;&nbsp;L1#0l(32KB) + Core#0l + P#0l
<br>
&nbsp;&nbsp;L1#1l(32KB) + Core#1l + P#1l
<br>
$ utils/lstopo - -p                 
<br>
Machine(1509MB) + Socket#0p + L2(2048KB)
<br>
&nbsp;&nbsp;L1(32KB) + Core#0p + P#0p
<br>
&nbsp;&nbsp;L1(32KB) + Core#1p + P#1p
<br>
<p><p>I think I prefer the latter.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/03/0701.php">Jeff Squyres: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0699.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1791)"</a>
<li><strong>In reply to:</strong> <a href="0688.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/03/0701.php">Jeff Squyres: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/03/0701.php">Jeff Squyres: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/03/0705.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
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
