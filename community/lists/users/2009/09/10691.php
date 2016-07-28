<?
$subject_val = "[OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 17:56:09 2009" -->
<!-- isoreceived="20090918215609" -->
<!-- sent="Fri, 18 Sep 2009 14:56:04 -0700 (PDT)" -->
<!-- isosent="20090918215604" -->
<!-- name="Pallab Datta" -->
<!-- email="datta_at_[hidden]" -->
<!-- subject="[OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X" -->
<!-- id="53006.198.133.185.25.1253310964.squirrel_at_mercury.nsi.edu" -->
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
<strong>Subject:</strong> [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X<br>
<strong>From:</strong> Pallab Datta (<em>datta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-18 17:56:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10692.php">Joshua Bernstein: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>Previous message:</strong> <a href="10690.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10692.php">Joshua Bernstein: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>Reply:</strong> <a href="10692.php">Joshua Bernstein: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am running open-mpi between a Mac OSX (v.10.5) and Ubuntu Server V.9.04
<br>
(Linux Box).  I have configured OMPI V.1.3.3 on both of them with
<br>
--enable-heterogeneous --disable-shared --enable-static options. The Linux
<br>
box is connected via a wireless USB Adapter to the same sub-network in
<br>
which the Macinstosh is sitting.
<br>
<p>When I tried to run mpirun with the following options between the Linux
<br>
box with the wireless card with another linux machine on the network
<br>
everything works fine.
<br>
I ran :
<br>
/usr/local/bin/mpirun --mca OMPI_mca_mpi_preconnect_all 1 -np 2 -H
<br>
localhost,10.11.14.205 ./app
<br>
<p>and it works.
<br>
<p>When I tried to run mpirun with the -hetero option from the Macintosh it
<br>
invokes the processes on both ends and then hangs at the MPI_Send
<br>
MPI_Receive functions.
<br>
I ran:
<br>
<p>/usr/local/bin/mpirun  --mca btl_base_verbose 30 --mca
<br>
OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H localhost,10.11.14.205
<br>
./app
<br>
<p>and it hangs. I saw that the linux box is trying to connect() the Mac
<br>
using port 4/260. So I purposely forced mpi to look for higher numbered
<br>
ports..
<br>
<p>I ran :
<br>
/usr/local/bin/mpirun --mca btl_tcp_port_min_v4 36900 -mca
<br>
btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca
<br>
OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H localhost,10.11.14.205
<br>
./app
<br>
<p>and it still hangs giving the following message:
<br>
btl: tcp: attempting to connect() to address 10.11.14.203 on port 9360
<br>
<p>10.11.14.203 == localhost.
<br>
<p>Can anybody explain what I am missing and how I can make the macintosh and
<br>
Linux boxes talk to each other over wireless..
<br>
regards,
<br>
pallab
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10692.php">Joshua Bernstein: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>Previous message:</strong> <a href="10690.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10692.php">Joshua Bernstein: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>Reply:</strong> <a href="10692.php">Joshua Bernstein: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
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
