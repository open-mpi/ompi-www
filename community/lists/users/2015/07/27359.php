<?
$subject_val = "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 09:29:42 2015" -->
<!-- isoreceived="20150729132942" -->
<!-- sent="Wed, 29 Jul 2015 13:29:27 +0000" -->
<!-- isosent="20150729132927" -->
<!-- name="Schlottke-Lakemper, Michael" -->
<!-- email="m.schlottke-lakemper_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7" -->
<!-- id="pon5qylnd1p40hsyaaok6wg2.1438176499299_at_email.android.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAAkFZ5uLRq-jXd+tRE4ds3hEaEDa+88S6Afg_UiQ+b7bDBv1Fw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7<br>
<strong>From:</strong> Schlottke-Lakemper, Michael (<em>m.schlottke-lakemper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-29 09:29:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27360.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27358.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>In reply to:</strong> <a href="27357.php">Gilles Gouaillardet: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27360.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27360.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If it is helpful, I can try to compile OpenMPI with debug information and get more details on the reported error. However, it would be good if someone could tell me the necessary compile flags (on top of -O0 -g) and it would take me probably 1-2 weeks to do it.
<br>
<p>Michael
<br>
<p><p>-------- Original message --------
<br>
From: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
<br>
Date: 29/07/2015 14:17 (GMT+01:00)
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7
<br>
<p>Thomas,
<br>
<p>can you please elaborate ?
<br>
I checked the code of opal_os_dirpath_create and could not find where such a thing can happen
<br>
<p>Thanks,
<br>
<p>Gilles
<br>
<p>On Wednesday, July 29, 2015, Thomas Jahns &lt;jahns_at_[hidden]&lt;mailto:jahns_at_[hidden]&gt;&gt; wrote:
<br>
Hello,
<br>
<p>On 07/28/15 17:34, Schlottke-Lakemper, Michael wrote:
<br>
That&#146;s what I suspected. Thank you for your confirmation.
<br>
<p>you are mistaken, the allocation is 51 bytes long, i.e. valid bytes are at offsets 0 to 50. But since the read of 4 bytes starts at offset 48, the bytes at offsets 48, 49, 50 and 51 get read, the last of which is illegal. It probably does no harm at the moment in practice, because virtually all allocators always add some padding to the next multiple of some power of 2. But still this means the program is incorrect in terms of any programming language definition involved (might be C, C++ or Fortran).
<br>
<p>Regards, Thomas
<br>
<p>On 25 Jul 2015, at 16:10 , Ralph Castain &lt;rhc_at_[hidden]
<br>
&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p>Looks to me like a false positive - we do malloc some space, and do access
<br>
different parts of it. However, it looks like we are inside the space at all
<br>
times.
<br>
<p>I&#146;d suppress it
<br>
<p><p>On Jul 23, 2015, at 12:47 AM, Schlottke-Lakemper, Michael
<br>
&lt;m.schlottke-lakemper_at_[hidden]
<br>
&lt;mailto:m.schlottke-lakemper_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi folks,
<br>
<p>recently we&#146;ve been getting a Valgrind error in PMPI_Init for our suite of
<br>
regression tests:
<br>
<p>==5922== Invalid read of size 4
<br>
==5922==    at 0x61CC5C0: opal_os_dirpath_create (in
<br>
/aia/opt/openmpi-1.8.7/lib64/libopen-pal.so.6.2.2)
<br>
==5922==    by 0x5F207E5: orte_session_dir (in
<br>
/aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
<br>
==5922==    by 0x5F34F04: orte_ess_base_app_setup (in
<br>
/aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
<br>
==5922==    by 0x7E96679: rte_init (in
<br>
/aia/opt/openmpi-1.8.7/lib64/openmpi/mca_ess_env.so)
<br>
==5922==    by 0x5F12A77: orte_init (in
<br>
/aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
<br>
==5922==    by 0x509883C: ompi_mpi_init (in
<br>
/aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
<br>
==5922==    by 0x50B843A: PMPI_Init (in
<br>
/aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
<br>
==5922==    by 0xEBA79C: ZFS::run() (in
<br>
/aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
<br>
==5922==    by 0x4DC243: main (in
<br>
/aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
<br>
==5922==  Address 0x710f670 is 48 bytes inside a block of size 51 alloc'd
<br>
==5922==    at 0x4C29110: malloc (in
<br>
/usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==5922==    by 0x61CC572: opal_os_dirpath_create (in
<br>
/aia/opt/openmpi-1.8.7/lib64/libopen-pal.so.6.2.2)
<br>
==5922==    by 0x5F207E5: orte_session_dir (in
<br>
/aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
<br>
==5922==    by 0x5F34F04: orte_ess_base_app_setup (in
<br>
/aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
<br>
==5922==    by 0x7E96679: rte_init (in
<br>
/aia/opt/openmpi-1.8.7/lib64/openmpi/mca_ess_env.so)
<br>
==5922==    by 0x5F12A77: orte_init (in
<br>
/aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
<br>
==5922==    by 0x509883C: ompi_mpi_init (in
<br>
/aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
<br>
==5922==    by 0x50B843A: PMPI_Init (in
<br>
/aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
<br>
==5922==    by 0xEBA79C: ZFS::run() (in
<br>
/aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
<br>
==5922==    by 0x4DC243: main (in
<br>
/aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
<br>
==5922==
<br>
<p>What is weird is that it seems to depend on the pbs/torque session we&#146;re in:
<br>
sometimes the error does not occur and all and all tests run fine (this is in
<br>
fact the only Valgrind error we&#146;re having at the moment). Other times every
<br>
single test we&#146;re running has this error.
<br>
<p>Has anyone seen this or might be able to offer an explanation? If it is a
<br>
false-positive, I&#146;d be happy to suppress it :)
<br>
<p>Thanks a lot in advance
<br>
<p>Michael
<br>
<p>P.S.: This error is not covered/suppressed by the default ompi suppression
<br>
file in $PREFIX/share/openmpi.
<br>
<p><p><pre>
--
Michael Schlottke-Lakemper
SimLab Highly Scalable Fluids &amp; Solids Engineering
J&#252;lich Aachen Research Alliance (JARA-HPC)
RWTH Aachen University
W&#252;llnerstra&#223;e 5a
52062 Aachen
Germany
Phone: +49 (241) 80 95188
Fax: +49 (241) 80 92257
Mail: m.schlottke-lakemper_at_[hidden]
&lt;mailto:m.schlottke-lakemper_at_[hidden]&gt;
Web: <a href="http://www.jara.org/jara-hpc">http://www.jara.org/jara-hpc</a>
_______________________________________________
users mailing list
users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post:
<a href="http://www.open-mpi.org/community/lists/users/2015/07/27303.php">http://www.open-mpi.org/community/lists/users/2015/07/27303.php</a>
_______________________________________________
users mailing list
users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27328.php">http://www.open-mpi.org/community/lists/users/2015/07/27328.php</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27348.php">http://www.open-mpi.org/community/lists/users/2015/07/27348.php</a>
--
Thomas Jahns
HD(CP)^2
Abteilung Anwendungssoftware
Deutsches Klimarechenzentrum GmbH
Bundesstra&#223;e 45a &#149; D-20146 Hamburg &#149; Germany
Phone:  +49 40 460094-151
Fax:    +49 40 460094-270
Email:  Thomas Jahns &lt;jahns_at_[hidden]&gt;
URL:    www.dkrz.de&lt;<a href="http://www.dkrz.de">http://www.dkrz.de</a>&gt;
Gesch&#228;ftsf&#252;hrer: Prof. Dr. Thomas Ludwig
Sitz der Gesellschaft: Hamburg
Amtsgericht Hamburg HRB 39784
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27359/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27360.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27358.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>In reply to:</strong> <a href="27357.php">Gilles Gouaillardet: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27360.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27360.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
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
