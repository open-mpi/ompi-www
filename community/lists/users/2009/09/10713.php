<?
$subject_val = "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 18:54:08 2009" -->
<!-- isoreceived="20090921225408" -->
<!-- sent="Mon, 21 Sep 2009 15:54:03 -0700 (PDT)" -->
<!-- isosent="20090921225403" -->
<!-- name="Pallab Datta" -->
<!-- email="datta_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless" -->
<!-- id="54134.198.133.185.25.1253573643.squirrel_at_mercury.nsi.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless<br>
<strong>From:</strong> Pallab Datta (<em>datta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 18:54:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10714.php">Everette Clemmer: "[OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="10712.php">Pallab Datta: "[OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10712.php">Pallab Datta: "[OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10715.php">Rolf Vandevaart: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Reply:</strong> <a href="10715.php">Rolf Vandevaart: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following is the error dump
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
<p><p><p><p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run open-mpi 1.3.3. between a linux box running ubuntu
</span><br>
<span class="quotelev1">&gt; server v.9.04 and a Macintosh. I have configured openmpi with the
</span><br>
<span class="quotelev1">&gt; following options.:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/ --enable-heterogeneous --disable-shared
</span><br>
<span class="quotelev1">&gt; --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When both the machines are connected to the network via ethernet cables
</span><br>
<span class="quotelev1">&gt; openmpi works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I switch the linux box to a wireless adapter i can reach (ping)
</span><br>
<span class="quotelev1">&gt; the macintosh
</span><br>
<span class="quotelev1">&gt; but openmpi hangs on a hello world program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun --mca btl_tcp_port_min_v4 36900 -mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca
</span><br>
<span class="quotelev1">&gt; OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H localhost,10.11.14.205
</span><br>
<span class="quotelev1">&gt; /tmp/back
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it hangs on a send receive function between the two ends. All my firewalls
</span><br>
<span class="quotelev1">&gt; are turned off at the macintosh end. PLEASE HELP ASAP&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; pallab
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10714.php">Everette Clemmer: "[OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="10712.php">Pallab Datta: "[OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10712.php">Pallab Datta: "[OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10715.php">Rolf Vandevaart: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Reply:</strong> <a href="10715.php">Rolf Vandevaart: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
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
