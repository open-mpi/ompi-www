<?
$subject_val = "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 15:58:14 2010" -->
<!-- isoreceived="20100621195814" -->
<!-- sent="Mon, 21 Jun 2010 15:58:08 -0400" -->
<!-- isosent="20100621195808" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users]   hwloc and rpath" -->
<!-- id="AF28FD91-695E-46A3-B78E-6B27174809E4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201006212118.58561.jhladky_at_redhat.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 15:58:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1069.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1067.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="1067.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1069.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1069.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 21, 2010, at 3:18 PM, Jirka Hladky wrote:
<br>
<span class="quotelev1">&gt; $chrpath --list /usr/local/bin/lstopo
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/lstopo: RPATH=/usr/local/lib
</span><br>
<p>Ah, I understand now.  And I'm seeing the same behavior:
<br>
<p>$ cd util
<br>
$ rm lstopo
<br>
$ make V=1
<br>
/bin/sh ../libtool  --tag=CC   --mode=link gcc -I/usr/include/cairo -I/usr/include/freetype2 -I/usr/include/libpng12   -I/usr/include/libxml2   -std=gnu99   -fvisibility=hidden  -I/home/jsquyres/hwloc-1.0.1/include -L/home/jsquyres/hwloc-1.0.1/src  -o lstopo lstopo-lstopo.o lstopo-lstopo-color.o lstopo-lstopo-text.o lstopo-lstopo-draw.o lstopo-lstopo-fig.o lstopo-lstopo-cairo.o lstopo-lstopo-xml.o  -lcairo   -lxml2 -lz -lm   -lm -lncursesw  -lX11 /home/jsquyres/hwloc-1.0.1/src/libhwloc.la
<br>
libtool: link: gcc -I/usr/include/cairo -I/usr/include/freetype2 -I/usr/include/libpng12 -I/usr/include/libxml2 -std=gnu99 -fvisibility=hidden -I/home/jsquyres/hwloc-1.0.1/include -o .libs/lstopo lstopo-lstopo.o lstopo-lstopo-color.o lstopo-lstopo-text.o lstopo-lstopo-draw.o lstopo-lstopo-fig.o lstopo-lstopo-cairo.o lstopo-lstopo-xml.o  -L/home/jsquyres/hwloc-1.0.1/src -lcairo -lncursesw -lX11 /home/jsquyres/hwloc-1.0.1/src/.libs/libhwloc.so -lxml2 -lz -lm -Wl,-rpath -Wl,/tmp/bogus/lib
<br>
<p>...and there's the -rpath in there (my prefix was /tmp/bogus, so it's definitely pulling it from /home/jsquyres/hwloc-1.0.1/src/libhwloc.la).  
<br>
<p>I tried building SVN with the latest latest latest GNU tools:
<br>
<p>AM 1.11.1
<br>
AC 2.65
<br>
LT 2.2.8
<br>
M4 1.4.14
<br>
<p>And the same thing happened.  So this is what LT wants to do.  :-\
<br>
<p>We cannot be the only project that builds both LT libraries and then executables from those libraries.  What do those projects do?
<br>
<p><span class="quotelev1">&gt; Please give me a pointer to 1.0.2 version. I will give it a try, perhaps it
</span><br>
<span class="quotelev1">&gt; has been already fixed.
</span><br>
<p>My (double) bad -- the current released version is 1.0.1.  We haven't changed anything other than Samuels' S/LIBS/LDADD/ stuff.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1069.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1067.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="1067.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1069.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1069.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
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
