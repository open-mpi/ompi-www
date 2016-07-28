<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 17:25:56 2006" -->
<!-- isoreceived="20060410212556" -->
<!-- sent="Mon, 10 Apr 2006 15:25:52 -0600" -->
<!-- isosent="20060410212552" -->
<!-- name="David Daniel" -->
<!-- email="ddd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF" -->
<!-- id="2DAA639F-F97C-4C31-BDF3-4A8C25934E3F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A9657269-EE04-4442-9AE2-3D37AA01440B_at_apple.com" -->
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
<strong>From:</strong> David Daniel (<em>ddd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 17:25:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1008.php">Michael Kluskens: "[OMPI users] ORTE errors"</a>
<li><strong>Previous message:</strong> <a href="1006.php">Charles Williams: "Re: [OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<li><strong>In reply to:</strong> <a href="1005.php">Warner Yuen: "[OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps this is a bug in xlc++.  Maybe this one...
<br>
<p><a href="http://www-1.ibm.com/support/docview.wss?uid=swg1IY78555">http://www-1.ibm.com/support/docview.wss?uid=swg1IY78555</a>
<br>
<p>My (untested) guess is that removing the const_cast will allow it to  
<br>
compile, i.e. in ompi/mpi/cxx/group_inln.h replace
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const_cast&lt;int(*)[3]&gt;(ranges)
<br>
by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ranges
<br>
<p>David
<br>
<p><p>On Apr 10, 2006, at 12:17 PM, Warner Yuen wrote:
<br>
<p><span class="quotelev1">&gt; I'm running Mac OS X v 10.3.9 Panther and tried to get OpenMPI to  
</span><br>
<span class="quotelev1">&gt; compile with IBM XLC and XLF. The compilation failed, any ideas  
</span><br>
<span class="quotelev1">&gt; what might be going wrong? I used the following settings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export CC=/opt/ibmcmp/vacpp/6.0/bin/xlc
</span><br>
<span class="quotelev1">&gt; export CXX=/opt/ibmcmp/vacpp/6.0/bin/xlc++
</span><br>
<span class="quotelev1">&gt; export CFLAGS=&quot;-O3&quot;
</span><br>
<span class="quotelev1">&gt; export CXXFLAGS=&quot;-O3&quot;
</span><br>
<span class="quotelev1">&gt; export FFLAGS=&quot;-O3&quot;
</span><br>
<span class="quotelev1">&gt; ./configure --with-gm=/opt/gm --prefix=/home/warner/mpi_src/ompi102
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ranlib .libs/libmpi_c_mpi.a
</span><br>
<span class="quotelev1">&gt; creating libmpi_c_mpi.la
</span><br>
<span class="quotelev1">&gt; (cd .libs &amp;&amp; rm -f libmpi_c_mpi.la &amp;&amp; ln -s ../libmpi_c_mpi.la  
</span><br>
<span class="quotelev1">&gt; libmpi_c_mpi.la)
</span><br>
<span class="quotelev1">&gt; Making all in cxx
</span><br>
<span class="quotelev1">&gt; source='mpicxx.cc' object='mpicxx.lo' libtool=yes \
</span><br>
<span class="quotelev1">&gt; DEPDIR=.deps depmode=none /bin/sh ../../.././config/depcomp \
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX --mode=compile /opt/ibmcmp/vacpp/ 
</span><br>
<span class="quotelev1">&gt; 6.0/bin/xlc++ -DHAVE_CONFIG_H -I. -I. -I../../../include -I../../../ 
</span><br>
<span class="quotelev1">&gt; include   -I../../../include -I../../.. -I../../.. -I../../../ 
</span><br>
<span class="quotelev1">&gt; include -I../../../opal -I../../../orte -I../../../ompi  - 
</span><br>
<span class="quotelev1">&gt; D_REENTRANT  -DNDEBUG -O3  -c -o mpicxx.lo mpicxx.cc
</span><br>
<span class="quotelev1">&gt; mkdir .libs
</span><br>
<span class="quotelev1">&gt; /opt/ibmcmp/vacpp/6.0/bin/xlc++ -DHAVE_CONFIG_H -I. -I. -I../../../ 
</span><br>
<span class="quotelev1">&gt; include -I../../../include -I../../../include -I../../.. -I../../..  
</span><br>
<span class="quotelev1">&gt; -I../../../include -I../../../opal -I../../../orte -I../../../ompi - 
</span><br>
<span class="quotelev1">&gt; D_REENTRANT -DNDEBUG -O3 -c mpicxx.cc  -qnocommon -DPIC -o .libs/ 
</span><br>
<span class="quotelev1">&gt; mpicxx.o
</span><br>
<span class="quotelev1">&gt; &quot;../../../ompi/mpi/cxx/group_inln.h&quot;, line 100.66: 1540-0216 (S) An  
</span><br>
<span class="quotelev1">&gt; expression of type &quot;const int [][3]&quot; cannot be converted to type  
</span><br>
<span class="quotelev1">&gt; &quot;int (*)[3]&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;../../../ompi/mpi/cxx/group_inln.h&quot;, line 108.66: 1540-0216 (S) An  
</span><br>
<span class="quotelev1">&gt; expression of type &quot;const int [][3]&quot; cannot be converted to type  
</span><br>
<span class="quotelev1">&gt; &quot;int (*)[3]&quot;.
</span><br>
<span class="quotelev1">&gt; make[3]: *** [mpicxx.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Thanks and have an OpenMPI day!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warner Yuen
</span><br>
<span class="quotelev1">&gt; Apple Computer
</span><br>
<span class="quotelev1">&gt; email: wyuen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tel: 408.718.2859
</span><br>
<span class="quotelev1">&gt; Fax: 408.715.0133
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1008.php">Michael Kluskens: "[OMPI users] ORTE errors"</a>
<li><strong>Previous message:</strong> <a href="1006.php">Charles Williams: "Re: [OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<li><strong>In reply to:</strong> <a href="1005.php">Warner Yuen: "[OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
<!-- nextthread="start" -->
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
