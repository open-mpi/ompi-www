<?
$subject_val = "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 07:51:28 2009" -->
<!-- isoreceived="20090120125128" -->
<!-- sent="Tue, 20 Jan 2009 07:51:20 -0500" -->
<!-- isosent="20090120125120" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express" -->
<!-- id="C697F392-B2D0-4913-BEB8-9DF8A1E07DFE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 07:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7736.php">nilesh barange: "[OMPI users] error opal/libltdl"</a>
<li><strong>Previous message:</strong> <a href="7734.php">jody: "[OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>In reply to:</strong> <a href="7729.php">Olivier Marsden: "[OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7740.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7740.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Jan 19, 2009, at 11:49 AM, Olivier Marsden wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to compile ompi 1.3rc7 with the sun studio express  
</span><br>
<span class="quotelev1">&gt; comilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using the following configure command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CC=/opt/sun/express/sunstudioceres/bin/cc CXX=/opt/sun/express/ 
</span><br>
<span class="quotelev1">&gt; sunstudioceres/bin/CC   F77=/opt/sun/express/sunstudioceres/bin/f77  
</span><br>
<span class="quotelev1">&gt; FC=/opt/sun/express/sunstudioceres/bin/f90  ./configure --prefix=/ 
</span><br>
<span class="quotelev1">&gt; opt/mpi_sun --enable-heterogeneous  --enable-shared --enable-mpi-f90  
</span><br>
<span class="quotelev1">&gt; --with-mpi-f90-size=small --disable-mpi-threads --disable-progress- 
</span><br>
<span class="quotelev1">&gt; threads --disable-debug  --without-udapl --disable-io-romio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The build and install execute correctly. However, I get the  
</span><br>
<span class="quotelev1">&gt; following when trying to use mpif90:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /opt/mpi_sun/bin/mpif90
</span><br>
<span class="quotelev1">&gt; gfortran: no input files
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My /opt/mpi_sun/share/openmpi/mpif90-wrapper-data.txt file  appears  
</span><br>
<span class="quotelev1">&gt; to my layman eye to be correct, but just
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
<span class="quotelev1">&gt; libs=-lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal   -ldl   -Wl,-- 
</span><br>
<span class="quotelev1">&gt; export-dynamic -lnsl -lutil -lm -ldl
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
<span class="quotelev1">&gt; Can anyone see why gfortran is being used? (the config.log says that  
</span><br>
<span class="quotelev1">&gt; sun f90 is used )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Olivier
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7736.php">nilesh barange: "[OMPI users] error opal/libltdl"</a>
<li><strong>Previous message:</strong> <a href="7734.php">jody: "[OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>In reply to:</strong> <a href="7729.php">Olivier Marsden: "[OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7740.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7740.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
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
