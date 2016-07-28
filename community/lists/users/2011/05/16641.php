<?
$subject_val = "Re: [OMPI users] problem using mpirun over multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 13:38:35 2011" -->
<!-- isoreceived="20110526173835" -->
<!-- sent="Thu, 26 May 2011 12:38:30 -0500" -->
<!-- isosent="20110526173830" -->
<!-- name="Jagannath Mondal" -->
<!-- email="jagannath.mondal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem using mpirun over multiple nodes" -->
<!-- id="BANLkTi=xVZPwRP-Cwt_HFL8DqZvEh6qw0A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4162A6BA-AED9-4E05-8C0B-6CBE6BB2A254_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem using mpirun over multiple nodes<br>
<strong>From:</strong> Jagannath Mondal (<em>jagannath.mondal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-26 13:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16642.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="16640.php">Jeff Squyres: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16640.php">Jeff Squyres: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
&nbsp;&nbsp;Thanks to you, I figured the problem . As you suspected, it was iptables
<br>
which was  acting as firewalls in some machines. So, after I stopped the
<br>
iptable, the MPI communication is going fine. Even I tried with 5 machines
<br>
together and the communication is going allright.
<br>
Thanks again,
<br>
Jagannath
<br>
<p>On Thu, May 26, 2011 at 5:19 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; ssh may be allowed but other random TCP ports may not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iptables is the typical firewall software that most Linux installations
</span><br>
<span class="quotelev1">&gt; use; it may have been enabled by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a little doubtful that this is your problem, though, because you're
</span><br>
<span class="quotelev1">&gt; apparently able to *launch* your application, which means that OMPI's
</span><br>
<span class="quotelev1">&gt; out-of-band communication system was able to make some sockets.  So it's a
</span><br>
<span class="quotelev1">&gt; little weird that the MPI layer's TCP sockets were borked.  But let's check
</span><br>
<span class="quotelev1">&gt; for firewall software, first...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 26, 2011, at 12:42 AM, Jagannath Mondal wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;     I was wondering how I can check whether there is any firewall
</span><br>
<span class="quotelev1">&gt; software . In fact I can use ssh to go from one machine to another . But,
</span><br>
<span class="quotelev1">&gt; only with mpirun , it does not work. I was wondering whether it is possible
</span><br>
<span class="quotelev1">&gt; that even in presence of firewall ssh may work but mpirun may not.
</span><br>
<span class="quotelev2">&gt; &gt; Jagannath
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, May 25, 2011 at 10:42 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Are you running any firewall software?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 25, 2011, at 10:41 PM, &quot;Jagannath Mondal&quot; &lt;
</span><br>
<span class="quotelev1">&gt; jagannath.mondal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am having a problem in running mpirun  over multiple nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To run a job  over two 8-core processors, I generated a hostfile as
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  yethiraj30 slots=8 max_slots=8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   yethiraj31 slots=8 max_slots=8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; These two machines are intra-connected and I have installed openmpi
</span><br>
<span class="quotelev1">&gt; 1.3.3.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Then If I try to run the replica exchange simulation using the following
</span><br>
<span class="quotelev1">&gt; command:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun -np 16 --hostfile  hostfile  mdrun_4mpi -s topol_.tpr -multi 16
</span><br>
<span class="quotelev1">&gt; -replex 100 &gt;&amp; log_replica_test
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But I find following error and job does not proceed at all :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect()
</span><br>
<span class="quotelev1">&gt; to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is the full details:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NNODES=16, MYRANK=0, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NNODES=16, MYRANK=1, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NNODES=16, MYRANK=4, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NNODES=16, MYRANK=2, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NNODES=16, MYRANK=6, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NNODES=16, MYRANK=3, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NNODES=16, MYRANK=5, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NNODES=16, MYRANK=7, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [yethiraj30][[22604,1],0][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [yethiraj30][[22604,1],4][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [yethiraj30][[22604,1],6][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [yethiraj30][[22604,1],1][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [yethiraj30][[22604,1],3][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [yethiraj30][[22604,1],2][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NNODES=16, MYRANK=10, HOSTNAME=yethiraj31
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NNODES=16, MYRANK=12, HOSTNAME=yethiraj31
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am not sure how to resolve this issue. In general, I can go from one
</span><br>
<span class="quotelev1">&gt; machine to another without any problem using ssh. But, when I am trying to
</span><br>
<span class="quotelev1">&gt; run openmpi over both the machines, I get this error. Any help will be
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jagannath
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16641/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16642.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="16640.php">Jeff Squyres: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16640.php">Jeff Squyres: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
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
