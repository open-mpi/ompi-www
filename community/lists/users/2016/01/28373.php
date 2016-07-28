<?
$subject_val = "[OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 00:36:04 2016" -->
<!-- isoreceived="20160126053604" -->
<!-- sent="Tue, 26 Jan 2016 13:35:24 +0800" -->
<!-- isosent="20160126053524" -->
<!-- name="Eva" -->
<!-- email="wuzhh01_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so" -->
<!-- id="CAHgSaRQ5zFySqUdfgHk6O1iOj8NzfurO8cj-EADpQvqrjoTsjQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so<br>
<strong>From:</strong> Eva (<em>wuzhh01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-26 00:35:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28374.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>Previous message:</strong> <a href="28372.php">Jed Brown: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28374.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>Reply:</strong> <a href="28374.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>Reply:</strong> <a href="28375.php">Eva: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;openmpi-1.10.2 cores at mca_coll_libnbc.so
<br>
<p>My program is transferred from 1.8.5 to 1.10.2. But when I run it, it cores
<br>
as below.
<br>
<p>Program terminated with signal 11, Segmentation fault.
<br>
#0  0x00007fa3550f51d2 in ompi_coll_libnbc_igather () from
<br>
/home/work/wuzhihua/install/openmpi-1.10.2rc3-gcc4.8/lib/openmpi/mca_coll_libnbc.so
<br>
Missing separate debuginfos, use: debuginfo-install
<br>
glibc-2.12-1.80.el6.x86_64 libgcc-4.4.6-4.el6.x86_64
<br>
libibumad-1.3.9.MLNX20140817.485ffa6-0.1.x86_64
<br>
libibverbs-1.1.7mlnx1-OFED.2.3.124.g4d8b179.x86_64 libnl-1.1-14.el6.x86_64
<br>
libstdc++-4.4.6-4.el6.x86_64
<br>
opensm-libs-4.2.5.MLNX20140828.7f05469-0.1.x86_64
<br>
openssl-1.0.0-20.el6_2.5.x86_64 tcp_wrappers-libs-7.6-57.el6.x86_64
<br>
zlib-1.2.3-27.el6.x86_64
<br>
(gdb) bt
<br>
#0  0x00007fa3550f51d2 in ompi_coll_libnbc_igather () from
<br>
/home/install/openmpi-1.10.2rc3-gcc4.8/lib/openmpi/mca_coll_libnbc.so
<br>
#1  0x0000000000010202 in ?? ()
<br>
#2  0x0000000000000033 in ?? () at
<br>
/home/openmpi-1.10.2rc3-gcc4.8/include/openmpi/ompi/mpi/cxx/win_inln.h:42
<br>
#3  0x00007fa359faf180 in ?? () from
<br>
/home/install/openmpi-1.10.2rc3-gcc4.8/lib/libopen-pal.so.13
<br>
#4  0x0000000000000000 in ?? ()
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28373/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28374.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>Previous message:</strong> <a href="28372.php">Jed Brown: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28374.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>Reply:</strong> <a href="28374.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>Reply:</strong> <a href="28375.php">Eva: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
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
