<?
$subject_val = "Re: [OMPI users] Openmpi and processor affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 21:26:01 2009" -->
<!-- isoreceived="20090603012601" -->
<!-- sent="Tue, 2 Jun 2009 21:25:54 -0400" -->
<!-- isosent="20090603012554" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi and processor affinity" -->
<!-- id="C82640C6-59DA-450F-B4C1-F8E29DA8F475_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1243985459.11346.13.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi and processor affinity<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-02 21:25:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9503.php">Iftikhar Rathore: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9501.php">Gus Correa: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9500.php">Iftikhar Rathore: "[OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2009, at 7:30 PM, Iftikhar Rathore -X (irathore - SIFY  
<br>
LIMITED at Cisco) wrote:
<br>
<p><span class="quotelev1">&gt; We are using openmpi version 1.2.8 (packaged with ofed-1.4). I am  
</span><br>
<span class="quotelev1">&gt; trying
</span><br>
<span class="quotelev1">&gt; to run hpl-2.0 (linpak). We have two intel quad core CPU's in all our
</span><br>
<span class="quotelev1">&gt; server (8 total cores)  and all hosts in the hostfile have lines that
</span><br>
<span class="quotelev1">&gt; look like &quot;10.100.0.227 slots=8max_slots=8&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Per Gus's mail, let's assume that this is a typo in email.
<br>
<p><span class="quotelev1">&gt; Now when I use mpirun (even with --mca mpi_paffinity_alone 1) it does
</span><br>
<span class="quotelev1">&gt; not keep the affinity, the processes seem to gravitate towards first
</span><br>
<span class="quotelev1">&gt; four cores (using top and hitting 1). I know I do have MCA paffinity
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_devi DLR_WB_88]# ompi_info | grep paffinity
</span><br>
<span class="quotelev1">&gt; [devi.cisco.com:26178] mca: base: component_find: unable to open btl  
</span><br>
<span class="quotelev1">&gt; openib: file not found (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The above line is worrysome -- it means that it is unable to open the  
<br>
openib BTL, which means that you're not using the OpenFabrics  
<br>
networking.  You should be able to run ompi_info and see that it lists  
<br>
the openib BTL properly.
<br>
<p>This *usually* means that library dependencies are missing (or perhaps  
<br>
you are accidentally mixing-n-matching multiple versions of Open MPI  
<br>
on one or more boxes?).  Run ld on $prefix/lib/openmpi/ 
<br>
mca_btl_openib.so and see what libraries are missing.
<br>
<p>This is probably a more serious performance issue to fix than affinity.
<br>
<p><span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The command line I am using is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun -nolocal -np 896 -v  --mca mpi_paffinity_alone 1 -hostfile / 
</span><br>
<span class="quotelev1">&gt; mnt/apps/hosts/896_8slots /mnt/apps/bin/xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>There's no reason that HPL should override paffinity.  Drew (another  
<br>
TME from Cisco) tells me in an off-list email that you're using top to  
<br>
verify that the affinity is changing.  Try using htop (<a href="http://htop.sf.net">http://htop.sf.net</a> 
<br>
) to verify.  My old RHEL4-based machines' version of top don't show  
<br>
affinity -- perhaps newer versions do.  But I know htop does.
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
<li><strong>Next message:</strong> <a href="9503.php">Iftikhar Rathore: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9501.php">Gus Correa: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9500.php">Iftikhar Rathore: "[OMPI users] Openmpi and processor affinity"</a>
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
