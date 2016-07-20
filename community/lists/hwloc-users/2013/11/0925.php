<?
$subject_val = "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 19 07:36:31 2013" -->
<!-- isoreceived="20131119123631" -->
<!-- sent="Tue, 19 Nov 2013 13:36:22 +0100" -->
<!-- isosent="20131119123622" -->
<!-- name="Ashley Reid" -->
<!-- email="areid_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)" -->
<!-- id="DAC4072B615A0046BFC74815AFC3E4423992648964_at_DEMAIL01.nvidia.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5289E722.9010406_at_inria.fr" -->
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
<strong>From:</strong> Ashley Reid (<em>areid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-19 07:36:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0926.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>Previous message:</strong> <a href="0924.php">Brice Goglin: "Re: [hwloc-users] Regarding the Dell 8 core machine with GPUs"</a>
<li><strong>In reply to:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0926.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>Reply:</strong> <a href="0926.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, I can't commit time, but I would like to help where possible.
<br>
<p>This code should map a CUdevice to a numa node (by enumerating all PCI devices). I have not compiled the the code in this form or tested it as is, but the calls should work fine for mapping any cuda device to the OS enumeration wrt to PCI device location:
<br>
<p>long GetNumaNode(CUdevice dev)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;BOOL ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;DWORD lastError;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// get the cuda device string
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char cuDevString[CUDA_DEV_STRING_LEN];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned long cudaBus;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned long cudaSubdevice;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned long cudaFunction;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CUresult status = cuDeviceGetPCIBusId(cuDevString, CUDA_DEV_STRING_LEN, dev);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;assert(CUDA_SUCCESS == status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (CUDA_SUCCESS != status) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char *tmp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *tmp2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char del[] = &quot;:.&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// remove domain
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tmp = strtok_s(cuDevString, del, &amp;tmp2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// get bus
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tmp = strtok_s(NULL, del, &amp;tmp2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sscanf_s(tmp, &quot;%x&quot;, &amp;cudaBus);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// get subdevice
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tmp = strtok_s(NULL, del, &amp;tmp2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sscanf_s(tmp, &quot;%x&quot;, &amp;cudaSubdevice);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// get function
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tmp = strtok_s(NULL, del, &amp;tmp2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sscanf_s(tmp, &quot;%x&quot;, &amp;cudaFunction);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// Use NULL as the first parameter as we need to look at non display devices too
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HDEVINFO hNvDevInfo = SetupDiGetClassDevs(NULL, NULL, NULL, DIGCF_PRESENT | DIGCF_ALLCLASSES);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if(hNvDevInfo == INVALID_HANDLE_VALUE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(!&quot;INVALID_HANDLE_VALUE&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// Find the deviceInfoData for each GPU
<br>
&nbsp;&nbsp;&nbsp;&nbsp;DWORD deviceIndex;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (deviceIndex = 0; ; deviceIndex++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SP_DEVINFO_DATA deviceInfoData;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long bus;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long subdevice;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long function;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deviceInfoData.cbSize = sizeof(SP_DEVINFO_DATA);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = SetupDiEnumDeviceInfo(hNvDevInfo, deviceIndex, &amp;deviceInfoData);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!ret)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// MSDN says:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//   call SetupDiEnumDeviceInfo until there are no more values (the function fails and a call
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//   to GetLastError returns ERROR_NO_MORE_ITEMS).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lastError = GetLastError();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(lastError == ERROR_NO_MORE_ITEMS);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char locinfo[256];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = SetupDiGetDeviceRegistryPropertyA(hNvDevInfo, &amp;deviceInfoData, SPDRP_LOCATION_INFORMATION, NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(PBYTE)locinfo, sizeof(locinfo), NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!ret)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lastError = GetLastError();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool dataSet = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (strncmp(locinfo, &quot;PCI&quot;, 3) == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *busString = strstr(locinfo, &quot;bus&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (busString) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;busString += 3;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *deviceString = strstr(locinfo, &quot;,&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (deviceString) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deviceString[0] = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bus = atoi(busString);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deviceString++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deviceString = strstr(deviceString, &quot;device&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (deviceString) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deviceString+=6;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *functionStr = strstr(deviceString, &quot;,&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (functionStr) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;functionStr[0] = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subdevice = atoi(deviceString);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;functionStr++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;functionStr = strstr(functionStr, &quot;function&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (functionStr) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;functionStr+=8;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function = atoi(functionStr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dataSet = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (dataSet &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(bus == cudaBus) &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(subdevice == cudaSubdevice) &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(function == cudaFunction))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = SetupDiGetDeviceRegistryPropertyA(hNvDevInfo, &amp;deviceInfoData, SPDRP_HARDWAREID, NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(PBYTE)locinfo, sizeof(locinfo), NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;locinfo %s\n&quot;, locinfo);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int data[20];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data[0] = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEVPROPTYPE type;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEVPROPKEY key = DEVPKEY_Numa_Proximity_Domain;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lastError = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret =  SetupDiGetDeviceProperty(hNvDevInfo, &amp;deviceInfoData,&amp;key , &amp;type, (PBYTE)&amp;data[0], 20*sizeof(int), NULL,0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!ret)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lastError = GetLastError();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;DEVPKEY_Numa_Proximity_Domain %d err %d\n&quot;, data[0], lastError);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;key = DEVPKEY_Device_Numa_Node;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lastError = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret =  SetupDiGetDeviceProperty(hNvDevInfo, &amp;deviceInfoData,&amp;key , &amp;type, (PBYTE)&amp;data[0], 20*sizeof(int), NULL,0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!ret)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lastError = GetLastError();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;DEVPKEY_Device_Numa_Node %d err %d\n&quot;, data[0], lastError);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return data[0];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
}
<br>
<p>From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Monday, November 18, 2013 11:09 AM
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)
<br>
<p>This seems unrelated since he seems to be running Linux anyway.
<br>
<p>We got that information a while ago but I couldn't do anything with it because (I think) I didn't have access to a Windows release that supported this. And, bigger problem, I don't have access to a Windows machine with more than one socket. I can't actually test the code anywhere.
<br>
<p>Are you volunteering to write some code? I am not saying that you should write the entire hwloc support, but some example would help a lot.
<br>
<p>Once we have the device locality, we'll need the devices too. The windows code misses the entire device listing code. Do you have any idea how to list PCI devices, match them with CUDA GPUs, etc ?
<br>
<p>Brice
<br>
<p><p><p><p>Le 18/11/2013 02:52, Ashley Reid a &#233;crit :
<br>
Maybe not completely related to your issue, but the windows code misses the correct enumeration to see where the GPU is in a NUMA system. The code needs to look at:
<br>
<p><p>Use &quot;DEVPKEY_Numa_Proximity_Domain&quot; and &quot;DEVPKEY_Device_Numa_Node&quot; when calling SetupDiGetDeviceProperty.
<br>
<p>Links:
<br>
<p><p><p><a href="http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536(v=vs.85">http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536(v=vs.85</a>).aspx&lt;<a href="http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536%28v=vs.85%29.aspx">http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536%28v=vs.85%29.aspx</a>&gt;
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
To: hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;
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
________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<p><p><p><p>_______________________________________________
<br>
<p>hwloc-users mailing list
<br>
<p>hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0925/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0926.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>Previous message:</strong> <a href="0924.php">Brice Goglin: "Re: [hwloc-users] Regarding the Dell 8 core machine with GPUs"</a>
<li><strong>In reply to:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0926.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>Reply:</strong> <a href="0926.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
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
