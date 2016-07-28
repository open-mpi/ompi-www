<?
$subject_val = "Re: [hwloc-devel] hwloc-distrib --among";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 09:02:23 2010" -->
<!-- isoreceived="20101118140223" -->
<!-- sent="Thu, 18 Nov 2010 15:02:13 +0100" -->
<!-- isosent="20101118140213" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-distrib --among" -->
<!-- id="201011181502.13326.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CE2F81F.4010906_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-distrib --among<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 09:02:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1491.php">Christopher Samuel: "[hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1489.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc2r2795)"</a>
<li><strong>In reply to:</strong> <a href="1484.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1483.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday, November 16, 2010 10:31:11 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 16/11/2010 15:18, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Jirka Hladky, le Tue 16 Nov 2010 21:37:01 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There was some discussion about hwloc-distrib --among
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If I understand it correctly, --among accepts one of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {pu,core,socket,node,machine}
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I actually didn't know about the --among option. It seems a bit
</span><br>
<span class="quotelev2">&gt; &gt; difficult to comprehend without reading the source code...  Actually I'm
</span><br>
<span class="quotelev2">&gt; &gt; not even sure about the cases where it is useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Brice,
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I don't remember the exact use case but it was basically a machine where
</span><br>
<span class="quotelev1">&gt; the topology strange or broken and the user wanted to force the
</span><br>
<span class="quotelev1">&gt; distribution among some given object type (the distribution of objects
</span><br>
<span class="quotelev1">&gt; of other types was unusable).
</span><br>
Yes, I would need such option! Please check hp-dl980g7-01.tar.bz2 attached to 
<br>
my previous e-mail for an example of strange topology (uneven NUMA 
<br>
distribution).
<br>
<p>The problem is that neither --among nor --ignore works for me. Perhaps I'm 
<br>
using it in a wrong way? It seems also that --among does not check if the 
<br>
input is valid. Try
<br>
<p>hwloc-distrib --single --among blabla 4
<br>
<p>Thanks!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1491.php">Christopher Samuel: "[hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1489.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc2r2795)"</a>
<li><strong>In reply to:</strong> <a href="1484.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1483.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
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
