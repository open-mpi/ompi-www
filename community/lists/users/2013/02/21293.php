<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 11:23:27 2013" -->
<!-- isoreceived="20130204162327" -->
<!-- sent="Mon, 4 Feb 2013 08:23:20 -0800" -->
<!-- isosent="20130204162320" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler" -->
<!-- id="096F0694-D43B-496B-8159-EF10B9CBA5E2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="510FCFA9.10002_at_atlas.cz" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-04 11:23:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21294.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<li><strong>Previous message:</strong> <a href="21292.php">Number Cruncher: "[OMPI users] All_to_allv algorithm patch"</a>
<li><strong>In reply to:</strong> <a href="21290.php">Clarinet: "[OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21299.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unless you really need VampirTrace, just add --disable-vt to your configure
<br>
<p><p>On Feb 4, 2013, at 7:11 AM, Clarinet &lt;clarinet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to compile OpenMPI 1.6 (1.6.3) with Intel 11.0.081 set of compilers. The compilation fails with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CXXLD  otfprofile
</span><br>
<span class="quotelev1">&gt; otfprofile-create_latex.o: In function `std::locale::_Impl::_M_remove_reference()':
</span><br>
<span class="quotelev1">&gt; ./create_latex.cpp:(.gnu.linkonce.t._ZNSt6locale5_Impl19_M_remove_referenceEv[.gnu.linkonce.t._ZNSt6locale5_Impl19_M_remove_referenceEv]+0x38): undefined reference to `__sync_fetch_and_add_4'
</span><br>
<span class="quotelev1">&gt; make[10]: *** [otfprofile] Error 1
</span><br>
<span class="quotelev1">&gt; make[10]: Leaving directory `/usr/local/programs/openmpi/openmpi-1.6.3/src/openmpi-1.6.3-amd64-intel_11.0.081/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although I found some hints on the Internet I have not been able to resolve the problem. The gcc version is 'gcc (Debian 4.3.2-1.1) 4.3.2'. I cannot install newer Intel compiler version. Any ideas, please?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My 'configure' is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CC=icc CXX=icpc F77=ifort FC=ifort ./configure --prefix=../../arch/${ARCH} --enable-shared --enable-static --enable-mpirun-prefix-by-default --enable-mpi-threads --with-sge --with-libnuma --with-hwloc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jiri Polach
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
<li><strong>Next message:</strong> <a href="21294.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<li><strong>Previous message:</strong> <a href="21292.php">Number Cruncher: "[OMPI users] All_to_allv algorithm patch"</a>
<li><strong>In reply to:</strong> <a href="21290.php">Clarinet: "[OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21299.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
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
