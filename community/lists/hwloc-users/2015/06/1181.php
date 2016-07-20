<?
$subject_val = "Re: [hwloc-users] Only one CUDA device showing up";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 08:49:40 2015" -->
<!-- isoreceived="20150604124940" -->
<!-- sent="Thu, 04 Jun 2015 14:49:33 +0200" -->
<!-- isosent="20150604124933" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Only one CUDA device showing up" -->
<!-- id="5570495D.8040408_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="557040CF.9010401_at_stud.ntnu.no" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-04 08:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/07/1182.php">D'Alessandro, Luke K: "[hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>Previous message:</strong> <a href="1180.php">Imre Kerr: "Re: [hwloc-users] Only one CUDA device showing up"</a>
<li><strong>In reply to:</strong> <a href="1180.php">Imre Kerr: "Re: [hwloc-users] Only one CUDA device showing up"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
CUDA releases before 4.0 didn't support this attribute, the #ifdef
<br>
cannot work anymore on recent CUDA releases, I'll fix that, thanks.
<br>
Interesting to know that NUMAScale machines use PCI domains.
<br>
Brice
<br>
<p><p><p>Le 04/06/2015 14:13, Imre Kerr a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Never mind, I figured it out. hwloc_cudart_get_device_pci_ids was
</span><br>
<span class="quotelev1">&gt; giving the PCI Domain as being 0 for all GPUs. Looking at
</span><br>
<span class="quotelev1">&gt; hwloc/cudart.h, I found some strange conditional. Removing it solved
</span><br>
<span class="quotelev1">&gt; the problem. Is CU_DEVICE_ATTRIBUTE_PCI_DOMAIN_ID a holdover from some
</span><br>
<span class="quotelev1">&gt; older CUDA version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/include/hwloc/cudart.h b/include/hwloc/cudart.h
</span><br>
<span class="quotelev1">&gt; index 243e0fd..e2fd74d 100644
</span><br>
<span class="quotelev1">&gt; --- a/include/hwloc/cudart.h
</span><br>
<span class="quotelev1">&gt; +++ b/include/hwloc/cudart.h
</span><br>
<span class="quotelev1">&gt; @@ -56,12 +56,7 @@ hwloc_cudart_get_device_pci_ids(hwloc_topology_t
</span><br>
<span class="quotelev1">&gt; topology __hwloc_attribute_unus
</span><br>
<span class="quotelev1">&gt;      return -1;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#ifdef CU_DEVICE_ATTRIBUTE_PCI_DOMAIN_ID
</span><br>
<span class="quotelev1">&gt;    *domain = prop.pciDomainID;
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt; -  *domain = 0;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;    *bus = prop.pciBusID;
</span><br>
<span class="quotelev1">&gt;    *dev = prop.pciDeviceID;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Imre
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/06/1181.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/06/1181.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/07/1182.php">D'Alessandro, Luke K: "[hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>Previous message:</strong> <a href="1180.php">Imre Kerr: "Re: [hwloc-users] Only one CUDA device showing up"</a>
<li><strong>In reply to:</strong> <a href="1180.php">Imre Kerr: "Re: [hwloc-users] Only one CUDA device showing up"</a>
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
