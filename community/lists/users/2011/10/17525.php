<?
$subject_val = "[OMPI users] mpirun should run with just the localhost interface on win?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  8 16:52:22 2011" -->
<!-- isoreceived="20111008205222" -->
<!-- sent="Sat, 8 Oct 2011 21:53:54 +0100" -->
<!-- isosent="20111008205354" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun should run with just the localhost interface on win?" -->
<!-- id="000001cc85fc$65ac1150$310433f0$_at_com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] mpirun should run with just the localhost interface on win?<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-08 16:53:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17526.php">Jack Bryan: "[OMPI users] Open MPI error to define MPI_Datatype in header file"</a>
<li><strong>Previous message:</strong> <a href="17524.php">Francesco Salvadore: "[OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17620.php">MM: "Re: [OMPI users] mpirun should run with just the localhost interface on win?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
on winxp, with the following net setup (just localhost, is it on?)
<br>
<p><p>C:\trunk-build-release&gt;ipconfig /all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Windows IP Configuration
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Host Name . . . . . . . . . . . . : SOMEHOSTNAME
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Primary Dns Suffix  . . . . . . . : DOMAIN.SOMECO.COM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node Type . . . . . . . . . . . . : Hybrid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IP Routing Enabled. . . . . . . . : No
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WINS Proxy Enabled. . . . . . . . : No
<br>
<p>Ethernet adapter Wireless Network Connection:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Media State . . . . . . . . . . . : Media disconnected
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description . . . . . . . . . . . : Intel(R) WiFi Link 5100 AGN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Physical Address. . . . . . . . . : SOMEMACADDRESS
<br>
<p>C:\Trading\trunk-build-release&gt;route print
<br>
===========================================================================
<br>
Interface List
<br>
0x1 ........................... MS TCP Loopback interface
<br>
0x2 ...00 24 d6 10 05 4e ...... Intel(R) WiFi Link 5100 AGN - Packet
<br>
Scheduler Miniport
<br>
===========================================================================
<br>
===========================================================================
<br>
Active Routes:
<br>
Network Destination        Netmask          Gateway       Interface  Metric
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;127.0.0.0        255.0.0.0        127.0.0.1       127.0.0.1       1
<br>
&nbsp;&nbsp;255.255.255.255  255.255.255.255  255.255.255.255               2       1
<br>
===========================================================================
<br>
Persistent Routes:
<br>
&nbsp;&nbsp;None
<br>
<p><p>my mpirun fails as:
<br>
<p>mpirun -np 1 .\nhui\Release\nhui.exe : -np 1 .\nhcomp\Release\nhcomp.exe
<br>
<p><p>[SOMEHOSTNAME:04392] [[1866,0],0] ORTE_ERROR_LOG: Error in file
<br>
..\..\..\openmpi-1.5.4\orte\mca\ess\hnp\ess_hnp_module.c at line 215
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[SOMEHOSTNAME:04392] [[1866,0],0] ORTE_ERROR_LOG: Error in file
<br>
..\..\..\openmpi-1.5.4\orte\runtime\orte_init.c at line 128
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[SOMEHOSTNAME:04392] [[1866,0],0] ORTE_ERROR_LOG: Error in file
<br>
..\..\..\..\..\openmpi-1.5.4\orte\tools\orterun\orterun.c at line 616
<br>
<p><p><p><p><p>When I turn on the network, and there is:
<br>
C:\ &gt;route print
<br>
===========================================================================
<br>
Interface List
<br>
0x1 ........................... MS TCP Loopback interface
<br>
0x2 ...00 24 d6 10 05 4e ...... Intel(R) WiFi Link 5100 AGN - Packet
<br>
Scheduler Miniport
<br>
===========================================================================
<br>
===========================================================================
<br>
Active Routes:
<br>
Network Destination        Netmask          Gateway       Interface  Metric
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0.0.0          0.0.0.0    192.168.1.254    192.168.1.88       25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;127.0.0.0        255.0.0.0        127.0.0.1       127.0.0.1       1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;192.168.1.0    255.255.255.0     192.168.1.88    192.168.1.88       25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;192.168.1.88  255.255.255.255        127.0.0.1       127.0.0.1       25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;192.168.1.255  255.255.255.255     192.168.1.88    192.168.1.88       25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;224.0.0.0        240.0.0.0     192.168.1.88    192.168.1.88       25
<br>
&nbsp;&nbsp;255.255.255.255  255.255.255.255     192.168.1.88    192.168.1.88       1
<br>
Default Gateway:     192.168.1.254
<br>
===========================================================================
<br>
Persistent Routes:
<br>
&nbsp;&nbsp;None
<br>
<p><p>mpirun works
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17526.php">Jack Bryan: "[OMPI users] Open MPI error to define MPI_Datatype in header file"</a>
<li><strong>Previous message:</strong> <a href="17524.php">Francesco Salvadore: "[OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17620.php">MM: "Re: [OMPI users] mpirun should run with just the localhost interface on win?"</a>
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
