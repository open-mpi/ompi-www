<?
$subject_val = "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 15:40:41 2009" -->
<!-- isoreceived="20090120204041" -->
<!-- sent="Tue, 20 Jan 2009 15:40:34 -0500" -->
<!-- isosent="20090120204034" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express" -->
<!-- id="F0E0447A-7531-469F-BAF8-2613174E51AB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4975F887.6070105_at_ec-lyon.fr" -->
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
<strong>Date:</strong> 2009-01-20 15:40:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7742.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7740.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>In reply to:</strong> <a href="7740.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7742.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7742.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, that was helpful.  From everything I can see, it looks like  
<br>
the &quot;.../f90&quot; value was propagated properly throughout OMPI's code base.
<br>
<p>Does f90 invoke gfortran on the back-end?  Try invoking &quot;/opt/sun/ 
<br>
express/sunstudioceres/bin/f90&quot; with no arguments (just like you  
<br>
invoked mpif90 with no arguments) and see if you get the sam error.
<br>
<p>You can also invoke &quot;mpif90 --showme&quot; to see the command that mpif90  
<br>
would have executed.
<br>
<p><p>On Jan 20, 2009, at 11:15 AM, Olivier Marsden wrote:
<br>
<p><span class="quotelev1">&gt; Certainly.
</span><br>
<span class="quotelev1">&gt; I hope I haven't forgotten anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Olivier Marsden
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the information listed here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 19, 2009, at 11:49 AM, Olivier Marsden wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to compile ompi 1.3rc7 with the sun studio express  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using the following configure command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=/opt/sun/express/sunstudioceres/bin/cc CXX=/opt/sun/express/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunstudioceres/bin/CC   F77=/opt/sun/express/sunstudioceres/bin/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77 FC=/opt/sun/express/sunstudioceres/bin/f90  ./configure -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prefix=/opt/mpi_sun --enable-heterogeneous  --enable-shared -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable-mpi-f90 --with-mpi-f90-size=small --disable-mpi-threads -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disable-progress-threads --disable-debug  --without-udapl -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disable-io-romio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The build and install execute correctly. However, I get the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following when trying to use mpif90:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; /opt/mpi_sun/bin/mpif90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gfortran: no input files
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My /opt/mpi_sun/share/openmpi/mpif90-wrapper-data.txt file   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appears to my layman eye to be correct, but just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in case, its contents is the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; project=Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; project_short=OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version=1.3rc7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; language=Fortran 90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler_env=FC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler_flags_env=FCFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler=/opt/sun/express/sunstudioceres/bin/f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module_option=-M
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extra_includes=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; preprocessor_flags=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler_flags=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linker_flags=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libs=-lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal   -ldl   - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; required_file=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; includedir=${includedir}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libdir=${libdir}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone see why gfortran is being used? (the config.log says  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that sun f90 is used )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Olivier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="7742.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7740.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>In reply to:</strong> <a href="7740.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7742.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7742.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
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
