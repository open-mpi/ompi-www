<?
$subject_val = "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 16:30:45 2010" -->
<!-- isoreceived="20100621203045" -->
<!-- sent="Mon, 21 Jun 2010 22:30:36 +0200" -->
<!-- isosent="20100621203036" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users]   hwloc and rpath" -->
<!-- id="201006212230.36910.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AF28FD91-695E-46A3-B78E-6B27174809E4_at_cisco.com" -->
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
<strong>Date:</strong> 2010-06-21 16:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1070.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1068.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="1068.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1070.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1070.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1075.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday, June 21, 2010 09:58:08 pm Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 21, 2010, at 3:18 PM, Jirka Hladky wrote:
</span><br>
<span class="quotelev2">&gt; &gt; $chrpath --list /usr/local/bin/lstopo
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/bin/lstopo: RPATH=/usr/local/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, I understand now.  And I'm seeing the same behavior:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cd util
</span><br>
<span class="quotelev1">&gt; $ rm lstopo
</span><br>
<span class="quotelev1">&gt; $ make V=1
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool  --tag=CC   --mode=link gcc -I/usr/include/cairo
</span><br>
<span class="quotelev1">&gt; -I/usr/include/freetype2 -I/usr/include/libpng12   -I/usr/include/libxml2 
</span><br>
<span class="quotelev1">&gt;  -std=gnu99   -fvisibility=hidden  -I/home/jsquyres/hwloc-1.0.1/include
</span><br>
<span class="quotelev1">&gt; -L/home/jsquyres/hwloc-1.0.1/src  -o lstopo lstopo-lstopo.o
</span><br>
<span class="quotelev1">&gt; lstopo-lstopo-color.o lstopo-lstopo-text.o lstopo-lstopo-draw.o
</span><br>
<span class="quotelev1">&gt; lstopo-lstopo-fig.o lstopo-lstopo-cairo.o lstopo-lstopo-xml.o  -lcairo  
</span><br>
<span class="quotelev1">&gt; -lxml2 -lz -lm   -lm -lncursesw  -lX11
</span><br>
<span class="quotelev1">&gt; /home/jsquyres/hwloc-1.0.1/src/libhwloc.la libtool: link: gcc
</span><br>
<span class="quotelev1">&gt; -I/usr/include/cairo -I/usr/include/freetype2 -I/usr/include/libpng12
</span><br>
<span class="quotelev1">&gt; -I/usr/include/libxml2 -std=gnu99 -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt; -I/home/jsquyres/hwloc-1.0.1/include -o .libs/lstopo lstopo-lstopo.o
</span><br>
<span class="quotelev1">&gt; lstopo-lstopo-color.o lstopo-lstopo-text.o lstopo-lstopo-draw.o
</span><br>
<span class="quotelev1">&gt; lstopo-lstopo-fig.o lstopo-lstopo-cairo.o lstopo-lstopo-xml.o 
</span><br>
<span class="quotelev1">&gt; -L/home/jsquyres/hwloc-1.0.1/src -lcairo -lncursesw -lX11
</span><br>
<span class="quotelev1">&gt; /home/jsquyres/hwloc-1.0.1/src/.libs/libhwloc.so -lxml2 -lz -lm -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/tmp/bogus/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...and there's the -rpath in there (my prefix was /tmp/bogus, so it's
</span><br>
<span class="quotelev1">&gt; definitely pulling it from /home/jsquyres/hwloc-1.0.1/src/libhwloc.la).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried building SVN with the latest latest latest GNU tools:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AM 1.11.1
</span><br>
<span class="quotelev1">&gt; AC 2.65
</span><br>
<span class="quotelev1">&gt; LT 2.2.8
</span><br>
<span class="quotelev1">&gt; M4 1.4.14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And the same thing happened.  So this is what LT wants to do.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We cannot be the only project that builds both LT libraries and then
</span><br>
<span class="quotelev1">&gt; executables from those libraries.  What do those projects do?
</span><br>
<p>Hi Jeff,
<br>
<p>I'm not sure what's wrong. It seems like libtool is not smart enough to 
<br>
recognize /usr/lib64 as default library directory on 64-bit system.... I have 
<br>
asked on Fedora packaging mailing list for advice. I will keep you updated.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Please give me a pointer to 1.0.2 version. I will give it a try, perhaps
</span><br>
<span class="quotelev2">&gt; &gt; it has been already fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My (double) bad -- the current released version is 1.0.1.  We haven't
</span><br>
<span class="quotelev1">&gt; changed anything other than Samuels' S/LIBS/LDADD/ stuff.
</span><br>
&nbsp;No problem:-)
<br>
<p>Thanks
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1070.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1068.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="1068.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1070.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1070.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1075.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
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
