<?
$subject_val = "Re: [OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 11:27:30 2014" -->
<!-- isoreceived="20141112162730" -->
<!-- sent="Wed, 12 Nov 2014 17:27:17 +0100" -->
<!-- isosent="20141112162717" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="FA3C7359-9541-4763-B5AB-DF22440FE41D_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EDCAC5CA-F550-4488-9B75-9D7D1E92745E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How OMPI picks ethernet interfaces<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 11:27:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25778.php">Nathan Hjelm: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25776.php">Ralph Castain: "[OMPI users] 1.8.4 release delayed"</a>
<li><strong>In reply to:</strong> <a href="25739.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25781.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25781.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 11.11.2014 um 02:25 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; Another thing you can do is (a) ensure you built with &#151;enable-debug, and then (b) run it with -mca oob_base_verbose 100  (without the tcp_if_include option) so we can watch the connection handshake and see what it is doing. The &#151;hetero-nodes will have not affect here and can be ignored.
</span><br>
<p>Done. It really tries to connect to the outside interface of the headnode. But being there a firewall or not: the nodes have no clue how to reach 137.248.0.0 - they have no gateway to this network at all.
<br>
<p>It tries so independent from the internal or external name of the headnode given in the machinefile - I hit ^C then. I attached the output of Open MPI 1.8.1 for this setup too.
<br>
<p>-- Reuti
<br>
<p><p>
<p>
Wed Nov 12 16:43:12 CET 2014
<br>
[annemarie:01246] mca: base: components_register: registering oob components
<br>
[annemarie:01246] mca: base: components_register: found loaded component tcp
<br>
[annemarie:01246] mca: base: components_register: component tcp register function successful
<br>
[annemarie:01246] mca: base: components_open: opening oob components
<br>
[annemarie:01246] mca: base: components_open: found loaded component tcp
<br>
[annemarie:01246] mca: base: components_open: component tcp open function successful
<br>
[annemarie:01246] mca:oob:select: checking available component tcp
<br>
[annemarie:01246] mca:oob:select: Querying component [tcp]
<br>
[annemarie:01246] oob:tcp: component_available called
<br>
[annemarie:01246] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[annemarie:01246] [[37241,0],0] oob:tcp:init rejecting loopback interface lo
<br>
[annemarie:01246] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
<br>
[annemarie:01246] [[37241,0],0] oob:tcp:init adding 137.248.x.y to our list of V4 connections
<br>
[annemarie:01246] WORKING INTERFACE 3 KERNEL INDEX 3 FAMILY: V4
<br>
[annemarie:01246] [[37241,0],0] oob:tcp:init adding 192.168.154.30 to our list of V4 connections
<br>
[annemarie:01246] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
<br>
[annemarie:01246] [[37241,0],0] oob:tcp:init adding 192.168.154.187 to our list of V4 connections
<br>
[annemarie:01246] [[37241,0],0] TCP STARTUP
<br>
[annemarie:01246] [[37241,0],0] attempting to bind to IPv4 port 0
<br>
[annemarie:01246] [[37241,0],0] assigned IPv4 port 53661
<br>
[annemarie:01246] mca:oob:select: Adding component to end
<br>
[annemarie:01246] mca:oob:select: Found 1 active transports
<br>
[node28:05663] mca: base: components_register: registering oob components
<br>
[node28:05663] mca: base: components_register: found loaded component tcp
<br>
[node28:05663] mca: base: components_register: component tcp register function successful
<br>
[node28:05663] mca: base: components_open: opening oob components
<br>
[node28:05663] mca: base: components_open: found loaded component tcp
<br>
[node28:05663] mca: base: components_open: component tcp open function successful
<br>
[node28:05663] mca:oob:select: checking available component tcp
<br>
[node28:05663] mca:oob:select: Querying component [tcp]
<br>
[node28:05663] oob:tcp: component_available called
<br>
[node28:05663] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[node28:05663] [[37241,0],1] oob:tcp:init rejecting loopback interface lo
<br>
[node28:05663] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
<br>
[node28:05663] [[37241,0],1] oob:tcp:init adding 192.168.154.28 to our list of V4 connections
<br>
[node28:05663] WORKING INTERFACE 3 KERNEL INDEX 3 FAMILY: V4
<br>
[node28:05663] [[37241,0],1] oob:tcp:init adding 192.168.154.98 to our list of V4 connections
<br>
[node28:05663] [[37241,0],1] TCP STARTUP
<br>
[node28:05663] [[37241,0],1] attempting to bind to IPv4 port 0
<br>
[node28:05663] [[37241,0],1] assigned IPv4 port 45802
<br>
[node28:05663] mca:oob:select: Adding component to end
<br>
[node28:05663] mca:oob:select: Found 1 active transports
<br>
[node28:05663] [[37241,0],1]: set_addr to uri 2440626176.0;tcp://137.248.x.y,192.168.154.30,192.168.154.187:53661
<br>
[node28:05663] [[37241,0],1]:set_addr checking if peer [[37241,0],0] is reachable via component tcp
<br>
[node28:05663] [[37241,0],1] oob:tcp: working peer [[37241,0],0] address tcp://137.248.x.y,192.168.154.30,192.168.154.187:53661
<br>
[node28:05663] [[37241,0],1] PASSING ADDR 137.248.x.y TO MODULE
<br>
[node28:05663] [[37241,0],1]:tcp set addr for peer [[37241,0],0]
<br>
[node28:05663] [[37241,0],1] PASSING ADDR 192.168.154.30 TO MODULE
<br>
[node28:05663] [[37241,0],1]:tcp set addr for peer [[37241,0],0]
<br>
[node28:05663] [[37241,0],1] PASSING ADDR 192.168.154.187 TO MODULE
<br>
[node28:05663] [[37241,0],1]:tcp set addr for peer [[37241,0],0]
<br>
[node28:05663] [[37241,0],1]: peer [[37241,0],0] is reachable via component tcp
<br>
[node28:05663] [[37241,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:05663] [[37241,0],1]:tcp:processing set_peer cmd
<br>
[node28:05663] [[37241,0],1] SET_PEER ADDING PEER [[37241,0],0]
<br>
[node28:05663] [[37241,0],1] set_peer: peer [[37241,0],0] is listening on net 137.248.x.y port 53661
<br>
[node28:05663] [[37241,0],1]:tcp:processing set_peer cmd
<br>
[node28:05663] [[37241,0],1] set_peer: peer [[37241,0],0] is listening on net 192.168.154.30 port 53661
<br>
[node28:05663] [[37241,0],1]:tcp:processing set_peer cmd
<br>
[node28:05663] [[37241,0],1] set_peer: peer [[37241,0],0] is listening on net 192.168.154.187 port 53661
<br>
[node28:05663] [[37241,0],1] oob:base:send to target [[37241,0],0]
<br>
[node28:05663] [[37241,0],1] oob:tcp:send_nb to peer [[37241,0],0]:10
<br>
[node28:05663] [[37241,0],1] tcp:send_nb to peer [[37241,0],0]
<br>
[node28:05663] [[37241,0],1]:[oob_tcp.c:478] post send to [[37241,0],0]
<br>
[node28:05663] [[37241,0],1]:[oob_tcp.c:415] processing send to peer [[37241,0],0]:10
<br>
[node28:05663] [[37241,0],1]:[oob_tcp.c:449] queue pending to [[37241,0],0]
<br>
[node28:05663] [[37241,0],1] tcp:send_nb: initiating connection to [[37241,0],0]
<br>
[node28:05663] [[37241,0],1]:[oob_tcp.c:463] connect to [[37241,0],0]
<br>
[node28:05663] [[37241,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[37241,0],0]
<br>
[node28:05663] [[37241,0],1] oob:tcp:peer creating socket to [[37241,0],0]
<br>
[node28:05663] [[37241,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[37241,0],0] on socket 9
<br>
[node28:05663] [[37241,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[37241,0],0] on 137.248.x.y:53661 - 0 retries
<br>
[node28:05663] [[37241,0],1] waiting for connect completion to [[37241,0],0] - activating send event
<br>
^CKilled by signal 2.
<br>
[annemarie:01246] [[37241,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:01246] [[37241,0],0] oob:base:send to target [[37241,0],1]
<br>
[annemarie:01246] [[37241,0],0] oob:base:send unknown peer [[37241,0],1]
<br>
[annemarie:01246] [[37241,0],0] oob:tcp:send_nb to peer [[37241,0],1]:15
<br>
[annemarie:01246] [[37241,0],0] tcp:send_nb to peer [[37241,0],1]
<br>
[annemarie:01246] [[37241,0],0]:[oob_tcp.c:478] post send to [[37241,0],1]
<br>
[annemarie:01246] [[37241,0],0]:[oob_tcp.c:415] processing send to peer [[37241,0],1]:15
<br>
[annemarie:01246] [[37241,0],0]:[oob_tcp.c:430] hop [[37241,0],1] unknown
<br>
[annemarie:01246] [[37241,0],0]:[oob_tcp.c:432] post no route to [[37241,0],1]
<br>
[annemarie:01246] [[37241,0],0] tcp:no route called for peer [[37241,0],1]
<br>
[annemarie:01246] [[37241,0],0] TCP SHUTDOWN
<br>
[annemarie:01246] mca: base: close: component tcp closed
<br>
[annemarie:01246] mca: base: close: unloading component tcp
<br>
<p>
<p>
reuti_at_annemarie:~&gt; date; mpiexec --mca oob_base_verbose 100 --hostfile machines ./mpihello; dateWed Nov 12 17:23:46 CET 2014
<br>
[annemarie:10704] mca: base: components_register: registering oob components
<br>
[annemarie:10704] mca: base: components_register: found loaded component tcp
<br>
[annemarie:10704] mca: base: components_register: component tcp register function successful
<br>
[annemarie:10704] mca: base: components_open: opening oob components
<br>
[annemarie:10704] mca: base: components_open: found loaded component tcp
<br>
[annemarie:10704] mca: base: components_open: component tcp open function successful
<br>
[annemarie:10704] mca:oob:select: checking available component tcp
<br>
[annemarie:10704] mca:oob:select: Querying component [tcp]
<br>
[annemarie:10704] oob:tcp: component_available called
<br>
[annemarie:10704] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:init rejecting loopback interface lo
<br>
[annemarie:10704] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:init creating module for V4 address on interface eth0
<br>
[annemarie:10704] [[48247,0],0] creating OOB-TCP module for interface eth0
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:init adding 137.248.x.y to our list of V4 connections
<br>
[annemarie:10704] WORKING INTERFACE 3 KERNEL INDEX 3 FAMILY: V4
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:init creating module for V4 address on interface eth1
<br>
[annemarie:10704] [[48247,0],0] creating OOB-TCP module for interface eth1
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:init adding 192.168.154.30 to our list of V4 connections
<br>
[annemarie:10704] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:init creating module for V4 address on interface eth3
<br>
[annemarie:10704] [[48247,0],0] creating OOB-TCP module for interface eth3
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:init adding 192.168.154.187 to our list of V4 connections
<br>
[annemarie:10704] [[48247,0],0] TCP STARTUP
<br>
[annemarie:10704] [[48247,0],0] attempting to bind to IPv4 port 0
<br>
[annemarie:10704] [[48247,0],0] assigned IPv4 port 34790
<br>
[annemarie:10704] mca:oob:select: Adding component to end
<br>
[annemarie:10704] mca:oob:select: Found 1 active transports
<br>
[node28:09503] mca: base: components_register: registering oob components
<br>
[node28:09503] mca: base: components_register: found loaded component tcp
<br>
[node28:09503] mca: base: components_register: component tcp register function successful
<br>
[node28:09503] mca: base: components_open: opening oob components
<br>
[node28:09503] mca: base: components_open: found loaded component tcp
<br>
[node28:09503] mca: base: components_open: component tcp open function successful
<br>
[node28:09503] mca:oob:select: checking available component tcp
<br>
[node28:09503] mca:oob:select: Querying component [tcp]
<br>
[node28:09503] oob:tcp: component_available called
<br>
[node28:09503] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[node28:09503] [[48247,0],1] oob:tcp:init rejecting loopback interface lo
<br>
[node28:09503] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
<br>
[node28:09503] [[48247,0],1] oob:tcp:init creating module for V4 address on interface eth0
<br>
[node28:09503] [[48247,0],1] creating OOB-TCP module for interface eth0
<br>
[node28:09503] [[48247,0],1] oob:tcp:init adding 192.168.154.28 to our list of V4 connections
<br>
[node28:09503] WORKING INTERFACE 3 KERNEL INDEX 3 FAMILY: V4
<br>
[node28:09503] [[48247,0],1] oob:tcp:init creating module for V4 address on interface eth1
<br>
[node28:09503] [[48247,0],1] creating OOB-TCP module for interface eth1
<br>
[node28:09503] [[48247,0],1] oob:tcp:init adding 192.168.154.98 to our list of V4 connections
<br>
[node28:09503] [[48247,0],1] TCP STARTUP
<br>
[node28:09503] [[48247,0],1] attempting to bind to IPv4 port 0
<br>
[node28:09503] [[48247,0],1] assigned IPv4 port 37727
<br>
[node28:09503] mca:oob:select: Adding component to end
<br>
[node28:09503] mca:oob:select: Found 1 active transports
<br>
[annemarie:10704] [[48247,0],0] mca_oob_tcp_listen_thread: new connection: (12, 0) 192.168.154.28:54525
<br>
[node28:09503] [[48247,0],1]: set_addr to uri 3161915392.0;tcp://137.248.x.y,192.168.154.30,192.168.154.187:34790
<br>
[node28:09503] [[48247,0],1]:set_addr checking if peer [[48247,0],0] is reachable via component tcp
<br>
[node28:09503] [[48247,0],1] oob:tcp: working peer [[48247,0],0] address tcp://137.248.x.y,192.168.154.30,192.168.154.187:34790
<br>
[node28:09503] [[48247,0],1] UNFOUND KERNEL INDEX -13 FOR ADDRESS 137.248.x.y
<br>
[node28:09503] [[48247,0],1] PEER [[48247,0],0] MAY BE REACHABLE USING MODULE AT KINDEX 2 INTERFACE eth0
<br>
[node28:09503] [[48247,0],1] PASSING ADDR 192.168.154.30 TO INTERFACE eth0 AT KERNEL INDEX 2
<br>
[node28:09503] [[48247,0],1]:tcp set addr for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] UNFOUND KERNEL INDEX -13 FOR ADDRESS 192.168.154.187
<br>
[node28:09503] [[48247,0],1]: peer [[48247,0],0] is reachable via component tcp
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1]:tcp:processing set_peer cmd for interface eth0
<br>
[node28:09503] [[48247,0],1] SET_PEER ADDING PEER [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] set_peer: peer [[48247,0],0] is listening on interface eth0 net 192.168.154.30 port 34790
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:10
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:10
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:476] queue pending to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: initiating connection to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:490] connect to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48247,0],0] via interface eth0
<br>
[node28:09503] [[48247,0],1] oob:tcp:peer creating socket to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48247,0],0] via interface eth0 on socket 9
<br>
[node28:09503] [[48247,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48247,0],0] on 192.168.154.30:34790 - 0 retries
<br>
[node28:09503] [[48247,0],1] waiting for connect completion to [[48247,0],0] - activating send event
<br>
[annemarie:10704] [[48247,0],0] connection_handler: working connection (12, 0) 192.168.154.28:54525
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler CONNECTING
<br>
[node28:09503] [[48247,0],1]:tcp:complete_connect called for peer [[48247,0],0] on socket 9
<br>
[node28:09503] [[48247,0],1] tcp_peer_complete_connect: sending ack to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] SEND CONNECT ACK
<br>
[node28:09503] [[48247,0],1] send blocking of 40 bytes to socket 9
<br>
[node28:09503] [[48247,0],1] connect-ack sent to socket 9
<br>
[node28:09503] [[48247,0],1] tcp_peer_complete_connect: setting read event on connection to [[48247,0],0]
<br>
[annemarie:10704] [[48247,0],0] accept_connection: 192.168.154.28:54525
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called
<br>
[annemarie:10704] [[48247,0],0] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 12
<br>
[annemarie:10704] [[48247,0],0] waiting for connect ack from UNKNOWN
<br>
[annemarie:10704] [[48247,0],0] connect ack received from UNKNOWN
<br>
[annemarie:10704] [[48247,0],0] connect-ack recvd from UNKNOWN
<br>
[annemarie:10704] [[48247,0],0] mca_oob_tcp_recv_connect: connection from new peer
<br>
[annemarie:10704] [[48247,0],0] connect-ack header from [[48247,0],1] is okay
<br>
[annemarie:10704] [[48247,0],0] waiting for connect ack from [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] connect ack received from [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] connect-ack version from [[48247,0],1] matches ours
<br>
[annemarie:10704] [[48247,0],0] connect-ack [[48247,0],1] authenticated
<br>
[annemarie:10704] [[48247,0],0] tcp:peer_accept called for peer [[48247,0],1] in state UNKNOWN on socket 12
<br>
[annemarie:10704] [[48247,0],0] SEND CONNECT ACK
<br>
[annemarie:10704] [[48247,0],0] send blocking of 40 bytes to socket 12
<br>
[annemarie:10704] [[48247,0],0] connect-ack sent to socket 12
<br>
[annemarie:10704] [[48247,0],0]-[[48247,0],1] tcp_peer_connected on socket 12
<br>
[annemarie:10704] [[48247,0],0]-[[48247,0],1] accepted: 192.168.154.30 - 192.168.154.28 nodelay 0 sndbuf 262144 rcvbuf 262144 flags 00000802
<br>
[annemarie:10704] [[48247,0],0] tcp:set_module called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] RECV CONNECT ACK FROM [[48247,0],0] ON SOCKET 9
<br>
[node28:09503] [[48247,0],1] waiting for connect ack from [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] connect ack received from [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] connect-ack recvd from [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] connect-ack header from [[48247,0],0] is okay
<br>
[node28:09503] [[48247,0],1] waiting for connect ack from [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] connect ack received from [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] connect-ack version from [[48247,0],0] matches ours
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 28708
<br>
[node28:09503] [[48247,0],1] connect-ack [[48247,0],0] authenticated
<br>
[node28:09503] [[48247,0],1]-[[48247,0],0] tcp_peer_connected on socket 9
<br>
[node28:09503] [[48247,0],1]-[[48247,0],0] connected: 192.168.154.28 - 192.168.154.30 nodelay 0 sndbuf 262144 rcvbuf 262144 flags 00000802
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler starting send/recv events
<br>
[node28:09503] [[48247,0],1] tcp:set_module called for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 28708 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 28708 BYTES FOR DEST [[48247,0],0] TAG 10
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]: set_addr to uri 3161915392.1;tcp://192.168.154.28,192.168.154.98:37727
<br>
[annemarie:10704] [[48247,0],0]:set_addr checking if peer [[48247,0],1] is reachable via component tcp
<br>
[annemarie:10704] [[48247,0],0] oob:tcp: working peer [[48247,0],1] address tcp://192.168.154.28,192.168.154.98:37727
<br>
[annemarie:10704] [[48247,0],0] PEER [[48247,0],1] MAY BE REACHABLE USING MODULE AT KINDEX 3 INTERFACE eth1
<br>
[annemarie:10704] [[48247,0],0] PASSING ADDR 192.168.154.28 TO INTERFACE eth1 AT KERNEL INDEX 3
<br>
[annemarie:10704] [[48247,0],0]:tcp set addr for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] UNFOUND KERNEL INDEX -13 FOR ADDRESS 192.168.154.98
<br>
[annemarie:10704] [[48247,0],0]: peer [[48247,0],1] is reachable via component tcp
<br>
[annemarie:10704] [[48247,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10704] [[48247,0],0]:tcp:processing set_peer cmd for interface eth1
<br>
[annemarie:10704] [[48247,0],0] set_peer: peer [[48247,0],1] is listening on interface eth1 net 192.168.154.28 port 37727
<br>
[annemarie:10704] [[48247,0],0] oob:base:send to target [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] oob:base:send known transport for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:send_nb to peer [[48247,0],1]:1
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb to peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:508] post send to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:442] processing send to peer [[48247,0],1]:1
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb: already connected to [[48247,0],1] - queueing for send
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:469] queue send to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler called to send to peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler SENDING TO [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] MESSAGE SEND COMPLETE TO [[48247,0],1] OF 119 BYTES ON SOCKET 12
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate data region of size 119
<br>
[annemarie:10704] [[48247,0],0]: set_addr to uri 3161915392.0;tcp://137.248.x.y,192.168.154.30,192.168.154.187:34790
<br>
[annemarie:10704] [[48247,0],0]:set_addr peer [[48247,0],0] is me
<br>
[annemarie:10704] [[48247,0],0]: set_addr to uri 3161915392.1;tcp://192.168.154.28,192.168.154.98:37727
<br>
[annemarie:10704] [[48247,0],0]:set_addr checking if peer [[48247,0],1] is reachable via component tcp
<br>
[annemarie:10704] [[48247,0],0] oob:tcp: working peer [[48247,0],1] address tcp://192.168.154.28,192.168.154.98:37727
<br>
[annemarie:10704] [[48247,0],0] PEER [[48247,0],1] MAY BE REACHABLE USING MODULE AT KINDEX 3 INTERFACE eth1
<br>
[annemarie:10704] [[48247,0],0] PASSING ADDR 192.168.154.28 TO INTERFACE eth1 AT KERNEL INDEX 3
<br>
[annemarie:10704] [[48247,0],0]:tcp set addr for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] UNFOUND KERNEL INDEX -13 FOR ADDRESS 192.168.154.98
<br>
[annemarie:10704] [[48247,0],0]: peer [[48247,0],1] is reachable via component tcp
<br>
[annemarie:10704] [[48247,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10704] [[48247,0],0]:tcp:processing set_peer cmd for interface eth1
<br>
[annemarie:10704] [[48247,0],0] oob:base:send to target [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] oob:base:send known transport for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:send_nb to peer [[48247,0],1]:15
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb to peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:508] post send to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:442] processing send to peer [[48247,0],1]:15
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb: already connected to [[48247,0],1] - queueing for send
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:469] queue send to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler called to send to peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler SENDING TO [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] MESSAGE SEND COMPLETE TO [[48247,0],1] OF 1048 BYTES ON SOCKET 12
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1] RECVD COMPLETE MESSAGE FROM [[48247,0],0] (ORIGIN [[48247,0],0]) OF 119 BYTES FOR DEST [[48247,0],1] TAG 1
<br>
[node28:09503] [[48247,0],1] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate data region of size 1048
<br>
[node28:09503] [[48247,0],1] RECVD COMPLETE MESSAGE FROM [[48247,0],0] (ORIGIN [[48247,0],0]) OF 1048 BYTES FOR DEST [[48247,0],1] TAG 15
<br>
[node28:09503] [[48247,0],1] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1]: set_addr to uri 3161915392.0;tcp://137.248.x.y,192.168.154.30,192.168.154.187:34790
<br>
[node28:09503] [[48247,0],1]:set_addr checking if peer [[48247,0],0] is reachable via component tcp
<br>
[node28:09503] [[48247,0],1] oob:tcp: working peer [[48247,0],0] address tcp://137.248.x.y,192.168.154.30,192.168.154.187:34790
<br>
[node28:09503] [[48247,0],1] UNFOUND KERNEL INDEX -13 FOR ADDRESS 137.248.x.y
<br>
[node28:09503] [[48247,0],1] PEER [[48247,0],0] MAY BE REACHABLE USING MODULE AT KINDEX 2 INTERFACE eth0
<br>
[node28:09503] [[48247,0],1] PASSING ADDR 192.168.154.30 TO INTERFACE eth0 AT KERNEL INDEX 2
<br>
[node28:09503] [[48247,0],1]:tcp set addr for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] UNFOUND KERNEL INDEX -13 FOR ADDRESS 192.168.154.187
<br>
[node28:09503] [[48247,0],1]: peer [[48247,0],0] is reachable via component tcp
<br>
[node28:09503] [[48247,0],1]: set_addr to uri 3161915392.1;tcp://192.168.154.28,192.168.154.98:37727
<br>
[node28:09503] [[48247,0],1]:set_addr peer [[48247,0],1] is me
<br>
[node28:09503] [[48247,0],1]:tcp:processing set_peer cmd for interface eth0
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:5
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:5
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 73 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 73
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 73 BYTES FOR DEST [[48247,0],0] TAG 5
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10709] mca: base: components_register: registering oob components
<br>
[annemarie:10709] mca: base: components_register: found loaded component tcp
<br>
[annemarie:10709] mca: base: components_register: component tcp register function successful
<br>
[annemarie:10709] mca: base: components_open: opening oob components
<br>
[annemarie:10709] mca: base: components_open: found loaded component tcp
<br>
[annemarie:10709] mca: base: components_open: component tcp open function successful
<br>
[annemarie:10709] mca:oob:select: checking available component tcp
<br>
[annemarie:10709] mca:oob:select: Querying component [tcp]
<br>
[annemarie:10709] oob:tcp: component_available called
<br>
[annemarie:10709] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[annemarie:10709] [[48247,1],0] oob:tcp:init rejecting loopback interface lo
<br>
[annemarie:10709] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
<br>
[annemarie:10709] [[48247,1],0] oob:tcp:init creating module for V4 address on interface eth0
<br>
[annemarie:10709] [[48247,1],0] creating OOB-TCP module for interface eth0
<br>
[annemarie:10709] [[48247,1],0] oob:tcp:init adding 137.248.x.y to our list of V4 connections
<br>
[annemarie:10709] WORKING INTERFACE 3 KERNEL INDEX 3 FAMILY: V4
<br>
[annemarie:10709] [[48247,1],0] oob:tcp:init creating module for V4 address on interface eth1
<br>
[annemarie:10709] [[48247,1],0] creating OOB-TCP module for interface eth1
<br>
[annemarie:10709] [[48247,1],0] oob:tcp:init adding 192.168.154.30 to our list of V4 connections
<br>
[annemarie:10709] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
<br>
[annemarie:10709] [[48247,1],0] oob:tcp:init creating module for V4 address on interface eth3
<br>
[annemarie:10709] [[48247,1],0] creating OOB-TCP module for interface eth3
<br>
[annemarie:10709] [[48247,1],0] oob:tcp:init adding 192.168.154.187 to our list of V4 connections
<br>
[annemarie:10709] [[48247,1],0] TCP STARTUP
<br>
[annemarie:10709] [[48247,1],0] attempting to bind to IPv4 port 0
<br>
[annemarie:10709] [[48247,1],0] assigned IPv4 port 48617
<br>
[annemarie:10709] mca:oob:select: Adding component to end
<br>
[annemarie:10709] mca:oob:select: Found 1 active transports
<br>
[annemarie:10709] [[48247,1],0]: set_addr to uri 3161915392.0;tcp://137.248.x.y,192.168.154.30,192.168.154.187:34790
<br>
[annemarie:10709] [[48247,1],0]:set_addr checking if peer [[48247,0],0] is reachable via component tcp
<br>
[annemarie:10709] [[48247,1],0] oob:tcp: working peer [[48247,0],0] address tcp://137.248.x.y,192.168.154.30,192.168.154.187:34790
<br>
[annemarie:10709] [[48247,1],0] PEER [[48247,0],0] MAY BE REACHABLE USING MODULE AT KINDEX 2 INTERFACE eth0
<br>
[annemarie:10709] [[48247,1],0] PASSING ADDR 137.248.x.y TO INTERFACE eth0 AT KERNEL INDEX 2
<br>
[annemarie:10709] [[48247,1],0]:tcp set addr for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] PEER [[48247,0],0] MAY BE REACHABLE USING MODULE AT KINDEX 3 INTERFACE eth1
<br>
[annemarie:10709] [[48247,1],0] PASSING ADDR 192.168.154.30 TO INTERFACE eth1 AT KERNEL INDEX 3
<br>
[annemarie:10709] [[48247,1],0]:tcp set addr for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] PEER [[48247,0],0] MAY BE REACHABLE USING MODULE AT KINDEX 5 INTERFACE eth3
<br>
[annemarie:10709] [[48247,1],0] PASSING ADDR 192.168.154.187 TO INTERFACE eth3 AT KERNEL INDEX 5
<br>
[annemarie:10709] [[48247,1],0]:tcp set addr for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]: peer [[48247,0],0] is reachable via component tcp
<br>
[annemarie:10709] [[48247,1],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10709] [[48247,1],0]:tcp:processing set_peer cmd for interface eth0
<br>
[annemarie:10709] [[48247,1],0] SET_PEER ADDING PEER [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] set_peer: peer [[48247,0],0] is listening on interface eth0 net 137.248.x.y port 34790
<br>
[annemarie:10709] [[48247,1],0]:tcp:processing set_peer cmd for interface eth1
<br>
[annemarie:10709] [[48247,1],0] SET_PEER ADDING PEER [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] set_peer: peer [[48247,0],0] is listening on interface eth1 net 192.168.154.30 port 34790
<br>
[annemarie:10709] [[48247,1],0]:tcp:processing set_peer cmd for interface eth3
<br>
[annemarie:10709] [[48247,1],0] SET_PEER ADDING PEER [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] set_peer: peer [[48247,0],0] is listening on interface eth3 net 192.168.154.187 port 34790
<br>
[annemarie:10709] [[48247,1],0] oob:base:send to target [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] oob:tcp:send_nb to peer [[48247,0],0]:1
<br>
[annemarie:10709] [[48247,1],0] tcp:send_nb to peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:1
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:476] queue pending to [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] tcp:send_nb: initiating connection to [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:490] connect to [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] orte_tcp_peer_try_connect: attempting to connect to proc [[48247,0],0] via interface eth0
<br>
[annemarie:10709] [[48247,1],0] oob:tcp:peer creating socket to [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] orte_tcp_peer_try_connect: attempting to connect to proc [[48247,0],0] via interface eth0 on socket 11
<br>
[annemarie:10709] [[48247,1],0] orte_tcp_peer_try_connect: attempting to connect to proc [[48247,0],0] on 137.248.x.y:34790 - 0 retries
<br>
[annemarie:10704] [[48247,0],0] mca_oob_tcp_listen_thread: new connection: (14, 11) 137.248.x.y:43308
<br>
[annemarie:10704] [[48247,0],0] connection_handler: working connection (14, 11) 137.248.x.y:43308
<br>
[annemarie:10704] [[48247,0],0] accept_connection: 137.248.x.y:43308
<br>
[annemarie:10709] [[48247,1],0] waiting for connect completion to [[48247,0],0] - activating send event
<br>
[annemarie:10709] [[48247,1],0] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] tcp:send_handler CONNECTING
<br>
[annemarie:10709] [[48247,1],0]:tcp:complete_connect called for peer [[48247,0],0] on socket 11
<br>
[annemarie:10709] [[48247,1],0] tcp_peer_complete_connect: sending ack to [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] SEND CONNECT ACK
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called
<br>
[annemarie:10704] [[48247,0],0] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 14
<br>
[annemarie:10704] [[48247,0],0] waiting for connect ack from UNKNOWN
<br>
[annemarie:10704] [[48247,0],0] connect ack received from UNKNOWN
<br>
[annemarie:10704] [[48247,0],0] connect-ack recvd from UNKNOWN
<br>
[annemarie:10704] [[48247,0],0] mca_oob_tcp_recv_connect: connection from new peer
<br>
[annemarie:10704] [[48247,0],0] connect-ack header from [[48247,1],0] is okay
<br>
[annemarie:10704] [[48247,0],0] waiting for connect ack from [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] connect ack received from [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] connect-ack version from [[48247,1],0] matches ours
<br>
[annemarie:10704] [[48247,0],0] connect-ack [[48247,1],0] authenticated
<br>
[annemarie:10704] [[48247,0],0] tcp:peer_accept called for peer [[48247,1],0] in state UNKNOWN on socket 14
<br>
[annemarie:10704] [[48247,0],0] SEND CONNECT ACK
<br>
[annemarie:10704] [[48247,0],0] send blocking of 40 bytes to socket 14
<br>
[annemarie:10704] [[48247,0],0] connect-ack sent to socket 14
<br>
[annemarie:10704] [[48247,0],0]-[[48247,1],0] tcp_peer_connected on socket 14
<br>
[annemarie:10704] [[48247,0],0]-[[48247,1],0] accepted: 137.248.x.y - 137.248.x.y nodelay 0 sndbuf 262144 rcvbuf 262144 flags 00000802
<br>
[annemarie:10709] [[48247,1],0] send blocking of 40 bytes to socket 11
<br>
[annemarie:10709] [[48247,1],0] connect-ack sent to socket 11
<br>
[annemarie:10709] [[48247,1],0] tcp_peer_complete_connect: setting read event on connection to [[48247,0],0]
<br>
[annemarie:10704] [[48247,0],0] tcp:set_module called for peer [[48247,1],0]
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] RECV CONNECT ACK FROM [[48247,0],0] ON SOCKET 11
<br>
[annemarie:10709] [[48247,1],0] waiting for connect ack from [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] connect ack received from [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] connect-ack recvd from [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] connect-ack header from [[48247,0],0] is okay
<br>
[annemarie:10709] [[48247,1],0] waiting for connect ack from [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] connect ack received from [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] connect-ack version from [[48247,0],0] matches ours
<br>
[annemarie:10709] [[48247,1],0] connect-ack [[48247,0],0] authenticated
<br>
[annemarie:10709] [[48247,1],0]-[[48247,0],0] tcp_peer_connected on socket 11
<br>
[annemarie:10709] [[48247,1],0]-[[48247,0],0] connected: 137.248.x.y - 137.248.x.y nodelay 0 sndbuf 262144 rcvbuf 262144 flags 00000802
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler starting send/recv events
<br>
[annemarie:10709] [[48247,1],0] tcp:set_module called for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 96
<br>
[annemarie:10709] [[48247,1],0] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 96 BYTES ON SOCKET 11
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 178 BYTES ON SOCKET 9
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 509 BYTES ON SOCKET 9
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 178
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 178 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 226 BYTES ON SOCKET 9
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 709 BYTES ON SOCKET 9
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 196 BYTES ON SOCKET 9
<br>
[node28:09586] mca: base: components_register: registering oob components
<br>
[node28:09586] mca: base: components_register: found loaded component tcp
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 509
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 509 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 226
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 226 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] mca: base: components_register: component tcp register function successful
<br>
[node28:09586] mca: base: components_open: opening oob components
<br>
[node28:09586] mca: base: components_open: found loaded component tcp
<br>
[node28:09586] mca: base: components_open: component tcp open function successful
<br>
[node28:09586] mca:oob:select: checking available component tcp
<br>
[node28:09586] mca:oob:select: Querying component [tcp]
<br>
[node28:09586] oob:tcp: component_available called
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09586] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[node28:09586] [[48247,1],1] oob:tcp:init rejecting loopback interface lo
<br>
[node28:09586] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 544 BYTES ON SOCKET 9
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] connection_event_handler: working connection (11, 11) 192.168.154.28:47928
<br>
[node28:09503] [[48247,0],1] accept_connection: 192.168.154.28:47928
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 1791 BYTES ON SOCKET 9
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 632 BYTES ON SOCKET 9
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called
<br>
[node28:09503] [[48247,0],1] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 11
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 709
<br>
[node28:09503] [[48247,0],1] waiting for connect ack from UNKNOWN
<br>
[node28:09503] [[48247,0],1] connect ack received from UNKNOWN
<br>
[node28:09503] [[48247,0],1] connect-ack recvd from UNKNOWN
<br>
[node28:09503] [[48247,0],1] mca_oob_tcp_recv_connect: connection from new peer
<br>
[node28:09503] [[48247,0],1] connect-ack header from [[48247,1],1] is okay
<br>
[node28:09503] [[48247,0],1] waiting for connect ack from [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] connect ack received from [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] connect-ack version from [[48247,1],1] matches ours
<br>
[node28:09503] [[48247,0],1] connect-ack [[48247,1],1] authenticated
<br>
[node28:09503] [[48247,0],1] tcp:peer_accept called for peer [[48247,1],1] in state UNKNOWN on socket 11
<br>
[node28:09503] [[48247,0],1] SEND CONNECT ACK
<br>
[node28:09503] [[48247,0],1] send blocking of 40 bytes to socket 11
<br>
[node28:09503] [[48247,0],1] connect-ack sent to socket 11
<br>
[node28:09503] [[48247,0],1]-[[48247,1],1] tcp_peer_connected on socket 11
<br>
[node28:09503] [[48247,0],1]-[[48247,1],1] accepted: 192.168.154.28 - 192.168.154.28 nodelay 0 sndbuf 262144 rcvbuf 262144 flags 00000802
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] tcp:set_module called for peer [[48247,1],1]
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 709 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate data region of size 80
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 394 BYTES ON SOCKET 9
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 1364 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 196
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 196 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1] oob:tcp:init creating module for V4 address on interface eth0
<br>
[node28:09586] [[48247,1],1] creating OOB-TCP module for interface eth0
<br>
[node28:09586] [[48247,1],1] oob:tcp:init adding 192.168.154.28 to our list of V4 connections
<br>
[node28:09586] WORKING INTERFACE 3 KERNEL INDEX 3 FAMILY: V4
<br>
[node28:09586] [[48247,1],1] oob:tcp:init creating module for V4 address on interface eth1
<br>
[node28:09586] [[48247,1],1] creating OOB-TCP module for interface eth1
<br>
[node28:09586] [[48247,1],1] oob:tcp:init adding 192.168.154.98 to our list of V4 connections
<br>
[node28:09586] [[48247,1],1] TCP STARTUP
<br>
[node28:09586] [[48247,1],1] attempting to bind to IPv4 port 0
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 544
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 544 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1] assigned IPv4 port 52014
<br>
[node28:09586] mca:oob:select: Adding component to end
<br>
[node28:09586] mca:oob:select: Found 1 active transports
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 1791
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 1791 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1]: set_addr to uri 3161915392.1;tcp://192.168.154.28,192.168.154.98:37727
<br>
[node28:09586] [[48247,1],1]:set_addr checking if peer [[48247,0],1] is reachable via component tcp
<br>
[node28:09586] [[48247,1],1] oob:tcp: working peer [[48247,0],1] address tcp://192.168.154.28,192.168.154.98:37727
<br>
[node28:09586] [[48247,1],1] PEER [[48247,0],1] MAY BE REACHABLE USING MODULE AT KINDEX 2 INTERFACE eth0
<br>
[node28:09586] [[48247,1],1] PASSING ADDR 192.168.154.28 TO INTERFACE eth0 AT KERNEL INDEX 2
<br>
[node28:09586] [[48247,1],1]:tcp set addr for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] PEER [[48247,0],1] MAY BE REACHABLE USING MODULE AT KINDEX 3 INTERFACE eth1
<br>
[node28:09586] [[48247,1],1] PASSING ADDR 192.168.154.98 TO INTERFACE eth1 AT KERNEL INDEX 3
<br>
[node28:09586] [[48247,1],1]:tcp set addr for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]: peer [[48247,0],1] is reachable via component tcp
<br>
[node28:09586] [[48247,1],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09586] [[48247,1],1]:tcp:processing set_peer cmd for interface eth0
<br>
[node28:09586] [[48247,1],1] SET_PEER ADDING PEER [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] set_peer: peer [[48247,0],1] is listening on interface eth0 net 192.168.154.28 port 37727
<br>
[node28:09586] [[48247,1],1]:tcp:processing set_peer cmd for interface eth1
<br>
[node28:09586] [[48247,1],1] SET_PEER ADDING PEER [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] set_peer: peer [[48247,0],1] is listening on interface eth1 net 192.168.154.98 port 37727
<br>
[node28:09586] [[48247,1],1] oob:base:send to target [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] oob:tcp:send_nb to peer [[48247,0],1]:1
<br>
[node28:09586] [[48247,1],1] tcp:send_nb to peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:508] post send to [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:442] processing send to peer [[48247,0],1]:1
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:476] queue pending to [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] tcp:send_nb: initiating connection to [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:490] connect to [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48247,0],1] via interface eth0
<br>
[node28:09586] [[48247,1],1] oob:tcp:peer creating socket to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 632
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 632 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48247,0],1] via interface eth0 on socket 11
<br>
[node28:09586] [[48247,1],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48247,0],1] on 192.168.154.28:37727 - 0 retries
<br>
[node28:09586] [[48247,1],1] waiting for connect completion to [[48247,0],1] - activating send event
<br>
[node28:09586] [[48247,1],1] tcp:send_handler called to send to peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] tcp:send_handler CONNECTING
<br>
[node28:09586] [[48247,1],1]:tcp:complete_connect called for peer [[48247,0],1] on socket 11
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 394
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 394 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1] tcp_peer_complete_connect: sending ack to [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] SEND CONNECT ACK
<br>
[node28:09586] [[48247,1],1] send blocking of 40 bytes to socket 11
<br>
[node28:09586] [[48247,1],1] connect-ack sent to socket 11
<br>
[node28:09586] [[48247,1],1] tcp_peer_complete_connect: setting read event on connection to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 1364
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 1364 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] RECV CONNECT ACK FROM [[48247,0],1] ON SOCKET 11
<br>
[node28:09586] [[48247,1],1] waiting for connect ack from [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] connect ack received from [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] connect-ack recvd from [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] connect-ack header from [[48247,0],1] is okay
<br>
[node28:09586] [[48247,1],1] waiting for connect ack from [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] connect ack received from [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] connect-ack version from [[48247,0],1] matches ours
<br>
[node28:09586] [[48247,1],1] connect-ack [[48247,0],1] authenticated
<br>
[node28:09586] [[48247,1],1]-[[48247,0],1] tcp_peer_connected on socket 11
<br>
[node28:09586] [[48247,1],1]-[[48247,0],1] connected: 192.168.154.28 - 192.168.154.28 nodelay 0 sndbuf 262144 rcvbuf 262144 flags 00000802
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler starting send/recv events
<br>
[node28:09586] [[48247,1],1] tcp:set_module called for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] tcp:send_handler called to send to peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] tcp:send_handler SENDING TO [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] MESSAGE SEND COMPLETE TO [[48247,0],1] OF 80 BYTES ON SOCKET 11
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,1],0] (ORIGIN [[48247,1],0]) OF 96 BYTES FOR DEST [[48247,0],0] TAG 1
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10704] [[48247,0],0] oob:base:send to target [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] oob:base:send known transport for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:send_nb to peer [[48247,1],0]:20
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb to peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:508] post send to [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:442] processing send to peer [[48247,1],0]:20
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb: already connected to [[48247,1],0] - queueing for send
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:469] queue send to [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler called to send to peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler SENDING TO [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] MESSAGE SEND COMPLETE TO [[48247,1],0] OF 11876 BYTES ON SOCKET 14
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler read hdr
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler allocate data region of size 11876
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1] RECVD COMPLETE MESSAGE FROM [[48247,1],1] (ORIGIN [[48247,1],1]) OF 80 BYTES FOR DEST [[48247,0],1] TAG 1
<br>
[node28:09503] [[48247,0],1] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,1],1]:20
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,1],1]:20
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,1],1] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,1],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 366
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 366 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,1],1] OF 28935 BYTES ON SOCKET 11
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 366 BYTES ON SOCKET 9
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:5
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:5
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 123 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 123
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 123 BYTES FOR DEST [[48247,0],0] TAG 5
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler CONNECTED
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler read hdr
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler allocate data region of size 28935
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10709] [[48247,1],0] RECVD COMPLETE MESSAGE FROM [[48247,0],0] (ORIGIN [[48247,0],0]) OF 11876 BYTES FOR DEST [[48247,1],0] TAG 20
<br>
[annemarie:10709] [[48247,1],0] DELIVERING TO RML
<br>
[annemarie:10709] [[48247,1],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10709] [[48247,1],0] oob:base:send to target [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] oob:base:send known transport for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] oob:tcp:send_nb to peer [[48247,0],0]:30
<br>
[annemarie:10709] [[48247,1],0] tcp:send_nb to peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:30
<br>
[annemarie:10709] [[48247,1],0] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 174
<br>
[annemarie:10709] [[48247,1],0] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 174 BYTES ON SOCKET 11
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 162 BYTES ON SOCKET 9
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 162
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 216 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 162 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 216
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 216 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler CONNECTED
<br>
[node28:09586] [[48247,1],1] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 28935 BYTES FOR DEST [[48247,1],1] TAG 20
<br>
[node28:09586] [[48247,1],1] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 528 BYTES ON SOCKET 9
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate data region of size 150
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 528
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 448 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 528 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09586] [[48247,1],1] oob:base:send to target [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] oob:base:send known transport for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] oob:tcp:send_nb to peer [[48247,0],1]:30
<br>
[node28:09586] [[48247,1],1] tcp:send_nb to peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:508] post send to [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:442] processing send to peer [[48247,0],1]:30
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 448
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 448 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1] tcp:send_nb: already connected to [[48247,0],1] - queueing for send
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:469] queue send to [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] tcp:send_handler called to send to peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] tcp:send_handler SENDING TO [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] MESSAGE SEND COMPLETE TO [[48247,0],1] OF 150 BYTES ON SOCKET 11
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,1],0] (ORIGIN [[48247,1],0]) OF 174 BYTES FOR DEST [[48247,0],0] TAG 30
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1] RECVD COMPLETE MESSAGE FROM [[48247,1],1] (ORIGIN [[48247,1],1]) OF 150 BYTES FOR DEST [[48247,0],1] TAG 30
<br>
[node28:09503] [[48247,0],1] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:32
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 172
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:32
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 172 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 172 BYTES FOR DEST [[48247,0],0] TAG 32
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10704] [[48247,0],0] oob:base:send to target [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] oob:base:send known transport for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:send_nb to peer [[48247,0],1]:15
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb to peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:508] post send to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:442] processing send to peer [[48247,0],1]:15
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb: already connected to [[48247,0],1] - queueing for send
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:469] queue send to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10704] [[48247,0],0] oob:base:send to target [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] oob:base:send known transport for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:send_nb to peer [[48247,1],0]:30
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb to peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:508] post send to [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:442] processing send to peer [[48247,1],0]:30
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb: already connected to [[48247,1],0] - queueing for send
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:469] queue send to [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler called to send to peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler SENDING TO [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] MESSAGE SEND COMPLETE TO [[48247,0],1] OF 344 BYTES ON SOCKET 12
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler called to send to peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler SENDING TO [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] MESSAGE SEND COMPLETE TO [[48247,1],0] OF 314 BYTES ON SOCKET 14
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler read hdr
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler allocate data region of size 314
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate data region of size 344
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1] RECVD COMPLETE MESSAGE FROM [[48247,0],0] (ORIGIN [[48247,0],0]) OF 344 BYTES FOR DEST [[48247,0],1] TAG 15
<br>
[node28:09503] [[48247,0],1] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,1],1]:30
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,1],1]:30
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,1],1] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,1],1] OF 314 BYTES ON SOCKET 11
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 364 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 364
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 346 BYTES ON SOCKET 9
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10709] [[48247,1],0] RECVD COMPLETE MESSAGE FROM [[48247,0],0] (ORIGIN [[48247,0],0]) OF 314 BYTES FOR DEST [[48247,1],0] TAG 30
<br>
[annemarie:10709] [[48247,1],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 364 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 346
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 346 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler CONNECTED
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler read hdr
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler allocate data region of size 314
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler CONNECTED
<br>
[node28:09586] [[48247,1],1] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 314 BYTES FOR DEST [[48247,1],1] TAG 30
<br>
[node28:09586] [[48247,1],1] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 945
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate data region of size 10
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 945 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 945 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 10
<br>
[annemarie:10709] [[48247,1],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10709] [[48247,1],0] oob:base:send to target [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] oob:base:send known transport for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] oob:tcp:send_nb to peer [[48247,0],0]:30
<br>
[annemarie:10709] [[48247,1],0] tcp:send_nb to peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:30
<br>
[annemarie:10709] [[48247,1],0] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09586] [[48247,1],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09586] [[48247,1],1] oob:base:send to target [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] oob:base:send known transport for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] oob:tcp:send_nb to peer [[48247,0],1]:30
<br>
[node28:09586] [[48247,1],1] tcp:send_nb to peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:508] post send to [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:442] processing send to peer [[48247,0],1]:30
<br>
[node28:09586] [[48247,1],1] tcp:send_nb: already connected to [[48247,0],1] - queueing for send
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:469] queue send to [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] tcp:send_handler called to send to peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] tcp:send_handler SENDING TO [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] MESSAGE SEND COMPLETE TO [[48247,0],1] OF 10 BYTES ON SOCKET 11
<br>
[annemarie:10709] [[48247,1],0] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 10 BYTES ON SOCKET 11
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 32
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,1],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1] RECVD COMPLETE MESSAGE FROM [[48247,1],1] (ORIGIN [[48247,1],1]) OF 10 BYTES FOR DEST [[48247,0],1] TAG 30
<br>
[node28:09503] [[48247,0],1] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:32
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:32
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 32 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,1],0] (ORIGIN [[48247,1],0]) OF 10 BYTES FOR DEST [[48247,0],0] TAG 30
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 32 BYTES FOR DEST [[48247,0],0] TAG 32
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10704] [[48247,0],0] oob:base:send to target [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] oob:base:send known transport for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:send_nb to peer [[48247,0],1]:15
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb to peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:508] post send to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:442] processing send to peer [[48247,0],1]:15
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb: already connected to [[48247,0],1] - queueing for send
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:469] queue send to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10704] [[48247,0],0] oob:base:send to target [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] oob:base:send known transport for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:send_nb to peer [[48247,1],0]:30
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb to peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:508] post send to [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:442] processing send to peer [[48247,1],0]:30
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb: already connected to [[48247,1],0] - queueing for send
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:469] queue send to [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler called to send to peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler SENDING TO [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] MESSAGE SEND COMPLETE TO [[48247,0],1] OF 40 BYTES ON SOCKET 12
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler called to send to peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler SENDING TO [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] MESSAGE SEND COMPLETE TO [[48247,1],0] OF 10 BYTES ON SOCKET 14
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler read hdr
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler allocate data region of size 10
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate data region of size 40
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10709] [[48247,1],0] RECVD COMPLETE MESSAGE FROM [[48247,0],0] (ORIGIN [[48247,0],0]) OF 10 BYTES FOR DEST [[48247,1],0] TAG 30
<br>
[annemarie:10709] [[48247,1],0] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1] RECVD COMPLETE MESSAGE FROM [[48247,0],0] (ORIGIN [[48247,0],0]) OF 40 BYTES FOR DEST [[48247,0],1] TAG 15
<br>
[node28:09503] [[48247,0],1] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,1],1]:30
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,1],1]:30
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,1],1] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,1],1] OF 10 BYTES ON SOCKET 11
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 363
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 363 BYTES ON SOCKET 9
<br>
Total: 2
<br>
Universe: 2
<br>
Hello World from Node 0.
<br>
[annemarie:10709] [[48247,1],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10709] [[48247,1],0] oob:base:send to target [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] oob:base:send known transport for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] oob:tcp:send_nb to peer [[48247,0],0]:30
<br>
[annemarie:10709] [[48247,1],0] tcp:send_nb to peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:30
<br>
[annemarie:10709] [[48247,1],0] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 10
<br>
[annemarie:10709] [[48247,1],0] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 10 BYTES ON SOCKET 11
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 345 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,1],0] (ORIGIN [[48247,1],0]) OF 10 BYTES FOR DEST [[48247,0],0] TAG 30
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 363 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 345
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 345 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler CONNECTED
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler read hdr
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler allocate data region of size 10
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler CONNECTED
<br>
[node28:09586] [[48247,1],1] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 10 BYTES FOR DEST [[48247,1],1] TAG 30
<br>
[node28:09586] [[48247,1],1] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 55
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 55 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 55 BYTES ON SOCKET 9
<br>
Hello World from Node 1.
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 945
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate data region of size 10
<br>
[node28:09503] [[48247,0],1] RECVD COMPLETE MESSAGE FROM [[48247,1],1] (ORIGIN [[48247,1],1]) OF 10 BYTES FOR DEST [[48247,0],1] TAG 30
<br>
[node28:09503] [[48247,0],1] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:32
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:32
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 945 BYTES ON SOCKET 9
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 32 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 945 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09586] [[48247,1],1] oob:base:send to target [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] oob:base:send known transport for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] oob:tcp:send_nb to peer [[48247,0],1]:30
<br>
[node28:09586] [[48247,1],1] tcp:send_nb to peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:508] post send to [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:442] processing send to peer [[48247,0],1]:30
<br>
[node28:09586] [[48247,1],1] tcp:send_nb: already connected to [[48247,0],1] - queueing for send
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:469] queue send to [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] tcp:send_handler called to send to peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] tcp:send_handler SENDING TO [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] MESSAGE SEND COMPLETE TO [[48247,0],1] OF 10 BYTES ON SOCKET 11
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 32
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 32 BYTES FOR DEST [[48247,0],0] TAG 32
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10704] [[48247,0],0] oob:base:send to target [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] oob:base:send known transport for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:send_nb to peer [[48247,0],1]:15
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb to peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:508] post send to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:442] processing send to peer [[48247,0],1]:15
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb: already connected to [[48247,0],1] - queueing for send
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:469] queue send to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10704] [[48247,0],0] oob:base:send to target [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] oob:base:send known transport for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:send_nb to peer [[48247,1],0]:30
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb to peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:508] post send to [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:442] processing send to peer [[48247,1],0]:30
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb: already connected to [[48247,1],0] - queueing for send
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:469] queue send to [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler called to send to peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler SENDING TO [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] MESSAGE SEND COMPLETE TO [[48247,0],1] OF 40 BYTES ON SOCKET 12
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler called to send to peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler SENDING TO [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] MESSAGE SEND COMPLETE TO [[48247,1],0] OF 10 BYTES ON SOCKET 14
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler read hdr
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler allocate data region of size 10
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate data region of size 40
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10709] [[48247,1],0] RECVD COMPLETE MESSAGE FROM [[48247,0],0] (ORIGIN [[48247,0],0]) OF 10 BYTES FOR DEST [[48247,1],0] TAG 30
<br>
[annemarie:10709] [[48247,1],0] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1] RECVD COMPLETE MESSAGE FROM [[48247,0],0] (ORIGIN [[48247,0],0]) OF 40 BYTES FOR DEST [[48247,0],1] TAG 15
<br>
[node28:09503] [[48247,0],1] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,1],1]:30
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,1],1]:30
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,1],1] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,1],1] OF 10 BYTES ON SOCKET 11
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 363
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 363 BYTES ON SOCKET 9
<br>
[annemarie:10709] [[48247,1],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10709] [[48247,1],0] oob:base:send to target [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] oob:base:send known transport for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] oob:tcp:send_nb to peer [[48247,0],0]:1
<br>
[annemarie:10709] [[48247,1],0] tcp:send_nb to peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 8
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:1
<br>
[annemarie:10709] [[48247,1],0] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[annemarie:10709] [[48247,1],0]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 8 BYTES ON SOCKET 11
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 345 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,1],0] (ORIGIN [[48247,1],0]) OF 8 BYTES FOR DEST [[48247,0],0] TAG 1
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10704] [[48247,0],0] oob:base:send to target [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] oob:base:send known transport for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:send_nb to peer [[48247,1],0]:20
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb to peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:508] post send to [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:442] processing send to peer [[48247,1],0]:20
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb: already connected to [[48247,1],0] - queueing for send
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:469] queue send to [[48247,1],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate data region of size 8
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler called to send to peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler SENDING TO [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] MESSAGE SEND COMPLETE TO [[48247,1],0] OF 0 BYTES ON SOCKET 14
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 363 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler CONNECTED
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler read hdr
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler allocate data region of size 10
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10709] [[48247,1],0]:tcp:recv:handler read hdr
<br>
[annemarie:10709] [[48247,1],0] RECVD ZERO-BYTE MESSAGE FROM [[48247,0],0] for tag 20
<br>
[annemarie:10709] [[48247,1],0] RECVD COMPLETE MESSAGE FROM [[48247,0],0] (ORIGIN [[48247,0],0]) OF 0 BYTES FOR DEST [[48247,1],0] TAG 20
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 345
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 345 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09503] [[48247,0],1] RECVD COMPLETE MESSAGE FROM [[48247,1],1] (ORIGIN [[48247,1],1]) OF 8 BYTES FOR DEST [[48247,0],1] TAG 1
<br>
[node28:09503] [[48247,0],1] DELIVERING TO RML
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,1],1]:20
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,1],1]:20
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,1],1] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 942 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 942
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 942 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler CONNECTED
<br>
[node28:09586] [[48247,1],1] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 10 BYTES FOR DEST [[48247,1],1] TAG 30
<br>
[node28:09586] [[48247,1],1] DELIVERING TO RML
<br>
[annemarie:10709] [[48247,1],0] DELIVERING TO RML
<br>
[annemarie:10709] [[48247,1],0] TCP SHUTDOWN
<br>
[annemarie:10709] [[48247,1],0] RELEASING PEER OBJ [[48247,0],0]
<br>
[annemarie:10709] [[48247,1],0] CLOSING SOCKET 11
<br>
[annemarie:10709] [[48247,1],0] RELEASING PEER OBJ [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,1],1] OF 0 BYTES ON SOCKET 11
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 550 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 72 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 550
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 550 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1]-[[48247,1],1] mca_oob_tcp_msg_recv: peer closed connection
<br>
[node28:09503] [[48247,0],1] tcp_peer_close for [[48247,1],1] sd 11 state CONNECTED
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 139 BYTES ON SOCKET 9
<br>
[node28:09503] [[48247,0],1] tcp:lost connection called for peer [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:2
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 203 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]-[[48247,1],0] mca_oob_tcp_msg_recv: peer closed connection
<br>
[annemarie:10704] [[48247,0],0] tcp_peer_close for [[48247,1],0] sd 14 state CONNECTED
<br>
[annemarie:10704] [[48247,0],0] tcp:lost connection called for peer [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 72
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 72 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09586] [[48247,1],1] oob:base:send to target [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] oob:base:send known transport for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] oob:tcp:send_nb to peer [[48247,0],1]:1
<br>
[node28:09586] [[48247,1],1] tcp:send_nb to peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:508] post send to [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:442] processing send to peer [[48247,0],1]:1
<br>
[node28:09586] [[48247,1],1] tcp:send_nb: already connected to [[48247,0],1] - queueing for send
<br>
[node28:09586] [[48247,1],1]:[oob_tcp.c:469] queue send to [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] tcp:send_handler called to send to peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] tcp:send_handler SENDING TO [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] MESSAGE SEND COMPLETE TO [[48247,0],1] OF 8 BYTES ON SOCKET 11
<br>
[annemarie:10709] [[48247,1],0] RELEASING PEER OBJ [[48247,0],0]
<br>
[annemarie:10709] mca: base: close: component tcp closed
<br>
[annemarie:10709] mca: base: close: unloading component tcp
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler CONNECTED
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09586] [[48247,1],1]:tcp:recv:handler read hdr
<br>
[node28:09586] [[48247,1],1] RECVD ZERO-BYTE MESSAGE FROM [[48247,0],1] for tag 20
<br>
[node28:09586] [[48247,1],1] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 0 BYTES FOR DEST [[48247,1],1] TAG 20
<br>
[node28:09586] [[48247,1],1] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1] TCP SHUTDOWN
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 139
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 139 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1] RELEASING PEER OBJ [[48247,0],1]
<br>
[node28:09586] [[48247,1],1] CLOSING SOCKET 11
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 203
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 203 BYTES FOR DEST [[48247,0],0] TAG 2
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[node28:09586] [[48247,1],1] RELEASING PEER OBJ [[48247,0],1]
<br>
[node28:09586] mca: base: close: component tcp closed
<br>
[node28:09586] mca: base: close: unloading component tcp
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[node28:09503] [[48247,0],1] oob:base:send to target [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:base:send known transport for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] oob:tcp:send_nb to peer [[48247,0],0]:5
<br>
[node28:09503] [[48247,0],1] tcp:send_nb to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:508] post send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:442] processing send to peer [[48247,0],0]:5
<br>
[node28:09503] [[48247,0],1] tcp:send_nb: already connected to [[48247,0],0] - queueing for send
<br>
[node28:09503] [[48247,0],1]:[oob_tcp.c:469] queue send to [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler called to send to peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] tcp:send_handler SENDING TO [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] MESSAGE SEND COMPLETE TO [[48247,0],0] OF 73 BYTES ON SOCKET 9
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate data region of size 73
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0] RECVD COMPLETE MESSAGE FROM [[48247,0],1] (ORIGIN [[48247,0],1]) OF 73 BYTES FOR DEST [[48247,0],0] TAG 5
<br>
[annemarie:10704] [[48247,0],0] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[annemarie:10704] [[48247,0],0] oob:base:send to target [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] oob:base:send known transport for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] oob:tcp:send_nb to peer [[48247,0],1]:15
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb to peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:508] post send to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:442] processing send to peer [[48247,0],1]:15
<br>
[annemarie:10704] [[48247,0],0] tcp:send_nb: already connected to [[48247,0],1] - queueing for send
<br>
[annemarie:10704] [[48247,0],0]:[oob_tcp.c:469] queue send to [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler called to send to peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] tcp:send_handler SENDING TO [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] MESSAGE SEND COMPLETE TO [[48247,0],1] OF 8 BYTES ON SOCKET 12
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate new recv msg
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler read hdr
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler allocate data region of size 8
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler called for peer [[48247,0],0]
<br>
[node28:09503] [[48247,0],1]:tcp:recv:handler CONNECTED
<br>
[node28:09503] [[48247,0],1] RECVD COMPLETE MESSAGE FROM [[48247,0],0] (ORIGIN [[48247,0],0]) OF 8 BYTES FOR DEST [[48247,0],1] TAG 15
<br>
[node28:09503] [[48247,0],1] DELIVERING TO RML
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler called for peer [[48247,0],1]
<br>
[node28:09503] [[48247,0],1] TCP SHUTDOWN
<br>
[node28:09503] [[48247,0],1] RELEASING PEER OBJ [[48247,0],0]
<br>
[node28:09503] [[48247,0],1] CLOSING SOCKET 9
<br>
[node28:09503] [[48247,0],1] RELEASING PEER OBJ [[48247,1],1]
<br>
[node28:09503] [[48247,0],1] CLOSING SOCKET 11
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler CONNECTED
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler allocate new recv msg
<br>
[annemarie:10704] [[48247,0],0]:tcp:recv:handler read hdr
<br>
[annemarie:10704] [[48247,0],0]-[[48247,0],1] mca_oob_tcp_msg_recv: peer closed connection
<br>
[node28:09503] mca: base: close: component tcp closed
<br>
[node28:09503] mca: base: close: unloading component tcp
<br>
[annemarie:10704] [[48247,0],0] tcp_peer_close for [[48247,0],1] sd 12 state CONNECTED
<br>
[annemarie:10704] [[48247,0],0] tcp:lost connection called for peer [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] TCP SHUTDOWN
<br>
[annemarie:10704] [[48247,0],0] RELEASING PEER OBJ [[48247,1],0]
<br>
[annemarie:10704] [[48247,0],0] CLOSING SOCKET 14
<br>
[annemarie:10704] [[48247,0],0] RELEASING PEER OBJ [[48247,0],1]
<br>
[annemarie:10704] [[48247,0],0] CLOSING SOCKET 12
<br>
[annemarie:10704] mca: base: close: component tcp closed
<br>
[annemarie:10704] mca: base: close: unloading component tcp
<br>
Wed Nov 12 17:23:48 CET 2014
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25778.php">Nathan Hjelm: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25776.php">Ralph Castain: "[OMPI users] 1.8.4 release delayed"</a>
<li><strong>In reply to:</strong> <a href="25739.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25781.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25781.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
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
