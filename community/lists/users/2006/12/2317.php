<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  7 09:50:23 2006" -->
<!-- isoreceived="20061207145023" -->
<!-- sent="Thu, 7 Dec 2006 09:50:15 -0500" -->
<!-- isosent="20061207145015" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running with the dr pml." -->
<!-- id="AFFAA989-6E53-4149-B498-203140B46BED_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87538453-88BC-4C5B-9832-05D2DDE60372_at_myri.com" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-07 09:50:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2318.php">Jeff Squyres: "Re: [OMPI users] Any known issues with ksh?"</a>
<li><strong>Previous message:</strong> <a href="2316.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>In reply to:</strong> <a href="2314.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2320.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2320.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 6, 2006, at 3:09 PM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; Brock and Galen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are willing to assist. Our best guess is that OMPI is using the
</span><br>
<span class="quotelev1">&gt; code in a way different than MPICH-GM does. One of our other
</span><br>
<span class="quotelev1">&gt; developers who is more comfortable with the GM API is looking into it.
</span><br>
<p>We tried running with HPCC with:
<br>
<p>$ mpirun -np 4 -machinefile hosts -mca btl ^tcp  -mca  
<br>
btl_gm_min_rdma_size $((10*1024*1024)) ./hpcc.ompi.gm
<br>
<p>and HPL passes. The problem seems to be in the RDMA fragmenting code  
<br>
on OSX. The boundary values at the edges of the fragments are not  
<br>
correct.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2318.php">Jeff Squyres: "Re: [OMPI users] Any known issues with ksh?"</a>
<li><strong>Previous message:</strong> <a href="2316.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>In reply to:</strong> <a href="2314.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2320.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2320.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
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
