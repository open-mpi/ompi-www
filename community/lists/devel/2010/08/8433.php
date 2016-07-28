<?
$subject_val = "[OMPI devel] Fwd:  Fwd:  1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 23:05:32 2010" -->
<!-- isoreceived="20100901030532" -->
<!-- sent="Tue, 31 Aug 2010 20:05:26 -0700" -->
<!-- isosent="20100901030526" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd:  Fwd:  1.5rc5 has been posted" -->
<!-- id="37E10C77-481E-4855-9243-71DF476D4080_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6D609BCD-E17F-428C-AAB6-62086F159C18_at_usgs.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd:  Fwd:  1.5rc5 has been posted<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-31 23:05:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8434.php">Sylvain Jeaugey: "Re: [OMPI devel] Possible memory leak"</a>
<li><strong>Previous message:</strong> <a href="8432.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8432.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8441.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found the bug in otfprofile.
<br>
<p>When ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp is  
<br>
compiled with the PGI C++ compiler, two &quot;expected an identifier&quot;  
<br>
errors occur:
<br>
<p><span class="quotelev1">&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 41: error: expected an
</span><br>
<span class="quotelev1">&gt;          identifier
</span><br>
<span class="quotelev1">&gt;  extern int omp_get_thread_num(void);
</span><br>
<span class="quotelev1">&gt;             ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 43: error: expected an
</span><br>
<span class="quotelev1">&gt;          identifier
</span><br>
<span class="quotelev1">&gt;  extern int omp_get_num_threads(void);
</span><br>
<p><p>I saved the preprocessor output for otfprofile.cpp.  The code in /opt/ 
<br>
pgi/linux86-64/10.3/include/omp.h:
<br>
<p><span class="quotelev1">&gt; #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot; {
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; extern void omp_set_num_threads(int n);
</span><br>
<span class="quotelev1">&gt; extern int omp_get_thread_num(void);
</span><br>
<span class="quotelev1">&gt; extern int omp_get_num_procs(void);
</span><br>
<span class="quotelev1">&gt; extern int omp_get_num_threads(void);
</span><br>
<span class="quotelev1">&gt; extern int omp_get_max_threads(void);
</span><br>
<p>expands to:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; extern void omp_set_num_threads(int n);
</span><br>
<span class="quotelev1">&gt; extern int 0;
</span><br>
<span class="quotelev1">&gt; extern int omp_get_num_procs(void);
</span><br>
<span class="quotelev1">&gt; extern int 1;
</span><br>
<span class="quotelev1">&gt; extern int omp_get_max_threads(void);
</span><br>
<p>It is easy to see why the compiler issued the error.  The root of the  
<br>
problem is the definition of the OpenMP function proxys when the PGI  
<br>
compiler is used:
<br>
<p><span class="quotelev1">&gt; /* Disable OpenMP if the PGI compiler is used to work around the  
</span><br>
<span class="quotelev1">&gt; following errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compiler version  compiler error
</span><br>
<span class="quotelev1">&gt; &lt; 9.0-3           PGCC-S-0000-Internal compiler error.  
</span><br>
<span class="quotelev1">&gt; calc_dw_tag:no tag
</span><br>
<span class="quotelev1">&gt; (see Technical Problem Report 4337 at <a href="http://www.pgroup.com/support/release_tprs_90.htm">http://www.pgroup.com/support/release_tprs_90.htm</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 10.1 - 10.6       this kind of pragma may not be used here
</span><br>
<span class="quotelev1">&gt;                   #pargma omp barrier
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; #if defined(_OPENMP) &amp;&amp; defined(__PGI)
</span><br>
<span class="quotelev1">&gt; #       undef _OPENMP
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef _OPENMP
</span><br>
<span class="quotelev1">&gt; #       include &lt;omp.h&gt;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #       define omp_get_thread_num() 0
</span><br>
<span class="quotelev1">&gt; #       define omp_get_num_threads() 1
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<p>Later in otfprofile.cpp, the #include &quot;Summary.h&quot; eventually causes / 
<br>
opt/pgi/linux86-64/10.3/include/omp.h to be included, which leads to  
<br>
the syntax error.
<br>
<p>This is not the way to enable/disable OpenMP.  _OPENMP is  
<br>
informational only.  In fact, the PGI C++ compiler does not use  
<br>
_OPENMP internally to control whether &lt;omp.h&gt; is included, which is  
<br>
why #undef _OPENMP is ineffective.  The proper way to deal with this  
<br>
is using configure/libtool.  I changed the code to ignore the __PGI  
<br>
macro:
<br>
<p><span class="quotelev1">&gt; /* Disable OpenMP if the PGI compiler is used to work around the  
</span><br>
<span class="quotelev1">&gt; following errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compiler version  compiler error
</span><br>
<span class="quotelev1">&gt; &lt; 9.0-3           PGCC-S-0000-Internal compiler error.  
</span><br>
<span class="quotelev1">&gt; calc_dw_tag:no tag
</span><br>
<span class="quotelev1">&gt; (see Technical Problem Report 4337 at <a href="http://www.pgroup.com/support/release_tprs_90.htm">http://www.pgroup.com/support/release_tprs_90.htm</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef _OPENMP
</span><br>
<span class="quotelev1">&gt; #       include &lt;omp.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<p>The code compiles fine for PGI C++ 10.3.  I believe the comment about  
<br>
10.1-10.6 not working is possibly due to the (previously reported)  
<br>
mistaken identification of the 10.x compilers by configure/libtool,  
<br>
which I fixed.
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
<span class="quotelev1">&gt; Date: August 31, 2010 5:21:13 PM PDT
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Fwd:  1.5rc5 has been posted
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My head hurts from working on this!  I just realized &lt;omp.h&gt; is for  
</span><br>
<span class="quotelev1">&gt; OpenMP, not OpenMPI.  So, of course the PGI &lt;omp.h&gt; is used.  I  
</span><br>
<span class="quotelev1">&gt; still don't know why otfprofile is failing, but at least that  
</span><br>
<span class="quotelev1">&gt; explains why OpenMPI-1.5rc5 has no &lt;mpi.h&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the noise.
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
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Larry Baker &lt;baker_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: August 31, 2010 10:04:35 AM PDT
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] 1.5rc5 has been posted
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The make of OpenMPI 1.5rc5 fails for PGI 10.3 in otfprofile:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in otfprofile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[9]: Entering directory `/usr/local/src/openmpi-1.5rc5/ompi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contrib/vt/vt/extlib/otf/tools/otfprofile'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CXX    otfprofile-otfprofile.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 41: error: expected  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          identifier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  extern int omp_get_thread_num(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 43: error: expected  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          identifier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  extern int omp_get_num_threads(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 errors detected in the compilation of &quot;otfprofile.cpp&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The errors are coming from an &lt;omp.h&gt; file that comes with the PGI  
</span><br>
<span class="quotelev2">&gt;&gt; compiler.  I would think OpenMPI would use its own.  The problem  
</span><br>
<span class="quotelev2">&gt;&gt; is, there isn't one (yet?):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_hydra otfprofile]# find /usr/local/src/openmpi-1.5rc5 -name  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; omp.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The C++ file that is using the PGI &lt;omp.h&gt; file is  ompi/contrib/vt/ 
</span><br>
<span class="quotelev2">&gt;&gt; vt/extlib/otf/tools/otfprofile/otfprofile.cpp:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_hydra otfprofile]# cd ompi/contrib/vt/vt/extlib/otf/tools/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; otfprofile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_hydra otfprofile]# grep omp.h *.cpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; otfprofile.cpp:#	include &lt;omp.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran the compile from make -n to verify that:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_hydra otfprofile]# pgcpp -m64 -DHAVE_CONFIG_H -I. -I../.. - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I../../otflib -I../../otflib  -DINSIDE_OPENMPI  -D_REENTRANT -mp - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; g -O3 -tp amd64 -DNO_PGI_OFFSET -c -o otfprofile-otfprofile.o  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `test -f 'otfprofile.cpp' || echo './'`otfprofile.cpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 41: error: expected  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          identifier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  extern int omp_get_thread_num(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/opt/pgi/linux86-64/10.3/include/omp.h&quot;, line 43: error: expected  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          identifier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  extern int omp_get_num_threads(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 errors detected in the compilation of &quot;otfprofile.cpp&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know how to fix this.  Where is otfprofile.cpp expecting to  
</span><br>
<span class="quotelev2">&gt;&gt; get &lt;omp.h&gt;?  Why isn't it there?  I'm beginning to think this  
</span><br>
<span class="quotelev2">&gt;&gt; contrib/vt stuff should not be enabled by default.  I don't know  
</span><br>
<span class="quotelev2">&gt;&gt; that it is needed in general.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev2">&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 17, 2010, at 2:18 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We still have one known possible regression:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But we posted rc5 anyway (there's a bunch of stuff that has been  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pending for a while that is now in).  Please test!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8433/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8434.php">Sylvain Jeaugey: "Re: [OMPI devel] Possible memory leak"</a>
<li><strong>Previous message:</strong> <a href="8432.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8432.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8441.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
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
