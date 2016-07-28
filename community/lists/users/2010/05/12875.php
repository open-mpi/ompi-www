<?
$subject_val = "[OMPI users] Fortran derived types";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 15:25:54 2010" -->
<!-- isoreceived="20100504192554" -->
<!-- sent="Tue, 4 May 2010 12:25:26 -0700" -->
<!-- isosent="20100504192526" -->
<!-- name="Vedran Coralic" -->
<!-- email="vcoralic_at_[hidden]" -->
<!-- subject="[OMPI users] Fortran derived types" -->
<!-- id="z2g48b85f861005041225yb5870debiaefefce2fa5d8270_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fortran derived types<br>
<strong>From:</strong> Vedran Coralic (<em>vcoralic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 15:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12876.php">Gus Correa: "[OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12874.php">Ralph Castain: "[OMPI users] Open MPI 1.4.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12881.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12881.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12902.php">Prentice Bisbal: "Re: [OMPI users] Fortran derived types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>In my Fortran 90 code I use several custom defined derived types. Amongst
<br>
them is a vector of arrays, i.e. v(:)%f(:,:,:). I am wondering what the
<br>
proper way of sending this data structure from one processor to another is.
<br>
Is the best way to just restructure the data by copying it into a vector and
<br>
sending that or is there a simpler way possible by defining an MPI derived
<br>
type that can handle it?
<br>
<p>I looked into the latter myself but so far, I have only found the solution
<br>
for a scalar fortran derived type and the methodology that was suggested in
<br>
that case did not seem naturally extensible to the vector case.
<br>
<p><p>Thanks any help you can give me!
<br>
<p><pre>
-- 
Vedran Coralic
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12875/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12876.php">Gus Correa: "[OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12874.php">Ralph Castain: "[OMPI users] Open MPI 1.4.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12881.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12881.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12902.php">Prentice Bisbal: "Re: [OMPI users] Fortran derived types"</a>
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
