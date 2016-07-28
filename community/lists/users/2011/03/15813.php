<?
$subject_val = "[OMPI users] multi-threaded programming";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 12:35:46 2011" -->
<!-- isoreceived="20110308173546" -->
<!-- sent="Tue, 08 Mar 2011 09:34:15 -0800" -->
<!-- isosent="20110308173415" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI users] multi-threaded programming" -->
<!-- id="4D766897.2020905_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI users] multi-threaded programming<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 12:34:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15814.php">Durga Choudhury: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>Previous message:</strong> <a href="15812.php">Gus Correa: "Re: [OMPI users] Two Instances of Same Process Rather Than Two	SeparateProcesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15814.php">Durga Choudhury: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>Reply:</strong> <a href="15814.php">Durga Choudhury: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>Reply:</strong> <a href="15843.php">Jeff Squyres: "Re: [OMPI users] multi-threaded programming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let's say you have multi-threaded MPI processes, you request 
<br>
MPI_THREAD_MULTIPLE and get MPI_THREAD_MULTIPLE, and you use the 
<br>
self,sm,tcp BTLs (which have some degree of threading support).  Is it 
<br>
okay to have an [MPI_Isend|MPI_Irecv] on one thread be completed by an 
<br>
MPI_Wait on another thread?  I'm assuming some sort of synchronization 
<br>
and memory barrier/flush in between to protect against funny race 
<br>
conditions.
<br>
<p>If it makes things any easier on you, we can do this multiple-choice style:
<br>
<p>1)  Forbidden by the MPI standard.
<br>
2)  Not forbidden by the MPI standard, but will not work with OMPI (not 
<br>
even with the BTLs that claim to be multi-threaded).
<br>
3)  Works well with OMPI (provided you use a BTL that's multi-threaded).
<br>
<p>It's looking like #2 to me, but I'm not sure.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15814.php">Durga Choudhury: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>Previous message:</strong> <a href="15812.php">Gus Correa: "Re: [OMPI users] Two Instances of Same Process Rather Than Two	SeparateProcesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15814.php">Durga Choudhury: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>Reply:</strong> <a href="15814.php">Durga Choudhury: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>Reply:</strong> <a href="15843.php">Jeff Squyres: "Re: [OMPI users] multi-threaded programming"</a>
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
