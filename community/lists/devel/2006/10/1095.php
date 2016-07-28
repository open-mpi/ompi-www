<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  5 12:51:12 2006" -->
<!-- isoreceived="20061005165112" -->
<!-- sent="Thu, 5 Oct 2006 12:51:02 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20061005165102" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] configure &amp;amp; Fortran problem" -->
<!-- id="Pine.WNT.4.64.0610051245390.1804_at_aloha" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-05 12:51:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1096.php">Jeff Squyres: "Re: [OMPI devel] configure &amp; Fortran problem"</a>
<li><strong>Previous message:</strong> <a href="1094.php">Jeff Squyres: "Re: [OMPI devel] MPI::File::Create_errhandler() missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1096.php">Jeff Squyres: "Re: [OMPI devel] configure &amp; Fortran problem"</a>
<li><strong>Reply:</strong> <a href="1096.php">Jeff Squyres: "Re: [OMPI devel] configure &amp; Fortran problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a problem with configure if no fortran compilers are detected. It 
<br>
stop with the following error:
<br>
<p>configure: error: Cannot support Fortran MPI_ADDRESS_KIND!
<br>
<p>As there are not F77 or F90 compilers installed on this machine, it make 
<br>
sense to not be able to support MPI_ADDRESS_KIND ... but as there are no 
<br>
fortran compilers we should not care about. I try to manually disable all 
<br>
kind of fortran support but the error is always the same.
<br>
<p>&nbsp;&nbsp;&nbsp;Any clues ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<p>

<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1095/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1095/config.out">config.out</a>
</ul>
<!-- attachment="config.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1096.php">Jeff Squyres: "Re: [OMPI devel] configure &amp; Fortran problem"</a>
<li><strong>Previous message:</strong> <a href="1094.php">Jeff Squyres: "Re: [OMPI devel] MPI::File::Create_errhandler() missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1096.php">Jeff Squyres: "Re: [OMPI devel] configure &amp; Fortran problem"</a>
<li><strong>Reply:</strong> <a href="1096.php">Jeff Squyres: "Re: [OMPI devel] configure &amp; Fortran problem"</a>
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
