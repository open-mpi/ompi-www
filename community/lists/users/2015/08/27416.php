<?
$subject_val = "Re: [OMPI users] LAMA error - mpirun segfault";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 06:33:21 2015" -->
<!-- isoreceived="20150810103321" -->
<!-- sent="Mon, 10 Aug 2015 10:33:14 +0000" -->
<!-- isosent="20150810103314" -->
<!-- name="Nils Smeds" -->
<!-- email="nsmeds_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LAMA error - mpirun segfault" -->
<!-- id="1439202793.4046.22.camel_at_lenovo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] LAMA error - mpirun segfault" -->
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
<strong>Subject:</strong> Re: [OMPI users] LAMA error - mpirun segfault<br>
<strong>From:</strong> Nils Smeds (<em>nsmeds_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-10 06:33:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27417.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27415.php">Ralph Castain: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>Maybe in reply to:</strong> <a href="27414.php">Nils Smeds: "[OMPI users] LAMA error - mpirun segfault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph,
<br>

<br>
I'm trying to find out what can be accomplished in binding using the
<br>
command-line and when I need to generate a mapping file. Using the
<br>
command line I find is typically more robust. It is just too easy to
<br>
forget to adapt a mapping script when moving between systems.
<br>

<br>
For the sake of argument one use case would be to map a hybrid
<br>
MPI+threads application onto a set of dedicated nodes. That is, to have
<br>
MPI processes evenly distributed over hosts, sockets and NuMA domains,
<br>
but ranked compactly (MPI tasks that are close in rank in
<br>
MPI_COMM_WORLD are more likely to be in the same NuMA domain).
<br>
Processes should be bound to multiple cores in the NuMA domain, but not
<br>
overlap cores with other MPI processes unless over-subscribed. The
<br>
threading library would then rebind threads to cores within this
<br>
subset.
<br>

<br>
I just happened to choose LAMA because I found some not too old
<br>
presentations on-line about it and it looked very adaptable. If there
<br>
are other schemes that are in better shape I'd be happy to use whatever
<br>
is recommended.
<br>

<br>
With the general command line options -map-by -bind-to I have not been
<br>
able to have the MPI processes bound to a subset of the cores in the
<br>
NuMA region, only to the whole NuMA node or a single core. The more
<br>
detailed --mca rmaps*  options I have not yet found a good presentation
<br>
about so I am not sure what I can do with it and how.
<br>

<br>
Pointers to what can be done with parts of OpenMPI that is actively
<br>
maintained are most welcome.
<br>

<br>
Cheers<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27417.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27415.php">Ralph Castain: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>Maybe in reply to:</strong> <a href="27414.php">Nils Smeds: "[OMPI users] LAMA error - mpirun segfault"</a>
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
