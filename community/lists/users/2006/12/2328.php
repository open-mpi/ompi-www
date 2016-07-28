<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  7 17:04:50 2006" -->
<!-- isoreceived="20061207220450" -->
<!-- sent="Fri, 08 Dec 2006 09:04:43 +1100" -->
<!-- isosent="20061207220443" -->
<!-- name="Aaron McDonough" -->
<!-- email="aaron.mcdonough_at_[hidden]" -->
<!-- subject="[OMPI users]  OpenMPI for 32/64 bit IB drivers" -->
<!-- id="45788FFB.9070305_at_csiro.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6E2A2F6B-157E-42EB-99C8-1F2ED8017B00_at_cisco.com" -->
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
<strong>From:</strong> Aaron McDonough (<em>aaron.mcdonough_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-07 17:04:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2329.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>Previous message:</strong> <a href="2327.php">Reese Faucette: "Re: [OMPI users] myrinet problems on OSX"</a>
<li><strong>In reply to:</strong> <a href="2310.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2329.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>Reply:</strong> <a href="2329.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff.
<br>
<p>It turns out that all our IB blades are EM64T - it's just that some have 
<br>
i686 OS's and some x86_64 OS's. So I think we'll move to all x86_64 
<br>
installs on IB hosts. I guess if we make the OpenMPI a 32-bit build, and 
<br>
link against 32-bit IB drivers (my interpretation of the release notes 
<br>
is that this is supported by the TopSpin driversfor EM64T), then the 
<br>
same application could run on any host i686 or x86_64. Can this be done 
<br>
with the OFED drivers? I assume that OpenMPI doesn't handle the same 
<br>
MPI_COMM_WORLD with different interconnects (TCP vs.IB) - is that right?
<br>
<p>Cheers,
<br>
Aaron
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 5, 2006, at 7:12 PM, Aaron McDonough wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; We have a mix of i686 and x86_64 SLES9 nodes, some with IB interfaces
</span><br>
<span class="quotelev2">&gt;&gt; and some without. Ideally, we want users to be able to run the same
</span><br>
<span class="quotelev2">&gt;&gt; binary on any node. Can I build a common OpenMPI for both platforms  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; will work with either 32 or 64 bit IB drivers (Topspin)? Or do I  
</span><br>
<span class="quotelev2">&gt;&gt; have to
</span><br>
<span class="quotelev2">&gt;&gt; use all 32bit IB drivers? Any advice is appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A few things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. OMPI's heterogeneity support in the 1.1 series has some known  
</span><br>
<span class="quotelev1">&gt; issues (e.g., mixing 32 and 64 bit executables in a single  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD).  The development head (and therefore the upcoming  
</span><br>
<span class="quotelev1">&gt; 1.2 series) has many bug fixes in this area (but is still not perfect  
</span><br>
<span class="quotelev1">&gt; -- there's a few open tickets about heterogeneity that are actively  
</span><br>
<span class="quotelev1">&gt; being worked on).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. In theory, using OMPI with 32 bit IB support in the same  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with OMPI with 64 bit IB support *should* be ok, but I  
</span><br>
<span class="quotelev1">&gt; don't know if anyone has tested this configuration (and subject to  
</span><br>
<span class="quotelev1">&gt; the constraints of #1).  Brad/IBM -- have you guys done so?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Depending on your needs, Cisco is recommending moving away from  
</span><br>
<span class="quotelev1">&gt; the Topspin drivers and to the OFED IB driver stack for HPC  
</span><br>
<span class="quotelev1">&gt; clusters.  The VAPI (i.e., Topspin drivers) support in Open MPI is  
</span><br>
<span class="quotelev1">&gt; pretty static; we'll do critical bug fixes for it, but no new  
</span><br>
<span class="quotelev1">&gt; features and very little functionality testing is occurring there.   
</span><br>
<span class="quotelev1">&gt; All new work is being doing on the OpenIB (a.k.a. OpenFabrics a.k.a.  
</span><br>
<span class="quotelev1">&gt; OFED) drivers for Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Aaron McDonough
Application and User Support
CSIRO High Performance Scientific Computing
E-mail: aaron.mcdonough_at_[hidden]
Phone: +61 3 9669-8133, Fax +61 3 9669-8112
Web: <a href="http://www.hpsc.csiro.au">http://www.hpsc.csiro.au</a> 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2329.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>Previous message:</strong> <a href="2327.php">Reese Faucette: "Re: [OMPI users] myrinet problems on OSX"</a>
<li><strong>In reply to:</strong> <a href="2310.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2329.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>Reply:</strong> <a href="2329.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
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
