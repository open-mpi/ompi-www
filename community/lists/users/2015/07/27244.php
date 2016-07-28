<?
$subject_val = "Re: [OMPI users] IB to some nodes but TCP for others";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 18:24:54 2015" -->
<!-- isoreceived="20150701222454" -->
<!-- sent="Wed, 1 Jul 2015 18:24:53 -0400" -->
<!-- isosent="20150701222453" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB to some nodes but TCP for others" -->
<!-- id="CAMsSzSAsoSSR8Ch5KSGhkVvWm3hWb2av3NXc1PbQz62ZBzsk3A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0CC397E1-06B5-4D70-B6EF-B8EFB1238CBE_at_cisco.com" -->
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
<strong>From:</strong> Tim Miller (<em>btamiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 18:24:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27245.php">Saliya Ekanayake: "[OMPI users] Binding width affects allgatherv performance?"</a>
<li><strong>Previous message:</strong> <a href="27243.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27144.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Sorry for the late reply on this. I've been digging through the OpenMPI
<br>
FAQ. I've never explicitly set the subnet IDs for my IB subnets, so I
<br>
suspect I'm using the factory defaults. Probably, if I change this, it will
<br>
&quot;just work&quot;. I'll see if the end user is still interested in testing this
<br>
and, if so, try it out.
<br>
<p>Thanks,
<br>
Tim
<br>
<p>On Tue, Jun 16, 2015 at 7:15 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Do you have different IB subnet IDs?  That would be the only way for Open
</span><br>
<span class="quotelev1">&gt; MPI to tell the two IB subnets apart.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 16, 2015, at 1:25 PM, Tim Miller &lt;btamiller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have a set of nodes which are all connected via InfiniBand, but all
</span><br>
<span class="quotelev1">&gt; are mutually connected. For example, nodes 1-32 are connected to IB switch
</span><br>
<span class="quotelev1">&gt; A and 33-64 are connected to switch B, but there is no IB connection
</span><br>
<span class="quotelev1">&gt; between switches A and B. However, all nodes are mutually routable over TCP.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What we'd like to do is tell OpenMPI to use IB when communicating
</span><br>
<span class="quotelev1">&gt; amongst nodes 1-32 or 33-64, but to use TCP whenever a node in the set 1-32
</span><br>
<span class="quotelev1">&gt; needs to talk to another node in the set 33-64 or vice-versa. We've written
</span><br>
<span class="quotelev1">&gt; an application in such a way that we can confine most of the bandwidth and
</span><br>
<span class="quotelev1">&gt; latency sensitive operations to within groups of 32 nodes, but members of
</span><br>
<span class="quotelev1">&gt; the two groups do have to communicate infrequently via MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there any way to tell OpenMPI to use IB within an IB-connected group
</span><br>
<span class="quotelev1">&gt; and TCP for inter-group communications? Obvoiously, we would need to tell
</span><br>
<span class="quotelev1">&gt; OpenMPI the membership of the two groups. If there's no such functionality,
</span><br>
<span class="quotelev1">&gt; would it be a difficult thing to hack in (I'd be glad to give it a try
</span><br>
<span class="quotelev1">&gt; myself, but I'm not that familiar with the codebase, so a couple of
</span><br>
<span class="quotelev1">&gt; pointers would be helpful, or a note saying I'm crazy for trying).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27141.php">http://www.open-mpi.org/community/lists/users/2015/06/27141.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27144.php">http://www.open-mpi.org/community/lists/users/2015/06/27144.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27244/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27245.php">Saliya Ekanayake: "[OMPI users] Binding width affects allgatherv performance?"</a>
<li><strong>Previous message:</strong> <a href="27243.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27144.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IB to some nodes but TCP for others"</a>
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
