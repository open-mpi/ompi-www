<?
$subject_val = "Re: [OMPI users] OpenIB Error in ibv_create_srq";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  2 06:47:18 2010" -->
<!-- isoreceived="20100802104718" -->
<!-- sent="Mon, 02 Aug 2010 06:47:24 -0400" -->
<!-- isosent="20100802104724" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB Error in ibv_create_srq" -->
<!-- id="4C56A23C.5010100_at_oracle.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1280506885.2108.532.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-02 06:47:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13889.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="13887.php">Alberto Canestrelli: "[OMPI users] Accessing to the send buffer"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13881.php">Allen Barnett: "[OMPI users] OpenIB Error in ibv_create_srq"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13895.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Reply:</strong> <a href="13895.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My guess is from the message below saying &quot;(openib) BTL failed to 
<br>
initialize&quot;  that the code is probably running over tcp.  To absolutely 
<br>
prove this you can specify to only use the openib, sm and self btls to 
<br>
eliminate the tcp btl.  To do that you add the following to the mpirun 
<br>
line &quot;-mca btl openib,sm,self&quot;.  I believe with that specification the 
<br>
code will abort and not run to completion. 
<br>
<p>What version of the OFED stack are you using?  I wonder if srq is 
<br>
supported on your system or not?
<br>
<p>--td
<br>
<p>Allen Barnett wrote:
<br>
<span class="quotelev1">&gt; Hi: A customer is attempting to run our OpenMPI 1.4.2-based application
</span><br>
<span class="quotelev1">&gt; on a cluster of machines running RHEL4 with the standard OFED stack. The
</span><br>
<span class="quotelev1">&gt; HCAs are identified as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 03:01.0 PCI bridge: Mellanox Technologies MT23108 PCI Bridge (rev a1)
</span><br>
<span class="quotelev1">&gt; 04:00.0 InfiniBand: Mellanox Technologies MT23108 InfiniHost (rev a1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ibv_devinfo says that one port on the HCAs is active but the other is
</span><br>
<span class="quotelev1">&gt; down:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hca_id:	mthca0
</span><br>
<span class="quotelev1">&gt; 	fw_ver:				3.0.2
</span><br>
<span class="quotelev1">&gt; 	node_guid:			0006:6a00:9800:4c78
</span><br>
<span class="quotelev1">&gt; 	sys_image_guid:			0006:6a00:9800:4c78
</span><br>
<span class="quotelev1">&gt; 	vendor_id:			0x066a
</span><br>
<span class="quotelev1">&gt; 	vendor_part_id:			23108
</span><br>
<span class="quotelev1">&gt; 	hw_ver:				0xA1
</span><br>
<span class="quotelev1">&gt; 	phys_port_cnt:			2
</span><br>
<span class="quotelev1">&gt; 		port:	1
</span><br>
<span class="quotelev1">&gt; 			state:			active (4)
</span><br>
<span class="quotelev1">&gt; 			max_mtu:		2048 (4)
</span><br>
<span class="quotelev1">&gt; 			active_mtu:		2048 (4)
</span><br>
<span class="quotelev1">&gt; 			sm_lid:			1
</span><br>
<span class="quotelev1">&gt; 			port_lid:		26
</span><br>
<span class="quotelev1">&gt; 			port_lmc:		0x00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 		port:	2
</span><br>
<span class="quotelev1">&gt; 			state:			down (1)
</span><br>
<span class="quotelev1">&gt; 			max_mtu:		2048 (4)
</span><br>
<span class="quotelev1">&gt; 			active_mtu:		512 (2)
</span><br>
<span class="quotelev1">&gt; 			sm_lid:			0
</span><br>
<span class="quotelev1">&gt; 			port_lid:		0
</span><br>
<span class="quotelev1">&gt; 			port_lmc:		0x00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When the OMPI application is run, it prints the error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenFabrics (openib) BTL failed to initialize while trying to
</span><br>
<span class="quotelev1">&gt; create an internal queue.  This typically indicates a failed
</span><br>
<span class="quotelev1">&gt; OpenFabrics installation, faulty hardware, or that Open MPI is
</span><br>
<span class="quotelev1">&gt; attempting to use a feature that is not supported on your hardware
</span><br>
<span class="quotelev1">&gt; (i.e., is a shared receive queue specified in the
</span><br>
<span class="quotelev1">&gt; btl_openib_receive_queues MCA parameter with a device that does not
</span><br>
<span class="quotelev1">&gt; support it?).  The failure occured here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:  machine001.lan
</span><br>
<span class="quotelev1">&gt;   OMPI
</span><br>
<span class="quotelev1">&gt; source: /software/openmpi-1.4.2/ompi/mca/btl/openib/btl_openib.c:250
</span><br>
<span class="quotelev1">&gt;   Function:    ibv_create_srq()
</span><br>
<span class="quotelev1">&gt;   Error:       Invalid argument (errno=22)
</span><br>
<span class="quotelev1">&gt;   Device:      mthca0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt; problem fixed.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The full log of a run with &quot;btl_openib_verbose 1&quot; is attached. My
</span><br>
<span class="quotelev1">&gt; application appears to run to completion, but I can't tell if it's just
</span><br>
<span class="quotelev1">&gt; running on TCP and not using the IB hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would appreciate any suggestions on how to proceed to fix this error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Allen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13888/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-13888/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13889.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="13887.php">Alberto Canestrelli: "[OMPI users] Accessing to the send buffer"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13881.php">Allen Barnett: "[OMPI users] OpenIB Error in ibv_create_srq"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13895.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Reply:</strong> <a href="13895.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
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
