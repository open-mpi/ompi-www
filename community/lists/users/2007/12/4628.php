<?
$subject_val = "Re: [OMPI users] Question about issue with use of multiple IB ports";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 17:03:54 2007" -->
<!-- isoreceived="20071210220354" -->
<!-- sent="Mon, 10 Dec 2007 17:03:48 -0500" -->
<!-- isosent="20071210220348" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about issue with use of multiple IB ports" -->
<!-- id="B7DF305F-E3A7-4C5B-BC28-74D9EE2767A2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="475D9C40.4070603_at_noaa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about issue with use of multiple IB ports<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-10 17:03:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4629.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4627.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4626.php">Craig Tierney: "[OMPI users] Question about issue with use of multiple IB ports"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2007, at 3:06 PM, Craig Tierney wrote:
<br>
<p><span class="quotelev1">&gt; I just built OpenMPI-1.2.4 to work on my system (IB, OFED-1.2).
</span><br>
<span class="quotelev1">&gt; When I run a job, I am getting the following message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   WARNING: There are more than one active ports on host 'w74', but the
</span><br>
<span class="quotelev1">&gt;   default subnet GID prefix was detected on more than one of these
</span><br>
<span class="quotelev1">&gt;   ports.  If these ports are connected to different physical IB
</span><br>
<span class="quotelev1">&gt;   networks, this configuration will fail in Open MPI.  This version of
</span><br>
<span class="quotelev1">&gt;   Open MPI requires that every physically separate IB subnet that is
</span><br>
<span class="quotelev1">&gt;   used between connected MPI processes must have different subnet ID
</span><br>
<span class="quotelev1">&gt;   values.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I went to the faq to read about the message.  My code does complete
</span><br>
<span class="quotelev1">&gt; successfully because both nodes are connected by both meshes.
</span><br>
<p>You can also assign a different subnet ID to each of the two fabrics.   
<br>
OMPI will therefore be able to tell these two networks apart and you  
<br>
won't get this warning message.
<br>
<p>We only treat the default subnet ID specially because most people  
<br>
don't change it, and if they have multiple fabrics, they could run  
<br>
into problems because OMPI won't be able to tell them apart.
<br>
<p><span class="quotelev1">&gt; My question is, how can I tell mpirun that I only want to use of
</span><br>
<span class="quotelev1">&gt; of the ports?  I specifically want to use either port 1 or port 2, but
</span><br>
<span class="quotelev1">&gt; not bond both together.
</span><br>
<p>The OMPI v1.2 series has fairly lame controls for this - you can limit  
<br>
how many IB ports an MPI process will use on each machine (via the  
<br>
btl_openib_max_btls MCA parameter), but not which ones.  OMPI will use  
<br>
the first btl_openib_max_btls ports (the default is infinite).
<br>
<p>In OMPI v1.3, there are specific MCA parameters for controlling  
<br>
exactly which NICs and/or ports you want to use or not use.   
<br>
Specifically:
<br>
<p>- btl_openib_if_include: a comma-delimited list of interface names and/ 
<br>
or ports to use
<br>
- btl_openib_if_exclude: a comma-delimited list of interface names and/ 
<br>
or ports to exclude (i.e., use all others)
<br>
<p>For example:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca btl_openib_if_include mthca0,mthca1:1 ...
<br>
<p>Meaning &quot;use all ports on mthca0&quot; and &quot;use port 1 on mthca1&quot;.
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
<li><strong>Next message:</strong> <a href="4629.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4627.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4626.php">Craig Tierney: "[OMPI users] Question about issue with use of multiple IB ports"</a>
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
