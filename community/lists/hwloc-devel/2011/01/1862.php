<?
$subject_val = "Re: [hwloc-devel] python bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 13:25:45 2011" -->
<!-- isoreceived="20110120182545" -->
<!-- sent="Thu, 20 Jan 2011 19:24:58 +0100" -->
<!-- isosent="20110120182458" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] python bindings" -->
<!-- id="20110120182458.GA7748_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1155672448.247461.1295546572877.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-01-20 13:24:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1863.php">Bernd Kallies: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Previous message:</strong> <a href="1861.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Maybe in reply to:</strong> <a href="1826.php">Guy Streeter: "[hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1864.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guy Streeter, le Thu 20 Jan 2011 19:02:52 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On 01/20/2011 11:32 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;topo = hwloc.hwloc_topology()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;assert obj.type == hwloc.HWLOC_OBJ_PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;orig = hwloc.hwloc_bitmap.alloc()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Mmm, why repeating &quot;hwloc&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think removing the &quot;hwloc_&quot; prefix from the class names is a good idea. 
</span><br>
<span class="quotelev1">&gt; I'll do that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you think I should also do it for those constants? I thought matching 
</span><br>
<span class="quotelev1">&gt; the C constant name was better, but hwloc.OBJ_PU is less typing :)
</span><br>
<p>Yes, the reasoning about function names is the same.
<br>
<p><span class="quotelev1">&gt; Also, since they are class names, do you think I should capitalize them as 
</span><br>
<span class="quotelev1">&gt; is common for python classes? &quot;topo = hwloc.Topology()&quot; ?
</span><br>
<p>Yes, it'll make clear these are not just functions.
<br>
<p><span class="quotelev2">&gt; &gt;It's nice to have rewritten the whole testsuite :) It's really useful to
</span><br>
<span class="quotelev2">&gt; &gt;have a very good grasp on how it looks like.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;hwlocset = topo.complete_cpuset.dup()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Mmm, so if the user forgets to use dup(), he might still be able to
</span><br>
<span class="quotelev2">&gt; &gt;write in a const cpuset?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't figured out a way to mark things as non-modifiable. I'm still 
</span><br>
<span class="quotelev1">&gt; researching it. Right now nothing stops you changing any bitmap.
</span><br>
<p>I was wondering whether we should consider making a copy when given
<br>
a const pointer, so the user can not make mistakes. Another option
<br>
is to test for constness in all modification operations, but I guess
<br>
it'd be tedious. In any case, I guess we can't really make something
<br>
non-modifiable in the C sense (i.e. get a segfault if one writes to it),
<br>
because I guess the python interpreter is not supposed to crash :) (or
<br>
maybe you can catch that and return an exception).
<br>
<p><span class="quotelev2">&gt; &gt;Also, could you clearly separate functions which are not defined
</span><br>
<span class="quotelev2">&gt; &gt;in hwloc.h itself? In the C interface, they are in a separate e.g.
</span><br>
<span class="quotelev2">&gt; &gt;helpers.h file in order to express that these are really helpers only,
</span><br>
<span class="quotelev2">&gt; &gt;and that the user doesn't need to know them all, everything can be done
</span><br>
<span class="quotelev2">&gt; &gt;with the core functions from hwloc.h.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you mean physically separate in the source code, or are you talking 
</span><br>
<span class="quotelev1">&gt; about providing a different way to access them? I know the source code 
</span><br>
<span class="quotelev1">&gt; could use some cleanup and more comments.
</span><br>
<p>At the very least, the source code. Separating it in the pydoc
<br>
documentation would be very useful too. The way of access is not
<br>
necessarily a concern, as long as people understand the relation.
<br>
<p><span class="quotelev3">&gt; &gt;&gt;alloc_membind doesn't make a lot of sense in python, since you really
</span><br>
<span class="quotelev3">&gt; &gt;&gt;can't tell the python interpreter to use the space.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I can't think of a way to use hwloc_set_area_membind* in python
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;They should probably take a python object itself, but since I guess the
</span><br>
<span class="quotelev2">&gt; &gt;python GC does what it wants with moving data... That might however
</span><br>
<span class="quotelev2">&gt; &gt;be useful when e.g. somebody drives C computation code from a python
</span><br>
<span class="quotelev2">&gt; &gt;fast-prototyping main loop.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;_libhwloc = ctypes.CDLL(ctypes.util.find_library('hwloc'),
</span><br>
<span class="quotelev3">&gt; &gt;&gt;use_errno=True)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Mmm, shouldn't this include the soname of the library?  Else built
</span><br>
<span class="quotelev2">&gt; &gt;bindings will break on ABI changes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; I planned to check the library version at run-time. That way I can provide 
</span><br>
<span class="quotelev1">&gt; backward compatibility.
</span><br>
<p>Mmm, ok, but how will you manage ABI changes? You will need to build
<br>
your bindings several times, against the varying hwloc interfaces.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1863.php">Bernd Kallies: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Previous message:</strong> <a href="1861.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Maybe in reply to:</strong> <a href="1826.php">Guy Streeter: "[hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1864.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
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
