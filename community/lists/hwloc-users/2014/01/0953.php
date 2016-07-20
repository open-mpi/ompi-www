<?
$subject_val = "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 18 01:29:32 2014" -->
<!-- isoreceived="20140118062932" -->
<!-- sent="Sat, 18 Jan 2014 01:29:29 -0500" -->
<!-- isosent="20140118062929" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux" -->
<!-- id="E3752E40-3801-4205-9E1F-BD7474C6ABD3_at_gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-18 01:29:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0954.php">Samuel Thibault: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Previous message:</strong> <a href="0952.php">Robin Scher: "[hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>In reply to:</strong> <a href="0952.php">Robin Scher: "[hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0954.php">Samuel Thibault: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Reply:</strong> <a href="0954.php">Samuel Thibault: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Robin
<br>
<p>You probably need to set CFLAGS in addition to CXXFLAGS.
<br>
<p>-erik
<br>
<p>On Jan 18, 2014, at 1:23 , Robin Scher &lt;robin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;m trying to build hwloc (1.8) on Linux (CentOS 6 x64) as a static library that will be linked into my own shared library that is part of my application. I am not using very much of hwloc, and I am trying to avoid having the full hwloc shared library distributed with my application just for the tiny bit of it that I am using. However, this turns out to be a challenge.
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
<span class="quotelev1">&gt; Is this a possible configuration? I can make my app work with hwloc in its own shared library distributed with my app, it just seems so wasteful for what I&#146;m doing with it. I&#146;m not the biggest Linux expert, so I&#146;m pretty sure I&#146;m doing something wrong, but I have managed to get other libraries I&#146;m using (boost.regex and zeromq) to work this way, so it seems like it should be possible.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
My email is as private as my paper mail. I therefore support encrypting
and signing email messages. Get my PGP key from <a href="http://pgp.mit.edu/">http://pgp.mit.edu/</a>.

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0953/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0954.php">Samuel Thibault: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Previous message:</strong> <a href="0952.php">Robin Scher: "[hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>In reply to:</strong> <a href="0952.php">Robin Scher: "[hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0954.php">Samuel Thibault: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Reply:</strong> <a href="0954.php">Samuel Thibault: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
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
