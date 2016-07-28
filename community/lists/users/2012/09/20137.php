<?
$subject_val = "Re: [OMPI users] Infiniband performance Problem and stalling";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 04:03:14 2012" -->
<!-- isoreceived="20120906080314" -->
<!-- sent="Thu, 06 Sep 2012 11:03:04 +0300" -->
<!-- isosent="20120906080304" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband performance Problem and stalling" -->
<!-- id="504858B8.3050202_at_dev.mellanox.co.il" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 04:03:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20138.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20136.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20021.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20147.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20147.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20148.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/3/2012 4:14 AM, Randolph Pullen wrote:
<br>
<span class="quotelev1">&gt; No RoCE, Just native IB with TCP over the top.
</span><br>
<p>Sorry, I'm confused - still not clear what is &quot;Melanox III HCA 10G card&quot;.
<br>
Could you run &quot;ibstat&quot; and post the results?
<br>
<p>What is the expected BW on your cards?
<br>
Could you run &quot;ib_write_bw&quot; between two machines?
<br>
<p>Also, please see below.
<br>
<p><span class="quotelev1">&gt; No I haven't used 1.6 I was trying to stick with the standards on the mellanox disk.
</span><br>
<span class="quotelev1">&gt; Is there a known problem with 1.4.3 ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* Yevgeny Kliteynik &lt;kliteyn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Sunday, 2 September 2012 10:54 PM
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Infiniband performance Problem and stalling
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Randolph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some clarification on the setup:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Melanox III HCA 10G cards&quot; - are those ConnectX 3 cards configured to Ethernet?
</span><br>
<span class="quotelev1">&gt; That is, when you're using openib BTL, you mean RoCE, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, have you had a chance to try some newer OMPI release?
</span><br>
<span class="quotelev1">&gt; Any 1.6.x would do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/31/2012 10:53 AM, Randolph Pullen wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; (reposted with consolidatedinformation)
</span><br>
<span class="quotelev2">&gt;  &gt; I have a test rig comprising 2 i7 systems 8GB RAM with Melanox III HCA 10G cards
</span><br>
<span class="quotelev2">&gt;  &gt; running Centos 5.7 Kernel 2.6.18-274
</span><br>
<span class="quotelev2">&gt;  &gt; Open MPI 1.4.3
</span><br>
<span class="quotelev2">&gt;  &gt; MLNX_OFED_LINUX-1.5.3-1.0.0.2 (OFED-1.5.3-1.0.0.2):
</span><br>
<span class="quotelev2">&gt;  &gt; On a Cisco 24 pt switch
</span><br>
<span class="quotelev2">&gt;  &gt; Normal performance is:
</span><br>
<span class="quotelev2">&gt;  &gt; $ mpirun --mca btl openib,self -n 2 -hostfile mpi.hosts PingPong
</span><br>
<span class="quotelev2">&gt;  &gt; results in:
</span><br>
<span class="quotelev2">&gt;  &gt; Max rate = 958.388867 MB/sec Min latency = 4.529953 usec
</span><br>
<span class="quotelev2">&gt;  &gt; and:
</span><br>
<span class="quotelev2">&gt;  &gt; $ mpirun --mca btl tcp,self -n 2 -hostfile mpi.hosts PingPong
</span><br>
<span class="quotelev2">&gt;  &gt; Max rate = 653.547293 MB/sec Min latency = 19.550323 usec
</span><br>
<span class="quotelev2">&gt;  &gt; NetPipeMPI results show a max of 7.4 Gb/s at 8388605 bytes which seems fine.
</span><br>
<span class="quotelev2">&gt;  &gt; log_num_mtt =20 and log_mtts_per_seg params =2
</span><br>
<span class="quotelev2">&gt;  &gt; My application exchanges about a gig of data between the processes with 2 sender and 2 consumer processes on each node with 1 additional controller process on the starting node.
</span><br>
<span class="quotelev2">&gt;  &gt; The program splits the data into 64K blocks and uses non blocking sends and receives with busy/sleep loops to monitor progress until completion.
</span><br>
<span class="quotelev2">&gt;  &gt; Each process owns a single buffer for these 64K blocks.
</span><br>
<span class="quotelev2">&gt;  &gt; My problem is I see better performance under IPoIB then I do on native IB (RDMA_CM).
</span><br>
<span class="quotelev2">&gt;  &gt; My understanding is that IPoIB is limited to about 1G/s so I am at a loss to know why it is faster.
</span><br>
<span class="quotelev2">&gt;  &gt; These 2 configurations are equivelant (about 8-10 seconds per cycle)
</span><br>
<span class="quotelev2">&gt;  &gt; mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog
</span><br>
<span class="quotelev2">&gt;  &gt; mpirun --mca btl_openib_flags 3 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog
</span><br>
<p>When you say &quot;--mca btl tcp,self&quot;, it means that openib btl is not enabled.
<br>
Hence &quot;--mca btl_openib_flags&quot; is irrelevant.
<br>
<p><span class="quotelev2">&gt;  &gt; And this one produces similar run times but seems to degrade with repeated cycles:
</span><br>
<span class="quotelev2">&gt;  &gt; mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog
</span><br>
<p>You're running 9 ranks on two machines, but you're using IB for intra-node communication.
<br>
Is it intentional? If not, you can add &quot;sm&quot; btl and have performance improved.
<br>
<p>-- YK
<br>
<p><span class="quotelev2">&gt;  &gt; Other btl_openib_flags settings result in much lower performance.
</span><br>
<span class="quotelev2">&gt;  &gt; Changing the first of the above configs to use openIB results in a 21 second run time at best. Sometimes it takes up to 5 minutes.
</span><br>
<span class="quotelev2">&gt;  &gt; In all cases, OpenIB runs in twice the time it takes TCP,except if I push the small message max to 64K and force short messages. Then the openib times are the same as TCP and no faster.
</span><br>
<span class="quotelev2">&gt;  &gt; With openib:
</span><br>
<span class="quotelev2">&gt;  &gt; - Repeated cycles during a single run seem to slow down with each cycle
</span><br>
<span class="quotelev2">&gt;  &gt; (usually by about 10 seconds).
</span><br>
<span class="quotelev2">&gt;  &gt; - On occasions it seems to stall indefinitely, waiting on a single receive.
</span><br>
<span class="quotelev2">&gt;  &gt; I'm still at a loss as to why. I can&#226;&#128;&#153;t find any errors logged during the runs.
</span><br>
<span class="quotelev2">&gt;  &gt; Any ideas appreciated.
</span><br>
<span class="quotelev2">&gt;  &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;  &gt; Randolph
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20138.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20136.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20021.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20147.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20147.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20148.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
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
