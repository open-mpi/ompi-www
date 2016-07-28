<?
$subject_val = "[OMPI users] Problems with computation-communication overlap in non-blocking mode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  7 09:49:24 2014" -->
<!-- isoreceived="20140307144924" -->
<!-- sent="Fri, 7 Mar 2014 14:49:20 +0000" -->
<!-- isosent="20140307144920" -->
<!-- name="Velickovic Nikola" -->
<!-- email="nikola.velickovic_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with computation-communication overlap in non-blocking mode" -->
<!-- id="0D649A5DA694234CA6A7E3DBDCCDB8D9557069D2_at_rexma.intranet.epfl.ch" -->
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
<strong>Subject:</strong> [OMPI users] Problems with computation-communication overlap in non-blocking mode<br>
<strong>From:</strong> Velickovic Nikola (<em>nikola.velickovic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-07 09:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23784.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23782.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23791.php">Alex A. Granovsky: "Re: [OMPI users] Problems with computation-communication overlap innon-blocking mode"</a>
<li><strong>Reply:</strong> <a href="23791.php">Alex A. Granovsky: "Re: [OMPI users] Problems with computation-communication overlap innon-blocking mode"</a>
<li><strong>Reply:</strong> <a href="23796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems with computation-communication overlap in	non-blocking mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have a simple MPI program with two processes using non-blocking communication illustrated bellow:
<br>
<p>process 0:         process 1:
<br>
<p>MPI_Isend          MPI_Irecv
<br>
<p>compute stage  compute stage
<br>
<p>MPI_Wait           MPI_Wait
<br>
<p>Actual communication is performed by offloading it to another thread, or using DMA (KNEM module is used for this).
<br>
Ideally what should happen is that process 0 issues a non-blocking send, process 1 receives the data
<br>
and in the meantime (in parallel) the CPU cores where the processes run are doing the compute stage.
<br>
When compute stage is completed calling MPI_Wait wraps up the communication.
<br>
<p>When I profile my application it turns out that actual communication is initiated with MPI_Wait (significant amount of time is spent there) and hence disables overlapping
<br>
communication and computation since MPI_Wait is called after the compute stage.
<br>
Computation in my test case takes more time than communication so MPI_Wait should not be consuming significant amount of time since the communication should be over by then.
<br>
<p>This I confirmed also by using MPI_Test instead of MPI_Wait.
<br>
MPI_Test has the same effect as MPI_Wait (to the best of my knowledge) but is non-blocking.
<br>
When placing MPI_Test strategically in the compute stage it initiates the communication and a certain communication-computation overlap is achieved.
<br>
<p>Could you please shed some light for me if I am doing something wrong with the library?
<br>
Is it the way it should behave (MPI_Wait initiates the actual transfer)?
<br>
How to achieve communication-computation overlap?
<br>
<p><p>Best,
<br>
Nikola<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23784.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23782.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23791.php">Alex A. Granovsky: "Re: [OMPI users] Problems with computation-communication overlap innon-blocking mode"</a>
<li><strong>Reply:</strong> <a href="23791.php">Alex A. Granovsky: "Re: [OMPI users] Problems with computation-communication overlap innon-blocking mode"</a>
<li><strong>Reply:</strong> <a href="23796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems with computation-communication overlap in	non-blocking mode"</a>
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
