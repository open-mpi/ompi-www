<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 22 00:34:00 2007" -->
<!-- isoreceived="20071222053400" -->
<!-- sent="Sat, 22 Dec 2007 00:33:53 -0500" -->
<!-- isosent="20071222053353" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE ===" -->
<!-- id="D6F61F53-3CFC-4900-AAC6-C924E77E7490_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200712220217.lBM2HoKw024383_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-12-22 00:33:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2907.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib xrc CPC minor nit"</a>
<li><strong>Previous message:</strong> <a href="2905.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3229.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Corrected by r17023. It's was just a typo.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 21, 2007, at 9:17 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev1">&gt;       make -j 4 distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Fri Dec 21 21:00:09 EST 2007
</span><br>
<span class="quotelev1">&gt; End time:   Fri Dec 21 21:17:49 EST 2007
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt;    - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;    - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_cmpset_noinline
</span><br>
<span class="quotelev1">&gt; ==================
</span><br>
<span class="quotelev1">&gt; All 8 tests passed
</span><br>
<span class="quotelev1">&gt; ==================
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r17022/ompi/openmpi-1.3a1r17022/_build/test/ 
</span><br>
<span class="quotelev1">&gt; asm'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r17022/ompi/openmpi-1.3a1r17022/_build/test/ 
</span><br>
<span class="quotelev1">&gt; asm'
</span><br>
<span class="quotelev1">&gt; Making check in class
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r17022/ompi/openmpi-1.3a1r17022/_build/test/ 
</span><br>
<span class="quotelev1">&gt; class'
</span><br>
<span class="quotelev1">&gt; make  ompi_bitmap opal_hash_table opal_list opal_value_array  
</span><br>
<span class="quotelev1">&gt; opal_pointer_array ompi_rb_tree
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r17022/ompi/openmpi-1.3a1r17022/_build/test/ 
</span><br>
<span class="quotelev1">&gt; class'
</span><br>
<span class="quotelev1">&gt; depbase=`echo ompi_bitmap.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/ 
</span><br>
<span class="quotelev1">&gt; libplpa -I../../../test/class  &quot;-I../../../test/support&quot; -I../../.. - 
</span><br>
<span class="quotelev1">&gt; I../.. -I../../../opal/include -I../../../orte/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing  
</span><br>
<span class="quotelev1">&gt; -pthread -MT ompi_bitmap.o -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; ompi_bitmap.o ../../../test/class/ompi_bitmap.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; depbase=`echo opal_hash_table.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/ 
</span><br>
<span class="quotelev1">&gt; libplpa -I../../../test/class  &quot;-I../../../test/support&quot; -I../../.. - 
</span><br>
<span class="quotelev1">&gt; I../.. -I../../../opal/include -I../../../orte/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing  
</span><br>
<span class="quotelev1">&gt; -pthread -MT opal_hash_table.o -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; opal_hash_table.o ../../../test/class/opal_hash_table.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; depbase=`echo opal_list.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/ 
</span><br>
<span class="quotelev1">&gt; libplpa -I../../../test/class  &quot;-I../../../test/support&quot; -I../../.. - 
</span><br>
<span class="quotelev1">&gt; I../.. -I../../../opal/include -I../../../orte/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing  
</span><br>
<span class="quotelev1">&gt; -pthread -MT opal_list.o -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; opal_list.o ../../../test/class/opal_list.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; depbase=`echo opal_value_array.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/ 
</span><br>
<span class="quotelev1">&gt; libplpa -I../../../test/class  &quot;-I../../../test/support&quot; -I../../.. - 
</span><br>
<span class="quotelev1">&gt; I../.. -I../../../opal/include -I../../../orte/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing  
</span><br>
<span class="quotelev1">&gt; -pthread -MT opal_value_array.o -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; opal_value_array.o ../../../test/class/opal_value_array.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; depbase=`echo opal_pointer_array.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o 
</span><br>
<span class="quotelev1">&gt; $||'`;\
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/ 
</span><br>
<span class="quotelev1">&gt; libplpa -I../../../test/class  &quot;-I../../../test/support&quot; -I../../.. - 
</span><br>
<span class="quotelev1">&gt; I../.. -I../../../opal/include -I../../../orte/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing  
</span><br>
<span class="quotelev1">&gt; -pthread -MT opal_pointer_array.o -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; opal_pointer_array.o ../../../test/class/opal_pointer_array.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; depbase=`echo ompi_rb_tree.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/ 
</span><br>
<span class="quotelev1">&gt; libplpa -I../../../test/class  &quot;-I../../../test/support&quot; -I../../.. - 
</span><br>
<span class="quotelev1">&gt; I../.. -I../../../opal/include -I../../../orte/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/include    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing  
</span><br>
<span class="quotelev1">&gt; -pthread -MT ompi_rb_tree.o -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; ompi_rb_tree.o ../../../test/class/ompi_rb_tree.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing -pthread  -export-dynamic   - 
</span><br>
<span class="quotelev1">&gt; o opal_hash_table opal_hash_table.o ../../opal/libopen-pal.la ../../ 
</span><br>
<span class="quotelev1">&gt; test/support/libsupport.a -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; ../../../test/class/opal_pointer_array.c:32:43: ompi/class/ 
</span><br>
<span class="quotelev1">&gt; opal_pointer_array.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../../../test/class/opal_pointer_array.c: In function `test':
</span><br>
<span class="quotelev1">&gt; ../../../test/class/opal_pointer_array.c:42: error:  
</span><br>
<span class="quotelev1">&gt; `opal_pointer_array_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../test/class/opal_pointer_array.c:42: error: (Each undeclared  
</span><br>
<span class="quotelev1">&gt; identifier is reported only once
</span><br>
<span class="quotelev1">&gt; ../../../test/class/opal_pointer_array.c:42: error: for each  
</span><br>
<span class="quotelev1">&gt; function it appears in.)
</span><br>
<span class="quotelev1">&gt; ../../../test/class/opal_pointer_array.c:42: error: `array'  
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../test/class/opal_pointer_array.c:132: warning: assignment  
</span><br>
<span class="quotelev1">&gt; makes pointer from integer without a cast
</span><br>
<span class="quotelev1">&gt; make[4]: *** [opal_pointer_array.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -O3 -DNDEBUG -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -pthread -o .libs/opal_hash_table opal_hash_table.o -Wl,-- 
</span><br>
<span class="quotelev1">&gt; export-dynamic  ../../opal/.libs/libopen-pal.so -ldl ../../test/ 
</span><br>
<span class="quotelev1">&gt; support/libsupport.a -lnsl -lutil -lm -pthread -Wl,-rpath -Wl,/home/ 
</span><br>
<span class="quotelev1">&gt; mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r17022/ompi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3a1r17022/_inst/lib
</span><br>
<span class="quotelev1">&gt; libtool: link: creating opal_hash_table
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r17022/ompi/openmpi-1.3a1r17022/_build/test/ 
</span><br>
<span class="quotelev1">&gt; class'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [check-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r17022/ompi/openmpi-1.3a1r17022/_build/test/ 
</span><br>
<span class="quotelev1">&gt; class'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r17022/ompi/openmpi-1.3a1r17022/_build/test'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r17022/ompi/openmpi-1.3a1r17022/_build'
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2906/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2907.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib xrc CPC minor nit"</a>
<li><strong>Previous message:</strong> <a href="2905.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3229.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
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
