<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI with PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 16:58:22 2009" -->
<!-- isoreceived="20091209215822" -->
<!-- sent="Wed, 09 Dec 2009 15:58:26 -0600" -->
<!-- isosent="20091209215826" -->
<!-- name="Gerald Creager" -->
<!-- email="gerry.creager_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI with PGI compilers" -->
<!-- id="4B201D82.5030005_at_tamu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B201BB1.4080304_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem building OpenMPI with PGI compilers<br>
<strong>From:</strong> Gerald Creager (<em>gerry.creager_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 16:58:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11490.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11488.php">Gus Correa: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="11488.php">Gus Correa: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11490.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11490.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fascinating. I've not had any real problems building it from scratch 
<br>
with PGI. We are using the PGI 9 compilers, though, for that.
<br>
<p>gerry
<br>
<p>Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Last I tried, OpenMPI 1.3.2, PGI (8.0-4) was problematic,
</span><br>
<span class="quotelev1">&gt; particularly for C and C++.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I eventually settled down with a hybrid gcc, g++, and pgf90
</span><br>
<span class="quotelev1">&gt; (for both OpenMPI F77 and F90 bindings).
</span><br>
<span class="quotelev1">&gt; Even this required a trick to avoid the &quot;-pthread&quot; flag
</span><br>
<span class="quotelev1">&gt; to be inserted among the pgf90 flags (where it doesn't belong).
</span><br>
<span class="quotelev1">&gt; Yes, libtool was also part of the problem back then.
</span><br>
<span class="quotelev1">&gt; You may find my postings about on this list archives - early 2009 -,
</span><br>
<span class="quotelev1">&gt; along with Jeff Squyres' solution for the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also built a full Gnu version (gcc, g++, gfortran, gfortran)
</span><br>
<span class="quotelev1">&gt; of OpenMPI that works well.
</span><br>
<span class="quotelev1">&gt; Intel and hybrid Gnu(gcc,g++)+Intel(ifort for F77 and F90)
</span><br>
<span class="quotelev1">&gt; versions of OpenMPI also work right.
</span><br>
<span class="quotelev1">&gt; We need multiple compiler support here anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My $0.02
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My first ever attempt to build OpenMPI.  Platform is Sun Sunfire x4600
</span><br>
<span class="quotelev2">&gt;&gt; M2 servers, running Scientific Linux version 5.3.  Trying to build
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.4 (as of today; same problems yesterday with 1.3.4).
</span><br>
<span class="quotelev2">&gt;&gt; Trying to use PGI version 10.0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a first attempt, I set CC, CXX, F77, and FC, then did &quot;configure&quot;
</span><br>
<span class="quotelev2">&gt;&gt; and &quot;make&quot;.  Make ends with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link:  pgCC --prelink_objects --instantiation_dir 
</span><br>
<span class="quotelev2">&gt;&gt; Template.dir   .libs/mpicxx.o .libs/intercepts.o .libs/comm.o 
</span><br>
<span class="quotelev2">&gt;&gt; .libs/datatype.o .libs/win.o .libs/file.o   -Wl,--rpath 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/ompi/.libs 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,--rpath 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/orte/.libs 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,--rpath 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/opal/.libs 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,--rpath -Wl,/global/common/tesla/usg/openmpi/1.4/lib 
</span><br>
<span class="quotelev2">&gt;&gt; -L/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/orte/.libs 
</span><br>
<span class="quotelev2">&gt;&gt; -L/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/opal/.libs 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so 
</span><br>
<span class="quotelev2">&gt;&gt; /project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/orte/.libs/libopen-rte.so 
</span><br>
<span class="quotelev2">&gt;&gt; /project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/opal/.libs/libopen-pal.so 
</span><br>
<span class="quotelev2">&gt;&gt; -ldl -lnsl -lutil -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; pgCC-Error-Unknown switch: --instantiation_dir
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [libmpi_cxx.la] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I Googled &quot;instantiation_dir openmpi&quot;, which led me to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://cia.vc/stats/project/OMPI?s_message=3">http://cia.vc/stats/project/OMPI?s_message=3</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where I see:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There's still something wrong with the C++ support, however; I get
</span><br>
<span class="quotelev2">&gt;&gt; errors about a template directory switch when compiling the C++ MPI
</span><br>
<span class="quotelev2">&gt;&gt; bindings (doesn't happen with PGI 9.0). Still working on this... it
</span><br>
<span class="quotelev2">&gt;&gt; feels like it's still a Libtool issue because OMPI is not putting in
</span><br>
<span class="quotelev2">&gt;&gt; this compiler flag as far as I can tell:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {{{
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../libtool --tag=CXX --mode=link pgCC -g -version-info 
</span><br>
<span class="quotelev2">&gt;&gt; 0:0:0 -export-dynamic -o libmpi_cxx.la -rpath /home/jsquyres/bogus/lib 
</span><br>
<span class="quotelev2">&gt;&gt; mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/libmpi.la -lnsl -lutil -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: tpldir=Template.dir
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: rm -rf Template.dir
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: pgCC --prelink_objects --instantiation_dir Template.dir 
</span><br>
<span class="quotelev2">&gt;&gt; .libs/mpicxx.o .libs/intercepts.o .libs/comm.o .libs/datatype.o 
</span><br>
<span class="quotelev2">&gt;&gt; .libs/win.o .libs/file.o -Wl,--rpath 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/users/jsquyres/svn/ompi-1.3/ompi/.libs -Wl,--rpath 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/users/jsquyres/svn/ompi-1.3/orte/.libs -Wl,--rpath 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/users/jsquyres/svn/ompi-1.3/opal/.libs -Wl,--rpath 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/home/jsquyres/bogus/lib -L/users/jsquyres/svn/ompi-1.3/orte/.libs 
</span><br>
<span class="quotelev2">&gt;&gt; -L/users/jsquyres/svn/ompi-1.3/opal/.libs 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so 
</span><br>
<span class="quotelev2">&gt;&gt; /users/jsquyres/svn/ompi-1.3/orte/.libs/libopen-rte.so 
</span><br>
<span class="quotelev2">&gt;&gt; /users/jsquyres/svn/ompi-1.3/opal/.libs/libopen-pal.so -ldl -lnsl 
</span><br>
<span class="quotelev2">&gt;&gt; -lutil -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; pgCC-Error-Unknown switch: --instantiation_dir
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [libmpi_cxx.la] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; }}}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I noticed the comment &quot;doesn't happen with PGI 9.0&quot;, so I re-did the
</span><br>
<span class="quotelev2">&gt;&gt; entire process with PGI 9.0 instead of 10.0, but I get the same error!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions?  Let me know if I should provide full copies of the
</span><br>
<span class="quotelev2">&gt;&gt; configure and make output.  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11490.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11488.php">Gus Correa: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="11488.php">Gus Correa: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11490.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11490.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
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
