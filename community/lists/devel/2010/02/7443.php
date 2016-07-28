<?
$subject_val = "[OMPI devel] v1.4 broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 05:18:54 2010" -->
<!-- isoreceived="20100217101854" -->
<!-- sent="Wed, 17 Feb 2010 05:18:48 -0500" -->
<!-- isosent="20100217101848" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.4 broken" -->
<!-- id="2B12EA4D-6189-4F7F-ADB7-672556584CDF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] v1.4 broken<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-17 05:18:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7444.php">Pavel Shamis (Pasha): "Re: [OMPI devel] v1.4 broken"</a>
<li><strong>Previous message:</strong> <a href="7442.php">Ralf Wildenhues: "Re: [OMPI devel] configure question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7444.php">Pavel Shamis (Pasha): "Re: [OMPI devel] v1.4 broken"</a>
<li><strong>Reply:</strong> <a href="7444.php">Pavel Shamis (Pasha): "Re: [OMPI devel] v1.4 broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just noticed that the nightly tarball of v1.4 failed to build in the OpenIB BTL last night. The error was:
<br>
<p>-----------------
<br>
btl_openib_component.c: In function 'init_one_device':
<br>
btl_openib_component.c:2089: error: 'mca_btl_openib_component_t' has no member named 'default_recv_qps'
<br>
-----------------
<br>
<p>It looks like CMR #2251 is the problem.
<br>
<p>-- Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7444.php">Pavel Shamis (Pasha): "Re: [OMPI devel] v1.4 broken"</a>
<li><strong>Previous message:</strong> <a href="7442.php">Ralf Wildenhues: "Re: [OMPI devel] configure question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7444.php">Pavel Shamis (Pasha): "Re: [OMPI devel] v1.4 broken"</a>
<li><strong>Reply:</strong> <a href="7444.php">Pavel Shamis (Pasha): "Re: [OMPI devel] v1.4 broken"</a>
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
