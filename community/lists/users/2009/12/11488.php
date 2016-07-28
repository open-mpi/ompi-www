<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI with PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 16:50:57 2009" -->
<!-- isoreceived="20091209215057" -->
<!-- sent="Wed, 09 Dec 2009 16:50:41 -0500" -->
<!-- isosent="20091209215041" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI with PGI compilers" -->
<!-- id="4B201BB1.4080304_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B20153E.6010805_at_lbl.gov" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 16:50:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11489.php">Gerald Creager: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11487.php">Jim Kusznir: "[OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>In reply to:</strong> <a href="11484.php">David Turner: "[OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11489.php">Gerald Creager: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11489.php">Gerald Creager: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David
<br>
<p>Last I tried, OpenMPI 1.3.2, PGI (8.0-4) was problematic,
<br>
particularly for C and C++.
<br>
<p>I eventually settled down with a hybrid gcc, g++, and pgf90
<br>
(for both OpenMPI F77 and F90 bindings).
<br>
Even this required a trick to avoid the &quot;-pthread&quot; flag
<br>
to be inserted among the pgf90 flags (where it doesn't belong).
<br>
Yes, libtool was also part of the problem back then.
<br>
You may find my postings about on this list archives - early 2009 -,
<br>
along with Jeff Squyres' solution for the problem.
<br>
<p><p>I also built a full Gnu version (gcc, g++, gfortran, gfortran)
<br>
of OpenMPI that works well.
<br>
Intel and hybrid Gnu(gcc,g++)+Intel(ifort for F77 and F90)
<br>
versions of OpenMPI also work right.
<br>
We need multiple compiler support here anyway.
<br>
<p>My $0.02
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p><p><p>David Turner wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My first ever attempt to build OpenMPI.  Platform is Sun Sunfire x4600
</span><br>
<span class="quotelev1">&gt; M2 servers, running Scientific Linux version 5.3.  Trying to build
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4 (as of today; same problems yesterday with 1.3.4).
</span><br>
<span class="quotelev1">&gt; Trying to use PGI version 10.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a first attempt, I set CC, CXX, F77, and FC, then did &quot;configure&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;make&quot;.  Make ends with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: link:  pgCC --prelink_objects --instantiation_dir Template.dir 
</span><br>
<span class="quotelev1">&gt;   .libs/mpicxx.o .libs/intercepts.o .libs/comm.o .libs/datatype.o 
</span><br>
<span class="quotelev1">&gt; .libs/win.o .libs/file.o   -Wl,--rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/ompi/.libs 
</span><br>
<span class="quotelev1">&gt; -Wl,--rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/orte/.libs 
</span><br>
<span class="quotelev1">&gt; -Wl,--rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/opal/.libs 
</span><br>
<span class="quotelev1">&gt; -Wl,--rpath -Wl,/global/common/tesla/usg/openmpi/1.4/lib 
</span><br>
<span class="quotelev1">&gt; -L/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/orte/.libs 
</span><br>
<span class="quotelev1">&gt; -L/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/opal/.libs 
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so 
</span><br>
<span class="quotelev1">&gt; /project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/orte/.libs/libopen-rte.so 
</span><br>
<span class="quotelev1">&gt; /project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/opal/.libs/libopen-pal.so 
</span><br>
<span class="quotelev1">&gt; -ldl -lnsl -lutil -lpthread
</span><br>
<span class="quotelev1">&gt; pgCC-Error-Unknown switch: --instantiation_dir
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmpi_cxx.la] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I Googled &quot;instantiation_dir openmpi&quot;, which led me to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://cia.vc/stats/project/OMPI?s_message=3">http://cia.vc/stats/project/OMPI?s_message=3</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where I see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's still something wrong with the C++ support, however; I get
</span><br>
<span class="quotelev1">&gt; errors about a template directory switch when compiling the C++ MPI
</span><br>
<span class="quotelev1">&gt; bindings (doesn't happen with PGI 9.0). Still working on this... it
</span><br>
<span class="quotelev1">&gt; feels like it's still a Libtool issue because OMPI is not putting in
</span><br>
<span class="quotelev1">&gt; this compiler flag as far as I can tell:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; {{{
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX --mode=link pgCC -g -version-info 
</span><br>
<span class="quotelev1">&gt; 0:0:0 -export-dynamic -o libmpi_cxx.la -rpath /home/jsquyres/bogus/lib 
</span><br>
<span class="quotelev1">&gt; mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo 
</span><br>
<span class="quotelev1">&gt; ../../../ompi/libmpi.la -lnsl -lutil -lpthread
</span><br>
<span class="quotelev1">&gt; libtool: link: tpldir=Template.dir
</span><br>
<span class="quotelev1">&gt; libtool: link: rm -rf Template.dir
</span><br>
<span class="quotelev1">&gt; libtool: link: pgCC --prelink_objects --instantiation_dir Template.dir 
</span><br>
<span class="quotelev1">&gt; .libs/mpicxx.o .libs/intercepts.o .libs/comm.o .libs/datatype.o 
</span><br>
<span class="quotelev1">&gt; .libs/win.o .libs/file.o -Wl,--rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/users/jsquyres/svn/ompi-1.3/ompi/.libs -Wl,--rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/users/jsquyres/svn/ompi-1.3/orte/.libs -Wl,--rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/users/jsquyres/svn/ompi-1.3/opal/.libs -Wl,--rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/home/jsquyres/bogus/lib -L/users/jsquyres/svn/ompi-1.3/orte/.libs 
</span><br>
<span class="quotelev1">&gt; -L/users/jsquyres/svn/ompi-1.3/opal/.libs ../../../ompi/.libs/libmpi.so 
</span><br>
<span class="quotelev1">&gt; /users/jsquyres/svn/ompi-1.3/orte/.libs/libopen-rte.so 
</span><br>
<span class="quotelev1">&gt; /users/jsquyres/svn/ompi-1.3/opal/.libs/libopen-pal.so -ldl -lnsl -lutil 
</span><br>
<span class="quotelev1">&gt; -lpthread
</span><br>
<span class="quotelev1">&gt; pgCC-Error-Unknown switch: --instantiation_dir
</span><br>
<span class="quotelev1">&gt; make: *** [libmpi_cxx.la] Error 1
</span><br>
<span class="quotelev1">&gt; }}}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed the comment &quot;doesn't happen with PGI 9.0&quot;, so I re-did the
</span><br>
<span class="quotelev1">&gt; entire process with PGI 9.0 instead of 10.0, but I get the same error!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions?  Let me know if I should provide full copies of the
</span><br>
<span class="quotelev1">&gt; configure and make output.  Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11489.php">Gerald Creager: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11487.php">Jim Kusznir: "[OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>In reply to:</strong> <a href="11484.php">David Turner: "[OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11489.php">Gerald Creager: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11489.php">Gerald Creager: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
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
