<?
$subject_val = "[OMPI users] using OpenMPI + SGE in a heterogeneous network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 12:56:51 2008" -->
<!-- isoreceived="20080606165651" -->
<!-- sent="Fri, 6 Jun 2008 17:56:29 +0100" -->
<!-- isosent="20080606165629" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="[OMPI users] using OpenMPI + SGE in a heterogeneous network" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE801BDF5E1_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] using OpenMPI + SGE in a heterogeneous network<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-06 12:56:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5838.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5836.php">Gabriele Fatigati: "Re: [OMPI users] Question about RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5839.php">Patrick Geoffray: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5839.php">Patrick Geoffray: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5843.php">John Hearns: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I want to use SGE to run jobs on a cluster with mx and infiniband nodes.
<br>
By dividing the nodes into two host groups SGE will submit to either
<br>
interconnect.
<br>
<p>The interconnect can be specified in the mpirun command with the --mca
<br>
btl parameter. However users would then have to decide at runtime which
<br>
of the two interconnects should be used, but if the job has to queue
<br>
they just want the first available interconnect. I built OpenMPI 1.2.5
<br>
with both the mx and ofed options specified. If I understand some of the
<br>
FAQs correctly then in that case the --mca parameter is not necessary
<br>
and OpenMPI would find the correct interconnect because it is aware of
<br>
both mx and ofed libraries. This does not seem to work, the job always
<br>
ends up trying to use mx on openib nodes.
<br>
Is there a way to inform mpirun, in cooperation with SGE, which btl
<br>
should be used? 
<br>
<p>I would be grateful for any advice
<br>
<p>Regards
<br>
<p>Henk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5838.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5836.php">Gabriele Fatigati: "Re: [OMPI users] Question about RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5839.php">Patrick Geoffray: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5839.php">Patrick Geoffray: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5843.php">John Hearns: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
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
