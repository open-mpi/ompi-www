<?
$subject_val = "Re: [OMPI devel] Compiler family probe broken [w/ patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 22:17:47 2014" -->
<!-- isoreceived="20140118031747" -->
<!-- sent="Fri, 17 Jan 2014 19:17:38 -0800" -->
<!-- isosent="20140118031738" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compiler family probe broken [w/ patch]" -->
<!-- id="0AACB853-DCFF-4BE2-BA9B-EADE54A26426_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16HAQd_EzON9xepxGYN0yaJ6wdGdB+A=rdp3uYUG1tSbQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compiler family probe broken [w/ patch]<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 22:17:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13806.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32"</a>
<li><strong>Previous message:</strong> <a href="13804.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: build failure on mips32"</a>
<li><strong>In reply to:</strong> <a href="13803.php">Paul Hargrove: "[OMPI devel] Compiler family probe broken [w/ patch]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ouch - will fix. Thanks Paul!
<br>
<p>On Jan 17, 2014, at 6:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I just noticed that I get unknown compiler family in all my builds:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking for compiler familyid... 0
</span><br>
<span class="quotelev1">&gt; checking for compiler familyname... UNKNOWN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following in config.log shows why:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:27774: checking for compiler familyid
</span><br>
<span class="quotelev1">&gt; configure:27804: xlc -o conftest -q64 -g -I/home/hargrove/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc64-xlc-12.1/openmpi-1.7.4rc2r30303/ompi/include   conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; &quot;conftest.c&quot;, line 190.10: 1506-296 (S) #include file &quot;mpi_portable_platform.h&quot; not found.
</span><br>
<span class="quotelev1">&gt; &quot;conftest.c&quot;, line 197.23: 1506-045 (S) Undeclared identifier PLATFORM_COMPILER_FAMILYID.
</span><br>
<span class="quotelev1">&gt; configure:27804: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: program exited with status 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meanwhile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ tar tvfj openmpi-1.7.4rc2r30303.tar.bz2 | grep portable_platform
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- mpiteam/projects   16055 2014-01-17 02:33 openmpi-1.7.4rc2r30303/opal/include/opal/opal_portable_platform.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, it appears the probe for compiler family didn't keep up with the change in name and location of the portable_platform header (r29618).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Inspection of my tests on both v1.7 and trunk seems to show the same issue in both.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch is an untested shot at fixing the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &lt;family-probe.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13805/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13806.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32"</a>
<li><strong>Previous message:</strong> <a href="13804.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: build failure on mips32"</a>
<li><strong>In reply to:</strong> <a href="13803.php">Paul Hargrove: "[OMPI devel] Compiler family probe broken [w/ patch]"</a>
<!-- nextthread="start" -->
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
