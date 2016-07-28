<?
$subject_val = "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 11:15:17 2009" -->
<!-- isoreceived="20090120161517" -->
<!-- sent="Tue, 20 Jan 2009 17:15:03 +0100" -->
<!-- isosent="20090120161503" -->
<!-- name="Olivier Marsden" -->
<!-- email="Olivier.Marsden_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express" -->
<!-- id="4975F887.6070105_at_ec-lyon.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C697F392-B2D0-4913-BEB8-9DF8A1E07DFE_at_cisco.com" -->
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
<strong>From:</strong> Olivier Marsden (<em>Olivier.Marsden_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 11:15:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7741.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>In reply to:</strong> <a href="7735.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7741.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7741.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Certainly.
<br>
I hope I haven't forgotten anything.
<br>
<p>Olivier Marsden
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Can you send the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2009, at 11:49 AM, Olivier Marsden wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to compile ompi 1.3rc7 with the sun studio express comilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using the following configure command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CC=/opt/sun/express/sunstudioceres/bin/cc 
</span><br>
<span class="quotelev2">&gt;&gt; CXX=/opt/sun/express/sunstudioceres/bin/CC   
</span><br>
<span class="quotelev2">&gt;&gt; F77=/opt/sun/express/sunstudioceres/bin/f77 
</span><br>
<span class="quotelev2">&gt;&gt; FC=/opt/sun/express/sunstudioceres/bin/f90  ./configure 
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/opt/mpi_sun --enable-heterogeneous  --enable-shared 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-f90 --with-mpi-f90-size=small --disable-mpi-threads 
</span><br>
<span class="quotelev2">&gt;&gt; --disable-progress-threads --disable-debug  --without-udapl 
</span><br>
<span class="quotelev2">&gt;&gt; --disable-io-romio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The build and install execute correctly. However, I get the following 
</span><br>
<span class="quotelev2">&gt;&gt; when trying to use mpif90:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; /opt/mpi_sun/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt; gfortran: no input files
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My /opt/mpi_sun/share/openmpi/mpif90-wrapper-data.txt file  appears 
</span><br>
<span class="quotelev2">&gt;&gt; to my layman eye to be correct, but just
</span><br>
<span class="quotelev2">&gt;&gt; in case, its contents is the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; project=Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; project_short=OMPI
</span><br>
<span class="quotelev2">&gt;&gt; version=1.3rc7
</span><br>
<span class="quotelev2">&gt;&gt; language=Fortran 90
</span><br>
<span class="quotelev2">&gt;&gt; compiler_env=FC
</span><br>
<span class="quotelev2">&gt;&gt; compiler_flags_env=FCFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; compiler=/opt/sun/express/sunstudioceres/bin/f90
</span><br>
<span class="quotelev2">&gt;&gt; module_option=-M
</span><br>
<span class="quotelev2">&gt;&gt; extra_includes=
</span><br>
<span class="quotelev2">&gt;&gt; preprocessor_flags=
</span><br>
<span class="quotelev2">&gt;&gt; compiler_flags=
</span><br>
<span class="quotelev2">&gt;&gt; linker_flags=
</span><br>
<span class="quotelev2">&gt;&gt; libs=-lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal   -ldl   
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt; required_file=
</span><br>
<span class="quotelev2">&gt;&gt; includedir=${includedir}
</span><br>
<span class="quotelev2">&gt;&gt; libdir=${libdir}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone see why gfortran is being used? (the config.log says that 
</span><br>
<span class="quotelev2">&gt;&gt; sun f90 is used )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Olivier
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7740/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7741.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>In reply to:</strong> <a href="7735.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7741.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7741.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
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
