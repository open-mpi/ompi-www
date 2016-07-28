<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 12:35:15 2012" -->
<!-- isoreceived="20120313163515" -->
<!-- sent="Tue, 13 Mar 2012 17:35:11 +0100" -->
<!-- isosent="20120313163511" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="20120313163511.GN4466_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="527782489.79562.1331655045364.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Date:</strong> 2012-03-13 12:35:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0585.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0583.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe in reply to:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0585.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 13 Mar 2012 17:10:45 +0100, a &#233;crit :
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
<span class="quotelev2">&gt; &gt; processor) masks to be 32 bit, which is not true on 64 bit systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No. What it assumes is that you have a sane compiler where ulong is not
</span><br>
<span class="quotelev1">&gt; 32bits on 64bits systems :)
</span><br>
<p>Nothing says that an ulong is 64bit on a 64bit system. Only intptr_t can
<br>
be assumed to be 64bit. That's why we have HWLOC_BITS_PER_LONG actually.
<br>
<p>In my memory I took care in the windows case that longs are 32bit, and
<br>
used DWORD for ulong. But since I had no test machine, I couldn't
<br>
promise it was working :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0585.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0583.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe in reply to:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0585.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
