<?
$subject_val = "Re: [hwloc-devel] Add support for PCIe drives";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 17:39:25 2015" -->
<!-- isoreceived="20150831213925" -->
<!-- sent="Mon, 31 Aug 2015 23:39:22 +0200" -->
<!-- isosent="20150831213922" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Add support for PCIe drives" -->
<!-- id="55E4C98A.3080702_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6B86B7F2A4026246AA81BA1ABF9756906A7B93D3_at_fmsmsx107.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Add support for PCIe drives<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-31 17:39:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4590.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-719-gbc27776)"</a>
<li><strong>Previous message:</strong> <a href="4588.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-32-gb71fd21)"</a>
<li><strong>In reply to:</strong> <a href="4581.php">Tannenbaum, Barry M: "[hwloc-devel] Add support for PCIe drives"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I applied a slightly different patch to v1.11 (nothing is needed in
<br>
master since the discovery logic is different and more generic).
<br>
thanks
<br>
Brice
<br>
<p><p><p>Le 28/08/2015 21:53, Tannenbaum, Barry M a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PCIe drives (like the Intel DC P3500/P3600/P3700) do not have a
</span><br>
<span class="quotelev1">&gt; controller &#150; they appear directly on the PCIe bus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; support-pcie-disk.patch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/src/topology-linux.c b/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; --- a/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; +++ b/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; @@ -4656,6 +4656,11 @@
</span><br>
<span class="quotelev1">&gt;        /* restore parent path */
</span><br>
<span class="quotelev1">&gt;        pathlen -= devicedlen;
</span><br>
<span class="quotelev1">&gt;        path[pathlen] = '\0';
</span><br>
<span class="quotelev1">&gt; +    } else if (strcmp(devicedirent-&gt;d_name, &quot;block&quot;) == 0) {
</span><br>
<span class="quotelev1">&gt; +      /* found a block device - lookup block class for real */
</span><br>
<span class="quotelev1">&gt; +      res += hwloc_linux_class_readdir(backend, pcidev, path,
</span><br>
<span class="quotelev1">&gt; +                                       HWLOC_OBJ_OSDEV_BLOCK, &quot;block&quot;,
</span><br>
<span class="quotelev1">&gt; +                                       hwloc_linux_block_class_fillinfos);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    closedir(devicedir);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/08/4581.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/08/4581.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4589/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4590.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-719-gbc27776)"</a>
<li><strong>Previous message:</strong> <a href="4588.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-32-gb71fd21)"</a>
<li><strong>In reply to:</strong> <a href="4581.php">Tannenbaum, Barry M: "[hwloc-devel] Add support for PCIe drives"</a>
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
