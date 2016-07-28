<?
$subject_val = "Re: [OMPI users] libibverbs and openmpi 1.2.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 07:20:45 2008" -->
<!-- isoreceived="20080605112045" -->
<!-- sent="Thu, 5 Jun 2008 07:20:35 -0400" -->
<!-- isosent="20080605112035" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libibverbs and openmpi 1.2.6" -->
<!-- id="968772D6-859C-4824-AB01-399C653E2EED_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4847A5D3.5000007_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] libibverbs and openmpi 1.2.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 07:20:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5825.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5823.php">Terry Dontje: "Re: [OMPI users] Communicators in Fortran and C"</a>
<li><strong>In reply to:</strong> <a href="5821.php">Samuel Sarholz: "[OMPI users] libibverbs and openmpi 1.2.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5825.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Reply:</strong> <a href="5825.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2008, at 4:37 AM, Samuel Sarholz wrote:
<br>
<p><span class="quotelev1">&gt; we have a some issues with the openmpi 1.2.6 and libibverbs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have some machines with Infiniband and some without.
</span><br>
<span class="quotelev1">&gt; We compiled openmpi with IB support.
</span><br>
<span class="quotelev1">&gt; With OpenMPI 1.2.5 it was no problem running that version on the  
</span><br>
<span class="quotelev1">&gt; machines without IB.
</span><br>
<span class="quotelev1">&gt; However with 1.2.6 the library libibverbs is linked which doen't  
</span><br>
<span class="quotelev1">&gt; exist on some of the machines.
</span><br>
<p>Nothing changed between 1.2.5 and 1.2.6 with regards to depending on  
<br>
libibverbs.
<br>
<p><span class="quotelev1">&gt; Is there a way to get programs compiled on a IB machine running them  
</span><br>
<span class="quotelev1">&gt; on machines without IB? (remove the dependency to libibverbs from  
</span><br>
<span class="quotelev1">&gt; openmpi 1.2.6)
</span><br>
<p><p>How did you build OMPI?  The default configuration in the 1.2 series  
<br>
should have all the IB support in plugin-modules (i.e., not directly  
<br>
part of libmpi), and therefore apps should not depend on libibverbs at  
<br>
all.
<br>
<p>Does ldd show that your apps depend on libibverbs?
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
<li><strong>Next message:</strong> <a href="5825.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5823.php">Terry Dontje: "Re: [OMPI users] Communicators in Fortran and C"</a>
<li><strong>In reply to:</strong> <a href="5821.php">Samuel Sarholz: "[OMPI users] libibverbs and openmpi 1.2.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5825.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Reply:</strong> <a href="5825.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
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
