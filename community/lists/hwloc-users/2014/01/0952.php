<?
$subject_val = "[hwloc-users] How to build hwloc static to link into a shared lib on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 18 01:23:26 2014" -->
<!-- isoreceived="20140118062326" -->
<!-- sent="Fri, 17 Jan 2014 22:23:21 -0800" -->
<!-- isosent="20140118062321" -->
<!-- name="Robin Scher" -->
<!-- email="robin_at_[hidden]" -->
<!-- subject="[hwloc-users] How to build hwloc static to link into a shared lib on Linux" -->
<!-- id="2D05DE95-5F80-4DC5-B9FA-C4B65D3E365C_at_uberware.net" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [hwloc-users] How to build hwloc static to link into a shared lib on Linux<br>
<strong>From:</strong> Robin Scher (<em>robin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-18 01:23:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0953.php">Erik Schnetter: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Previous message:</strong> <a href="0951.php">Doug Roberts: "Re: [hwloc-users] hwloc errors on program startup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0953.php">Erik Schnetter: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Reply:</strong> <a href="0953.php">Erik Schnetter: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Reply:</strong> <a href="0955.php">Brice Goglin: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I&#146;m trying to build hwloc (1.8) on Linux (CentOS 6 x64) as a static library that will be linked into my own shared library that is part of my application. I am not using very much of hwloc, and I am trying to avoid having the full hwloc shared library distributed with my application just for the tiny bit of it that I am using. However, this turns out to be a challenge.
<br>
<p>I configured with:
<br>
<p>./configure --enable-static --disable-shared
<br>
<p>which builds the static library just fine, but when I link it to my shared library I get this error:
<br>
<p>/usr/bin/ld: /usr/local/lib/libhwloc.a(topology.o): relocation R_X86_64_32S against `.rodata' can not be used when making a shared object; recompile with -fPIC
<br>
<p>So, I tried re-configuring:
<br>
<p>./configure --enable-static --disable-shared CXXFLAGS=-fPIC
<br>
<p>but after rebuilding the library, I still get the same link error.
<br>
<p>Is this a possible configuration? I can make my app work with hwloc in its own shared library distributed with my app, it just seems so wasteful for what I&#146;m doing with it. I&#146;m not the biggest Linux expert, so I&#146;m pretty sure I&#146;m doing something wrong, but I have managed to get other libraries I&#146;m using (boost.regex and zeromq) to work this way, so it seems like it should be possible.
<br>
<p>Thank you for any help you can provide.
<br>
<p>Robin Scher
<br>
robin_at_[hidden]
<br>
+1 (213) 448-0443
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0952/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0953.php">Erik Schnetter: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Previous message:</strong> <a href="0951.php">Doug Roberts: "Re: [hwloc-users] hwloc errors on program startup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0953.php">Erik Schnetter: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Reply:</strong> <a href="0953.php">Erik Schnetter: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Reply:</strong> <a href="0955.php">Brice Goglin: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
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
