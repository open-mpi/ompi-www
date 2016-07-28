<?
$subject_val = "Re: [hwloc-users] problem with X11 using Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 04:23:35 2014" -->
<!-- isoreceived="20140917082335" -->
<!-- sent="Wed, 17 Sep 2014 10:23:33 +0200" -->
<!-- isosent="20140917082333" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] problem with X11 using Solaris" -->
<!-- id="54194505.5060006_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201409161243.s8GChHiM000176_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-17 04:23:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1080.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Previous message:</strong> <a href="1078.php">Siegmar Gross: "[hwloc-users] problem with X11 using Solaris"</a>
<li><strong>In reply to:</strong> <a href="1078.php">Siegmar Gross: "[hwloc-users] problem with X11 using Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1080.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the output of configure, the generated config.log and your
<br>
unmodified Xutil.h? My solaris/openindiana doesn't have that problem.
<br>
thanks
<br>
Brice
<br>
<p><p><p>Le 16/09/2014 14:43, Siegmar Gross a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; today I installed hwloc-1.9.1 on my machines (Solaris 10 Sparc (tyr),
</span><br>
<span class="quotelev1">&gt; Solaris 10 x86_64 (sunpc1), and openSUSE Linux 12.1 x86_64 (linpc1))
</span><br>
<span class="quotelev1">&gt; with Sun C 5.12. I could use &quot;--with-x&quot; on Solaris after modifying
</span><br>
<span class="quotelev1">&gt; /usr/include/X11/Xutil.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9 111 more /usr/include/X11/Xutil.h
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; /* You must include &lt;X11/Xlib.h&gt; before including this file */
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9 112 more /usr/include/X11/Xutil.h.modified 
</span><br>
<span class="quotelev1">&gt; /* $TOG: Xutil.h /main/45 1998/02/06 18:03:35 kaleb $ */
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; #ifndef _XLIB_H_
</span><br>
<span class="quotelev1">&gt; #include &lt;X11/Xlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifndef _XUTIL_H_
</span><br>
<span class="quotelev1">&gt; #define _XUTIL_H_
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody can fix this problem in the source
</span><br>
<span class="quotelev1">&gt; code (especially &quot;configure&quot;), so that I don't have to modify system
</span><br>
<span class="quotelev1">&gt; header files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached some log files, which show warnings (make) and errors
</span><br>
<span class="quotelev1">&gt; (make check). I used the following configure command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../hwloc-1.9.1/configure --prefix=/usr/local/hwloc-1.9.1\
</span><br>
<span class="quotelev1">&gt;   CC=cc CXX=CC \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;&quot; CXXFLAGS=&quot;&quot; FFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   --disable-libxml2 --disable-picky --with-x \
</span><br>
<span class="quotelev1">&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1079.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1079.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1079/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1080.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Previous message:</strong> <a href="1078.php">Siegmar Gross: "[hwloc-users] problem with X11 using Solaris"</a>
<li><strong>In reply to:</strong> <a href="1078.php">Siegmar Gross: "[hwloc-users] problem with X11 using Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1080.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
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
