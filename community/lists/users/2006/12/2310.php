<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  6 08:03:58 2006" -->
<!-- isoreceived="20061206130358" -->
<!-- sent="Wed, 6 Dec 2006 08:03:46 -0500" -->
<!-- isosent="20061206130346" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI for 32/64 bit IB drivers" -->
<!-- id="6E2A2F6B-157E-42EB-99C8-1F2ED8017B00_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45760B01.7090305_at_csiro.au" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-06 08:03:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2311.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2309.php">Jeff Squyres: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2305.php">Aaron McDonough: "[OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2328.php">Aaron McDonough: "[OMPI users]  OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>Reply:</strong> <a href="2328.php">Aaron McDonough: "[OMPI users]  OpenMPI for 32/64 bit IB drivers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 5, 2006, at 7:12 PM, Aaron McDonough wrote:
<br>
<p><span class="quotelev1">&gt; We have a mix of i686 and x86_64 SLES9 nodes, some with IB interfaces
</span><br>
<span class="quotelev1">&gt; and some without. Ideally, we want users to be able to run the same
</span><br>
<span class="quotelev1">&gt; binary on any node. Can I build a common OpenMPI for both platforms  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; will work with either 32 or 64 bit IB drivers (Topspin)? Or do I  
</span><br>
<span class="quotelev1">&gt; have to
</span><br>
<span class="quotelev1">&gt; use all 32bit IB drivers? Any advice is appreciated.
</span><br>
<p>A few things:
<br>
<p>1. OMPI's heterogeneity support in the 1.1 series has some known  
<br>
issues (e.g., mixing 32 and 64 bit executables in a single  
<br>
MPI_COMM_WORLD).  The development head (and therefore the upcoming  
<br>
1.2 series) has many bug fixes in this area (but is still not perfect  
<br>
-- there's a few open tickets about heterogeneity that are actively  
<br>
being worked on).
<br>
<p>2. In theory, using OMPI with 32 bit IB support in the same  
<br>
MPI_COMM_WORLD with OMPI with 64 bit IB support *should* be ok, but I  
<br>
don't know if anyone has tested this configuration (and subject to  
<br>
the constraints of #1).  Brad/IBM -- have you guys done so?
<br>
<p>3. Depending on your needs, Cisco is recommending moving away from  
<br>
the Topspin drivers and to the OFED IB driver stack for HPC  
<br>
clusters.  The VAPI (i.e., Topspin drivers) support in Open MPI is  
<br>
pretty static; we'll do critical bug fixes for it, but no new  
<br>
features and very little functionality testing is occurring there.   
<br>
All new work is being doing on the OpenIB (a.k.a. OpenFabrics a.k.a.  
<br>
OFED) drivers for Open MPI.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2311.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2309.php">Jeff Squyres: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2305.php">Aaron McDonough: "[OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2328.php">Aaron McDonough: "[OMPI users]  OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>Reply:</strong> <a href="2328.php">Aaron McDonough: "[OMPI users]  OpenMPI for 32/64 bit IB drivers"</a>
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
