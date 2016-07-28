<?
$subject_val = "[OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 14:56:14 2008" -->
<!-- isoreceived="20080124195614" -->
<!-- sent="Thu, 24 Jan 2008 11:55:59 -0800 (PST)" -->
<!-- isosent="20080124195559" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang" -->
<!-- id="Pine.GSO.4.64.0801241154070.5860_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang<br>
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 14:55:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4877.php">Tim Mattox: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4875.php">Wong, Wayne: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4891.php">Mostyn Lewis: "Re: [OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang"</a>
<li><strong>Reply:</strong> <a href="4891.php">Mostyn Lewis: "Re: [OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have a very simple MPI program hanging in MPI_Reduce using the openmpi-1.2.4-1
<br>
as supplied with OFED 1.2.5.4 (running this too).
<br>
<p>It works with same hardware using the supplied mvapich (mvapich-0.9.9).
<br>
<p>The hardware is a Mellanox Technologies MT25418 [ConnectX IB DDR] (rev a0) HCA
<br>
(SUN/voltaire) and the switch is a voltaire ISR9024D (running at DDR rate).
<br>
<p>------------------------------------------------------------------------------
<br>
Switch software/firmware is:
<br>
ISR9024D-2c0c&gt; version show
<br>
ISR 9024 version: 3.4.5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date:    Oct 09 2007 11:46:00 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;build Id:467
<br>
<p>ISR9024D-2c0c&gt; module-firmware show
<br>
Anafa self address: lid 1 firmware 1.0.0 gid 0xfe800000000000000008f10400412c0c
<br>
<p>------------------------------------------------------------------------------
<br>
HCA info:
<br>
/tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/bin$ ./ibv_devinfo
<br>
hca_id: mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         2.2.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0003:ba00:0100:5cf0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0003:ba00:0100:5cf3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x03ba
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 25418
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       SUN0060000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_DOWN (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p><p>./ibstatus
<br>
<p>Infiniband device 'mlx4_0' port 1 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0003:ba00:0100:5cf1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0xa
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           4: ACTIVE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      5: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            20 Gb/sec (4X DDR)
<br>
<p><p>The program is an old LAM test (cpi.c)
<br>
<p>------------------------------------------------------------------------------
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;sys/types.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;math.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>/* Constant for how many values we'll estimate */
<br>
#define NUM_ITERS 1000
<br>
<p>/* Prototype the function that we'll use below. */
<br>
static double f(double);
<br>
<p>int
<br>
main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int iter, rank, size, i;
<br>
&nbsp;&nbsp;&nbsp;double PI25DT = 3.141592653589793238462643;
<br>
&nbsp;&nbsp;&nbsp;double mypi, pi, h, sum, x;
<br>
&nbsp;&nbsp;&nbsp;double startwtime = 0.0, endwtime;
<br>
&nbsp;&nbsp;&nbsp;int namelen;
<br>
&nbsp;&nbsp;&nbsp;char processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(processor_name, &amp;namelen);
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Process %d of %d on %s\n&quot;, rank, size, processor_name);
<br>
<p>&nbsp;&nbsp;&nbsp;for (iter = 2; iter &lt; NUM_ITERS; ++iter) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h = 1.0 / (double) iter;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum = 0.0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = rank + 1; i &lt;= iter; i += size) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x = h * ((double) i - 0.5);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum += f(x);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mypi = h * sum;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>static double
<br>
f(double a)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;return (4.0 / (1.0 + a * a));
<br>
}
<br>
------------------------------------------------------------------------------
<br>
<p>The gcc openmpi hang from gdb looks like:
<br>
(gdb) where
<br>
#0  0x00002b60d54428e5 in pthread_spin_lock () from /lib64/libpthread.so.0
<br>
#1  0x00002b60d8705aec in mlx4_poll_cq (ibcq=0x5b0bf0, ne=1, wc=0x7fffd6051390) at src/cq.c:334
<br>
#2  0x00002b60d7c865bc in btl_openib_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at /tmp/OFED-1.2.5.4/OFED/tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/include/infiniband/verbs
<br>
.h:883
<br>
#3  0x00002b60d7b7925a in mca_bml_r2_progress () at bml_r2.c:106
<br>
#4  0x00002b60d4e6d11a in opal_progress () at runtime/opal_progress.c:288
<br>
#5  0x00002b60d7a6b8b8 in mca_pml_ob1_recv (addr=0x7fffd60517c8, count=1, datatype=0x501660, src=8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tag=-21, comm=&lt;value optimized out&gt;, status=0x0) at ../../../../opal/threads/condition.h:81
<br>
#6  0x00002b60d84e3cfa in ompi_coll_tuned_reduce_intra_basic_linear (sbuf=0x7fffd60517d0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rbuf=0x7fffd60517c8, count=1, dtype=0x501660, op=0x5012f0, root=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm=0x5014a0) at coll_tuned_reduce.c:385
<br>
#7  0x00002b60d4bcd32f in PMPI_Reduce (sendbuf=0x7fffd60517d0, recvbuf=0x7fffd60517c8, count=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;datatype=0x501660, op=0x5012f0, root=0, comm=0x5014a0) at preduce.c:96
<br>
#8  0x0000000000400cee in main ()
<br>
<p>A pgi compiled hang from gdb looks like:
<br>
<p>(gdb) where
<br>
#0  0x00002ac216e408e5 in pthread_spin_lock () from /lib64/libpthread.so.0
<br>
#1  0x00002ac2177ceaec in mlx4_poll_cq (ibcq=0x5b52c0, ne=1, wc=0x7fff97255600) at src/cq.c:334
<br>
#2  0x00002ac216bf51c2 in ibv_poll_cq ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_btl
<br>
_openib.so
<br>
#3  0x00002ac216bf8182 in btl_openib_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_btl
<br>
_openib.so
<br>
#4  0x00002ac216ae9b24 in mca_bml_r2_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_bml
<br>
_r2.so
<br>
#5  0x00002ac213d60be4 in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/libopen-pal.so.
<br>
0
<br>
#6  0x00002ac2169d4f45 in opal_condition_wait ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_pml
<br>
_ob1.so
<br>
#7  0x00002ac2169d5a83 in mca_pml_ob1_recv ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_pml
<br>
_ob1.so
<br>
#8  0x00002ac2175a1e67 in ompi_coll_tuned_reduce_intra_basic_linear ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_col
<br>
l_tuned.so
<br>
#9  0x00002ac217597ca5 in ompi_coll_tuned_reduce_intra_dec_fixed ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_col
<br>
l_tuned.so
<br>
#10 0x00002ac213a07e38 in PMPI_Reduce ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/libmpi.so.0
<br>
#11 0x0000000000402551 in main ()
<br>
<p>------------------------------------------------------------------------------
<br>
The openmpi_gcc script was:
<br>
#!/bin/ksh
<br>
set -x
<br>
<p>export PATH=/tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/gcc/openmpi-1.2.4-1/bin:$PATH
<br>
PREFIX=&quot;--prefix /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/gcc/openmpi-1.2.4-1&quot;
<br>
MCA=&quot;-mca btl openib,self -mca btl_tcp_if_exclude lo,eth1 -mca oob_tcp_if_exclude lo,eth1&quot;
<br>
mpicc cpi.c
<br>
mpirun $PREFIX $MCA -np 9 -machinefile ic48scali ./a.out
<br>
<p><p>Any ideas who may be the culprit in this hang?
<br>
<p>Regards,
<br>
Mostyn
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4877.php">Tim Mattox: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4875.php">Wong, Wayne: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4891.php">Mostyn Lewis: "Re: [OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang"</a>
<li><strong>Reply:</strong> <a href="4891.php">Mostyn Lewis: "Re: [OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang"</a>
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
