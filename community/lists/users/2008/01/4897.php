<?
$subject_val = "Re: [OMPI users] Information about multi-path on IB-based systems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 14:58:47 2008" -->
<!-- isoreceived="20080128195847" -->
<!-- sent="Mon, 28 Jan 2008 14:58:06 -0500" -->
<!-- isosent="20080128195806" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Information about multi-path on IB-based systems" -->
<!-- id="589D11A0-5BC2-49A0-9110-A35931BE670E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DBB21ED4-F2A2-4BD9-9A6F-904AE37C0EAF_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Information about multi-path on IB-based systems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-28 14:58:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4898.php">R C: "[OMPI users] MPI-IO problems"</a>
<li><strong>Previous message:</strong> <a href="4896.php">Jeff Squyres: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="4871.php">David Gunter: "[OMPI users] Information about multi-path on IB-based systems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2008, at 3:12 PM, David Gunter wrote:
<br>
<p><span class="quotelev1">&gt; Do I need to do anything special to enable multi-path routing on
</span><br>
<span class="quotelev1">&gt; InfiniBand networks?  For example, are there command-line arguments to
</span><br>
<span class="quotelev1">&gt; mpiexec or the like?
</span><br>
<p><p>It depends on what you mean by multi-path routing.  For each MPI peer  
<br>
pair (e.g., procs A and B), do you want Open MPI to use multiple  
<br>
routes for MPI traffic over the IB fabric?
<br>
<p>If you set the LMC in your fabric to be greater than 0, your SM should  
<br>
issue multiple LIDs for each active port, and create routes  
<br>
accordingly.  I don't know what OpenSM does, but the Cisco SM will  
<br>
naturally try to make the routes be across different links.  Open MPI  
<br>
(&gt;=v1.2.x) should automatically detect that your LMC is &gt;0 and setup  
<br>
as many connections between a pair of MPI peers as the LMC allows and  
<br>
then round robin packets across all of them.
<br>
<p>Did that make sense?
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
<li><strong>Next message:</strong> <a href="4898.php">R C: "[OMPI users] MPI-IO problems"</a>
<li><strong>Previous message:</strong> <a href="4896.php">Jeff Squyres: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="4871.php">David Gunter: "[OMPI users] Information about multi-path on IB-based systems"</a>
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
