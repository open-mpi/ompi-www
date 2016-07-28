<?
$subject_val = "Re: [OMPI users] OpenMPI scaling &gt; 512 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 17:18:20 2008" -->
<!-- isoreceived="20080604211820" -->
<!-- sent="Thu, 05 Jun 2008 00:18:09 +0300" -->
<!-- isosent="20080604211809" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI scaling &amp;gt; 512 cores" -->
<!-- id="48470691.4020208_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FA0B6D7AD2F82E4EA22697EE4D9DE87131A295_at_mtv-amer001e-3.americas.sgi.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI scaling &gt; 512 cores<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 17:18:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5819.php">Cally K: "Re: [OMPI users] --bynode vs --byslot"</a>
<li><strong>Previous message:</strong> <a href="5817.php">Allen Barnett: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>In reply to:</strong> <a href="5781.php">Scott Shaw: "[OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5838.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Reply:</strong> <a href="5838.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scott Shaw wrote:
<br>
<span class="quotelev1">&gt; Hi, I hope this is the right forum for my questions.  I am running into
</span><br>
<span class="quotelev1">&gt; a problem when scaling &gt;512 cores on a infiniband cluster which has
</span><br>
<span class="quotelev1">&gt; 14,336 cores. I am new to openmpi and trying to figure out the right
</span><br>
<span class="quotelev1">&gt; -mca options to pass to avoid the &quot;mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connection failed:&quot; on a cluster which has infiniband HCAs and OFED
</span><br>
<span class="quotelev1">&gt; v1.3GA release.  Other MPI implementation like Intel MPI and mvapich
</span><br>
<span class="quotelev1">&gt; work fine using uDAPL or VERBs IB layers for MPI communications.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Did you have chance to see this FAQ - 
<br>
<a href="http://www.open-mpi.org/faq/?category=troubleshooting#large-job-tcp-oob-timeout">http://www.open-mpi.org/faq/?category=troubleshooting#large-job-tcp-oob-timeout</a>
<br>
<span class="quotelev1">&gt; I find it difficult to understand which network interface or IB layer
</span><br>
<span class="quotelev1">&gt; being used. When I explicitly state not to use eth0,lo,ib1, or ib1:0
</span><br>
<span class="quotelev1">&gt; interfaces with the cmdline option &quot;-mca oob_tcp_exclude&quot; openmpi will
</span><br>
<span class="quotelev1">&gt; continue to probe these interfaces.  For all MPI traffic openmpi should
</span><br>
<span class="quotelev1">&gt; use IB0 which is the 10.148 network. But with debugging enabled I see
</span><br>
<span class="quotelev1">&gt; references trying the 10.149 network which is IB1.  Below is the
</span><br>
<span class="quotelev1">&gt; ifconfig network device output for a compute node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Is there away to determine which network device is being used and not
</span><br>
<span class="quotelev1">&gt; have openmpi fallback to another device? With Intel MPI or HP MPI you
</span><br>
<span class="quotelev1">&gt; can state not to use a fallback device.  I thought &quot;-mca
</span><br>
<span class="quotelev1">&gt; oob_tcp_exclude&quot; would be the correct option to pass but I maybe wrong. 
</span><br>
<span class="quotelev1">&gt;   
</span><br>
If you want to use the IB verbs , you may specify:
<br>
-mca btl sm.self,openib
<br>
sm - shmem
<br>
self - self comunication
<br>
openib - IB communication (IB verbs)
<br>
<p><span class="quotelev1">&gt; 2. How can I determine infiniband openib device is actually being used?
</span><br>
<span class="quotelev1">&gt; When running a MPI app I continue to see counters for in/out packets at
</span><br>
<span class="quotelev1">&gt; a tcp level increasing when it should be using the IB RDMA device for
</span><br>
<span class="quotelev1">&gt; all MPI comms over the IB0 or mtcha0 device? OpenMPI was bundled with
</span><br>
<span class="quotelev1">&gt; OFED v1.3 so I am assuming the openib interface should work.  Running
</span><br>
<span class="quotelev1">&gt; ompi_info shows btl_open_* references. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/openmpi-1.2-2/intel/bin/mpiexec -mca
</span><br>
<span class="quotelev1">&gt; btl_openib_warn_default_gid_prefix 0 -mca oob_tcp_exclude
</span><br>
<span class="quotelev1">&gt; eth0,lo,ib1,ib1:0  -mca btl openib,sm,self -machinefile mpd.hosts.$$ -np
</span><br>
<span class="quotelev1">&gt; 1024 ~/bin/test_ompi &lt; input1
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2008/05/5583.php">http://www.open-mpi.org/community/lists/users/2008/05/5583.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5819.php">Cally K: "Re: [OMPI users] --bynode vs --byslot"</a>
<li><strong>Previous message:</strong> <a href="5817.php">Allen Barnett: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>In reply to:</strong> <a href="5781.php">Scott Shaw: "[OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5838.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Reply:</strong> <a href="5838.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
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
