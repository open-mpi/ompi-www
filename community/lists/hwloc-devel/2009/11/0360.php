<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 16:34:24 2009" -->
<!-- isoreceived="20091111213424" -->
<!-- sent="Wed, 11 Nov 2009 22:34:19 +0100" -->
<!-- isosent="20091111213419" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333" -->
<!-- id="20091111213419.GX4729_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200911111633.nABGXVq7001677_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 16:34:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0361.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0359.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0361.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Maybe reply:</strong> <a href="0361.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
bgoglin_at_[hidden], le Wed 11 Nov 2009 11:33:31 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; +  /* FIXME: should be SET_THREAD_CPUBIND given with a pid */
</span><br>
<span class="quotelev1">&gt; +  if (flags &amp; HWLOC_SUPPORT_SET_PROC_CPUBIND)
</span><br>
<span class="quotelev1">&gt; +    *api_type = HWLOC_PLPA_PROBE_OK;
</span><br>
<span class="quotelev1">&gt; +  else
</span><br>
<span class="quotelev1">&gt; +    *api_type = HWLOC_PLPA_PROBE_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; +  return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<p>Just to refine my thoughts: providing the interface but accepting only
<br>
pid 0 (i.e. &quot;self&quot;) is however portability-wise ok and can already be
<br>
mapped to the current hwloc interface.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0361.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0359.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0361.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Maybe reply:</strong> <a href="0361.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
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
