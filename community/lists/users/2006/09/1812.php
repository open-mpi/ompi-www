<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  1 17:00:59 2006" -->
<!-- isoreceived="20060901210059" -->
<!-- sent="Fri, 01 Sep 2006 15:00:58 -0600" -->
<!-- isosent="20060901210058" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question about passing MPI communicator" -->
<!-- id="1157144458.18452.20.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="20060901092652.3sk0whwxgco88w48_at_webmail.iu.edu" -->
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
<strong>Date:</strong> 2006-09-01 17:00:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1813.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Previous message:</strong> <a href="1811.php">Wang,  Peng: "[OMPI users] question about passing MPI communicator"</a>
<li><strong>In reply to:</strong> <a href="1811.php">Wang,  Peng: "[OMPI users] question about passing MPI communicator"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your example is pretty close to spot on.  You want to convert the
<br>
Fortran handle (integer) into a C handle (something else).  Then use the
<br>
C handle to call C functions.  The one thing of note is that you should
<br>
use the type MPI_Fint instead of int for the type of the Fortran
<br>
handles.  So your parallel_info function's prototype would be:
<br>
<p>&nbsp;&nbsp;void parallel_info_(int *rank, MPI_Fint *comm);
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><p>On Fri, 2006-09-01 at 09:26 -0400, Wang, Peng wrote:
<br>
<span class="quotelev1">&gt; Hello, I am wondering in openmpi how is the passing of MPI communcator 
</span><br>
<span class="quotelev1">&gt; from Fortran to C is handled? Assuming I have a Fortran 90 subroutine 
</span><br>
<span class="quotelev1">&gt; calling a C function passing MPI_COMM_WORLD in, in the C function, do I 
</span><br>
<span class="quotelev1">&gt; need to first do MPI_Comm_f2c
</span><br>
<span class="quotelev1">&gt; to convert to MPI handle, then use that handle afterward? Or is there 
</span><br>
<span class="quotelev1">&gt; any better way to do this? Here is some test code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fortran 90:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         program test1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         integer myrank,ierr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         call MPI_Init(ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         call parallel_info(myrank,MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt;         write(*,*) 'hello, I am process #',myrank
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         call MPI_Finalize(ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         end program test1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void parallel_info_(int * rank, int* comm)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Comm ccomm;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ccomm=MPI_Comm_f2c(*comm);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(ccomm, rank);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void parallel_info(int * rank, int * comm)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Comm ccomm;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ccomm=MPI_Comm_f2c(*comm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(ccomm, rank);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Peng
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1813.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Previous message:</strong> <a href="1811.php">Wang,  Peng: "[OMPI users] question about passing MPI communicator"</a>
<li><strong>In reply to:</strong> <a href="1811.php">Wang,  Peng: "[OMPI users] question about passing MPI communicator"</a>
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
