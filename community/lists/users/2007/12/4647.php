<?
$subject_val = "[OMPI users] MPI::Intracomm::Spawn and cluster configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 07:47:21 2007" -->
<!-- isoreceived="20071212124721" -->
<!-- sent="Wed, 12 Dec 2007 13:46:06 +0100" -->
<!-- isosent="20071212124606" -->
<!-- name="Elena Zhebel" -->
<!-- email="ezhebel_at_[hidden]" -->
<!-- subject="[OMPI users] MPI::Intracomm::Spawn and cluster configuration" -->
<!-- id="AA57C47ACCD04E46B79317EA2CEEBE881F1763_at_fjldmail.fugro-jason.local" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI::Intracomm::Spawn and cluster configuration<br>
<strong>From:</strong> Elena Zhebel (<em>ezhebel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 07:46:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4648.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4646.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4680.php">Bruno Coutinho: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Reply:</strong> <a href="4680.php">Bruno Coutinho: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Reply:</strong> <a href="4684.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Maybe reply:</strong> <a href="4685.php">Elena Zhebel: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Maybe reply:</strong> <a href="4699.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4782.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;
<br>
I'm working on a MPI application where I'm using OpenMPI instead of MPICH. 
<br>
In my &quot;master&quot; program I call the function MPI::Intracomm::Spawn which spawns
<br>
&quot;slave&quot; processes. It is not clear for me how to spawn the &quot;slave&quot; processes
<br>
over the network. Currently &quot;master&quot; creates &quot;slaves&quot; on the same host. 
<br>
If I use 'mpirun --hostfile openmpi.hosts' then processes are spawn over the
<br>
network as expected. But now I need to spawn processes over the network from
<br>
my own executable using MPI::Intracomm::Spawn, how can I achieve it?
<br>
&nbsp;
<br>
Thanks in advance for any help.
<br>
Elena
<br>
&nbsp;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4648.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4646.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4680.php">Bruno Coutinho: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Reply:</strong> <a href="4680.php">Bruno Coutinho: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Reply:</strong> <a href="4684.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Maybe reply:</strong> <a href="4685.php">Elena Zhebel: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Maybe reply:</strong> <a href="4699.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4782.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
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
