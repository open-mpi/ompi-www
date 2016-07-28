<?
$subject_val = "Re: [OMPI users] Infiniband performance Problem and stalling";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  2 22:25:21 2012" -->
<!-- isoreceived="20120903022521" -->
<!-- sent="Sun, 2 Sep 2012 19:25:15 -0700 (PDT)" -->
<!-- isosent="20120903022515" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband performance Problem and stalling" -->
<!-- id="1346639115.11949.YahooMailNeo_at_web121004.mail.ne1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1346634865.89974.YahooMailNeo_at_web121005.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-02 22:25:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20101.php">Siegmar Gross: "[OMPI users] delimiter in appfile"</a>
<li><strong>Previous message:</strong> <a href="20099.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20021.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20137.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No RoCE, Just native IB with TCP over the top.



No I haven't used 1.6 I was trying to stick with the standards on the mellanox disk.
Is there a known problem with 1.4.3 ?


________________________________
 From: Yevgeny Kliteynik &lt;kliteyn_at_[hidden]&gt;
To: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Sunday, 2 September 2012 10:54 PM
Subject: Re: [OMPI users] Infiniband performance Problem and stalling
 
Randolph,

Some clarification on the setup:

&quot;Melanox III HCA 10G
 cards&quot; - are those ConnectX 3 cards configured to Ethernet?
That is, when you're using openib BTL, you mean RoCE, right?

Also, have you had a chance to try some newer OMPI release?
Any 1.6.x would do.


-- YK

On 8/31/2012 10:53 AM, Randolph Pullen wrote:
&gt; (reposted with consolidatedinformation)
&gt; I have a test rig comprising 2 i7 systems 8GB RAM with Melanox III HCA 10G cards
&gt; running Centos 5.7 Kernel 2.6.18-274
&gt; Open MPI 1.4.3
&gt; MLNX_OFED_LINUX-1.5.3-1.0.0.2 (OFED-1.5.3-1.0.0.2):
&gt; On a Cisco 24 pt switch
&gt; Normal performance is:
&gt; $ mpirun --mca btl openib,self -n 2 -hostfile mpi.hosts PingPong
&gt; results in:
&gt; Max rate = 958.388867 MB/sec Min latency = 4.529953 usec
&gt; and:
&gt; $ mpirun --mca btl tcp,self -n 2 -hostfile mpi.hosts PingPong
&gt; Max rate = 653.547293 MB/sec Min latency = 19.550323 usec
&gt; NetPipeMPI results show a max of 7.4
 Gb/s at 8388605 bytes which seems fine.
&gt; log_num_mtt =20 and log_mtts_per_seg params =2
&gt; My application exchanges about a gig of data between the processes with 2 sender and 2 consumer processes on each node with 1 additional controller process on the starting node.
&gt; The program splits the data into 64K blocks and uses non blocking sends and receives with busy/sleep loops to monitor progress until completion.
&gt; Each process owns a single buffer for these 64K blocks.
&gt; My problem is I see better performance under IPoIB then I do on native IB (RDMA_CM).
&gt; My understanding is that IPoIB is limited to about 1G/s so I am at a loss to know why it is faster.
&gt; These 2 configurations are equivelant (about 8-10 seconds per cycle)
&gt; mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog
&gt; mpirun --mca btl_openib_flags 3 --mca mpi_leave_pinned 1 --mca btl
 tcp,self -H vh2,vh1 -np 9 --bycore prog
&gt; And this one produces similar run times but seems to degrade with repeated cycles:
&gt; mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog
&gt; Other btl_openib_flags settings result in much lower performance.
&gt; Changing the first of the above configs to use openIB results in a 21 second run time at best. Sometimes it takes up to 5 minutes.
&gt; In all cases, OpenIB runs in twice the time it takes TCP,except if I push the small message max to 64K and force short messages. Then the openib times are the same as TCP and no faster.
&gt; With openib:
&gt; - Repeated cycles during a single run seem to slow down with each cycle
&gt; (usually by about 10 seconds).
&gt; - On occasions it seems to stall indefinitely, waiting on a single receive.
&gt; I'm still at a loss as to why. I can&#226;&#128;&#153;t find any errors logged during
 the runs.
&gt; Any ideas appreciated.
&gt; Thanks in advance,
&gt; Randolph
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20100/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20101.php">Siegmar Gross: "[OMPI users] delimiter in appfile"</a>
<li><strong>Previous message:</strong> <a href="20099.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20021.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20137.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
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
