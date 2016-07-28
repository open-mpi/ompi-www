<?
$subject_val = "Re: [OMPI devel] 1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 16:01:01 2010" -->
<!-- isoreceived="20100824200101" -->
<!-- sent="Tue, 24 Aug 2010 09:07:15 -0700" -->
<!-- isosent="20100824160715" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 has been posted" -->
<!-- id="4C73EE33.2050709_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BBCF5B12-13AD-4D51-9CC4-3B1D96F840E6_at_usgs.gov" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 12:07:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8315.php">Ralph Castain: "[OMPI devel] Refactoring opal if.c"</a>
<li><strong>Previous message:</strong> <a href="8313.php">Oliver Deppert: "[OMPI devel] openMPI 1.4.2: mpi_write fails on NFSv3 crossmounts"</a>
<li><strong>In reply to:</strong> <a href="8312.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8417.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have access to PGI compilers 10.{3,4,5,8} on an Opteron/InifiniBand 
<br>
cluster running Scientific Linux 5.4 (an RHEL derivative like the Centos 
<br>
distro).  I can try to reproduce Larry Baker's problems today with the 
<br>
most recent 10.8 compiler.  If there are other things I could/should be 
<br>
trying to complement or confirm Larry's findings, let me know.
<br>
<p>-Paul
<br>
<p>Larry Baker wrote:
<br>
<span class="quotelev1">&gt; OpenMPI 1.5rc5 make fails for the PGI 10.3 compilers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/baker/openmpi-1.5rc5/opal/tools/wrappers'
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
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `pthread_join'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/home/baker/openmpi-1.5rc5/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/baker/openmpi-1.5rc5/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not had time yet to track this down.  I am at a conference 
</span><br>
<span class="quotelev1">&gt; today and tomorrow, so I might not have time to look into this until 
</span><br>
<span class="quotelev1">&gt; Wednesday.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I configured OpenMPI with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [baker_at_hydra openmpi-1.5rc5]$ ./configure &gt;configure.log 2&gt;&amp;1    
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/pgi/linux86-64/10.3/openmpi-1.5rc5 --with-sge    
</span><br>
<span class="quotelev1">&gt; --with-wrapper-cflags=&quot;-DNO_PGI_OFFSET&quot;    
</span><br>
<span class="quotelev1">&gt; --with-wrapper-cxxflags=&quot;-DNO_PGI_OFFSET&quot;    CC=&quot;pgcc -m64&quot;    
</span><br>
<span class="quotelev1">&gt; CFLAGS=&quot;-g -fast -tp amd64 -DNO_PGI_OFFSET&quot;    CXX=&quot;pgcpp -m64&quot;    
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=&quot;-g -fast -tp amd64 -DNO_PGI_OFFSET&quot;    FC=&quot;pgf90 -m64&quot;    
</span><br>
<span class="quotelev1">&gt; FCFLAGS=&quot;-g -fast -tp amd64&quot;    F77=&quot;pgf90 -m64&quot;    FFLAGS=&quot;-g -fast 
</span><br>
<span class="quotelev1">&gt; -tp amd64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The O/S is CentOS 4.5 Linux x86_64:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [baker_at_hydra ~]$ cat /etc/redhat-release CentOS release 4.5 (Final)
</span><br>
<span class="quotelev1">&gt; [baker_at_hydra ~]$ uname -a
</span><br>
<span class="quotelev1">&gt; Linux hydra.wr.usgs.gov 2.6.9-55.0.2.ELsmp #1 SMP Tue Jun 26 14:14:47 
</span><br>
<span class="quotelev1">&gt; EDT 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 17, 2010, at 2:18 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We still have one known possible regression:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But we posted rc5 anyway (there's a bunch of stuff that has been 
</span><br>
<span class="quotelev2">&gt;&gt; pending for a while that is now in).  Please test!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8315.php">Ralph Castain: "[OMPI devel] Refactoring opal if.c"</a>
<li><strong>Previous message:</strong> <a href="8313.php">Oliver Deppert: "[OMPI devel] openMPI 1.4.2: mpi_write fails on NFSv3 crossmounts"</a>
<li><strong>In reply to:</strong> <a href="8312.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8417.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
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
