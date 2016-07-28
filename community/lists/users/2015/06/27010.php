<?
$subject_val = "[OMPI users] problem starting a ompi job in a mix BE/LE cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 10:28:37 2015" -->
<!-- isoreceived="20150601142837" -->
<!-- sent="Mon, 1 Jun 2015 09:28:28 -0500" -->
<!-- isosent="20150601142828" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="[OMPI users] problem starting a ompi job in a mix BE/LE cluster" -->
<!-- id="005e01d09c77$39eb5630$adc20290$_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] problem starting a ompi job in a mix BE/LE cluster<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 10:28:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27011.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27009.php">Siegmar Gross: "[OMPI users] Error building openmpi-v1.8.5-40-g7b9e672"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27011.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Reply:</strong> <a href="27011.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Reply:</strong> <a href="27019.php">Nathan Hjelm: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm seeing an error trying to run a simple OMPI job on a 2 node cluster where one node is a PPC64 BE byte order and the other is a
<br>
X86_64 LE byte order node.  OMPI 1.8.4 is configured with --enable-heterogeneous:
<br>
<p>./configure --with-openib=/usr  CC=gcc CXX=g++ F77=gfortran FC=gfortran
<br>
--enable-mpirun-prefix-by-default --prefix=/usr/mpi/gcc/openmpi-1.8.4/
<br>
--with-openib-libdir=/usr/lib64/ --libdir=/usr/mpi/gcc/openmpi-1.8.4/lib64/
<br>
--with-contrib-vt-flags=--disable-iotrace --enable-mpi-thread-multiple
<br>
--with-threads=posix --enable-heterogeneous &amp;&amp; make -j8 &amp;&amp; make -j8 install
<br>
<p>And the job started this way:
<br>
<p>/usr/mpi/gcc/openmpi-1.8.4/bin/mpirun -np 2 -host
<br>
ppc64,atlas3 --allow-run-as-root --mca btl_openib_addr_include 102.1.1.0/24
<br>
--mca btl openib,sm,self /usr/mpi/gcc/openmpi-1.8.4/tests/IMB-3.2/IMB-MPI1
<br>
pingpong
<br>
<p>But we see the following error.  Note atlas3 is using the vendor ID that is in the wrong byte order (0x25140000 instead of 0x1425): 
<br>
<p>The Open MPI receive queue configuration for the OpenFabrics devices
<br>
on two nodes are incompatible, meaning that MPI processes on two
<br>
specific nodes were unable to communicate with each other.  This
<br>
generally happens when you are using OpenFabrics devices from
<br>
different vendors on the same network.  You should be able to use the
<br>
mca_btl_openib_receive_queues MCA parameter to set a uniform receive
<br>
queue configuration for all the devices in the MPI job, and therefore
<br>
be able to run successfully.
<br>
<p>&nbsp;&nbsp;Local host:       ppc64-rhel71
<br>
&nbsp;&nbsp;Local adapter:    cxgb4_0 (vendor 0x1425, part ID 21505)
<br>
&nbsp;&nbsp;Local queues:     P,65536,64
<br>
<p>&nbsp;&nbsp;Remote host:      atlas3
<br>
&nbsp;&nbsp;Remote adapter:   (vendor 0x25140000, part ID 22282240)
<br>
&nbsp;&nbsp;Remote queues:   
<br>
P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
<br>
<p><p>Am I missing some OMPI parameter to allow this job to run?
<br>
<p>Thanks,
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27011.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27009.php">Siegmar Gross: "[OMPI users] Error building openmpi-v1.8.5-40-g7b9e672"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27011.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Reply:</strong> <a href="27011.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Reply:</strong> <a href="27019.php">Nathan Hjelm: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
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
