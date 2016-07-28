<?
$subject_val = "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 13:38:23 2015" -->
<!-- isoreceived="20150918173823" -->
<!-- sent="Fri, 18 Sep 2015 17:37:48 +0000" -->
<!-- isosent="20150918173748" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI" -->
<!-- id="5DD7B13F-C5E7-4534-8FC1-40490BBCDF84_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAC3nB+5GxYcD1r3QyGkDK0WHGOW3toi57mqq_8z++ExJuwqvTw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-18 13:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Previous message:</strong> <a href="27625.php">Dave Love: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>In reply to:</strong> <a href="27612.php">Shang Li: "[OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Reply:</strong> <a href="27627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Reply:</strong> <a href="27629.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI uses different heuristics depending on whether IP addresses are public or private.
<br>
<p>All your IP addresses are technically &quot;public&quot; -- they're not in 10.x.x.x or 192.168.x.x, for example.
<br>
<p>So Open MPI assumes that they are all routable to each other.
<br>
<p>You might want to change your 3 networks to be 10.1.x.x/16, 10.2.x.x/16, and 10.3.x.x/16.  See if that makes it work.
<br>
<p><p><span class="quotelev1">&gt; On Sep 17, 2015, at 12:31 PM, Shang Li &lt;shawn.li.xjtu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wanted to setup a 3-node ring network, each connects to the other 2 using 2 Ethernet ports directly without a switch/router.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The interface configurations could be found in the following picture.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://www.dropbox.com/s/g75i51rrjs51b21/mpi-graph%20-%20New%20Page.png?dl=0">https://www.dropbox.com/s/g75i51rrjs51b21/mpi-graph%20-%20New%20Page.png?dl=0</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've used ifconfig on each node to configure each port, and made sure I can ssh from each node to the other 2 nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But a simple ring_c example doesn't work... So I turn on  --mca btl_base_verbose 30, I could see that node1 was trying to use 23.0.0.2  (linke between node2 and 3) to get to node2 though there is a direct link to node 2. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output log is like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node1:01828] btl: tcp: attempting to connect() to [[19529,1],1] address 23.0.0.2 on port 1024
</span><br>
<span class="quotelev1">&gt; [[19529,1],0][btl_tcp_endpoint.c:606:mca_btl_tcp_endpoint_start_connect] from node1 to: node2 Unable to connect to the peer 23.0.0.2  on port 4: Network is unreachable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've read the following posts and FAQs but still couldn't understand this kind of behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3">http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25810.php">http://www.open-mpi.org/community/lists/users/2014/11/25810.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any pointers would be appreciated! Thanks in advance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My open-mpi info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Package: Open MPI gtbldadm_at_ubuntu-12 Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.0.0.22
</span><br>
<span class="quotelev1">&gt;   Open MPI repo revision: git714842d
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: May 27, 2015
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.0.0.22
</span><br>
<span class="quotelev1">&gt;   Open RTE repo revision: git714842d
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: May 27, 2015
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.0.0.22
</span><br>
<span class="quotelev1">&gt;       OPAL repo revision: git714842d
</span><br>
<span class="quotelev1">&gt;        OPAL release date: May 27, 2015
</span><br>
<span class="quotelev1">&gt;                  MPI API: 2.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Shawn
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27612.php">http://www.open-mpi.org/community/lists/users/2015/09/27612.php</a>
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
<li><strong>Next message:</strong> <a href="27627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Previous message:</strong> <a href="27625.php">Dave Love: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>In reply to:</strong> <a href="27612.php">Shang Li: "[OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Reply:</strong> <a href="27627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Reply:</strong> <a href="27629.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
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
