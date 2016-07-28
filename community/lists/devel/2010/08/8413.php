<?
$subject_val = "[OMPI devel] 1.5rc5 build failure with pathcc-3.2 [with patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 19:42:42 2010" -->
<!-- isoreceived="20100827234242" -->
<!-- sent="Fri, 27 Aug 2010 16:42:12 -0700" -->
<!-- isosent="20100827234212" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5rc5 build failure with pathcc-3.2 [with patch]" -->
<!-- id="4C784D54.9030303_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5rc5 build failure with pathcc-3.2 [with patch]<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 19:42:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8414.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Previous message:</strong> <a href="8412.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The one line change below fixes a problem with the portable_platform 
<br>
header with respect to PathScale compilers that lack a patchlevel.  For 
<br>
instance, the 3.2 version I have defines __PATHCC_PATCHLEVEL__ to be empty.
<br>
<p>I am the maintainer of GASNet's portable_platform.h from which Open 
<br>
MPI's equivalent is derived.  So consider this fix as coming from 
<br>
&quot;upstream&quot;.
<br>
<p>-Paul
<br>
<p>--- openmpi-1.5rc5/ompi/include/mpi_portable_platform.h.in.orig 
<br>
2010-08-27 16:37:09.000000000 -0700
<br>
+++ openmpi-1.5rc5/ompi/include/mpi_portable_platform.h.in      
<br>
2010-08-27 16:38:28.000000000 -0700
<br>
@@ -110,7 +110,7 @@
<br>
&nbsp;#        define PLATFORM_COMPILER_PATHSCALE_C  1
<br>
&nbsp;#    endif
<br>
&nbsp;#    define PLATFORM_COMPILER_VERSION \
<br>
-         
<br>
PLATFORM_COMPILER_VERSION_INT(__PATHCC__,__PATHCC_MINOR__,__PATHCC_PATCHLEVEL__)
<br>
+         
<br>
PLATFORM_COMPILER_VERSION_INT(__PATHCC__,__PATHCC_MINOR__,__PATHCC_PATCHLEVEL__+0)
<br>
&nbsp;#    define PLATFORM_COMPILER_VERSION_STR __PATHSCALE__
<br>
&nbsp;
<br>
&nbsp;#elif defined(__PGI)
<br>
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
<li><strong>Next message:</strong> <a href="8414.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Previous message:</strong> <a href="8412.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
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
