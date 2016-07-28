<?
$subject_val = "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 26 02:15:09 2012" -->
<!-- isoreceived="20120326061509" -->
<!-- sent="Mon, 26 Mar 2012 08:14:58 +0200" -->
<!-- isosent="20120326061458" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fwd: BGQ empty topology with MPI" -->
<!-- id="4F700962.5010303_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F6FDF75.8030509_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Fwd: BGQ empty topology with MPI<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-26 02:14:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2994.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2992.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2991.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2994.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2994.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 26/03/2012 05:16, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; On 25/03/12 09:04, Daniel Ibanez wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Additional printfs confirm that with MPI in the code,
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_accessat succeeds on the various /sys/ directories, but the
</span><br>
<span class="quotelev2">&gt; &gt; overall procedure for getting PUs from these fails. Without MPI,
</span><br>
<span class="quotelev2">&gt; &gt; access to /sys/ directories fails but the fallback
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_setup_pu_level works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like your I/O with MPI is getting redirected to the I/O node
</span><br>
<span class="quotelev1">&gt; (and hence finding /sys from the Linux kernel there) but when you're
</span><br>
<span class="quotelev1">&gt; running without MPI it's trying to open files on the compute node and
</span><br>
<span class="quotelev1">&gt; the CNK isn't presenting the /sys directories, causing it to fall back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've run lstopo on our BG/P and I get to see the 4 cores there whether
</span><br>
<span class="quotelev1">&gt; it's the stock code or if I add an MPI_Init() to the start.  The
</span><br>
<span class="quotelev1">&gt; output from lstopo when built with --enable-debug confirms it's
</span><br>
<span class="quotelev1">&gt; reporting kernel and hostname info from the I/O node associated with
</span><br>
<span class="quotelev1">&gt; the block:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine#0(Backend=Linux OSName=CNK OSRelease=2.6.16.60-304 OSVersion=1
</span><br>
<span class="quotelev1">&gt; HostName=r00-m1-n04.pcf.vlsci.unimelb.edu.au Architecture=BGP) [...]
</span><br>
<p>Thanks, that would explain such a strange behavior.
<br>
<p>For the record, you can run &quot;lstopo -v&quot; or even &quot;lstopo -.xml&quot; to get
<br>
more info, especially machine attributes.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2994.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2992.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2991.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2994.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2994.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
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
