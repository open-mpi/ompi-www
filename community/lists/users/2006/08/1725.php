<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  7 10:18:47 2006" -->
<!-- isoreceived="20060807141847" -->
<!-- sent="Mon, 7 Aug 2006 10:18:40 -0400" -->
<!-- isosent="20060807141840" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] Proprieatary transport layer for openMPI..." -->
<!-- id="f869b68c0608070718t1d15e4cep9876263efd03665f_at_mail.gmail.com" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-07 10:18:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1726.php">Galen M. Shipman: "Re: [OMPI users] Proprieatary transport layer for openMPI..."</a>
<li><strong>Previous message:</strong> <a href="1724.php">Benjamin Allan: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1726.php">Galen M. Shipman: "Re: [OMPI users] Proprieatary transport layer for openMPI..."</a>
<li><strong>Reply:</strong> <a href="1726.php">Galen M. Shipman: "Re: [OMPI users] Proprieatary transport layer for openMPI..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All
<br>
<p>We have been using the Argonne MPICH (over TCP/IP) on our in-house designed
<br>
embedded multicomputer for last several months with satisfactory results.
<br>
Our network technology is custom built and is * *not** infiniband (or any
<br>
published standards, such as Myrinet) based. This is due to the nature of
<br>
our application. We are currently running TCP/IP over out backplane network
<br>
and using that as the transport layer of MPICH.
<br>
<p>For the next generation of our software release, we are planning to write a
<br>
low level transport layer to leverage our switch architecture and
<br>
considering changing the entire MPI protocol stack to openMPI. From what I
<br>
have found so far, I'd have to write routines to provide services similar to
<br>
the ones found under ompi/mca/btl/{tcp,mx,...}. I'd like to get some
<br>
guidance as to how to do this. Is there a document about this? Has anybody
<br>
in this list done something similar before and if so, what was the
<br>
difficulty level involved?
<br>
<p>Thanks a lot in advance.
<br>
<p>Durga
<br>
<p><pre>
-- 
Devil wanted omnipresence;
He therefore created communists.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1725/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1726.php">Galen M. Shipman: "Re: [OMPI users] Proprieatary transport layer for openMPI..."</a>
<li><strong>Previous message:</strong> <a href="1724.php">Benjamin Allan: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1726.php">Galen M. Shipman: "Re: [OMPI users] Proprieatary transport layer for openMPI..."</a>
<li><strong>Reply:</strong> <a href="1726.php">Galen M. Shipman: "Re: [OMPI users] Proprieatary transport layer for openMPI..."</a>
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
