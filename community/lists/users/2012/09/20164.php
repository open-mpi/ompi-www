<?
$subject_val = "Re: [OMPI users] Infiniband performance Problem and stalling";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  9 04:18:11 2012" -->
<!-- isoreceived="20120909081811" -->
<!-- sent="Sun, 09 Sep 2012 11:18:03 +0300" -->
<!-- isosent="20120909081803" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband performance Problem and stalling" -->
<!-- id="504C50BB.7010003_at_dev.mellanox.co.il" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1346993004.67886.YahooMailNeo_at_web121006.mail.ne1.yahoo.com" -->
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
<strong>Date:</strong> 2012-09-09 04:18:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20165.php">Siegmar Gross: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Previous message:</strong> <a href="20163.php">&#214;&#211;&#179;&#201;: "[OMPI users] hello_f90.f90(17): error #6285: There is no matching specific subroutine for this generic subroutine call. [MPI_INIT]"</a>
<li><strong>In reply to:</strong> <a href="20147.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20168.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20168.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Randolph,
<br>
<p>On 9/7/2012 7:43 AM, Randolph Pullen wrote:
<br>
<span class="quotelev1">&gt; Yevgeny,
</span><br>
<span class="quotelev1">&gt; The ibstat results:
</span><br>
<span class="quotelev1">&gt; CA 'mthca0'
</span><br>
<span class="quotelev1">&gt; CA type: MT25208 (MT23108 compat mode)
</span><br>
<p>What you have is InfiniHost III HCA, which is 4x SDR card.
<br>
This card has theoretical peak of 10 Gb/s, which is 1GB/s in IB bit coding.
<br>
<p><span class="quotelev1">&gt; And more interestingly, ib_write_bw:
</span><br>
<span class="quotelev1">&gt; Conflicting CPU frequency values detected: 1600.000000 != 3301.000000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What does Conflicting CPU frequency values mean?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Examining the /proc/cpuinfo file however shows:
</span><br>
<span class="quotelev1">&gt; processor : 0
</span><br>
<span class="quotelev1">&gt; cpu MHz : 3301.000
</span><br>
<span class="quotelev1">&gt; processor : 1
</span><br>
<span class="quotelev1">&gt; cpu MHz : 3301.000
</span><br>
<span class="quotelev1">&gt; processor : 2
</span><br>
<span class="quotelev1">&gt; cpu MHz : 1600.000
</span><br>
<span class="quotelev1">&gt; processor : 3
</span><br>
<span class="quotelev1">&gt; cpu MHz : 1600.000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which seems oddly wierd to me...
</span><br>
<p>You need to have all the cores running at highest clock to get better numbers.
<br>
May be you have power governor not set to optimal performance on these machines.
<br>
Google for &quot;Linux CPU scaling governor&quot; to get more info on this subject, or
<br>
contact your system admin and ask him to take care of the CPU frequencies.
<br>
<p>Once this is done, check all the pairs of your machines - ensure that you get
<br>
a good number with ib_write_br.
<br>
Note that if you have a slower machine in the cluster, general application
<br>
performance will suffer from this.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt;  &gt; On 8/31/2012 10:53 AM, Randolph Pullen wrote:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; (reposted with consolidatedinformation)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; I have a test rig comprising 2 i7 systems 8GB RAM with Melanox III HCA 10G cards
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; running Centos 5.7 Kernel 2.6.18-274
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Open MPI 1.4.3
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; MLNX_OFED_LINUX-1.5.3-1.0.0.2 (OFED-1.5.3-1.0.0.2):
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; On a Cisco 24 pt switch
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Normal performance is:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; $ mpirun --mca btl openib,self -n 2 -hostfile mpi.hosts PingPong
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; results in:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Max rate = 958.388867 MB/sec Min latency = 4.529953 usec
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; and:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; $ mpirun --mca btl tcp,self -n 2 -hostfile mpi.hosts PingPong
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Max rate = 653.547293 MB/sec Min latency = 19.550323 usec
</span><br>
<p>These numbers look fine - 958 MB/s on IB is close to theoretical limit.
<br>
654 MB/s for IPoIB look fine too.
<br>
<p><span class="quotelev3">&gt;  &gt; &gt; My problem is I see better performance under IPoIB then I do on native IB (RDMA_CM).
</span><br>
<p>I don't see this in your numbers. What do I miss?
<br>
<p><span class="quotelev3">&gt;  &gt; &gt; My understanding is that IPoIB is limited to about 1G/s so I am at a loss to know why it is faster.
</span><br>
<p>Again, I see IPoIB performance under 1 GB/s.
<br>
<p><span class="quotelev3">&gt;  &gt; &gt; And this one produces similar run times but seems to degrade with repeated cycles:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You're running 9 ranks on two machines, but you're using IB for intra-node communication.
</span><br>
<span class="quotelev1">&gt; Is it intentional? If not, you can add &quot;sm&quot; btl and have performance improved.
</span><br>
<p>Also, don't forget to include &quot;sm&quot; btl if you have more than 1 MPI rank per node.
<br>
<p>-- YK
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20165.php">Siegmar Gross: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Previous message:</strong> <a href="20163.php">&#214;&#211;&#179;&#201;: "[OMPI users] hello_f90.f90(17): error #6285: There is no matching specific subroutine for this generic subroutine call. [MPI_INIT]"</a>
<li><strong>In reply to:</strong> <a href="20147.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20168.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20168.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
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
