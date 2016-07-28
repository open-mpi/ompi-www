<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  7 15:34:21 2006" -->
<!-- isoreceived="20061207203421" -->
<!-- sent="Thu, 7 Dec 2006 15:33:02 -0500" -->
<!-- isosent="20061207203302" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running with the dr pml." -->
<!-- id="E9BD1722-3C9F-4BE4-B38B-73427642107F_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D1EA209C-1424-4C3F-9949-CA9ADBD91BEE_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2006-12-07 15:33:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2326.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2326.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 7, 2006, at 3:14 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 7, 2006, at 2:45 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ mpirun -np 4 -machinefile hosts -mca btl ^tcp  -mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_gm_min_rdma_size $((10*1024*1024)) ./hpcc.ompi.gm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and HPL passes. The problem seems to be in the RDMA fragmenting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; code
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on OSX. The boundary values at the edges of the fragments are not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here it look like the OB1 PML was used. In order to get HPL to
</span><br>
<span class="quotelev1">&gt; complete successfully we need to set the btl_gm_min_rdma_size to
</span><br>
<span class="quotelev1">&gt; 10MB. What I suspect is that 10MB is more than the size of any
</span><br>
<span class="quotelev1">&gt; message HPL exchange, so adding this MCA parameter effectively
</span><br>
<span class="quotelev1">&gt; disable the RDMA protocol for GM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to pinpoint a more complex problem which might not be
</span><br>
<span class="quotelev1">&gt; related to the PML. If both PMLs (OB1 and DR) have a similar problem
</span><br>
<span class="quotelev1">&gt; when running on top of the GM BTL it might indicate the problem is
</span><br>
<span class="quotelev1">&gt; down in the GM BTL. Can you confirm that running with OB1 and GM on
</span><br>
<span class="quotelev1">&gt; this particular cluster HPL fails ?
</span><br>
<p>If not modifying the btl_gm_min_rdma_size  the run fails with bad  
<br>
results when using OB1.
<br>
If btl_gm_min_rdma  is modified (as you pointed out basically  
<br>
disabled then)  It no-longer fails.
<br>
<p>Using DR over ethernet   (--mca btl ^gm)  or over gm (with and  
<br>
without the btl_gm_min_rdma_size modified) does not even start up.   
<br>
(nothing on stdout stderr and never exits).
<br>
<p>Yes there is a problem at the btl level.   But because the problem is  
<br>
different and presists across both GM and TCP, I believe we are into  
<br>
two separate issues.  But I am not the person to make that call.
<br>
<p>Brock
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="2326.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2326.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
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
