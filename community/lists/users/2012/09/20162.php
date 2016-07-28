<?
$subject_val = "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  8 23:17:44 2012" -->
<!-- isoreceived="20120909031744" -->
<!-- sent="Sat, 8 Sep 2012 22:17:34 -0500" -->
<!-- isosent="20120909031734" -->
<!-- name="Yonghui" -->
<!-- email="lyh03259.aps_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)" -->
<!-- id="000201cd8e39$aa6eca80$ff4c5f80$_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)<br>
<strong>From:</strong> Yonghui (<em>lyh03259.aps_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-08 23:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20163.php">÷”≥…: "[OMPI users] hello_f90.f90(17): error #6285: There is no matching specific subroutine for this generic subroutine call. [MPI_INIT]"</a>
<li><strong>Previous message:</strong> <a href="20161.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Maybe in reply to:</strong> <a href="20156.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>&nbsp;
<br>
<p>Thanks for your response. Like you said, the code works for you in a Linux
<br>
system. And I am sure that the code works on Linux and even Mac os x. But if
<br>
you use MinGW (basically you have all gnu things on windows) to compile, the
<br>
code abort when running to MPI_Allreduce.
<br>
<p>&nbsp;
<br>
<p>In my opinion, fortran don't visit the memory address directly. In c you use
<br>
a memory address as the receive buf, but in fortran you just pass a number
<br>
(the number defined as a macro, MPI_IN_PLACE in my example) to the
<br>
subroutine (as a wrapper, the code pass the correct address to c function
<br>
when it sees the number).
<br>
<p>&nbsp;
<br>
<p>PS: the fortran function allocate can be used to dynamically tell the system
<br>
to make enough room for a matrix. Then you have a matrix instead of a
<br>
pointer. In general, you don't need to taking care of the RAM address in
<br>
fortran. If you know the name and the index of a matrix, then you have
<br>
everything. Though people introduce the concept &quot;pointer&quot; in fortran 90, but
<br>
to me is something similar to reference in c. I think this is just want to
<br>
introduce some data structure things.
<br>
<p>&nbsp;
<br>
<p>You can find MinGW here: <a href="http://sourceforge.net/projects/mingw/files/">http://sourceforge.net/projects/mingw/files/</a>
<br>
<p>And it can be used by just extracting. If you compile my little code with
<br>
MinGW gfortran, then you'll see the program abort. I have no idea of
<br>
checking it. It probably a windows related error, since MinGW has nothing to
<br>
do with POSIX.
<br>
<p>&nbsp;
<br>
<p>That's what I can tell so far. Any suggestions?
<br>
<p>&nbsp;
<br>
<p>Yonghui
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20162/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20163.php">÷”≥…: "[OMPI users] hello_f90.f90(17): error #6285: There is no matching specific subroutine for this generic subroutine call. [MPI_INIT]"</a>
<li><strong>Previous message:</strong> <a href="20161.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Maybe in reply to:</strong> <a href="20156.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)"</a>
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
