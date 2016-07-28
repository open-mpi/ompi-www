<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 20:09:10 2007" -->
<!-- isoreceived="20071002000910" -->
<!-- sent="Mon, 01 Oct 2007 17:09:00 -0700 (PDT)" -->
<!-- isosent="20071002000900" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages" -->
<!-- id="Pine.GSO.4.64.0710011705490.14832_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0709301608590.9306_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 20:09:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4124.php">Tim Prins: "Re: [OMPI users] init_thread + spawn error"</a>
<li><strong>Previous message:</strong> <a href="4122.php">Oleg Morajko: "[OMPI users] Tool communication"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4104.php">Mostyn Lewis: "[OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4166.php">Jeff Squyres: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<li><strong>Reply:</strong> <a href="4166.php">Jeff Squyres: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More information. Sorry about the length of this.
<br>
I switched on -mca oob_tcp_debug 1000 and the result is below.
<br>
Later on there's an &quot;ifconfig -a&quot; as the trace seems to show you are trying
<br>
connections to all 3 interfaces in oob - 5.* is InfiniBand IPoIB - 7.* is a
<br>
private ethernet with no connection (cable) - 10.* is the general ethernet
<br>
which I thought I was using, only.
<br>
At the end there's a ompi_info.
<br>
<p>Is this expected behavio(u)r?
<br>
<p>Regards,
<br>
Mostyn
<br>
<p>Script started on Mon 01 Oct 2007 04:34:35 PM PDT
<br>
<p>mostyn_at_s0120:/ctmp8/mostyn/glamex/pi&gt; $OPENMPI_GCC/bin/mpirun -mca  oob_tcp_debug 1000 -np 4 -machinefile j ./a.out
<br>
[s0120:13160] [0,0] accepting connections via event library
<br>
[s0120:13160] [0,0] mca_oob_tcp_accept: 5.6.128.49:59075
<br>
[s0120:13160] [0,0]-[0,1] accepted: 5.6.128.48 - 5.6.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 197
<br>
[s0120:13160] [0,0]-[0,0] mca_oob_tcp_send_nb: tag 20 size 333
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 20 size 333
<br>
[s0120:13160] [0,0]-[0,0] mca_oob_tcp_send_nb: tag 4 size 1441
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 4 size 1441
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 1218
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 117
<br>
[s0121:15383] [1,0]-[0,1] mca_oob_tcp_send_nb: tag 4 size 26
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 154
<br>
[s0121:15383] [1,0]-[0,1] mca_oob_tcp_peer_try_connect: connecting port 0 to: 10.173.128.49:45984
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
<br>
[s0121:15383] [1,0]-[0,1] connected: 10.173.128.49 - 10.173.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 117
<br>
[s0121:15386] [1,3]-[0,1] mca_oob_tcp_send_nb: tag 4 size 26
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 154
<br>
[s0121:15386] [1,3]-[0,1] mca_oob_tcp_peer_try_connect: connecting port 0 to: 10.173.128.49:45984
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
<br>
[s0121:15386] [1,3]-[0,1] connected: 10.173.128.49 - 10.173.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
<br>
[s0121:15383] [1,0] accepting connections via event library
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 117
<br>
[s0121:15384] [1,1]-[0,1] mca_oob_tcp_send_nb: tag 4 size 26
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 154
<br>
[s0121:15384] [1,1]-[0,1] mca_oob_tcp_peer_try_connect: connecting port 0 to: 10.173.128.49:45984
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
<br>
[s0121:15384] [1,1]-[0,1] connected: 10.173.128.49 - 10.173.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
<br>
[s0121:15386] [1,3] accepting connections via event library
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 117
<br>
[s0121:15385] [1,2]-[0,1] mca_oob_tcp_send_nb: tag 4 size 26
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 154
<br>
[s0121:15385] [1,2]-[0,1] mca_oob_tcp_peer_try_connect: connecting port 0 to: 10.173.128.49:45984
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
<br>
[s0121:15385] [1,2]-[0,1] connected: 10.173.128.49 - 10.173.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
<br>
[s0121:15384] [1,1] accepting connections via event library
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
<br>
[s0121:15385] [1,2] accepting connections via event library
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 119
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 1190
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 155
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_peer_try_connect: connecting port 34143 to: 7.8.82.120:45243
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 158
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_peer_try_connect: connecting port 34143 to: 10.173.128.48:45243
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 289
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_peer_try_connect: connect to 10.173.128.48:45243 failed: Software caused connection abort (103)
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_peer_try_connect: connecting port 34143 to: 5.6.128.48:45243
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0] mca_oob_tcp_accept: 5.6.128.49:59081
<br>
[s0120:13160] [0,0]-[1,0] accepted: 5.6.128.48 - 5.6.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 170
<br>
[s0121:15383] [1,0]-[0,0] connected: 5.6.128.49 - 5.6.128.48 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 1190
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 119
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 1190
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 155
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_peer_try_connect: connecting port 38806 to: 7.8.82.120:45243
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 158
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_peer_try_connect: connecting port 38806 to: 10.173.128.48:45243
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0] mca_oob_tcp_accept: 5.6.128.49:59083
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 289
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_peer_try_connect: connect to 10.173.128.48:45243 failed: Software caused connection abort (103)
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_peer_try_connect: connecting port 38806 to: 5.6.128.48:45243
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,1] accepted: 5.6.128.48 - 5.6.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 170
<br>
[s0121:15384] [1,1]-[0,0] connected: 5.6.128.49 - 5.6.128.48 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 1190
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 119
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 1190
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 155
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_peer_try_connect: connecting port 50390 to: 7.8.82.120:45243
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 158
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_peer_try_connect: connecting port 50390 to: 10.173.128.48:45243
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0] mca_oob_tcp_accept: 5.6.128.49:59085
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 289
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_peer_try_connect: connect to 10.173.128.48:45243 failed: Software caused connection abort (103)
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_peer_try_connect: connecting port 50390 to: 5.6.128.48:45243
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 218
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 1190
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_peer_try_connect: connecting port 56284 to: 7.8.82.120:45243
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,2] accepted: 5.6.128.48 - 5.6.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 170
<br>
[s0121:15385] [1,2]-[0,0] connected: 5.6.128.49 - 5.6.128.48 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 158
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_peer_try_connect: connecting port 56284 to: 10.173.128.48:45243
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 1190
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0] mca_oob_tcp_accept: 5.6.128.49:59087
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 289
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_peer_try_connect: connect to 10.173.128.48:45243 failed: Software caused connection abort (103)
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_peer_try_connect: connecting port 56284 to: 5.6.128.48:45243
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,3] accepted: 5.6.128.48 - 5.6.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 170
<br>
[s0121:15386] [1,3]-[0,0] connected: 5.6.128.49 - 5.6.128.48 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 1190
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 7 size 2130
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 7 size 2130
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 7 size 2130
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 7 size 2130
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 122
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 2130
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 122
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 2130
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 122
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 2130
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 122
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 2130
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 220
<br>
[s0121:15383] [1,0]-[1,1] mca_oob_tcp_send_nb: tag 18 size 28
<br>
[s0121:15383] [1,0]-[1,1] mca_oob_tcp_peer_try_connect: connecting port 34143 to: 10.173.128.49:38806
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
<br>
[s0121:15384] [1,1] mca_oob_tcp_accept: 10.173.128.49:60961
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
<br>
[s0121:15383] [1,0]-[1,1] connected: 10.173.128.49 - 10.173.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 175
<br>
[s0121:15384] [1,1]-[1,0] accepted: 10.173.128.49 - 10.173.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15384] [1,1]-[1,0] mca_oob_tcp_msg_recv_handler: size 28
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 220
<br>
[s0121:15383] [1,0]-[1,2] mca_oob_tcp_send_nb: tag 18 size 28
<br>
[s0121:15383] [1,0]-[1,2] mca_oob_tcp_peer_try_connect: connecting port 34143 to: 10.173.128.49:50390
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
<br>
[s0121:15385] [1,2] mca_oob_tcp_accept: 10.173.128.49:34601
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
<br>
[s0121:15383] [1,0]-[1,2] connected: 10.173.128.49 - 10.173.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 175
<br>
[s0121:15385] [1,2]-[1,0] accepted: 10.173.128.49 - 10.173.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15385] [1,2]-[1,0] mca_oob_tcp_msg_recv_handler: size 28
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 220
<br>
[s0121:15383] [1,0]-[1,3] mca_oob_tcp_send_nb: tag 18 size 28
<br>
[s0121:15383] [1,0]-[1,3] mca_oob_tcp_peer_try_connect: connecting port 34143 to: 10.173.128.49:56284
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 116
<br>
[s0121:15386] [1,3] mca_oob_tcp_accept: 10.173.128.49:36463
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 176
<br>
[s0121:15383] [1,0]-[1,3] connected: 10.173.128.49 - 10.173.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 175
<br>
[s0121:15386] [1,3]-[1,0] accepted: 10.173.128.49 - 10.173.128.49 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15386] [1,3]-[1,0] mca_oob_tcp_msg_recv_handler: size 28
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 242
<br>
[s0121:15383] [1,0]-[1,1] mca_oob_tcp_send_nb: tag 18 size 28
<br>
[s0121:15383] [1,0]-[1,2] mca_oob_tcp_send_nb: tag 18 size 28
<br>
[s0121:15383] [1,0]-[1,3] mca_oob_tcp_send_nb: tag 18 size 28
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15384] [1,1]-[1,0] mca_oob_tcp_msg_recv_handler: size 28
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15385] [1,2]-[1,0] mca_oob_tcp_msg_recv_handler: size 28
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15386] [1,3]-[1,0] mca_oob_tcp_msg_recv_handler: size 28
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 100
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 100
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 100
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 100
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 7 size 170
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 7 size 170
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 7 size 170
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 7 size 170
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 80
<br>
Process 0 of 4 on s0121
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 80
<br>
Process 1 of 4 on s0121
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 80
<br>
Process 3 of 4 on s0121
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 80
<br>
Process 2 of 4 on s0121
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 96
<br>
15383:a.out *-&gt;2 (f=noaffinity,0,1,2,3)
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 96
<br>
15384:a.out *-&gt;2 (f=noaffinity,0,1,2,3)
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 96
<br>
15385:a.out *-&gt;3 (f=noaffinity,0,1,2,3)
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 96
<br>
15386:a.out *-&gt;2 (f=noaffinity,0,1,2,3)
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 100
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 244
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 100
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 100
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 244
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 308
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 100
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 100
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 7 size 170
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 7 size 170
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 7 size 170
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 7 size 170
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 170
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv_handler: size 105
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 244
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_send_nb: tag 2 size 105
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv_handler: size 105
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 182
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_send_nb: tag 2 size 105
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv_handler: size 105
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 182
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_send_nb: tag 2 size 105
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 140
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 118
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_send_nb: tag 2 size 105
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv_handler: size 105
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_send_nb: tag 7 size 183
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_send_nb: tag 7 size 183
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_send_nb: tag 7 size 183
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_send_nb: tag 7 size 183
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 120
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_msg_recv: peer closed connection
<br>
[s0120:13160] [0,0]-[1,3] mca_oob_tcp_peer_close(0x52cb20) sd 11 state 4
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_msg_recv: peer closed connection
<br>
[s0120:13160] [0,0]-[1,1] mca_oob_tcp_peer_close(0x52c5e0) sd 9 state 4
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_msg_recv: peer closed connection
<br>
[s0120:13160] [0,0]-[1,2] mca_oob_tcp_peer_close(0x52c880) sd 10 state 4
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
<br>
[s0121:15384] [1,1]-[0,0] mca_oob_tcp_msg_recv_handler: size 183
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
<br>
[s0121:15385] [1,2]-[0,0] mca_oob_tcp_msg_recv_handler: size 183
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
<br>
[s0121:15386] [1,3]-[0,0] mca_oob_tcp_msg_recv_handler: size 183
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 121
<br>
[s0121:15383] [1,0]-[0,0] mca_oob_tcp_msg_recv_handler: size 183
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 127
<br>
[s0121:15383] [1,0]-[1,3] mca_oob_tcp_msg_recv: peer closed connection
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 106
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 129
<br>
[s0121:15383] [1,0]-[1,3] mca_oob_tcp_peer_close(0x51d500) sd 14 state 4
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 200
<br>
[s0121:15383] [1,0]-[1,2] mca_oob_tcp_msg_recv: peer closed connection
<br>
[s0121:15383] [1,0]-[1,2] mca_oob_tcp_peer_close(0x51d260) sd 13 state 4
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 200
<br>
[s0121:15383] [1,0]-[1,1] mca_oob_tcp_msg_recv: peer closed connection
<br>
[s0121:15383] [1,0]-[1,1] mca_oob_tcp_peer_close(0x51cfc0) sd 12 state 4
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 5 size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 106
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_msg_recv: peer closed connection
<br>
[s0120:13160] [0,0]-[1,0] mca_oob_tcp_peer_close(0x52c340) sd 8 state 4
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 106
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 56
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 140
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_msg_recv_handler: size 106
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 2 size 35
<br>
[s0120:13160] [0,0]-[0,0] mca_oob_tcp_send_nb: tag 4 size 26
<br>
[s0120:13160] [0,0]-[0,1] mca_oob_tcp_send_nb: tag 4 size 26
<br>
mostyn_at_s0120:/ctmp8/mostyn/glamex/pi&gt; ifconfig -a
<br>
eth0      Link encap:Ethernet  HWaddr 00:1B:24:3E:13:63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:7.8.82.120  Bcast:7.8.255.255  Mask:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:0 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:233 Base address:0xe000
<br>
<p>eth1      Link encap:Ethernet  HWaddr 00:1B:24:3E:13:64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.173.128.48  Bcast:10.173.255.255  Mask:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::21b:24ff:fe3e:1364/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:17976983 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:4204911 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:10709547521 (10213.4 Mb)  TX bytes:586325842 (559.1 Mb)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:50
<br>
<p>ib1       Link encap:Ethernet  HWaddr 02:00:00:00:00:01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:5.6.128.48  Bcast:5.6.255.255  Mask:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::ff:fe00:1/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:8153 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:4116 errors:0 dropped:7 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:1638837 (1.5 Mb)  TX bytes:677364 (661.4 Kb)
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:6081 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:6081 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:6011701 (5.7 Mb)  TX bytes:6011701 (5.7 Mb)
<br>
<p>sit0      Link encap:IPv6-in-IPv4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOARP  MTU:1480  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:0 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
<br>
mostyn_at_s0120:/ctmp8/mostyn/glamex/pi&gt; $OPENMPI_GCC/bin/ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.3a1svn09302007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI SVN revision: svn09302007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.3a1svn09302007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE SVN revision: svn09302007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.3a1svn09302007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: svn09302007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /tools/openmpi/1.3a1r16272_svn/ethernet/gcc64/4.1.0/tcp/suse_sles_10/x86_64/opteron
<br>
&nbsp;&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: s0191
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Sun Sep 30 15:11:05 PDT 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: s0191
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: mostyn
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Sun Sep 30 15:20:43 PDT 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: s0191
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
&nbsp;&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.1, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: inter (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: dr (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0.1, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: rdma (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: basic (MCA v1.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA odls: default (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: proxy (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: unity (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: proxy (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: slurm (MCA v1.0, API v1.3, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: slurm (MCA v1.0, API v1.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA filem: rsh (MCA v1.0, API v1.0, Component v1.3)
<br>
mostyn_at_s0120:/ctmp8/mostyn/glamex/pi&gt; exit
<br>
<p>Script done on Mon 01 Oct 2007 04:35:03 PM PDT
<br>
<p><p>On Sun, 30 Sep 2007, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; Any ideas about this. One dual core operton box talking to another using
</span><br>
<span class="quotelev1">&gt; infincon/silverstorm/qlogic hardware and mvapi (actually it's the same
</span><br>
<span class="quotelev1">&gt; just using ethernet and tcp):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $OPENMPI_INFINICON_GCC_MVAPI/bin/mpicc cpi.c
</span><br>
<span class="quotelev1">&gt; $OPENMPI_INFINICON_GCC_MVAPI/bin/-np 4 -machinefile j ./a.out
</span><br>
<span class="quotelev1">&gt; [s0121:07450] [1,0]-[0,0] mca_oob_tcp_peer_try_connect: connect to 10.173.128.48:43359 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev1">&gt; [s0121:07451] [1,1]-[0,0] mca_oob_tcp_peer_try_connect: connect to 10.173.128.48:43359 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev1">&gt; [s0121:07453] [1,3]-[0,0] mca_oob_tcp_peer_try_connect: connect to 10.173.128.48:43359 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev1">&gt; [s0121:07452] [1,2]-[0,0] mca_oob_tcp_peer_try_connect: connect to 10.173.128.48:43359 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 on s0121
</span><br>
<span class="quotelev1">&gt; Process 0 of 4 on s0121
</span><br>
<span class="quotelev1">&gt; Process 1 of 4 on s0121
</span><br>
<span class="quotelev1">&gt; Process 3 of 4 on s0121
</span><br>
<span class="quotelev1">&gt; 7451:a.out *-&gt;3 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev1">&gt; 7453:a.out *-&gt;2 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev1">&gt; 7450:a.out *-&gt;3 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev1">&gt; 7452:a.out *-&gt;3 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Process msgs and the affinity stuff means it ran. The oob msgs are somewhat annoying
</span><br>
<span class="quotelev1">&gt; (imagine hundreds of nodes). The 10.173.128.48 address is the launch node (s0120).
</span><br>
<span class="quotelev1">&gt; This is SuSE SLES10:
</span><br>
<span class="quotelev1">&gt; s0120    Sun Sep 30 16:15:02 PDT 2007
</span><br>
<span class="quotelev1">&gt; SUSE Linux Enterprise Server 10 (x86_64)
</span><br>
<span class="quotelev1">&gt; Linux version 2.6.16.21-0.8-smp.lustre-1.6.1.X2200.MRL-0.8-smp (geeko_at_buildhost) (gcc version 4.1.0 (SUSE Linux)) #1 SMP Tue Aug 28 09:51:26 PDT 2007
</span><br>
<span class="quotelev1">&gt; Machine Model Sun Fire X2200 M2
</span><br>
<span class="quotelev1">&gt; Bus Speed 202 MHz
</span><br>
<span class="quotelev1">&gt; 4 Cpus
</span><br>
<span class="quotelev1">&gt; CPU0 Dual-Core AMD Opteron(tm) Processor 2220(2814.485Mhz) stepping 3
</span><br>
<span class="quotelev1">&gt; L1 I Cache: 64K (64 bytes/line), D cache 64K (64 bytes/line)
</span><br>
<span class="quotelev1">&gt; L2 cache: 1024 KB
</span><br>
<span class="quotelev1">&gt; CPU1 Dual-Core AMD Opteron(tm) Processor 2220(2814.485Mhz) stepping 3
</span><br>
<span class="quotelev1">&gt; L1 I Cache: 64K (64 bytes/line), D cache 64K (64 bytes/line)
</span><br>
<span class="quotelev1">&gt; L2 cache: 1024 KB
</span><br>
<span class="quotelev1">&gt; CPU2 Dual-Core AMD Opteron(tm) Processor 2220(2814.485Mhz) stepping 3
</span><br>
<span class="quotelev1">&gt; L1 I Cache: 64K (64 bytes/line), D cache 64K (64 bytes/line)
</span><br>
<span class="quotelev1">&gt; L2 cache: 1024 KB
</span><br>
<span class="quotelev1">&gt; CPU3 Dual-Core AMD Opteron(tm) Processor 2220(2814.485Mhz) stepping 3
</span><br>
<span class="quotelev1">&gt; L1 I Cache: 64K (64 bytes/line), D cache 64K (64 bytes/line)
</span><br>
<span class="quotelev1">&gt; L2 cache: 1024 KB
</span><br>
<span class="quotelev1">&gt; 16.0 GB memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mostyn
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
<li><strong>Next message:</strong> <a href="4124.php">Tim Prins: "Re: [OMPI users] init_thread + spawn error"</a>
<li><strong>Previous message:</strong> <a href="4122.php">Oleg Morajko: "[OMPI users] Tool communication"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4104.php">Mostyn Lewis: "[OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4166.php">Jeff Squyres: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<li><strong>Reply:</strong> <a href="4166.php">Jeff Squyres: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
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
