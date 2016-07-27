<?
$subject_val = "Re: [hwloc-devel] python bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 21 11:14:58 2011" -->
<!-- isoreceived="20110121161458" -->
<!-- sent="Fri, 21 Jan 2011 17:14:53 +0100" -->
<!-- isosent="20110121161453" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] python bindings" -->
<!-- id="20110121161453.GN5549_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="336736691.287625.1295553444341.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-21 11:14:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1875.php">Guy Streeter: "[hwloc-devel] git repo for python bindings"</a>
<li><strong>Previous message:</strong> <a href="1873.php">Samuel Thibault: "Re: [hwloc-devel] perl bindings"</a>
<li><strong>Maybe in reply to:</strong> <a href="1826.php">Guy Streeter: "[hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guy Streeter, le Thu 20 Jan 2011 20:57:24 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I added some iterators:
</span><br>
<span class="quotelev1">&gt; bitmap.all_set_bits
</span><br>
<span class="quotelev1">&gt; obj.infos
</span><br>
<span class="quotelev1">&gt; topology.objs_by_depth
</span><br>
<span class="quotelev1">&gt; topology.objs_by_type
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also made obj.children an iterator.
</span><br>
<span class="quotelev1">&gt; I think I could do the same with siblings and cousins if that makes sense.
</span><br>
<p>I think it makes sense.
<br>
<p><span class="quotelev1">&gt; I implemented bitmap.bitmap_weight() as a method, but also bitmap.weight as 
</span><br>
<span class="quotelev1">&gt; a property.
</span><br>
<p>Ah, I hadn't catched that: just like for the hwloc_ prefix, isn't
<br>
the bitmap_ prefix redundant?
<br>
<p>I wouldn't set weight as a property, because people will tend to think
<br>
that it's a cheap operation, while it's not.
<br>
<p><span class="quotelev1">&gt; Also bitmap.bitmap_first() and bitmap.first, etc.
</span><br>
<p>ditto :)
<br>
<p><span class="quotelev1">&gt; Instead of the bitmap isequal, or, and, xor, and not methods, I supported 
</span><br>
<span class="quotelev1">&gt; the operators ==, != |, |=, &amp;, &amp;=, ^. ^=, and ~.
</span><br>
<p>That's just nice sugar, no problem with that :)
<br>
<p><span class="quotelev1">&gt; A new topology instance gets init() automatically, and is destroyed
</span><br>
<span class="quotelev1">&gt; when it goes away, so those methods are not exposed.
</span><br>
<p>That's probably what we want, yes. Bernd, I believe perl should do the
<br>
same.
<br>
<p>I'm wondering whether we should perhaps put an equivalence chart
<br>
somewhere, to make sure things are coherent between C, python, perl, and
<br>
any other future bindings.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1875.php">Guy Streeter: "[hwloc-devel] git repo for python bindings"</a>
<li><strong>Previous message:</strong> <a href="1873.php">Samuel Thibault: "Re: [hwloc-devel] perl bindings"</a>
<li><strong>Maybe in reply to:</strong> <a href="1826.php">Guy Streeter: "[hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
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
