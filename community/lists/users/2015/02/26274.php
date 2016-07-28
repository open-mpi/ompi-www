<?
$subject_val = "Re: [OMPI users] configuring a code with MPI/OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 14:20:10 2015" -->
<!-- isoreceived="20150203192010" -->
<!-- sent="Tue, 3 Feb 2015 19:20:08 +0000" -->
<!-- isosent="20150203192008" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring a code with MPI/OPENMPI" -->
<!-- id="75F66AD5-7D5E-49F6-BF34-72285DEE7D44_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU179-W29AB7EB01694A23FAF1508EA3D0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] configuring a code with MPI/OPENMPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 14:20:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26275.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26273.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="26268.php">Elio Physics: "[OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Without knowing anything about the application that you are trying to build, it's really hard to say.  You should probably be asking the support mailing lists for that specific application -- they would better be able to support you.
<br>
<p>This list is for Open MPI, which is likely one of the MPI implementations that your application supports.  The fact that your application uses MPI is likely (mostly?) hidden behind the scenes from you, the end user.  Hence, the people who wrote your application would likely be your first stop for support.
<br>
<p><p><p><span class="quotelev1">&gt; On Feb 3, 2015, at 12:13 PM, Elio Physics &lt;elio-physics_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; II am trying to configure a code  with mpi (for parallel processing)  to do some calculations so basically I type:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: error: Fortran compiler does not provide iso_c_binding module. Use a more recent version or a different compiler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which means that my GCC 4.1 compiler is too old to build the code (something i do not have control over..It is a cluster of the Uni where I work). so I tried another compiler ifort:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure  --enable-mpi=yes  FC=ifort
</span><br>
<span class="quotelev1">&gt;  but now I get another error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev1">&gt;  === Multicore architecture support                                         ===
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking whether to enable OpenMP support... no
</span><br>
<span class="quotelev1">&gt; checking whether to build MPI code... yes
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler supports MPI... no
</span><br>
<span class="quotelev1">&gt; checking whether the C++ compiler supports MPI... no
</span><br>
<span class="quotelev1">&gt; checking whether the Fortran Compiler supports MPI... no
</span><br>
<span class="quotelev1">&gt; checking whether MPI is usable... no
</span><br>
<span class="quotelev1">&gt; configure: error: MPI support is broken - please fix your config parameters and/or MPI installation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agaiin, I tried ti give a path for the mpi compiler:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ./configure  --enable-mpi  --with-mpi-prefix=/usr FC=ifort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHICH APPARENTLY SOLVED THE PREVIOUS ERROR:
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev1">&gt;  === Multicore architecture startup                                         ===
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: Initializing MPI support
</span><br>
<span class="quotelev1">&gt; configure: looking for MPI in /usr
</span><br>
<span class="quotelev1">&gt; checking for a MPI C compiler... /usr/bin/mpicc
</span><br>
<span class="quotelev1">&gt; checking for a MPI C++ compiler... /usr/bin/mpicxx
</span><br>
<span class="quotelev1">&gt; checking for a MPI Fortran compiler... /usr/bin/mpif90
</span><br>
<span class="quotelev1">&gt; configure: creating wrapper for MPI Fortran compiler
</span><br>
<span class="quotelev1">&gt; configure: GPU support disabled from command-line
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; But stranegly enough got me back to the furst error although I am using ifort!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking whether the Fortran compiler provides the iso_c_binding module... configure: error: Fortran compiler does not provide iso_c_binding module. Use a more recent version or a different compiler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so what is going on?? please can anyone help me on this..Thank youu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Elio
</span><br>
<span class="quotelev1">&gt; University of Rondonia
</span><br>
<span class="quotelev1">&gt; Brazil
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26268.php">http://www.open-mpi.org/community/lists/users/2015/02/26268.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26275.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26273.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="26268.php">Elio Physics: "[OMPI users] configuring a code with MPI/OPENMPI"</a>
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
