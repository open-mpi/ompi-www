<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 13 09:42:03 2006" -->
<!-- isoreceived="20060913134203" -->
<!-- sent="Wed, 13 Sep 2006 15:41:55 +0200" -->
<!-- isosent="20060913134155" -->
<!-- name="Gunnar Johansson" -->
<!-- email="info_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI + NAT" -->
<!-- id="c8c0af0609130641y3a2e33daxc6609b63d055356_at_mail.gmail.com" -->
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
<strong>From:</strong> Gunnar Johansson (<em>info_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-13 09:41:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1857.php">Jayanta Roy: "[OMPI users] problem with running mpi"</a>
<li><strong>Previous message:</strong> <a href="1855.php">imran shaik: "[OMPI users] Perl and  MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1862.php">Christian Kauhaus: "Re: [OMPI users] OpenMPI + NAT"</a>
<li><strong>Reply:</strong> <a href="1862.php">Christian Kauhaus: "Re: [OMPI users] OpenMPI + NAT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We're currently setting up a small cluster used for parallel
<br>
rendering. For convinience we use a master server which &quot;hides&quot; a set
<br>
of dedicated nodes behind NAT. However, we also want to connect
<br>
external workstations in a flexible manner. We've set up the routes so
<br>
that each external machine can communicate directly with the nodes
<br>
behind the NAT, and vice versa. We've also verified communication on
<br>
random ports using a simple python socket script.
<br>
<p>However, the communication still fails in MPI with a message like:
<br>
<p>[localhost.localdomain:17383] *** An error occurred in MPI_Barrier
<br>
[localhost.localdomain:17383] *** on communicator MPI_COMM_WORLD
<br>
[localhost.localdomain:17383] *** MPI_ERR_INTERN: internal error
<br>
[localhost.localdomain:17383] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>Before posting additonal debug info, I want to check if anyone has
<br>
succedded in setting up an MPI cluster with &quot;internal&quot; and &quot;external&quot;
<br>
nodes seperated by NAT.
<br>
<p>Note also that this is not a crucial problem, we could also make all
<br>
nodes &quot;external&quot;, but a solution with NAT would be quite practical.
<br>
<p>Regards, Gunnar Johansson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1857.php">Jayanta Roy: "[OMPI users] problem with running mpi"</a>
<li><strong>Previous message:</strong> <a href="1855.php">imran shaik: "[OMPI users] Perl and  MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1862.php">Christian Kauhaus: "Re: [OMPI users] OpenMPI + NAT"</a>
<li><strong>Reply:</strong> <a href="1862.php">Christian Kauhaus: "Re: [OMPI users] OpenMPI + NAT"</a>
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
