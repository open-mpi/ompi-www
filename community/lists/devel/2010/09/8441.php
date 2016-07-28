<?
$subject_val = "Re: [OMPI devel] 1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 14:40:53 2010" -->
<!-- isoreceived="20100901184053" -->
<!-- sent="Wed, 1 Sep 2010 11:40:49 -0700" -->
<!-- isosent="20100901184049" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 has been posted" -->
<!-- id="796C0216-B287-43F5-886D-8505A36ACF15_at_usgs.gov" -->
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
<strong>Date:</strong> 2010-09-01 14:40:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8442.php">Steve Wise: "[OMPI devel] openib btl - fatal errors don't abort the job"</a>
<li><strong>Previous message:</strong> <a href="8440.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8443.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I managed to compile OpenMPI 1.5rc5 on Linux x86_64 using the PGI 10.3  
<br>
compilers.  All validation tests passed.  I have attached the  
<br>
procedure I followed and the patches I applied to 1.5rc5.  I did not  
<br>
spend the time to find out how to fix configure to include -pthread in  
<br>
the LIBS Makefile variable definition; I made a brute-force change to  
<br>
all the Makefiles after configure ran.  (FYI: make recreates all the  
<br>
Makefiles -- I don't know why that is.)  Also, my patch to otfprofile  
<br>
will require fixes to configure/libtool to determine the proper  
<br>
selection of the -mp option for pre-10.x PGI compilers.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p>Development environment:
<br>
<p><span class="quotelev1">&gt; [baker_at_hydra ~]$ cat /etc/redhat-release
</span><br>
<span class="quotelev1">&gt; CentOS release 4.5 (Final)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [baker_at_hydra ~]$ uname -a
</span><br>
<span class="quotelev1">&gt; Linux hydra.wr.usgs.gov 2.6.9-55.0.2.ELsmp #1 SMP Tue Jun 26  
</span><br>
<span class="quotelev1">&gt; 14:14:47 EDT 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [baker_at_hydra ~]$ rpm -q -a | grep gcc
</span><br>
<span class="quotelev1">&gt; gcc-3.4.6-8
</span><br>
<span class="quotelev1">&gt; gcc4-4.1.1-53.EL4
</span><br>
<span class="quotelev1">&gt; compat-libgcc-296-2.96-132.7.2
</span><br>
<span class="quotelev1">&gt; libgcc-3.4.6-8
</span><br>
<span class="quotelev1">&gt; globus_scheduler_event_generator_sge_gcc64_rtl-1.1-0
</span><br>
<span class="quotelev1">&gt; gcc-c++-3.4.6-8
</span><br>
<span class="quotelev1">&gt; libgcc-3.4.6-8
</span><br>
<span class="quotelev1">&gt; globus_scheduler_event_generator_sge_gcc64_dev-1.1-0
</span><br>
<span class="quotelev1">&gt; gcc-g77-3.4.6-8
</span><br>
<span class="quotelev1">&gt; gcc4-gfortran-4.1.1-53.EL4
</span><br>
<p>Login as root, then type:
<br>
<p><span class="quotelev1">&gt; [root_at_hydra ~]# cd /usr/local/src
</span><br>
<span class="quotelev1">&gt; [root_at_hydra src]# sh make-openmpi-1.5rc5-pgi.sh
</span><br>
<p>make-openmpi-1.5rc5-pgi.sh:
<br>
<p><span class="quotelev1">&gt; # Patch OpenMPI 1.5rc5
</span><br>
<span class="quotelev1">&gt; cd /usr/local/src
</span><br>
<span class="quotelev1">&gt; tar -xjf openmpi-1.5rc5.tar.bz2
</span><br>
<span class="quotelev1">&gt; source patch-openmpi-1.5rc5.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Configure OpenMPI 1.5rc5 for PGI 10.3 compilers
</span><br>
<span class="quotelev1">&gt; cd openmpi-1.5rc5
</span><br>
<span class="quotelev1">&gt; export PGI_DIR=/opt/pgi/linux86-64/10.3
</span><br>
<span class="quotelev1">&gt; export PATH=$PGI_DIR/bin:$PATH
</span><br>
<span class="quotelev1">&gt; ./configure &gt;configure.log 2&gt;&amp;1 \
</span><br>
<span class="quotelev1">&gt;    --prefix=$PGI_DIR/openmpi --with-sge \
</span><br>
<span class="quotelev1">&gt;    --with-wrapper-cflags=&quot;-DNO_PGI_OFFSET&quot; \
</span><br>
<span class="quotelev1">&gt;    --with-wrapper-cxxflags=&quot;-DNO_PGI_OFFSET&quot; \
</span><br>
<span class="quotelev1">&gt;    CC=&quot;pgcc -m64&quot; \
</span><br>
<span class="quotelev1">&gt;    CFLAGS=&quot;-g -O3 -tp amd64 -DNO_PGI_OFFSET&quot; \
</span><br>
<span class="quotelev1">&gt;    CXX=&quot;pgcpp -m64&quot; \
</span><br>
<span class="quotelev1">&gt;    CXXFLAGS=&quot;-g -O3 -tp amd64 -DNO_PGI_OFFSET&quot; \
</span><br>
<span class="quotelev1">&gt;    FC=&quot;pgf90 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;    FCFLAGS=&quot;-g -O3 -tp amd64&quot; \
</span><br>
<span class="quotelev1">&gt;    F77=&quot;pgf90 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;    FFLAGS=&quot;-g -O3 -tp amd64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Would like to do Makefile fixups here, but make recreates them
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Do the make until the link fails
</span><br>
<span class="quotelev1">&gt; make &gt;make_part1.log 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Apply Makefile fixups to add -lpthread to the LIBS variable
</span><br>
<span class="quotelev1">&gt; find . -name Makefile -exec cp {} {}.original ';' \
</span><br>
<span class="quotelev1">&gt; -exec sh -c &quot;sed -e '/^LIBS = -lnsl  -lutil$/s/$/  - 
</span><br>
<span class="quotelev1">&gt; lpthread/' {}.original &gt;{}&quot; ';'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Finish the make
</span><br>
<span class="quotelev1">&gt; make &gt;make_part2.log 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Validate the library
</span><br>
<span class="quotelev1">&gt; make check &gt;check.log 2&gt;&amp;1
</span><br>
<p><p>patch-openmpi-1.5rc5.sh:
<br>
<p><span class="quotelev1">&gt; # Fixes to correctly identify PGI compiler versions 1 through 5
</span><br>
<span class="quotelev1">&gt; mv openmpi-1.5rc5/config/libtool.m4{,.original}
</span><br>
<span class="quotelev1">&gt; sed -e '5899s/\[\[1-5\]\]\*/\[\[1-5\]\].\*/g' \
</span><br>
<span class="quotelev1">&gt;     openmpi-1.5rc5/config/libtool.m4.original \
</span><br>
<span class="quotelev2">&gt;     &gt;openmpi-1.5rc5/config/libtool.m4
</span><br>
<span class="quotelev1">&gt; mv openmpi-1.5rc5/opal/libltdl/m4/libtool.m4{,.original}
</span><br>
<span class="quotelev1">&gt; sed -e '5899s/\[\[1-5\]\]\*/\[\[1-5\]\].\*/g' \
</span><br>
<span class="quotelev1">&gt;     openmpi-1.5rc5/opal/libltdl/m4/libtool.m4.original \
</span><br>
<span class="quotelev2">&gt;     &gt;openmpi-1.5rc5/opal/libltdl/m4/libtool.m4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Disable inline assembly for PGI C++, as is done for PGI C (26246),  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; # Fix PGI C compiler warning (11146, 19215): Pragma ignored - string
</span><br>
<span class="quotelev1">&gt; # expected after #pragma ident
</span><br>
<span class="quotelev1">&gt; mv openmpi-1.5rc5/configure{,.original}
</span><br>
<span class="quotelev1">&gt; sed -e '26246{x;s/^.*$/    if test &quot;$ompi_cv_cxx_compiler_vendor&quot; =  
</span><br>
<span class="quotelev1">&gt; &quot;portland group&quot; ; then/;p;
</span><br>
<span class="quotelev1">&gt;                 s/^.*$/        # PGI seems to have some issues with  
</span><br>
<span class="quotelev1">&gt; our inline assembly./;p;
</span><br>
<span class="quotelev1">&gt;                 s/^.*$/        # Disable for now./;p;
</span><br>
<span class="quotelev1">&gt;                 s/^.*$/        asm_result=&quot;no (Portland Group)&quot;/;p;
</span><br>
<span class="quotelev1">&gt;                 s/^.*$/    else/;G;}' \
</span><br>
<span class="quotelev1">&gt;     -e '26369{x;s/^.*$/    fi/;G;}' \
</span><br>
<span class="quotelev1">&gt;     -e '11146{s/#pragma ident/#define IDENT/;p;
</span><br>
<span class="quotelev1">&gt;               s/^.*$/#pragma ident \$IDENT/;}' \
</span><br>
<span class="quotelev1">&gt;     -e '19215{s/#pragma ident/#define IDENT/;p;
</span><br>
<span class="quotelev1">&gt;               s/^.*$/#pragma ident \$IDENT/;}' \
</span><br>
<span class="quotelev1">&gt;     openmpi-1.5rc5/configure.original \
</span><br>
<span class="quotelev2">&gt;     &gt;openmpi-1.5rc5/configure
</span><br>
<span class="quotelev1">&gt; chmod +x openmpi-1.5rc5/configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Fix PGI compiler warning: Array name used in logical expression
</span><br>
<span class="quotelev1">&gt; mv openmpi-1.5rc5/opal/libltdl/ltdl.h{,.original}
</span><br>
<span class="quotelev1">&gt; sed -e '44s/((s) &amp;&amp; (s)\[0\])/(s!=NULL)/' \
</span><br>
<span class="quotelev1">&gt;     openmpi-1.5rc5/opal/libltdl/ltdl.h.original \
</span><br>
<span class="quotelev2">&gt;     &gt;openmpi-1.5rc5/opal/libltdl/ltdl.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Fix PGI compiler warning: Redefinition of symbol assert (364-370)  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; # Pointer value created from a nonlong integral type (444, 459,  
</span><br>
<span class="quotelev1">&gt; 3446, 3664, 3789)
</span><br>
<span class="quotelev1">&gt; mv openmpi-1.5rc5/opal/mca/memory/ptmalloc2/hooks.c{,.original}
</span><br>
<span class="quotelev1">&gt; sed -e '444s/: 0;/: NULL;/' \
</span><br>
<span class="quotelev1">&gt;     -e '459s/: 0;/: NULL;/' \
</span><br>
<span class="quotelev1">&gt;     openmpi-1.5rc5/opal/mca/memory/ptmalloc2/hooks.c.original \
</span><br>
<span class="quotelev2">&gt;     &gt;openmpi-1.5rc5/opal/mca/memory/ptmalloc2/hooks.c
</span><br>
<span class="quotelev1">&gt; mv openmpi-1.5rc5/opal/mca/memory/ptmalloc2/malloc.c{,.original}
</span><br>
<span class="quotelev1">&gt; sed -e '364,369d' \
</span><br>
<span class="quotelev1">&gt;     -e '370{s/^.*$/#if MALLOC_DEBUG \&amp;\&amp; defined( NDEBUG )/;p;
</span><br>
<span class="quotelev1">&gt;             s/^.*$/#error -DMALLOC_DEBUG is inconsistent with - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG/;p;
</span><br>
<span class="quotelev1">&gt;             s/^.*$/#endif/;p;
</span><br>
<span class="quotelev1">&gt;             s/^.*$//;p;
</span><br>
<span class="quotelev1">&gt;             s/^.*$/#include &lt;assert.h&gt;/;}' \
</span><br>
<span class="quotelev1">&gt;     -e '3446s/: 0,/: NULL,/' \
</span><br>
<span class="quotelev1">&gt;     -e '3664s/: 0,/: NULL,/' \
</span><br>
<span class="quotelev1">&gt;     -e '3789s/: 0,/: NULL,/' \
</span><br>
<span class="quotelev1">&gt;     openmpi-1.5rc5/opal/mca/memory/ptmalloc2/malloc.c.original \
</span><br>
<span class="quotelev2">&gt;     &gt;openmpi-1.5rc5/opal/mca/memory/ptmalloc2/malloc.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Fix PGI compiler error: expected an identifier caused by misplaced  
</span><br>
<span class="quotelev1">&gt; #define that causes
</span><br>
<span class="quotelev1">&gt; # syntax error later in &lt;omp.h&gt; (Note: -mp should be configured by  
</span><br>
<span class="quotelev1">&gt; configure/libtool)
</span><br>
<span class="quotelev1">&gt; mv openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/ 
</span><br>
<span class="quotelev1">&gt; otfprofile.cpp{,.original}
</span><br>
<span class="quotelev1">&gt; sed -e '16,17d' \
</span><br>
<span class="quotelev1">&gt;     -e '19,22d' \
</span><br>
<span class="quotelev1">&gt;     -e '26,28d' \
</span><br>
<span class="quotelev1">&gt;     openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/ 
</span><br>
<span class="quotelev1">&gt; otfprofile.cpp.original \
</span><br>
<span class="quotelev2">&gt;     &gt;openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/ 
</span><br>
<span class="quotelev1">&gt; otfprofile.cpp
</span><br>
<p><p>On Aug 17, 2010, at 2:18 PM, Jeff Squyres wrote:
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
<p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8441/make-openmpi-1.5rc5-pgi.sh">make-openmpi-1.5rc5-pgi.sh</a>
</ul>
<!-- attachment="make-openmpi-1.5rc5-pgi.sh" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8441/patch-openmpi-1.5rc5.sh">patch-openmpi-1.5rc5.sh</a>
</ul>
<!-- attachment="patch-openmpi-1.5rc5.sh" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8442.php">Steve Wise: "[OMPI devel] openib btl - fatal errors don't abort the job"</a>
<li><strong>Previous message:</strong> <a href="8440.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8443.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
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
