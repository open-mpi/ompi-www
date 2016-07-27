<?
$subject_val = "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 15:19:05 2010" -->
<!-- isoreceived="20100621191905" -->
<!-- sent="Mon, 21 Jun 2010 21:18:58 +0200" -->
<!-- isosent="20100621191858" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users]   hwloc and rpath" -->
<!-- id="201006212118.58561.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="59213FCB-24AF-4F62-B4F3-2C0CA4D0C0AE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-users]   hwloc and rpath<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 15:18:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1068.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1066.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="1066.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1068.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1068.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday, June 21, 2010 09:07:35 pm Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 21, 2010, at 12:54 PM, Jirka Hladky wrote:
</span><br>
<span class="quotelev2">&gt; &gt; However, libtool does not look into /usr/lib64 by default. I have found 2
</span><br>
<span class="quotelev2">&gt; &gt; ways
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; how to fix it:
</span><br>
<span class="quotelev1">&gt; Are we installing to /usr/lib64 by default?  Or do you have something in
</span><br>
<span class="quotelev1">&gt; your specfile or your system's default that is resetting libdir to
</span><br>
<span class="quotelev1">&gt; /usr/lib64?
</span><br>
<p>Hi Jeff,
<br>
<p>I'm using default macro 
<br>
%configure
<br>
<p>in RPM spec file
<br>
<p>which will set appropriate location for libraries, binaries, etc. This is the 
<br>
result:
<br>
======================================================
<br>
+ ./configure --build=x86_64-unknown-linux-gnu --host=x86_64-unknown-linux-gnu 
<br>
--target=x86_64-redhat-linux-gnu --program-prefix= --prefix=/usr --exec-
<br>
prefix=/usr --bindir=/usr/bin --sbindir=/usr/sbin --sysconfdir=/etc --
<br>
datadir=/usr/share --includedir=/usr/include --libdir=/usr/lib64 --
<br>
libexecdir=/usr/libexec --localstatedir=/var --sharedstatedir=/var/lib --
<br>
mandir=/usr/share/man --infodir=/usr/share/info
<br>
======================================================
<br>
<p><span class="quotelev1">&gt; How does one check to see if rpath was applied to the final
</span><br>
<span class="quotelev1">&gt; .libs/libhwloc.so.0.1.0?  I tried objdump and didn't see anything, but I
</span><br>
<span class="quotelev1">&gt; might be looking in the wrong place:
</span><br>
You need to check the binary, not library. I'm using chrpath utility. On my 
<br>
Fedora it's part of chrpath package (chrpath-0.13-6.fc12.x86_64)
<br>
<p>$which lstopo 
<br>
/usr/local/bin/lstopo
<br>
<p>$chrpath --list /usr/local/bin/lstopo
<br>
/usr/local/bin/lstopo: RPATH=/usr/local/lib
<br>
<p><p><span class="quotelev1">&gt; This is definitely not a preferred solution; I don't want to get in the
</span><br>
<span class="quotelev1">&gt; business of frobbing a generated libtool script (we do it in Open MPI to
</span><br>
<span class="quotelev1">&gt; work around esoteric bugs and it's awful awful awful).
</span><br>
I completely agree with you!
<br>
<p>Please give me a pointer to 1.0.2 version. I will give it a try, perhaps it 
<br>
has been already fixed.
<br>
<p>Thanks
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1068.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1066.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="1066.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1068.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1068.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
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
