<?
$subject_val = "Re: [OMPI users] IB to some nodes but TCP for others";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 19:15:41 2015" -->
<!-- isoreceived="20150616231541" -->
<!-- sent="Tue, 16 Jun 2015 23:15:39 +0000" -->
<!-- isosent="20150616231539" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB to some nodes but TCP for others" -->
<!-- id="0CC397E1-06B5-4D70-B6EF-B8EFB1238CBE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMsSzSAbWu-8kRCArTvwKvgy4=d6+tVSOD1a4TNVPoj1_8bdvA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IB to some nodes but TCP for others<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-16 19:15:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27145.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<li><strong>Previous message:</strong> <a href="27143.php">Ralph Castain: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>In reply to:</strong> <a href="27141.php">Tim Miller: "[OMPI users] IB to some nodes but TCP for others"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27244.php">Tim Miller: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27244.php">Tim Miller: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have different IB subnet IDs?  That would be the only way for Open MPI to tell the two IB subnets apart.
<br>
<p><p><p><span class="quotelev1">&gt; On Jun 16, 2015, at 1:25 PM, Tim Miller &lt;btamiller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a set of nodes which are all connected via InfiniBand, but all are mutually connected. For example, nodes 1-32 are connected to IB switch A and 33-64 are connected to switch B, but there is no IB connection between switches A and B. However, all nodes are mutually routable over TCP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What we'd like to do is tell OpenMPI to use IB when communicating amongst nodes 1-32 or 33-64, but to use TCP whenever a node in the set 1-32 needs to talk to another node in the set 33-64 or vice-versa. We've written an application in such a way that we can confine most of the bandwidth and latency sensitive operations to within groups of 32 nodes, but members of the two groups do have to communicate infrequently via MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any way to tell OpenMPI to use IB within an IB-connected group and TCP for inter-group communications? Obvoiously, we would need to tell OpenMPI the membership of the two groups. If there's no such functionality, would it be a difficult thing to hack in (I'd be glad to give it a try myself, but I'm not that familiar with the codebase, so a couple of pointers would be helpful, or a note saying I'm crazy for trying).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27141.php">http://www.open-mpi.org/community/lists/users/2015/06/27141.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27145.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<li><strong>Previous message:</strong> <a href="27143.php">Ralph Castain: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>In reply to:</strong> <a href="27141.php">Tim Miller: "[OMPI users] IB to some nodes but TCP for others"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27244.php">Tim Miller: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27244.php">Tim Miller: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
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
