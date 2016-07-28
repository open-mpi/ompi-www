<?
$subject_val = "[OMPI devel] Fwd:  1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 20:21:18 2010" -->
<!-- isoreceived="20100901002118" -->
<!-- sent="Tue, 31 Aug 2010 17:21:13 -0700" -->
<!-- isosent="20100901002113" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd:  1.5rc5 has been posted" -->
<!-- id="6D609BCD-E17F-428C-AAB6-62086F159C18_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E4A70746-6329-476D-A724-456491C4C083_at_usgs.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd:  1.5rc5 has been posted<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-31 20:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8433.php">Larry Baker: "[OMPI devel] Fwd:  Fwd:  1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8431.php">ananda.mudar_at_[hidden]: "[OMPI devel] Possible memory leak"</a>
<li><strong>In reply to:</strong> <a href="8423.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8433.php">Larry Baker: "[OMPI devel] Fwd:  Fwd:  1.5rc5 has been posted"</a>
<li><strong>Reply:</strong> <a href="8433.php">Larry Baker: "[OMPI devel] Fwd:  Fwd:  1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My head hurts from working on this!  I just realized &lt;omp.h&gt; is for  
<br>
OpenMP, not OpenMPI.  So, of course the PGI &lt;omp.h&gt; is used.  I still  
<br>
don't know why otfprofile is failing, but at least that explains why  
<br>
OpenMPI-1.5rc5 has no &lt;mpi.h&gt;.
<br>
<p>Sorry for the noise.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Larry Baker &lt;baker_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: August 31, 2010 10:04:35 AM PDT
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] 1.5rc5 has been posted
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The make of OpenMPI 1.5rc5 fails for PGI 10.3 in otfprofile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in otfprofile
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Entering directory `/usr/local/src/openmpi-1.5rc5/ompi/ 
</span><br>
<span class="quotelev2">&gt;&gt; contrib/vt/vt/extlib/otf/tools/otfprofile'
</span><br>
<span class="quotelev2">&gt;&gt;  CXX    otfprofile-otfprofile.o
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 41: error: expected an
</span><br>
<span class="quotelev2">&gt;&gt;          identifier
</span><br>
<span class="quotelev2">&gt;&gt;  extern int omp_get_thread_num(void);
</span><br>
<span class="quotelev2">&gt;&gt;             ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 43: error: expected an
</span><br>
<span class="quotelev2">&gt;&gt;          identifier
</span><br>
<span class="quotelev2">&gt;&gt;  extern int omp_get_num_threads(void);
</span><br>
<span class="quotelev2">&gt;&gt;             ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2 errors detected in the compilation of &quot;otfprofile.cpp&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The errors are coming from an &lt;omp.h&gt; file that comes with the PGI  
</span><br>
<span class="quotelev1">&gt; compiler.  I would think OpenMPI would use its own.  The problem is,  
</span><br>
<span class="quotelev1">&gt; there isn't one (yet?):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_hydra otfprofile]# find /usr/local/src/openmpi-1.5rc5 -name  
</span><br>
<span class="quotelev2">&gt;&gt; omp.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The C++ file that is using the PGI &lt;omp.h&gt; file is  ompi/contrib/vt/ 
</span><br>
<span class="quotelev1">&gt; vt/extlib/otf/tools/otfprofile/otfprofile.cpp:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_hydra otfprofile]# cd ompi/contrib/vt/vt/extlib/otf/tools/ 
</span><br>
<span class="quotelev2">&gt;&gt; otfprofile
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_hydra otfprofile]# grep omp.h *.cpp
</span><br>
<span class="quotelev2">&gt;&gt; otfprofile.cpp:#	include &lt;omp.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran the compile from make -n to verify that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_hydra otfprofile]# pgcpp -m64 -DHAVE_CONFIG_H -I. -I../.. - 
</span><br>
<span class="quotelev2">&gt;&gt; I../../otflib -I../../otflib  -DINSIDE_OPENMPI  -D_REENTRANT -mp -g  
</span><br>
<span class="quotelev2">&gt;&gt; -O3 -tp amd64 -DNO_PGI_OFFSET -c -o otfprofile-otfprofile.o `test - 
</span><br>
<span class="quotelev2">&gt;&gt; f 'otfprofile.cpp' || echo './'`otfprofile.cpp
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 41: error: expected an
</span><br>
<span class="quotelev2">&gt;&gt;          identifier
</span><br>
<span class="quotelev2">&gt;&gt;  extern int omp_get_thread_num(void);
</span><br>
<span class="quotelev2">&gt;&gt;             ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 43: error: expected an
</span><br>
<span class="quotelev2">&gt;&gt;          identifier
</span><br>
<span class="quotelev2">&gt;&gt;  extern int omp_get_num_threads(void);
</span><br>
<span class="quotelev2">&gt;&gt;             ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2 errors detected in the compilation of &quot;otfprofile.cpp&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how to fix this.  Where is otfprofile.cpp expecting to  
</span><br>
<span class="quotelev1">&gt; get &lt;omp.h&gt;?  Why isn't it there?  I'm beginning to think this  
</span><br>
<span class="quotelev1">&gt; contrib/vt stuff should not be enabled by default.  I don't know  
</span><br>
<span class="quotelev1">&gt; that it is needed in general.
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
<span class="quotelev2">&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But we posted rc5 anyway (there's a bunch of stuff that has been  
</span><br>
<span class="quotelev2">&gt;&gt; pending for a while that is now in).  Please test!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8432/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8433.php">Larry Baker: "[OMPI devel] Fwd:  Fwd:  1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8431.php">ananda.mudar_at_[hidden]: "[OMPI devel] Possible memory leak"</a>
<li><strong>In reply to:</strong> <a href="8423.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8433.php">Larry Baker: "[OMPI devel] Fwd:  Fwd:  1.5rc5 has been posted"</a>
<li><strong>Reply:</strong> <a href="8433.php">Larry Baker: "[OMPI devel] Fwd:  Fwd:  1.5rc5 has been posted"</a>
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
