<?
$subject_val = "[OMPI users] unknown BTL transport in openmpi 1.5.4 and 1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 09:31:40 2013" -->
<!-- isoreceived="20130131143140" -->
<!-- sent="Thu, 31 Jan 2013 09:31:30 -0500" -->
<!-- isosent="20130131143130" -->
<!-- name="Wesley Emeneker" -->
<!-- email="Wesley.Emeneker_at_[hidden]" -->
<!-- subject="[OMPI users] unknown BTL transport in openmpi 1.5.4 and 1.6.2" -->
<!-- id="CA+5qOHK9fWXup6M2sjCT_BYrLwMsJPRvBCA_tSYxuAwOT-8j+A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] unknown BTL transport in openmpi 1.5.4 and 1.6.2<br>
<strong>From:</strong> Wesley Emeneker (<em>Wesley.Emeneker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-31 09:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21275.php">Siegmar Gross: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bitopenmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Previous message:</strong> <a href="21273.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have recently encountered a problem with using openmpi 1.5.3, 1.5.4, and
<br>
1.6.2 over compute nodes with two different generations of Infiniband (DDR
<br>
and QDR).
<br>
This error is very similar to one posted to the list in 2011:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2011/06/16773.php">http://www.open-mpi.org/community/lists/users/2011/06/16773.php</a>
<br>
This issue was never resolved on the mailing list.
<br>
<p>Here is the error:
<br>
#################################################################
<br>
iwtf-k43-28$ which mpirun
<br>
/usr/local/packages/openmpi/1.5.4/gcc-4.4.5/bin/mpirun
<br>
<p>iwtf-k43-28$cat machinefile
<br>
iwtf-k43-28
<br>
iwm-k43-30
<br>
<p>iwtf-k43-28$ mpirun -np 2 -hostfile machinefile ./a.out 0
<br>
--------------------------------------------------------------------------
<br>
Open MPI detected two different OpenFabrics transport types in the same
<br>
Infiniband network.
<br>
Such mixed network trasport configuration is not supported by Open MPI.
<br>
<p>&nbsp;&nbsp;Local host:            iwm-k43-30.pace.gatech.edu
<br>
&nbsp;&nbsp;Local adapter:         mthca0 (vendor 0x2c9, part ID 25204)
<br>
&nbsp;&nbsp;Local transport type:  MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
<br>
<p>&nbsp;&nbsp;Remote host:           iwtf-k43-28
<br>
&nbsp;&nbsp;Remote Adapter:        (vendor 0x2c9, part ID 26428)
<br>
&nbsp;&nbsp;Remote transport type: MCA_BTL_OPENIB_TRANSPORT_IB
<br>
------------------------------------------------------------------------------------------
<br>
Hello from iwtf-k43-28.pace.gatech.edu: 0 of 2
<br>
Hello from iwm-k43-30.pace.gatech.edu: 1 of 2
<br>
[iwtf-k43-28.pace.gatech.edu:12695] 1 more process has sent help message
<br>
help-mpi-btl-openib.txt / conflicting transport types
<br>
[iwtf-k43-28.pace.gatech.edu:12695] Set MCA parameter
<br>
&quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
----------------------------------------------------------
<br>
<p><p>iwtf-k43-28$ mpirun -np 2 -hostfile machinefile --mca btl openib,self
<br>
./a.out 0
<br>
--------------------------------------------------------------------------
<br>
Open MPI detected two different OpenFabrics transport types in the same
<br>
Infiniband network.
<br>
Such mixed network trasport configuration is not supported by Open MPI.
<br>
<p>&nbsp;&nbsp;Local host:            iwm-k43-30.pace.gatech.edu
<br>
&nbsp;&nbsp;Local adapter:         mthca0 (vendor 0x2c9, part ID 25204)
<br>
&nbsp;&nbsp;Local transport type:  MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
<br>
<p>&nbsp;&nbsp;Remote host:           iwtf-k43-28
<br>
&nbsp;&nbsp;Remote Adapter:        (vendor 0x2c9, part ID 26428)
<br>
&nbsp;&nbsp;Remote transport type: MCA_BTL_OPENIB_TRANSPORT_IB
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[34066,1],1]) is on host: iwm-k43-30.pace.gatech.edu
<br>
&nbsp;&nbsp;Process 2 ([[34066,1],0]) is on host: iwtf-k43-28
<br>
&nbsp;&nbsp;BTLs attempted: self openib
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
MPI_INIT has failed because at least one MPI process is unreachable
<br>
from another.  This *usually* means that an underlying communication
<br>
plugin -- such as a BTL or an MTL -- has either not loaded or not
<br>
allowed itself to be used.  Your MPI job will now abort.
<br>
<p>You may wish to try to narrow down the problem;
<br>
<p>&nbsp;* Check the output of ompi_info to see which BTL/MTL plugins are
<br>
&nbsp;&nbsp;&nbsp;available.
<br>
&nbsp;* Run your application with MPI_THREAD_SINGLE.
<br>
&nbsp;* Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
<br>
&nbsp;&nbsp;&nbsp;if using MTL-based communications) to see exactly which
<br>
&nbsp;&nbsp;&nbsp;communication plugins were considered and/or discarded.
<br>
--------------------------------------------------------------------------
<br>
[iwm-k43-30.pace.gatech.edu:9131] *** An error occurred in MPI_Init
<br>
[iwm-k43-30.pace.gatech.edu:9131] *** on a NULL communicator
<br>
[iwm-k43-30.pace.gatech.edu:9131] *** Unknown error
<br>
[iwm-k43-30.pace.gatech.edu:9131] *** MPI_ERRORS_ARE_FATAL: your MPI job
<br>
will now abort
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: iwm-k43-30.pace.gatech.edu
<br>
&nbsp;&nbsp;PID:        9131
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 9131 on
<br>
node iwm-k43-30 exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[iwtf-k43-28.pace.gatech.edu:13279] 1 more process has sent help message
<br>
help-mpi-btl-openib.txt / conflicting transport types
<br>
[iwtf-k43-28.pace.gatech.edu:13279] Set MCA parameter
<br>
&quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[iwtf-k43-28.pace.gatech.edu:13279] 1 more process has sent help message
<br>
help-mca-bml-r2.txt / unreachable proc
<br>
[iwtf-k43-28.pace.gatech.edu:13279] 1 more process has sent help message
<br>
help-mpi-runtime / mpi_init:startup:pml-add-procs-fail
<br>
[iwtf-k43-28.pace.gatech.edu:13279] 1 more process has sent help message
<br>
help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
<br>
[iwtf-k43-28.pace.gatech.edu:13279] 1 more process has sent help message
<br>
help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
<br>
<p><p>#################################################################
<br>
<p>openmpi 1.4.3 works as expected:
<br>
iwtf-k43-28$ which mpirun
<br>
/usr/local/packages/openmpi/1.4.3/gcc-4.4.5/bin/mpirun
<br>
<p>iwtf-k43-28$ mpicc testmpi.c
<br>
<p>iwtf-k43-28$ mpirun -np 2 -hostfile machinefile ./a.out 0
<br>
Hello from iwm-k43-30.pace.gatech.edu: 1 of 2
<br>
Hello from iwtf-k43-28.pace.gatech.edu: 0 of 2
<br>
<p>iwtf-k43-28$ mpirun -np 2 -hostfile machinefile --mca btl openib,self
<br>
./a.out 0
<br>
Hello from iwm-k43-30.pace.gatech.edu: 1 of 2
<br>
Hello from iwtf-k43-28.pace.gatech.edu: 0 of 2
<br>
######################################################################
<br>
<p>######################################################################
<br>
1.5.4 runs fine on iwm-k43-30 by itself:
<br>
iwtf-k43-28$ cat machinefile
<br>
iwm-k43-30
<br>
iwm-k43-30
<br>
iwtf-k43-28$ which mpirun
<br>
/usr/local/packages/openmpi/1.5.4/gcc-4.4.5/bin/mpirun
<br>
iwtf-k43-28$ mpicc testmpi.c
<br>
iwtf-k43-28$ mpirun -np 2 -hostfile machinefile --mca btl openib,self
<br>
./a.out 0
<br>
Hello from iwm-k43-30.pace.gatech.edu: 0 of 2
<br>
Hello from iwm-k43-30.pace.gatech.edu: 1 of 2
<br>
<p>It is only when mixing and matching hosts that it fails.
<br>
<p>######################################################################
<br>
<p><p>Relevant system information:
<br>
&nbsp;- Same error on RHEL6.2 and RHEL6.3.
<br>
<p>iwtf-k43-28$ uname -a
<br>
Linux iwtf-k43-28.pace.gatech.edu 2.6.32-220.23.1.el6.x86_64 #1 SMP Tue Jun
<br>
12 11:20:15 EDT 2012 x86_64 x86_64 x86_64 GNU/Linux
<br>
iwm-k43-30$ uname -a
<br>
Linux iwm-k43-30.pace.gatech.edu 2.6.32-220.23.1.el6.x86_64 #1 SMP Tue Jun
<br>
12 11:20:15 EDT 2012 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p><p><p># rpm -qa | grep -i verb
<br>
libibverbs-debuginfo-1.1.4-1.24.gb89d4d7.x86_64
<br>
libibverbs-1.1.4-1.24.gb89d4d7.x86_64
<br>
libibverbs-devel-static-1.1.4-1.24.gb89d4d7.x86_64
<br>
libibverbs-devel-1.1.4-1.24.gb89d4d7.x86_64
<br>
libipathverbs-1.2-1.x86_64
<br>
libipathverbs-debuginfo-1.2-1.x86_64
<br>
libibverbs-utils-1.1.4-1.24.gb89d4d7.x86_64
<br>
libipathverbs-devel-1.2-1.x86_64
<br>
<p># rpm -qa | grep libmthca
<br>
libmthca-1.0.5-0.1.gbe5eef3.x86_64
<br>
libmthca-debuginfo-1.0.5-0.1.gbe5eef3.x86_64
<br>
libmthca-devel-static-1.0.5-0.1.gbe5eef3.x86_64
<br>
<p># rpm -qa | grep libmlx
<br>
libmlx4-devel-1.0.1-1.20.g6771d22.x86_64
<br>
libmlx4-debuginfo-1.0.1-1.20.g6771d22.x86_64
<br>
libmlx4-1.0.1-1.20.g6771d22.x86_64
<br>
<p><p>1.4.3 &quot;configure&quot; flags: &quot;--with-tm=/opt/torque/2.4.3
<br>
--with-io-romio-flags=\&quot;--with-file-system=nfs+ufs+panfs\&quot; --enable-static&quot;
<br>
1.5.4 &quot;configure&quot; flags: &quot;--with-tm=/opt/torque/2.4.3
<br>
--with-io-romio-flags=\&quot;--with-file-system=nfs+ufs+panfs\&quot;
<br>
--with-hwloc=/usr/local/packages/hwloc/1.2/ --enable-static&quot;
<br>
1.6.2 &quot;configure&quot; flags: &quot;--with-tm=/opt/torque/2.4.3
<br>
--with-io-romio-flags=\&quot;--with-file-system=nfs+ufs+panfs\&quot; --enable-static
<br>
--with-knem&quot;
<br>
<p><p>iwm-k43-30# ibv_devinfo  -v
<br>
hca_id:    mthca0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;transport:            InfiniBand (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                1.2.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;node_guid:            0002:c902:0029:8434
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:            0002:c902:0029:8437
<br>
&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:            0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:            25204
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;board_id:            MT_03B0150002
<br>
&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:            1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_mr_size:            0xffffffffffffffff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;page_size_cap:            0xfffff000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_qp:                64512
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_qp_wr:            16384
<br>
&nbsp;&nbsp;&nbsp;&nbsp;device_cap_flags:        0x00001c76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_sge:            27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_sge_rd:            0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_cq:                65408
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_cqe:            131071
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_mr:                131056
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_pd:                32764
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_qp_rd_atom:            4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_ee_rd_atom:            0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_res_rd_atom:        258048
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_qp_init_rd_atom:        128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_ee_init_rd_atom:        0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;atomic_cap:            ATOMIC_HCA (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_ee:                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_rdd:            0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_mw:                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_raw_ipv6_qp:        0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_raw_ethy_qp:        0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_mcast_grp:            8192
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_mcast_qp_attach:        56
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_total_mcast_qp_attach:    458752
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_ah:                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_fmr:            0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_srq:            960
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_srq_wr:            16384
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_srq_sge:            27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_pkeys:            64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;local_ca_ack_delay:        15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:    1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:            PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:        2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:        2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:            465
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:        54
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:        0x00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:        IB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_msg_sz:        0x80000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_cap_flags:        0x02510a68
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_vl_num:        4 (3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bad_pkey_cntr:        0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qkey_viol_cntr:        0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_sl:            0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pkey_tbl_len:        64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gid_tbl_len:        32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subnet_timeout:        17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;init_type_reply:    0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_width:        4X (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_speed:        5.0 Gbps (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_state:        LINK_UP (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GID[  0]:        fe80:0000:0000:0000:0002:c902:0029:8435
<br>
##################################################################
<br>
<p>##################################################################
<br>
iwtf-k43-28# ibv_devinfo -v
<br>
hca_id:    mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;transport:            InfiniBand (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                2.9.1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;node_guid:            0002:c903:004b:2170
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:            0002:c903:004b:2173
<br>
&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:            0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:            26428
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                0xB0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;board_id:            MT_0D90110009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:            1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_mr_size:            0xffffffffffffffff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;page_size_cap:            0xfffffe00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_qp:                261056
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_qp_wr:            16351
<br>
&nbsp;&nbsp;&nbsp;&nbsp;device_cap_flags:        0x007c9c76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_sge:            32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_sge_rd:            0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_cq:                65408
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_cqe:            4194303
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_mr:                524272
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_pd:                32764
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_qp_rd_atom:            16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_ee_rd_atom:            0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_res_rd_atom:        4176896
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_qp_init_rd_atom:        128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_ee_init_rd_atom:        0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;atomic_cap:            ATOMIC_HCA (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_ee:                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_rdd:            0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_mw:                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_raw_ipv6_qp:        0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_raw_ethy_qp:        1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_mcast_grp:            8192
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_mcast_qp_attach:        120
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_total_mcast_qp_attach:    983040
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_ah:                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_fmr:            0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_srq:            65472
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_srq_wr:            16383
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_srq_sge:            31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_pkeys:            128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;local_ca_ack_delay:        15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:    1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:            PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:        2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:        2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:            465
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:        35
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:        0x00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:        IB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_msg_sz:        0x40000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_cap_flags:        0x02510868
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_vl_num:        8 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bad_pkey_cntr:        0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qkey_viol_cntr:        0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_sl:            0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pkey_tbl_len:        128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gid_tbl_len:        128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subnet_timeout:        17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;init_type_reply:    0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_width:        4X (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_speed:        10.0 Gbps (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_state:        LINK_UP (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GID[  0]:        fe80:0000:0000:0000:0002:c903:004b:2171
<br>
##################################################################
<br>
<p><p><p><p><pre>
-- 
Wesley Emeneker, Research Scientist
The Partnership for an Advanced Computing Environment
Georgia Institute of Technology
404.385.2303
Wesley.Emeneker_at_[hidden]
<a href="http://pace.gatech.edu">http://pace.gatech.edu</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21274/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21275.php">Siegmar Gross: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bitopenmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Previous message:</strong> <a href="21273.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
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
