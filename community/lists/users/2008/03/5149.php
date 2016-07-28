<?
$subject_val = "Re: [OMPI users] ScaLapack and BLACS on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 17:11:18 2008" -->
<!-- isoreceived="20080306221118" -->
<!-- sent="Thu, 6 Mar 2008 17:11:13 -0500" -->
<!-- isosent="20080306221113" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ScaLapack and BLACS on Leopard" -->
<!-- id="37917B5F-19A6-4344-A0F5-BB15C11C4C9E_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="91DCF7E2-34C6-45EA-80E1-CE99B8F7D2EB_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ScaLapack and BLACS on Leopard<br>
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 17:11:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5150.php">Terry Frankcombe: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5148.php">Sacerdoti, Federico: "[OMPI users] FW:  slurm and all-srun orterun"</a>
<li><strong>In reply to:</strong> <a href="5147.php">Doug Reeder: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5150.php">Terry Frankcombe: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Reply:</strong> <a href="5150.php">Terry Frankcombe: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Reply:</strong> <a href="5151.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 6, 2008, at 12:49 PM, Doug Reeder wrote:
<br>
<span class="quotelev1">&gt; Greg,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would disagree with your statement that the available fortran  
</span><br>
<span class="quotelev1">&gt; options can't pass a cost-benefit analysis. I have found that for  
</span><br>
<span class="quotelev1">&gt; scientific programming (e.g., Livermore Fortran Kernels and actual  
</span><br>
<span class="quotelev1">&gt; PDE solvers) that code produced by the intel compiler runs 25 to 55%  
</span><br>
<span class="quotelev1">&gt; faster than code from gfortran or g95. Looking at the cost of adding  
</span><br>
<span class="quotelev1">&gt; processors with g95/gfortran to get the same throughput as with  
</span><br>
<span class="quotelev1">&gt; ifort you recover the $549 compiler cost real quickly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<p><p>I've a big fan of g95, but actually I'm seeing even greater  
<br>
differences in a small code I'm using for some lengthy calculations.
<br>
<p>With 14 MB of data being read into memory and processed:
<br>
<p>Intel ifort  is 7.7x faster then Linux g95 on MacPro 3.0 GHz
<br>
Intel ifort  is 2.9x faster then Linux g95 on Dual Opteron 1.4 GHz
<br>
Intel ifort  is 1.8x faster then Linux g95 on SGI Altix 350 dual  
<br>
Itanium2 1.4 GHz
<br>
OS X g95 is 2.7x faster then Linux g95 on a MacPro 2.66 GHz (same  
<br>
hardware exactly)
<br>
<p>The complete data set is very large, 56 GB, but that is 42 individual  
<br>
frequencies, where as the 14 MB is a single frequency, data averaged  
<br>
over areas, so get a favor of the answer but not exactly the right  
<br>
answer.  I played around with compiler options, specified the exact  
<br>
processor type within the limits of gcc and I gained only factions of  
<br>
a percent.
<br>
<p>A co-worker saw factor 2 differences between Intel's compiler and g95  
<br>
with a very complicated code.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5150.php">Terry Frankcombe: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5148.php">Sacerdoti, Federico: "[OMPI users] FW:  slurm and all-srun orterun"</a>
<li><strong>In reply to:</strong> <a href="5147.php">Doug Reeder: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5150.php">Terry Frankcombe: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Reply:</strong> <a href="5150.php">Terry Frankcombe: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Reply:</strong> <a href="5151.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
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
