<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI with PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 16:36:57 2009" -->
<!-- isoreceived="20091209213657" -->
<!-- sent="Wed, 9 Dec 2009 16:36:51 -0500" -->
<!-- isosent="20091209213651" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI with PGI compilers" -->
<!-- id="EBD9F8A4-A619-4D89-91FD-EA167EDBD66B_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 16:36:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11487.php">Jim Kusznir: "[OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>Previous message:</strong> <a href="11485.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11484.php">David Turner: "[OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11498.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11498.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's the commit message for r22273.  Also see the commit message for r22274 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/22274">https://svn.open-mpi.org/trac/ompi/changeset/22274</a>).
<br>
<p>Meaning: the fix is now in the SVN trunk; it hasn't migrated over to the v1.4 and v1.5 branches yet.  It's an autogen.sh fix -- you should be able to download autogen.sh from our SVN trunk and run it on your 1.4 tree.
<br>
<p><p><p>On Dec 9, 2009, at 4:23 PM, David Turner wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
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
<span class="quotelev1">&gt;    .libs/mpicxx.o .libs/intercepts.o .libs/comm.o .libs/datatype.o
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11487.php">Jim Kusznir: "[OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>Previous message:</strong> <a href="11485.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11484.php">David Turner: "[OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11498.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11498.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
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
