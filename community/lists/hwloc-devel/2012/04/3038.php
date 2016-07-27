<?
$subject_val = "Re: [hwloc-devel] lstopo-nox strikes back";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 12:38:06 2012" -->
<!-- isoreceived="20120425163806" -->
<!-- sent="Wed, 25 Apr 2012 18:35:59 +0200" -->
<!-- isosent="20120425163559" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo-nox strikes back" -->
<!-- id="4F9827EF.6040201_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F97C5F8.7030109_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo-nox strikes back<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 12:35:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3039.php">Guy Streeter: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3037.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3042.php">Christopher Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3042.php">Christopher Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If we're going to install two lstopo binaries with different names, we 
<br>
need good names now (instead of plugin trolls).
<br>
<p>I think I would vote for lstopo (no X/cairo) and lstopo&lt;suffix&gt; so that 
<br>
completion helps.
<br>
<p>Brice
<br>
<p><p><p>On 25/04/2012 11:38, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We recently got some complains from redhat/centos users that wanted to 
</span><br>
<span class="quotelev1">&gt; install hwloc on their cluster but couldn't because it brought so many 
</span><br>
<span class="quotelev1">&gt; X libraries that they don't care about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Debian solves this by having two hwloc packages: the main hwloc one, 
</span><br>
<span class="quotelev1">&gt; and hwloc-nox where cairo is disabled. You just install one of them, 
</span><br>
<span class="quotelev1">&gt; packages are marked as conflicting with each others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I asked Jirka, our fellow RPM hwloc packager. He feels that RPM 
</span><br>
<span class="quotelev1">&gt; distros don't work that way. They usually have a core 'foo' package 
</span><br>
<span class="quotelev1">&gt; without X, and something such as 'foo-gui' with the X-enabled binary. 
</span><br>
<span class="quotelev1">&gt; So you'd have lstopo and lstopo-gui installed at the same time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have any preference but RPM is much more widely used than deb 
</span><br>
<span class="quotelev1">&gt; in HPC, so we must consider the issue, either in hwloc or in RPM 
</span><br>
<span class="quotelev1">&gt; packaging. And we need a solution that is consistent across distros 
</span><br>
<span class="quotelev1">&gt; (we don't want users to get lost because Debian/Ubuntu lstopo is 
</span><br>
<span class="quotelev1">&gt; graphical while RPM lstopo is not and lstopo-gui is).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not hard to build two lstopo binaries in the same hwloc (quick 
</span><br>
<span class="quotelev1">&gt; patch attached). But we'd need to decide their names 
</span><br>
<span class="quotelev1">&gt; (lstopo/lstopo-nox, lstopo/lstopo-nogui, lstopo-gui/lstopo), and find 
</span><br>
<span class="quotelev1">&gt; a good way to make the existing packages deal with them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do people feel about this? Is it ok to choose between hwloc and 
</span><br>
<span class="quotelev1">&gt; hwloc-nox packages on Debian/Ubuntu? Does somebody want to *always* 
</span><br>
<span class="quotelev1">&gt; have a lstopo-nox installed? Should the default lstopo be 
</span><br>
<span class="quotelev1">&gt; graphical/cario or not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3038/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3039.php">Guy Streeter: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3037.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3042.php">Christopher Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3042.php">Christopher Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
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
