<?
$subject_val = "[OMPI devel] MPI datatype problem in mpi_test_suite?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 11:05:24 2009" -->
<!-- isoreceived="20090706150524" -->
<!-- sent="Mon, 6 Jul 2009 11:05:16 -0400" -->
<!-- isosent="20090706150516" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI datatype problem in mpi_test_suite?" -->
<!-- id="64D58AC2-22DD-4272-9C44-B75A2E5F5699_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI datatype problem in mpi_test_suite?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 11:05:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6383.php">Rainer Keller: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>Previous message:</strong> <a href="6381.php">Mariusz Mamo&#197;&#132;ski: "[OMPI devel] oob/btl tcp port range - missing htons?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6383.php">Rainer Keller: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>Reply:</strong> <a href="6383.php">Rainer Keller: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice that in the new HLRS mpi_test_suite, I'm getting oodles of  
<br>
errors with the MPI_TYPE_MIX and MPI_SHORT_INT datatypes (Linux/ 
<br>
x86_64).  I have to run with:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun mpi_test_suite -d All,\!MPI_TYPE_MIX,\!MPI_SHORT_INT
<br>
<p>(which excludes these two types)
<br>
<p>I can't quite follow the test suite code, but MPI_TYPE_MIX is some  
<br>
kind of derived MPI datatype.
<br>
<p>Is something wrong with our datatype engine?  Or are these tests  
<br>
faulty?  I don't know if anyone has run this test suite with any  
<br>
regularity before, so I don't know which it is...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6383.php">Rainer Keller: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>Previous message:</strong> <a href="6381.php">Mariusz Mamo&#197;&#132;ski: "[OMPI devel] oob/btl tcp port range - missing htons?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6383.php">Rainer Keller: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>Reply:</strong> <a href="6383.php">Rainer Keller: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
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
