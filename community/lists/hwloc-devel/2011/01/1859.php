<?
$subject_val = "Re: [hwloc-devel] python bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 13:02:58 2011" -->
<!-- isoreceived="20110120180258" -->
<!-- sent="Thu, 20 Jan 2011 12:02:49 -0600" -->
<!-- isosent="20110120180249" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] python bindings" -->
<!-- id="4D3878C9.50107_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110120173204.GO10729_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-01-20 13:02:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1860.php">Jeff Squyres: "Re: [hwloc-devel] Perl bindings question"</a>
<li><strong>Previous message:</strong> <a href="1858.php">Jeff Squyres: "[hwloc-devel] 1.1.1rc3 now up"</a>
<li><strong>In reply to:</strong> <a href="1857.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1861.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/20/2011 11:32 AM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Guy Streeter, le Mon 17 Jan 2011 21:03:04 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I am currently working to get a public git repository set up so that I can
</span><br>
<span class="quotelev2">&gt;&gt; share the work. In the meantime, my first pass at python bindings for hwloc
</span><br>
<span class="quotelev2">&gt;&gt; are available from
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://people.redhat.com/streeter/">http://people.redhat.com/streeter/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are some comments on some bits of code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; topo = hwloc.hwloc_topology()
</span><br>
<span class="quotelev2">&gt;&gt; assert obj.type == hwloc.HWLOC_OBJ_PU
</span><br>
<span class="quotelev2">&gt;&gt; orig = hwloc.hwloc_bitmap.alloc()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm, why repeating &quot;hwloc&quot;?
</span><br>
<p>I think removing the &quot;hwloc_&quot; prefix from the class names is a good idea. I'll 
<br>
do that.
<br>
<p>Do you think I should also do it for those constants? I thought matching the C 
<br>
constant name was better, but hwloc.OBJ_PU is less typing :)
<br>
<p>Also, since they are class names, do you think I should capitalize them as is 
<br>
common for python classes? &quot;topo = hwloc.Topology()&quot; ?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's nice to have rewritten the whole testsuite :) It's really useful to
</span><br>
<span class="quotelev1">&gt; have a very good grasp on how it looks like.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwlocset = topo.complete_cpuset.dup()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm, so if the user forgets to use dup(), he might still be able to
</span><br>
<span class="quotelev1">&gt; write in a const cpuset?
</span><br>
<p>I haven't figured out a way to mark things as non-modifiable. I'm still 
<br>
researching it. Right now nothing stops you changing any bitmap.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      def set_thread_cpubind(self, tid, cpuset):
</span><br>
<span class="quotelev2">&gt;&gt;          &quot;&quot;&quot;Bind a thread on cpus given in cpuset&quot;&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;          return _linux_set_thread_cpubind(self, tid, cpuset)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm, no. If you use _linux_set_thread_cpubind, then call the python
</span><br>
<span class="quotelev1">&gt; function linux_set_thread_cpubind, as this is using TIDs, which is a
</span><br>
<span class="quotelev1">&gt; Linux invention. The normal set_thread_cpubind function should use the
</span><br>
<span class="quotelev1">&gt; usual python thread identifier (just like hwloc's set_thread_cpubind
</span><br>
<span class="quotelev1">&gt; uses the usual C thread identifier: pthread_t). I see in some other code
</span><br>
<span class="quotelev1">&gt; that you wonder how to create pthread in python. Then don't provide the
</span><br>
<span class="quotelev1">&gt; function for now (rather than providing a function which does not take
</span><br>
<span class="quotelev1">&gt; the proper thread identification type).
</span><br>
<p>OK, I understand this now.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, could you clearly separate functions which are not defined
</span><br>
<span class="quotelev1">&gt; in hwloc.h itself? In the C interface, they are in a separate e.g.
</span><br>
<span class="quotelev1">&gt; helpers.h file in order to express that these are really helpers only,
</span><br>
<span class="quotelev1">&gt; and that the user doesn't need to know them all, everything can be done
</span><br>
<span class="quotelev1">&gt; with the core functions from hwloc.h.
</span><br>
<p>Do you mean physically separate in the source code, or are you talking about 
<br>
providing a different way to access them? I know the source code could use 
<br>
some cleanup and more comments.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, for more clarity, maybe you should also separate functions by
</span><br>
<span class="quotelev1">&gt; comments according to the doxygen groups in hwloc.h, see \defgroup
</span><br>
<span class="quotelev1">&gt; hwlocality_api_version API version which only contains HWLOC_API_VERSION
</span><br>
<span class="quotelev1">&gt; and hwloc_get_api_version for now, for instance. That should make
</span><br>
<span class="quotelev1">&gt; review and maintenance quite easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; assert b2.ulong() == 0xa0a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder whether ulong() and ulong(i) are useful for the python
</span><br>
<span class="quotelev1">&gt; bindings: these are mostly useful for legacy interfaces which just use
</span><br>
<span class="quotelev1">&gt; single integers. Python has unbound integers, so it's not really useful
</span><br>
<span class="quotelev1">&gt; in that case :) One thing that might be useful however is b2.uint32()
</span><br>
<span class="quotelev1">&gt; and b2.uint64(), I guess we should provide it at the C stage first.
</span><br>
<p>I couldn't think of a use for them either. I tried to implement everything 
<br>
that is documented in the man pages. There may be other things that don't make 
<br>
sense.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; alloc_membind doesn't make a lot of sense in python, since you really
</span><br>
<span class="quotelev2">&gt;&gt; can't tell the python interpreter to use the space.
</span><br>
<span class="quotelev2">&gt;&gt; I can't think of a way to use hwloc_set_area_membind* in python
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They should probably take a python object itself, but since I guess the
</span><br>
<span class="quotelev1">&gt; python GC does what it wants with moving data... That might however
</span><br>
<span class="quotelev1">&gt; be useful when e.g. somebody drives C computation code from a python
</span><br>
<span class="quotelev1">&gt; fast-prototyping main loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _libhwloc = ctypes.CDLL(ctypes.util.find_library('hwloc'),
</span><br>
<span class="quotelev2">&gt;&gt; use_errno=True)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm, shouldn't this include the soname of the library?  Else built
</span><br>
<span class="quotelev1">&gt; bindings will break on ABI changes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I planned to check the library version at run-time. That way I can provide 
<br>
backward compatibility.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Apart from these nasty details, I like the interface style, thanks for
</span><br>
<span class="quotelev1">&gt; the nice contribution ! :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; b1 = hwloc.hwloc_bitmap.alloc('0xf')
</span><br>
<span class="quotelev2">&gt;&gt; b2 = hwloc.hwloc_bitmap.alloc(range(4))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yay :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
I'm adding more support for bitmap representations:
<br>
<p>assert b3.intersects('0xf...f,0xfffffffd,0xfffffff9')
<br>
assert b1.compare_first(0x3)
<br>
assert b1.compare('3') &lt; 0
<br>
<p>--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1860.php">Jeff Squyres: "Re: [hwloc-devel] Perl bindings question"</a>
<li><strong>Previous message:</strong> <a href="1858.php">Jeff Squyres: "[hwloc-devel] 1.1.1rc3 now up"</a>
<li><strong>In reply to:</strong> <a href="1857.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1861.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
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
