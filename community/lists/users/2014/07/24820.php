<?
$subject_val = "[OMPI users] after mpi_finalize(Err)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 20 10:11:15 2014" -->
<!-- isoreceived="20140720141115" -->
<!-- sent="Sun, 20 Jul 2014 16:11:14 +0200" -->
<!-- isosent="20140720141114" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] after mpi_finalize(Err)" -->
<!-- id="CAG8o1y7QoPGSMtFixq3=B0qwMGtD4pwb0yQ6mWhSu+GNnbCM2g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] after mpi_finalize(Err)<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-20 10:11:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24821.php">Ralph Castain: "Re: [OMPI users] after mpi_finalize(Err)"</a>
<li><strong>Previous message:</strong> <a href="24819.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24821.php">Ralph Castain: "Re: [OMPI users] after mpi_finalize(Err)"</a>
<li><strong>Reply:</strong> <a href="24821.php">Ralph Castain: "Re: [OMPI users] after mpi_finalize(Err)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I have a question about mpi_finalize.
<br>
<p>After mpi_finalize the program returs single core, Have I understand
<br>
correctly?
<br>
In this case I do not understand something:
<br>
<p>In my program I have something like:
<br>
<p>call MPI_FINALIZE(rc)
<br>
write(*,*) &quot;hello world&quot;
<br>
<p>However, my program write it many times as the number of my processor and I
<br>
do not understand why.
<br>
<p>Thanks in advance to everyone
<br>
<p>Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24820/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24821.php">Ralph Castain: "Re: [OMPI users] after mpi_finalize(Err)"</a>
<li><strong>Previous message:</strong> <a href="24819.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24821.php">Ralph Castain: "Re: [OMPI users] after mpi_finalize(Err)"</a>
<li><strong>Reply:</strong> <a href="24821.php">Ralph Castain: "Re: [OMPI users] after mpi_finalize(Err)"</a>
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
