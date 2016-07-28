<?
$subject_val = "[OMPI devel] Merging in the CPC work";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 06:53:12 2008" -->
<!-- isoreceived="20080423105312" -->
<!-- sent="Wed, 23 Apr 2008 06:53:02 -0400" -->
<!-- isosent="20080423105302" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Merging in the CPC work" -->
<!-- id="71EF57D1-3883-4DA6-911C-E5C2B292AECA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Merging in the CPC work<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-23 06:53:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3741.php">Jeff Squyres: "Re: [OMPI devel] Communication problem"</a>
<li><strong>Previous message:</strong> <a href="3739.php">Ziv Mhabary: "[OMPI devel] Communication problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3743.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Reply:</strong> <a href="3743.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Maybe reply:</strong> <a href="3749.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Maybe reply:</strong> <a href="3750.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Merging in the CPC work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As we discussed yesterday, I have started the merge from the /tmp- 
<br>
public/openib-cpc2 branch.  &quot;oob&quot; is currently the default.
<br>
<p>Unfortunately, it caused quite a few conflicts when I merged with the  
<br>
trunk, so I created a new temp branch and put all the work there: /tmp- 
<br>
public/openib-cpc3.
<br>
<p>Could all the IB and iWARP vendors and any other interested parties  
<br>
please try this branch before we bring it back to the trunk?  Please  
<br>
test all functionality that you care about -- XRC, etc.  I'd like to  
<br>
bring it back to the trunk COB Thursday.  Please let me know if this  
<br>
is too soon.
<br>
<p>You can force the selection of a different CPC with the  
<br>
btl_openib_cpc_include MCA param:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_openib_cpc_include oob ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_openib_cpc_include xoob ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_openib_cpc_include rdma_cm ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_openib_cpc_include ibcm ...
<br>
<p>You might want to concentrate on testing oob and xoob to ensure that  
<br>
we didn't cause any regressions.  The ibcm and rdma_cm CPCs probably  
<br>
still have some rough edges (and the IBCM package in OFED itself may  
<br>
not be 100% -- that's one of the things we're evaluating.  It's known  
<br>
to not install properly on RHEL4U4, for example -- you have to  
<br>
manually mknod and chmod a device in /dev/infiniband for every HCA in  
<br>
the host).
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3741.php">Jeff Squyres: "Re: [OMPI devel] Communication problem"</a>
<li><strong>Previous message:</strong> <a href="3739.php">Ziv Mhabary: "[OMPI devel] Communication problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3743.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Reply:</strong> <a href="3743.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Maybe reply:</strong> <a href="3749.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Maybe reply:</strong> <a href="3750.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Merging in the CPC work"</a>
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
