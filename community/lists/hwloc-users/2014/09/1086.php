<?
$subject_val = "Re: [hwloc-users] problem with X11 using Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 08:17:53 2014" -->
<!-- isoreceived="20140918121753" -->
<!-- sent="Thu, 18 Sep 2014 14:17:26 +0200 (CEST)" -->
<!-- isosent="20140918121726" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] problem with X11 using Solaris" -->
<!-- id="201409181217.s8ICHQ04012417_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[hwloc-users] problem with X11 using Solaris" -->
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
<strong>Subject:</strong> Re: [hwloc-users] problem with X11 using Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 08:17:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1087.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="1085.php">Brice Goglin: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="1078.php">Siegmar Gross: "[hwloc-users] problem with X11 using Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p><span class="quotelev1">&gt; I just pushed a fix. Can you verify that this tarball enables X
</span><br>
<span class="quotelev1">&gt; automatically and properly?
</span><br>
<p>Yes, it works fine. Thank you very much for your help.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><a href="https://ci.inria.fr/hwloc/job/master-0-tarball/lastSuccessfulBuild/artifact/hwlo">https://ci.inria.fr/hwloc/job/master-0-tarball/lastSuccessfulBuild/artifact/hwlo</a>
<br>
c-master-20140918.1131.git005a7e8.tar.gz
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am looking at the warnings and make check failures you sent.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 17/09/2014 17:45, Siegmar Gross a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; sorry, I pressed the send button, before my attachements were complete.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you send the output of configure, the generated config.log and your
</span><br>
<span class="quotelev3">&gt; &gt;&gt; unmodified Xutil.h? My solaris/openindiana doesn't have that problem.
</span><br>
<span class="quotelev2">&gt; &gt; Yes, I have used the following commands to build a working &quot;lstopo&quot;
</span><br>
<span class="quotelev2">&gt; &gt; with graphics output.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cd /usr/include/X11/
</span><br>
<span class="quotelev2">&gt; &gt; cp -p Xutil.h.modified Xutil.h
</span><br>
<span class="quotelev2">&gt; &gt; cd /export2/src/openmpi-1.9
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mkdir hwloc-1.9.1-${SYSTEM_ENV}.${MACHINE_ENV}
</span><br>
<span class="quotelev2">&gt; &gt; cd hwloc-1.9.1-${SYSTEM_ENV}.${MACHINE_ENV}
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../hwloc-1.9.1/configure --prefix=/usr/local/hwloc-1.9.1\
</span><br>
<span class="quotelev2">&gt; &gt;   CC=cc CXX=CC \
</span><br>
<span class="quotelev2">&gt; &gt;   CFLAGS=&quot;&quot; CXXFLAGS=&quot;&quot; FFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   --disable-libxml2 --disable-picky --with-x \
</span><br>
<span class="quotelev2">&gt; &gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV
</span><br>
<span class="quotelev2">&gt; &gt; make install |&amp; tee log.make-install.$SYSTEM_ENV.$MACHINE_ENV
</span><br>
<span class="quotelev2">&gt; &gt; make check |&amp; tee log.make-check.$SYSTEM_ENV.$MACHINE_ENV
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cd /usr/include/X11/
</span><br>
<span class="quotelev2">&gt; &gt; cp -p Xutil.h.orig Xutil.h
</span><br>
<span class="quotelev2">&gt; &gt; cd /export2/src/openmpi-1.9
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get the following files and output with an unmodified Xutil.h.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 108 dir /usr/local/hwloc-1.9.1/bin/
</span><br>
<span class="quotelev2">&gt; &gt; total 856
</span><br>
<span class="quotelev2">&gt; &gt; drwxr-xr-x 2 root root    512 Sep 17 17:09 .
</span><br>
<span class="quotelev2">&gt; &gt; drwxr-xr-x 6 root root    512 Sep 17 17:09 ..
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  38688 Sep 17 17:09 hwloc-annotate
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  25928 Sep 17 17:09 hwloc-assembler
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root   2376 Sep 17 17:09 hwloc-assembler-remote
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  48708 Sep 17 17:09 hwloc-bind
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  49748 Sep 17 17:09 hwloc-calc
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root   4131 Sep 17 17:09 hwloc-compress-dir
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  26692 Sep 17 17:09 hwloc-diff
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  32528 Sep 17 17:09 hwloc-distances
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  35188 Sep 17 17:09 hwloc-distrib
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  49972 Sep 17 17:09 hwloc-info
</span><br>
<span class="quotelev2">&gt; &gt; lrwxrwxrwx 1 root root     18 Sep 17 17:09 hwloc-ls -&gt; lstopo-no-graphics
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  26792 Sep 17 17:09 hwloc-patch
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  34380 Sep 17 17:09 hwloc-ps
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root 244468 Sep 17 17:09 lstopo
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root 225288 Sep 17 17:09 lstopo-no-graphics
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 109 lstopo
</span><br>
<span class="quotelev2">&gt; &gt; Machine (4096MB)
</span><br>
<span class="quotelev2">&gt; &gt;   NUMANode L#0 (P#2 2048MB) + Socket L#0 + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt; &gt;   NUMANode L#1 (P#1 2048MB) + Socket L#1 + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 110 su -
</span><br>
<span class="quotelev2">&gt; &gt; Password: 
</span><br>
<span class="quotelev2">&gt; &gt; Sun Microsystems Inc.   SunOS 5.10      Generic January 2005
</span><br>
<span class="quotelev2">&gt; &gt; # cd /usr/local
</span><br>
<span class="quotelev2">&gt; &gt; # mv hwloc-1.9.1 hwloc-1.9.1_unmodified-Xutil.h
</span><br>
<span class="quotelev2">&gt; &gt; # exit
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 111 dir /usr/local/hwloc-1.9.1/bin/
</span><br>
<span class="quotelev2">&gt; &gt; total 864
</span><br>
<span class="quotelev2">&gt; &gt; drwxr-xr-x 2 root root    512 Sep 17 17:21 .
</span><br>
<span class="quotelev2">&gt; &gt; drwxr-xr-x 6 root root    512 Sep 17 17:21 ..
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  38688 Sep 17 17:21 hwloc-annotate
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  25928 Sep 17 17:21 hwloc-assembler
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root   2376 Sep 17 17:21 hwloc-assembler-remote
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  48708 Sep 17 17:21 hwloc-bind
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  49748 Sep 17 17:21 hwloc-calc
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root   4131 Sep 17 17:21 hwloc-compress-dir
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  26692 Sep 17 17:21 hwloc-diff
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  32528 Sep 17 17:21 hwloc-distances
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  35188 Sep 17 17:21 hwloc-distrib
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  49972 Sep 17 17:21 hwloc-info
</span><br>
<span class="quotelev2">&gt; &gt; lrwxrwxrwx 1 root root     18 Sep 17 17:21 hwloc-ls -&gt; lstopo-no-graphics
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  26792 Sep 17 17:21 hwloc-patch
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root  34380 Sep 17 17:21 hwloc-ps
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root 250116 Sep 17 17:21 lstopo
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root 225288 Sep 17 17:21 lstopo-no-graphics
</span><br>
<span class="quotelev2">&gt; &gt; tyr local 112 lstopo
</span><br>
<span class="quotelev2">&gt; &gt; X connection to localhost:13.0 broken (explicit kill or server shutdown).
</span><br>
<span class="quotelev2">&gt; &gt; tyr local 113 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The error message came up, when I closed the lstopo window. Do you need
</span><br>
<span class="quotelev2">&gt; &gt; anything else?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Le 16/09/2014 14:43, Siegmar Gross a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; today I installed hwloc-1.9.1 on my machines (Solaris 10 Sparc (tyr),
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Solaris 10 x86_64 (sunpc1), and openSUSE Linux 12.1 x86_64 (linpc1))
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with Sun C 5.12. I could use &quot;--with-x&quot; on Solaris after modifying
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/include/X11/Xutil.h.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr openmpi-1.9 111 more /usr/include/X11/Xutil.h
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /* You must include &lt;X11/Xlib.h&gt; before including this file */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr openmpi-1.9 112 more /usr/include/X11/Xutil.h.modified 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /* $TOG: Xutil.h /main/45 1998/02/06 18:03:35 kaleb $ */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #ifndef _XLIB_H_
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &lt;X11/Xlib.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #endif
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #ifndef _XUTIL_H_
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #define _XUTIL_H_
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I would be grateful, if somebody can fix this problem in the source
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; code (especially &quot;configure&quot;), so that I don't have to modify system
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; header files.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have attached some log files, which show warnings (make) and errors
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (make check). I used the following configure command.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ../hwloc-1.9.1/configure --prefix=/usr/local/hwloc-1.9.1\
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   CC=cc CXX=CC \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   CFLAGS=&quot;&quot; CXXFLAGS=&quot;&quot; FFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   --disable-libxml2 --disable-picky --with-x \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1087.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="1085.php">Brice Goglin: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="1078.php">Siegmar Gross: "[hwloc-users] problem with X11 using Solaris"</a>
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
