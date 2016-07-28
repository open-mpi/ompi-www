<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 27 14:40:08 2005" -->
<!-- isoreceived="20050927194008" -->
<!-- sent="Tue, 27 Sep 2005 15:39:59 -0400" -->
<!-- isosent="20050927193959" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Back to 32bit on 64bit machines..." -->
<!-- id="60303c8b99ec6e3226e5da215ad6aad5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43399C35.5020807_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-09-27 14:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0420.php">Ralf Wildenhues: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Previous message:</strong> <a href="0418.php">Nathan DeBardeleben: "Back to 32bit on 64bit machines..."</a>
<li><strong>In reply to:</strong> <a href="0418.php">Nathan DeBardeleben: "Back to 32bit on 64bit machines..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0420.php">Ralf Wildenhues: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Reply:</strong> <a href="0420.php">Ralf Wildenhues: "Re:  Back to 32bit on 64bit machines..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like it *might* be a libtool problem -- it's picking up the  
<br>
/usr/lib64/libstdc++.so when you're compiling in 32 bit mode (and  
<br>
therefore barfing).
<br>
<p>Can you send the libtool command that immediately preceded this link  
<br>
line?
<br>
<p>As a workaround, you should be able to --disable-cxx to disable the MPI  
<br>
C++ bindings, and therefore skip building in this tree.
<br>
<p>Ralf -- any thoughts?
<br>
<p><p><p>On Sep 27, 2005, at 3:23 PM, Nathan DeBardeleben wrote:
<br>
<p><span class="quotelev1">&gt; So is this an error or am I configuring wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's my configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi &gt; ./configure CFLAGS=-m32 FFLAGS=-m32 CXXFLAGS=-m32
</span><br>
<span class="quotelev2">&gt;&gt; --without-threads --prefix=/home/ndebard/local/ompi
</span><br>
<span class="quotelev2">&gt;&gt; --with-devel-headers --without-gm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've also tried adding --build=i586-suse-linux, that didn't help  
</span><br>
<span class="quotelev1">&gt; either.
</span><br>
<span class="quotelev1">&gt; Basically the compile eventually ends here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  g++ -DHAVE_CONFIG_H -I. -I. -I../../../include -I../../../include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../include -I../../.. -I../../.. -I../../../include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../opal -I../../../orte -I../../../ompi -m32 -g -Wall -Wundef
</span><br>
<span class="quotelev2">&gt;&gt; -Wno-long-long -finline-functions -MT comm.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; .deps/comm.Tpo -c comm.cc  -fPIC -DPIC -o .libs/comm.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../libtool --mode=link g++  -m32 -g -Wall -Wundef
</span><br>
<span class="quotelev2">&gt;&gt; -Wno-long-long -finline-functions   -export-dynamic   -o libmpi_cxx.la
</span><br>
<span class="quotelev2">&gt;&gt; -rpath /home/ndebard/local/ompi/lib  mpicxx.lo intercepts.lo comm.lo
</span><br>
<span class="quotelev2">&gt;&gt; -lm  -lutil -lnsl
</span><br>
<span class="quotelev2">&gt;&gt; g++ -shared -nostdlib
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../lib/crti.o
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/32/crtbeginS.o
</span><br>
<span class="quotelev2">&gt;&gt; .libs/mpicxx.o .libs/intercepts.o .libs/comm.o  -lutil -lnsl
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/32
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev2">&gt;&gt; linux/lib/../lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev2">&gt;&gt; linux/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../.. -L/lib/../lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/../lib /usr/lib64/libstdc++.so -lm -lc -lgcc_s_32
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/32/crtendS.o
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../lib/crtn.o
</span><br>
<span class="quotelev2">&gt;&gt; -m32 -Wl,-soname -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/libstdc++.so: could not read symbols: Invalid operation
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [libmpi_cxx.la] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/home/ndebard/ompi/ompi/mpi/cxx'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/ndebard/ompi/ompi/mpi'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/ndebard/ompi/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having problems I think might be 64bit related and want to prove it
</span><br>
<span class="quotelev1">&gt; by building in 32bit mode.
</span><br>
<span class="quotelev1">&gt; Oh, here's some basics if it helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi &gt; cat /etc/issue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Welcome to SuSE Linux 9.1 (x86-64) - Kernel \r (\l).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi &gt; uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux sparkplug 2.6.10 #4 SMP Wed Jan 26 11:50:00 MST 2005 x86_64
</span><br>
<span class="quotelev2">&gt;&gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -- Nathan
</span><br>
<span class="quotelev1">&gt; Correspondence
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt; phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
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
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0420.php">Ralf Wildenhues: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Previous message:</strong> <a href="0418.php">Nathan DeBardeleben: "Back to 32bit on 64bit machines..."</a>
<li><strong>In reply to:</strong> <a href="0418.php">Nathan DeBardeleben: "Back to 32bit on 64bit machines..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0420.php">Ralf Wildenhues: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Reply:</strong> <a href="0420.php">Ralf Wildenhues: "Re:  Back to 32bit on 64bit machines..."</a>
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
