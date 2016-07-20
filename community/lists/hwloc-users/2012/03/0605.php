<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 09:53:12 2012" -->
<!-- isoreceived="20120314135312" -->
<!-- sent="Wed, 14 Mar 2012 08:52:59 -0500" -->
<!-- isosent="20120314135259" -->
<!-- name="Hartmut Kaiser" -->
<!-- email="hartmut.kaiser_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="011a01cd01e9$c5264600$4f72d200$_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F605A2C.9000504_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Problems on SMP with 48 cores<br>
<strong>From:</strong> Hartmut Kaiser (<em>hartmut.kaiser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 09:52:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/04/0606.php">Petros Aristidou: "[hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>Previous message:</strong> <a href="0604.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe in reply to:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0598.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0598.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Le 14/03/2012 09:39, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Le 13/03/2012 19:08, Hartmut Kaiser a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -          hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset,
</span><br>
<span class="quotelev1">&gt; GroupMask[i].Group,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; GroupMask[i].Mask);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +          hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset,
</span><br>
<span class="quotelev1">&gt; 2*GroupMask[i].Group,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; GroupMask[i].Mask &amp; 0xfffffff);
</span><br>
<span class="quotelev2">&gt; &gt; There's a missing 'f' above.
</span><br>
<span class="quotelev2">&gt; &gt; Here's another almost untested patch, with additional debug printf.
</span><br>
<span class="quotelev2">&gt; &gt; Please remove the previous one and apply this one instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Grrr, I failed to fix the missing f. New patch attached.
</span><br>
<p>Your patch relies on two symbols which I'm not able to resolve:
<br>
hwloc_debug_bitmap_2args and hwloc_debug_2args. If I comment those the
<br>
picture has changed (see attached), but still no overall luck....
<br>
<p>Regards Hartmut
<br>
---------------
<br>
<a href="http://boost-spirit.com">http://boost-spirit.com</a>
<br>
<a href="http://stellar.cct.lsu.edu">http://stellar.cct.lsu.edu</a>
<br>
<p><p><p><p>

<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0605/lstopo-smp-48core-winx64.txt">lstopo-smp-48core-winx64.txt</a>
</ul>
<!-- attachment="lstopo-smp-48core-winx64.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0605/lstopo-smp-48core-winx64-output.txt">lstopo-smp-48core-winx64-output.txt</a>
</ul>
<!-- attachment="lstopo-smp-48core-winx64-output.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/04/0606.php">Petros Aristidou: "[hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>Previous message:</strong> <a href="0604.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe in reply to:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0598.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0598.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
