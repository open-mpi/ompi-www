<?
$subject_val = "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 01:45:18 2016" -->
<!-- isoreceived="20160126064518" -->
<!-- sent="Tue, 26 Jan 2016 14:44:38 +0800" -->
<!-- isosent="20160126064438" -->
<!-- name="Eva" -->
<!-- email="wuzhh01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so" -->
<!-- id="CAHgSaRTPsiVYU-XSwrV7EQAJ+PNHsk=D3Cqg9mYdujpzc7E7RA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHgSaRQ5zFySqUdfgHk6O1iOj8NzfurO8cj-EADpQvqrjoTsjQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so<br>
<strong>From:</strong> Eva (<em>wuzhh01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-26 01:44:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28376.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>Previous message:</strong> <a href="28374.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>In reply to:</strong> <a href="28373.php">Eva: "[OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28376.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>Reply:</strong> <a href="28376.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No. I didn't use MPI_Type_free
<br>
Is there any other reason?
<br>
<p>2016-01-26 13:35 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;  openmpi-1.10.2 cores at mca_coll_libnbc.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My program is transferred from 1.8.5 to 1.10.2. But when I run it, it
</span><br>
<span class="quotelev1">&gt; cores as below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; #0  0x00007fa3550f51d2 in ompi_coll_libnbc_igather () from
</span><br>
<span class="quotelev1">&gt; /home/work/wuzhihua/install/openmpi-1.10.2rc3-gcc4.8/lib/openmpi/mca_coll_libnbc.so
</span><br>
<span class="quotelev1">&gt; Missing separate debuginfos, use: debuginfo-install
</span><br>
<span class="quotelev1">&gt; glibc-2.12-1.80.el6.x86_64 libgcc-4.4.6-4.el6.x86_64
</span><br>
<span class="quotelev1">&gt; libibumad-1.3.9.MLNX20140817.485ffa6-0.1.x86_64
</span><br>
<span class="quotelev1">&gt; libibverbs-1.1.7mlnx1-OFED.2.3.124.g4d8b179.x86_64 libnl-1.1-14.el6.x86_64
</span><br>
<span class="quotelev1">&gt; libstdc++-4.4.6-4.el6.x86_64
</span><br>
<span class="quotelev1">&gt; opensm-libs-4.2.5.MLNX20140828.7f05469-0.1.x86_64
</span><br>
<span class="quotelev1">&gt; openssl-1.0.0-20.el6_2.5.x86_64 tcp_wrappers-libs-7.6-57.el6.x86_64
</span><br>
<span class="quotelev1">&gt; zlib-1.2.3-27.el6.x86_64
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007fa3550f51d2 in ompi_coll_libnbc_igather () from
</span><br>
<span class="quotelev1">&gt; /home/install/openmpi-1.10.2rc3-gcc4.8/lib/openmpi/mca_coll_libnbc.so
</span><br>
<span class="quotelev1">&gt; #1  0x0000000000010202 in ?? ()
</span><br>
<span class="quotelev1">&gt; #2  0x0000000000000033 in ?? () at
</span><br>
<span class="quotelev1">&gt; /home/openmpi-1.10.2rc3-gcc4.8/include/openmpi/ompi/mpi/cxx/win_inln.h:42
</span><br>
<span class="quotelev1">&gt; #3  0x00007fa359faf180 in ?? () from
</span><br>
<span class="quotelev1">&gt; /home/install/openmpi-1.10.2rc3-gcc4.8/lib/libopen-pal.so.13
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28375/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28376.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>Previous message:</strong> <a href="28374.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>In reply to:</strong> <a href="28373.php">Eva: "[OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28376.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>Reply:</strong> <a href="28376.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
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
