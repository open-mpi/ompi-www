<?
$subject_val = "Re: [OMPI users] Infiniband performance Problem and stalling";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  2 08:54:42 2012" -->
<!-- isoreceived="20120902125442" -->
<!-- sent="Sun, 02 Sep 2012 15:54:35 +0300" -->
<!-- isosent="20120902125435" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband performance Problem and stalling" -->
<!-- id="5043570B.7030400_at_dev.mellanox.co.il" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1346399582.58899.YahooMailNeo_at_web121002.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband performance Problem and stalling<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-02 08:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20100.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20098.php">Reuti: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20079.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Randolph,
<br>
<p>Some clarification on the setup:
<br>
<p>&quot;Melanox III HCA 10G cards&quot; - are those ConnectX 3 cards configured to Ethernet?
<br>
That is, when you're using openib BTL, you mean RoCE, right?
<br>
<p>Also, have you had a chance to try some newer OMPI release?
<br>
Any 1.6.x would do.
<br>
<p><p>-- YK
<br>
<p>On 8/31/2012 10:53 AM, Randolph Pullen wrote:
<br>
<span class="quotelev1">&gt; (reposted with consolidatedinformation)
</span><br>
<span class="quotelev1">&gt; I have a test rig comprising 2 i7 systems 8GB RAM with Melanox III HCA 10G cards
</span><br>
<span class="quotelev1">&gt; running Centos 5.7 Kernel 2.6.18-274
</span><br>
<span class="quotelev1">&gt; Open MPI 1.4.3
</span><br>
<span class="quotelev1">&gt; MLNX_OFED_LINUX-1.5.3-1.0.0.2 (OFED-1.5.3-1.0.0.2):
</span><br>
<span class="quotelev1">&gt; On a Cisco 24 pt switch
</span><br>
<span class="quotelev1">&gt; Normal performance is:
</span><br>
<span class="quotelev1">&gt; $ mpirun --mca btl openib,self -n 2 -hostfile mpi.hosts PingPong
</span><br>
<span class="quotelev1">&gt; results in:
</span><br>
<span class="quotelev1">&gt; Max rate = 958.388867 MB/sec Min latency = 4.529953 usec
</span><br>
<span class="quotelev1">&gt; and:
</span><br>
<span class="quotelev1">&gt; $ mpirun --mca btl tcp,self -n 2 -hostfile mpi.hosts PingPong
</span><br>
<span class="quotelev1">&gt; Max rate = 653.547293 MB/sec Min latency = 19.550323 usec
</span><br>
<span class="quotelev1">&gt; NetPipeMPI results show a max of 7.4 Gb/s at 8388605 bytes which seems fine.
</span><br>
<span class="quotelev1">&gt; log_num_mtt =20 and log_mtts_per_seg params =2
</span><br>
<span class="quotelev1">&gt; My application exchanges about a gig of data between the processes with 2 sender and 2 consumer processes on each node with 1 additional controller process on the starting node.
</span><br>
<span class="quotelev1">&gt; The program splits the data into 64K blocks and uses non blocking sends and receives with busy/sleep loops to monitor progress until completion.
</span><br>
<span class="quotelev1">&gt; Each process owns a single buffer for these 64K blocks.
</span><br>
<span class="quotelev1">&gt; My problem is I see better performance under IPoIB then I do on native IB (RDMA_CM).
</span><br>
<span class="quotelev1">&gt; My understanding is that IPoIB is limited to about 1G/s so I am at a loss to know why it is faster.
</span><br>
<span class="quotelev1">&gt; These 2 configurations are equivelant (about 8-10 seconds per cycle)
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_openib_flags 3 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog
</span><br>
<span class="quotelev1">&gt; And this one produces similar run times but seems to degrade with repeated cycles:
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog
</span><br>
<span class="quotelev1">&gt; Other btl_openib_flags settings result in much lower performance.
</span><br>
<span class="quotelev1">&gt; Changing the first of the above configs to use openIB results in a 21 second run time at best. Sometimes it takes up to 5 minutes.
</span><br>
<span class="quotelev1">&gt; In all cases, OpenIB runs in twice the time it takes TCP,except if I push the small message max to 64K and force short messages. Then the openib times are the same as TCP and no faster.
</span><br>
<span class="quotelev1">&gt; With openib:
</span><br>
<span class="quotelev1">&gt; - Repeated cycles during a single run seem to slow down with each cycle
</span><br>
<span class="quotelev1">&gt; (usually by about 10 seconds).
</span><br>
<span class="quotelev1">&gt; - On occasions it seems to stall indefinitely, waiting on a single receive.
</span><br>
<span class="quotelev1">&gt; I'm still at a loss as to why. I can&#146;t find any errors logged during the runs.
</span><br>
<span class="quotelev1">&gt; Any ideas appreciated.
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Randolph
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
<li><strong>Next message:</strong> <a href="20100.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20098.php">Reuti: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20079.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
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
