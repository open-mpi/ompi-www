<?
$subject_val = "Re: [hwloc-devel] RPATH issues when building in Fedora 18";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 13:11:21 2013" -->
<!-- isoreceived="20130423171121" -->
<!-- sent="Tue, 23 Apr 2013 19:11:15 +0200" -->
<!-- isosent="20130423171115" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] RPATH issues when building in Fedora 18" -->
<!-- id="5176C0B3.3040009_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALT_uBRFrkDK5adB=vQAey0t+vRNioRJFnm0a67hCzSuGAjMxw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] RPATH issues when building in Fedora 18<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-23 13:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3636.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3634.php">Jiri Hladky: "[hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3634.php">Jiri Hladky: "[hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3636.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3636.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 23/04/2013 16:58, Jiri Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; *    0x0001 ... standard RPATHs (e.g. /usr/lib); such RPATHs are a minor
</span><br>
<span class="quotelev1">&gt; *               issue but are introducing redundant searchpaths without
</span><br>
<span class="quotelev1">&gt; *               providing a benefit. They can also cause errors in
</span><br>
<span class="quotelev1">&gt; multilib
</span><br>
<span class="quotelev1">&gt; *               environments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RPATH is not allowed to be in binary files in RPM:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://fedoraproject.org/wiki/Packaging:Guidelines#Beware_of_Rpath">https://fedoraproject.org/wiki/Packaging:Guidelines#Beware_of_Rpath</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried to eliminate rpath by using methods described here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://fedoraproject.org/wiki/Packaging:Guidelines#Removing_Rpath">https://fedoraproject.org/wiki/Packaging:Guidelines#Removing_Rpath</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * If the application uses configure, try passing the
</span><br>
<span class="quotelev1">&gt;     /--disable-rpath/ flag to configure. =&gt; it's not supported in the
</span><br>
<span class="quotelev1">&gt;     current version of hwloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hello,
<br>
<p>I don't see any easy way to add a disable-rpath.
<br>
<p>I am not very familiar with how rpath work. I assume that libtool
<br>
doesn't add a rpath when you install in standard directories? At least
<br>
Debian packages don't specify any rpath, even if --libdir=/usr/lib/$arch
<br>
is specified on the configure command-line.
<br>
<p>If /usr/lib64 is the default path for 64bits libs on Fedora, shouldn't
<br>
somebody take care of removing the corresponding rpath too?
<br>
<p>This is likely related (but the reversed case) to the comment about
<br>
Fedora in <a href="http://wiki.debian.org/RpathIssue">http://wiki.debian.org/RpathIssue</a>. One link on that page says
<br>
that rerunning libtoolize before configure may help. Can you try that?
<br>
(maybe compare the new libtool script with the one from the hwloc
<br>
tarball to check that some lib64 things appeared?)
<br>
<p><span class="quotelev1">&gt;   * If the application uses a local copy of libtool, add the following
</span><br>
<span class="quotelev1">&gt;     lines to the spec after %configure:=&gt; it will make tests FAIL
</span><br>
<span class="quotelev1">&gt;     (without this change, it runs just fine - all tests are PASSED)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FAIL: test-hwloc-annotate.sh
</span><br>
<span class="quotelev1">&gt; FAIL: test-hwloc-assembler.sh
</span><br>
<span class="quotelev1">&gt; PASS: test-hwloc-calc.sh
</span><br>
<span class="quotelev1">&gt; PASS: test-hwloc-distances.sh
</span><br>
<span class="quotelev1">&gt; PASS: test-hwloc-distrib.sh
</span><br>
<span class="quotelev1">&gt; FAIL: test-hwloc-info.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I am not sure why some fail while the other succeed. You may need to set
<br>
LD_LIBRARY_PATH to fix this?
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3635/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3636.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3634.php">Jiri Hladky: "[hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3634.php">Jiri Hladky: "[hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3636.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3636.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
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
