<?
$subject_val = "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 18 04:37:13 2014" -->
<!-- isoreceived="20140118093713" -->
<!-- sent="Sat, 18 Jan 2014 10:37:09 +0100" -->
<!-- isosent="20140118093709" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux" -->
<!-- id="52DA4B45.1050003_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2D05DE95-5F80-4DC5-B9FA-C4B65D3E365C_at_uberware.net" -->
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
<strong>Subject:</strong> Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-18 04:37:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0956.php">Robin Scher: "[hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0954.php">Samuel Thibault: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>In reply to:</strong> <a href="0952.php">Robin Scher: "[hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe try to disable some dependencies such as pci in hwloc
<br>
(--disable-pci), I wouldn't be surprised if there were issues there.
<br>
If that helps, please let us know what was enabled before (libpciaccess
<br>
(default), or libpci/pciutils (--enable-libpci)).
<br>
<p>Brice
<br>
<p><p><p>Le 18/01/2014 07:23, Robin Scher a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to build hwloc (1.8) on Linux (CentOS 6 x64) as a static library that will be linked into my own shared library that is part of my application. I am not using very much of hwloc, and I am trying to avoid having the full hwloc shared library distributed with my application just for the tiny bit of it that I am using. However, this turns out to be a challenge.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I configured with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-static --disable-shared
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which builds the static library just fine, but when I link it to my shared library I get this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: /usr/local/lib/libhwloc.a(topology.o): relocation R_X86_64_32S against `.rodata' can not be used when making a shared object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I tried re-configuring:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-static --disable-shared CXXFLAGS=-fPIC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but after rebuilding the library, I still get the same link error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a possible configuration? I can make my app work with hwloc in its own shared library distributed with my app, it just seems so wasteful for what I'm doing with it. I'm not the biggest Linux expert, so I'm pretty sure I'm doing something wrong, but I have managed to get other libraries I'm using (boost.regex and zeromq) to work this way, so it seems like it should be possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for any help you can provide.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Robin Scher
</span><br>
<span class="quotelev1">&gt; robin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; +1 (213) 448-0443
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0955/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0956.php">Robin Scher: "[hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0954.php">Samuel Thibault: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>In reply to:</strong> <a href="0952.php">Robin Scher: "[hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<!-- nextthread="start" -->
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
