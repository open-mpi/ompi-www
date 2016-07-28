<?
$subject_val = "[OMPI users] Questions about MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 03:18:45 2010" -->
<!-- isoreceived="20100511071845" -->
<!-- sent="Tue, 11 May 2010 09:18:38 +0200" -->
<!-- isosent="20100511071838" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="[OMPI users] Questions about MPI_Isend" -->
<!-- id="36CE392E-8BC8-4FAC-BCFF-EA15624784B5_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Questions about MPI_Isend<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-11 03:18:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13008.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="13006.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13008.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13008.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13014.php">Richard Treumann: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13022.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
An OpenMPI program of mine that uses MPI_Isend and MPI_Irecv crashes after some non-reproducible time my Fedora Linux kernel (invalid opcode), which makes it hard to debug (there is no trace, even with the debug kernel, and if I run it under valgrind it does not crash).
<br>
My guess is that the kernel crash is caused by OpenMPI running out if memory because too many MPI_Irecv messages have been sent but not been processed yet.
<br>
My questions are:
<br>
What does the OpenMPI specification say about the behaviour of MPI_Isend when many messages have been sent but have not been processed yet? Will it fail? Will it block until more memory becomes available (I hope not, because this would cause my program to deadlock)?
<br>
Ideally I would like to check how many MPI_Isend messages have not been processed yet, so that I can stop sending messages if there are 'too many' waiting. Is there a way to do this?
<br>
<p>Regards,
<br>
Gijsbert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13008.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="13006.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13008.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13008.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13014.php">Richard Treumann: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13022.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
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
