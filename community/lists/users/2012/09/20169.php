<?
$subject_val = "Re: [OMPI users] Infiniband performance Problem and stalling";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 07:12:00 2012" -->
<!-- isoreceived="20120910111200" -->
<!-- sent="Mon, 10 Sep 2012 14:11:49 +0300" -->
<!-- isosent="20120910111149" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband performance Problem and stalling" -->
<!-- id="504DCAF5.2070004_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1347247935.48415.YahooMailNeo_at_web121001.mail.ne1.yahoo.com" -->
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
<strong>Date:</strong> 2012-09-10 07:11:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20170.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20168.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>In reply to:</strong> <a href="20168.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20186.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20186.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Randolph,
<br>
<p>So what you saying in short, leaving all the numbers aside, is the following:
<br>
In your particular application on your particular setup with this particular OMPI version,
<br>
&nbsp;1. openib BTL performs faster than shared memory BTL
<br>
&nbsp;2. TCP BTL performs faster than shared memory
<br>
<p>IMHO, this indicates that you have some problem on your machines,
<br>
and this problem is unrelated to interconnect.
<br>
<p>Shared memory should be much faster than IB, not to mention IPoIB.
<br>
<p>Could you run these two commands?
<br>
<p>&nbsp;mpirun --mca btl tcp,self    -H vh2,vh1 -np 9 --bycore prog
<br>
&nbsp;mpirun --mca btl tcp,self,sm -H vh2,vh1 -np 9 --bycore prog
<br>
<p>You will probably see better number w/o sm.
<br>
Why? Don't know.
<br>
<p>Perhaps someone who has better knowledge in sm BTL can elaborate?
<br>
<p>-- YK
<br>
<p><p>On 9/10/2012 6:32 AM, Randolph Pullen wrote:
<br>
<span class="quotelev1">&gt; See my comments in line...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* Yevgeny Kliteynik &lt;kliteyn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Cc:* OpenMPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Sunday, 9 September 2012 6:18 PM
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Infiniband performance Problem and stalling
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Randolph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/7/2012 7:43 AM, Randolph Pullen wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; Yevgeny,
</span><br>
<span class="quotelev2">&gt;  &gt; The ibstat results:
</span><br>
<span class="quotelev2">&gt;  &gt; CA 'mthca0'
</span><br>
<span class="quotelev2">&gt;  &gt; CA type: MT25208 (MT23108 compat mode)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What you have is InfiniHost III HCA, which is 4x SDR card.
</span><br>
<span class="quotelev1">&gt; This card has theoretical peak of 10 Gb/s, which is 1GB/s in IB bit coding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; And more interestingly, ib_write_bw:
</span><br>
<span class="quotelev2">&gt;  &gt; Conflicting CPU frequency values detected: 1600.000000 != 3301.000000
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; What does Conflicting CPU frequency values mean?
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Examining the /proc/cpuinfo file however shows:
</span><br>
<span class="quotelev2">&gt;  &gt; processor : 0
</span><br>
<span class="quotelev2">&gt;  &gt; cpu MHz : 3301.000
</span><br>
<span class="quotelev2">&gt;  &gt; processor : 1
</span><br>
<span class="quotelev2">&gt;  &gt; cpu MHz : 3301.000
</span><br>
<span class="quotelev2">&gt;  &gt; processor : 2
</span><br>
<span class="quotelev2">&gt;  &gt; cpu MHz : 1600.000
</span><br>
<span class="quotelev2">&gt;  &gt; processor : 3
</span><br>
<span class="quotelev2">&gt;  &gt; cpu MHz : 1600.000
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Which seems oddly wierd to me...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need to have all the cores running at highest clock to get better numbers.
</span><br>
<span class="quotelev1">&gt; May be you have power governor not set to optimal performance on these machines.
</span><br>
<span class="quotelev1">&gt; Google for &quot;Linux CPU scaling governor&quot; to get more info on this subject, or
</span><br>
<span class="quotelev1">&gt; contact your system admin and ask him to take care of the CPU frequencies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once this is done, check all the pairs of your machines - ensure that you get
</span><br>
<span class="quotelev1">&gt; a good number with ib_write_br.
</span><br>
<span class="quotelev1">&gt; Note that if you have a slower machine in the cluster, general application
</span><br>
<span class="quotelev1">&gt; performance will suffer from this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have anchored the clocks speeds to:
</span><br>
<span class="quotelev1">&gt; [root_at_vh1 ~]# cat /sys/devices/system/cpu/*/cpufreq/cpuinfo_cur_freq
</span><br>
<span class="quotelev1">&gt; 3600000
</span><br>
<span class="quotelev1">&gt; 3600000
</span><br>
<span class="quotelev1">&gt; 3600000
</span><br>
<span class="quotelev1">&gt; 3600000
</span><br>
<span class="quotelev1">&gt; 3600000
</span><br>
<span class="quotelev1">&gt; 3600000
</span><br>
<span class="quotelev1">&gt; 3600000
</span><br>
<span class="quotelev1">&gt; 3600000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_vh2 ~]# cat /sys/devices/system/cpu/*/cpufreq/cpuinfo_cur_freq
</span><br>
<span class="quotelev1">&gt; 3200000
</span><br>
<span class="quotelev1">&gt; 3200000
</span><br>
<span class="quotelev1">&gt; 3200000
</span><br>
<span class="quotelev1">&gt; 3200000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However /proc/cpuinfo still reports them incorrectly
</span><br>
<span class="quotelev1">&gt; [deepcloud_at_vh2 c]$ grep MHz /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; cpu MHz : 3300.000
</span><br>
<span class="quotelev1">&gt; cpu MHz : 1600.000
</span><br>
<span class="quotelev1">&gt; cpu MHz : 1600.000
</span><br>
<span class="quotelev1">&gt; cpu MHz : 1600.000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think this is the problem, so I used -F option in ib_write_bw to push ahead. ie;
</span><br>
<span class="quotelev1">&gt; [deepcloud_at_vh2 c]$ ib_write_bw -F vh1
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; RDMA_Write BW Test
</span><br>
<span class="quotelev1">&gt; Number of qps : 1
</span><br>
<span class="quotelev1">&gt; Connection type : RC
</span><br>
<span class="quotelev1">&gt; TX depth : 300
</span><br>
<span class="quotelev1">&gt; CQ Moderation : 50
</span><br>
<span class="quotelev1">&gt; Link type : IB
</span><br>
<span class="quotelev1">&gt; Mtu : 2048
</span><br>
<span class="quotelev1">&gt; Inline data is used up to 0 bytes message
</span><br>
<span class="quotelev1">&gt; local address: LID 0x04 QPN 0xaa0408 PSN 0xf9c072 RKey 0x59260052 VAddr 0x002b03a8af3000
</span><br>
<span class="quotelev1">&gt; remote address: LID 0x03 QPN 0x8b0408 PSN 0xe4890d RKey 0x4a62003c VAddr 0x002b8e44297000
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #bytes #iterations BW peak[MB/sec] BW average[MB/sec]
</span><br>
<span class="quotelev1">&gt; Conflicting CPU frequency values detected: 3300.000000 != 1600.000000
</span><br>
<span class="quotelev1">&gt; Test integrity may be harmed !
</span><br>
<span class="quotelev1">&gt; Conflicting CPU frequency values detected: 3300.000000 != 1600.000000
</span><br>
<span class="quotelev1">&gt; Test integrity may be harmed !
</span><br>
<span class="quotelev1">&gt; Conflicting CPU frequency values detected: 3300.000000 != 1600.000000
</span><br>
<span class="quotelev1">&gt; Test integrity may be harmed !
</span><br>
<span class="quotelev1">&gt; Warning: measured timestamp frequency 3092.95 differs from nominal 3300 MHz
</span><br>
<span class="quotelev1">&gt; 65536 5000 937.61 937.60
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; On 8/31/2012 10:53 AM, Randolph Pullen wrote:*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; (reposted with consolidatedinformation)*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; I have a test rig comprising 2 i7 systems 8GB RAM with Melanox III HCA 10G cards*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; running Centos 5.7 Kernel 2.6.18-274*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; Open MPI 1.4.3*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; MLNX_OFED_LINUX-1.5.3-1.0.0.2 (OFED-1.5.3-1.0.0.2):*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; On a Cisco 24 pt switch*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; Normal performance is:*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; $ mpirun --mca btl openib,self -n 2 -hostfile mpi.hosts PingPong*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; results in:*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; Max rate = 958.388867 MB/sec Min latency = 4.529953 usec*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; and:*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; $ mpirun --mca btl tcp,self -n 2 -hostfile mpi.hosts PingPong*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; Max rate = 653.547293 MB/sec Min latency = 19.550323 usec*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *These numbers look fine - 958 MB/s on IB is close to theoretical limit.*
</span><br>
<span class="quotelev1">&gt; *654 MB/s for IPoIB look fine too.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; My problem is I see better performance under IPoIB then I do on native IB (RDMA_CM).*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *I don't see this in your numbers. What do I miss?*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Runs in 9 seconds:
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Runs in 24 seconds or more:
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl openib,self,sm -H vh2,vh1 -np 9 --bycore prog
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self,sm -H vh2,vh1 -np 9 --bycore prog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note:
</span><br>
<span class="quotelev1">&gt; - adding sm to the fastest openib run results in a 13 second penalty
</span><br>
<span class="quotelev1">&gt; - Subsequent runs with openib usually add at least 10 seconds per run or stall
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; My understanding is that IPoIB is limited to about 1G/s so I am at a loss to know why it is faster.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Again, I see IPoIB performance under 1 GB/s.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; And this one produces similar run times but seems to degrade with repeated cycles:*
</span><br>
<span class="quotelev1">&gt; *&gt; &gt; &gt; mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog*
</span><br>
<span class="quotelev1">&gt; *&gt; *
</span><br>
<span class="quotelev1">&gt; *&gt; You're running 9 ranks on two machines, but you're using IB for intra-node communication.*
</span><br>
<span class="quotelev1">&gt; *&gt; Is it intentional? If not, you can add &quot;sm&quot; btl and have performance improved.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Also, don't forget to include &quot;sm&quot; btl if you have more than 1 MPI rank per node.*
</span><br>
<span class="quotelev1">&gt; See above: adding sm to the fastest openib run results in a 13 second penalty
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *-- YK*
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
<li><strong>Next message:</strong> <a href="20170.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20168.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>In reply to:</strong> <a href="20168.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20186.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20186.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
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
