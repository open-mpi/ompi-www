<?
$subject_val = "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 14:01:35 2013" -->
<!-- isoreceived="20131105190135" -->
<!-- sent="Tue, 5 Nov 2013 14:00:37 -0500" -->
<!-- isosent="20131105190037" -->
<!-- name="Dominique Orban" -->
<!-- email="dominique.orban_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent" -->
<!-- id="etPan.52794091.61b303af.ad_at_Aragorn" -->
<!-- charset="utf-8" -->
<!-- inreplyto="23725D4F-9236-4E96-9032-8F63F15E2A1D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent<br>
<strong>From:</strong> Dominique Orban (<em>dominique.orban_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 14:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22912.php">Jeremiah Willcock: "[OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<li><strong>Previous message:</strong> <a href="22910.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>In reply to:</strong> <a href="22910.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22913.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22913.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm installing in a fresh location and include/event2 is still there. I don't speak configure so I may be doing something wrong. It's enough to change the Makefile.am, isn't it?
<br>
<p>Here are my commands:
<br>
<p>$ cd /tmp/openmpi-1.7.3 &#194;&#160;# fresh download
<br>
$&#194;&#160;cp ../ompi-trunk/opal/mca/event/libevent2021/libevent/include/Makefile.am ./opal/mca/event/libevent2021/libevent/include/
<br>
$ ./configure --prefix=/tmp/ompi_install --disable-dependency-tracking --disable-silent-rules --enable-ipv6 --enable-mpi-thread-multiple --without-devel-headers &#194;&#160;&amp;&amp; make all
<br>
$ rm -rf /tmp/ompi_install/*
<br>
$ make install
<br>
$ ls /tmp/ompi_install/include/event2 &#194;&#160;# bunch of files in there.
<br>
<p>I tried with and without `--without-devel-headers`, same result.&#194;&#160;Here's my patch:
<br>
<p><pre>
---
diff --git a/opal/mca/event/libevent2021/libevent/include/Makefile.am b/opal/mca/event/libevent2021/libevent/include/Makefile.am
index 5153db2..0446a17 100644
--- a/opal/mca/event/libevent2021/libevent/include/Makefile.am
+++ b/opal/mca/event/libevent2021/libevent/include/Makefile.am
@@ -38,10 +38,12 @@ EXTRA_SRC = $(EVENT2_EXPORT)
&#194;&#160;## the source header filename to derive the installed header filename.
&#194;&#160;## With nobase_ the installed path is $(includedir)/event2/ev*.h.
&#194;&#160;
-if INSTALL_LIBEVENT
-nobase_include_HEADERS =	$(EVENT2_EXPORT)
-nobase_nodist_include_HEADERS = ./event2/event-config.h
-else
-noinst_HEADERS =		$(EVENT2_EXPORT)
-nodist_noinst_HEADERS =		./event2/event-config.h
-endif
+# Open MPI: comment this out, because we don't want these header files
+# installed
+# if INSTALL_LIBEVENT
+# nobase_include_HEADERS =	$(EVENT2_EXPORT)
+# nobase_nodist_include_HEADERS = ./event2/event-config.h
+# else
+# noinst_HEADERS =		$(EVENT2_EXPORT)
+# nodist_noinst_HEADERS =		./event2/event-config.h
+# endif
---
On 5 November, 2013 at 11:05:37 AM, Jeff Squyres (jsquyres) (jsquyres_at_[hidden]) wrote:
&gt;  
&gt; On Nov 5, 2013, at 7:44 AM, Dominique Orban  
&gt; wrote:
&gt;  
&gt; &gt; Thanks for patch. Unless I'm completely confused, it is still  
&gt; not resolving the issue. I downloaded Open-MPI 1.7.3 and replaced  
&gt; the Makefile.am with the one obtained from a fresh svn checkout  
&gt; (I checked that your changes are in there).
&gt; &gt;
&gt; &gt; But `make install` still leaves me with an `event2` subdirectory  
&gt; of `include`. I used the `--without-devel-headers` configure  
&gt; flag to be sure.
&gt;  
&gt; Are you installing over an old install, and &quot;event2&quot; is just left  
&gt; over from a previous installation? We won't remove old stuff  
&gt; from $prefix during &quot;make install&quot;.
&gt;  
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>  
&gt;  
&gt;  
--&#194;&#160;
Dominique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22912.php">Jeremiah Willcock: "[OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<li><strong>Previous message:</strong> <a href="22910.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>In reply to:</strong> <a href="22910.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22913.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22913.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
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
