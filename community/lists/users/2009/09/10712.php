<?
$subject_val = "[OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 18:50:17 2009" -->
<!-- isoreceived="20090921225017" -->
<!-- sent="Mon, 21 Sep 2009 15:50:12 -0700 (PDT)" -->
<!-- isosent="20090921225012" -->
<!-- name="Pallab Datta" -->
<!-- email="datta_at_[hidden]" -->
<!-- subject="[OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless" -->
<!-- id="54072.198.133.185.25.1253573412.squirrel_at_mercury.nsi.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless<br>
<strong>From:</strong> Pallab Datta (<em>datta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 18:50:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10713.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10711.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10713.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Reply:</strong> <a href="10713.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Maybe reply:</strong> <a href="10726.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Maybe reply:</strong> <a href="10728.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I am trying to run open-mpi 1.3.3. between a linux box running ubuntu
<br>
server v.9.04 and a Macintosh. I have configured openmpi with the
<br>
following options.:
<br>
./configure --prefix=/usr/local/ --enable-heterogeneous --disable-shared
<br>
--enable-static
<br>
<p>When both the machines are connected to the network via ethernet cables
<br>
openmpi works fine.
<br>
<p>But when I switch the linux box to a wireless adapter i can reach (ping)
<br>
the macintosh
<br>
but openmpi hangs on a hello world program.
<br>
<p>I ran :
<br>
<p>/usr/local/bin/mpirun --mca btl_tcp_port_min_v4 36900 -mca
<br>
btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca
<br>
OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H localhost,10.11.14.205
<br>
/tmp/back
<br>
<p>it hangs on a send receive function between the two ends. All my firewalls
<br>
are turned off at the macintosh end. PLEASE HELP ASAP&gt;
<br>
regards,
<br>
pallab
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10713.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10711.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10713.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Reply:</strong> <a href="10713.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Maybe reply:</strong> <a href="10726.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Maybe reply:</strong> <a href="10728.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
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
