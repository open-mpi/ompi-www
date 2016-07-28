<?
$subject_val = "Re: [OMPI users] OpenIB Error in ibv_create_srq";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  3 10:02:06 2010" -->
<!-- isoreceived="20100803140206" -->
<!-- sent="Tue, 03 Aug 2010 10:01:58 -0400" -->
<!-- isosent="20100803140158" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB Error in ibv_create_srq" -->
<!-- id="1280844118.2108.671.camel_at_localhost.localdomain" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1280767785.2108.586.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB Error in ibv_create_srq<br>
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-03 10:01:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13901.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13899.php">Simone Pellegrini: "[OMPI users] Implementing a new BTL module in MCA"</a>
<li><strong>In reply to:</strong> <a href="13895.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13901.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Reply:</strong> <a href="13901.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi: In response to my own question, by studying the file
<br>
mca-btl-openib-device-params.ini, I discovered that this option in
<br>
OMPI-1.4.2:
<br>
<p>-mca btl_openib_receive_queues P,65536,256,192,128
<br>
<p>was sufficient to prevent OMPI from trying to create shared receive
<br>
queues and allowed my application to run to completion using the IB
<br>
hardware.
<br>
<p>I guess my question now is: What do these numbers mean? Presumably the
<br>
size (or counts?) of buffers to allocate? Are there limits or a way to
<br>
tune these values?
<br>
<p>Thanks,
<br>
Allen
<br>
<p>On Mon, 2010-08-02 at 12:49 -0400, Allen Barnett wrote:
<br>
<span class="quotelev1">&gt; Hi Terry:
</span><br>
<span class="quotelev1">&gt; It is indeed the case that the openib BTL has not been initialized. I
</span><br>
<span class="quotelev1">&gt; ran with your tcp-disabled MCA option and it aborted in MPI_Init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OFED stack is what's included in RHEL4. It appears to be made up of
</span><br>
<span class="quotelev1">&gt; the RPMs:
</span><br>
<span class="quotelev1">&gt; openib-1.4-1.el4
</span><br>
<span class="quotelev1">&gt; opensm-3.2.5-1.el4
</span><br>
<span class="quotelev1">&gt; libibverbs-1.1.2-1.el4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I determine if srq is supported? Is there an MCA option to
</span><br>
<span class="quotelev1">&gt; defeat it? (Our in-house cluster has more recent Mellanox IB hardware
</span><br>
<span class="quotelev1">&gt; and is running this same IB stack and ompi 1.4.2 works OK, so I suspect
</span><br>
<span class="quotelev1">&gt; srq is supported by the OpenFabrics stack. Perhaps.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Allen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 2010-08-02 at 06:47 -0400, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt; &gt; My guess is from the message below saying &quot;(openib) BTL failed to
</span><br>
<span class="quotelev2">&gt; &gt; initialize&quot;  that the code is probably running over tcp.  To
</span><br>
<span class="quotelev2">&gt; &gt; absolutely prove this you can specify to only use the openib, sm and
</span><br>
<span class="quotelev2">&gt; &gt; self btls to eliminate the tcp btl.  To do that you add the following
</span><br>
<span class="quotelev2">&gt; &gt; to the mpirun line &quot;-mca btl openib,sm,self&quot;.  I believe with that
</span><br>
<span class="quotelev2">&gt; &gt; specification the code will abort and not run to completion.  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What version of the OFED stack are you using?  I wonder if srq is
</span><br>
<span class="quotelev2">&gt; &gt; supported on your system or not?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --td
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Allen Barnett wrote: 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi: A customer is attempting to run our OpenMPI 1.4.2-based application
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on a cluster of machines running RHEL4 with the standard OFED stack. The
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HCAs are identified as:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 03:01.0 PCI bridge: Mellanox Technologies MT23108 PCI Bridge (rev a1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 04:00.0 InfiniBand: Mellanox Technologies MT23108 InfiniHost (rev a1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ibv_devinfo says that one port on the HCAs is active but the other is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; down:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hca_id:	mthca0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 	fw_ver:				3.0.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 	node_guid:			0006:6a00:9800:4c78
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 	sys_image_guid:			0006:6a00:9800:4c78
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 	vendor_id:			0x066a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 	vendor_part_id:			23108
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 	hw_ver:				0xA1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 	phys_port_cnt:			2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 		port:	1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 			state:			active (4)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 			max_mtu:		2048 (4)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 			active_mtu:		2048 (4)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 			sm_lid:			1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 			port_lid:		26
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 			port_lmc:		0x00
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 		port:	2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 			state:			down (1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 			max_mtu:		2048 (4)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 			active_mtu:		512 (2)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 			sm_lid:			0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 			port_lid:		0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 			port_lmc:		0x00
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  When the OMPI application is run, it prints the error message:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The OpenFabrics (openib) BTL failed to initialize while trying to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; create an internal queue.  This typically indicates a failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OpenFabrics installation, faulty hardware, or that Open MPI is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; attempting to use a feature that is not supported on your hardware
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (i.e., is a shared receive queue specified in the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl_openib_receive_queues MCA parameter with a device that does not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; support it?).  The failure occured here:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Local host:  machine001.lan
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   OMPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source: /software/openmpi-1.4.2/ompi/mca/btl/openib/btl_openib.c:250
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Function:    ibv_create_srq()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Error:       Invalid argument (errno=22)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Device:      mthca0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev3">&gt; &gt; &gt; problem fixed.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The full log of a run with &quot;btl_openib_verbose 1&quot; is attached. My
</span><br>
<span class="quotelev3">&gt; &gt; &gt; application appears to run to completion, but I can't tell if it's just
</span><br>
<span class="quotelev3">&gt; &gt; &gt; running on TCP and not using the IB hardware.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would appreciate any suggestions on how to proceed to fix this error.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Allen
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Allen Barnett
Transpire, Inc
E-Mail: allen_at_[hidden]
Skype:  allenbarnett
Ph:     518-887-2930
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13901.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13899.php">Simone Pellegrini: "[OMPI users] Implementing a new BTL module in MCA"</a>
<li><strong>In reply to:</strong> <a href="13895.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13901.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Reply:</strong> <a href="13901.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
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
