<?
$subject_val = "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 12:36:08 2012" -->
<!-- isoreceived="20120315163608" -->
<!-- sent="Thu, 15 Mar 2012 17:36:02 +0100" -->
<!-- isosent="20120315163602" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed" -->
<!-- id="4F621A72.8000503_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120315154223.046D3FDA272_at_irancy.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 12:36:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2929.php">Jeffrey Squyres: "[hwloc-devel] topology-x86.c warning"</a>
<li><strong>Previous message:</strong> <a href="2927.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4394)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2931.php">Samuel Thibault: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<li><strong>Maybe reply:</strong> <a href="2931.php">Samuel Thibault: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<li><strong>Maybe reply:</strong> <a href="2936.php">Samuel Thibault: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like g++ doesn't like __hwloc_attribute_unused in hwloc/helper.h
<br>
<p>Brice
<br>
<p><p><p>Le 15/03/2012 16:42, Hydra Build Daemon a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is to let you know that Hydra build 36199 of job runtime:hwloc-trunk:build_fedora2_i386 has changed from 'Success' to 'Failed'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Complete build information can be found on this page: <a href="http://hydra.bordeaux.inria.fr/build/36199">http://hydra.bordeaux.inria.fr/build/36199</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last 50 lines of the build log are shown at the bottom of this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A summary of the build information follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Build ID:              | 36199
</span><br>
<span class="quotelev1">&gt; Nix name:              | hwloc-1.5a1-1
</span><br>
<span class="quotelev1">&gt; Short description:     | Native Nix build on x86_64-linux
</span><br>
<span class="quotelev1">&gt; Maintainer(s):         | Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;, Brice Goglin &lt;brice.goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; System:                | x86_64-linux
</span><br>
<span class="quotelev1">&gt; Derivation store path: | /nix/store/6cxvr7nx08lj0gs9nix22zbdyachj8xr-hwloc-1.5a1-1.drv
</span><br>
<span class="quotelev1">&gt; Output store path:     | /nix/store/2kpgnd0gnpvpc0y27qndhgxyq93dzcpn-hwloc-1.5a1-1
</span><br>
<span class="quotelev1">&gt; Time added:            | 2012-03-15 16:42:22
</span><br>
<span class="quotelev1">&gt; Build started:         | 2012-03-15 16:38:09
</span><br>
<span class="quotelev1">&gt; Build finished:        | 2012-03-15 16:42:22
</span><br>
<span class="quotelev1">&gt; Duration:              | 253s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The build inputs were:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Name        | Type  | Value
</span><br>
<span class="quotelev1">&gt; ------------+-------+-------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; hydraConfig | git   | git+ssh://hydra-ci@scm.gforge.inria.fr//gitroot/hydra-recipes/hydra-recipes.git:c9447e6644bf3fb26b09d0b61fc4545bfcffb62b
</span><br>
<span class="quotelev1">&gt; nixpkgs     | svn   | <a href="https://nixos.org/repos/nix/nixpkgs/trunk/:33105">https://nixos.org/repos/nix/nixpkgs/trunk/:33105</a>
</span><br>
<span class="quotelev1">&gt; tarball     | build | 36128
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Hydra build daemon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;    hwloc_get_non_io_ancestor_obj(...)':
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h:1247: error: cannot declare static 
</span><br>
<span class="quotelev1">&gt;    function inside another function
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h: In function `hwloc_obj* 
</span><br>
<span class="quotelev1">&gt;    hwloc_get_next_pcidev(hwloc_topology*, hwloc_obj*)':
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h:1257: error: cannot declare static 
</span><br>
<span class="quotelev1">&gt;    function inside another function
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h: In function `hwloc_obj* 
</span><br>
<span class="quotelev1">&gt;    hwloc_get_pcidev_by_busid(hwloc_topology*, unsigned int, unsigned int, 
</span><br>
<span class="quotelev1">&gt;    unsigned int, unsigned int)':
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h:1274: error: cannot declare static 
</span><br>
<span class="quotelev1">&gt;    function inside another function
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h: In function `hwloc_obj* 
</span><br>
<span class="quotelev1">&gt;    hwloc_get_pcidev_by_busidstring(hwloc_topology*, const char*)':
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h:1293: error: cannot declare static 
</span><br>
<span class="quotelev1">&gt;    function inside another function
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h: In function `hwloc_obj* 
</span><br>
<span class="quotelev1">&gt;    hwloc_get_next_osdev(hwloc_topology*, hwloc_obj*)':
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h:1303: error: cannot declare static 
</span><br>
<span class="quotelev1">&gt;    function inside another function
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h: In function `hwloc_obj* 
</span><br>
<span class="quotelev1">&gt;    hwloc_get_next_bridge(hwloc_topology*, hwloc_obj*)':
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h:1312: error: cannot declare static 
</span><br>
<span class="quotelev1">&gt;    function inside another function
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h: In function `int 
</span><br>
<span class="quotelev1">&gt;    hwloc_bridge_covers_pcibus(hwloc_obj*, unsigned int, unsigned int)':
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h:1328: error: cannot declare static 
</span><br>
<span class="quotelev1">&gt;    function inside another function
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h: In function `hwloc_obj* 
</span><br>
<span class="quotelev1">&gt;    hwloc_get_hostbridge_by_pcibus(hwloc_topology*, unsigned int, unsigned int)
</span><br>
<span class="quotelev1">&gt;    ':
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.5a1-1/include/hwloc/helper.h:1347: error: syntax error before `}' 
</span><br>
<span class="quotelev1">&gt;    token
</span><br>
<span class="quotelev1">&gt; hwloc-hello-cpp.cpp:18: error: cannot declare static function inside another 
</span><br>
<span class="quotelev1">&gt;    function
</span><br>
<span class="quotelev1">&gt; make[3]: *** [hwloc-hello-cpp.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/tmp/hwloc-1.5a1-1/doc'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [check-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/tmp/hwloc-1.5a1-1/doc'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [check] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/tmp/hwloc-1.5a1-1/doc'
</span><br>
<span class="quotelev1">&gt; make: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; build time elapsed:  0m0.028s 0m0.024s 0m22.330s 3m37.685s
</span><br>
<span class="quotelev1">&gt; Copying build directory to /nix/store/2kpgnd0gnpvpc0y27qndhgxyq93dzcpn-hwloc-1.5a1-1/tmp
</span><br>
<span class="quotelev1">&gt; build failed with exit code 2 (ignored)
</span><br>
<span class="quotelev1">&gt; DONE
</span><br>
<span class="quotelev1">&gt; [  250.758000] ACPI: Preparing to enter system sleep state S5
</span><br>
<span class="quotelev1">&gt; [  250.758712] Disabling non-boot CPUs ...
</span><br>
<span class="quotelev1">&gt; [  250.759189] Power down.
</span><br>
<span class="quotelev1">&gt; ./run-vm: line 34: 20861 Terminated              /nix/store/bacp63363ly8s0dazdj2qv3v3v6wsn9x-socat-1.7.1.2/bin/socat unix-listen:./samba exec:&quot;/nix/store/pd5v7rwq7fx7wgmsz7iml2vx5386302f-util-linux-2.20.1/bin/setsid /nix/store/wq5nk5qbm3xbhwvvyh1yl0jqinrpyw8w-samba-3.6.1/sbin/smbd -s /tmp/nix-build-6cxvr7nx08lj0gs9nix22zbdyachj8xr-hwloc-1.5a1-1.drv-0/smb.conf&quot;,nofork &gt; /dev/null 2&gt;&amp;1
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2929.php">Jeffrey Squyres: "[hwloc-devel] topology-x86.c warning"</a>
<li><strong>Previous message:</strong> <a href="2927.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4394)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2931.php">Samuel Thibault: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<li><strong>Maybe reply:</strong> <a href="2931.php">Samuel Thibault: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<li><strong>Maybe reply:</strong> <a href="2936.php">Samuel Thibault: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
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
