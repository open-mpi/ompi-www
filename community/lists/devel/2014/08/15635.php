<?
$subject_val = "Re: [OMPI devel] trunk hang when nodes have similar but private network";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 12:52:48 2014" -->
<!-- isoreceived="20140813165248" -->
<!-- sent="Wed, 13 Aug 2014 12:52:47 -0400" -->
<!-- isosent="20140813165247" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hang when nodes have similar but private network" -->
<!-- id="CAMJJpkUcUx=8uYNpKQH8RdpVB+A5dC0zLc6GfrQ7u06i3S1yqQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FC1E2922-AB00-48F7-A815-5660E19F4E19_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hang when nodes have similar but private network<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 12:52:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15636.php">Paul Hargrove: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Previous message:</strong> <a href="15634.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="15631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<li><strong>Reply:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are many differences between the trunk and 1.8 regarding the TCP BTL.
<br>
The major I remember about is that the TCP in the trunk is reporting errors
<br>
to the upper level via the callbacks attached to fragments, while the 1.8
<br>
TCP BTL doesn't.
<br>
<p>So, I guess that once a connection to a particular endpoint fails, the
<br>
trunk is getting the errors reported via the cb and then takes some drastic
<br>
measure. In the 1.8 we might fallback and try another IP address before
<br>
giving up.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Wed, Aug 13, 2014 at 10:55 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think this is expected behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have networks that you need Open MPI to ignore (e.g., a private
</span><br>
<span class="quotelev1">&gt; network that *looks* reachable between multiple servers -- because the
</span><br>
<span class="quotelev1">&gt; interfaces are on the same subnet -- but actually *isn't*), then the
</span><br>
<span class="quotelev1">&gt; include/exclude mechanism is the right way to exclude them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, I'm not sure why the behavior is different between trunk
</span><br>
<span class="quotelev1">&gt; and v1.8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 13, 2014, at 1:41 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i noticed mpirun (trunk) hangs when running any mpi program on two nodes
</span><br>
<span class="quotelev2">&gt; &gt; *and* each node has a private network with the same ip
</span><br>
<span class="quotelev2">&gt; &gt; (in my case, each node has a private network to a MIC)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; in order to reproduce the problem, you can simply run (as root) on the
</span><br>
<span class="quotelev2">&gt; &gt; two compute nodes
</span><br>
<span class="quotelev2">&gt; &gt; brctl addbr br0
</span><br>
<span class="quotelev2">&gt; &gt; ifconfig br0 192.168.255.1 netmask 255.255.255.0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun will hang
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a workaroung is to add --mca btl_tcp_if_include eth0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; v1.8 does not hang in this case
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15623.php">http://www.open-mpi.org/community/lists/devel/2014/08/15623.php</a>
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15631.php">http://www.open-mpi.org/community/lists/devel/2014/08/15631.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15635/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15636.php">Paul Hargrove: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Previous message:</strong> <a href="15634.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="15631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<li><strong>Reply:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
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
