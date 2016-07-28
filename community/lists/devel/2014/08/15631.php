<?
$subject_val = "Re: [OMPI devel] trunk hang when nodes have similar but private network";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 10:55:17 2014" -->
<!-- isoreceived="20140813145517" -->
<!-- sent="Wed, 13 Aug 2014 14:55:16 +0000" -->
<!-- isosent="20140813145516" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hang when nodes have similar but private network" -->
<!-- id="FC1E2922-AB00-48F7-A815-5660E19F4E19_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 10:55:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15632.php">Rolf vandeVaart: "[OMPI devel] Errors on aborting programs on 1.8 r32515"</a>
<li><strong>Previous message:</strong> <a href="15630.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="15623.php">Gilles Gouaillardet: "[OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15635.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Reply:</strong> <a href="15635.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Reply:</strong> <a href="15636.php">Paul Hargrove: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this is expected behavior.
<br>
<p>If you have networks that you need Open MPI to ignore (e.g., a private network that *looks* reachable between multiple servers -- because the interfaces are on the same subnet -- but actually *isn't*), then the include/exclude mechanism is the right way to exclude them.
<br>
<p>That being said, I'm not sure why the behavior is different between trunk and v1.8.
<br>
<p><p>On Aug 13, 2014, at 1:41 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15623.php">http://www.open-mpi.org/community/lists/devel/2014/08/15623.php</a>
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
<li><strong>Next message:</strong> <a href="15632.php">Rolf vandeVaart: "[OMPI devel] Errors on aborting programs on 1.8 r32515"</a>
<li><strong>Previous message:</strong> <a href="15630.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="15623.php">Gilles Gouaillardet: "[OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15635.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Reply:</strong> <a href="15635.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Reply:</strong> <a href="15636.php">Paul Hargrove: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
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
