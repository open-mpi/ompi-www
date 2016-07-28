<?
$subject_val = "Re: [OMPI devel] trunk hang when nodes have similar but private	network";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 15:39:38 2014" -->
<!-- isoreceived="20140813193938" -->
<!-- sent="Wed, 13 Aug 2014 19:39:36 +0000" -->
<!-- isosent="20140813193936" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hang when nodes have similar but private	network" -->
<!-- id="33AEF3D2-6ACD-47F1-AE49-8F875F3E7A89_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14xpO0+YGjqchFY2WkOUZkMpYxK9yNw8ePBGCc1pfjs2w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hang when nodes have similar but private	network<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 15:39:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15640.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<li><strong>In reply to:</strong> <a href="15636.php">Paul Hargrove: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul: I think this is a slippery slope.
<br>
<p>As I understand it, these private/on-host IP addresses are generated somewhat randomly (e.g., for on-host VM networking -- I don't know if the IP's for Phi on-host networking are pseudo-random or [effectively] fixed).  So you might end up in a situation like this:
<br>
<p>server A: has br0 on-host IP address 10.0.0.23/8 ***same as server C
<br>
server B: has br0 on-host IP address 10.0.0.25/8
<br>
server C: has br0 on-host IP address 10.0.0.23/8 ***same as server A
<br>
server D: has br0 on-host IP address 10.0.0.107/8
<br>
<p>In this case, servers A and C will detect that they have the same IP.  &quot;Ah ha!&quot; they say. &quot;I'll just not use br0, because clearly this is erroneous&quot;.
<br>
<p>But how will servers B and D know this?
<br>
<p>You'll likely get the same &quot;hang&quot; behavior that we currently have, because B may try to send to A on 10.0.0.23/8.
<br>
<p>Hence, the additional logic may not actually solve the problem.
<br>
<p>I'm thinking that this is a human-configuration issue -- there may not be a good way to detect this automatically.
<br>
<p>...unless there's a bit in Linux interfaces that says &quot;this is an on-host network&quot;.  Does that exist?  Because that would be a better way to disqualify Linux IP interfaces.
<br>
<p><p>On Aug 13, 2014, at 1:57 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think that in this case one *could* add logic that would disqualify the subnet because every compute node in the job has the SAME address.  In fact, any subnet on which two or more compute nodes have the same address must be suspect.  If this logic were introduced, the 127.0.0.1 loopback address wouldn't need to be a special case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is just an observation, not a feature request (at least not on my part).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 13, 2014 at 7:55 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I think this is expected behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have networks that you need Open MPI to ignore (e.g., a private network that *looks* reachable between multiple servers -- because the interfaces are on the same subnet -- but actually *isn't*), then the include/exclude mechanism is the right way to exclude them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, I'm not sure why the behavior is different between trunk and v1.8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 13, 2014, at 1:41 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15623.php">http://www.open-mpi.org/community/lists/devel/2014/08/15623.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15631.php">http://www.open-mpi.org/community/lists/devel/2014/08/15631.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15636.php">http://www.open-mpi.org/community/lists/devel/2014/08/15636.php</a>
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
<li><strong>Next message:</strong> <a href="15640.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<li><strong>In reply to:</strong> <a href="15636.php">Paul Hargrove: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
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
