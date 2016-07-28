<?
$subject_val = "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 15:45:24 2015" -->
<!-- isoreceived="20150601194524" -->
<!-- sent="Mon, 1 Jun 2015 13:45:19 -0600" -->
<!-- isosent="20150601194519" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster" -->
<!-- id="20150601194519.GD42459_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="005e01d09c77$39eb5630$adc20290$_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 15:45:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27020.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="27018.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-v1.8.5-40-g7b9e672"</a>
<li><strong>In reply to:</strong> <a href="27010.php">Steve Wise: "[OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27024.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Reply:</strong> <a href="27024.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks to me like the default queue pair settings are different on the
<br>
different systems. You can try setting the mca_btl_openib_receive_queues
<br>
variable by hand. If this is infiniband I recommend not using any
<br>
per-peer queue pairs and use something like:
<br>
<p>S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
<br>
<p>otherwise use either one of the settings that were printed out:
<br>
<p>P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
<br>
<p>or
<br>
<p>P,65536,64
<br>
<p>-Nathan
<br>
<p>On Mon, Jun 01, 2015 at 09:28:28AM -0500, Steve Wise wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm seeing an error trying to run a simple OMPI job on a 2 node cluster where one node is a PPC64 BE byte order and the other is a
</span><br>
<span class="quotelev1">&gt; X86_64 LE byte order node.  OMPI 1.8.4 is configured with --enable-heterogeneous:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-openib=/usr  CC=gcc CXX=g++ F77=gfortran FC=gfortran
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default --prefix=/usr/mpi/gcc/openmpi-1.8.4/
</span><br>
<span class="quotelev1">&gt; --with-openib-libdir=/usr/lib64/ --libdir=/usr/mpi/gcc/openmpi-1.8.4/lib64/
</span><br>
<span class="quotelev1">&gt; --with-contrib-vt-flags=--disable-iotrace --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; --with-threads=posix --enable-heterogeneous &amp;&amp; make -j8 &amp;&amp; make -j8 install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And the job started this way:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.8.4/bin/mpirun -np 2 -host
</span><br>
<span class="quotelev1">&gt; ppc64,atlas3 --allow-run-as-root --mca btl_openib_addr_include 102.1.1.0/24
</span><br>
<span class="quotelev1">&gt; --mca btl openib,sm,self /usr/mpi/gcc/openmpi-1.8.4/tests/IMB-3.2/IMB-MPI1
</span><br>
<span class="quotelev1">&gt; pingpong
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But we see the following error.  Note atlas3 is using the vendor ID that is in the wrong byte order (0x25140000 instead of 0x1425): 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Open MPI receive queue configuration for the OpenFabrics devices
</span><br>
<span class="quotelev1">&gt; on two nodes are incompatible, meaning that MPI processes on two
</span><br>
<span class="quotelev1">&gt; specific nodes were unable to communicate with each other.  This
</span><br>
<span class="quotelev1">&gt; generally happens when you are using OpenFabrics devices from
</span><br>
<span class="quotelev1">&gt; different vendors on the same network.  You should be able to use the
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_receive_queues MCA parameter to set a uniform receive
</span><br>
<span class="quotelev1">&gt; queue configuration for all the devices in the MPI job, and therefore
</span><br>
<span class="quotelev1">&gt; be able to run successfully.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host:       ppc64-rhel71
</span><br>
<span class="quotelev1">&gt;   Local adapter:    cxgb4_0 (vendor 0x1425, part ID 21505)
</span><br>
<span class="quotelev1">&gt;   Local queues:     P,65536,64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Remote host:      atlas3
</span><br>
<span class="quotelev1">&gt;   Remote adapter:   (vendor 0x25140000, part ID 22282240)
</span><br>
<span class="quotelev1">&gt;   Remote queues:   
</span><br>
<span class="quotelev1">&gt; P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I missing some OMPI parameter to allow this job to run?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steve.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27010.php">http://www.open-mpi.org/community/lists/users/2015/06/27010.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27019/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27020.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="27018.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-v1.8.5-40-g7b9e672"</a>
<li><strong>In reply to:</strong> <a href="27010.php">Steve Wise: "[OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27024.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Reply:</strong> <a href="27024.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
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
