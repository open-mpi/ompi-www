<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 10:26:59 2014" -->
<!-- isoreceived="20140716142659" -->
<!-- sent="Wed, 16 Jul 2014 08:26:44 -0600" -->
<!-- isosent="20140716142644" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="20140716142644.GN1506_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53C63733.6000104_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 10:26:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15167.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15165.php">Rolf vandeVaart: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>In reply to:</strong> <a href="15162.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15168.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15168.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15169.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A number of issues have been raised as part of this discussion. Here is
<br>
what I have seen so far:
<br>
<p>&nbsp;- contructor/destructor order not garaunteed: From an opal perspective
<br>
&nbsp;&nbsp;&nbsp;this should not be a problem. Most components are unloaded by
<br>
&nbsp;&nbsp;&nbsp;opal_finalize () not opal_finalize_util (). So opal components
<br>
&nbsp;&nbsp;&nbsp;opal should already be finalized by the time the destructor is called
<br>
&nbsp;&nbsp;&nbsp;(or we can finalize them in the destructor if necessary).
<br>
<p>&nbsp;- portability: All the compilers most of us care about: gcc, intel,
<br>
&nbsp;&nbsp;&nbsp;clang. The exceptions appear to be xlc and pgi. For these compilers
<br>
&nbsp;&nbsp;&nbsp;we can fall back on Ralph's solution and just leak if
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize () is not called after MPI_T_Finalize (). Attached is an
<br>
&nbsp;&nbsp;&nbsp;implementation that does that (needs some adjustment).
<br>
<p><p>-Nathan
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15166/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15167.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15165.php">Rolf vandeVaart: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>In reply to:</strong> <a href="15162.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15168.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15168.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15169.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
