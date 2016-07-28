<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 07:53:22 2007" -->
<!-- isoreceived="20071207125322" -->
<!-- sent="Fri, 7 Dec 2007 07:52:52 -0500" -->
<!-- isosent="20071207125252" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE ===" -->
<!-- id="1629B920-3BCE-44C7-AAC4-A4EEA0690D9B_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="81B03A54-4E91-44D9-B566-AE43457B9974_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-07 07:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2765.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16893"</a>
<li><strong>Previous message:</strong> <a href="2763.php">Aurelien Bouteiller: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="2763.php">Aurelien Bouteiller: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2906.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's not an issue of compilation; it's an issue of what files make it  
<br>
into the tarball when &quot;make dist&quot; is invoked.  In this case, the  
<br>
request_default.h wasn't listed in the Makefile.am and therefore was  
<br>
not put into the tarball.  Hence, when building from a tarball,  
<br>
that .h file was missing.
<br>
<p><p>On Dec 7, 2007, at 4:18 AM, Aurelien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; Herk, sorry about that. It did compile fine on my machine without
</span><br>
<span class="quotelev1">&gt; adding the .h file to the makefile. I should have though about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; Le 6 d&#233;c. 07 &#224; 21:44, Tim Mattox a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks George.  I've started a new trunk tarball creation.
</span><br>
<span class="quotelev2">&gt;&gt; It should finish before MTT runs start tonight.  I hope.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 6, 2007 9:29 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fixed by r16884.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 7, 2007, at 12:46 PM, MPI Team wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     make -j 4 distcheck
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Start time: Thu Dec  6 21:00:25 EST 2007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; End time:   Thu Dec  6 21:16:34 EST 2007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I../opal/include -I../orte/include -I../ompi/include -I../opal/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; paffinity/linux/plpa/src/libplpa -I../../ompi   -I../.. -I.. -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I../../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/include -I../../orte/include -I../../ompi/include    -O3 -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT proc/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proc.lo -MD -MP -MF $depbase.Tpo -c -o proc/proc.lo ../../ompi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proc/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proc.c &amp;&amp;\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fno-strict-aliasing -pthread -MT op/op_predefined.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; op/.deps/op_predefined.Tpo -c ../../ompi/op/op_predefined.c  - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fPIC -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DPIC -o op/.libs/op_predefined.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fno-strict-aliasing -pthread -MT proc/proc.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proc/.deps/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proc.Tpo -c ../../ompi/proc/proc.c  -fPIC -DPIC -o proc/.libs/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proc.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; depbase=`echo request/grequest.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $||'`;\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I../opal/include -I../orte/include -I../ompi/include -I../opal/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; paffinity/linux/plpa/src/libplpa -I../../ompi   -I../.. -I.. -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I../../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/include -I../../orte/include -I../../ompi/include    -O3 -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grequest.lo -MD -MP -MF $depbase.Tpo -c -o request/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grequest.lo ../../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/request/grequest.c &amp;&amp;\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; depbase=`echo request/request.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $||'`;\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I../opal/include -I../orte/include -I../ompi/include -I../opal/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; paffinity/linux/plpa/src/libplpa -I../../ompi   -I../.. -I.. -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I../../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/include -I../../orte/include -I../../ompi/include    -O3 -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request.lo -MD -MP -MF $depbase.Tpo -c -o request/request.lo ../../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/request/request.c &amp;&amp;\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fno-strict-aliasing -pthread -MT request/grequest.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request/.deps/grequest.Tpo -c ../../ompi/request/grequest.c  - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fPIC -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DPIC -o request/.libs/grequest.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fno-strict-aliasing -pthread -MT request/request.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request/.deps/request.Tpo -c ../../ompi/request/request.c  -fPIC -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DPIC -o request/.libs/request.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; depbase=`echo request/req_test.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $||'`;\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I../opal/include -I../orte/include -I../ompi/include -I../opal/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; paffinity/linux/plpa/src/libplpa -I../../ompi   -I../.. -I.. -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I../../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/include -I../../orte/include -I../../ompi/include    -O3 -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; req_test.lo -MD -MP -MF $depbase.Tpo -c -o request/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; req_test.lo ../../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/request/req_test.c &amp;&amp;\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:24:42: ompi/request/request_default.h:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:36: error: `ompi_request_default_test'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; undeclared here (not in a function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:36: error: initializer element is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; constant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:36: error: (near initialization for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_functions.req_test')
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:37: error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_default_test_any' undeclared here (not in a function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:37: error: initializer element is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; constant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:37: error: (near initialization for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_functions.req_test_any')
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:38: error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_default_test_all' undeclared here (not in a function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:38: error: initializer element is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; constant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:38: error: (near initialization for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_functions.req_test_all')
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:39: error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_default_test_some' undeclared here (not in a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:39: error: initializer element is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; constant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:39: error: (near initialization for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_functions.req_test_some')
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:40: error: `ompi_request_default_wait'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; undeclared here (not in a function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:40: error: initializer element is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; constant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:40: error: (near initialization for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_functions.req_wait')
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:41: error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_default_wait_any' undeclared here (not in a function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:41: error: initializer element is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; constant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:41: error: (near initialization for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_functions.req_wait_any')
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:42: error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_default_wait_all' undeclared here (not in a function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:42: error: initializer element is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; constant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:42: error: (near initialization for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_functions.req_wait_all')
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:44: error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_default_wait_some' undeclared here (not in a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:44: error: initializer element is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; constant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/request.c:44: error: (near initialization for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ompi_request_functions.req_wait_some')
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: *** [request/request.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/include -I../ompi/include -I../opal/mca/paffinity/linux/plpa/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; src/libplpa -I../../ompi -I../.. -I.. -I../../opal/include -I../../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/include -I../../ompi/include -O3 -DNDEBUG -finline-functions -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fno-strict-aliasing -pthread -MT request/req_test.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request/.deps/req_test.Tpo -c ../../ompi/request/req_test.c  - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fPIC -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DPIC -o request/.libs/req_test.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/request/req_test.c:23:42: ompi/request/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request_default.h:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: *** [request/req_test.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; build-root/trunk/create-r16872/ompi/openmpi-1.3a1r16872/_build/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; build-root/trunk/create-r16872/ompi/openmpi-1.3a1r16872/_build'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [distcheck] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your friendly daemon,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cyrador
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; testing mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; testing_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="2765.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16893"</a>
<li><strong>Previous message:</strong> <a href="2763.php">Aurelien Bouteiller: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="2763.php">Aurelien Bouteiller: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2906.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
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
