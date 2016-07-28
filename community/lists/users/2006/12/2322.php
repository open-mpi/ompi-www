<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  7 14:20:29 2006" -->
<!-- isoreceived="20061207192029" -->
<!-- sent="Thu, 7 Dec 2006 14:20:04 -0500" -->
<!-- isosent="20061207192004" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running with the dr pml." -->
<!-- id="88D367A2-449A-4E51-AD0B-567D1DAA1E64_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="14E13E15-48A4-4F10-8BD2-7EBA717CA1F3_at_umich.edu" -->
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
<strong>Date:</strong> 2006-12-07 14:20:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2323.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2321.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>In reply to:</strong> <a href="2320.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2323.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2323.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2326.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something is not clear for me in this discussion. Sometimes the  
<br>
subject was the DR PML and sometimes the OB1 PML. In fact I'm  
<br>
completely in the dark ... Which PML fails the HPCC test on  MAC ?  
<br>
When I look at the command line it look like it should be OB1 not DR ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 7, 2006, at 1:59 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; That is wonderful, that fixes the observed problem for running with
</span><br>
<span class="quotelev1">&gt; OB1.   Has a bug for this been filed to get RDMA working on macs?
</span><br>
<span class="quotelev1">&gt; The only working MPI lib is MPICH-GM  as this problem happens with
</span><br>
<span class="quotelev1">&gt; LAM-7.1.3 also.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So on track for one bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would the person working on the DR PML like me to try anymore tests?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 7, 2006, at 9:50 AM, Scott Atchley wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 6, 2006, at 3:09 PM, Scott Atchley wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock and Galen,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are willing to assist. Our best guess is that OMPI is using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code in a way different than MPICH-GM does. One of our other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developers who is more comfortable with the GM API is looking into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We tried running with HPCC with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 4 -machinefile hosts -mca btl ^tcp  -mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_gm_min_rdma_size $((10*1024*1024)) ./hpcc.ompi.gm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and HPL passes. The problem seems to be in the RDMA fragmenting code
</span><br>
<span class="quotelev2">&gt;&gt; on OSX. The boundary values at the edges of the fragments are not
</span><br>
<span class="quotelev2">&gt;&gt; correct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scott
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2323.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2321.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>In reply to:</strong> <a href="2320.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2323.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2323.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2326.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
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
