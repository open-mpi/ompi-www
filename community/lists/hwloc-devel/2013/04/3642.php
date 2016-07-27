<?
$subject_val = "Re: [hwloc-devel] RPATH issues when building in Fedora 18";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 01:21:57 2013" -->
<!-- isoreceived="20130424052157" -->
<!-- sent="Wed, 24 Apr 2013 07:21:50 +0200" -->
<!-- isosent="20130424052150" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] RPATH issues when building in Fedora 18" -->
<!-- id="51776BEE.4050801_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15sruCN-4p7+_h3QfFOi8go28NyF=skB+mrg2HJCRKrwQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-04-24 01:21:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3643.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3641.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3641.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3643.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3643.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/04/2013 00:35, Paul Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; I took a look at libtool.m4 and find that
</span><br>
<span class="quotelev1">&gt; the sys_lib_dlsearch_path_spec value is HARDCODED as part of  big
</span><br>
<span class="quotelev1">&gt; &quot;case $host_os in&quot;.  That is why the autoreconf resolves the problem -
</span><br>
<span class="quotelev1">&gt; the distro maintainers have customized libtool.m4 appropriately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other than instructing folks to autoreconf, I don't see a &quot;clean&quot; fix
</span><br>
<span class="quotelev1">&gt; for this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ok, thanks. So our configure indeed generates libtool script that
<br>
depends on where the tarball was generated. That's a bit disturbing.
<br>
<p>That said, we build tarballs with vanilla autotools, not with Debian
<br>
specific ones. That seems to generate a libtool script that properly
<br>
handles Debian (even if I don't see anything explicit about
<br>
/usr/lib/$arch in libtool.m4) but does not on Fedora. So there may be
<br>
something else hidden that makes things work on Debian.
<br>
<p>Hopefully everybody will switch to /usr/lib/$arch instead of /usr/lib64
<br>
one day :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3643.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3641.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3641.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3643.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3643.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
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
