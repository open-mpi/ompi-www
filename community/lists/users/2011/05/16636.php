<?
$subject_val = "Re: [OMPI users] problem using mpirun over multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 23:42:11 2011" -->
<!-- isoreceived="20110526034211" -->
<!-- sent="Wed, 25 May 2011 23:42:00 -0400" -->
<!-- isosent="20110526034200" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem using mpirun over multiple nodes" -->
<!-- id="098579E8-2BD2-4465-BE71-7C6168AC318A_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BANLkTi=2JkqYk3eF+WAz2+btDa3fAeTqNQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-25 23:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16637.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16635.php">Jagannath Mondal: "[OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16635.php">Jagannath Mondal: "[OMPI users] problem using mpirun over multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16637.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16637.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you running any firewall software?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On May 25, 2011, at 10:41 PM, &quot;Jagannath Mondal&quot; &lt;jagannath.mondal_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; I am having a problem in running mpirun  over multiple nodes. 
</span><br>
<span class="quotelev1">&gt; To run a job  over two 8-core processors, I generated a hostfile as follows:
</span><br>
<span class="quotelev1">&gt;  yethiraj30 slots=8 max_slots=8
</span><br>
<span class="quotelev1">&gt;   yethiraj31 slots=8 max_slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These two machines are intra-connected and I have installed openmpi 1.3.3.
</span><br>
<span class="quotelev1">&gt; Then If I try to run the replica exchange simulation using the following command:
</span><br>
<span class="quotelev1">&gt; mpirun -np 16 --hostfile  hostfile  mdrun_4mpi -s topol_.tpr -multi 16 -replex 100 &gt;&amp; log_replica_test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I find following error and job does not proceed at all : 
</span><br>
<span class="quotelev1">&gt; btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the full details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NNODES=16, MYRANK=0, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev1">&gt; NNODES=16, MYRANK=1, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev1">&gt; NNODES=16, MYRANK=4, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev1">&gt; NNODES=16, MYRANK=2, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev1">&gt; NNODES=16, MYRANK=6, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev1">&gt; NNODES=16, MYRANK=3, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev1">&gt; NNODES=16, MYRANK=5, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev1">&gt; NNODES=16, MYRANK=7, HOSTNAME=yethiraj30
</span><br>
<span class="quotelev1">&gt; [yethiraj30][[22604,1],0][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [yethiraj30][[22604,1],4][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [yethiraj30][[22604,1],6][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [yethiraj30][[22604,1],1][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [yethiraj30][[22604,1],3][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [yethiraj30][[22604,1],2][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.31 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; NNODES=16, MYRANK=10, HOSTNAME=yethiraj31
</span><br>
<span class="quotelev1">&gt; NNODES=16, MYRANK=12, HOSTNAME=yethiraj31
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure how to resolve this issue. In general, I can go from one machine to another without any problem using ssh. But, when I am trying to run openmpi over both the machines, I get this error. Any help will be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jagannath
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16636/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16637.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16635.php">Jagannath Mondal: "[OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16635.php">Jagannath Mondal: "[OMPI users] problem using mpirun over multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16637.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16637.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
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
