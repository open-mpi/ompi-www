<?
$subject_val = "Re: [hwloc-devel] hwloc_alloc_membind";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 24 08:05:19 2012" -->
<!-- isoreceived="20120224130519" -->
<!-- sent="Fri, 24 Feb 2012 14:05:10 +0100" -->
<!-- isosent="20120224130510" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc_alloc_membind" -->
<!-- id="4F478B06.3020700_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120224125219.GO4369_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc_alloc_membind<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-24 08:05:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2904.php">Karl Napf: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Previous message:</strong> <a href="2902.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>In reply to:</strong> <a href="2902.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2904.php">Karl Napf: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Karl,
<br>
<p>I'll release hwloc 1.4.1rc2 with Samuel's changes on Monday. If you need
<br>
the fix earlier, you can apply
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/changeset/4345">https://svn.open-mpi.org/trac/hwloc/changeset/4345</a>
<br>
or checkout svn branch v1.4
<br>
or use the nightly build that will be updated tomorrow early morning at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/hwloc/nightly/v1.4/">http://www.open-mpi.org/software/hwloc/nightly/v1.4/</a>
<br>
(or you can ask us to provide an updated tarball earlier)
<br>
<p>Brice
<br>
<p><p><p>Le 24/02/2012 13:52, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Karl Napf, le Fri 24 Feb 2012 13:04:58 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; What surprises me is that the result of the call to
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_fix_membind_cpuset in line 534 of bind.c is negated, even though
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_fix_membind_cpuset returns 0 on success. Might this be a bug?
</span><br>
<span class="quotelev1">&gt; Oops, indeed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. In another use case I want to allocate memory using the first-touch
</span><br>
<span class="quotelev2">&gt;&gt; policy (HWLOC_MEMBIND_FIRSTTOUCH). Does the cpuset passed to
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_alloc_membind have any meaning in this case, since the memory is
</span><br>
<span class="quotelev2">&gt;&gt; not immediately bound to a node?
</span><br>
<span class="quotelev1">&gt; It has a meaning when there is not enough memory on the node. Allocation
</span><br>
<span class="quotelev1">&gt; may then be done in some node of the given cpuset.  This kind of precise
</span><br>
<span class="quotelev1">&gt; detail on the behavior however vary over OSes.  Linux does not take it
</span><br>
<span class="quotelev1">&gt; into account for instance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
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
<li><strong>Next message:</strong> <a href="2904.php">Karl Napf: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Previous message:</strong> <a href="2902.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>In reply to:</strong> <a href="2902.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2904.php">Karl Napf: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
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
