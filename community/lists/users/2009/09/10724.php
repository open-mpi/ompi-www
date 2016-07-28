<?
$subject_val = "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 13:02:26 2009" -->
<!-- isoreceived="20090922170226" -->
<!-- sent="Tue, 22 Sep 2009 10:02:22 -0700 (PDT)" -->
<!-- isosent="20090922170222" -->
<!-- name="Pallab Datta" -->
<!-- email="datta_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless" -->
<!-- id="49415.198.133.185.25.1253638942.squirrel_at_mercury.nsi.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AB82174.302_at_Sun.COM" -->
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
<strong>Date:</strong> 2009-09-22 13:02:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10725.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10723.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10715.php">Rolf Vandevaart: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10726.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rolf,
<br>
<p>Thanks for the suggestions. I will try it. I can run a non-mpi program
<br>
over wireless.
<br>
My mac's ethernet interface is en0, and my linux's wireless is wlan0..can
<br>
I mention both in the --mca btl__tcp_if_include option?!
<br>
<p>thanks a lot in advance,
<br>
regards, pallab
<br>
<p><p><span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt; I assume if you wait several minutes than your program will actually
</span><br>
<span class="quotelev1">&gt; time out, yes?  I guess I have two suggestions. First, can you run a
</span><br>
<span class="quotelev1">&gt; non-MPI job using the wireless?  Something like hostname?  Secondly, you
</span><br>
<span class="quotelev1">&gt; may want to specify the specific interfaces you want it to use on the
</span><br>
<span class="quotelev1">&gt; two machines.  You can do that via the &quot;--mca btl_tcp_if_include&quot;
</span><br>
<span class="quotelev1">&gt; run-time parameter.  Just list the ones that you expect it to use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, this is not right - &quot;--mca OMPI_mca_mpi_preconnect_all 1&quot;  It
</span><br>
<span class="quotelev1">&gt; should be --mca mpi_preconnect_mpi 1 if you want to do the connection
</span><br>
<span class="quotelev1">&gt; during MPI_Init.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pallab Datta wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The following is the error dump
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fuji:src pallabdatta$ /usr/local/bin/mpirun --mca btl_tcp_port_min_v4
</span><br>
<span class="quotelev2">&gt;&gt; 36900 -mca btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca btl
</span><br>
<span class="quotelev2">&gt;&gt; tcp,self --mca OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H
</span><br>
<span class="quotelev2">&gt;&gt; localhost,10.11.14.205 /tmp/hello
</span><br>
<span class="quotelev2">&gt;&gt; [fuji.local:01316] mca: base: components_open: Looking for btl
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt; [fuji.local:01316] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [fuji.local:01316] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; self
</span><br>
<span class="quotelev2">&gt;&gt; [fuji.local:01316] mca: base: components_open: component self has no
</span><br>
<span class="quotelev2">&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt; [fuji.local:01316] mca: base: components_open: component self open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [fuji.local:01316] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; tcp
</span><br>
<span class="quotelev2">&gt;&gt; [fuji.local:01316] mca: base: components_open: component tcp has no
</span><br>
<span class="quotelev2">&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt; [fuji.local:01316] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev2">&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt; [fuji.local:01316] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [fuji.local:01316] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [fuji.local:01316] select: initializing btl component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [fuji.local:01316] select: init of component tcp returned success
</span><br>
<span class="quotelev2">&gt;&gt; [apex-backpack:04753] mca: base: components_open: Looking for btl
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt; [apex-backpack:04753] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [apex-backpack:04753] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; self
</span><br>
<span class="quotelev2">&gt;&gt; [apex-backpack:04753] mca: base: components_open: component self has no
</span><br>
<span class="quotelev2">&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt; [apex-backpack:04753] mca: base: components_open: component self open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [apex-backpack:04753] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; tcp
</span><br>
<span class="quotelev2">&gt;&gt; [apex-backpack:04753] mca: base: components_open: component tcp has no
</span><br>
<span class="quotelev2">&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt; [apex-backpack:04753] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [apex-backpack:04753] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [apex-backpack:04753] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [apex-backpack:04753] select: initializing btl component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [apex-backpack:04753] select: init of component tcp returned success
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 on fuji.local out of 2
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 on apex-backpack out of 2
</span><br>
<span class="quotelev2">&gt;&gt; [apex-backpack:04753] btl: tcp: attempting to connect() to address
</span><br>
<span class="quotelev2">&gt;&gt; 10.11.14.203 on port 9360
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to run open-mpi 1.3.3. between a linux box running ubuntu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; server v.9.04 and a Macintosh. I have configured openmpi with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following options.:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/usr/local/ --enable-heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-static
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When both the machines are connected to the network via ethernet cables
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi works fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But when I switch the linux box to a wireless adapter i can reach
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ping)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the macintosh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but openmpi hangs on a hello world program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/bin/mpirun --mca btl_tcp_port_min_v4 36900 -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H localhost,10.11.14.205
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/back
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it hangs on a send receive function between the two ends. All my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; firewalls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are turned off at the macintosh end. PLEASE HELP ASAP&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pallab
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
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
<li><strong>Next message:</strong> <a href="10725.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10723.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10715.php">Rolf Vandevaart: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10726.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
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
