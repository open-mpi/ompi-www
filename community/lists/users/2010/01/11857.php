<?
$subject_val = "Re: [OMPI users] which ofed rpms for openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 23 08:36:23 2010" -->
<!-- isoreceived="20100123133623" -->
<!-- sent="Sat, 23 Jan 2010 08:36:17 -0500" -->
<!-- isosent="20100123133617" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which ofed rpms for openmpi" -->
<!-- id="8E64F431-6D85-4069-B159-8A908F6ABFB8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B5A8589.9020800_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] which ofed rpms for openmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-23 08:36:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11858.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11856.php">David Turner: "[OMPI users] which ofed rpms for openmpi"</a>
<li><strong>In reply to:</strong> <a href="11856.php">David Turner: "[OMPI users] which ofed rpms for openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak to a specific RPM list (Cisco's out of the IB business these days...), but maybe this will help:
<br>
<p>1. To build OMPI, all you need is the verbs library and devel headers.
<br>
<p>2. To run OMPI, all OMPI needs is the verb library.  You probably also need the relevant verbs library plugin for your IB HCAs (e.g., libmlx4 if you have ConnectX HCAs).
<br>
<p>I'll make a few notes below in your list.
<br>
<p><span class="quotelev1">&gt; compat-dapl-1.2.14-1.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; compat-dapl-debuginfo-1.2.14-1.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; compat-dapl-devel-1.2.14-1.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; compat-dapl-devel-static-1.2.14-1.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; compat-dapl-utils-1.2.14-1.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; dapl-2.0.19-1.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; dapl-debuginfo-2.0.19-1.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; dapl-devel-2.0.19-1.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; dapl-devel-static-2.0.19-1.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; dapl-utils-2.0.19-1.x86_64.rpm
</span><br>
<p>You definitely do not need any DAPL RPMs for OMPI.
<br>
<p><span class="quotelev1">&gt; ib-bonding-0.9.0-2.6.18_164.9.1.el5n.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; ib-bonding-debuginfo-0.9.0-2.6.18_164.9.1.el5n.x86_64.rpm
</span><br>
<p>I doubt you need the bonding RPMs; OMPI does its own multi-device stuff.
<br>
<p><span class="quotelev1">&gt; ibsim-0.5-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; ibsim-debuginfo-0.5-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>I don't know what ibsim is.
<br>
<p><span class="quotelev1">&gt; ibutils-1.2-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; ibutils-debuginfo-1.2-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; ibvexdmtools-0.0.1-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; infiniband-diags-1.4.4_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; infiniband-diags-debuginfo-1.4.4_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>I don't know specifics of these, but you might want that to have some on-node diagnostics?
<br>
<p><span class="quotelev1">&gt; kernel-ib-1.4.2-2.6.18_164.9.1.el5n.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; kernel-ib-devel-1.4.2-2.6.18_164.9.1.el5n.x86_64.rpm
</span><br>
<p>I'm assuming you need at least kernel-ib.
<br>
<p><span class="quotelev1">&gt; libcxgb3-1.2.2-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libcxgb3-debuginfo-1.2.2-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libcxgb3-devel-1.2.2-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>This is the Chelsio T3 RNIC plugin for verbs.
<br>
<p><span class="quotelev1">&gt; libibcm-1.0.4-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibcm-debuginfo-1.0.4-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibcm-devel-1.0.4-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>You don't need the IB CM; OMPI doesn't support it (yet).
<br>
<p><span class="quotelev1">&gt; libibcommon-1.1.2_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibcommon-debuginfo-1.1.2_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibcommon-devel-1.1.2_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibcommon-static-1.1.2_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>I assume you need libibcommon.
<br>
<p><span class="quotelev1">&gt; libibmad-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibmad-debuginfo-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibmad-devel-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibmad-static-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibumad-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibumad-debuginfo-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibumad-devel-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibumad-static-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>These are IB management things; you might need them...?
<br>
<p><span class="quotelev1">&gt; libibverbs-1.1.2-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibverbs-debuginfo-1.1.2-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibverbs-devel-1.1.2-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibverbs-devel-static-1.1.2-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libibverbs-utils-1.1.2-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>This is the main verbs library; you need it.
<br>
<p><span class="quotelev1">&gt; libipathverbs-1.1-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libipathverbs-debuginfo-1.1-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libipathverbs-devel-1.1-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>Verbs plugin for QLogic HCAs.
<br>
<p><span class="quotelev1">&gt; libmlx4-1.0-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libmlx4-debuginfo-1.0-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libmlx4-devel-1.0-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>Verbs plugin for ConnectX HCAs.
<br>
<p><span class="quotelev1">&gt; libmthca-1.0.5-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libmthca-debuginfo-1.0.5-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libmthca-devel-static-1.0.5-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>Verbs plugin for older Mellanox HCAs.
<br>
<p><span class="quotelev1">&gt; libnes-0.6-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libnes-debuginfo-0.6-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libnes-devel-static-0.6-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>Verbs plugin for Intel/NetEffect RNICs.
<br>
<p><span class="quotelev1">&gt; librdmacm-1.0.8-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; librdmacm-debuginfo-1.0.8-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; librdmacm-devel-1.0.8-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; librdmacm-utils-1.0.8-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>OMPI supports the RDMA CM, but you may or may not need (or want) it.
<br>
<p><span class="quotelev1">&gt; libsdp-1.1.99-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libsdp-debuginfo-1.1.99-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; libsdp-devel-1.1.99-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>I'm guessing you won't be using SDP.
<br>
<p><span class="quotelev1">&gt; mpi-selector-1.0.3-1.x86_64.rpm
</span><br>
<p>I'm guessing NERSC doesn't need mpi-selector (you use shell modules, right?).
<br>
<p><span class="quotelev1">&gt; mstflint-1.4-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; mstflint-debuginfo-1.4-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>I believe this is a firmware burner...?
<br>
<p><span class="quotelev1">&gt; mvapich2_gcc-1.2p1-1.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; mvapich_gcc-1.1.0-3355.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; ofed-docs-1.4.2-0.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; ofed-scripts-1.4.2-0.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; opensm-3.2.6_20090317-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; opensm-debuginfo-3.2.6_20090317-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; opensm-devel-3.2.6_20090317-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; opensm-libs-3.2.6_20090317-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; opensm-static-3.2.6_20090317-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>You only need opensm installed on 1 node.
<br>
<p><span class="quotelev1">&gt; perftest-1.2-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; perftest-debuginfo-1.2-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>Various diag / perf tests.
<br>
<p><span class="quotelev1">&gt; qlgc_vnic_daemon-0.0.1-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; qlvnictools-0.0.1-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; qlvnictools-debuginfo-0.0.1-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; qperf-0.4.6-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; qperf-debuginfo-0.4.6-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>Not 100% sure what these are.
<br>
<p><span class="quotelev1">&gt; rds-tools-1.4-1.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; rds-tools-debuginfo-1.4-1.x86_64.rpm
</span><br>
<p>RDS; you probably don't need it.
<br>
<p><span class="quotelev1">&gt; rnfs-utils-1.1.5-2.OFED.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; rnfs-utils-debuginfo-1.1.5-2.OFED.x86_64.rpm
</span><br>
<p>I assume this is RDMA NFS...?
<br>
<p><span class="quotelev1">&gt; scsi-target-utils-0.1-20080828.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; sdpnetstat-1.60-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; sdpnetstat-debuginfo-1.60-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; srptools-0.0.4-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; srptools-debuginfo-0.0.4-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; tgt-0.1-20080828.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; tgt-generic-debuginfo-0.1-20080828.x86_64.rpm
</span><br>
<p>SDP, SRP, SCSI tools -- I assume you don't need these.
<br>
<p><span class="quotelev1">&gt; tvflash-0.9.0-1.ofed1.4.2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; tvflash-debuginfo-0.9.0-1.ofed1.4.2.x86_64.rpm
</span><br>
<p>I believe that this is another firmware burner.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11858.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11856.php">David Turner: "[OMPI users] which ofed rpms for openmpi"</a>
<li><strong>In reply to:</strong> <a href="11856.php">David Turner: "[OMPI users] which ofed rpms for openmpi"</a>
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
