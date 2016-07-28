<?
$subject_val = "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 08:15:34 2015" -->
<!-- isoreceived="20150729121534" -->
<!-- sent="Wed, 29 Jul 2015 21:15:33 +0900" -->
<!-- isosent="20150729121533" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7" -->
<!-- id="CAAkFZ5uLRq-jXd+tRE4ds3hEaEDa+88S6Afg_UiQ+b7bDBv1Fw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55B8B608.8080202_at_dkrz.de" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-29 08:15:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27358.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27356.php">Thomas Jahns: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27356.php">Thomas Jahns: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27359.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27359.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas,
<br>
<p>can you please elaborate ?
<br>
I checked the code of opal_os_dirpath_create and could not find where such
<br>
a thing can happen
<br>
<p>Thanks,
<br>
<p>Gilles
<br>
<p>On Wednesday, July 29, 2015, Thomas Jahns &lt;jahns_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/28/15 17:34, Schlottke-Lakemper, Michael wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That&#226;&#128;&#153;s what I suspected. Thank you for your confirmation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you are mistaken, the allocation is 51 bytes long, i.e. valid bytes are at
</span><br>
<span class="quotelev1">&gt; offsets 0 to 50. But since the read of 4 bytes starts at offset 48, the
</span><br>
<span class="quotelev1">&gt; bytes at offsets 48, 49, 50 and 51 get read, the last of which is illegal.
</span><br>
<span class="quotelev1">&gt; It probably does no harm at the moment in practice, because virtually all
</span><br>
<span class="quotelev1">&gt; allocators always add some padding to the next multiple of some power of 2.
</span><br>
<span class="quotelev1">&gt; But still this means the program is incorrect in terms of any programming
</span><br>
<span class="quotelev1">&gt; language definition involved (might be C, C++ or Fortran).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards, Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On 25 Jul 2015, at 16:10 , Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks to me like a false positive - we do malloc some space, and do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; access
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different parts of it. However, it looks like we are inside the space at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; times.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#226;&#128;&#153;d suppress it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On Jul 23, 2015, at 12:47 AM, Schlottke-Lakemper, Michael
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;m.schlottke-lakemper_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:m.schlottke-lakemper_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi folks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recently we&#226;&#128;&#153;ve been getting a Valgrind error in PMPI_Init for our suite
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regression tests:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922== Invalid read of size 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    at 0x61CC5C0: opal_os_dirpath_create (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/libopen-pal.so.6.2.2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x5F207E5: orte_session_dir (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x5F34F04: orte_ess_base_app_setup (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x7E96679: rte_init (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/openmpi/mca_ess_env.so)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x5F12A77: orte_init (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x509883C: ompi_mpi_init (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x50B843A: PMPI_Init (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0xEBA79C: ZFS::run() (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x4DC243: main (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==  Address 0x710f670 is 48 bytes inside a block of size 51
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; alloc'd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    at 0x4C29110: malloc (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x61CC572: opal_os_dirpath_create (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/libopen-pal.so.6.2.2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x5F207E5: orte_session_dir (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x5F34F04: orte_ess_base_app_setup (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x7E96679: rte_init (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/openmpi/mca_ess_env.so)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x5F12A77: orte_init (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x509883C: ompi_mpi_init (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x50B843A: PMPI_Init (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0xEBA79C: ZFS::run() (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==    by 0x4DC243: main (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==5922==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is weird is that it seems to depend on the pbs/torque session
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we&#226;&#128;&#153;re in:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sometimes the error does not occur and all and all tests run fine (this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fact the only Valgrind error we&#226;&#128;&#153;re having at the moment). Other times
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; every
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; single test we&#226;&#128;&#153;re running has this error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Has anyone seen this or might be able to offer an explanation? If it is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; false-positive, I&#226;&#128;&#153;d be happy to suppress it :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks a lot in advance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Michael
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.S.: This error is not covered/suppressed by the default ompi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suppression
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file in $PREFIX/share/openmpi.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Michael Schlottke-Lakemper
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SimLab Highly Scalable Fluids &amp; Solids Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; J&#195;&#188;lich Aachen Research Alliance (JARA-HPC)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RWTH Aachen University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; W&#195;&#188;llnerstra&#195;&#159;e 5a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 52062 Aachen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Germany
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phone: +49 (241) 80 95188
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fax: +49 (241) 80 92257
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mail: m.schlottke-lakemper_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:m.schlottke-lakemper_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Web: <a href="http://www.jara.org/jara-hpc">http://www.jara.org/jara-hpc</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27303.php">http://www.open-mpi.org/community/lists/users/2015/07/27303.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27328.php">http://www.open-mpi.org/community/lists/users/2015/07/27328.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27348.php">http://www.open-mpi.org/community/lists/users/2015/07/27348.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Thomas Jahns
</span><br>
<span class="quotelev1">&gt; HD(CP)^2
</span><br>
<span class="quotelev1">&gt; Abteilung Anwendungssoftware
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Deutsches Klimarechenzentrum GmbH
</span><br>
<span class="quotelev1">&gt; Bundesstra&#195;&#159;e 45a &#226;&#128;&#162; D-20146 Hamburg &#226;&#128;&#162; Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone:  +49 40 460094-151
</span><br>
<span class="quotelev1">&gt; Fax:    +49 40 460094-270
</span><br>
<span class="quotelev1">&gt; Email:  Thomas Jahns &lt;jahns_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; URL:    www.dkrz.de
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gesch&#195;&#164;ftsf&#195;&#188;hrer: Prof. Dr. Thomas Ludwig
</span><br>
<span class="quotelev1">&gt; Sitz der Gesellschaft: Hamburg
</span><br>
<span class="quotelev1">&gt; Amtsgericht Hamburg HRB 39784
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27357/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27358.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27356.php">Thomas Jahns: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27356.php">Thomas Jahns: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27359.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27359.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
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
