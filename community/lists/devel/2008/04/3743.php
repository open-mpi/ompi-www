<?
$subject_val = "Re: [OMPI devel] Merging in the CPC work";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 04:50:33 2008" -->
<!-- isoreceived="20080424085033" -->
<!-- sent="Thu, 24 Apr 2008 11:50:10 +0300" -->
<!-- isosent="20080424085010" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Merging in the CPC work" -->
<!-- id="481049C2.20700_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71EF57D1-3883-4DA6-911C-E5C2B292AECA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Merging in the CPC work<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 04:50:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3744.php">Gleb Natapov: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Previous message:</strong> <a href="3742.php">Ralph H Castain: "[OMPI devel] Loadbalancing"</a>
<li><strong>In reply to:</strong> <a href="3740.php">Jeff Squyres: "[OMPI devel] Merging in the CPC work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3744.php">Gleb Natapov: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Reply:</strong> <a href="3744.php">Gleb Natapov: "Re: [OMPI devel] Merging in the CPC work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
All my tests fail.
<br>
XRC disabled tests failed with:
<br>
mtt/installs/Zq_9/install/lib/openmpi/mca_btl_openib.so: undefined 
<br>
symbol: rdma_create_event_channel
<br>
XRC enabled failed with segfault , I will take a look later today.
<br>
<p>Pasha
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; As we discussed yesterday, I have started the merge from the /tmp- 
</span><br>
<span class="quotelev1">&gt; public/openib-cpc2 branch.  &quot;oob&quot; is currently the default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, it caused quite a few conflicts when I merged with the  
</span><br>
<span class="quotelev1">&gt; trunk, so I created a new temp branch and put all the work there: /tmp- 
</span><br>
<span class="quotelev1">&gt; public/openib-cpc3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could all the IB and iWARP vendors and any other interested parties  
</span><br>
<span class="quotelev1">&gt; please try this branch before we bring it back to the trunk?  Please  
</span><br>
<span class="quotelev1">&gt; test all functionality that you care about -- XRC, etc.  I'd like to  
</span><br>
<span class="quotelev1">&gt; bring it back to the trunk COB Thursday.  Please let me know if this  
</span><br>
<span class="quotelev1">&gt; is too soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can force the selection of a different CPC with the  
</span><br>
<span class="quotelev1">&gt; btl_openib_cpc_include MCA param:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun --mca btl_openib_cpc_include oob ...
</span><br>
<span class="quotelev1">&gt;      mpirun --mca btl_openib_cpc_include xoob ...
</span><br>
<span class="quotelev1">&gt;      mpirun --mca btl_openib_cpc_include rdma_cm ...
</span><br>
<span class="quotelev1">&gt;      mpirun --mca btl_openib_cpc_include ibcm ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to concentrate on testing oob and xoob to ensure that  
</span><br>
<span class="quotelev1">&gt; we didn't cause any regressions.  The ibcm and rdma_cm CPCs probably  
</span><br>
<span class="quotelev1">&gt; still have some rough edges (and the IBCM package in OFED itself may  
</span><br>
<span class="quotelev1">&gt; not be 100% -- that's one of the things we're evaluating.  It's known  
</span><br>
<span class="quotelev1">&gt; to not install properly on RHEL4U4, for example -- you have to  
</span><br>
<span class="quotelev1">&gt; manually mknod and chmod a device in /dev/infiniband for every HCA in  
</span><br>
<span class="quotelev1">&gt; the host).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3744.php">Gleb Natapov: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Previous message:</strong> <a href="3742.php">Ralph H Castain: "[OMPI devel] Loadbalancing"</a>
<li><strong>In reply to:</strong> <a href="3740.php">Jeff Squyres: "[OMPI devel] Merging in the CPC work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3744.php">Gleb Natapov: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Reply:</strong> <a href="3744.php">Gleb Natapov: "Re: [OMPI devel] Merging in the CPC work"</a>
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
