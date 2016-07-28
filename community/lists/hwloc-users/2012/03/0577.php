<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 10:15:11 2012" -->
<!-- isoreceived="20120313141511" -->
<!-- sent="Tue, 13 Mar 2012 07:15:00 -0700" -->
<!-- isosent="20120313141500" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="12426207-FE34-4C6F-93A3-F84D4323D034_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="01fe01cd0117$f5e00fb0$e1a02f10$_at_gmail.com" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 10:15:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0578.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0576.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0576.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0578.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0578.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0579.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0580.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 13, 2012, at 5:51 AM, Hartmut Kaiser wrote:
<br>
<p><span class="quotelev1">&gt; But the problems I was seeing were not MSVC specific. It's a proliferation
</span><br>
<span class="quotelev1">&gt; of arcane (non-POSIX) function use (like strcasecmp, etc.) missing use of
</span><br>
<span class="quotelev1">&gt; HAVE_UNISTD_H, HAVE_STRINGS_H to wrap non-standard headers, unsafe mixing of
</span><br>
<span class="quotelev1">&gt; int32&lt;-&gt;int64 data types, reliance on int (and other types) having a certain
</span><br>
<span class="quotelev1">&gt; bit-size, totally unsafe shift operations, wide use of (non-C-standard) gcc
</span><br>
<span class="quotelev1">&gt; extensions, etc. Should I go on?
</span><br>
<p><p>Can you send patches?
<br>
<p>FWIW, hwloc is working for me with a wide array of POSIX-ish compilers on POSIX-ish platforms (albeit perhaps many of them are quite similar -- 64 bit systems on more-or-less modern-ish hardware).  There's quite a degree of portability built in, but if we missed some stuff, well, we're not perfect.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0578.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0576.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0576.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0578.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0578.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0579.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0580.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
