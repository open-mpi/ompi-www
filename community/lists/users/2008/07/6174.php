<?
$subject_val = "Re: [OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 19:55:53 2008" -->
<!-- isoreceived="20080728235553" -->
<!-- sent="Tue, 29 Jul 2008 01:55:37 +0200" -->
<!-- isosent="20080728235537" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD" -->
<!-- id="68511E7E-884F-43BB-A245-FCD9F7679B44_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="488E3631.5080708_at_ncsu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 19:55:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6175.php">Dirk Eddelbuettel: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<li><strong>Previous message:</strong> <a href="6173.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>In reply to:</strong> <a href="6171.php">Jitendra Kumar: "[OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 28, 2008, at 11:12 PM, Jitendra Kumar wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; While working with multiple file source codes, what is the scope of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; MPI derived data types.
</span><br>
<span class="quotelev1">&gt; - I am trying to declare a derived data type for a complex struct
</span><br>
<span class="quotelev1">&gt; containing dynamic arrays in main() function in a C code.
</span><br>
<span class="quotelev1">&gt; - In a different function located in a seperate file, I am trying to  
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt; the data type for sending a struct using MPI_Send. The corresponding
</span><br>
<span class="quotelev1">&gt; receive is again in a separate function which may or may not exist in
</span><br>
<span class="quotelev1">&gt; the same file.
</span><br>
<span class="quotelev1">&gt; However, it throws as error as it doesn't knows the declared data type
</span><br>
<span class="quotelev1">&gt; outside main( ). How should the data type be declared to have it's  
</span><br>
<span class="quotelev1">&gt; scope
</span><br>
<span class="quotelev1">&gt; anywhere in the code ?
</span><br>
<p>It should be declared as a global. However, this is not a data-type  
<br>
specific thing, it's a classical symbol visibility problem in C.
<br>
<p><span class="quotelev1">&gt; Is any derived data type declared valid anywhere in MPI_COMM_WORLD ?
</span><br>
<p>Absolutely not and it will not be on the foreseeable future. I think  
<br>
you kind of mix the concept of variable visibility with the concept of  
<br>
comm_world in MPI. They do not have anything in common.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jitendra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jitendra Kumar
</span><br>
<span class="quotelev1">&gt; Doctoral Student
</span><br>
<span class="quotelev1">&gt; Department of Civil, Construction and Environmental Engineering
</span><br>
<span class="quotelev1">&gt; North Carolina State University
</span><br>
<span class="quotelev1">&gt; Raleigh, NC 27695
</span><br>
<span class="quotelev1">&gt; jkumar_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www4.ncsu.edu/~jkumar">http://www4.ncsu.edu/~jkumar</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6174/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6175.php">Dirk Eddelbuettel: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<li><strong>Previous message:</strong> <a href="6173.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>In reply to:</strong> <a href="6171.php">Jitendra Kumar: "[OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD"</a>
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
