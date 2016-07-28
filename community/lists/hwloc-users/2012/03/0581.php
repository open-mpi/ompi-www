<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 12:10:10 2012" -->
<!-- isoreceived="20120313161010" -->
<!-- sent="Tue, 13 Mar 2012 17:10:05 +0100" -->
<!-- isosent="20120313161005" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="4F5F715D.5050508_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="02b101cd0133$0335a6a0$09a0f3e0$_at_gmail.com" -->
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
<strong>Date:</strong> 2012-03-13 12:10:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0582.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0580.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0580.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0583.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0583.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/03/2012 17:04, Hartmut Kaiser a &#233;crit :
<br>
<span class="quotelev3">&gt;&gt;&gt; But the problems I was seeing were not MSVC specific. It's a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proliferation of arcane (non-POSIX) function use (like strcasecmp,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.) missing use of HAVE_UNISTD_H, HAVE_STRINGS_H to wrap
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-standard headers, unsafe mixing of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int32&lt;-&gt;int64 data types, reliance on int (and other types) having a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; certain bit-size, totally unsafe shift operations, wide use of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (non-C-standard) gcc extensions, etc. Should I go on?
</span><br>
<span class="quotelev1">&gt; More investigation shows that the code currently assumes group (and
</span><br>
<span class="quotelev1">&gt; processor) masks to be 32 bit, which is not true on 64 bit systems.
</span><br>
<p>No. What it assumes is that you have a sane compiler where ulong is not
<br>
32bits on 64bits systems :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0582.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0580.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0580.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0583.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0583.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
