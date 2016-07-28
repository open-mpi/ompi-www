<?
$subject_val = "Re: [OMPI users] orte has lost communication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 04:12:01 2016" -->
<!-- isoreceived="20160412081201" -->
<!-- sent="Tue, 12 Apr 2016 17:11:59 +0900" -->
<!-- isosent="20160412081159" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte has lost communication" -->
<!-- id="570CADCF.9050206_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20160412073704.GY1487_at_woyzeck" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte has lost communication<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-12 04:11:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28924.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Previous message:</strong> <a href="28922.php">Stefan Friedel: "[OMPI users] orte has lost communication"</a>
<li><strong>In reply to:</strong> <a href="28922.php">Stefan Friedel: "[OMPI users] orte has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28924.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Reply:</strong> <a href="28924.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Stefan,
<br>
<p>which version of OpenMPI are you using ?
<br>
<p>when does the error occur ?
<br>
is it before MPI_Init() completes ?
<br>
is it in the middle of the job ? if yes, are you sure no task invoked 
<br>
MPI_Abort() ?
<br>
<p>also, you might want to check the system logs and make sure there was no 
<br>
OOM (Out Of Memory).
<br>
a possible explanation could be some tasks caused OOM, and the OOM 
<br>
killer chose to kill orted instead of a.out
<br>
<p>if you cannot access your system log, you can try with a large number of 
<br>
nodes, and one mpi task per node, and then increase the number of tasks 
<br>
per node and see if problem starts happening.
<br>
<p>of course, you can try
<br>
mpirun --mca oob_tcp_if_include eth0 ...
<br>
to be on the safe side
<br>
<p>you can also try to run your application over TCP and see if it helps
<br>
(note, the issue might be hidden since TCP is much slower than native PSM)
<br>
<p>mpirun --mca btl tcp,vader,self --mca btl_tcp_if_include eth0 ...
<br>
or
<br>
mpirun --mca btl tcp,vader,self --mca btl_tcp_if_include ib0 ...
<br>
<p>/* feel free to replace vader with sm, if vader is not available on your 
<br>
system */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 4/12/2016 4:37 PM, Stefan Friedel wrote:
<br>
<span class="quotelev1">&gt; Good Morning List,
</span><br>
<span class="quotelev1">&gt; we have a problem on our cluster with bigger jobs (~&gt; 200 nodes) -
</span><br>
<span class="quotelev1">&gt; almost every job ends with a message like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ###################
</span><br>
<span class="quotelev1">&gt; Starting at Mon Apr 11 15:54:06 CEST 2016
</span><br>
<span class="quotelev1">&gt; Running on hosts: stek[034-086,088-201,203-247,249-344,346-379,381-388]
</span><br>
<span class="quotelev1">&gt; Running on 350 nodes.
</span><br>
<span class="quotelev1">&gt; Current working directory is /export/homelocal/sfriedel/beff
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ORTE has lost communication with its daemon located on node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hostname:  stek346=20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is usually due to either a failure of the TCP network
</span><br>
<span class="quotelev1">&gt; connection to the node, or possibly an internal failure of
</span><br>
<span class="quotelev1">&gt; the daemon itself. We cannot recover from this failure, and
</span><br>
<span class="quotelev1">&gt; therefore will terminate the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev1">&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev1">&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev1">&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev1">&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev1">&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program finished with exit code 0 at: Mon Apr 11 15:54:41 CEST 2016
</span><br>
<span class="quotelev1">&gt; ##########################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found a similar question on the list by Emyr James (2015-10-01) but
</span><br>
<span class="quotelev1">&gt; nobody answered until now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cluster: Dual-Intel Xeon E5-2630 v3 Haswell, Intel/Qlogic Truescale IB 
</span><br>
<span class="quotelev1">&gt; QDR,
</span><br>
<span class="quotelev1">&gt; Debian Jessie 3.16.0-4-amd64 #1 SMP Debian 3.16.7-ckt11-1+deb8u2,
</span><br>
<span class="quotelev1">&gt; openmpi-1.10.2, slurm-15.08.9; homes mounted via NFS/RDMA/ipoib, mpi 
</span><br>
<span class="quotelev1">&gt; messages
</span><br>
<span class="quotelev1">&gt; over psm/IB + 1G Ethernet (Mgmt, pxe boot, ssh, openmpi tcp network etc.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jobs are started via slurm sbatch/script (mpirun --mca mtl psm 
</span><br>
<span class="quotelev1">&gt; ~/path/to/binary)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Already tested:
</span><br>
<span class="quotelev1">&gt; *several mca settings (in ...many... combinations)
</span><br>
<span class="quotelev1">&gt; mtl_psm_connect_timeout 600
</span><br>
<span class="quotelev1">&gt; oob_tcp_keepalive_time 600
</span><br>
<span class="quotelev1">&gt; oob_tcp_if_include eth0
</span><br>
<span class="quotelev1">&gt; oob_tcp_listen_mode listen_thread=20
</span><br>
<span class="quotelev1">&gt; oob_tcp_keepalive_time 600
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *several network/sysctl settings (in ...many... combinations)
</span><br>
<span class="quotelev1">&gt; /sbin/sysctl -w net.core.somaxconn=3D20000
</span><br>
<span class="quotelev1">&gt; /sbin/sysctl -w net.core.netdev_max_backlog=3D200000
</span><br>
<span class="quotelev1">&gt; /sbin/sysctl -w net.ipv4.tcp_max_syn_backlog=3D102400
</span><br>
<span class="quotelev1">&gt; /sbin/sysctl -w net.ipv4.ip_local_port_range=3D&quot;15000 61000&quot;
</span><br>
<span class="quotelev1">&gt; /sbin/sysctl -w net.ipv4.tcp_fin_timeout=3D10
</span><br>
<span class="quotelev1">&gt; /sbin/sysctl -w net.ipv4.tcp_tw_recycle=3D1
</span><br>
<span class="quotelev1">&gt; /sbin/sysctl -w net.ipv4.tcp_tw_reuse=3D1
</span><br>
<span class="quotelev1">&gt; /sbin/sysctl -w net.ipv4.tcp_mem=3D&quot;383865   511820   2303190&quot;
</span><br>
<span class="quotelev1">&gt; echo 20000500 &gt; /proc/sys/fs/nr_open
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *ulimit stuff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Routing on the nodes: two private networks 10.203.0.0/22 eth0 and 
</span><br>
<span class="quotelev1">&gt; 10.203.40.0/22
</span><br>
<span class="quotelev1">&gt; ib0, both with their routes, no default route.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I start the job with debugging/logging (--mca oob_tcp_debug 5 --mca
</span><br>
<span class="quotelev1">&gt; oob_base_verbose 8) it takes much longer until the error occurs and 
</span><br>
<span class="quotelev1">&gt; the job is
</span><br>
<span class="quotelev1">&gt; starting on the nodes (producing some timesteps of output) but it will 
</span><br>
<span class="quotelev1">&gt; fail at
</span><br>
<span class="quotelev1">&gt; some later point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any hint? PSM? Some kernel number must be increased?  Wrong 
</span><br>
<span class="quotelev1">&gt; network/routing
</span><br>
<span class="quotelev1">&gt; (should not happen with --mca oob_tcp_if_include eth0)??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MfG/Sincerely
</span><br>
<span class="quotelev1">&gt; Stefan Friedel
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; IWR * 4.317 * INF205 * 69120 Heidelberg
</span><br>
<span class="quotelev1">&gt; T +49 6221 5414404 * F +49 6221 5414427
</span><br>
<span class="quotelev1">&gt; stefan.friedel_at_[hidden]
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28922.php">http://www.open-mpi.org/community/lists/users/2016/04/28922.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28923/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28924.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Previous message:</strong> <a href="28922.php">Stefan Friedel: "[OMPI users] orte has lost communication"</a>
<li><strong>In reply to:</strong> <a href="28922.php">Stefan Friedel: "[OMPI users] orte has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28924.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Reply:</strong> <a href="28924.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
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
