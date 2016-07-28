<?
$subject_val = "Re: [OMPI users] Openib Selection and Dual Port ConnectX";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 12 20:05:10 2016" -->
<!-- isoreceived="20160613000510" -->
<!-- sent="Mon, 13 Jun 2016 09:05:05 +0900" -->
<!-- isosent="20160613000505" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openib Selection and Dual Port ConnectX" -->
<!-- id="7d65b7b4-343e-1a00-541f-6060abe421dd_at_rist.or.jp" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0C32425D-0DF6-4A57-87E8-259D6787EFC9_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openib Selection and Dual Port ConnectX<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-12 20:05:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29425.php">Jason Maldonis: "[OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29423.php">Grodowitz, Nathan T.: "[OMPI users] Openib Selection and Dual Port ConnectX"</a>
<li><strong>In reply to:</strong> <a href="29423.php">Grodowitz, Nathan T.: "[OMPI users] Openib Selection and Dual Port ConnectX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>basically, here is how things happen by default :
<br>
<p>- each btl (openib, tcp, sm, ...) has three parameters {exclusivity, 
<br>
bandwidth, latency}
<br>
<p>- in order to communicate with another task, all the available btl with 
<br>
the higher exclusivity are used
<br>
<p>- in the case of the openib btl, there is an option to use only the 
<br>
closest IB port, but i cannot remember whether it is on by default. 
<br>
(tasks running on socket 0 will use the IB port connected to the PCI bus 
<br>
of socket 0, tasks running on socket 1 will use the IB port connected to 
<br>
the PCI bus of socket 1)
<br>
<p>- if several btl are used, then messages are split across all the btl 
<br>
(e.g. ports), and in this case, bandwitch/latency are used to 
<br>
efficiently split the messages.
<br>
<p>(ideally, and if IB is QDR, large message traffic should be routed 80% 
<br>
to the IB port and 20 % to the 10GbE port)
<br>
<p><p>in most IB configurations, two tasks on different nodes are able to 
<br>
communicate via TCP or IB.
<br>
<p>since the openib btl has a higher exclusivity than the tcp btl, only IB 
<br>
is used.
<br>
<p><p>in your configuration, it seems that the openib btl is used for the 10 
<br>
GbE port, so if you did the right thing by only including the first IB port.
<br>
<p><p>at this stage, i think the RDMA errors is likely a bug, but using the 10 
<br>
GbE port is most likely a feature.
<br>
<p>i will follow-up on the devel mailing list, since we might want to 
<br>
decrease the exclusivity of the 10 GbE port, so it is no more used by 
<br>
default in this kind of configuration.
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p>On 6/11/2016 12:25 AM, Grodowitz, Nathan T. wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We recently ran into an issue with a cluster and dual port ConnectX3 cards. We are using the cards with one port setup for IB and one port setup for 10gbe. We ran into scaling issues when using the openib BTL where the system tried to run over the 10gbe port rather than the IB port. This caused lots of RDMA errors (RDMA_CM_EVENT_ADDR_ERROR) which were somewhat hard to diagnose. We were able to discover the issue via &#226;&#128;&#156;&#226;&#128;&#148;mca btl_base_verbose 30&#226;&#128;&#157;. This showed the ports being used. From there, we were able to setup our openmpi module to use &#226;&#128;&#156; btl_openib_if_include &#226;&#128;&#156;mlx4_0:1&#226;&#128;&#157; &#226;&#128;&#156; and put openmpi traffic over the proper port. There wasn&#226;&#128;&#153;t much documentation on the issue, so I wanted to send it out to the mailing list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, is there a reason that openib attempts to use the 10gbe interface as well? What is the cause for this as the default behavior? If this sort of configuration gets more common, it may come up more in the future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nathan Grodowitz
</span><br>
<span class="quotelev1">&gt; ITSD Linux R&amp;D Scientific Platforms
</span><br>
<span class="quotelev1">&gt; HPC Admin
</span><br>
<span class="quotelev1">&gt; Office:865-576-4715
</span><br>
<span class="quotelev1">&gt; Cell:865-347-4247
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29423.php">http://www.open-mpi.org/community/lists/users/2016/06/29423.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29425.php">Jason Maldonis: "[OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29423.php">Grodowitz, Nathan T.: "[OMPI users] Openib Selection and Dual Port ConnectX"</a>
<li><strong>In reply to:</strong> <a href="29423.php">Grodowitz, Nathan T.: "[OMPI users] Openib Selection and Dual Port ConnectX"</a>
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
