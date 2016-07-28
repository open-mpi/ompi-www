<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 30 12:06:18 2005" -->
<!-- isoreceived="20050830170618" -->
<!-- sent="Tue, 30 Aug 2005 11:06:14 -0600" -->
<!-- isosent="20050830170614" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="WRAPPER_EXTRA_LIBS build issues" -->
<!-- id="DC3C4EED-DA1A-4BAA-BA5F-59E678476655_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-30 12:06:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0268.php">David Daniel: "Fortran peculiarities on Mac OS X 10.4"</a>
<li><strong>Previous message:</strong> <a href="0266.php">Ralf Wildenhues: "Re:  small shell quoting issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>for those having issues with WRAPPER_EXTRA_LIBS/LDFLAGS constants  
<br>
showing up in the output of mpicc, a quick workaround is to disable  
<br>
the GM PTL during configure.  This can be accomplished by adding the  
<br>
configure flag:
<br>
<p>&nbsp;&nbsp;&nbsp;--enable-mca-no-build=ptl-gm
<br>
<p>to your configure line, then rebuilding.  I hope to have a proper  
<br>
solution later today.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0268.php">David Daniel: "Fortran peculiarities on Mac OS X 10.4"</a>
<li><strong>Previous message:</strong> <a href="0266.php">Ralf Wildenhues: "Re:  small shell quoting issue"</a>
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
