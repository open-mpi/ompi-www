<?
$subject_val = "[OMPI users] openmpi+infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 30 09:02:37 2013" -->
<!-- isoreceived="20130730130237" -->
<!-- sent="Tue, 30 Jul 2013 15:01:14 +0200" -->
<!-- isosent="20130730130114" -->
<!-- name="christian schmitt" -->
<!-- email="schmitt_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi+infiniband" -->
<!-- id="51F7B91A.9020306_at_gsc.tu-darmstadt.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] openmpi+infiniband<br>
<strong>From:</strong> christian schmitt (<em>schmitt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-30 09:01:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22410.php">Gus Correa: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>Previous message:</strong> <a href="22408.php">Reuti: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22410.php">Gus Correa: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>Reply:</strong> <a href="22410.php">Gus Correa: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>Reply:</strong> <a href="22411.php">Reuti: "Re: [OMPI users] openmpi+infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hallo,
<br>
<p>I&#180;m trying to get openmpi(1.6.5) running with/over infiniband.
<br>
My system is a centOS 6.3. I have installed the Mellanox OFED driver
<br>
(2.0) and everything seems working. ibhosts shows all hosts and the switch.
<br>
A &quot;hca_self_test.ofed&quot; shows:
<br>
<p>---- Performing Adapter Device Self Test ----
<br>
Number of CAs Detected ................. 1
<br>
PCI Device Check ....................... PASS
<br>
Kernel Arch ............................ x86_64
<br>
Host Driver Version .................... MLNX_OFED_LINUX-2.0-2.0.5
<br>
(OFED-2.0-2.0.5): 2.6.32-279.el6.x86_64
<br>
Host Driver RPM Check .................. PASS
<br>
Firmware on CA #0 VPI .................. v2.11.500
<br>
Firmware Check on CA #0 (VPI) .......... PASS
<br>
Host Driver Initialization ............. PASS&quot;
<br>
Number of CA Ports Active .............. 1
<br>
Port State of Port #1 on CA #0 (VPI)..... UP 4X QDR (InfiniBand)
<br>
Error Counter Check on CA #0 (VPI)...... PASS
<br>
Kernel Syslog Check .................... PASS
<br>
Node GUID on CA #0 (VPI) ............... 00:02:c9:03:00:1f:a4:e0
<br>
<p><p>A &quot;ompi_info | grep openib&quot; shows:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: openib (MCA v2.0, API v2.0, Component v1.6.5)
<br>
<p>So I now compiled openmpi with the option &quot;--with-openib&quot; and tried to
<br>
run the intel MPI test. But it still uses the Ethernet interface to
<br>
communicate. Only when I configure ipoib (ib0) and start my job with
<br>
&quot;--mca btl ^openib --mca btl_tcp_if_include ib0&quot; it runs with
<br>
infiniband. But when I&#180;m right, it should work without the ib0 interface.
<br>
I&#180;m quiet new to infiniband so maybe I forgot something.
<br>
I'm grateful for any information that help me solving this problem.
<br>
<p>Thank you,
<br>
<p>Christian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22410.php">Gus Correa: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>Previous message:</strong> <a href="22408.php">Reuti: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22410.php">Gus Correa: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>Reply:</strong> <a href="22410.php">Gus Correa: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>Reply:</strong> <a href="22411.php">Reuti: "Re: [OMPI users] openmpi+infiniband"</a>
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
