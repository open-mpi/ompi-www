<?
$subject_val = "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  7 04:39:54 2008" -->
<!-- isoreceived="20080607083954" -->
<!-- sent="Sat, 7 Jun 2008 09:39:34 +0100" -->
<!-- isosent="20080607083934" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE8015D4775_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-07 04:39:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5847.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5845.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5843.php">John Hearns: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi John
<br>
&nbsp;
<br>
I associate a PE with each of the two hostgroups, say orte_mx and orte_ib. The user can then submit with -pe orte\* thus leaving the selection of the hostgroup to SGE. The PE startup script would be the same and by passing it SGE variables like $host etc the script can figure out what to set for OMPI_MCA_btl. See the example in Reuti's reply. I don't think the problem is so much selecting the host group as getting information from the PE start script to the mpirun command in the job script.
<br>
&nbsp;
<br>
Best wishes
<br>
&nbsp;
<br>
Henk
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] on behalf of John Hearns
<br>
Sent: Sat 6/7/2008 12:07 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network
<br>
<p><p><p>On Fri, 2008-06-06 at 17:56 +0100, SLIM H.A. wrote:
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
<p><p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5846/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5847.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5845.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5843.php">John Hearns: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
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
