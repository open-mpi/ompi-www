<?
$subject_val = "Re: [OMPI users] Infiniband performance Problem and stalling";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 23:47:09 2012" -->
<!-- isoreceived="20120911034709" -->
<!-- sent="Mon, 10 Sep 2012 20:47:03 -0700 (PDT)" -->
<!-- isosent="20120911034703" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband performance Problem and stalling" -->
<!-- id="1347335223.45661.YahooMailNeo_at_web121001.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="504DCAF5.2070004_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2012-09-10 23:47:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20187.php">sudhirs_at_[hidden]: "[OMPI users] system call"</a>
<li><strong>Previous message:</strong> <a href="20185.php">Brooks Davis: "[OMPI users] test for sctp on FreeBSD too narrow"</a>
<li><strong>In reply to:</strong> <a href="20169.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20148.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thats very interesting&#160;Yevgeny,

Yes tcp,self ran in 12 seconds
tcp,self,sm ran in 27 seconds

Does anyone have any idea how this can be?

About half the data would go to local processes, so SM should pay dividends.


________________________________
 From: Yevgeny Kliteynik &lt;kliteyn_at_[hidden]&gt;
To: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt; 
Cc: OpenMPI Users &lt;users_at_[hidden]&gt; 
Sent: Monday, 10 September 2012 9:11 PM
Subject: Re: [OMPI users] Infiniband performance Problem and stalling
 
Randolph,

So what you saying in short, leaving all the numbers aside, is the following:
In your particular application on your particular setup with this particular OMPI version,
1. openib BTL performs faster than shared memory BTL
2. TCP BTL performs faster than shared memory

IMHO, this indicates that you have some problem on your machines,
and this problem is unrelated to interconnect.

Shared memory should be much faster than IB, not to mention IPoIB.

Could you run these two commands?

mpirun --mca btl tcp,self&#160; &#160; -H vh2,vh1 -np 9 --bycore prog
mpirun --mca btl tcp,self,sm -H vh2,vh1 -np 9 --bycore prog

You will probably see better number w/o sm.
Why? Don't know.

Perhaps someone who has better knowledge in sm BTL can elaborate?

-- YK


