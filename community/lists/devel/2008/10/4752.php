<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (v1.3) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 00:42:56 2008" -->
<!-- isoreceived="20081008044256" -->
<!-- sent="Wed, 8 Oct 2008 00:42:51 -0400" -->
<!-- isosent="20081008044251" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (v1.3) ===" -->
<!-- id="ea86ce220810072142g8b3d9c4y7d09e76b9309c4cd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="172FFB59-EA40-40B2-949E-3FF8CDB2AE0C_at_open-mpi.org" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 00:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4753.php">Terry Dontje: "Re: [OMPI devel] OFED release schedule"</a>
<li><strong>Previous message:</strong> <a href="4751.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<li><strong>In reply to:</strong> <a href="4751.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5238.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
Sorry about that.  I should have done a manual tarball build when I
<br>
finished with
<br>
the day's worth of CMRs to make sure I didn't miss something.  Will do
<br>
so next time.
<br>
Thanks Josh for figuring out what I missed!
<br>
<p>On Tue, Oct 7, 2008 at 11:25 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The build failure was caused because r19606 was not moved as part of the CMR
</span><br>
<span class="quotelev1">&gt; 1512 (it was an addition mentioned in the comments):
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/1512">https://svn.open-mpi.org/trac/ompi/ticket/1512</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you move over r19606 then the build should be fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 7, 2008, at 9:11 PM, MPI Team wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: Command returned a non-zero exist status (v1.3):
</span><br>
<span class="quotelev2">&gt;&gt;       make distcheck
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Start time: Tue Oct  7 21:00:26 EDT 2008
</span><br>
<span class="quotelev2">&gt;&gt; End time:   Tue Oct  7 21:11:07 EDT 2008
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include    -O3
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden -MT class/opal_graph.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; class/opal_graph.lo ../../opal/class/opal_graph.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT
</span><br>
<span class="quotelev2">&gt;&gt; class/opal_graph.lo -MD -MP -MF class/.deps/opal_graph.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/class/opal_graph.c  -fPIC -DPIC -o class/.libs/opal_graph.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo class/opal_atomic_lifo.lo | sed
</span><br>
<span class="quotelev2">&gt;&gt; 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include    -O3
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden -MT class/opal_atomic_lifo.lo -MD -MP -MF $depbase.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; -c -o class/opal_atomic_lifo.lo ../../opal/class/opal_atomic_lifo.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT
</span><br>
<span class="quotelev2">&gt;&gt; class/opal_atomic_lifo.lo -MD -MP -MF class/.deps/opal_atomic_lifo.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/class/opal_atomic_lifo.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev2">&gt;&gt; class/.libs/opal_atomic_lifo.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo class/opal_pointer_array.lo | sed
</span><br>
<span class="quotelev2">&gt;&gt; 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include    -O3
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden -MT class/opal_pointer_array.lo -MD -MP -MF $depbase.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; -c -o class/opal_pointer_array.lo ../../opal/class/opal_pointer_array.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT
</span><br>
<span class="quotelev2">&gt;&gt; class/opal_pointer_array.lo -MD -MP -MF class/.deps/opal_pointer_array.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; -c ../../opal/class/opal_pointer_array.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev2">&gt;&gt; class/.libs/opal_pointer_array.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo class/opal_value_array.lo | sed
</span><br>
<span class="quotelev2">&gt;&gt; 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include    -O3
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden -MT class/opal_value_array.lo -MD -MP -MF $depbase.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; -c -o class/opal_value_array.lo ../../opal/class/opal_value_array.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT
</span><br>
<span class="quotelev2">&gt;&gt; class/opal_value_array.lo -MD -MP -MF class/.deps/opal_value_array.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/class/opal_value_array.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev2">&gt;&gt; class/.libs/opal_value_array.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo memoryhooks/memory.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include    -O3
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden -MT memoryhooks/memory.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; memoryhooks/memory.lo ../../opal/memoryhooks/memory.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT
</span><br>
<span class="quotelev2">&gt;&gt; memoryhooks/memory.lo -MD -MP -MF memoryhooks/.deps/memory.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/memoryhooks/memory.c  -fPIC -DPIC -o memoryhooks/.libs/memory.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo runtime/opal_progress.lo | sed
</span><br>
<span class="quotelev2">&gt;&gt; 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include    -O3
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden -MT runtime/opal_progress.lo -MD -MP -MF $depbase.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; -o runtime/opal_progress.lo ../../opal/runtime/opal_progress.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT
</span><br>
<span class="quotelev2">&gt;&gt; runtime/opal_progress.lo -MD -MP -MF runtime/.deps/opal_progress.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/runtime/opal_progress.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev2">&gt;&gt; runtime/.libs/opal_progress.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo runtime/opal_finalize.lo | sed
</span><br>
<span class="quotelev2">&gt;&gt; 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include    -O3
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden -MT runtime/opal_finalize.lo -MD -MP -MF $depbase.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; -o runtime/opal_finalize.lo ../../opal/runtime/opal_finalize.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT
</span><br>
<span class="quotelev2">&gt;&gt; runtime/opal_finalize.lo -MD -MP -MF runtime/.deps/opal_finalize.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/runtime/opal_finalize.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev2">&gt;&gt; runtime/.libs/opal_finalize.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo runtime/opal_init.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include    -O3
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden -MT runtime/opal_init.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; runtime/opal_init.lo ../../opal/runtime/opal_init.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT
</span><br>
<span class="quotelev2">&gt;&gt; runtime/opal_init.lo -MD -MP -MF runtime/.deps/opal_init.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/runtime/opal_init.c  -fPIC -DPIC -o runtime/.libs/opal_init.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo runtime/opal_params.lo | sed
</span><br>
<span class="quotelev2">&gt;&gt; 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include    -O3
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden -MT runtime/opal_params.lo -MD -MP -MF $depbase.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; -o runtime/opal_params.lo ../../opal/runtime/opal_params.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT
</span><br>
<span class="quotelev2">&gt;&gt; runtime/opal_params.lo -MD -MP -MF runtime/.deps/opal_params.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/runtime/opal_params.c  -fPIC -DPIC -o runtime/.libs/opal_params.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo runtime/opal_cr.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa   -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include    -O3
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden -MT runtime/opal_cr.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; runtime/opal_cr.lo ../../opal/runtime/opal_cr.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal -I../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -I..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT
</span><br>
<span class="quotelev2">&gt;&gt; runtime/opal_cr.lo -MD -MP -MF runtime/.deps/opal_cr.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/runtime/opal_cr.c  -fPIC -DPIC -o runtime/.libs/opal_cr.o
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/runtime/opal_cr.c: In function `opal_cr_init':
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/runtime/opal_cr.c:273: error: `opal_cr_thread_use_if_avail'
</span><br>
<span class="quotelev2">&gt;&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/runtime/opal_cr.c:273: error: (Each undeclared identifier is
</span><br>
<span class="quotelev2">&gt;&gt; reported only once
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/runtime/opal_cr.c:273: error: for each function it appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [runtime/opal_cr.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.3/create-r19700/ompi/openmpi-1.3a1r19700/_build/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.3/create-r19700/ompi/openmpi-1.3a1r19700/_build/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.3/create-r19700/ompi/openmpi-1.3a1r19700/_build'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [distcheck] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; =======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your friendly daemon,
</span><br>
<span class="quotelev2">&gt;&gt; Cyrador
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; testing mailing list
</span><br>
<span class="quotelev2">&gt;&gt; testing_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4753.php">Terry Dontje: "Re: [OMPI devel] OFED release schedule"</a>
<li><strong>Previous message:</strong> <a href="4751.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<li><strong>In reply to:</strong> <a href="4751.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5238.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
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
