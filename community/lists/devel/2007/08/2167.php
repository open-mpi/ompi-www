<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 16:51:44 2007" -->
<!-- isoreceived="20070816205144" -->
<!-- sent="Thu, 16 Aug 2007 16:51:30 -0400" -->
<!-- isosent="20070816205130" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] simple compilation error" -->
<!-- id="A5BD8228-C377-4B9B-9CB5-CEC171348053_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="58256.132.65.16.105.1187297365.squirrel_at_webmail.cs.huji.ac.il" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 16:51:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2168.php">George Bosilca: "Re: [OMPI devel] simple compilation error"</a>
<li><strong>Previous message:</strong> <a href="2166.php">Alexander Margolin: "[OMPI devel] simple compilation error"</a>
<li><strong>In reply to:</strong> <a href="2166.php">Alexander Margolin: "[OMPI devel] simple compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2168.php">George Bosilca: "Re: [OMPI devel] simple compilation error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Heh; sorry about that.  This was a problem from a checkin last night  
<br>
(a developer accidentally committed something that compiled/worked on  
<br>
OSX but didn't compile on Linux); it's been fixed now.  Do an &quot;svn  
<br>
up&quot; and you should be ok.
<br>
<p><p><p>On Aug 16, 2007, at 4:49 PM, Alexander Margolin wrote:
<br>
<p><span class="quotelev1">&gt; This question seems so simple - and yet i ask:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried following all the steps in the manual:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> ompi
</span><br>
<span class="quotelev1">&gt; 2) &lt;changed some source code in ompi/mca/btl &gt; *
</span><br>
<span class="quotelev1">&gt; 3) ./autogen.sh ; ./configure --prefix &lt;some folder&gt;
</span><br>
<span class="quotelev1">&gt; 4) make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what do I get? The following compilation error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `somewhere/ompi/ompi/datatype'
</span><br>
<span class="quotelev1">&gt; Making all in debuggers
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/a/mosna/vol/vol0/aa/alexam02/ompi/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H  
</span><br>
<span class="quotelev1">&gt; -I.
</span><br>
<span class="quotelev1">&gt; -I../../opal/include -I../../orte/include -I../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../..   -g -Wall
</span><br>
<span class="quotelev1">&gt; -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes
</span><br>
<span class="quotelev1">&gt; -Wstrict-prototypes -Wcomment -pedantic
</span><br>
<span class="quotelev1">&gt; -Werror-implicit-function-declaration -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -g -MT libompitv_la-ompi_dll.lo -MD - 
</span><br>
<span class="quotelev1">&gt; MP -MF
</span><br>
<span class="quotelev1">&gt; .deps/libompitv_la-ompi_dll.Tpo -c -o libompitv_la-ompi_dll.lo  
</span><br>
<span class="quotelev1">&gt; `test -f
</span><br>
<span class="quotelev1">&gt; 'ompi_dll.c' || echo './'`ompi_dll.c
</span><br>
<span class="quotelev1">&gt; mkdir .libs
</span><br>
<span class="quotelev1">&gt;  gcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa
</span><br>
<span class="quotelev1">&gt; -I../.. -g -Wall -Wundef -Wno-long-long -Wsign-compare
</span><br>
<span class="quotelev1">&gt; -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic
</span><br>
<span class="quotelev1">&gt; -Werror-implicit-function-declaration -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -g -MT libompitv_la-ompi_dll.lo -MD - 
</span><br>
<span class="quotelev1">&gt; MP -MF
</span><br>
<span class="quotelev1">&gt; .deps/libompitv_la-ompi_dll.Tpo -c ompi_dll.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev1">&gt; .libs/libompitv_la-ompi_dll.o
</span><br>
<span class="quotelev1">&gt; ompi_dll.c:102: error: initializer element is not constant
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libompitv_la-ompi_dll.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `somewhere/ompi/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/a/mosna/vol/vol0/aa/alexam02/ompi/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Is there a problem with the specific checkout?
</span><br>
<span class="quotelev1">&gt; -How can i solve/work around the problem?
</span><br>
<span class="quotelev1">&gt; (tried removing deguggers directory - error in autogen.sh)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * The i tried again without the modification and it still did the  
</span><br>
<span class="quotelev1">&gt; same error.
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="2168.php">George Bosilca: "Re: [OMPI devel] simple compilation error"</a>
<li><strong>Previous message:</strong> <a href="2166.php">Alexander Margolin: "[OMPI devel] simple compilation error"</a>
<li><strong>In reply to:</strong> <a href="2166.php">Alexander Margolin: "[OMPI devel] simple compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2168.php">George Bosilca: "Re: [OMPI devel] simple compilation error"</a>
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
