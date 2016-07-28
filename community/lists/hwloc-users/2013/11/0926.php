<?
$subject_val = "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 19 07:40:18 2013" -->
<!-- isoreceived="20131119124018" -->
<!-- sent="Tue, 19 Nov 2013 05:40:12 -0700" -->
<!-- isosent="20131119124012" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)" -->
<!-- id="528B5C2C.3010809_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DAC4072B615A0046BFC74815AFC3E4423992648964_at_DEMAIL01.nvidia.com" -->
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
<strong>Date:</strong> 2013-11-19 07:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/01/0927.php">Eloi Gaudry: "[hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Previous message:</strong> <a href="0925.php">Ashley Reid: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>In reply to:</strong> <a href="0925.php">Ashley Reid: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah this could help already. Even if we don't have all PCI devices, we
<br>
may be able to just create a PCI device for each CUdevice, attach it to
<br>
the right NUMA node, and insert a CUDA OS device inside.
<br>
Now I need to borrow a CUDA-enabled laptop running windows for basic
<br>
testing.
<br>
thanks
<br>
Brice
<br>
<p><p>Le 19/11/2013 05:36, Ashley Reid a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, I can't commit time, but I would like to help where
</span><br>
<span class="quotelev1">&gt; possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This code should map a CUdevice to a numa node (by enumerating all PCI
</span><br>
<span class="quotelev1">&gt; devices). I have not compiled the the code in this form or tested it
</span><br>
<span class="quotelev1">&gt; as is, but the calls should work fine for mapping any cuda device to
</span><br>
<span class="quotelev1">&gt; the OS enumeration wrt to PCI device location:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; long GetNumaNode(CUdevice dev)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     BOOL ret;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     DWORD lastError;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // get the cuda device string
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     char cuDevString[CUDA_DEV_STRING_LEN];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     unsigned long cudaBus;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     unsigned long cudaSubdevice;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     unsigned long cudaFunction;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     CUresult status = cuDeviceGetPCIBusId(cuDevString,
</span><br>
<span class="quotelev1">&gt; CUDA_DEV_STRING_LEN, dev);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     assert(CUDA_SUCCESS == status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (CUDA_SUCCESS != status) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     char *tmp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     char *tmp2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     char del[] = &quot;:.&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // remove domain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     tmp = strtok_s(cuDevString, del, &amp;tmp2);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // get bus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     tmp = strtok_s(NULL, del, &amp;tmp2);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     sscanf_s(tmp, &quot;%x&quot;, &amp;cudaBus);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // get subdevice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     tmp = strtok_s(NULL, del, &amp;tmp2);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     sscanf_s(tmp, &quot;%x&quot;, &amp;cudaSubdevice);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // get function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     tmp = strtok_s(NULL, del, &amp;tmp2);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     sscanf_s(tmp, &quot;%x&quot;, &amp;cudaFunction);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // Use NULL as the first parameter as we need to look at non
</span><br>
<span class="quotelev1">&gt; display devices too
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     HDEVINFO hNvDevInfo = SetupDiGetClassDevs(NULL, NULL, NULL,
</span><br>
<span class="quotelev1">&gt; DIGCF_PRESENT | DIGCF_ALLCLASSES);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if(hNvDevInfo == INVALID_HANDLE_VALUE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         assert(!&quot;INVALID_HANDLE_VALUE&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // Find the deviceInfoData for each GPU
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     DWORD deviceIndex;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for (deviceIndex = 0; ; deviceIndex++)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         SP_DEVINFO_DATA deviceInfoData;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         unsigned long bus;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         unsigned long subdevice;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         unsigned long function;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         deviceInfoData.cbSize = sizeof(SP_DEVINFO_DATA);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ret = SetupDiEnumDeviceInfo(hNvDevInfo, deviceIndex,
</span><br>
<span class="quotelev1">&gt; &amp;deviceInfoData);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if (!ret)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             // MSDN says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             //   call SetupDiEnumDeviceInfo until there are no more
</span><br>
<span class="quotelev1">&gt; values (the function fails and a call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             //   to GetLastError returns ERROR_NO_MORE_ITEMS).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             lastError = GetLastError();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             assert(lastError == ERROR_NO_MORE_ITEMS);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         char locinfo[256];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ret = SetupDiGetDeviceRegistryPropertyA(hNvDevInfo,
</span><br>
<span class="quotelev1">&gt; &amp;deviceInfoData, SPDRP_LOCATION_INFORMATION, NULL,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             (PBYTE)locinfo, sizeof(locinfo), NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if (!ret)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             lastError = GetLastError();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         bool dataSet = false;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if (strncmp(locinfo, &quot;PCI&quot;, 3) == 0) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             char *busString = strstr(locinfo, &quot;bus&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             if (busString) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 busString += 3;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 char *deviceString = strstr(locinfo, &quot;,&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 if (deviceString) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     deviceString[0] = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     bus = atoi(busString);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     deviceString++;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     deviceString = strstr(deviceString, &quot;device&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     if (deviceString) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         deviceString+=6;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         char *functionStr = strstr(deviceString, &quot;,&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         if (functionStr) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             functionStr[0] = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             subdevice = atoi(deviceString);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             functionStr++;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             functionStr = strstr(functionStr, &quot;function&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             if (functionStr) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 functionStr+=8;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 function = atoi(functionStr);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 dataSet = true;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if (dataSet &amp;&amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             (bus == cudaBus) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             (subdevice == cudaSubdevice) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             (function == cudaFunction))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ret = SetupDiGetDeviceRegistryPropertyA(hNvDevInfo,
</span><br>
<span class="quotelev1">&gt; &amp;deviceInfoData, SPDRP_HARDWAREID, NULL,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 (PBYTE)locinfo, sizeof(locinfo), NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             printf(&quot;locinfo %s\n&quot;, locinfo);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             int data[20];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             data[0] = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             DEVPROPTYPE type;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             DEVPROPKEY key = DEVPKEY_Numa_Proximity_Domain;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             lastError = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ret =  SetupDiGetDeviceProperty(hNvDevInfo,
</span><br>
<span class="quotelev1">&gt; &amp;deviceInfoData,&amp;key , &amp;type, (PBYTE)&amp;data[0], 20*sizeof(int), NULL,0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             if (!ret)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 lastError = GetLastError();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             printf(&quot;DEVPKEY_Numa_Proximity_Domain %d err %d\n&quot;,
</span><br>
<span class="quotelev1">&gt; data[0], lastError);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             key = DEVPKEY_Device_Numa_Node;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             lastError = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ret =  SetupDiGetDeviceProperty(hNvDevInfo,
</span><br>
<span class="quotelev1">&gt; &amp;deviceInfoData,&amp;key , &amp;type, (PBYTE)&amp;data[0], 20*sizeof(int), NULL,0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             if (!ret)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 lastError = GetLastError();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             printf(&quot;DEVPKEY_Device_Numa_Node %d err %d\n&quot;, data[0],
</span><br>
<span class="quotelev1">&gt; lastError);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             return data[0];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     return -1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Brice Goglin
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, November 18, 2013 11:09 AM
</span><br>
<span class="quotelev1">&gt; *To:* Hardware locality user list
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [hwloc-users] windows PCI locality (was; DELL 8 core
</span><br>
<span class="quotelev1">&gt; machine + Quadro K5000 GPU Card...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems unrelated since he seems to be running Linux anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We got that information a while ago but I couldn't do anything with it
</span><br>
<span class="quotelev1">&gt; because (I think) I didn't have access to a Windows release that
</span><br>
<span class="quotelev1">&gt; supported this. And, bigger problem, I don't have access to a Windows
</span><br>
<span class="quotelev1">&gt; machine with more than one socket. I can't actually test the code
</span><br>
<span class="quotelev1">&gt; anywhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you volunteering to write some code? I am not saying that you
</span><br>
<span class="quotelev1">&gt; should write the entire hwloc support, but some example would help a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once we have the device locality, we'll need the devices too. The
</span><br>
<span class="quotelev1">&gt; windows code misses the entire device listing code. Do you have any
</span><br>
<span class="quotelev1">&gt; idea how to list PCI devices, match them with CUDA GPUs, etc ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 18/11/2013 02:52, Ashley Reid a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Maybe not completely related to your issue, but the windows code
</span><br>
<span class="quotelev1">&gt;     misses the correct enumeration to see where the GPU is in a NUMA
</span><br>
<span class="quotelev1">&gt;     system. The code needs to look at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Use &quot;DEVPKEY_Numa_Proximity_Domain&quot; and &quot;DEVPKEY_Device_Numa_Node&quot;
</span><br>
<span class="quotelev1">&gt;     when calling SetupDiGetDeviceProperty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Links:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536(v=vs.85">http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536(v=vs.85</a>).aspx
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536%28v=vs.85%29.aspx">http://msdn.microsoft.com/en-us/library/windows/hardware/ff543536%28v=vs.85%29.aspx</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        &quot;Windows Server 2003, Windows XP, and Windows 2000 do not
</span><br>
<span class="quotelev1">&gt;     support this property.&quot; -- So should be fine on win7 and win8?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://blogs.technet.com/b/winserverperformance/archive/2008/09/13/getting-system-topology-information-on-windows.aspx">http://blogs.technet.com/b/winserverperformance/archive/2008/09/13/getting-system-topology-information-on-windows.aspx</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     But this only works if the bios has the right ACPI entries, we
</span><br>
<span class="quotelev1">&gt;     filed a bug and got a update for the z820 from HP. This relies on
</span><br>
<span class="quotelev1">&gt;     the _PXM  value in the ACPI tables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You can use windbg and !nstree to view the tables. There inside
</span><br>
<span class="quotelev1">&gt;     should be some _PXM values.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ash
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
<span class="quotelev1">&gt;     *From:*hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt;     Behalf Of *Solibakke Per Bjarte
</span><br>
<span class="quotelev1">&gt;     *Sent:* Monday, November 18, 2013 10:15 AM
</span><br>
<span class="quotelev1">&gt;     *To:* hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     *Subject:* [hwloc-users] DELL 8 core machine + Quadro K5000 GPU
</span><br>
<span class="quotelev1">&gt;     Card...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I recently got access to a very interesting and powerful machine:
</span><br>
<span class="quotelev1">&gt;     Dell 8 core + GPU Quadro K5000 (96 cores).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     A total of 1536 cores in the original machine configuration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I installed first HWLOC 1.7 version and I also installed the newly
</span><br>
<span class="quotelev1">&gt;     released beta 1.8. The final installation lines report PCI (linux)
</span><br>
<span class="quotelev1">&gt;     CUDA.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     However, the commands:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Lstopo ---whole-system and lstopo ---whole-io
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     report only the 8 CPU-cores. No reference to PCI-Bridges, eth0,
</span><br>
<span class="quotelev1">&gt;     seas +++ and the GPUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Is the installation of the machine the problem or is my 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ./configure ---prefix=/usr/local/hwloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     missing some vital elements?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     PBSolibakke
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Dr.econ Per Bjarte Solibakke
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Professor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     per.b.solibakke_at_[hidden] &lt;mailto:per.b.solibakke_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cell phone: 004790035606
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Phone: 004771214238
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This email message is for the sole use of the intended
</span><br>
<span class="quotelev1">&gt;     recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev1">&gt;     unauthorized review, use, disclosure or distribution is
</span><br>
<span class="quotelev1">&gt;     prohibited.  If you are not the intended recipient, please contact
</span><br>
<span class="quotelev1">&gt;     the sender by reply email and destroy all copies of the original
</span><br>
<span class="quotelev1">&gt;     message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0926/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/01/0927.php">Eloi Gaudry: "[hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Previous message:</strong> <a href="0925.php">Ashley Reid: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>In reply to:</strong> <a href="0925.php">Ashley Reid: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
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
