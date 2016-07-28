<?
$subject_val = "[OMPI users] send and receive vectors + variable length";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 12:48:34 2015" -->
<!-- isoreceived="20150108174834" -->
<!-- sent="Thu, 8 Jan 2015 18:48:33 +0100" -->
<!-- isosent="20150108174833" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] send and receive vectors + variable length" -->
<!-- id="CAG8o1y591PW5+3Ff_Xmku2RPvL6sns=PoL3On1YAUXOT09aZfQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] send and receive vectors + variable length<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 12:48:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26129.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26129.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26129.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
thanks thank a lot, I am learning a lot.
<br>
<p>I have written a simple program that send vectors of integers from a CPU to
<br>
another.
<br>
<p>The program is written (at least for now) for 4 CPU.
<br>
<p>The program is quite simple:
<br>
Each CPU knows how many data has to send to the other CPUs. This info is
<br>
than send to the other CPUS. In this way each CPU knows how may data has to
<br>
receive from other CPUs.
<br>
<p>This part of the program works.
<br>
<p>The problem is in the second part.
<br>
<p>In the second part, each processor sends a vector of integer to the other
<br>
processor. The size is given and each CPU knows the size of the incoming
<br>
vector form the first part of the program.
<br>
<p>In this second part the program fails and I do not know why.
<br>
<p>In the attachment you can find the program. Could you please help me.
<br>
Problably I didn't understand properly the ISEND and IRECV subroutine.
<br>
<p>Thanks again
<br>
<p><p>Diego
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26128/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26128/test_isend_irecv_vector.f90">test_isend_irecv_vector.f90</a>
</ul>
<!-- attachment="test_isend_irecv_vector.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26129.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26129.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26129.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
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
