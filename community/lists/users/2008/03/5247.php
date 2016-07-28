<?
$subject_val = "[OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 12:55:29 2008" -->
<!-- isoreceived="20080320165529" -->
<!-- sent="Thu, 20 Mar 2008 10:54:45 -0600" -->
<!-- isosent="20080320165445" -->
<!-- name="Eidson, Eric D" -->
<!-- email="edeidso_at_[hidden]" -->
<!-- subject="[OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings" -->
<!-- id="C407F2F5.AB11%edeidso_at_sandia.gov" -->
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
<strong>Subject:</strong> [OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings<br>
<strong>From:</strong> Eidson, Eric D (<em>edeidso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-20 12:54:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5248.php">Dave Grote: "[OMPI users] More on AlltoAll"</a>
<li><strong>Previous message:</strong> <a href="5246.php">Werner Augustin: "[OMPI users] SLURM and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5272.php">Jeff Squyres: "Re: [OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
<li><strong>Reply:</strong> <a href="5272.php">Jeff Squyres: "Re: [OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>OpenMPI 1.2.5 and earlier do not let you set the Errhandler for
<br>
MPI::FILE_NULL using the C++ bindings.
<br>
<p>[You would want to do so because, on error, MPI::File::Open() and
<br>
MPI::File::Delete() call the Errhandler associated with FILE_NULL.]
<br>
<p>With the C++ bindings, MPI::FILE_NULL is a const object, and Set_errhandler
<br>
is apparently a non-const function -- so compiling fails.
<br>
<p>Eric
<br>
<p><pre>
--
#include &lt;mpi.h&gt;
int
main()
{
  MPI::Init();
  MPI::Errhandler oldeh = MPI::FILE_NULL.Get_errhandler();
  MPI::FILE_NULL.Set_errhandler(MPI::ERRORS_THROW_EXCEPTIONS);
  MPI::FILE_NULL.Set_errhandler(oldeh);
  MPI::Finalize();
}
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5248.php">Dave Grote: "[OMPI users] More on AlltoAll"</a>
<li><strong>Previous message:</strong> <a href="5246.php">Werner Augustin: "[OMPI users] SLURM and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5272.php">Jeff Squyres: "Re: [OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
<li><strong>Reply:</strong> <a href="5272.php">Jeff Squyres: "Re: [OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
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
