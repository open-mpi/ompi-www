<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 05:26:42 2014" -->
<!-- isoreceived="20141008092642" -->
<!-- sent="Wed, 08 Oct 2014 11:26:41 +0200" -->
<!-- isosent="20141008092641" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release" -->
<!-- id="54350351.60001_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALT_uBTw_Ybpq66-ZGLKyN2ATJ=sJzvWTnWzP81ZHJ8FmUkoZw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-08 05:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1109.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="1107.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>In reply to:</strong> <a href="1106.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1109.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Reply:</strong> <a href="1109.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Reply:</strong> <a href="1110.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/10/2014 01:52, Jiri Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; glad to see the new version is out! :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have bumped into couple of minor problems when building new RPM for
</span><br>
<span class="quotelev1">&gt; Fedora:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) desktop file
</span><br>
<span class="quotelev1">&gt;  desktop-file-validate hwloc-ls.desktop.back
</span><br>
<span class="quotelev1">&gt; hwloc-ls.desktop.back: error: file contains key &quot;comment&quot; in group
</span><br>
<span class="quotelev1">&gt; &quot;Desktop Entry&quot;, but keys extending the format should start with &quot;X-&quot;
</span><br>
<span class="quotelev1">&gt; hwloc-ls.desktop.back: warning: value &quot;Application;System;&quot; for key
</span><br>
<span class="quotelev1">&gt; &quot;Categories&quot; in group &quot;Desktop Entry&quot; contains a deprecated value
</span><br>
<span class="quotelev1">&gt; &quot;Application&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fixed version is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I am fixing this, thanks.
<br>
<p>Here's the plan:
<br>
* rename the desktop file to lstopo.desktop and make it point to lstopo.
<br>
The change is invisible when clicking in the menu.
<br>
* only install lstopo.desktop when lstopo is graphical (Cairo/X11
<br>
support). Otherwise the menu entry doesn't work (no terminal)
<br>
<p>which means:
<br>
* if building without cairo/X11 support, lstopo and lstopo.1 are
<br>
symlinks. Packagers can choose to ignore lstopo and lstopo.1.
<br>
lstopo.desktop isn't installed.
<br>
* if building with cairo/X11 support, lstopo is a graphical binary,
<br>
lstopo.1 is a symlink, lstopo.desktop is installed. packagers can
<br>
distribute all of lstopo+lstopo.1+lstopo.desktop separately (like Fedora
<br>
does)
<br>
<p>Not sure where I should document all this.
<br>
<p>I am not touching hwloc-ls, it remains a possibly-suboptimal symlink for
<br>
now.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1109.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="1107.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>In reply to:</strong> <a href="1106.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1109.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Reply:</strong> <a href="1109.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Reply:</strong> <a href="1110.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
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