On 9/10/2012 6:32 AM, Randolph Pullen wrote:
&gt; See my comments in line...
&gt; 
&gt;
<br>
&nbsp;------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
------------------------
&gt; *From:* Yevgeny Kliteynik &lt;kliteyn_at_[hidden]&gt;
&gt; *To:* Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;
&gt; *Cc:* OpenMPI Users &lt;users_at_[hidden]&gt;
&gt; *Sent:* Sunday, 9 September 2012 6:18 PM
&gt; *Subject:* Re: [OMPI users] Infiniband performance Problem and stalling
&gt; 
&gt; Randolph,
&gt; 
&gt; On 9/7/2012 7:43 AM, Randolph Pullen wrote:
&gt;&#160; &gt; Yevgeny,
&gt;&#160; &gt; The ibstat results:
&gt;&#160; &gt; CA 'mthca0'
&gt;&#160; &gt; CA type: MT25208 (MT23108 compat mode)
&gt; 
&gt; What you have is InfiniHost III HCA, which is 4x SDR card.
&gt; This card has theoretical peak of 10 Gb/s, which is 1GB/s in IB bit coding.
&gt; 
&gt;&#160; &gt; And more interestingly, ib_write_bw:
&gt;&#160; &gt; Conflicting CPU frequency values detected: 1600.000000 != 3301.000000
&gt;&#160; &gt;
&gt;&#160; &gt; What does Conflicting CPU frequency values mean?
&gt;&#160; &gt;
&gt;&#160; &gt; Examining the /proc/cpuinfo file however shows:
&gt;&#160; &gt; processor : 0
&gt;&#160; &gt; cpu MHz : 3301.000
&gt;&#160; &gt; processor : 1
&gt;&#160; &gt; cpu MHz : 3301.000
&gt;&#160; &gt; processor : 2
&gt;&#160; &gt; cpu MHz : 1600.000
&gt;&#160; &gt; processor : 3
&gt;&#160; &gt; cpu MHz : 1600.000
&gt;&#160; &gt;
&gt;&#160; &gt; Which seems oddly wierd to me...
&gt; 
&gt; You need to have all the cores running at highest clock to get better numbers.
&gt; May be you have power governor not set to optimal performance on these machines.
&gt; Google for &quot;Linux CPU scaling governor&quot; to get more info on this subject, or
&gt; contact your system admin and ask him to take care of the CPU frequencies.
&gt; 
&gt; Once this is done, check all the pairs of your machines - ensure that you get
&gt; a good number with ib_write_br.
&gt; Note that if you have a slower machine in the cluster, general application
&gt; performance will suffer from this.
&gt; 
&gt; I have anchored the clocks speeds to:
&gt; [root_at_vh1 ~]# cat /sys/devices/system/cpu/*/cpufreq/cpuinfo_cur_freq
&gt; 3600000
&gt; 3600000
&gt; 3600000
&gt; 3600000
&gt; 3600000
&gt; 3600000
&gt; 3600000
&gt; 3600000
&gt; 
&gt; [root_at_vh2 ~]# cat /sys/devices/system/cpu/*/cpufreq/cpuinfo_cur_freq
&gt; 3200000
&gt; 3200000
&gt; 3200000
&gt; 3200000
&gt; 
&gt; However /proc/cpuinfo still reports them incorrectly
&gt; [deepcloud_at_vh2 c]$ grep MHz /proc/cpuinfo
&gt; cpu MHz : 3300.000
&gt; cpu MHz : 1600.000
&gt; cpu MHz : 1600.000
&gt; cpu MHz : 1600.000
&gt; 
&gt; I don't think this is the problem, so I used -F option in ib_write_bw to push ahead. ie;
&gt; [deepcloud_at_vh2 c]$ ib_write_bw -F vh1
&gt; ------------------------------------------------------------------
&gt; RDMA_Write BW Test
&gt; Number of qps : 1
&gt; Connection type : RC
&gt; TX depth : 300
&gt; CQ Moderation : 50
&gt; Link type : IB
&gt; Mtu : 2048
&gt; Inline data is used up to 0 bytes message
&gt; local address: LID 0x04 QPN 0xaa0408 PSN 0xf9c072 RKey 0x59260052 VAddr 0x002b03a8af3000
&gt; remote address: LID 0x03 QPN 0x8b0408 PSN 0xe4890d RKey 0x4a62003c VAddr 0x002b8e44297000
&gt; ------------------------------------------------------------------
&gt; #bytes #iterations BW peak[MB/sec] BW average[MB/sec]
&gt; Conflicting CPU frequency values detected: 3300.000000 != 1600.000000
&gt; Test integrity may be harmed !
&gt; Conflicting CPU frequency values detected: 3300.000000 != 1600.000000
&gt; Test integrity may be harmed !
&gt; Conflicting CPU frequency values detected: 3300.000000 != 1600.000000
&gt; Test integrity may be harmed !
&gt; Warning: measured timestamp frequency 3092.95 differs from nominal 3300 MHz
&gt; 65536 5000 937.61 937.60
&gt; ------------------------------------------------------------------
&gt; 
&gt; 
&gt; 
&gt; *&gt; &gt; On 8/31/2012 10:53 AM, Randolph Pullen wrote:*
&gt; *&gt; &gt; &gt; (reposted with consolidatedinformation)*
&gt; *&gt; &gt; &gt; I have a test rig comprising 2 i7 systems 8GB RAM with Melanox III HCA 10G cards*
&gt; *&gt; &gt; &gt; running Centos 5.7 Kernel 2.6.18-274*
&gt; *&gt; &gt; &gt; Open MPI 1.4.3*
&gt; *&gt; &gt; &gt; MLNX_OFED_LINUX-1.5.3-1.0.0.2 (OFED-1.5.3-1.0.0.2):*
&gt; *&gt; &gt; &gt; On a Cisco 24 pt switch*
&gt; *&gt; &gt; &gt; Normal performance is:*
&gt; *&gt; &gt; &gt; $ mpirun --mca btl openib,self -n 2 -hostfile mpi.hosts PingPong*
&gt; *&gt; &gt; &gt; results in:*
&gt; *&gt; &gt; &gt; Max rate = 958.388867 MB/sec Min latency = 4.529953 usec*
&gt; *&gt; &gt; &gt; and:*
&gt; *&gt; &gt; &gt; $ mpirun --mca btl tcp,self -n 2 -hostfile mpi.hosts PingPong*
&gt; *&gt; &gt; &gt; Max rate = 653.547293 MB/sec Min latency = 19.550323 usec*
&gt; 
&gt; *These numbers look fine - 958 MB/s on IB is close to theoretical limit.*
&gt; *654 MB/s for IPoIB look fine too.*
&gt; 
&gt; *&gt; &gt; &gt; My problem is I see better performance under IPoIB then I do on native IB (RDMA_CM).*
&gt; 
&gt; *I don't see this in your numbers. What do I miss?*
&gt; 
&gt; Runs in 9 seconds:
&gt; mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog
&gt; mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog
&gt; 
&gt; Runs in 24 seconds or more:
&gt; mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog
&gt; mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl openib,self,sm -H vh2,vh1 -np 9 --bycore prog
&gt; mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self,sm -H vh2,vh1 -np 9 --bycore prog
&gt; 
&gt; Note:
&gt; - adding sm to the fastest openib run results in a 13 second penalty
&gt; - Subsequent runs with openib usually add at least 10 seconds per run or stall
&gt; 
&gt; *&gt; &gt; &gt; My understanding is that IPoIB is limited to about 1G/s so I am at a loss to know why it is faster.*
&gt; 
&gt; *Again, I see IPoIB performance under 1 GB/s.*
&gt; 
&gt; *&gt; &gt; &gt; And this one produces similar run times but seems to degrade with repeated cycles:*
&gt; *&gt; &gt; &gt; mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog*
&gt; *&gt; *
&gt; *&gt; You're running 9 ranks on two machines, but you're using IB for intra-node communication.*
&gt; *&gt; Is it intentional? If not, you can add &quot;sm&quot; btl and have performance improved.*
&gt; 
&gt; *Also, don't forget to include &quot;sm&quot; btl if you have more than 1 MPI rank per node.*
&gt; See above: adding sm to the fastest openib run results in a 13 second penalty
&gt; 
&gt; 
&gt; *-- YK*
&gt; 
&gt; 
&gt; 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20186/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20187.php">sudhirs_at_[hidden]: "[OMPI users] system call"</a>
<li><strong>Previous message:</strong> <a href="20185.php">Brooks Davis: "[OMPI users] test for sctp on FreeBSD too narrow"</a>
<li><strong>In reply to:</strong> <a href="20169.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20148.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
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
