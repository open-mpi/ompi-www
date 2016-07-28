<?
$subject_val = "Re: [OMPI users] problem using mpirun over multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 06:19:16 2011" -->
<!-- isoreceived="20110526101916" -->
<!-- sent="Thu, 26 May 2011 06:19:10 -0400" -->
<!-- isosent="20110526101910" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem using mpirun over multiple nodes" -->
<!-- id="4162A6BA-AED9-4E05-8C0B-6CBE6BB2A254_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTinyENNDtLuwWQLQ2cGzGOeUG8VPDw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-26 06:19:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16641.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16639.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="16637.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16641.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16641.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ssh may be allowed but other random TCP ports may not.
<br>
<p>iptables is the typical firewall software that most Linux installations use; it may have been enabled by default.
<br>
<p>I'm a little doubtful that this is your problem, though, because you're apparently able to *launch* your application, which means that OMPI's out-of-band communication system was able to make some sockets.  So it's a little weird that the MPI layer's TCP sockets were borked.  But let's check for firewall software, first...
<br>
<p><p>On May 26, 2011, at 12:42 AM, Jagannath Mondal wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;     I was wondering how I can check whether there is any firewall software . In fact I can use ssh to go from one machine to another . But, only with mpirun , it does not work. I was wondering whether it is possible that even in presence of firewall ssh may work but mpirun may not. 
</span><br>
<span class="quotelev1">&gt; Jagannath
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 25, 2011 at 10:42 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Are you running any firewall software?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 25, 2011, at 10:41 PM, &quot;Jagannath Mondal&quot; &lt;jagannath.mondal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, 
</span><br>
<span class="quotelev2">&gt;&gt; I am having a problem in running mpirun  over multiple nodes. 
</span><br>
<span class="quotelev2">&gt;&gt; To run a job  over two 8-core processors, I generated a hostfile as follows:
</span><br>
<span class="quotelev2">&gt;&gt;  yethiraj30 slots=8 max_slots=8
</span><br>
<span class="quotelev2">&gt;&gt;   yethiraj31 slots=8 max_slots=8
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; These two machines are intra-connected and I have installed openmpi 1.3.3.
</span><br>
<span class="quotelev2">&gt;&gt; Then If I try to run the replica exchange simulation using the following command:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 16 --hostfile  hostfile  mdrun_4mpi -s topol_.tpr -multi 16 -replex 100 &gt;&amp; log_replica_test
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But I find following error and job does not proceed at all : 
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is the full details:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=16, MYRANK=0, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=16, MYRANK=1, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=16, MYRANK=4, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=16, MYRANK=2, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=16, MYRANK=6, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=16, MYRANK=3, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=16, MYRANK=5, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=16, MYRANK=7, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev2">&gt;&gt; [yethiraj30][[22604,1],0][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev2">&gt;&gt; [yethiraj30][[22604,1],4][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev2">&gt;&gt; [yethiraj30][[22604,1],6][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev2">&gt;&gt; [yethiraj30][[22604,1],1][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev2">&gt;&gt; [yethiraj30][[22604,1],3][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev2">&gt;&gt; [yethiraj30][[22604,1],2][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=16, MYRANK=10, HOSTNAME=yethiraj31
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=16, MYRANK=12, HOSTNAME=yethiraj31
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure how to resolve this issue. In general, I can go from one machine to another without any problem using ssh. But, when I am trying to run openmpi over both the machines, I get this error. Any help will be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jagannath
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16641.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16639.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="16637.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16641.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16641.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
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
