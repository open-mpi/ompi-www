<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 19 19:04:23 2007" -->
<!-- isoreceived="20070619230423" -->
<!-- sent="Tue, 19 Jun 2007 16:04:17 -0700" -->
<!-- isosent="20070619230417" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="[OMPI devel] Unreliable Datagram BTL" -->
<!-- id="467860F1.8060205_at_open-mpi.org" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-19 19:04:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1734.php">Jeff Squyres: "[OMPI devel] PML/BTL MCA params review"</a>
<li><strong>Previous message:</strong> <a href="1732.php">Rainer Keller: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Galen asked for a writeup of where the UD BTL support is at and what 
<br>
(important) issues remain, so here it is.
<br>
<p>Right now, to ensure MPI guaranteed delivery semantics the DR PML must 
<br>
be used with UD -- the UD BTL does not implement its own reliability. 
<br>
The best solution would be to implement a lightweight reliability 
<br>
protocol within the UD BTL, and would be most effective with a progress 
<br>
thread.
<br>
<p>Progress threads are a whole other issue.. with a quick implementation, 
<br>
I was hitting all sorts of segfaults in the PML.  The UD BTL seems 
<br>
unique in that it is common for messages to be received and passed up to 
<br>
&nbsp;&nbsp;the PML out of order.  I can revisit this and file some bug reports if 
<br>
desired sooner than later.
<br>
<p>I know of one outstanding bug -- any of the tests in the intel suite 
<br>
using buffered sends fail with incorrect data.  I've shown this problem 
<br>
to George, Galen, and Brian and have yet to come up with a fix -- it 
<br>
appears to be an issue with messages arriving at the PML out of order, 
<br>
at which point the PML has no datatype information so cannot reassemble 
<br>
the messages correctly.  This would need to be fixed for 1.3.
<br>
<p>When the UD BTL goes into the trunk, it will always de-select itself 
<br>
unless specifically requested with the MCA btl parameter (i.e. -mca btl 
<br>
ud,self).  This prevents the UD BTL from being used by default along 
<br>
with the existing RC (openib) BTL and possibly lowering performance.
<br>
<p>Some minor issues.. when it hits the trunk, it will be called 'ofud', 
<br>
short for OpenFabrics Unreliable Datagrams.  Currently RDMA CM is not 
<br>
used, though it will not be hard to switch over (doing it at the same 
<br>
time as the openib BTL seems appropriate to me).
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1734.php">Jeff Squyres: "[OMPI devel] PML/BTL MCA params review"</a>
<li><strong>Previous message:</strong> <a href="1732.php">Rainer Keller: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
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
