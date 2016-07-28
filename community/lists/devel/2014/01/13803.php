<?
$subject_val = "[OMPI devel] Compiler family probe broken [w/ patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 21:38:34 2014" -->
<!-- isoreceived="20140118023834" -->
<!-- sent="Fri, 17 Jan 2014 18:38:33 -0800" -->
<!-- isosent="20140118023833" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Compiler family probe broken [w/ patch]" -->
<!-- id="CAAvDA16HAQd_EzON9xepxGYN0yaJ6wdGdB+A=rdp3uYUG1tSbQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Compiler family probe broken [w/ patch]<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 21:38:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13804.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: build failure on mips32"</a>
<li><strong>Previous message:</strong> <a href="13802.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: Fortran + XLF = broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13805.php">Ralph Castain: "Re: [OMPI devel] Compiler family probe broken [w/ patch]"</a>
<li><strong>Reply:</strong> <a href="13805.php">Ralph Castain: "Re: [OMPI devel] Compiler family probe broken [w/ patch]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just noticed that I get unknown compiler family in all my builds:
<br>
<p>checking for compiler familyid... 0
<br>
checking for compiler familyname... UNKNOWN
<br>
<p>The following in config.log shows why:
<br>
<p>configure:27774: checking for compiler familyid
<br>
configure:27804: xlc -o conftest -q64 -g
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc64-xlc-12.1/openmpi-1.7.4rc2r30303/ompi/include
<br>
&nbsp;&nbsp;conftest.c  &gt;&amp;5
<br>
&quot;conftest.c&quot;, line 190.10: 1506-296 (S) #include file
<br>
&quot;mpi_portable_platform.h&quot; not found.
<br>
&quot;conftest.c&quot;, line 197.23: 1506-045 (S) Undeclared identifier
<br>
PLATFORM_COMPILER_FAMILYID.
<br>
configure:27804: $? = 1
<br>
configure: program exited with status 1
<br>
<p>Meanwhile:
<br>
<p>$ tar tvfj openmpi-1.7.4rc2r30303.tar.bz2 | grep portable_platform
<br>
-rw-r--r-- mpiteam/projects   16055 2014-01-17 02:33
<br>
openmpi-1.7.4rc2r30303/opal/include/opal/opal_portable_platform.h
<br>
<p><p>So, it appears the probe for compiler family didn't keep up with the change
<br>
in name and location of the portable_platform header (r29618).
<br>
<p>Inspection of my tests on both v1.7 and trunk seems to show the same issue
<br>
in both.
<br>
<p>The attached patch is an untested shot at fixing the problem.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13803/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13803/family-probe.patch">family-probe.patch</a>
</ul>
<!-- attachment="family-probe.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13804.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: build failure on mips32"</a>
<li><strong>Previous message:</strong> <a href="13802.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: Fortran + XLF = broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13805.php">Ralph Castain: "Re: [OMPI devel] Compiler family probe broken [w/ patch]"</a>
<li><strong>Reply:</strong> <a href="13805.php">Ralph Castain: "Re: [OMPI devel] Compiler family probe broken [w/ patch]"</a>
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
