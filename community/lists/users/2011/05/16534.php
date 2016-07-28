<?
$subject_val = "[OMPI users] Scheduling dynamically spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 12 23:55:01 2011" -->
<!-- isoreceived="20110513035501" -->
<!-- sent="Fri, 13 May 2011 00:54:56 -0300" -->
<!-- isosent="20110513035456" -->
<!-- name="Rodrigo Oliveira" -->
<!-- email="rsilva.oliveira_at_[hidden]" -->
<!-- subject="[OMPI users] Scheduling dynamically spawned processes" -->
<!-- id="BANLkTimwDrg8EKm7VAVmXvH2fuHPiTmQ4Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTin_ATFAa3CDgd1FsLte0N66qB11Gg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Scheduling dynamically spawned processes<br>
<strong>From:</strong> Rodrigo Oliveira (<em>rsilva.oliveira_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-12 23:54:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16535.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16533.php">Rodrigo Silva Oliveira: "[OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>In reply to:</strong> <a href="16533.php">Rodrigo Silva Oliveira: "[OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16540.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Maybe reply:</strong> <a href="16540.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there.
<br>
<p>I'm developing a distributed system with a communication layer based on Open
<br>
MPI. As part of my project, I have to create a process scheduler. So I
<br>
decided to use the MPI_Spawn function to dynamically create (it is an
<br>
requirement of the system) the process across the cluster's nodes.
<br>
<p>Is there some way to specify how many copies of a process to spawn to each
<br>
node? For instance, I want to spawn 5 copies of a mpi program to 3 nodes
<br>
usin the scheme bellow:
<br>
<p>*1 to host 1*
<br>
*3 to host 2*
<br>
*1 to host 3*
<br>
<p>obs.: I am using openmpi-1.5.3. The default policies provided by the ompi is
<br>
not applicable to my problem because I will decide the scheme based on
<br>
specific criteria.
<br>
<p>Thanks in advance.
<br>
<p><pre>
-- 
Rodrigo Silva Oliveira
M.Sc. Student - Computer Science
Universidade Federal de Minas Gerais
www.dcc.ufmg.br/~rsilva &lt;<a href="http://www.dcc.ufmg.br/%7Ersilva">http://www.dcc.ufmg.br/%7Ersilva</a>&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16534/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16535.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16533.php">Rodrigo Silva Oliveira: "[OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>In reply to:</strong> <a href="16533.php">Rodrigo Silva Oliveira: "[OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16540.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Maybe reply:</strong> <a href="16540.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
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
