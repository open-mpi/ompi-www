<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 09:26:47 2011" -->
<!-- isoreceived="20110518132647" -->
<!-- sent="Wed, 18 May 2011 09:17:42 -0400" -->
<!-- isosent="20110518131742" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="E5BAE844-35BB-41F2-BCDA-2FD7423542DB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="63F502CF-66DD-4993-9922-A2E61765F177_at_usgs.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-18 09:17:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9262.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9259.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9265.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Reply:</strong> <a href="9265.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  This sounds right, but I'm a little curious as to why this never came up before.  What was the specific problem that caused you to add this patch?
<br>
<p><p>On May 17, 2011, at 9:41 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; This bug applies to OpenMPI 1.4.x and 1.5.x.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Inline assembly does not work for PGI compilers.  configure disables inline assembly for PGI C, but neglects to do the same for PGI C++.  The code that disables inline assembly for PGI C needs to be copied to the section that handles inline assembly for C++.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the diff -u from OpenMPI 1.4.3 (same code, same bug):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_hydra openmpi-1.4.3]# diff -u configure{.original,}
</span><br>
<span class="quotelev2">&gt;&gt; --- configure.original	2010-10-05 15:48:18.000000000 -0700
</span><br>
<span class="quotelev2">&gt;&gt; +++ configure	2011-05-17 18:35:04.000000000 -0700
</span><br>
<span class="quotelev2">&gt;&gt; @@ -34690,6 +34690,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;      { $as_echo &quot;$as_me:$LINENO: checking if $CXX supports GCC inline assembly&quot; &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt;  $as_echo_n &quot;checking if $CXX supports GCC inline assembly... &quot; &gt;&amp;6; }
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; +    if test &quot;$ompi_cv_cxx_compiler_vendor&quot; = &quot;portland group&quot; ; then
</span><br>
<span class="quotelev2">&gt;&gt; +        # PGI seems to have some issues with our inline assembly.
</span><br>
<span class="quotelev2">&gt;&gt; +        # Disable for now.
</span><br>
<span class="quotelev2">&gt;&gt; +        asm_result=&quot;no (Portland Group)&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +    else
</span><br>
<span class="quotelev2">&gt;&gt;      case $host in
</span><br>
<span class="quotelev2">&gt;&gt;          *-aix*)
</span><br>
<span class="quotelev2">&gt;&gt;              # the AIX compilers and linkers really don't do gcc
</span><br>
<span class="quotelev2">&gt;&gt; @@ -34813,6 +34818,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  rm -f core conftest.err conftest.$ac_objext conftest_ipa8_conftest.oo \
</span><br>
<span class="quotelev2">&gt;&gt;        conftest$ac_exeext conftest.$ac_ext
</span><br>
<span class="quotelev2">&gt;&gt;      fi
</span><br>
<span class="quotelev2">&gt;&gt; +    fi
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;      { $as_echo &quot;$as_me:$LINENO: result: $asm_result&quot; &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt;  $as_echo &quot;$asm_result&quot; &gt;&amp;6; }
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
<span class="quotelev1">&gt; On 5 May 2011, at 7:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fixed the ROMIO attribute problem properly this time -- it's in the usual place:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9262.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9259.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9265.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Reply:</strong> <a href="9265.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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
