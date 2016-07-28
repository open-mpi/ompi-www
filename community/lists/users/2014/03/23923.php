<?
$subject_val = "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 13:05:49 2014" -->
<!-- isoreceived="20140321170549" -->
<!-- sent="Fri, 21 Mar 2014 17:05:48 +0000" -->
<!-- isosent="20140321170548" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: problem for multiple clusters using mpirun" -->
<!-- id="3AF75699-26A4-4B73-AD35-5110B05AD5CE_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAADBNWy0+yKbuAp6MaRMk0e_8XKC7=g1T+U+Vy2-wHpx89jTng_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: problem for multiple clusters using mpirun<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 13:05:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23924.php">George Bosilca: "[OMPI users] EuroMPI/ASIA 2014: CFP"</a>
<li><strong>Previous message:</strong> <a href="23922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>In reply to:</strong> <a href="23919.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23940.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23940.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have any firewalling enabled on these machines?  If so, you'll want to either disable it, or allow random TCP connections between any of the cluster nodes.
<br>
<p><p>On Mar 21, 2014, at 10:24 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hsaeed_at_karp:~$ /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt; br0       Link encap:Ethernet  HWaddr 00:25:90:59:c9:ba
</span><br>
<span class="quotelev1">&gt;           inet addr:134.106.3.231  Bcast:134.106.3.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::225:90ff:fe59:c9ba/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:49080961 errors:0 dropped:50263 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:43279252 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:41348407558 (38.5 GiB)  TX bytes:80505842745 (74.9 GiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; br1       Link encap:Ethernet  HWaddr 00:25:90:59:c9:bb
</span><br>
<span class="quotelev1">&gt;           inet addr:134.106.53.231  Bcast:134.106.53.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::225:90ff:fe59:c9bb/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:41573060 errors:0 dropped:50261 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:1693509 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:6177072160 (5.7 GiB)  TX bytes:230617435 (219.9 MiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; br2       Link encap:Ethernet  HWaddr 00:c0:0a:ec:02:e7
</span><br>
<span class="quotelev1">&gt;           inet addr:10.231.2.231  Bcast:10.231.2.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:0 (0.0 B)  TX bytes:0 (0.0 B)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:25:90:59:c9:ba
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:69108377 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:86459066 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:43533091399 (40.5 GiB)  TX bytes:83359370885 (77.6 GiB)
</span><br>
<span class="quotelev1">&gt;           Memory:dfe60000-dfe80000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:25:90:59:c9:bb
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:43531546 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:1716151 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:7201915977 (6.7 GiB)  TX bytes:232026383 (221.2 MiB)
</span><br>
<span class="quotelev1">&gt;           Memory:dfee0000-dff00000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:10890707 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:10890707 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:36194379576 (33.7 GiB)  TX bytes:36194379576 (33.7 GiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tap0      Link encap:Ethernet  HWaddr 00:c0:0a:ec:02:e7
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:500
</span><br>
<span class="quotelev1">&gt;           RX bytes:0 (0.0 B)  TX bytes:0 (0.0 B)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i execute the following line 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hsaeed_at_karp:~/Task4_mpi/scatterv$ mpiexec -n 2 -host wirth,karp ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i receive Error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [wirth][[59430,1],0][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect] connect() to 10.231.2.231 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: Karp and wirth are two machines on ssh cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 21, 2014 at 3:13 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2014, at 10:09 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I think i have a tcp connection. As for as i know my cluster is not configured for Infiniband (IB).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; but even for tcp connections.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -n 2 -host master,node001 --mca btl tcp,sm,self ./helloworldmpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -n 2 -host master,node001 ./helloworldmpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; These line are not working they output
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Error like
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect] connect() to xx.xxx.x.xxx failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What are the IP addresses reported by connect()?  (i.e., the address you X'ed out)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Send the output from ifconfig on each of your servers.  Note that some Linux distributions do not put ifconfig in the default PATH of normal users; look for it in/sbin/ifconfig or /usr/sbin/ifconfig.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; Hamid Saeed
</span><br>
<span class="quotelev1">&gt; CoSynth GmbH &amp; Co. KG
</span><br>
<span class="quotelev1">&gt; Escherweg 2 - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev1">&gt; Tel +49 441 9722 738 | Fax -278
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cosynth.com">http://www.cosynth.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23924.php">George Bosilca: "[OMPI users] EuroMPI/ASIA 2014: CFP"</a>
<li><strong>Previous message:</strong> <a href="23922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>In reply to:</strong> <a href="23919.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23940.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23940.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
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
