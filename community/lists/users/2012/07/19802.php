<?
$subject_val = "[OMPI users] issue with addresses";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 21 15:59:49 2012" -->
<!-- isoreceived="20120721195949" -->
<!-- sent="Sat, 21 Jul 2012 15:59:44 -0400" -->
<!-- isosent="20120721195944" -->
<!-- name="Priyesh Srivastava" -->
<!-- email="priyesh_at_[hidden]" -->
<!-- subject="[OMPI users] issue with addresses" -->
<!-- id="CALXD7G6XenAk-bW8xrKa5D83-NN+9rzRTdoX3gqu026F5FuAxA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] issue with addresses<br>
<strong>From:</strong> Priyesh Srivastava (<em>priyesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-21 15:59:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19803.php">tiago essex: "[OMPI users] ft-enable-cr + vprotocol"</a>
<li><strong>Previous message:</strong> <a href="19801.php">Jack Galloway: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19808.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Reply:</strong> <a href="19808.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Maybe reply:</strong> <a href="19809.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Maybe reply:</strong> <a href="19828.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I am working on a mpi program. I have been printing the addresses of
<br>
different variables and arrays using the MPI_GET_ADDRESS command. What I
<br>
have noticed is that all the processors are giving the same address of a
<br>
particular variable as long as the address is less than 2 GB size. When the
<br>
address of a variable/ array is more than 2GB size different processors are
<br>
giving different addresses for the same variable. (I am working on a 64 bit
<br>
system and am using the new MPI Functions and MPI_ADDRESS_KIND integers for
<br>
getting the addresses).
<br>
<p>my question is that should all the processors give the same address for
<br>
same variables? If so then why is this not happening for variables with
<br>
larger addresses.
<br>
<p><p>thanks
<br>
priyesh
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19802/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19803.php">tiago essex: "[OMPI users] ft-enable-cr + vprotocol"</a>
<li><strong>Previous message:</strong> <a href="19801.php">Jack Galloway: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19808.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Reply:</strong> <a href="19808.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Maybe reply:</strong> <a href="19809.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Maybe reply:</strong> <a href="19828.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
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
