<?
$subject_val = "[OMPI users] OpenMPI-Ranking problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  8 08:30:46 2010" -->
<!-- isoreceived="20100608123046" -->
<!-- sent="Tue, 8 Jun 2010 18:30:40 +0600" -->
<!-- isosent="20100608123040" -->
<!-- name="Chamila Janath" -->
<!-- email="chamila.janath_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI-Ranking problem" -->
<!-- id="AANLkTilex29PsrHNEJa8I8WxqqE1O0aLeY84uJ7ZrtWp_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI-Ranking problem<br>
<strong>From:</strong> Chamila Janath (<em>chamila.janath_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-08 08:30:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13248.php">lauren: "[OMPI users] Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13246.php">Rui: "[OMPI users] Question about open-mpi fault tolerance machanism"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13257.php">Terry Dontje: "Re: [OMPI users] OpenMPI-Ranking problem"</a>
<li><strong>Reply:</strong> <a href="13257.php">Terry Dontje: "Re: [OMPI users] OpenMPI-Ranking problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*rankfile*
<br>
rank 0=10.16.71.1 slot=0
<br>
<p>I launched my mpi app using,
<br>
<p>$ mpirun -np 1 -rf rankfile appname
<br>
<p>I can run the application on Intel dual-core machine with Linux based OS
<br>
nicely. But i can't run it on single core machine(P4).
<br>
The execution terminates specifying a problem of slot number. What is the
<br>
reason for this? A bug or problem of the slot number I specified.(I tried by
<br>
using rank 0=10.16.71.1 slot=p0:0 but it too failed)
<br>
Please help me.
<br>
<p>Thanks a lot....
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13247/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13248.php">lauren: "[OMPI users] Res:  Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13246.php">Rui: "[OMPI users] Question about open-mpi fault tolerance machanism"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13257.php">Terry Dontje: "Re: [OMPI users] OpenMPI-Ranking problem"</a>
<li><strong>Reply:</strong> <a href="13257.php">Terry Dontje: "Re: [OMPI users] OpenMPI-Ranking problem"</a>
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
