<?
$subject_val = "[hwloc-users] problem with X11 using Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 08:43:38 2014" -->
<!-- isoreceived="20140916124338" -->
<!-- sent="Tue, 16 Sep 2014 14:43:17 +0200 (CEST)" -->
<!-- isosent="20140916124317" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[hwloc-users] problem with X11 using Solaris" -->
<!-- id="201409161243.s8GChHiM000176_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-users] problem with X11 using Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-16 08:43:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1079.php">Brice Goglin: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Previous message:</strong> <a href="1077.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1079.php">Brice Goglin: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Reply:</strong> <a href="1079.php">Brice Goglin: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="1080.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="1082.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="1086.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed hwloc-1.9.1 on my machines (Solaris 10 Sparc (tyr),
<br>
Solaris 10 x86_64 (sunpc1), and openSUSE Linux 12.1 x86_64 (linpc1))
<br>
with Sun C 5.12. I could use &quot;--with-x&quot; on Solaris after modifying
<br>
/usr/include/X11/Xutil.h.
<br>
<p>tyr openmpi-1.9 111 more /usr/include/X11/Xutil.h
<br>
...
<br>
/* You must include &lt;X11/Xlib.h&gt; before including this file */
<br>
...
<br>
<p><p>tyr openmpi-1.9 112 more /usr/include/X11/Xutil.h.modified 
<br>
/* $TOG: Xutil.h /main/45 1998/02/06 18:03:35 kaleb $ */
<br>
...
<br>
#ifndef _XLIB_H_
<br>
#include &lt;X11/Xlib.h&gt;
<br>
#endif
<br>
<p>#ifndef _XUTIL_H_
<br>
#define _XUTIL_H_
<br>
...
<br>
<p><p>I would be grateful, if somebody can fix this problem in the source
<br>
code (especially &quot;configure&quot;), so that I don't have to modify system
<br>
header files.
<br>
<p><p>I have attached some log files, which show warnings (make) and errors
<br>
(make check). I used the following configure command.
<br>
<p>../hwloc-1.9.1/configure --prefix=/usr/local/hwloc-1.9.1\
<br>
&nbsp;&nbsp;CC=cc CXX=CC \
<br>
&nbsp;&nbsp;CFLAGS=&quot;&quot; CXXFLAGS=&quot;&quot; FFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;--disable-libxml2 --disable-picky --with-x \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>
<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1078/log-files.tar.gz">log-files.tar.gz</a>
</ul>
<!-- attachment="log-files.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1079.php">Brice Goglin: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Previous message:</strong> <a href="1077.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1079.php">Brice Goglin: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Reply:</strong> <a href="1079.php">Brice Goglin: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="1080.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="1082.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="1086.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
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
