<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 12:37:36 2012" -->
<!-- isoreceived="20120313163736" -->
<!-- sent="Tue, 13 Mar 2012 11:37:27 -0500" -->
<!-- isosent="20120313163727" -->
<!-- name="Hartmut Kaiser" -->
<!-- email="hartmut.kaiser_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="02ba01cd0137$944bff50$bce3fdf0$_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B713E147-F1CE-4657-8080-2F73E05E3ED7_at_cisco.com" -->
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
<strong>Date:</strong> 2012-03-13 12:37:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0587.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0585.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0583.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0589.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt; &gt;&gt; More investigation shows that the code currently assumes group (and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processor) masks to be 32 bit, which is not true on 64 bit systems.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No. What it assumes is that you have a sane compiler where ulong is
</span><br>
<span class="quotelev2">&gt; &gt; not 32bits on 64bits systems :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ew.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the implication here that some flavors of windows have 32 bit ulongs?
</span><br>
<p>No.
<br>
<p><span class="quotelev1">&gt; And we need to deal with that?  
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; Or is this a compiler-specific issue?
</span><br>
<span class="quotelev1">&gt; (i.e., mingw doesn't have these kinds of issues -- only MSVC does?)
</span><br>
<p>It's because on 64bit systems KAFFINITY has a different size than on 32 bit
<br>
systems. That's nothing compiler specific. Remember, your binaries generated
<br>
with mingw (64bit) fail for me as well (which was what got me looking into
<br>
the issue in the first place).
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
<li><strong>Next message:</strong> <a href="0587.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0585.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0583.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0589.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
