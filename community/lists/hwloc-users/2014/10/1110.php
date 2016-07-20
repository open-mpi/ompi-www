<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 18:55:09 2014" -->
<!-- isoreceived="20141008225509" -->
<!-- sent="Thu, 9 Oct 2014 00:55:09 +0200" -->
<!-- isosent="20141008225509" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release" -->
<!-- id="CALT_uBTxrGhSeuCej_tq2cQj-dGrU_22QCb-S_-_MOxyG3cELQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54350351.60001_at_inria.fr" -->
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
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-08 18:55:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1111.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="1109.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>In reply to:</strong> <a href="1108.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1111.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Reply:</strong> <a href="1111.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * if building without cairo/X11 support, lstopo and lstopo.1 are
</span><br>
<span class="quotelev1">&gt; symlinks. Packagers can choose to ignore lstopo and lstopo.1.
</span><br>
<span class="quotelev1">&gt; lstopo.desktop isn't installed.
</span><br>
<p><p>Could you please  make (in the next version)
<br>
lstopo-no-graphics.1
<br>
a regular file and
<br>
lstopo.1 a link ?
<br>
<p>Currently it other way round.
<br>
<p>Merci bouquet!
<br>
Jirka
<br>
<p><p>On Wed, Oct 8, 2014 at 11:26 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 08/10/2014 01:52, Jiri Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi Brice,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; glad to see the new version is out! :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have bumped into couple of minor problems when building new RPM for
</span><br>
<span class="quotelev2">&gt; &gt; Fedora:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) desktop file
</span><br>
<span class="quotelev2">&gt; &gt;  desktop-file-validate hwloc-ls.desktop.back
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-ls.desktop.back: error: file contains key &quot;comment&quot; in group
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Desktop Entry&quot;, but keys extending the format should start with &quot;X-&quot;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-ls.desktop.back: warning: value &quot;Application;System;&quot; for key
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Categories&quot; in group &quot;Desktop Entry&quot; contains a deprecated value
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Application&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fixed version is attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am fixing this, thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the plan:
</span><br>
<span class="quotelev1">&gt; * rename the desktop file to lstopo.desktop and make it point to lstopo.
</span><br>
<span class="quotelev1">&gt; The change is invisible when clicking in the menu.
</span><br>
<span class="quotelev1">&gt; * only install lstopo.desktop when lstopo is graphical (Cairo/X11
</span><br>
<span class="quotelev1">&gt; support). Otherwise the menu entry doesn't work (no terminal)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which means:
</span><br>
<span class="quotelev1">&gt; * if building without cairo/X11 support, lstopo and lstopo.1 are
</span><br>
<span class="quotelev1">&gt; symlinks. Packagers can choose to ignore lstopo and lstopo.1.
</span><br>
<span class="quotelev1">&gt; lstopo.desktop isn't installed.
</span><br>
<span class="quotelev1">&gt; * if building with cairo/X11 support, lstopo is a graphical binary,
</span><br>
<span class="quotelev1">&gt; lstopo.1 is a symlink, lstopo.desktop is installed. packagers can
</span><br>
<span class="quotelev1">&gt; distribute all of lstopo+lstopo.1+lstopo.desktop separately (like Fedora
</span><br>
<span class="quotelev1">&gt; does)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure where I should document all this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not touching hwloc-ls, it remains a possibly-suboptimal symlink for
</span><br>
<span class="quotelev1">&gt; now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/10/1109.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/10/1109.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1110/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1111.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="1109.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>In reply to:</strong> <a href="1108.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1111.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Reply:</strong> <a href="1111.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
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
