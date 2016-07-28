<?
$subject_val = "Re: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 11:07:59 2011" -->
<!-- isoreceived="20110317150759" -->
<!-- sent="Thu, 17 Mar 2011 11:07:52 -0400" -->
<!-- isosent="20110317150752" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order." -->
<!-- id="E5D6FCEB-2066-4C53-9CA8-30901596A6AC_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-17 11:07:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15897.php">Jeff Squyres: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>Previous message:</strong> <a href="15895.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>In reply to:</strong> <a href="15798.php">atexannamedbob_at_[hidden]: "[OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16047.php">atexannamedbob_at_[hidden]: "Re: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delayed reply.
<br>
<p>Is there any chance you can upgrade to the latest version of Open MPI?
<br>
<p>Also, I'm not an IPv6 expert -- could you try disabling IPv6?  (I can't tell offhand from your output whether it's enabled or disabled)
<br>
<p>I say this because we *did* have a whacko problem on OS X regarding IPv6 (see <a href="http://blogs.cisco.com/performance/why_mpi_is_good_for_you/">http://blogs.cisco.com/performance/why_mpi_is_good_for_you/</a> and the linked Open MPI commit message for some details, if you care).  This fix was included in Open MPI 1.4.2 and the entire 1.5.x series.  If you can upgrade to 1.4.2, you may not need to change your IPv6 settings.
<br>
<p><p>On Mar 5, 2011, at 12:43 AM, &lt;atexannamedbob_at_[hidden]&gt; &lt;atexannamedbob_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open-mpi users,
</span><br>
<span class="quotelev1">&gt; Currently we are running on 4 imacs 10.5.8 all identical and all on the same network using MPI version 1.4.1.
</span><br>
<span class="quotelev1">&gt; We get an error that we cannot seem to find any help on. 
</span><br>
<span class="quotelev1">&gt; Sometimes we get the error Socket Connection (79)
</span><br>
<span class="quotelev1">&gt; [30451,1],1][btl_tcp_endpoint.c:298:mca_btl_tcp_endpoint_send_blocking] send() failed: Socket is not connected (57)
</span><br>
<span class="quotelev1">&gt; The strangest thing is the error only happens when we run with certain machines in a certain order.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ECHO $Path /usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin:/usr/X11/bin:/usr/texbin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc -m64 -lpthread -w -lm -std=&quot;c99&quot; inc/*.h lib/*.c -o dispatcher
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The strange issues all dispatchers are able to send a one small message  to each other before this error occurs.
</span><br>
<span class="quotelev1">&gt; Does not work:
</span><br>
<span class="quotelev1">&gt; mpirun -H juhu,hama -n 2 dispatcher
</span><br>
<span class="quotelev1">&gt; mpirun -H hama,juhu -n 2 dispatcher
</span><br>
<span class="quotelev1">&gt; mpirun -H hama,tuvalu -n 2 dispatcher
</span><br>
<span class="quotelev1">&gt; mpirun -H juhu,tuvalu -n 2 dispatcher
</span><br>
<span class="quotelev1">&gt; Works: 
</span><br>
<span class="quotelev1">&gt; mpirun -H tuvalu,juhu -n 2 dispatcher
</span><br>
<span class="quotelev1">&gt; mpirun -H tuvalu,hama -n 2 dispatcher
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dispatcher is a multithreaded application that sends messages to other dispatchers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ifconfig output for machine 1 with the problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo0: flags=8049&lt;UP,LOOPBACK,RUNNING,MULTICAST&gt; mtu 16384
</span><br>
<span class="quotelev1">&gt;     inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1 
</span><br>
<span class="quotelev1">&gt;     inet 127.0.0.1 netmask 0xff000000 
</span><br>
<span class="quotelev1">&gt;     inet6 ::1 prefixlen 128 
</span><br>
<span class="quotelev1">&gt; gif0: flags=8010&lt;POINTOPOINT,MULTICAST&gt; mtu 1280
</span><br>
<span class="quotelev1">&gt; stf0: flags=0&lt;&gt; mtu 1280
</span><br>
<span class="quotelev1">&gt; fw0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 4078
</span><br>
<span class="quotelev1">&gt;     lladdr 00:1f:f3:ff:fe:6e:5d:26 
</span><br>
<span class="quotelev1">&gt;     media: autoselect &lt;full-duplex&gt; status: inactive
</span><br>
<span class="quotelev1">&gt;     supported media: autoselect &lt;full-duplex&gt;
</span><br>
<span class="quotelev1">&gt; en1: flags=8823&lt;UP,BROADCAST,SMART,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;     ether 00:1f:5b:c9:3b:8f 
</span><br>
<span class="quotelev1">&gt;     media: autoselect (&lt;unknown type&gt;) status: inactive
</span><br>
<span class="quotelev1">&gt;     supported media: autoselect
</span><br>
<span class="quotelev1">&gt; en0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;     inet 131.179.224.186 netmask 0xffffff00 broadcast 131.179.224.255
</span><br>
<span class="quotelev1">&gt;     ether 00:1f:f3:59:d2:3d 
</span><br>
<span class="quotelev1">&gt;     media: autoselect (100baseTX &lt;full-duplex&gt;) status: active
</span><br>
<span class="quotelev1">&gt;     supported media: autoselect 10baseT/UTP &lt;half-duplex&gt; 10baseT/UTP &lt;full-duplex&gt; 10baseT/UTP &lt;full-duplex,hw-loopback&gt; 10baseT/UTP &lt;full-duplex,flow-control&gt; 100baseTX &lt;half-duplex&gt; 100baseTX &lt;full-duplex&gt; 100baseTX &lt;full-duplex,hw-loopback&gt; 100baseTX &lt;full-duplex,flow-control&gt; 1000baseT &lt;full-duplex&gt; 1000baseT &lt;full-duplex,hw-loopback&gt; 1000baseT &lt;full-duplex,flow-control&gt; none
</span><br>
<span class="quotelev1">&gt; vmnet8: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;     inet 172.16.181.1 netmask 0xffffff00 broadcast 172.16.181.255
</span><br>
<span class="quotelev1">&gt;     ether 00:50:56:c0:00:08 
</span><br>
<span class="quotelev1">&gt; vmnet1: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;     inet 172.16.32.1 netmask 0xffffff00 broadcast 172.16.32.255
</span><br>
<span class="quotelev1">&gt;     ether 00:50:56:c0:00:01 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ifconfig output for machine 2 with the problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo0: flags=8049&lt;UP,LOOPBACK,RUNNING,MULTICAST&gt; mtu 16384
</span><br>
<span class="quotelev1">&gt;     inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1 
</span><br>
<span class="quotelev1">&gt;     inet 127.0.0.1 netmask 0xff000000 
</span><br>
<span class="quotelev1">&gt;     inet6 ::1 prefixlen 128 
</span><br>
<span class="quotelev1">&gt; gif0: flags=8010&lt;POINTOPOINT,MULTICAST&gt; mtu 1280
</span><br>
<span class="quotelev1">&gt; stf0: flags=0&lt;&gt; mtu 1280
</span><br>
<span class="quotelev1">&gt; fw0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 4078
</span><br>
<span class="quotelev1">&gt;     lladdr 00:1f:5b:ff:fe:20:ae:1e 
</span><br>
<span class="quotelev1">&gt;     media: autoselect &lt;full-duplex&gt; status: inactive
</span><br>
<span class="quotelev1">&gt;     supported media: autoselect &lt;full-duplex&gt;
</span><br>
<span class="quotelev1">&gt; en1: flags=8823&lt;UP,BROADCAST,SMART,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;     ether 00:1f:5b:c9:10:1d 
</span><br>
<span class="quotelev1">&gt;     media: autoselect (&lt;unknown type&gt;) status: inactive
</span><br>
<span class="quotelev1">&gt;     supported media: autoselect
</span><br>
<span class="quotelev1">&gt; en0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;     inet6 fe80::21e:c2ff:fe1a:c673%en0 prefixlen 64 scopeid 0x6 
</span><br>
<span class="quotelev1">&gt;     inet 131.179.224.185 netmask 0xffffff00 broadcast 131.179.224.255
</span><br>
<span class="quotelev1">&gt;     ether 00:1e:c2:1a:c6:73 
</span><br>
<span class="quotelev1">&gt;     media: autoselect (100baseTX &lt;full-duplex&gt;) status: active
</span><br>
<span class="quotelev1">&gt;     supported media: autoselect 10baseT/UTP &lt;half-duplex&gt; 10baseT/UTP &lt;full-duplex&gt; 10baseT/UTP &lt;full-duplex,hw-loopback&gt; 10baseT/UTP &lt;full-duplex,flow-control&gt; 100baseTX &lt;half-duplex&gt; 100baseTX &lt;full-duplex&gt; 100baseTX &lt;full-duplex,hw-loopback&gt; 100baseTX &lt;full-duplex,flow-control&gt; 1000baseT &lt;full-duplex&gt; 1000baseT &lt;full-duplex,hw-loopback&gt; 1000baseT &lt;full-duplex,flow-control&gt; none
</span><br>
<span class="quotelev1">&gt; vboxnet0: flags=8842&lt;BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;     ether 0a:00:27:00:00:00 
</span><br>
<span class="quotelev1">&gt; vmnet1: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;     inet 192.168.138.1 netmask 0xffffff00 broadcast 192.168.138.255
</span><br>
<span class="quotelev1">&gt;     ether 00:50:56:c0:00:01 
</span><br>
<span class="quotelev1">&gt; vmnet8: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;     inet 192.168.56.1 netmask 0xffffff00 broadcast 192.168.56.255
</span><br>
<span class="quotelev1">&gt;     ether 00:50:56:c0:00:08 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Oren
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.txt&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15897.php">Jeff Squyres: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>Previous message:</strong> <a href="15895.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>In reply to:</strong> <a href="15798.php">atexannamedbob_at_[hidden]: "[OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16047.php">atexannamedbob_at_[hidden]: "Re: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order."</a>
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
