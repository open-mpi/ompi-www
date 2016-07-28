<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 13 17:09:47 2006" -->
<!-- isoreceived="20061013210947" -->
<!-- sent="Fri, 13 Oct 2006 14:09:43 -0700" -->
<!-- isosent="20061013210943" -->
<!-- name="Adam Moody" -->
<!-- email="moody20_at_[hidden]" -->
<!-- subject="[OMPI users] mca_oob_tcp_accept: accept() failed with errno 24" -->
<!-- id="45300097.6000502_at_llnl.gov" -->
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
<strong>From:</strong> Adam Moody (<em>moody20_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-13 17:09:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1976.php">Josh England: "[OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Previous message:</strong> <a href="1974.php">Michael Kluskens: "Re: [OMPI users] BLACS Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1978.php">Aleph One: "Re: [OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
<li><strong>Reply:</strong> <a href="1978.php">Aleph One: "Re: [OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I'm trying to run a 500 node job using mpirun / slurm with OpenMPI-1.1.1 
<br>
and see the following errors at startup:
<br>
<p>[rhea342:09444] [0,1,318]-[0,0,0] mca_oob_tcp_peer_recv_blocking: recv() 
<br>
failed with errno=104
<br>
[rhea32:13463] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[rhea32:13463] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[rhea326:09641] [0,1,302]-[0,0,0] mca_oob_tcp_peer_recv_blocking: recv() 
<br>
failed with errno=104
<br>
...
<br>
<p>I'm starting the job with the following commands:
<br>
<p>srun -N 500 -A
<br>
mpirun -np 500 -bynode hello_mpi
<br>
<p>Smaller jobs around 50 nodes run just fine.  Any ideas?
<br>
Thanks,
<br>
-Adam Moody
<br>
LLNL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1976.php">Josh England: "[OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Previous message:</strong> <a href="1974.php">Michael Kluskens: "Re: [OMPI users] BLACS Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1978.php">Aleph One: "Re: [OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
<li><strong>Reply:</strong> <a href="1978.php">Aleph One: "Re: [OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
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
