<?
$subject_val = "Re: [OMPI users] mpirun fails across nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 09:32:12 2014" -->
<!-- isoreceived="20141112143212" -->
<!-- sent="Wed, 12 Nov 2014 14:32:11 +0000" -->
<!-- isosent="20141112143211" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails across nodes" -->
<!-- id="A806A5EF-A1A4-4399-BA58-D0D97822DF84_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMvdAs+-Fxn3wKasjpjYQ=2YAOOgd0BJ+NJLjoigONR_N_appw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun fails across nodes<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 09:32:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25764.php">Ray Sheppard: "[OMPI users] 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="25762.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25761.php">Syed Ahsan Ali: "[OMPI users] mpirun fails across nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25764.php">Ray Sheppard: "[OMPI users] 1.8.4"</a>
<li><strong>Reply:</strong> <a href="25764.php">Ray Sheppard: "[OMPI users] 1.8.4"</a>
<li><strong>Reply:</strong> <a href="25785.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have firewalling enabled on either server?
<br>
<p>See this FAQ item:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems">http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems</a>
<br>
<p><p><p>On Nov 12, 2014, at 4:57 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need your advice. While trying to run mpirun job across nodes I get
</span><br>
<span class="quotelev1">&gt; following error. It seems that the two nodes i.e, compute-01-01 and
</span><br>
<span class="quotelev1">&gt; compute-01-06 are not able to communicate with each other. While nodes
</span><br>
<span class="quotelev1">&gt; see each other on ping.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_pmd ERA_CLM45]$ mpirun -np 16 -hostfile hostlist --mca btl
</span><br>
<span class="quotelev1">&gt; ^openib ../bin/regcmMPICLM45 regcm.in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-01-06.private.dns.zone][[48897,1],7][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [compute-01-06.private.dns.zone][[48897,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [compute-01-06.private.dns.zone][[48897,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [compute-01-01.private.dns.zone][[48897,1],10][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; [compute-01-01.private.dns.zone][[48897,1],12][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [compute-01-01.private.dns.zone][[48897,1],14][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_pmd ERA_CLM45]$ ssh compute-01-01
</span><br>
<span class="quotelev1">&gt; Last login: Wed Nov 12 09:48:53 2014 from pmd-eth0.private.dns.zone
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_compute-01-01 ~]$ ping compute-01-06
</span><br>
<span class="quotelev1">&gt; PING compute-01-06.private.dns.zone (10.0.0.8) 56(84) bytes of data.
</span><br>
<span class="quotelev1">&gt; 64 bytes from compute-01-06.private.dns.zone (10.0.0.8): icmp_seq=1
</span><br>
<span class="quotelev1">&gt; ttl=64 time=0.108 ms
</span><br>
<span class="quotelev1">&gt; 64 bytes from compute-01-06.private.dns.zone (10.0.0.8): icmp_seq=2
</span><br>
<span class="quotelev1">&gt; ttl=64 time=0.088 ms
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- compute-01-06.private.dns.zone ping statistics ---
</span><br>
<span class="quotelev1">&gt; 2 packets transmitted, 2 received, 0% packet loss, time 999ms
</span><br>
<span class="quotelev1">&gt; rtt min/avg/max/mdev = 0.088/0.098/0.108/0.010 ms
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_compute-01-01 ~]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ahsan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25761.php">http://www.open-mpi.org/community/lists/users/2014/11/25761.php</a>
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
<li><strong>Next message:</strong> <a href="25764.php">Ray Sheppard: "[OMPI users] 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="25762.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25761.php">Syed Ahsan Ali: "[OMPI users] mpirun fails across nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25764.php">Ray Sheppard: "[OMPI users] 1.8.4"</a>
<li><strong>Reply:</strong> <a href="25764.php">Ray Sheppard: "[OMPI users] 1.8.4"</a>
<li><strong>Reply:</strong> <a href="25785.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across nodes"</a>
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
