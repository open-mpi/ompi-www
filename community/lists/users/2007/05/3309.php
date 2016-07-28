<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 22 21:53:06 2007" -->
<!-- isoreceived="20070523015306" -->
<!-- sent="Tue, 22 May 2007 21:52:54 -0400" -->
<!-- isosent="20070523015254" -->
<!-- name="Tom Clune" -->
<!-- email="Thomas.L.Clune_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Weird interaction with modem under OS X" -->
<!-- id="043B32E1-F342-4105-906A-8FF9AC84FC24_at_nasa.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.23.1179849611.6731.users_at_open-mpi.org" -->
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
<strong>From:</strong> Tom Clune (<em>Thomas.L.Clune_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-22 21:52:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3310.php">Rob: "[OMPI users] Cross platform run: error occurred in MPI_Waitall..."</a>
<li><strong>Previous message:</strong> <a href="3308.php">G&#246;tz Waschk: "Re: [OMPI users] Gridengine integration problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="3306.php">Tom Clune: "[OMPI users] Weird interaction with modem under OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3333.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>Reply:</strong> <a href="3333.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>On May 22, 2007, at 12:00 PM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; If you run &quot;mpirun -np 1 uptime&quot; with your cell modem up, does that
</span><br>
<span class="quotelev1">&gt; work?
</span><br>
<p>Alas, no it produces no output and hangs.
<br>
<p><span class="quotelev1">&gt; This isn't one of those corner cases we test very often :).
</span><br>
<span class="quotelev1">&gt; If it doesn't work, could you send the output of 'ifconfig'?
</span><br>
<p>LM000953070:~ tlclune$ ifconfig
<br>
lo0: flags=8049&lt;UP,LOOPBACK,RUNNING,MULTICAST&gt; mtu 16384
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 ::1 prefixlen 128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 127.0.0.1 netmask 0xff000000
<br>
gif0: flags=8010&lt;POINTOPOINT,MULTICAST&gt; mtu 1280
<br>
stf0: flags=0&lt;&gt; mtu 1280
<br>
en0: flags=8822&lt;BROADCAST,SMART,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ether 00:17:f2:d3:bc:bc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect (none) status: inactive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;supported media: autoselect 10baseT/UTP &lt;half-duplex&gt; 10baseT/UTP  
<br>
&lt;full-duplex&gt; 10baseT/UTP &lt;full-duplex,hw-loopback&gt; 10baseT/UTP &lt;full- 
<br>
duplex,flow-control&gt; 100baseTX &lt;half-duplex&gt; 100baseTX &lt;full-duplex&gt;  
<br>
100baseTX &lt;full-duplex,hw-loopback&gt; 100baseTX &lt;full-duplex,flow- 
<br>
control&gt; 1000baseT &lt;full-duplex&gt; 1000baseT &lt;full-duplex,hw-loopback&gt;  
<br>
1000baseT &lt;full-duplex,flow-control&gt; none
<br>
en2: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ether 00:19:e3:d8:c3:2f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect (&lt;unknown type&gt;) status: inactive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;supported media: autoselect
<br>
wlt2: flags=41&lt;UP,RUNNING&gt; mtu 1500
<br>
fw4: flags=8822&lt;BROADCAST,SMART,SIMPLEX,MULTICAST&gt; mtu 494
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lladdr 00:19:e3:ff:fe:77:c6:60
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect &lt;full-duplex&gt; status: inactive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;supported media: autoselect &lt;full-duplex&gt;
<br>
ppp0: flags=8051&lt;UP,POINTOPOINT,RUNNING,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 70.211.6.153 --&gt; 66.174.14.5 netmask 0xff000000
<br>
<p><p><span class="quotelev1">&gt;   One
</span><br>
<span class="quotelev1">&gt; thing to try would be telling Open MPI to not use the network device
</span><br>
<span class="quotelev1">&gt; for the modem.
</span><br>
<p>Well, the setup for the card is so transparent that I'm not even sure  
<br>
what network device it is using.  The card does not use the typical  
<br>
OS X interface for networks.
<br>
<p><span class="quotelev1">&gt; For example, if it is ppp0, try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun -np 1 -mca oob_tcp_exclude ppp0 uptime
</span><br>
<p>This seems to at least produce a bit of output before hanging:
<br>
<p>LM000953070:~ tlclune$ mpirun -np 1 -mca oob_tcp_exclude ppp0 uptime
<br>
[153.sub-70-211-6.myvzw.com:07562] [0,0,0] mca_oob_tcp_init: invalid  
<br>
address '' returned for selected oob interfaces.
<br>
[153.sub-70-211-6.myvzw.com:07562] [0,0,0] ORTE_ERROR_LOG: Error in  
<br>
file oob_tcp.c at line 1216
<br>
<p>Perhaps meaningful?
<br>
<p>Cheers,
<br>
<p>- Tom
<br>
<p><p><p>

<br><p>
<p><p><p><hr>
<ul>
<li>text/directory attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3309/Thomas_Clune.vcf">Thomas_Clune.vcf</a>
</ul>
<!-- attachment="Thomas_Clune.vcf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3310.php">Rob: "[OMPI users] Cross platform run: error occurred in MPI_Waitall..."</a>
<li><strong>Previous message:</strong> <a href="3308.php">G&#246;tz Waschk: "Re: [OMPI users] Gridengine integration problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="3306.php">Tom Clune: "[OMPI users] Weird interaction with modem under OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3333.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>Reply:</strong> <a href="3333.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
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
