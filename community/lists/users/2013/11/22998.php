<?
$subject_val = "Re: [OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 15 10:56:13 2013" -->
<!-- isoreceived="20131115155613" -->
<!-- sent="Fri, 15 Nov 2013 09:56:13 -0600" -->
<!-- isosent="20131115155613" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception" -->
<!-- id="5286441D.3050609_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1360597894.24401.0.camel_at_WMS005" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-15 10:56:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22999.php">Ralph Castain: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>Previous message:</strong> <a href="22997.php">Christoffer Hamberg: "[OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21367.php">Stefan Mauerberger: "[OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/11/2013 09:51 AM, Stefan Mauerberger wrote:
<br>
<span class="quotelev1">&gt; Hi Everyone!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Playing around with MPI_FILE_READ() puzzles me a little. To catch all
</span><br>
<span class="quotelev1">&gt; errors I set the error-handler - the one which is related to file I/O -
</span><br>
<span class="quotelev1">&gt; to MPI_ERRORS_ARE_FATAL.
</span><br>
<span class="quotelev1">&gt; However, when reading from a file which has not the necessary size
</span><br>
<span class="quotelev1">&gt; MPI_FILE_READ(...) returns 'MPI_SUCCESS: no errors'. Well, read values
</span><br>
<span class="quotelev1">&gt; are just a mess.
</span><br>
<span class="quotelev1">&gt; Does anyone have an idea how to catch such an error?
</span><br>
<p>The read succeeded.  You would consult the status object to see how many 
<br>
bytes were actually read.
<br>
<p>==rob
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22999.php">Ralph Castain: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>Previous message:</strong> <a href="22997.php">Christoffer Hamberg: "[OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21367.php">Stefan Mauerberger: "[OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
<!-- nextthread="start" -->
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
