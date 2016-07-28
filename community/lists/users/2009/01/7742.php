<?
$subject_val = "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 17:04:17 2009" -->
<!-- isoreceived="20090120220417" -->
<!-- sent="Tue, 20 Jan 2009 23:04:09 +0100" -->
<!-- isosent="20090120220409" -->
<!-- name="Olivier Marsden" -->
<!-- email="Olivier.Marsden_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express" -->
<!-- id="49764A59.4010009_at_ec-lyon.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F0E0447A-7531-469F-BAF8-2613174E51AB_at_cisco.com" -->
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
<strong>Date:</strong> 2009-01-20 17:04:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7743.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7741.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>In reply to:</strong> <a href="7741.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7743.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7743.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
f90 works correctly, when run simply as f90 or as /opt/sun/etc.../f90, 
<br>
and binaries run properly (sun f90 appears
<br>
to give excellent performance, incidently!)
<br>
<p>the command  /opt/mpi_sun/bin/mpif90 --show-me
<br>
returns:
<br>
<p>/home/marsden/sources/gcc_final/bin/gfortran 
<br>
-I/opt/mpi_gfortran4.4//include -pthread -I/opt/mpi_gfortran4.4//lib 
<br>
-L/opt/mpi_gfortran4.4//lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte 
<br>
-lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
<p>For what it's worth, and as you've probably guessed, I do have another 
<br>
version installation of openmpi.
<br>
In fact two, one with the system gcc/gfortran4.2, and one with a locally 
<br>
compiled gcc/gfortran4.4 .
<br>
These both work correctly.   The second installation seems to be 
<br>
interfering with my current attempt,
<br>
even though I exported all environment variables I can think of to point 
<br>
to sun compilers &amp; libraries first,
<br>
before configure &amp; compile.
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Thanks, that was helpful.  From everything I can see, it looks like 
</span><br>
<span class="quotelev1">&gt; the &quot;.../f90&quot; value was propagated properly throughout OMPI's code base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does f90 invoke gfortran on the back-end?  Try invoking 
</span><br>
<span class="quotelev1">&gt; &quot;/opt/sun/express/sunstudioceres/bin/f90&quot; with no arguments (just like 
</span><br>
<span class="quotelev1">&gt; you invoked mpif90 with no arguments) and see if you get the sam error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can also invoke &quot;mpif90 --showme&quot; to see the command that mpif90 
</span><br>
<span class="quotelev1">&gt; would have executed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 20, 2009, at 11:15 AM, Olivier Marsden wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Certainly.
</span><br>
<span class="quotelev2">&gt;&gt; I hope I haven't forgotten anything.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Olivier Marsden
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you send the information listed here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 19, 2009, at 11:49 AM, Olivier Marsden wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to compile ompi 1.3rc7 with the sun studio express 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comilers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm using the following configure command:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CC=/opt/sun/express/sunstudioceres/bin/cc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CXX=/opt/sun/express/sunstudioceres/bin/CC   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; F77=/opt/sun/express/sunstudioceres/bin/f77 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FC=/opt/sun/express/sunstudioceres/bin/f90  ./configure 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --prefix=/opt/mpi_sun --enable-heterogeneous  --enable-shared 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-mpi-f90 --with-mpi-f90-size=small --disable-mpi-threads 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --disable-progress-threads --disable-debug  --without-udapl 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --disable-io-romio
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The build and install execute correctly. However, I get the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following when trying to use mpif90:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; /opt/mpi_sun/bin/mpif90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gfortran: no input files
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My /opt/mpi_sun/share/openmpi/mpif90-wrapper-data.txt file  appears 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to my layman eye to be correct, but just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in case, its contents is the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; project=Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; project_short=OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version=1.3rc7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; language=Fortran 90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler_env=FC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler_flags_env=FCFLAGS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler=/opt/sun/express/sunstudioceres/bin/f90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module_option=-M
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; extra_includes=
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; preprocessor_flags=
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler_flags=
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linker_flags=
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libs=-lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal   -ldl   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; required_file=
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; includedir=${includedir}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libdir=${libdir}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can anyone see why gfortran is being used? (the config.log says 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that sun f90 is used )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Olivier
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7743.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7741.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>In reply to:</strong> <a href="7741.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7743.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7743.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
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
