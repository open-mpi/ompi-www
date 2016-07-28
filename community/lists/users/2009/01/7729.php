<?
$subject_val = "[OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 19 11:50:00 2009" -->
<!-- isoreceived="20090119165000" -->
<!-- sent="Mon, 19 Jan 2009 17:49:53 +0100" -->
<!-- isosent="20090119164953" -->
<!-- name="Olivier Marsden" -->
<!-- email="Olivier.Marsden_at_[hidden]" -->
<!-- subject="[OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express" -->
<!-- id="4974AF31.301_at_ec-lyon.fr" -->
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
<strong>Subject:</strong> [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express<br>
<strong>From:</strong> Olivier Marsden (<em>Olivier.Marsden_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-19 11:49:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7730.php">Douglas Guptill: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7728.php">Ashley Pittman: "Re: [OMPI users] How to know which task on which node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7730.php">Douglas Guptill: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7730.php">Douglas Guptill: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7735.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm trying to compile ompi 1.3rc7 with the sun studio express comilers.
<br>
<p>I'm using the following configure command:
<br>
<p>CC=/opt/sun/express/sunstudioceres/bin/cc 
<br>
CXX=/opt/sun/express/sunstudioceres/bin/CC   
<br>
F77=/opt/sun/express/sunstudioceres/bin/f77 
<br>
FC=/opt/sun/express/sunstudioceres/bin/f90  ./configure 
<br>
--prefix=/opt/mpi_sun --enable-heterogeneous  --enable-shared 
<br>
--enable-mpi-f90 --with-mpi-f90-size=small --disable-mpi-threads 
<br>
--disable-progress-threads --disable-debug  --without-udapl 
<br>
--disable-io-romio
<br>
<p>The build and install execute correctly. However, I get the following 
<br>
when trying to use mpif90:
<br>
<span class="quotelev2"> &gt;&gt; /opt/mpi_sun/bin/mpif90
</span><br>
gfortran: no input files
<br>
<p>My /opt/mpi_sun/share/openmpi/mpif90-wrapper-data.txt file  appears to 
<br>
my layman eye to be correct, but just
<br>
in case, its contents is the following:
<br>
<p>project=Open MPI
<br>
project_short=OMPI
<br>
version=1.3rc7
<br>
language=Fortran 90
<br>
compiler_env=FC
<br>
compiler_flags_env=FCFLAGS
<br>
compiler=/opt/sun/express/sunstudioceres/bin/f90
<br>
module_option=-M
<br>
extra_includes=
<br>
preprocessor_flags=
<br>
compiler_flags=
<br>
linker_flags=
<br>
libs=-lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal   -ldl   
<br>
-Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
required_file=
<br>
includedir=${includedir}
<br>
libdir=${libdir}
<br>
<p><p>Can anyone see why gfortran is being used? (the config.log says that sun 
<br>
f90 is used )
<br>
<p>Thanks,
<br>
<p>Olivier
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7730.php">Douglas Guptill: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7728.php">Ashley Pittman: "Re: [OMPI users] How to know which task on which node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7730.php">Douglas Guptill: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7730.php">Douglas Guptill: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7735.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
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
