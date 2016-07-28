<?
$subject_val = "Re: [OMPI users] configuring a code with MPI/OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 12:22:12 2015" -->
<!-- isoreceived="20150203172212" -->
<!-- sent="Tue, 3 Feb 2015 17:21:51 +0000" -->
<!-- isosent="20150203172151" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring a code with MPI/OPENMPI" -->
<!-- id="CAAbhqc7Q2e9L7gYict5qVyB7bTkCPtas9073_ujd+jKP=UtF_g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 12:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26271.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26269.php">Burns, Andrew J CTR (US): "Re: [OMPI users] configuring a code with MPI/OPENMPI (UNCLASSIFIED)"</a>
<li><strong>In reply to:</strong> <a href="26268.php">Elio Physics: "[OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26273.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26273.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First try and correct your compilation by using the intel c-compiler AND
<br>
the fortran compiler. You should not mix compilers.
<br>
CC=icc FC=ifort
<br>
Else the config.log is going to be necessary to debug it further.
<br>
<p>PS: You could also try and convince your cluster administrator to provide a
<br>
more recent compiler
<br>
PPS: Do your cluster not have an MPI installation already present?
<br>
<p><p>2015-02-03 17:13 GMT+00:00 Elio Physics &lt;elio-physics_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; II am trying to configure a code  with mpi (for parallel processing)  to
</span><br>
<span class="quotelev1">&gt; do some calculations so basically I type:
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
<span class="quotelev1">&gt; configure: error: Fortran compiler does not provide iso_c_binding module.
</span><br>
<span class="quotelev1">&gt; Use a more recent version or a different compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which means that my GCC 4.1 compiler is too old to build the code
</span><br>
<span class="quotelev1">&gt; (something i do not have control over..It is a cluster of the Uni where I
</span><br>
<span class="quotelev1">&gt; work). so I tried another compiler ifort:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure  --enable-mpi=yes  FC=ifort
</span><br>
<span class="quotelev1">&gt;  but now I get another error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev1">&gt;  === Multicore architecture support
</span><br>
<span class="quotelev1">&gt;   ===
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; configure: error: MPI support is broken - please fix your config
</span><br>
<span class="quotelev1">&gt; parameters and/or MPI installation
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev1">&gt;  === Multicore architecture startup
</span><br>
<span class="quotelev1">&gt;   ===
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; But stranegly enough got me back to the furst error although I am using
</span><br>
<span class="quotelev1">&gt; ifort!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking whether the Fortran compiler provides the iso_c_binding module...
</span><br>
<span class="quotelev1">&gt; configure: error: Fortran compiler does not provide iso_c_binding module.
</span><br>
<span class="quotelev1">&gt; Use a more recent version or a different compiler
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26268.php">http://www.open-mpi.org/community/lists/users/2015/02/26268.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26270/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26271.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26269.php">Burns, Andrew J CTR (US): "Re: [OMPI users] configuring a code with MPI/OPENMPI (UNCLASSIFIED)"</a>
<li><strong>In reply to:</strong> <a href="26268.php">Elio Physics: "[OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26273.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26273.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
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
