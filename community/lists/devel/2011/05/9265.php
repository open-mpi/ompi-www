<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 14:55:44 2011" -->
<!-- isoreceived="20110518185544" -->
<!-- sent="Wed, 18 May 2011 11:55:38 -0700" -->
<!-- isosent="20110518185538" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="A9DBD458-A33C-4A79-90D1-24D4CD7C53C7_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E5BAE844-35BB-41F2-BCDA-2FD7423542DB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.4rc2 is up<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-18 14:55:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9266.php">Larry Baker: "[OMPI devel] SSE instructions?"</a>
<li><strong>Previous message:</strong> <a href="9264.php">Samuel K. Gutierrez: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9267.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p><span class="quotelev1">&gt; Hmm.  This sounds right, but I'm a little curious as to why this  
</span><br>
<span class="quotelev1">&gt; never came up before.
</span><br>
<p>I reported this, as well as several others, in August 2010, &quot;Fixes to  
<br>
OpenMPI-1.4.2 for PGI compilers&quot;.  (Attached are my patches for  
<br>
OpenMPI 1.4.2.)  At that time I was using the PGI 10.x compilers.
<br>
<p><span class="quotelev1">&gt; What was the specific problem that caused you to add this patch?
</span><br>
<p><p>These warning messages are from PGI C++ 11.4 for the assembly language  
<br>
macros in OpenMPI 1.4.3 opal/include/opal/sys/amd64/atomic.h:
<br>
<p><span class="quotelev1">&gt; libtool: compile:  pgcpp -m64 -DHAVE_CONFIG_H -I. -I../../../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../orte/include -I../../../ompi/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; opal/mca/paffinity/linux/plpa/src/libplpa - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 -DOMPI_SKIP_MPICXX=1 -I../../
</span><br>
<span class="quotelev1">&gt; .. -D_REENTRANT -DNDEBUG -g -O3 -DNO_PGI_OFFSET -c mpicxx.cc  -fpic - 
</span><br>
<span class="quotelev1">&gt; DPIC -o .libs/mpicxx.o
</span><br>
<span class="quotelev1">&gt; &quot;../../../opal/include/opal/sys/amd64/atomic.h&quot;, line 91: warning:  
</span><br>
<span class="quotelev1">&gt; &quot;cc&quot;
</span><br>
<span class="quotelev1">&gt;           clobber ignored
</span><br>
<span class="quotelev1">&gt;                          : &quot;memory&quot;, &quot;cc&quot;);
</span><br>
<span class="quotelev1">&gt;                                      ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;../../../opal/include/opal/sys/amd64/atomic.h&quot;, line 83: warning:  
</span><br>
<span class="quotelev1">&gt; parameter
</span><br>
<span class="quotelev1">&gt;           &quot;oldval&quot; was set but never used
</span><br>
<span class="quotelev1">&gt;                                           int32_t oldval, int32_t  
</span><br>
<span class="quotelev1">&gt; newval)
</span><br>
<span class="quotelev1">&gt;                                                   ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;../../../opal/include/opal/sys/amd64/atomic.h&quot;, line 112: warning:  
</span><br>
<span class="quotelev1">&gt; &quot;cc&quot;
</span><br>
<span class="quotelev1">&gt;           clobber ignored
</span><br>
<span class="quotelev1">&gt;                          : &quot;memory&quot;, &quot;cc&quot;
</span><br>
<span class="quotelev1">&gt;                                      ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;../../../opal/include/opal/sys/amd64/atomic.h&quot;, line 104: warning:  
</span><br>
<span class="quotelev1">&gt; parameter
</span><br>
<span class="quotelev1">&gt;           &quot;oldval&quot; was set but never used
</span><br>
<span class="quotelev1">&gt;                                            int64_t oldval, int64_t  
</span><br>
<span class="quotelev1">&gt; newval)
</span><br>
<span class="quotelev1">&gt;                                                    ^
</span><br>
<p>configure defines OMPI_CXX_GCC_INLINE_ASSEMBLY as 1 in opal/include/ 
<br>
opal_config.h (unlike OMPI_C_GCC_INLINE_ASSEMBLY, which is defined as  
<br>
0), which causes the assembly language macros to be used:
<br>
<p><span class="quotelev1">&gt; # find . -name \*.h -exec grep \#define.\*OMPI_.\*_INLINE_ASSEMBLY  
</span><br>
<span class="quotelev1">&gt; {} ';' -print
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_C_DEC_INLINE_ASSEMBLY 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_C_GCC_INLINE_ASSEMBLY 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_C_XLC_INLINE_ASSEMBLY 0
</span><br>
<span class="quotelev1">&gt; ./opal/include/opal_config.h
</span><br>
<p><p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 18 May 2011, at 6:17 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Hmm.  This sounds right, but I'm a little curious as to why this  
</span><br>
<span class="quotelev1">&gt; never came up before.  What was the specific problem that caused you  
</span><br>
<span class="quotelev1">&gt; to add this patch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 17, 2011, at 9:41 PM, Larry Baker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This bug applies to OpenMPI 1.4.x and 1.5.x.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Inline assembly does not work for PGI compilers.  configure  
</span><br>
<span class="quotelev2">&gt;&gt; disables inline assembly for PGI C, but neglects to do the same for  
</span><br>
<span class="quotelev2">&gt;&gt; PGI C++.  The code that disables inline assembly for PGI C needs to  
</span><br>
<span class="quotelev2">&gt;&gt; be copied to the section that handles inline assembly for C++.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the diff -u from OpenMPI 1.4.3 (same code, same bug):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# diff -u configure{.original,}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- configure.original	2010-10-05 15:48:18.000000000 -0700
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ configure	2011-05-17 18:35:04.000000000 -0700
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -34690,6 +34690,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     { $as_echo &quot;$as_me:$LINENO: checking if $CXX supports GCC  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inline assembly&quot; &gt;&amp;5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $as_echo_n &quot;checking if $CXX supports GCC inline assembly... &quot;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;&amp;6; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if test &quot;$ompi_cv_cxx_compiler_vendor&quot; = &quot;portland group&quot; ;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        # PGI seems to have some issues with our inline assembly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        # Disable for now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        asm_result=&quot;no (Portland Group)&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     case $host in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *-aix*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             # the AIX compilers and linkers really don't do gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -34813,6 +34818,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rm -f core conftest.err conftest.$ac_objext  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest_ipa8_conftest.oo \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       conftest$ac_exeext conftest.$ac_ext
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     { $as_echo &quot;$as_me:$LINENO: result: $asm_result&quot; &gt;&amp;5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $as_echo &quot;$asm_result&quot; &gt;&amp;6; }
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
<span class="quotelev2">&gt;&gt; On 5 May 2011, at 7:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fixed the ROMIO attribute problem properly this time -- it's in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the usual place:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
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
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9265/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9265/patch-openmpi-1.4.2.sh">patch-openmpi-1.4.2.sh</a>
</ul>
<!-- attachment="patch-openmpi-1.4.2.sh" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9265/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9266.php">Larry Baker: "[OMPI devel] SSE instructions?"</a>
<li><strong>Previous message:</strong> <a href="9264.php">Samuel K. Gutierrez: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9267.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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
