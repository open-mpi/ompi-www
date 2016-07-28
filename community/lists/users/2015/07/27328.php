<?
$subject_val = "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 25 10:11:00 2015" -->
<!-- isoreceived="20150725141100" -->
<!-- sent="Sat, 25 Jul 2015 07:10:55 -0700" -->
<!-- isosent="20150725141055" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7" -->
<!-- id="2D15103F-A738-42C0-A8C4-590089DF6271_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0F7D8A6B-42C7-4959-8B90-DD1786F14586_at_aia.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-25 10:10:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27329.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27327.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>In reply to:</strong> <a href="27303.php">Schlottke-Lakemper, Michael: "[OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27348.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27348.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks to me like a false positive - we do malloc some space, and do access different parts of it. However, it looks like we are inside the space at all times.
<br>
<p>I&#226;&#128;&#153;d suppress it
<br>
<p><p><span class="quotelev1">&gt; On Jul 23, 2015, at 12:47 AM, Schlottke-Lakemper, Michael &lt;m.schlottke-lakemper_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; recently we&#226;&#128;&#153;ve been getting a Valgrind error in PMPI_Init for our suite of regression tests:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==5922== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==5922==    at 0x61CC5C0: opal_os_dirpath_create (in /aia/opt/openmpi-1.8.7/lib64/libopen-pal.so.6.2.2)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x5F207E5: orte_session_dir (in /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x5F34F04: orte_ess_base_app_setup (in /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x7E96679: rte_init (in /aia/opt/openmpi-1.8.7/lib64/openmpi/mca_ess_env.so)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x5F12A77: orte_init (in /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x509883C: ompi_mpi_init (in /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x50B843A: PMPI_Init (in /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0xEBA79C: ZFS::run() (in /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x4DC243: main (in /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev1">&gt; ==5922==  Address 0x710f670 is 48 bytes inside a block of size 51 alloc'd
</span><br>
<span class="quotelev1">&gt; ==5922==    at 0x4C29110: malloc (in /usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x61CC572: opal_os_dirpath_create (in /aia/opt/openmpi-1.8.7/lib64/libopen-pal.so.6.2.2)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x5F207E5: orte_session_dir (in /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x5F34F04: orte_ess_base_app_setup (in /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x7E96679: rte_init (in /aia/opt/openmpi-1.8.7/lib64/openmpi/mca_ess_env.so)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x5F12A77: orte_init (in /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x509883C: ompi_mpi_init (in /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x50B843A: PMPI_Init (in /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0xEBA79C: ZFS::run() (in /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev1">&gt; ==5922==    by 0x4DC243: main (in /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev1">&gt; ==5922==
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is weird is that it seems to depend on the pbs/torque session we&#226;&#128;&#153;re in: sometimes the error does not occur and all and all tests run fine (this is in fact the only Valgrind error we&#226;&#128;&#153;re having at the moment). Other times every single test we&#226;&#128;&#153;re running has this error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone seen this or might be able to offer an explanation? If it is a false-positive, I&#226;&#128;&#153;d be happy to suppress it :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S.: This error is not covered/suppressed by the default ompi suppression file in $PREFIX/share/openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Michael Schlottke-Lakemper
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SimLab Highly Scalable Fluids &amp; Solids Engineering
</span><br>
<span class="quotelev1">&gt; J&#195;&#188;lich Aachen Research Alliance (JARA-HPC)
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University
</span><br>
<span class="quotelev1">&gt; W&#195;&#188;llnerstra&#195;&#159;e 5a
</span><br>
<span class="quotelev1">&gt; 52062 Aachen
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Phone: +49 (241) 80 95188
</span><br>
<span class="quotelev1">&gt; Fax: +49 (241) 80 92257
</span><br>
<span class="quotelev1">&gt; Mail: m.schlottke-lakemper_at_[hidden] &lt;mailto:m.schlottke-lakemper_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://www.jara.org/jara-hpc">http://www.jara.org/jara-hpc</a> &lt;<a href="http://www.jara.org/jara-hpc">http://www.jara.org/jara-hpc</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27303.php">http://www.open-mpi.org/community/lists/users/2015/07/27303.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27328/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27329.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27327.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>In reply to:</strong> <a href="27303.php">Schlottke-Lakemper, Michael: "[OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27348.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27348.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
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
