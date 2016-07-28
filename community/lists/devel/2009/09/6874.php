<?
$subject_val = "Re: [OMPI devel] [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 16:59:20 2009" -->
<!-- isoreceived="20090922205920" -->
<!-- sent="Tue, 22 Sep 2009 13:59:16 -0700 (PDT)" -->
<!-- isosent="20090922205916" -->
<!-- name="Pallab Datta" -->
<!-- email="datta_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless" -->
<!-- id="53104.198.133.185.25.1253653156.squirrel_at_mercury.nsi.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53003.198.133.185.25.1253652684.squirrel_at_mercury.nsi.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless<br>
<strong>From:</strong> Pallab Datta (<em>datta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 16:59:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6875.php">Pallab Datta: "Re: [OMPI devel] [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="6873.php">Pallab Datta: "Re: [OMPI devel] [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="6873.php">Pallab Datta: "Re: [OMPI devel] [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6875.php">Pallab Datta: "Re: [OMPI devel] [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this a bug running open-mpi over heterogeneous environments (between a
<br>
mac and linux) over wireless links.
<br>
Please suggest what needs to be done or what I am missing.?!
<br>
Any clues as to how to debug this will be of great help.
<br>
thanks and regards, pallab
<br>
<p><span class="quotelev1">&gt; Hi Rolf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pallabdatta$ /usr/local/bin/mpirun --mca btl_tcp_port_min_v4 36900 -mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include en0,wlan0 -np 2 -hetero -H localhost,10.11.14.205
</span><br>
<span class="quotelev1">&gt; /tmp/hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] mca: base: components_open: component self has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] mca: base: components_open: component self open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] mca: base: components_open: component sm has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] mca: base: components_open: component sm open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] mca: base: components_open: component tcp has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] mca: base: components_open: component tcp open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [fuji.local][[59424,1],0][btl_tcp_component.c:468:mca_btl_tcp_component_create_instances]
</span><br>
<span class="quotelev1">&gt; invalid interface &quot;wlan0&quot;
</span><br>
<span class="quotelev1">&gt; [fuji.local:02267] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] mca: base: components_open: Looking for btl
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; self
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] mca: base: components_open: component self has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] mca: base: components_open: component self open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; sm
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] mca: base: components_open: component sm has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] mca: base: components_open: component sm open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; tcp
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] mca: base: components_open: component tcp has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [apex-backpack][[59424,1],1][btl_tcp_component.c:468:mca_btl_tcp_component_create_instances]
</span><br>
<span class="quotelev1">&gt; invalid interface &quot;en0&quot;
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; Process 0 on fuji.local out of 2
</span><br>
<span class="quotelev1">&gt; Process 1 on apex-backpack out of 2
</span><br>
<span class="quotelev1">&gt; [apex-backpack:31956] btl: tcp: attempting to connect() to address
</span><br>
<span class="quotelev1">&gt; 10.11.14.203 on port 9360
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It launches the processes on both ends and then it hangs at the send
</span><br>
<span class="quotelev1">&gt; receive part..!!
</span><br>
<span class="quotelev1">&gt; What is the other thing that you were mentioning which makes you think
</span><br>
<span class="quotelev1">&gt; that its not working?!?
</span><br>
<span class="quotelev1">&gt; Please suggest..
</span><br>
<span class="quotelev1">&gt; --regards, pallab
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The -enable-heterogeneous should do the trick.  And to answer the
</span><br>
<span class="quotelev2">&gt;&gt; previous question, yes, put both of the interfaces in the include list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_tcp_if_include en0,wlan0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If that does not work, then I may have one other thought why it might
</span><br>
<span class="quotelev2">&gt;&gt; not work although perhaps not a solution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pallab Datta wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Rolf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do i need to configure openmpi with some specific options apart from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-heterogeneous..?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am currently using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/usr/local/ --enable-heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-static
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-shared --enable-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on both ends...is the above correct..?! Please let me know.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks and regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pallab
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I assume if you wait several minutes than your program will actually
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time out, yes?  I guess I have two suggestions. First, can you run a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; non-MPI job using the wireless?  Something like hostname?  Secondly,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; may want to specify the specific interfaces you want it to use on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; two machines.  You can do that via the &quot;--mca btl_tcp_if_include&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run-time parameter.  Just list the ones that you expect it to use.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, this is not right - &quot;--mca OMPI_mca_mpi_preconnect_all 1&quot;  It
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should be --mca mpi_preconnect_mpi 1 if you want to do the connection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; during MPI_Init.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pallab Datta wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The following is the error dump
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fuji:src pallabdatta$ /usr/local/bin/mpirun --mca btl_tcp_port_min_v4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 36900 -mca btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tcp,self --mca OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; localhost,10.11.14.205 /tmp/hello
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: Looking for btl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; self
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: component self has no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; register function
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: component self open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: component tcp has no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; register function
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: Looking for btl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: opening btl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: found loaded
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; self
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: component self has
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; register function
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: component self open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: found loaded
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: component tcp has
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; register function
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 0 on fuji.local out of 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 1 on apex-backpack out of 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] btl: tcp: attempting to connect() to address
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 10.11.14.203 on port 9360
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am trying to run open-mpi 1.3.3. between a linux box running
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ubuntu
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; server v.9.04 and a Macintosh. I have configured openmpi with the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; following options.:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./configure --prefix=/usr/local/ --enable-heterogeneous
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --disable-shared
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --enable-static
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When both the machines are connected to the network via ethernet
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cables
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi works fine.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But when I switch the linux box to a wireless adapter i can reach
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (ping)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the macintosh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but openmpi hangs on a hello world program.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I ran :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/bin/mpirun --mca btl_tcp_port_min_v4 36900 -mca
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; localhost,10.11.14.205
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/back
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it hangs on a send receive function between the two ends. All my
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; firewalls
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; are turned off at the macintosh end. PLEASE HELP ASAP&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pallab
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =========================
</span><br>
<span class="quotelev2">&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev2">&gt;&gt; =========================
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6875.php">Pallab Datta: "Re: [OMPI devel] [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="6873.php">Pallab Datta: "Re: [OMPI devel] [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="6873.php">Pallab Datta: "Re: [OMPI devel] [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6875.php">Pallab Datta: "Re: [OMPI devel] [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
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
