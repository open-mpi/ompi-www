<?
$subject_val = "Re: [OMPI devel] 1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 13:04:41 2010" -->
<!-- isoreceived="20100831170441" -->
<!-- sent="Tue, 31 Aug 2010 10:04:35 -0700" -->
<!-- isosent="20100831170435" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 has been posted" -->
<!-- id="E4A70746-6329-476D-A724-456491C4C083_at_usgs.gov" -->
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
<strong>Date:</strong> 2010-08-31 13:04:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8424.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8422.php">Ralph Castain: "Re: [OMPI devel] autogen.sh improvements"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8432.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<li><strong>Reply:</strong> <a href="8432.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The make of OpenMPI 1.5rc5 fails for PGI 10.3 in otfprofile:
<br>
<p><span class="quotelev1">&gt; Making all in otfprofile
</span><br>
<span class="quotelev1">&gt; make[9]: Entering directory `/usr/local/src/openmpi-1.5rc5/ompi/ 
</span><br>
<span class="quotelev1">&gt; contrib/vt/vt/extlib/otf/tools/otfprofile'
</span><br>
<span class="quotelev1">&gt;   CXX    otfprofile-otfprofile.o
</span><br>
<span class="quotelev1">&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 41: error: expected an
</span><br>
<span class="quotelev1">&gt;           identifier
</span><br>
<span class="quotelev1">&gt;   extern int omp_get_thread_num(void);
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 43: error: expected an
</span><br>
<span class="quotelev1">&gt;           identifier
</span><br>
<span class="quotelev1">&gt;   extern int omp_get_num_threads(void);
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 errors detected in the compilation of &quot;otfprofile.cpp&quot;.
</span><br>
<p>The errors are coming from an &lt;omp.h&gt; file that comes with the PGI  
<br>
compiler.  I would think OpenMPI would use its own.  The problem is,  
<br>
there isn't one (yet?):
<br>
<p><span class="quotelev1">&gt; [root_at_hydra otfprofile]# find /usr/local/src/openmpi-1.5rc5 -name  
</span><br>
<span class="quotelev1">&gt; omp.h
</span><br>
<p>The C++ file that is using the PGI &lt;omp.h&gt; file is  ompi/contrib/vt/vt/ 
<br>
extlib/otf/tools/otfprofile/otfprofile.cpp:
<br>
<p><span class="quotelev1">&gt; [root_at_hydra otfprofile]# cd ompi/contrib/vt/vt/extlib/otf/tools/ 
</span><br>
<span class="quotelev1">&gt; otfprofile
</span><br>
<span class="quotelev1">&gt; [root_at_hydra otfprofile]# grep omp.h *.cpp
</span><br>
<span class="quotelev1">&gt; otfprofile.cpp:#	include &lt;omp.h&gt;
</span><br>
<p>I ran the compile from make -n to verify that:
<br>
<p><span class="quotelev1">&gt; [root_at_hydra otfprofile]# pgcpp -m64 -DHAVE_CONFIG_H -I. -I../.. - 
</span><br>
<span class="quotelev1">&gt; I../../otflib -I../../otflib  -DINSIDE_OPENMPI  -D_REENTRANT -mp -g - 
</span><br>
<span class="quotelev1">&gt; O3 -tp amd64 -DNO_PGI_OFFSET -c -o otfprofile-otfprofile.o `test -f  
</span><br>
<span class="quotelev1">&gt; 'otfprofile.cpp' || echo './'`otfprofile.cpp
</span><br>
<span class="quotelev1">&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 41: error: expected an
</span><br>
<span class="quotelev1">&gt;           identifier
</span><br>
<span class="quotelev1">&gt;   extern int omp_get_thread_num(void);
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 43: error: expected an
</span><br>
<span class="quotelev1">&gt;           identifier
</span><br>
<span class="quotelev1">&gt;   extern int omp_get_num_threads(void);
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 errors detected in the compilation of &quot;otfprofile.cpp&quot;.
</span><br>
<p>I don't know how to fix this.  Where is otfprofile.cpp expecting to  
<br>
get &lt;omp.h&gt;?  Why isn't it there?  I'm beginning to think this contrib/ 
<br>
vt stuff should not be enabled by default.  I don't know that it is  
<br>
needed in general.
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
<li><strong>Next message:</strong> <a href="8424.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8422.php">Ralph Castain: "Re: [OMPI devel] autogen.sh improvements"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8432.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<li><strong>Reply:</strong> <a href="8432.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
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
