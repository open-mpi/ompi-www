<?
$subject_val = "[OMPI devel] openib btl and 10 GbE port";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 12 20:10:34 2016" -->
<!-- isoreceived="20160613001034" -->
<!-- sent="Mon, 13 Jun 2016 09:10:24 +0900" -->
<!-- isosent="20160613001024" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] openib btl and 10 GbE port" -->
<!-- id="8f10e9e4-eaf6-8518-e557-b2fd9a5c5de9_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] openib btl and 10 GbE port<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-12 20:10:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19100.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.x nightly tarball created"</a>
<li><strong>Previous message:</strong> <a href="19098.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p><p>this is a follow up of a user report available at 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2016/06/29423.php">http://www.open-mpi.org/community/lists/users/2016/06/29423.php</a>
<br>
<p><p>Basically, one node has a dual port ConnectX3 card, with one IB port and 
<br>
one 10 GbE port.
<br>
<p>When diagnosing some RDMA errors (not the point of this email), the user 
<br>
was surprised to find that both IB and 10 GbE port were used. Both ports 
<br>
appear to be managed by the openib btl, so from an Open MPI point of 
<br>
view, i can only guess they have the same btl exclusivity (1024 by default).
<br>
<p>Is this an intended behavior ?
<br>
<p>or should the exclusivity of the 10 GbE port be lower and the one of the 
<br>
IB port *by default* ?
<br>
<p>/* so only the IB port is used by default */
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19100.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.x nightly tarball created"</a>
<li><strong>Previous message:</strong> <a href="19098.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
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
