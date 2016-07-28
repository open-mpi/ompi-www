<?
$subject_val = "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 20:59:38 2009" -->
<!-- isoreceived="20090922005938" -->
<!-- sent="Mon, 21 Sep 2009 20:59:32 -0400" -->
<!-- isosent="20090922005932" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless" -->
<!-- id="4AB82174.302_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="54134.198.133.185.25.1253573643.squirrel_at_mercury.nsi.edu" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 20:59:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10716.php">guosong: "[OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10714.php">Everette Clemmer: "[OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="10713.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10724.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Reply:</strong> <a href="10724.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
I assume if you wait several minutes than your program will actually 
<br>
time out, yes?  I guess I have two suggestions. First, can you run a 
<br>
non-MPI job using the wireless?  Something like hostname?  Secondly, you 
<br>
may want to specify the specific interfaces you want it to use on the 
<br>
two machines.  You can do that via the &quot;--mca btl_tcp_if_include&quot; 
<br>
run-time parameter.  Just list the ones that you expect it to use.
<br>
<p>Also, this is not right - &quot;--mca OMPI_mca_mpi_preconnect_all 1&quot;  It 
<br>
should be --mca mpi_preconnect_mpi 1 if you want to do the connection 
<br>
during MPI_Init.
<br>
<p>Rolf
<br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>Pallab Datta wrote:
<br>
<span class="quotelev1">&gt; The following is the error dump
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fuji:src pallabdatta$ /usr/local/bin/mpirun --mca btl_tcp_port_min_v4
</span><br>
<span class="quotelev1">&gt; 36900 -mca btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca btl
</span><br>
<span class="quotelev1">&gt; tcp,self --mca OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H
</span><br>
<span class="quotelev1">&gt; localhost,10.11.14.205 /tmp/hello
</span><br>
<span class="quotelev1">&gt; [fuji.local:01316] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [fuji.local:01316] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [fuji.local:01316] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [fuji.local:01316] mca: base: components_open: component self has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [fuji.local:01316] mca: base: components_open: component self open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [fuji.local:01316] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [fuji.local:01316] mca: base: components_open: component tcp has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [fuji.local:01316] mca: base: components_open: component tcp open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [fuji.local:01316] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [fuji.local:01316] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [fuji.local:01316] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [fuji.local:01316] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; [apex-backpack:04753] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [apex-backpack:04753] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [apex-backpack:04753] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [apex-backpack:04753] mca: base: components_open: component self has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [apex-backpack:04753] mca: base: components_open: component self open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [apex-backpack:04753] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [apex-backpack:04753] mca: base: components_open: component tcp has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [apex-backpack:04753] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [apex-backpack:04753] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [apex-backpack:04753] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [apex-backpack:04753] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [apex-backpack:04753] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; Process 0 on fuji.local out of 2
</span><br>
<span class="quotelev1">&gt; Process 1 on apex-backpack out of 2
</span><br>
<span class="quotelev1">&gt; [apex-backpack:04753] btl: tcp: attempting to connect() to address
</span><br>
<span class="quotelev1">&gt; 10.11.14.203 on port 9360
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to run open-mpi 1.3.3. between a linux box running ubuntu
</span><br>
<span class="quotelev2">&gt;&gt; server v.9.04 and a Macintosh. I have configured openmpi with the
</span><br>
<span class="quotelev2">&gt;&gt; following options.:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local/ --enable-heterogeneous --disable-shared
</span><br>
<span class="quotelev2">&gt;&gt; --enable-static
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When both the machines are connected to the network via ethernet cables
</span><br>
<span class="quotelev2">&gt;&gt; openmpi works fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But when I switch the linux box to a wireless adapter i can reach (ping)
</span><br>
<span class="quotelev2">&gt;&gt; the macintosh
</span><br>
<span class="quotelev2">&gt;&gt; but openmpi hangs on a hello world program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/bin/mpirun --mca btl_tcp_port_min_v4 36900 -mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H localhost,10.11.14.205
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/back
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it hangs on a send receive function between the two ends. All my firewalls
</span><br>
<span class="quotelev2">&gt;&gt; are turned off at the macintosh end. PLEASE HELP ASAP&gt;
</span><br>
<span class="quotelev2">&gt;&gt; regards,
</span><br>
<span class="quotelev2">&gt;&gt; pallab
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
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10715/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10716.php">guosong: "[OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10714.php">Everette Clemmer: "[OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="10713.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10724.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Reply:</strong> <a href="10724.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
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
