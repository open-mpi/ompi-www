<?
$subject_val = "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 20:37:57 2015" -->
<!-- isoreceived="20150918003757" -->
<!-- sent="Fri, 18 Sep 2015 09:37:52 +0900" -->
<!-- isosent="20150918003752" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI" -->
<!-- id="55FB5CE0.5090908_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 20:37:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27617.php">gzzhang_at_[hidden]: "[OMPI users] C/R Enabled Debugging"</a>
<li><strong>Previous message:</strong> <a href="27615.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>In reply to:</strong> <a href="27612.php">Shang Li: "[OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shang,
<br>
<p>can you please run
<br>
mpirun --version
<br>
i cannot find the ompi version you are running based on the git hash you 
<br>
reported
<br>
<p>as a temporary workaround, you can do minimal tcp routing :
<br>
on the three nodes
<br>
1) run
<br>
sysctl -w net.ipv4.ip_forward=1
<br>
<p>2) route the other nodes interface not on the same network
<br>
for example, on node 1, you can run
<br>
route add -host 23.0.0.2 gw 12.0.0.2
<br>
route add -host 23.0.0.3 gw 13.0.0.3
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 9/18/2015 1:31 AM, Shang Li wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wanted to setup a 3-node ring network, each connects to the other 2 
</span><br>
<span class="quotelev1">&gt; using 2 Ethernet ports directly without a switch/router.
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
<span class="quotelev1">&gt; I've used /ifconfig /on each node to configure each port, and made 
</span><br>
<span class="quotelev1">&gt; sure I can ssh from each node to the other 2 nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But a simplering_c 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://github.com/open-mpi/ompi/blob/master/examples/ring_c.c">https://github.com/open-mpi/ompi/blob/master/examples/ring_c.c</a>&gt; 
</span><br>
<span class="quotelev1">&gt; example doesn't work... So I turn on  --mca btl_base_verbose 30, I 
</span><br>
<span class="quotelev1">&gt; could see that node1 was trying to use 23.0.0.2  (linke between node2 
</span><br>
<span class="quotelev1">&gt; and 3) to get to node2 though there is a direct link to node 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output log is like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [node1:01828] btl: tcp: attempting to connect() to [[19529,1],1]
</span><br>
<span class="quotelev1">&gt;     address 23.0.0.2 on port 1024
</span><br>
<span class="quotelev1">&gt;     [[19529,1],0][btl_tcp_endpoint.c:606:mca_btl_tcp_endpoint_start_connect]
</span><br>
<span class="quotelev1">&gt;     from node1 to: node2 Unable to connect to the peer 23.0.0.2  on
</span><br>
<span class="quotelev1">&gt;     port 4: Network is unreachable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've read the following posts and FAQs but still couldn't understand 
</span><br>
<span class="quotelev1">&gt; this kind of behavior.
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
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27616/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27617.php">gzzhang_at_[hidden]: "[OMPI users] C/R Enabled Debugging"</a>
<li><strong>Previous message:</strong> <a href="27615.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>In reply to:</strong> <a href="27612.php">Shang Li: "[OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
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
