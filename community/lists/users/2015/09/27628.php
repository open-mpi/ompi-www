<?
$subject_val = "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 16:31:40 2015" -->
<!-- isoreceived="20150918203140" -->
<!-- sent="Fri, 18 Sep 2015 16:31:19 -0400" -->
<!-- isosent="20150918203119" -->
<!-- name="Shang Li" -->
<!-- email="shawn.li.xjtu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI" -->
<!-- id="CAC3nB+7VJymHjDEE1nQhEJ9osKMrgQ-d51ewrQv9N=L0_715Sg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="339DC4A5-B694-41DF-98A0-4D9C51B2138B_at_cisco.com" -->
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
<strong>From:</strong> Shang Li (<em>shawn.li.xjtu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-18 16:31:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27629.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Previous message:</strong> <a href="27627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>In reply to:</strong> <a href="27627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27629.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for your suggestion. (And also thanks to Gilles!) I'll play around
<br>
with your suggestions and let you know if I make any progresses.
<br>
<p>About the version of my Open MPI, it's an Texas Instruments'
<br>
implementation. So the version number 1.0.0.22 is their own version.. I
<br>
looked at their documentation and it says it's based on Open MPI 1.7.1. So
<br>
I guess it's not that old lol.
<br>
<p>Thanks again,
<br>
Shang
<br>
<p>On Fri, Sep 18, 2015 at 1:38 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Whoa; wait -- are you really using Open MPI v1.0?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's over 10 years old...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you update to Open MPI v1.10?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 18, 2015, at 1:37 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI uses different heuristics depending on whether IP addresses are
</span><br>
<span class="quotelev1">&gt; public or private.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All your IP addresses are technically &quot;public&quot; -- they're not in
</span><br>
<span class="quotelev1">&gt; 10.x.x.x or 192.168.x.x, for example.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So Open MPI assumes that they are all routable to each other.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You might want to change your 3 networks to be 10.1.x.x/16, 10.2.x.x/16,
</span><br>
<span class="quotelev1">&gt; and 10.3.x.x/16.  See if that makes it work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sep 17, 2015, at 12:31 PM, Shang Li &lt;shawn.li.xjtu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I wanted to setup a 3-node ring network, each connects to the other 2
</span><br>
<span class="quotelev1">&gt; using 2 Ethernet ports directly without a switch/router.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The interface configurations could be found in the following picture.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.dropbox.com/s/g75i51rrjs51b21/mpi-graph%20-%20New%20Page.png?dl=0">https://www.dropbox.com/s/g75i51rrjs51b21/mpi-graph%20-%20New%20Page.png?dl=0</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've used ifconfig on each node to configure each port, and made sure I
</span><br>
<span class="quotelev1">&gt; can ssh from each node to the other 2 nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But a simple ring_c example doesn't work... So I turn on  --mca
</span><br>
<span class="quotelev1">&gt; btl_base_verbose 30, I could see that node1 was trying to use 23.0.0.2
</span><br>
<span class="quotelev1">&gt; (linke between node2 and 3) to get to node2 though there is a direct link
</span><br>
<span class="quotelev1">&gt; to node 2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The output log is like:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node1:01828] btl: tcp: attempting to connect() to [[19529,1],1]
</span><br>
<span class="quotelev1">&gt; address 23.0.0.2 on port 1024
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [[19529,1],0][btl_tcp_endpoint.c:606:mca_btl_tcp_endpoint_start_connect]
</span><br>
<span class="quotelev1">&gt; from node1 to: node2 Unable to connect to the peer 23.0.0.2  on port 4:
</span><br>
<span class="quotelev1">&gt; Network is unreachable
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've read the following posts and FAQs but still couldn't understand
</span><br>
<span class="quotelev1">&gt; this kind of behavior.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3">http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25810.php">http://www.open-mpi.org/community/lists/users/2014/11/25810.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any pointers would be appreciated! Thanks in advance!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My open-mpi info:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Package: Open MPI gtbldadm_at_ubuntu-12 Distribution
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Open MPI: 1.0.0.22
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Open MPI repo revision: git714842d
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Open MPI release date: May 27, 2015
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Open RTE: 1.0.0.22
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Open RTE repo revision: git714842d
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Open RTE release date: May 27, 2015
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    OPAL: 1.0.0.22
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      OPAL repo revision: git714842d
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       OPAL release date: May 27, 2015
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MPI API: 2.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Shawn
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27612.php">http://www.open-mpi.org/community/lists/users/2015/09/27612.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27627.php">http://www.open-mpi.org/community/lists/users/2015/09/27627.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27629.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Previous message:</strong> <a href="27627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>In reply to:</strong> <a href="27627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27629.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
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
