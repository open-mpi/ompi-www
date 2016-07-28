<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 14 12:28:27 2007" -->
<!-- isoreceived="20070214172827" -->
<!-- sent="Wed, 14 Feb 2007 12:28:21 -0500" -->
<!-- isosent="20070214172821" -->
<!-- name="Mark Kosmowski" -->
<!-- email="mark.kosmowski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] first time user - can run mpi job SMP but not over cluster" -->
<!-- id="c84311bb0702140928v668a5070h68b60bf3a19f7865_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c84311bb0702071243hdbe6077r52a263f20ae1f74f_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-02-14 12:28:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2692.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2690.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
<li><strong>In reply to:</strong> <a href="2637.php">Mark Kosmowski: "[OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2692.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2692.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2698.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Everything is working properly now.  I needed to reinstall Linux on
<br>
one of my nodes after a botched attempt at a network install - mpirun
<br>
... hostname worked, but my application hung and gave a connect()
<br>
errno 110.
<br>
<p>At this point I decided to give up and try mpich instead.  During the
<br>
mpich sanity checking, there was a more verbose error message
<br>
regarding the failed node, so I reinstalled the OS, reconfigured my
<br>
environment variables for OpenMPI and everything is now working.
<br>
<p>Thanks for the help and support so far,
<br>
<p>Mark Kosmowski
<br>
<p>On 2/7/07, Mark Kosmowski &lt;mark.kosmowski_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear Open-MPI list:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run two (soon to be three) dual opteron machines as a
</span><br>
<span class="quotelev1">&gt; cluster (network of workstations - they each have a disk and OS).  I
</span><br>
<span class="quotelev1">&gt; can ssh between machines with no password.  My open-mpi code compiled
</span><br>
<span class="quotelev1">&gt; fine and works great as an SMP program (using both processors on one
</span><br>
<span class="quotelev1">&gt; machine).  However, I am not able to run my open-mpi program parallel
</span><br>
<span class="quotelev1">&gt; between the two computers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For SMP work I use:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 myprogram inputfile &gt;outputfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For cluster work I have tried:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile myhostfile -np 4 myprogram inputfile &gt;outputfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which does not write to the output file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also tried:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile myhostfile -np 4 `myprogram inputfile &gt;outputfile`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which just ran serially on the initial machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The open-mpi executable and libraries are on the head node NFS shared
</span><br>
<span class="quotelev1">&gt; to the slave node.  Both computers can run open-mpi [the open-mpi
</span><br>
<span class="quotelev1">&gt; application] as an SMP program with no problems.  When I am trying to
</span><br>
<span class="quotelev1">&gt; run the open-mpi program with both computers, I am using a directory
</span><br>
<span class="quotelev1">&gt; that is an NFS share to the other computer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running OpenSUSE 10.2 on both machines.  I compiled with gcc 41 /
</span><br>
<span class="quotelev1">&gt; ifort 9.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using a gigabit network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My hostfile specifies slots=2 max-slots=2 for each computer.  The
</span><br>
<span class="quotelev1">&gt; computers are identified in the hostfile using the /etc/hosts alias.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only config.log that I found was in the directory I used to make
</span><br>
<span class="quotelev1">&gt; open-mpi; since everything works as SMP, I am not including that file
</span><br>
<span class="quotelev1">&gt; with this initial message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What should I be trying to do next to remedy this issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark Kosmowski
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2692.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2690.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
<li><strong>In reply to:</strong> <a href="2637.php">Mark Kosmowski: "[OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2692.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2692.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2698.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
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
