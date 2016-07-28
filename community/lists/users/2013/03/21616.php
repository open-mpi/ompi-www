<?
$subject_val = "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 03:54:47 2013" -->
<!-- isoreceived="20130326075447" -->
<!-- sent="Tue, 26 Mar 2013 12:54:43 +0500" -->
<!-- isosent="20130326075443" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version" -->
<!-- id="CAMvdAsKcTuN7PX3-kg9xRp7RCZWzSTsfFv+0EQ9349-yrLX+4Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMvdAs+zmNxwn09sixvm3CqNJ0kD51cUj8pZEaYqTjDXuKSLtA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-03-26 03:54:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21617.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>Previous message:</strong> <a href="21615.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>In reply to:</strong> <a href="21615.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21617.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>Reply:</strong> <a href="21617.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It may be because the other system is running upgraded version of linux
<br>
which is not having infiniband drivers. Any solution?
<br>
<p><p>On Tue, Mar 26, 2013 at 12:42 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Tried this but mpirun exits with this error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 40 /home/MET/hrm/bin/hrm
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [[33095,1],8]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev1">&gt;   Host: pmd04.pakmet.com
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[33095,1],28]) is on host:
</span><br>
<span class="quotelev1">&gt; compute-02-00.private02.pakmet.com
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[33095,1],0]) is on host: pmd02
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: openib self sm
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ahsan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 22, 2013 at 7:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 22, 2013, at 3:42 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually due to some data base corruption I am not able to add any new
</span><br>
<span class="quotelev2">&gt;&gt; node to cluster from the installer node. So I want to run parallel job on
</span><br>
<span class="quotelev2">&gt;&gt; more nodes without adding them to existing cluster.
</span><br>
<span class="quotelev2">&gt;&gt; You are right the binaries must be present on the remote node as well.
</span><br>
<span class="quotelev2">&gt;&gt; Is this possible throught nfs? just as the compute nodes are nfs mounted
</span><br>
<span class="quotelev2">&gt;&gt; with the installer node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sure - OMPI doesn't care how the binaries got there. Just so long as they
</span><br>
<span class="quotelev2">&gt;&gt; are present on the compute node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ahsan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 22, 2013 at 3:33 PM, Reuti &lt;reuti_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 22.03.2013 um 10:14 schrieb Syed Ahsan Ali:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I have a very basic question. If we want to run mpirun job on two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; systems which are not part of cluster, then how we can make it possible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can the host be specifiend on mpirun which is not compute node, rather a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stand alone system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sure, the machines can be specified as argument to `mpiexec`. But do you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to run applications just between these two machines, or should they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; participate on a larger parallel job with machines of the cluster: then a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; direct network connection between outside and inside of the cluster is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; necessary by some kind of forwarding in case these are separated networks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also the paths to the started binaries may be different, in case the two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines are not sharing the same /home with the cluster and this needs to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be honored.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In case you are using a queuing system and want to route jobs to outside
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines of the set up cluster: it's necessary to negotiate with the admin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to allow jobs being scheduled thereto.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Ahsan
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev2">&gt;&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Research &amp; Development Division
</span><br>
<span class="quotelev2">&gt;&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev2">&gt;&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev2">&gt;&gt; Cell # +923155145014
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21616/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21617.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>Previous message:</strong> <a href="21615.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>In reply to:</strong> <a href="21615.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21617.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>Reply:</strong> <a href="21617.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
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
