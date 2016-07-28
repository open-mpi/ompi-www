<?
$subject_val = "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  5 07:46:27 2014" -->
<!-- isoreceived="20140905114627" -->
<!-- sent="Fri, 05 Sep 2014 13:46:25 +0200" -->
<!-- isosent="20140905114625" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error with &amp;quot;node interleaving&amp;quot; disabled" -->
<!-- id="5409A291.9070108_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DUB114-W67834E51BE484BA764A2B4DFC20_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-05 07:46:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1072.php">Jean-Pierre Adam: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>Previous message:</strong> <a href="1070.php">Jean-Pierre Adam: "[hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>In reply to:</strong> <a href="1070.php">Jean-Pierre Adam: "[hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1072.php">Jean-Pierre Adam: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>Reply:</strong> <a href="1072.php">Jean-Pierre Adam: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>Reply:</strong> <a href="1073.php">Jean-Pierre Adam: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>You sent the test.output file instead of test.tar.bz2 so I can't check
<br>
for sure. Anyway I guess this is yet another buggy AMD platform with
<br>
magny-cours/interlagos/abu-dahbi Opterons (61xx, 62xx or 63xx).
<br>
<p>Sometimes upgrading the BIOS/kernel helps. Sometimes not.
<br>
<p>Some L3 caches will be missing in the hwloc topology because of this
<br>
bug, it's likely not important for the vast majority of HPC libraries.
<br>
<p>You may hide the warning by setting HWLOC_HIDE_ERRORS=1 in your environment.
<br>
<p>Brice
<br>
<p><p><p><p>Le 05/09/2014 12:06, Jean-Pierre Adam a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello hwloc experts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I encounter this bug when I'm using mpirun or hwloc directly :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * hwloc has encountered what looks like an error from the operating
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * L3 (cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset
</span><br>
<span class="quotelev1">&gt; 0x0000003f) without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 940
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of hwloc-gather-topology is attached. The OS is Centos 7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The tool launched with mpirun runs as expected, still the message is a
</span><br>
<span class="quotelev1">&gt; bit worrying...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was able to avoid this message by enabling &quot;node interleaving&quot; in
</span><br>
<span class="quotelev1">&gt; the bios (basically disables NUMA). In my case, I got a 5% performance
</span><br>
<span class="quotelev1">&gt; loss with that setting. It could be acceptable, but I would like to
</span><br>
<span class="quotelev1">&gt; understant what is going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So is my motherboard / BIOS / OS buggy ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1070.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1070.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1071/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1072.php">Jean-Pierre Adam: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>Previous message:</strong> <a href="1070.php">Jean-Pierre Adam: "[hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>In reply to:</strong> <a href="1070.php">Jean-Pierre Adam: "[hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1072.php">Jean-Pierre Adam: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>Reply:</strong> <a href="1072.php">Jean-Pierre Adam: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>Reply:</strong> <a href="1073.php">Jean-Pierre Adam: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
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
