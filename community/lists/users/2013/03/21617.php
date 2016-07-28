<?
$subject_val = "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 09:46:37 2013" -->
<!-- isoreceived="20130326134637" -->
<!-- sent="Tue, 26 Mar 2013 13:46:31 +0000" -->
<!-- isosent="20130326134631" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FC5E67_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMvdAsKcTuN7PX3-kg9xRp7RCZWzSTsfFv+0EQ9349-yrLX+4Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 09:46:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA	parameter cause internal error"</a>
<li><strong>Previous message:</strong> <a href="21616.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>In reply to:</strong> <a href="21616.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it looks like you have a heterogeneous system (i.e., a binary compiled on one server doesn't necessarily run properly on another server).
<br>
<p>In this case, you should see the heterogeneous section of the FAQ.
<br>
<p>Fair warning, though -- heterogeneous systems are more difficult to manage/maintain/use then homogeneous systems...
<br>
<p><p>On Mar 26, 2013, at 3:54 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It may be because the other system is running upgraded version of linux which is not having infiniband drivers. Any solution?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 26, 2013 at 12:42 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Tried this but mpirun exits with this error
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
<span class="quotelev1">&gt;   Process 1 ([[33095,1],28]) is on host: compute-02-00.private02.pakmet.com
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
<span class="quotelev1">&gt; On Mar 22, 2013, at 3:42 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually due to some data base corruption I am not able to add any new node to cluster from the installer node. So I want to run parallel job on more nodes without adding them to existing cluster.
</span><br>
<span class="quotelev2">&gt;&gt; You are right the binaries must be present on the remote node as well.
</span><br>
<span class="quotelev2">&gt;&gt; Is this possible throught nfs? just as the compute nodes are nfs mounted with the installer node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure - OMPI doesn't care how the binaries got there. Just so long as they are present on the compute node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Ahsan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 22, 2013 at 3:33 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 22.03.2013 um 10:14 schrieb Syed Ahsan Ali:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have a very basic question. If we want to run mpirun job on two systems which are not part of cluster, then how we can make it possible. Can the host be specifiend on mpirun which is not compute node, rather a stand alone system.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sure, the machines can be specified as argument to `mpiexec`. But do you want to run applications just between these two machines, or should they participate on a larger parallel job with machines of the cluster: then a direct network connection between outside and inside of the cluster is necessary by some kind of forwarding in case these are separated networks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also the paths to the started binaries may be different, in case the two machines are not sharing the same /home with the cluster and this needs to be honored.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In case you are using a queuing system and want to route jobs to outside machines of the set up cluster: it's necessary to negotiate with the admin to allow jobs being scheduled thereto.
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;  
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA	parameter cause internal error"</a>
<li><strong>Previous message:</strong> <a href="21616.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>In reply to:</strong> <a href="21616.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
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
