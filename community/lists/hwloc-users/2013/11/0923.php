<?
$subject_val = "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 18 05:08:38 2013" -->
<!-- isoreceived="20131118100838" -->
<!-- sent="Mon, 18 Nov 2013 03:08:34 -0700" -->
<!-- isosent="20131118100834" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)" -->
<!-- id="5289E722.9010406_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DAC4072B615A0046BFC74815AFC3E442399264885B_at_DEMAIL01.nvidia.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-18 05:08:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0924.php">Brice Goglin: "Re: [hwloc-users] Regarding the Dell 8 core machine with GPUs"</a>
<li><strong>Previous message:</strong> <a href="0922.php">Ashley Reid: "Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<li><strong>In reply to:</strong> <a href="0922.php">Ashley Reid: "Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0925.php">Ashley Reid: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>Reply:</strong> <a href="0925.php">Ashley Reid: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This seems unrelated since he seems to be running Linux anyway.
<br>
<p>We got that information a while ago but I couldn't do anything with it
<br>
because (I think) I didn't have access to a Windows release that
<br>
supported this. And, bigger problem, I don't have access to a Windows
<br>
machine with more than one socket. I can't actually test the code anywhere.
<br>
<p>Are you volunteering to write some code? I am not saying that you should
<br>
write the entire hwloc support, but some example would help a lot.
<br>
<p>Once we have the device locality, we'll need the devices too. The
<br>
windows code misses the entire device listing code. Do you have any idea
<br>
how to list PCI devices, match them with CUDA GPUs, etc ?
<br>
<p>Brice
<br>
<p><p><p><p>Le 18/11/2013 02:52, Ashley Reid a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe not completely related to your issue, but the windows code
</span><br>
<span class="quotelev1">&gt; misses the correct enumeration to see where the GPU is in a NUMA
</span><br>
<span class="quotelev1">&gt; system. The code needs to look at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use &quot;DEVPKEY_Numa_Proximity_Domain&quot; and &quot;DEVPKEY_Device_Numa_Node&quot;
</span><br>
<span class="quotelev1">&gt; when calling SetupDiGetDeviceProperty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Links:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536(v=vs.85">http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536(v=vs.85</a>).aspx
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536%28v=vs.85%29.aspx">http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536%28v=vs.85%29.aspx</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    &quot;Windows Server 2003, Windows XP, and Windows 2000 do not support
</span><br>
<span class="quotelev1">&gt; this property.&quot; -- So should be fine on win7 and win8?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.technet.com/b/winserverperformance/archive/2008/09/13/getting-system-topology-information-on-windows.aspx">http://blogs.technet.com/b/winserverperformance/archive/2008/09/13/getting-system-topology-information-on-windows.aspx</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But this only works if the bios has the right ACPI entries, we filed a
</span><br>
<span class="quotelev1">&gt; bug and got a update for the z820 from HP. This relies on the _PXM 
</span><br>
<span class="quotelev1">&gt; value in the ACPI tables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can use windbg and !nstree to view the tables. There inside should
</span><br>
<span class="quotelev1">&gt; be some _PXM values.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Solibakke Per Bjarte
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, November 18, 2013 10:15 AM
</span><br>
<span class="quotelev1">&gt; *To:* hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently got access to a very interesting and powerful machine: Dell
</span><br>
<span class="quotelev1">&gt; 8 core + GPU Quadro K5000 (96 cores).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A total of 1536 cores in the original machine configuration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed first HWLOC 1.7 version and I also installed the newly
</span><br>
<span class="quotelev1">&gt; released beta 1.8. The final installation lines report PCI (linux) CUDA.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the commands:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lstopo ---whole-system and lstopo ---whole-io
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; report only the 8 CPU-cores. No reference to PCI-Bridges, eth0, seas
</span><br>
<span class="quotelev1">&gt; +++ and the GPUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the installation of the machine the problem or is my 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure ---prefix=/usr/local/hwloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; missing some vital elements?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PBSolibakke
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dr.econ Per Bjarte Solibakke
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Professor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; per.b.solibakke_at_[hidden] &lt;mailto:per.b.solibakke_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cell phone: 004790035606
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone: 004771214238
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s)
</span><br>
<span class="quotelev1">&gt; and may contain confidential information.  Any unauthorized review,
</span><br>
<span class="quotelev1">&gt; use, disclosure or distribution is prohibited.  If you are not the
</span><br>
<span class="quotelev1">&gt; intended recipient, please contact the sender by reply email and
</span><br>
<span class="quotelev1">&gt; destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0923/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0924.php">Brice Goglin: "Re: [hwloc-users] Regarding the Dell 8 core machine with GPUs"</a>
<li><strong>Previous message:</strong> <a href="0922.php">Ashley Reid: "Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<li><strong>In reply to:</strong> <a href="0922.php">Ashley Reid: "Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0925.php">Ashley Reid: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>Reply:</strong> <a href="0925.php">Ashley Reid: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
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
