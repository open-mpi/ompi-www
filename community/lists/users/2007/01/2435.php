<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan  5 14:39:07 2007" -->
<!-- isoreceived="20070105193907" -->
<!-- sent="Fri, 5 Jan 2007 12:38:57 -0700 (MST)" -->
<!-- isosent="20070105193857" -->
<!-- name="lund_at_[hidden]" -->
<!-- email="lund_at_[hidden]" -->
<!-- subject="[OMPI users] external32 i/o not implemented?" -->
<!-- id="49195.24.8.167.75.1168025937.squirrel_at_www.cora.nwra.com" -->
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
<strong>From:</strong> <a href="mailto:lund_at_[hidden]?Subject=Re:%20[OMPI%20users]%20external32%20i/o%20not%20implemented?"><em>lund_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-01-05 14:38:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2436.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2434.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2438.php">Rainer Keller: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Reply:</strong> <a href="2438.php">Rainer Keller: "Re: [OMPI users] external32 i/o not implemented?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;I am attempting to use the 'external32' data representation in order
<br>
read and write portable data files.  I believe I understand how to do
<br>
this, but I receive the following run-time error from the
<br>
mpi_file_set_view call:
<br>
<p>MPI_FILE_SET_VIEW (line 118): **unsupporteddatarep
<br>
<p>If I replace 'external32' with 'native' in the mpi_file_set_view call then
<br>
everything works, but the data file is written in little endian order on
<br>
my Opteron cluster.  Just for grins I also tried 'internal' but this
<br>
produces the unsupporteddatarep error as well.
<br>
<p>Is the 'external32' data type implemented?  Do I need to do something else
<br>
to access it?  I looked in the FAQs as well as the mailing list archives
<br>
but I can not seem to find any threads discussing this issue.  I would
<br>
greatly appreciate any advice.
<br>
<p>I have attached my sample fortran codes (explicit_write.f,
<br>
explicit_read.f, Makefkile) as well as the config.log, output of
<br>
ompi_info, and my environment variable settings.  I am running Fedora Core
<br>
4 with the 2.6.17-1.2142_FC4smp kernel.
<br>
<p>Thanks,
<br>
<p>&nbsp;&nbsp;&nbsp;---Tom
<br>






<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2435/explicit_write.f">explicit_write.f</a>
</ul>
<!-- attachment="explicit_write.f" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2435/explicit_read.f">explicit_read.f</a>
</ul>
<!-- attachment="explicit_read.f" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2435/Makefile">Makefile</a>
</ul>
<!-- attachment="Makefile" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2435/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2435/ompi.info.gz">ompi.info.gz</a>
</ul>
<!-- attachment="ompi.info.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2435/env.out">env.out</a>
</ul>
<!-- attachment="env.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2436.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2434.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2438.php">Rainer Keller: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Reply:</strong> <a href="2438.php">Rainer Keller: "Re: [OMPI users] external32 i/o not implemented?"</a>
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
