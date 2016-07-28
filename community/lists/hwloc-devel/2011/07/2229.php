<?
$subject_val = "Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  3 17:59:54 2011" -->
<!-- isoreceived="20110703215954" -->
<!-- sent="Sun, 3 Jul 2011 23:59:46 +0200" -->
<!-- isosent="20110703215946" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step" -->
<!-- id="CALT_uBQSGcJ6o16DL2dfs4d4ez7w1HQw5TXCgEEZ7gQPSJM0Ow_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20110703204448.GQ5791_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-03 17:59:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2230.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Previous message:</strong> <a href="2228.php">Jiri Hladky: "[hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>In reply to:</strong> <a href="2227.php">Samuel Thibault: "Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>thanks for fixing it in the upstream. I will update RPM spec file to force
<br>
these two missing man pages to be part of hwloc 1.2 rpm packages.
<br>
<p>Jirka
<br>
<p>On Sun, Jul 3, 2011 at 10:44 PM, Samuel Thibault
<br>
&lt;samuel.thibault_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Jiri Hladky, le Sun 03 Jul 2011 22:40:12 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I have update Fedora's rpm package to the version 1.2. Thanks for a great
</span><br>
<span class="quotelev2">&gt; &gt; software!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for packaging it :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have one question regarding files:
</span><br>
<span class="quotelev2">&gt; &gt; doc/doxygen-doc/man/man3/hwlocality_distances.3
</span><br>
<span class="quotelev2">&gt; &gt; doc/doxygen-doc/man/man3/HWLOC_OBJ_TYPE_MAX.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; These files are missing in Makefile.in in doxygen-doc. It seems like they
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev2">&gt; &gt; been forgotten.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oops, indeed. I've fixed it in the trunk and the 1.2 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can force them to be part of the final rpm by copying them during
</span><br>
<span class="quotelev2">&gt; &gt; the %install stage of the rpmbuild process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That should be fine, yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2229/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2230.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Previous message:</strong> <a href="2228.php">Jiri Hladky: "[hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>In reply to:</strong> <a href="2227.php">Samuel Thibault: "Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
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
