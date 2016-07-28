<?
$subject_val = "[OMPI users] Using openmpi within python and crashes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 13:53:22 2009" -->
<!-- isoreceived="20090709175322" -->
<!-- sent="Thu, 09 Jul 2009 11:53:17 -0600" -->
<!-- isosent="20090709175317" -->
<!-- name="John R. Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="[OMPI users] Using openmpi within python and crashes" -->
<!-- id="4A562E8D.4020706_at_txcorp.com" -->
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
<strong>Subject:</strong> [OMPI users] Using openmpi within python and crashes<br>
<strong>From:</strong> John R. Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-09 13:53:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9903.php">Yin Feng: "[OMPI users] Problems in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9901.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9905.php">Lisandro Dalcin: "Re: [OMPI users] Using openmpi within python and crashes"</a>
<li><strong>Reply:</strong> <a href="9905.php">Lisandro Dalcin: "Re: [OMPI users] Using openmpi within python and crashes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our scenario is that we are running python, then importing a module 
<br>
written in Fortran.
<br>
We run via:
<br>
<p>&nbsp;mpiexec -n 8 -x PYTHONPATH -x SIDL_DLL_PATH python tokHsmNP8.py
<br>
<p>where the script calls into Fortran to call MPI_Init.
<br>
<p>On 8 procs (but not one) we get hangs in the code (on some machines but 
<br>
not others!). 
<br>
Hard to tell precisely where, because it is in a PETSc method.
<br>
<p>Running with valgrind
<br>
<p>&nbsp;mpiexec -n 8 -x PYTHONPATH -x SIDL_DLL_PATH valgrind python tokHsmNP8.py
<br>
<p>gives a crash, with some salient output:
<br>
<p>==936==
<br>
==936== Syscall param sched_setaffinity(mask) points to unaddressable 
<br>
byte(s)
<br>
==936==    at 0x39336DAA79: syscall (in /lib64/libc-2.10.1.so)
<br>
==936==    by 0x10BCBD58: opal_paffinity_linux_plpa_api_probe_init (in 
<br>
/usr/local/openmpi-1.3.2-notorque/lib/libopen-pal.so.0.0.0)
<br>
==936==    by 0x10BCE054: opal_paffinity_linux_plpa_init (in 
<br>
/usr/local/openmpi-1.3.2-notorque/lib/libopen-pal.so.0.0.0)
<br>
==936==    by 0x10BCC9F9: 
<br>
opal_paffinity_linux_plpa_have_topology_information (in 
<br>
/usr/local/openmpi-1.3.2-notorque/lib/libopen-pal.so.0.0.0)
<br>
==936==    by 0x10BCBBFF: linux_module_init (in 
<br>
/usr/local/openmpi-1.3.2-notorque/lib/libopen-pal.so.0.0.0)
<br>
==936==    by 0x10BC99C3: opal_paffinity_base_select (in 
<br>
/usr/local/openmpi-1.3.2-notorque/lib/libopen-pal.so.0.0.0)
<br>
==936==    by 0x10B9DB83: opal_init (in 
<br>
/usr/local/openmpi-1.3.2-notorque/lib/libopen-pal.so.0.0.0)
<br>
==936==    by 0x10920C6C: orte_init (in 
<br>
/usr/local/openmpi-1.3.2-notorque/lib/libopen-rte.so.0.0.0)
<br>
==936==    by 0x10579D06: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.2-notorque/lib/libmpi.so.0.0.0)
<br>
==936==    by 0x10599175: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.2-notorque/lib/libmpi.so.0.0.0)
<br>
==936==    by 0x10E2BDF4: mpi_init (in 
<br>
/usr/local/openmpi-1.3.2-notorque/lib/libmpi_f77.so.0.0.0)
<br>
==936==    by 0xDF30A1F: uedge_mpiinit_ (in 
<br>
/home/research/cary/projects/facetsall-iter/physics/uedge/par/build/uedgeC.so)
<br>
==936==  Address 0x0 is not stack'd, malloc'd or (recently) free'd
<br>
<p>This makes me think that our call to mpi_init is wrong.  At
<br>
<p>&nbsp;&nbsp;<a href="http://www.mcs.anl.gov/research/projects/mpi/www/www3/MPI_Init.html">http://www.mcs.anl.gov/research/projects/mpi/www/www3/MPI_Init.html</a>
<br>
<p>it says
<br>
<p>&nbsp;&nbsp;Because the Fortran and C versions of MPI_Init 
<br>
&lt;<a href="http://www.mpi-forum.org/docs/mpi-11-html/node151.html#node151">http://www.mpi-forum.org/docs/mpi-11-html/node151.html#node151</a>&gt; are 
<br>
different, there is a restriction on who can call MPI_Init 
<br>
&lt;<a href="http://www.mpi-forum.org/docs/mpi-11-html/node151.html#node151">http://www.mpi-forum.org/docs/mpi-11-html/node151.html#node151</a>&gt;. The 
<br>
version (Fortran or C) must match the main
<br>
&nbsp;&nbsp;program. That is, if the main program is in C, then the C version of 
<br>
MPI_Init 
<br>
&lt;<a href="http://www.mpi-forum.org/docs/mpi-11-html/node151.html#node151">http://www.mpi-forum.org/docs/mpi-11-html/node151.html#node151</a>&gt; must be 
<br>
called. If the main program is in Fortran, the Fortran version must be 
<br>
called.
<br>
<p>Should I infer from this that since python is a C code, one must call 
<br>
the C version of MPI_Init (with argc, argv)?
<br>
<p>Or since the module is written mostly in Fortran with mpi calls of only 
<br>
the Fortran variety, I can initialize
<br>
with the Fortran MPI_Init?
<br>
<p>Thanks.....John Cary
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9903.php">Yin Feng: "[OMPI users] Problems in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9901.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9905.php">Lisandro Dalcin: "Re: [OMPI users] Using openmpi within python and crashes"</a>
<li><strong>Reply:</strong> <a href="9905.php">Lisandro Dalcin: "Re: [OMPI users] Using openmpi within python and crashes"</a>
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
