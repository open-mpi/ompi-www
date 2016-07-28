<?
$subject_val = "[OMPI users] MPI_Intercomm_create: peer_leader process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 11:41:02 2009" -->
<!-- isoreceived="20090710154102" -->
<!-- sent="Fri, 10 Jul 2009 15:40:12 +0000" -->
<!-- isosent="20090710154012" -->
<!-- name="Jalel Chergui (LIMSI-CNRS) &lt;Jalel.Chergui_at_[hidden]" -->
<!-- email="Jalel.Chergui_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Intercomm_create: peer_leader process" -->
<!-- id="19031.24796.739570.214669_at_medoc.limsi.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Intercomm_create: peer_leader process<br>
<strong>From:</strong> Jalel Chergui (LIMSI-CNRS) &lt;Jalel.Chergui_at_[hidden] (<em>Jalel.Chergui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-10 11:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9908.php">Gus Correa: "[OMPI users] How to improve non-blocking point-to-point communication scaling"</a>
<li><strong>Previous message:</strong> <a href="9906.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;&nbsp;&nbsp;Two questions from an old MPI user who's still learning.
<br>
<p>&nbsp;&nbsp;&nbsp;Let's assume mpirun's spawned N copies of program A and M (/=N) copies of
<br>
&nbsp;&nbsp;&nbsp;program B. This execution option leads A and B processes to belong to the
<br>
&nbsp;&nbsp;&nbsp;same MPI_COMM_WORLD and ranks are ordered consequently from 0 to N-1 for A
<br>
&nbsp;&nbsp;&nbsp;and from N to (N+M)-1 for B.
<br>
<p>&nbsp;&nbsp;&nbsp;Now, since A and B are two independent programs, let's consider that
<br>
&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD has to be splitted into two communicator groups using
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_split. Then, as we know, the color argument must be set so that
<br>
&nbsp;&nbsp;&nbsp;its value is different for A and B.
<br>
<p>&nbsp;&nbsp;&nbsp;Q1: A part from setting it as a constant in A and B or reading it from a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file, is there a more elegant way to set it automatically so that 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color(A) is always different from color(B)?
<br>
<p>&nbsp;&nbsp;&nbsp;Furthermore, let's consider that MPI_COMM_WORLD has been splitted into A
<br>
&nbsp;&nbsp;&nbsp;and B groups anyway. We want to create an inter-communicator between them
<br>
&nbsp;&nbsp;&nbsp;using MPI_Intercomm_create. Group B can always set the peer_leader rank
<br>
&nbsp;&nbsp;&nbsp;process of A as 0.
<br>
<p>&nbsp;&nbsp;&nbsp;Q2: Is there a MPI-1 solution that can return to A any peer_leader (or first)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank of the remote group B?
<br>
<p>&nbsp;&nbsp;&nbsp;Both questions Q1 and Q2 can be bypassed using MPI_Comm_spawn or
<br>
&nbsp;&nbsp;&nbsp;server/client base processing or a combination of both. But this is not my
<br>
&nbsp;&nbsp;&nbsp;aim since the constraint is to stick to a MPI-1 implementation to execute
<br>
&nbsp;&nbsp;&nbsp;such MPMD applications on some special architecture like BlueGene machine.
<br>
<p>Thanks a lot for your help.
<br>
Regards,
<br>
Jalel
<br>
<pre>
-- 
*------------------------------------------------------------------------*
 Jalel CHERGUI, LIMSI-CNRS, B&#226;t. 508 - BP 133, 91403 Orsay cedex, FRANCE
 T&#233;l : (33 1) 69 85 81 27     ; T&#233;l&#233;copie : (33 1) 69 85 80 88
 M&#233;l : Jalel.Chergui_at_[hidden] ; R&#233;f&#233;rence : <a href="http://perso.limsi.fr/chergui">http://perso.limsi.fr/chergui</a>
*------------------------------------------------------------------------*
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9908.php">Gus Correa: "[OMPI users] How to improve non-blocking point-to-point communication scaling"</a>
<li><strong>Previous message:</strong> <a href="9906.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
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
