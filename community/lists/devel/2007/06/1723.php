<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jun 16 10:19:30 2007" -->
<!-- isoreceived="20070616141930" -->
<!-- sent="Sat, 16 Jun 2007 08:19:21 -0600" -->
<!-- isosent="20070616141921" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] flags in openib btl" -->
<!-- id="CAF44297-CFE8-4039-90CE-48AF24FFF323_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B982AC91-2B83-4D2D-8C21-B8963753D107_at_cisco.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-16 10:19:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1724.php">Markus Daene: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Previous message:</strong> <a href="1722.php">Jeff Squyres: "[OMPI devel] flags in openib btl"</a>
<li><strong>In reply to:</strong> <a href="1722.php">Jeff Squyres: "[OMPI devel] flags in openib btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These two:
<br>
<p><span class="quotelev1">&gt; MCA_BTL_FLAGS_NEED_ACK MCA_BTL_FLAGS_NEED_CSUM
</span><br>
<p>Are used by DR. They aren't used by OB1.
<br>
<p>- Galen
<br>
<p><p>On Jun 15, 2007, at 9:27 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I notice that our help message for the btl_openib_flags MCA parameter
</span><br>
<span class="quotelev1">&gt; seems to be a bit out of date:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CHECK(reg_int(&quot;flags&quot;, &quot;BTL flags, added together: SEND=1, PUT=2,
</span><br>
<span class="quotelev1">&gt; GET=4 &quot;
</span><br>
<span class="quotelev1">&gt;                &quot;(cannot be 0)&quot;,
</span><br>
<span class="quotelev1">&gt;                MCA_BTL_FLAGS_RDMA | MCA_BTL_FLAGS_NEED_ACK |
</span><br>
<span class="quotelev1">&gt;                MCA_BTL_FLAGS_NEED_CSUM, &amp;ival, REGINT_GE_ZERO));
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_module.super.btl_flags = (uint32_t) ival;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, we only list values of 1, 2, and 4.  But the default
</span><br>
<span class="quotelev1">&gt; value is 54.  So clearly, there's quite a few more flags that can be
</span><br>
<span class="quotelev1">&gt; set there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What are they?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1724.php">Markus Daene: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Previous message:</strong> <a href="1722.php">Jeff Squyres: "[OMPI devel] flags in openib btl"</a>
<li><strong>In reply to:</strong> <a href="1722.php">Jeff Squyres: "[OMPI devel] flags in openib btl"</a>
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
