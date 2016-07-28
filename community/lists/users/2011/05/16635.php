<?
$subject_val = "[OMPI users] problem using mpirun over multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 22:39:39 2011" -->
<!-- isoreceived="20110526023939" -->
<!-- sent="Wed, 25 May 2011 21:39:34 -0500" -->
<!-- isosent="20110526023934" -->
<!-- name="Jagannath Mondal" -->
<!-- email="jagannath.mondal_at_[hidden]" -->
<!-- subject="[OMPI users] problem using mpirun over multiple nodes" -->
<!-- id="BANLkTi=2JkqYk3eF+WAz2+btDa3fAeTqNQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] problem using mpirun over multiple nodes<br>
<strong>From:</strong> Jagannath Mondal (<em>jagannath.mondal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-25 22:39:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16636.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16634.php">Jeff Squyres: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16636.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16636.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am having a problem in running mpirun  over multiple nodes.
<br>
To run a job  over two 8-core processors, I generated a hostfile as follows:
<br>
&nbsp;yethiraj30 slots=8 max_slots=8
<br>
&nbsp;&nbsp;yethiraj31 slots=8 max_slots=8
<br>
<p>These two machines are intra-connected and I have installed openmpi 1.3.3.
<br>
Then If I try to run the replica exchange simulation using the following
<br>
command:
<br>
mpirun -np 16 --hostfile  hostfile  mdrun_4mpi -s topol_.tpr -multi 16
<br>
-replex 100 &gt;&amp; log_replica_test
<br>
<p>But I find following error and job does not proceed at all :
<br>
btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to
<br>
192.168.0.31 failed: No route to host (113)
<br>
<p>Here is the full details:
<br>
<p>NNODES=16, MYRANK=0, HOSTNAME=yethiraj30
<br>
NNODES=16, MYRANK=1, HOSTNAME=yethiraj30
<br>
NNODES=16, MYRANK=4, HOSTNAME=yethiraj30
<br>
NNODES=16, MYRANK=2, HOSTNAME=yethiraj30
<br>
NNODES=16, MYRANK=6, HOSTNAME=yethiraj30
<br>
NNODES=16, MYRANK=3, HOSTNAME=yethiraj30
<br>
NNODES=16, MYRANK=5, HOSTNAME=yethiraj30
<br>
NNODES=16, MYRANK=7, HOSTNAME=yethiraj30
<br>
[yethiraj30][[22604,1],0][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.0.31 failed: No route to host (113)
<br>
[yethiraj30][[22604,1],4][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.0.31 failed: No route to host (113)
<br>
[yethiraj30][[22604,1],6][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.0.31 failed: No route to host (113)
<br>
[yethiraj30][[22604,1],1][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.0.31 failed: No route to host (113)
<br>
[yethiraj30][[22604,1],3][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.0.31 failed: No route to host (113)
<br>
[yethiraj30][[22604,1],2][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.0.31 failed: No route to host (113)
<br>
NNODES=16, MYRANK=10, HOSTNAME=yethiraj31
<br>
NNODES=16, MYRANK=12, HOSTNAME=yethiraj31
<br>
<p>I am not sure how to resolve this issue. In general, I can go from one
<br>
machine to another without any problem using ssh. But, when I am trying to
<br>
run openmpi over both the machines, I get this error. Any help will be
<br>
appreciated.
<br>
<p>Jagannath
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16635/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16636.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16634.php">Jeff Squyres: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16636.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16636.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
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
