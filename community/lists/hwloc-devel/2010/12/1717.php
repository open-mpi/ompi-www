<?
$subject_val = "Re: [hwloc-devel] 1.1rc4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 02:12:32 2010" -->
<!-- isoreceived="20101216071232" -->
<!-- sent="Thu, 16 Dec 2010 08:12:25 +0100" -->
<!-- isosent="20101216071225" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.1rc4 released" -->
<!-- id="4D09BBD9.307_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D096B62.8020407_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.1rc4 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 02:12:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1718.php">Samuel Thibault: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Previous message:</strong> <a href="1716.php">Christopher Samuel: "Re: [hwloc-devel] 1.1rc4 released"</a>
<li><strong>In reply to:</strong> <a href="1716.php">Christopher Samuel: "Re: [hwloc-devel] 1.1rc4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1721.php">Christopher Samuel: "Re: [hwloc-devel] 1.1rc4 released"</a>
<li><strong>Reply:</strong> <a href="1721.php">Christopher Samuel: "Re: [hwloc-devel] 1.1rc4 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 16/12/2010 02:29, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; make check fails on our CentOS 5.4 box:
</span><br>
<p>We can safely ignore this failure. Can you change the exit line at the
<br>
end of tests/linux/gather/test-gather-topology.sh.in into &quot;exit 0&quot;,
<br>
reconfigure and rerun make check to see if anything else fails?
<br>
<p>test-gather-topology.sh and xmlbuffer are veeeeery pedantic. I thought
<br>
about ignoring their failure by default in the past because there are
<br>
some annoying corner cases where we can't prefectly simulate a remote
<br>
topology. Things work almost fine, but you see small differences between
<br>
the detailled outputs (XML output here).
<br>
<p>In your case, the problem is related to gather-topology.sh not gathering
<br>
all the Linux cpuset/cgroup info properly (we would need to parse
<br>
/proc/mounts in gather-topology.sh). I will try to fix this in 1.2 (I am
<br>
opening a ticket about it). We don't need to delay 1.1 because of this,
<br>
so I will ignore the failure.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1718.php">Samuel Thibault: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Previous message:</strong> <a href="1716.php">Christopher Samuel: "Re: [hwloc-devel] 1.1rc4 released"</a>
<li><strong>In reply to:</strong> <a href="1716.php">Christopher Samuel: "Re: [hwloc-devel] 1.1rc4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1721.php">Christopher Samuel: "Re: [hwloc-devel] 1.1rc4 released"</a>
<li><strong>Reply:</strong> <a href="1721.php">Christopher Samuel: "Re: [hwloc-devel] 1.1rc4 released"</a>
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
