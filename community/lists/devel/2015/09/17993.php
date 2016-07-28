<?
$subject_val = "[OMPI devel] HWLOC issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 15:11:01 2015" -->
<!-- isoreceived="20150910191101" -->
<!-- sent="Thu, 10 Sep 2015 15:10:59 -0400" -->
<!-- isosent="20150910191059" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] HWLOC issue" -->
<!-- id="CAMJJpkU7C3FQvP0_Pm6=uLFiagZwnd_AhF9Fcu8yMpwGHcLmYw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] HWLOC issue<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-10 15:10:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17994.php">Brice Goglin: "Re: [OMPI devel] HWLOC issue"</a>
<li><strong>Previous message:</strong> <a href="17992.php">Ralph Castain: "Re: [OMPI devel] Slurm support in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17994.php">Brice Goglin: "Re: [OMPI devel] HWLOC issue"</a>
<li><strong>Reply:</strong> <a href="17994.php">Brice Goglin: "Re: [OMPI devel] HWLOC issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With the current trunk version I keep getting an assert deep down in orted.
<br>
<p>orted:
<br>
../../../../../../../ompi/opal/mca/hwloc/hwloc1110/hwloc/src/pci-common.c:177:
<br>
hwloc_pci_try_insert_siblings_below_new_bridge: Assertion `comp !=
<br>
HWLOC_PCI_BUSID_SUPERSET' failed.
<br>
<p>The stack looks like this:
<br>
<p>[dancer18:21100] *** Process received signal ***
<br>
[dancer18:21100] Signal: Aborted (6)
<br>
[dancer18:21100] Signal code:  (-6)
<br>
[dancer18:21100] [ 0] /lib64/libpthread.so.0(+0xf710)[0x7fc22ce61710]
<br>
[dancer18:21100] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x7fc22caf0625]
<br>
[dancer18:21100] [ 2] /lib64/libc.so.6(abort+0x175)[0x7fc22caf1e05]
<br>
[dancer18:21100] [ 3] /lib64/libc.so.6(+0x2b74e)[0x7fc22cae974e]
<br>
[dancer18:21100] [ 4]
<br>
/lib64/libc.so.6(__assert_perror_fail+0x0)[0x7fc22cae9810]
<br>
[dancer18:21100] [ 5]
<br>
/home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(+0xb0a62)[0x7fc22ddc6a62]
<br>
[dancer18:21100] [ 6]
<br>
/home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(+0xb0b60)[0x7fc22ddc6b60]
<br>
[dancer18:21100] [ 7]
<br>
/home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(opal_hwloc1110_hwloc_insert_pci_device_list+0x8f)[0x7fc22ddc724c]
<br>
[dancer18:21100] [ 8]
<br>
/home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(+0xbf2d6)[0x7fc22ddd52d6]
<br>
[dancer18:21100] [ 9]
<br>
/home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(+0xd22f7)[0x7fc22dde82f7]
<br>
[dancer18:21100] [10]
<br>
/home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(opal_hwloc1110_hwloc_topology_load+0x1a3)[0x7fc22dde8ee1]
<br>
[dancer18:21100] [11]
<br>
/home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(opal_hwloc_base_get_topology+0x80)[0x7fc22ddb6ece]
<br>
[dancer18:21100] [12]
<br>
/home/bosilca/opt/trunk/debug/lib/libopen-rte.so.0(orte_ess_base_orted_setup+0x127)[0x7fc22e0b3523]
<br>
[dancer18:21100] [13]
<br>
/home/bosilca/opt/trunk/debug/lib/openmpi/mca_ess_env.so(+0xe45)[0x7fc22c6bbe45]
<br>
[dancer18:21100] [14]
<br>
/home/bosilca/opt/trunk/debug/lib/libopen-rte.so.0(orte_init+0x2c6)[0x7fc22e06b55a]
<br>
[dancer18:21100] [15]
<br>
/home/bosilca/opt/trunk/debug/lib/libopen-rte.so.0(orte_daemon+0x5c1)[0x7fc22e09a895]
<br>
[dancer18:21100] [16] /home/bosilca/opt/trunk/debug/bin/orted[0x40082a]
<br>
[dancer18:21100] [17]
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x7fc22cadcd5d]
<br>
[dancer18:21100] [18] /home/bosilca/opt/trunk/debug/bin/orted[0x4006e9]
<br>
<p>Any ideas?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17993/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17994.php">Brice Goglin: "Re: [OMPI devel] HWLOC issue"</a>
<li><strong>Previous message:</strong> <a href="17992.php">Ralph Castain: "Re: [OMPI devel] Slurm support in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17994.php">Brice Goglin: "Re: [OMPI devel] HWLOC issue"</a>
<li><strong>Reply:</strong> <a href="17994.php">Brice Goglin: "Re: [OMPI devel] HWLOC issue"</a>
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
