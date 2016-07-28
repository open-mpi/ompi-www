<?
$subject_val = "Re: [OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 11:50:56 2009" -->
<!-- isoreceived="20090514155056" -->
<!-- sent="Thu, 14 May 2009 11:50:51 -0400" -->
<!-- isosent="20090514155051" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures on trunk? r21235" -->
<!-- id="8647FB6C-F672-4EF0-8445-2D5B785F75F8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1242311307.17002.7.camel_at_alpha" -->
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
<strong>Date:</strong> 2009-05-14 11:50:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6025.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6023.php">Ralph Castain: "[OMPI devel] OMPI 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="6022.php">Ashley Pittman: "[OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6025.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6025.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6037.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm; odd.  I'm not getting these errors.  Just to be sure, I did a  
<br>
VPATH build and still am not getting these errors...  :-\
<br>
<p>Are those symbols publicly available in libopen-pal.so?
<br>
<p>It does seem pretty weird that your libtool link line didn't pick up  
<br>
libopen-rte.so and libopen-pal.so...?  What version of LT are you using?
<br>
<p><p>On May 14, 2009, at 10:28 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After a svn update earlier I'm getting build failures on the trunk,  
</span><br>
<span class="quotelev1">&gt; I've
</span><br>
<span class="quotelev1">&gt; tried the usual including a full clean checkout and am still getting  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not doing anything special other than a VPATH build and this same
</span><br>
<span class="quotelev1">&gt; tree build last week, it's just the update that appears to have broken
</span><br>
<span class="quotelev1">&gt; things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure line used was
</span><br>
<span class="quotelev1">&gt; ~/code/OpenMPI/ompi-trunk-tes/trunk/configure
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; --prefix /mnt/home/debian/ashley/code/OpenMPI/install/ and I'm using  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; tree at <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>, I hope this is the
</span><br>
<span class="quotelev1">&gt; correct one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the error the build fails with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link g++  -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -pthread  -export-dynamic   -o ompi_info  
</span><br>
<span class="quotelev1">&gt; components.o
</span><br>
<span class="quotelev1">&gt; ompi_info.o output.o param.o version.o ../../../ompi/libmpi.la -lnsl
</span><br>
<span class="quotelev1">&gt; -lutil -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: g++ -O3 -DNDEBUG -finline-functions -pthread
</span><br>
<span class="quotelev1">&gt; -o .libs/ompi_info components.o ompi_info.o output.o param.o version.o
</span><br>
<span class="quotelev1">&gt; -Wl,--export-dynamic  ../../../ompi/.libs/libmpi.so -lnsl -lutil -lm
</span><br>
<span class="quotelev1">&gt; -pthread -Wl,-rpath -Wl,/mnt/home/debian/ashley/code/OpenMPI/install/ 
</span><br>
<span class="quotelev1">&gt; lib
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `opal_maffinity_setup'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `opal_paffinity_alone'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `opal_paffinity_base_slot_list'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/mnt/memfs/openmpi/ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/mnt/memfs/openmpi/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; ashley_at_alpha:/mnt/memfs/openmpi$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can provide more information if requested although as I say I don't
</span><br>
<span class="quotelev1">&gt; think I'm doing anything out of the ordinary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman,
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
<li><strong>Next message:</strong> <a href="6025.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6023.php">Ralph Castain: "[OMPI devel] OMPI 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="6022.php">Ashley Pittman: "[OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6025.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6025.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6037.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
