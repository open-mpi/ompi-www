<?
$subject_val = "Re: [OMPI devel] mpi very slow to start on Mac OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 16:29:49 2009" -->
<!-- isoreceived="20090506202949" -->
<!-- sent="Wed, 6 May 2009 21:29:42 +0100" -->
<!-- isosent="20090506202942" -->
<!-- name="Christopher Jefferson" -->
<!-- email="chris_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpi very slow to start on Mac OS X" -->
<!-- id="6A81EECD-487A-48F2-B869-6BA35F08D8A2_at_bubblescope.net" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI devel] mpi very slow to start on Mac OS X" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpi very slow to start on Mac OS X<br>
<strong>From:</strong> Christopher Jefferson (<em>chris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 16:29:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5971.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5969.php">Christopher Jefferson: "[OMPI devel] mpi very slow to start on Mac OS X"</a>
<li><strong>Maybe in reply to:</strong> <a href="5969.php">Christopher Jefferson: "[OMPI devel] mpi very slow to start on Mac OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apologies, soon after I sent my mail I managed to solve my own problem.
<br>
<p>For possible future reference, the problem was that my disconnected  
<br>
ethernet port had somehow decided to take up residence on the same  
<br>
subnet as my wireless. The relevant parts of ifconfig are:
<br>
<p>lo0: flags=8049&lt;UP,LOOPBACK,RUNNING,MULTICAST&gt; mtu 16384
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 127.0.0.1 netmask 0xff000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 ::1 prefixlen 128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1
<br>
gif0: flags=8010&lt;POINTOPOINT,MULTICAST&gt; mtu 1280
<br>
stf0: flags=0&lt;&gt; mtu 1280
<br>
en0: flags=8822&lt;BROADCAST,SMART,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 192.168.2.1 netmask 0xffffff00 broadcast 192.168.2.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ether 00:25:00:a9:68:44
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect status: inactive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;supported media: none autoselect 10baseT/UTP &lt;half-duplex&gt; 10baseT/ 
<br>
UTP &lt;full-duplex&gt; 10baseT/UTP &lt;full-duplex,flow-control&gt; 10baseT/UTP  
<br>
&lt;full-duplex,hw-loopback&gt; 100baseTX &lt;half-duplex&gt; 100baseTX &lt;full- 
<br>
duplex&gt; 100baseTX &lt;full-duplex,flow-control&gt; 100baseTX &lt;full-duplex,hw- 
<br>
loopback&gt; 1000baseT &lt;full-duplex&gt; 1000baseT &lt;full-duplex,flow-control&gt;  
<br>
1000baseT &lt;full-duplex,hw-loopback&gt;
<br>
en1: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::225:ff:fe3e:2474%en1 prefixlen 64 scopeid 0x5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 192.168.2.2 netmask 0xffffff00 broadcast 192.168.2.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ether 00:25:00:3e:24:74
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect status: active
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;supported media: autoselect
<br>
<p>By disabling en0 with 'sudo ifconfig en0 down', open-mpi performs as  
<br>
expected.
<br>
<p>Chris
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5971.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5969.php">Christopher Jefferson: "[OMPI devel] mpi very slow to start on Mac OS X"</a>
<li><strong>Maybe in reply to:</strong> <a href="5969.php">Christopher Jefferson: "[OMPI devel] mpi very slow to start on Mac OS X"</a>
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
