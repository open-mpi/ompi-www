<?
$subject_val = "Re: [OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 17:41:36 2008" -->
<!-- isoreceived="20080125224136" -->
<!-- sent="Fri, 25 Jan 2008 14:41:29 -0800 (PST)" -->
<!-- isosent="20080125224129" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang" -->
<!-- id="Pine.GSO.4.64.0801251439560.18065_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0801241154070.5860_at_aragorn.brc.West.Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang<br>
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-25 17:41:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4892.php">Tim Mattox: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Previous message:</strong> <a href="4890.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4876.php">Mostyn Lewis: "[OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using todays SVN (1.3a1r17234) and building in the context of OFED 1.2.5.4
<br>
installed and it works!
<br>
<p>Regards,
<br>
Mostyn
<br>
<p>On Thu, 24 Jan 2008, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a very simple MPI program hanging in MPI_Reduce using the openmpi-1.2.4-1
</span><br>
<span class="quotelev1">&gt; as supplied with OFED 1.2.5.4 (running this too).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works with same hardware using the supplied mvapich (mvapich-0.9.9).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The hardware is a Mellanox Technologies MT25418 [ConnectX IB DDR] (rev a0) HCA
</span><br>
<span class="quotelev1">&gt; (SUN/voltaire) and the switch is a voltaire ISR9024D (running at DDR rate).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Switch software/firmware is:
</span><br>
<span class="quotelev1">&gt; ISR9024D-2c0c&gt; version show
</span><br>
<span class="quotelev1">&gt; ISR 9024 version: 3.4.5
</span><br>
<span class="quotelev1">&gt;         date:    Oct 09 2007 11:46:00 AM
</span><br>
<span class="quotelev1">&gt;         build Id:467
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ISR9024D-2c0c&gt; module-firmware show
</span><br>
<span class="quotelev1">&gt; Anafa self address: lid 1 firmware 1.0.0 gid 0xfe800000000000000008f10400412c0c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; HCA info:
</span><br>
<span class="quotelev1">&gt; /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/bin$ ./ibv_devinfo
</span><br>
<span class="quotelev1">&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         2.2.000
</span><br>
<span class="quotelev1">&gt;         node_guid:                      0003:ba00:0100:5cf0
</span><br>
<span class="quotelev1">&gt;         sys_image_guid:                 0003:ba00:0100:5cf3
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x03ba
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 25418
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0xA0
</span><br>
<span class="quotelev1">&gt;         board_id:                       SUN0060000001
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  2
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 1
</span><br>
<span class="quotelev1">&gt;                         port_lid:               10
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 port:   2
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_DOWN (1)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 0
</span><br>
<span class="quotelev1">&gt;                         port_lid:               0
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./ibstatus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Infiniband device 'mlx4_0' port 1 status:
</span><br>
<span class="quotelev1">&gt;         default gid:     fe80:0000:0000:0000:0003:ba00:0100:5cf1
</span><br>
<span class="quotelev1">&gt;         base lid:        0xa
</span><br>
<span class="quotelev1">&gt;         sm lid:          0x1
</span><br>
<span class="quotelev1">&gt;         state:           4: ACTIVE
</span><br>
<span class="quotelev1">&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev1">&gt;         rate:            20 Gb/sec (4X DDR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program is an old LAM test (cpi.c)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Constant for how many values we'll estimate */
</span><br>
<span class="quotelev1">&gt; #define NUM_ITERS 1000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Prototype the function that we'll use below. */
</span><br>
<span class="quotelev1">&gt; static double f(double);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int iter, rank, size, i;
</span><br>
<span class="quotelev1">&gt;   double PI25DT = 3.141592653589793238462643;
</span><br>
<span class="quotelev1">&gt;   double mypi, pi, h, sum, x;
</span><br>
<span class="quotelev1">&gt;   double startwtime = 0.0, endwtime;
</span><br>
<span class="quotelev1">&gt;   int namelen;
</span><br>
<span class="quotelev1">&gt;   char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Process %d of %d on %s\n&quot;, rank, size, processor_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   for (iter = 2; iter &lt; NUM_ITERS; ++iter) {
</span><br>
<span class="quotelev1">&gt;     h = 1.0 / (double) iter;
</span><br>
<span class="quotelev1">&gt;     sum = 0.0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for (i = rank + 1; i &lt;= iter; i += size) {
</span><br>
<span class="quotelev1">&gt;       x = h * ((double) i - 0.5);
</span><br>
<span class="quotelev1">&gt;       sum += f(x);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     mypi = h * sum;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static double
</span><br>
<span class="quotelev1">&gt; f(double a)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   return (4.0 / (1.0 + a * a));
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The gcc openmpi hang from gdb looks like:
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x00002b60d54428e5 in pthread_spin_lock () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00002b60d8705aec in mlx4_poll_cq (ibcq=0x5b0bf0, ne=1, wc=0x7fffd6051390) at src/cq.c:334
</span><br>
<span class="quotelev1">&gt; #2  0x00002b60d7c865bc in btl_openib_component_progress ()
</span><br>
<span class="quotelev1">&gt;     at /tmp/OFED-1.2.5.4/OFED/tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/include/infiniband/verbs
</span><br>
<span class="quotelev1">&gt; .h:883
</span><br>
<span class="quotelev1">&gt; #3  0x00002b60d7b7925a in mca_bml_r2_progress () at bml_r2.c:106
</span><br>
<span class="quotelev1">&gt; #4  0x00002b60d4e6d11a in opal_progress () at runtime/opal_progress.c:288
</span><br>
<span class="quotelev1">&gt; #5  0x00002b60d7a6b8b8 in mca_pml_ob1_recv (addr=0x7fffd60517c8, count=1, datatype=0x501660, src=8,
</span><br>
<span class="quotelev1">&gt;     tag=-21, comm=&lt;value optimized out&gt;, status=0x0) at ../../../../opal/threads/condition.h:81
</span><br>
<span class="quotelev1">&gt; #6  0x00002b60d84e3cfa in ompi_coll_tuned_reduce_intra_basic_linear (sbuf=0x7fffd60517d0,
</span><br>
<span class="quotelev1">&gt;     rbuf=0x7fffd60517c8, count=1, dtype=0x501660, op=0x5012f0, root=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;     comm=0x5014a0) at coll_tuned_reduce.c:385
</span><br>
<span class="quotelev1">&gt; #7  0x00002b60d4bcd32f in PMPI_Reduce (sendbuf=0x7fffd60517d0, recvbuf=0x7fffd60517c8, count=1,
</span><br>
<span class="quotelev1">&gt;     datatype=0x501660, op=0x5012f0, root=0, comm=0x5014a0) at preduce.c:96
</span><br>
<span class="quotelev1">&gt; #8  0x0000000000400cee in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A pgi compiled hang from gdb looks like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x00002ac216e408e5 in pthread_spin_lock () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00002ac2177ceaec in mlx4_poll_cq (ibcq=0x5b52c0, ne=1, wc=0x7fff97255600) at src/cq.c:334
</span><br>
<span class="quotelev1">&gt; #2  0x00002ac216bf51c2 in ibv_poll_cq ()
</span><br>
<span class="quotelev1">&gt;    from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_btl
</span><br>
<span class="quotelev1">&gt; _openib.so
</span><br>
<span class="quotelev1">&gt; #3  0x00002ac216bf8182 in btl_openib_component_progress ()
</span><br>
<span class="quotelev1">&gt;    from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_btl
</span><br>
<span class="quotelev1">&gt; _openib.so
</span><br>
<span class="quotelev1">&gt; #4  0x00002ac216ae9b24 in mca_bml_r2_progress ()
</span><br>
<span class="quotelev1">&gt;    from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_bml
</span><br>
<span class="quotelev1">&gt; _r2.so
</span><br>
<span class="quotelev1">&gt; #5  0x00002ac213d60be4 in opal_progress ()
</span><br>
<span class="quotelev1">&gt;    from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/libopen-pal.so.
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; #6  0x00002ac2169d4f45 in opal_condition_wait ()
</span><br>
<span class="quotelev1">&gt;    from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_pml
</span><br>
<span class="quotelev1">&gt; _ob1.so
</span><br>
<span class="quotelev1">&gt; #7  0x00002ac2169d5a83 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev1">&gt;    from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_pml
</span><br>
<span class="quotelev1">&gt; _ob1.so
</span><br>
<span class="quotelev1">&gt; #8  0x00002ac2175a1e67 in ompi_coll_tuned_reduce_intra_basic_linear ()
</span><br>
<span class="quotelev1">&gt;    from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_col
</span><br>
<span class="quotelev1">&gt; l_tuned.so
</span><br>
<span class="quotelev1">&gt; #9  0x00002ac217597ca5 in ompi_coll_tuned_reduce_intra_dec_fixed ()
</span><br>
<span class="quotelev1">&gt;    from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/openmpi/mca_col
</span><br>
<span class="quotelev1">&gt; l_tuned.so
</span><br>
<span class="quotelev1">&gt; #10 0x00002ac213a07e38 in PMPI_Reduce ()
</span><br>
<span class="quotelev1">&gt;    from /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/pgi/openmpi-1.2.4-1/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000402551 in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The openmpi_gcc script was:
</span><br>
<span class="quotelev1">&gt; #!/bin/ksh
</span><br>
<span class="quotelev1">&gt; set -x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=/tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/gcc/openmpi-1.2.4-1/bin:$PATH
</span><br>
<span class="quotelev1">&gt; PREFIX=&quot;--prefix /tools/ofed/1.2.5.4/suse_sles_10_1/x86_64/xeon/mpi/gcc/openmpi-1.2.4-1&quot;
</span><br>
<span class="quotelev1">&gt; MCA=&quot;-mca btl openib,self -mca btl_tcp_if_exclude lo,eth1 -mca oob_tcp_if_exclude lo,eth1&quot;
</span><br>
<span class="quotelev1">&gt; mpicc cpi.c
</span><br>
<span class="quotelev1">&gt; mpirun $PREFIX $MCA -np 9 -machinefile ic48scali ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas who may be the culprit in this hang?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mostyn
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4892.php">Tim Mattox: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Previous message:</strong> <a href="4890.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4876.php">Mostyn Lewis: "[OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang"</a>
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
