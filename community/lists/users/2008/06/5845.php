<?
$subject_val = "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 19:56:19 2008" -->
<!-- isoreceived="20080606235619" -->
<!-- sent="Sat, 7 Jun 2008 01:56:06 +0200" -->
<!-- isosent="20080606235606" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network" -->
<!-- id="E9C3DC40-B23E-4C14-AE64-23967CC2E2A8_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1212793635.14320.5.camel_at_Vigor13" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-06 19:56:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5846.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5844.php">George Bosilca: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5843.php">John Hearns: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5846.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 07.06.2008 um 01:07 schrieb John Hearns:
<br>
<p><span class="quotelev1">&gt; On Fri, 2008-06-06 at 17:56 +0100, SLIM H.A. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to use SGE to run jobs on a cluster with mx and infiniband  
</span><br>
<span class="quotelev2">&gt;&gt; nodes.
</span><br>
<span class="quotelev2">&gt;&gt; By dividing the nodes into two host groups SGE will submit to either
</span><br>
<span class="quotelev2">&gt;&gt; interconnect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The interconnect can be specified in the mpirun command with the -- 
</span><br>
<span class="quotelev2">&gt;&gt; mca
</span><br>
<span class="quotelev2">&gt;&gt; btl parameter. However users would then have to decide at runtime  
</span><br>
<span class="quotelev2">&gt;&gt; which
</span><br>
<span class="quotelev2">&gt;&gt; of the two interconnects should be used, but if the job has to queue
</span><br>
<span class="quotelev2">&gt;&gt; they just want the first available interconnect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are just using hostgroups, how do you stop SGE from assigning
</span><br>
<span class="quotelev1">&gt; jobs across two hostgroups then? IE. if the user does not make an
</span><br>
<span class="quotelev1">&gt; explicit request for @infinihosts or @myrihosts SGE will allocate a  
</span><br>
<span class="quotelev1">&gt; set
</span><br>
<span class="quotelev1">&gt; of free hosts - and that could be a mix of the two types.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Reuti says you need those wildcard PEs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, as you say, just let the user decide when submitting the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ps. there is another way of doing the selection, other than  
</span><br>
<span class="quotelev1">&gt; hostgroups.
</span><br>
<span class="quotelev1">&gt; Set up two complexes, infiniband and myrinet (say) which are Boolean.
</span><br>
<span class="quotelev1">&gt; Then for each exec host set complex_values infiniband=true
</span><br>
<span class="quotelev1">&gt; complex_values myrinet=true
</span><br>
<span class="quotelev1">&gt; The user submits with -l infiniband
</span><br>
<span class="quotelev1">&gt; I'm not sure if the syntax -l infiniband | myrinet
</span><br>
<span class="quotelev1">&gt; meaning infiniband or myrinet is valid.  Reuti?
</span><br>
<p>no, it's only for STRING in the complex defintion of 6.1 (RESTRING in  
<br>
6.0). I.e. you could have a complex INTERCONNECT of type RESTRING and  
<br>
then request:
<br>
<p>-l INTERCONNECT=&quot;TCP|OPENIB&quot;
<br>
<p>with a queue like:
<br>
<p>complex_values        NONE,[@group1=INTERCONNECT=OPENIB],  
<br>
[@group2=INTERCONNECT=TCP]
<br>
<p>But this wouldn't prevent getting a mixture either :-/ It would only  
<br>
allow to select the interconnecttype by name instead of hostgroup. As  
<br>
the &quot;|&quot; (or) is useless to limit the selection to one of both, you  
<br>
could even use your BOOL approach to limit to one interface in case  
<br>
you care about which will be used. Just a matter of taste.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5846.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5844.php">George Bosilca: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5843.php">John Hearns: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5846.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
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
