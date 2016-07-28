<?
$subject_val = "Re: [OMPI users] Infiniband performance Problem and stalling";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  7 01:27:25 2012" -->
<!-- isoreceived="20120907052725" -->
<!-- sent="Thu, 6 Sep 2012 22:27:19 -0700 (PDT)" -->
<!-- isosent="20120907052719" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband performance Problem and stalling" -->
<!-- id="1346995639.1822.YahooMailNeo_at_web121001.mail.ne1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="504858B8.3050202_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2012-09-07 01:27:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20149.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20147.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>In reply to:</strong> <a href="20137.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One system is actually an i5-2400 - maybe its&#194;&#160;throttling&#194;&#160;back on 2 cores to save power?
The other(I7) shows&#194;&#160;consistent&#194;&#160;CPU MHz on all cores


________________________________
 From: Yevgeny Kliteynik &lt;kliteyn_at_[hidden]&gt;
To: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;; OpenMPI Users &lt;users_at_[hidden]&gt; 
Sent: Thursday, 6 September 2012 6:03 PM
Subject: Re: [OMPI users] Infiniband performance Problem and stalling
 
On 9/3/2012 4:14 AM, Randolph Pullen wrote:
&gt; No RoCE, Just native IB with TCP over the top.

Sorry, I'm confused - still not clear what is &quot;Melanox III HCA 10G card&quot;.
Could you run &quot;ibstat&quot; and post the results?

What is the expected BW on your cards?
Could you run &quot;ib_write_bw&quot; between two machines?

Also, please see below.

&gt; No I haven't used 1.6 I was trying to stick with the standards on the mellanox disk.
&gt; Is there a known problem with 1.4.3 ?
&gt; 
&gt;
<br>
&nbsp;------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
------------------------
&gt; *From:* Yevgeny Kliteynik &lt;kliteyn_at_[hidden]&gt;
&gt; *To:* Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
&gt; *Sent:* Sunday, 2 September 2012 10:54 PM
&gt; *Subject:* Re: [OMPI users] Infiniband performance Problem and stalling
&gt; 
&gt; Randolph,
&gt; 
&gt; Some clarification on the setup:
&gt; 
&gt; &quot;Melanox III HCA 10G cards&quot; - are those ConnectX 3 cards configured to Ethernet?
&gt; That is, when you're using openib BTL, you mean RoCE, right?
&gt; 
&gt; Also, have you had a chance to try some newer OMPI release?
&gt; Any 1.6.x would do.
&gt; 
&gt; 
&gt; -- YK
&gt; 
&gt; On 8/31/2012 10:53 AM, Randolph Pullen wrote:
&gt;&#194;&#160; &gt; (reposted with consolidatedinformation)
&gt;&#194;&#160; &gt; I have a test rig comprising 2 i7 systems 8GB RAM with Melanox III HCA 10G cards
&gt;&#194;&#160; &gt; running Centos 5.7 Kernel 2.6.18-274
&gt;&#194;&#160; &gt; Open MPI 1.4.3
&gt;&#194;&#160; &gt; MLNX_OFED_LINUX-1.5.3-1.0.0.2 (OFED-1.5.3-1.0.0.2):
&gt;&#194;&#160; &gt; On a Cisco 24 pt switch
&gt;&#194;&#160; &gt; Normal performance is:
&gt;&#194;&#160; &gt; $ mpirun --mca btl openib,self -n 2 -hostfile mpi.hosts PingPong
&gt;&#194;&#160; &gt; results in:
&gt;&#194;&#160; &gt; Max rate = 958.388867 MB/sec Min latency = 4.529953 usec
&gt;&#194;&#160; &gt; and:
&gt;&#194;&#160; &gt; $ mpirun --mca btl tcp,self -n 2 -hostfile mpi.hosts PingPong
&gt;&#194;&#160; &gt; Max rate = 653.547293 MB/sec Min latency = 19.550323 usec
&gt;&#194;&#160; &gt; NetPipeMPI results show a max of 7.4 Gb/s at 8388605 bytes which seems fine.
&gt;&#194;&#160; &gt; log_num_mtt =20 and log_mtts_per_seg params =2
&gt;&#194;&#160; &gt; My application exchanges about a gig of data between the processes with 2 sender and 2 consumer processes on each node with 1 additional controller process on the starting node.
&gt;&#194;&#160; &gt; The program splits the data into 64K blocks and uses non blocking sends and receives with busy/sleep loops to monitor progress until completion.
&gt;&#194;&#160; &gt; Each process owns a single buffer for these 64K blocks.
&gt;&#194;&#160; &gt; My problem is I see better performance under IPoIB then I do on native IB (RDMA_CM).
&gt;&#194;&#160; &gt; My understanding is that IPoIB is limited to about 1G/s so I am at a loss to know why it is faster.
&gt;&#194;&#160; &gt; These 2 configurations are equivelant (about 8-10 seconds per cycle)
&gt;&#194;&#160; &gt; mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog
&gt;&#194;&#160; &gt; mpirun --mca btl_openib_flags 3 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog

When you say &quot;--mca btl tcp,self&quot;, it means that openib btl is not enabled.
Hence &quot;--mca btl_openib_flags&quot; is irrelevant.

&gt;&#194;&#160; &gt; And this one produces similar run times but seems to degrade with repeated cycles:
&gt;&#194;&#160; &gt; mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog

You're running 9 ranks on two machines, but you're using IB for intra-node communication.
Is it intentional? If not, you can add &quot;sm&quot; btl and have performance improved.

-- YK

&gt;&#194;&#160; &gt; Other btl_openib_flags settings result in much lower performance.
&gt;&#194;&#160; &gt; Changing the first of the above configs to use openIB results in a 21 second run time at best. Sometimes it takes up to 5 minutes.
&gt;&#194;&#160; &gt; In all cases, OpenIB runs in twice the time it takes TCP,except if I push the small message max to 64K and force short messages. Then the openib times are the same as TCP and no faster.
&gt;&#194;&#160; &gt; With openib:
&gt;&#194;&#160; &gt; - Repeated cycles during a single run seem to slow down with each cycle
&gt;&#194;&#160; &gt; (usually by about 10 seconds).
&gt;&#194;&#160; &gt; - On occasions it seems to stall indefinitely, waiting on a single receive.
&gt;&#194;&#160; &gt; I'm still at a loss as to why. I can&#226;&#128;&#153;t find any errors logged during the runs.
&gt;&#194;&#160; &gt; Any ideas appreciated.
&gt;&#194;&#160; &gt; Thanks in advance,
&gt;&#194;&#160; &gt; Randolph
&gt;&#194;&#160; &gt;
&gt;&#194;&#160; &gt;
&gt;&#194;&#160; &gt; _______________________________________________
&gt;&#194;&#160; &gt; users mailing list
&gt;&#194;&#160; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;&#194;&#160; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20148/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20149.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20147.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>In reply to:</strong> <a href="20137.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
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
