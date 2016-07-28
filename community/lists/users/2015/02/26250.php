<?
$subject_val = "Re: [OMPI users] using multiple IB connections between hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 22:29:44 2015" -->
<!-- isoreceived="20150202032944" -->
<!-- sent="Mon, 02 Feb 2015 12:30:05 +0900" -->
<!-- isosent="20150202033005" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using multiple IB connections between hosts" -->
<!-- id="54CEEF3D.7040901_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFGXdkxAJ6f1Jq_dWe5Y5s8i3Qk8NOxZPRNQ6AajKWE-2jcN0Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] using multiple IB connections between hosts<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-01 22:30:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26251.php">Ralph Castain: "Re: [OMPI users] slurm openmpi 1.8.3 core bindings"</a>
<li><strong>Previous message:</strong> <a href="26249.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26243.php">Dave Turner: "[OMPI users] using multiple IB connections between hosts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>the QDR Infiniband uses the openib btl (by default :
<br>
btl_openib_exclusivity=1024)
<br>
i assume the RoCE 10Gbps card is using the tcp btl (by default :
<br>
btl_tcp_exclusivity=100)
<br>
<p>that means that by default, when both openib and tcp btl could be used,
<br>
the tcp btl is discarded.
<br>
<p>could you give a try by settings the same exclusivity value on both btl ?
<br>
e.g.
<br>
OMPI_MCA_btl_tcp_exclusivity=1024 mpirun ...
<br>
<p>assuming this is enough the get traffic on both interfaces, you migh
<br>
want *not* to use the eth0 interface
<br>
(e.g. OMPI_MCA_btl_tcp_if_exlude=eth0 ...)
<br>
<p>you might also have to tweak the bandwidth parameters (i assume QDR
<br>
interface should get 4 times more
<br>
traffic than the 10Gbe interface)
<br>
by default :
<br>
btl_openib_bandwidth=4
<br>
btl_tcp_bandwidth=100
<br>
/* value is in Mbps, so the openib value should be 40960 (!), and in
<br>
your case, tcp bandwidth should be 10240 */
<br>
you might also want to try btl_*_bandwidth=0 (auto-detect value at run time)
<br>
<p>i hope this helps,
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
On 2015/01/29 9:45, Dave Turner wrote:
<br>
<span class="quotelev1">&gt;      I ran some aggregate bandwidth tests between 2 hosts connected by
</span><br>
<span class="quotelev1">&gt; both QDR InfiniBand and RoCE enabled 10 Gbps Mellanox cards.  The tests
</span><br>
<span class="quotelev1">&gt; measured the aggregate performance for 16 cores on one host communicating
</span><br>
<span class="quotelev1">&gt; with 16 on the second host.  I saw the same performance as with the QDR
</span><br>
<span class="quotelev1">&gt; InfiniBand alone, so it appears that the addition of the 10 Gbps RoCE cards
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; not helping.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Should OpenMPI be using both in this case by default, or is there
</span><br>
<span class="quotelev1">&gt; something
</span><br>
<span class="quotelev1">&gt; I need to configure to allow for this?  I suppose this is the same question
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; how to make use of 2 identical IB connections on each node, or is the system
</span><br>
<span class="quotelev1">&gt; simply ignoring the 10 Gbps cards because they are the slower option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Any clarification on this would be helpful.  The only posts I've found
</span><br>
<span class="quotelev1">&gt; are very
</span><br>
<span class="quotelev1">&gt; old and discuss mostly channel bonding of 1 Gbps cards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Dave Turner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26243.php">http://www.open-mpi.org/community/lists/users/2015/01/26243.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26251.php">Ralph Castain: "Re: [OMPI users] slurm openmpi 1.8.3 core bindings"</a>
<li><strong>Previous message:</strong> <a href="26249.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26243.php">Dave Turner: "[OMPI users] using multiple IB connections between hosts"</a>
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
