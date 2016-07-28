<?
$subject_val = "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 13:37:04 2013" -->
<!-- isoreceived="20130108183704" -->
<!-- sent="Tue, 08 Jan 2013 19:36:58 +0100" -->
<!-- isosent="20130108183658" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows" -->
<!-- id="50EC674A.5040004_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DAC4072B615A0046BFC74815AFC3E4423865B56134_at_DEMAIL01.nvidia.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-08 13:36:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0804.php">Jeff Hammond: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0802.php">Ashley Reid: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<li><strong>In reply to:</strong> <a href="0802.php">Ashley Reid: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is your machine NUMA? Maybe Windows returns an error when requesting
<br>
numa info on non-NUMA info?
<br>
<p>Brice
<br>
<p><p><p>Le 08/01/2013 18:44, Ashley Reid a &#233;crit :
<br>
<span class="quotelev1">&gt; OS says DEVPKEY_Numa_Proximity_Domain does not exist. Neither does DEVPKEY_Device_Numa_Node . For all devices.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lame :/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Ashley Reid 
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 08, 2013 5:40 PM
</span><br>
<span class="quotelev1">&gt; To: 'Samuel Thibault'
</span><br>
<span class="quotelev1">&gt; Cc: hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: RE: [hwloc-users] Mapping a GPU to a pci local CPU on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears DEVPKEY_Numa_Proximity_Domain with SetupDiGetDeviceProperty, should work. I found this hidden way down in 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.technet.com/b/winserverperformance/archive/2008/09/13/getting-system-topology-information-on-windows.aspx">http://blogs.technet.com/b/winserverperformance/archive/2008/09/13/getting-system-topology-information-on-windows.aspx</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking into seeing if this works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Samuel Thibault [mailto:samuel.thibault_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 08, 2013 5:39 PM
</span><br>
<span class="quotelev1">&gt; To: Ashley Reid
</span><br>
<span class="quotelev1">&gt; Cc: hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Reid, le Tue 08 Jan 2013 16:53:20 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know if this is possible with OS APIs?
</span><br>
<span class="quotelev1">&gt; I don't know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like this is not supported on Windows yet by hwloc
</span><br>
<span class="quotelev1">&gt; Indeed. I hadn't found when I had a look some years ago, I don't know if there is something available nowadays.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; NVIDIA GmbH, Wuerselen, Germany, Amtsgericht Aachen, HRB 8361
</span><br>
<span class="quotelev1">&gt; Managing Director: Karen Theresa Burns
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0804.php">Jeff Hammond: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0802.php">Ashley Reid: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<li><strong>In reply to:</strong> <a href="0802.php">Ashley Reid: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
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
