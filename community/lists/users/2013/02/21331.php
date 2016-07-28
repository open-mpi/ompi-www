<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 16:33:04 2013" -->
<!-- isoreceived="20130207213304" -->
<!-- sent="Thu, 07 Feb 2013 22:32:54 +0100" -->
<!-- isosent="20130207213254" -->
<!-- name="Jiri Polach" -->
<!-- email="clarinet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler" -->
<!-- id="51141D86.4080605_at_atlas.cz" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8146624.HKXYv67EE6_at_rico" -->
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
<strong>From:</strong> Jiri Polach (<em>clarinet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-07 16:32:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21332.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21330.php">Gus Correa: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>In reply to:</strong> <a href="21299.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph and Matthias,
<br>
<p>thank you for your notes. As I do not need VampirTrace, I went with 
<br>
'--disable-vt' and everything was fine.
<br>
<p>Best ergards,
<br>
<p>Jiri
<br>
<p>On 2/5/2013 11:04 AM, Matthias Jurenz wrote:
<br>
<span class="quotelev1">&gt; Did you verified that your icpc works properly? Can you compile other C++
</span><br>
<span class="quotelev1">&gt; applications with icpc?
</span><br>
<span class="quotelev1">&gt; It might be that your version of icpc isn't supported with that version of
</span><br>
<span class="quotelev1">&gt; gcc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've found a ticket where a similar problem was reported:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/3077">https://svn.open-mpi.org/trac/ompi/ticket/3077</a>
</span><br>
<span class="quotelev1">&gt; The solution was installing a newer version of the Intel compiler.
</span><br>
<span class="quotelev1">&gt; You mentioned that you cannot do this... If that's so and you don't need
</span><br>
<span class="quotelev1">&gt; VampirTrace, then just re-configure Open MPI with the option '--disable-vt'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 4, 2013, at 7:11 AM, Clarinet &lt;clarinet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to compile OpenMPI 1.6 (1.6.3) with Intel 11.0.081 set of
</span><br>
<span class="quotelev1">&gt; compilers. The compilation fails with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     CXXLD otfprofile
</span><br>
<span class="quotelev1">&gt; otfprofile-create_latex.o: In function
</span><br>
<span class="quotelev1">&gt; `std::locale::_Impl::_M_remove_reference()':
</span><br>
<span class="quotelev1">&gt; ./create_latex.cpp:
</span><br>
<span class="quotelev1">&gt; (.gnu.linkonce.t._ZNSt6locale5_Impl19_M_remove_referenceEv[.gnu.linkonce.t._ZNSt6locale5_Impl19_M_remove_referenceEv]+0x38):
</span><br>
<span class="quotelev1">&gt; undefined reference to `__sync_fetch_and_add_4'
</span><br>
<span class="quotelev1">&gt; make[10]: *** [otfprofile] Error 1
</span><br>
<span class="quotelev1">&gt; make[10]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/usr/local/programs/openmpi/openmpi-1.6.3/src/openmpi-1.6.3-amd64-
</span><br>
<span class="quotelev1">&gt; intel_11.0.081/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Although I found some hints on the Internet I have not been able to
</span><br>
<span class="quotelev1">&gt; resolve the problem. The gcc version is 'gcc (Debian 4.3.2-1.1) 4.3.2'.
</span><br>
<span class="quotelev1">&gt; I cannot install newer Intel compiler version. Any ideas, please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My 'configure' is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CC=icc CXX=icpc F77=ifort FC=ifort ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=../../arch/${ARCH} --enable-shared --enable-static
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default --enable-mpi-threads --with-sge
</span><br>
<span class="quotelev1">&gt; --with-libnuma --with-hwloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jiri Polach
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21332.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21330.php">Gus Correa: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>In reply to:</strong> <a href="21299.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
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
