<?
$subject_val = "[OMPI users] Shared Libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 21:34:21 2016" -->
<!-- isoreceived="20160623013421" -->
<!-- sent="Wed, 22 Jun 2016 19:34:12 -0600" -->
<!-- isosent="20160623013412" -->
<!-- name="Richard C. Wagner" -->
<!-- email="drsavage_at_[hidden]" -->
<!-- subject="[OMPI users] Shared Libraries" -->
<!-- id="9738277A935F41A5BC509F4B40F795CC_at_Euler" -->
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
<strong>Subject:</strong> [OMPI users] Shared Libraries<br>
<strong>From:</strong> Richard C. Wagner (<em>drsavage_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 21:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29523.php">Saliya Ekanayake: "[OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Previous message:</strong> <a href="29521.php">Gilles Gouaillardet: "Re: [OMPI users] Continuous integration question..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29525.php">Ralph Castain: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Reply:</strong> <a href="29525.php">Ralph Castain: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Reply:</strong> <a href="29528.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Maybe reply:</strong> <a href="29546.php">Richard C. Wagner: "Re: [OMPI users] Shared Libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Everyone:
<br>
<p>I'm trying to employ MPI in an unconventional programming language, Forth, running over Debian 
<br>
Linux.  The Forth I have can import a Linux shared library in the .so file format and then compile 
<br>
in the executable functions as externals.  The question: how to do it?  I'm looking to access 
<br>
MPI_Init, MPI_Finalize, MPI_Comm_size, MPI_Comm_rank, MPI_Waitany, MPI_Isend, MPI_Irecv plus other 
<br>
functions as needed.  The Forth is a 32-bit executable, so I need to include functions from a 32-bit 
<br>
library.  Is there a single 32-bit MPI library where I can find these functions?  Or would it make 
<br>
sense to create my own, 32-bit library using C?
<br>
<p>Any ideas?
<br>
<p><p>Regards,
<br>
<p>Rich Wagner
<br>
Aerospace Engineer
<br>
Graduate Student
<br>
Fort Collins, CO, USA 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29523.php">Saliya Ekanayake: "[OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Previous message:</strong> <a href="29521.php">Gilles Gouaillardet: "Re: [OMPI users] Continuous integration question..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29525.php">Ralph Castain: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Reply:</strong> <a href="29525.php">Ralph Castain: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Reply:</strong> <a href="29528.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Maybe reply:</strong> <a href="29546.php">Richard C. Wagner: "Re: [OMPI users] Shared Libraries"</a>
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
