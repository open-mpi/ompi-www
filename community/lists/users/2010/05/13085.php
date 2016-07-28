<?
$subject_val = "Re: [OMPI users] init of component openib returned failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 07:18:47 2010" -->
<!-- isoreceived="20100519111847" -->
<!-- sent="Wed, 19 May 2010 13:18:41 +0200" -->
<!-- isosent="20100519111841" -->
<!-- name="Peter Kruse" -->
<!-- email="pk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] init of component openib returned failure" -->
<!-- id="4BF3C911.7040300_at_q-leap.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA170567A6_at_XMB-RCD-205.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] init of component openib returned failure<br>
<strong>From:</strong> Peter Kruse (<em>pk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-19 07:18:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13086.php">Dr. Vincent Keller: "[OMPI users] OpenMPI + IB makes problem (btl_openib_component.c)"</a>
<li><strong>Previous message:</strong> <a href="13084.php">Stefan Kuhne: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
<li><strong>In reply to:</strong> <a href="13083.php">Jeff Squyres (jsquyres): "Re: [OMPI users] init of component openib returned failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13086.php">Dr. Vincent Keller: "[OMPI users] OpenMPI + IB makes problem (btl_openib_component.c)"</a>
<li><strong>Reply:</strong> <a href="13086.php">Dr. Vincent Keller: "[OMPI users] OpenMPI + IB makes problem (btl_openib_component.c)"</a>
<li><strong>Reply:</strong> <a href="13087.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Ok, we've entered the Land of Really Weird - I've never seen a btl work with one mpi app and not another.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some q's:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - are you running both apps on the same nodes?
</span><br>
<p>yes, in fact I'm running them in the same interactive Job.
<br>
<p><span class="quotelev1">&gt; - is anything else running on the nodes at the same time (e.g., other mpi jobs using openfabrics)?
</span><br>
<p>no, the nodes are reserved for testing this at the moment.
<br>
<p><span class="quotelev1">&gt; - is the imb compiled for ompi 1.4.1?
</span><br>
<p>yes it is.
<br>
<p><span class="quotelev1">&gt; - can you run ldd on the apps to ensure they're linking to the same libmpi?
</span><br>
<p>----------------------------8&lt;----------------------------------------------
<br>
<p>$ ldd IMB-MPI1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff077ff000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/lib/openmpi/1.4.1/gcc/lib/libmpi.so.0 
<br>
(0x00002b9120a3a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /usr/lib/openmpi/1.4.1/gcc/lib/libopen-rte.so.0 
<br>
(0x00002b9120cf4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /usr/lib/openmpi/1.4.1/gcc/lib/libopen-pal.so.0 
<br>
(0x00002b9120f43000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0x00002b91211c6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x00002b91213ca000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/libutil.so.1 (0x00002b91215e2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/libm.so.6 (0x00002b91217e6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/libpthread.so.0 (0x00002b9121a69000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/libc.so.6 (0x00002b9121c85000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002b912081d000)
<br>
$ cd ../../osu_benchmarks/
<br>
$ ldd osu_lat_ompi-1.4.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007ffff65ff000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/lib/openmpi/1.4.1/gcc/lib/libmpi.so.0 
<br>
(0x00002b4f69ec8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /usr/lib/openmpi/1.4.1/gcc/lib/libopen-rte.so.0 
<br>
(0x00002b4f6a182000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /usr/lib/openmpi/1.4.1/gcc/lib/libopen-pal.so.0 
<br>
(0x00002b4f6a3d1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0x00002b4f6a654000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x00002b4f6a858000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/libutil.so.1 (0x00002b4f6aa70000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/libm.so.6 (0x00002b4f6ac74000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/libpthread.so.0 (0x00002b4f6aef7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/libc.so.6 (0x00002b4f6b113000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002b4f69cab000)
<br>
<p>----------------------------8&lt;----------------------------------------------
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<p>thanks for going through this trouble to reply!
<br>
<p>Peter
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wed May 19 02:45:58 2010
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] init of component openib returned failure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for your reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Try running with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.openmpi-1.4.1 --mca btl_base_verbose 50  --mca btl self,openib -n 2 --mca btl_openib_verbose 100 ./IMB-MPI1 -npmin 2 PingPong
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the output is exactly the same as before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, are you saying that running the same command line with osu_latency works just fine?  That would be really weird...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, if I run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun.openmpi-1.4.1 --mca btl_base_verbose 50 --mca btl self,openib -n 2 
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_verbose 100 ./osu_lat_ompi-1.4.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the openib component can be initialized:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] mca: base: components_open: component openib has no register 
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] mca: base: components_open: component openib open function 
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] mca: base: components_open: component openib has no register 
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] mca: base: components_open: component openib open function 
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] select: initializing btl component openib
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] select: initializing btl component openib
</span><br>
<span class="quotelev1">&gt; [beo-15][[12785,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying 
</span><br>
<span class="quotelev1">&gt; INI files for vendor 0x02c9, part ID 25204
</span><br>
<span class="quotelev1">&gt; [beo-15][[12785,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found 
</span><br>
<span class="quotelev1">&gt; corresponding INI values: Mellanox Sinai Infinihost III
</span><br>
<span class="quotelev1">&gt; [beo-15][[12785,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying 
</span><br>
<span class="quotelev1">&gt; INI files for vendor 0x0000, part ID 0
</span><br>
<span class="quotelev1">&gt; [beo-15][[12785,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found 
</span><br>
<span class="quotelev1">&gt; corresponding INI values: default
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] openib BTL: oob CPC available for use on mthca0:1
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] openib BTL: xoob CPC only supported with XRC receive queues; 
</span><br>
<span class="quotelev1">&gt; skipped on mthca0:1
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] openib BTL: rdmacm CPC available for use on mthca0:1
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] select: init of component openib returned success
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [beo-16][[12785,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying 
</span><br>
<span class="quotelev1">&gt; INI files for vendor 0x02c9, part ID 25204
</span><br>
<span class="quotelev1">&gt; [beo-16][[12785,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found 
</span><br>
<span class="quotelev1">&gt; corresponding INI values: Mellanox Sinai Infinihost III
</span><br>
<span class="quotelev1">&gt; [beo-16][[12785,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying 
</span><br>
<span class="quotelev1">&gt; INI files for vendor 0x0000, part ID 0
</span><br>
<span class="quotelev1">&gt; [beo-16][[12785,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found 
</span><br>
<span class="quotelev1">&gt; corresponding INI values: default
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] openib BTL: oob CPC available for use on mthca0:1
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] openib BTL: xoob CPC only supported with XRC receive queues; 
</span><br>
<span class="quotelev1">&gt; skipped on mthca0:1
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] openib BTL: rdmacm CPC available for use on mthca0:1
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] select: init of component openib returned success
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test (Version 2.2)
</span><br>
<span class="quotelev1">&gt; # Size          Latency (us)
</span><br>
<span class="quotelev1">&gt; [beo-16][[12785,1],1][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
</span><br>
<span class="quotelev1">&gt; MTU to IBV value 4 (2048 bytes)
</span><br>
<span class="quotelev1">&gt; [beo-16][[12785,1],1][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
</span><br>
<span class="quotelev1">&gt; MTU to IBV value 4 (2048 bytes)
</span><br>
<span class="quotelev1">&gt; [beo-16][[12785,1],1][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
</span><br>
<span class="quotelev1">&gt; MTU to IBV value 4 (2048 bytes)
</span><br>
<span class="quotelev1">&gt; [beo-16][[12785,1],1][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
</span><br>
<span class="quotelev1">&gt; MTU to IBV value 4 (2048 bytes)
</span><br>
<span class="quotelev1">&gt; [beo-15][[12785,1],0][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
</span><br>
<span class="quotelev1">&gt; MTU to IBV value 4 (2048 bytes)
</span><br>
<span class="quotelev1">&gt; [beo-15][[12785,1],0][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
</span><br>
<span class="quotelev1">&gt; MTU to IBV value 4 (2048 bytes)
</span><br>
<span class="quotelev1">&gt; [beo-15][[12785,1],0][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
</span><br>
<span class="quotelev1">&gt; MTU to IBV value 4 (2048 bytes)
</span><br>
<span class="quotelev1">&gt; [beo-15][[12785,1],0][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
</span><br>
<span class="quotelev1">&gt; MTU to IBV value 4 (2048 bytes)
</span><br>
<span class="quotelev1">&gt; 0               3.57
</span><br>
<span class="quotelev1">&gt; 1               3.65
</span><br>
<span class="quotelev1">&gt; 2               3.63
</span><br>
<span class="quotelev1">&gt; 4               3.64
</span><br>
<span class="quotelev1">&gt; 8               3.68
</span><br>
<span class="quotelev1">&gt; 16              3.72
</span><br>
<span class="quotelev1">&gt; 32              3.77
</span><br>
<span class="quotelev1">&gt; 64              3.95
</span><br>
<span class="quotelev1">&gt; 128             4.95
</span><br>
<span class="quotelev1">&gt; 256             5.36
</span><br>
<span class="quotelev1">&gt; 512             6.03
</span><br>
<span class="quotelev1">&gt; 1024            7.64
</span><br>
<span class="quotelev1">&gt; 2048            9.95
</span><br>
<span class="quotelev1">&gt; 4096            12.78
</span><br>
<span class="quotelev1">&gt; 8192            18.22
</span><br>
<span class="quotelev1">&gt; 16384           25.48
</span><br>
<span class="quotelev1">&gt; 32768           37.03
</span><br>
<span class="quotelev1">&gt; 65536           60.21
</span><br>
<span class="quotelev1">&gt; 131072          107.90
</span><br>
<span class="quotelev1">&gt; 262144          201.18
</span><br>
<span class="quotelev1">&gt; 524288          389.08
</span><br>
<span class="quotelev1">&gt; 1048576         762.38
</span><br>
<span class="quotelev1">&gt; 2097152         1510.91
</span><br>
<span class="quotelev1">&gt; 4194304         3005.72
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] mca: base: close: component openib closed
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] mca: base: close: component openib closed
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] mca: base: close: unloading component openib
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] mca: base: close: unloading component openib
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] mca: base: close: component self closed
</span><br>
<span class="quotelev1">&gt; [beo-16:29063] mca: base: close: unloading component self
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] mca: base: close: component self closed
</span><br>
<span class="quotelev1">&gt; [beo-15:29479] mca: base: close: unloading component self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; really weird.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Peter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 18, 2010, at 6:18 AM, Peter Kruse wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trying to run Intel MPI Benchmarks with OpenMPI 1.4.1 fails in initializing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the component openib.  System is Debian GNU/Linux 5.0.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The command to start the job (under Torque 2.4.7) was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun.openmpi-1.4.1 --mca btl_base_verbose 50  --mca btl self,openib -n 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./IMB-MPI1 -npmin 2 PingPong
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and results in these messages:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] mca: base: components_open: component openib has no register
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] mca: base: components_open: component openib open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] mca: base: components_open: component openib has no register
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] mca: base: components_open: component openib open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] select: initializing btl component openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] select: init of component openib returned failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] select: module openib unloaded
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] select: initializing btl component self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] select: init of component self returned success
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] select: initializing btl component openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] select: init of component openib returned failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] select: module openib unloaded
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] select: initializing btl component self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] select: init of component self returned success
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Process 1 ([[4887,1],0]) is on host: beo-15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Process 2 ([[4887,1],1]) is on host: beo-16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    BTLs attempted: self
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    PML add procs failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20933] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun has exited due to process rank 0 with PID 20933 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node beo-15 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminated by signals sent by orterun (as reported here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-16:20605] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20930] 1 more process has sent help message help-mca-bml-r2.txt /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unreachable proc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20930] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beo-15:20930] 1 more process has sent help message help-mpi-runtime /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_init:startup:internal-failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running another Benchmark (OSU) succeeds in loading the openib component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;ibstat |grep -i state&quot; on both nodes gives:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  State: Active
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Physical state: LinkUp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running with &quot;mpi_abort_delay -1&quot; and attaching an strace on the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not very helpful it loops with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], [], 8) = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rt_sigaction(SIGCHLD, NULL, {0x2aee58ff3250, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x2aee59d44f60}, 8) = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rt_sigprocmask(SIG_SETMASK, [], NULL, 8) = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nanosleep({5, 0}, {5, 0})               = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anybody have an idea what is wrong or how can we get more debugging
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information about the initialization of the openib module?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Peter
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
<li><strong>Next message:</strong> <a href="13086.php">Dr. Vincent Keller: "[OMPI users] OpenMPI + IB makes problem (btl_openib_component.c)"</a>
<li><strong>Previous message:</strong> <a href="13084.php">Stefan Kuhne: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
<li><strong>In reply to:</strong> <a href="13083.php">Jeff Squyres (jsquyres): "Re: [OMPI users] init of component openib returned failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13086.php">Dr. Vincent Keller: "[OMPI users] OpenMPI + IB makes problem (btl_openib_component.c)"</a>
<li><strong>Reply:</strong> <a href="13086.php">Dr. Vincent Keller: "[OMPI users] OpenMPI + IB makes problem (btl_openib_component.c)"</a>
<li><strong>Reply:</strong> <a href="13087.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
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
