<?
$subject_val = "Re: [OMPI users] mpirun fails across nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 02:07:16 2014" -->
<!-- isoreceived="20141113070716" -->
<!-- sent="Thu, 13 Nov 2014 12:07:16 +0500" -->
<!-- isosent="20141113070716" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails across nodes" -->
<!-- id="CAMvdAs+qKCikgJSjZKuB83Ch0895eSY5S5cqqg+wyLD1p_rZqA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMvdAsJ7Mb23BY9kdmHOFFQc+ygTBYq3+1sxoqb3KuikKQNxfw_at_mail.gmail.com" -->
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
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-13 02:07:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25787.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>Previous message:</strong> <a href="25785.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>In reply to:</strong> <a href="25785.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25787.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>Reply:</strong> <a href="25787.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is what I see when disabling openib support.\
<br>
<p><p>[pmdtest_at_pmd ~]$ mpirun --host --mca btl ^openib
<br>
compute-01-01,compute-01-06 ring_c
<br>
ssh:  orted: Temporary failure in name resolution
<br>
ssh:  orted: Temporary failure in name resolution
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 7608) died unexpectedly with status 255 while attempting
<br>
to launch so we are aborting.
<br>
<p>While nodes can still ssh each other
<br>
<p>[pmdtest_at_compute-01-01 ~]$ ssh compute-01-06
<br>
Last login: Thu Nov 13 12:05:58 2014 from compute-01-01.private.dns.zone
<br>
[pmdtest_at_compute-01-06 ~]$
<br>
<p><p><p><p>On Thu, Nov 13, 2014 at 12:03 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;  Hi Jefff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No firewall is enabled. Running the diagnostics I found that non
</span><br>
<span class="quotelev1">&gt; communication mpi job is running . While ring_c remains stuck. There
</span><br>
<span class="quotelev1">&gt; are of course warnings for open fabrics but in my case I an running
</span><br>
<span class="quotelev1">&gt; application by disabling openib., Please see below
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [pmdtest_at_pmd ~]$ mpirun --host compute-01-01,compute-01-06 hello_c.out
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: There is at least one OpenFabrics device found but there are
</span><br>
<span class="quotelev1">&gt; no active ports detected (or Open MPI was unable to use them).  This
</span><br>
<span class="quotelev1">&gt; is most certainly not what you wanted.  Check your cables, subnet
</span><br>
<span class="quotelev1">&gt; manager configuration, etc.  The openib BTL will be ignored for this
</span><br>
<span class="quotelev1">&gt; job.
</span><br>
<span class="quotelev1">&gt;   Local host: compute-01-01.private.dns.zone
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt; [pmd.pakmet.com:06386] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / no active ports found
</span><br>
<span class="quotelev1">&gt; [pmd.pakmet.com:06386] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev1">&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_pmd ~]$ mpirun --host compute-01-01,compute-01-06 ring_c
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: There is at least one OpenFabrics device found but there are
</span><br>
<span class="quotelev1">&gt; no active ports detected (or Open MPI was unable to use them).  This
</span><br>
<span class="quotelev1">&gt; is most certainly not what you wanted.  Check your cables, subnet
</span><br>
<span class="quotelev1">&gt; manager configuration, etc.  The openib BTL will be ignored for this
</span><br>
<span class="quotelev1">&gt; job.
</span><br>
<span class="quotelev1">&gt;   Local host: compute-01-01.private.dns.zone
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt; [compute-01-01.private.dns.zone][[54687,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [pmd.pakmet.com:15965] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / no active ports found
</span><br>
<span class="quotelev1">&gt; [pmd.pakmet.com:15965] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev1">&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; &lt;span class=&quot;sewh9wyhn1gq30p&quot;&gt;&lt;br&gt;&lt;/span&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 12, 2014 at 7:32 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Do you have firewalling enabled on either server?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See this FAQ item:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems">http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 12, 2014, at 4:57 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear All
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need your advice. While trying to run mpirun job across nodes I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following error. It seems that the two nodes i.e, compute-01-01 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-01-06 are not able to communicate with each other. While nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see each other on ping.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pmdtest_at_pmd ERA_CLM45]$ mpirun -np 16 -hostfile hostlist --mca btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^openib ../bin/regcmMPICLM45 regcm.in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-01-06.private.dns.zone][[48897,1],7][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-01-06.private.dns.zone][[48897,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-01-06.private.dns.zone][[48897,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-01-01.private.dns.zone][[48897,1],10][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-01-01.private.dns.zone][[48897,1],12][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-01-01.private.dns.zone][[48897,1],14][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pmdtest_at_pmd ERA_CLM45]$ ssh compute-01-01
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Last login: Wed Nov 12 09:48:53 2014 from pmd-eth0.private.dns.zone
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pmdtest_at_compute-01-01 ~]$ ping compute-01-06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PING compute-01-06.private.dns.zone (10.0.0.8) 56(84) bytes of data.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64 bytes from compute-01-06.private.dns.zone (10.0.0.8): icmp_seq=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ttl=64 time=0.108 ms
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64 bytes from compute-01-06.private.dns.zone (10.0.0.8): icmp_seq=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ttl=64 time=0.088 ms
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- compute-01-06.private.dns.zone ping statistics ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 packets transmitted, 2 received, 0% packet loss, time 999ms
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rtt min/avg/max/mdev = 0.088/0.098/0.108/0.010 ms
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pmdtest_at_compute-01-01 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ahsan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25761.php">http://www.open-mpi.org/community/lists/users/2014/11/25761.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25763.php">http://www.open-mpi.org/community/lists/users/2014/11/25763.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25787.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>Previous message:</strong> <a href="25785.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>In reply to:</strong> <a href="25785.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25787.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>Reply:</strong> <a href="25787.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
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
