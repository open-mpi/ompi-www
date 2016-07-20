<?
$subject_val = "Re: [hwloc-users] CPU binding";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  3 01:29:40 2013" -->
<!-- isoreceived="20131003052940" -->
<!-- sent="Thu, 03 Oct 2013 07:29:36 +0200" -->
<!-- isosent="20131003052936" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] CPU binding" -->
<!-- id="524D00C0.1080504_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGj8tX-k3aCdzio=1KL4sT4HrZ8LcvEu+rEUAzvPMiR3jed7Gg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] CPU binding<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-03 01:29:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0909.php">Brice Goglin: "[hwloc-users] switch to git"</a>
<li><strong>Previous message:</strong> <a href="0907.php">Panos Labropoulos: "[hwloc-users] CPU binding"</a>
<li><strong>In reply to:</strong> <a href="0907.php">Panos Labropoulos: "[hwloc-users] CPU binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/10/2013 02:56, Panos Labropoulos a &#233;crit :
<br>
<span class="quotelev1">&gt; Hallo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I initially posted this at users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We seem to be unable to to set the cpu binding on a cluster consisting
</span><br>
<span class="quotelev1">&gt; of Dell M420/M610 systems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [jallan_at_hpc21 ~]$ cat report-bindings.sh #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bitmap=`hwloc-bind --get -p`
</span><br>
<span class="quotelev1">&gt; friendly=`hwloc-calc -p -H socket.core.pu $bitmap`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot;MCW rank $OMPI_COMM_WORLD_RANK (`hostname`): $friendly&quot;
</span><br>
<span class="quotelev1">&gt; exit 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [jallan_at_hpc27 ~]$ hwloc-bind -v  socket:0.core:0 -l ./report-bindings.sh
</span><br>
<span class="quotelev1">&gt; using object #0 depth 2 below cpuset 0x000000ff
</span><br>
<span class="quotelev1">&gt; using object #0 depth 6 below cpuset 0x00000080
</span><br>
<span class="quotelev1">&gt; adding 0x00000080 to 0x0
</span><br>
<span class="quotelev1">&gt; adding 0x00000080 to 0x0
</span><br>
<span class="quotelev1">&gt; assuming the command starts at ./report-bindings.sh
</span><br>
<span class="quotelev1">&gt; binding on cpu set 0x00000080
</span><br>
<span class="quotelev1">&gt; MCW rank  (hpc27): Socket:0.Core:10.PU:7
</span><br>
<span class="quotelev1">&gt; [jallan_at_hpc27 ~]$ hwloc-bind -v  socket:1.core:0 -l ./report-bindings.sh
</span><br>
<span class="quotelev1">&gt; object #1 depth 2 (type socket) below cpuset 0x000000ff does not exist
</span><br>
<span class="quotelev1">&gt; adding 0x0 to 0x0
</span><br>
<span class="quotelev1">&gt; assuming the command starts at ./report-bindings.sh
</span><br>
<span class="quotelev1">&gt; MCW rank  (hpc27): Socket:0.Core:10.PU:7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The topology of this system looks a bit strange:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [jallan_at_hpc21 ~]$ lstopo --no-io
</span><br>
<span class="quotelev1">&gt; Machine (24GB)
</span><br>
<span class="quotelev1">&gt;  NUMANode L#0 (P#0 24GB)
</span><br>
<span class="quotelev1">&gt;  NUMANode L#1 (P#1) + Socket L#0 + L3 L#0 (15MB) + L2 L#0 (256KB) + L1
</span><br>
<span class="quotelev1">&gt; L#0 (32KB) + Core L#0 + PU L#0 (P#11)
</span><br>
<span class="quotelev1">&gt; [jallan_at_hpc21 ~]$
</span><br>
<p><p>You likely have some Linux cpuset that restrict the available CPUs.
<br>
That's why the first socket object doesn't appear in lstopo above. And
<br>
that's why &quot;socket:1&quot; fails in other commands: there's no socket with
<br>
logical index 1.
<br>
<p>If you're allocating jobs with a batch scheduler, the problem will go
<br>
away if you reserve all cores of the node instead of a single one.
<br>
<p>If you really want to play with manual binding on that restricted
<br>
platform, you also have to manually play with the unavailable resources.
<br>
<p>Otherwise you can generate the entire topology with &quot;lstopo
<br>
--whole-system foo.xml&quot; and then use it with &quot;normal&quot; socket numbers:
<br>
&quot;hwloc-bind -i foo.xml socket:1.core:0 etc&quot;. You won't get errors about
<br>
objects anymore, but you may get new errors about failures to bind if
<br>
you try to bind to objects outside the restricted topology.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0908/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0909.php">Brice Goglin: "[hwloc-users] switch to git"</a>
<li><strong>Previous message:</strong> <a href="0907.php">Panos Labropoulos: "[hwloc-users] CPU binding"</a>
<li><strong>In reply to:</strong> <a href="0907.php">Panos Labropoulos: "[hwloc-users] CPU binding"</a>
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
