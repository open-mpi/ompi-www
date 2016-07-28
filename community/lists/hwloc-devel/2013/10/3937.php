<?
$subject_val = "Re: [hwloc-devel] Strange difference";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 12 14:44:50 2013" -->
<!-- isoreceived="20131012184450" -->
<!-- sent="Sat, 12 Oct 2013 20:44:45 +0200" -->
<!-- isosent="20131012184445" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Strange difference" -->
<!-- id="5259989D.9040109_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="68AD0255-4ED7-4C2B-8C01-A98D5143B37F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Strange difference<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-12 14:44:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3938.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-7-g358d19c)"</a>
<li><strong>Previous message:</strong> <a href="3936.php">Ralph Castain: "[hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="3936.php">Ralph Castain: "[hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Ralph,
<br>
The reason is that get_type_depth() returns negative numbers for errors
<br>
(when the type doesn't exist or exists multiple times in the topology).
<br>
topology_get_depth() never fails, so always returns &gt;=0.
<br>
And indeed that's annoying when the compiler is picky.
<br>
Brice
<br>
<p><p><p>Le 12/10/2013 20:37, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Yo guys
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was doing some work that involved traversing the hwloc topo tree, and encountered the following odd discrepancy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_topology_get_depth  =&gt; returns &quot;unsigned&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_get_type_depth  =&gt; returns &quot;int&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why the difference? Makes it hard sometimes to avoid the &quot;comparison between unsigned and signed&quot; warnings when using these functions.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3938.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-7-g358d19c)"</a>
<li><strong>Previous message:</strong> <a href="3936.php">Ralph Castain: "[hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="3936.php">Ralph Castain: "[hwloc-devel] Strange difference"</a>
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
