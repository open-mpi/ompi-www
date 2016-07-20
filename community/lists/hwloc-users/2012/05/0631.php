<?
$subject_val = "Re: [hwloc-users] hwloc - Build problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 20 09:24:23 2012" -->
<!-- isoreceived="20120520132423" -->
<!-- sent="Sun, 20 May 2012 15:24:11 +0200" -->
<!-- isosent="20120520132411" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc - Build problem." -->
<!-- id="4FB8F07B.2010101_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACga2mrtNxHWXO9QXpaYbywGgj7hNTwT4WGkzQmfeNHdiF49Bw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc - Build problem.<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-20 09:24:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0632.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<li><strong>Previous message:</strong> <a href="0630.php">Anatoly G: "[hwloc-users] hwloc - Build problem."</a>
<li><strong>In reply to:</strong> <a href="0630.php">Anatoly G: "[hwloc-users] hwloc - Build problem."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Anatoly,
<br>
<p>You likely need to add libxml2.a to your link command-line. And some
<br>
others may be missing later.
<br>
<p>Instead of linking with src/.libs/libhwloc.a, you should run &quot;make
<br>
install&quot; and use libhwloc.a from there (use
<br>
--prefix=&lt;/where/you/want/to/install&gt; to tell configure where to install).
<br>
<p>Once hwloc is installed, pkg-config can tell you which dependency libs
<br>
are needed for static linking:
<br>
$ pkg-config --static --libs hwloc
<br>
-lhwloc -lxml2 -lz -lm -lpci
<br>
If you don't install hwloc in prefix=/usr, you may need PKG_CONFIG_PATH
<br>
to tell pkg-config where to look.
<br>
<p>Anyway, the above list (-lxml2 -lz -lm -lpci) should be correct.
<br>
<p>Brice
<br>
<p><p><p><p>Le 20/05/2012 15:14, Anatoly G a &#233;crit :
<br>
<span class="quotelev1">&gt; Dear HWLOC.
</span><br>
<span class="quotelev1">&gt; I downloaded 1.4.2 version (tar file).
</span><br>
<span class="quotelev1">&gt; Performed 
</span><br>
<span class="quotelev1">&gt; 1) *./configure --enable-static*
</span><br>
<span class="quotelev1">&gt; 2) *make*
</span><br>
<span class="quotelev1">&gt; 3) *Wrote program*
</span><br>
<span class="quotelev1">&gt; #include &quot;hwloc.h&quot;
</span><br>
<span class="quotelev1">&gt; link with ($hwloc_dir)/src/.libhwloc.a
</span><br>
<span class="quotelev1">&gt; 4) *In link stage I get following errors:*
</span><br>
<span class="quotelev1">&gt; Linking  EXE:
</span><br>
<span class="quotelev1">&gt; /space/home/anatol-g/Grape/release_4.6_FH/core/bin/linux64/rhe6/g++4.4.4/debug/mpi_rcv_waitany
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; /product/grape-data/hwloc-1.4.2/src/.libs/libhwloc.a(topology-xml.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_libxml2_disable_stderrwarnings':
</span><br>
<span class="quotelev1">&gt; topology-xml.c:(.text+0x2d9): undefined reference to `__xmlGenericError'
</span><br>
<span class="quotelev1">&gt; topology-xml.c:(.text+0x2f0): undefined reference to
</span><br>
<span class="quotelev1">&gt; `xmlSetGenericErrorFunc'
</span><br>
<span class="quotelev1">&gt; /product/grape-data/hwloc-1.4.2/src/.libs/libhwloc.a(topology-xml.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_backend_xml_init':
</span><br>
<span class="quotelev1">&gt; topology-xml.c:(.text+0x34f): undefined reference to `xmlCheckVersion'
</span><br>
<span class="quotelev1">&gt; topology-xml.c:(.text+0x37c): undefined reference to `xmlReadFile'
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached program file + error report.
</span><br>
<span class="quotelev1">&gt; I use 
</span><br>
<span class="quotelev1">&gt; OS: Red Hat 6.0 Santiago  
</span><br>
<span class="quotelev1">&gt; gcc 4.4.4-13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you please help me?
</span><br>
<span class="quotelev1">&gt; Sorry if my question looks stupid.
</span><br>
<span class="quotelev1">&gt; Anatoly.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0631/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0632.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<li><strong>Previous message:</strong> <a href="0630.php">Anatoly G: "[hwloc-users] hwloc - Build problem."</a>
<li><strong>In reply to:</strong> <a href="0630.php">Anatoly G: "[hwloc-users] hwloc - Build problem."</a>
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
