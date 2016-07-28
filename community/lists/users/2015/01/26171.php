<?
$subject_val = "[OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 09:22:55 2015" -->
<!-- isoreceived="20150113142255" -->
<!-- sent="Tue, 13 Jan 2015 15:22:54 +0100" -->
<!-- isosent="20150113142254" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous" -->
<!-- id="CAG8o1y7h9snMNNr2-D03jB49Wzq7O7Vd4S7p5R6h1udATCHjhw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-13 09:22:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26172.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26170.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26172.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26172.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I had some wonderful talking about MPI_type_create_struct adn isend\irecv
<br>
with
<br>
Gilles, Gustavo, George, Gus, Tom and Jeff. Now all is more clear and my
<br>
program works.
<br>
<p>Now I have another question. In may program I have matrix:
<br>
<p>*QQMLS(:,:,:) *that is allocate as
<br>
<p>*ALLOCATE(QQMLS(9,npt,18)*), where npt is the number of particles
<br>
<p>QQMLS is double precision.
<br>
<p>I would like to sent form a CPU to another part of it, for example, sending
<br>
QQMLS(:,50:100,:). I mean sending the QQMLS of the particles between 50 to
<br>
100.
<br>
I suppose that i could use MPI_Type_vector but I am not sure. The particle
<br>
that I want to sent could be from 25 to 50 ecc.. ecc..so  blocklength
<br>
changes everytime.
<br>
<p>Do I have to use MPI_type_create_struct?
<br>
Do I have correctly understood MPI_Type_vector?
<br>
<p>Thanks a lot
<br>
<p><p>Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26171/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26172.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26170.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26172.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26172.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
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
