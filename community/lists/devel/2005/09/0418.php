<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 27 14:23:38 2005" -->
<!-- isoreceived="20050927192338" -->
<!-- sent="Tue, 27 Sep 2005 13:23:33 -0600" -->
<!-- isosent="20050927192333" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="Back to 32bit on 64bit machines..." -->
<!-- id="43399C35.5020807_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Nathan DeBardeleben (<em>ndebard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-27 14:23:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0419.php">Jeff Squyres: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Previous message:</strong> <a href="0417.php">Roland Dreier: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0419.php">Jeff Squyres: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Reply:</strong> <a href="0419.php">Jeff Squyres: "Re:  Back to 32bit on 64bit machines..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So is this an error or am I configuring wrong?
<br>
<p>Here's my configure:
<br>
<p><span class="quotelev1">&gt; [sparkplug]~/ompi &gt; ./configure CFLAGS=-m32 FFLAGS=-m32 CXXFLAGS=-m32 
</span><br>
<span class="quotelev1">&gt; --without-threads --prefix=/home/ndebard/local/ompi 
</span><br>
<span class="quotelev1">&gt; --with-devel-headers --without-gm
</span><br>
<p>I've also tried adding --build=i586-suse-linux, that didn't help either.
<br>
Basically the compile eventually ends here:
<br>
<p><span class="quotelev1">&gt;  g++ -DHAVE_CONFIG_H -I. -I. -I../../../include -I../../../include 
</span><br>
<span class="quotelev1">&gt; -I../../../include -I../../.. -I../../.. -I../../../include 
</span><br>
<span class="quotelev1">&gt; -I../../../opal -I../../../orte -I../../../ompi -m32 -g -Wall -Wundef 
</span><br>
<span class="quotelev1">&gt; -Wno-long-long -finline-functions -MT comm.lo -MD -MP -MF 
</span><br>
<span class="quotelev1">&gt; .deps/comm.Tpo -c comm.cc  -fPIC -DPIC -o .libs/comm.o
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --mode=link g++  -m32 -g -Wall -Wundef 
</span><br>
<span class="quotelev1">&gt; -Wno-long-long -finline-functions   -export-dynamic   -o libmpi_cxx.la 
</span><br>
<span class="quotelev1">&gt; -rpath /home/ndebard/local/ompi/lib  mpicxx.lo intercepts.lo comm.lo  
</span><br>
<span class="quotelev1">&gt; -lm  -lutil -lnsl
</span><br>
<span class="quotelev1">&gt; g++ -shared -nostdlib 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../lib/crti.o 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/32/crtbeginS.o  
</span><br>
<span class="quotelev1">&gt; .libs/mpicxx.o .libs/intercepts.o .libs/comm.o  -lutil -lnsl 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/32 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse-linux/lib/../lib 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse-linux/lib 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../lib 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../.. -L/lib/../lib 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/../lib /usr/lib64/libstdc++.so -lm -lc -lgcc_s_32 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/32/crtendS.o 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../lib/crtn.o  
</span><br>
<span class="quotelev1">&gt; -m32 -Wl,-soname -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libstdc++.so: could not read symbols: Invalid operation
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[3]: *** [libmpi_cxx.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/ndebard/ompi/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/ndebard/ompi/ompi/mpi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/ndebard/ompi/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi &gt;
</span><br>
<p>I'm having problems I think might be 64bit related and want to prove it 
<br>
by building in 32bit mode.
<br>
Oh, here's some basics if it helps.
<br>
<p><span class="quotelev1">&gt; [sparkplug]~/ompi &gt; cat /etc/issue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Welcome to SuSE Linux 9.1 (x86-64) - Kernel \r (\l).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi &gt; uname -a
</span><br>
<span class="quotelev1">&gt; Linux sparkplug 2.6.10 #4 SMP Wed Jan 26 11:50:00 MST 2005 x86_64 
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi &gt; 
</span><br>
<p><p><pre>
-- 
-- Nathan
Correspondence
---------------------------------------------------------------------
Nathan DeBardeleben, Ph.D.
Los Alamos National Laboratory
Parallel Tools Team
High Performance Computing Environments
phone: 505-667-3428
email: ndebard_at_[hidden]
---------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0419.php">Jeff Squyres: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Previous message:</strong> <a href="0417.php">Roland Dreier: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0419.php">Jeff Squyres: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Reply:</strong> <a href="0419.php">Jeff Squyres: "Re:  Back to 32bit on 64bit machines..."</a>
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
