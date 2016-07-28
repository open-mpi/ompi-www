<?
$subject_val = "[OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 03:47:54 2015" -->
<!-- isoreceived="20150723074754" -->
<!-- sent="Thu, 23 Jul 2015 07:47:50 +0000" -->
<!-- isosent="20150723074750" -->
<!-- name="Schlottke-Lakemper, Michael" -->
<!-- email="m.schlottke-lakemper_at_[hidden]" -->
<!-- subject="[OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7" -->
<!-- id="0F7D8A6B-42C7-4959-8B90-DD1786F14586_at_aia.rwth-aachen.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7<br>
<strong>From:</strong> Schlottke-Lakemper, Michael (<em>m.schlottke-lakemper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-23 03:47:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27304.php">Schlottke-Lakemper, Michael: "[OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27302.php">David Shrader: "Re: [OMPI users] shared memory performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27328.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27328.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>

<br>
recently we&#226;&#128;&#153;ve been getting a Valgrind error in PMPI_Init for our suite of regression tests:
<br>

<br>
==5922== Invalid read of size 4
<br>
==5922==    at 0x61CC5C0: opal_os_dirpath_create (in /aia/opt/openmpi-1.8.7/lib64/libopen-pal.so.6.2.2)
<br>
==5922==    by 0x5F207E5: orte_session_dir (in /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
<br>
==5922==    by 0x5F34F04: orte_ess_base_app_setup (in /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
<br>
==5922==    by 0x7E96679: rte_init (in /aia/opt/openmpi-1.8.7/lib64/openmpi/mca_ess_env.so)
<br>
==5922==    by 0x5F12A77: orte_init (in /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
<br>
==5922==    by 0x509883C: ompi_mpi_init (in /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
<br>
==5922==    by 0x50B843A: PMPI_Init (in /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
<br>
==5922==    by 0xEBA79C: ZFS::run() (in /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
<br>
==5922==    by 0x4DC243: main (in /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
<br>
==5922==  Address 0x710f670 is 48 bytes inside a block of size 51 alloc'd
<br>
==5922==    at 0x4C29110: malloc (in /usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==5922==    by 0x61CC572: opal_os_dirpath_create (in /aia/opt/openmpi-1.8.7/lib64/libopen-pal.so.6.2.2)
<br>
==5922==    by 0x5F207E5: orte_session_dir (in /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
<br>
==5922==    by 0x5F34F04: orte_ess_base_app_setup (in /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
<br>
==5922==    by 0x7E96679: rte_init (in /aia/opt/openmpi-1.8.7/lib64/openmpi/mca_ess_env.so)
<br>
==5922==    by 0x5F12A77: orte_init (in /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
<br>
==5922==    by 0x509883C: ompi_mpi_init (in /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
<br>
==5922==    by 0x50B843A: PMPI_Init (in /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
<br>
==5922==    by 0xEBA79C: ZFS::run() (in /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
<br>
==5922==    by 0x4DC243: main (in /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
<br>
==5922==
<br>

<br>
What is weird is that it seems to depend on the pbs/torque session we&#226;&#128;&#153;re in: sometimes the error does not occur and all and all tests run fine (this is in fact the only Valgrind error we&#226;&#128;&#153;re having at the moment). Other times every single test we&#226;&#128;&#153;re running has this error.
<br>

<br>
Has anyone seen this or might be able to offer an explanation? If it is a false-positive, I&#226;&#128;&#153;d be happy to suppress it :)
<br>

<br>
Thanks a lot in advance
<br>

<br>
Michael
<br>

<br>
P.S.: This error is not covered/suppressed by the default ompi suppression file in $PREFIX/share/openmpi.
<br>

<br>

<br>
--
<br>
Michael Schlottke-Lakemper
<br>

<br>
SimLab Highly Scalable Fluids &amp; Solids Engineering
<br>
J&#195;&#188;lich Aachen Research Alliance (JARA-HPC)
<br>
RWTH Aachen University
<br>
W&#195;&#188;llnerstra&#195;&#159;e 5a
<br>
52062 Aachen
<br>
Germany
<br>

<br>
Phone: +49 (241) 80 95188
<br>
Fax: +49 (241) 80 92257
<br>
Mail: m.schlottke-lakemper_at_[hidden]&lt;mailto:m.schlottke-lakemper_at_[hidden]&gt;
<br>
Web: <a href="http://www.jara.org/jara-hpc">http://www.jara.org/jara-hpc</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27303/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27304.php">Schlottke-Lakemper, Michael: "[OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27302.php">David Shrader: "Re: [OMPI users] shared memory performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27328.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27328.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7"</a>
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
