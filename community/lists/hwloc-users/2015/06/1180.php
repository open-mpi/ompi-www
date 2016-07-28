<?
$subject_val = "Re: [hwloc-users] Only one CUDA device showing up";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 08:13:07 2015" -->
<!-- isoreceived="20150604121307" -->
<!-- sent="Thu, 04 Jun 2015 14:13:03 +0200" -->
<!-- isosent="20150604121303" -->
<!-- name="Imre Kerr" -->
<!-- email="imrefran_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Only one CUDA device showing up" -->
<!-- id="557040CF.9010401_at_stud.ntnu.no" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5570274C.5010907_at_stud.ntnu.no" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Only one CUDA device showing up<br>
<strong>From:</strong> Imre Kerr (<em>imrefran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-04 08:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1181.php">Brice Goglin: "Re: [hwloc-users] Only one CUDA device showing up"</a>
<li><strong>Previous message:</strong> <a href="1179.php">Imre Kerr: "[hwloc-users] Only one CUDA device showing up"</a>
<li><strong>In reply to:</strong> <a href="1179.php">Imre Kerr: "[hwloc-users] Only one CUDA device showing up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1181.php">Brice Goglin: "Re: [hwloc-users] Only one CUDA device showing up"</a>
<li><strong>Reply:</strong> <a href="1181.php">Brice Goglin: "Re: [hwloc-users] Only one CUDA device showing up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Never mind, I figured it out. hwloc_cudart_get_device_pci_ids was giving 
<br>
the PCI Domain as being 0 for all GPUs. Looking at hwloc/cudart.h, I 
<br>
found some strange conditional. Removing it solved the problem. Is 
<br>
CU_DEVICE_ATTRIBUTE_PCI_DOMAIN_ID a holdover from some older CUDA version?
<br>
<p>diff --git a/include/hwloc/cudart.h b/include/hwloc/cudart.h
<br>
index 243e0fd..e2fd74d 100644
<br>
--- a/include/hwloc/cudart.h
<br>
+++ b/include/hwloc/cudart.h
<br>
@@ -56,12 +56,7 @@ hwloc_cudart_get_device_pci_ids(hwloc_topology_t 
<br>
topology __hwloc_attribute_unus
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-#ifdef CU_DEVICE_ATTRIBUTE_PCI_DOMAIN_ID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*domain = prop.pciDomainID;
<br>
-#else
<br>
-  *domain = 0;
<br>
-#endif
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*bus = prop.pciBusID;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*dev = prop.pciDeviceID;
<br>
<p>Imre
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1181.php">Brice Goglin: "Re: [hwloc-users] Only one CUDA device showing up"</a>
<li><strong>Previous message:</strong> <a href="1179.php">Imre Kerr: "[hwloc-users] Only one CUDA device showing up"</a>
<li><strong>In reply to:</strong> <a href="1179.php">Imre Kerr: "[hwloc-users] Only one CUDA device showing up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1181.php">Brice Goglin: "Re: [hwloc-users] Only one CUDA device showing up"</a>
<li><strong>Reply:</strong> <a href="1181.php">Brice Goglin: "Re: [hwloc-users] Only one CUDA device showing up"</a>
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
