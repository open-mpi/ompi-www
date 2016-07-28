<?
$subject_val = "[OMPI users] Problem building OpenMPI with PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 16:23:16 2009" -->
<!-- isoreceived="20091209212316" -->
<!-- sent="Wed, 09 Dec 2009 13:23:10 -0800" -->
<!-- isosent="20091209212310" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="[OMPI users] Problem building OpenMPI with PGI compilers" -->
<!-- id="4B20153E.6010805_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problem building OpenMPI with PGI compilers<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 16:23:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11485.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11483.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11486.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11486.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11488.php">Gus Correa: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Maybe reply:</strong> <a href="11522.php">David Turner: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>My first ever attempt to build OpenMPI.  Platform is Sun Sunfire x4600
<br>
M2 servers, running Scientific Linux version 5.3.  Trying to build
<br>
OpenMPI 1.4 (as of today; same problems yesterday with 1.3.4).
<br>
Trying to use PGI version 10.0.
<br>
<p>As a first attempt, I set CC, CXX, F77, and FC, then did &quot;configure&quot;
<br>
and &quot;make&quot;.  Make ends with:
<br>
<p>libtool: link:  pgCC --prelink_objects --instantiation_dir Template.dir 
<br>
&nbsp;&nbsp;&nbsp;.libs/mpicxx.o .libs/intercepts.o .libs/comm.o .libs/datatype.o 
<br>
.libs/win.o .libs/file.o   -Wl,--rpath 
<br>
-Wl,/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/ompi/.libs 
<br>
-Wl,--rpath 
<br>
-Wl,/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/orte/.libs 
<br>
-Wl,--rpath 
<br>
-Wl,/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/opal/.libs 
<br>
-Wl,--rpath -Wl,/global/common/tesla/usg/openmpi/1.4/lib 
<br>
-L/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/orte/.libs 
<br>
-L/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/opal/.libs 
<br>
../../../ompi/.libs/libmpi.so 
<br>
/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/orte/.libs/libopen-rte.so 
<br>
/project/projectdirs/mpccc/usg/software/tnt/openmpi/openmpi-1.4/opal/.libs/libopen-pal.so 
<br>
-ldl -lnsl -lutil -lpthread
<br>
pgCC-Error-Unknown switch: --instantiation_dir
<br>
make[2]: *** [libmpi_cxx.la] Error 1
<br>
<p>So I Googled &quot;instantiation_dir openmpi&quot;, which led me to:
<br>
<p><a href="http://cia.vc/stats/project/OMPI?s_message=3">http://cia.vc/stats/project/OMPI?s_message=3</a>
<br>
<p>where I see:
<br>
<p>There's still something wrong with the C++ support, however; I get
<br>
errors about a template directory switch when compiling the C++ MPI
<br>
bindings (doesn't happen with PGI 9.0). Still working on this... it
<br>
feels like it's still a Libtool issue because OMPI is not putting in
<br>
this compiler flag as far as I can tell:
<br>
<p>{{{
<br>
/bin/sh ../../../libtool --tag=CXX --mode=link pgCC -g -version-info 
<br>
0:0:0 -export-dynamic -o libmpi_cxx.la -rpath /home/jsquyres/bogus/lib 
<br>
mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo 
<br>
../../../ompi/libmpi.la -lnsl -lutil -lpthread
<br>
libtool: link: tpldir=Template.dir
<br>
libtool: link: rm -rf Template.dir
<br>
libtool: link: pgCC --prelink_objects --instantiation_dir Template.dir 
<br>
.libs/mpicxx.o .libs/intercepts.o .libs/comm.o .libs/datatype.o 
<br>
.libs/win.o .libs/file.o -Wl,--rpath 
<br>
-Wl,/users/jsquyres/svn/ompi-1.3/ompi/.libs -Wl,--rpath 
<br>
-Wl,/users/jsquyres/svn/ompi-1.3/orte/.libs -Wl,--rpath 
<br>
-Wl,/users/jsquyres/svn/ompi-1.3/opal/.libs -Wl,--rpath 
<br>
-Wl,/home/jsquyres/bogus/lib -L/users/jsquyres/svn/ompi-1.3/orte/.libs 
<br>
-L/users/jsquyres/svn/ompi-1.3/opal/.libs ../../../ompi/.libs/libmpi.so 
<br>
/users/jsquyres/svn/ompi-1.3/orte/.libs/libopen-rte.so 
<br>
/users/jsquyres/svn/ompi-1.3/opal/.libs/libopen-pal.so -ldl -lnsl -lutil 
<br>
-lpthread
<br>
pgCC-Error-Unknown switch: --instantiation_dir
<br>
make: *** [libmpi_cxx.la] Error 1
<br>
}}}
<br>
<p>I noticed the comment &quot;doesn't happen with PGI 9.0&quot;, so I re-did the
<br>
entire process with PGI 9.0 instead of 10.0, but I get the same error!
<br>
<p>Any suggestions?  Let me know if I should provide full copies of the
<br>
configure and make output.  Thanks!
<br>
<p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11485.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11483.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11486.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11486.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11488.php">Gus Correa: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Maybe reply:</strong> <a href="11522.php">David Turner: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
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
