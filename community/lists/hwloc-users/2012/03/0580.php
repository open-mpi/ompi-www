<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 12:04:56 2012" -->
<!-- isoreceived="20120313160456" -->
<!-- sent="Tue, 13 Mar 2012 11:04:44 -0500" -->
<!-- isosent="20120313160444" -->
<!-- name="Hartmut Kaiser" -->
<!-- email="hartmut.kaiser_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="02b101cd0133$0335a6a0$09a0f3e0$_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="12426207-FE34-4C6F-93A3-F84D4323D034_at_cisco.com" -->
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
<strong>Date:</strong> 2012-03-13 12:04:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0581.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0579.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0577.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0581.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0581.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0589.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; But the problems I was seeing were not MSVC specific. It's a
</span><br>
<span class="quotelev2">&gt; &gt; proliferation of arcane (non-POSIX) function use (like strcasecmp,
</span><br>
<span class="quotelev2">&gt; &gt; etc.) missing use of HAVE_UNISTD_H, HAVE_STRINGS_H to wrap
</span><br>
<span class="quotelev2">&gt; &gt; non-standard headers, unsafe mixing of
</span><br>
<span class="quotelev2">&gt; &gt; int32&lt;-&gt;int64 data types, reliance on int (and other types) having a
</span><br>
<span class="quotelev2">&gt; &gt; certain bit-size, totally unsafe shift operations, wide use of
</span><br>
<span class="quotelev2">&gt; &gt; (non-C-standard) gcc extensions, etc. Should I go on?
</span><br>
<p>More investigation shows that the code currently assumes group (and
<br>
processor) masks to be 32 bit, which is not true on 64 bit systems. For
<br>
instance this (topology-windows.c: line 643):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, GroupMask[i].Group,
<br>
GroupMask[i].Mask);
<br>
<p>fails as GroupMask[i].Mask is a 64 bit value. 
<br>
<p>There are probably other places where the same assumption leads to problems.
<br>
<p>Regards Hartmut
<br>
---------------
<br>
<a href="http://boost-spirit.com">http://boost-spirit.com</a>
<br>
<a href="http://stellar.cct.lsu.edu">http://stellar.cct.lsu.edu</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0581.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0579.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0577.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0581.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0581.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0589.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
