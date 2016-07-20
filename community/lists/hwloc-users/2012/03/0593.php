<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 15:09:15 2012" -->
<!-- isoreceived="20120313190915" -->
<!-- sent="Tue, 13 Mar 2012 20:09:09 +0100" -->
<!-- isosent="20120313190909" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="4F5F9B55.1000700_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="003c01cd0144$56cf4300$046dc900$_at_gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 15:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0594.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0592.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0592.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0595.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/03/2012 19:08, Hartmut Kaiser a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; Le 13/03/2012 17:04, Hartmut Kaiser a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But the problems I was seeing were not MSVC specific. It's a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; proliferation of arcane (non-POSIX) function use (like strcasecmp,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; etc.) missing use of HAVE_UNISTD_H, HAVE_STRINGS_H to wrap
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; non-standard headers, unsafe mixing of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int32&lt;-&gt;int64 data types, reliance on int (and other types) having a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; certain bit-size, totally unsafe shift operations, wide use of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (non-C-standard) gcc extensions, etc. Should I go on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More investigation shows that the code currently assumes group (and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor) masks to be 32 bit, which is not true on 64 bit systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For instance this (topology-windows.c: line 643):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, GroupMask[i].Group,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GroupMask[i].Mask);
</span><br>
<span class="quotelev2">&gt;&gt; Try applying something like the patch below. Totally untested obviously,
</span><br>
<span class="quotelev2">&gt;&gt; but we'll see if that starts improving lstopo.
</span><br>
<span class="quotelev1">&gt; Partially better, but mostly just differently wrong :-P (see attached debug
</span><br>
<span class="quotelev1">&gt; output and straight console output of lstopo)
</span><br>
<p>Thanks. The remaining problems don't look obvious. Something strange
<br>
seems to happen right after the windows backend added all objects. I
<br>
wonder if we have some problems in the bitmap management code. Can you
<br>
try to run some tests ? Maybe not all of make check, but at least those
<br>
that have &quot;bitmap&quot; in their name.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0594.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0592.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0592.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0595.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
