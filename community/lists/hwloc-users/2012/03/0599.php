<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 13:44:18 2012" -->
<!-- isoreceived="20120314174418" -->
<!-- sent="Wed, 14 Mar 2012 18:44:13 +0100" -->
<!-- isosent="20120314174413" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="20120314174413.GY4564_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120314171637.GX4564_at_type.bordeaux.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 13:44:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0600.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0598.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0598.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0600.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0600.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault, le Wed 14 Mar 2012 18:16:37 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Hartmut Kaiser, le Wed 14 Mar 2012 08:52:59 -0500, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Le 14/03/2012 09:39, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Le 13/03/2012 19:08, Hartmut Kaiser a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; -          hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; GroupMask[i].Group,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; GroupMask[i].Mask);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; +          hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2*GroupMask[i].Group,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; GroupMask[i].Mask &amp; 0xfffffff);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; There's a missing 'f' above.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Here's another almost untested patch, with additional debug printf.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Please remove the previous one and apply this one instead.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Grrr, I failed to fix the missing f. New patch attached.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Your patch relies on two symbols which I'm not able to resolve:
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_debug_bitmap_2args and hwloc_debug_2args. If I comment those the
</span><br>
<span class="quotelev2">&gt; &gt; picture has changed (see attached), but still no overall luck....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a fixed patch concerning the debugging statements.
</span><br>
<p>Here is a fixed patch concerning the ith_ulong operations
<br>
<p>Samuel
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0599/winfix.patch">winfix.patch</a>
</ul>
<!-- attachment="winfix.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0600.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0598.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0598.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0600.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0600.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
