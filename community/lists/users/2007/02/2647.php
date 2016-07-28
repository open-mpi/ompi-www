<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 14:02:56 2007" -->
<!-- isoreceived="20070208190256" -->
<!-- sent="Thu, 8 Feb 2007 14:00:14 -0500" -->
<!-- isosent="20070208190014" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NetPipe benchmark &amp;amp; spanning multiple interconnects" -->
<!-- id="7506225A-2519-4D8C-B471-338639195FC5_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2453e2900702081012n67a44a60w941b64e689128ab5_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-08 14:00:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2648.php">Doug Gregor: "Re: [OMPI users] OpenMPI C++ serialisation"</a>
<li><strong>Previous message:</strong> <a href="2646.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>In reply to:</strong> <a href="2646.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2651.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Reply:</strong> <a href="2651.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 8, 2007, at 1:12 PM, Alex Tumanov wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like I have some values already set for openib and gm bandwidth:
</span><br>
<span class="quotelev1">&gt; # ompi_info --param all all |grep -i band
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_gm_bandwidth&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;250&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_bandwidth&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;800&quot;)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of  
</span><br>
<span class="quotelev1">&gt; interconnect
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;800&quot;)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of  
</span><br>
<span class="quotelev1">&gt; interconnect
</span><br>
<p>These are the default values, which are wrong most of the time. The  
<br>
bandwidth is in Mbs, so the default value for GM is set to something  
<br>
ridiculously low. What really matter is the ration between the  
<br>
bandwidth of the components you plan to use.
<br>
<p><span class="quotelev1">&gt; whereas, ompi_info reports no available parameters dealing with  
</span><br>
<span class="quotelev1">&gt; latency:
</span><br>
<span class="quotelev1">&gt; # ompi_info --param all all |grep -i laten
</span><br>
<span class="quotelev1">&gt; &lt;no output&gt;
</span><br>
<p>Strange, the latency is supposed to be there too. Anyway, the latency  
<br>
is only used to determine which one is faster, in order to use it for  
<br>
small messages.
<br>
<p><span class="quotelev1">&gt; Also, I'm not entirely sure what value to set the latency to,
</span><br>
<span class="quotelev1">&gt; especially for tcp. It depends on so many factors and varies. Why does
</span><br>
<span class="quotelev1">&gt; the latency value have effect on message striping? I can see how
</span><br>
<span class="quotelev1">&gt; knowing the bandwidth limitations of available interconnects would
</span><br>
<span class="quotelev1">&gt; allow you to proportionally divide up the message among them, but
</span><br>
<span class="quotelev1">&gt; latency? Especially for large message sizes the time should be
</span><br>
<span class="quotelev1">&gt; dominated by the bandwidth limitations.
</span><br>
<p>As I said the bandwidth is in Mbs and the latency is micro-sec. But  
<br>
what really matter for latency is the absolute value, as we will  
<br>
order them starting from the smallest latency. For bandwidth, what  
<br>
really matters is the relative ratio. We sum all bandwidths and they  
<br>
we divide by the device bandwidth to find out how much data we should  
<br>
send over each interconnect (that's really close with what happens  
<br>
there).
<br>
<p>How do I compute my latencies and bandwidths ? Well I run NetPIPE  
<br>
over one interconnect at the time and get the latency for the message  
<br>
size 1 and the bandwidth from the message size around 1MB. That  
<br>
should give you a quite accurate values o start from. After you can  
<br>
tweak them, in order to increase the ratio based on the latencies.
<br>
<p><span class="quotelev1">&gt; Finally, what are the units for bandwidth and latency mca parameters
</span><br>
<span class="quotelev1">&gt; and how did you arrive at the values you set in your params file? Is
</span><br>
<span class="quotelev1">&gt; there a description of the message striping algorithm somewhere (other
</span><br>
<span class="quotelev1">&gt; than code :) )?
</span><br>
<p>Read the previous paragraph. Unfortunately, except the code and my  
<br>
little explanation there is no documentation about how we do the  
<br>
stripping ...
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/8/07, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; In order to get any performance improvement from stripping the
</span><br>
<span class="quotelev2">&gt;&gt; messages over multiple interconnects one has to specify the latency
</span><br>
<span class="quotelev2">&gt;&gt; and bandwidth for these interconnects, and to make sure that any of
</span><br>
<span class="quotelev2">&gt;&gt; them don't ask for exclusivity. I'm usually running over multiple TCP
</span><br>
<span class="quotelev2">&gt;&gt; interconnects and here is my mca-params.conf file:
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_if_include = eth0,eth1
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_max_rdma_size = 524288
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_latency_eth0 = 47
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_bandwidth_eth0 = 587
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_latency_eth1 = 51
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_bandwidth_eth1 = 233
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Something similar has to be done for openib and gm, in order to allow
</span><br>
<span class="quotelev2">&gt;&gt; us to strip the messages correctly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 8, 2007, at 12:02 PM, Alex Tumanov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Jeff. Thanks for pointing out NetPipe to me. I've played  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; around
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with it a little in hope to see clear evidence/effect of message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; striping in OpenMPI. Unfortunately, what I saw is that the result of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running NPmpi over several interconnects is identical to running it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; over a single fastest one :-( That was not the expected behavior,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm hoping that I'm doing something wrong. I'm using NetPIPE_3.6.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; over OMPI 1.1.4. NetPipe was compiled by making sure Open MPI's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can be found and simply  running 'make mpi' under NetPIPE_3.6.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I experimented with 3 interconnects: openib, gm, and gig-e.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Specifically, I found that the times (and, correspondingly,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bandwidth)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reported for openib+gm is pretty much identical to the times  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reported
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for just openib. Here are the commands I used to initiate the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; benchmark:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl openib,gm,self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~/NPmpi &gt; ~/testdir/ompi/netpipe/ompi_netpipe_openib+gm.log 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl openib,self ~/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NPmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_netpipe_openib.log 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Similarly, for tcp+gm the reported times were identical to just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running the benchmark over gm alone. The commands were:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl tcp,gm,self --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_tcp_if_exclude lo,ib0,ib1 ~/NPmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl gm,self ~/NPmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Orthogonally, I've also observed that trying to use any  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; combination of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interconnects that includes openib (except using it exclusively)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fails
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as soon as the benchmark reaches trials with 1.5MB message sizes. In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fact the CPU load remained at 100% on the headnode, but no further
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output is sent to the log file or the screen (see the tails below).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This behavior is fairly consistent and may be of interest to Open  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; development community. If anybody has tried using openib in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; combination with other interconnects please let me know what issues
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you've encountered and what tips and tricks you could share in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regard.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Many thanks. Keep up the good work!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sincerely,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tails (the log file name reflects the combination of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interconnects in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that CL order):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # tail ompi_netpipe_gm+openib.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 101:  786432 bytes     38 times --&gt;   3582.46 Mbps in    1674.83  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 102:  786435 bytes     39 times --&gt;   3474.50 Mbps in    1726.87  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 103: 1048573 bytes     19 times --&gt;   3592.47 Mbps in    2226.87  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 104: 1048576 bytes     22 times --&gt;   3515.15 Mbps in    2275.86  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 105: 1048579 bytes     21 times --&gt;   3480.22 Mbps in    2298.71  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 106: 1572861 bytes     21 times --&gt;   4174.76 Mbps in    2874.41  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 107: 1572864 bytes     23 times --&gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # tail ompi_netpipe_openib+gm.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 100:  786429 bytes     45 times --&gt;   3477.98 Mbps in    1725.13  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 101:  786432 bytes     38 times --&gt;   3578.94 Mbps in    1676.47  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 102:  786435 bytes     39 times --&gt;   3480.66 Mbps in    1723.82  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 103: 1048573 bytes     19 times --&gt;   3594.26 Mbps in    2225.76  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 104: 1048576 bytes     22 times --&gt;   3517.46 Mbps in    2274.37  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 105: 1048579 bytes     21 times --&gt;   3482.13 Mbps in    2297.45  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 106: 1572861 bytes     21 times --&gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # tail ompi_netpipe_openib+tcp+gm.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 100:  786429 bytes     45 times --&gt;   3481.45 Mbps in    1723.41  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 101:  786432 bytes     38 times --&gt;   3575.83 Mbps in    1677.93  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 102:  786435 bytes     39 times --&gt;   3479.05 Mbps in    1724.61  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 103: 1048573 bytes     19 times --&gt;   3589.68 Mbps in    2228.61  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 104: 1048576 bytes     22 times --&gt;   3517.96 Mbps in    2274.05  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 105: 1048579 bytes     21 times --&gt;   3484.12 Mbps in    2296.14  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 106: 1572861 bytes     21 times --&gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # tail -5 ompi_netpipe_openib.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 119: 6291456 bytes      5 times --&gt;   4036.63 Mbps in   11891.10  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 120: 6291459 bytes      5 times --&gt;   4005.81 Mbps in   11982.61  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 121: 8388605 bytes      3 times --&gt;   4033.78 Mbps in   15866.00  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 122: 8388608 bytes      3 times --&gt;   4025.50 Mbps in   15898.66  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 123: 8388611 bytes      3 times --&gt;   4017.58 Mbps in   15929.98  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev2">&gt;&gt; half may reach you&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                    Kahlil Gibran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2648.php">Doug Gregor: "Re: [OMPI users] OpenMPI C++ serialisation"</a>
<li><strong>Previous message:</strong> <a href="2646.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>In reply to:</strong> <a href="2646.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2651.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Reply:</strong> <a href="2651.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
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
