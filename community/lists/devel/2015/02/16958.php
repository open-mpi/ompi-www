<?
$subject_val = "[OMPI devel] Shutdown-time crash via oob:ud";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 20:49:42 2015" -->
<!-- isoreceived="20150207014942" -->
<!-- sent="Fri, 6 Feb 2015 17:49:39 -0800" -->
<!-- isosent="20150207014939" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Shutdown-time crash via oob:ud" -->
<!-- id="CAAvDA16k91+NUxkZ0ytk286B2j=Fk246U=0tus9P0q0e++HMPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Shutdown-time crash via oob:ud<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-06 20:49:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16959.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16957.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With last night's master tarball (openmpi-dev-845-ga3275aa) on a
<br>
Linux/x86-64 system, I am seeing a crash (below) from ring_c run on a login
<br>
node.  Other than CC/CXX/FC settings I've configured with only --prefix=...
<br>
--enable-debug --with-tm=...
<br>
<p>This is occurring with at least the Gnu, Intel, PathScale and Open64
<br>
compilers (PGI has other issues).
<br>
Only the Intel build gave me a usable backtrace, which is given below along
<br>
with the command line and output.
<br>
<p>A fresh build of 1.8.4 on the same system with the same configure args does
<br>
NOT have this problem.
<br>
<p>-Paul
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs2
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs1
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs2
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs1
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs2
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs1
<br>
Process 1 exiting
<br>
Process 0 sending 10 to 1, tag 201 (2 processes in ring)
<br>
Process 0 sent to 1
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>
[cvrsvc04:26446] *** Process received signal ***
<br>
[cvrsvc04:26446] Signal: Segmentation fault (11)
<br>
[cvrsvc04:26446] Signal code: Address not mapped (1)
<br>
[cvrsvc04:26446] Failing at address: 0x7fc828289aaf
<br>
[cvrsvc04:26446] [ 0] /lib64/libpthread.so.0[0x7fc8f943db10]
<br>
[cvrsvc04:26446] [ 1] /usr/lib64/libmlx4-m-rdmav2.so[0x7fc8f6491091]
<br>
[cvrsvc04:26446] [ 2]
<br>
/usr/lib64/libmlx4-m-rdmav2.so(__mlx4_cq_clean+0x69)[0x7fc8f64912b9]
<br>
[cvrsvc04:26446] [ 3]
<br>
/usr/lib64/libmlx4-m-rdmav2.so(mlx4_cq_clean+0x3e)[0x7fc8f649146e]
<br>
[cvrsvc04:26446] [ 4]
<br>
/usr/lib64/libmlx4-m-rdmav2.so(mlx4_modify_qp+0xb7)[0x7fc8f6494a87]
<br>
[cvrsvc04:26446] [ 5]
<br>
/usr/lib64/libibverbs.so.1(ibv_modify_qp+0x24)[0x7fc8f6abbae4]
<br>
[cvrsvc04:26446] [ 6]
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_oob_ud.so(mca_oob_ud_qp_to_reset+0xc8)[0x7fc8f6cca228]
<br>
[cvrsvc04:26446] [ 7]
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_oob_ud.so(mca_oob_ud_event_stop_monitor+0x92)[0x7fc8f6cc8d32]
<br>
[cvrsvc04:26446] [ 8]
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_oob_ud.so[0x7fc8f6cc5baf]
<br>
[cvrsvc04:26446] [ 9]
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-icc-11.1/INST/lib/libopen-rte.so.0[0x7fc8fa4c3db0]
<br>
[cvrsvc04:26446] [10]
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-icc-11.1/INST/lib/libopen-pal.so.0(mca_base_framework_close+0x6e)[0x7fc8fa15ed6e]
<br>
[cvrsvc04:26446] [11]
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ess_hnp.so[0x7fc8f7f1987a]
<br>
[cvrsvc04:26446] [12]
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-icc-11.1/INST/lib/libopen-rte.so.0(orte_finalize+0x5d)[0x7fc8fa46812d]
<br>
[cvrsvc04:26446] [13]
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-icc-11.1/INST/bin/mpirun(orterun+0x1c5f)[0x4071ed]
<br>
[cvrsvc04:26446] [14]
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-icc-11.1/INST/bin/mpirun(main+0x20)[0x404d68]
<br>
[cvrsvc04:26446] [15]
<br>
/lib64/libc.so.6(__libc_start_main+0xf4)[0x7fc8f90f5994]
<br>
[cvrsvc04:26446] [16]
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-icc-11.1/INST/bin/mpirun(orte_daemon_recv+0x2f9)[0x404c99]
<br>
[cvrsvc04:26446] *** End of error message ***
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16958/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16959.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16957.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
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
