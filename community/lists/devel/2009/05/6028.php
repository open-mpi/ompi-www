<?
$subject_val = "Re: [OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 13:28:53 2009" -->
<!-- isoreceived="20090514172853" -->
<!-- sent="Thu, 14 May 2009 13:28:47 -0400" -->
<!-- isosent="20090514172847" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures on trunk? r21235" -->
<!-- id="27B5EEC8-3328-4C3C-BCFF-2C3254F65E29_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1242319304.3702.39.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build failures on trunk? r21235<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 13:28:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6029.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6027.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="6025.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6029.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6029.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  This may not be pilot error.  I build OMPI with a pre-installed  
<br>
OMPI all the time and they don't conflict during the build (i.e., the  
<br>
building OMPI always uses the libopen-rte and libopen-pal from the  
<br>
build tree, not the install tree).  Here's my link lines for ompi_info:
<br>
<p>/bin/sh ../../../libtool --tag=CXX   --mode=link g++  -g -Wall -Wundef  
<br>
-Wno-long-long -finline-functions -pthread  -export-dynamic   -o  
<br>
ompi_info components.o ompi_info.o output.o param.o version.o ../../../ 
<br>
ompi/libmpi.la -lnsl  -lutil -lm
<br>
libtool: link: g++ -g -Wall -Wundef -Wno-long-long -finline-functions - 
<br>
pthread -o .libs/ompi_info components.o ompi_info.o output.o param.o  
<br>
version.o -Wl,--export-dynamic  ../../../ompi/.libs/libmpi.so /users/ 
<br>
jsquyres/svn/ompi/orte/.libs/libopen-rte.so /users/jsquyres/svn/ompi/ 
<br>
opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm -pthread -Wl,-rpath - 
<br>
Wl,/home/jsquyres/bogus/lib
<br>
<p>Notice that libopen-rte.os and libopen-pal.so are explicitly mentioned  
<br>
by absolute path name.  Yours weren't.  I wonder why...?
<br>
<p><p>On May 14, 2009, at 12:41 PM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Libtool is 2.2.6.  I use debian unstable so it's normally fairly
</span><br>
<span class="quotelev1">&gt; up-to-date, I suppose it's not impossible that a debian update has
</span><br>
<span class="quotelev1">&gt; broken things now that I think of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I normally build in memfs for speed and have just rebooted my machine
</span><br>
<span class="quotelev1">&gt; now, a full rebuild has failed again with the same errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All three symbols are shown as B according to nm so they should be
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually further testing shows it's user error again, if I remove the
</span><br>
<span class="quotelev1">&gt; current install then the build succeeds, it must have been pickings up
</span><br>
<span class="quotelev1">&gt; the libopen-pal from the install location rather than from the current
</span><br>
<span class="quotelev1">&gt; build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 2009-05-14 at 11:50 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hmm; odd.  I'm not getting these errors.  Just to be sure, I did a
</span><br>
<span class="quotelev2">&gt; &gt; VPATH build and still am not getting these errors...  :-\
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are those symbols publicly available in libopen-pal.so?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It does seem pretty weird that your libtool link line didn't pick up
</span><br>
<span class="quotelev2">&gt; &gt; libopen-rte.so and libopen-pal.so...?  What version of LT are you  
</span><br>
<span class="quotelev1">&gt; using?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 14, 2009, at 10:28 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; All,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; After a svn update earlier I'm getting build failures on the  
</span><br>
<span class="quotelev1">&gt; trunk,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I've
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tried the usual including a full clean checkout and am still  
</span><br>
<span class="quotelev1">&gt; getting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; errors.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm not doing anything special other than a VPATH build and this  
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tree build last week, it's just the update that appears to have  
</span><br>
<span class="quotelev1">&gt; broken
</span><br>
<span class="quotelev3">&gt; &gt; &gt; things.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The configure line used was
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ~/code/OpenMPI/ompi-trunk-tes/trunk/configure
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --prefix /mnt/home/debian/ashley/code/OpenMPI/install/ and I'm  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tree at <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>, I hope this is the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; correct one.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This is the error the build fails with:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /bin/sh ../../../libtool --tag=CXX   --mode=link g++  -O3 -DNDEBUG
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -finline-functions -pthread  -export-dynamic   -o ompi_info
</span><br>
<span class="quotelev3">&gt; &gt; &gt; components.o
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi_info.o output.o param.o version.o ../../../ompi/libmpi.la - 
</span><br>
<span class="quotelev1">&gt; lnsl
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -lutil -lm
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libtool: link: g++ -O3 -DNDEBUG -finline-functions -pthread
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -o .libs/ompi_info components.o ompi_info.o output.o param.o  
</span><br>
<span class="quotelev1">&gt; version.o
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Wl,--export-dynamic  ../../../ompi/.libs/libmpi.so -lnsl -lutil  
</span><br>
<span class="quotelev1">&gt; -lm
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -pthread -Wl,-rpath -Wl,/mnt/home/debian/ashley/code/OpenMPI/ 
</span><br>
<span class="quotelev1">&gt; install/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; `opal_maffinity_setup'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; `opal_paffinity_alone'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; `opal_paffinity_base_slot_list'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: Leaving directory `/mnt/memfs/openmpi/ompi/tools/ 
</span><br>
<span class="quotelev1">&gt; ompi_info'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[1]: Leaving directory `/mnt/memfs/openmpi/ompi'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ashley_at_alpha:/mnt/memfs/openmpi$
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I can provide more information if requested although as I say I  
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev3">&gt; &gt; &gt; think I'm doing anything out of the ordinary.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ashley Pittman,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6029.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6027.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="6025.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6029.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6029.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
