<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 21:29:39 2007" -->
<!-- isoreceived="20071207022939" -->
<!-- sent="Fri, 7 Dec 2007 12:59:28 +1030" -->
<!-- isosent="20071207022928" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE ===" -->
<!-- id="DC28CE52-B40A-4398-9268-C17C21D293C0_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200712070216.lB72GYIr029857_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-12-06 21:29:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2761.php">Tim Mattox: "Re: [OMPI devel] [devel-core] Open MPI v1.2.5rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="2759.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Open MPI v1.2.5rc1 has been posted"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2762.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="2762.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed by r16884.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 7, 2007, at 12:46 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev1">&gt;       make -j 4 distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Thu Dec  6 21:00:25 EST 2007
</span><br>
<span class="quotelev1">&gt; End time:   Thu Dec  6 21:16:34 EST 2007
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.  
</span><br>
<span class="quotelev1">&gt; -I../opal/include -I../orte/include -I../ompi/include -I../opal/mca/ 
</span><br>
<span class="quotelev1">&gt; paffinity/linux/plpa/src/libplpa -I../../ompi   -I../.. -I.. -I../../ 
</span><br>
<span class="quotelev1">&gt; opal/include -I../../orte/include -I../../ompi/include    -O3 - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT proc/ 
</span><br>
<span class="quotelev1">&gt; proc.lo -MD -MP -MF $depbase.Tpo -c -o proc/proc.lo ../../ompi/proc/ 
</span><br>
<span class="quotelev1">&gt; proc.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/ 
</span><br>
<span class="quotelev1">&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -MT op/op_predefined.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; op/.deps/op_predefined.Tpo -c ../../ompi/op/op_predefined.c  -fPIC - 
</span><br>
<span class="quotelev1">&gt; DPIC -o op/.libs/op_predefined.o
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/ 
</span><br>
<span class="quotelev1">&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -MT proc/proc.lo -MD -MP -MF proc/.deps/ 
</span><br>
<span class="quotelev1">&gt; proc.Tpo -c ../../ompi/proc/proc.c  -fPIC -DPIC -o proc/.libs/proc.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo request/grequest.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo 
</span><br>
<span class="quotelev1">&gt; $||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.  
</span><br>
<span class="quotelev1">&gt; -I../opal/include -I../orte/include -I../ompi/include -I../opal/mca/ 
</span><br>
<span class="quotelev1">&gt; paffinity/linux/plpa/src/libplpa -I../../ompi   -I../.. -I.. -I../../ 
</span><br>
<span class="quotelev1">&gt; opal/include -I../../orte/include -I../../ompi/include    -O3 - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT request/ 
</span><br>
<span class="quotelev1">&gt; grequest.lo -MD -MP -MF $depbase.Tpo -c -o request/grequest.lo ../../ 
</span><br>
<span class="quotelev1">&gt; ompi/request/grequest.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; depbase=`echo request/request.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo 
</span><br>
<span class="quotelev1">&gt; $||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.  
</span><br>
<span class="quotelev1">&gt; -I../opal/include -I../orte/include -I../ompi/include -I../opal/mca/ 
</span><br>
<span class="quotelev1">&gt; paffinity/linux/plpa/src/libplpa -I../../ompi   -I../.. -I.. -I../../ 
</span><br>
<span class="quotelev1">&gt; opal/include -I../../orte/include -I../../ompi/include    -O3 - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT request/ 
</span><br>
<span class="quotelev1">&gt; request.lo -MD -MP -MF $depbase.Tpo -c -o request/request.lo ../../ 
</span><br>
<span class="quotelev1">&gt; ompi/request/request.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/ 
</span><br>
<span class="quotelev1">&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -MT request/grequest.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; request/.deps/grequest.Tpo -c ../../ompi/request/grequest.c  -fPIC - 
</span><br>
<span class="quotelev1">&gt; DPIC -o request/.libs/grequest.o
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/ 
</span><br>
<span class="quotelev1">&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -MT request/request.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; request/.deps/request.Tpo -c ../../ompi/request/request.c  -fPIC - 
</span><br>
<span class="quotelev1">&gt; DPIC -o request/.libs/request.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo request/req_test.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo 
</span><br>
<span class="quotelev1">&gt; $||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.  
</span><br>
<span class="quotelev1">&gt; -I../opal/include -I../orte/include -I../ompi/include -I../opal/mca/ 
</span><br>
<span class="quotelev1">&gt; paffinity/linux/plpa/src/libplpa -I../../ompi   -I../.. -I.. -I../../ 
</span><br>
<span class="quotelev1">&gt; opal/include -I../../orte/include -I../../ompi/include    -O3 - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT request/ 
</span><br>
<span class="quotelev1">&gt; req_test.lo -MD -MP -MF $depbase.Tpo -c -o request/req_test.lo ../../ 
</span><br>
<span class="quotelev1">&gt; ompi/request/req_test.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:24:42: ompi/request/request_default.h:  
</span><br>
<span class="quotelev1">&gt; No such file or directory
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:36: error: `ompi_request_default_test'  
</span><br>
<span class="quotelev1">&gt; undeclared here (not in a function)
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:36: error: initializer element is not  
</span><br>
<span class="quotelev1">&gt; constant
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:36: error: (near initialization for  
</span><br>
<span class="quotelev1">&gt; `ompi_request_functions.req_test')
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:37: error:  
</span><br>
<span class="quotelev1">&gt; `ompi_request_default_test_any' undeclared here (not in a function)
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:37: error: initializer element is not  
</span><br>
<span class="quotelev1">&gt; constant
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:37: error: (near initialization for  
</span><br>
<span class="quotelev1">&gt; `ompi_request_functions.req_test_any')
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:38: error:  
</span><br>
<span class="quotelev1">&gt; `ompi_request_default_test_all' undeclared here (not in a function)
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:38: error: initializer element is not  
</span><br>
<span class="quotelev1">&gt; constant
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:38: error: (near initialization for  
</span><br>
<span class="quotelev1">&gt; `ompi_request_functions.req_test_all')
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:39: error:  
</span><br>
<span class="quotelev1">&gt; `ompi_request_default_test_some' undeclared here (not in a function)
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:39: error: initializer element is not  
</span><br>
<span class="quotelev1">&gt; constant
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:39: error: (near initialization for  
</span><br>
<span class="quotelev1">&gt; `ompi_request_functions.req_test_some')
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:40: error: `ompi_request_default_wait'  
</span><br>
<span class="quotelev1">&gt; undeclared here (not in a function)
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:40: error: initializer element is not  
</span><br>
<span class="quotelev1">&gt; constant
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:40: error: (near initialization for  
</span><br>
<span class="quotelev1">&gt; `ompi_request_functions.req_wait')
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:41: error:  
</span><br>
<span class="quotelev1">&gt; `ompi_request_default_wait_any' undeclared here (not in a function)
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:41: error: initializer element is not  
</span><br>
<span class="quotelev1">&gt; constant
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:41: error: (near initialization for  
</span><br>
<span class="quotelev1">&gt; `ompi_request_functions.req_wait_any')
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:42: error:  
</span><br>
<span class="quotelev1">&gt; `ompi_request_default_wait_all' undeclared here (not in a function)
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:42: error: initializer element is not  
</span><br>
<span class="quotelev1">&gt; constant
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:42: error: (near initialization for  
</span><br>
<span class="quotelev1">&gt; `ompi_request_functions.req_wait_all')
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:44: error:  
</span><br>
<span class="quotelev1">&gt; `ompi_request_default_wait_some' undeclared here (not in a function)
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:44: error: initializer element is not  
</span><br>
<span class="quotelev1">&gt; constant
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/request.c:44: error: (near initialization for  
</span><br>
<span class="quotelev1">&gt; `ompi_request_functions.req_wait_some')
</span><br>
<span class="quotelev1">&gt; make[3]: *** [request/request.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/ 
</span><br>
<span class="quotelev1">&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -pthread -MT request/req_test.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; request/.deps/req_test.Tpo -c ../../ompi/request/req_test.c  -fPIC - 
</span><br>
<span class="quotelev1">&gt; DPIC -o request/.libs/req_test.o
</span><br>
<span class="quotelev1">&gt; ../../ompi/request/req_test.c:23:42: ompi/request/request_default.h:  
</span><br>
<span class="quotelev1">&gt; No such file or directory
</span><br>
<span class="quotelev1">&gt; make[3]: *** [request/req_test.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r16872/ompi/openmpi-1.3a1r16872/_build/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r16872/ompi/openmpi-1.3a1r16872/_build'
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2760/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2761.php">Tim Mattox: "Re: [OMPI devel] [devel-core] Open MPI v1.2.5rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="2759.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Open MPI v1.2.5rc1 has been posted"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2762.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="2762.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
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
