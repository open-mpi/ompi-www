<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov  6 08:53:27 2006" -->
<!-- isoreceived="20061106135327" -->
<!-- sent="Mon, 6 Nov 2006 10:53:18 -0300" -->
<!-- isosent="20061106135318" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Problems in Collectives+Intercomms" -->
<!-- id="e7ba66e40611060553l75a190c4g930a71e4128a6eea_at_mail.gmail.com" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-06 08:53:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1164.php">Bruno Monteiro: "Re: [OMPI devel] Problems in Collectives+Intercomms"</a>
<li><strong>Previous message:</strong> <a href="1162.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1164.php">Bruno Monteiro: "Re: [OMPI devel] Problems in Collectives+Intercomms"</a>
<li><strong>Reply:</strong> <a href="1164.php">Bruno Monteiro: "Re: [OMPI devel] Problems in Collectives+Intercomms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A user testing my MPI wrappers for Python found a couple of problems
<br>
with OMPI-1.1 using valgrind, here are his reports.
<br>
<p><a href="http://projects.scipy.org/mpi4py/ticket/9">http://projects.scipy.org/mpi4py/ticket/9</a>
<br>
<a href="http://projects.scipy.org/mpi4py/ticket/10">http://projects.scipy.org/mpi4py/ticket/10</a>
<br>
<p>I've investigated this at OMPI-1.1.2 sources, and found the following
<br>
in file ompi/mpi/c/allgatherv.c
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = ompi_comm_size(comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; size; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (recvcounts[i] &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERRHANDLER_INVOKE(comm, MPI_ERR_COUNT, FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (MPI_DATATYPE_NULL == recvtype) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERRHANDLER_INVOKE(comm, MPI_ERR_TYPE, FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Two things to point on this source file :
<br>
<p>- I cannot see any special check for the itercommuncator case, and
<br>
checking recvcount with 'ompi_comm_size' is wrong, it should be with
<br>
remote comm size. Am I right?
<br>
<p>- Test for recvtype should be done outside the loop.
<br>
<p>In file ompi/mpi/c/gatherv.c, there are special check for intercomms.
<br>
However, in the intercomm specific checks, you are still using
<br>
'ompi_comm_size'
<br>
<p><p>As reference, in ompi/mpi/c/alltoallv.c you have
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = ompi_comm_remote_size(comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; size; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (recvcounts[i] &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_ERR_COUNT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (MPI_DATATYPE_NULL == recvtype) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_ERR_TYPE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CHECK_DATATYPE_FOR_SEND(err, sendtype, sendcounts[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ERRHANDLER_CHECK(err, comm, err, FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>This is OK, but perhaps some things can be moved outside the loop.
<br>
<p>Regards,
<br>
<p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1164.php">Bruno Monteiro: "Re: [OMPI devel] Problems in Collectives+Intercomms"</a>
<li><strong>Previous message:</strong> <a href="1162.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1164.php">Bruno Monteiro: "Re: [OMPI devel] Problems in Collectives+Intercomms"</a>
<li><strong>Reply:</strong> <a href="1164.php">Bruno Monteiro: "Re: [OMPI devel] Problems in Collectives+Intercomms"</a>
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
