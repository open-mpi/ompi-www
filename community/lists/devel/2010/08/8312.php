<?
$subject_val = "Re: [OMPI devel] 1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 23 20:34:39 2010" -->
<!-- isoreceived="20100824003439" -->
<!-- sent="Mon, 23 Aug 2010 17:34:35 -0700" -->
<!-- isosent="20100824003435" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 has been posted" -->
<!-- id="BBCF5B12-13AD-4D51-9CC4-3B1D96F840E6_at_usgs.gov" -->
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
<strong>Date:</strong> 2010-08-23 20:34:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8313.php">Oliver Deppert: "[OMPI devel] openMPI 1.4.2: mpi_write fails on NFSv3 crossmounts"</a>
<li><strong>Previous message:</strong> <a href="8311.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8314.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Reply:</strong> <a href="8314.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI 1.5rc5 make fails for the PGI 10.3 compilers:
<br>
<p>make[2]: Entering directory `/home/baker/openmpi-1.5rc5/opal/tools/ 
<br>
wrappers'
<br>
&nbsp;&nbsp;&nbsp;CC     opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;CCLD   opal_wrapper
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to  
<br>
`pthread_create'
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to `assert'
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to  
<br>
`pthread_mutex_trylock'
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to  
<br>
`pthread_atfork'
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to  
<br>
`pthread_join'
<br>
make[2]: *** [opal_wrapper] Error 2
<br>
make[2]: Leaving directory `/home/baker/openmpi-1.5rc5/opal/tools/ 
<br>
wrappers'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/baker/openmpi-1.5rc5/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>I have not had time yet to track this down.  I am at a conference  
<br>
today and tomorrow, so I might not have time to look into this until  
<br>
Wednesday.
<br>
<p>I configured OpenMPI with:
<br>
<p>[baker_at_hydra openmpi-1.5rc5]$ ./configure &gt;configure.log 2&gt;&amp;1    -- 
<br>
prefix=/opt/pgi/linux86-64/10.3/openmpi-1.5rc5 --with-sge    --with- 
<br>
wrapper-cflags=&quot;-DNO_PGI_OFFSET&quot;    --with-wrapper-cxxflags=&quot;- 
<br>
DNO_PGI_OFFSET&quot;    CC=&quot;pgcc -m64&quot;    CFLAGS=&quot;-g -fast -tp amd64 - 
<br>
DNO_PGI_OFFSET&quot;    CXX=&quot;pgcpp -m64&quot;    CXXFLAGS=&quot;-g -fast -tp amd64 - 
<br>
DNO_PGI_OFFSET&quot;    FC=&quot;pgf90 -m64&quot;    FCFLAGS=&quot;-g -fast -tp amd64&quot;     
<br>
F77=&quot;pgf90 -m64&quot;    FFLAGS=&quot;-g -fast -tp amd64&quot;
<br>
<p>The O/S is CentOS 4.5 Linux x86_64:
<br>
<p>[baker_at_hydra ~]$ cat /etc/redhat-release CentOS release 4.5 (Final)
<br>
[baker_at_hydra ~]$ uname -a
<br>
Linux hydra.wr.usgs.gov 2.6.9-55.0.2.ELsmp #1 SMP Tue Jun 26 14:14:47  
<br>
EDT 2007 x86_64 x86_64 x86_64 GNU/Linux
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
<li><strong>Next message:</strong> <a href="8313.php">Oliver Deppert: "[OMPI devel] openMPI 1.4.2: mpi_write fails on NFSv3 crossmounts"</a>
<li><strong>Previous message:</strong> <a href="8311.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8314.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Reply:</strong> <a href="8314.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
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
