<?
$subject_val = "Re: [OMPI users] Infiniband performance Problem and stalling";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  9 23:32:21 2012" -->
<!-- isoreceived="20120910033221" -->
<!-- sent="Sun, 9 Sep 2012 20:32:15 -0700 (PDT)" -->
<!-- isosent="20120910033215" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband performance Problem and stalling" -->
<!-- id="1347247935.48415.YahooMailNeo_at_web121001.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="504C50BB.7010003_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2012-09-09 23:32:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20169.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20167.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20164.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20169.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20169.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See my comments in line...


________________________________
 From: Yevgeny Kliteynik &lt;kliteyn_at_[hidden]&gt;
To: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt; 
Cc: OpenMPI Users &lt;users_at_[hidden]&gt; 
Sent: Sunday, 9 September 2012 6:18 PM
Subject: Re: [OMPI users] Infiniband performance Problem and stalling
 
Randolph,

On 9/7/2012 7:43 AM, Randolph Pullen wrote:
&gt; Yevgeny,
&gt; The ibstat results:
&gt; CA 'mthca0'
&gt; CA type: MT25208 (MT23108 compat mode)

What you have is InfiniHost III HCA, which is 4x SDR card.
This card has theoretical peak of 10 Gb/s, which is 1GB/s in IB bit coding.

&gt; And more interestingly, ib_write_bw:
&gt; Conflicting CPU frequency values detected: 1600.000000 != 3301.000000
&gt; 
&gt; What does Conflicting CPU frequency values mean?
&gt; 
&gt; Examining the /proc/cpuinfo file however shows:
&gt; processor : 0
&gt; cpu MHz : 3301.000
&gt; processor : 1
&gt; cpu MHz : 3301.000
&gt; processor : 2
&gt; cpu MHz : 1600.000
&gt; processor : 3
&gt; cpu MHz : 1600.000
&gt; 
&gt; Which seems oddly wierd to me...

You need to have all the cores running at highest clock to get better numbers.
May be you have power governor not set to optimal performance on these machines.
Google for &quot;Linux CPU scaling governor&quot; to get more info on this subject, or
contact your system admin and ask him to take care of the CPU frequencies.

Once this is done, check all the pairs of your machines - ensure that you get
a good number with ib_write_br.
Note that if you have a slower machine in the cluster, general application
performance will suffer from this.

I have anchored the clocks speeds to:
[root_at_vh1 ~]# &#160; cat /sys/devices/system/cpu/*/cpufreq/cpuinfo_cur_freq
3600000
3600000
3600000
3600000
3600000
3600000
3600000
3600000

[root_at_vh2 ~]# &#160;cat /sys/devices/system/cpu/*/cpufreq/cpuinfo_cur_freq
3200000
3200000
3200000
3200000

However /proc/cpuinfo still reports them incorrectly
&#160;[deepcloud_at_vh2 c]$ &#160;grep MHz /proc/cpuinfo&#160;
cpu MHz &#160; &#160; &#160; &#160; : 3300.000
cpu MHz &#160; &#160; &#160; &#160; : 1600.000
cpu MHz &#160; &#160; &#160; &#160; : 1600.000
cpu MHz &#160; &#160; &#160; &#160; : 1600.000

