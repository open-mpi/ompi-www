<?
$subject_val = "[OMPI users] HugeTLB messages from mpi code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  1 16:19:27 2014" -->
<!-- isoreceived="20140701201927" -->
<!-- sent="Tue, 1 Jul 2014 16:19:20 -0400" -->
<!-- isosent="20140701201920" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] HugeTLB messages from mpi code" -->
<!-- id="EF7C6554-4692-4D52-B79B-780C31573066_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] HugeTLB messages from mpi code<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-01 16:19:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24738.php">Timur Ismagilov: "[OMPI users] openMP  and mpi problem"</a>
<li><strong>Previous message:</strong> <a href="24736.php">Josh Hursey: "Re: [OMPI users] Missing -enable-crdebug option in configure step"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are getting the following on our RHEL6 cluster using openmpi 1.8.1 with meep
<br>
<a href="http://ab-initio.mit.edu/wiki/index.php/Meep">http://ab-initio.mit.edu/wiki/index.php/Meep</a>
<br>
<p>WARNING: at fs/hugetlbfs/inode.c:940 hugetlb_file_setup+0x227/0x250() (Tainted: P           ---------------   )
<br>
Hardware name: C6100           
<br>
Using mlock ulimits for SHM_HUGETLB deprecated
<br>
Modules linked in: rdma_ucm(U) openafs(P)(U) autofs4 mgc(U) lustre(U) lov(U) mdc(U) lquota(U) osc(U) ksocklnd(U) ko2iblnd(U) rdma_cm(U) iw_cm(U) ib_addr(U) ptlrpc(U) obdclass(U) lnet(U) lvfs(U) libcfs(U) nfs lockd fscache auth_rpcgss nfs_acl sunrpc acpi_cpufreq freq_table mperf ipt_REJECT nf_conntrack_ipv4 nf_defrag_ipv4 xt_state nf_conntrack xt_multiport iptable_filter ip_tables ip6_tables ib_ipoib(U) ib_cm(U) ipv6 ib_uverbs(U) ib_umad(U) iw_nes(U) libcrc32c cxgb3 mdio mlx4_vnic(U) mlx4_vnic_helper(U) ib_sa(U) mlx4_ib(U) mlx4_en(U) mlx4_core(U) ib_mthca(U) ib_mad(U) ib_core(U) mic(U) vhost_net macvtap macvlan tun kvm ipmi_devintf igb ptp pps_core dcdbas microcode i2c_i801 i2c_core sg iTCO_wdt iTCO_vendor_support ioatdma dca i7core_edac edac_core shpchp ext4 jbd2 mbcache sd_mod crc_t10dif ahci dm_mirror dm_region_hash dm_log dm_mod [last unloaded: scsi_wait_scan]
<br>
Pid: 14367, comm: meep-mpi Tainted: P           ---------------    2.6.32-358.23.2.el6.x86_64 #1
<br>
Call Trace:
<br>
&nbsp;[&lt;ffffffff8106e3e7&gt;] ? warn_slowpath_common+0x87/0xc0
<br>
&nbsp;[&lt;ffffffff8106e4d6&gt;] ? warn_slowpath_fmt+0x46/0x50
<br>
&nbsp;[&lt;ffffffff8114615c&gt;] ? user_shm_lock+0x9c/0xc0
<br>
&nbsp;[&lt;ffffffff811ffbd7&gt;] ? hugetlb_file_setup+0x227/0x250
<br>
&nbsp;[&lt;ffffffff81281720&gt;] ? sprintf+0x40/0x50
<br>
&nbsp;[&lt;ffffffff8120e112&gt;] ? newseg+0x152/0x290
<br>
&nbsp;[&lt;ffffffff81208f51&gt;] ? ipcget+0x61/0x200
<br>
&nbsp;[&lt;ffffffff8114765e&gt;] ? remove_vma+0x6e/0x90
<br>
&nbsp;[&lt;ffffffff8120dfa9&gt;] ? sys_shmget+0x59/0x60
<br>
&nbsp;[&lt;ffffffff8120dfc0&gt;] ? newseg+0x0/0x290
<br>
&nbsp;[&lt;ffffffff8120dfb0&gt;] ? shm_security+0x0/0x10
<br>
&nbsp;[&lt;ffffffff8120d510&gt;] ? shm_more_checks+0x0/0x20
<br>
&nbsp;[&lt;ffffffff8100b072&gt;] ? system_call_fastpath+0x16/0x1b
<br>
---[ end trace 375c130ede6f14a0 ]---
<br>
<p><p>Doing some googling looks like this could be hurting our performance, but i'm not sure what todo about it?  There is nothing on the list, but there was one reference to another MPI library.  Is there any idea what would cause this?
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24737/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24738.php">Timur Ismagilov: "[OMPI users] openMP  and mpi problem"</a>
<li><strong>Previous message:</strong> <a href="24736.php">Josh Hursey: "Re: [OMPI users] Missing -enable-crdebug option in configure step"</a>
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
