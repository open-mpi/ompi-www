<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Dec 10 08:15:19 2006" -->
<!-- isoreceived="20061210131519" -->
<!-- sent="Sun, 10 Dec 2006 13:14:54 +0000 (GMT)" -->
<!-- isosent="20061210131454" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.2b1(r12657)" -->
<!-- id="Pine.GSO.4.53.0612101304550.27177_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-10 08:14:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2334.php">A Lenzo: "[OMPI users] Can OpenMPI be used with R?"</a>
<li><strong>Previous message:</strong> <a href="2332.php">Adrian Knoth: "Re: [OMPI users] Hang with Mixed Machines"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running the benchmark b_eff on a mulitprocessor opteron based system.
<br>
The benchmark measures throughput. And the benchmark runs fine over
<br>
tcp/ip and myrinet on cluster of 2 a 4 cores. When I run the
<br>
application on an 8core system over 2 cpus the run is fine. When I run it
<br>
over say 4 or more I get the error:
<br>
<p><p>/opt/ompi/bin/mpirun -np 4 -machinefile myh -mca btl tcp,self b_eff
<br>
<p>I get sometimes an error such as
<br>
<p>ERROR - invalid message content after MPI_Alltoallv - myrank=1 i_rep=0 i_msg=15
<br>
i_pat=14 i_sr=1 i_loop=5 Msglng=71468 buf=(16 0)!=(16 31)
<br>
<p>But not always. I searched the FAQs, could not find an entry with a similar
<br>
error.
<br>
<p>Any idea?
<br>
<p>Lydia
<br>
<p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2334.php">A Lenzo: "[OMPI users] Can OpenMPI be used with R?"</a>
<li><strong>Previous message:</strong> <a href="2332.php">Adrian Knoth: "Re: [OMPI users] Hang with Mixed Machines"</a>
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
