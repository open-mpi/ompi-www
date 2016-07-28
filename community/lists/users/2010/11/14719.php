<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 08:40:22 2010" -->
<!-- isoreceived="20101110134022" -->
<!-- sent="Wed, 10 Nov 2010 06:40:10 -0700" -->
<!-- isosent="20101110134010" -->
<!-- name="Price, Brian M (N-KCI)" -->
<!-- email="brian.m.price_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?" -->
<!-- id="07E77CF9C426584F8126A762FD1AFEA414BC729692_at_HDXMSPA.us.lmco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4CD9A937.7080504_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?<br>
<strong>From:</strong> Price, Brian M (N-KCI) (<em>brian.m.price_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 08:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14720.php">Jeff Squyres: "Re: [OMPI users] Creating 64-bit objects?"</a>
<li><strong>Previous message:</strong> <a href="14718.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?"</a>
<li><strong>In reply to:</strong> <a href="14712.php">Prentice Bisbal: "Re: [OMPI users] Creating 64-bit objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14713.php">Jeff Squyres: "Re: [OMPI users] Creating 64-bit PPC objects with xlc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
They are being specified as environment variables, but it looks like the problem's already been documented and fixed.  Thanks.
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Prentice Bisbal
<br>
Sent: Tuesday, November 09, 2010 1:04 PM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Creating 64-bit objects?
<br>
<p>How are you specifying these flags? Are you setting them as environment
<br>
variables, or are you adding them to the configure command line?
<br>
<p>Can you show us the exact commands you used?
<br>
<p>Prentice
<br>
<p><p>Price, Brian M (N-KCI) wrote:
<br>
<span class="quotelev1">&gt; OpenMPI version: 1.3.3 &amp; 1.4.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Platform: IBM P5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Issue:  I want OpenMPI to support some existing 64-bit FORTRAN software,
</span><br>
<span class="quotelev1">&gt; but I can&#226;&#128;&#153;t seem to get 64-bit objects from OpenMPI without some
</span><br>
<span class="quotelev1">&gt; modification to the Makefile in ompi/mpi/f90.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can configure, build, and install just fine with the following compilers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -          CC = xlC_r
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -          CXX = xlC_r
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -          F77 = xlf95_r
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -          FC = xlf95_r
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, this configuration produces 32-bit objects for all languages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, to produce 64-bit objects for all languages, I supply the following
</span><br>
<span class="quotelev1">&gt; flags:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -          CFLAGS = -q64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -          CXXFLAGS = -q64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -          FFLAGS = -q64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -          FCFLAGS = -q64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This configuration results in the following error during the build (more
</span><br>
<span class="quotelev1">&gt; specifically, link) phase:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -          When creating libmpi_f90.la in ompi/mpi/f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -          COMMANDS:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o   /bin/sh ../../../libtool  --mode=link xlf95_r
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/include -I../../../ompi/include -I. -I.
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/mpi/f90  -q64 -version-info 0:1:0  -export-dynamic  -o
</span><br>
<span class="quotelev1">&gt; libmpi_f90.la -rpath &lt;prefix&gt;/lib mpi.lo mpi_sizeof.lo
</span><br>
<span class="quotelev1">&gt; mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo
</span><br>
<span class="quotelev1">&gt; mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo
</span><br>
<span class="quotelev1">&gt; mpi_wtime_f90.lo  ../../../ompi/libmpi.la -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o   libtool: link: /usr/bin/ld -m elf64ppc -shared  .libs/mpi.o
</span><br>
<span class="quotelev1">&gt; .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o
</span><br>
<span class="quotelev1">&gt; .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o
</span><br>
<span class="quotelev1">&gt; .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.lo 
</span><br>
<span class="quotelev1">&gt; -L&lt;topdir&gt;/orte/.libs -L&lt;topdir&gt;/opal/.libs
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so &lt;topdir&gt;/orte/.libs/libopen-rte.so
</span><br>
<span class="quotelev1">&gt; &lt;topdir&gt;/opal/.libs/libopen-pal.so -ldl -lnsl -lutil  -q64  -soname
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -          OUTPUT:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: unrecognized option &#226;&#128;&#152;-q64&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: use the --help option for usage information
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[4]: *** [libmpi_f90.la] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `&lt;topdir&gt;/ompi/mpi/f90`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `&lt;topdir&gt;/ompi/mpi/f90`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `&lt;topdir&gt;/ompi/mpi/f90`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `&lt;topdir&gt;/ompi`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The -q64 option, while valid for the xlf95_r compiler, is not a valid
</span><br>
<span class="quotelev1">&gt; option for /usr/bin/ld.  So, I&#226;&#128;&#153;m wondering why this option got passed to
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld.  After looking at &lt;topdir&gt;/ompi/mpi/f90/Makefile, I see
</span><br>
<span class="quotelev1">&gt; that FCFLAGS shows up in link lines (&#226;&#128;&#156;libmpi_f90_la_LINK&#226;&#128;&#157; and
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;FCLINK&#226;&#128;&#157;).  This direction seems to come from Makefile.in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I remove these FCFLAGS references from the Makefile, I am able to
</span><br>
<span class="quotelev1">&gt; complete the build and install of OpenMPI, and it seems to correctly
</span><br>
<span class="quotelev1">&gt; support my existing software.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So,  now for my question:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should FCFLAGS show up on these links lines and, if so, how would I get
</span><br>
<span class="quotelev1">&gt; 64-bit objects?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian Price
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14720.php">Jeff Squyres: "Re: [OMPI users] Creating 64-bit objects?"</a>
<li><strong>Previous message:</strong> <a href="14718.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?"</a>
<li><strong>In reply to:</strong> <a href="14712.php">Prentice Bisbal: "Re: [OMPI users] Creating 64-bit objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14713.php">Jeff Squyres: "Re: [OMPI users] Creating 64-bit PPC objects with xlc?"</a>
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
