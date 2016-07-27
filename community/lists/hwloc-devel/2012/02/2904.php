<?
$subject_val = "Re: [hwloc-devel] hwloc_alloc_membind";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 24 08:45:00 2012" -->
<!-- isoreceived="20120224134500" -->
<!-- sent="Fri, 24 Feb 2012 14:44:55 +0100" -->
<!-- isosent="20120224134455" -->
<!-- name="Karl Napf" -->
<!-- email="karl.b.napf_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc_alloc_membind" -->
<!-- id="CANnDKzevWfThBUXq3d3P7LmX0LjkGCXFbdeXG8oX=tcJQ=z+vQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Karl Napf (<em>karl.b.napf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-24 08:44:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2905.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Previous message:</strong> <a href="2903.php">Brice Goglin: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>In reply to:</strong> <a href="2902.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2905.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot, Samuel. BTW the documentation says that
<br>
hwloc_alloc_membind and hwloc_alloc_membind_nodeset return -1 on
<br>
error, but this should be NULL.
<br>
<p>Regards
<br>
Karl
<br>
<p><p>2012/2/24 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Karl Napf, le Fri 24 Feb 2012 13:04:58 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; What surprises me is that the result of the call to
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_fix_membind_cpuset in line 534 of bind.c is negated, even though
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_fix_membind_cpuset returns 0 on success. Might this be a bug?
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It has a meaning when there is not enough memory on the node. Allocation
</span><br>
<span class="quotelev1">&gt; may then be done in some node of the given cpuset. &#160;This kind of precise
</span><br>
<span class="quotelev1">&gt; detail on the behavior however vary over OSes. &#160;Linux does not take it
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
<li><strong>Next message:</strong> <a href="2905.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Previous message:</strong> <a href="2903.php">Brice Goglin: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>In reply to:</strong> <a href="2902.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2905.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
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
