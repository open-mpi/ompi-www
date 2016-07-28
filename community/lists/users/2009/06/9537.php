<?
$subject_val = "[OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 03:53:56 2009" -->
<!-- isoreceived="20090604075356" -->
<!-- sent="Thu, 4 Jun 2009 17:53:52 +1000" -->
<!-- isosent="20090604075352" -->
<!-- name="Lars Andersson" -->
<!-- email="larsand_at_[hidden]" -->
<!-- subject="[OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?" -->
<!-- id="8acca4520906040053x5e5c8800tc7494c27552a381b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?<br>
<strong>From:</strong> Lars Andersson (<em>larsand_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 03:53:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9538.php">Eloi Gaudry: "[OMPI users] [1.2.x] --enable--mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="9536.php">shan axida: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9545.php">Bogdan Costescu: "Re: [OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?"</a>
<li><strong>Reply:</strong> <a href="9545.php">Bogdan Costescu: "Re: [OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?"</a>
<li><strong>Reply:</strong> <a href="9552.php">Jeff Squyres: "Re: [OMPI users] Best way to overlap computation and transfer using MPIover TCP/Ethernet?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I've been trying to get overlapping computation and data transfer to
<br>
work, without much success so far. What I'm trying to achieve is:
<br>
<p>NODE 1:
<br>
<p>&nbsp;&nbsp;&nbsp;* Post nonblocking send (30MB data)
<br>
<p><p>NODE 2:
<br>
<p>&nbsp;&nbsp;&nbsp;1) Post nonblocking receive
<br>
<p>&nbsp;&nbsp;&nbsp;2) do local work, while data is being received
<br>
<p>&nbsp;&nbsp;&nbsp;3) complete transfer posted in 1) (MPI_Wait)
<br>
<p>&nbsp;&nbsp;&nbsp;4) use received data
<br>
<p><p>So, in my first test using a message size of 30MB, if I did nothing at
<br>
point 2) above, to complete the transfer in 3) takes about 0.8s.
<br>
<p>In my second test, I simply put a sleep(3) at point 2), and expected
<br>
the MPI_Wait() call at 3) to finish almost instantly, since I assumed
<br>
that the message would have been transferred during the sleep. To my
<br>
disappointment tough, it took more or less the same time to finish the
<br>
MPI_Wait as without any sleep.
<br>
<p>After browsing the forums, I realized that to make any communication
<br>
progress for these king of large messages, I usually need to block in
<br>
MPI_Wait, or repeatedly call MPI_Test. I guess that makes sense.
<br>
<p>So, my questions is, how would you get around this and achieve optimal
<br>
computation/transfer overlap?
<br>
<p>Would you try to intersperse the local work code in 2) with calls to
<br>
MPI_Test() ? If yes, how frequent would these calls have to be made?
<br>
<p>Another possible solution that comes to mind is to spawn a separate
<br>
thread that does an MPI_Wait(). With Open MPI over Ethernet, would
<br>
that mean that the MPI_Wait thread would busy-loop, and thus steal up
<br>
to 50% of the CPU from the main thread doing the local computation
<br>
work?
<br>
<p><p>Lots of questions, but I think this is a pretty common scenario.
<br>
Still, after a lot of browsing, I haven't been able to find any
<br>
concrete advice.
<br>
<p>Thanks,
<br>
<p>Lars
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9538.php">Eloi Gaudry: "[OMPI users] [1.2.x] --enable--mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="9536.php">shan axida: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9545.php">Bogdan Costescu: "Re: [OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?"</a>
<li><strong>Reply:</strong> <a href="9545.php">Bogdan Costescu: "Re: [OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?"</a>
<li><strong>Reply:</strong> <a href="9552.php">Jeff Squyres: "Re: [OMPI users] Best way to overlap computation and transfer using MPIover TCP/Ethernet?"</a>
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
