<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (v1.3) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 23:25:38 2008" -->
<!-- isoreceived="20081008032538" -->
<!-- sent="Tue, 7 Oct 2008 23:25:09 -0400" -->
<!-- isosent="20081008032509" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (v1.3) ===" -->
<!-- id="172FFB59-EA40-40B2-949E-3FF8CDB2AE0C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200810080111.m981B7iZ008704_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (v1.3) ===<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 23:25:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4752.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<li><strong>Previous message:</strong> <a href="4750.php">Jeff Squyres: "[OMPI devel] OFED release schedule"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4752.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<li><strong>Reply:</strong> <a href="4752.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5238.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The build failure was caused because r19606 was not moved as part of  
<br>
the CMR 1512 (it was an addition mentioned in the comments):
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1512">https://svn.open-mpi.org/trac/ompi/ticket/1512</a>
<br>
<p>If you move over r19606 then the build should be fine.
<br>
<p>-- Josh
<br>
<p>On Oct 7, 2008, at 9:11 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (v1.3):
</span><br>
<span class="quotelev1">&gt;        make distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Tue Oct  7 21:00:26 EDT 2008
</span><br>
<span class="quotelev1">&gt; End time:   Tue Oct  7 21:11:07 EDT 2008
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
<span class="quotelev1">&gt; I. -I../../opal -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. - 
</span><br>
<span class="quotelev1">&gt; I.. -I../../opal/include -I../../orte/include -I../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -fvisibility=hidden -MT class/opal_graph.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; $depbase.Tpo -c -o class/opal_graph.lo ../../opal/class/ 
</span><br>
<span class="quotelev1">&gt; opal_graph.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../orte/include -I../ompi/include -I../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -fvisibility=hidden -MT class/ 
</span><br>
<span class="quotelev1">&gt; opal_graph.lo -MD -MP -MF class/.deps/opal_graph.Tpo -c ../../opal/ 
</span><br>
<span class="quotelev1">&gt; class/opal_graph.c  -fPIC -DPIC -o class/.libs/opal_graph.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo class/opal_atomic_lifo.lo | sed 's|[^/]*$|.deps/&amp;|;s| 
</span><br>
<span class="quotelev1">&gt; \.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. - 
</span><br>
<span class="quotelev1">&gt; I.. -I../../opal/include -I../../orte/include -I../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -fvisibility=hidden -MT class/opal_atomic_lifo.lo -MD -MP - 
</span><br>
<span class="quotelev1">&gt; MF $depbase.Tpo -c -o class/opal_atomic_lifo.lo ../../opal/class/ 
</span><br>
<span class="quotelev1">&gt; opal_atomic_lifo.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../orte/include -I../ompi/include -I../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -fvisibility=hidden -MT class/ 
</span><br>
<span class="quotelev1">&gt; opal_atomic_lifo.lo -MD -MP -MF class/.deps/opal_atomic_lifo.Tpo - 
</span><br>
<span class="quotelev1">&gt; c ../../opal/class/opal_atomic_lifo.c  -fPIC -DPIC -o class/.libs/ 
</span><br>
<span class="quotelev1">&gt; opal_atomic_lifo.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo class/opal_pointer_array.lo | sed 's|[^/]*$|.deps/ 
</span><br>
<span class="quotelev1">&gt; &amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. - 
</span><br>
<span class="quotelev1">&gt; I.. -I../../opal/include -I../../orte/include -I../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -fvisibility=hidden -MT class/opal_pointer_array.lo -MD -MP  
</span><br>
<span class="quotelev1">&gt; -MF $depbase.Tpo -c -o class/opal_pointer_array.lo ../../opal/class/ 
</span><br>
<span class="quotelev1">&gt; opal_pointer_array.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../orte/include -I../ompi/include -I../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -fvisibility=hidden -MT class/ 
</span><br>
<span class="quotelev1">&gt; opal_pointer_array.lo -MD -MP -MF class/.deps/ 
</span><br>
<span class="quotelev1">&gt; opal_pointer_array.Tpo -c ../../opal/class/opal_pointer_array.c  - 
</span><br>
<span class="quotelev1">&gt; fPIC -DPIC -o class/.libs/opal_pointer_array.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo class/opal_value_array.lo | sed 's|[^/]*$|.deps/&amp;|;s| 
</span><br>
<span class="quotelev1">&gt; \.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. - 
</span><br>
<span class="quotelev1">&gt; I.. -I../../opal/include -I../../orte/include -I../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -fvisibility=hidden -MT class/opal_value_array.lo -MD -MP - 
</span><br>
<span class="quotelev1">&gt; MF $depbase.Tpo -c -o class/opal_value_array.lo ../../opal/class/ 
</span><br>
<span class="quotelev1">&gt; opal_value_array.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../orte/include -I../ompi/include -I../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -fvisibility=hidden -MT class/ 
</span><br>
<span class="quotelev1">&gt; opal_value_array.lo -MD -MP -MF class/.deps/opal_value_array.Tpo - 
</span><br>
<span class="quotelev1">&gt; c ../../opal/class/opal_value_array.c  -fPIC -DPIC -o class/.libs/ 
</span><br>
<span class="quotelev1">&gt; opal_value_array.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo memoryhooks/memory.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo 
</span><br>
<span class="quotelev1">&gt; $||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. - 
</span><br>
<span class="quotelev1">&gt; I.. -I../../opal/include -I../../orte/include -I../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -fvisibility=hidden -MT memoryhooks/memory.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; $depbase.Tpo -c -o memoryhooks/memory.lo ../../opal/memoryhooks/ 
</span><br>
<span class="quotelev1">&gt; memory.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../orte/include -I../ompi/include -I../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -fvisibility=hidden -MT memoryhooks/ 
</span><br>
<span class="quotelev1">&gt; memory.lo -MD -MP -MF memoryhooks/.deps/memory.Tpo -c ../../opal/ 
</span><br>
<span class="quotelev1">&gt; memoryhooks/memory.c  -fPIC -DPIC -o memoryhooks/.libs/memory.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo runtime/opal_progress.lo | sed 's|[^/]*$|.deps/&amp;|;s| 
</span><br>
<span class="quotelev1">&gt; \.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. - 
</span><br>
<span class="quotelev1">&gt; I.. -I../../opal/include -I../../orte/include -I../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -fvisibility=hidden -MT runtime/opal_progress.lo -MD -MP - 
</span><br>
<span class="quotelev1">&gt; MF $depbase.Tpo -c -o runtime/opal_progress.lo ../../opal/runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_progress.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../orte/include -I../ompi/include -I../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -fvisibility=hidden -MT runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_progress.lo -MD -MP -MF runtime/.deps/opal_progress.Tpo - 
</span><br>
<span class="quotelev1">&gt; c ../../opal/runtime/opal_progress.c  -fPIC -DPIC -o runtime/.libs/ 
</span><br>
<span class="quotelev1">&gt; opal_progress.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo runtime/opal_finalize.lo | sed 's|[^/]*$|.deps/&amp;|;s| 
</span><br>
<span class="quotelev1">&gt; \.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. - 
</span><br>
<span class="quotelev1">&gt; I.. -I../../opal/include -I../../orte/include -I../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -fvisibility=hidden -MT runtime/opal_finalize.lo -MD -MP - 
</span><br>
<span class="quotelev1">&gt; MF $depbase.Tpo -c -o runtime/opal_finalize.lo ../../opal/runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_finalize.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../orte/include -I../ompi/include -I../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -fvisibility=hidden -MT runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_finalize.lo -MD -MP -MF runtime/.deps/opal_finalize.Tpo - 
</span><br>
<span class="quotelev1">&gt; c ../../opal/runtime/opal_finalize.c  -fPIC -DPIC -o runtime/.libs/ 
</span><br>
<span class="quotelev1">&gt; opal_finalize.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo runtime/opal_init.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo 
</span><br>
<span class="quotelev1">&gt; $||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. - 
</span><br>
<span class="quotelev1">&gt; I.. -I../../opal/include -I../../orte/include -I../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -fvisibility=hidden -MT runtime/opal_init.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; $depbase.Tpo -c -o runtime/opal_init.lo ../../opal/runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_init.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../orte/include -I../ompi/include -I../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -fvisibility=hidden -MT runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_init.lo -MD -MP -MF runtime/.deps/opal_init.Tpo -c ../../opal/ 
</span><br>
<span class="quotelev1">&gt; runtime/opal_init.c  -fPIC -DPIC -o runtime/.libs/opal_init.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo runtime/opal_params.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo 
</span><br>
<span class="quotelev1">&gt; $||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. - 
</span><br>
<span class="quotelev1">&gt; I.. -I../../opal/include -I../../orte/include -I../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -fvisibility=hidden -MT runtime/opal_params.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; $depbase.Tpo -c -o runtime/opal_params.lo ../../opal/runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_params.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../orte/include -I../ompi/include -I../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -fvisibility=hidden -MT runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_params.lo -MD -MP -MF runtime/.deps/opal_params.Tpo -c ../../ 
</span><br>
<span class="quotelev1">&gt; opal/runtime/opal_params.c  -fPIC -DPIC -o runtime/.libs/opal_params.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo runtime/opal_cr.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo 
</span><br>
<span class="quotelev1">&gt; $||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. - 
</span><br>
<span class="quotelev1">&gt; I.. -I../../opal/include -I../../orte/include -I../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -fvisibility=hidden -MT runtime/opal_cr.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; $depbase.Tpo -c -o runtime/opal_cr.lo ../../opal/runtime/opal_cr.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../orte/include -I../ompi/include -I../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -fvisibility=hidden -MT runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_cr.lo -MD -MP -MF runtime/.deps/opal_cr.Tpo -c ../../opal/ 
</span><br>
<span class="quotelev1">&gt; runtime/opal_cr.c  -fPIC -DPIC -o runtime/.libs/opal_cr.o
</span><br>
<span class="quotelev1">&gt; ../../opal/runtime/opal_cr.c: In function `opal_cr_init':
</span><br>
<span class="quotelev1">&gt; ../../opal/runtime/opal_cr.c:273: error:  
</span><br>
<span class="quotelev1">&gt; `opal_cr_thread_use_if_avail' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../opal/runtime/opal_cr.c:273: error: (Each undeclared  
</span><br>
<span class="quotelev1">&gt; identifier is reported only once
</span><br>
<span class="quotelev1">&gt; ../../opal/runtime/opal_cr.c:273: error: for each function it  
</span><br>
<span class="quotelev1">&gt; appears in.)
</span><br>
<span class="quotelev1">&gt; make[3]: *** [runtime/opal_cr.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/v1.3/create-r19700/ompi/openmpi-1.3a1r19700/_build/opal'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/v1.3/create-r19700/ompi/openmpi-1.3a1r19700/_build/opal'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/v1.3/create-r19700/ompi/openmpi-1.3a1r19700/_build'
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
<li><strong>Next message:</strong> <a href="4752.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<li><strong>Previous message:</strong> <a href="4750.php">Jeff Squyres: "[OMPI devel] OFED release schedule"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4752.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<li><strong>Reply:</strong> <a href="4752.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5238.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
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
