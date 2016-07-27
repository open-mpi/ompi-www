<?
$subject_val = "Re: [hwloc-devel] gather-topology.sh and rpm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 05:39:10 2010" -->
<!-- isoreceived="20101101093910" -->
<!-- sent="Mon, 01 Nov 2010 10:38:49 +0100" -->
<!-- isosent="20101101093849" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] gather-topology.sh and rpm" -->
<!-- id="4CCE8AA9.1000109_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201010312317.12838.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] gather-topology.sh and rpm<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-01 05:38:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1404.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/10/1402.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3a1r2677)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/10/1400.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1405.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Reply:</strong> <a href="1405.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 31/10/2010 23:17, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; 1) During install, rename  gather-topology.sh on hwloc-gather-topology.sh
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I don't know how to rename properly during install with automake, so I
<br>
just renamed everywhere (source, build and install dir).
<br>
<p><span class="quotelev1">&gt; 2) During install,  remove variable abs_top_builddir all together and make 
</span><br>
<span class="quotelev1">&gt; lstopo=`which lstopo`
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I replace $abs_top_builddir/utils with $bindir during install. I want to
<br>
be sure that we're not going to mix different versions of
<br>
gather-topology and lstopo since the command-line options given by
<br>
gather to lstopo changed in the past.
<br>
<p><span class="quotelev1">&gt; 3)Create a minimalist man page (it just need to say in one or two sentences 
</span><br>
<span class="quotelev1">&gt; what the command does)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>There's a usage but no manpage yet, lazyness :)
<br>
<p><span class="quotelev1">&gt; BTW, 
</span><br>
<span class="quotelev1">&gt; gather-topology.sh /tmp/a 
</span><br>
<span class="quotelev1">&gt; is not working at the moment.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I just fixed this in trunk, thanks.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1404.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/10/1402.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3a1r2677)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/10/1400.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1405.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Reply:</strong> <a href="1405.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
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
