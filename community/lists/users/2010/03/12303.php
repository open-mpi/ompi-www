<?
$subject_val = "[OMPI users] Problem with private variables in modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 13:56:34 2010" -->
<!-- isoreceived="20100310185634" -->
<!-- sent="Wed, 10 Mar 2010 13:56:26 -0500" -->
<!-- isosent="20100310185626" -->
<!-- name="Justin Watson" -->
<!-- email="jkw104_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with private variables in modules" -->
<!-- id="473502DFF1A2F249B970842E22D9823B01A5065F9F4A_at_MAILCCR.arl.psu.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem with private variables in modules<br>
<strong>From:</strong> Justin Watson (<em>jkw104_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 13:56:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12304.php">Cole, Derek E: "[OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12302.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12307.php">Terry Frankcombe: "Re: [OMPI users] Problem with private variables in modules"</a>
<li><strong>Reply:</strong> <a href="12307.php">Terry Frankcombe: "Re: [OMPI users] Problem with private variables in modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have  come across a situation where I am trying to make private variables that passed to subroutines using modules.  Here is the situation, The main program calls two different routines.  These routines are functionally different but utilize the same variable names for some global data which are contained in a module (this was done to make the passing of the data easy to various levels of subroutines it is not needed outside the subroutine chain).  I am using workshare constructs to run each of these routines on its own thread.  I would  like to make the data in the module private to that thread.  When I set the variable to private it still behaves as if it were shared.  If I pass the variable to the routines via an argument list everything is fine (this will cause me to re-write a bunch of code).  The question is ... shouldn't this work within the context of a module as well?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have been getting different result using different compilers.  I have tried Lahey and Intel and they both show signs of not handling this properly.  I have attach a small test problem that mimics what I am doing in the large code.
<br>
<p>Justin K. Watson                                                                                               Email: jkw104_at_[hidden]
<br>
Research Assistant                                                                                          Phone: (814) 863-6754
<br>
Computational Methods Development Department                       Fax: (814) 865-3287
<br>
<p><p>Applied Research Laboratory
<br>
The Pennsylvania State University
<br>
P.O. Box 30
<br>
State College, Pa 16804-0030
<br>
<p><p><p>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12303/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12303/Hello.f90">Hello.f90</a>
</ul>
<!-- attachment="Hello.f90" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12303/PrintThreadM.f90">PrintThreadM.f90</a>
</ul>
<!-- attachment="PrintThreadM.f90" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12303/DataM.f90">DataM.f90</a>
</ul>
<!-- attachment="DataM.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12304.php">Cole, Derek E: "[OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12302.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12307.php">Terry Frankcombe: "Re: [OMPI users] Problem with private variables in modules"</a>
<li><strong>Reply:</strong> <a href="12307.php">Terry Frankcombe: "Re: [OMPI users] Problem with private variables in modules"</a>
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
