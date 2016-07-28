<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 23 13:49:36 2006" -->
<!-- isoreceived="20060523174936" -->
<!-- sent="Tue, 23 May 2006 19:49:21 +0200" -->
<!-- isosent="20060523174921" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="[OMPI users] wrong predefined MPI_PROD" -->
<!-- id="44734B21.3000504_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-23 13:49:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1262.php">Brian Barrett: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>Previous message:</strong> <a href="1260.php">Brian Barrett: "Re: [OMPI users] mca_btl_sm_send: write fifo failed: errno=9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1262.php">Brian Barrett: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>Reply:</strong> <a href="1262.php">Brian Barrett: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>Maybe reply:</strong> <a href="1266.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>the predfined mpi op MPI_PROD is apparently wrong:
<br>
<p>from openmpi-1.2a1r10020/ompi/op/op_predefined.c:
<br>
<p>OP_FUNC(prod, long_long_int, long long int, +=)
<br>
OP_FUNC(prod, unsigned_long_long, unsigned long long, +=)
<br>
:
<br>
OP_FUNC(prod, fortran_integer1, ompi_fortran_integer1_t, +=)
<br>
:
<br>
OP_FUNC(prod, fortran_integer2, ompi_fortran_integer2_t, +=)
<br>
:
<br>
OP_FUNC(prod, fortran_integer4, ompi_fortran_integer4_t, +=)
<br>
:
<br>
:
<br>
<p>greetings
<br>
bert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1262.php">Brian Barrett: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>Previous message:</strong> <a href="1260.php">Brian Barrett: "Re: [OMPI users] mca_btl_sm_send: write fifo failed: errno=9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1262.php">Brian Barrett: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>Reply:</strong> <a href="1262.php">Brian Barrett: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>Maybe reply:</strong> <a href="1266.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] wrong predefined MPI_PROD"</a>
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
