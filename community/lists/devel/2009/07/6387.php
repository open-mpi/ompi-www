<?
$subject_val = "[OMPI devel] [RFC] Move the datatype engine in the OPAL layer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 17:57:31 2009" -->
<!-- isoreceived="20090707215731" -->
<!-- sent="Tue, 7 Jul 2009 17:57:22 -0400" -->
<!-- isosent="20090707215722" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] Move the datatype engine in the OPAL layer" -->
<!-- id="C8AE5FFE-DEF3-4D49-81BF-06A972B46B49_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] [RFC] Move the datatype engine in the OPAL layer<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 17:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6388.php">Rainer Keller: "Re: [OMPI devel] MPI_Recv pre memory checks"</a>
<li><strong>Previous message:</strong> <a href="6386.php">Prasadcse Perera: "[OMPI devel] MPI_Recv pre memory checks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6390.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Reply:</strong> <a href="6390.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What : Split the datatype engine in two parts: one MPI agnostic in the  
<br>
OPAL layer and one holding the MPI knowledge in the OMPI layer.
<br>
<p>Why : There are several reasons. One is cleanness of the code, the  
<br>
lower layer only deals with POSIX types ([u]int[1,2,4,8]_t,  
<br>
float[4,6,12]_t, wchar and bool). All the conversions works on only  
<br>
these types, everything else is built on top of these types. Second  
<br>
reason, is that now the data-type engine (without all the MPI  
<br>
knowledge) is available to other projects.
<br>
<p>Where : <a href="https://svn.open-mpi.org/svn/ompi/tmp/ompi-ddt">https://svn.open-mpi.org/svn/ompi/tmp/ompi-ddt</a>
<br>
<p>When: Over the weekend of July 11th.
<br>
<p>Long[er] Version
<br>
=============
<br>
<p>Logically split the datatype engine based on the MPI knowledge  
<br>
requirements. The lowest layer is dealing with only the POSIX  
<br>
compliant types (aka fewer types), while the upper layer is mainly  
<br>
dealing with the matching of the MPI types with the POSIX ones (based  
<br>
on their size and alignment), storing language semantics a type was  
<br>
created from, keeping track of all the MPI features (such as  
<br>
get_content) and implementing optimized version of the composed  
<br>
datatype creation (contiguous, vector and co.).
<br>
<p>Additionally, this will allow easy implementation of MPI_INT8_T and  
<br>
friends of the upcoming MPI-2.2 ;-)
<br>
<p>While the code has been moved around quite a bit and most of the files  
<br>
have been [nicely] renamed, we keep the usual Open MPI development  
<br>
model, with objects derived from other objects. As a result the  
<br>
ompi_datatype_t is derived from the opal_datatype_t, plus some fields  
<br>
to deal with the MPI requirements.
<br>
<p>Correctness tests are done using mpi_test_suite and intel tests.  
<br>
Further MTT test would be nice!
<br>
<p>Performance tests on the ompi-ddt branch have proven that there is no  
<br>
performance penalties associated with this change (tests done using  
<br>
NetPipe-3.7.1 on smoky using BTL/sm, giving 1.6usecs on this platform).
<br>
<p><p>&nbsp;&nbsp;&nbsp;george &amp; rainer.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6388.php">Rainer Keller: "Re: [OMPI devel] MPI_Recv pre memory checks"</a>
<li><strong>Previous message:</strong> <a href="6386.php">Prasadcse Perera: "[OMPI devel] MPI_Recv pre memory checks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6390.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Reply:</strong> <a href="6390.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
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
