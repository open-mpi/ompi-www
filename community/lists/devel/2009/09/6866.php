<?
$subject_val = "[OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 20:04:55 2009" -->
<!-- isoreceived="20090922000455" -->
<!-- sent="Mon, 21 Sep 2009 17:04:50 -0700 (PDT)" -->
<!-- isosent="20090922000450" -->
<!-- name="Pallab Datta" -->
<!-- email="datta_at_[hidden]" -->
<!-- subject="[OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless" -->
<!-- id="55000.198.133.185.25.1253577890.squirrel_at_mercury.nsi.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54072.198.133.185.25.1253573412.squirrel_at_mercury.nsi.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless<br>
<strong>From:</strong> Pallab Datta (<em>datta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 20:04:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6867.php">David Gunter: "[OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Previous message:</strong> <a href="6865.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- nextthread="start" -->
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
are turned off at the macintosh end. PLEASE HELP ASAP&gt; PLEASE let me know
<br>
how to debug it further..
<br>
<p><p>The following is the error dump
<br>
<p>fuji:src pallabdatta$ /usr/local/bin/mpirun --mca btl_tcp_port_min_v4
<br>
36900 -mca btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca btl
<br>
tcp,self --mca OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H
<br>
localhost,10.11.14.205 /tmp/hello
<br>
[fuji.local:01316] mca: base: components_open: Looking for btl components
<br>
[fuji.local:01316] mca: base: components_open: opening btl components
<br>
[fuji.local:01316] mca: base: components_open: found loaded component self
<br>
[fuji.local:01316] mca: base: components_open: component self has no
<br>
register function
<br>
[fuji.local:01316] mca: base: components_open: component self open
<br>
function successful
<br>
[fuji.local:01316] mca: base: components_open: found loaded component tcp
<br>
[fuji.local:01316] mca: base: components_open: component tcp has no
<br>
register function
<br>
[fuji.local:01316] mca: base: components_open: component tcp open function
<br>
successful
<br>
[fuji.local:01316] select: initializing btl component self
<br>
[fuji.local:01316] select: init of component self returned success
<br>
[fuji.local:01316] select: initializing btl component tcp
<br>
[fuji.local:01316] select: init of component tcp returned success
<br>
[apex-backpack:04753] mca: base: components_open: Looking for btl components
<br>
[apex-backpack:04753] mca: base: components_open: opening btl components
<br>
[apex-backpack:04753] mca: base: components_open: found loaded component self
<br>
[apex-backpack:04753] mca: base: components_open: component self has no
<br>
register function
<br>
[apex-backpack:04753] mca: base: components_open: component self open
<br>
function successful
<br>
[apex-backpack:04753] mca: base: components_open: found loaded component tcp
<br>
[apex-backpack:04753] mca: base: components_open: component tcp has no
<br>
register function
<br>
[apex-backpack:04753] mca: base: components_open: component tcp open
<br>
function successful
<br>
[apex-backpack:04753] select: initializing btl component self
<br>
[apex-backpack:04753] select: init of component self returned success
<br>
[apex-backpack:04753] select: initializing btl component tcp
<br>
[apex-backpack:04753] select: init of component tcp returned success
<br>
Process 0 on fuji.local out of 2
<br>
Process 1 on apex-backpack out of 2
<br>
[apex-backpack:04753] btl: tcp: attempting to connect() to address
<br>
10.11.14.203 on port 9360
<br>
<p>regards,
<br>
pallab
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6867.php">David Gunter: "[OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Previous message:</strong> <a href="6865.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
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
