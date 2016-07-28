<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 07:05:26 2007" -->
<!-- isoreceived="20071109120526" -->
<!-- sent="Fri, 9 Nov 2007 07:05:19 -0500" -->
<!-- isosent="20071109120519" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE ===" -->
<!-- id="20B18BB9-1295-498E-A00A-5C8F686A8EC8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200711090213.lA92D8A2004953_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE ===<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-09 07:05:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2600.php">Jeff Squyres: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2598.php">Torje Henriksen: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2648.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Maybe reply:</strong> <a href="2648.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2760.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2906.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3229.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/07/4312.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/07/4437.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry about this. I fixed the problem in r16706.
<br>
<p>It seems that an old version of BLCR is installed in the default path  
<br>
on the IU machine that builds the Open MPI tarballs. This has not  
<br>
been a problem in the past since I have not been using any new  
<br>
features of BLCR. Since I am starting to use some of this new  
<br>
functionality the IU machine was not able to find the right symbols  
<br>
and died. I implemented some configure checks to work around this.
<br>
<p>Sorry again,
<br>
Josh
<br>
<p>On Nov 8, 2007, at 9:13 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev1">&gt;        make -j 4 distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Thu Nov  8 21:00:26 EST 2007
</span><br>
<span class="quotelev1">&gt; End time:   Thu Nov  8 21:13:07 EST 2007
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../opal/include -I../orte/include -I../ompi/include -I../opal/ 
</span><br>
<span class="quotelev1">&gt; mca/paffinity/linux/plpa/src/libplpa -I../../opal   -I../.. -I.. - 
</span><br>
<span class="quotelev1">&gt; I../../opal/include -I../../orte/include -I../../ompi/include    - 
</span><br>
<span class="quotelev1">&gt; O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT  
</span><br>
<span class="quotelev1">&gt; threads/condition.lo -MD -MP -MF $depbase.Tpo -c -o threads/ 
</span><br>
<span class="quotelev1">&gt; condition.lo ../../opal/threads/condition.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/ 
</span><br>
<span class="quotelev1">&gt; src/libplpa -I../../opal -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -MT runtime/opal_params.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; runtime/.deps/opal_params.Tpo -c ../../opal/runtime/opal_params.c  - 
</span><br>
<span class="quotelev1">&gt; fPIC -DPIC -o runtime/.libs/opal_params.o
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/ 
</span><br>
<span class="quotelev1">&gt; src/libplpa -I../../opal -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -MT runtime/opal_cr.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; runtime/.deps/opal_cr.Tpo -c ../../opal/runtime/opal_cr.c  -fPIC - 
</span><br>
<span class="quotelev1">&gt; DPIC -o runtime/.libs/opal_cr.o
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/ 
</span><br>
<span class="quotelev1">&gt; src/libplpa -I../../opal -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -MT threads/condition.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; threads/.deps/condition.Tpo -c ../../opal/threads/condition.c  - 
</span><br>
<span class="quotelev1">&gt; fPIC -DPIC -o threads/.libs/condition.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo threads/mutex.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../opal/include -I../orte/include -I../ompi/include -I../opal/ 
</span><br>
<span class="quotelev1">&gt; mca/paffinity/linux/plpa/src/libplpa -I../../opal   -I../.. -I.. - 
</span><br>
<span class="quotelev1">&gt; I../../opal/include -I../../orte/include -I../../ompi/include    - 
</span><br>
<span class="quotelev1">&gt; O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT  
</span><br>
<span class="quotelev1">&gt; threads/mutex.lo -MD -MP -MF $depbase.Tpo -c -o threads/ 
</span><br>
<span class="quotelev1">&gt; mutex.lo ../../opal/threads/mutex.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; depbase=`echo threads/thread.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../opal/include -I../orte/include -I../ompi/include -I../opal/ 
</span><br>
<span class="quotelev1">&gt; mca/paffinity/linux/plpa/src/libplpa -I../../opal   -I../.. -I.. - 
</span><br>
<span class="quotelev1">&gt; I../../opal/include -I../../orte/include -I../../ompi/include    - 
</span><br>
<span class="quotelev1">&gt; O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT  
</span><br>
<span class="quotelev1">&gt; threads/thread.lo -MD -MP -MF $depbase.Tpo -c -o threads/ 
</span><br>
<span class="quotelev1">&gt; thread.lo ../../opal/threads/thread.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/ 
</span><br>
<span class="quotelev1">&gt; src/libplpa -I../../opal -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -MT threads/mutex.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; threads/.deps/mutex.Tpo -c ../../opal/threads/mutex.c  -fPIC -DPIC - 
</span><br>
<span class="quotelev1">&gt; o threads/.libs/mutex.o
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/ 
</span><br>
<span class="quotelev1">&gt; src/libplpa -I../../opal -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -MT threads/thread.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; threads/.deps/thread.Tpo -c ../../opal/threads/thread.c  -fPIC - 
</span><br>
<span class="quotelev1">&gt; DPIC -o threads/.libs/thread.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo threads/tsd.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../opal/include -I../orte/include -I../ompi/include -I../opal/ 
</span><br>
<span class="quotelev1">&gt; mca/paffinity/linux/plpa/src/libplpa -I../../opal   -I../.. -I.. - 
</span><br>
<span class="quotelev1">&gt; I../../opal/include -I../../orte/include -I../../ompi/include    - 
</span><br>
<span class="quotelev1">&gt; O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT  
</span><br>
<span class="quotelev1">&gt; threads/tsd.lo -MD -MP -MF $depbase.Tpo -c -o threads/tsd.lo ../../ 
</span><br>
<span class="quotelev1">&gt; opal/threads/tsd.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/ 
</span><br>
<span class="quotelev1">&gt; src/libplpa -I../../opal -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -MT threads/tsd.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; threads/.deps/tsd.Tpo -c ../../opal/threads/tsd.c  -fPIC -DPIC -o  
</span><br>
<span class="quotelev1">&gt; threads/.libs/tsd.o
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing -pthread  -export-dynamic   - 
</span><br>
<span class="quotelev1">&gt; o libopen-pal.la -rpath /home/mpiteam/openmpi/nightly-tarball-build- 
</span><br>
<span class="quotelev1">&gt; root/trunk/create-r16694/ompi/openmpi-1.3a1r16694/_inst/lib  class/ 
</span><br>
<span class="quotelev1">&gt; opal_free_list.lo class/opal_hash_table.lo class/opal_list.lo class/ 
</span><br>
<span class="quotelev1">&gt; opal_object.lo class/opal_atomic_lifo.lo class/opal_value_array.lo  
</span><br>
<span class="quotelev1">&gt; memoryhooks/memory.lo runtime/opal_progress.lo runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_finalize.lo runtime/opal_init.lo runtime/opal_params.lo  
</span><br>
<span class="quotelev1">&gt; runtime/opal_cr.lo threads/condition.lo threads/mutex.lo threads/ 
</span><br>
<span class="quotelev1">&gt; thread.lo threads/tsd.lo  ../opal/libltdl/libltdlc.la asm/libasm.la  
</span><br>
<span class="quotelev1">&gt; event/libevent.la mca/base/libmca_base.la util/libopalutil.la mca/ 
</span><br>
<span class="quotelev1">&gt; backtrace/libmca_backtrace.la mca/backtrace/execinfo/ 
</span><br>
<span class="quotelev1">&gt; libmca_backtrace_execinfo.la  mca/crs/libmca_crs.la  mca/ 
</span><br>
<span class="quotelev1">&gt; installdirs/libmca_installdirs.la mca/installdirs/config/ 
</span><br>
<span class="quotelev1">&gt; libmca_installdirs_config.la mca/installdirs/env/ 
</span><br>
<span class="quotelev1">&gt; libmca_installdirs_env.la  mca/maffinity/libmca_maffinity.la  mca/ 
</span><br>
<span class="quotelev1">&gt; memcpy/libmca_memcpy.la  mca/memory/libmca_memory.la mca/memory/ 
</span><br>
<span class="quotelev1">&gt; ptmalloc2/libmca_memory_ptmalloc2.la  mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; libmca_paffinity.la  mca/timer/libmca_timer.la mca/timer/linux/ 
</span><br>
<span class="quotelev1">&gt; libmca_timer_linux.la  -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -shared  class/.libs/opal_free_list.o  
</span><br>
<span class="quotelev1">&gt; class/.libs/opal_hash_table.o class/.libs/opal_list.o class/.libs/ 
</span><br>
<span class="quotelev1">&gt; opal_object.o class/.libs/opal_atomic_lifo.o class/.libs/ 
</span><br>
<span class="quotelev1">&gt; opal_value_array.o memoryhooks/.libs/memory.o runtime/.libs/ 
</span><br>
<span class="quotelev1">&gt; opal_progress.o runtime/.libs/opal_finalize.o runtime/.libs/ 
</span><br>
<span class="quotelev1">&gt; opal_init.o runtime/.libs/opal_params.o runtime/.libs/opal_cr.o  
</span><br>
<span class="quotelev1">&gt; threads/.libs/condition.o threads/.libs/mutex.o threads/.libs/ 
</span><br>
<span class="quotelev1">&gt; thread.o threads/.libs/tsd.o  -Wl,--whole-archive ../opal/ 
</span><br>
<span class="quotelev1">&gt; libltdl/.libs/libltdlc.a asm/.libs/libasm.a event/.libs/libevent.a  
</span><br>
<span class="quotelev1">&gt; mca/base/.libs/libmca_base.a util/.libs/libopalutil.a mca/ 
</span><br>
<span class="quotelev1">&gt; backtrace/.libs/libmca_backtrace.a mca/backtrace/execinfo/.libs/ 
</span><br>
<span class="quotelev1">&gt; libmca_backtrace_execinfo.a mca/crs/.libs/libmca_crs.a mca/ 
</span><br>
<span class="quotelev1">&gt; installdirs/.libs/libmca_installdirs.a mca/installdirs/config/.libs/ 
</span><br>
<span class="quotelev1">&gt; libmca_installdirs_config.a mca/installdirs/env/.libs/ 
</span><br>
<span class="quotelev1">&gt; libmca_installdirs_env.a mca/maffinity/.libs/libmca_maffinity.a mca/ 
</span><br>
<span class="quotelev1">&gt; memcpy/.libs/libmca_memcpy.a mca/memory/.libs/libmca_memory.a mca/ 
</span><br>
<span class="quotelev1">&gt; memory/ptmalloc2/.libs/libmca_memory_ptmalloc2.a mca/ 
</span><br>
<span class="quotelev1">&gt; paffinity/.libs/libmca_paffinity.a mca/timer/.libs/libmca_timer.a  
</span><br>
<span class="quotelev1">&gt; mca/timer/linux/.libs/libmca_timer_linux.a -Wl,--no-whole-archive  - 
</span><br>
<span class="quotelev1">&gt; ldl -lnsl -lutil -lm  -pthread   -pthread -Wl,-soname -Wl,libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0 -o .libs/libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libopen-pal.so.0&quot; &amp;&amp; ln -s  
</span><br>
<span class="quotelev1">&gt; &quot;libopen-pal.so.0.0.0&quot; &quot;libopen-pal.so.0&quot;)
</span><br>
<span class="quotelev1">&gt; libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libopen-pal.so&quot; &amp;&amp; ln -s  
</span><br>
<span class="quotelev1">&gt; &quot;libopen-pal.so.0.0.0&quot; &quot;libopen-pal.so&quot;)
</span><br>
<span class="quotelev1">&gt; libtool: link: creating libopen-pal.la
</span><br>
<span class="quotelev1">&gt; libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libopen-pal.la&quot; &amp;&amp; ln -s &quot;../ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.la&quot; &quot;libopen-pal.la&quot; )
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r16694/ompi/openmpi-1.3a1r16694/_build/opal'
</span><br>
<span class="quotelev1">&gt; Making all in mca/crs/blcr
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r16694/ompi/openmpi-1.3a1r16694/_build/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/crs/blcr'
</span><br>
<span class="quotelev1">&gt; depbase=`echo crs_blcr_component.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo 
</span><br>
<span class="quotelev1">&gt; $||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool --tag=CC   --mode=compile gcc - 
</span><br>
<span class="quotelev1">&gt; DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../../ompi/include -I../../../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../../../../../opal/mca/crs/blcr   - 
</span><br>
<span class="quotelev1">&gt; I../../../../.. -I../../../.. -I../../../../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../../../../orte/include -I../../../../../ompi/include    -O3 - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT  
</span><br>
<span class="quotelev1">&gt; crs_blcr_component.lo -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; crs_blcr_component.lo ../../../../../opal/mca/crs/blcr/ 
</span><br>
<span class="quotelev1">&gt; crs_blcr_component.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; depbase=`echo crs_blcr_module.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo 
</span><br>
<span class="quotelev1">&gt; $||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool --tag=CC   --mode=compile gcc - 
</span><br>
<span class="quotelev1">&gt; DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../../ompi/include -I../../../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../../../../../opal/mca/crs/blcr   - 
</span><br>
<span class="quotelev1">&gt; I../../../../.. -I../../../.. -I../../../../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../../../../orte/include -I../../../../../ompi/include    -O3 - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT  
</span><br>
<span class="quotelev1">&gt; crs_blcr_module.lo -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; crs_blcr_module.lo ../../../../../opal/mca/crs/blcr/ 
</span><br>
<span class="quotelev1">&gt; crs_blcr_module.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../../orte/include -I../../../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; I../../../../opal/mca/paffinity/linux/plpa/src/libplpa - 
</span><br>
<span class="quotelev1">&gt; I../../../../../opal/mca/crs/blcr -I../../../../.. -I../../../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../../../opal/include -I../../../../../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../../../../../ompi/include -O3 -DNDEBUG -finline-functions -fno- 
</span><br>
<span class="quotelev1">&gt; strict-aliasing -pthread -MT crs_blcr_module.lo -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt; crs_blcr_module.Tpo -c ../../../../../opal/mca/crs/blcr/ 
</span><br>
<span class="quotelev1">&gt; crs_blcr_module.c  -fPIC -DPIC -o .libs/crs_blcr_module.o
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../../orte/include -I../../../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; I../../../../opal/mca/paffinity/linux/plpa/src/libplpa - 
</span><br>
<span class="quotelev1">&gt; I../../../../../opal/mca/crs/blcr -I../../../../.. -I../../../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../../../opal/include -I../../../../../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../../../../../ompi/include -O3 -DNDEBUG -finline-functions -fno- 
</span><br>
<span class="quotelev1">&gt; strict-aliasing -pthread -MT crs_blcr_component.lo -MD -MP - 
</span><br>
<span class="quotelev1">&gt; MF .deps/crs_blcr_component.Tpo -c ../../../../../opal/mca/crs/blcr/ 
</span><br>
<span class="quotelev1">&gt; crs_blcr_component.c  -fPIC -DPIC -o .libs/crs_blcr_component.o
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/crs/blcr/crs_blcr_module.c: In function  
</span><br>
<span class="quotelev1">&gt; `opal_crs_blcr_thread_callback':
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/crs/blcr/crs_blcr_module.c:634: error:  
</span><br>
<span class="quotelev1">&gt; structure has no member named `requester'
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/crs/blcr/crs_blcr_module.c:635: error:  
</span><br>
<span class="quotelev1">&gt; `CR_CHECKPOINT_OMIT' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/crs/blcr/crs_blcr_module.c:635: error:  
</span><br>
<span class="quotelev1">&gt; (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/crs/blcr/crs_blcr_module.c:635: error: for  
</span><br>
<span class="quotelev1">&gt; each function it appears in.)
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/crs/blcr/crs_blcr_module.c:640: error:  
</span><br>
<span class="quotelev1">&gt; structure has no member named `requester'
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/crs/blcr/crs_blcr_module.c: In function  
</span><br>
<span class="quotelev1">&gt; `opal_crs_blcr_signal_callback':
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/crs/blcr/crs_blcr_module.c:682: error:  
</span><br>
<span class="quotelev1">&gt; structure has no member named `requester'
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/crs/blcr/crs_blcr_module.c:683: error:  
</span><br>
<span class="quotelev1">&gt; `CR_CHECKPOINT_OMIT' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; make[3]: *** [crs_blcr_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r16694/ompi/openmpi-1.3a1r16694/_build/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/crs/blcr'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r16694/ompi/openmpi-1.3a1r16694/_build/opal'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r16694/ompi/openmpi-1.3a1r16694/_build'
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 2
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2600.php">Jeff Squyres: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2598.php">Torje Henriksen: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2648.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Maybe reply:</strong> <a href="2648.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2760.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2906.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3229.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/07/4312.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/07/4437.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
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
