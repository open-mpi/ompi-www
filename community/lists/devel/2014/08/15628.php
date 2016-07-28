<?
$subject_val = "Re: [OMPI devel] trunk hang when nodes have similar but private network";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 08:54:24 2014" -->
<!-- isoreceived="20140813125424" -->
<!-- sent="Wed, 13 Aug 2014 05:54:24 -0700" -->
<!-- isosent="20140813125424" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hang when nodes have similar but private network" -->
<!-- id="CAMD57of9vhUEjsOaGv45t3oyqKO2P-X6PuSLtRnqD_xz7m8pog_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53EAFA8B.7080603_at_iferc.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 08:54:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15629.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="15627.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="15623.php">Gilles Gouaillardet: "[OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I can't get to this until next week, but will look at it then
<br>
<p><p><p>On Tue, Aug 12, 2014 at 10:41 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i noticed mpirun (trunk) hangs when running any mpi program on two nodes
</span><br>
<span class="quotelev1">&gt; *and* each node has a private network with the same ip
</span><br>
<span class="quotelev1">&gt; (in my case, each node has a private network to a MIC)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in order to reproduce the problem, you can simply run (as root) on the
</span><br>
<span class="quotelev1">&gt; two compute nodes
</span><br>
<span class="quotelev1">&gt; brctl addbr br0
</span><br>
<span class="quotelev1">&gt; ifconfig br0 192.168.255.1 netmask 255.255.255.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun will hang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a workaroung is to add --mca btl_tcp_if_include eth0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.8 does not hang in this case
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15623.php">http://www.open-mpi.org/community/lists/devel/2014/08/15623.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15629.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="15627.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="15623.php">Gilles Gouaillardet: "[OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
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
