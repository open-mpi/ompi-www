<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 16:58:02 2009" -->
<!-- isoreceived="20091210215802" -->
<!-- sent="Thu, 10 Dec 2009 16:57:56 -0500" -->
<!-- isosent="20091210215756" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="6E3187E7-4D48-4820-933C-431521EEE06B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B209E6C.6020404_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 16:57:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0504.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0502.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0502.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0504.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0504.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0506.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2009, at 2:08 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev3">&gt; &gt;&gt; 1) get_obj_under_by_type(topology, type, index, subtype, subindex)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; returns for instance core 2 under socket 3. It's very easy
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (get_obj_by_type+get_obj_inside_cpuset_by_type).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2) Some people might want _under_under with 3 types/indexes. Not sure we
</span><br>
<span class="quotelev3">&gt; &gt;&gt; want it, or want to make it generic with arrays of types/indexes...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3) Generic conversion routines between os_index and logical_index, like
</span><br>
<span class="quotelev3">&gt; &gt;&gt; get_obj_by_os_index(type, os_index) and get_os_index_by_type(type, index)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4) Some kind of processor flag which tells us whether a physical proc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; exists and is online
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any opinion about this? Should we drop the current plpa.h and just add
</span><br>
<span class="quotelev2">&gt; &gt; the above new inlines to helper.h? (with some documentation about
</span><br>
<span class="quotelev2">&gt; &gt; switching from PLPA into these new functions)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since nobody commented
</span><br>
<p>Sorry.  :-(  Yes, I agree removing plpa.h is good :-) and new helper functions are good.
<br>
<p><span class="quotelev1">&gt; and Jeff has already removed the PLPA tests from
</span><br>
<span class="quotelev1">&gt; trunk, I am going to add (1) and probably (3), and document (2) and (4)
</span><br>
<span class="quotelev1">&gt; in the PLPA doc section. Then I'll move most comments from plpa.h into
</span><br>
<span class="quotelev1">&gt; this doc section and remove plpa.h entirely.
</span><br>
<p>How about having a v-like interface like you mentioned in #2?  (analogous to writev, etc. -- takes an array)
<br>
<p>Did we settle the whole OS/physical vs. logical numbering issues?
<br>
<p>I think we decided that all CLI tools will report/accept logical numbering by default, but also accept --physical to switch to OS/physical numbering.  Are you saying that the API will be all OS/physical, with conversion functions from #3 to convert to/from logical?  Seems a little weird that the default would be opposite between the CLI and the API...?  (I could be misunderstanding you...)
<br>
<p>Additionally, what exactly is the logical ordering defined to be?  We need to guarantee that it is the same across every run, and across reboots.  I.e., I see that topology-linux.c uses diropen() and readdir() to read entries from /sys.  Do we sort the data somehow before putting them into data structures (so that the logical ordering is the same every time), or is the order defined by readdir()?  If it's defined by readdir(), then the order is effectively random each time.  Although the order is *unlikely to change*, it still *could*.  I think we can't do anything if the OS decides to change its ID for a given device, but we should be able to have a stable logical ordering even if readdir() returns a different order on successive runs.
<br>
<p>My point: if we're going to have a logical ordering, we should be able to provide at least some level of guarantee of stability about that logical ordering.
<br>
<p>Make sense?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0504.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0502.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0502.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0504.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0504.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0506.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
