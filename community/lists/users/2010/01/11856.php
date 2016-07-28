<?
$subject_val = "[OMPI users] which ofed rpms for openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 23 00:13:52 2010" -->
<!-- isoreceived="20100123051352" -->
<!-- sent="Fri, 22 Jan 2010 21:13:45 -0800" -->
<!-- isosent="20100123051345" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="[OMPI users] which ofed rpms for openmpi" -->
<!-- id="4B5A8589.9020800_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] which ofed rpms for openmpi<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-23 00:13:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11857.php">Jeff Squyres: "Re: [OMPI users] which ofed rpms for openmpi"</a>
<li><strong>Previous message:</strong> <a href="11855.php">Ashley Pittman: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11857.php">Jeff Squyres: "Re: [OMPI users] which ofed rpms for openmpi"</a>
<li><strong>Reply:</strong> <a href="11857.php">Jeff Squyres: "Re: [OMPI users] which ofed rpms for openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We are deploying a cluster with stateless nodes, and so
<br>
are trying to minimize the memory footprint of our images.
<br>
This is new territory for us.  My sysadmin counterpart has
<br>
a large collection of openib rpms built, but we are wondering
<br>
which are necessary to build/support open mpi (1.4.1).  In
<br>
order just to configure the IB network, she has already
<br>
installed these:
<br>
<p>libibumad-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
<br>
opensm-libs-3.2.6_20090317-1.ofed1.4.2.x86_64.rpm
<br>
mstflint-1.4-1.ofed1.4.2.x86_64.rpm
<br>
infiniband-diags-1.4.4_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibcommon-1.1.2_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibmad-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibverbs-1.1.2-1.ofed1.4.2.x86_64.rpm
<br>
kernel-ib-1.4.2-2.6.18_164.9.1.el5n.x86_64.rpm
<br>
<p>Here is the complete list of 95 rpms that we are working with:
<br>
<p>compat-dapl-1.2.14-1.x86_64.rpm
<br>
compat-dapl-debuginfo-1.2.14-1.x86_64.rpm
<br>
compat-dapl-devel-1.2.14-1.x86_64.rpm
<br>
compat-dapl-devel-static-1.2.14-1.x86_64.rpm
<br>
compat-dapl-utils-1.2.14-1.x86_64.rpm
<br>
dapl-2.0.19-1.x86_64.rpm
<br>
dapl-debuginfo-2.0.19-1.x86_64.rpm
<br>
dapl-devel-2.0.19-1.x86_64.rpm
<br>
dapl-devel-static-2.0.19-1.x86_64.rpm
<br>
dapl-utils-2.0.19-1.x86_64.rpm
<br>
ib-bonding-0.9.0-2.6.18_164.9.1.el5n.x86_64.rpm
<br>
ib-bonding-debuginfo-0.9.0-2.6.18_164.9.1.el5n.x86_64.rpm
<br>
ibsim-0.5-1.ofed1.4.2.x86_64.rpm
<br>
ibsim-debuginfo-0.5-1.ofed1.4.2.x86_64.rpm
<br>
ibutils-1.2-1.ofed1.4.2.x86_64.rpm
<br>
ibutils-debuginfo-1.2-1.ofed1.4.2.x86_64.rpm
<br>
ibvexdmtools-0.0.1-1.ofed1.4.2.x86_64.rpm
<br>
infiniband-diags-1.4.4_20090314-1.ofed1.4.2.x86_64.rpm
<br>
infiniband-diags-debuginfo-1.4.4_20090314-1.ofed1.4.2.x86_64.rpm
<br>
kernel-ib-1.4.2-2.6.18_164.9.1.el5n.x86_64.rpm
<br>
kernel-ib-devel-1.4.2-2.6.18_164.9.1.el5n.x86_64.rpm
<br>
libcxgb3-1.2.2-1.ofed1.4.2.x86_64.rpm
<br>
libcxgb3-debuginfo-1.2.2-1.ofed1.4.2.x86_64.rpm
<br>
libcxgb3-devel-1.2.2-1.ofed1.4.2.x86_64.rpm
<br>
libibcm-1.0.4-1.ofed1.4.2.x86_64.rpm
<br>
libibcm-debuginfo-1.0.4-1.ofed1.4.2.x86_64.rpm
<br>
libibcm-devel-1.0.4-1.ofed1.4.2.x86_64.rpm
<br>
libibcommon-1.1.2_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibcommon-debuginfo-1.1.2_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibcommon-devel-1.1.2_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibcommon-static-1.1.2_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibmad-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibmad-debuginfo-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibmad-devel-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibmad-static-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibumad-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibumad-debuginfo-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibumad-devel-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibumad-static-1.2.3_20090314-1.ofed1.4.2.x86_64.rpm
<br>
libibverbs-1.1.2-1.ofed1.4.2.x86_64.rpm
<br>
libibverbs-debuginfo-1.1.2-1.ofed1.4.2.x86_64.rpm
<br>
libibverbs-devel-1.1.2-1.ofed1.4.2.x86_64.rpm
<br>
libibverbs-devel-static-1.1.2-1.ofed1.4.2.x86_64.rpm
<br>
libibverbs-utils-1.1.2-1.ofed1.4.2.x86_64.rpm
<br>
libipathverbs-1.1-1.ofed1.4.2.x86_64.rpm
<br>
libipathverbs-debuginfo-1.1-1.ofed1.4.2.x86_64.rpm
<br>
libipathverbs-devel-1.1-1.ofed1.4.2.x86_64.rpm
<br>
libmlx4-1.0-1.ofed1.4.2.x86_64.rpm
<br>
libmlx4-debuginfo-1.0-1.ofed1.4.2.x86_64.rpm
<br>
libmlx4-devel-1.0-1.ofed1.4.2.x86_64.rpm
<br>
libmthca-1.0.5-1.ofed1.4.2.x86_64.rpm
<br>
libmthca-debuginfo-1.0.5-1.ofed1.4.2.x86_64.rpm
<br>
libmthca-devel-static-1.0.5-1.ofed1.4.2.x86_64.rpm
<br>
libnes-0.6-1.ofed1.4.2.x86_64.rpm
<br>
libnes-debuginfo-0.6-1.ofed1.4.2.x86_64.rpm
<br>
libnes-devel-static-0.6-1.ofed1.4.2.x86_64.rpm
<br>
librdmacm-1.0.8-1.ofed1.4.2.x86_64.rpm
<br>
librdmacm-debuginfo-1.0.8-1.ofed1.4.2.x86_64.rpm
<br>
librdmacm-devel-1.0.8-1.ofed1.4.2.x86_64.rpm
<br>
librdmacm-utils-1.0.8-1.ofed1.4.2.x86_64.rpm
<br>
libsdp-1.1.99-1.ofed1.4.2.x86_64.rpm
<br>
libsdp-debuginfo-1.1.99-1.ofed1.4.2.x86_64.rpm
<br>
libsdp-devel-1.1.99-1.ofed1.4.2.x86_64.rpm
<br>
mpi-selector-1.0.3-1.x86_64.rpm
<br>
mstflint-1.4-1.ofed1.4.2.x86_64.rpm
<br>
mstflint-debuginfo-1.4-1.ofed1.4.2.x86_64.rpm
<br>
mvapich2_gcc-1.2p1-1.x86_64.rpm
<br>
mvapich_gcc-1.1.0-3355.x86_64.rpm
<br>
ofed-docs-1.4.2-0.x86_64.rpm
<br>
ofed-scripts-1.4.2-0.x86_64.rpm
<br>
opensm-3.2.6_20090317-1.ofed1.4.2.x86_64.rpm
<br>
opensm-debuginfo-3.2.6_20090317-1.ofed1.4.2.x86_64.rpm
<br>
opensm-devel-3.2.6_20090317-1.ofed1.4.2.x86_64.rpm
<br>
opensm-libs-3.2.6_20090317-1.ofed1.4.2.x86_64.rpm
<br>
opensm-static-3.2.6_20090317-1.ofed1.4.2.x86_64.rpm
<br>
perftest-1.2-1.ofed1.4.2.x86_64.rpm
<br>
perftest-debuginfo-1.2-1.ofed1.4.2.x86_64.rpm
<br>
qlgc_vnic_daemon-0.0.1-1.ofed1.4.2.x86_64.rpm
<br>
qlvnictools-0.0.1-1.ofed1.4.2.x86_64.rpm
<br>
qlvnictools-debuginfo-0.0.1-1.ofed1.4.2.x86_64.rpm
<br>
qperf-0.4.6-1.ofed1.4.2.x86_64.rpm
<br>
qperf-debuginfo-0.4.6-1.ofed1.4.2.x86_64.rpm
<br>
rds-tools-1.4-1.x86_64.rpm
<br>
rds-tools-debuginfo-1.4-1.x86_64.rpm
<br>
rnfs-utils-1.1.5-2.OFED.x86_64.rpm
<br>
rnfs-utils-debuginfo-1.1.5-2.OFED.x86_64.rpm
<br>
scsi-target-utils-0.1-20080828.x86_64.rpm
<br>
sdpnetstat-1.60-1.ofed1.4.2.x86_64.rpm
<br>
sdpnetstat-debuginfo-1.60-1.ofed1.4.2.x86_64.rpm
<br>
srptools-0.0.4-1.ofed1.4.2.x86_64.rpm
<br>
srptools-debuginfo-0.0.4-1.ofed1.4.2.x86_64.rpm
<br>
tgt-0.1-20080828.x86_64.rpm
<br>
tgt-generic-debuginfo-0.1-20080828.x86_64.rpm
<br>
tvflash-0.9.0-1.ofed1.4.2.x86_64.rpm
<br>
tvflash-debuginfo-0.9.0-1.ofed1.4.2.x86_64.rpm
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11857.php">Jeff Squyres: "Re: [OMPI users] which ofed rpms for openmpi"</a>
<li><strong>Previous message:</strong> <a href="11855.php">Ashley Pittman: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11857.php">Jeff Squyres: "Re: [OMPI users] which ofed rpms for openmpi"</a>
<li><strong>Reply:</strong> <a href="11857.php">Jeff Squyres: "Re: [OMPI users] which ofed rpms for openmpi"</a>
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
