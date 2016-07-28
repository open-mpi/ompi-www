<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 08:51:16 2012" -->
<!-- isoreceived="20120313125116" -->
<!-- sent="Tue, 13 Mar 2012 07:51:06 -0500" -->
<!-- isosent="20120313125106" -->
<!-- name="Hartmut Kaiser" -->
<!-- email="hartmut.kaiser_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="01fe01cd0117$f5e00fb0$e1a02f10$_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120313123305.GG4466_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2012-03-13 08:51:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0577.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0575.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0574.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0577.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0577.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Hartmut Kaiser, le Tue 13 Mar 2012 12:46:05 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Trying to use hwloc on a 48 bit core machine (Windows x64) causes
</span><br>
<span class="quotelev2">&gt; &gt; problems, though. Any information requests for processing units above
</span><br>
<span class="quotelev2">&gt; &gt; number 32 return garbage (see also the attached output of 'lstopo -of
</span><br>
<span class="quotelev1">&gt; txt').
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, so it didn't magically work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately I have no access to a windows machine with that many cores,
</span><br>
<span class="quotelev1">&gt; so I could not test &gt;sizeof(unsigned long) cores detection myself, it's
</span><br>
<span class="quotelev1">&gt; thus not very surprising that it does not work.
</span><br>
<p>What do you suggest? (Let me add that I tested the 64bit version of the
<br>
library) 
<br>
Would giving you access to our windows box help?
<br>
<p><span class="quotelev2">&gt; &gt; I tried to recompile the library using MSVC which would allow me to
</span><br>
<span class="quotelev2">&gt; &gt; debug the issue, but after several hours of tweaking I gave up. As it
</span><br>
<span class="quotelev2">&gt; &gt; turns out the code base is everything but portable, which is really
</span><br>
<span class="quotelev2">&gt; &gt; unfortunate for a library which is supposed to be cross platform.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid to have to answer that MSVC does everything but respecting
</span><br>
<span class="quotelev1">&gt; standards, even when they are more that 10 years old. The hwloc code
</span><br>
<span class="quotelev1">&gt; compiles as such on a variety of unix compilers, and we didn't need many
</span><br>
<span class="quotelev1">&gt; tweaks for that. 
</span><br>
<p>I'm not saying they do. However, it's a widely used compiler and supporting
<br>
it is a must for a cross-platform library (IMHO). 
<br>
<p>But the problems I was seeing were not MSVC specific. It's a proliferation
<br>
of arcane (non-POSIX) function use (like strcasecmp, etc.) missing use of
<br>
HAVE_UNISTD_H, HAVE_STRINGS_H to wrap non-standard headers, unsafe mixing of
<br>
int32&lt;-&gt;int64 data types, reliance on int (and other types) having a certain
<br>
bit-size, totally unsafe shift operations, wide use of (non-C-standard) gcc
<br>
extensions, etc. Should I go on?
<br>
<p><span class="quotelev1">&gt; The mingw toolchain saves a lot of such concerns, so I
</span><br>
<span class="quotelev1">&gt; can only advise to use it.
</span><br>
<p>Sure.
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
<li><strong>Next message:</strong> <a href="0577.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0575.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0574.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0577.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0577.php">Jeffrey Squyres: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
