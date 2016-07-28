<?
$subject_val = "[OMPI users] mpi_type_create_struct not working for large counts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 12:40:38 2015" -->
<!-- isoreceived="20150413164038" -->
<!-- sent="Mon, 13 Apr 2015 16:40:34 +0000" -->
<!-- isosent="20150413164034" -->
<!-- name="MOHR STEPHAN 239883" -->
<!-- email="STEPHAN.MOHR_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_type_create_struct not working for large counts" -->
<!-- id="FC64FEF6471E804DA9CA2F6DBDCFD62B014C652D_at_EXDAG0-B2.intra.cea.fr" -->
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
<strong>Subject:</strong> [OMPI users] mpi_type_create_struct not working for large counts<br>
<strong>From:</strong> MOHR STEPHAN 239883 (<em>STEPHAN.MOHR_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-13 12:40:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26696.php">Howard Pritchard: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Previous message:</strong> <a href="26694.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26696.php">Howard Pritchard: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Reply:</strong> <a href="26696.php">Howard Pritchard: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I've got an issue when using a derived data type created by mpi_type_create_struct in a one-sided communication.
<br>
<p>The problem can be reproduced using the small standalone program which I attached. It just creates a type which should be equivalent to n contiguous elements. This type is then used in a mpi_get. With a value n=100 it works fine, but with n=1000 it either hangs (version 1.8.1) or crashes (version 1.6.5).
<br>
<p>Any help is appreciated.
<br>
<p>Best regards,
<br>
Stephan
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26695/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26695/test_mpi.f90">test_mpi.f90</a>
</ul>
<!-- attachment="test_mpi.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26696.php">Howard Pritchard: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Previous message:</strong> <a href="26694.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26696.php">Howard Pritchard: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Reply:</strong> <a href="26696.php">Howard Pritchard: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
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
