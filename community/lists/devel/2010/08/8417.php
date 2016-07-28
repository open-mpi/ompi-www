<?
$subject_val = "Re: [OMPI devel] 1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 30 18:40:05 2010" -->
<!-- isoreceived="20100830224005" -->
<!-- sent="Mon, 30 Aug 2010 15:40:00 -0700" -->
<!-- isosent="20100830224000" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 has been posted" -->
<!-- id="BB58E3D9-7FB5-451E-B16A-98F03289C792_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E90B71C7-2B75-4613-9F41-E6D0F2939F61_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5 has been posted<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-30 18:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8418.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8416.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8418.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI 1.5rc5 fails in opal/tools/wrappers for PGI 10.3 (see <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8312.php">http://www.open-mpi.org/community/lists/devel/2010/08/8312.php</a>) 
<br>
:
<br>
<p><span class="quotelev1">&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/usr/local/src/openmpi-1.5rc5/opal/ 
</span><br>
<span class="quotelev1">&gt; tools/wrappers'
</span><br>
<span class="quotelev1">&gt;   CC     opal_wrapper.o
</span><br>
<span class="quotelev1">&gt;   CCLD   opal_wrapper
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_create'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `assert'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_mutex_trylock'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_atfork'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_join'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/usr/local/src/openmpi-1.5rc5/opal/tools/ 
</span><br>
<span class="quotelev1">&gt; wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/usr/local/src/openmpi-1.5rc5/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p>OpenMPI 1.4.2 does not have this problem.  After the make for OpenMPI  
<br>
1.4.2, I rm'd opal_wrapper and compared the make commands that are  
<br>
issued for 1.4.2:
<br>
<p><span class="quotelev1">&gt; [root_at_hydra wrappers]# cd opal/tools/wrappers
</span><br>
<span class="quotelev1">&gt; [root_at_hydra wrappers]# ls
</span><br>
<span class="quotelev1">&gt; CMakeLists.txt     generic_wrapper.1in    Makefile      
</span><br>
<span class="quotelev1">&gt; Makefile.in              opalcc-wrapper-data.txt.in  opalc++-wrapper- 
</span><br>
<span class="quotelev1">&gt; data.txt.in  opal_wrapper.1    opal_wrapper.c
</span><br>
<span class="quotelev1">&gt; generic_wrapper.1  help-opal-wrapper.txt  Makefile.am  opalcc- 
</span><br>
<span class="quotelev1">&gt; wrapper-data.txt  opalc++-wrapper-data.txt     
</span><br>
<span class="quotelev1">&gt; opal_wrapper                 opal_wrapper.1in  opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; [root_at_hydra wrappers]# rm opal_wrapper
</span><br>
<span class="quotelev1">&gt; rm: remove regular file `opal_wrapper'? y
</span><br>
<span class="quotelev1">&gt; [root_at_hydra wrappers]# make -n
</span><br>
<span class="quotelev1">&gt; rm -f opal_wrapper
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link pgcc -m64  -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; g -O3 -tp amd64 -DNO_PGI_OFFSET   -export-dynamic   -o opal_wrapper  
</span><br>
<span class="quotelev1">&gt; opal_wrapper.o ../../../opal/libopen-pal.la -lnsl -lutil  -lpthread
</span><br>
<p>I see that -lpthread is missing in the 1.5rc5 build:
<br>
<p><span class="quotelev1">&gt; [root_at_hydra wrappers]# cd opal/tools/wrappers
</span><br>
<span class="quotelev1">&gt; [root_at_hydra wrappers]# ls
</span><br>
<span class="quotelev1">&gt; CMakeLists.txt       help-opal-wrapper.txt  Makefile.am  opalcc- 
</span><br>
<span class="quotelev1">&gt; wrapper-data.txt     opalc++-wrapper-data.txt     opal.pc      
</span><br>
<span class="quotelev1">&gt; opal_wrapper.1in  opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; generic_wrapper.1in  Makefile               Makefile.in  opalcc- 
</span><br>
<span class="quotelev1">&gt; wrapper-data.txt.in  opalc++-wrapper-data.txt.in  opal.pc.in   
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c
</span><br>
<span class="quotelev1">&gt; [root_at_hydra wrappers]# make -n
</span><br>
<span class="quotelev1">&gt; rm -f opal_wrapper
</span><br>
<span class="quotelev1">&gt; echo &quot;  CCLD  &quot; opal_wrapper;/bin/sh ../../../libtool --silent -- 
</span><br>
<span class="quotelev1">&gt; tag=CC   --mode=link pgcc -m64  -DNDEBUG -g -O3 -tp amd64 - 
</span><br>
<span class="quotelev1">&gt; DNO_PGI_OFFSET   -export-dynamic  -o opal_wrapper  
</span><br>
<span class="quotelev1">&gt; opal_wrapper.o ../../../opal/libopen-pal.la -lnsl  -lutil
</span><br>
<span class="quotelev1">&gt; echo Creating opal_wrapper.1 man page...
</span><br>
<span class="quotelev1">&gt; sed -e 's/#PACKAGE_NAME#/Open MPI/g' \
</span><br>
<span class="quotelev1">&gt;   -e 's/#PACKAGE_VERSION#/1.5rc5/g' \
</span><br>
<span class="quotelev1">&gt;   -e 's/#OMPI_DATE#/Aug 17, 2010/g' \
</span><br>
<span class="quotelev2">&gt;   &gt; opal_wrapper.1 &lt; opal_wrapper.1in
</span><br>
<p>That account for all the missing pthread_* references.  However, when  
<br>
I manually issue the link command and supply -lpthread, assert is  
<br>
still undefined:
<br>
<p><span class="quotelev1">&gt; [root_at_hydra wrappers]# /bin/sh ../../../libtool --silent --tag=CC    
</span><br>
<span class="quotelev1">&gt; --mode=link pgcc -m64  -DNDEBUG -g -O3 -tp amd64 -DNO_PGI_OFFSET   - 
</span><br>
<span class="quotelev1">&gt; export-dynamic  -o opal_wrapper opal_wrapper.o ../../../opal/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.la -lnsl  -lutil -lpthread
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `assert'
</span><br>
<p>I get the same result when I cut-and-paste the 1.4.2 link command:
<br>
<p><span class="quotelev1">&gt; [root_at_hydra wrappers]# /bin/sh ../../../libtool --tag=CC   -- 
</span><br>
<span class="quotelev1">&gt; mode=link pgcc -m64  -DNDEBUG -g -O3 -tp amd64 -DNO_PGI_OFFSET   - 
</span><br>
<span class="quotelev1">&gt; export-dynamic   -o opal_wrapper opal_wrapper.o ../../../opal/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.la -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev1">&gt; libtool: link: pgcc -m64 -DNDEBUG -g -O3 -tp amd64 -DNO_PGI_OFFSET - 
</span><br>
<span class="quotelev1">&gt; o .libs/opal_wrapper opal_wrapper.o -Wl,--export-dynamic  ../../../ 
</span><br>
<span class="quotelev1">&gt; opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lpthread -Wl,-rpath - 
</span><br>
<span class="quotelev1">&gt; Wl,/opt/pgi/linux86-64/10.3/openmpi/lib
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `assert'
</span><br>
<p>I re-ran the make without my patches, and the assert() reference  
<br>
disappeared:
<br>
<p><span class="quotelev1">&gt; [root_at_hydra openmpi-1.5rc5]# tail make.log
</span><br>
<span class="quotelev1">&gt;   CCLD   opal_wrapper
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_create'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_mutex_trylock'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_atfork'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_join'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/usr/local/src/openmpi-1.5rc5/opal/tools/ 
</span><br>
<span class="quotelev1">&gt; wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/usr/local/src/openmpi-1.5rc5/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p>I don't know why -- -DNDEBUG should have eliminated any declarations  
<br>
from &lt;assert.h&gt;.
<br>
<p>Manually adding -lpthreads makes the link error go away:
<br>
<p><span class="quotelev1">&gt; [root_at_hydra openmpi-1.5rc5]# cd opal/tools/wrappers
</span><br>
<span class="quotelev1">&gt; [root_at_hydra wrappers]# /bin/sh ../../../libtool --silent --tag=CC    
</span><br>
<span class="quotelev1">&gt; --mode=link pgcc -m64  -DNDEBUG -g -O3 -tp amd64 -DNO_PGI_OFFSET   - 
</span><br>
<span class="quotelev1">&gt; export-dynamic  -o opal_wrapper opal_wrapper.o ../../../opal/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.la -lnsl  -lutil -lpthread
</span><br>
<p>It looks like the changes in the opal/tools/wrappers/Makefile  
<br>
(configure/automake?) from 1.4.2 to 1.5rc5 are not supplying the  
<br>
pthreads library correctly to the link step.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On Aug 17, 2010, at 2:18 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; We still have one known possible regression:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But we posted rc5 anyway (there's a bunch of stuff that has been  
</span><br>
<span class="quotelev1">&gt; pending for a while that is now in).  Please test!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8418.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8416.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8418.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
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
