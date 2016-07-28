<?
$subject_val = "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 16:57:25 2011" -->
<!-- isoreceived="20110906205725" -->
<!-- sent="Tue, 6 Sep 2011 16:57:18 -0400" -->
<!-- isosent="20110906205718" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)" -->
<!-- id="DAD413AC-FEAB-4DE0-AB2F-D406BB28F58B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANePEP+knGSTQ+Hys=tqAaTzKSmF1NgpQn4EFTEPM=3ZCJygSA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 16:57:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9749.php">Sylvain Jeaugey: "[OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Previous message:</strong> <a href="9747.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>In reply to:</strong> <a href="9746.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 6, 2011, at 1:24 PM, Bhargava Ramu Kavati wrote:
<br>
<p><span class="quotelev1">&gt; As per our last discussion, MPI_INIT(..) uses TCP socket to exchange its service-id/lid with other MPI processes.  I assume this applies irrespective of underlying library used to establish connection i.e libibcm or librdmacm.  Please correct me if I am wrong.
</span><br>
<p>It can use librdmacm, but it doesn't have to (and doesn't by default).  librdmacm uses its own internal communications -- I'm not sure what transport layer it uses.  By default, however, OMPI uses a TCP-based connection mechanism.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9749.php">Sylvain Jeaugey: "[OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Previous message:</strong> <a href="9747.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>In reply to:</strong> <a href="9746.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
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
