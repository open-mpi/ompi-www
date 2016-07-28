<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 01:29:18 2014" -->
<!-- isoreceived="20141008052918" -->
<!-- sent="Wed, 08 Oct 2014 07:29:16 +0200" -->
<!-- isosent="20141008052916" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release" -->
<!-- id="5434CBAC.7080401_at_inria.fr" -->
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
<strong>Date:</strong> 2014-10-08 01:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1108.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="1106.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>In reply to:</strong> <a href="1106.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1108.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/10/2014 01:52, Jiri Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; 2) I have also some trouble with symlinks. The trouble is this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * when installed with ./configure &amp;&amp; make &amp;&amp; make install
</span><br>
<span class="quotelev1">&gt;     then hwloc-ls is symlink to lstopo-no-graphics and man pages
</span><br>
<span class="quotelev1">&gt;     { lstopo-no-graphics.1, hwloc-ls.1 } are symlinks to lstopo.1
</span><br>
<span class="quotelev1">&gt;   * I split the package into non-GUI dependent package and GUI
</span><br>
<span class="quotelev1">&gt;     version. In GUI version I have lstopo binary, in plain version
</span><br>
<span class="quotelev1">&gt;     just lstopo-no-graphics and  hwloc-ls links to it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We discussed the problem last week, I waited longer than usually before
<br>
releasing the final v1.10, but nobody asked for a fix. So there's no
<br>
problem, it's too late :)
<br>
<a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1096.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1096.php</a>
<br>
<p>The easiest fix for the desktop file would be to point to lstopo. I'll
<br>
switch the manpage and symlink names.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1107/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1108.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="1106.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>In reply to:</strong> <a href="1106.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1108.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
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
