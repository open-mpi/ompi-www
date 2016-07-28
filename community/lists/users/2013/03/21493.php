<?
$subject_val = "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  1 02:26:18 2013" -->
<!-- isoreceived="20130301072618" -->
<!-- sent="Fri, 01 Mar 2013 08:26:11 +0100" -->
<!-- isosent="20130301072611" -->
<!-- name="Stefan Mauerberger" -->
<!-- email="stefan.mauerberger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine" -->
<!-- id="1362122771.26131.7.camel_at_WMS005" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.1176.1362069050.7492.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine<br>
<strong>From:</strong> Stefan Mauerberger (<em>stefan.mauerberger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-01 02:26:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21494.php">Said Elnoshokaty: "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21492.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21477.php">Pradeep Jha: "[OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please also put IMPICIT NONE to your SUBROUTINE and replace INCLUDE
<br>
'mpif.h' by USE mpi. This comes with the benefit of interface checking.
<br>
The compiler will throw an error due to missing tags. 
<br>
<p>It is even better style to write: 
<br>
<p>PROGRAM main 
<br>
&nbsp;&nbsp;USE MPI
<br>
<p>...
<br>
<p>CONTAINS 
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;SUBROUTINE ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;END SUBROUTINE ...
<br>
<p>END PROGRAM main 
<br>
<p>For more complex programs please use modules instead. 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21494.php">Said Elnoshokaty: "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21492.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21477.php">Pradeep Jha: "[OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
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
