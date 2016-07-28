<?
$subject_val = "Re: [OMPI users] Heterogeneous OpenFabrics hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 06:08:42 2009" -->
<!-- isoreceived="20090127110842" -->
<!-- sent="Tue, 27 Jan 2009 12:08:32 +0100" -->
<!-- isosent="20090127110832" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heterogeneous OpenFabrics hardware" -->
<!-- id="200901271208.37068.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CECDAC1A-3041-4943-BB8E-61A33046BD18_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heterogeneous OpenFabrics hardware<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 06:08:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7856.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7854.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7834.php">Jeff Squyres: "[OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7856.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="7856.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday 26 January 2009, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; The Interop Working Group (IWG) of the OpenFabrics Alliance asked me
</span><br>
<span class="quotelev1">&gt; to bring a question to the Open MPI user and developer communities: is
</span><br>
<span class="quotelev1">&gt; anyone interested in having a single MPI job span HCAs or RNICs from
</span><br>
<span class="quotelev1">&gt; multiple vendors?  (pardon the cross-posting, but I did want to ask
</span><br>
<span class="quotelev1">&gt; each group separately -- because the answers may be different)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The interop testing lab at the University of New Hampshire
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.iol.unh.edu/services/testing/ofa/">http://www.iol.unh.edu/services/testing/ofa/</a> ) discovered that most (all?)
</span><br>
<span class="quotelev1">&gt; MPI implementations fail when having a single MPI job span HCAs from
</span><br>
<span class="quotelev1">&gt; multiple vendors and/or span RNICs from multiple vendors.  I don't remember
</span><br>
<span class="quotelev1">&gt; the exact details (and they may not be public, anyway), but I'm pretty sure
</span><br>
<span class="quotelev1">&gt; that OMPI failed when used with QLogic and Mellanox HCAs in a single MPI
</span><br>
<span class="quotelev1">&gt; job.  This is fairly unsurprising, given how we tune Open MPI's use of
</span><br>
<span class="quotelev1">&gt; OpenFabrics-capable hardware based on our .ini file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my question is: does anyone want/need to support jobs that span
</span><br>
<span class="quotelev1">&gt; HCAs from multiple vendors and/or RNICs from multiple vendors?
</span><br>
<p>For these three cases:
<br>
<p>1) Different vedor id but same OFED driver and basic chip
<br>
2) Same chip vendor, different OFED driver (mthca vs mlx4)
<br>
3) Any OFED supported IB HCA
<br>
<p>IMHO:
<br>
<p>Number one should just work. We may at times have some nodes with HCAs that 
<br>
have been flashed with non-standard/non-vendor firmware.
<br>
<p>Number two is something I would kind of expect to work. A possible situation 
<br>
where I'd need it is if I temporarily use an older HCA (mthca) to get a node 
<br>
going on a cluster with ConnectX (mlx4). Another case could be a cluster with 
<br>
two partitions with different HCAs.
<br>
<p>Number three would be nice to have. I think many users would assume it to 
<br>
work. Why not? They have symmetric software, all nodes run OFED, all have 
<br>
working IB... It would have worked if their nodes had had different kinds of 
<br>
ethernet NICS...
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7855/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7856.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7854.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7834.php">Jeff Squyres: "[OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7856.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="7856.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
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
