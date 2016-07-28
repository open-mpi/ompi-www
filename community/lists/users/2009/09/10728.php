<?
$subject_val = "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 17:27:10 2009" -->
<!-- isoreceived="20090922212710" -->
<!-- sent="Tue, 22 Sep 2009 14:27:05 -0700 (PDT)" -->
<!-- isosent="20090922212705" -->
<!-- name="Pallab Datta" -->
<!-- email="datta_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless" -->
<!-- id="53369.198.133.185.25.1253654825.squirrel_at_mercury.nsi.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AB93CDE.6070902_at_Sun.COM" -->
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
<strong>Date:</strong> 2009-09-22 17:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10729.php">Blesson Varghese: "[OMPI users] MPI Parent-Child process query"</a>
<li><strong>Previous message:</strong> <a href="10727.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Maybe in reply to:</strong> <a href="10712.php">Pallab Datta: "[OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10733.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Reply:</strong> <a href="10733.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following are the ifconfig for both the Mac and the Linux respectively:
<br>
<p>fuji:openmpi-1.3.3 pallabdatta$ ifconfig
<br>
lo0: flags=8049&lt;UP,LOOPBACK,RUNNING,MULTICAST&gt; mtu 16384
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 127.0.0.1 netmask 0xff000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 ::1 prefixlen 128
<br>
gif0: flags=8010&lt;POINTOPOINT,MULTICAST&gt; mtu 1280
<br>
stf0: flags=0&lt;&gt; mtu 1280
<br>
en0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::21f:5bff:fe3d:eaac%en0 prefixlen 64 scopeid 0x4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 10.11.14.203 netmask 0xfffff000 broadcast 10.11.15.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ether 00:1f:5b:3d:ea:ac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect (100baseTX &lt;full-duplex&gt;) status: active
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;supported media: autoselect 10baseT/UTP &lt;half-duplex&gt; 10baseT/UTP
<br>
&lt;full-duplex&gt; 10baseT/UTP &lt;full-duplex,hw-loopback&gt; 10baseT/UTP
<br>
&lt;full-duplex,flow-control&gt; 100baseTX &lt;half-duplex&gt; 100baseTX
<br>
&lt;full-duplex&gt; 100baseTX &lt;full-duplex,hw-loopback&gt; 100baseTX
<br>
&lt;full-duplex,flow-control&gt; 1000baseT &lt;full-duplex&gt; 1000baseT
<br>
&lt;full-duplex,hw-loopback&gt; 1000baseT &lt;full-duplex,flow-control&gt;
<br>
en1: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ether 00:1f:5b:3d:ea:ad
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect status: inactive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;supported media: autoselect 10baseT/UTP &lt;half-duplex&gt; 10baseT/UTP
<br>
&lt;full-duplex&gt; 10baseT/UTP &lt;full-duplex,hw-loopback&gt; 10baseT/UTP
<br>
&lt;full-duplex,flow-control&gt; 100baseTX &lt;half-duplex&gt; 100baseTX
<br>
&lt;full-duplex&gt; 100baseTX &lt;full-duplex,hw-loopback&gt; 100baseTX
<br>
&lt;full-duplex,flow-control&gt; 1000baseT &lt;full-duplex&gt; 1000baseT
<br>
&lt;full-duplex,hw-loopback&gt; 1000baseT &lt;full-duplex,flow-control&gt;
<br>
fw0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 4078
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lladdr 00:22:41:ff:fe:ed:7d:a8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect &lt;full-duplex&gt; status: inactive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;supported media: autoselect &lt;full-duplex&gt;
<br>
<p><p>LINUX:
<br>
====
<br>
pallabdatta_at_apex-backpack:~/backpack/src$ ifconfig
<br>
lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:116 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:116 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:11788 (11.7 KB)  TX bytes:11788 (11.7 KB)
<br>
<p>wlan0     Link encap:Ethernet  HWaddr 00:21:79:c2:54:c7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.11.14.205  Bcast:10.11.14.255  Mask:255.255.240.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::221:79ff:fec2:54c7/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:72531 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:28894 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:5459312 (5.4 MB)  TX bytes:7264193 (7.2 MB)
<br>
<p>wmaster0  Link encap:UNSPEC  HWaddr
<br>
00-21-79-C2-54-C7-34-63-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:0 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:0 (0.0 B)  TX bytes:0 (0.0 B)
<br>
<p>The mac is a Two 2.26GHz Quad-Core Intel Xeon Mac Pro and the Linux Box is
<br>
Ubuntu Server Edition 9.04. The Mac has the ethernet interface to connect
<br>
to the network and the linux box connects via a wireless adapter (IOGEAR).
<br>
<p>Please help me any way I can fix this issue. It really needs to work for
<br>
our project.
<br>
thanks in advance,
<br>
regards,
<br>
pallab
<br>
<p><p><p><p><p><span class="quotelev1">&gt; My other concern was the following but I am not sure it applies here.
</span><br>
<span class="quotelev1">&gt; If you have multiple interfaces on the node, and they are on the same
</span><br>
<span class="quotelev1">&gt; subnet, then you cannot actually select what IP address to go out of.
</span><br>
<span class="quotelev1">&gt; You can only select the IP address you want to connect to. In these
</span><br>
<span class="quotelev1">&gt; cases, I have seen a hang because we think we are selecting an IP
</span><br>
<span class="quotelev1">&gt; address to go out of, but it actually goes out the other one.
</span><br>
<span class="quotelev1">&gt; Perhaps you can send the User's list the output from &quot;ifconfig&quot; on each
</span><br>
<span class="quotelev1">&gt; of the machines which would show all the interfaces. You need to get the
</span><br>
<span class="quotelev1">&gt; right arguments for ifconfig depending on the OS you are running on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One thought is make sure the ethernet interface is marked down on both
</span><br>
<span class="quotelev1">&gt; boxes if that is possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pallab Datta wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions on to how to debug this further..??
</span><br>
<span class="quotelev2">&gt;&gt; do you think I need to enable any other option besides heterogeneous at
</span><br>
<span class="quotelev2">&gt;&gt; the configure proompt.?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The -enable-heterogeneous should do the trick.  And to answer the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; previous question, yes, put both of the interfaces in the include list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca btl_tcp_if_include en0,wlan0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If that does not work, then I may have one other thought why it might
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not work although perhaps not a solution.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pallab Datta wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Rolf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do i need to configure openmpi with some specific options apart from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-heterogeneous..?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am currently using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=/usr/local/ --enable-heterogeneous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --disable-static
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-shared --enable-debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on both ends...is the above correct..?! Please let me know.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks and regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pallab
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I assume if you wait several minutes than your program will actually
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; time out, yes?  I guess I have two suggestions. First, can you run a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; non-MPI job using the wireless?  Something like hostname?  Secondly,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; may want to specify the specific interfaces you want it to use on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; two machines.  You can do that via the &quot;--mca btl_tcp_if_include&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; run-time parameter.  Just list the ones that you expect it to use.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Also, this is not right - &quot;--mca OMPI_mca_mpi_preconnect_all 1&quot;  It
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; should be --mca mpi_preconnect_mpi 1 if you want to do the connection
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; during MPI_Init.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Pallab Datta wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The following is the error dump
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fuji:src pallabdatta$ /usr/local/bin/mpirun --mca
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; btl_tcp_port_min_v4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 36900 -mca btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; btl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tcp,self --mca OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; localhost,10.11.14.205 /tmp/hello
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: Looking for btl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: opening btl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: found loaded
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; self
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: component self has no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: component self open
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: found loaded
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: component tcp has no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] select: initializing btl component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fuji.local:01316] select: init of component tcp returned success
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: Looking for btl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: opening btl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: found loaded
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; self
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: component self has
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: component self
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; open
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: found loaded
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: component tcp has
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] select: init of component self returned
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; success
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] select: initializing btl component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] select: init of component tcp returned success
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Process 0 on fuji.local out of 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Process 1 on apex-backpack out of 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [apex-backpack:04753] btl: tcp: attempting to connect() to address
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 10.11.14.203 on port 9360
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am trying to run open-mpi 1.3.3. between a linux box running
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ubuntu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; server v.9.04 and a Macintosh. I have configured openmpi with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; following options.:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./configure --prefix=/usr/local/ --enable-heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --disable-shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --enable-static
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; When both the machines are connected to the network via ethernet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; cables
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi works fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; But when I switch the linux box to a wireless adapter i can reach
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (ping)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the macintosh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; but openmpi hangs on a hello world program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I ran :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/bin/mpirun --mca btl_tcp_port_min_v4 36900 -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; localhost,10.11.14.205
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/back
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it hangs on a send receive function between the two ends. All my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; firewalls
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; are turned off at the macintosh end. PLEASE HELP ASAP&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; pallab
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10729.php">Blesson Varghese: "[OMPI users] MPI Parent-Child process query"</a>
<li><strong>Previous message:</strong> <a href="10727.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Maybe in reply to:</strong> <a href="10712.php">Pallab Datta: "[OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10733.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Reply:</strong> <a href="10733.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
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
