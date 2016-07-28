<?
$subject_val = "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 12:44:23 2013" -->
<!-- isoreceived="20130108174423" -->
<!-- sent="Tue, 8 Jan 2013 18:44:13 +0100" -->
<!-- isosent="20130108174413" -->
<!-- name="Ashley Reid" -->
<!-- email="areid_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows" -->
<!-- id="DAC4072B615A0046BFC74815AFC3E4423865B56134_at_DEMAIL01.nvidia.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20130108163846.GF6345_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows<br>
<strong>From:</strong> Ashley Reid (<em>areid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-08 12:44:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0803.php">Brice Goglin: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<li><strong>Previous message:</strong> <a href="0801.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0798.php">Samuel Thibault: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0803.php">Brice Goglin: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<li><strong>Reply:</strong> <a href="0803.php">Brice Goglin: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OS says DEVPKEY_Numa_Proximity_Domain does not exist. Neither does DEVPKEY_Device_Numa_Node . For all devices.
<br>
<p>Lame :/
<br>
<p>Thanks,
<br>
Ash
<br>
<p>-----Original Message-----
<br>
From: Ashley Reid 
<br>
Sent: Tuesday, January 08, 2013 5:40 PM
<br>
To: 'Samuel Thibault'
<br>
Cc: hwloc-users_at_[hidden]
<br>
Subject: RE: [hwloc-users] Mapping a GPU to a pci local CPU on Windows
<br>
<p>It appears DEVPKEY_Numa_Proximity_Domain with SetupDiGetDeviceProperty, should work. I found this hidden way down in 
<br>
<p><a href="http://blogs.technet.com/b/winserverperformance/archive/2008/09/13/getting-system-topology-information-on-windows.aspx">http://blogs.technet.com/b/winserverperformance/archive/2008/09/13/getting-system-topology-information-on-windows.aspx</a>
<br>
<p>I am looking into seeing if this works.
<br>
<p>-----Original Message-----
<br>
From: Samuel Thibault [mailto:samuel.thibault_at_[hidden]] 
<br>
Sent: Tuesday, January 08, 2013 5:39 PM
<br>
To: Ashley Reid
<br>
Cc: hwloc-users_at_[hidden]
<br>
Subject: Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows
<br>
<p>Ashley Reid, le Tue 08 Jan 2013 16:53:20 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Does anyone know if this is possible with OS APIs?
</span><br>
<p>I don't know.
<br>
<p><span class="quotelev1">&gt; It looks like this is not supported on Windows yet by hwloc
</span><br>
<p>Indeed. I hadn't found when I had a look some years ago, I don't know if there is something available nowadays.
<br>
<p>Samuel
<br>
NVIDIA GmbH, Wuerselen, Germany, Amtsgericht Aachen, HRB 8361
<br>
Managing Director: Karen Theresa Burns
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0803.php">Brice Goglin: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<li><strong>Previous message:</strong> <a href="0801.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0798.php">Samuel Thibault: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0803.php">Brice Goglin: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<li><strong>Reply:</strong> <a href="0803.php">Brice Goglin: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
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
