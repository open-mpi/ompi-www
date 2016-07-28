<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  6 15:09:32 2006" -->
<!-- isoreceived="20061206200932" -->
<!-- sent="Wed, 6 Dec 2006 15:09:25 -0500" -->
<!-- isosent="20061206200925" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running with the dr pml." -->
<!-- id="87538453-88BC-4C5B-9832-05D2DDE60372_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="66A04C51-D09D-462F-B7BC-56B704ACC0E3_at_umich.edu" -->
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
<strong>Date:</strong> 2006-12-06 15:09:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2315.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Previous message:</strong> <a href="2313.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2313.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2317.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2317.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 6, 2006, at 2:29 PM, Brock Palen wrote:
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if we can narrow this down a bit to perhaps a PML protocol
</span><br>
<span class="quotelev2">&gt;&gt; issue.
</span><br>
<span class="quotelev2">&gt;&gt; Start by disabling RDMA by using:
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl_gm_flags 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other-hand,  with OB1  using btl_gm_flags 1  fixed the error
</span><br>
<span class="quotelev1">&gt; problem with OMPI!  Which is a great first step.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 --mca btl_gm_flags 1 ./xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Allowed HPL to run with no errors.  I verified the performance was
</span><br>
<span class="quotelev1">&gt; better than when ran without gm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (added --mca btl ^gm )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So still a problem with DR  which i dont need but im willing to help
</span><br>
<span class="quotelev1">&gt; test it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can we look into why leaving RDMA on if causing a problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock
</span><br>
<p>Brock and Galen,
<br>
<p>We are willing to assist. Our best guess is that OMPI is using the  
<br>
code in a way different than MPICH-GM does. One of our other  
<br>
developers who is more comfortable with the GM API is looking into it.
<br>
<p>Testing with HPCC, in addition to the HPL failed residuals, I am also  
<br>
seeing these messages:
<br>
<p>[3]: ERROR: from right: expected 2 and 3 as first and last byte, but  
<br>
got 2 and 5 instead
<br>
[3]: ERROR: from right: expected 3 and 4 as first and last byte, but  
<br>
got 3 and 7 instead
<br>
[1]: ERROR: from right: expected 4 and 5 as first and last byte, but  
<br>
got 4 and 3 instead
<br>
[1]: ERROR: from right: expected 7 and 8 as first and last byte, but  
<br>
got 7 and 5 instead
<br>
<p>which is from $HPCC/src/bench_lat_bw_1.5.2.c.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2315.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Previous message:</strong> <a href="2313.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2313.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2317.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2317.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
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
