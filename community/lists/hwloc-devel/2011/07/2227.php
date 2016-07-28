<?
$subject_val = "Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  3 16:44:56 2011" -->
<!-- isoreceived="20110703204456" -->
<!-- sent="Sun, 3 Jul 2011 22:44:48 +0200" -->
<!-- isosent="20110703204448" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step" -->
<!-- id="20110703204448.GQ5791_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="253572052.1624617.1309725612096.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-03 16:44:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2228.php">Jiri Hladky: "[hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Previous message:</strong> <a href="2226.php">Jiri Hladky: "[hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
<li><strong>Maybe in reply to:</strong> <a href="2226.php">Jiri Hladky: "[hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2229.php">Jiri Hladky: "Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
<li><strong>Reply:</strong> <a href="2229.php">Jiri Hladky: "Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jiri Hladky, le Sun 03 Jul 2011 22:40:12 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I have update Fedora's rpm package to the version 1.2. Thanks for a great
</span><br>
<span class="quotelev1">&gt; software!
</span><br>
<p>Thanks for packaging it :)
<br>
<p><span class="quotelev1">&gt; I have one question regarding files:
</span><br>
<span class="quotelev1">&gt; doc/doxygen-doc/man/man3/hwlocality_distances.3
</span><br>
<span class="quotelev1">&gt; doc/doxygen-doc/man/man3/HWLOC_OBJ_TYPE_MAX.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These files are missing in Makefile.in in doxygen-doc. It seems like they have
</span><br>
<span class="quotelev1">&gt; been forgotten.
</span><br>
<p>Oops, indeed. I've fixed it in the trunk and the 1.2 branch.
<br>
<p><span class="quotelev1">&gt; I can force them to be part of the final rpm by copying them during
</span><br>
<span class="quotelev1">&gt; the %install stage of the rpmbuild process.
</span><br>
<p>That should be fine, yes.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2228.php">Jiri Hladky: "[hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Previous message:</strong> <a href="2226.php">Jiri Hladky: "[hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
<li><strong>Maybe in reply to:</strong> <a href="2226.php">Jiri Hladky: "[hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2229.php">Jiri Hladky: "Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
<li><strong>Reply:</strong> <a href="2229.php">Jiri Hladky: "Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
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
