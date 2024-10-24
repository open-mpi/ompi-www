<?
$subject_val = "Re: [OMPI users] Creating 64-bit objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 08:52:00 2010" -->
<!-- isoreceived="20101110135200" -->
<!-- sent="Wed, 10 Nov 2010 08:51:37 -0500" -->
<!-- isosent="20101110135137" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Creating 64-bit objects?" -->
<!-- id="4592E39D-6D32-45BB-9EAA-75E588613946_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AANLkTimEePGRh20ArGa4F37CdNi_DicycdxNQ2bfOBSw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Creating 64-bit objects?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 08:51:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14721.php">Gedaliah Wolosh: "[OMPI users] Compile fails OMPI-1.4.3 Sun Studio 12.2"</a>
<li><strong>Previous message:</strong> <a href="14719.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?"</a>
<li><strong>In reply to:</strong> <a href="14716.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14730.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
<li><strong>Reply:</strong> <a href="14730.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nysal --
<br>
<p>Does the same issue occur in OMPI 1.5?
<br>
<p>Should we put in a local patch for OMPI 1.4.x and/or OMPI 1.5?  (we've done this before while waiting for upstream Libtool patches to be released, etc.)
<br>
<p><p><p>On Nov 10, 2010, at 2:19 AM, Nysal Jan wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brian,
</span><br>
<span class="quotelev1">&gt; This problem was first reported by Paul H. Hargrove in the developer mailing list. It is a bug in libtool and has been fixed in the latest release (2.2.8). More details are available here - <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8606.php">http://www.open-mpi.org/community/lists/devel/2010/10/8606.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; --Nysal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 10, 2010 at 1:04 AM, Price, Brian M (N-KCI) &lt;brian.m.price_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; OpenMPI version: 1.3.3 &amp; 1.4.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Platform: IBM P5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Issue:  I want OpenMPI to support some existing 64-bit FORTRAN software, but I can&#146;t seem to get 64-bit objects from OpenMPI without some modification to the Makefile in ompi/mpi/f90.
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
<span class="quotelev1">&gt; So, to produce 64-bit objects for all languages, I supply the following flags:
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
<span class="quotelev1">&gt; This configuration results in the following error during the build (more specifically, link) phase:
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
<span class="quotelev1">&gt; o   /bin/sh ../../../libtool  --mode=link xlf95_r -I../../../ompi/include -I../../../ompi/include -I. -I. -I../../../ompi/mpi/f90  -q64 -version-info 0:1:0  -export-dynamic  -o libmpi_f90.la -rpath &lt;prefix&gt;/lib mpi.lo mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo  ../../../ompi/libmpi.la -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o   libtool: link: /usr/bin/ld -m elf64ppc -shared  .libs/mpi.o .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.lo  -L&lt;topdir&gt;/orte/.libs -L&lt;topdir&gt;/opal/.libs ../../../ompi/.libs/libmpi.so &lt;topdir&gt;/orte/.libs/libopen-rte.so &lt;topdir&gt;/opal/.libs/libopen-pal.so -ldl -lnsl -lutil  -q64  -soname libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -          OUTPUT:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: unrecognized option &#145;-q64&#146;
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: use the --help option for usage information
</span><br>
<span class="quotelev1">&gt; make[4]: *** [libmpi_f90.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `&lt;topdir&gt;/ompi/mpi/f90`
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `&lt;topdir&gt;/ompi/mpi/f90`
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `&lt;topdir&gt;/ompi/mpi/f90`
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `&lt;topdir&gt;/ompi`
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The -q64 option, while valid for the xlf95_r compiler, is not a valid option for /usr/bin/ld.  So, I&#146;m wondering why this option got passed to /usr/bin/ld.  After looking at &lt;topdir&gt;/ompi/mpi/f90/Makefile, I see that FCFLAGS shows up in link lines (&#147;libmpi_f90_la_LINK&#148; and &#147;FCLINK&#148;).  This direction seems to come from Makefile.in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I remove these FCFLAGS references from the Makefile, I am able to complete the build and install of OpenMPI, and it seems to correctly support my existing software.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So,  now for my question:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should FCFLAGS show up on these links lines and, if so, how would I get 64-bit objects?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14721.php">Gedaliah Wolosh: "[OMPI users] Compile fails OMPI-1.4.3 Sun Studio 12.2"</a>
<li><strong>Previous message:</strong> <a href="14719.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?"</a>
<li><strong>In reply to:</strong> <a href="14716.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14730.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
<li><strong>Reply:</strong> <a href="14730.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
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
