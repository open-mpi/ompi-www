<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 16 09:33:03 2006" -->
<!-- isoreceived="20060116143303" -->
<!-- sent="Mon, 16 Jan 2006 09:32:57 -0500" -->
<!-- isosent="20060116143257" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="wrapper compiler changes" -->
<!-- id="ABFFC641-5903-46B4-B432-542B861B01BA_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-16 09:32:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0682.php">Leslie Watter: "Network Benchmark"</a>
<li><strong>Previous message:</strong> <a href="0680.php">George Bosilca: "Re:  Intel tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I committed a new set of wrapper compilers last night, intended to  
<br>
solve a few problems with the existing code.  The number one change  
<br>
being support for opal and otre wrapper compilers (no one really  
<br>
cares about the opal ones, but Ralph and the Eclipse folks at LANL  
<br>
have requested the orte ones).  The code was a fairly large re-write,  
<br>
so I wanted some testing before we made the new compilers the  
<br>
default.  mpicc, mpic++, mpif77, etc. are still the old wrapper  
<br>
compiles.  The new ones are:
<br>
<p>&nbsp;&nbsp;&nbsp;opalcc
<br>
&nbsp;&nbsp;&nbsp;opalc++/opalCC
<br>
&nbsp;&nbsp;&nbsp;ortecc
<br>
&nbsp;&nbsp;&nbsp;ortec++/orteCC
<br>
&nbsp;&nbsp;&nbsp;ompicc
<br>
&nbsp;&nbsp;&nbsp;ompic++/ompiCC/ompicxx
<br>
&nbsp;&nbsp;&nbsp;ompif77
<br>
&nbsp;&nbsp;&nbsp;ompif90
<br>
<p>I think I've implemented most of the functionality found in the old  
<br>
wrapper compilers.  If it's not to hard, I'd appreciate it if anyone  
<br>
could try compiling their test code / applications with the new ompi 
<br>
{cc,c++,f77,f90} compilers just to make sure I didn't miss anything.   
<br>
Unless I get negative feedback, I'll make the new wrapper compilers  
<br>
act as mpicc and friends end of the week.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0682.php">Leslie Watter: "Network Benchmark"</a>
<li><strong>Previous message:</strong> <a href="0680.php">George Bosilca: "Re:  Intel tests"</a>
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
