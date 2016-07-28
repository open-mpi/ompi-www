<?
$subject_val = "Re: [OMPI users] RDMA-CM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 07:20:09 2008" -->
<!-- isoreceived="20080617112009" -->
<!-- sent="Tue, 17 Jun 2008 07:19:59 -0400" -->
<!-- isosent="20080617111959" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RDMA-CM" -->
<!-- id="C711AD11-82F2-450D-9E02-AA0E80091AF2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080617091232.6511.qmail_at_f4mail-235-128.rediffmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RDMA-CM<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 07:19:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5898.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5896.php">Neeraj Chourasia: "[OMPI users] RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="5896.php">Neeraj Chourasia: "[OMPI users] RDMA-CM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 17, 2008, at 5:12 AM, Neeraj Chourasia wrote:
<br>
<p><span class="quotelev1">&gt;     I downloaded openmpi-1.3 version from night tarballs to check  
</span><br>
<span class="quotelev1">&gt; RDMA-CM support. I am able to compile and install it, but dont know  
</span><br>
<span class="quotelev1">&gt; how to run it as there is no documentation provided. Did someone try  
</span><br>
<span class="quotelev1">&gt; running it with OpenMPI?
</span><br>
<p>The theme of Open MPI is that we try to do most things under the  
<br>
covers.  As such, if RDMA CM support is detected, we'll try to use it  
<br>
at run time.  You can force it with the following MCA parameter,  
<br>
however:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_openib_cpc_include rdmacm ...
<br>
<p>&quot;CPC&quot; is our acronym of how the openib BTL establishes connections.   
<br>
The btl_openib_cpc_include MCA param allows you to specify a comma- 
<br>
delimited list of CPCs to use.
<br>
<p>Note that there is still one feature missing for the RDMA CM (and IB  
<br>
CM) support -- a progress thread for connections.  We've found that  
<br>
for applications that do not dip into the MPI layer frequently, RDMA /  
<br>
IB CM connections can timeout.  We're in the middle of adding a  
<br>
progress thread for openib BTL connections.
<br>
<p><span class="quotelev1">&gt; My another question is Does OpenMPI1.3 has progress-threads support  
</span><br>
<span class="quotelev1">&gt; for IB? Because while compiling with that option, it didnt give me  
</span><br>
<span class="quotelev1">&gt; any warnings or failure unlike openmpi1.2.X series does.
</span><br>
<p><p>No, progress threads are not yet supported for the openib BTL.
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
<li><strong>Next message:</strong> <a href="5898.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5896.php">Neeraj Chourasia: "[OMPI users] RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="5896.php">Neeraj Chourasia: "[OMPI users] RDMA-CM"</a>
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
