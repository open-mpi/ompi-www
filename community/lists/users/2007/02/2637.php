<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  7 15:44:14 2007" -->
<!-- isoreceived="20070207204414" -->
<!-- sent="Wed, 7 Feb 2007 15:43:58 -0500" -->
<!-- isosent="20070207204358" -->
<!-- name="Mark Kosmowski" -->
<!-- email="mark.kosmowski_at_[hidden]" -->
<!-- subject="[OMPI users] first time user - can run mpi job SMP but not over cluster" -->
<!-- id="c84311bb0702071243hdbe6077r52a263f20ae1f74f_at_mail.gmail.com" -->
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
<strong>From:</strong> Mark Kosmowski (<em>mark.kosmowski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-07 15:43:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2638.php">Michael: "[OMPI users] install script issue"</a>
<li><strong>Previous message:</strong> <a href="2636.php">Nader Ahmadi: "[OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2639.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2639.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2649.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2691.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open-MPI list:
<br>
<p>I'm trying to run two (soon to be three) dual opteron machines as a
<br>
cluster (network of workstations - they each have a disk and OS).  I
<br>
can ssh between machines with no password.  My open-mpi code compiled
<br>
fine and works great as an SMP program (using both processors on one
<br>
machine).  However, I am not able to run my open-mpi program parallel
<br>
between the two computers.
<br>
<p>For SMP work I use:
<br>
<p>mpirun -np 2 myprogram inputfile &gt;outputfile
<br>
<p>For cluster work I have tried:
<br>
<p>mpirun --hostfile myhostfile -np 4 myprogram inputfile &gt;outputfile
<br>
<p>which does not write to the output file.
<br>
<p>I have also tried:
<br>
<p>mpirun --hostfile myhostfile -np 4 `myprogram inputfile &gt;outputfile`
<br>
<p>which just ran serially on the initial machine.
<br>
<p>The open-mpi executable and libraries are on the head node NFS shared
<br>
to the slave node.  Both computers can run open-mpi [the open-mpi
<br>
application] as an SMP program with no problems.  When I am trying to
<br>
run the open-mpi program with both computers, I am using a directory
<br>
that is an NFS share to the other computer.
<br>
<p>I am running OpenSUSE 10.2 on both machines.  I compiled with gcc 41 /
<br>
ifort 9.1.
<br>
<p>I am using a gigabit network.
<br>
<p>My hostfile specifies slots=2 max-slots=2 for each computer.  The
<br>
computers are identified in the hostfile using the /etc/hosts alias.
<br>
<p>The only config.log that I found was in the directory I used to make
<br>
open-mpi; since everything works as SMP, I am not including that file
<br>
with this initial message.
<br>
<p>What should I be trying to do next to remedy this issue?
<br>
<p>Any help would be appreciated.
<br>
<p>Thanks,
<br>
<p>Mark Kosmowski
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2638.php">Michael: "[OMPI users] install script issue"</a>
<li><strong>Previous message:</strong> <a href="2636.php">Nader Ahmadi: "[OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2639.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2639.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2649.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2691.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
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
