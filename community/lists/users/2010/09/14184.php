<?
$subject_val = "[OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  7 16:08:54 2010" -->
<!-- isoreceived="20100907200854" -->
<!-- sent="Tue, 07 Sep 2010 15:08:42 -0500" -->
<!-- isosent="20100907200842" -->
<!-- name="Allen Zhao" -->
<!-- email="a.zhao_at_[hidden]" -->
<!-- subject="[OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?" -->
<!-- id="4C869BCA.9090905_at_gtisoft.com" -->
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
<strong>Subject:</strong> [OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?<br>
<strong>From:</strong> Allen Zhao (<em>a.zhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-07 16:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14185.php">Gabriele Fatigati: "[OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14183.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with the receive buffer size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14217.php">Lisandro Dalcin: "Re: [OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?"</a>
<li><strong>Reply:</strong> <a href="14217.php">Lisandro Dalcin: "Re: [OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi, All,
<br>
<p>A newbie question:
<br>
<p>Suppose that I have a main executable (a non-MPI code, which just 
<br>
dynamically loaded a named share library), and I do compile the shared 
<br>
library with mpi-gcc. This way, when the main executable loads the 
<br>
shared library, what is going to happen?
<br>
<p>Can I parallel this application without calling MPI_Init() inside the 
<br>
main code, instead, I call MPI_Init() when the shared library is loaded 
<br>
by the main executable? Will it then be able to run in parallel? If this 
<br>
scenario is possible, when should I call MPI_Finalize()?
<br>
<p>I know these question is very newbie, any pointers would appreciated.
<br>
<p>Best regards,
<br>
<p>Allen Zhao
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14185.php">Gabriele Fatigati: "[OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14183.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with the receive buffer size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14217.php">Lisandro Dalcin: "Re: [OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?"</a>
<li><strong>Reply:</strong> <a href="14217.php">Lisandro Dalcin: "Re: [OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?"</a>
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
