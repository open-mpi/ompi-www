<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 12:52:45 2007" -->
<!-- isoreceived="20070208175245" -->
<!-- sent="Thu, 8 Feb 2007 12:50:04 -0500" -->
<!-- isosent="20070208175004" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NetPipe benchmark &amp;amp; spanning multiple interconnects" -->
<!-- id="ECC5EDAA-A313-46D6-BE38-F4A51DC67DBF_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2453e2900702080902j3cef9a3fu35ef8520c4e6b3f2_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-02-08 12:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2645.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but Re: first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2643.php">Alex Tumanov: "[OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>In reply to:</strong> <a href="2643.php">Alex Tumanov: "[OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2646.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Reply:</strong> <a href="2646.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In order to get any performance improvement from stripping the  
<br>
messages over multiple interconnects one has to specify the latency  
<br>
and bandwidth for these interconnects, and to make sure that any of  
<br>
them don't ask for exclusivity. I'm usually running over multiple TCP  
<br>
interconnects and here is my mca-params.conf file:
<br>
btl_tcp_if_include = eth0,eth1
<br>
btl_tcp_max_rdma_size = 524288
<br>
<p>btl_tcp_latency_eth0 = 47
<br>
btl_tcp_bandwidth_eth0 = 587
<br>
<p>btl_tcp_latency_eth1 = 51
<br>
btl_tcp_bandwidth_eth1 = 233
<br>
<p>Something similar has to be done for openib and gm, in order to allow  
<br>
us to strip the messages correctly.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 8, 2007, at 12:02 PM, Alex Tumanov wrote:
<br>
<p><span class="quotelev1">&gt; Hello Jeff. Thanks for pointing out NetPipe to me. I've played around
</span><br>
<span class="quotelev1">&gt; with it a little in hope to see clear evidence/effect of message
</span><br>
<span class="quotelev1">&gt; striping in OpenMPI. Unfortunately, what I saw is that the result of
</span><br>
<span class="quotelev1">&gt; running NPmpi over several interconnects is identical to running it
</span><br>
<span class="quotelev1">&gt; over a single fastest one :-( That was not the expected behavior, and
</span><br>
<span class="quotelev1">&gt; I'm hoping that I'm doing something wrong. I'm using NetPIPE_3.6.2
</span><br>
<span class="quotelev1">&gt; over OMPI 1.1.4. NetPipe was compiled by making sure Open MPI's mpicc
</span><br>
<span class="quotelev1">&gt; can be found and simply  running 'make mpi' under NetPIPE_3.6.2
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I experimented with 3 interconnects: openib, gm, and gig-e.
</span><br>
<span class="quotelev1">&gt; Specifically, I found that the times (and, correspondingly, bandwidth)
</span><br>
<span class="quotelev1">&gt; reported for openib+gm is pretty much identical to the times reported
</span><br>
<span class="quotelev1">&gt; for just openib. Here are the commands I used to initiate the
</span><br>
<span class="quotelev1">&gt; benchmark:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl openib,gm,self
</span><br>
<span class="quotelev1">&gt; ~/NPmpi &gt; ~/testdir/ompi/netpipe/ompi_netpipe_openib+gm.log 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl openib,self ~/NPmpi
</span><br>
<span class="quotelev2">&gt;&gt; ompi_netpipe_openib.log 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Similarly, for tcp+gm the reported times were identical to just
</span><br>
<span class="quotelev1">&gt; running the benchmark over gm alone. The commands were:
</span><br>
<span class="quotelev1">&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl tcp,gm,self --mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude lo,ib0,ib1 ~/NPmpi
</span><br>
<span class="quotelev1">&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl gm,self ~/NPmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Orthogonally, I've also observed that trying to use any combination of
</span><br>
<span class="quotelev1">&gt; interconnects that includes openib (except using it exclusively) fails
</span><br>
<span class="quotelev1">&gt; as soon as the benchmark reaches trials with 1.5MB message sizes. In
</span><br>
<span class="quotelev1">&gt; fact the CPU load remained at 100% on the headnode, but no further
</span><br>
<span class="quotelev1">&gt; output is sent to the log file or the screen (see the tails below).
</span><br>
<span class="quotelev1">&gt; This behavior is fairly consistent and may be of interest to Open MPI
</span><br>
<span class="quotelev1">&gt; development community. If anybody has tried using openib in
</span><br>
<span class="quotelev1">&gt; combination with other interconnects please let me know what issues
</span><br>
<span class="quotelev1">&gt; you've encountered and what tips and tricks you could share in this
</span><br>
<span class="quotelev1">&gt; regard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks. Keep up the good work!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Alex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tails (the log file name reflects the combination of interconnects in
</span><br>
<span class="quotelev1">&gt; that CL order):
</span><br>
<span class="quotelev1">&gt; # tail ompi_netpipe_gm+openib.log
</span><br>
<span class="quotelev1">&gt; 101:  786432 bytes     38 times --&gt;   3582.46 Mbps in    1674.83 usec
</span><br>
<span class="quotelev1">&gt; 102:  786435 bytes     39 times --&gt;   3474.50 Mbps in    1726.87 usec
</span><br>
<span class="quotelev1">&gt; 103: 1048573 bytes     19 times --&gt;   3592.47 Mbps in    2226.87 usec
</span><br>
<span class="quotelev1">&gt; 104: 1048576 bytes     22 times --&gt;   3515.15 Mbps in    2275.86 usec
</span><br>
<span class="quotelev1">&gt; 105: 1048579 bytes     21 times --&gt;   3480.22 Mbps in    2298.71 usec
</span><br>
<span class="quotelev1">&gt; 106: 1572861 bytes     21 times --&gt;   4174.76 Mbps in    2874.41 usec
</span><br>
<span class="quotelev1">&gt; 107: 1572864 bytes     23 times --&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # tail ompi_netpipe_openib+gm.log
</span><br>
<span class="quotelev1">&gt; 100:  786429 bytes     45 times --&gt;   3477.98 Mbps in    1725.13 usec
</span><br>
<span class="quotelev1">&gt; 101:  786432 bytes     38 times --&gt;   3578.94 Mbps in    1676.47 usec
</span><br>
<span class="quotelev1">&gt; 102:  786435 bytes     39 times --&gt;   3480.66 Mbps in    1723.82 usec
</span><br>
<span class="quotelev1">&gt; 103: 1048573 bytes     19 times --&gt;   3594.26 Mbps in    2225.76 usec
</span><br>
<span class="quotelev1">&gt; 104: 1048576 bytes     22 times --&gt;   3517.46 Mbps in    2274.37 usec
</span><br>
<span class="quotelev1">&gt; 105: 1048579 bytes     21 times --&gt;   3482.13 Mbps in    2297.45 usec
</span><br>
<span class="quotelev1">&gt; 106: 1572861 bytes     21 times --&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # tail ompi_netpipe_openib+tcp+gm.log
</span><br>
<span class="quotelev1">&gt; 100:  786429 bytes     45 times --&gt;   3481.45 Mbps in    1723.41 usec
</span><br>
<span class="quotelev1">&gt; 101:  786432 bytes     38 times --&gt;   3575.83 Mbps in    1677.93 usec
</span><br>
<span class="quotelev1">&gt; 102:  786435 bytes     39 times --&gt;   3479.05 Mbps in    1724.61 usec
</span><br>
<span class="quotelev1">&gt; 103: 1048573 bytes     19 times --&gt;   3589.68 Mbps in    2228.61 usec
</span><br>
<span class="quotelev1">&gt; 104: 1048576 bytes     22 times --&gt;   3517.96 Mbps in    2274.05 usec
</span><br>
<span class="quotelev1">&gt; 105: 1048579 bytes     21 times --&gt;   3484.12 Mbps in    2296.14 usec
</span><br>
<span class="quotelev1">&gt; 106: 1572861 bytes     21 times --&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # tail -5 ompi_netpipe_openib.log
</span><br>
<span class="quotelev1">&gt; 119: 6291456 bytes      5 times --&gt;   4036.63 Mbps in   11891.10 usec
</span><br>
<span class="quotelev1">&gt; 120: 6291459 bytes      5 times --&gt;   4005.81 Mbps in   11982.61 usec
</span><br>
<span class="quotelev1">&gt; 121: 8388605 bytes      3 times --&gt;   4033.78 Mbps in   15866.00 usec
</span><br>
<span class="quotelev1">&gt; 122: 8388608 bytes      3 times --&gt;   4025.50 Mbps in   15898.66 usec
</span><br>
<span class="quotelev1">&gt; 123: 8388611 bytes      3 times --&gt;   4017.58 Mbps in   15929.98 usec
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
<li><strong>Next message:</strong> <a href="2645.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but Re: first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2643.php">Alex Tumanov: "[OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>In reply to:</strong> <a href="2643.php">Alex Tumanov: "[OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2646.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Reply:</strong> <a href="2646.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
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
