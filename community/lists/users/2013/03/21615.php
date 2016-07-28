<?
$subject_val = "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 03:42:57 2013" -->
<!-- isoreceived="20130326074257" -->
<!-- sent="Tue, 26 Mar 2013 12:42:51 +0500" -->
<!-- isosent="20130326074251" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version" -->
<!-- id="CAMvdAs+zmNxwn09sixvm3CqNJ0kD51cUj8pZEaYqTjDXuKSLtA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 03:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21616.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>Previous message:</strong> <a href="21614.php">Timothy Stitt: "[OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21616.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>Reply:</strong> <a href="21616.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tried this but mpirun exits with this error
<br>
<p>mpirun -np 40 /home/MET/hrm/bin/hrm
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
librdmacm: couldn't read ABI version.
<br>
CMA: unable to get RDMA device list
<br>
CMA: unable to get RDMA device list
<br>
CMA: unable to get RDMA device list
<br>
CMA: unable to get RDMA device list
<br>
librdmacm: assuming: 4
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
CMA: unable to get RDMA device list
<br>
CMA: unable to get RDMA device list
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
CMA: unable to get RDMA device list
<br>
librdmacm: assuming: 4
<br>
CMA: unable to get RDMA device list
<br>
--------------------------------------------------------------------------
<br>
[[33095,1],8]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
Module: OpenFabrics (openib)
<br>
&nbsp;&nbsp;Host: pmd04.pakmet.com
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
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
&nbsp;&nbsp;Process 1 ([[33095,1],28]) is on host: compute-02-00.private02.pakmet.com
<br>
&nbsp;&nbsp;Process 2 ([[33095,1],0]) is on host: pmd02
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
<p><p>Ahsan
<br>
<p>On Fri, Mar 22, 2013 at 7:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 22, 2013, at 3:42 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually due to some data base corruption I am not able to add any new
</span><br>
<span class="quotelev1">&gt; node to cluster from the installer node. So I want to run parallel job on
</span><br>
<span class="quotelev1">&gt; more nodes without adding them to existing cluster.
</span><br>
<span class="quotelev1">&gt; You are right the binaries must be present on the remote node as well.
</span><br>
<span class="quotelev1">&gt; Is this possible throught nfs? just as the compute nodes are nfs mounted
</span><br>
<span class="quotelev1">&gt; with the installer node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure - OMPI doesn't care how the binaries got there. Just so long as they
</span><br>
<span class="quotelev1">&gt; are present on the compute node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ahsan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 22, 2013 at 3:33 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 22.03.2013 um 10:14 schrieb Syed Ahsan Ali:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have a very basic question. If we want to run mpirun job on two
</span><br>
<span class="quotelev2">&gt;&gt; systems which are not part of cluster, then how we can make it possible.
</span><br>
<span class="quotelev2">&gt;&gt; Can the host be specifiend on mpirun which is not compute node, rather a
</span><br>
<span class="quotelev2">&gt;&gt; stand alone system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sure, the machines can be specified as argument to `mpiexec`. But do you
</span><br>
<span class="quotelev2">&gt;&gt; want to run applications just between these two machines, or should they
</span><br>
<span class="quotelev2">&gt;&gt; participate on a larger parallel job with machines of the cluster: then a
</span><br>
<span class="quotelev2">&gt;&gt; direct network connection between outside and inside of the cluster is
</span><br>
<span class="quotelev2">&gt;&gt; necessary by some kind of forwarding in case these are separated networks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also the paths to the started binaries may be different, in case the two
</span><br>
<span class="quotelev2">&gt;&gt; machines are not sharing the same /home with the cluster and this needs to
</span><br>
<span class="quotelev2">&gt;&gt; be honored.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In case you are using a queuing system and want to route jobs to outside
</span><br>
<span class="quotelev2">&gt;&gt; machines of the set up cluster: it's necessary to negotiate with the admin
</span><br>
<span class="quotelev2">&gt;&gt; to allow jobs being scheduled thereto.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ahsan
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev1">&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Research &amp; Development Division
</span><br>
<span class="quotelev1">&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev1">&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev1">&gt; Cell # +923155145014
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21615/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21616.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>Previous message:</strong> <a href="21614.php">Timothy Stitt: "[OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21616.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>Reply:</strong> <a href="21616.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
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
