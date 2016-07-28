<?
$subject_val = "Re: [OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 ..";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 08:23:22 2008" -->
<!-- isoreceived="20080417122322" -->
<!-- sent="Thu, 17 Apr 2008 08:23:19 -0400" -->
<!-- isosent="20080417122319" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 .." -->
<!-- id="48074137.5040706_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4803141B.1000603_at_its.monash.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 ..<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-17 08:23:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI users] fortran90 and c++ wrappers don't work"</a>
<li><strong>Previous message:</strong> <a href="5410.php">Brock Palen: "Re: [OMPI users] Allocating some amount of memory for a process"</a>
<li><strong>In reply to:</strong> <a href="5391.php">Graham Jenkins: "[OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 .."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Graham,
<br>
<p>Have you tried running without the btl_tcp_if_include line in the .conf 
<br>
file? Open MPI is usually smart enough to auto detect and choose the 
<br>
correct interfaces.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p>Graham Jenkins wrote:
<br>
<span class="quotelev1">&gt; We're moving from using a single (eth0) interface on our execute nodes
</span><br>
<span class="quotelev1">&gt; to using a bond interface (bond0) for resilience.
</span><br>
<span class="quotelev1">&gt; And what we're seeing on those nodes which have been upgraded is:
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_tcp_component.c:349:mca_btl_tcp_component_create_instances]
</span><br>
<span class="quotelev1">&gt; invalid interface &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This of course, is because all nodes share a common copy of
</span><br>
<span class="quotelev1">&gt; openmpi-mca-params.conf .. in which its says:
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include=eth0
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So .. does anybody have a suggestion for a way around this during our
</span><br>
<span class="quotelev1">&gt; migration/upgrade period?
</span><br>
<span class="quotelev1">&gt; If we place &quot;bond0&quot; in there as well, then we get error messages about
</span><br>
<span class="quotelev1">&gt; whichever one is absent on the node where execution is happening.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards ..
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI users] fortran90 and c++ wrappers don't work"</a>
<li><strong>Previous message:</strong> <a href="5410.php">Brock Palen: "Re: [OMPI users] Allocating some amount of memory for a process"</a>
<li><strong>In reply to:</strong> <a href="5391.php">Graham Jenkins: "[OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 .."</a>
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
