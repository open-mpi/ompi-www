<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 05:05:05 2013" -->
<!-- isoreceived="20130205100505" -->
<!-- sent="Tue, 05 Feb 2013 11:04:40 +0100" -->
<!-- isosent="20130205100440" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler" -->
<!-- id="8146624.HKXYv67EE6_at_rico" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OpenMPI 1.6 with Intel 11 Compiler" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 05:04:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21300.php">Duke Nguyen: "[OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21298.php">Iliev, Hristo: "Re: [OMPI users] All_to_allv algorithm patch"</a>
<li><strong>Maybe in reply to:</strong> <a href="21290.php">Clarinet: "[OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21331.php">Jiri Polach: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Reply:</strong> <a href="21331.php">Jiri Polach: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you verified that your icpc works properly? Can you compile other C++ 
<br>
applications with icpc?
<br>
It might be that your version of icpc isn't supported with that version of 
<br>
gcc.
<br>
<p>I've found a ticket where a similar problem was reported:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/3077">https://svn.open-mpi.org/trac/ompi/ticket/3077</a>
<br>
The solution was installing a newer version of the Intel compiler.
<br>
You mentioned that you cannot do this... If that's so and you don't need 
<br>
VampirTrace, then just re-configure Open MPI with the option '--disable-vt'.
<br>
<p>Matthias
<br>
<p>On Feb 4, 2013, at 7:11 AM, Clarinet &lt;clarinet_at_[hidden]&gt; wrote: 
<br>
<span class="quotelev1">&gt; Dear OpenMPI users, 
</span><br>
<p><span class="quotelev1">&gt; I am trying to compile OpenMPI 1.6 (1.6.3) with Intel 11.0.081 set of 
</span><br>
compilers. The compilation fails with 
<br>
<p><span class="quotelev1">&gt;    CXXLD otfprofile 
</span><br>
otfprofile-create_latex.o: In function 
<br>
`std::locale::_Impl::_M_remove_reference()': 
<br>
./create_latex.cpp:
<br>
(.gnu.linkonce.t._ZNSt6locale5_Impl19_M_remove_referenceEv[.gnu.linkonce.t._ZNSt6locale5_Impl19_M_remove_referenceEv]+0x38): 
<br>
undefined reference to `__sync_fetch_and_add_4' 
<br>
make[10]: *** [otfprofile] Error 1 
<br>
make[10]: Leaving directory 
<br>
`/usr/local/programs/openmpi/openmpi-1.6.3/src/openmpi-1.6.3-amd64-
<br>
intel_11.0.081/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile' 
<br>
<p><span class="quotelev1">&gt; Although I found some hints on the Internet I have not been able to 
</span><br>
resolve the problem. The gcc version is 'gcc (Debian 4.3.2-1.1) 4.3.2'. 
<br>
I cannot install newer Intel compiler version. Any ideas, please? 
<br>
<p><span class="quotelev1">&gt; My 'configure' is 
</span><br>
<p><span class="quotelev1">&gt; CC=icc CXX=icpc F77=ifort FC=ifort ./configure 
</span><br>
--prefix=../../arch/${ARCH} --enable-shared --enable-static 
<br>
--enable-mpirun-prefix-by-default --enable-mpi-threads --with-sge 
<br>
--with-libnuma --with-hwloc 
<br>
<p><span class="quotelev1">&gt; Best regards, 
</span><br>
<p><span class="quotelev1">&gt; Jiri Polach 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21300.php">Duke Nguyen: "[OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21298.php">Iliev, Hristo: "Re: [OMPI users] All_to_allv algorithm patch"</a>
<li><strong>Maybe in reply to:</strong> <a href="21290.php">Clarinet: "[OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21331.php">Jiri Polach: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Reply:</strong> <a href="21331.php">Jiri Polach: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
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
