<?
$subject_val = "[OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 12:31:59 2015" -->
<!-- isoreceived="20150917163159" -->
<!-- sent="Thu, 17 Sep 2015 12:31:38 -0400" -->
<!-- isosent="20150917163138" -->
<!-- name="Shang Li" -->
<!-- email="shawn.li.xjtu_at_[hidden]" -->
<!-- subject="[OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI" -->
<!-- id="CAC3nB+5GxYcD1r3QyGkDK0WHGOW3toi57mqq_8z++ExJuwqvTw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI<br>
<strong>From:</strong> Shang Li (<em>shawn.li.xjtu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 12:31:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27613.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27616.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Reply:</strong> <a href="27616.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Reply:</strong> <a href="27626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I wanted to setup a 3-node ring network, each connects to the other 2 using
<br>
2 Ethernet ports directly without a switch/router.
<br>
<p>The interface configurations could be found in the following picture.
<br>
<p><a href="https://www.dropbox.com/s/g75i51rrjs51b21/mpi-graph%20-%20New%20Page.png?dl=0">https://www.dropbox.com/s/g75i51rrjs51b21/mpi-graph%20-%20New%20Page.png?dl=0</a>
<br>
<p>I've used *ifconfig *on each node to configure each port, and made sure I
<br>
can ssh from each node to the other 2 nodes.
<br>
<p>But a simple ring_c
<br>
&lt;<a href="https://github.com/open-mpi/ompi/blob/master/examples/ring_c.c">https://github.com/open-mpi/ompi/blob/master/examples/ring_c.c</a>&gt; example
<br>
doesn't work... So I turn on  --mca btl_base_verbose 30, I could see that
<br>
node1 was trying to use 23.0.0.2  (linke between node2 and 3) to get to
<br>
node2 though there is a direct link to node 2.
<br>
<p>The output log is like:
<br>
<p>[node1:01828] btl: tcp: attempting to connect() to [[19529,1],1] address
<br>
<span class="quotelev1">&gt; 23.0.0.2 on port 1024
</span><br>
<span class="quotelev1">&gt; [[19529,1],0][btl_tcp_endpoint.c:606:mca_btl_tcp_endpoint_start_connect]
</span><br>
<span class="quotelev1">&gt; from node1 to: node2 Unable to connect to the peer 23.0.0.2  on port 4:
</span><br>
<span class="quotelev1">&gt; Network is unreachable
</span><br>
<p><p>I've read the following posts and FAQs but still couldn't understand this
<br>
kind of behavior.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3">http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/11/25810.php">http://www.open-mpi.org/community/lists/users/2014/11/25810.php</a>
<br>
<p><p>Any pointers would be appreciated! Thanks in advance!
<br>
<p>My open-mpi info:
<br>
<p>&nbsp;Package: Open MPI gtbldadm_at_ubuntu-12 Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.0.0.22
<br>
&nbsp;&nbsp;Open MPI repo revision: git714842d
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: May 27, 2015
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.0.0.22
<br>
&nbsp;&nbsp;Open RTE repo revision: git714842d
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: May 27, 2015
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.0.0.22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: git714842d
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: May 27, 2015
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI API: 2.1
<br>
<p><p>Best,
<br>
Shawn
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27612/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27613.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27616.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Reply:</strong> <a href="27616.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Reply:</strong> <a href="27626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
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
