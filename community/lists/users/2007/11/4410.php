<?
$subject_val = "[OMPI users] Re: [OMPI users] MPI_Probe succeeds,  but subsequent MPI_Recv gets stuck";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 09:05:27 2007" -->
<!-- isoreceived="20071106140527" -->
<!-- sent="Tue,  6 Nov 2007 15:05:22 +0100" -->
<!-- isosent="20071106140522" -->
<!-- name="hpetit_at_[hidden]" -->
<!-- email="hpetit_at_[hidden]" -->
<!-- subject="[OMPI users] Re: [OMPI users] MPI_Probe succeeds,  but subsequent MPI_Recv gets stuck" -->
<!-- id="JR38GY$36723EFC1C953650C803196E7B66B4C4_at_aliceadsl.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> <a href="mailto:hpetit_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Re:%20[OMPI%20users]%20MPI_Probe%20succeeds,%20%20but%20subsequent%20MPI_Recv%20gets%20stuck"><em>hpetit_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-11-06 09:05:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4411.php">Mostyn Lewis: "[OMPI users] OpenMPI - can you switch off threads?"</a>
<li><strong>Previous message:</strong> <a href="4409.php">&#197;ke Sandgren: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just a thought,
<br>

<br>
Behaviour can be unpredictable if you use MPI_Bsend or MPI_Ibsend ... on your sender side cause nothing is checked regard to allocated buffer.
<br>

<br>
MPI_Send or MPI_Isend shall be used instead.
<br>

<br>
Regards
<br>

<br>
Herve
<br>

<br>
<p><p>------------------------ ALICE C'EST ENCORE MIEUX AVEC CANAL+ LE BOUQUET ! ---------------
<br>
D&#233;couvrez vite l'offre exclusive ALICEBOX et CANAL+ LE BOUQUET, en cliquant ici <a href="http://alicebox.fr">http://alicebox.fr</a>
<br>
Soumis &#224; conditions.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4411.php">Mostyn Lewis: "[OMPI users] OpenMPI - can you switch off threads?"</a>
<li><strong>Previous message:</strong> <a href="4409.php">&#197;ke Sandgren: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- nextthread="start" -->
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
