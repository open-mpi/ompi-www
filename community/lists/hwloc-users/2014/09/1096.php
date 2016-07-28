<?
$subject_val = "Re: [hwloc-users] hwloc-ls graphical output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 25 01:47:39 2014" -->
<!-- isoreceived="20140925054739" -->
<!-- sent="Thu, 25 Sep 2014 07:47:38 +0200" -->
<!-- isosent="20140925054738" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-ls graphical output" -->
<!-- id="5423AC7A.7090200_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="54236040.1090104_at_conversis.de" -->
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
<strong>Date:</strong> 2014-09-25 01:47:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1097.php">Dennis Jacobfeuerborn: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>Previous message:</strong> <a href="1095.php">Dennis Jacobfeuerborn: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>In reply to:</strong> <a href="1095.php">Dennis Jacobfeuerborn: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/10/1105.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/10/1105.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/09/2014 02:22, Dennis Jacobfeuerborn a &#233;crit :
<br>
<span class="quotelev1">&gt; So I just recompiled again but using version 1.4.3 and the graphical
</span><br>
<span class="quotelev1">&gt; output options reappeared. I also tried version 1.5.2 and this version
</span><br>
<span class="quotelev1">&gt; will not show the graphical output options anymore so it seems something
</span><br>
<span class="quotelev1">&gt; has changed between 1.4 and 1.5 that changes the output options in some way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>In 1.5, Fedora/RH people asked for a separation of lstopo-no-graphics
<br>
and lstopo with graphical options.  lstopo-no-graphics is always built
<br>
without graphical support. lstopo is built with graphical support when
<br>
possible, or it's just a symlink to lstopo-no-graphics.
<br>
<p>And hwloc-ls is just a symlink to lstopo-no-graphics in all cases. So
<br>
just use lstopo and you'll be happy.
<br>
<p>The reason for not being a symlink to lstopo is likely that lstopo
<br>
doesn't always exist. It depends how hwloc is packaged. On Debian, you
<br>
have either a package with lstopo-no-graphics and a lstopo symlink, or
<br>
another package with lstopo-no-graphics and lstopo binaries. On
<br>
Fedora/... you always have a package that contains lstopo-no-graphics
<br>
with no lstopo at all, and you can add another package with the
<br>
graphical lstopo on top of it.
<br>
<p>Maybe we should just drop hwloc-ls to avoid the confusion. But several
<br>
people are used to it already.
<br>
Also we added a hwloc-ls desktop file recently, I guess it points to a
<br>
non-graphical, which isn't good.
<br>
I can make hwloc-ls a real program that checks whether lstopo exists
<br>
before it runs lstopo or lstopo-no-graphics ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1097.php">Dennis Jacobfeuerborn: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>Previous message:</strong> <a href="1095.php">Dennis Jacobfeuerborn: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>In reply to:</strong> <a href="1095.php">Dennis Jacobfeuerborn: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/10/1105.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/10/1105.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
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
