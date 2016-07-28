<?
$subject_val = "Re: [hwloc-devel] Using hwloc to detect Hard Disks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 15:06:08 2014" -->
<!-- isoreceived="20140923190608" -->
<!-- sent="Tue, 23 Sep 2014 19:06:05 +0000" -->
<!-- isosent="20140923190605" -->
<!-- name="Pedaballe, Vineet" -->
<!-- email="vineet.pedaballe_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using hwloc to detect Hard Disks" -->
<!-- id="124FB8FA73DD4649B69C705CCE88B302683FA06E_at_ORSMSX111.amr.corp.intel.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54219643.2090308_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Using hwloc to detect Hard Disks<br>
<strong>From:</strong> Pedaballe, Vineet (<em>vineet.pedaballe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-23 15:06:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4237.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4235.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4235.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4237.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4237.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Ralph and Jeff. 
<br>
<p>This was the list I was hoping to read through hwloc.
<br>
<p>3. Memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Total memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Total DIMMS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Individual DIMM's:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i) Serial numbers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ii) Vendor Name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(iii) Model
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(iv) Memory Frequency
<br>
4a. Network Adapters (Ethernet)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Model
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Speed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Serial Number (if applicable)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. MAC address
<br>
4b. Network Adapters (Infiniband)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Model
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Speed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Serial Number (if applicable)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. MAC address
<br>
4. Host Bus Adapters
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Manufacturer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Serial Number
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. MAC address
<br>
6. Coprocessors
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Manufacturer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Serial Number
<br>
7. Other PCI Devices
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Device ID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Device Serial number (if applicable)
<br>
8. HardDrive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Model, Form factor, etc.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Vendor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Serial Number
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. Size
<br>
<p><p>Some of it is already provided by HWLOC. For some other items, a limited set of information is provided by HWLOC.
<br>
<p>Most of the DIMM related data is provided by the SMBIOS tables. 'dmidecode' provides a lot of this information.
<br>
The application hdparm provides a lot of information about hard drives. I glanced over their code, and it seems like they also udev to retrieve the information.
<br>
<p><p>* For Memory, I would suggest have a single object for each node and list the DIMM details as attributes for that object.
<br>
* For hard drives, we can have similar objects for each SATA0.., etc node, whose lanes are usually connected via the PCH to a single socket. Each hard drive can have its own object, and all the attributes of the hard drive can be stored within that object.
<br>
* For the PCI devices I understand it is not simple to read the serial number and UUID details, but I know how to read the serial numbers for some products(like the Intel coprocessors) and it would be really cool to add this also as an attribute to it.
<br>
<p>I'm still not entirely familiar with the hwloc's internal architecture, I apologize in case I make any wrong assumptions.
<br>
How would you like me to proceed from here?
<br>
<p>Thanks,
<br>
Vineet
<br>
<p>-----Original Message-----
<br>
From: hwloc-devel [mailto:hwloc-devel-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Tuesday, September 23, 2014 8:48 AM
<br>
To: hwloc-devel_at_[hidden]
<br>
Subject: Re: [hwloc-devel] Using hwloc to detect Hard Disks
<br>
<p>Le 23/09/2014 16:46, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 23/09/2014 16:38, Guy Streeter a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I know that udev gathers this information:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # ll /sys/block/sda/bdi
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root 0 Sep 23 09:33 /sys/block/sda/bdi -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../../../virtual/bdi/8:0
</span><br>
<span class="quotelev2">&gt;&gt; # grep SERIAL '/run/udev/data/b8:0'
</span><br>
<span class="quotelev2">&gt;&gt; E:ID_SERIAL=SAMSUNG_MZ7TD256HAFV-000L9_S17LNSADC13325
</span><br>
<span class="quotelev2">&gt;&gt; E:ID_SERIAL_SHORT=S17LNSADC13325
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So you could get it from udev or gather it the same way udev does. If 
</span><br>
<span class="quotelev2">&gt;&gt; you want to know how udev does it, I can research that.
</span><br>
<span class="quotelev1">&gt; If you can get more information, that'd be great. I wonder if they are 
</span><br>
<span class="quotelev1">&gt; using ioctls to retrieve these, I can't find anything in sysfs even 
</span><br>
<span class="quotelev1">&gt; though udev has similar info on my machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Indeed there's a struct hd_driveid in linux/hdreg.h that you get with ioctl HDIO_GET_IDENTITY on the device.
<br>
<p>There's also a libblkid that may help.
<br>
<p>Brice
<br>
<p>_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4235.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4235.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4237.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4235.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4235.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4237.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4237.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
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
