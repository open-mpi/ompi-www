<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 28 11:32:44 2005" -->
<!-- isoreceived="20050928163244" -->
<!-- sent="Wed, 28 Sep 2005 10:32:36 -0600" -->
<!-- isosent="20050928163236" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="Re:  Back to 32bit on 64bit machines..." -->
<!-- id="433AC5A4.5020404_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20050927201208.GA5447_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2005-09-28 11:32:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0426.php">Jeff Squyres: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Previous message:</strong> <a href="0424.php">Greg Watson: "Re:  bproc question"</a>
<li><strong>In reply to:</strong> <a href="0420.php">Ralf Wildenhues: "Re:  Back to 32bit on 64bit machines..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0426.php">Jeff Squyres: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Reply:</strong> <a href="0426.php">Jeff Squyres: "Re:  Back to 32bit on 64bit machines..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI, this worked and OMPI compiled but mpicc tries to use the 64bit 
<br>
libraries.  Doesn't appear that -m32 is being passed in the configure or 
<br>
whatever down into mpicc.  Once I dropped -m32 on my mpicc I was able to 
<br>
do 32bit compiles using mpicc on a 64bit machine.
<br>
<p>Looks like there's definately some libtool problems running around.
<br>
<p><span class="quotelev1">&gt; [sparkplug]~/ompi-test &gt; mpicc -o test-mpi test-mpi.c
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse-linux/bin/ld: 
</span><br>
<span class="quotelev1">&gt; skipping incompatible /home/ndebard/local/ompi/lib/libmpi.so when 
</span><br>
<span class="quotelev1">&gt; searching for -lmpi
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse-linux/bin/ld: 
</span><br>
<span class="quotelev1">&gt; cannot find -lmpi
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi-test &gt;
</span><br>
<p><span class="quotelev1">&gt; [sparkplug]~/ompi-test &gt; mpicc -showme
</span><br>
<span class="quotelev1">&gt; gcc -I/home/ndebard/local/ompi/include 
</span><br>
<span class="quotelev1">&gt; -I/home/ndebard/local/ompi/include/openmpi 
</span><br>
<span class="quotelev1">&gt; -I/home/ndebard/local/ompi/include/openmpi/opal 
</span><br>
<span class="quotelev1">&gt; -I/home/ndebard/local/ompi/include/openmpi/orte 
</span><br>
<span class="quotelev1">&gt; -I/home/ndebard/local/ompi/include/openmpi/ompi 
</span><br>
<span class="quotelev1">&gt; -L/home/ndebard/local/ompi/lib -lmpi -lorte -lopal -lutil -lnsl -ldl 
</span><br>
<span class="quotelev1">&gt; -Wl,--export-dynamic -lm -lutil -lnsl -ldl
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi-test &gt;
</span><br>
<p><span class="quotelev1">&gt; [sparkplug]~/ompi-test &gt;
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi-test &gt; mpicc -m32 -o test-mpi test-mpi.c
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi-test &gt; 
</span><br>
<p><p>-- Nathan
<br>
Correspondence
<br>
---------------------------------------------------------------------
<br>
Nathan DeBardeleben, Ph.D.
<br>
Los Alamos National Laboratory
<br>
Parallel Tools Team
<br>
High Performance Computing Environments
<br>
phone: 505-667-3428
<br>
email: ndebard_at_[hidden]
<br>
---------------------------------------------------------------------
<br>
<p><p><p>Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt;Hi Nathan, Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* Jeff Squyres wrote on Tue, Sep 27, 2005 at 09:39:59PM CEST:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;This looks like it *might* be a libtool problem -- it's picking up the  
</span><br>
<span class="quotelev2">&gt;&gt;/usr/lib64/libstdc++.so when you're compiling in 32 bit mode (and  
</span><br>
<span class="quotelev2">&gt;&gt;therefore barfing).
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yep, I think it is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Can you send the libtool command that immediately preceded this link  
</span><br>
<span class="quotelev2">&gt;&gt;line?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;As a workaround, you should be able to --disable-cxx to disable the MPI  
</span><br>
<span class="quotelev2">&gt;&gt;C++ bindings, and therefore skip building in this tree.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Other, better-suited workarounds: either
</span><br>
<span class="quotelev1">&gt;- remove the 64bit paths from compiler_lib_search_path and
</span><br>
<span class="quotelev1">&gt;  sys_lib_search_path_spec in the generated libtool script(s)
</span><br>
<span class="quotelev1">&gt;  (note these variables are set both at the very beginning,
</span><br>
<span class="quotelev1">&gt;  and at the very end, once for each source file language),
</span><br>
<span class="quotelev1">&gt;or
</span><br>
<span class="quotelev1">&gt;- link with &quot;LDFLAGS=-L/usr/lib&quot;, if /usr/lib is where your 
</span><br>
<span class="quotelev1">&gt;  32-bit libstdc++.so is located.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We're not really sure yet how to fix this for all distributions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sorry for the inconvenience,
</span><br>
<span class="quotelev1">&gt;Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Sep 27, 2005, at 3:23 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;So is this an error or am I configuring wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Here's my configure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[sparkplug]~/ompi &gt; ./configure CFLAGS=-m32 FFLAGS=-m32 CXXFLAGS=-m32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--without-threads --prefix=/home/ndebard/local/ompi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--with-devel-headers --without-gm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I've also tried adding --build=i586-suse-linux, that didn't help  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;either.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Basically the compile eventually ends here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; g++ -DHAVE_CONFIG_H -I. -I. -I../../../include -I../../../include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-I../../../include -I../../.. -I../../.. -I../../../include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-I../../../opal -I../../../orte -I../../../ompi -m32 -g -Wall -Wundef
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-Wno-long-long -finline-functions -MT comm.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;.deps/comm.Tpo -c comm.cc  -fPIC -DPIC -o .libs/comm.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/bin/sh ../../../libtool --mode=link g++  -m32 -g -Wall -Wundef
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-Wno-long-long -finline-functions   -export-dynamic   -o libmpi_cxx.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-rpath /home/ndebard/local/ompi/lib  mpicxx.lo intercepts.lo comm.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-lm  -lutil -lnsl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;g++ -shared -nostdlib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../lib/crti.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/32/crtbeginS.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;.libs/mpicxx.o .libs/intercepts.o .libs/comm.o  -lutil -lnsl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;linux/lib/../lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;linux/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-L/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../.. -L/lib/../lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-L/usr/lib/../lib /usr/lib64/libstdc++.so -lm -lc -lgcc_s_32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/32/crtendS.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../lib/crtn.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-m32 -Wl,-soname -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/usr/lib64/libstdc++.so: could not read symbols: Invalid operation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;collect2: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;make[3]: *** [libmpi_cxx.la] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;make[3]: Leaving directory `/home/ndebard/ompi/ompi/mpi/cxx'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;make[2]: Leaving directory `/home/ndebard/ompi/ompi/mpi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;make[1]: Leaving directory `/home/ndebard/ompi/ompi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[sparkplug]~/ompi &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I'm having problems I think might be 64bit related and want to prove it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;by building in 32bit mode.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Oh, here's some basics if it helps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[sparkplug]~/ompi &gt; cat /etc/issue
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Welcome to SuSE Linux 9.1 (x86-64) - Kernel \r (\l).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[sparkplug]~/ompi &gt; uname -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Linux sparkplug 2.6.10 #4 SMP Wed Jan 26 11:50:00 MST 2005 x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[sparkplug]~/ompi &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0426.php">Jeff Squyres: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Previous message:</strong> <a href="0424.php">Greg Watson: "Re:  bproc question"</a>
<li><strong>In reply to:</strong> <a href="0420.php">Ralf Wildenhues: "Re:  Back to 32bit on 64bit machines..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0426.php">Jeff Squyres: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Reply:</strong> <a href="0426.php">Jeff Squyres: "Re:  Back to 32bit on 64bit machines..."</a>
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
