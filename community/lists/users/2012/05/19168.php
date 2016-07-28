<?
$subject_val = "Re: [OMPI users] MPI with RDMA CM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  2 11:06:23 2012" -->
<!-- isoreceived="20120502150623" -->
<!-- sent="Wed, 2 May 2012 08:06:18 -0700" -->
<!-- isosent="20120502150618" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI with RDMA CM" -->
<!-- id="BCD987E8-6C7A-4381-8F11-7CA3646D7FB0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CACY7q+kjFX3Gmmt4=Gr3vLnKyEV637REWd8DPYECU2XyFO7f6Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI with RDMA CM<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-02 11:06:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19169.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Previous message:</strong> <a href="19167.php">R&#195;&#169;mi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>In reply to:</strong> <a href="19166.php">Shanthini Kannan: "[OMPI users] MPI with RDMA CM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 2, 2012, at 6:32 AM, Shanthini Kannan wrote:
<br>
<p><span class="quotelev1">&gt; I am new to OpenMPI.
</span><br>
<span class="quotelev1">&gt; Do I definitely need IPoIB for OpenMPI to work?
</span><br>
<p>No.
<br>
<p><span class="quotelev1">&gt; If I include RDMA CM to connect my nodes, isn't that sufficient?
</span><br>
<p>It's been quite a while, but IIRC, RDMA CM requires IPoIB.
<br>
<p>FWIW: Open MPI actually defaults to using TCP for wiring up IB connections (doesn't have to be TCP over IPoIB -- it can be regular old TCP over Ethernet).  
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19169.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Previous message:</strong> <a href="19167.php">R&#195;&#169;mi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>In reply to:</strong> <a href="19166.php">Shanthini Kannan: "[OMPI users] MPI with RDMA CM"</a>
<!-- nextthread="start" -->
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
