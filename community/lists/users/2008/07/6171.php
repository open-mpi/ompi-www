<?
$subject_val = "[OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 17:12:03 2008" -->
<!-- isoreceived="20080728211203" -->
<!-- sent="Mon, 28 Jul 2008 17:12:17 -0400" -->
<!-- isosent="20080728211217" -->
<!-- name="Jitendra Kumar" -->
<!-- email="jkumar_at_[hidden]" -->
<!-- subject="[OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD" -->
<!-- id="488E3631.5080708_at_ncsu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.2213.1217274773.9342.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD<br>
<strong>From:</strong> Jitendra Kumar (<em>jkumar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 17:12:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6172.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6170.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6174.php">George Bosilca: "Re: [OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD"</a>
<li><strong>Reply:</strong> <a href="6174.php">George Bosilca: "Re: [OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
While working with multiple file source codes, what is the scope of the
<br>
MPI derived data types.
<br>
- I am trying to declare a derived data type for a complex struct
<br>
containing dynamic arrays in main() function in a C code.
<br>
- In a different function located in a seperate file, I am trying to use
<br>
the data type for sending a struct using MPI_Send. The corresponding
<br>
receive is again in a separate function which may or may not exist in
<br>
the same file.
<br>
However, it throws as error as it doesn't knows the declared data type
<br>
outside main( ). How should the data type be declared to have it's scope
<br>
anywhere in the code ?
<br>
Is any derived data type declared valid anywhere in MPI_COMM_WORLD ?
<br>
<p>Thanks,
<br>
Jitendra
<br>
<p><pre>
-- 
Jitendra Kumar
Doctoral Student
Department of Civil, Construction and Environmental Engineering
North Carolina State University
Raleigh, NC 27695
jkumar_at_[hidden]
<a href="http://www4.ncsu.edu/~jkumar">http://www4.ncsu.edu/~jkumar</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6172.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6170.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6174.php">George Bosilca: "Re: [OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD"</a>
<li><strong>Reply:</strong> <a href="6174.php">George Bosilca: "Re: [OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD"</a>
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
