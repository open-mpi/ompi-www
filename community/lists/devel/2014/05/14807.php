<?
$subject_val = "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 05:57:08 2014" -->
<!-- isoreceived="20140515095708" -->
<!-- sent="Thu, 15 May 2014 18:57:20 +0900" -->
<!-- isosent="20140515095720" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)" -->
<!-- id="53748F80.9060905_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140514161655.GG93343_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 05:57:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14808.php">Nathan Hjelm: "[OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Previous message:</strong> <a href="14806.php">Gilles Gouaillardet: "[OMPI devel] r31765 causes crash in mpirun"</a>
<li><strong>In reply to:</strong> <a href="14804.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14803.php">George Bosilca: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>this had no effect on my environment :-(
<br>
<p>i am not sure you can reuse mca_btl_scif_module.scif_fd with connect()
<br>
i had to use a new scif fd for that.
<br>
<p>then i ran into an other glitch : if the listen thread does not
<br>
scif_accept() the connection,
<br>
the scif_connect() will take 30 seconds (default timeout value i guess)
<br>
<p>i fixed this in r31772
<br>
<p>Gilles
<br>
<p>On 2014/05/15 1:16, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; That is exactly how I decided to fix it. It looks like it is
</span><br>
<span class="quotelev1">&gt; working. Please try r31755 when you get a chance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14808.php">Nathan Hjelm: "[OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Previous message:</strong> <a href="14806.php">Gilles Gouaillardet: "[OMPI devel] r31765 causes crash in mpirun"</a>
<li><strong>In reply to:</strong> <a href="14804.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14803.php">George Bosilca: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
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
