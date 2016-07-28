<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  7 14:00:24 2006" -->
<!-- isoreceived="20061207190024" -->
<!-- sent="Thu, 7 Dec 2006 13:59:00 -0500" -->
<!-- isosent="20061207185900" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running with the dr pml." -->
<!-- id="14E13E15-48A4-4F10-8BD2-7EBA717CA1F3_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AFFAA989-6E53-4149-B498-203140B46BED_at_myri.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-07 13:59:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2321.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Previous message:</strong> <a href="2319.php">Thomas Spraggins: "[OMPI users] configure problem using g77 on OSX 10.4"</a>
<li><strong>In reply to:</strong> <a href="2317.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is wonderful, that fixes the observed problem for running with  
<br>
OB1.   Has a bug for this been filed to get RDMA working on macs?     
<br>
The only working MPI lib is MPICH-GM  as this problem happens with  
<br>
LAM-7.1.3 also.
<br>
<p>So on track for one bug.
<br>
<p>Would the person working on the DR PML like me to try anymore tests?
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Dec 7, 2006, at 9:50 AM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 6, 2006, at 3:09 PM, Scott Atchley wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock and Galen,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are willing to assist. Our best guess is that OMPI is using the
</span><br>
<span class="quotelev2">&gt;&gt; code in a way different than MPICH-GM does. One of our other
</span><br>
<span class="quotelev2">&gt;&gt; developers who is more comfortable with the GM API is looking into  
</span><br>
<span class="quotelev2">&gt;&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We tried running with HPCC with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 -machinefile hosts -mca btl ^tcp  -mca
</span><br>
<span class="quotelev1">&gt; btl_gm_min_rdma_size $((10*1024*1024)) ./hpcc.ompi.gm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and HPL passes. The problem seems to be in the RDMA fragmenting code
</span><br>
<span class="quotelev1">&gt; on OSX. The boundary values at the edges of the fragments are not
</span><br>
<span class="quotelev1">&gt; correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2321.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Previous message:</strong> <a href="2319.php">Thomas Spraggins: "[OMPI users] configure problem using g77 on OSX 10.4"</a>
<li><strong>In reply to:</strong> <a href="2317.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
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
