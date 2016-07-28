<?
$subject_val = "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 19 01:25:54 2015" -->
<!-- isoreceived="20150919052554" -->
<!-- sent="Sat, 19 Sep 2015 01:25:50 -0400" -->
<!-- isosent="20150919052550" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI" -->
<!-- id="7508313E-D746-41CB-9FEF-9FDAC5073DE7_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5sHkqLHr9dO2Q06H2kjZfNDahJNtOQZFRbcZdK3ubVQZw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-19 01:25:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27632.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>Previous message:</strong> <a href="27630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open	MPI"</a>
<li><strong>In reply to:</strong> <a href="27629.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whatever the original choice(s) of the BTL are, an interface should disqualify itself after few missed connections (based on the retry MCA parameter). However, in order to get anything sensible in this configuration you should change the default timeout to a reasonable value (30 seconds?).
<br>
<p>While this approach has an overhead for short running applications, for larger runs it should provide a decent solution.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; On Sep 18, 2015, at 19:26 , Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I built a similar environment with master and private ip and that does not work.
</span><br>
<span class="quotelev1">&gt; my understanding is each tasks has two tcp btl (one per interface),
</span><br>
<span class="quotelev1">&gt; and there is currently no mechanism to tell that a node is unreachable
</span><br>
<span class="quotelev1">&gt; via a given btl.
</span><br>
<span class="quotelev1">&gt; (a btl picks the &quot;best&quot; interface for each node, but it never picks zero interface)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in order to support this, we should add extra checks to ensure the best interface is reachable
</span><br>
<span class="quotelev1">&gt; (that could be achieved &quot;statically&quot; by parsing the routing tables, or &quot;dynamically&quot; by &quot;pinging&quot; the remote interface)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On master, there is a reachable framework. Could/should the tcp btl simply use it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Saturday, September 19, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Open MPI uses different heuristics depending on whether IP addresses are public or private.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All your IP addresses are technically &quot;public&quot; -- they're not in 10.x.x.x or 192.168.x.x, for example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So Open MPI assumes that they are all routable to each other.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might want to change your 3 networks to be 10.1.x.x/16, 10.2.x.x/16, and 10.3.x.x/16.  See if that makes it work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 17, 2015, at 12:31 PM, Shang Li &lt;shawn.li.xjtu_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wanted to setup a 3-node ring network, each connects to the other 2 using 2 Ethernet ports directly without a switch/router.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The interface configurations could be found in the following picture.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://www.dropbox.com/s/g75i51rrjs51b21/mpi-graph%20-%20New%20Page.png?dl=0">https://www.dropbox.com/s/g75i51rrjs51b21/mpi-graph%20-%20New%20Page.png?dl=0</a> &lt;<a href="https://www.dropbox.com/s/g75i51rrjs51b21/mpi-graph%20-%20New%20Page.png?dl=0">https://www.dropbox.com/s/g75i51rrjs51b21/mpi-graph%20-%20New%20Page.png?dl=0</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've used ifconfig on each node to configure each port, and made sure I can ssh from each node to the other 2 nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But a simple ring_c example doesn't work... So I turn on  --mca btl_base_verbose 30, I could see that node1 was trying to use 23.0.0.2  (linke between node2 and 3) to get to node2 though there is a direct link to node 2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The output log is like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [node1:01828] btl: tcp: attempting to connect() to [[19529,1],1] address 23.0.0.2 on port 1024
</span><br>
<span class="quotelev2">&gt; &gt; [[19529,1],0][btl_tcp_endpoint.c:606:mca_btl_tcp_endpoint_start_connect] from node1 to: node2 Unable to connect to the peer 23.0.0.2  on port 4: Network is unreachable
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've read the following posts and FAQs but still couldn't understand this kind of behavior.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3">http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3</a> &lt;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3">http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a> &lt;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25810.php">http://www.open-mpi.org/community/lists/users/2014/11/25810.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25810.php">http://www.open-mpi.org/community/lists/users/2014/11/25810.php</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any pointers would be appreciated! Thanks in advance!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My open-mpi info:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Package: Open MPI gtbldadm_at_ubuntu-12 Distribution
</span><br>
<span class="quotelev2">&gt; &gt;                 Open MPI: 1.0.0.22
</span><br>
<span class="quotelev2">&gt; &gt;   Open MPI repo revision: git714842d
</span><br>
<span class="quotelev2">&gt; &gt;    Open MPI release date: May 27, 2015
</span><br>
<span class="quotelev2">&gt; &gt;                 Open RTE: 1.0.0.22
</span><br>
<span class="quotelev2">&gt; &gt;   Open RTE repo revision: git714842d
</span><br>
<span class="quotelev2">&gt; &gt;    Open RTE release date: May 27, 2015
</span><br>
<span class="quotelev2">&gt; &gt;                     OPAL: 1.0.0.22
</span><br>
<span class="quotelev2">&gt; &gt;       OPAL repo revision: git714842d
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL release date: May 27, 2015
</span><br>
<span class="quotelev2">&gt; &gt;                  MPI API: 2.1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best,
</span><br>
<span class="quotelev2">&gt; &gt; Shawn
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27612.php">http://www.open-mpi.org/community/lists/users/2015/09/27612.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27612.php">http://www.open-mpi.org/community/lists/users/2015/09/27612.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27626.php">http://www.open-mpi.org/community/lists/users/2015/09/27626.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27626.php">http://www.open-mpi.org/community/lists/users/2015/09/27626.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27629.php">http://www.open-mpi.org/community/lists/users/2015/09/27629.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27631/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27632.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>Previous message:</strong> <a href="27630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open	MPI"</a>
<li><strong>In reply to:</strong> <a href="27629.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
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
