<?
$subject_val = "Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 18 04:52:19 2013" -->
<!-- isoreceived="20131118095219" -->
<!-- sent="Mon, 18 Nov 2013 10:52:01 +0100" -->
<!-- isosent="20131118095201" -->
<!-- name="Ashley Reid" -->
<!-- email="areid_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..." -->
<!-- id="DAC4072B615A0046BFC74815AFC3E442399264885B_at_DEMAIL01.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CEAF9950.32110%solibakk_at_himolde.no" -->
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
<strong>Subject:</strong> Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card...<br>
<strong>From:</strong> Ashley Reid (<em>areid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-18 04:52:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>Previous message:</strong> <a href="0921.php">Brice Goglin: "Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<li><strong>In reply to:</strong> <a href="0920.php">Solibakke Per Bjarte: "[hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>Reply:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe not completely related to your issue, but the windows code misses the correct enumeration to see where the GPU is in a NUMA system. The code needs to look at:
<br>
<p><p>Use &quot;DEVPKEY_Numa_Proximity_Domain&quot; and &quot;DEVPKEY_Device_Numa_Node&quot; when calling SetupDiGetDeviceProperty.
<br>
<p>Links:
<br>
<p><p><p><a href="http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536(v=vs.85">http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536(v=vs.85</a>).aspx
<br>
<p>&nbsp;&nbsp;&nbsp;&quot;Windows Server 2003, Windows XP, and Windows 2000 do not support this property.&quot; - So should be fine on win7 and win8?
<br>
<p><a href="http://blogs.technet.com/b/winserverperformance/archive/2008/09/13/getting-system-topology-information-on-windows.aspx">http://blogs.technet.com/b/winserverperformance/archive/2008/09/13/getting-system-topology-information-on-windows.aspx</a>
<br>
<p><p><p>But this only works if the bios has the right ACPI entries, we filed a bug and got a update for the z820 from HP. This relies on the _PXM  value in the ACPI tables.
<br>
<p><p><p>You can use windbg and !nstree to view the tables. There inside should be some _PXM values.
<br>
<p><p><p>Ash
<br>
<p><p>From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Solibakke Per Bjarte
<br>
Sent: Monday, November 18, 2013 10:15 AM
<br>
To: hwloc-users_at_[hidden]
<br>
Subject: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card...
<br>
<p>Hello
<br>
<p>I recently got access to a very interesting and powerful machine: Dell 8 core + GPU Quadro K5000 (96 cores).
<br>
A total of 1536 cores in the original machine configuration.
<br>
<p>I installed first HWLOC 1.7 version and I also installed the newly released beta 1.8. The final installation lines report PCI (linux) CUDA.
<br>
However, the commands:
<br>
<p>Lstopo -whole-system and lstopo -whole-io
<br>
<p>report only the 8 CPU-cores. No reference to PCI-Bridges, eth0, seas +++ and the GPUs.
<br>
<p>Is the installation of the machine the problem or is my
<br>
./configure -prefix=/usr/local/hwloc
<br>
<p>missing some vital elements?
<br>
<p>Regards
<br>
PBSolibakke
<br>
<p>Dr.econ Per Bjarte Solibakke
<br>
Professor
<br>
per.b.solibakke_at_[hidden]&lt;mailto:per.b.solibakke_at_[hidden]&gt;
<br>
Cell phone: 004790035606
<br>
Phone: 004771214238
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0922/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>Previous message:</strong> <a href="0921.php">Brice Goglin: "Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<li><strong>In reply to:</strong> <a href="0920.php">Solibakke Per Bjarte: "[hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>Reply:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
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
