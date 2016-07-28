<?
$subject_val = "Re: [hwloc-users] hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 18:45:27 2010" -->
<!-- isoreceived="20100618224527" -->
<!-- sent="Sat, 19 Jun 2010 00:45:17 +0200" -->
<!-- isosent="20100618224517" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc and rpath" -->
<!-- id="201006190045.17883.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100618222518.GK4931_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc and rpath<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 18:45:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0174.php">Jirka Hladky: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0172.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0171.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0176.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0176.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0177.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Saturday, June 19, 2010 12:25:18 am Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Jirka Hladky, le Sat 19 Jun 2010 00:09:27 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Based on the manual above I think you should have
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; lstopo_LDADD = libhwloc.la
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are using LIBS, which is less burden and should have the same effect.
</span><br>
<span class="quotelev1">&gt; Does using LDADD actually fix your rpath issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p>Hi Samuel,
<br>
<p>I haven't tried it yet. In any case, rpath is already in Makefile.in which is 
<br>
shipped with hwloc-1.0.1:
<br>
<p>==========================================================
<br>
$find ./ -name Makefile.in -exec grep rpath {} \+
<br>
./src/Makefile.in:@HWLOC_BUILD_STANDALONE_TRUE_at_am_libhwloc_la_rpath = -rpath 
<br>
$(libdir)
<br>
./src/Makefile.in:@HWLOC_BUILD_STANDALONE_FALSE_at_am_libhwloc_embedded_la_rpath =
<br>
./src/Makefile.in:      $(AM_V_CCLD)$(libhwloc_la_LINK) $(am_libhwloc_la_rpath) 
<br>
$(libhwloc_la_OBJECTS) $(libhwloc_la_LIBADD) $(LIBS)
<br>
./src/Makefile.in:      $(AM_V_CCLD)$(libhwloc_embedded_la_LINK) 
<br>
$(am_libhwloc_embedded_la_rpath) $(libhwloc_embedded_la_OBJECTS) 
<br>
$(libhwloc_embedded_la_LIBADD) $(LIBS)
<br>
./tests/ports/Makefile.in:@HWLOC_BUILD_TESTS_TRUE@@HWLOC_HAVE_LINUX_TRUE_at_am_libhwloc_ports_la_rpath 
<br>
=
<br>
./tests/ports/Makefile.in:      $(AM_V_CCLD)$(LINK) 
<br>
$(am_libhwloc_ports_la_rpath) $(libhwloc_ports_la_OBJECTS) 
<br>
$(libhwloc_ports_la_LIBADD) $(LIBS)
<br>
=======================================================
<br>
<p>So apparently, rpath problem occurs already on your site. 
<br>
<p><span class="quotelev1">&gt; So apparently libtool somehow doesn't realizes that /usr/lib64 is in the
</span><br>
<span class="quotelev1">&gt; standard search path.  I'd tend to believe it's a bug in libtool or the
</span><br>
<span class="quotelev1">&gt; distribution which don't understand each other.  How does configure get
</span><br>
<span class="quotelev1">&gt; invoked?  What is the output of gcc -print-search-dirs?
</span><br>
<p>I have double checked it. 
<br>
<p>/usr/lib64 is included in the output of gcc -print-search-dirs.
<br>
<p><p><span class="quotelev1">&gt; (On debian, we use --libdir=/usr/lib/x86_64-linux-gnu and that doesn't
</span><br>
<span class="quotelev1">&gt; introduce any rpath).
</span><br>
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
<p>--libdir=/usr/lib64 seems OK with me.
<br>
<p>I do believe that problems comes from Makefile.in having &quot;rpath&quot; option already 
<br>
in. It can be bug in automake (but you are using latest stable version) or a 
<br>
mistake in Makefile.am.....
<br>
<p>Thanks for looking into it!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0174.php">Jirka Hladky: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0172.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0171.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0176.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0176.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0177.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
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
