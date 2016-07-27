<?
$subject_val = "Re: [hwloc-devel] python bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 12:32:10 2011" -->
<!-- isoreceived="20110120173210" -->
<!-- sent="Thu, 20 Jan 2011 18:32:04 +0100" -->
<!-- isosent="20110120173204" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] python bindings" -->
<!-- id="20110120173204.GO10729_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2024652143.147206.1295294584801.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-01-20 12:32:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1858.php">Jeff Squyres: "[hwloc-devel] 1.1.1rc3 now up"</a>
<li><strong>Previous message:</strong> <a href="1856.php">Jeff Squyres: "[hwloc-devel] 1.1.1rc2 is out"</a>
<li><strong>Maybe in reply to:</strong> <a href="1826.php">Guy Streeter: "[hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1859.php">Guy Streeter: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Reply:</strong> <a href="1859.php">Guy Streeter: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Reply:</strong> <a href="1861.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Guy Streeter, le Mon 17 Jan 2011 21:03:04 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I am currently working to get a public git repository set up so that I can 
</span><br>
<span class="quotelev1">&gt; share the work. In the meantime, my first pass at python bindings for hwloc 
</span><br>
<span class="quotelev1">&gt; are available from
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://people.redhat.com/streeter/">http://people.redhat.com/streeter/</a>
</span><br>
<p>Here are some comments on some bits of code:
<br>
<p><span class="quotelev1">&gt; topo = hwloc.hwloc_topology()
</span><br>
<span class="quotelev1">&gt; assert obj.type == hwloc.HWLOC_OBJ_PU
</span><br>
<span class="quotelev1">&gt; orig = hwloc.hwloc_bitmap.alloc()
</span><br>
<p>Mmm, why repeating &quot;hwloc&quot;?
<br>
<p>It's nice to have rewritten the whole testsuite :) It's really useful to
<br>
have a very good grasp on how it looks like.
<br>
<p><span class="quotelev1">&gt; hwlocset = topo.complete_cpuset.dup()
</span><br>
<p>Mmm, so if the user forgets to use dup(), he might still be able to
<br>
write in a const cpuset?
<br>
<p><span class="quotelev1">&gt;     def set_thread_cpubind(self, tid, cpuset):
</span><br>
<span class="quotelev1">&gt;         &quot;&quot;&quot;Bind a thread on cpus given in cpuset&quot;&quot;&quot;
</span><br>
<span class="quotelev1">&gt;         return _linux_set_thread_cpubind(self, tid, cpuset)
</span><br>
<p>Mmm, no. If you use _linux_set_thread_cpubind, then call the python
<br>
function linux_set_thread_cpubind, as this is using TIDs, which is a
<br>
Linux invention. The normal set_thread_cpubind function should use the
<br>
usual python thread identifier (just like hwloc's set_thread_cpubind
<br>
uses the usual C thread identifier: pthread_t). I see in some other code
<br>
that you wonder how to create pthread in python. Then don't provide the
<br>
function for now (rather than providing a function which does not take
<br>
the proper thread identification type).
<br>
<p>Also, could you clearly separate functions which are not defined
<br>
in hwloc.h itself? In the C interface, they are in a separate e.g.
<br>
helpers.h file in order to express that these are really helpers only,
<br>
and that the user doesn't need to know them all, everything can be done
<br>
with the core functions from hwloc.h.
<br>
<p>Also, for more clarity, maybe you should also separate functions by
<br>
comments according to the doxygen groups in hwloc.h, see \defgroup
<br>
hwlocality_api_version API version which only contains HWLOC_API_VERSION
<br>
and hwloc_get_api_version for now, for instance. That should make
<br>
review and maintenance quite easier.
<br>
<p><span class="quotelev1">&gt; assert b2.ulong() == 0xa0a
</span><br>
<p>I wonder whether ulong() and ulong(i) are useful for the python
<br>
bindings: these are mostly useful for legacy interfaces which just use
<br>
single integers. Python has unbound integers, so it's not really useful
<br>
in that case :) One thing that might be useful however is b2.uint32()
<br>
and b2.uint64(), I guess we should provide it at the C stage first.
<br>
<p><span class="quotelev1">&gt; alloc_membind doesn't make a lot of sense in python, since you really
</span><br>
<span class="quotelev1">&gt; can't tell the python interpreter to use the space.
</span><br>
<span class="quotelev1">&gt; I can't think of a way to use hwloc_set_area_membind* in python
</span><br>
<p>They should probably take a python object itself, but since I guess the
<br>
python GC does what it wants with moving data... That might however
<br>
be useful when e.g. somebody drives C computation code from a python
<br>
fast-prototyping main loop.
<br>
<p><span class="quotelev1">&gt; _libhwloc = ctypes.CDLL(ctypes.util.find_library('hwloc'),
</span><br>
<span class="quotelev1">&gt; use_errno=True)
</span><br>
<p>Mmm, shouldn't this include the soname of the library?  Else built
<br>
bindings will break on ABI changes.
<br>
<p><p><p>Apart from these nasty details, I like the interface style, thanks for
<br>
the nice contribution ! :)
<br>
<p><span class="quotelev1">&gt; b1 = hwloc.hwloc_bitmap.alloc('0xf')
</span><br>
<span class="quotelev1">&gt; b2 = hwloc.hwloc_bitmap.alloc(range(4))
</span><br>
<p>Yay :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1858.php">Jeff Squyres: "[hwloc-devel] 1.1.1rc3 now up"</a>
<li><strong>Previous message:</strong> <a href="1856.php">Jeff Squyres: "[hwloc-devel] 1.1.1rc2 is out"</a>
<li><strong>Maybe in reply to:</strong> <a href="1826.php">Guy Streeter: "[hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1859.php">Guy Streeter: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Reply:</strong> <a href="1859.php">Guy Streeter: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Reply:</strong> <a href="1861.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
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
