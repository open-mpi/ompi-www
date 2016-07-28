<?
$subject_val = "Re: [OMPI users] OpenMPI scaling &gt; 512 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 13:13:59 2008" -->
<!-- isoreceived="20080606171359" -->
<!-- sent="Fri, 6 Jun 2008 10:13:39 -0700" -->
<!-- isosent="20080606171339" -->
<!-- name="Scott Shaw" -->
<!-- email="sshaw_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI scaling &amp;gt; 512 cores" -->
<!-- id="FA0B6D7AD2F82E4EA22697EE4D9DE87131AA03_at_mtv-amer001e--3.americas.sgi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48470691.4020208_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Scott Shaw (<em>sshaw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-06 13:13:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5839.php">Patrick Geoffray: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5837.php">SLIM H.A.: "[OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5818.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you to all that replied regarding my questions.  
<br>
<p>I have tried all the options suggested but unfortunately I still run
<br>
into the same problem. I am at a point were I have exhausted all of the
<br>
options available with the OpenMPI v1.2.2 release and moving to v1.2.6
<br>
later today.  Hopefully mca_oob_tcp_peer_complete_connect handling is
<br>
better and resolves the &quot;connection failed: retrying&quot; messages when
<br>
running large core count jobs.
<br>
<p>Thanks!
<br>
Scott
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 04, 2008 5:18 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI scaling &gt; 512 cores
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scott Shaw wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi, I hope this is the right forum for my questions.  I am running
</span><br>
into
<br>
<span class="quotelev2">&gt; &gt; a problem when scaling &gt;512 cores on a infiniband cluster which has
</span><br>
<span class="quotelev2">&gt; &gt; 14,336 cores. I am new to openmpi and trying to figure out the right
</span><br>
<span class="quotelev2">&gt; &gt; -mca options to pass to avoid the
</span><br>
&quot;mca_oob_tcp_peer_complete_connect:
<br>
<span class="quotelev2">&gt; &gt; connection failed:&quot; on a cluster which has infiniband HCAs and OFED
</span><br>
<span class="quotelev2">&gt; &gt; v1.3GA release.  Other MPI implementation like Intel MPI and mvapich
</span><br>
<span class="quotelev2">&gt; &gt; work fine using uDAPL or VERBs IB layers for MPI communications.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Did you have chance to see this FAQ -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<a href="http://www.open-mpi.org/faq/?category=troubleshooting#large-job-tcp-oob">http://www.open-mpi.org/faq/?category=troubleshooting#large-job-tcp-oob</a>-
<br>
<span class="quotelev1">&gt; timeout
</span><br>
<span class="quotelev2">&gt; &gt; I find it difficult to understand which network interface or IB
</span><br>
layer
<br>
<span class="quotelev2">&gt; &gt; being used. When I explicitly state not to use eth0,lo,ib1, or ib1:0
</span><br>
<span class="quotelev2">&gt; &gt; interfaces with the cmdline option &quot;-mca oob_tcp_exclude&quot; openmpi
</span><br>
will
<br>
<span class="quotelev2">&gt; &gt; continue to probe these interfaces.  For all MPI traffic openmpi
</span><br>
should
<br>
<span class="quotelev2">&gt; &gt; use IB0 which is the 10.148 network. But with debugging enabled I
</span><br>
see
<br>
<span class="quotelev2">&gt; &gt; references trying the 10.149 network which is IB1.  Below is the
</span><br>
<span class="quotelev2">&gt; &gt; ifconfig network device output for a compute node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Questions:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Is there away to determine which network device is being used and
</span><br>
not
<br>
<span class="quotelev2">&gt; &gt; have openmpi fallback to another device? With Intel MPI or HP MPI
</span><br>
you
<br>
<span class="quotelev2">&gt; &gt; can state not to use a fallback device.  I thought &quot;-mca
</span><br>
<span class="quotelev2">&gt; &gt; oob_tcp_exclude&quot; would be the correct option to pass but I maybe
</span><br>
wrong.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; If you want to use the IB verbs , you may specify:
</span><br>
<span class="quotelev1">&gt; -mca btl sm.self,openib
</span><br>
<span class="quotelev1">&gt; sm - shmem
</span><br>
<span class="quotelev1">&gt; self - self comunication
</span><br>
<span class="quotelev1">&gt; openib - IB communication (IB verbs)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2. How can I determine infiniband openib device is actually being
</span><br>
used?
<br>
<span class="quotelev2">&gt; &gt; When running a MPI app I continue to see counters for in/out packets
</span><br>
at
<br>
<span class="quotelev2">&gt; &gt; a tcp level increasing when it should be using the IB RDMA device
</span><br>
for
<br>
<span class="quotelev2">&gt; &gt; all MPI comms over the IB0 or mtcha0 device? OpenMPI was bundled
</span><br>
with
<br>
<span class="quotelev2">&gt; &gt; OFED v1.3 so I am assuming the openib interface should work.
</span><br>
Running
<br>
<span class="quotelev2">&gt; &gt; ompi_info shows btl_open_* references.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/mpi/openmpi-1.2-2/intel/bin/mpiexec -mca
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_warn_default_gid_prefix 0 -mca oob_tcp_exclude
</span><br>
<span class="quotelev2">&gt; &gt; eth0,lo,ib1,ib1:0  -mca btl openib,sm,self -machinefile mpd.hosts.$$
</span><br>
-np
<br>
<span class="quotelev2">&gt; &gt; 1024 ~/bin/test_ompi &lt; input1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/05/5583.php">http://www.open-mpi.org/community/lists/users/2008/05/5583.php</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5839.php">Patrick Geoffray: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5837.php">SLIM H.A.: "[OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5818.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
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