I don't think this is the problem, so I used -F option in&#160;&#160;ib_write_bw to push ahead. ie;
[deepcloud_at_vh2 c]$ &#160;ib_write_bw -F vh1
------------------------------------------------------------------
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; RDMA_Write BW Test
&#160;Number of qps &#160; : 1
&#160;Connection type : RC
&#160;TX depth &#160; &#160; &#160; &#160;: 300
&#160;CQ Moderation &#160; : 50
&#160;Link type &#160; &#160; &#160; : IB
&#160;Mtu &#160; &#160; &#160; &#160; &#160; &#160; : 2048
&#160;Inline data is used up to 0 bytes message
&#160;local address: LID 0x04 QPN 0xaa0408 PSN 0xf9c072 RKey 0x59260052 VAddr 0x002b03a8af3000
&#160;remote address: LID 0x03 QPN 0x8b0408 PSN 0xe4890d RKey 0x4a62003c VAddr 0x002b8e44297000
------------------------------------------------------------------
&#160;#bytes &#160; &#160; #iterations &#160; &#160;BW peak[MB/sec] &#160; &#160;BW average[MB/sec]
Conflicting CPU frequency values detected: 3300.000000 != 1600.000000
Test integrity may be harmed !
Conflicting CPU frequency values detected: 3300.000000 != 1600.000000
Test integrity may be harmed !
Conflicting CPU frequency values detected: 3300.000000 != 1600.000000
Test integrity may be harmed !
Warning: measured timestamp frequency 3092.95 differs from nominal 3300 MHz
&#160;65536 &#160; &#160; 5000 &#160; &#160; &#160; &#160; &#160; 937.61 &#160; &#160; &#160; &#160; &#160; &#160; 937.60&#160;
------------------------------------------------------------------


&gt;&#160; &gt; On 8/31/2012 10:53 AM, Randolph Pullen wrote:
&gt;&#160; &gt; &gt; (reposted with consolidatedinformation)
&gt;&#160; &gt; &gt; I have a test rig comprising 2 i7 systems 8GB RAM with Melanox III HCA 10G cards
&gt;&#160; &gt; &gt; running Centos 5.7 Kernel 2.6.18-274
&gt;&#160; &gt; &gt; Open MPI 1.4.3
&gt;&#160; &gt; &gt; MLNX_OFED_LINUX-1.5.3-1.0.0.2 (OFED-1.5.3-1.0.0.2):
&gt;&#160; &gt; &gt; On a Cisco 24 pt switch
&gt;&#160; &gt; &gt; Normal performance is:
&gt;&#160; &gt; &gt; $ mpirun --mca btl openib,self -n 2 -hostfile mpi.hosts PingPong
&gt;&#160; &gt; &gt; results in:
&gt;&#160; &gt; &gt; Max rate = 958.388867 MB/sec Min latency = 4.529953 usec
&gt;&#160; &gt; &gt; and:
&gt;&#160; &gt; &gt; $ mpirun --mca btl tcp,self -n 2 -hostfile mpi.hosts PingPong
&gt;&#160; &gt; &gt; Max rate = 653.547293 MB/sec Min latency = 19.550323 usec

These numbers look fine - 958 MB/s on IB is close to theoretical limit.
654 MB/s for IPoIB look fine too.

&gt;&#160; &gt; &gt; My problem is I see better performance under IPoIB then I do on native IB (RDMA_CM).

I don't see this in your numbers. What do I miss?

Runs in 9 seconds:
mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore &#160;prog
mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog

Runs in 24 seconds or more:
mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog
mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl openib,self,sm -H vh2,vh1 -np 9 --bycore prog
mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self,sm &#160;-H vh2,vh1 -np 9 --bycore &#160;prog


Note:
-&#160;adding sm to the fastest openib run results in a 13 second penalty
- Subsequent runs with openib usually add at least 10 seconds per run or stall

&gt;&#160; &gt; &gt; My understanding is that IPoIB is limited to about 1G/s so I am at a loss to know why it is faster.

Again, I see IPoIB performance under 1 GB/s.

&gt;&#160; &gt; &gt; And this one produces similar run times but seems to degrade with repeated cycles:
&gt;&#160; &gt; &gt; mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog
&gt; 
&gt; You're running 9 ranks on two machines, but you're using IB for intra-node communication.
&gt; Is it intentional? If not, you can add &quot;sm&quot; btl and have performance improved.

Also, don't forget to include &quot;sm&quot; btl if you have more than 1 MPI rank per node.
See above: adding sm to the fastest openib run results in a 13 second penalty

-- YK
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20168/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20169.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20167.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20164.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20169.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20169.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
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
