<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  7 15:14:40 2006" -->
<!-- isoreceived="20061207201440" -->
<!-- sent="Thu, 7 Dec 2006 15:14:34 -0500" -->
<!-- isosent="20061207201434" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running with the dr pml." -->
<!-- id="D1EA209C-1424-4C3F-9949-CA9ADBD91BEE_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0D1CFA59-BA29-4CC2-9BB5-00D55E636FE3_at_umich.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-07 15:14:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2325.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2323.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2323.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2325.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2325.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 7, 2006, at 2:45 PM, Brock Palen wrote:
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -np 4 -machinefile hosts -mca btl ^tcp  -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_gm_min_rdma_size $((10*1024*1024)) ./hpcc.ompi.gm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and HPL passes. The problem seems to be in the RDMA fragmenting  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on OSX. The boundary values at the edges of the fragments are not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correct.
</span><br>
<p>Here it look like the OB1 PML was used. In order to get HPL to  
<br>
complete successfully we need to set the btl_gm_min_rdma_size to  
<br>
10MB. What I suspect is that 10MB is more than the size of any  
<br>
message HPL exchange, so adding this MCA parameter effectively  
<br>
disable the RDMA protocol for GM.
<br>
<p>This seems to pinpoint a more complex problem which might not be  
<br>
related to the PML. If both PMLs (OB1 and DR) have a similar problem  
<br>
when running on top of the GM BTL it might indicate the problem is  
<br>
down in the GM BTL. Can you confirm that running with OB1 and GM on  
<br>
this particular cluster HPL fails ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2325.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2323.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2323.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2325.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2325.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
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
