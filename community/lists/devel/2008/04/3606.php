<?
$subject_val = "Re: [OMPI devel] Trunk launch scaling";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 05:00:18 2008" -->
<!-- isoreceived="20080402090018" -->
<!-- sent="Wed, 02 Apr 2008 12:00:08 +0300" -->
<!-- isosent="20080402090008" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk launch scaling" -->
<!-- id="47F34B18.9060308_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C417F016.CE9A%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk launch scaling<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 05:00:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3607.php">Josh Hursey: "[OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3605.php">George Bosilca: "Re: [OMPI devel] limit tcp fragment size?"</a>
<li><strong>In reply to:</strong> <a href="3602.php">Ralph H Castain: "[OMPI devel] Trunk launch scaling"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
If you plan to compare OMPI to Mvapich, make sure to take the version 
<br>
1.0.0 (or above). In 1.0.0 OSU introduced
<br>
new launcher that works much faster than previous one.
<br>
<p>Regards,
<br>
Pasha
<br>
<p>Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Per this morning's telecon, I have added the latest scaling test results to
</span><br>
<span class="quotelev1">&gt; the wiki:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/ORTEScalabilityTesting">https://svn.open-mpi.org/trac/ompi/wiki/ORTEScalabilityTesting</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you will see upon review, the trunk is scaling about an order of
</span><br>
<span class="quotelev1">&gt; magnitude better than 1.2.x, both in terms of sheer speed and in the
</span><br>
<span class="quotelev1">&gt; strength of the non-linear components of the scaling law. Those of us
</span><br>
<span class="quotelev1">&gt; working on scaling issues expect to make additional improvements over the
</span><br>
<span class="quotelev1">&gt; next few weeks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Update results will be posted to the wiki as they become available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3607.php">Josh Hursey: "[OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3605.php">George Bosilca: "Re: [OMPI devel] limit tcp fragment size?"</a>
<li><strong>In reply to:</strong> <a href="3602.php">Ralph H Castain: "[OMPI devel] Trunk launch scaling"</a>
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
