<?
$subject_val = "Re: [hwloc-users] hwloc-ls graphical output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 01:21:33 2014" -->
<!-- isoreceived="20141001052133" -->
<!-- sent="Wed, 01 Oct 2014 07:21:32 +0200" -->
<!-- isosent="20141001052132" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-ls graphical output" -->
<!-- id="542B8F5C.9010904_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5423AC7A.7090200_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc-ls graphical output<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-01 01:21:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1106.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1104.php">Samuel Thibault: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1096.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1097.php">Dennis Jacobfeuerborn: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dennis,
<br>
Did you have an opinion about this?
<br>
I am going to release the final hwloc v1.10 soon. So if there's
<br>
something to fix, I'd rather know it quickly.
<br>
thanks
<br>
Brice
<br>
<p><p><p>Le 25/09/2014 07:47, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 25/09/2014 02:22, Dennis Jacobfeuerborn a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; So I just recompiled again but using version 1.4.3 and the graphical
</span><br>
<span class="quotelev2">&gt;&gt; output options reappeared. I also tried version 1.5.2 and this version
</span><br>
<span class="quotelev2">&gt;&gt; will not show the graphical output options anymore so it seems something
</span><br>
<span class="quotelev2">&gt;&gt; has changed between 1.4 and 1.5 that changes the output options in some way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; In 1.5, Fedora/RH people asked for a separation of lstopo-no-graphics
</span><br>
<span class="quotelev1">&gt; and lstopo with graphical options.  lstopo-no-graphics is always built
</span><br>
<span class="quotelev1">&gt; without graphical support. lstopo is built with graphical support when
</span><br>
<span class="quotelev1">&gt; possible, or it's just a symlink to lstopo-no-graphics.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And hwloc-ls is just a symlink to lstopo-no-graphics in all cases. So
</span><br>
<span class="quotelev1">&gt; just use lstopo and you'll be happy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason for not being a symlink to lstopo is likely that lstopo
</span><br>
<span class="quotelev1">&gt; doesn't always exist. It depends how hwloc is packaged. On Debian, you
</span><br>
<span class="quotelev1">&gt; have either a package with lstopo-no-graphics and a lstopo symlink, or
</span><br>
<span class="quotelev1">&gt; another package with lstopo-no-graphics and lstopo binaries. On
</span><br>
<span class="quotelev1">&gt; Fedora/... you always have a package that contains lstopo-no-graphics
</span><br>
<span class="quotelev1">&gt; with no lstopo at all, and you can add another package with the
</span><br>
<span class="quotelev1">&gt; graphical lstopo on top of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe we should just drop hwloc-ls to avoid the confusion. But several
</span><br>
<span class="quotelev1">&gt; people are used to it already.
</span><br>
<span class="quotelev1">&gt; Also we added a hwloc-ls desktop file recently, I guess it points to a
</span><br>
<span class="quotelev1">&gt; non-graphical, which isn't good.
</span><br>
<span class="quotelev1">&gt; I can make hwloc-ls a real program that checks whether lstopo exists
</span><br>
<span class="quotelev1">&gt; before it runs lstopo or lstopo-no-graphics ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1106.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1104.php">Samuel Thibault: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1096.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1097.php">Dennis Jacobfeuerborn: "Re: [hwloc-users] hwloc-ls graphical output"</a>
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
