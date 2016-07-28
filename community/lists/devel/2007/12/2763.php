<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 04:18:43 2007" -->
<!-- isoreceived="20071207091843" -->
<!-- sent="Fri, 7 Dec 2007 04:18:34 -0500" -->
<!-- isosent="20071207091834" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE ===" -->
<!-- id="81B03A54-4E91-44D9-B566-AE43457B9974_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ea86ce220712061843v68a104ct989d3279450e08fb_at_mail.gmail.com" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-07 04:18:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2764.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="2762.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="2762.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2764.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="2764.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Herk, sorry about that. It did compile fine on my machine without  
<br>
adding the .h file to the makefile. I should have though about it.
<br>
<p>Aurelien
<br>
Le 6 d&#233;c. 07 &#224; 21:44, Tim Mattox a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Thanks George.  I've started a new trunk tarball creation.
</span><br>
<span class="quotelev1">&gt; It should finish before MTT runs start tonight.  I hope.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 6, 2007 9:29 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Fixed by r16884.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 7, 2007, at 12:46 PM, MPI Team wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      make -j 4 distcheck
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Start time: Thu Dec  6 21:00:25 EST 2007
</span><br>
<span class="quotelev3">&gt;&gt;&gt; End time:   Thu Dec  6 21:16:34 EST 2007
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../opal/include -I../orte/include -I../ompi/include -I../opal/mca/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paffinity/linux/plpa/src/libplpa -I../../ompi   -I../.. -I.. - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/include -I../../orte/include -I../../ompi/include    -O3 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT proc/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc.lo -MD -MP -MF $depbase.Tpo -c -o proc/proc.lo ../../ompi/proc/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc.c &amp;&amp;\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fno-strict-aliasing -pthread -MT op/op_predefined.lo -MD -MP -MF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; op/.deps/op_predefined.Tpo -c ../../ompi/op/op_predefined.c  -fPIC -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DPIC -o op/.libs/op_predefined.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fno-strict-aliasing -pthread -MT proc/proc.lo -MD -MP -MF  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc/.deps/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc.Tpo -c ../../ompi/proc/proc.c  -fPIC -DPIC -o proc/.libs/proc.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; depbase=`echo request/grequest.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $||'`;\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../opal/include -I../orte/include -I../ompi/include -I../opal/mca/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paffinity/linux/plpa/src/libplpa -I../../ompi   -I../.. -I.. - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/include -I../../orte/include -I../../ompi/include    -O3 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grequest.lo -MD -MP -MF $depbase.Tpo -c -o request/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grequest.lo ../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/request/grequest.c &amp;&amp;\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; depbase=`echo request/request.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $||'`;\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../opal/include -I../orte/include -I../ompi/include -I../opal/mca/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paffinity/linux/plpa/src/libplpa -I../../ompi   -I../.. -I.. - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/include -I../../orte/include -I../../ompi/include    -O3 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request.lo -MD -MP -MF $depbase.Tpo -c -o request/request.lo ../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/request/request.c &amp;&amp;\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fno-strict-aliasing -pthread -MT request/grequest.lo -MD -MP -MF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request/.deps/grequest.Tpo -c ../../ompi/request/grequest.c  -fPIC -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DPIC -o request/.libs/grequest.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fno-strict-aliasing -pthread -MT request/request.lo -MD -MP -MF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request/.deps/request.Tpo -c ../../ompi/request/request.c  -fPIC -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DPIC -o request/.libs/request.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; depbase=`echo request/req_test.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $||'`;\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../opal/include -I../orte/include -I../ompi/include -I../opal/mca/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paffinity/linux/plpa/src/libplpa -I../../ompi   -I../.. -I.. - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/include -I../../orte/include -I../../ompi/include    -O3 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; req_test.lo -MD -MP -MF $depbase.Tpo -c -o request/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; req_test.lo ../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/request/req_test.c &amp;&amp;\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:24:42: ompi/request/request_default.h:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:36: error: `ompi_request_default_test'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undeclared here (not in a function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:36: error: initializer element is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:36: error: (near initialization for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_functions.req_test')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:37: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_default_test_any' undeclared here (not in a function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:37: error: initializer element is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:37: error: (near initialization for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_functions.req_test_any')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:38: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_default_test_all' undeclared here (not in a function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:38: error: initializer element is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:38: error: (near initialization for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_functions.req_test_all')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:39: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_default_test_some' undeclared here (not in a function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:39: error: initializer element is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:39: error: (near initialization for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_functions.req_test_some')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:40: error: `ompi_request_default_wait'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undeclared here (not in a function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:40: error: initializer element is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:40: error: (near initialization for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_functions.req_wait')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:41: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_default_wait_any' undeclared here (not in a function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:41: error: initializer element is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:41: error: (near initialization for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_functions.req_wait_any')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:42: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_default_wait_all' undeclared here (not in a function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:42: error: initializer element is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:42: error: (near initialization for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_functions.req_wait_all')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:44: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_default_wait_some' undeclared here (not in a function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:44: error: initializer element is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/request.c:44: error: (near initialization for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_request_functions.req_wait_some')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** [request/request.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fno-strict-aliasing -pthread -MT request/req_test.lo -MD -MP -MF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request/.deps/req_test.Tpo -c ../../ompi/request/req_test.c  -fPIC -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DPIC -o request/.libs/req_test.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/request/req_test.c:23:42: ompi/request/request_default.h:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** [request/req_test.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r16872/ompi/openmpi-1.3a1r16872/_build/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r16872/ompi/openmpi-1.3a1r16872/_build'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [distcheck] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your friendly daemon,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cyrador
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2764.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="2762.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="2762.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2764.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="2764.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
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
