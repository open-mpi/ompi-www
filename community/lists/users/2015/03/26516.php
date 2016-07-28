<?
$subject_val = "Re: [OMPI users] open mpi on blue waters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 11:52:20 2015" -->
<!-- isoreceived="20150325155220" -->
<!-- sent="Wed, 25 Mar 2015 08:52:16 -0700" -->
<!-- isosent="20150325155216" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on blue waters" -->
<!-- id="3833D5BC-1F15-4688-A0D5-A3FC9C03A92B_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="6B921D51-90EE-493F-96D9-666E1AE25601_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi on blue waters<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 11:52:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26517.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26515.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26515.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26517.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26517.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;okay, sorry to keep drilling down here, but let&#226;&#128;&#153;s try adding &#226;&#128;&#156;-mca sec_base_verbose 100&#226;&#128;&#157; now
<br>
<p><span class="quotelev1">&gt; On Mar 25, 2015, at 8:51 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; marksant_at_nid25257:~&gt; /u/sciteam/marksant/openmpi/installation/bin/mpirun -mca oob_base_verbose 100 ./a.out 
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_register: found loaded component usock
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_register: component usock register function successful
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_register: found loaded component alps
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_register: component alps register function successful
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_register: found loaded component ud
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_register: component ud register function successful
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_open: found loaded component usock
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_open: component usock open function successful
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_open: found loaded component alps
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_open: component alps open function successful
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_open: found loaded component ud
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_open: component ud open function successful
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca:oob:select: checking available component usock
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca:oob:select: Querying component [usock]
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] oob:usock: component_available called
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] USOCK STARTUP
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] SUNPATH: /var/tmp/openmpi-sessions-45504_at_nid25257_0/8913/0/usock
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] START USOCK LISTENING ON /var/tmp/openmpi-sessions-45504_at_nid25257_0/8913/0/usock
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca:oob:select: checking available component alps
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca:oob:select: Querying component [alps]
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca:oob:select: Skipping component [alps] - no available interfaces
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca:oob:select: checking available component ud
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca:oob:select: Querying component [ud]
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] oob:ud: component_available called
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] oob:ud:component_init no devices found
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca:oob:select: Skipping component [ud] - failed to startup
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] oob:tcp:init rejecting loopback interface lo
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] oob:tcp:init rejecting loopback interface lo
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] WORKING INTERFACE 3 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] oob:tcp:init adding 10.128.99.112 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] TCP STARTUP
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] assigned IPv4 port 35917
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] mca:oob:select: Found 2 active transports
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] mca_oob_tcp_listen_thread: new connection: (16, 0) 10.128.69.144:46745
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] connection_handler: working connection (16, 2) 10.128.69.144:46745
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] accept_connection: 10.128.69.144:46745
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0]:tcp:recv:handler called
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 16
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] waiting for connect ack from UNKNOWN
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] connect ack received from UNKNOWN
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] connect-ack recvd from UNKNOWN
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] mca_oob_tcp_recv_connect: connection from new peer
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] connect-ack header from [[8913,0],2] is okay
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] waiting for connect ack from [[8913,0],2]
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] connect ack received from [[8913,0],2]
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] connect-ack version from [[8913,0],2] matches ours
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] ORTE_ERROR_LOG: Authentication failed in file ../../../../../orte/mca/oob/tcp/oob_tcp_connection.c at line 803
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] mca_oob_tcp_listen_thread: new connection: (17, 11) 10.128.69.143:33434
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] connection_handler: working connection (17, 0) 10.128.69.143:33434
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] accept_connection: 10.128.69.143:33434
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0]:tcp:recv:handler called
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 17
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] waiting for connect ack from UNKNOWN
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] connect ack received from UNKNOWN
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] connect-ack recvd from UNKNOWN
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] mca_oob_tcp_recv_connect: connection from new peer
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] connect-ack header from [[8913,0],1] is okay
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] waiting for connect ack from [[8913,0],1]
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] connect ack received from [[8913,0],1]
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] connect-ack version from [[8913,0],1] matches ours
</span><br>
<span class="quotelev1">&gt; [nid25257:09350] [[8913,0],0] ORTE_ERROR_LOG: Authentication failed in file ../../../../../orte/mca/oob/tcp/oob_tcp_connection.c at line 803
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 25 Mar 2015, at 16:49 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm&#226;&#128;&#166;well, it will generate some output, so keep the system down to two nodes if you can just to minimize the chatter. Add &#226;&#128;&#156;-mca oob_base_verbose 100&#226;&#128;&#157; to your cmd line
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 25, 2015, at 8:45 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is no OMPI in system space and PATH and LD_LIBRARY_PATH look good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any suggestion on how to get more relevant debugging info above the table?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mark
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 25 Mar 2015, at 16:33 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hey Mark
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your original error flag indicates that you are picking up a connection from some proc built against a different OMPI installation. It&#226;&#128;&#153;s a very low-level check that looks for matching version numbers. Not sure who is trying to connect, but that is the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Check you LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 25, 2015, at 7:46 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; turn off the disable getpwuid.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 25, 2015 8:14 AM, &quot;Mark Santcroos&quot; &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Howard,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 25 Mar 2015, at 14:58 , Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; How are you building ompi?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My configure is rather straightforward:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --prefix=$OMPI_PREFIX --disable-getpwuid
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maybe I got spoiled on Hopper/Edison and I need more explicit configuration on BW ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Also what happens if you use. aprun.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Not sure if you meant in combination with mpirun or not, so I'll provide both:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; aprun -n2 ./a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from rank 1, thread 0, on nid16869. (core affinity = 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from rank 0, thread 0, on nid16868. (core affinity = 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; After sleep from rank 1, thread 0, on nid16869. (core affinity = 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; After sleep from rank 0, thread 0, on nid16868. (core affinity = 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Application 23791589 resources: utime ~0s, stime ~2s, Rss ~27304, inblocks ~13229, outblocks ~66
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; aprun -n2 mpirun ./a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; apstat: error opening /ufs/alps_shared/reservations: No such file or directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; apstat: error opening /ufs/alps_shared/reservations: No such file or directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid16868:17876] [[699,0],0] ORTE_ERROR_LOG: File open failure in file ../../../../../orte/mca/ras/tm/ras_tm_module.c at line 159
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid16868:17876] [[699,0],0] ORTE_ERROR_LOG: File open failure in file ../../../../../orte/mca/ras/tm/ras_tm_module.c at line 85
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid16868:17876] [[699,0],0] ORTE_ERROR_LOG: File open failure in file ../../../../orte/mca/ras/base/ras_base_allocate.c at line 190
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid16869:17034] [[9344,0],0] ORTE_ERROR_LOG: File open failure in file ../../../../../orte/mca/ras/tm/ras_tm_module.c at line 159
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid16869:17034] [[9344,0],0] ORTE_ERROR_LOG: File open failure in file ../../../../../orte/mca/ras/tm/ras_tm_module.c at line 85
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid16869:17034] [[9344,0],0] ORTE_ERROR_LOG: File open failure in file ../../../../orte/mca/ras/base/ras_base_allocate.c at line 190
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Application 23791590 exit codes: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Application 23791590 resources: utime ~0s, stime ~2s, Rss ~27304, inblocks ~9596, outblocks ~478
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I work with ompi on the nersc edison and hopper daily.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I use Edison and Hopper too, and there it works for me indeed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; typically i use aprun though.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I want to use orte-submit and friends, so I &quot;explicitly&quot; don't want to use aprun.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you definitely dont need to use ccm.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and shouldnt.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Depends on the use-case, but happy to leave that out of scope for now :-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mark
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mar 25, 2015 6:00 AM, &quot;Mark Santcroos&quot; &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any users of Open MPI on Blue Waters here?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; And then I specifically mean in &quot;native&quot; mode, not inside CCM.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; After configuring and building as I do on other Cray's, mpirun gives me the following:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [nid25263:31700] [[23896,0],0] ORTE_ERROR_LOG: Authentication failed in file ../../../../../orte/mca/oob/tcp/oob_tcp_connection.c at line 803
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [nid25263:31700] [[23896,0],0] ORTE_ERROR_LOG: Authentication failed in file ../../../../../orte/mca/oob/tcp/oob_tcp_connection.c at line 803
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Version is the latest and greatest from git.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So I'm interested to hear whether people have been successful on Blue Waters and/or whether the error rings a bell for people.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Mark
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26505.php">http://www.open-mpi.org/community/lists/users/2015/03/26505.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26506.php">http://www.open-mpi.org/community/lists/users/2015/03/26506.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26507.php">http://www.open-mpi.org/community/lists/users/2015/03/26507.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26508.php">http://www.open-mpi.org/community/lists/users/2015/03/26508.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26510.php">http://www.open-mpi.org/community/lists/users/2015/03/26510.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26513.php">http://www.open-mpi.org/community/lists/users/2015/03/26513.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26514.php">http://www.open-mpi.org/community/lists/users/2015/03/26514.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26515.php">http://www.open-mpi.org/community/lists/users/2015/03/26515.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26517.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26515.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26515.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26517.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26517.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
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
