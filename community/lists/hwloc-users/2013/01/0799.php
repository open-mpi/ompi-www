<?
$subject_val = "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 11:40:04 2013" -->
<!-- isoreceived="20130108164004" -->
<!-- sent="Tue, 8 Jan 2013 17:39:55 +0100" -->
<!-- isosent="20130108163955" -->
<!-- name="Ashley Reid" -->
<!-- email="areid_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows" -->
<!-- id="DAC4072B615A0046BFC74815AFC3E4423865B56117_at_DEMAIL01.nvidia.com" -->
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
<strong>Date:</strong> 2013-01-08 11:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0800.php">Erik Schnetter: "[hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0798.php">Samuel Thibault: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<li><strong>In reply to:</strong> <a href="0798.php">Samuel Thibault: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0802.php">Ashley Reid: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It appears DEVPKEY_Numa_Proximity_Domain with SetupDiGetDeviceProperty, should work. I found this hidden way down in 
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
<li><strong>Next message:</strong> <a href="0800.php">Erik Schnetter: "[hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0798.php">Samuel Thibault: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<li><strong>In reply to:</strong> <a href="0798.php">Samuel Thibault: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0802.php">Ashley Reid: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
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
