<?
$subject_val = "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 19:26:13 2015" -->
<!-- isoreceived="20150918232613" -->
<!-- sent="Sat, 19 Sep 2015 08:26:12 +0900" -->
<!-- isosent="20150918232612" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI" -->
<!-- id="CAAkFZ5sHkqLHr9dO2Q06H2kjZfNDahJNtOQZFRbcZdK3ubVQZw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5DD7B13F-C5E7-4534-8FC1-40490BBCDF84_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-18 19:26:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open	MPI"</a>
<li><strong>Previous message:</strong> <a href="27628.php">Shang Li: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>In reply to:</strong> <a href="27626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open	MPI"</a>
<li><strong>Reply:</strong> <a href="27630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open	MPI"</a>
<li><strong>Reply:</strong> <a href="27631.php">George Bosilca: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I built a similar environment with master and private ip and that does not
<br>
work.
<br>
my understanding is each tasks has two tcp btl (one per interface),
<br>
and there is currently no mechanism to tell that a node is unreachable
<br>
via a given btl.
<br>
(a btl picks the &quot;best&quot; interface for each node, but it
<br>
never picks zero interface)
<br>
<p>in order to support this, we should add extra checks to ensure the best
<br>
interface is reachable
<br>
(that could be achieved &quot;statically&quot; by parsing the routing tables, or
<br>
&quot;dynamically&quot; by &quot;pinging&quot; the remote interface)
<br>
<p>On master, there is a reachable framework. Could/should the tcp btl simply
<br>
use it ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, September 19, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI uses different heuristics depending on whether IP addresses are
</span><br>
<span class="quotelev1">&gt; public or private.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All your IP addresses are technically &quot;public&quot; -- they're not in 10.x.x.x
</span><br>
<span class="quotelev1">&gt; or 192.168.x.x, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So Open MPI assumes that they are all routable to each other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to change your 3 networks to be 10.1.x.x/16, 10.2.x.x/16,
</span><br>
<span class="quotelev1">&gt; and 10.3.x.x/16.  See if that makes it work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 17, 2015, at 12:31 PM, Shang Li &lt;shawn.li.xjtu_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wanted to setup a 3-node ring network, each connects to the other 2
</span><br>
<span class="quotelev1">&gt; using 2 Ethernet ports directly without a switch/router.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The interface configurations could be found in the following picture.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.dropbox.com/s/g75i51rrjs51b21/mpi-graph%20-%20New%20Page.png?dl=0">https://www.dropbox.com/s/g75i51rrjs51b21/mpi-graph%20-%20New%20Page.png?dl=0</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've used ifconfig on each node to configure each port, and made sure I
</span><br>
<span class="quotelev1">&gt; can ssh from each node to the other 2 nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But a simple ring_c example doesn't work... So I turn on  --mca
</span><br>
<span class="quotelev1">&gt; btl_base_verbose 30, I could see that node1 was trying to use 23.0.0.2
</span><br>
<span class="quotelev1">&gt; (linke between node2 and 3) to get to node2 though there is a direct link
</span><br>
<span class="quotelev1">&gt; to node 2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The output log is like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [node1:01828] btl: tcp: attempting to connect() to [[19529,1],1] address
</span><br>
<span class="quotelev1">&gt; 23.0.0.2 on port 1024
</span><br>
<span class="quotelev2">&gt; &gt; [[19529,1],0][btl_tcp_endpoint.c:606:mca_btl_tcp_endpoint_start_connect]
</span><br>
<span class="quotelev1">&gt; from node1 to: node2 Unable to connect to the peer 23.0.0.2  on port 4:
</span><br>
<span class="quotelev1">&gt; Network is unreachable
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've read the following posts and FAQs but still couldn't understand
</span><br>
<span class="quotelev1">&gt; this kind of behavior.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3">http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3</a>
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25810.php">http://www.open-mpi.org/community/lists/users/2014/11/25810.php</a>
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
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27612.php">http://www.open-mpi.org/community/lists/users/2015/09/27612.php</a>
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27626.php">http://www.open-mpi.org/community/lists/users/2015/09/27626.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27629/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open	MPI"</a>
<li><strong>Previous message:</strong> <a href="27628.php">Shang Li: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>In reply to:</strong> <a href="27626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open	MPI"</a>
<li><strong>Reply:</strong> <a href="27630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open	MPI"</a>
<li><strong>Reply:</strong> <a href="27631.php">George Bosilca: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
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
