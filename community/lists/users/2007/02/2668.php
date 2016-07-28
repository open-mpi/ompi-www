<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 12 11:52:05 2007" -->
<!-- isoreceived="20070212165205" -->
<!-- sent="Mon, 12 Feb 2007 17:54:21 +0000" -->
<!-- isosent="20070212175421" -->
<!-- name="Matteo Guglielmi" -->
<!-- email="matteo.guglielmi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111" -->
<!-- id="45D0A9CD.7090700_at_epfl.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F41D48F-93F4-4EDE-81AE-06AC4C081095_at_cisco.com" -->
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
<strong>From:</strong> Matteo Guglielmi (<em>matteo.guglielmi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-12 12:54:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2669.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2667.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="2667.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2669.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="2669.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the ifconfig output from the machine I'm used to submit the
<br>
parallel job:
<br>
<p>### ifconfig output - master node ###
<br>
<p>[root_at_lcbcpc02 ~]# ifconfig
<br>
eth0      Link encap:Ethernet  HWaddr 00:15:17:10:53:C8 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:128.178.54.74  Bcast:128.178.54.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::215:17ff:fe10:53c8/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:11563938 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:6670398 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:16562149093 (15.4 GiB)  TX bytes:1312532185 (1.2 GiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base address:0x2020 Memory:c2820000-c2840000
<br>
<p>eth1      Link encap:Ethernet  HWaddr 00:15:17:10:53:C9 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.0.1  Bcast:192.168.0.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::215:17ff:fe10:53c9/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:0 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base address:0x2000 Memory:c2800000-c2820000
<br>
<p>lo        Link encap:Local Loopback 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:468156 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:468156 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:500286061 (477.1 MiB)  TX bytes:500286061 (477.1 MiB)
<br>
<p><p><p><p>This is the ifconfig output from the &quot;slave node&quot;:
<br>
<p>### ifconfig output - slave node ###
<br>
<p>[root_at_lcbcpc04 ~]# ifconfig
<br>
eth0      Link encap:Ethernet  HWaddr 00:15:17:10:53:74 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:128.178.54.76  Bcast:128.178.54.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::215:17ff:fe10:5374/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:320264 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:151942 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:139280839 (132.8 MiB)  TX bytes:82889237 (79.0 MiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base address:0x2020 Memory:c2820000-c2840000
<br>
<p>eth1      Link encap:Ethernet  HWaddr 00:15:17:10:53:75 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.0.1  Bcast:192.168.0.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::215:17ff:fe10:5375/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:0 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base address:0x2000 Memory:c2800000-c2820000
<br>
<p>lo        Link encap:Local Loopback 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:2820 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:2820 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:2178053 (2.0 MiB)  TX bytes:2178053 (2.0 MiB)
<br>
<p><p>Thanks Jeff!!!
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm assuming that these are Linux hosts.  If so, errno 111 is  
</span><br>
<span class="quotelev1">&gt; &quot;connection refused&quot; possibly meaning that there is still some  
</span><br>
<span class="quotelev1">&gt; firewall active or the wrong interface is being used to establish  
</span><br>
<span class="quotelev1">&gt; connections between these machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send the output of &quot;ifconfig&quot; (might be /sbin/ifconfig on  
</span><br>
<span class="quotelev1">&gt; your machine?) from both machines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 11, 2007, at 3:45 PM, matteo.guglielmi_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Since I've installed openmpi I cannot submit any job that uses cpus  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; different machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ### hostfile ###
</span><br>
<span class="quotelev2">&gt;&gt; lcbcpc02.epfl.ch slots=4 max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt; lcbcpc04.epfl.ch slots=4 max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt; ################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ### error message ###
</span><br>
<span class="quotelev2">&gt;&gt; [matteo_at_lcbcpc02 TEST]$ mpirun --hostfile ~matteo/hostfile -np 8
</span><br>
<span class="quotelev2">&gt;&gt; /home/matteo/Software/NWChem/5.0/bin/nwchem ./nwchem.nw
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,5][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,6][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() failed with errno=111
</span><br>
<span class="quotelev2">&gt;&gt; 6: lcbcpc04.epfl.ch len=16
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,4][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() failed with errno=111
</span><br>
<span class="quotelev2">&gt;&gt; 4: lcbcpc04.epfl.ch len=16
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,7][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() failed with errno=111
</span><br>
<span class="quotelev2">&gt;&gt; 7: lcbcpc04.epfl.ch len=16
</span><br>
<span class="quotelev2">&gt;&gt; connect() failed with errno=111
</span><br>
<span class="quotelev2">&gt;&gt; 5: lcbcpc04.epfl.ch len=16
</span><br>
<span class="quotelev2">&gt;&gt; #####################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did disable the firewall on both machines but I still get that  
</span><br>
<span class="quotelev2">&gt;&gt; error message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; MG.
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2669.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2667.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="2667.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2669.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="2669.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
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
