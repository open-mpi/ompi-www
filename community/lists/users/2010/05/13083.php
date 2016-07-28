<?
$subject_val = "Re: [OMPI users] init of component openib returned failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 06:38:04 2010" -->
<!-- isoreceived="20100519103804" -->
<!-- sent="Wed, 19 May 2010 05:37:59 -0500" -->
<!-- isosent="20100519103759" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] init of component openib returned failure" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA170567A6_at_XMB-RCD-205.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BF39736.6070500_at_q-leap.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-19 06:37:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13084.php">Stefan Kuhne: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
<li><strong>Previous message:</strong> <a href="13082.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>In reply to:</strong> <a href="13082.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13085.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Reply:</strong> <a href="13085.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, we've entered the Land of Really Weird - I've never seen a btl work with one mpi app and not another.
<br>
<p>Some q's:
<br>
<p>- are you running both apps on the same nodes?
<br>
- is anything else running on the nodes at the same time (e.g., other mpi jobs using openfabrics)?
<br>
- is the imb compiled for ompi 1.4.1?
<br>
- can you run ldd on the apps to ensure they're linking to the same libmpi?
<br>
<p>-jms
<br>
Sent from my PDA.  No type good.
<br>
<p>----- Original Message -----
<br>
From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Sent: Wed May 19 02:45:58 2010
<br>
Subject: Re: [OMPI users] init of component openib returned failure
<br>
<p>Hello,
<br>
<p>thanks for your reply.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Try running with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun.openmpi-1.4.1 --mca btl_base_verbose 50  --mca btl self,openib -n 2 --mca btl_openib_verbose 100 ./IMB-MPI1 -npmin 2 PingPong
</span><br>
<p>the output is exactly the same as before.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, are you saying that running the same command line with osu_latency works just fine?  That would be really weird...
</span><br>
<p>Yes, if I run:
<br>
<p>mpirun.openmpi-1.4.1 --mca btl_base_verbose 50 --mca btl self,openib -n 2 
<br>
--mca btl_openib_verbose 100 ./osu_lat_ompi-1.4.1
<br>
<p>the openib component can be initialized:
<br>
<p>----------------------------8&lt;----------------------------------------------
<br>
<p>[beo-15:29479] mca: base: components_open: Looking for btl components
<br>
[beo-16:29063] mca: base: components_open: Looking for btl components
<br>
[beo-15:29479] mca: base: components_open: opening btl components
<br>
[beo-15:29479] mca: base: components_open: found loaded component openib
<br>
[beo-15:29479] mca: base: components_open: component openib has no register 
<br>
function
<br>
[beo-15:29479] mca: base: components_open: component openib open function 
<br>
successful
<br>
[beo-15:29479] mca: base: components_open: found loaded component self
<br>
[beo-15:29479] mca: base: components_open: component self has no register function
<br>
[beo-15:29479] mca: base: components_open: component self open function successful
<br>
[beo-16:29063] mca: base: components_open: opening btl components
<br>
[beo-16:29063] mca: base: components_open: found loaded component openib
<br>
[beo-16:29063] mca: base: components_open: component openib has no register 
<br>
function
<br>
[beo-16:29063] mca: base: components_open: component openib open function 
<br>
successful
<br>
[beo-16:29063] mca: base: components_open: found loaded component self
<br>
[beo-16:29063] mca: base: components_open: component self has no register function
<br>
[beo-16:29063] mca: base: components_open: component self open function successful
<br>
[beo-15:29479] select: initializing btl component openib
<br>
[beo-16:29063] select: initializing btl component openib
<br>
[beo-15][[12785,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying 
<br>
INI files for vendor 0x02c9, part ID 25204
<br>
[beo-15][[12785,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found 
<br>
corresponding INI values: Mellanox Sinai Infinihost III
<br>
[beo-15][[12785,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying 
<br>
INI files for vendor 0x0000, part ID 0
<br>
[beo-15][[12785,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found 
<br>
corresponding INI values: default
<br>
[beo-15:29479] openib BTL: oob CPC available for use on mthca0:1
<br>
[beo-15:29479] openib BTL: xoob CPC only supported with XRC receive queues; 
<br>
skipped on mthca0:1
<br>
[beo-15:29479] openib BTL: rdmacm CPC available for use on mthca0:1
<br>
[beo-15:29479] select: init of component openib returned success
<br>
[beo-15:29479] select: initializing btl component self
<br>
[beo-15:29479] select: init of component self returned success
<br>
[beo-16][[12785,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying 
<br>
INI files for vendor 0x02c9, part ID 25204
<br>
[beo-16][[12785,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found 
<br>
corresponding INI values: Mellanox Sinai Infinihost III
<br>
[beo-16][[12785,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying 
<br>
INI files for vendor 0x0000, part ID 0
<br>
[beo-16][[12785,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found 
<br>
corresponding INI values: default
<br>
[beo-16:29063] openib BTL: oob CPC available for use on mthca0:1
<br>
[beo-16:29063] openib BTL: xoob CPC only supported with XRC receive queues; 
<br>
skipped on mthca0:1
<br>
[beo-16:29063] openib BTL: rdmacm CPC available for use on mthca0:1
<br>
[beo-16:29063] select: init of component openib returned success
<br>
[beo-16:29063] select: initializing btl component self
<br>
[beo-16:29063] select: init of component self returned success
<br>
# OSU MPI Latency Test (Version 2.2)
<br>
# Size          Latency (us)
<br>
[beo-16][[12785,1],1][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
<br>
MTU to IBV value 4 (2048 bytes)
<br>
[beo-16][[12785,1],1][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
<br>
MTU to IBV value 4 (2048 bytes)
<br>
[beo-16][[12785,1],1][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
<br>
MTU to IBV value 4 (2048 bytes)
<br>
[beo-16][[12785,1],1][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
<br>
MTU to IBV value 4 (2048 bytes)
<br>
[beo-15][[12785,1],0][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
<br>
MTU to IBV value 4 (2048 bytes)
<br>
[beo-15][[12785,1],0][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
<br>
MTU to IBV value 4 (2048 bytes)
<br>
[beo-15][[12785,1],0][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
<br>
MTU to IBV value 4 (2048 bytes)
<br>
[beo-15][[12785,1],0][connect/btl_openib_connect_oob.c:313:qp_connect_all] Set 
<br>
MTU to IBV value 4 (2048 bytes)
<br>
0               3.57
<br>
1               3.65
<br>
2               3.63
<br>
4               3.64
<br>
8               3.68
<br>
16              3.72
<br>
32              3.77
<br>
64              3.95
<br>
128             4.95
<br>
256             5.36
<br>
512             6.03
<br>
1024            7.64
<br>
2048            9.95
<br>
4096            12.78
<br>
8192            18.22
<br>
16384           25.48
<br>
32768           37.03
<br>
65536           60.21
<br>
131072          107.90
<br>
262144          201.18
<br>
524288          389.08
<br>
1048576         762.38
<br>
2097152         1510.91
<br>
4194304         3005.72
<br>
[beo-15:29479] mca: base: close: component openib closed
<br>
[beo-16:29063] mca: base: close: component openib closed
<br>
[beo-16:29063] mca: base: close: unloading component openib
<br>
[beo-15:29479] mca: base: close: unloading component openib
<br>
[beo-16:29063] mca: base: close: component self closed
<br>
[beo-16:29063] mca: base: close: unloading component self
<br>
[beo-15:29479] mca: base: close: component self closed
<br>
[beo-15:29479] mca: base: close: unloading component self
<br>
<p><p>----------------------------8&lt;----------------------------------------------
<br>
<p>really weird.
<br>
<p>&nbsp;&nbsp;&nbsp;Peter
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 18, 2010, at 6:18 AM, Peter Kruse wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; trying to run Intel MPI Benchmarks with OpenMPI 1.4.1 fails in initializing
</span><br>
<span class="quotelev2">&gt;&gt; the component openib.  System is Debian GNU/Linux 5.0.4.
</span><br>
<span class="quotelev2">&gt;&gt; The command to start the job (under Torque 2.4.7) was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.openmpi-1.4.1 --mca btl_base_verbose 50  --mca btl self,openib -n 2
</span><br>
<span class="quotelev2">&gt;&gt; ./IMB-MPI1 -npmin 2 PingPong
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and results in these messages:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] mca: base: components_open: component openib has no register
</span><br>
<span class="quotelev2">&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] mca: base: components_open: component openib open function
</span><br>
<span class="quotelev2">&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] mca: base: components_open: component openib has no register
</span><br>
<span class="quotelev2">&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] mca: base: components_open: component openib open function
</span><br>
<span class="quotelev2">&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] select: initializing btl component openib
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] select: init of component openib returned failure
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] select: module openib unloaded
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] select: initializing btl component openib
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] select: init of component openib returned failure
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] select: module openib unloaded
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Process 1 ([[4887,1],0]) is on host: beo-15
</span><br>
<span class="quotelev2">&gt;&gt;    Process 2 ([[4887,1],1]) is on host: beo-16
</span><br>
<span class="quotelev2">&gt;&gt;    BTLs attempted: self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;    --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20933] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev2">&gt;&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; orterun has exited due to process rank 0 with PID 20933 on
</span><br>
<span class="quotelev2">&gt;&gt; node beo-15 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by orterun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [beo-16:20605] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev2">&gt;&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20930] 1 more process has sent help message help-mca-bml-r2.txt /
</span><br>
<span class="quotelev2">&gt;&gt; unreachable proc
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20930] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
</span><br>
<span class="quotelev2">&gt;&gt; help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; [beo-15:20930] 1 more process has sent help message help-mpi-runtime /
</span><br>
<span class="quotelev2">&gt;&gt; mpi_init:startup:internal-failure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; running another Benchmark (OSU) succeeds in loading the openib component.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ibstat |grep -i state&quot; on both nodes gives:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                  State: Active
</span><br>
<span class="quotelev2">&gt;&gt;                  Physical state: LinkUp
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running with &quot;mpi_abort_delay -1&quot; and attaching an strace on the process
</span><br>
<span class="quotelev2">&gt;&gt; is not very helpful it loops with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], [], 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigaction(SIGCHLD, NULL, {0x2aee58ff3250, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev2">&gt;&gt; 0x2aee59d44f60}, 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigprocmask(SIG_SETMASK, [], NULL, 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt; nanosleep({5, 0}, {5, 0})               = 0
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anybody have an idea what is wrong or how can we get more debugging
</span><br>
<span class="quotelev2">&gt;&gt; information about the initialization of the openib module?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any help,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Peter
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13084.php">Stefan Kuhne: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
<li><strong>Previous message:</strong> <a href="13082.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>In reply to:</strong> <a href="13082.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13085.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Reply:</strong> <a href="13085.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
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
