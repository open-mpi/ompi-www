<?
$subject_val = "Re: [hwloc-devel] Static analysis";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 06:57:20 2016" -->
<!-- isoreceived="20160112115720" -->
<!-- sent="Tue, 12 Jan 2016 12:57:15 +0100" -->
<!-- isosent="20160112115715" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Static analysis" -->
<!-- id="5694EA1B.10008_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D6EDEBF1F91015459DB866AC4EE162CC0234A407_at_IRSMSX103.ger.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Static analysis<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-12 06:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4700.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Previous message:</strong> <a href="4698.php">Odzioba, Lukasz: "[hwloc-devel] Static analysis"</a>
<li><strong>In reply to:</strong> <a href="4698.php">Odzioba, Lukasz: "[hwloc-devel] Static analysis"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4700.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Reply:</strong> <a href="4700.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>We're running coverity every night and I try to address most of what it
<br>
reports (except the netloc/ directory git master which still needs a lot
<br>
of work). What tool do you use?
<br>
<p>It's true we don't check malloc() return values in many cases (hopefully
<br>
only the small allocations), mostly because we're lazy (and also because
<br>
many other things would go wrong when malloc starts failing :/)
<br>
<p>Brice
<br>
<p><p><p>Le 12/01/2016 12:23, Odzioba, Lukasz a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Static analysis tool we use has found quite a lot of potential issues in hwloc.
</span><br>
<span class="quotelev1">&gt; Most of them are type of &quot;NULL ptr dereference&quot; i.e. when pointer is not checked for null after allocation, but there are some more interesting cases as well.
</span><br>
<span class="quotelev1">&gt; My team distributes hwloc as a part of software package and we could just ignore those, but I wanted to let you know in case you are interested in fixing some or all of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know If you would like to get a full list, so I'll prepare it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Lukas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4698.php">http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4698.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4700.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Previous message:</strong> <a href="4698.php">Odzioba, Lukasz: "[hwloc-devel] Static analysis"</a>
<li><strong>In reply to:</strong> <a href="4698.php">Odzioba, Lukasz: "[hwloc-devel] Static analysis"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4700.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Reply:</strong> <a href="4700.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
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
