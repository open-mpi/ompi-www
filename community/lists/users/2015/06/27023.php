<?
$subject_val = "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 19:02:22 2015" -->
<!-- isoreceived="20150601230222" -->
<!-- sent="Mon, 01 Jun 2015 18:02:23 -0500" -->
<!-- isosent="20150601230223" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster" -->
<!-- id="556CE47F.6030209_at_opengridcomputing.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C24E0550-5D80-4AD2-B7AA-AE9EB03AA514_at_open-mpi.org" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 19:02:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27024.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27022.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="27011.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27019.php">Nathan Hjelm: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/1/2015 9:40 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Just to check the obvious: I assume that the /usr/mpi directory is not network mounted, and both application and OMPI code are appropriately compiled on each side?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; There is another mpirun flag &#226;&#128;&#148;hetero-apps that you may need to provide. It has been so long since someone tried this that I&#226;&#128;&#153;d have to look to remember what it does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 1, 2015, at 7:28 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm seeing an error trying to run a simple OMPI job on a 2 node cluster where one node is a PPC64 BE byte order and the other is a
</span><br>
<span class="quotelev2">&gt;&gt; X86_64 LE byte order node.  OMPI 1.8.4 is configured with --enable-heterogeneous:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-openib=/usr  CC=gcc CXX=g++ F77=gfortran FC=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpirun-prefix-by-default --prefix=/usr/mpi/gcc/openmpi-1.8.4/
</span><br>
<span class="quotelev2">&gt;&gt; --with-openib-libdir=/usr/lib64/ --libdir=/usr/mpi/gcc/openmpi-1.8.4/lib64/
</span><br>
<span class="quotelev2">&gt;&gt; --with-contrib-vt-flags=--disable-iotrace --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt;&gt; --with-threads=posix --enable-heterogeneous &amp;&amp; make -j8 &amp;&amp; make -j8 install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And the job started this way:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/mpi/gcc/openmpi-1.8.4/bin/mpirun -np 2 -host
</span><br>
<span class="quotelev2">&gt;&gt; ppc64,atlas3 --allow-run-as-root --mca btl_openib_addr_include 102.1.1.0/24
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl openib,sm,self /usr/mpi/gcc/openmpi-1.8.4/tests/IMB-3.2/IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt; pingpong
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But we see the following error.  Note atlas3 is using the vendor ID that is in the wrong byte order (0x25140000 instead of 0x1425):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Open MPI receive queue configuration for the OpenFabrics devices
</span><br>
<span class="quotelev2">&gt;&gt; on two nodes are incompatible, meaning that MPI processes on two
</span><br>
<span class="quotelev2">&gt;&gt; specific nodes were unable to communicate with each other.  This
</span><br>
<span class="quotelev2">&gt;&gt; generally happens when you are using OpenFabrics devices from
</span><br>
<span class="quotelev2">&gt;&gt; different vendors on the same network.  You should be able to use the
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib_receive_queues MCA parameter to set a uniform receive
</span><br>
<span class="quotelev2">&gt;&gt; queue configuration for all the devices in the MPI job, and therefore
</span><br>
<span class="quotelev2">&gt;&gt; be able to run successfully.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Local host:       ppc64-rhel71
</span><br>
<span class="quotelev2">&gt;&gt;   Local adapter:    cxgb4_0 (vendor 0x1425, part ID 21505)
</span><br>
<span class="quotelev2">&gt;&gt;   Local queues:     P,65536,64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Remote host:      atlas3
</span><br>
<span class="quotelev2">&gt;&gt;   Remote adapter:   (vendor 0x25140000, part ID 22282240)
</span><br>
<span class="quotelev2">&gt;&gt;   Remote queues:
</span><br>
<span class="quotelev2">&gt;&gt; P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I missing some OMPI parameter to allow this job to run?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steve.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27010.php">http://www.open-mpi.org/community/lists/users/2015/06/27010.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27011.php">http://www.open-mpi.org/community/lists/users/2015/06/27011.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27024.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27022.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="27011.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27019.php">Nathan Hjelm: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
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
