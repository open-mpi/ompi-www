<?
$subject_val = "Re: [OMPI devel] trunk hang when nodes have similar but private network";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 13:57:50 2014" -->
<!-- isoreceived="20140813175750" -->
<!-- sent="Wed, 13 Aug 2014 10:57:48 -0700" -->
<!-- isosent="20140813175748" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hang when nodes have similar but private network" -->
<!-- id="CAAvDA14xpO0+YGjqchFY2WkOUZkMpYxK9yNw8ePBGCc1pfjs2w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 13:57:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15637.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="15635.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>In reply to:</strong> <a href="15631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<li><strong>Reply:</strong> <a href="15639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that in this case one *could* add logic that would disqualify the
<br>
subnet because every compute node in the job has the SAME address.  In
<br>
fact, any subnet on which two or more compute nodes have the same address
<br>
must be suspect.  If this logic were introduced, the 127.0.0.1 loopback
<br>
address wouldn't need to be a special case.
<br>
<p>This is just an observation, not a feature request (at least not on my
<br>
part).
<br>
<p>-Paul
<br>
<p><p>On Wed, Aug 13, 2014 at 7:55 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15636/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15637.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="15635.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>In reply to:</strong> <a href="15631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<li><strong>Reply:</strong> <a href="15639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
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
