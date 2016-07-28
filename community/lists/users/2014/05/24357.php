<?
$subject_val = "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 14:45:16 2014" -->
<!-- isoreceived="20140514184516" -->
<!-- sent="Wed, 14 May 2014 20:44:52 +0200 (CEST)" -->
<!-- isosent="20140514184452" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742" -->
<!-- id="201405141844.s4EIiqWG006939_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] unknown interface on openmpi-1.8.2a1r31742" -->
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
<strong>Subject:</strong> Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 14:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24358.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Previous message:</strong> <a href="24356.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Maybe in reply to:</strong> <a href="24351.php">Siegmar Gross: "[OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24358.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Reply:</strong> <a href="24358.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p><span class="quotelev1">&gt; Hmmm...well, that's an interesting naming scheme :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try adding &quot;-mca oob_base_verbose 10 --report-uri -&quot; on your cmd line
</span><br>
<span class="quotelev1">&gt; and let's see what it thinks is happening
</span><br>
<p><p>tyr fd1026 105 mpiexec -np 3 --host tyr,sunpc1,linpc1 --mca oob_base_verbose 10 --report-uri - hostname
<br>
[tyr.informatik.hs-fulda.de:06877] mca: base: components_register: registering oob components
<br>
[tyr.informatik.hs-fulda.de:06877] mca: base: components_register: found loaded component tcp
<br>
[tyr.informatik.hs-fulda.de:06877] mca: base: components_register: component tcp register function successful
<br>
[tyr.informatik.hs-fulda.de:06877] mca: base: components_open: opening oob components
<br>
[tyr.informatik.hs-fulda.de:06877] mca: base: components_open: found loaded component tcp
<br>
[tyr.informatik.hs-fulda.de:06877] mca: base: components_open: component tcp open function successful
<br>
[tyr.informatik.hs-fulda.de:06877] mca:oob:select: checking available component tcp
<br>
[tyr.informatik.hs-fulda.de:06877] mca:oob:select: Querying component [tcp]
<br>
[tyr.informatik.hs-fulda.de:06877] oob:tcp: component_available called
<br>
[tyr.informatik.hs-fulda.de:06877] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[tyr.informatik.hs-fulda.de:06877] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:tcp:init creating module for V4 address on interface bge0
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] creating OOB-TCP module for interface bge0
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:tcp:init adding 193.174.24.39 to our list of V4 connections
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] TCP STARTUP
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] attempting to bind to IPv4 port 0
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] assigned IPv4 port 55567
<br>
[tyr.informatik.hs-fulda.de:06877] mca:oob:select: Adding component to end
<br>
[tyr.informatik.hs-fulda.de:06877] mca:oob:select: Found 1 active transports
<br>
3170566144.0;tcp://193.174.24.39:55567
<br>
[sunpc1:07690] mca: base: components_register: registering oob components
<br>
[sunpc1:07690] mca: base: components_register: found loaded component tcp
<br>
[sunpc1:07690] mca: base: components_register: component tcp register function successful
<br>
[sunpc1:07690] mca: base: components_open: opening oob components
<br>
[sunpc1:07690] mca: base: components_open: found loaded component tcp
<br>
[sunpc1:07690] mca: base: components_open: component tcp open function successful
<br>
[sunpc1:07690] mca:oob:select: checking available component tcp
<br>
[sunpc1:07690] mca:oob:select: Querying component [tcp]
<br>
[sunpc1:07690] oob:tcp: component_available called
<br>
[sunpc1:07690] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[sunpc1:07690] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
<br>
[sunpc1:07690] [[48379,0],1] oob:tcp:init creating module for V4 address on interface nge0
<br>
[sunpc1:07690] [[48379,0],1] creating OOB-TCP module for interface nge0
<br>
[sunpc1:07690] [[48379,0],1] oob:tcp:init adding 193.174.26.210 to our list of V4 connections
<br>
[sunpc1:07690] [[48379,0],1] TCP STARTUP
<br>
[sunpc1:07690] [[48379,0],1] attempting to bind to IPv4 port 0
<br>
[sunpc1:07690] [[48379,0],1] assigned IPv4 port 39616
<br>
[sunpc1:07690] mca:oob:select: Adding component to end
<br>
[sunpc1:07690] mca:oob:select: Found 1 active transports
<br>
[sunpc1:07690] [[48379,0],1]: set_addr to uri 3170566144.0;tcp://193.174.24.39:55567
<br>
[sunpc1:07690] [[48379,0],1]:set_addr checking if peer [[48379,0],0] is reachable via component tcp
<br>
[sunpc1:07690] [[48379,0],1] oob:tcp: working peer [[48379,0],0] address tcp://193.174.24.39:55567
<br>
[sunpc1:07690] [[48379,0],1] UNFOUND KERNEL INDEX -13 FOR ADDRESS 193.174.24.39
<br>
[sunpc1:07690] [[48379,0],1] PEER [[48379,0],0] MAY BE REACHABLE BY ROUTING - ASSIGNING MODULE AT KINDEX 2 INTERFACE nge0
<br>
[sunpc1:07690] [[48379,0],1] PASSING ADDR 193.174.24.39 TO INTERFACE nge0 AT KERNEL INDEX 2
<br>
[sunpc1:07690] [[48379,0],1]:tcp set addr for peer [[48379,0],0]
<br>
[sunpc1:07690] [[48379,0],1]: peer [[48379,0],0] is reachable via component tcp
<br>
[sunpc1:07690] [[48379,0],1] OOB_SEND: ../../../../../openmpi-1.8.2a1r31742/orte/mca/rml/oob/rml_oob_send.c:199
<br>
[sunpc1:07690] [[48379,0],1]:tcp:processing set_peer cmd for interface nge0
<br>
[sunpc1:07690] [[48379,0],1] oob:base:send to target [[48379,0],0]
<br>
[sunpc1:07690] [[48379,0],1] oob:tcp:send_nb to peer [[48379,0],0]:10
<br>
[sunpc1:07690] [[48379,0],1] tcp:send_nb to peer [[48379,0],0]
<br>
[sunpc1:07690] [[48379,0],1]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:508] post send to [[48379,0],0]
<br>
[sunpc1:07690] [[48379,0],1]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:442] processing send to peer 
<br>
[[48379,0],0]:10
<br>
[sunpc1:07690] [[48379,0],1]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:476] queue pending to [[48379,0],0]
<br>
[sunpc1:07690] [[48379,0],1] tcp:send_nb: initiating connection to [[48379,0],0]
<br>
[sunpc1:07690] [[48379,0],1]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:490] connect to [[48379,0],0]
<br>
[sunpc1:07690] [[48379,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] via interface nge0
<br>
[sunpc1:07690] [[48379,0],1] oob:tcp:peer creating socket to [[48379,0],0]
<br>
[sunpc1:07690] [[48379,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] via interface nge0 on socket 10
<br>
[sunpc1:07690] [[48379,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] on 193.174.24.39:55567 - 0 retries
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] mca_oob_tcp_listen_thread: new connection: (15, 0) 193.174.26.210:39617
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] connection_handler: working connection (15, 11) 193.174.26.210:39617
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] CONNECTION REQUEST ON UNKNOWN INTERFACE
<br>
[sunpc1:07690] [[48379,0],1] waiting for connect completion to [[48379,0],0] - activating send event
<br>
[sunpc1:07690] [[48379,0],1] tcp:send_handler called to send to peer [[48379,0],0]
<br>
[sunpc1:07690] [[48379,0],1] tcp:send_handler CONNECTING
<br>
[sunpc1:07690] [[48379,0],1]:tcp:complete_connect called for peer [[48379,0],0] on socket 10
<br>
[sunpc1:07690] [[48379,0],1] tcp_peer_complete_connect: sending ack to [[48379,0],0]
<br>
[sunpc1:07690] [[48379,0],1] SEND CONNECT ACK
<br>
[sunpc1:07690] [[48379,0],1] send blocking of 48 bytes to socket 10
<br>
[sunpc1:07690] [[48379,0],1] connect-ack sent to socket 10
<br>
[sunpc1:07690] [[48379,0],1] tcp_peer_complete_connect: setting read event on connection to [[48379,0],0]
<br>
[linpc1:21511] mca: base: components_register: registering oob components
<br>
[linpc1:21511] mca: base: components_register: found loaded component tcp
<br>
[linpc1:21511] mca: base: components_register: component tcp register function successful
<br>
[linpc1:21511] mca: base: components_open: opening oob components
<br>
[linpc1:21511] mca: base: components_open: found loaded component tcp
<br>
[linpc1:21511] mca: base: components_open: component tcp open function successful
<br>
[linpc1:21511] mca:oob:select: checking available component tcp
<br>
[linpc1:21511] mca:oob:select: Querying component [tcp]
<br>
[linpc1:21511] oob:tcp: component_available called
<br>
<p>[linpc1:21511] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[linpc1:21511] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
<br>
[linpc1:21511] [[48379,0],2] oob:tcp:init creating module for V4 address on interface eth0
<br>
[linpc1:21511] [[48379,0],2] creating OOB-TCP module for interface eth0
<br>
[linpc1:21511] [[48379,0],2] oob:tcp:init adding 193.174.26.208 to our list of V4 connections
<br>
[linpc1:21511] [[48379,0],2] TCP STARTUP
<br>
[linpc1:21511] [[48379,0],2] attempting to bind to IPv4 port 0
<br>
[linpc1:21511] [[48379,0],2] assigned IPv4 port 39724
<br>
[linpc1:21511] mca:oob:select: Adding component to end
<br>
[linpc1:21511] mca:oob:select: Found 1 active transports
<br>
[linpc1:21511] [[48379,0],2]: set_addr to uri 3170566144.0;tcp://193.174.24.39:55567
<br>
[linpc1:21511] [[48379,0],2]:set_addr checking if peer [[48379,0],0] is reachable via component tcp
<br>
[linpc1:21511] [[48379,0],2] oob:tcp: working peer [[48379,0],0] address tcp://193.174.24.39:55567
<br>
[linpc1:21511] [[48379,0],2] UNFOUND KERNEL INDEX -13 FOR ADDRESS 193.174.24.39
<br>
[linpc1:21511] [[48379,0],2] PEER [[48379,0],0] MAY BE REACHABLE BY ROUTING - ASSIGNING MODULE AT KINDEX 2 INTERFACE eth0
<br>
[linpc1:21511] [[48379,0],2] PASSING ADDR 193.174.24.39 TO INTERFACE eth0 AT KERNEL INDEX 2
<br>
[linpc1:21511] [[48379,0],2]:tcp set addr for peer [[48379,0],0]
<br>
[linpc1:21511] [[48379,0],2]: peer [[48379,0],0] is reachable via component tcp
<br>
[linpc1:21511] [[48379,0],2] OOB_SEND: ../../../../../openmpi-1.8.2a1r31742/orte/mca/rml/oob/rml_oob_send.c:199
<br>
[linpc1:21511] [[48379,0],2]:tcp:processing set_peer cmd for interface eth0
<br>
[linpc1:21511] [[48379,0],2] oob:base:send to target [[48379,0],0]
<br>
[linpc1:21511] [[48379,0],2] oob:tcp:send_nb to peer [[48379,0],0]:10
<br>
[linpc1:21511] [[48379,0],2] tcp:send_nb to peer [[48379,0],0]
<br>
[linpc1:21511] [[48379,0],2]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:508] post send to [[48379,0],0]
<br>
[linpc1:21511] [[48379,0],2]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:442] processing send to peer 
<br>
[[48379,0],0]:10
<br>
[linpc1:21511] [[48379,0],2]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:476] queue pending to [[48379,0],0]
<br>
[linpc1:21511] [[48379,0],2] tcp:send_nb: initiating connection to [[48379,0],0]
<br>
[linpc1:21511] [[48379,0],2]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:490] connect to [[48379,0],0]
<br>
[linpc1:21511] [[48379,0],2] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] via interface eth0
<br>
[linpc1:21511] [[48379,0],2] oob:tcp:peer creating socket to [[48379,0],0]
<br>
[linpc1:21511] [[48379,0],2] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] via interface eth0 on socket 9
<br>
[linpc1:21511] [[48379,0],2] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] on 193.174.24.39:55567 - 0 retries
<br>
[linpc1:21511] [[48379,0],2] waiting for connect completion to [[48379,0],0] - activating send event
<br>
[linpc1:21511] [[48379,0],2] tcp:send_handler called to send to peer [[48379,0],0]
<br>
[linpc1:21511] [[48379,0],2] tcp:send_handler CONNECTING
<br>
[linpc1:21511] [[48379,0],2]:tcp:complete_connect called for peer [[48379,0],0] on socket 9
<br>
[linpc1:21511] [[48379,0],2] tcp_peer_complete_connect: sending ack to [[48379,0],0]
<br>
[linpc1:21511] [[48379,0],2] SEND CONNECT ACK
<br>
[linpc1:21511] [[48379,0],2] send blocking of 48 bytes to socket 9
<br>
[linpc1:21511] [[48379,0],2] connect-ack sent to socket 9
<br>
[linpc1:21511] [[48379,0],2] tcp_peer_complete_connect: setting read event on connection to [[48379,0],0]
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] mca_oob_tcp_listen_thread: new connection: (16, 11) 193.174.26.208:53741
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] connection_handler: working connection (16, 11) 193.174.26.208:53741
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] CONNECTION REQUEST ON UNKNOWN INTERFACE
<br>
^CKilled by signal 2.
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] OOB_SEND: ../../../../../openmpi-1.8.2a1r31742/orte/mca/rml/oob/rml_oob_send.c:199
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] OOB_SEND: ../../../../../openmpi-1.8.2a1r31742/orte/mca/rml/oob/rml_oob_send.c:199
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:base:send to target [[48379,0],1]
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:base:send unknown peer [[48379,0],1]
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] is NOT reachable by TCP
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:base:send to target [[48379,0],2]
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:base:send unknown peer [[48379,0],2]
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] is NOT reachable by TCP
<br>
Killed by signal 2.
<br>
[tyr.informatik.hs-fulda.de:06877] [[48379,0],0] TCP SHUTDOWN
<br>
[tyr.informatik.hs-fulda.de:06877] mca: base: close: component tcp closed
<br>
[tyr.informatik.hs-fulda.de:06877] mca: base: close: unloading component tcp
<br>
tyr fd1026 106 
<br>
<p><p>Thank you very much for your help in advance. Do you need anything else?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; On May 14, 2014, at 9:06 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What are the interfaces on these machines?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 111 ifconfig -a
</span><br>
<span class="quotelev2">&gt; &gt; lo0: flags=2001000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv4,VIRTUAL&gt; mtu 8232 index 1
</span><br>
<span class="quotelev2">&gt; &gt;        inet 127.0.0.1 netmask ff000000 
</span><br>
<span class="quotelev2">&gt; &gt; bge0: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 1500 index 2
</span><br>
<span class="quotelev2">&gt; &gt;        inet 193.174.24.39 netmask ffffffe0 broadcast 193.174.24.63
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 112 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 112 ssh sunpc1 ifconfig -a
</span><br>
<span class="quotelev2">&gt; &gt; lo0: flags=2001000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv4,VIRTUAL&gt; mtu 8232 index 1
</span><br>
<span class="quotelev2">&gt; &gt;        inet 127.0.0.1 netmask ff000000 
</span><br>
<span class="quotelev2">&gt; &gt; nge0: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 1500 index 2
</span><br>
<span class="quotelev2">&gt; &gt;        inet 193.174.26.210 netmask ffffffc0 broadcast 193.174.26.255
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 113 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 113 ssh linpc1 /sbin/ifconfig -a
</span><br>
<span class="quotelev2">&gt; &gt; eth0      Link encap:Ethernet  HWaddr 00:14:4F:23:FD:A8  
</span><br>
<span class="quotelev2">&gt; &gt;          inet addr:193.174.26.208  Bcast:193.174.26.255  Mask:255.255.255.192
</span><br>
<span class="quotelev2">&gt; &gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;          RX packets:18052524 errors:127 dropped:0 overruns:0 frame:127
</span><br>
<span class="quotelev2">&gt; &gt;          TX packets:15917888 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;          collisions:0 txqueuelen:1000 
</span><br>
<span class="quotelev2">&gt; &gt;          RX bytes:4158294157 (3965.6 Mb)  TX bytes:12060556809 (11501.8 Mb)
</span><br>
<span class="quotelev2">&gt; &gt;          Interrupt:23 Base address:0x4000 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; eth1      Link encap:Ethernet  HWaddr 00:14:4F:23:FD:A9  
</span><br>
<span class="quotelev2">&gt; &gt;          BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;          RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;          TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;          collisions:0 txqueuelen:1000 
</span><br>
<span class="quotelev2">&gt; &gt;          RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev2">&gt; &gt;          Interrupt:45 Base address:0xa000 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; lo        Link encap:Local Loopback  
</span><br>
<span class="quotelev2">&gt; &gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt; &gt;          UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;          RX packets:1083 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;          TX packets:1083 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;          collisions:0 txqueuelen:0 
</span><br>
<span class="quotelev2">&gt; &gt;          RX bytes:329323 (321.6 Kb)  TX bytes:329323 (321.6 Kb)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 114 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Do you need something else?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 14, 2014, at 7:45 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I just installed openmpi-1.8.2a1r31742 on my machines (Solaris 10
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sun C5.12 and still have the following problem.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr fd1026 102 which mpiexec
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/local/openmpi-1.8.2_64_cc/bin/mpiexec
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr fd1026 103 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [tyr.informatik.hs-fulda.de:12827] [[37949,0],0] CONNECTION
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [tyr.informatik.hs-fulda.de:12827] [[37949,0],0] CONNECTION
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Killed by signal 2.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr fd1026 104 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The command works fine with openmpi-1.6.6rc1.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr fd1026 102 which mpiexec
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/local/openmpi-1.6.6_64_cc/bin/mpiexec
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr fd1026 103 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; linpc1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sunpc1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr fd1026 104 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have reported the problem before and I would be grateful, if
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; somebody could solve it. Please let me know if I can provide any
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; other information.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24358.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Previous message:</strong> <a href="24356.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Maybe in reply to:</strong> <a href="24351.php">Siegmar Gross: "[OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24358.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Reply:</strong> <a href="24358.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
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
