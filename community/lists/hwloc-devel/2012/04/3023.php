<?
$subject_val = "Re: [hwloc-devel] lstopo-nox strikes back";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 07:52:52 2012" -->
<!-- isoreceived="20120425115252" -->
<!-- sent="Wed, 25 Apr 2012 05:52:44 -0600" -->
<!-- isosent="20120425115244" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo-nox strikes back" -->
<!-- id="37909CB2-3BFB-486A-ABF8-D2F59EA08BC4_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 07:52:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3024.php">Chris Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3024.php">Chris Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't have a strong opinion, but the historical &quot;standard practice&quot; for Linux/Unix has always been to default to cmd line, non-graphical interfaces. Graphical output was optional. Of course, that stemmed from the days before everyone had a graphical display, but it is still generally followed.
<br>
<p><p>On Apr 25, 2012, at 3:38 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We recently got some complains from redhat/centos users that wanted to install hwloc on their cluster but couldn't because it brought so many X libraries that they don't care about.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Debian solves this by having two hwloc packages: the main hwloc one, and hwloc-nox where cairo is disabled. You just install one of them, packages are marked as conflicting with each others.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I asked Jirka, our fellow RPM hwloc packager. He feels that RPM distros don't work that way. They usually have a core 'foo' package without X, and something such as 'foo-gui' with the X-enabled binary. So you'd have lstopo and lstopo-gui installed at the same time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have any preference but RPM is much more widely used than deb in HPC, so we must consider the issue, either in hwloc or in RPM packaging. And we need a solution that is consistent across distros (we don't want users to get lost because Debian/Ubuntu lstopo is graphical while RPM lstopo is not and lstopo-gui is).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not hard to build two lstopo binaries in the same hwloc (quick patch attached). But we'd need to decide their names (lstopo/lstopo-nox, lstopo/lstopo-nogui, lstopo-gui/lstopo), and find a good way to make the existing packages deal with them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do people feel about this? Is it ok to choose between hwloc and hwloc-nox packages on Debian/Ubuntu? Does somebody want to *always* have a lstopo-nox installed? Should the default lstopo be graphical/cario or not?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;lstopo-nox.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3024.php">Chris Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3024.php">Chris Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
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
