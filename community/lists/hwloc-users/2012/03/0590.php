<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 13:57:05 2012" -->
<!-- isoreceived="20120313175705" -->
<!-- sent="Tue, 13 Mar 2012 18:57:01 +0100" -->
<!-- isosent="20120313175701" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="20120313175701.GR4466_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1261285127.80547.1331661329645.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Date:</strong> 2012-03-13 13:57:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0591.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0589.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe in reply to:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0591.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0591.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 13 Mar 2012 18:55:29 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 13/03/2012 17:04, Hartmut Kaiser a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But the problems I was seeing were not MSVC specific. It's a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; proliferation of arcane (non-POSIX) function use (like strcasecmp,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; etc.) missing use of HAVE_UNISTD_H, HAVE_STRINGS_H to wrap
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; non-standard headers, unsafe mixing of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; int32&lt;-&gt;int64 data types, reliance on int (and other types) having a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; certain bit-size, totally unsafe shift operations, wide use of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (non-C-standard) gcc extensions, etc. Should I go on?
</span><br>
<span class="quotelev2">&gt; &gt; More investigation shows that the code currently assumes group (and
</span><br>
<span class="quotelev2">&gt; &gt; processor) masks to be 32 bit, which is not true on 64 bit systems. For
</span><br>
<span class="quotelev2">&gt; &gt; instance this (topology-windows.c: line 643):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, GroupMask[i].Group,
</span><br>
<span class="quotelev2">&gt; &gt; GroupMask[i].Mask);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try applying something like the patch below. Totally untested obviously,
</span><br>
<span class="quotelev1">&gt; but we'll see if that starts improving lstopo.
</span><br>
<p>That won't work on 32bit systems, where the mask is 32bit only and thus
<br>
<span class="quotelev2">&gt;&gt; 32 is undefined. He will probably be able to provide me with an
</span><br>
account on such windows system, let's just wait for that.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0591.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0589.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe in reply to:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0591.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0591.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
