<?
$subject_val = "Re: [hwloc-devel] python bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 14:57:28 2011" -->
<!-- isoreceived="20110120195728" -->
<!-- sent="Thu, 20 Jan 2011 13:57:20 -0600" -->
<!-- isosent="20110120195720" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] python bindings" -->
<!-- id="4D3893A0.7050804_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110120192227.GC7748_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] python bindings<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 14:57:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1867.php">Pavan Balaji: "[hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1865.php">Bernd Kallies: "Re: [hwloc-devel] python bindings"</a>
<li><strong>In reply to:</strong> <a href="1864.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1874.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/20/2011 01:22 PM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Bernd Kallies, le Thu 20 Jan 2011 20:13:03 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; The only thing I was wondering about are these OO method names, which I
</span><br>
<span class="quotelev2">&gt;&gt; had to invent them myself. If there is some need to synchronize these
</span><br>
<span class="quotelev2">&gt;&gt; with the python binding, we may agree about them. Backwards
</span><br>
<span class="quotelev2">&gt;&gt; compatibility of the Perl binding is not a real problem, since there may
</span><br>
<span class="quotelev2">&gt;&gt; be many aliases for a function in the base XS code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you perhaps list those you have defined already, if any?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I added some iterators:
<br>
bitmap.all_set_bits
<br>
obj.infos
<br>
topology.objs_by_depth
<br>
topology.objs_by_type
<br>
<p>I also made obj.children an iterator.
<br>
I think I could do the same with siblings and cousins if that makes sense.
<br>
<p>I changed all the snprintf functions or asprintf methods.
<br>
<p>I implemented bitmap.bitmap_weight() as a method, but also bitmap.weight as a 
<br>
property. Also bitmap.bitmap_first() and bitmap.first, etc. I'm thinking I 
<br>
could do away with the method calls and just provide the properties.
<br>
<p>Instead of the bitmap isequal, or, and, xor, and not methods, I supported the 
<br>
operators ==, != |, |=, &amp;, &amp;=, ^. ^=, and ~.
<br>
<p>A new topology instance gets init() automatically, and is destroyed when it 
<br>
goes away, so those methods are not exposed.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1867.php">Pavan Balaji: "[hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1865.php">Bernd Kallies: "Re: [hwloc-devel] python bindings"</a>
<li><strong>In reply to:</strong> <a href="1864.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1874.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
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
