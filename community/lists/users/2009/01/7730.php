<?
$subject_val = "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 19 13:05:13 2009" -->
<!-- isoreceived="20090119180513" -->
<!-- sent="Mon, 19 Jan 2009 14:00:36 -0400" -->
<!-- isosent="20090119180036" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express" -->
<!-- id="20090119180036.GA7787_at_DOME" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4974AF31.301_at_ec-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-19 13:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7731.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7729.php">Olivier Marsden: "[OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>In reply to:</strong> <a href="7729.php">Olivier Marsden: "[OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7731.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7731.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I use the Intel compilers, I have to add to my PATH and
<br>
LD_LIBRARY_PATH before using &quot;mpif90&quot;.  I wonder if this needs to be
<br>
done in your case?
<br>
<p>Douglas.
<br>
<p>On Mon, Jan 19, 2009 at 05:49:53PM +0100, Olivier Marsden wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to compile ompi 1.3rc7 with the sun studio express comilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using the following configure command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CC=/opt/sun/express/sunstudioceres/bin/cc 
</span><br>
<span class="quotelev1">&gt; CXX=/opt/sun/express/sunstudioceres/bin/CC   
</span><br>
<span class="quotelev1">&gt; F77=/opt/sun/express/sunstudioceres/bin/f77 
</span><br>
<span class="quotelev1">&gt; FC=/opt/sun/express/sunstudioceres/bin/f90  ./configure 
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/mpi_sun --enable-heterogeneous  --enable-shared 
</span><br>
<span class="quotelev1">&gt; --enable-mpi-f90 --with-mpi-f90-size=small --disable-mpi-threads 
</span><br>
<span class="quotelev1">&gt; --disable-progress-threads --disable-debug  --without-udapl 
</span><br>
<span class="quotelev1">&gt; --disable-io-romio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The build and install execute correctly. However, I get the following 
</span><br>
<span class="quotelev1">&gt; when trying to use mpif90:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /opt/mpi_sun/bin/mpif90
</span><br>
<span class="quotelev1">&gt; gfortran: no input files
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My /opt/mpi_sun/share/openmpi/mpif90-wrapper-data.txt file  appears to 
</span><br>
<span class="quotelev1">&gt; my layman eye to be correct, but just
</span><br>
<span class="quotelev1">&gt; in case, its contents is the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; project=Open MPI
</span><br>
<span class="quotelev1">&gt; project_short=OMPI
</span><br>
<span class="quotelev1">&gt; version=1.3rc7
</span><br>
<span class="quotelev1">&gt; language=Fortran 90
</span><br>
<span class="quotelev1">&gt; compiler_env=FC
</span><br>
<span class="quotelev1">&gt; compiler_flags_env=FCFLAGS
</span><br>
<span class="quotelev1">&gt; compiler=/opt/sun/express/sunstudioceres/bin/f90
</span><br>
<span class="quotelev1">&gt; module_option=-M
</span><br>
<span class="quotelev1">&gt; extra_includes=
</span><br>
<span class="quotelev1">&gt; preprocessor_flags=
</span><br>
<span class="quotelev1">&gt; compiler_flags=
</span><br>
<span class="quotelev1">&gt; linker_flags=
</span><br>
<span class="quotelev1">&gt; libs=-lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal   -ldl   
</span><br>
<span class="quotelev1">&gt; -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; required_file=
</span><br>
<span class="quotelev1">&gt; includedir=${includedir}
</span><br>
<span class="quotelev1">&gt; libdir=${libdir}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone see why gfortran is being used? (the config.log says that sun 
</span><br>
<span class="quotelev1">&gt; f90 is used )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Olivier
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7731.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7729.php">Olivier Marsden: "[OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>In reply to:</strong> <a href="7729.php">Olivier Marsden: "[OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7731.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7731.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
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
