<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct  7 10:57:50 2007" -->
<!-- isoreceived="20071007145750" -->
<!-- sent="Sun, 7 Oct 2007 16:57:40 +0200" -->
<!-- isosent="20071007145740" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages" -->
<!-- id="392BFCBD-D671-40A3-8965-E8491063E356_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0710011705490.14832_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-07 10:57:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4167.php">Michael Clover: "[OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
<li><strong>Previous message:</strong> <a href="4165.php">Michael Clover: "[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>In reply to:</strong> <a href="4123.php">Mostyn Lewis: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mostyn --
<br>
<p>Is the 10.173.128.48/49 address visible/reachable by all nodes in the  
<br>
job (to include the node where mpirun is executing)?  This seems to  
<br>
be the problematic network.
<br>
<p>If it is not, you might want to just disable that interface with the  
<br>
oob_tcp_if_include and btl_tcp_if_include MCA parameters, for example:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca oob_tcp_if_include eth0,ib1 --mca btl_tcp_if_include  
<br>
eth0,ib1 ...
<br>
<p>(IIRC, we had a mismatch in the MCA param name forms before 1.2.4 --  
<br>
so if you have any older version, you might want to check &quot;ompi_info  
<br>
--param btl tcp&quot; and &quot;ompi_info --param oob tcp&quot; to ensure you have  
<br>
the right param names)
<br>
<p><p><p>On Oct 2, 2007, at 2:09 AM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; More information. Sorry about the length of this.
</span><br>
<span class="quotelev1">&gt; I switched on -mca oob_tcp_debug 1000 and the result is below.
</span><br>
<span class="quotelev1">&gt; Later on there's an &quot;ifconfig -a&quot; as the trace seems to show you  
</span><br>
<span class="quotelev1">&gt; are trying
</span><br>
<span class="quotelev1">&gt; connections to all 3 interfaces in oob - 5.* is InfiniBand IPoIB -  
</span><br>
<span class="quotelev1">&gt; 7.* is a
</span><br>
<span class="quotelev1">&gt; private ethernet with no connection (cable) - 10.* is the general  
</span><br>
<span class="quotelev1">&gt; ethernet
</span><br>
<span class="quotelev1">&gt; which I thought I was using, only.
</span><br>
<span class="quotelev1">&gt; At the end there's a ompi_info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this expected behavio(u)r?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mostyn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Script started on Mon 01 Oct 2007 04:34:35 PM PDT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mostyn_at_s0120:/ctmp8/mostyn/glamex/pi&gt; $OPENMPI_GCC/bin/mpirun -mca   
</span><br>
<span class="quotelev1">&gt; oob_tcp_debug 1000 -np 4 -machinefile j ./a.out
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0] accepting connections via event library
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0] mca_oob_tcp_accept: 5.6.128.49:59075
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] accepted: 5.6.128.48 - 5.6.128.49 nodelay  
</span><br>
<span class="quotelev1">&gt; 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 197
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,0] mca_oob_tcp_send_nb: tag 20 size 333
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 20 size 333
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,0] mca_oob_tcp_send_nb: tag 4 size 1441
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 4 size 1441
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 1218
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 117
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,1] mca_oob_tcp_send_nb: tag 4 size 26
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 154
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,1] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 0 to: 10.173.128.49:45984
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,1] connected: 10.173.128.49 - 10.173.128.49  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 117
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,1] mca_oob_tcp_send_nb: tag 4 size 26
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 154
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,1] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 0 to: 10.173.128.49:45984
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,1] connected: 10.173.128.49 - 10.173.128.49  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0] accepting connections via event library
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 117
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,1] mca_oob_tcp_send_nb: tag 4 size 26
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 154
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,1] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 0 to: 10.173.128.49:45984
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,1] connected: 10.173.128.49 - 10.173.128.49  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3] accepting connections via event library
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 117
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,1] mca_oob_tcp_send_nb: tag 4 size 26
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 154
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,1] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 0 to: 10.173.128.49:45984
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,1] connected: 10.173.128.49 - 10.173.128.49  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1] accepting connections via event library
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2] accepting connections via event library
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 119
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 1190
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 155
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 34143 to: 7.8.82.120:45243
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 158
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 34143 to: 10.173.128.48:45243
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 289
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_peer_try_connect: connect to  
</span><br>
<span class="quotelev1">&gt; 10.173.128.48:45243 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 34143 to: 5.6.128.48:45243
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0] mca_oob_tcp_accept: 5.6.128.49:59081
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] accepted: 5.6.128.48 - 5.6.128.49 nodelay  
</span><br>
<span class="quotelev1">&gt; 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 170
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] connected: 5.6.128.49 - 5.6.128.48  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 1190
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 119
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 1190
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 155
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 38806 to: 7.8.82.120:45243
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 158
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 38806 to: 10.173.128.48:45243
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0] mca_oob_tcp_accept: 5.6.128.49:59083
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 289
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_peer_try_connect: connect to  
</span><br>
<span class="quotelev1">&gt; 10.173.128.48:45243 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 38806 to: 5.6.128.48:45243
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] accepted: 5.6.128.48 - 5.6.128.49 nodelay  
</span><br>
<span class="quotelev1">&gt; 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 170
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] connected: 5.6.128.49 - 5.6.128.48  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 1190
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 119
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 1190
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 155
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 50390 to: 7.8.82.120:45243
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 158
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 50390 to: 10.173.128.48:45243
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0] mca_oob_tcp_accept: 5.6.128.49:59085
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 289
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_peer_try_connect: connect to  
</span><br>
<span class="quotelev1">&gt; 10.173.128.48:45243 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 50390 to: 5.6.128.48:45243
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 218
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 1190
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 56284 to: 7.8.82.120:45243
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] accepted: 5.6.128.48 - 5.6.128.49 nodelay  
</span><br>
<span class="quotelev1">&gt; 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 170
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] connected: 5.6.128.49 - 5.6.128.48  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 158
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 56284 to: 10.173.128.48:45243
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 1190
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0] mca_oob_tcp_accept: 5.6.128.49:59087
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 289
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_peer_try_connect: connect to  
</span><br>
<span class="quotelev1">&gt; 10.173.128.48:45243 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 56284 to: 5.6.128.48:45243
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] accepted: 5.6.128.48 - 5.6.128.49 nodelay  
</span><br>
<span class="quotelev1">&gt; 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 170
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] connected: 5.6.128.49 - 5.6.128.48  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 1190
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 7 size 2130
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 7 size 2130
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 7 size 2130
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 7 size 2130
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 122
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 2130
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 122
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 2130
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 122
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 2130
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 122
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 2130
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 220
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,1] mca_oob_tcp_send_nb: tag 18 size 28
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,1] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 34143 to: 10.173.128.49:38806
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1] mca_oob_tcp_accept: 10.173.128.49:60961
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,1] connected: 10.173.128.49 - 10.173.128.49  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 175
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[1,0] accepted: 10.173.128.49 - 10.173.128.49  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[1,0] mca_oob_tcp_msg_recv_handler: size 28
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 220
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,2] mca_oob_tcp_send_nb: tag 18 size 28
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,2] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 34143 to: 10.173.128.49:50390
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2] mca_oob_tcp_accept: 10.173.128.49:34601
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,2] connected: 10.173.128.49 - 10.173.128.49  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 175
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[1,0] accepted: 10.173.128.49 - 10.173.128.49  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[1,0] mca_oob_tcp_msg_recv_handler: size 28
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 220
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,3] mca_oob_tcp_send_nb: tag 18 size 28
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,3] mca_oob_tcp_peer_try_connect: connecting  
</span><br>
<span class="quotelev1">&gt; port 34143 to: 10.173.128.49:56284
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3] mca_oob_tcp_accept: 10.173.128.49:36463
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,3] connected: 10.173.128.49 - 10.173.128.49  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 175
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[1,0] accepted: 10.173.128.49 - 10.173.128.49  
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[1,0] mca_oob_tcp_msg_recv_handler: size 28
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 242
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,1] mca_oob_tcp_send_nb: tag 18 size 28
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,2] mca_oob_tcp_send_nb: tag 18 size 28
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,3] mca_oob_tcp_send_nb: tag 18 size 28
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[1,0] mca_oob_tcp_msg_recv_handler: size 28
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[1,0] mca_oob_tcp_msg_recv_handler: size 28
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[1,0] mca_oob_tcp_msg_recv_handler: size 28
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 7 size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 7 size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 7 size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 7 size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 80
</span><br>
<span class="quotelev1">&gt; Process 0 of 4 on s0121
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 80
</span><br>
<span class="quotelev1">&gt; Process 1 of 4 on s0121
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 80
</span><br>
<span class="quotelev1">&gt; Process 3 of 4 on s0121
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 80
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 on s0121
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 96
</span><br>
<span class="quotelev1">&gt; 15383:a.out *-&gt;2 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 96
</span><br>
<span class="quotelev1">&gt; 15384:a.out *-&gt;2 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 96
</span><br>
<span class="quotelev1">&gt; 15385:a.out *-&gt;3 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 96
</span><br>
<span class="quotelev1">&gt; 15386:a.out *-&gt;2 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 244
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 244
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 308
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 100
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 7 size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 7 size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 7 size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 7 size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 105
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 244
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 105
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 105
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 182
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 105
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 105
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 182
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 105
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 105
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 105
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 7 size 183
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 7 size 183
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 7 size 183
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 7 size 183
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv: peer closed connection
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,3] mca_oob_tcp_peer_close(0x52cb20) sd 11  
</span><br>
<span class="quotelev1">&gt; state 4
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv: peer closed connection
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,1] mca_oob_tcp_peer_close(0x52c5e0) sd 9  
</span><br>
<span class="quotelev1">&gt; state 4
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv: peer closed connection
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,2] mca_oob_tcp_peer_close(0x52c880) sd 10  
</span><br>
<span class="quotelev1">&gt; state 4
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
</span><br>
<span class="quotelev1">&gt; [s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 183
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
</span><br>
<span class="quotelev1">&gt; [s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 183
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
</span><br>
<span class="quotelev1">&gt; [s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 183
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 183
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 127
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,3] mca_oob_tcp_msg_recv: peer closed connection
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 106
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 129
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,3] mca_oob_tcp_peer_close(0x51d500) sd 14  
</span><br>
<span class="quotelev1">&gt; state 4
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 200
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,2] mca_oob_tcp_msg_recv: peer closed connection
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,2] mca_oob_tcp_peer_close(0x51d260) sd 13  
</span><br>
<span class="quotelev1">&gt; state 4
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 200
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,1] mca_oob_tcp_msg_recv: peer closed connection
</span><br>
<span class="quotelev1">&gt; [s0121:15383] [1,0]-[1,1] mca_oob_tcp_peer_close(0x51cfc0) sd 12  
</span><br>
<span class="quotelev1">&gt; state 4
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 106
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv: peer closed connection
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[1,0] mca_oob_tcp_peer_close(0x52c340) sd 8  
</span><br>
<span class="quotelev1">&gt; state 4
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 106
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 56
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 140
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 106
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,0] mca_oob_tcp_send_nb: tag 4 size 26
</span><br>
<span class="quotelev1">&gt; [s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 4 size 26
</span><br>
<span class="quotelev1">&gt; mostyn_at_s0120:/ctmp8/mostyn/glamex/pi&gt; ifconfig -a
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:1B:24:3E:13:63
</span><br>
<span class="quotelev1">&gt;            inet addr:7.8.82.120  Bcast:7.8.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev1">&gt;            UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;            RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;            Interrupt:233 Base address:0xe000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:1B:24:3E:13:64
</span><br>
<span class="quotelev1">&gt;            inet addr:10.173.128.48  Bcast:10.173.255.255  Mask: 
</span><br>
<span class="quotelev1">&gt; 255.255.0.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: fe80::21b:24ff:fe3e:1364/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;            UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:17976983 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:4204911 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;            RX bytes:10709547521 (10213.4 Mb)  TX bytes:586325842  
</span><br>
<span class="quotelev1">&gt; (559.1 Mb)
</span><br>
<span class="quotelev1">&gt;            Interrupt:50
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib1       Link encap:Ethernet  HWaddr 02:00:00:00:00:01
</span><br>
<span class="quotelev1">&gt;            inet addr:5.6.128.48  Bcast:5.6.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: fe80::ff:fe00:1/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;            UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:8153 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:4116 errors:0 dropped:7 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;            RX bytes:1638837 (1.5 Mb)  TX bytes:677364 (661.4 Kb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;            inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;            UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:6081 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:6081 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;            RX bytes:6011701 (5.7 Mb)  TX bytes:6011701 (5.7 Mb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sit0      Link encap:IPv6-in-IPv4
</span><br>
<span class="quotelev1">&gt;            NOARP  MTU:1480  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;            RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt; mostyn_at_s0120:/ctmp8/mostyn/glamex/pi&gt; $OPENMPI_GCC/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;                  Open MPI: 1.3a1svn09302007
</span><br>
<span class="quotelev1">&gt;     Open MPI SVN revision: svn09302007
</span><br>
<span class="quotelev1">&gt;                  Open RTE: 1.3a1svn09302007
</span><br>
<span class="quotelev1">&gt;     Open RTE SVN revision: svn09302007
</span><br>
<span class="quotelev1">&gt;                      OPAL: 1.3a1svn09302007
</span><br>
<span class="quotelev1">&gt;         OPAL SVN revision: svn09302007
</span><br>
<span class="quotelev1">&gt;                    Prefix: /tools/openmpi/1.3a1r16272_svn/ethernet/ 
</span><br>
<span class="quotelev1">&gt; gcc64/4.1.0/tcp/suse_sles_10/x86_64/opteron
</span><br>
<span class="quotelev1">&gt;   Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configure host: s0191
</span><br>
<span class="quotelev1">&gt;             Configured by: root
</span><br>
<span class="quotelev1">&gt;             Configured on: Sun Sep 30 15:11:05 PDT 2007
</span><br>
<span class="quotelev1">&gt;            Configure host: s0191
</span><br>
<span class="quotelev1">&gt;                  Built by: mostyn
</span><br>
<span class="quotelev1">&gt;                  Built on: Sun Sep 30 15:20:43 PDT 2007
</span><br>
<span class="quotelev1">&gt;                Built host: s0191
</span><br>
<span class="quotelev1">&gt;                C bindings: yes
</span><br>
<span class="quotelev1">&gt;              C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;        Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;   Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;                C compiler: gcc
</span><br>
<span class="quotelev1">&gt;       C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;              C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;     C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;        Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;    Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;        Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;    Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;               C profiling: yes
</span><br>
<span class="quotelev1">&gt;             C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;            Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;             Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;    Internal debug support: no
</span><br>
<span class="quotelev1">&gt;       MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;           libltdl support: yes
</span><br>
<span class="quotelev1">&gt;     Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;   mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;           MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: execinfo (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: linux (MCA v1.0, API v1.1, Component v1.3)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: libnuma (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: linux (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;           MCA installdirs: env (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;           MCA installdirs: config (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: inter (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: dr (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: rdma (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA grpcomm: basic (MCA v1.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA odls: default (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev1">&gt; Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: localhost (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: slurm (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev1">&gt; Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA routed: unity (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev1">&gt; Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: slurm (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: slurm (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA filem: rsh (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt; mostyn_at_s0120:/ctmp8/mostyn/glamex/pi&gt; exit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Script done on Mon 01 Oct 2007 04:35:03 PM PDT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, 30 Sep 2007, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas about this. One dual core operton box talking to another  
</span><br>
<span class="quotelev2">&gt;&gt; using
</span><br>
<span class="quotelev2">&gt;&gt; infincon/silverstorm/qlogic hardware and mvapi (actually it's the  
</span><br>
<span class="quotelev2">&gt;&gt; same
</span><br>
<span class="quotelev2">&gt;&gt; just using ethernet and tcp):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $OPENMPI_INFINICON_GCC_MVAPI/bin/mpicc cpi.c
</span><br>
<span class="quotelev2">&gt;&gt; $OPENMPI_INFINICON_GCC_MVAPI/bin/-np 4 -machinefile j ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; [s0121:07450] [1,0]-[0,0] mca_oob_tcp_peer_try_connect: connect to  
</span><br>
<span class="quotelev2">&gt;&gt; 10.173.128.48:43359 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev2">&gt;&gt; [s0121:07451] [1,1]-[0,0] mca_oob_tcp_peer_try_connect: connect to  
</span><br>
<span class="quotelev2">&gt;&gt; 10.173.128.48:43359 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev2">&gt;&gt; [s0121:07453] [1,3]-[0,0] mca_oob_tcp_peer_try_connect: connect to  
</span><br>
<span class="quotelev2">&gt;&gt; 10.173.128.48:43359 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev2">&gt;&gt; [s0121:07452] [1,2]-[0,0] mca_oob_tcp_peer_try_connect: connect to  
</span><br>
<span class="quotelev2">&gt;&gt; 10.173.128.48:43359 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev2">&gt;&gt; Process 2 of 4 on s0121
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 of 4 on s0121
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 of 4 on s0121
</span><br>
<span class="quotelev2">&gt;&gt; Process 3 of 4 on s0121
</span><br>
<span class="quotelev2">&gt;&gt; 7451:a.out *-&gt;3 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev2">&gt;&gt; 7453:a.out *-&gt;2 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev2">&gt;&gt; 7450:a.out *-&gt;3 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev2">&gt;&gt; 7452:a.out *-&gt;3 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Process msgs and the affinity stuff means it ran. The oob msgs  
</span><br>
<span class="quotelev2">&gt;&gt; are somewhat annoying
</span><br>
<span class="quotelev2">&gt;&gt; (imagine hundreds of nodes). The 10.173.128.48 address is the  
</span><br>
<span class="quotelev2">&gt;&gt; launch node (s0120).
</span><br>
<span class="quotelev2">&gt;&gt; This is SuSE SLES10:
</span><br>
<span class="quotelev2">&gt;&gt; s0120    Sun Sep 30 16:15:02 PDT 2007
</span><br>
<span class="quotelev2">&gt;&gt; SUSE Linux Enterprise Server 10 (x86_64)
</span><br>
<span class="quotelev2">&gt;&gt; Linux version 2.6.16.21-0.8-smp.lustre-1.6.1.X2200.MRL-0.8-smp  
</span><br>
<span class="quotelev2">&gt;&gt; (geeko_at_buildhost) (gcc version 4.1.0 (SUSE Linux)) #1 SMP Tue Aug  
</span><br>
<span class="quotelev2">&gt;&gt; 28 09:51:26 PDT 2007
</span><br>
<span class="quotelev2">&gt;&gt; Machine Model Sun Fire X2200 M2
</span><br>
<span class="quotelev2">&gt;&gt; Bus Speed 202 MHz
</span><br>
<span class="quotelev2">&gt;&gt; 4 Cpus
</span><br>
<span class="quotelev2">&gt;&gt; CPU0 Dual-Core AMD Opteron(tm) Processor 2220(2814.485Mhz) stepping 3
</span><br>
<span class="quotelev2">&gt;&gt; L1 I Cache: 64K (64 bytes/line), D cache 64K (64 bytes/line)
</span><br>
<span class="quotelev2">&gt;&gt; L2 cache: 1024 KB
</span><br>
<span class="quotelev2">&gt;&gt; CPU1 Dual-Core AMD Opteron(tm) Processor 2220(2814.485Mhz) stepping 3
</span><br>
<span class="quotelev2">&gt;&gt; L1 I Cache: 64K (64 bytes/line), D cache 64K (64 bytes/line)
</span><br>
<span class="quotelev2">&gt;&gt; L2 cache: 1024 KB
</span><br>
<span class="quotelev2">&gt;&gt; CPU2 Dual-Core AMD Opteron(tm) Processor 2220(2814.485Mhz) stepping 3
</span><br>
<span class="quotelev2">&gt;&gt; L1 I Cache: 64K (64 bytes/line), D cache 64K (64 bytes/line)
</span><br>
<span class="quotelev2">&gt;&gt; L2 cache: 1024 KB
</span><br>
<span class="quotelev2">&gt;&gt; CPU3 Dual-Core AMD Opteron(tm) Processor 2220(2814.485Mhz) stepping 3
</span><br>
<span class="quotelev2">&gt;&gt; L1 I Cache: 64K (64 bytes/line), D cache 64K (64 bytes/line)
</span><br>
<span class="quotelev2">&gt;&gt; L2 cache: 1024 KB
</span><br>
<span class="quotelev2">&gt;&gt; 16.0 GB memory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Mostyn
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4167.php">Michael Clover: "[OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
<li><strong>Previous message:</strong> <a href="4165.php">Michael Clover: "[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>In reply to:</strong> <a href="4123.php">Mostyn Lewis: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<!-- nextthread="start" -->
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
