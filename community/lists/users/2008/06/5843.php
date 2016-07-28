<?
$subject_val = "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 19:07:52 2008" -->
<!-- isoreceived="20080606230752" -->
<!-- sent="Sat, 07 Jun 2008 00:07:05 +0100" -->
<!-- isosent="20080606230705" -->
<!-- name="John Hearns" -->
<!-- email="john.hearns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network" -->
<!-- id="1212793635.14320.5.camel_at_Vigor13" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE801BDF5E1_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network<br>
<strong>From:</strong> John Hearns (<em>john.hearns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-06 19:07:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5844.php">George Bosilca: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5842.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5837.php">SLIM H.A.: "[OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5845.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5845.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5846.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2008-06-06 at 17:56 +0100, SLIM H.A. wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to use SGE to run jobs on a cluster with mx and infiniband nodes.
</span><br>
<span class="quotelev1">&gt; By dividing the nodes into two host groups SGE will submit to either
</span><br>
<span class="quotelev1">&gt; interconnect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The interconnect can be specified in the mpirun command with the --mca
</span><br>
<span class="quotelev1">&gt; btl parameter. However users would then have to decide at runtime which
</span><br>
<span class="quotelev1">&gt; of the two interconnects should be used, but if the job has to queue
</span><br>
<span class="quotelev1">&gt; they just want the first available interconnect. 
</span><br>
<p>If you are just using hostgroups, how do you stop SGE from assigning
<br>
jobs across two hostgroups then? IE. if the user does not make an
<br>
explicit request for @infinihosts or @myrihosts SGE will allocate a set
<br>
of free hosts - and that could be a mix of the two types.
<br>
<p>As Reuti says you need those wildcard PEs.
<br>
<p>Or, as you say, just let the user decide when submitting the job.
<br>
<p>ps. there is another way of doing the selection, other than hostgroups.
<br>
Set up two complexes, infiniband and myrinet (say) which are Boolean.
<br>
Then for each exec host set complex_values infiniband=true
<br>
complex_values myrinet=true
<br>
The user submits with -l infiniband
<br>
I'm not sure if the syntax -l infiniband | myrinet
<br>
meaning infiniband or myrinet is valid.  Reuti?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5844.php">George Bosilca: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5842.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5837.php">SLIM H.A.: "[OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5845.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5845.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5846.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
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
