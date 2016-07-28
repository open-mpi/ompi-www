<?
$subject_val = "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 15:57:35 2009" -->
<!-- isoreceived="20090826195735" -->
<!-- sent="Wed, 26 Aug 2009 15:57:20 -0400" -->
<!-- isosent="20090826195720" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects" -->
<!-- id="E68425B1-7004-48A6-9B6A-5D11907200C5_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFF8D68614.6965686C-ON8525761E.0069F9DC-8525761E.006C3300_at_goodyear.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-26 15:57:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10491.php">twurgl_at_[hidden]: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Previous message:</strong> <a href="10489.php">twurgl_at_[hidden]: "[OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>In reply to:</strong> <a href="10489.php">twurgl_at_[hidden]: "[OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10491.php">twurgl_at_[hidden]: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Reply:</strong> <a href="10491.php">twurgl_at_[hidden]: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 26, 2009, at 3:41 PM, twurgl_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; When, for example, I run on an IB cluster, I get warning messages  
</span><br>
<span class="quotelev1">&gt; about not
</span><br>
<span class="quotelev1">&gt; finding GM NICS and another transport will be used etc.
</span><br>
<span class="quotelev1">&gt; And warnings about mca btl mx components not found etc.  It DOES run  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; IB, but it never says that in the output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I'd like is to not get warnings about what I don't have on the  
</span><br>
<span class="quotelev1">&gt; cluster
</span><br>
<span class="quotelev1">&gt; in question and instead get a note that says it found the IB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this already possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or can I at least suppress the warnings for the not-found  
</span><br>
<span class="quotelev1">&gt; interconnects?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks!
</span><br>
<span class="quotelev1">&gt; tom
</span><br>
<p>You can use:
<br>
<p>$ mpirun -mca pml ob1 -mca mx,sm,self ...
<br>
<p>when running with MX. Substitute gm or ib when running on those  
<br>
networks.
<br>
<p>It may still fail over to TCP. To avoid that, you could run:
<br>
<p>$ mpirun -mca pml ob1 -mca ^mx,^ib,^tcp ...
<br>
<p>to tell it to run on anything (GM, shared memory and self) except MX,  
<br>
IB, and TCP.
<br>
<p>You probably do not need -mca pml ob1, but that will prevent the MX  
<br>
MTL from trying to start as well.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10491.php">twurgl_at_[hidden]: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Previous message:</strong> <a href="10489.php">twurgl_at_[hidden]: "[OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>In reply to:</strong> <a href="10489.php">twurgl_at_[hidden]: "[OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10491.php">twurgl_at_[hidden]: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Reply:</strong> <a href="10491.php">twurgl_at_[hidden]: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
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
