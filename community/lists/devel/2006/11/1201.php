<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 28 04:24:19 2006" -->
<!-- isoreceived="20061128092419" -->
<!-- sent="Tue, 28 Nov 2006 10:23:16 +0100" -->
<!-- isosent="20061128092316" -->
<!-- name="Anglade Pierre-Matthieu" -->
<!-- email="anglade_at_[hidden]" -->
<!-- subject="[OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;amp;'" -->
<!-- id="c65e87810611280123x1c7f5ba4jae048d623afd9ba5_at_mail.gmail.com" -->
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
<strong>From:</strong> Anglade Pierre-Matthieu (<em>anglade_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-28 04:23:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1202.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>Previous message:</strong> <a href="1200.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1202.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>Reply:</strong> <a href="1202.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Trying to compile open-mpi 1.1.2 I've encounter the error message used as a
<br>
title. Please find attached a tar.file cointaining:
<br>
-the configure output and log
<br>
-the make output
<br>
<p>I've try to correct the error and indeed changing line 98-99 in
<br>
pfile_read_at_f.c
<br>
from
<br>
98   if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;&amp;
<br>
99       MPI_STATUS_IGNORE != c_status) {
<br>
to
<br>
98   if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
<br>
99       MPI_STATUS_IGNORE != c_status) {
<br>
allow continuing the compilation up to the next file containing precisely
<br>
the same 'structure'. So I'm wondering what went wrong with my build. Can
<br>
someone help me with that ?
<br>
<p>Thanks in advance.
<br>
<p><pre>
-- 
Pierre-Matthieu Anglade
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1201/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1201/build-problem.tar.bz2">build-problem.tar.bz2</a>
</ul>
<!-- attachment="build-problem.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1202.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>Previous message:</strong> <a href="1200.php">Matt Leininger: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1202.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>Reply:</strong> <a href="1202.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
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
