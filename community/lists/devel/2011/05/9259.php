<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 17 21:41:19 2011" -->
<!-- isoreceived="20110518014119" -->
<!-- sent="Tue, 17 May 2011 18:41:14 -0700" -->
<!-- isosent="20110518014114" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="63F502CF-66DD-4993-9922-A2E61765F177_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CB6264CC-7C21-486E-9FF9-C0C6E8159B17_at_cisco.com" -->
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
<strong>Date:</strong> 2011-05-17 21:41:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9258.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9249.php">Jeff Squyres: "[OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Reply:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This bug applies to OpenMPI 1.4.x and 1.5.x.
<br>
<p>Inline assembly does not work for PGI compilers.  configure disables  
<br>
inline assembly for PGI C, but neglects to do the same for PGI C++.   
<br>
The code that disables inline assembly for PGI C needs to be copied to  
<br>
the section that handles inline assembly for C++.
<br>
<p>Here's the diff -u from OpenMPI 1.4.3 (same code, same bug):
<br>
<p><span class="quotelev1">&gt; [root_at_hydra openmpi-1.4.3]# diff -u configure{.original,}
</span><br>
<span class="quotelev1">&gt; --- configure.original	2010-10-05 15:48:18.000000000 -0700
</span><br>
<span class="quotelev1">&gt; +++ configure	2011-05-17 18:35:04.000000000 -0700
</span><br>
<span class="quotelev1">&gt; @@ -34690,6 +34690,11 @@
</span><br>
<span class="quotelev1">&gt;      { $as_echo &quot;$as_me:$LINENO: checking if $CXX supports GCC  
</span><br>
<span class="quotelev1">&gt; inline assembly&quot; &gt;&amp;5
</span><br>
<span class="quotelev1">&gt;  $as_echo_n &quot;checking if $CXX supports GCC inline assembly... &quot; &gt;&amp;6; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    if test &quot;$ompi_cv_cxx_compiler_vendor&quot; = &quot;portland group&quot; ; then
</span><br>
<span class="quotelev1">&gt; +        # PGI seems to have some issues with our inline assembly.
</span><br>
<span class="quotelev1">&gt; +        # Disable for now.
</span><br>
<span class="quotelev1">&gt; +        asm_result=&quot;no (Portland Group)&quot;
</span><br>
<span class="quotelev1">&gt; +    else
</span><br>
<span class="quotelev1">&gt;      case $host in
</span><br>
<span class="quotelev1">&gt;          *-aix*)
</span><br>
<span class="quotelev1">&gt;              # the AIX compilers and linkers really don't do gcc
</span><br>
<span class="quotelev1">&gt; @@ -34813,6 +34818,7 @@
</span><br>
<span class="quotelev1">&gt;  rm -f core conftest.err conftest.$ac_objext  
</span><br>
<span class="quotelev1">&gt; conftest_ipa8_conftest.oo \
</span><br>
<span class="quotelev1">&gt;        conftest$ac_exeext conftest.$ac_ext
</span><br>
<span class="quotelev1">&gt;      fi
</span><br>
<span class="quotelev1">&gt; +    fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      { $as_echo &quot;$as_me:$LINENO: result: $asm_result&quot; &gt;&amp;5
</span><br>
<span class="quotelev1">&gt;  $as_echo &quot;$asm_result&quot; &gt;&amp;6; }
</span><br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 5 May 2011, at 7:15 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Fixed the ROMIO attribute problem properly this time -- it's in the  
</span><br>
<span class="quotelev1">&gt; usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9259/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9258.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9249.php">Jeff Squyres: "[OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Reply:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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
