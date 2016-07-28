<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 21:19:50 2008" -->
<!-- isoreceived="20080213021950" -->
<!-- sent="Tue, 12 Feb 2008 21:19:43 -0500" -->
<!-- isosent="20080213021943" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE ===" -->
<!-- id="C67FFA9D-13DB-483A-A47F-A54079A738DE_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200802130215.m1D2FZ04023601_at_eddie.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 21:19:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3230.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="3228.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/07/4312.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r17440 fix this issue. It's too easy :)
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Feb 12, 2008, at 9:15 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev1">&gt;       make -j 4 distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Tue Feb 12 21:00:13 EST 2008
</span><br>
<span class="quotelev1">&gt; End time:   Tue Feb 12 21:15:34 EST 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../../../ompi/datatype -I../../.. -I../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../opal/include -I../../../orte/include -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -MT dt_match_size.lo -MD -MP -MF .deps/dt_match_size.Tpo - 
</span><br>
<span class="quotelev1">&gt; c ../../../ompi/datatype/dt_match_size.c  -fPIC -DPIC -o .libs/ 
</span><br>
<span class="quotelev1">&gt; dt_match_size.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo position.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal/include -I../../orte/include -I../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; datatype   -I../../.. -I../.. -I../../../opal/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../../ompi/include    -O3 -DNDEBUG -finline- 
</span><br>
<span class="quotelev1">&gt; functions -fno-strict-aliasing -pthread -MT position.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; $depbase.Tpo -c -o position.lo ../../../ompi/datatype/position.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../../../ompi/datatype -I../../.. -I../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../opal/include -I../../../orte/include -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -MT convertor.lo -MD -MP -MF .deps/convertor.Tpo -c ../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/datatype/convertor.c  -fPIC -DPIC -o .libs/convertor.o
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../../../ompi/datatype -I../../.. -I../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../opal/include -I../../../orte/include -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -MT position.lo -MD -MP -MF .deps/position.Tpo -c ../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/datatype/position.c  -fPIC -DPIC -o .libs/position.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo copy_functions.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal/include -I../../orte/include -I../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; datatype   -I../../.. -I../.. -I../../../opal/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../../ompi/include    -O3 -DNDEBUG -finline- 
</span><br>
<span class="quotelev1">&gt; functions -fno-strict-aliasing -pthread -MT copy_functions.lo -MD - 
</span><br>
<span class="quotelev1">&gt; MP -MF $depbase.Tpo -c -o copy_functions.lo ../../../ompi/datatype/ 
</span><br>
<span class="quotelev1">&gt; copy_functions.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../../../ompi/datatype -I../../.. -I../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../opal/include -I../../../orte/include -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -MT copy_functions.lo -MD -MP -MF .deps/copy_functions.Tpo - 
</span><br>
<span class="quotelev1">&gt; c ../../../ompi/datatype/copy_functions.c  -fPIC -DPIC -o .libs/ 
</span><br>
<span class="quotelev1">&gt; copy_functions.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo copy_functions_heterogeneous.lo | sed 's|[^/]*$|.deps/ 
</span><br>
<span class="quotelev1">&gt; &amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal/include -I../../orte/include -I../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; datatype   -I../../.. -I../.. -I../../../opal/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../../ompi/include    -O3 -DNDEBUG -finline- 
</span><br>
<span class="quotelev1">&gt; functions -fno-strict-aliasing -pthread -MT  
</span><br>
<span class="quotelev1">&gt; copy_functions_heterogeneous.lo -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; copy_functions_heterogeneous.lo ../../../ompi/datatype/ 
</span><br>
<span class="quotelev1">&gt; copy_functions_heterogeneous.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../../../ompi/datatype -I../../.. -I../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../opal/include -I../../../orte/include -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -MT copy_functions_heterogeneous.lo -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt; copy_functions_heterogeneous.Tpo -c ../../../ompi/datatype/ 
</span><br>
<span class="quotelev1">&gt; copy_functions_heterogeneous.c  -fPIC -DPIC -o .libs/ 
</span><br>
<span class="quotelev1">&gt; copy_functions_heterogeneous.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo dt_get_count.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal/include -I../../orte/include -I../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; datatype   -I../../.. -I../.. -I../../../opal/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../../ompi/include    -O3 -DNDEBUG -finline- 
</span><br>
<span class="quotelev1">&gt; functions -fno-strict-aliasing -pthread -MT dt_get_count.lo -MD -MP - 
</span><br>
<span class="quotelev1">&gt; MF $depbase.Tpo -c -o dt_get_count.lo ../../../ompi/datatype/ 
</span><br>
<span class="quotelev1">&gt; dt_get_count.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../../../ompi/datatype -I../../.. -I../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../opal/include -I../../../orte/include -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -MT dt_get_count.lo -MD -MP -MF .deps/dt_get_count.Tpo - 
</span><br>
<span class="quotelev1">&gt; c ../../../ompi/datatype/dt_get_count.c  -fPIC -DPIC -o .libs/ 
</span><br>
<span class="quotelev1">&gt; dt_get_count.o
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC   --mode=link gcc -DCHECKSUM  -O3 - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread  -export- 
</span><br>
<span class="quotelev1">&gt; dynamic   -o libdatatype_reliable.la  libdatatype_reliable_la- 
</span><br>
<span class="quotelev1">&gt; datatype_pack.lo libdatatype_reliable_la-datatype_unpack.lo  -lnsl - 
</span><br>
<span class="quotelev1">&gt; lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: ar cru .libs/libdatatype_reliable.a .libs/ 
</span><br>
<span class="quotelev1">&gt; libdatatype_reliable_la-datatype_pack.o .libs/ 
</span><br>
<span class="quotelev1">&gt; libdatatype_reliable_la-datatype_unpack.o
</span><br>
<span class="quotelev1">&gt; libtool: link: ranlib .libs/libdatatype_reliable.a
</span><br>
<span class="quotelev1">&gt; libtool: link: creating libdatatype_reliable.la
</span><br>
<span class="quotelev1">&gt; libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libdatatype_reliable.la&quot; &amp;&amp; ln  
</span><br>
<span class="quotelev1">&gt; -s &quot;../libdatatype_reliable.la&quot; &quot;libdatatype_reliable.la&quot; )
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing -pthread  -export-dynamic   - 
</span><br>
<span class="quotelev1">&gt; o libdatatype.la  dt_add.lo dt_create.lo dt_create_dup.lo  
</span><br>
<span class="quotelev1">&gt; dt_create_indexed.lo dt_create_struct.lo dt_create_vector.lo  
</span><br>
<span class="quotelev1">&gt; dt_destroy.lo dt_module.lo dt_optimize.lo datatype_pack.lo  
</span><br>
<span class="quotelev1">&gt; datatype_unpack.lo dt_sndrcv.lo fake_stack.lo dt_args.lo dt_arch.lo  
</span><br>
<span class="quotelev1">&gt; dt_copy.lo dt_external32.lo dt_match_size.lo convertor.lo  
</span><br>
<span class="quotelev1">&gt; position.lo copy_functions.lo copy_functions_heterogeneous.lo  
</span><br>
<span class="quotelev1">&gt; dt_get_count.lo libdatatype_reliable.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: (cd .libs/libdatatype.lax/libdatatype_reliable.a &amp;&amp;  
</span><br>
<span class="quotelev1">&gt; ar x /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create- 
</span><br>
<span class="quotelev1">&gt; r17439/ompi/openmpi-1.3a1r17439/_build/ompi/datatype/./.libs/ 
</span><br>
<span class="quotelev1">&gt; libdatatype_reliable.a)
</span><br>
<span class="quotelev1">&gt; libtool: link: ar cru .libs/libdatatype.a .libs/dt_add.o .libs/ 
</span><br>
<span class="quotelev1">&gt; dt_create.o .libs/dt_create_dup.o .libs/dt_create_indexed.o .libs/ 
</span><br>
<span class="quotelev1">&gt; dt_create_struct.o .libs/dt_create_vector.o .libs/dt_destroy.o .libs/ 
</span><br>
<span class="quotelev1">&gt; dt_module.o .libs/dt_optimize.o .libs/datatype_pack.o .libs/ 
</span><br>
<span class="quotelev1">&gt; datatype_unpack.o .libs/dt_sndrcv.o .libs/fake_stack.o .libs/ 
</span><br>
<span class="quotelev1">&gt; dt_args.o .libs/dt_arch.o .libs/dt_copy.o .libs/ 
</span><br>
<span class="quotelev1">&gt; dt_external32.o .libs/dt_match_size.o .libs/convertor.o .libs/ 
</span><br>
<span class="quotelev1">&gt; position.o .libs/copy_functions.o .libs/ 
</span><br>
<span class="quotelev1">&gt; copy_functions_heterogeneous.o .libs/dt_get_count.o   .libs/ 
</span><br>
<span class="quotelev1">&gt; libdatatype.lax/libdatatype_reliable.a/libdatatype_reliable_la- 
</span><br>
<span class="quotelev1">&gt; datatype_pack.o .libs/libdatatype.lax/libdatatype_reliable.a/ 
</span><br>
<span class="quotelev1">&gt; libdatatype_reliable_la-datatype_unpack.o
</span><br>
<span class="quotelev1">&gt; libtool: link: ranlib .libs/libdatatype.a
</span><br>
<span class="quotelev1">&gt; libtool: link: rm -fr .libs/libdatatype.lax
</span><br>
<span class="quotelev1">&gt; libtool: link: creating libdatatype.la
</span><br>
<span class="quotelev1">&gt; libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libdatatype.la&quot; &amp;&amp; ln -s &quot;../ 
</span><br>
<span class="quotelev1">&gt; libdatatype.la&quot; &quot;libdatatype.la&quot; )
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r17439/ompi/openmpi-1.3a1r17439/_build/ompi/ 
</span><br>
<span class="quotelev1">&gt; datatype'
</span><br>
<span class="quotelev1">&gt; Making all in debuggers
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r17439/ompi/openmpi-1.3a1r17439/_build/ompi/ 
</span><br>
<span class="quotelev1">&gt; debuggers'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal/include -I../../orte/include -I../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; debuggers   -I../../.. -I../.. -I../../../opal/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../../ompi/include   -g -DNDEBUG -finline- 
</span><br>
<span class="quotelev1">&gt; functions -fno-strict-aliasing -pthread -g -MT libompitv_la- 
</span><br>
<span class="quotelev1">&gt; ompi_dll.lo -MD -MP -MF .deps/libompitv_la-ompi_dll.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; libompitv_la-ompi_dll.lo `test -f 'ompi_dll.c' || echo '../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/debuggers/'`ompi_dll.c
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../opal/include -I../../orte/include -I../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; debuggers   -I../../.. -I../.. -I../../../opal/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../../ompi/include   -DOMPI_TV_DLL=\&quot;/home/mpiteam/ 
</span><br>
<span class="quotelev1">&gt; openmpi/nightly-tarball-build-root/trunk/create-r17439/ompi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3a1r17439/_inst/lib/openmpi/libompitv.so\&quot; -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing -pthread -g -MT  
</span><br>
<span class="quotelev1">&gt; libdebuggers_la-ompi_totalview.lo -MD -MP -MF .deps/libdebuggers_la- 
</span><br>
<span class="quotelev1">&gt; ompi_totalview.Tpo -c -o libdebuggers_la-ompi_totalview.lo `test -f  
</span><br>
<span class="quotelev1">&gt; 'ompi_totalview.c' || echo '../../../ompi/debuggers/'`ompi_totalview.c
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../../../ompi/debuggers -I../../.. -I../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../opal/include -I../../../orte/include -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -g -DNDEBUG -finline-functions -fno-strict-aliasing -pthread  
</span><br>
<span class="quotelev1">&gt; -g -MT libompitv_la-ompi_dll.lo -MD -MP -MF .deps/libompitv_la- 
</span><br>
<span class="quotelev1">&gt; ompi_dll.Tpo -c ../../../ompi/debuggers/ompi_dll.c  -fPIC -DPIC - 
</span><br>
<span class="quotelev1">&gt; o .libs/libompitv_la-ompi_dll.o
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../../../ompi/debuggers -I../../.. -I../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../opal/include -I../../../orte/include -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -DOMPI_TV_DLL=\&quot;/home/mpiteam/openmpi/nightly-tarball-build- 
</span><br>
<span class="quotelev1">&gt; root/trunk/create-r17439/ompi/openmpi-1.3a1r17439/_inst/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; libompitv.so\&quot; -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -g -MT libdebuggers_la-ompi_totalview.lo -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt; libdebuggers_la-ompi_totalview.Tpo -c ../../../ompi/debuggers/ 
</span><br>
<span class="quotelev1">&gt; ompi_totalview.c  -fPIC -DPIC -o .libs/libdebuggers_la- 
</span><br>
<span class="quotelev1">&gt; ompi_totalview.o
</span><br>
<span class="quotelev1">&gt; In file included from ../../../ompi/debuggers/ompi_dll.c:71:
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/pml/base/pml_base_request.h:28:29: ompi/ 
</span><br>
<span class="quotelev1">&gt; memchecker.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; In file included from ../../../ompi/debuggers/ompi_totalview.c:42:
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/pml/base/pml_base_request.h:28:29: ompi/ 
</span><br>
<span class="quotelev1">&gt; memchecker.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; make[3]: *** [libdebuggers_la-ompi_totalview.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[3]: *** [libompitv_la-ompi_dll.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r17439/ompi/openmpi-1.3a1r17439/_build/ompi/ 
</span><br>
<span class="quotelev1">&gt; debuggers'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r17439/ompi/openmpi-1.3a1r17439/_build/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r17439/ompi/openmpi-1.3a1r17439/_build'
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 2
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3229/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3230.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="3228.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/07/4312.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
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
