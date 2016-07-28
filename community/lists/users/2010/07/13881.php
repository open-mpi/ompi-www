<?
$subject_val = "[OMPI users] OpenIB Error in ibv_create_srq";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 30 12:21:32 2010" -->
<!-- isoreceived="20100730162132" -->
<!-- sent="Fri, 30 Jul 2010 12:21:25 -0400" -->
<!-- isosent="20100730162125" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="[OMPI users] OpenIB Error in ibv_create_srq" -->
<!-- id="1280506885.2108.532.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> [OMPI users] OpenIB Error in ibv_create_srq<br>
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-30 12:21:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13882.php">Jeremy Roberts: "[OMPI users] Fortran MPI Struct with Allocatable Array"</a>
<li><strong>Previous message:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13888.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13888.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi: A customer is attempting to run our OpenMPI 1.4.2-based application
<br>
on a cluster of machines running RHEL4 with the standard OFED stack. The
<br>
HCAs are identified as:
<br>
<p>03:01.0 PCI bridge: Mellanox Technologies MT23108 PCI Bridge (rev a1)
<br>
04:00.0 InfiniBand: Mellanox Technologies MT23108 InfiniHost (rev a1)
<br>
<p>ibv_devinfo says that one port on the HCAs is active but the other is
<br>
down:
<br>
<p>hca_id:	mthca0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:				3.0.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:			0006:6a00:9800:4c78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:			0006:6a00:9800:4c78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:			0x066a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:			23108
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:				0xA1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:			2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:	1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:			active (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:		2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:		2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:			1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:		26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:		0x00
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:	2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:			down (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:		2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:		512 (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:			0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:		0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:		0x00
<br>
<p><p>&nbsp;When the OMPI application is run, it prints the error message:
<br>
<p>--------------------------------------------------------------------
<br>
The OpenFabrics (openib) BTL failed to initialize while trying to
<br>
create an internal queue.  This typically indicates a failed
<br>
OpenFabrics installation, faulty hardware, or that Open MPI is
<br>
attempting to use a feature that is not supported on your hardware
<br>
(i.e., is a shared receive queue specified in the
<br>
btl_openib_receive_queues MCA parameter with a device that does not
<br>
support it?).  The failure occured here:
<br>
<p>&nbsp;&nbsp;Local host:  machine001.lan
<br>
&nbsp;&nbsp;OMPI
<br>
source: /software/openmpi-1.4.2/ompi/mca/btl/openib/btl_openib.c:250
<br>
&nbsp;&nbsp;Function:    ibv_create_srq()
<br>
&nbsp;&nbsp;Error:       Invalid argument (errno=22)
<br>
&nbsp;&nbsp;Device:      mthca0
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------
<br>
<p>The full log of a run with &quot;btl_openib_verbose 1&quot; is attached. My
<br>
application appears to run to completion, but I can't tell if it's just
<br>
running on TCP and not using the IB hardware.
<br>
<p>I would appreciate any suggestions on how to proceed to fix this error.
<br>
<p>Thanks,
<br>
Allen
<br>
<p><pre>
-- 
Allen Barnett
Transpire, Inc
E-Mail: allen_at_[hidden]

</pre>
<p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13881/openib.listing.gz">openib.listing.gz</a>
</ul>
<!-- attachment="openib.listing.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13882.php">Jeremy Roberts: "[OMPI users] Fortran MPI Struct with Allocatable Array"</a>
<li><strong>Previous message:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13888.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13888.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
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
