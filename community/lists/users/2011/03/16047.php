<?
$subject_val = "Re: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 29 22:15:58 2011" -->
<!-- isoreceived="20110330021558" -->
<!-- sent="Tue, 29 Mar 2011 21:15:51 -0500" -->
<!-- isosent="20110330021551" -->
<!-- name="atexannamedbob_at_[hidden]" -->
<!-- email="atexannamedbob_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order." -->
<!-- id="SNT141-w25BC368EA4BD5A98069C80C4BC0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="SNT141-w56836C2D6F739C77E9ACF3C4C50_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order.<br>
<strong>From:</strong> <a href="mailto:atexannamedbob_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Connection%20Errors:%20Socket%20is%20not%20connected%20(57)%20but%20works%20for%20a%20one%20messages%20to%20each%20place%20at%20first.%20Works%20on%20machine%20order."><em>atexannamedbob_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-03-29 22:15:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16048.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="16046.php">job hunter: "Re: [OMPI users] help with hybrid openmp and mpi"</a>
<li><strong>In reply to:</strong> <a href="15798.php">atexannamedbob_at_[hidden]: "[OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was fixed with 
<br>
--mca btl_tcp_if_exclude lo,eth0,vmnet0,vmnet1,vmnet8.
<br>
The machines were trying to connect through virtual connections on the machine.
<br>
Thanks!
<br>
&nbsp;
<br>
&nbsp;
<br>
<p><p>From: atexannamedbob_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Date: Fri, 4 Mar 2011 23:43:42 -0600
<br>
Subject: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order.
<br>
<p><p><p><p>Dear Open-mpi users,
<br>
Currently we are running on 4 imacs 10.5.8 all identical and all on the same network using MPI version 1.4.1.
<br>
We get an error that we cannot seem to find any help on. 
<br>
Sometimes we get the error Socket Connection (79)
<br>
[30451,1],1][btl_tcp_endpoint.c:298:mca_btl_tcp_endpoint_send_blocking] send() failed: Socket is not connected (57)
<br>
The strangest thing is the error only happens when we run with certain machines in a certain order.
<br>
<p><p>ECHO $Path /usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin:/usr/X11/bin:/usr/texbin
<br>
<p>mpicc -m64 -lpthread -w -lm -std=&quot;c99&quot; inc/*.h lib/*.c -o dispatcher
<br>
<p>The strange issues all dispatchers are able to send a one small message  to each other before this error occurs.
<br>
Does not work:
<br>
mpirun -H juhu,hama -n 2 dispatcher
<br>
mpirun -H hama,juhu -n 2 dispatcher
<br>
mpirun -H hama,tuvalu -n 2 dispatcher
<br>
mpirun -H juhu,tuvalu -n 2 dispatcher
<br>
Works: 
<br>
mpirun -H tuvalu,juhu -n 2 dispatcher
<br>
mpirun -H tuvalu,hama -n 2 dispatcher
<br>
Dispatcher is a multithreaded application that sends messages to other dispatchers.
<br>
<p><p>ifconfig output for machine 1 with the problem
<br>
<p>lo0: flags=8049&lt;UP,LOOPBACK,RUNNING,MULTICAST&gt; mtu 16384
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 127.0.0.1 netmask 0xff000000 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet6 ::1 prefixlen 128 
<br>
gif0: flags=8010&lt;POINTOPOINT,MULTICAST&gt; mtu 1280
<br>
stf0: flags=0&lt;&gt; mtu 1280
<br>
fw0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 4078
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lladdr 00:1f:f3:ff:fe:6e:5d:26 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect &lt;full-duplex&gt; status: inactive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;supported media: autoselect &lt;full-duplex&gt;
<br>
en1: flags=8823&lt;UP,BROADCAST,SMART,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ether 00:1f:5b:c9:3b:8f 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect (&lt;unknown type&gt;) status: inactive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;supported media: autoselect
<br>
en0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 131.179.224.186 netmask 0xffffff00 broadcast 131.179.224.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ether 00:1f:f3:59:d2:3d 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect (100baseTX &lt;full-duplex&gt;) status: active
<br>
&nbsp;&nbsp;&nbsp;&nbsp;supported media: autoselect 10baseT/UTP &lt;half-duplex&gt; 10baseT/UTP &lt;full-duplex&gt; 10baseT/UTP &lt;full-duplex,hw-loopback&gt; 10baseT/UTP &lt;full-duplex,flow-control&gt; 100baseTX &lt;half-duplex&gt; 100baseTX &lt;full-duplex&gt; 100baseTX &lt;full-duplex,hw-loopback&gt; 100baseTX &lt;full-duplex,flow-control&gt; 1000baseT &lt;full-duplex&gt; 1000baseT &lt;full-duplex,hw-loopback&gt; 1000baseT &lt;full-duplex,flow-control&gt; none
<br>
vmnet8: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 172.16.181.1 netmask 0xffffff00 broadcast 172.16.181.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ether 00:50:56:c0:00:08 
<br>
vmnet1: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 172.16.32.1 netmask 0xffffff00 broadcast 172.16.32.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ether 00:50:56:c0:00:01 
<br>
<p>ifconfig output for machine 2 with the problem
<br>
<p><p>lo0: flags=8049&lt;UP,LOOPBACK,RUNNING,MULTICAST&gt; mtu 16384
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 127.0.0.1 netmask 0xff000000 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet6 ::1 prefixlen 128 
<br>
gif0: flags=8010&lt;POINTOPOINT,MULTICAST&gt; mtu 1280
<br>
stf0: flags=0&lt;&gt; mtu 1280
<br>
fw0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 4078
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lladdr 00:1f:5b:ff:fe:20:ae:1e 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect &lt;full-duplex&gt; status: inactive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;supported media: autoselect &lt;full-duplex&gt;
<br>
en1: flags=8823&lt;UP,BROADCAST,SMART,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ether 00:1f:5b:c9:10:1d 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect (&lt;unknown type&gt;) status: inactive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;supported media: autoselect
<br>
en0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::21e:c2ff:fe1a:c673%en0 prefixlen 64 scopeid 0x6 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 131.179.224.185 netmask 0xffffff00 broadcast 131.179.224.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ether 00:1e:c2:1a:c6:73 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect (100baseTX &lt;full-duplex&gt;) status: active
<br>
&nbsp;&nbsp;&nbsp;&nbsp;supported media: autoselect 10baseT/UTP &lt;half-duplex&gt; 10baseT/UTP &lt;full-duplex&gt; 10baseT/UTP &lt;full-duplex,hw-loopback&gt; 10baseT/UTP &lt;full-duplex,flow-control&gt; 100baseTX &lt;half-duplex&gt; 100baseTX &lt;full-duplex&gt; 100baseTX &lt;full-duplex,hw-loopback&gt; 100baseTX &lt;full-duplex,flow-control&gt; 1000baseT &lt;full-duplex&gt; 1000baseT &lt;full-duplex,hw-loopback&gt; 1000baseT &lt;full-duplex,flow-control&gt; none
<br>
vboxnet0: flags=8842&lt;BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ether 0a:00:27:00:00:00 
<br>
vmnet1: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 192.168.138.1 netmask 0xffffff00 broadcast 192.168.138.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ether 00:50:56:c0:00:01 
<br>
vmnet8: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 192.168.56.1 netmask 0xffffff00 broadcast 192.168.56.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ether 00:50:56:c0:00:08 
<br>
<p><p>Thanks!
<br>
Oren
<br>
<p>_______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16047/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16048.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="16046.php">job hunter: "Re: [OMPI users] help with hybrid openmp and mpi"</a>
<li><strong>In reply to:</strong> <a href="15798.php">atexannamedbob_at_[hidden]: "[OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order."</a>
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
