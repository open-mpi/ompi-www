<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI with PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 18:18:21 2009" -->
<!-- isoreceived="20091209231821" -->
<!-- sent="Wed, 09 Dec 2009 18:18:12 -0500" -->
<!-- isosent="20091209231812" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI with PGI compilers" -->
<!-- id="4B203034.70303_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="066FBB3F-9DC8-496D-A595-B8015BFAF766_at_cisco.com" -->
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
<strong>Date:</strong> 2009-12-09 18:18:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11492.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>Previous message:</strong> <a href="11490.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="11490.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11522.php">David Turner: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All
<br>
<p>As I stated on my original posting,
<br>
I haven't compiled OpenMPI since 1.3.2.
<br>
Just trying to be of help, based on previous,
<br>
and maybe too old, experiences.
<br>
<p>The problem I referred to happened with PGI 8.0-4 and OpenMPI 1.3.
<br>
Most likely the issue is superseded already by the newer
<br>
OpenMPI configuration scripts, but it did exist
<br>
and it did involve libtool as well,
<br>
although it seems to be different from what
<br>
David Turner just reported with PGI 10,
<br>
and apparently with PGI 9 also (so he wrote).
<br>
<p>These threads document the problem I had,
<br>
with one solution provided by Jeff Squyres,
<br>
and another by Orion Poplawski:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/04/8724.php">http://www.open-mpi.org/community/lists/users/2009/04/8724.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/04/8911.php">http://www.open-mpi.org/community/lists/users/2009/04/8911.php</a>
<br>
<p>Those workarounds may no longer be required, considering what Jeff
<br>
and Gerry wrote, which is good news, of course.
<br>
<p>Thanks,
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
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Just to set the record straight: it's a Libtool problem with PGI version 10 (all PGI versions below 10 work fine).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This has been reported to the GNU Libtool folks and patches have already been applied upstream.  However, there hasn't been a new Libtool release yet with these patches, so we have to patch during the Open MPI build (hence, the solution is in our autogen.sh script, which sets up the configure/build system).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 9, 2009, at 4:58 PM, Gerald Creager wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fascinating. I've not had any real problems building it from scratch
</span><br>
<span class="quotelev2">&gt;&gt; with PGI. We are using the PGI 9 compilers, though, for that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gerry
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi David
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Last I tried, OpenMPI 1.3.2, PGI (8.0-4) was problematic,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; particularly for C and C++.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I eventually settled down with a hybrid gcc, g++, and pgf90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (for both OpenMPI F77 and F90 bindings).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Even this required a trick to avoid the &quot;-pthread&quot; flag
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be inserted among the pgf90 flags (where it doesn't belong).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, libtool was also part of the problem back then.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may find my postings about on this list archives - early 2009 -,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; along with Jeff Squyres' solution for the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also built a full Gnu version (gcc, g++, gfortran, gfortran)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of OpenMPI that works well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel and hybrid Gnu(gcc,g++)+Intel(ifort for F77 and F90)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions of OpenMPI also work right.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We need multiple compiler support here anyway.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My $0.02
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David Turner wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My first ever attempt to build OpenMPI.  Platform is Sun Sunfire x4600
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; M2 servers, running Scientific Linux version 5.3.  Trying to build
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI 1.4 (as of today; same problems yesterday with 1.3.4).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Trying to use PGI version 10.0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As a first attempt, I set CC, CXX, F77, and FC, then did &quot;configure&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and &quot;make&quot;.  Make ends with:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link:  pgCC --prelink_objects --instantiation_dir
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Template.dir   .libs/mpicxx.o .libs/intercepts.o .libs/comm.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/datatype.o .libs/win.o .libs/file.o   -Wl,--rpath
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Wl,/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/ompi/.libs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Wl,--rpath
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Wl,/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/orte/.libs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Wl,--rpath
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Wl,/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/opal/.libs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Wl,--rpath -Wl,/global/common/tesla/usg/openmpi/1.4/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/orte/.libs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/opal/.libs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/orte/.libs/libopen-rte.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -ldl -lnsl -lutil -lpthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pgCC-Error-Unknown switch: --instantiation_dir
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [libmpi_cxx.la] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I Googled &quot;instantiation_dir openmpi&quot;, which led me to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://cia.vc/stats/project/OMPI?s_message=3">http://cia.vc/stats/project/OMPI?s_message=3</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where I see:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There's still something wrong with the C++ support, however; I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; errors about a template directory switch when compiling the C++ MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bindings (doesn't happen with PGI 9.0). Still working on this... it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; feels like it's still a Libtool issue because OMPI is not putting in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this compiler flag as far as I can tell:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {{{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ../../../libtool --tag=CXX --mode=link pgCC -g -version-info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0:0:0 -export-dynamic -o libmpi_cxx.la -rpath /home/jsquyres/bogus/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/libmpi.la -lnsl -lutil -lpthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: tpldir=Template.dir
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: rm -rf Template.dir
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: pgCC --prelink_objects --instantiation_dir Template.dir
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/mpicxx.o .libs/intercepts.o .libs/comm.o .libs/datatype.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/win.o .libs/file.o -Wl,--rpath
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Wl,/users/jsquyres/svn/ompi-1.3/ompi/.libs -Wl,--rpath
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Wl,/users/jsquyres/svn/ompi-1.3/orte/.libs -Wl,--rpath
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Wl,/users/jsquyres/svn/ompi-1.3/opal/.libs -Wl,--rpath
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Wl,/home/jsquyres/bogus/lib -L/users/jsquyres/svn/ompi-1.3/orte/.libs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/users/jsquyres/svn/ompi-1.3/opal/.libs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /users/jsquyres/svn/ompi-1.3/orte/.libs/libopen-rte.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /users/jsquyres/svn/ompi-1.3/opal/.libs/libopen-pal.so -ldl -lnsl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -lutil -lpthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pgCC-Error-Unknown switch: --instantiation_dir
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [libmpi_cxx.la] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }}}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I noticed the comment &quot;doesn't happen with PGI 9.0&quot;, so I re-did the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; entire process with PGI 9.0 instead of 10.0, but I get the same error!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any suggestions?  Let me know if I should provide full copies of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure and make output.  Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11492.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>Previous message:</strong> <a href="11490.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="11490.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11522.php">David Turner: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
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
