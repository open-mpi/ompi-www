<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 18 18:38:10 2015" -->
<!-- isoreceived="20151218233810" -->
<!-- sent="Sat, 19 Dec 2015 00:38:05 +0100" -->
<!-- isosent="20151218233805" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released" -->
<!-- id="567498DD.5030706_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5673EAA7.1050204_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-18 18:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1233.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>Previous message:</strong> <a href="1231.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>In reply to:</strong> <a href="1227.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1233.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>Reply:</strong> <a href="1233.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/12/2015 12:14, Marco Atzeri a &#233;crit :
<br>
<span class="quotelev1">&gt; attached minor patch to solve a false &quot;make check&quot; failure
</span><br>
<span class="quotelev1">&gt; on platform where EXEEXT in not empty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tested on CYGWIN platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt; --- origsrc/hwloc-1.11.2/utils/hwloc/test-hwloc-assembler.sh.in	2015-06-14 21:53:04.000000000 +0200
</span><br>
<span class="quotelev1">&gt; +++ src/hwloc-1.11.2/utils/hwloc/test-hwloc-assembler.sh.in	2015-12-18 07:47:38.743536900 +0100
</span><br>
<span class="quotelev1">&gt; @@ -12,6 +12,7 @@ HWLOC_top_builddir=&quot;@HWLOC_top_builddir@
</span><br>
<span class="quotelev1">&gt;  assembler=&quot;$HWLOC_top_builddir/utils/hwloc/hwloc-assembler&quot;
</span><br>
<span class="quotelev1">&gt;  HWLOC_top_srcdir=&quot;@HWLOC_top_srcdir@&quot;
</span><br>
<span class="quotelev1">&gt;  SED=&quot;@SED@&quot;
</span><br>
<span class="quotelev1">&gt; +EXEEXT=&quot;@EXEEXT@&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  HWLOC_PLUGINS_PATH=${HWLOC_top_builddir}/src
</span><br>
<span class="quotelev1">&gt;  export HWLOC_PLUGINS_PATH
</span><br>
<span class="quotelev1">&gt; @@ -46,7 +47,7 @@ $assembler $file \
</span><br>
<span class="quotelev1">&gt;  # filter ProcessName since it may be hwloc-info or lt-hwloc-info
</span><br>
<span class="quotelev1">&gt;  cat $file \
</span><br>
<span class="quotelev1">&gt;   | $SED -e '/&lt;info name=\&quot;hwlocVersion\&quot; value=\&quot;'$HWLOC_VERSION'\&quot;\/&gt;/d' \
</span><br>
<span class="quotelev1">&gt; - | $SED -e '/&lt;info name=\&quot;ProcessName\&quot; value=\&quot;hwloc-assembler\&quot;\/&gt;/d' -e '/&lt;info name=\&quot;ProcessName\&quot; value=\&quot;lt-hwloc-assembler\&quot;\/&gt;/d' \
</span><br>
<span class="quotelev1">&gt; + | $SED -e '/&lt;info name=\&quot;ProcessName\&quot; value=\&quot;hwloc-assembler'$EXEEXT'\&quot;\/&gt;/d' -e '/&lt;info name=\&quot;ProcessName\&quot; value=\&quot;lt-hwloc-assembleri'$EXEEXT'\&quot;\/&gt;/d' \
</span><br>
<span class="quotelev2">&gt;   &gt; ${file}.tmp
</span><br>
<span class="quotelev1">&gt;  mv -f ${file}.tmp $file
</span><br>
<span class="quotelev1">&gt;                                                                                                                                             ^ here
</span><br>
<p>Hello
<br>
The 'i' at the end of 'lt-hwloc-assembleri' at the end of the last added
<br>
line above causes a failure here. Typo in your patch?
<br>
Thanks
<br>
Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1232/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1233.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>Previous message:</strong> <a href="1231.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>In reply to:</strong> <a href="1227.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1233.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>Reply:</strong> <a href="1233.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
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
