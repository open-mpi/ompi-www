<?
$subject_val = "[OMPI users] unable to open osc pt2pt";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 10:25:08 2007" -->
<!-- isoreceived="20071217152508" -->
<!-- sent="Mon, 17 Dec 2007 10:25:03 -0500" -->
<!-- isosent="20071217152503" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="[OMPI users] unable to open osc pt2pt" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B530740A6CA_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>Subject:</strong> [OMPI users] unable to open osc pt2pt<br>
<strong>From:</strong> de Almeida, Valmor F. (<em>dealmeidav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 10:25:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4687.php">Brian Granger: "Re: [OMPI users] unable to open osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4685.php">Elena Zhebel: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4687.php">Brian Granger: "Re: [OMPI users] unable to open osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4687.php">Brian Granger: "Re: [OMPI users] unable to open osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am getting these messages (below) when running mpi4py python codes.
<br>
Always one message per mpi process. The codes seem to run correctly. Any
<br>
ideas why this is happening and how to avoid it?
<br>
<p>Thanks,
<br>
<p><pre>
--
Valmor de Almeida
&gt;mpirun -np 2 python helloworld.py 
[xeon0:05998] mca: base: component_find: unable to open osc pt2pt: file
not found (ignored)
[xeon0:05999] mca: base: component_find: unable to open osc pt2pt: file
not found (ignored)
Hello, World!! I am process 0 of 2 on xeon0.
Hello, World!! I am process 1 of 2 on xeon0.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4687.php">Brian Granger: "Re: [OMPI users] unable to open osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4685.php">Elena Zhebel: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4687.php">Brian Granger: "Re: [OMPI users] unable to open osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4687.php">Brian Granger: "Re: [OMPI users] unable to open osc pt2pt"</a>
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
