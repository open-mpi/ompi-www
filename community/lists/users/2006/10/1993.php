<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 17 02:29:56 2006" -->
<!-- isoreceived="20061017062956" -->
<!-- sent="Tue, 17 Oct 2006 08:29:50 +0200" -->
<!-- isosent="20061017062950" -->
<!-- name="Laurent.POREZ_at_[hidden]" -->
<!-- email="Laurent.POREZ_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.1.1 with Multiple Thread Support" -->
<!-- id="2F8EE677D406514ABE53EF9C0934A666061BA2AD_at_anubis2.clb.tcfr.thales" -->
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
<strong>From:</strong> <a href="mailto:Laurent.POREZ_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OpenMPI%201.1.1%20with%20Multiple%20Thread%20Support"><em>Laurent.POREZ_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-10-17 02:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1994.php">Lydia Heck: "[OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>Previous message:</strong> <a href="1992.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1997.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Reply:</strong> <a href="1997.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>Could you explain what's wrong with thread support ?
<br>
Does it hang, or something else ?
<br>
<p>I'm developping an application using multiple processes with multiple threads, and I have to use MPI to make process communicate. Typically, I will have to use the following functions :
<br>
- MPI_Comm_spawn_multiple, 
<br>
- MPI_Bsend, MPI_Recv, MPI_Irecv, MPI_Test
<br>
- MPI_Barrier
<br>
- MPI_Allgather
<br>
<p>Can this work with the actual version of Open-MPI (1.1.1) or a later one, or even with  an other MPI library (free or commercial) ?
<br>
Do I have to think about giving up MPI ?
<br>
<p>Thanks, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laurent.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1994.php">Lydia Heck: "[OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>Previous message:</strong> <a href="1992.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1997.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Reply:</strong> <a href="1997.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
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
