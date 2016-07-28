<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 28 12:13:00 2005" -->
<!-- isoreceived="20050928171300" -->
<!-- sent="Wed, 28 Sep 2005 13:12:51 -0400" -->
<!-- isosent="20050928171251" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Back to 32bit on 64bit machines..." -->
<!-- id="b58aff7b35816d9bf210b280e2ac5273_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="433AC5A4.5020404_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-09-28 12:12:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0427.php">Greg Watson: "--map question"</a>
<li><strong>Previous message:</strong> <a href="0425.php">Nathan DeBardeleben: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>In reply to:</strong> <a href="0425.php">Nathan DeBardeleben: "Re:  Back to 32bit on 64bit machines..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I think that mpicc is doing exactly the Right Thing.
<br>
<p>If you don't specify -m32, the underlying compiler is going to default  
<br>
to 64 bit builds (and libraries), so it naturally tries the /usr/lib64  
<br>
stuff.  But when you supply -m32, it knows that you want to do 32 bit  
<br>
builds and uses /usr/lib.
<br>
<p>This is the same as it would be if you used gcc natively (remember that  
<br>
mpicc is simply a wrapper around invoking the underlying compiler --  
<br>
all it does is maniuplate your argv and then invoke the underlying  
<br>
compiler).
<br>
<p><p><p>On Sep 28, 2005, at 12:32 PM, Nathan DeBardeleben wrote:
<br>
<p><span class="quotelev1">&gt; FYI, this worked and OMPI compiled but mpicc tries to use the 64bit
</span><br>
<span class="quotelev1">&gt; libraries.  Doesn't appear that -m32 is being passed in the configure  
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; whatever down into mpicc.  Once I dropped -m32 on my mpicc I was able  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; do 32bit compiles using mpicc on a 64bit machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like there's definately some libtool problems running around.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi-test &gt; mpicc -o test-mpi test-mpi.c
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev2">&gt;&gt; linux/bin/ld:
</span><br>
<span class="quotelev2">&gt;&gt; skipping incompatible /home/ndebard/local/ompi/lib/libmpi.so when
</span><br>
<span class="quotelev2">&gt;&gt; searching for -lmpi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev2">&gt;&gt; linux/bin/ld:
</span><br>
<span class="quotelev2">&gt;&gt; cannot find -lmpi
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi-test &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi-test &gt; mpicc -showme
</span><br>
<span class="quotelev2">&gt;&gt; gcc -I/home/ndebard/local/ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/home/ndebard/local/ompi/include/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; -I/home/ndebard/local/ompi/include/openmpi/opal
</span><br>
<span class="quotelev2">&gt;&gt; -I/home/ndebard/local/ompi/include/openmpi/orte
</span><br>
<span class="quotelev2">&gt;&gt; -I/home/ndebard/local/ompi/include/openmpi/ompi
</span><br>
<span class="quotelev2">&gt;&gt; -L/home/ndebard/local/ompi/lib -lmpi -lorte -lopal -lutil -lnsl -ldl
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,--export-dynamic -lm -lutil -lnsl -ldl
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi-test &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi-test &gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi-test &gt; mpicc -m32 -o test-mpi test-mpi.c
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi-test &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Nathan, Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Jeff Squyres wrote on Tue, Sep 27, 2005 at 09:39:59PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This looks like it *might* be a libtool problem -- it's picking up  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/libstdc++.so when you're compiling in 32 bit mode (and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; therefore barfing).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yep, I think it is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you send the libtool command that immediately preceded this link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a workaround, you should be able to --disable-cxx to disable the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C++ bindings, and therefore skip building in this tree.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Other, better-suited workarounds: either
</span><br>
<span class="quotelev2">&gt;&gt; - remove the 64bit paths from compiler_lib_search_path and
</span><br>
<span class="quotelev2">&gt;&gt;  sys_lib_search_path_spec in the generated libtool script(s)
</span><br>
<span class="quotelev2">&gt;&gt;  (note these variables are set both at the very beginning,
</span><br>
<span class="quotelev2">&gt;&gt;  and at the very end, once for each source file language),
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; - link with &quot;LDFLAGS=-L/usr/lib&quot;, if /usr/lib is where your
</span><br>
<span class="quotelev2">&gt;&gt;  32-bit libstdc++.so is located.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We're not really sure yet how to fix this for all distributions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the inconvenience,
</span><br>
<span class="quotelev2">&gt;&gt; Ralf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 27, 2005, at 3:23 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So is this an error or am I configuring wrong?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's my configure:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sparkplug]~/ompi &gt; ./configure CFLAGS=-m32 FFLAGS=-m32  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CXXFLAGS=-m32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --without-threads --prefix=/home/ndebard/local/ompi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --with-devel-headers --without-gm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've also tried adding --build=i586-suse-linux, that didn't help
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; either.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Basically the compile eventually ends here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; g++ -DHAVE_CONFIG_H -I. -I. -I../../../include -I../../../include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I../../../include -I../../.. -I../../.. -I../../../include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I../../../opal -I../../../orte -I../../../ompi -m32 -g -Wall  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Wundef
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Wno-long-long -finline-functions -MT comm.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .deps/comm.Tpo -c comm.cc  -fPIC -DPIC -o .libs/comm.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /bin/sh ../../../libtool --mode=link g++  -m32 -g -Wall -Wundef
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Wno-long-long -finline-functions   -export-dynamic   -o  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rpath /home/ndebard/local/ompi/lib  mpicxx.lo intercepts.lo  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comm.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -lm  -lutil -lnsl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; g++ -shared -nostdlib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../lib/crti.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/32/crtbeginS.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .libs/mpicxx.o .libs/intercepts.o .libs/comm.o  -lutil -lnsl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; suse-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; linux/lib/../lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; suse-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; linux/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../.. -L/lib/../lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -L/usr/lib/../lib /usr/lib64/libstdc++.so -lm -lc -lgcc_s_32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/32/crtendS.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../lib/crtn.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -m32 -Wl,-soname -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/libstdc++.so: could not read symbols: Invalid operation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: *** [libmpi_cxx.la] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: Leaving directory `/home/ndebard/ompi/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory `/home/ndebard/ompi/ompi/mpi'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/ndebard/ompi/ompi'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sparkplug]~/ompi &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm having problems I think might be 64bit related and want to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prove it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by building in 32bit mode.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oh, here's some basics if it helps.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sparkplug]~/ompi &gt; cat /etc/issue
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Welcome to SuSE Linux 9.1 (x86-64) - Kernel \r (\l).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sparkplug]~/ompi &gt; uname -a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Linux sparkplug 2.6.10 #4 SMP Wed Jan 26 11:50:00 MST 2005 x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sparkplug]~/ompi &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0427.php">Greg Watson: "--map question"</a>
<li><strong>Previous message:</strong> <a href="0425.php">Nathan DeBardeleben: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>In reply to:</strong> <a href="0425.php">Nathan DeBardeleben: "Re:  Back to 32bit on 64bit machines..."</a>
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
