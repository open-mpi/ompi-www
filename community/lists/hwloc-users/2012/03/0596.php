<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 06:02:24 2012" -->
<!-- isoreceived="20120314100224" -->
<!-- sent="Wed, 14 Mar 2012 11:02:18 +0100" -->
<!-- isosent="20120314100218" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="20120314100218.GD4564_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="186660807.79467.1331654693223.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Date:</strong> 2012-03-14 06:02:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0597.php">Samuel Thibault: "Re: [hwloc-users] V1.4.1: Windows x64 import library broken"</a>
<li><strong>Previous message:</strong> <a href="0595.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe in reply to:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0598.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hartmut Kaiser, le Tue 13 Mar 2012 17:04:53 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But the problems I was seeing were not MSVC specific. It's a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; proliferation of arcane (non-POSIX) function use (like strcasecmp,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; etc.) missing use of HAVE_UNISTD_H, HAVE_STRINGS_H to wrap
</span><br>
<span class="quotelev3">&gt; &gt; &gt; non-standard headers, unsafe mixing of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; int32&lt;-&gt;int64 data types, reliance on int (and other types) having a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; certain bit-size, totally unsafe shift operations, wide use of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (non-C-standard) gcc extensions, etc. Should I go on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More investigation shows that the code currently assumes group (and
</span><br>
<span class="quotelev1">&gt; processor) masks to be 32 bit, which is not true on 64 bit systems. For
</span><br>
<span class="quotelev1">&gt; instance this (topology-windows.c: line 643):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, GroupMask[i].Group,
</span><br>
<span class="quotelev1">&gt; GroupMask[i].Mask);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fails as GroupMask[i].Mask is a 64 bit value. 
</span><br>
<p>Btw, how does mask vs group work in 32bit programs on a 64bit system?
<br>
AIUI, processor groups are system-wide partitions, and on 64bit systems
<br>
they would be able to contain as many as 64 processors, but how are
<br>
these expressed to 32bit programs running on a 64bit Windows?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0597.php">Samuel Thibault: "Re: [hwloc-users] V1.4.1: Windows x64 import library broken"</a>
<li><strong>Previous message:</strong> <a href="0595.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe in reply to:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0598.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
