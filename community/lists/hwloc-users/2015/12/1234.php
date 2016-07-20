<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 19 02:40:51 2015" -->
<!-- isoreceived="20151219074051" -->
<!-- sent="Sat, 19 Dec 2015 08:40:46 +0100" -->
<!-- isosent="20151219074046" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released" -->
<!-- id="567509FE.2020005_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5674F0B9.3080607_at_gmail.com" -->
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
<strong>Date:</strong> 2015-12-19 02:40:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1235.php">Karl Behler: "[hwloc-users] error from the operating system - Solaris 11.3"</a>
<li><strong>Previous message:</strong> <a href="1233.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>In reply to:</strong> <a href="1233.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Applied, thanks !
<br>
<p><p>Le 19/12/2015 06:52, Marco Atzeri a &#233;crit :
<br>
<span class="quotelev1">&gt; On 19/12/2015 00:38, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 18/12/2015 12:14, Marco Atzeri a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attached minor patch to solve a false &quot;make check&quot; failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on platform where EXEEXT in not empty.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tested on CYGWIN platforms.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Marco
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- origsrc/hwloc-1.11.2/utils/hwloc/test-hwloc-assembler.sh.in   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2015-06-14 21:53:04.000000000 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ src/hwloc-1.11.2/utils/hwloc/test-hwloc-assembler.sh.in   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2015-12-18 07:47:38.743536900 +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -12,6 +12,7 @@ HWLOC_top_builddir=&quot;@HWLOC_top_builddir@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   assembler=&quot;$HWLOC_top_builddir/utils/hwloc/hwloc-assembler&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   HWLOC_top_srcdir=&quot;@HWLOC_top_srcdir@&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   SED=&quot;@SED@&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +EXEEXT=&quot;@EXEEXT@&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   HWLOC_PLUGINS_PATH=${HWLOC_top_builddir}/src
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   export HWLOC_PLUGINS_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -46,7 +47,7 @@ $assembler $file \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   # filter ProcessName since it may be hwloc-info or lt-hwloc-info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   cat $file \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    | $SED -e '/&lt;info name=\&quot;hwlocVersion\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value=\&quot;'$HWLOC_VERSION'\&quot;\/&gt;/d' \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - | $SED -e '/&lt;info name=\&quot;ProcessName\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value=\&quot;hwloc-assembler\&quot;\/&gt;/d' -e '/&lt;info name=\&quot;ProcessName\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value=\&quot;lt-hwloc-assembler\&quot;\/&gt;/d' \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + | $SED -e '/&lt;info name=\&quot;ProcessName\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value=\&quot;hwloc-assembler'$EXEEXT'\&quot;\/&gt;/d' -e '/&lt;info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name=\&quot;ProcessName\&quot; value=\&quot;lt-hwloc-assembleri'$EXEEXT'\&quot;\/&gt;/d' \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; ${file}.tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mv -f ${file}.tmp $file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                                                                                                             
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^ here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt; The 'i' at the end of 'lt-hwloc-assembleri' at the end of the last added
</span><br>
<span class="quotelev2">&gt;&gt; line above causes a failure here. Typo in your patch?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sure. VI typo
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1234.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1234.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1235.php">Karl Behler: "[hwloc-users] error from the operating system - Solaris 11.3"</a>
<li><strong>Previous message:</strong> <a href="1233.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>In reply to:</strong> <a href="1233.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
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
