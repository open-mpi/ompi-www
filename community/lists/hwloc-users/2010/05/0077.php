<?
$subject_val = "Re: [hwloc-users] hwloc on systems with more than 64 cpus?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 01:38:04 2010" -->
<!-- isoreceived="20100517053804" -->
<!-- sent="Mon, 17 May 2010 07:37:58 +0200" -->
<!-- isosent="20100517053758" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on systems with more than 64 cpus?" -->
<!-- id="4BF0D636.6030106_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201005170023.08936.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc on systems with more than 64 cpus?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 01:37:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0078.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0076.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0076.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0078.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0078.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 17/05/2010 00:23, Jirka Hladky wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks a lot for the clarification!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got access to 64 cores system and you are indeed right! There is
</span><br>
<span class="quotelev1">&gt; however an issue that taskset does not support 0x80000000,0x0 format.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; taskset 0x80000000,0x0 sleep 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; failed to parse CPU mask 0x80000000,0x0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; taskset 0x8000000000000000 sleep 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; works fine:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I suggest an enhancement to hwloc to support taskset format?
</span><br>
<span class="quotelev1">&gt; taskset is currently standard utility to set CPU affinity. Some
</span><br>
<span class="quotelev1">&gt; colleagues of mine don't want to switch to hwloc-bind yet, so
</span><br>
<span class="quotelev1">&gt; supporting taskset format would be great. You can certainly get around
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-calc --proclist --physical 0x80000000,0x0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but it will make unnecessarily complex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you either add new option --cpuset-taskset-compatible or perhaps
</span><br>
<span class="quotelev1">&gt; change --cpuset output from 0x80000000,0x0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to 0x8000000000000000 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>What does taskset format look like when you want the 128th CPUs ? Does
<br>
it change if you switch from a 32bits architecture to a 64bits
<br>
architecture ?
<br>
<p>We have chosen the aforementioned cpuset string format so that it does
<br>
not depend on the architecture. It makes XML files re-usable from one
<br>
machine to another for instance (which is exactly the main point of
<br>
exporting XML files, by the way).
<br>
<p>If we want to support taskset format, I think adding an option to lstopo
<br>
wouldn't be enough since some people might want the same option in
<br>
hwloc-distrib or hwloc-calc. So we'd end up adding a new API function.
<br>
And then somebody else will ask for support for another external tool
<br>
and we'd add another dedicated API.
<br>
<p>The real question is: why do you still want to use taskset ? hwloc-bind
<br>
should do everything taskset does, and it also support cpusets as
<br>
&quot;node:2.proc:1&quot; or &quot;proc:23-35&quot;.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0077/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0078.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0076.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0076.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0078.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0078.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
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
