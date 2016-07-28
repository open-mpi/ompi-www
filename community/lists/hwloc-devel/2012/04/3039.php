<?
$subject_val = "Re: [hwloc-devel] lstopo-nox strikes back";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 12:39:17 2012" -->
<!-- isoreceived="20120425163917" -->
<!-- sent="Wed, 25 Apr 2012 11:39:10 -0500" -->
<!-- isosent="20120425163910" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo-nox strikes back" -->
<!-- id="4F9828AE.4040407_at_redhat.com" -->
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
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 12:39:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3040.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4454)"</a>
<li><strong>Previous message:</strong> <a href="3038.php">Brice Goglin: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3045.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/25/2012 04:38 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We recently got some complains from redhat/centos users that wanted to install
</span><br>
<span class="quotelev1">&gt; hwloc on their cluster but couldn't because it brought so many X libraries
</span><br>
<span class="quotelev1">&gt; that they don't care about.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Debian solves this by having two hwloc packages: the main hwloc one, and
</span><br>
<span class="quotelev1">&gt; hwloc-nox where cairo is disabled. You just install one of them, packages are
</span><br>
<span class="quotelev1">&gt; marked as conflicting with each others.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I asked Jirka, our fellow RPM hwloc packager. He feels that RPM distros don't
</span><br>
<span class="quotelev1">&gt; work that way. They usually have a core 'foo' package without X, and something
</span><br>
<span class="quotelev1">&gt; such as 'foo-gui' with the X-enabled binary. So you'd have lstopo and
</span><br>
<span class="quotelev1">&gt; lstopo-gui installed at the same time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have any preference but RPM is much more widely used than deb in HPC,
</span><br>
<span class="quotelev1">&gt; so we must consider the issue, either in hwloc or in RPM packaging. And we
</span><br>
<span class="quotelev1">&gt; need a solution that is consistent across distros (we don't want users to get
</span><br>
<span class="quotelev1">&gt; lost because Debian/Ubuntu lstopo is graphical while RPM lstopo is not and
</span><br>
<span class="quotelev1">&gt; lstopo-gui is).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not hard to build two lstopo binaries in the same hwloc (quick patch
</span><br>
<span class="quotelev1">&gt; attached). But we'd need to decide their names (lstopo/lstopo-nox,
</span><br>
<span class="quotelev1">&gt; lstopo/lstopo-nogui, lstopo-gui/lstopo), and find a good way to make the
</span><br>
<span class="quotelev1">&gt; existing packages deal with them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do people feel about this? Is it ok to choose between hwloc and hwloc-nox
</span><br>
<span class="quotelev1">&gt; packages on Debian/Ubuntu? Does somebody want to *always* have a lstopo-nox
</span><br>
<span class="quotelev1">&gt; installed? Should the default lstopo be graphical/cario or not?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Fedora generally prefers separate packages with separate commands, like
<br>
system-config-network-tui and system-config-network.
<br>
<p>Red Hat addressed the problem in the &quot;tuna&quot; package for the realtime product
<br>
by simply removing the graphical package dependencies and making tuna run in
<br>
commandline mode if the attempt to start graphical mode fails. The downside to
<br>
that approach is that you have to figure out for yourself what dependencies to
<br>
install if you want the graphical output. It happens, though, that they are
<br>
standard packages that are installed for most any system with a desktop
<br>
environment.
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3040.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4454)"</a>
<li><strong>Previous message:</strong> <a href="3038.php">Brice Goglin: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3045.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
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
