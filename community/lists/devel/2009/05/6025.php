<?
$subject_val = "Re: [OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 12:40:44 2009" -->
<!-- isoreceived="20090514164044" -->
<!-- sent="Thu, 14 May 2009 17:41:44 +0100" -->
<!-- isosent="20090514164144" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures on trunk? r21235" -->
<!-- id="1242319304.3702.39.camel_at_alpha" -->
<!-- inreplyto="8647FB6C-F672-4EF0-8445-2D5B785F75F8_at_cisco.com" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 12:41:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6026.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="6024.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6024.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6028.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6028.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Libtool is 2.2.6.  I use debian unstable so it's normally fairly
<br>
up-to-date, I suppose it's not impossible that a debian update has
<br>
broken things now that I think of it.
<br>
<p>I normally build in memfs for speed and have just rebooted my machine
<br>
now, a full rebuild has failed again with the same errors.
<br>
<p>All three symbols are shown as B according to nm so they should be
<br>
available.
<br>
<p>Actually further testing shows it's user error again, if I remove the
<br>
current install then the build succeeds, it must have been pickings up
<br>
the libopen-pal from the install location rather than from the current
<br>
build.
<br>
<p>Ashley Pittman,
<br>
<p>On Thu, 2009-05-14 at 11:50 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Hmm; odd.  I'm not getting these errors.  Just to be sure, I did a  
</span><br>
<span class="quotelev1">&gt; VPATH build and still am not getting these errors...  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are those symbols publicly available in libopen-pal.so?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does seem pretty weird that your libtool link line didn't pick up  
</span><br>
<span class="quotelev1">&gt; libopen-rte.so and libopen-pal.so...?  What version of LT are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 14, 2009, at 10:28 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; After a svn update earlier I'm getting build failures on the trunk,  
</span><br>
<span class="quotelev2">&gt; &gt; I've
</span><br>
<span class="quotelev2">&gt; &gt; tried the usual including a full clean checkout and am still getting  
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not doing anything special other than a VPATH build and this same
</span><br>
<span class="quotelev2">&gt; &gt; tree build last week, it's just the update that appears to have broken
</span><br>
<span class="quotelev2">&gt; &gt; things.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The configure line used was
</span><br>
<span class="quotelev2">&gt; &gt; ~/code/OpenMPI/ompi-trunk-tes/trunk/configure
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt; --prefix /mnt/home/debian/ashley/code/OpenMPI/install/ and I'm using  
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; tree at <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>, I hope this is the
</span><br>
<span class="quotelev2">&gt; &gt; correct one.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is the error the build fails with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh ../../../libtool --tag=CXX   --mode=link g++  -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt; &gt; -finline-functions -pthread  -export-dynamic   -o ompi_info  
</span><br>
<span class="quotelev2">&gt; &gt; components.o
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info.o output.o param.o version.o ../../../ompi/libmpi.la -lnsl
</span><br>
<span class="quotelev2">&gt; &gt; -lutil -lm
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: g++ -O3 -DNDEBUG -finline-functions -pthread
</span><br>
<span class="quotelev2">&gt; &gt; -o .libs/ompi_info components.o ompi_info.o output.o param.o version.o
</span><br>
<span class="quotelev2">&gt; &gt; -Wl,--export-dynamic  ../../../ompi/.libs/libmpi.so -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt; &gt; -pthread -Wl,-rpath -Wl,/mnt/home/debian/ashley/code/OpenMPI/install/ 
</span><br>
<span class="quotelev2">&gt; &gt; lib
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev2">&gt; &gt; `opal_maffinity_setup'
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev2">&gt; &gt; `opal_paffinity_alone'
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev2">&gt; &gt; `opal_paffinity_base_slot_list'
</span><br>
<span class="quotelev2">&gt; &gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory `/mnt/memfs/openmpi/ompi/tools/ompi_info'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory `/mnt/memfs/openmpi/ompi'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; ashley_at_alpha:/mnt/memfs/openmpi$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can provide more information if requested although as I say I don't
</span><br>
<span class="quotelev2">&gt; &gt; think I'm doing anything out of the ordinary.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ashley Pittman,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6026.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="6024.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6024.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6028.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6028.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
