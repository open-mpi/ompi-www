<?
$subject_val = "Re: [OMPI users] open mpi on blue waters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 11:54:02 2015" -->
<!-- isoreceived="20150325155402" -->
<!-- sent="Wed, 25 Mar 2015 16:53:58 +0100" -->
<!-- isosent="20150325155358" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on blue waters" -->
<!-- id="178A48ED-FAB6-419C-94A2-2B62FC791D14_at_rutgers.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3833D5BC-1F15-4688-A0D5-A3FC9C03A92B_at_open-mpi.org" -->
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
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 11:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26518.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26516.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26516.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26518.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26518.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On 25 Mar 2015, at 16:52 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm&#226;&#128;&#166;okay, sorry to keep drilling down here, but let&#226;&#128;&#153;s try adding &#226;&#128;&#156;-mca sec_base_verbose 100&#226;&#128;&#157; now
</span><br>
<p><p><span class="quotelev1">&gt; /u/sciteam/marksant/openmpi/installation/bin/mpirun -mca oob_base_verbose 100 -mca sec_base_verbose 100 ./a.out 
</span><br>
[nid25257:09727] mca: base: components_register: registering sec components
<br>
[nid25257:09727] mca: base: components_register: found loaded component munge
<br>
[nid25257:09727] mca: base: components_register: component munge has no register or open function
<br>
[nid25257:09727] mca: base: components_register: found loaded component basic
<br>
[nid25257:09727] mca: base: components_register: component basic has no register or open function
<br>
[nid25257:09727] mca: base: components_open: opening sec components
<br>
[nid25257:09727] mca: base: components_open: found loaded component munge
<br>
[nid25257:09727] mca: base: components_open: component munge open function successful
<br>
[nid25257:09727] mca: base: components_open: found loaded component basic
<br>
[nid25257:09727] mca: base: components_open: component basic open function successful
<br>
[nid25257:09727] mca:sec:select: checking available component munge
<br>
[nid25257:09727] mca:sec:select: Querying component [munge]
<br>
[nid25257:09727] sec: munge init
<br>
[nid25257:09727] mca:sec:select: checking available component basic
<br>
[nid25257:09727] mca:sec:select: Querying component [basic]
<br>
[nid25257:09727] mca: base: components_register: registering oob components
<br>
[nid25257:09727] mca: base: components_register: found loaded component usock
<br>
[nid25257:09727] mca: base: components_register: component usock register function successful
<br>
[nid25257:09727] mca: base: components_register: found loaded component alps
<br>
[nid25257:09727] mca: base: components_register: component alps register function successful
<br>
[nid25257:09727] mca: base: components_register: found loaded component ud
<br>
[nid25257:09727] mca: base: components_register: component ud register function successful
<br>
[nid25257:09727] mca: base: components_register: found loaded component tcp
<br>
[nid25257:09727] mca: base: components_register: component tcp register function successful
<br>
[nid25257:09727] mca: base: components_open: opening oob components
<br>
[nid25257:09727] mca: base: components_open: found loaded component usock
<br>
[nid25257:09727] mca: base: components_open: component usock open function successful
<br>
[nid25257:09727] mca: base: components_open: found loaded component alps
<br>
[nid25257:09727] mca: base: components_open: component alps open function successful
<br>
[nid25257:09727] mca: base: components_open: found loaded component ud
<br>
[nid25257:09727] mca: base: components_open: component ud open function successful
<br>
[nid25257:09727] mca: base: components_open: found loaded component tcp
<br>
[nid25257:09727] mca: base: components_open: component tcp open function successful
<br>
[nid25257:09727] mca:oob:select: checking available component usock
<br>
[nid25257:09727] mca:oob:select: Querying component [usock]
<br>
[nid25257:09727] oob:usock: component_available called
<br>
[nid25257:09727] [[9128,0],0] USOCK STARTUP
<br>
[nid25257:09727] SUNPATH: /var/tmp/openmpi-sessions-45504_at_nid25257_0/9128/0/usock
<br>
[nid25257:09727] [[9128,0],0] START USOCK LISTENING ON /var/tmp/openmpi-sessions-45504_at_nid25257_0/9128/0/usock
<br>
[nid25257:09727] mca:oob:select: Adding component to end
<br>
[nid25257:09727] mca:oob:select: checking available component alps
<br>
[nid25257:09727] mca:oob:select: Querying component [alps]
<br>
[nid25257:09727] mca:oob:select: Skipping component [alps] - no available interfaces
<br>
[nid25257:09727] mca:oob:select: checking available component ud
<br>
[nid25257:09727] mca:oob:select: Querying component [ud]
<br>
[nid25257:09727] oob:ud: component_available called
<br>
[nid25257:09727] [[9128,0],0] oob:ud:component_init no devices found
<br>
[nid25257:09727] mca:oob:select: Skipping component [ud] - failed to startup
<br>
[nid25257:09727] mca:oob:select: checking available component tcp
<br>
[nid25257:09727] mca:oob:select: Querying component [tcp]
<br>
[nid25257:09727] oob:tcp: component_available called
<br>
[nid25257:09727] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[nid25257:09727] [[9128,0],0] oob:tcp:init rejecting loopback interface lo
<br>
[nid25257:09727] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
<br>
[nid25257:09727] [[9128,0],0] oob:tcp:init rejecting loopback interface lo
<br>
[nid25257:09727] WORKING INTERFACE 3 KERNEL INDEX 3 FAMILY: V4
<br>
[nid25257:09727] [[9128,0],0] oob:tcp:init adding 10.128.99.112 to our list of V4 connections
<br>
[nid25257:09727] [[9128,0],0] TCP STARTUP
<br>
[nid25257:09727] [[9128,0],0] attempting to bind to IPv4 port 0
<br>
[nid25257:09727] [[9128,0],0] assigned IPv4 port 60755
<br>
[nid25257:09727] mca:oob:select: Adding component to end
<br>
[nid25257:09727] mca:oob:select: Found 2 active transports
<br>
[nid25257:09727] [[9128,0],0] mca_oob_tcp_listen_thread: new connection: (16, 0) 10.128.69.144:41619
<br>
[nid25257:09727] [[9128,0],0] connection_handler: working connection (16, 2) 10.128.69.144:41619
<br>
[nid25257:09727] [[9128,0],0] accept_connection: 10.128.69.144:41619
<br>
[nid25257:09727] [[9128,0],0]:tcp:recv:handler called
<br>
[nid25257:09727] [[9128,0],0] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 16
<br>
[nid25257:09727] [[9128,0],0] waiting for connect ack from UNKNOWN
<br>
[nid25257:09727] [[9128,0],0] connect ack received from UNKNOWN
<br>
[nid25257:09727] [[9128,0],0] connect-ack recvd from UNKNOWN
<br>
[nid25257:09727] [[9128,0],0] mca_oob_tcp_recv_connect: connection from new peer
<br>
[nid25257:09727] [[9128,0],0] connect-ack header from [[9128,0],2] is okay
<br>
[nid25257:09727] [[9128,0],0] waiting for connect ack from [[9128,0],2]
<br>
[nid25257:09727] [[9128,0],0] connect ack received from [[9128,0],2]
<br>
[nid25257:09727] [[9128,0],0] connect-ack version from [[9128,0],2] matches ours
<br>
[nid25257:09727] sec: munge validate_cred 12345
<br>
[nid25257:09727] sec: munge failed to decode credential: Invalid credential format
<br>
[nid25257:09727] [[9128,0],0] ORTE_ERROR_LOG: Authentication failed in file ../../../../../orte/mca/oob/tcp/oob_tcp_connection.c at line 803
<br>
[nid25257:09727] [[9128,0],0] mca_oob_tcp_listen_thread: new connection: (17, 11) 10.128.69.143:34369
<br>
[nid25257:09727] [[9128,0],0] connection_handler: working connection (17, 0) 10.128.69.143:34369
<br>
[nid25257:09727] [[9128,0],0] accept_connection: 10.128.69.143:34369
<br>
[nid25257:09727] [[9128,0],0]:tcp:recv:handler called
<br>
[nid25257:09727] [[9128,0],0] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 17
<br>
[nid25257:09727] [[9128,0],0] waiting for connect ack from UNKNOWN
<br>
[nid25257:09727] [[9128,0],0] connect ack received from UNKNOWN
<br>
[nid25257:09727] [[9128,0],0] connect-ack recvd from UNKNOWN
<br>
[nid25257:09727] [[9128,0],0] mca_oob_tcp_recv_connect: connection from new peer
<br>
[nid25257:09727] [[9128,0],0] connect-ack header from [[9128,0],1] is okay
<br>
[nid25257:09727] [[9128,0],0] waiting for connect ack from [[9128,0],1]
<br>
[nid25257:09727] [[9128,0],0] connect ack received from [[9128,0],1]
<br>
[nid25257:09727] [[9128,0],0] connect-ack version from [[9128,0],1] matches ours
<br>
[nid25257:09727] sec: munge validate_cred 12345
<br>
[nid25257:09727] sec: munge failed to decode credential: Invalid credential format
<br>
[nid25257:09727] [[9128,0],0] ORTE_ERROR_LOG: Authentication failed in file ../../../../../orte/mca/oob/tcp/oob_tcp_connection.c at line 803
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26518.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26516.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26516.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26518.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26518.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
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
