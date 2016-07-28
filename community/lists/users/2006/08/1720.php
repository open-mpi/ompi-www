<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug  5 18:35:39 2006" -->
<!-- isoreceived="20060805223539" -->
<!-- sent="Sat, 5 Aug 2006 15:35:35 -0700" -->
<!-- isosent="20060805223535" -->
<!-- name="Manav Bhatia" -->
<!-- email="manav_at_[hidden]" -->
<!-- subject="[OMPI users] compilation error in c++ debug mode" -->
<!-- id="BC033C6F-72BE-4AFF-8810-3B7B795E63CB_at_u.washington.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Manav Bhatia (<em>manav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-05 18:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1721.php">Manav Bhatia: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>Previous message:</strong> <a href="1719.php">Peng Wang: "[OMPI users] seg fault in MPI_Comm_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1721.php">Manav Bhatia: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>Reply:</strong> <a href="1721.php">Manav Bhatia: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>Reply:</strong> <a href="1722.php">Jeff Squyres: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am using OpenMPI 1.1 on Mac OS 10.4.7 with intel processors. I  
<br>
compiled and installed using the following options:
<br>
<p>/configure --prefix=/usr/local/openmpi --disable-mpi-f77 --disable- 
<br>
mpi-f90
<br>
<p>Everything compiles and runs fine in optimized mode using mpic++,   
<br>
however, I get the following compilation error message when compiling  
<br>
in debug mode
<br>
<p>/usr/local/openmpi/include/mpi.h:147: error: ISO C++ does not support  
<br>
'long long'
<br>
<p>I am using the following compiler options in optimized mode
<br>
<p>-DNDEBUG -fno-common -O2 -felide-constructors -funroll-loops -fstrict- 
<br>
aliasing -Wdisabled-optimization
<br>
<p>and the following in debug mode
<br>
<p>-DDEBUG -fno-common -O0 -felide-constructors -g -ansi -pedantic -W - 
<br>
Wall -Wunused -Wpointer-arith -Wimplicit -Wformat -Wparentheses - 
<br>
Woverloaded-virtual -D_GLIBCXX_DEBUG -D_GLIBCXX_DEBUG_PEDANTIC
<br>
<p>Kindly help me understand what is happening here, and how I could  
<br>
resolve this error. Please let me know if I could help you with more  
<br>
information about this.
<br>
<p>Thanks
<br>
Manav 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1721.php">Manav Bhatia: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>Previous message:</strong> <a href="1719.php">Peng Wang: "[OMPI users] seg fault in MPI_Comm_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1721.php">Manav Bhatia: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>Reply:</strong> <a href="1721.php">Manav Bhatia: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>Reply:</strong> <a href="1722.php">Jeff Squyres: "Re: [OMPI users] compilation error in c++ debug mode"</a>
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
