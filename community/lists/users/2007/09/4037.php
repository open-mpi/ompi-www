<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 19:38:21 2007" -->
<!-- isoreceived="20070918233821" -->
<!-- sent="Tue, 18 Sep 2007 17:38:13 -0600" -->
<!-- isosent="20070918233813" -->
<!-- name="rokuingh_at_[hidden]" -->
<!-- email="rokuingh_at_[hidden]" -->
<!-- subject="[OMPI users] g4 mpicc error" -->
<!-- id="20070918173813.ej9kny7tw0sk0s0c_at_webmail.mines.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> <a href="mailto:rokuingh_at_[hidden]?Subject=Re:%20[OMPI%20users]%20g4%20mpicc%20error"><em>rokuingh_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-09-18 19:38:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4038.php">Jeff Squyres: "Re: [OMPI users] g4 mpicc error"</a>
<li><strong>Previous message:</strong> <a href="4036.php">Michael: "Re: [OMPI users] mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4038.php">Jeff Squyres: "Re: [OMPI users] g4 mpicc error"</a>
<li><strong>Reply:</strong> <a href="4038.php">Jeff Squyres: "Re: [OMPI users] g4 mpicc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>i'm about to start working on parallelizing my master's thesis project  
<br>
and thought i would do it with some easy and free software....
<br>
<p>I had to sudo make all install first of all, is this normal?
<br>
<p>Next, i'm using an example code i found on the site somewhere, and my  
<br>
driver is the following line
<br>
<p>mpicc mpiex.C -o mpiex
<br>
<p>i've set PATH=$MPI_HOME/bin and LD_LIBRARY_PATH=$MPI_HOME/lib but i  
<br>
keep getting the error in the below output.  thanks for your help.   
<br>
and i've attached output of ompi_info --all and the config.log file.
<br>
<p>flip:~/Documents/classes/parallel/code/mpiex ryanokuinghttons$ sh mk
<br>
/usr/bin/ld: Undefined symbols:
<br>
__Unwind_Resume
<br>
MPI::Win::Set_errhandler(MPI::Errhandler const&amp;)
<br>
MPI::Win::Free()
<br>
MPI::Comm::Set_errhandler(MPI::Errhandler const&amp;)
<br>
MPI::Comm::Comm()
<br>
MPI::Datatype::Free()
<br>
std::ios_base::Init::Init()
<br>
std::ios_base::Init::~Init()
<br>
vtable for __cxxabiv1::__class_type_info
<br>
vtable for __cxxabiv1::__si_class_type_info
<br>
operator delete[](void*)
<br>
operator delete(void*)
<br>
operator new[](unsigned long)
<br>
operator new(unsigned long)
<br>
___cxa_pure_virtual
<br>
___gxx_personality_v0
<br>
_ompi_mpi_cxx_op_intercept
<br>
collect2: ld returned 1 exit status
<br>
flip:~/Documents/classes/parallel/code/mpiex ryanokuinghttons$
<br>
<p><p><pre>
-- 
Ryan O'Kuinghttons

</pre>
<hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4037/ompierr.tar.gz">ompierr.tar.gz</a>
</ul>
<!-- attachment="ompierr.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4038.php">Jeff Squyres: "Re: [OMPI users] g4 mpicc error"</a>
<li><strong>Previous message:</strong> <a href="4036.php">Michael: "Re: [OMPI users] mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4038.php">Jeff Squyres: "Re: [OMPI users] g4 mpicc error"</a>
<li><strong>Reply:</strong> <a href="4038.php">Jeff Squyres: "Re: [OMPI users] g4 mpicc error"</a>
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
