<?
$subject_val = "[OMPI users] Need a programmer to implement MPI to a research application ($)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  8 19:15:05 2010" -->
<!-- isoreceived="20101008231505" -->
<!-- sent="Fri, 8 Oct 2010 19:14:49 -0400" -->
<!-- isosent="20101008231449" -->
<!-- name="Mikael Lavoie" -->
<!-- email="mikael.lavoie_at_[hidden]" -->
<!-- subject="[OMPI users] Need a programmer to implement MPI to a research application ($)" -->
<!-- id="AANLkTik_nh3srA1vixH40SDHaAHo0+X0NxXMQ2b38O=Y_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Need a programmer to implement MPI to a research application ($)<br>
<strong>From:</strong> Mikael Lavoie (<em>mikael.lavoie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-08 19:14:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14434.php">Götz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14432.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>After searching for some week to find a program to do 100 000 000#+ Mersenne
<br>
Prime with MPI, my research resulted to nothing.
<br>
So, now i'm ready to pay, if someone can implement MPI to mprime :
<br>
<a href="http://mersenneforum.org/gimps/source2511.zip">http://mersenneforum.org/gimps/source2511.zip</a> , or to
<br>
Glucas : <a href="http://www.oxixares.com/glucas/">http://www.oxixares.com/glucas/</a>.
<br>
<p>These two program, make Lucas-Lehmer test on an exponent to find if it is a
<br>
Mersenne Prime. They both use FFT (Fast Fourrier Transform)
<br>
to make the calculation.
<br>
<p>The reason why i want this, is that exponent goes bigger and bigger, and no
<br>
good program to use a HPC Cluster have been made to speedup
<br>
the research. Today it take a good 2 weeks on a New 4 core machine to goes
<br>
through the calculation, and 1 month for a P4 3.0GHz HT.
<br>
<p>The person who will accept to do it will greatly contribute to the Mersenne
<br>
research, and make some money too.
<br>
<p>I've tried to find a way to implement the communication without falling in
<br>
the embarrassingly parallel, but i'm not advanced to do so.
<br>
<p>Finally, a reward i offered too by the Electronic Frontier Foundation for
<br>
finding new prime, and i'm ready to share it with the one
<br>
that will make it, IF i ever find one...
<br>
<p>So, if someone is interested, plesase let me know, Thank you!
<br>
<p>Mikael Lavoie,
<br>
<p>mikael.lavoie_at_[hidden]
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14433/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14434.php">Götz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14432.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
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
